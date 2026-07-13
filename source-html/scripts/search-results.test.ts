import { expect, test } from 'bun:test';
import type { SearchIndexData } from '../../source-data/data-types';
import { createSearchIndex, searchDocuments } from './search-core';

const searchIndexData: SearchIndexData = await Bun.file('html/data/search-index.json').json();
const searchIndex = createSearchIndex(searchIndexData);

test.each(['a', 'ar', 'art'])('%s ranks Artanis first', query => {
    const [firstResult] = searchDocuments(searchIndex, query, 10);
    expect(firstResult!.type).toBe('commander');
    expect(firstResult!.title).toBe('阿塔尼斯');
    expect(firstResult!.path).toBe('commanders/artanis');
});

test.each(['雷诺', 'Raynor'])('%s finds the Raynor commander page', query => {
    const [firstResult] = searchDocuments(searchIndex, query, 10);
    expect(firstResult!.path).toBe('commanders/raynor');
});
