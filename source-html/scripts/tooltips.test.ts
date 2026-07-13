import { expect, test } from 'bun:test';
import { mutatorSlugFromPath } from './tooltip-path';

test.each([
    ['/mutators/avenger', 'avenger'],
    ['/starcraft2coop.com/mutators/eminentdomain', 'eminentdomain'],
    ['/starcraft2coop.com/mutators/scorchedearth/', 'scorchedearth'],
])('extracts mutator slug from %s', (pathname, expected) => {
    expect(mutatorSlugFromPath(pathname)).toBe(expected);
});

test('rejects non-mutator links', () => {
    expect(mutatorSlugFromPath('/starcraft2coop.com/commanders/raynor')).toBeNull();
});
