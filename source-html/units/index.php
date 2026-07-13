<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
    <title>《星际争霸 II》合作任务 - 单位属性</title>
    <meta name="description" content="计算合作任务中各单位升级前后的属性，也包含埃蒙单位的数据。">
    <meta name="keywords" content="星际争霸 II, 合作任务, 单位属性">
    <link rel="canonical" href="https://starcraft2coop.com/tools/units">
    <style>
        .units td {
            vertical-align: top;
        }
        .units a, .units a:visited {
            color: yellow;
            text-decoration: none;
        }
        .units a[aria-selected="true"] {
            color: orange;
        }
        .units a:hover {
            text-decoration: underline;
        }
        .units-nav, .units-stats, .units-mode-stats {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .units-hp {
            color: chartreuse;
        }
        .units-shields {
            color: aqua;
        }
        .units-energy {
            color: violet;
        }
        .units-commander-selector,
        .units-unit-selector {
            border-left: 0;
            border-top: 0;
            border-bottom: 0;
        }
        .units-unit-selector {
            min-width: 220px;
        }
        .units-unit {
            width: 280px;
            min-width: 280px;
        }
        .units-portrait {
            background: black;
            width: 100px;
            height: 100px;
        }
        .units-modified {
            color: yellow;
        }
        .units-modifiers {
            margin: 20px -5px 0;
            border-top: 1px solid transparent;
            padding: 5px 5px 0;
        }
        .units-head {
            margin-bottom: 5px;
        }
        .units-mode-stats {
            border-left: 1px dotted #888;
            margin-left: 5px;
            padding-left: 5px;
        }
        .units-sidebutton {
            float: right;
        }
        .units-unit fieldset {
            border: 1px solid #53578a;
            margin-bottom: 3px;
            padding: 2px 2px 4px;
            color: #a2a5d4;
        }
        .units-unit legend {
            color: #7277bd;
            font-style: italic;
            margin-left: 2px;
        }
    </style>
<?= startContent() ?>
    <h1>单位</h1>
    <div id="units"></div>
    <script src="/scripts/units.js?v2.1" defer></script>
    <script src="/scripts/tooltips.js" defer></script>

    <h3>数据说明</h3>
    <ul>
        <li>数据只显示基础属性，以及会影响这些基础属性的升级。影响技能冷却时间的升级不会显示。</li>
        <li>所有进化单位（例如阿巴瑟的吞噬者、德哈卡的原始战斗单位）的建造时间只包含进化耗时，不包含前置单位的建造时间。</li>
        <li>使用充能次数生产的单位（例如阿塔尼斯）以充能冷却时间作为建造时间。斯托科夫的单位显示实际建造时间，而非充能时间。</li>
        <li>一次生成多个的单位（例如跳虫），资源消耗会除以生成数量。</li>
        <li>可叠加多层的强化效果（例如生物质）按最大层数计算。</li>
        <li>只列出会改变单位武器属性的升级。因此，菲尼克斯“网络管理员”等伤害减免效果不会显示。</li>
        <li>数值由计算得出，可能存在轻微的舍入误差。</li>
    </ul>
    <p>
        如果你更喜欢<a href="/tools/unitstats">旧版单位属性页面，仍可在此访问</a>。
    </p>

<?= endContent() ?>
