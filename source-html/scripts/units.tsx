/** @jsxImportSource preact */
import * as preact from "preact";

import playerUnits from "../../source-data/playerunits.json";
import amonUnits from "../../source-data/amonunits.json";
import commandersummaries from "../../source-data/commandersummaries.json";
import playerTalents from "../../source-data/playertalents.json";
import playerUpgrades from "../../source-data/playerupgrades.json";
import type { PlayerTalent, PlayerUnit, PlayerUpgrade } from "../../source-data/data-types";

const AMON_UNIT_TYPES = [
    "Protoss",
    "Terran",
    "Zerg",
    "Hybrid",
    "Infested",
    "Objective",
    "Mutator"
];

const AMON_UNIT_TYPE_LABELS: Record<string, string> = {
    Protoss: "星灵",
    Terran: "人类",
    Zerg: "异虫",
    Hybrid: "混合体",
    Infested: "被感染者",
    Objective: "任务目标",
    Mutator: "突变因子",
};

const TAG_LABELS: Record<string, string> = {
    Light: "轻甲", Armored: "重甲", Biological: "生物", Mechanical: "机械",
    Psionic: "灵能", Heroic: "英雄", Massive: "重型", Structure: "建筑",
    Flyer: "空中单位",
};

const MODE_IDS: Record<string, string> = {
    "（对空）": "(Air)", "（对地）": "(Ground)", "（单位）": "(Unit)",
    "（拦截机）": "(Interceptor)", "（禁绝者）": "(Interdictor)", "（武器）": "(Weapon)",
    "（突击无人机）": "(Assault Drones)", "（对建筑）": "(Structure)",
    "（防卫模式）": "(Defender Mode)", "（隐秘模式）": "(Stealth Mode)",
    "（拔起触手）": "(Uprooted Tentacles)", "（扎根触手）": "(Rooted Tentacles)",
    "（扎根）": "(Rooted)", "（拔起）": "(Uprooted)", "（脉冲光束）": "(Pulsar Beam)",
    "（观察模式）": "(Observation Mode)", "（攻击 1）": "(Attack 1)", "（攻击 2）": "(Attack 2)",
    "（观察者模式）": "(Watcher Mode)", "（普通模式）": "(Normal)",
    "（普通攻击）": "(Normal Attack)", "（机械蝗虫拦截机）": "(Mecha Locusceptor)",
    "（机械巢虫打击）": "(Mecha Broodling Strike)", "（未潜地）": "(Unburrowed)",
    "（潜地）": "(Burrowed)", "（博学导弹）": "(Erudition Missiles)",
    "（等级 0）": "(Level 0)", "（等级 1）": "(Level 1)", "（等级 2）": "(Level 2)",
    "（行走模式对空）": "(Walker Mode Air)", "（行走模式对地）": "(Walker Mode Ground)",
    "（灵能传送）": "(Shade)", "（攻城模式）": "(Siege Mode)", "（坦克模式）": "(Tank Mode)",
};

function token(text: string): Token {
    if (text === "Dom. Trooper") return 'dominiontrooper';
    if (text === "Dom. Assault Trooper") return 'dominionassaulttrooper';
    if (text === "Dom. Flame Trooper") return 'dominionflametrooper';
    if (text === "Dom. Rocket Trooper") return 'dominionrockettrooper';
    if (text === "Tychus Findlay") return 'tychus';
    if (text === "James Sirius Sykes") return 'sirius';
    if (text === "Miles Blaze Lewis") return 'blaze';
    if (text === "Rob Cannonball Boswell") return 'cannonball';
    if (text === "Lt Layna Nikara") return 'nikara';
    if (text === "Kev Rattlesnake West") return 'rattlesnake';

    return text.toLowerCase().replace(/[^a-z0-9]+/g, "") as Token;
}
export type Token = Lowercase<string>;

