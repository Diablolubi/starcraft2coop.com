#!/usr/bin/env python3
"""Compare site data rows with names exported from the local SC2 zh-CN client.

The exported client files stay in an ignored local directory. This command emits
only review evidence (English key, current site value, official value and source
file), so no proprietary game data enters Git history.
"""

from __future__ import annotations

import argparse
import json
import re
from pathlib import Path
from typing import Iterable


def _token(value: str) -> str:
    return re.sub(r"[^a-z0-9]", "", value.lower())


def compare_named_rows(rows: Iterable[dict], official: dict[str, str]) -> dict:
    result = {"match": [], "mismatch": [], "unresolved": []}
    for row in rows:
        english = str(row.get("english", ""))
        current = str(row.get("current", ""))
        expected = official.get(english)
        evidence = {**row, "official": expected}
        if not expected:
            result["unresolved"].append(evidence)
        elif expected == current:
            result["match"].append(evidence)
        else:
            result["mismatch"].append(evidence)
    return result


def _read_key_values(root: Path) -> tuple[dict[str, str], dict[str, str]]:
    mutators: dict[str, str] = {}
    maps: dict[str, str] = {}
    for path in sorted(root.rglob("*.txt")):
        if path.name.lower() != "gamestrings.txt":
            continue
        for raw in path.read_text(encoding="utf-8", errors="replace").splitlines():
            if "=" not in raw:
                continue
            key, value = raw.split("=", 1)
            value = value.split(" ///", 1)[0].strip()
            if key.startswith("UserData/Mutators/") and key.endswith("_Name"):
                mutators[key.rsplit("/", 1)[-1][:-5]] = value
            elif key.startswith("Map/Name/"):
                maps[key.rsplit("/", 1)[-1]] = value
    return mutators, maps


def _named_rows(root: Path, repo_root: Path) -> list[dict]:
    mutators, maps = _read_key_values(root)
    rows: list[dict] = []
    mutator_ids = {
        "Aggressive Deployment": "DropPods", "Alien Incubation": "SpawnBroodlings",
        "Black Death": "Plague", "Chaos Studios": "CycleRandom", "Darkness": "BlackFog",
        "Diffusion": "DamageBounce", "Double Edged": "DamageReflect", "Eminent Domain": "StructureSteal",
        "Evasive Maneuvers": "SideStep", "Fatal Attraction": "DeathPull", "Gift Exchange": "GiftFight",
        "Going Nuclear": "Nukes", "Lucky Envelopes": "RedEnvelopes", "Micro Transactions": "OrderCosts",
        "Mineral Shields": "Entomb", "Missile Command": "MissileBarrage",
        "Minesweeper": "SpiderMines",
        "Mutually Assured Destruction": "HybridNuke", "Naughty List": "KillKarma",
        "Outbreak": "InfestedTerranSpawner", "Power Overwhelming": "OopsAllCasters",
        "Propagators": "Propagate", "Scorched Earth": "FireFight", "Self Destruction": "DeathAOE",
        "Sharing is Caring": "SharedSupply", "Shortsighted": "ReducedVision", "Slim Pickings": "NoResources",
        "Transmutation": "Evolve", "Turkey Shoot": "FoodHunt", "Twister": "Tornadoes",
        "Void Reanimators": "Reanimators", "We Move Unseen": "AllEnemiesCloaked",
    }

    glossary = json.loads((repo_root / "translation" / "glossary.json").read_text(encoding="utf-8"))
    by_zh = {entry["zh-CN"]: entry for entry in glossary["mutators"]}
    mutator_path = repo_root / "source-data" / "mutators.json"
    for item in json.loads(mutator_path.read_text(encoding="utf-8")):
        current = item["mutatorname"]
        entry = by_zh.get(current)
        english = entry["en"] if entry else current
        key = mutator_ids.get(english) or next((key for key in mutators if _token(key) == _token(english)), "")
        rows.append({
            "kind": "mutator",
            "english": english,
            "current": current,
            "official": mutators.get(key, ""),
            "official_key": key,
            "source_file": "source-data/mutators.json",
        })

    mission_ids = {
        "Chain of Ascension": "AC_SlaynPayload",
        "Cradle of Death": "AC_CradleOfDeath",
        "Dead of Night": "AC_MeinhoffDayNight",
        "Lock & Load": "AC_UlnarLocks",
        "Malwarfare": "AC_CybrosEscort",
        "Miner Evacuation": "AC_JarbanPointCapture",
        "Mist Opportunities": "AC_BelshirEscort",
        "Oblivion Express": "AC_TarsonisTrain",
        "Part and Parcel": "AC_PartAndParcel",
        "Rifts to Korhal": "AC_KorhalRift",
        "Scythe of Amon": "AC_AiurSiege",
        "Temple of the Past": "AC_ShakurasTemple",
        "The Vermillion Problem": "AC_VeridiaCourier",
        "Void Launch": "AC_KaldirShuttle",
        "Void Thrashing": "AC_CharThrasher",
    }
    missions = json.loads((repo_root / "source-data" / "missionnames.json").read_text(encoding="utf-8"))
    by_zh = {entry["zh-CN"]: entry for entry in glossary["missions"]}
    for current in missions:
        entry = by_zh.get(current)
        if not entry:
            continue
        english = entry["en"]
        rows.append({
            "kind": "mission",
            "english": english,
            "current": current,
            "official": maps.get(mission_ids.get(english, ""), ""),
            "official_key": mission_ids.get(english, ""),
            "source_file": "source-data/missionnames.json",
        })
    return rows


def main(argv: list[str] | None = None) -> int:
    parser = argparse.ArgumentParser()
    parser.add_argument("--official-root", type=Path, required=True)
    parser.add_argument("--repo-root", type=Path, default=Path("."))
    parser.add_argument("--output", type=Path, required=True)
    args = parser.parse_args(argv)
    rows = _named_rows(args.official_root, args.repo_root)
    # Rows may carry an explicitly resolved official value; compare_named_rows
    # also supports the small fixture API used by the unit tests.
    official = {row["english"]: row["official"] for row in rows if row.get("official")}
    report = compare_named_rows(rows, official)
    report["summary"] = {key: len(value) for key, value in report.items() if isinstance(value, list)}
    args.output.parent.mkdir(parents=True, exist_ok=True)
    args.output.write_text(json.dumps(report, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
