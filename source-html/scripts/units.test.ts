import { expect, test } from "bun:test";

import { mergeUnitModifiers, parseUnitHash, unitToken, UnitStats } from "./units";
import type { Token } from "./units";

function upgradedUnit(
    commander: Token,
    unitToken: Token,
    modifierOverrides: {
        upgrades?: Record<string, boolean>,
        masteries?: Record<string, number>,
        prestiges?: Record<string, boolean>,
        upgradeLevels?: Partial<Record<"weapon" | "armor" | "shields" | "artifacts" | "rank", number>>,
    } = {},
) {
    const modifiers = UnitStats.modifiers(commander, unitToken);
    modifiers.upgrades = { ...modifiers.upgrades, ...modifierOverrides.upgrades };
    modifiers.masteries = { ...modifiers.masteries, ...modifierOverrides.masteries };
    modifiers.prestiges = { ...modifiers.prestiges, ...modifierOverrides.prestiges };
    modifiers.upgradeLevels = { ...modifiers.upgradeLevels, ...modifierOverrides.upgradeLevels };

    const baseUnit = UnitStats.getUnit(modifiers)!;
    return UnitStats.getUpgradedUnit(baseUnit, modifiers);
}

test("Abathur Mutalisk Sundering Glave doubles armored damage", () => {
    const mutalisk = upgradedUnit("abathur", "mutalisk", {
        upgrades: { "Sundering Glave": true },
    });
    expect(mutalisk.modes[""]!.attributedamage![""]!.damage).toBe(9);
    expect(mutalisk.modes[""]!.attributedamage!["Armored"]!.damage).toBe(18);
});

test("Crooked Sam has the expected base cooldown", () => {
    const sam = upgradedUnit("tychus", "crookedsam");
    expect(sam.modes[""]!.attackspeed).toBe(1.1);
});

test("Crooked Sam ITCE Triggers cooldown is 0.88", () => {
    const sam = upgradedUnit("tychus", "crookedsam", {
        upgrades: { "ITCE Triggers": true },
    });
    expect(sam.modes[""]!.attackspeed).toBeCloseTo(0.88);
});

test("Crooked Sam ITCE Triggers with 30 Tri Outlaw Improvement cooldown is 0.77", () => {
    const sam = upgradedUnit("tychus", "crookedsam", {
        upgrades: { "ITCE Triggers": true }, masteries: { "Tri Outlaw Improvement": 30 },
    });
    expect(sam.modes[""]!.attackspeed).toBeCloseTo(0.77);
});

test("Fenix Cybros Arbiter has the expected base cooldown", () => {
    const arbiter = upgradedUnit("fenix", "fenixcybrosarbiter");
    expect(arbiter.modes[""]!.attackspeed).toBe(1.5);
});

test("Fenix Cybros Arbiter with 30 Suit Attack Speed cooldown is 0.94", () => {
    const arbiter = upgradedUnit("fenix", "fenixcybrosarbiter", {
        masteries: { "Suit Attack Speed": 30 },
    });
    expect(arbiter.modes[""]!.attackspeed).toBeCloseTo(0.94);
});

test("Chinese and English Marine names resolve to the same stable unit token", () => {
    expect(unitToken("陆战队员")).toBe("marine");
    expect(unitToken("Marine")).toBe("marine");
});

test("unit hash keeps commander and unit selection together", () => {
    expect(parseUnitHash("#raynor/marine")).toEqual({ commander: "raynor", unit: "marine" });
    expect(parseUnitHash("#raynor")).toEqual({ commander: "raynor", unit: null });
    expect(parseUnitHash("")).toEqual({ commander: null, unit: null });
});

test("unit modifier updates keep the selected unit when state is not initialized", () => {
    const base = UnitStats.modifiers("raynor", "marine");
    const updated = mergeUnitModifiers(null, { upgradeLevels: { weapon: 2 } }, "raynor", "marine");

    expect(updated.commander).toBe("raynor");
    expect(updated.unit).toBe("marine");
    expect(updated.upgrades).toEqual(base.upgrades);
    expect(updated.upgradeLevels.weapon).toBe(2);
});