export function parseUnitHash(hash: string): { commander: Token | null, unit: Token | null } {
    const [commander, unit] = hash.replace(/^#/, "").split("/");
    return {
        commander: commander || null,
        unit: unit || null,
    };
}

function selectUnitHash(event: Event, hash: string): void {
    event.preventDefault();
    window.location.hash = hash;
    window.dispatchEvent(new CustomEvent("units-hashchange", { detail: hash }));
}

function displayBaseName(name: string): string {
    return name.replace(/（[^）]+）$/, "").trim();
}

function modeId(name: string, basename: string): string {
    const suffix = name.match(/（[^）]+）$/)?.[0] || "";
    if (!suffix) return "";
    if (suffix === "（战机模式）") return basename === "Deimos Viking" ? "(Fighter)" : "(Fighter Mode)";
    if (suffix === "（突击模式）") return basename === "Deimos Viking" ? "(Assault)" : "(Assault Mode)";
    if (suffix === "（监视模式）") {
        if (basename === "Blackhammer") return "(Overwatch Mode)";
        if (basename.includes("Observer") || basename === "XelNaga Watcher") return "(Surveillance Mode)";
        return "(Oversight)";
    }
    return MODE_IDS[suffix] || suffix;
}

export function unitToken(name: string): Token {
    const normalized = name.trim().toLocaleLowerCase();
    const playerUnit = playerUnits.find(unit =>
        unit.basename.toLocaleLowerCase() === normalized || displayBaseName(unit.name).toLocaleLowerCase() === normalized
    );
    if (playerUnit) return token(playerUnit.basename);
    const amonUnit = amonUnits.find(unit => unit.name.toLocaleLowerCase() === normalized);
    if (amonUnit) return `amon${amonUnit.amonid}` as Token;
    return token(name);
}

function modifierEnabled(values: Record<string, boolean>, stableKey: string): boolean {
    return !!values[stableKey] || Object.entries(values).some(([key, enabled]) => enabled && token(key) === stableKey);
}

function modifierLevel(values: Record<string, number>, stableKey: string): number {
    if (values[stableKey]) return values[stableKey];
    return Object.entries(values).find(([key, level]) => level && token(key) === stableKey)?.[1] ?? 0;
}

interface UnitModifiers {
    commander: Token;
    unit: Token;
    upgrades: Record<string, boolean>;
    masteries: Record<string, number>;
    prestiges: Record<string, boolean>;
    upgradeLevels: { weapon?: number, armor?: number, shields?: number, artifacts?: number, rank?: number };
}

class Units extends preact.Component {
    override state: {
        commander: Token | null,
        unit: Token | null,
        modifiers: UnitModifiers | null,
        compareModifiers: UnitModifiers | null,
        error?: string,
    } = {
            commander: null,
            unit: null,
            modifiers: null,
            compareModifiers: null,
        };
    onSetModifiers = (modifiers: Partial<UnitModifiers>) => {
        this.setState({ modifiers: { ...this.state.modifiers, ...modifiers } });
    };
    onSetCompareModifiers = (compareModifiers: Partial<UnitModifiers>) => {
        this.setState({ compareModifiers: { ...this.state.compareModifiers, ...compareModifiers } });
    };
    onClickCompare = () => {
        this.setState({ compareModifiers: { ...this.state.modifiers } });
    };
    onClickClose = () => {
        this.setState({ compareModifiers: null });
    };
    static override getDerivedStateFromError(error: Error): { error: string } {
        return { error: error.stack || error.message, };
    }
    override render() {
        if (this.state.error) {
            return <p>错误：<pre style="color: #ff6633;">{this.state.error}</pre></p>;
        }
        const selection = parseUnitHash(window.location.hash);
        const commander = selection.commander;
        const unit = selection.unit;
        const modifiers = commander && unit
            ? (this.state.modifiers?.commander === commander && this.state.modifiers?.unit === unit
                ? this.state.modifiers
                : UnitStats.modifiers(commander, unit))
            : null;
        return (
            <table class="units">
                <tr>
                    <CommanderSelector commander={commander} />
                    <UnitSelector commander={commander} unit={unit} />
                    {commander && <UnitStats modifiers={modifiers} onSetModifiers={this.onSetModifiers} onClickCompare={this.onClickCompare} formKey="1" />}
                    {this.state.compareModifiers && <UnitStats modifiers={this.state.compareModifiers} onSetModifiers={this.onSetCompareModifiers} onClickClose={this.onClickClose} formKey="2" />}
                </tr>
            </table>
        );
    }
}

class CommanderSelector extends preact.Component<{ commander: string | null }> {
    isSelected(name: string): boolean | undefined {
        return this.props.commander === token(name) ? true : undefined;
    }
    override render() {
        return (
            <td class="units-commander-selector">
                <p class="units-head"><em>指挥官</em></p>
                <ul class="units-nav">
                    {commandersummaries.map((commander) => (
                        <li><a href={`#${token(commander.commander)}`} onClick={(event) => selectUnitHash(event, `#${token(commander.commander)}`)} aria-selected={this.isSelected(commander.commander)}>
                            <img src={`/images/commanderportraits/${token(commander.commander)}portrait.png`} alt="" width="21" height="21" style="margin-right:3px" />
                            {commander.fullname}
                        </a></li>
                    ))}
                </ul>
                <p class="units-head"><em>埃蒙</em></p>
                <ul class="units-nav">
                    {AMON_UNIT_TYPES.map((type) => (
                        <li><a href={`#${token(type)}`} onClick={(event) => selectUnitHash(event, `#${token(type)}`)} aria-selected={this.isSelected(type)}>{AMON_UNIT_TYPE_LABELS[type]}</a></li>
                    ))}
                </ul>
            </td>
        );
    }
}

class UnitSelector extends preact.Component<{ commander: Token | null, unit: Token | null }> {
    isSelected(name: string): boolean | undefined {
        return this.props.unit === token(name) ? true : undefined;
    }
    override render() {
        if (this.props.commander === null) {
            return <td class="units-unit-selector">
                <p><big>&larr;</big> 请选择指挥官</p>
            </td>;
        }
        const normalUnits: { token: Token, label: string }[] = [];
        const heroes: { token: Token, label: string }[] = [];
        const structures: { token: Token, label: string }[] = [];

        const usedUnits = new Set<string>();
        for (const playerUnit of playerUnits.filter((unit) => token(unit.commander) === this.props.commander)) {
            if (usedUnits.has(playerUnit.basename)) continue;
            usedUnits.add(playerUnit.basename);
            if (playerUnit.tags.includes("Structure")) {
                structures.push({ token: token(playerUnit.basename), label: displayBaseName(playerUnit.name) })
            } else if (playerUnit.tags.includes("Heroic")) {
                heroes.push({ token: token(playerUnit.basename), label: displayBaseName(playerUnit.name) })
            } else {
                normalUnits.push({ token: token(playerUnit.basename), label: displayBaseName(playerUnit.name) })
            }
        }
        for (const amonUnit of amonUnits.filter((unit) => token(unit.race) === this.props.commander)) {
            if (amonUnit.structure) {
                structures.push({ token: `amon${amonUnit.amonid}` as Token, label: amonUnit.name })
            } else if (amonUnit.heroic) {
                heroes.push({ token: `amon${amonUnit.amonid}` as Token, label: amonUnit.name })
            } else {
                normalUnits.push({ token: `amon${amonUnit.amonid}` as Token, label: amonUnit.name })
            }
        }
        return (
            <td class="units-unit-selector">
                {!!normalUnits.length && <p class="units-head"><em>单位</em></p>}
                {!!normalUnits.length && <ul class="units-nav">
                    {normalUnits.map((unit) => (
                        <li><a href={`#${this.props.commander!}/${unit.token}`} onClick={(event) => selectUnitHash(event, `#${this.props.commander!}/${unit.token}`)} aria-selected={this.props.unit === unit.token || undefined}>{unit.label}</a></li>
                    ))}
                </ul>}
                {!!heroes.length && <p class="units-head"><em>英雄</em></p>}
                {!!heroes.length && <ul class="units-nav">
                    {heroes.map((hero) => (
                        <li><a href={`#${this.props.commander!}/${hero.token}`} onClick={(event) => selectUnitHash(event, `#${this.props.commander!}/${hero.token}`)} aria-selected={this.props.unit === hero.token || undefined}>{hero.label}</a></li>
                    ))}
                </ul>}
                {!!structures.length && <p class="units-head"><em>建筑</em></p>}
                {!!structures.length && <ul class="units-nav">
                    {structures.map((structure) => (
                        <li><a href={`#${this.props.commander!}/${structure.token}`} onClick={(event) => selectUnitHash(event, `#${this.props.commander!}/${structure.token}`)} aria-selected={this.props.unit === structure.token || undefined}>{structure.label}</a></li>
                    ))}
                </ul>}
            </td>
        );
    }
}

interface Unit {
    name: string;
    basename: string;
    commander: string;
    race: string;
    mcost: number;
    vcost: number;
    supply: number;
    buildtime: number;
    hp: number;
    shields: number;
    armor: number;
    shieldarmor: number;
    energy: number;
    movementspeed: number;
    sightrange: number;
    tags: string[];

    modes: Record<string, UnitMode>;
    hpbonus: number;
    armorbonus: number;
    shieldbonus: number | null;
    notes: string;
}
/** partial of PlayerUnit */
interface UnitMode {
    modeName: string | null;
    displayName: string | null;

    // defensive
    armor?: number;
    shieldarmor?: number;
    movementspeed?: number;
    sightrange?: number;
    tags?: string;

    // offensive
    atkrange?: number;
    attackspeed?: number;
    attacks?: number;
    /** Tags that this unit deals damage to */
    attributedamage?: { [tag: string]: { damage: number, bonus: number } };
}

export class UnitStats extends preact.Component<{
    modifiers: UnitModifiers | null,
    onSetModifiers: (modifiers: Partial<UnitModifiers>) => void,
    onClickClose?: () => void, onClickCompare?: () => void,
    formKey: string,
}> {
    override state: {
        masteryInputs?: Record<string, string> | null;
    } = {};
    renderAmonUnit(): preact.ComponentChildren {
        const amonUnit = amonUnits.find(unit => `amon${unit.amonid}` === this.props.modifiers!.unit);
        if (!amonUnit) {
            return (
                <td>未找到单位</td>
            );
        }
        const tags = [
            amonUnit.light ? "Light" : null,
            amonUnit.armored ? "Armored" : null,
            amonUnit.biological ? "Biological" : null,
            amonUnit.mechanical ? "Mechanical" : null,
            amonUnit.psionic ? "Psionic" : null,
            amonUnit.heroic ? "Heroic" : null,
            amonUnit.massive ? "Massive" : null,
            amonUnit.structure ? "Structure" : null,
            // amonUnit.flyer ? "Flyer" : null,
        ].filter(Boolean);
        return (
            <td class="units-unit">
                <p><strong>{amonUnit.name}</strong></p>
                <p>
                    （埃蒙单位）
                </p>
                <ul class="units-stats">
                    <li class="units-hp"><span class="unbold">生命值：</span> {amonUnit.hp} {!!amonUnit.armor && <><span class="unbold">| 护甲：</span>{amonUnit.armor}</>}</li>
                    {!!amonUnit.shields && <li class="units-shields"><span class="unbold">护盾：</span> {amonUnit.shields} {!!amonUnit.shieldarmor && <><span class="unbold">| 护盾护甲：</span>{amonUnit.shieldarmor}</>}</li>}
                    <li><span class="unbold">标签：</span> {tags.map(tag => TAG_LABELS[tag as string] || tag).join("、")}</li>
                </ul>
            </td>
        );
    }
    static getUnit(modifiers: UnitModifiers): Unit | null {
        const selectedUnits = playerUnits.filter((unit) => token(unit.commander) === modifiers.commander && token(unit.basename) === modifiers.unit) as PlayerUnit[];
        const selectedUnit = selectedUnits[0];
        if (!selectedUnit) {
            return null;
        }
        const modes: Record<string, UnitMode> = {};
        for (const selected of selectedUnits) {
            const mode = modeId(selected.name, selected.basename);
            const displayMode = selected.name.match(/（[^）]+）$/)?.[0] || "";
            if (modes[mode]) {
                if (!selected.attribute) throw new Error(`duplicate entry ${selected.name}`);
                modes[mode].attributedamage ||= {};
                modes[mode].attributedamage[selected.attribute] = {
                    damage: selected.damage, bonus: selected.attackbonus,
                };
            } else {
                if (selected.attribute) throw new Error(`first ${selected.name} must not have attribute`);

                const unitMode: UnitMode = modes[mode] = {
                    modeName: mode || null,
                    displayName: displayMode || null,
                };
                if (selected.armor !== selectedUnit.armor) unitMode.armor = selected.armor;
                if (selected.shieldarmor !== selectedUnit.shieldarmor) unitMode.shieldarmor = selected.shieldarmor;
                if (selected.movementspeed !== selectedUnit.movementspeed) unitMode.movementspeed = selected.movementspeed;
                if (selected.sightrange !== selectedUnit.sightrange) unitMode.sightrange = selected.sightrange;
                if (selected.tags !== selectedUnit.tags) unitMode.tags = selected.tags;
                if (selected.atkrange) unitMode.atkrange = selected.atkrange;
                if (selected.attackspeed) unitMode.attackspeed = selected.attackspeed;
                if (selected.attacks) unitMode.attacks = selected.attacks;
                if (selected.damage) {
                    unitMode.attributedamage = {
                        '': { damage: selected.damage, bonus: selected.attackbonus },
                    };
                }
            }
        }
        const unit: Unit = {
            name: displayBaseName(selectedUnit.name),
            basename: selectedUnit.basename,
            commander: selectedUnit.commander,
            race: selectedUnit.race,
            mcost: selectedUnit.mcost,
            vcost: selectedUnit.vcost,
            buildtime: selectedUnit.buildtime,
            supply: selectedUnit.supply,
            hp: selectedUnit.hp,
            shields: selectedUnit.shields,
            armor: selectedUnit.armor,
            shieldarmor: selectedUnit.shieldarmor,
            energy: selectedUnit.energy,
            movementspeed: selectedUnit.movementspeed,
            sightrange: selectedUnit.sightrange,
            tags: selectedUnit.tags.split(','),
            modes,
            hpbonus: selectedUnit.hpbonus,
            armorbonus: selectedUnit.armorbonus,
            shieldbonus: selectedUnit.shieldbonus,
            notes: selectedUnit.notes,
        }
        return unit;
    }
    static applyUpgrade(
        upgrade: {
            modifier: string, operation: string, value: number,
            operationtype?: string | null,
            modifiermode?: string | null,
            modifiertag?: string | null,
        },
        unit: Unit,
        level?: number,
    ) {
        switch (upgrade.modifier) {
            case 'mineralCost':
                unit.mcost = this.applyModifier(unit.mcost, upgrade, level);
                break;
            case 'vespeneCost':
                unit.vcost = this.applyModifier(unit.vcost, upgrade, level);
                break;
            case 'time':
                unit.buildtime = this.applyModifier(unit.buildtime, upgrade, level);
                break;
            case 'supply':
                unit.supply = this.applyModifier(unit.supply, upgrade, level);
                break;
            case 'HP':
                unit.hp = this.applyModifier(unit.hp, upgrade, level);
                break;
            case 'Shields':
                unit.shields = this.applyModifier(unit.shields, upgrade, level);
                break;
            case 'Armor':
                if (!upgrade.modifiermode) {
                    unit.armor = this.applyModifier(unit.armor, upgrade, level);
                }
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : mode.armor !== undefined) {
                        mode.armor = this.applyModifier(mode.armor ?? unit.armor, upgrade, level);
                    }
                }
                break;
            case 'Shield_Armor':
                if (!upgrade.modifiermode) {
                    unit.shieldarmor = this.applyModifier(unit.shieldarmor, upgrade, level);
                }
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : mode.shieldarmor !== undefined) {
                        mode.shieldarmor = this.applyModifier(mode.shieldarmor ?? unit.shieldarmor, upgrade, level);
                    }
                }
                break;
            case 'Move_Speed':
                if (!upgrade.modifiermode) {
                    unit.movementspeed = this.applyModifier(unit.movementspeed, upgrade, level);
                }
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : mode.movementspeed !== undefined) {
                        mode.movementspeed = this.applyModifier(mode.movementspeed ?? unit.movementspeed, upgrade, level);
                    }
                }
                break;
            case 'Vision':
                if (!upgrade.modifiermode) {
                    unit.sightrange = this.applyModifier(unit.sightrange, upgrade, level);
                }
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : mode.sightrange !== undefined) {
                        mode.sightrange = this.applyModifier(mode.sightrange ?? unit.sightrange, upgrade, level);
                    }
                }
                break;
            case 'damage':
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : true) {
                        if (upgrade.modifiertag) {
                            mode.attributedamage![upgrade.modifiertag] ||= {
                                ...mode.attributedamage!['']!,
                            };
                            mode.attributedamage![upgrade.modifiertag]!.damage = this.applyModifier(mode.attributedamage![upgrade.modifiertag]!.damage, upgrade, level);
                        } else {
                            for (const damage of Object.values(mode.attributedamage ||= { '': { damage: 0, bonus: 0 } })) {
                                damage.damage = this.applyModifier(damage.damage, upgrade, level);
                            }
                        }
                    }
                }
                break;
            case 'attackbonus':
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : true) {
                        if (upgrade.modifiertag) {
                            mode.attributedamage![upgrade.modifiertag] ||= {
                                ...mode.attributedamage!['']!,
                            };
                            mode.attributedamage![upgrade.modifiertag]!.bonus = this.applyModifier(mode.attributedamage![upgrade.modifiertag]!.bonus, upgrade, level);
                        } else {
                            for (const damage of Object.values(mode.attributedamage ||= { '': { damage: 0, bonus: 0 } })) {
                                damage.bonus = this.applyModifier(damage.bonus, upgrade, level);
                            }
                        }
                    }
                }
                break;
            case 'Hits':
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : true) {
                        mode.attacks = this.applyModifier(mode.attacks!, upgrade, level);
                    }
                }
                break;
            case 'Attack_Speed':
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : true) {
                        mode.attackspeed = this.applyModifier(mode.attackspeed!, upgrade, level);
                    }
                }
                break;
            case 'Range':
                for (const mode of Object.values(unit.modes)) {
                    if (upgrade.modifiermode ? mode.modeName === upgrade.modifiermode : true) {
                        mode.atkrange = this.applyModifier(mode.atkrange!, upgrade, level);
                    }
                }
                break;
        }
    }
    static getUpgradedUnit(unit: Unit, modifiers: UnitModifiers) {
        const upgradedUnit = JSON.parse(JSON.stringify(unit)) as Unit;

        // preupgrade -> mastery -> prestige -> generic upgrade -> upgrade -> post-prestige

        const metaUpgrades: { [upgrade: string]: [PlayerTalent, level: number | null][] } = {};

        if (unit.basename === 'Sky Fury') {
            delete upgradedUnit.modes['(Fighter Mode)']!.attributedamage!['Armored'];
            upgradedUnit.modes['(Fighter Mode)']!.attributedamage!['']!.damage = 21;
        }
        for (const upgrade of playerUpgrades as PlayerUpgrade[]) {
            if (!modifierEnabled(modifiers.upgrades, upgrade.icon)) continue;
            if (modifiers.unit !== token(upgrade.unit)) continue;
            if (modifiers.commander !== token(upgrade.commander)) continue;
            if (upgrade.upgradetype !== 'preupgrade') continue;

            this.applyUpgrade(upgrade, upgradedUnit);
        }
        for (const talent of playerTalents as PlayerTalent[]) {
            if (talent.talenttype !== 'mastery') continue;
            if (modifiers.unit !== token(talent.unit)) continue;
            if (modifiers.commander !== token(talent.commander)) continue;
            const level = modifierLevel(modifiers.masteries, talent.nameid);
            if (!level) continue;
            if (talent.modifierupgrade) {
                const modifierUpgrade = token(talent.modifierupgrade);
                if (!modifierEnabled(modifiers.upgrades, modifierUpgrade)) continue;
                (metaUpgrades[modifierUpgrade] ||= []).push([talent, level]);
                continue;
            }

            this.applyUpgrade(talent, upgradedUnit, level);
        }
        for (const talent of playerTalents as PlayerTalent[]) {
            if (talent.talenttype !== 'prestige') continue;
            if (!modifierEnabled(modifiers.prestiges, talent.nameid)) continue;
            if (modifiers.unit !== token(talent.unit)) continue;
            if (modifiers.commander !== token(talent.commander)) continue;
            if (talent.modifierupgrade) {
                const modifierUpgrade = token(talent.modifierupgrade);
                if (!modifierEnabled(modifiers.upgrades, modifierUpgrade)) continue;
                (metaUpgrades[modifierUpgrade] ||= []).push([talent, null]);
                continue;
            }

            this.applyUpgrade(talent, upgradedUnit);
        }

        const levels = modifiers.upgradeLevels;
        const weaponUpgrades = levels.weapon ?? levels.rank ?? levels.artifacts;
        if (weaponUpgrades) {
            for (const mode of Object.values(upgradedUnit.modes)) {
                for (const attack of Object.values(mode.attributedamage || {})) {
                    if (levels.rank) attack.bonus ||= attack.damage * 0.25;
                    attack.damage += weaponUpgrades * attack.bonus;
                }
            }
        }
        const armorUpgrades = levels.armor ?? levels.rank ?? levels.artifacts;
        if (armorUpgrades) {
            upgradedUnit.armor += armorUpgrades * upgradedUnit.armorbonus;
            upgradedUnit.hp += armorUpgrades * upgradedUnit.hpbonus;
            for (const mode of Object.values(upgradedUnit.modes)) {
                if (mode.armor !== undefined) {
                    mode.armor += armorUpgrades * upgradedUnit.armorbonus;
                }
            }
        }
        const shieldUpgrades = levels.shields ?? levels.rank ?? levels.artifacts;
        if (shieldUpgrades) {
            upgradedUnit.shieldarmor += shieldUpgrades * upgradedUnit.shieldbonus!;
            for (const mode of Object.values(upgradedUnit.modes)) {
                if (mode.shieldarmor !== undefined) {
                    mode.shieldarmor += shieldUpgrades * upgradedUnit.shieldbonus!;
                }
            }
        }
        if (levels.artifacts) {
            if (token(unit.basename) === 'zeratul') {
                upgradedUnit.shields += levels.artifacts * 50;
            }
            if (['telbrus', 'zoraya', 'serdath'].includes(token(unit.basename))) {
                upgradedUnit.shields += levels.artifacts * 100;
                if (upgradedUnit.energy) upgradedUnit.energy += levels.artifacts * 100;
            }
        }

        for (let upgrade of playerUpgrades as PlayerUpgrade[]) {
            if (!modifierEnabled(modifiers.upgrades, upgrade.icon)) continue;
            if (modifiers.unit !== token(upgrade.unit)) continue;
            if (modifiers.commander !== token(upgrade.commander)) continue;
            if (upgrade.upgradetype !== 'upgrade') continue;

            if (metaUpgrades[upgrade.icon]) {
                upgrade = { ...upgrade };
                for (const [metaUpgrade, level] of metaUpgrades[upgrade.icon]!) {
                    if (upgrade.modifier !== metaUpgrade.modifier) continue;
                    upgrade.value = this.applyModifier(upgrade.value, metaUpgrade, level, false);
                }
            }
            this.applyUpgrade(upgrade, upgradedUnit);
        }
        for (const talent of playerTalents as PlayerTalent[]) {
            if (talent.talenttype !== 'post') continue;
            if (!modifierEnabled(modifiers.prestiges, talent.nameid)) continue;
            if (modifiers.unit !== token(talent.unit)) continue;
            if (modifiers.commander !== token(talent.commander)) continue;
            if (talent.modifierupgrade && !modifierEnabled(modifiers.upgrades, token(talent.modifierupgrade))) continue;

            this.applyUpgrade(talent, upgradedUnit);
        }
        if (modifierEnabled(modifiers.upgrades, 'redlinepowercells')) {
            upgradedUnit.modes['']!.attributedamage!['']!.damage += 60;
        }

        return upgradedUnit;
    }
    static modifiers(commander: Token, selectedUnit: Token): UnitModifiers {
        const upgradesList = playerUpgrades.filter((u) => token(u.commander) === commander && token(u.unit) === selectedUnit);
        const talentsList = playerTalents.filter((u) => token(u.commander) === commander && token(u.unit) === selectedUnit);

        const upgrades: UnitModifiers['upgrades'] = {};
        const masteries: UnitModifiers['masteries'] = {};
        const prestiges: UnitModifiers['prestiges'] = {};
        let upgradeLevels: UnitModifiers['upgradeLevels'] = {};
        for (const upgrade of upgradesList) {
            upgrades[upgrade.icon] = false;
        }
        for (const talent of talentsList) {
            if (talent.talenttype === 'mastery') {
                masteries[talent.nameid] = 0;
            } else {
                prestiges[talent.nameid] = false;
            }
        }

        const unit = playerUnits.find((u) => token(u.commander) === commander && token(u.basename) === selectedUnit);
        if (unit?.armorbonus || unit?.hpbonus) {
            upgradeLevels.armor = 0;
        }
        if (unit?.shieldbonus) {
            upgradeLevels.shields = 0;
        }
        if (unit?.attackbonus) {
            upgradeLevels.weapon = 0;
        }
        if (commander === 'zeratul') {
            if (Object.keys(upgradeLevels).length) upgradeLevels = { artifacts: 0 };
        }
        if (commander === 'mengsk') {
            const RG = ['aegisguard', 'blackhammer', 'emperorsshadow', 'prideofaugustgrad', 'shockdivision', 'skyfury'];
            if (RG.includes(selectedUnit)) upgradeLevels = { rank: 0 };
        }
        return { commander, unit: selectedUnit, upgrades, upgradeLevels, masteries, prestiges };
    }
    renderUpgrades(): preact.ComponentChildren {
        const modifiers = this.props.modifiers!;
        // filter out Mengsk Royal Guard rank upgrades
        const upgrades = Object.keys(modifiers.upgrades).filter(upgrade => !/^[123]$/.test(upgrade));
        const masteries = Object.keys(modifiers.masteries);
        const prestiges = Object.keys(modifiers.prestiges);
        const upgradeLevels = [0, 1, 2, 3, 4, 5].slice(0, modifiers.commander === 'tychus' ? 6 : 4);

        const upgradeData = new Map(
            playerUpgrades.filter((u) => token(u.commander) === modifiers.commander && token(u.unit) === modifiers.unit)
                .map((u) => [u.icon, { name: u.name, tooltip: `upgrades/${token(u.commander)}/${u.icon}`, icon: u.icon, unit: u.unit }])
        );
        const talentData = new Map(
            playerTalents.filter((talent) => token(talent.commander) === modifiers.commander && token(talent.unit) === modifiers.unit)
                .map(talent => [talent.nameid, talent.name])
        );
        const upgradeIcon = (upgrade: string) => {
            const data = upgradeData.get(upgrade);
            const commander = modifiers.commander;
            const dir = commander !== 'tychus' && token(data?.unit ?? "") === commander ? "hero" : "unitupgrades";
            return `/images/commanderdata/${dir}/${commander}/${data?.icon}.png`;
        };

        return (
            <form class="units-modifiers">
                {!!upgrades.length && (<fieldset>
                    <legend>升级</legend>
                    {upgrades.map((upgrade) => <div><label data-tooltip={upgradeData.get(upgrade)?.tooltip}><input type="checkbox" value={upgrade} onChange={this.onCheckUpgrade} checked={modifiers.upgrades[upgrade]} /> <img src={upgradeIcon(upgrade)} alt="" width={20} height={20} /> {upgradeData.get(upgrade)?.name}</label></div>)}
                </fieldset>)}
                {'weapon' in modifiers.upgradeLevels && (<fieldset>
                    <legend>武器</legend>
                    {upgradeLevels.map(level => <label><input type="radio" name={`weapon-${this.props.formKey}`} value={level} onChange={this.onCheckUpgradeLevel} checked={modifiers.upgradeLevels.weapon === level} /> {level}</label>)}
                </fieldset>)}
                {'armor' in modifiers.upgradeLevels && (<fieldset>
                    <legend>护甲</legend>
                    {upgradeLevels.map(level => <label><input type="radio" name={`armor-${this.props.formKey}`} value={level} onChange={this.onCheckUpgradeLevel} checked={modifiers.upgradeLevels.armor === level} /> {level}</label>)}
                </fieldset>)}
                {'shields' in modifiers.upgradeLevels && (<fieldset>
                    <legend>护盾</legend>
                    {upgradeLevels.map(level => <label><input type="radio" name={`shields-${this.props.formKey}`} value={level} onChange={this.onCheckUpgradeLevel} checked={modifiers.upgradeLevels.shields === level} /> {level}</label>)}
                </fieldset>)}
                {'rank' in modifiers.upgradeLevels && (<fieldset>
                    <legend>军衔</legend>
                    {upgradeLevels.map(level => <label><input type="radio" name={`rank-${this.props.formKey}`} value={level} onChange={this.onCheckUpgradeLevel} checked={modifiers.upgradeLevels.rank === level} /> {level}</label>)}
                </fieldset>)}
                {'artifacts' in modifiers.upgradeLevels && (<fieldset>
                    <legend>已收集神器碎片</legend>
                    {upgradeLevels.map(level => <label><input type="radio" name={`artifacts-${this.props.formKey}`} value={level} onChange={this.onCheckUpgradeLevel} checked={modifiers.upgradeLevels.artifacts === level} /> {level}</label>)}
                </fieldset>)}
                {!!masteries.length && (<fieldset>
                    <legend>精通</legend>
                    {masteries.map((talent) => <div><label>
                        <input type="range" name={talent} value={modifiers.masteries[talent]} onInput={this.onChangeMastery} min={0} max={30} step={1} /><br />
                        <input type="number" name={talent} value={this.state.masteryInputs?.[talent] ?? modifiers.masteries[talent]} onInput={this.onInputMastery} onBlur={this.onBlurMastery} min={0} max={30} step={1} /> {talentData.get(talent)}
                    </label></div>)}
                </fieldset>)}
                {!!prestiges.length && (<fieldset>
                    <legend>威望</legend>
                    {prestiges.map((talent) => <div><label><input type="checkbox" value={talent} onChange={this.onCheckPrestige} checked={modifiers.prestiges[talent]} /> {talentData.get(talent)}</label></div>)}
                </fieldset>)}
            </form>
        );
    }
    onCheckUpgrade = (e: Event) => {
        const target = e.target as HTMLInputElement;
        this.props.onSetModifiers({ upgrades: { ...this.props.modifiers!.upgrades, [target.value]: target.checked } });
    };
    onCheckUpgradeLevel = (e: Event) => {
        const target = e.target as HTMLInputElement;
        const upgrade = target.name.split('-')[0] as Token;
        const value = parseInt(target.value);
        const modifiers = this.props.modifiers!;
        if (upgrade === 'rank') {
            const upgrades = { ...modifiers.upgrades };
            if ('1' in upgrades) upgrades['1'] = value >= 1;
            if ('2' in upgrades) upgrades['2'] = value >= 2;
            if ('3' in upgrades) upgrades['3'] = value >= 3;
            this.props.onSetModifiers({ upgradeLevels: { ...modifiers.upgradeLevels, [upgrade]: value }, upgrades });
        } else {
            this.props.onSetModifiers({ upgradeLevels: { ...modifiers.upgradeLevels, [upgrade]: value } });
        }
    };
    onCheckPrestige = (e: Event) => {
        const target = e.target as HTMLInputElement;
        const newPrestiges = Object.fromEntries(Object.keys(this.props.modifiers!.prestiges).map((prestige) => [prestige, false]));
        this.props.onSetModifiers({ prestiges: { ...newPrestiges, [target.value]: target.checked } });
    };
    onChangeMastery = (e: Event) => {
        const target = e.target as HTMLInputElement;
        this.props.onSetModifiers({
            masteries: { ...this.props.modifiers!.masteries, [target.name]: parseInt(target.value) || 0 },
        });
    };
    onInputMastery = (e: Event) => {
        const target = e.target as HTMLInputElement;
        this.setState({
            masteryInputs: { [target.name]: target.value }
        });
        this.props.onSetModifiers({
            masteries: { ...this.props.modifiers!.masteries, [target.name]: parseInt(target.value) || 0 },
        });
    };
    onBlurMastery = (e: Event) => {
        this.setState({
            masteryInputs: null
        });
    };
    static applyModifier(
        value: number,
        upgrade: { modifier: string, operation: string, value: number, operationtype?: string | null },
        level?: number | null,
        reverseAttackSpeed = true,
    ): number {
        let upgradeValue = upgrade.value;
        if (upgrade.operation === 'multiply') {
            // only used for masteries
            if (upgrade.operationtype === 'increase') {
                upgradeValue = (1 + upgrade.value * level!);
            } else if (upgrade.operationtype === 'decrease') {
                upgradeValue = (1 - upgrade.value * level!);
            } else if (level) {
                throw new Error(`Unknown operation: ${upgrade.operation} : ${upgrade.operationtype}`);
            }
        }
        switch (upgrade.operation) {
            case 'add':
                return value + upgradeValue * (level ?? 1);
            case 'multiply':
                const reverse = reverseAttackSpeed && upgrade.modifier === 'Attack_Speed';
                return reverse ? value / upgradeValue : value * upgradeValue;
            case 'set':
                if (level) throw new Error(`Level can't be set for this upgrade`);
                return upgradeValue;
            default:
                throw new Error(`Unknown operation: ${upgrade.operation}`);
        }
    }
    renderValue(value: number, baseValue: number): preact.ComponentChildren {
        if (value !== baseValue) return <strong class="units-modified">{Number(value.toFixed(2))}</strong>
        return value;
    }
    static calculateDps(damage: number, attacks: number, attackspeed: number): number {
        return damage * attacks / attackspeed;
    }
    renderMode(mode: UnitMode, baseMode: UnitMode, baseUnit: Unit) {
        return <>
            <p class="units-head">{mode.displayName || "武器"}</p>
            <ul class="units-mode-stats">
                {!!mode.attributedamage && <>
                    {Object.entries(mode.attributedamage || {}).map(([attribute, damage]) => {
                        const dps = UnitStats.calculateDps(damage.damage, mode.attacks!, mode.attackspeed!);
                        const baseDamage = baseMode.attributedamage?.[attribute]?.damage ?? baseMode.attributedamage?.['']?.damage ?? 0;
                        const baseDps = UnitStats.calculateDps(baseDamage, baseMode.attacks!, baseMode.attackspeed!);
                        const noDps = ['Baneling', 'Baneling Spawn', 'Scourge', 'Volatile Infested', 'Spider Mine', 'Explosive Creeper'];
                        const dpsMessage = (!noDps.includes(baseUnit.basename)) ? <>（{this.renderValue(+dps.toFixed(2), +baseDps.toFixed(2))} DPS）</> : '';
                        return <li>
                            <span class="unbold">{attribute ? `对${TAG_LABELS[attribute] || attribute}：` : '伤害：'}</span> {this.renderValue(damage.damage, baseDamage)}{dpsMessage}
                        </li>;
                    })}
                    {(mode.attacks! > 1 || baseMode.attacks! > 1) && <li><span class="unbold">攻击次数：</span> {this.renderValue(mode.attacks!, baseMode.attacks!)}</li>}
                    <li><span class="unbold">攻击间隔：</span> {this.renderValue(mode.attackspeed!, baseMode.attackspeed!)}</li>
                    <li><span class="unbold">射程：</span> {this.renderValue(mode.atkrange!, baseMode.atkrange!)}</li>
                </>}
                {mode.armor !== undefined && <li><span class="unbold">护甲：</span> {this.renderValue(mode.armor, baseMode.armor ?? baseUnit.armor)}</li>}
                {mode.movementspeed !== undefined && <li><span class="unbold">移动速度：</span> {this.renderValue(mode.movementspeed, baseMode.movementspeed ?? baseUnit.movementspeed)}</li>}
                {mode.sightrange !== undefined && <li><span class="unbold">视野：</span> {this.renderValue(mode.sightrange, baseMode.sightrange ?? baseUnit.sightrange)}</li>}
            </ul>
        </>;
    }
    renderImage(selected: Unit) {
        const { commander, unit } = this.props.modifiers!;
        if (!commander || !unit) return null;

        if (unit.startsWith('enthralled')) {
            return <img src={`/images/comps/unitimages/${unit.slice(10)}.png`} alt="" class="units-portrait" />;
        }
        if (unit === 'flamingbetty' || unit === 'blasterbilly' || unit === 'spinningdizzy' || unit === 'khaydarinmonolith' || unit === 'shieldbattery' || (commander === 'karax' && unit === 'photoncannon')) {
            return <img src={`/images/commanderdata/guides/${commander}/${unit}.jpg`} alt="" class="units-portrait" />;
        }
        if (
            unit === 'observer' || unit === 'broodling' || unit === 'overlord' || unit === 'overseer' ||
            unit === 'missileturret' || unit === 'photoncannon' || (commander === 'zeratul' && unit === 'voidray') ||
            unit === 'spinecrawler' || unit === 'sporecrawler' || unit === 'spidermine' || unit === 'bunker'
        ) {
            return <img src={`/images/comps/unitimages/${unit}.png`} alt="" class="units-portrait" />;
        }

        if (unit === 'mechaoverlord' || unit === 'mechaoverseer' || unit === 'xelnagawatcher' || unit === 'banelingspawn') {
            return null;
        }
        if (unit?.startsWith('fenix')) {
            return <img src={`/images/commanderdata/abilities/fenix/${unit.slice(5)}.jpg`} alt="" class="units-portrait" />;
        }
        if (
            unit === 'alarak' || unit === 'kerrigan' || unit === 'zagara' || unit === 'nova' || unit === 'zeratul' ||
            unit === 'gary' || unit === 'supergary' || unit === 'dehaka'
        ) {
            return <img src={`/images/commanderdata/hero/${commander}/${unit}.jpg`} alt="" class="units-portrait" />;
        }
        if (
            unit === 'hyperion' || unit === 'mothership' || unit === 'destroyer' || unit === 'shadowguard' ||
            unit === 'glevig' || unit === 'murvar' || unit === 'dakrun' || unit === 'greaterprimalwurm' ||
            unit === 'serdath' || unit === 'telbrus' || unit === 'apocalisk' ||
            unit === 'avatarofform' || unit === 'avatarofessence'
        ) {
            return <img src={`/images/commanderdata/abilities/${commander}/${unit}.jpg`} alt="" class="units-portrait" />;
        }
        const replaceAbilities: Record<string, string> = {
            duskwings: 'bansheeairstrike.png', unboundfanatic: 'fanatic.png', ares: 'combatdrop.png',
            holodecoy: 'holodecoy.png', aleksander: 'aleksander.png', drakkenlaserdrill: 'drakkenlaserdrillattack.png',
            zoraya: 'zorayalegion.png', chargedcrystal: 'summonchargedcrystals.png', warhoundturret: 'deploywarhoundturret.png',
            tesseractmonolith: 'deploytesseractmonolith.png',
        };
        if (unit in replaceAbilities) {
            return <img src={`/images/commanderdata/abilities/${commander}/${replaceAbilities[unit]}`} alt="" class="units-portrait" />;
        }
        if (commander === 'zagara' && (unit === 'hunterkiller' || unit === 'roach')) {
            const replace: Record<string, string> = {
                hunterkiller: 'spawnhunterkillers.png', roach: 'infesteddrop.png',
            };
            return <img src={`/images/commanderdata/hero/${commander}/${replace[unit]}`} alt="" class="units-portrait" />;
        }
        if (commander === 'zeratul' && (unit === 'zealot' || unit === 'darkarchon')) {
            return <img src={`/images/commanderdata/abilities/${commander}/${unit}.jpg`} alt="" class="units-portrait" />;
        }
        const replaceUnitSkills: Record<string, string> = {
            locust: 'spawnlocusts.png', primallocust: 'spawnprimallocusts.png', explosivecreeper: 'spawnexplosivecreeper.png',
            mechabroodling: 'readymechabroodling.png', mecharoach: 'roachesaway.png', railgunturret: 'buildrailgunturret.png',
        };
        if (unit in replaceUnitSkills) {
            return <img src={`/images/commanderdata/unitskills/${commander}/${replaceUnitSkills[unit]}`} alt="" class="units-portrait" />;
        }
        const replaceUnitUpgrades: Record<string, string> = {
            hangarbay: 'installdronehangar.png', mecharavager: 'bonusravager.png',
        };
        if (unit in replaceUnitUpgrades) {
            return <img src={`/images/commanderdata/unitupgrades/${commander}/${replaceUnitUpgrades[unit]}`} alt="" width="100" height="100" />;
        }
        if (unit === 'flyingbroodling') {
            return <img src={`/images/commanderdata/unitskills/stukov/spawnbroodlings.png`} alt="" width="100" height="100" />;
        }

        const replaceUnit: Record<string, string> = { infestedtrooper: 'infestedmarine' };
        if (selected.tags.includes("Structure")) return null;
        return <img src={`/images/commanderdata/units/${commander}/${replaceUnit[unit] || unit}.jpg`} alt="" width="100" height="100" />;
    }
    override render() {
        const modifiers = this.props.modifiers;
        if (!modifiers) {
            return <td class="units-unit">
                <p><big>&larr;</big> 请选择单位</p>
            </td>;
        }
        const baseUnit = UnitStats.getUnit(modifiers);
        if (!baseUnit) {
            return this.renderAmonUnit();
        }
        const unit = UnitStats.getUpgradedUnit(baseUnit, modifiers);
        const race = token(unit.race);

        return (
            <td class="units-unit">
                {this.props.onClickClose && <button type="button" class="units-sidebutton" onClick={this.props.onClickClose}>&times;</button>}
                {this.props.onClickCompare && <button type="button" class="units-sidebutton" onClick={this.props.onClickCompare}>比较 →</button>}
                {this.renderImage(unit)}
                <p><strong>{unit.name}</strong></p>
                {(unit.mcost || unit.vcost || unit.buildtime || unit.supply) ? <p>
                    <img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿：" /> {this.renderValue(unit.mcost, baseUnit.mcost)} { }
                    <img src={`/images/commanderdata/unitupgrades/icongas_${race}.png`} alt="高能瓦斯：" /> {this.renderValue(unit.vcost, baseUnit.vcost)} { }
                    <img src={`/images/commanderdata/unitupgrades/icontime_${race}.png`} alt="建造时间：" /> {this.renderValue(unit.buildtime, baseUnit.buildtime)} { }
                    <img src={`/images/commanderdata/unitupgrades/iconsupply_${race}.png`} alt="补给：" /> {this.renderValue(unit.supply, baseUnit.supply)}
                </p> : <p>
                    （无费用）
                </p>}
                <ul class="units-stats">
                    <li class="units-hp">
                        <span class="unbold">生命值：</span> {this.renderValue(unit.hp, baseUnit.hp)}
                        {!!unit.armor && <> <span class="unbold">| 护甲：</span> {this.renderValue(unit.armor, baseUnit.armor)}</>}
                    </li>
                    {!!unit.shields && <li class="units-shields">
                        <span class="unbold">护盾：</span> {this.renderValue(unit.shields, baseUnit.shields)}
                        {!!unit.shieldarmor && <> <span class="unbold">| 护盾护甲：</span> {this.renderValue(unit.shieldarmor, baseUnit.shieldarmor)}</>}
                    </li>}
                    {!!unit.energy && <li class="units-energy"><span class="unbold">能量：</span> {this.renderValue(unit.energy, baseUnit.energy)}</li>}
                    <li><span class="unbold">移动速度：</span> {this.renderValue(unit.movementspeed, baseUnit.movementspeed)}</li>
                    <li><span class="unbold">视野：</span> {this.renderValue(unit.sightrange, baseUnit.sightrange)}</li>
                    <li><span class="unbold">标签：</span> {unit.tags.map(tag => TAG_LABELS[tag] || tag).join("、") || "（无）"}</li>
                </ul>
                {Object.values(unit.modes).map((mode) => this.renderMode(mode, baseUnit.modes[mode.modeName || '']!, baseUnit))}
                {unit.notes && <p><span class="unbold">备注：</span><br />{unit.notes.split("<br>").map((note) => <div>{note}</div>)}</p>}
                {this.renderUpgrades()}
            </td>
        );
    }
}

if (typeof document !== "undefined") {
    const root = document.getElementById("units")!;
    const renderUnits = () => preact.render(<Units />, root);
    window.addEventListener("hashchange", renderUnits);
    renderUnits();
    let attempts = 0;
    const syncInitialHash = () => {
        renderUnits();
        if (attempts++ < 20) setTimeout(syncInitialHash, 50);
    };
    syncInitialHash();
}
