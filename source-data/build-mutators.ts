#!/usr/bin/env bun
import type { Mutator, MutatorInteraction } from "./data-types";
import glossary from "../translation/glossary.json";

const mutators: Mutator[] = await Bun.file('./source-data/mutators.json').json();

const allInteractions: MutatorInteraction[] = await Bun.file('./source-data/mutatorinteractions.json').json();

function getInteractions(id: number): { otherMutator: Mutator, interaction: string }[] {
    return allInteractions.filter((interaction) => interaction.id1 === id || interaction.id2 === id).map((interaction) => ({
        otherMutator: getMutator(interaction.id1 === id ? interaction.id2 : interaction.id1),
        interaction: interaction.interaction,
    }));
}
function getMutator(id: number): Mutator {
    return mutators.find((mutator) => mutator.mutatorid === id)!;
}
function token(name: string): string {
    return name.toLowerCase().replace(/[^a-z0-9]+/g, '').toLowerCase();
}

const mutatorEnglishNames = new Map(glossary.mutators.map(entry => [entry["zh-CN"], entry.en]));

function originalName(name: string): string {
    return mutatorEnglishNames.get(name) || name;
}

function mutatorToken(name: string): string {
    return token(originalName(name));
}

function headingId(name: string): string {
    if (name === '突变因子详细信息') return 'mutatordetails';
    if (name === '指挥官专属技巧' || name === '指挥官专属提示') return 'commanderspecifictips';
    return name.toLowerCase().replace(/[^\p{Letter}\p{Number}]+/gu, '');
}

const safeZoneText = await Bun.file('./source-data/mutator-details/safetyzones.html').text();

for (const mutator of mutators) {
    const url = mutatorToken(mutator.mutatorname);
    const details = await Bun.file(`./source-data/mutator-details/${originalName(mutator.mutatorname)}.html`).text();
    let indentedDetails = details.replace(/^/gm, '    ').replace(/^    $/gm, '').replace(/<p class="subheading">(.*?)<\/p>/g, (match, p1) => `<h2 id="${headingId(p1)}">${p1}</h2>`);
    if (mutator.hassafezone) {
        if (indentedDetails.includes('    <h2 id="commanderspecifictips">')) {
            indentedDetails = indentedDetails.replace('    <h2 id="commanderspecifictips">', safeZoneText + '    <h2 id="commanderspecifictips">');
        } else {
            indentedDetails += safeZoneText;
        }
    }
    const interactions = getInteractions(mutator.mutatorid);
    Bun.write(`./html/mutators/${url}.php`, `<?php

/** @generateStatic */
require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
    <title>《星际争霸 II》合作任务 - 突变因子 - ${mutator.mutatorname}</title>
    <link rel="canonical" href="https://starcraft2coop.com/mutators/${url}">
<?= startContent() ?>
    <h1><span class="unbold">突变因子：</span>${mutator.mutatorname}</h1>
    <p><img src="/images/mutators/${url}.png" alt="" /></p>
    <p>${mutator.mutatordescription}</p>
    <table>
        <tr><th align="right">难度点数</th><td align="left">${mutator.abomination}</td></tr>
        <tr><th align="right">可用于自定义游戏</th><td align="left">${mutator.customusable ? '是' : '否'}</td></tr>
        <tr><th align="right">可由混乱工作室抽取</th><td align="left">${mutator.chaosrollable ? '是' : '否'}</td></tr>
    </table>
${indentedDetails}
    <h2 id="interactions">突变因子交互</h2>
    <table>
${interactions.map((interaction) => `        <tr><td style="white-space:nowrap"><a href="/mutators/${mutatorToken(interaction.otherMutator.mutatorname)}"><img src="/images/mutators/${mutatorToken(interaction.otherMutator.mutatorname)}.png" class="miniIcon" alt="">${interaction.otherMutator.mutatorname}</a></td><td>${interaction.interaction}</td></tr>\n`).join('')}${interactions.length === 0 ? '        <tr><td>未找到交互。</td></tr>' : ''}
    </table>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
`);
}
