<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>StarCraft II 合作任务——通用技巧</title>
  <meta name="description" content="适合各种水平玩家的实用技巧，无论新手还是老手，都能借此提升合作任务表现。">
  <meta name="keywords" content="StarCraft II 合作任务通用技巧">
  <link rel="canonical" href="https://starcraft2coop.com/guides/generaltips">
  <style>
        .hotkeysFile{
            font-family:"Courier New", Courier, monospace;
            background-color:steelblue;
            display:inline-block;
            padding:10px;
        }
        .subgroup{
            text-indent:10px;
        }
  </style>
  <?= startContent() ?>
    <h1>合作任务通用技巧</h1>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#tips1">新手技巧</a></p>
        <p class="subgroup"><a href="#overproduction">避免过量生产</a></p>
        <p class="subgroup"><a href="#minimap">认识小地图图标</a></p>
        <p class="subgroup"><a href="#usehero">使用英雄单位</a></p>
        <p class="subgroup"><a href="#usetopbar">使用顶部技能</a></p>

        <p><a href="#tips2">进阶玩家技巧</a></p>
        <p class="subgroup"><a href="#adapt">针对敌方阵容和地图灵活调整</a></p>
        <p class="subgroup"><a href="#aggressive">主动进攻会带来回报</a></p>
        <p class="subgroup"><a href="#bindrapidfire">绑定快速施法</a></p>
        <p class="subgroup"><a href="#expand">尽快开分矿</a></p>

        <p><a href="#tips3">老手技巧</a></p>
        <p class="subgroup"><a href="#armor">护甲升级</a></p>
        <p class="subgroup"><a href="#checkingcreep">检查菌毯</a></p>
        <p class="subgroup"><a href="#knowledge">知识就是力量</a></p>
        <p class="subgroup"><a href="#attacktypes">留意不同攻击类型</a></p>
        <p class="subgroup"><a href="#workercounts">工人数量</a></p>

    </div>
    <h2 id="tips1">新手技巧</h2>
    <h3 id="overproduction">避免过量生产</h3>
    <p>一次排队生产多个单位或建筑，或建造过多生产建筑，会占用你急需的重要资源，尤其是在游戏前期。例如：</p>
    <img src="/images/newplayer/overproduction.jpg" alt="过量生产">
    <p>上图中，队列里的 6 名劳工占用了 240 点矿物，却没有发挥作用。此外，队列中的 11 座补给地堡花费了 1100 点矿物，但没有一座正在建造。更重要的是，玩家根本用不完这么多人口。12 座补给地堡总计提供 144 人口，远超实际需求。只建造当前需要的设施，把剩余资源用于攀升科技和扩充部队。</p>
    <p>还要确保建筑完工后有足够的资源使用它。例如，如果没有足够的高能瓦斯支持后续生产，就不要急着建造科技建筑。</p>
    <h3 id="minimap">认识小地图图标</h3>
    <p>在整个任务过程中，小地图都会提供关键信息。利用它判断自己的位置，并掌握地图各处正在发生的情况。</p>
    <img src="/images/newplayer/minimapicons.jpg" alt="小地图图标">
    <h3 id="usehero">使用英雄单位</h3>
    <p>某些指挥官（例如<a href="/commanders/kerrigan">凯瑞甘</a>）会召唤英雄单位。这些英雄极为强大，应尽可能多加利用，尤其是在游戏前期。英雄能提供强大的前期战力，帮助你推进和完成目标；与此同时，你可以在后方运营、攀升科技并解锁高级单位。</p>
    <h3 id="usetopbar">使用顶部技能</h3>
    <p>顶部技能能在整场游戏中为玩家提供强大助力。利用这些技能帮助推进和接战，并尽可能在冷却结束后立即使用。你也可以根据强力顶部技能的冷却时间来安排推进节奏。</p>
    <h2 id="tips2">进阶玩家技巧</h2>
    <h3 id="adapt">针对敌方阵容和地图灵活调整</h3>
    <p>了解各种进攻波次由哪些单位组成非常重要。请查看<a href="/guides/enemycomps">敌方阵容</a>页面，了解游戏中的各类敌军组合。运用这些知识组建能够直接克制敌方阵容，同时又能推进并完成任务目标的部队。</p>
    <h3 id="aggressive">主动进攻会带来回报</h3>
    <p>敌方基地看起来可能令人望而生畏，让玩家在没有强制要求时不愿主动推进。然而，积极进攻可以让任务变得更轻松，因为你能接近敌方进攻波次的出生点。随后便可利用顶部技能（例如<a href="/commanders/abathur">阿巴瑟</a>的剧毒巢穴）蹲守并消灭刚刷新的进攻波次。</p>
    <h3 id="bindrapidfire">绑定快速施法</h3>
    <p>快速施法会把通过快捷键选择技能和指定目标绑定到同一个按键。施放技能时，先按一次快捷键选择技能，再按一次即可在当前鼠标位置指定目标。</p>
    <p>快速施法的优势在于能连续迅速施放技能。这对<a href="/commanders/alarak">阿拉纳克</a>等指挥官尤其重要，因为他的飞升者技能十分依赖快速施法。如果没有快速施法，像心灵震爆这样的技能会因需要大量点击而难以发挥效果。</p>
    <p>星灵折跃单位时也会用到快速施法。若想快速折跃单位，应把快速施法绑定到对应单位的折跃快捷键。</p>
    <p>快速施法无法直接在游戏中绑定，必须手动编辑快捷键设置文件。这是因为游戏只能为快速施法绑定一个按键，而通常需要绑定多个按键才能充分发挥作用。</p>
    <p>快捷键设置文件位于：My Documents\Starcraft II\Accounts\[Random Number]\Hotkeys</p>
    <p>你会看到一个 [Your Username].SC2Hotkeys 文件。请用记事本打开。如果没有看到该文件，请先确认已在游戏内创建自定义快捷键方案。</p>
    <p>文件内容大致如下：</p>
    <p class="hotkeysFile">[Settings]<br><br>[Hotkeys]<br><br>[Commands]<br>HHBomberAreaBomb/HHBomberPlatform=</p>
    <p>在 [Hotkeys] 部分下方添加以下一行：</p>
    <p class="hotkeysFile">TargetChoose=LeftMouseButton,Z</p>
    <p>此时，快捷键文件应如下所示：</p>
    <p class="hotkeysFile">[Settings]<br><br>[Hotkeys]<br>TargetChoose=LeftMouseButton,Z<br><br>[Commands]<br>HHBomberAreaBomb/HHBomberPlatform=</p>
    <p>保存文件后，Z 键就已绑定到快速施法。要进行测试，可以选择星灵并折跃一名狂热者（假设其他快捷键均为默认设置）。这次不用点击想要折跃的位置，只需再按一次 Z 键，狂热者便会折跃进场。</p>
    <p>你可以在“TargetChoose”设置中用逗号分隔并添加任意数量的按键，为快速施法绑定更多快捷键。</p>
    <p>以下视频介绍了快速施法：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/SxXmfRhY6m8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h3 id="expand">尽快开分矿</h3>
    <p>有些合作任务的分矿无人防守，有些则有守军。不论如何，都应尽快拿下分矿。某些指挥官（例如<a href="/commanders/mengsk">蒙斯克</a>）可以在极早期占领分矿，这类方法称为“速开分矿技巧”。掌握这些技巧可以强化前期经济。如果你使用人类，可以预先建好分矿指挥中心，清除守军或岩石后再将其飞过去。</p>
    <h2 id="tips3">老手技巧</h2>
    <h3 id="armor">护甲升级</h3>
    <p>在对战模式中，护甲是玩家运营的重要一环；缺少护甲升级会让交换战损的效率大幅降低。然而，由于合作任务的特殊性，护甲升级并没有那么重要，原因如下：</p>
    <ul>
        <li>面板技能可以消灭高威胁目标、保护部队或削弱敌人，从而减少部队承受的伤害</li>
        <li>对玩家部队造成伤害的许多敌方单位都是施法单位</li>
        <li>玩家部队在后期会形成强大的死亡之球，往往能在承受大量伤害前消灭敌人</li>
    </ul>
    <p>不过，在某些情况下仍值得投资护甲升级，例如：</p>
    <ul>
        <li>升级费用很低（<a href="/commanders/kerrigan">凯瑞甘</a>）</li>
        <li>还能提供额外生命值等其他加成（<a href="/commanders/raynor">雷诺</a>、<a href="/commanders/tychus">泰凯斯</a>）</li>
    </ul>
    <p>以下视频提供了更详细的说明：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/IsPSXlj8Nh8" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    <h3 id="checkingcreep">检查菌毯</h3>
    <p>检查地图上是否存在异虫菌毯，可以让你调整开局，更好地克制任务开始时可能遇到的进攻波次。按 Alt+T 将小地图切换为地形视图。如果看到菌毯，你将面对异虫阵容；如果没有菌毯，则会面对星灵或人类阵容。下图展示了一个示例：</p>
    <img src="/images/newplayer/creepminimap.jpg" alt="小地图上的菌毯">
    <p>请注意，在<a href="/missions/scytheofamon">埃蒙之镰</a>中，地图上<i>始终</i>存在菌毯。不过，你可以根据菌毯的<i>位置</i>准确判断即将面对的敌方种族。</p>
    <h3 id="knowledge">知识就是力量</h3>
    <p>在合作任务中，了解该模式可以显著降低新玩家面临的挑战。虽然部分机制之间的互动并不常见，但优秀的合作任务玩家至少应该了解：</p>
    <ul>
        <li>任务时间点（尤其是第一波进攻）</li>
        <li><a href="/guides/enemycomps">敌方阵容</a></li>
        <li><a href="/guides/enemycomps">混合体类型</a>、它们的技能及其在地图上的初始位置</li>
        <li>进攻波次出生点</li>
        <li>指挥官速开分矿技巧（例如<a href="/commanders/zeratul">泽拉图</a>）</li>
        <li>指挥官顶部技能</li>
        <li>指挥官被动能力</li>
    </ul>
    <h3 id="attacktypes">留意不同攻击类型</h3>
    <p>合作任务中经常出现点防御无人机和点防御导弹，它们会影响你在任务中的作战效率，尤其是在应对<a href="/resources/mutators">突变因子</a>时。了解即时命中攻击与弹道攻击的含义和区别非常重要。</p>
    <p>这些术语描述单位的攻击类型；面对“导弹指挥”等特定<a href="/resources/mutators">突变因子</a>时，它们可能会影响你的单位选择。</p>
    <p>简单来说，即时命中攻击会在出手瞬间造成伤害；弹道攻击则会发射实体弹体，弹体必须飞抵目标才能造成伤害。有关两者区别的更多细节，请观看以下视频：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/OKg_hJ-ldD8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h3 id="workercounts">工人数量</h3>
    <p>在对战模式中，主基地上方显示的工人数量对应最优采集效率；但在合作任务中，该数值对应最大采集效率。有关这些采集效率的更多信息，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>指南。</p>
    <img src="/images/newplayer/workercounts.jpg" alt="工人数量">
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
