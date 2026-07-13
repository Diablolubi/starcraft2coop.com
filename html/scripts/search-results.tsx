/** @jsxImportSource preact */
import * as preact from 'preact';
import Fuse from 'fuse.js';
import type { SearchDocument, SearchIndexData } from '../../source-data/data-types';
import { createSearchIndex, searchDocuments } from './search-core';
import searchIndexData from '../../html/data/search-index.json';

const MAX_RESULTS = 10;

const TYPE_LABELS: Record<SearchDocument['type'], string> = {
    commander: '指挥官',
    mutator: '突变因子',
    mission: '任务',
    weeklymutation: '每周突变',
    upgrade: '升级',
    talent: '天赋',
    prestige: '威望',
    playerunit: '单位',
    amonunit: '埃蒙单位',
};

function resolveSearchPath(document: SearchDocument): string {
    const path = document.path;
    if (/^(commanders|mutators|missions|units)\//.test(path)) {
        return `/${path}`;
    }
    if (path.startsWith('weeklymutations/')) {
        return '/resources/weeklymutations';
    }
    if (path.startsWith('upgrades/') || path.startsWith('talents/')) {
        return document.commander ? `/units/#${token(document.commander)}/${unitTokenFromSubtitle(document.subtitle)}` : '/units';
    }
    if (path.startsWith('prestiges/')) {
        return document.commander ? `/commanders/${token(document.commander)}#prestiges` : '/';
    }
    return `/${path}`;
}

function token(text: string): string {
    if (text === 'Dom. Trooper') return 'dominiontrooper';
    if (text === 'Dom. Assault Trooper') return 'dominionassaulttrooper';
    if (text === 'Dom. Flame Trooper') return 'dominionflametrooper';
    if (text === 'Dom. Rocket Trooper') return 'dominionrockettrooper';
    if (text === 'Tychus Findlay') return 'tychus';
    if (text === 'James Sirius Sykes') return 'sirius';
    if (text === 'Miles Blaze Lewis') return 'blaze';
    if (text === 'Rob Cannonball Boswell') return 'cannonball';
    if (text === 'Lt Layna Nikara') return 'nikara';
    if (text === 'Kev Rattlesnake West') return 'rattlesnake';

    return text.toLowerCase().replace(/[^a-z0-9]+/g, '');
}

function unitTokenFromSubtitle(subtitle = ''): string {
    const words = subtitle.split(' ');
    if (words.length < 2) return '';
    return token(words.slice(1, -1).join(' '));
}

class SearchResults extends preact.Component<{
    input: HTMLInputElement;
    close: () => void;
}> {
    override state: {
        status: 'loading' | 'ready' | 'error';
        query: string;
        resultsQuery: string;
        results: SearchDocument[];
        searchPending: undefined | number;
        activeIndex: number;
        error?: string;
        fuse: Fuse<SearchDocument> | null;
    } = {
        status: 'loading',
        query: this.props.input.value,
        resultsQuery: '',
        results: [],
        searchPending: undefined,
        activeIndex: 0,
        fuse: null,
    };

    override componentDidMount(): void {
        this.props.input.addEventListener('input', this.onInput);
        this.props.input.addEventListener('keydown', this.onKeyDown);
        this.loadSearchIndex();
    }

    override componentWillUnmount(): void {
        this.props.input.removeEventListener('input', this.onInput);
        this.props.input.removeEventListener('keydown', this.onKeyDown);
        clearTimeout(this.state.searchPending);
    }

    loadSearchIndex(): void {
        try {
            const fuse = createSearchIndex(searchIndexData as SearchIndexData);
            this.setState({ status: 'ready', fuse });
            this.scheduleSearch(this.props.input.value, fuse);
        } catch (error) {
            this.setState({
                status: 'error',
                error: error instanceof Error ? error.message : String(error),
            });
        }
    }

    onInput = (): void => {
        this.scheduleSearch(this.props.input.value);
    };

    onKeyDown = (event: KeyboardEvent): void => {
        if (event.altKey || event.ctrlKey || event.metaKey || event.shiftKey) return;

        const results = this.state.results;
        if (event.key === 'ArrowDown') {
            event.preventDefault();
            this.setState({ activeIndex: results.length ? (this.state.activeIndex + 1) % results.length : 0 });
        } else if (event.key === 'ArrowUp') {
            event.preventDefault();
            this.setState({ activeIndex: results.length ? (this.state.activeIndex + results.length - 1) % results.length : 0 });
        } else if (event.key === 'Enter' && results.length) {
            event.preventDefault();
            window.location.href = resolveSearchPath(results[this.state.activeIndex]!);
            this.props.close();
        }
    };

    scheduleSearch(query: string, fuse = this.state.fuse): void {
        clearTimeout(this.state.searchPending);

        if (!query.trim() || !fuse) {
            this.setState({
                query,
                resultsQuery: '',
                results: [],
                searchPending: undefined,
                activeIndex: 0,
            });
            return;
        }

        if (query === this.state.resultsQuery) return;

        const searchPending = setTimeout(() => {
            this.setState({
                resultsQuery: query,
                results: searchDocuments(fuse, query, MAX_RESULTS),
                searchPending: undefined,
                activeIndex: 0,
            });
        }, 0);
        this.setState({ query, activeIndex: 0, searchPending });
    }

    override render(): preact.ComponentChildren {
        if (this.state.status === 'loading') {
            return <p class="site-search-message">正在加载搜索……</p>;
        }
        if (this.state.status === 'error') {
            return <p class="site-search-message">搜索加载失败：{this.state.error}</p>;
        }

        const query = this.state.query;
        if (!query.trim()) {
            return (
                <div class="site-search-message">
                    <p>输入关键词，搜索指挥官、单位、任务、突变因子和每周突变。</p>
                    <p class="site-search-key-guides">
                        <span><kbd>↑</kbd><kbd>↓</kbd> 选择</span>
                        <span><kbd>Enter</kbd> 打开</span>
                        <span><kbd>Esc</kbd> 关闭</span>
                    </p>
                </div>
            );
        }

        const results = this.state.results;
        if (!results.length) {
            return <p class="site-search-message">未找到结果。</p>;
        }

        return (
            <ul class="site-search-list" role="listbox" aria-label="搜索结果">
                {results.map((document, index) => (
                    <li class="site-search-result" role="option" aria-selected={index === this.state.activeIndex}>
                        <a
                            href={resolveSearchPath(document)}
                            aria-selected={index === this.state.activeIndex}
                            onMouseEnter={() => this.setState({ activeIndex: index })}
                            onClick={this.props.close}
                        >
                            <span class="site-search-title">{document.title}</span>
                            <span class="site-search-type">{TYPE_LABELS[document.type]}</span>
                            {document.subtitle && <span class="site-search-subtitle">{document.subtitle}</span>}
                        </a>
                    </li>
                ))}
            </ul>
        );
    }
}

function mountSearchResults(options: { input: HTMLInputElement, container: HTMLElement, close: () => void }): void {
    preact.render(<SearchResults input={options.input} close={options.close} />, options.container);
}

export type MountSearchResultsFunction = typeof mountSearchResults;

(window as any).mountSearchResults = mountSearchResults;
