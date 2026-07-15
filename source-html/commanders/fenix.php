<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>星际争霸 II 合作任务 - 指挥官攻略 - 菲尼克斯</title>
  <meta name="description" content="星际争霸 II 合作任务指挥官菲尼克斯攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 菲尼克斯 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/fenix">
  <style>
        #content{
            background: url(/images/commanderdata/bgs/fenix.png);
            background-repeat: no-repeat;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>菲尼克斯</h1>
    <p id="commanderMotto">净化者执行官</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#comSum">指挥官概要</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#suits">菲尼克斯装甲</a></p>
        <p><a href="#leveling">晋升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐部队组成</a></p>
        <p><a href="#units">战斗单位</a></p>
        <p><a href="#champions">勇士人工智能</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法指南</a></p>
    </div>
    <h2 id="comSum">指挥官概要</h2>
    <p>菲尼克斯可切换多种装甲形态，并率领由人工智能勇士带领的部队主宰战场。</p>
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
                <td><img src="/images/commanderdata/progression/fenix/fenix_01.png" alt = "灵活部署"></td>
                <td>灵活部署</td>
                <td>
                    菲尼克斯可使用多种装甲形态折跃至战场上任意位置。装甲未在战场上激活时才会恢复生命值和能量。<br><br>菲尼克斯的战斗单位费用降低20%。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_02.png" alt = "解锁：净化者议会"></td>
                <td>解锁：净化者议会</td>
                <td>
                    解锁净化者议会建筑，可在其中研究星灵英雄的人工智能人格。研究完成后，这些人工智能人格会自动下载至任意可用的宿主单位。<br><br>解锁的人工智能人格：
                    <ul>
                        <li>卡尔达利斯 - 军团战士</li>
                        <li>塔里斯 - 使徒</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/fenix/fenix_03.png" alt = "解锁：塞布罗斯仲裁者装甲"></td>
                <td>解锁：塞布罗斯仲裁者装甲</td>
                <td>
                   解锁塞布罗斯仲裁者装甲。塞布罗斯仲裁者可使自身和附近友军隐形，将友方单位召回至自身位置，并用静滞力场令敌方单位失去行动能力。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_04.png" alt = "突击勇士研究包"></td>
                <td>突击勇士研究包</td>
                <td>
                    在暮光议会中解锁以下升级：
                    <ul>
                        <li>卡尔达利斯的攻击可造成范围伤害。</li>
                        <li>塔里斯的弹射战刃额外弹射5次，并使受影响的单位受到额外伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_05.png" alt = "勇士人工智能：塔达林与莫乔"></td>
                <td>勇士人工智能：塔达林与莫乔</td>
                <td>
                    在净化者议会中解锁额外的人工智能人格：
                    <ul>
                        <li>塔达林 - 不朽者</li>
                        <li>莫乔 - 侦察机</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_06.png" alt = "菲尼克斯升级包"></td>
                <td>菲尼克斯升级包</td>
                <td>
                    在锻炉中解锁以下升级：
                    <ul>
                        <li>菲尼克斯的所有装甲形态获得+15攻击伤害。</li>
                        <li>菲尼克斯的塞布罗斯仲裁者装甲获得探测能力。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_07.png" alt = "新单位：干扰者"></td>
                <td>新单位：干扰者</td>
                <td>
                    机械干扰单位。可使用净化新星造成大量范围伤害。可由机械台折跃。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_08.png" alt = "勇士人工智能：战争使者与克罗拉里昂"></td>
                <td>勇士人工智能：战争使者与克罗拉里昂</td>
                <td>
                    在净化者议会中解锁额外的人工智能人格：
                    <ul>
                        <li>战争使者 - 巨像</li>
                        <li>克罗拉里昂 - 航母</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_09.png" alt = "专家升级包"></td>
                <td>专家升级包</td>
                <td>
                    解锁以下升级：
                    <ul>
                        <li>干扰者永久隐形（在机械研究所中研究）。</li>
                        <li>干扰者的净化新星会爆炸两次（在机械研究所中研究）。</li>
                        <li>保护者的保护力场持续时间提高100%（在控制芯核中研究）。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/fenix/fenix_10.png" alt = "高效运作"></td>
                <td>高效运作</td>
                <td>
                    生产和科技建筑不再有科技要求，矿物费用降低50%，高能瓦斯费用降低100%。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_11.png" alt = "复仇协议"></td>
                <td>复仇协议</td>
                <td>
                    同类型的宿主躯壳每次被摧毁时，勇士都会获得攻击速度（每人口10%）和移动速度（每人口5%）；转移至新宿主躯壳时则获得50%的速度加成。速度加成最多可叠加至200%，若未刷新则持续20秒。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/fenix/fenix_12.png" alt = "强袭勇士升级包"></td>
                <td>强袭勇士升级包</td>
                <td>
                    解锁以下升级：
                    <ul>
                        <li>塔达林的攻击会在敌人身上储存伤害，目标阵亡时释放所储伤害并造成范围伤害（在机械研究所中研究）。</li>
                        <li>使莫乔能够发射一轮反物质导弹（在舰队航标中研究）。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/fenix/fenix_13.png" alt = "快速充能"></td>
                <td>快速充能</td>
                <td>
                    当前离线的菲尼克斯装甲恢复生命值和护盾的速度提高20%。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/fenix/fenix_14.png" alt = "攻城勇士升级包"></td>
                <td>攻城勇士升级包</td>
                <td>
                    解锁以下升级：
                    <ul>
                        <li>战争使者获得对敌方单位发射毁灭性能量束的能力（在机械研究所中研究）。</li>
                        <li>克罗拉里昂可制造禁绝者轰炸敌方单位（在舰队航标中研究）。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/fenix/fenix_15.png" alt = "战术数据网"></td>
                <td>战术数据网</td>
                <td>
                    每名人工智能勇士的特殊技能都会根据同类型的现役宿主躯壳数量获得加成（最多计算20人口）。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官的重要强势等级。</p>
    <h2 id="achievements">成就</h2>
    <p>菲尼克斯的专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/fenix/carrierme.jpg" alt="航母护航"></td>
                <td>航母护航</td>
                <td>在合作任务开始后的前10分钟内折跃4艘航母，并完成克罗拉里昂人工智能的研究。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/fenix/championsassemble.jpg" alt="勇士集结"></td>
                <td>勇士集结</td>
                <td>在一场合作任务中，让全部6名勇士同时出现在战场上。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/fenix/suitup.jpg" alt="全副武装！"></td>
                <td>全副武装！</td>
                <td>在合作任务中使用菲尼克斯造成300,000点伤害。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/fenix/theaipersonalitytest.jpg" alt="人工智能人格测试"></td>
                <td>人工智能人格测试</td>
                <td>在合作任务中使用勇士造成300,000点伤害。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="suits">菲尼克斯装甲</h2>
    <p>初始冷却时间：4:00</p>
    <p>菲尼克斯没有面板召唤技能，而是能在战场上任意有视野的位置部署三种装甲之一。部署装甲有15秒冷却时间。若装甲被摧毁，需等待180秒才能再次使用。每种装甲都针对特定用途设计，并拥有独立技能，详情如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/fenixpraetorarmor">
                <img src="/images/commanderdata/abilities/fenix/praetorarmor.jpg" alt="执政官装甲">
                <p>执政官装甲</p>
            </a>
        </div>
        <div>
            <table class="unitAbilities">
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
                        <td><img src="/images/commanderdata/abilities/fenix/thunderouscharge.png" alt="雷霆冲锋"></td>
                        <td>雷霆冲锋</td>
                        <td>菲尼克斯冲向目标位置，造成50点伤害并使所有敌人昏迷5秒。</td>
                        <td>10秒</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/fenix/whirlwind.png" alt="旋风斩"></td>
                        <td>旋风斩</td>
                        <td>附近所有敌人每秒受到70点伤害，持续3秒。旋风斩激活期间菲尼克斯可以移动。</td>
                        <td>10秒</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/fenix/shieldcapacitor.png" alt="护盾电容器"></td>
                        <td>护盾电容器</td>
                        <td>完全恢复菲尼克斯的护盾。启用自动施放后，菲尼克斯的护盾耗尽时会激活护盾电容器。</td>
                        <td>5秒</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/fenixsolaritedragoon">
                <img src="/images/commanderdata/abilities/fenix/solaritedragoon.jpg" alt="太阳能龙骑士">
                <p>太阳能龙骑士</p>
            </a>
        </div>
        <div>
            <table class="unitAbilities">
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
                        <td><img src="/images/commanderdata/abilities/fenix/solarcannon.png" alt="太阳能加农炮"></td>
                        <td>太阳能加农炮</td>
                        <td>发射一道穿透光束，对沿途所有敌方地面单位造成100点伤害。</td>
                        <td>6秒</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/fenix/solariteflare.png" alt="太阳能耀斑"></td>
                        <td>太阳能耀斑</td>
                        <td>发射在空中爆炸的耀斑，对敌方空中单位造成100点伤害。</td>
                        <td>10秒</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/fenix/arsenalovercharge.png" alt="武器库过载"></td>
                        <td>武器库过载</td>
                        <td>激活武器库过载后，伤害技能在10秒内没有冷却时间。</td>
                        <td>120秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/fenixcybrosarbiter">
                <img src="/images/commanderdata/abilities/fenix/cybrosarbiter.jpg" alt="塞布罗斯仲裁者">
                <p>塞布罗斯仲裁者</p>
            </a>
        </div>
        <div>
            <table class="unitAbilities">
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
                        <td><img src="/images/commanderdata/abilities/fenix/stasisfield.png" alt="静滞力场"></td>
                        <td>静滞力场</td>
                        <td>使目标区域内的敌方单位进入静滞状态，持续15秒。静滞中的单位无法移动、攻击、被攻击或受技能影响。</td>
                        <td>10秒</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/fenix/cloakingfield.png" alt="启用隐形力场"></td>
                        <td>启用隐形力场</td>
                        <td>启用隐形力场，使菲尼克斯附近的友方单位隐形。维持该力场每秒消耗5点能量。</td>
                        <td>0秒</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/fenix/recall.png" alt="召回"></td>
                        <td>召回</td>
                        <td>将目标区域内的所有友方单位传送至仲裁者所在位置。</td>
                        <td>0秒</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>菲尼克斯的升级如下：</p>
    <table class="heroUpgrades">
        <thead>
            <tr>
                <th>升级</th>
                <th>名称</th>
                <th>效果</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                <th>研究时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/hero/fenix/purifierarmaments.png" alt="净化者武装"></td>
                <td>净化者武装</td>
                <td>菲尼克斯的所有装甲形态获得+15攻击伤害。</td>
                <td>75/75</td>
                <td>90秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/fenix/observationprotocol.png" alt="观测协议"></td>
                <td>观测协议</td>
                <td>使菲尼克斯的塞布罗斯仲裁者装甲获得探测能力，可以发现隐形敌人。</td>
                <td>50/50</td>
                <td>60秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/fenix/astrongheart.png" alt="坚定之心"></td>
                <td>坚定之心</td>
                <td>“我不想再被称作菲尼克斯。”将“菲尼克斯”更名为“塔兰达”。仅改变外观名称。</td>
                <td>13/13</td>
                <td>10秒</td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">晋升前升级</h2>
    <p>难度：简单</p>
    <p>混合使用多种单位，升级初期重点发展使徒、不朽者和航母。尽可能依靠菲尼克斯的装甲技能，提高部队的生存能力。</p>
    <p>提升精通等级期间，若准备使用技能组3的初始人口精通，请为其分配点数。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是菲尼克斯的三个技能组及各自的推荐点数分配。这是一套未选择任何威望、适用于所有地图的通用配置。强烈建议根据你的玩法和面对的具体挑战（例如<a href="/resources/weeklymutations">每周突变</a>）调整精通。</p>
    <p>技能组1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐点数</th>
                <th>补充说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>菲尼克斯装甲攻击速度</td>
                <td>每点2%<br>最高60%</td>
                <td>?</td>
                <td rowspan="2">如果玩家频繁主动切换装甲，并在每次使用时耗尽能量，应考虑提高装甲的能量恢复速度。</td>
            </tr>
            <tr>
                <td>菲尼克斯装甲离线能量恢复</td>
                <td>每点0.75%<br>最高22.5%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">这一组取决于个人偏好和玩法。如果你用菲尼克斯处理进攻波，推荐能量恢复；如果让菲尼克斯与主力部队协同作战，攻击速度精通会更实用。</p>
    <p>技能组2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐点数</th>
                <th>补充说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>勇士人工智能攻击速度</td>
                <td>每点1%<br>最高30%</td>
                <td>?</td>
                <td rowspan="2">勇士人工智能极为强大；选择取决于你希望他们承担伤害，还是成为菲尼克斯部队的核心输出。</td>
            </tr>
            <tr>
                <td>勇士人工智能生命值和护盾</td>
                <td>每点2%<br>最高60%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">这一组同样取决于个人偏好。生命值和护盾精通能让卡尔达利斯等勇士更加耐打，攻击速度精通则能大幅提高勇士的每秒伤害。</p>
    <p>技能组3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐点数</th>
                <th>补充说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>时空提速效率</td>
                <td>每点1%<br>最高30%</td>
                <td>27</td>
                <td rowspan="2">额外初始人口可减少前期建造水晶塔的资源投入，让菲尼克斯更快生产部队和探机。不过，较弱的时空提速会持续拖慢他在游戏后期的发展。</td>
            </tr>
            <tr>
                <td>额外初始人口</td>
                <td>每点2<br>最高60</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">以上点数分配可作为起点。根据你的运营效率，为初始人口投入更多点数可减少建造水晶塔的需求，而时空提速效率则能缩短首名勇士成型所需的时间。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是菲尼克斯的威望。“生效等级”指威望发挥完整效果所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>阿昆德拉</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>所有装甲形态造成的伤害提高100%。</li>
                        <li>技能冷却时间缩短50%。</li>
                        <li>储存期间的生命值、护盾和能量恢复速度提高100%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>所有装甲形态的部署冷却时间延长700%。</li>
                        <li>每种装甲每次只能维持20秒。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>装甲冷却时间：2分钟</li>
                        <li>装甲重建时间：5分钟</li>
                        <li>与说明不同，仲裁者装甲实际上没有冷却时间</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>阿昆德拉让菲尼克斯能够凭借精准施放的技能清空整座敌方基地。这个威望极为强大，但玩家必须了解敌方基地及其中的单位，才能选择正确装甲加以应对。此外，损失装甲——尤其是太阳能龙骑士——会受到非常严厉的惩罚。这个威望也很考验玩家的运营能力，因为在理想打法下，玩家有50%的时间都要操作装甲。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>网络管理员</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>战术数据网的效果提高200%。</li>
                        <li>所有战斗单位的费用降低50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>所有非英雄战斗单位造成的伤害降低50%，生命值和护盾降低50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>卡尔达利斯的顺劈攻击让他从此威望中获益最多</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>15</td>
            </tr>
            <tr>
                <th>建议</th><td>这个威望要求菲尼克斯采用独特的玩法：让菲尼克斯和勇士人工智能并肩冲在前线，推进敌方基地并应对进攻波；宿主躯壳则留在后方、远离激战，在前线勇士阵亡后迅速提供替补。若让躯壳部队一同推进会造成惨重损失，因此必须妥善管理控制编队。</td>
            </tr>
        </tbody>
    </table>
    <p><b>效果加成：</b></p>
    <ul>
        <li>卡尔达利斯的强化利刃从每个躯壳获得的伤害加成提高至三倍</li>
        <li>塔里斯的弹射战刃从每个躯壳获得的伤害加成提高至三倍</li>
        <li>塔达林的引力过载从每个躯壳获得的伤害储存加成提高至三倍</li>
        <li>战争使者的净化轰击从每个躯壳获得的伤害加成提高至三倍</li>
        <li>莫乔的压制程序从每个躯壳获得的伤害加成提高至三倍</li>
        <li>克罗拉里昂的禁绝者从每个躯壳获得的伤害加成提高至三倍</li>
    </ul>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>不屈意志</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>复仇协议的效果提高100%。</li>
                        <li>勇士人工智能阵亡时返还其基础单位费用的75%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>勇士人工智能不再获得额外生命值或护盾，且攻击射程降低（-2射程）。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>勇士人工智能耐久度精通仍然有效，但不应与此威望搭配使用</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>11</td>
            </tr>
            <tr>
                <th>建议</th><td>这个威望通过降低勇士人工智能的耐久度和攻击射程，鼓励玩家利用复仇协议。这会迫使勇士走上前线，也更容易被埃蒙的部队击杀。理论上这种策略可行，但玩家会遇到单位互相阻挡的问题。人工智能勇士转移至新躯壳后，可能出现在部队后方；等他们挤到前线参战时，复仇协议的效果也许已经消失。此威望适合搭配勇士人工智能攻击速度精通。</td>
            </tr>
        </tbody>
    </table>
    <p><b>效果加成：</b></p>
    <ul>
        <li>复仇协议的攻击速度加成翻倍</li>
        <li>复仇协议的移动速度加成翻倍</li>
    </ul>
    <p>常规玩法推荐使用阿昆德拉。如果玩家希望菲尼克斯不受持续时间限制，可以不选择任何威望天赋。若想体验更具挑战性的玩法，可尝试网络管理员。</p>
    <h2 id="army">推荐部队组成</h2>
    <p>菲尼克斯的推荐部队组成如下。请注意，这套配置假设未选择威望天赋并采用推荐精通点数。它只是部队框架的基础建议；建议了解<a href="#units">战斗单位</a>章节中的每个单位，并根据局势补充科技单位，以便更好地应对实际情况。</p>
    <img class="army" src="/images/commanderdata/units/fenix/legionnaire.jpg" alt="军团战士"><img class="army" src="/images/commanderdata/units/fenix/adept.jpg" alt="使徒"><img class="army" src="/images/commanderdata/units/fenix/immortal.jpg" alt="不朽者"><img class="army" src="/images/commanderdata/units/fenix/colossus.jpg" alt="巨像"><img class="army" src="/images/commanderdata/units/fenix/scout.jpg" alt="侦察机"><img class="army" src="/images/commanderdata/units/fenix/carrier.jpg" alt="航母"><img class="army" src="/images/commanderdata/units/fenix/conservator.jpg" alt="保护者"><br>
    <img class="army" src="/images/commanderdata/units/fenix/kaldalis.jpg" alt="卡尔达利斯"><img class="army" src="/images/commanderdata/units/fenix/talis.jpg" alt="塔里斯"><img class="army" src="/images/commanderdata/units/fenix/taldarin.jpg" alt="塔达林"><img class="army" src="/images/commanderdata/units/fenix/warbringer.jpg" alt="战争使者"><img class="army" src="/images/commanderdata/units/fenix/mojo.jpg" alt="莫乔"><img class="army" src="/images/commanderdata/units/fenix/clolarion.jpg" alt="克罗拉里昂">
    <p>应生产菲尼克斯的全套单位，以充分发挥强大的勇士人工智能和战术数据网。交战前使用保护者降低部队承受的伤害。</p>
    <div id="tooltip">提示</div>
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
    <h2 id="units">战斗单位</h2>
    <p>如需了解菲尼克斯的单位属性、单位对比和升级计算，请访问<a href="/units/#fenix">数据表</a>页面。</p>
    <p>菲尼克斯的战斗单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/legionnaire">
                <img src="/images/commanderdata/units/fenix/legionnaire.jpg" alt="军团战士">
                <p>军团战士</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>相对低效的单位。</li>
                <li>通常只建议生产少量，作为卡尔达利斯人工智能的躯壳。</li>
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
                        <td><img src="/images/commanderdata/unitskills/fenix/charge.png" alt="冲锋"></td>
                        <td>冲锋</td>
                        <td>拦截敌方地面单位并提高移动速度。</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/charge.png" alt="冲锋"></td>
                        <td>冲锋</td>
                        <td>使军团战士可以拦截附近敌人，并使军团战士的移动速度提高0.25。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/adept">
                <img src="/images/commanderdata/units/fenix/adept.jpg" alt="使徒">
                <p>使徒</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>应作为菲尼克斯部队的核心。</li>
                <li>价格低廉且十分高效。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/psionicprojection.png" alt="灵能投影"></td>
                        <td>灵能投影</td>
                        <td>攻击时召唤一个无敌的影像，短暂攻击敌人，每次射击造成33%的伤害，共射击3次。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/conservator">
                <img src="/images/commanderdata/units/fenix/conservator.jpg" alt="保护者">
                <p>保护者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>任何部队组成中都不可或缺。</li>
                <li>保护力场可降低单位承受的所有伤害。</li>
                <li>相位模式可以让增援单位快速折跃进场。</li>
                <li>建议部队中至少配备三架，以持续维持保护力场。</li>
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
                        <td><img src="/images/commanderdata/unitskills/fenix/protectivefield.png" alt="保护力场"></td>
                        <td>保护力场</td>
                        <td>生成护盾，使友方单位受到的所有攻击伤害降低35%。持续15秒。</td>
                        <td>20秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/optimizedemitters.png" alt="优化发射器"></td>
                        <td>优化发射器</td>
                        <td>使保护者的保护力场持续时间提高100%。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/immortal">
                <img src="/images/commanderdata/units/fenix/immortal.jpg" alt="不朽者">
                <p>不朽者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强大且伤害很高的单位。</li>
                <li>大多数部队配置都建议始终配备。</li>
                <li>非常适合克制重甲单位。</li>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/barrier.png" alt="屏障"></td>
                        <td>屏障</td>
                        <td>最多吸收100点伤害，持续10秒。</td>
                        <td>60秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：无</p>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/colossus">
                <img src="/images/commanderdata/units/fenix/colossus.jpg" alt="巨像">
                <p>巨像</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>只需生产极少量。</li>
                <li>范围伤害最适合对付异虫部队。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/extendedthermallance.png" alt="延长热能射线枪"></td>
                        <td>延长热能射线枪</td>
                        <td>巨像获得+3射程。</td>
                        <td>100/100</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/disruptor">
                <img src="/images/commanderdata/units/fenix/disruptor.jpg" alt="干扰者">
                <p>干扰者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>用途极为有限的单位。</li>
                <li>爆发伤害很高。</li>
                <li>通常不值得生产，因为其他单位能以更低费用取得更好效果。</li>
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
                        <td><img src="/images/commanderdata/unitskills/fenix/purificationnova.png" alt="净化新星"></td>
                        <td>净化新星</td>
                        <td>发射一个能量球，释放强力新星，对附近的地面单位和建筑造成150点范围伤害，并额外对护盾造成50点伤害。</td>
                        <td>20秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/cloakingmodule.png" alt="隐形模块"></td>
                        <td>隐形模块</td>
                        <td>使所有干扰者永久隐形。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/purificationecho.png" alt="净化回响"></td>
                        <td>净化回响</td>
                        <td>干扰者的净化新星会在2秒后再次爆炸，在更大范围内造成75点伤害。</td>
                        <td>75/75</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/scout">
                <img src="/images/commanderdata/units/fenix/scout.jpg" alt="侦察机">
                <p>侦察机</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>对轻甲地面单位造成额外伤害，因此在感染地图中非常有效。</li>
                <li>对重甲空中单位造成额外伤害。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/combatsensorarray.png" alt="战斗传感器阵列"></td>
                        <td>战斗传感器阵列</td>
                        <td>侦察机的对空攻击射程提高3，对地攻击射程提高1。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/carrier">
                <img src="/images/commanderdata/units/fenix/carrier.jpg" alt="航母">
                <p>航母</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>拦截机能干扰敌方人工智能，是非常有效的诱饵。</li>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/buildinterceptor.png" alt="制造拦截机"></td>
                        <td>制造拦截机</td>
                        <td>制造自动攻击航母目标的拦截机。航母没有拦截机时无法攻击。<br><br>可攻击地面和空中单位。最多8架拦截机。</td>
                        <td>15秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/gravitoncatapult.png" alt="引力弹射器"></td>
                        <td>引力弹射器</td>
                        <td>使航母释放拦截机的速度提高100%。</td>
                        <td>150/150</td>
                        <td>80秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="champions">勇士人工智能</h2>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/kaldalis">
                <img src="/images/commanderdata/units/fenix/kaldalis.jpg" alt="卡尔达利斯">
                <p>卡尔达利斯</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>英雄狂热者。</li>
                <li>配合复仇协议时非常强大。</li>
                <li>强化利刃的顺劈伤害也会作用于主要目标。</li>
                <li>使用威望时应充分利用战术数据网。</li>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/engage.png" alt="接战"></td>
                        <td>接战</td>
                        <td>卡尔达利斯拦截目标单位。</td>
                        <td>5秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/empoweredblades.png" alt="强化利刃"></td>
                        <td>强化利刃</td>
                        <td>卡尔达利斯的攻击可造成范围伤害。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/talis">
                <img src="/images/commanderdata/units/fenix/talis.jpg" alt="塔里斯">
                <p>塔里斯</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>英雄使徒。</li>
                <li>强烈推荐“弹射战刃”升级，因为它能使敌人受到你的单位造成的伤害显著提高。</li>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/ricochetglaive.png" alt="弹射战刃"></td>
                        <td>弹射战刃</td>
                        <td>投掷强化战刃，在敌人之间弹射，最多命中3个敌方单位，每个目标受到25点（对轻甲35点）伤害。</td>
                        <td>5秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/debilitationsystem.png" alt="弱化系统"></td>
                        <td>弱化系统</td>
                        <td>塔里斯的弹射战刃额外弹射5次，并使被弹射战刃命中的每个单位在5秒内受到的伤害提高5点。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/taldarin">
                <img src="/images/commanderdata/units/fenix/taldarin.jpg" alt="塔达林">
                <p>塔达林</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>英雄不朽者。</li>
                <li>应作为首名出场的勇士清理岩石（若分矿有敌人防守，则与菲尼克斯一同清理）。</li>
                <li>普通攻击会将敌人拉到一起，因此与范围伤害配合良好。</li>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/barrier.png" alt="屏障"></td>
                        <td>屏障</td>
                        <td>最多吸收200点伤害，持续10秒。</td>
                        <td>60秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/gravimetricoverload.png" alt="引力过载"></td>
                        <td>引力过载</td>
                        <td>塔达林的攻击会在目标身上储存所造成伤害的25%。该单位阵亡时爆炸，对附近敌方单位造成全部已储存伤害。</td>
                        <td>75/75</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/warbringer">
                <img src="/images/commanderdata/units/fenix/warbringer.jpg" alt="战争使者">
                <p>战争使者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>英雄巨像。</li>
                <li>普通攻击可使敌方单位减速。</li>
                <li>应作为第二名出场的勇士，帮助应对前期进攻波和推进。</li>
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
                        <td><img src="/images/commanderdata/unitskills/fenix/purificationblast.png" alt="净化轰击"></td>
                        <td>净化轰击</td>
                        <td>发射毁灭性能量束，对目标单位造成150点伤害。</td>
                        <td>5秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/fenix/purificationblast.png" alt="净化轰击"></td>
                        <td>净化轰击</td>
                        <td>战争使者发射毁灭性能量束，对目标单位造成150点伤害。</td>
                        <td>75/75</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/mojo">
                <img src="/images/commanderdata/units/fenix/mojo.jpg" alt="莫乔">
                <p>莫乔</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>英雄侦察机。</li>
                <li>普通攻击会使敌方空中单位昏迷2秒。</li>
                <li>适合限制战列巡航舰等空中施法单位。</li>
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
                        <td><img src="/images/commanderdata/unitskills/fenix/suppressionprocedure.png" alt="压制程序"></td>
                        <td>压制程序</td>
                        <td>发射一轮反物质导弹，造成6点（对重甲12点）范围伤害，并使附近敌方空中单位昏迷1秒。</td>
                        <td>5秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/combatsensorarray.png" alt="战斗传感器阵列"></td>
                        <td>战斗传感器阵列</td>
                        <td>侦察机的对空攻击射程提高3，对地攻击射程提高1。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/fenix/suppressionprocedure.png" alt="压制程序"></td>
                        <td>压制程序</td>
                        <td>莫乔发射一轮反物质导弹，造成范围伤害并使附近敌方空中单位昏迷1秒。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#fenix/clolarion">
                <img src="/images/commanderdata/units/fenix/clolarion.jpg" alt="克罗拉里昂">
                <p>克罗拉里昂</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>英雄航母。</li>
                <li>太阳光束只能以敌方空中单位为目标。</li>
                <li>生存能力极强，推进时可放在部队前排。</li>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/buildinterceptor.png" alt="制造拦截机"></td>
                        <td>制造拦截机</td>
                        <td>制造自动攻击航母目标的拦截机。航母没有拦截机时无法攻击。<br><br>可攻击地面和空中单位。最多8架拦截机。</td>
                        <td>15秒</td>
                        <td>0</td>
                    </tr>
                    <tr class="unlockable autocast">
                        <td><img src="/images/commanderdata/unitskills/fenix/buildinterdictor.png" alt="制造禁绝者"></td>
                        <td>制造禁绝者</td>
                        <td>制造自动轰炸敌方地面单位的禁绝者，造成12点伤害。<br><br>可攻击地面单位。</td>
                        <td>15秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/fenix/interdictors.png" alt="禁绝者"></td>
                        <td>禁绝者</td>
                        <td>除拦截机外，克罗拉里昂还会部署2架自动轰炸敌方地面单位的禁绝者。</td>
                        <td>75/75</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>下表列出了战术数据网对勇士人工智能的效果：</p>
    <div class="tableContainer">
        <table>
            <thead>
                <tr>
                    <th>勇士</th>
                    <th>受影响技能</th>
                    <th>技能说明</th>
                    <th>战术数据网效果</th>
                    <th>躯壳数</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>卡尔达利斯</td>
                    <td>强化利刃</td>
                    <td>卡尔达利斯的攻击对附近敌方目标造成9点伤害。</td>
                    <td>每个接入网络的军团战士使强化利刃额外造成4.5点伤害（最多30点伤害）。</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>塔里斯</td>
                    <td>弹射战刃</td>
                    <td>投掷强化战刃，在敌人之间弹射，最多命中3个敌方单位，每个目标受到25点（对轻甲35点）伤害。冷却时间5秒。</td>
                    <td>每个接入网络的使徒使弹射战刃额外造成2.5点（对轻甲3.5点）伤害（最多25点，对轻甲35点伤害）。</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>塔达林</td>
                    <td>引力过载</td>
                    <td>每次攻击会在目标身上储存所造成伤害的25%。该单位阵亡时爆炸，对附近敌人造成全部已储存伤害。</td>
                    <td>每个接入网络的不朽者使引力过载每次攻击额外储存10%的伤害（最多50%伤害）。</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>战争使者</td>
                    <td>净化轰击</td>
                    <td>发射毁灭性能量束，对目标单位造成150点伤害。冷却时间5秒。</td>
                    <td>每个接入网络的巨像使净化轰击额外造成45点伤害（最多150点伤害）。</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>莫乔</td>
                    <td>压制程序</td>
                    <td>发射一轮反物质导弹，造成6点（对重甲12点）范围伤害，并使附近敌方空中单位昏迷1秒。冷却时间5秒。</td>
                    <td>每个接入网络的侦察机使压制程序额外造成0.9点（对重甲1.8点）伤害（最多6点，对重甲12点伤害）。</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>克罗拉里昂</td>
                    <td>禁绝者</td>
                    <td>自动轰炸敌方地面单位，造成12点伤害。</td>
                    <td>每艘接入网络的航母使禁绝者的伤害提高3点（最多提高10点）。</td>
                    <td>4</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是菲尼克斯的标准经济型建造顺序。如需了解如何阅读并设计自己的建造顺序，请查看<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        15 水晶塔<br>
        16 气矿采集场<br>
        17 机械台<br>
        17 气矿采集场<br>
        22 不朽者 + 人工智能 -> 岩石<br>
        26 水晶塔<br>
        31 星灵枢纽<br>
    </p>
    <h2 id="guide">玩法指南</h2>
    <h3>玩法误区</h3>
    <p>许多菲尼克斯玩家会尝试速出航母，这是因为菲尼克斯没有科技要求。玩家无需建造传送门或控制芯核，便可直接同时建造星门和舰队航标。此外，航母是后期单位，成群后可以淹没敌人。然而，速出航母会大幅拖慢开分矿，而大量生产航母又极度依赖分矿经济。这种打法也放弃了菲尼克斯其他本就十分强大的勇士。相比之下，使用混合部队并集齐6名勇士要高效得多。</p>
    <h3>玩法提示</h3>
    <ul>
        <li>尽快生产塔达林清理分矿。如果分矿有敌人防守，让菲尼克斯协助他。</li>
        <li>建议建造6座传送门来生产使徒。</li>
        <li>尽量让场上一次只有一个军团战士（卡尔达利斯），以利用复仇协议的叠加效果。</li>
        <li>每当要推进敌方基地时，都应使用保护者的保护力场。</li>
        <li>持续切换菲尼克斯的装甲形态，确保当前装甲最适合实际需求。</li>
        <li>使用执政官装甲时，请务必关闭旋风斩的自动施放。自动施放会浪费能量，手动控制能发挥更好的效果。</li>
        <li>卡尔达利斯和战争使者的攻击速度可能受到限制。下方视频有进一步说明：
            <iframe width="475" height="268" src="https://www.youtube.com/embed/VyUOweN-ymQ" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
