export type BreakpointAbility = {
    spammable: boolean;
    affectedByArmor: boolean;
    baseDamage: number;
    damageIncrease: number;
    air: boolean;
    structure: boolean;
};

export type BreakpointUnit = {
    name: string;
    race: string;
    hp: number;
    shields: number;
    armor: number;
    light: number;
    structure: number;
    flyer: number;
    token: string;
};

export type BreakpointBuckets = Record<string, BreakpointUnit[][]>;

const RACES = ["Protoss", "Terran", "Zerg", "Infested", "Mutator"];

export function calculateDamage(ability: BreakpointAbility, points: number): number {
    const rawDamage = ability.baseDamage + ability.damageIncrease * points * ability.baseDamage;
    return points === 15 || points === 30 ? Math.round(rawDamage) : Math.floor(rawDamage);
}

export function classifyUnits(
    units: BreakpointUnit[],
    ability: BreakpointAbility,
    points: number,
    armor: number,
): BreakpointBuckets {
    const buckets: BreakpointBuckets = Object.fromEntries(
        RACES.map(race => [race, Array.from({ length: ability.spammable ? 4 : 2 }, () => [])]),
    );
    let damage = calculateDamage(ability, points);
    if (ability.affectedByArmor) damage -= armor;

    for (const unit of units) {
        if (!ability.air && unit.flyer) continue;
        if (!ability.structure && unit.structure) continue;
        const hits = Math.max(1, Math.ceil((unit.hp + unit.shields) / damage));
        const bucket = ability.spammable ? Math.min(hits, 4) - 1 : hits <= 1 ? 0 : 1;
        buckets[unit.race] ??= Array.from({ length: ability.spammable ? 4 : 2 }, () => []);
        buckets[unit.race][bucket].push(unit);
    }

    return buckets;
}
