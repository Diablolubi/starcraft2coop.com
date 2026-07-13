<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸2》合作任务 - 指挥官攻略 - 凯瑞甘</title>
  <meta name="description" content="《星际争霸2》合作任务凯瑞甘指挥官攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 凯瑞甘 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/kerrigan">
  <style>
        #content{
            background: url(/images/commanderdata/bgs/kerrigan.png);
            background-repeat: no-repeat;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>凯瑞甘</h1>
    <p id="commanderMotto">刀锋女王</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#comSum">指挥官概览</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#leveling">飞升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#hero">英雄单位</a></p>
        <p><a href="#army">推荐部队组成</a></p>
        <p><a href="#units">作战单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
    </div>
    <h2 id="comSum">指挥官概览</h2>
    <p>凯瑞甘凭借极具进攻性的技能与经典异虫单位掌控战场。</p>
    <h2 id="levelUnlocks">等级解锁</h2>
    <table class="progressionTable">
        <thead>
            <tr>
                <th>等级/图标</th>
                <th>名称</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_01.png" alt = "变异甲壳"></td>
                <td>变异甲壳</td>
                <td>
                    凯瑞甘造成伤害时会获得临时生命值。她若阵亡，将在孵化场中快速复活。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_02.png" alt = "定身波"></td>
                <td>定身波</td>
                <td>
                    解锁凯瑞甘的定身波技能，对她周围大范围内的敌人造成伤害并将其击晕。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_03.png" alt = "冷酷无情"></td>
                <td>冷酷无情</td>
                <td>
                    凯瑞甘的跳跃猛击伤害从150提高至300，施法距离从6提高至12。灵能位移的伤害从50提高至100。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_04.png" alt = "孵化池升级包"></td>
                <td>孵化池升级包</td>
                <td>
                    在孵化池中解锁以下升级：
                    <ul>
                        <li>跳虫的生命值从35提高至45。</li>
                        <li>跳虫的攻击会使目标的护甲降至0，持续10秒。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_05.png" alt = "新单位：潜伏者"></td>
                <td>新单位：潜伏者</td>
                <td>
                    擅长范围伤害的伏击单位。必须潜地才能攻击。由刺蛇变异而来。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_06.png" alt = "刺蛇与潜伏者升级包"></td>
                <td>刺蛇与潜伏者升级包</td>
                <td>
                    在刺蛇巢和潜伏者巢中解锁以下升级：
                    <ul>
                        <li>刺蛇的生命值从80提高至100。</li>
                        <li>解锁刺蛇的狂暴技能，使其攻击速度提高50%，持续15秒。</li>
                        <li>潜伏者的射程从9提高至12。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_07.png" alt = "恶性菌毯"></td>
                <td>恶性菌毯</td>
                <td>
                    所有友方地面单位处于菌毯上时，攻击速度提高30%并获得生命恢复（异虫单位每秒恢复1点生命值）。菌毯肿瘤能更快、更远地扩散菌毯。<br><br>被动技能。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_08.png" alt = "欧米伽坑道虫"></td>
                <td>欧米伽坑道虫</td>
                <td>
                    将坑道网络升级为欧米伽网络，可召唤欧米伽坑道虫。欧米伽坑道虫不消耗资源，可瞬间卸载单位，盟友也可使用。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_09.png" alt = "凯瑞甘升级包"></td>
                <td>凯瑞甘升级包</td>
                <td>
                    在进化腔中解锁以下升级：
                    <ul>
                        <li>升级凯瑞甘的攻击：对目标造成普通伤害后，还会弹射至附近的其他敌人。</li>
                        <li>使凯瑞甘的技能消耗和冷却时间降低20%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_10.png" alt = "狂怒"></td>
                <td>狂怒</td>
                <td>
                    凯瑞甘每次攻击都会使攻击速度提高10%，最多提高50%。<br><br>被动技能。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_11.png" alt = "尖塔升级包"></td>
                <td>尖塔升级包</td>
                <td>
                    在尖塔和巨型尖塔中解锁以下升级：
                    <ul>
                        <li>异龙的攻击在后续弹射时不再降低伤害。</li>
                        <li>使巢虫领主的移动速度提高75%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_12.png" alt = "跳虫进化：迅猛虫"></td>
                <td>跳虫进化：迅猛虫</td>
                <td>
                    将跳虫升级为迅猛虫品系。<br><br>快速近战单位。可越过障碍，从远处扑向目标。造成更高伤害。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_13.png" alt = "雷兽升级包"></td>
                <td>雷兽升级包</td>
                <td>
                    在雷兽窟中解锁以下升级：
                    <ul>
                        <li>解锁雷兽的潜地冲锋技能。雷兽潜入地下并冲向一个敌方单位。</li>
                        <li>升级雷兽的攻击，使其恢复相当于所造成伤害40%的生命值。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_14.png" alt = "雷兽进化：莽兽"></td>
                <td>雷兽进化：莽兽</td>
                <td>
                    将凯瑞甘的雷兽进化为莽兽品系。<br><br>重型突击巨兽。拥有造成范围伤害的顺劈攻击。阵亡后可复活。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/kerrigan/kerrigan_15.png" alt = "刀锋女王"></td>
                <td>刀锋女王</td>
                <td>
                    凯瑞甘的能量恢复速度提高50%。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官获得了显著的实力提升。</p>
    <h2 id="achievements">成就</h2>
    <p>凯瑞甘的专属成就如下：</p>
    <table>
        <thead>
            <tr>
                <th>成就</th>
                <th>名称</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/achievements/kerrigan/inthenameoflove.jpg" alt="以爱之名"></td>
                <td>以爱之名</td>
                <td>在合作任务中使用凯瑞甘的定身波击晕5,000个敌方单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/kerrigan/makeitrain.jpg" alt="挥金如土"></td>
                <td>挥金如土</td>
                <td>在合作任务中使用凯瑞甘的同化光环为盟友生成50,000资源。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/kerrigan/nowiambecomedeath.jpg" alt="现在，我成了死神……"></td>
                <td>现在，我成了死神……</td>
                <td>在困难难度的单场任务中使用凯瑞甘消灭100个单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/kerrigan/walkingdead.jpg" alt="行尸走肉"></td>
                <td>行尸走肉</td>
                <td>在困难难度的单场任务中使用凯瑞甘的跳跃猛击消灭50个单位。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">飞升前升级</h2>
    <p>难度：简单</p>
    <p>凯瑞甘（英雄单位）极其强大，应尽可能多加利用。部队应以大量刺蛇为主，并通过坑道虫（之后是欧米伽坑道虫）增援。在解锁欧米伽坑道虫之前，应把坑道虫出口放在离交战地点更远的位置，因为普通坑道虫的增援速度要慢得多。</p>
    <p>提升精通等级时，先将点数投入技能组1的能量恢复精通，达到你需要的点数后再投入攻击伤害。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是凯瑞甘的三组技能组及各自的推荐点数分配。这是一套未选择威望时适用于所有地图的通用配置。强烈建议根据自己的玩法和所面对的具体挑战调整精通点数（例如<a href="/resources/weeklymutations">每周突变</a>）。</p>
    <p>技能组1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通项目</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>凯瑞甘能量恢复</td>
                <td>每点1.5%<br>最高45%</td>
                <td>22</td>
                <td rowspan="2">这两项精通能从不同方面强化凯瑞甘，如何分配取决于你的需要。如果经常缺少能量，可以多投入几点能量恢复精通。</td>
            </tr>
            <tr>
                <td>凯瑞甘攻击伤害</td>
                <td>每点1<br>最高30</td>
                <td>8</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">此处取决于个人偏好。22/8的分配让凯瑞甘能用3次普通攻击消灭女妖；28/2的分配则让她能用3次普通攻击消灭异龙。</p>
    <p>技能组2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通项目</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>作战单位高能瓦斯消耗</td>
                <td>每点-1%<br>最高-30%</td>
                <td>?</td>
                <td rowspan="2">这两项精通都很出色，点数分配取决于玩法。可选择11/19的分配，使定身波能够1次消灭女妖和虫群宿主等单位。</td>
            </tr>
            <tr>
                <td>强化定身波</td>
                <td>每点3.33%<br>最高100%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">此处取决于你的玩法偏好。若采用凯瑞甘单英雄打法，定身波精通非常出色；否则，作战单位精通能大幅降低部队的生产成本。</p>
    <p>技能组3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通项目</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>快速进化</td>
                <td>每点-2%<br>最高-60%</td>
                <td>29</td>
                <td rowspan="2">通常来说，进化精通非常重要。不过在某些情况下（例如面对特定突变因子），你可能更希望提高凯瑞甘的主要技能伤害和攻击速度。</td>
            </tr>
            <tr>
                <td>主要技能伤害和攻击速度</td>
                <td>每点1%<br>最高30%</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">降低进化升级的费用和研究时间，可让你尽快完成“技能效率”，提升凯瑞甘的实力。主要技能强化投入 1 点后，主要技能只需命中两次即可消灭潜地的潜伏者。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是凯瑞甘的各项威望。“完全生效等级”指该威望达到完整效果时所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>恶毒族长</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>恶性菌毯的效果提高100%。</li>
                        <li>虫后不再受到减速影响，并且可在菌毯之外放置菌毯肿瘤。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用坑道网络和欧米伽网络。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>阿巴瑟盟友的坑道虫仍会升级为欧米伽坑道虫</li>
                        <li>恶性菌毯对斯托科夫的被感染单位无效</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>7</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望以机动性换取更强的菌毯效果，通过额外攻击速度、治疗和地图视野来强化你与盟友的单位。使用这一威望时，通过已有菌毯肿瘤继续扩散菌毯，远比重新放置肿瘤更好，因为新放置的菌毯肿瘤成型速度要慢得多。该威望非常适合与能轻松扩散菌毯的指挥官配合，例如斯托科夫和阿巴瑟。</td>
            </tr>
        </tbody>
    </table>
    <p><b>效果加成：</b></p>
    <ul>
        <li>攻击速度加成翻倍（提高至+60%）</li>
        <li>生命恢复速度加成翻倍（提高至2HP/s）</li>
        <li>菌毯肿瘤建造距离提高3</li>
        <li>菌毯肿瘤视野范围提高3</li>
        <li>菌毯扩散范围提高3</li>
        <li>菌毯扩散速度翻倍</li>
    </ul>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>人类的愚行</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>凯瑞甘使用跳跃猛击或灵能位移时会消耗狂怒层数，对附近敌人造成50点伤害并将其击晕3秒。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>凯瑞甘生成的甲壳值降低50%。</li>
                        <li>凯瑞甘的技能伤害降低50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>每次普通攻击获得1层狂怒</li>
                        <li>狂怒最多叠加5层</li>
                        <li>击晕与狂怒伤害的范围为10</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>10</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望非常适合凯瑞甘进攻敌方基地。她不仅能有效杀伤敌方单位，还能将其击晕，让你安全地从坑道虫中卸载部队，避免刚出洞就遭到技能攻击。它更擅长对付少量高生命值单位，而非大量低生命值单位，但会明显降低凯瑞甘集中摧毁建筑的速度。</td>
            </tr>
        </tbody>
    </table>
    <p><b>狂怒层数机制：</b></p>
    <p>每次普通攻击都会获得一层狂怒，最多5层，并使攻击速度提高10%。如果凯瑞甘连续5秒未进行普通攻击，所有狂怒层数都会消失。</p>
    <p>使用跳跃猛击或灵能位移时，会消耗所有狂怒层数。每层狂怒会按下表寻找一定数量的目标。不同层之间可以选中同一目标，但同一层不会重复选择同一目标。每个被选中的目标受到50点伤害。命中目标不需要侦测能力。</p>
    <table>
        <thead>
            <tr>
                <th>层数</th>
                <th>目标数</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>6</td>
            </tr>
            <tr>
                <td>5</td>
                <td>12</td>
            </tr>
        </tbody>
    </table>
    <p>由此可得出两点：
        <ol>
            <li>理论上对单个目标最多可造成250点伤害，即每层狂怒都选中了该目标。</li>
            <li>理论上最多可命中24个单位，即每层狂怒都选择了与其他层不同的目标。</li>
        </ol>
    </p>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>荒寂女王</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>同化光环掉落的资源提高100%。</li>
                        <li>凯瑞甘获得动能冲击和粉碎之握。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用跳跃猛击和灵能位移</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>粉碎之握可用于显现隐形/潜地单位</li>
                        <li>这两个技能都能命中空中单位</li>
                        <li>这两个技能都受主要技能强化精通影响</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望用一个同等威力且可攻击空中单位的技能替换了跳跃猛击，但代价是失去灵能位移这一更强的范围伤害手段，也无法再用跳跃猛击和灵能位移进行机动。粉碎之握的作用范围很小（半径1.75），理论上命中的单位数量不如灵能位移，但它能击晕范围内的单位，价值极高。定身波和粉碎之握的击晕持续时间会相互覆盖，搭配使用时务必小心。同化光环的资源掉落翻倍，能明显加快经济成型。</td>
            </tr>
        </tbody>
    </table>
    <p>常规玩法推荐P0（无威望，刀锋女王）、P2（人类的愚行）和P3（荒寂女王）。P3在对空方面表现更好（对空是凯瑞甘普遍存在的弱点），但对付前期大量敌军时较弱。只要凯瑞甘能够积攒狂怒层数，并避免与大量近身敌人交战，P2就能提供可观的远程伤害，不过部分玩家会觉得它不太适合新手。它能让凯瑞甘更高效地清理敌方基地并保护部队。</p>
    <h2 id="hero">英雄单位</h2>
    <a class="unitStatsLink" href="/units/#kerrigan/kerrigan"><img id="heroPic" src="/images/commanderdata/hero/kerrigan/kerrigan.jpg" alt="凯瑞甘"></a>
    <p>登场时间：4:00</p>
    <p>复活时间：1:00</p>
    <p>凯瑞甘的技能如下：</p>
    <table class="abilityTable">
        <thead>
            <tr>
                <th>技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>冷却时间</th>
                <th>能量消耗</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/leapingstrike.png" alt = "跳跃猛击"></td>
                <td>跳跃猛击</td>
                <td>凯瑞甘跃向目标并造成300点伤害。也可在无目标时使用，以快速移动。</td>
                <td>0秒</td>
                <td>50</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/psionicshift.png" alt = "灵能位移"></td>
                <td>灵能位移</td>
                <td>凯瑞甘冲过敌人，对沿途所有敌人造成100点伤害。</td>
                <td>0秒</td>
                <td>50</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/assimilationaura.png" alt = "同化光环"></td>
                <td>同化光环</td>
                <td>使附近所有敌人在被消灭时掉落资源。效果持续15秒。</td>
                <td>120秒</td>
                <td>0</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/immobilizationwave.png" alt = "定身波"></td>
                <td>定身波</td>
                <td>对凯瑞甘周围大范围（27距离）内的敌人造成100点伤害，并将其击晕10秒。<br><br>英雄单位则会被减速。</td>
                <td>初始冷却：600秒<br>冷却时间：180秒</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p>选择荒寂女王威望后，英雄单位将被新的英雄单位替换。该单位的技能如下：</p>
    <a class="unitStatsLink" href="/units/#kerrigan/kerrigan"><img id="heroPic" src="/images/commanderdata/hero/kerrigan/kerrigan2.jpg" alt="凯瑞甘"></a>
    <table class="abilityTable">
        <thead>
            <tr>
                <th>技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>冷却时间</th>
                <th>能量消耗</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/kineticblast.png" alt = "动能冲击"></td>
                <td>动能冲击</td>
                <td>凯瑞甘从远距离对目标单位或建筑造成300点伤害。</td>
                <td>0秒</td>
                <td>50</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/crushinggrip.png" alt = "粉碎之握"></td>
                <td>粉碎之握</td>
                <td>击晕目标区域内的敌人，并在5秒内造成50点伤害。英雄单位则会被减速。</td>
                <td>0秒</td>
                <td>75</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/assimilationaura.png" alt = "同化光环"></td>
                <td>同化光环</td>
                <td>使附近所有敌人在被消灭时掉落资源。效果持续15秒。</td>
                <td>120秒</td>
                <td>0</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/immobilizationwave.png" alt = "定身波"></td>
                <td>定身波</td>
                <td>对凯瑞甘周围大范围内的敌人造成100点伤害，并将其击晕10秒。<br><br>英雄单位则会被减速。</td>
                <td>初始冷却：600秒<br>冷却时间：180秒</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p>凯瑞甘的升级如下：</p>
    <table class="heroUpgrades">
        <thead>
            <tr>
                <th>升级</th>
                <th>名称</th>
                <th>效果</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                <th>研究时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/heroicfortitude.png" alt="英雄气概"></td>
                <td>英雄气概</td>
                <td>凯瑞甘的最大生命值提高200。<br>生命恢复速度提高100%。</td>
                <td>100/100</td>
                <td>60秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/chainreaction.png" alt="连锁反应"></td>
                <td>连锁反应</td>
                <td>凯瑞甘的攻击对目标造成普通伤害后，会弹射至附近的其他敌人，对最多四个额外目标造成10点伤害。</td>
                <td>150/150</td>
                <td>90秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/kerrigan/abilityefficiency.png" alt="技能效率"></td>
                <td>技能效率</td>
                <td>凯瑞甘的技能消耗和冷却时间降低20%。</td>
                <td>200/200</td>
                <td>120秒</td>
            </tr>
        </tbody>
    </table>
    <h2 id="army">推荐部队组成</h2>
    <p>凯瑞甘的推荐部队组成如下。此处假定未选择威望天赋，并采用推荐精通点数。这只是部队框架的基础建议。建议先了解<a href="#units">单位</a>章节中的每个单位，再按需加入科技单位，以便更好地应对不同局面。</p>
    <img class="army" src="/images/commanderdata/units/kerrigan/hydralisk.jpg" alt="刺蛇">
    <p>大量刺蛇非常适合凯瑞甘：它们从欧米伽坑道虫中卸载后，可借助狂暴技能打出极高的爆发伤害。</p>
    <div class="techContainer"><img class="army" src="/images/commanderdata/units/kerrigan/lurker.jpg" alt="潜伏者"><div class="techAdd">+</div></div>
    <p>需要防守特定隘口时，可在部队中加入潜伏者。</p>
    <script>
        $(".army").on('mouseover',function(e){
            var unit = $(this).attr("alt").split(":");
            $("#tooltip").html("<b>" + unit[0] + "</b>");
            $("#tooltip").show();
        });
        $(".army").on('mouseleave',function(){
            $("#tooltip").hide();
        });
        $(".army").on('mousemove',function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
        $(".techAdd").on('mouseover',function(e){
            var unit = $(this).siblings(".army").attr("alt").split(":");
            $("#tooltip").html("<b>" + unit[0] + "</b>");
            $("#tooltip").show();
        });
        $(".techAdd").on('mouseleave',function(){
            $("#tooltip").hide();
        });
        $(".techAdd").on('mousemove',function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
    </script>
    <h2 id="units">作战单位</h2>
    <p>如需了解凯瑞甘单位的详细属性、单位对比和升级计算，请访问<a href="/units/#kerrigan">数据表</a>页面。</p>
    <p>凯瑞甘的作战单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/queen">
                <img src="/images/commanderdata/units/kerrigan/queen.jpg" alt="虫后">
                <p>虫后</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>可用于注入幼虫和扩散菌毯。</li>
                <li>由于有欧米伽坑道虫，通常不建议用虫后扩散菌毯。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/kerrigan/spawncreeptumor.png" alt="生成菌毯肿瘤"></td>
                        <td>生成菌毯肿瘤</td>
                        <td>潜入地下的菌毯生成器。菌毯可供养附近的异虫建筑。菌毯肿瘤还可生成新的菌毯肿瘤。<br><br>加成：异虫在菌毯上的移动速度更快。</td>
                        <td>15秒</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/kerrigan/spawnlarva.png" alt="孵化幼虫"></td>
                        <td>孵化幼虫</td>
                        <td>目标孵化场、虫穴或蜂巢会在40秒内孵化4只幼虫。</td>
                        <td>25秒</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/kerrigan/transfusion.png" alt="输血"></td>
                        <td>输血</td>
                        <td>立即为目标生物单位或建筑恢复125点生命值。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：无</p>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/zergling">
                <img src="/images/commanderdata/units/kerrigan/zergling.jpg" alt="跳虫">
                <p>跳虫</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>通常用于清理分矿。</li>
                <li>也可在区域主力被清除后收拾残余敌军。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/metabolicboost.png" alt="代谢加速"></td>
                        <td>代谢加速</td>
                        <td>跳虫的移动速度提高60%。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/hardenedcarapace.png" alt="硬化甲壳"></td>
                        <td>硬化甲壳</td>
                        <td>跳虫的最大生命值提高10。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/adrenaloverload.png" alt="肾上腺超载"></td>
                        <td>肾上腺超载</td>
                        <td>跳虫的攻击速度提高40%。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/shreddingclaws.png" alt="撕裂利爪"></td>
                        <td>撕裂利爪</td>
                        <td>跳虫的攻击会使目标的护甲降至0，持续10秒。</td>
                        <td>150/150</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/hydralisk">
                <img src="/images/commanderdata/units/kerrigan/hydralisk.jpg" alt="刺蛇">
                <p>刺蛇</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>每秒伤害极高。</li>
                <li>出色的对空选择。</li>
                <li>本身较为脆弱，需要更强的前排保护。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="unlockable autocast">
                        <td><img src="/images/commanderdata/unitskills/kerrigan/frenzy.png" alt="狂暴"></td>
                        <td>狂暴</td>
                        <td>攻击速度提高50%，持续15秒。</td>
                        <td>30秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/muscularaugments.png" alt="肌肉增强"></td>
                        <td>肌肉增强</td>
                        <td>刺蛇的移动速度提高25%，射程提高1。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/ancillarycarapace.png" alt="辅助甲壳"></td>
                        <td>辅助甲壳</td>
                        <td>刺蛇的最大生命值提高20。</td>
                        <td>150/150</td>
                        <td>90秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/frenzy.png" alt="狂暴"></td>
                        <td>狂暴</td>
                        <td>刺蛇的攻击速度提高50%，持续15秒。</td>
                        <td>200/200</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/lurker">
                <img src="/images/commanderdata/units/kerrigan/lurker.jpg" alt="潜伏者">
                <p>潜伏者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>沿直线造成伤害，是出色的防御单位。</li>
                <li>射程升级使其明显优于大多数其他防御单位。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/seismicspines.png" alt="震地棘刺"></td>
                        <td>震地棘刺</td>
                        <td>潜伏者的射程提高3。</td>
                        <td>200/200</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/ultralisk">
                <img src="/images/commanderdata/units/kerrigan/ultralisk.jpg" alt="雷兽">
                <p>雷兽</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>能为较脆弱的单位承担大量伤害。</li>
                <li>雷兽之间容易相互阻挡，因此通常不建议大量生产。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="unlockable autocast">
                        <td><img src="/images/commanderdata/unitskills/kerrigan/burrowcharge.png" alt="潜地冲锋"></td>
                        <td>潜地冲锋</td>
                        <td>雷兽潜入地下并冲向单位。雷兽钻出地面时，会击退附近所有敌方单位并将其击晕2秒。</td>
                        <td>10秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/chitinousplating.png" alt="几丁质甲壳"></td>
                        <td>几丁质甲壳</td>
                        <td>雷兽获得+2护甲。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/burrowcharge.png" alt="潜地冲锋"></td>
                        <td>潜地冲锋</td>
                        <td>使雷兽可以使用潜地冲锋技能。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/tissueassimilation.png" alt="组织同化"></td>
                        <td>组织同化</td>
                        <td>雷兽的普通攻击可为其恢复生命值，恢复量相当于所造成伤害的40%。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/mutalisk">
                <img src="/images/commanderdata/units/kerrigan/mutalisk.jpg" alt="异龙">
                <p>异龙</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强力单位，可攻击空中和地面目标。</li>
                <li>弹射刃虫可以歼灭整波敌军。</li>
                <li>极其脆弱，容易受到范围伤害重创。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/rapidregeneration.png" alt="快速再生"></td>
                        <td>快速再生</td>
                        <td>异龙脱离战斗后会快速恢复生命值。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/viciousglave.png" alt="凶残刃虫"></td>
                        <td>凶残刃虫</td>
                        <td>异龙的攻击额外弹射三次，最多命中六个目标，弹射距离也会提高。</td>
                        <td>150/150</td>
                        <td>90秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/severingglave.png" alt="撕裂刃虫"></td>
                        <td>撕裂刃虫</td>
                        <td>异龙的攻击在后续弹射时不再降低伤害。</td>
                        <td>200/200</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#kerrigan/broodlord">
                <img src="/images/commanderdata/units/kerrigan/broodlord.jpg" alt="巢虫领主">
                <p>巢虫领主</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>本身脆弱且价格昂贵，通常不建议使用。</li>
                <li>其他单位可以更高效地承担其职责。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/kerrigan/porouscartilage.png" alt="多孔软骨"></td>
                        <td>多孔软骨</td>
                        <td>巢虫领主的移动速度提高75%，生命值提高100。</td>
                        <td>150/150</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是凯瑞甘的标准经济型建造顺序。如需了解如何阅读并制定自己的建造顺序，请查看<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        14 王虫<br>
        14 岩石处建造运营孵化场<br>
        19 萃取巢<br>
        21 萃取巢<br>
        24 岩石处建造运营孵化场<br>
        28 孵化池<br>
        33 王虫<br>
        凯瑞甘 -> 岩石
    </p>
    <h2 id="guide">玩法攻略</h2>
    <h3>玩法误区</h3>
    <p>无</p>
    <h3>玩法提示</h3>
    <ul>
        <li>技能效率对凯瑞甘的所有技能都有效，包括定身波。</li>
        <li>凯瑞甘极其强大，尤其是在游戏前期。务必让她始终活跃在战场上。</li>
        <li>同化光环冷却完毕后应尽快使用，它能大幅推动你的经济发展。</li>
        <li>欧米伽坑道虫赋予凯瑞甘无与伦比的机动性。至少应建造两条坑道虫，并编入快捷键。</li>
        <li>使用欧米伽坑道虫提供侦测，并在整张地图上扩散菌毯。</li>
        <li>将单位装入坑道虫/欧米伽坑道虫，可使其免受持续伤害（DoT）。</li>
        <li>坑道虫内的单位仍可获得恶性菌毯的生命恢复加成。</li>
        <li>定身波的作用范围比屏幕宽度还大。合理调整凯瑞甘的位置，尽可能发挥技能价值。</li>
        <li>定身波会使命中的隐形目标现形。</li>
        <li>最先完成的两项升级应是提高凯瑞甘生命值的“英雄气概”和降低凯瑞甘技能冷却时间的“技能效率”。</li>
        <li>凯瑞甘的菌毯加成适用于所有菌毯，包括斯托科夫自动扩散的菌毯。</li>
        <li>用虫后为凯瑞甘施放输血，提高英雄单位的战场存续时间，尤其是在单英雄作战时。</li>
        <li>凯瑞甘的灵能位移无需侦测能力也能伤害隐形或潜地目标。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
