import { describe, expect, test } from "bun:test";
import { calculateDamage, classifyUnits, type BreakpointAbility, type BreakpointUnit } from "./masterybreakpoints-core";

const ability: BreakpointAbility = {
    spammable: true,
    affectedByArmor: true,
    baseDamage: 40,
    damageIncrease: 0.025,
    air: false,
    structure: false,
};

const units: BreakpointUnit[] = [
    { name: "轻型单位", race: "Zerg", hp: 35, shields: 0, armor: 0, light: 1, structure: 0, flyer: 0, token: "light" },
    { name: "重型单位", race: "Zerg", hp: 50, shields: 0, armor: 1, light: 0, structure: 0, flyer: 0, token: "armored" },
    { name: "空中单位", race: "Protoss", hp: 40, shields: 0, armor: 0, light: 1, structure: 0, flyer: 1, token: "air" },
];

describe("mastery breakpoint calculations", () => {
    test("preserves the source calculator's special rounding at 15 and 30 points", () => {
        expect(calculateDamage(ability, 14)).toBe(54);
        expect(calculateDamage(ability, 15)).toBe(55);
        expect(calculateDamage(ability, 30)).toBe(70);
    });

    test("classifies only eligible units and applies armor", () => {
        const result = classifyUnits(units, ability, 0, 1);
        expect(result.Zerg[0].map(unit => unit.name)).toEqual(["轻型单位"]);
        expect(result.Zerg[1].map(unit => unit.name)).toEqual(["重型单位"]);
        expect(result.Protoss[0]).toEqual([]);
    });
});
