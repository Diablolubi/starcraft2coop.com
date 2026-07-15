import {
    calculateDamage,
    classifyUnits,
} from './masterybreakpoints-core';

declare global {
    interface Window {
        masteryBreakpoints: {
            calculateDamage: typeof calculateDamage;
            classifyUnits: typeof classifyUnits;
        };
    }
}

window.masteryBreakpoints = { calculateDamage, classifyUnits };
