<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 指挥官攻略 - 斯旺</title>
  <meta name="description" content="《星际争霸 II》合作任务斯旺指挥官攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 斯旺 Swann 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/swann">
  <script src="/scripts/preload.js"></script>
  <style>
        @media (min-width: 701px){
            .locPic{
                display:inline-block;
                margin-right:25px;
                width:400px;
                height:400px;
            }
            .locPic img{
                position:absolute;
            }
            .locMinimap{
                display:inline-block;
            }
        }
        @media (max-width: 700px){
            .locPic{
                display:inline-block;
                width:250px;
                height:250px;
            }
            .locPic img{
                position:absolute;
                width:250px;
            }
        }
        #content{
            background: url(/images/commanderdata/bgs/swann.png);
            background-repeat: no-repeat;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>斯旺</h1>
    <p id="commanderMotto">总工程师</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#comSum">指挥官概览</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">晋升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐配兵</a></p>
        <p><a href="#units">战斗单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
        <p><a href="#dondrill">亡者之夜的激光钻机</a></p>
    </div>
    <h2 id="comSum">指挥官概览</h2>
    <p>斯旺依靠机械单位作战，并以强大的激光钻机支援部队、掌控战场。</p>
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
                <td><img src="/images/commanderdata/progression/swann/swann_01.png" alt = "载具专家"></td>
                <td>载具专家</td>
                <td>
                    斯旺建造 SCV、载具和星舰的速度比其他指挥官快 20%。重工厂和军械库不再消耗高能瓦斯。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_02.png" alt = "战斗投放"></td>
                <td>战斗投放</td>
                <td>
                    解锁“战斗投放”，空投 4 台拥有持续时间的 A.R.E.S. 战争机器人，抵达时使目标区域内的敌方单位昏迷。可从顶部面板施放“战斗投放”。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_03.png" alt = "贝蒂和伙伴们"></td>
                <td>贝蒂和伙伴们</td>
                <td>
                   将毁灭炮台的攻击射程从 6 提高至 9，其攻击现在会使敌人的移动速度降低 30%。<br><br>将导弹炮台的生命值从 250 提高至 325，其攻击现在会造成范围伤害。<br><br>毁灭炮台的费用降低 50%。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/swann/swann_04.png" alt = "德拉肯激光钻机：脉冲炮"></td>
                <td>德拉肯激光钻机：脉冲炮</td>
                <td>
                    德拉肯激光钻机现在可以进行第二次升级，将攻击伤害从 30 提高至 50。<br><br>同时解锁“脉冲炮”，对目标区域内的所有敌方单位和建筑造成 600 点伤害。可从顶部面板施放“脉冲炮”。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/swann/swann_05.png" alt = "瓦斯采集器"></td>
                <td>瓦斯采集器</td>
                <td>
                    解锁指挥中心空投自动采集器的能力。采集器会从你的精炼厂或盟友的瓦斯采集建筑中额外采集高能瓦斯，每 6.3 秒为双方玩家各提供 2 点瓦斯。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_06.png" alt = "新单位：雷神"></td>
                <td>新单位：雷神</td>
                <td>
                    重型突击机甲，可在重工厂中建造。<br><br>可以攻击地面和空中单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_07.png" alt = "重工厂升级包"></td>
                <td>重工厂升级包</td>
                <td>
                    在重工厂科技实验室中解锁以下升级：
                    <ul>
                        <li>使歌利亚能够同时攻击地面和空中单位。</li>
                        <li>使飓风的“锁定”技能伤害提高 100%。</li>
                        <li>解锁雷神的“330 毫米弹幕炮”，使目标区域内的敌人昏迷并受到伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/swann/swann_08.png" alt = "强化 SCV"></td>
                <td>强化 SCV</td>
                <td>
                    允许多台 SCV 协同建造一座建筑，从而缩短建造时间。维修不再消耗资源。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_09.png" alt = "军械库升级包"></td>
                <td>军械库升级包</td>
                <td>
                   在军械库中解锁以下升级：
                   <ul>
                       <li>所有载具和舰船的攻击射程提高 1。</li>
                       <li>使载具和舰船能够随时间自动恢复生命值。</li>
                   </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/swann/swann_10.png" alt = "科技反应堆"></td>
                <td>科技反应堆</td>
                <td>
                    将科技实验室与反应堆合并为一种附属建筑，既可研究单位升级，也可同时建造两个单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_11.png" alt = "工程站升级包"></td>
                <td>工程站升级包</td>
                <td>
                    在工程站中解锁以下升级：
                    <ul>
                        <li>使建筑能够自动灭火，并自行修复至最大生命值的 50%。</li>
                        <li>所有炮台的攻击速度提高 25%。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/swann/swann_12.png" alt = "不朽协议"></td>
                <td>不朽协议</td>
                <td>
                    解锁已被摧毁的雷神和攻城坦克在战场上重建自身的能力。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_13.png" alt = "星港升级包"></td>
                <td>星港升级包</td>
                <td>
                    在星港科技反应堆中解锁以下升级：
                    <ul>
                        <li>使怨灵在隐形时能够闪避 20% 的来袭伤害。</li>
                        <li>解锁科学船的“防御矩阵”，为目标提供一个持续 20 秒、可吸收 200 点伤害的护盾。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_14.png" alt = "四台的钱，六台的货"></td>
                <td>四台的钱，六台的货</td>
                <td>
                    将“战斗投放”空投的 A.R.E.S. 战争机器人数量从 4 台提高至 6 台。可从顶部面板施放“战斗投放”。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/swann/swann_15.png" alt = "机械专长"></td>
                <td>机械专长</td>
                <td>
                    斯旺的 SCV、载具和星舰的生命值提高 20%。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官获得了显著的强度提升。</p>
    <h2 id="achievements">成就</h2>
    <p>斯旺的专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/swann/combatready.jpg" alt="准备战斗"></td>
                <td>准备战斗</td>
                <td>在困难难度下，用斯旺的“战斗投放”在机器人消失前消灭 25 个单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/swann/dropemdead.jpg" alt="空降死神"></td>
                <td>空降死神</td>
                <td>在合作任务中，用斯旺的“战斗投放”消灭 250 个敌方单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/swann/smoothoperator.jpg" alt="操作娴熟"></td>
                <td>操作娴熟</td>
                <td>在合作任务中，用罗里·斯旺的“瓦斯采集器”为盟友采集 100,000 点高能瓦斯。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/swann/thepowerofthesunatyourfingertips.jpg" alt="太阳之力，尽在掌中"></td>
                <td>太阳之力，尽在掌中</td>
                <td>在困难难度的一场任务中，用斯旺的德拉肯激光钻机造成 20,000 点伤害。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">面板技能</h2>
    <p>15 级且未投入精通点数时，斯旺的面板技能如下：</p>
    <table class="calldownTable">
        <thead>
            <tr>
                <th>面板技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>推荐用法</th>
                <th>数值</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/abilities/swann/drakkenlaserdrillattack.png" alt = "德拉肯激光钻机攻击"></td>
                <td>德拉肯激光钻机攻击</td>
                <td>使用德拉肯激光钻机发动攻击。每秒造成 20 点伤害，且射程无限。</td>
                <td>
                    <ul>
                        <li>自动锁定视野内的敌方单位。</li>
                        <li>DPS 相对较低，但适合持续削减高生命值目标。</li>
                        <li>可用于摧毁视野内的任务目标。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：0 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/swann/concentratedbeam.png" alt = "集中光束"></td>
                <td>集中光束</td>
                <td>要求：德拉肯激光钻机等级 1<br><br>对贯穿整张地图的一条直线上的敌方单位和建筑造成 400 点伤害。</td>
                <td>
                    <ul>
                        <li>非常适合处理进攻波次。</li>
                        <li>如果敌方基地处于合适的直线上，也可用于协助推进。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：180 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/swann/pulsecannon.png" alt = "脉冲炮"></td>
                <td>脉冲炮</td>
                <td>要求：德拉肯激光钻机等级 2<br><br>对目标区域内的敌方单位和建筑造成 600 点伤害。</td>
                <td>
                    <ul>
                        <li>适合处理密集的敌军。</li>
                        <li>非常适合摧毁敌方基地。</li>
                        <li>可用于应对难缠的进攻波次。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：300 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/swann/combatdrop.png" alt = "战斗投放"></td>
                <td>战斗投放</td>
                <td>空投 6 台 A.R.E.S. 战争机器人，使投放区域内的敌方地面单位昏迷。战争机器人可受控制，并会作战 60 秒。</td>
                <td>
                    <ul>
                        <li>应尽可能频繁使用，最好在冷却结束后立即施放。</li>
                        <li>适合在前期协助防守。</li>
                        <li>后期可替部队承受伤害。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：240 秒</li>
                        <li>冷却时间：240 秒</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">晋升前升级</h2>
    <p>难度：中等</p>
    <p>斯旺在低等级时的玩法与巅峰等级阶段基本相同，但发育和成军速度明显更慢。前期应在分矿石旁建造一座指挥中心，因为单台 SCV 需要较长时间才能完成建造。后期建造 4 座重工厂，其中 2 座安装科技实验室，另 2 座安装反应堆，用于生产最终部队。</p>
    <p>提升精通等级时，先将点数投入技能组 1 的“集中光束宽度”精通，达到所需点数后再投入“战斗投放持续时间”精通。技能组 3 则平均分配点数。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是斯旺的三个技能组及各自的推荐点数分配。请注意，这是一套未选择任何威望、适用于所有地图的通用配置。强烈建议你根据自己的玩法和所面临的具体挑战进行调整（例如<a href="/resources/weeklymutations">每周突变</a>）。</p>
    <p>技能组 1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐点数</th>
                <th>进一步考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>集中光束宽度与伤害</td>
                <td>每点 2%<br>最高 60%</td>
                <td>19</td>
                <td rowspan="2">喜欢依靠“战斗投放”为主力部队承受伤害的玩家，可以考虑为相应精通投入更多点数。战斗投放能显著减少主力部队受到的伤害。</td>
            </tr>
            <tr>
                <td>战斗投放持续时间与生命值</td>
                <td>每点 2%<br>最高 60%</td>
                <td>11</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">为“集中光束”精通投入 19 点，可确保该技能一击摧毁战列巡航舰。</p>
    <p>技能组 2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐点数</th>
                <th>进一步考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>不朽协议费用与建造时间</td>
                <td>每点 -2%<br>最高 -60%</td>
                <td>?</td>
                <td rowspan="2">随着任务推进，斯旺的部队难免出现损失，而“不朽协议”对补充这些损失至关重要。不过它只适用于部分单位，因此玩家需要判断“不朽协议”与提高建筑生命值相比，哪项收益更大。</td>
            </tr>
            <tr>
                <td>建筑生命值</td>
                <td>每点 2%<br>最高 60%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">这一组取决于个人偏好。如果你更依赖攻城坦克和雷神，应选择“不朽协议”精通；否则“建筑生命值”通常更好，尤其是依赖静态防御时。</p>
    <p>技能组 3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐点数</th>
                <th>进一步考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>瓦斯无人机费用</td>
                <td>每点 -3%<br>最高 -90%</td>
                <td>0</td>
                <td rowspan="2">激光钻机精通能大幅增强玩家对全图的影响力，使其可以安心发展最终科技，而不必持续受进攻波次骚扰。瓦斯无人机精通则能让斯旺更好地支援盟友。</td>
            </tr>
            <tr>
                <td>激光钻机建造时间、升级时间与升级费用</td>
                <td>每点 -1.5%<br>最高 -45%</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">通常选择激光钻机精通，因为钻机本质上就是斯旺的“英雄”。不过，如果你经常缺瓦斯，或想支援盟友的特定打法，“瓦斯无人机费用”精通也很有用。</p>
    <h2 id="prestiges">威望</h2>
    <p>斯旺的威望如下。“生效等级”是指该威望发挥完整效果所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>重武器专家</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>激光钻机造成 100% 的溅射伤害，使敌人的移动速度降低 70%，并以快 50% 的速度锁定目标。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用激光钻机的技能。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>溅射伤害范围为 1.5。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望的核心是持续对视野内的敌人造成范围伤害。最好点满“激光钻机建造时间”精通以尽快完成钻机升级，并在地图各处部署升空的重工厂（研究“自动灭火系统”），获取敌军视野。能够提供全图视野的指挥官与此威望配合良好，例如斯台特曼的斯台特卫星、泽拉图的萨尔纳加监视者，以及凯瑞甘的菌毯肿瘤或坑道虫。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>机械修理工</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>炮台升级的效果提高 100%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>战斗单位的高能瓦斯费用提高 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>“自动灭火系统”升级不会从此威望中获得任何收益。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>11</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望会进一步提高炮台的护甲、攻击速度和射程，让斯旺本就强大的炮台变得更强。凡是侧重防守的场景，都应优先考虑此威望。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>运载总监</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>大力神运输机的载货量翻倍，并可瞬间卸载单位。</li>
                        <li>科学船可以使用“战术跃迁”，且该技能的冷却时间缩短 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>顶部面板技能的冷却时间延长 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>乍看之下，此威望不仅能提供极高的爆发伤害，还能让输出单位、侦测单位和治疗单位一同进行“战术跃迁”，似乎很有价值。然而，只要操作得当，玩家本就不应让攻城坦克被敌人摧毁，尤其是在歌利亚前排配合科学船“防御矩阵”的情况下。此外，钻机技能冷却时间延长后，便更难与任务的进攻波次和事件时机同步。</td>
            </tr>
        </tbody>
    </table>
    <p>常规玩法推荐 P0（无威望，总工程师）和 P1（重武器专家）。P1 对新手更友好。</p>
    <h2 id="army">推荐配兵</h2>
    <p>斯旺的推荐配兵如下。此方案假定未选择威望，并采用推荐的精通点数分配。这只是部队框架的基础建议。建议先了解<a href="#units">战斗单位</a>一节中的各个单位，再按需加入科技单位，以便更好地应对实际局势。</p>
    <img class="army" src="/images/commanderdata/units/swann/goliath.jpg" alt="歌利亚"><img class="army" src="/images/commanderdata/units/swann/sciencevessel.jpg" alt="科学船">
    <p>大量生产歌利亚能应对绝大多数局势，因为科学船既能治疗歌利亚，也能用“防御矩阵”保护它们。</p>
    <div class="techContainer"><img class="army" src="/images/commanderdata/units/swann/siegetank.jpg" alt="攻城坦克"><div class="techAdd">+</div></div><div class="techContainer"><img class="army" src="/images/commanderdata/units/swann/hercules.jpg" alt="大力神运输机"><div class="techAdd">+</div></div>
    <p>可用一架大力神运输机装载 8 辆已进入攻城模式的攻城坦克，将它们投放在歌利亚战线后方，提供强力的溅射伤害。</p>
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
    <p>如需了解斯旺的单位属性、单位对比和升级计算，请参阅<a href="/units/#swann">数据表</a>页面。</p>
    <p>斯旺的战斗单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/hellbat">
                <img src="/images/commanderdata/units/swann/hellbat.jpg" alt="恶蝠">
                <p>恶蝠</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>生命值太低，通常不值得生产。</li>
                <li>可以充当前排，但效果不太理想。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/infernalpreigniter.png" alt="炼狱预燃器"></td>
                        <td>炼狱预燃器</td>
                        <td>恶蝠在两种模式下对轻甲单位额外造成 +10 点伤害。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/infernalplating.png" alt="炼狱装甲"></td>
                        <td>炼狱装甲</td>
                        <td>恶火和恶蝠获得 +2 护甲。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/hellion">
                <img src="/images/commanderdata/units/swann/hellion.jpg" alt="恶火">
                <p>恶火</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>生命值太低，通常不值得生产。</li>
                <li>机动性良好，可用于获取地图各处的视野。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/infernalpreigniter.png" alt="炼狱预燃器"></td>
                        <td>炼狱预燃器</td>
                        <td>恶蝠在两种模式下对轻甲单位额外造成 +10 点伤害。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/infernalplating.png" alt="炼狱装甲"></td>
                        <td>炼狱装甲</td>
                        <td>恶火和恶蝠获得 +2 护甲。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/goliath">
                <img src="/images/commanderdata/units/swann/goliath.jpg" alt="歌利亚">
                <p>歌利亚</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>优秀的全能单位。</li>
                <li>研究“多重锁定武器系统”后，可以同时攻击敌方地面和空中单位。</li>
                <li>对空 DPS 很高。</li>
                <li>略显脆弱，需要通过操作将受伤单位撤离危险区域。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/aresclasstargetingsystem.png" alt="阿瑞斯级瞄准系统"></td>
                        <td>阿瑞斯级瞄准系统</td>
                        <td>歌利亚的对空武器射程提高 3，对地武器射程提高 1。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/multilockweaponssystem.png" alt="多重锁定武器系统"></td>
                        <td>多重锁定武器系统</td>
                        <td>歌利亚可以同时锁定并攻击地面和空中单位。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/siegetank">
                <img src="/images/commanderdata/units/swann/siegetank.jpg" alt="攻城坦克">
                <p>攻城坦克</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强大的防御单位。</li>
                <li>配合大力神运输机也可用于进攻。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/maelstromrounds.png" alt="漩涡弹药"></td>
                        <td>漩涡弹药</td>
                        <td>攻城坦克在攻城模式下获得 +40 攻击伤害，溅射伤害保持不变。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/cyclone">
                <img src="/images/commanderdata/units/swann/cyclone.jpg" alt="飓风">
                <p>飓风</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>可以风筝敌方单位，单体输出效果不错。</li>
                <li>大多数进攻波次由多个低生命值单位组成，因此实战效果相对有限。</li>
                <li>非常脆弱。</li>
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
                        <td><img src="/images/commanderdata/unitskills/swann/lockon.png" alt="锁定"></td>
                        <td>锁定</td>
                        <td>将飓风的武器锁定目标单位，在 20 秒内造成 500 点伤害。攻击时可以移动。目标离开射程后技能取消。</td>
                        <td>6 秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/targetingoptics.png" alt="瞄准光学系统"></td>
                        <td>瞄准光学系统</td>
                        <td>飓风的“锁定”射程提高 3。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/magfieldaccelerator.png" alt="磁场加速器"></td>
                        <td>磁场加速器</td>
                        <td>飓风的“锁定”伤害提高 100%。</td>
                        <td>100/100</td>
                        <td>90 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/thor">
                <img src="/images/commanderdata/units/swann/thor.jpg" alt="雷神">
                <p>雷神</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>会吸引大量敌方仇恨。</li>
                <li>雷神之间容易相互阻挡，因此应少量生产。</li>
                <li>对地 DPS 很高。</li>
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
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/swann/330mmbarragecannon.png" alt="330 毫米弹幕炮"></td>
                        <td>330 毫米弹幕炮</td>
                        <td>使小范围内的所有敌人昏迷，并在 3 秒内对较大范围造成 500 点伤害。</td>
                        <td>60 秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/330mmbarragecannon.png" alt="330 毫米弹幕炮"></td>
                        <td>330 毫米弹幕炮</td>
                        <td>使雷神能够使用“330 毫米弹幕炮”。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/wraith">
                <img src="/images/commanderdata/units/swann/wraith.jpg" alt="怨灵">
                <p>怨灵</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>研究“脉冲增幅器”后威力惊人，但需要精细操作。</li>
                <li>研究“高级光学系统”可稍微降低操作难度。</li>
                <li>非常惧怕溅射伤害。</li>
                <li>大量成军后可以一击消灭高生命值目标。</li>
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
                        <td><img src="/images/commanderdata/unitskills/swann/cloak.png" alt="隐形"></td>
                        <td>隐形</td>
                        <td>使单位进入隐形状态，敌方单位无法看到或攻击它。隐形单位只能被侦测单位或侦测效果发现。<br><br>每秒消耗 0.9 点能量。</td>
                        <td>0 秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/pulseamplifier.png" alt="脉冲增幅器"></td>
                        <td>脉冲增幅器</td>
                        <td>怨灵移动时，双子飞弹的伤害提高 100%，爆裂激光的伤害提高 300%。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/displacementfield.png" alt="位移力场"></td>
                        <td>位移力场</td>
                        <td>怨灵的移动速度提高 20%，并在隐形时闪避 20% 的来袭攻击。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/advancedoptics.png" alt="高级光学系统"></td>
                        <td>高级光学系统</td>
                        <td>所有载具和舰船武器的射程提高 1。</td>
                        <td>150/150</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/hercules">
                <img src="/images/commanderdata/units/swann/hercules.jpg" alt="大力神运输机">
                <p>大力神运输机</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>即使没有视野，也能“战术跃迁”至地图上的任意位置。</li>
                <li>可装载已进入攻城模式的攻城坦克，用于进攻。</li>
                <li>大力神运输机被摧毁时，会在坠毁处卸下其中所有单位。</li>
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
                        <td><img src="/images/commanderdata/unitskills/swann/tacticaljump.png" alt="战术跃迁"></td>
                        <td>战术跃迁</td>
                        <td>跃迁至目标位置。大力神运输机在跃迁过程中无敌。</td>
                        <td>60 秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#swann/sciencevessel">
                <img src="/images/commanderdata/units/swann/sciencevessel.jpg" alt="科学船">
                <p>科学船</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>任何配兵都不可或缺。</li>
                <li>“强化纳米修复”会移除治疗单位的能量消耗，因此效果极佳。</li>
                <li>可对前排单位使用“防御矩阵”，减少它们与敌军交战时受到的伤害。</li>
                <li>可以用“辐射”削弱异虫等以生物单位为主的进攻波次。</li>
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
                        <td><img src="/images/commanderdata/unitskills/swann/nanorepair.png" alt="纳米修复"></td>
                        <td>纳米修复</td>
                        <td>治疗一个友方机械单位。<br><br>每消耗 1 点能量恢复 3 点生命值。</td>
                        <td>0 秒</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/swann/irradiate.png" alt="辐射"></td>
                        <td>辐射</td>
                        <td>对一个敌方生物单位及其附近的敌方生物单位造成伤害，在 25 秒内造成 250 点伤害。</td>
                        <td>0 秒</td>
                        <td>25</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/swann/defensivematrix.png" alt="防御矩阵"></td>
                        <td>防御矩阵</td>
                        <td>为目标提供最多可吸收 200 点伤害的护盾。效果持续 20 秒。</td>
                        <td>20 秒</td>
                        <td>50</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/improvednanorepair.png" alt="强化纳米修复"></td>
                        <td>强化纳米修复</td>
                        <td>科学船的“纳米修复”不再消耗能量。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/swann/defensivematrix.png" alt="防御矩阵"></td>
                        <td>防御矩阵</td>
                        <td>使科学船能够为目标提供一个持续 20 秒、可吸收 200 点伤害的护盾。</td>
                        <td>100/100</td>
                        <td>90 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/swann/regenerativebiosteel.png" alt="再生生物钢"></td>
                        <td>再生生物钢</td>
                        <td>载具和舰船随时间自动恢复生命值。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是斯旺的标准经济型建造顺序。如需进一步了解如何阅读并制定自己的建造顺序，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        14 补给站<br>
        16 重工厂（4 台 SCV）<br>
        18 毁灭炮台（4 台 SCV）<br>
        18 毁灭炮台（4 台 SCV）<br>
        21 指挥中心（8 台 SCV）
    </p>
    <h2 id="guide">玩法攻略</h2>
    <h3>玩法误区</h3>
    <p>斯旺玩家常见的误区之一，是试图在前期快速生产雷神。这不仅会使玩家在前期极为脆弱，而且雷神只有真正大量成军时才能发挥作用。</p>
    <p>更好的方案是先生产歌利亚，并用攻城坦克提供支援，等经济改善后再逐步转型雷神。</p>
    <h3>德拉肯激光钻机等级</h3>
    <p>下表汇总了德拉肯激光钻机的各个等级。</p>
    <table>
        <thead>
            <tr>
                <th>等级</th>
                <th>钻机 DPS</th>
                <th>解锁技能</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                <th>研究时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>30</td>
                <td>集中光束</td>
                <td>200/200</td>
                <td>190 秒</td>
            </tr>
            <tr>
                <td>3</td>
                <td>50</td>
                <td>脉冲炮</td>
                <td>300/300</td>
                <td>220 秒</td>
            </tr>
        </tbody>
    </table>
    <h3>SCV 高级建造</h3>
    <p>斯旺可以派遣多台 SCV 共同建造同一座建筑。不同 SCV 数量对应的建筑完成时间如下：</p>
    <table>
        <thead>
            <tr>
                <th>SCV 数量</th>
                <th>建造时间（%）</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>100</td>
            </tr>
            <tr>
                <td>2</td>
                <td>62.5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>45.5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>35.7</td>
            </tr>
            <tr>
                <td>5</td>
                <td>29.4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>25</td>
            </tr>
            <tr>
                <td>7</td>
                <td>21.7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>19.2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>17.2</td>
            </tr>
            <tr>
                <td>10</td>
                <td>15.6</td>
            </tr>
        </tbody>
    </table>
    <h3>静态防御</h3>
    <p>斯旺可以建造以下几种静态防御建筑：</p>
    <table>
        <thead>
            <tr>
                <th>建筑</th>
                <th>名称</th>
                <th>属性</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/guides/swann/flamingbetty.jpg" alt="火焰贝蒂"></td>
                <td>火焰贝蒂</td>
                <td>生命值：350<br>攻击：16<br>（对轻甲）：20<br>射程：4<br>速度：1<br>目标：地面</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/guides/swann/spinningdizzy.jpg" alt="旋转迪兹"></td>
                <td>旋转迪兹</td>
                <td>侦测单位<br>生命值：325<br>伤害：12 / 1<br>攻击次数：2 /8<br>射程：7 /7<br>速度：0.86 / 1.78<br>目标：空中 / 空中</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/guides/swann/blasterbilly.jpg" alt="爆破比利"></td>
                <td>爆破比利</td>
                <td>生命值：300<br>攻击：25<br>（对重甲）：50<br>射程：9<br>速度：1.5<br>目标：地面</td>
            </tr>
        </tbody>
    </table>
    <p>斯旺还拥有强化静态防御的升级，具体如下：</p>
    <table class="unitUpgrades">
        <thead>
            <tr>
                <th>升级</th>
                <th>名称</th>
                <th>效果</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                <th>研究时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/swann/hisecautotracking.png" alt="高精度自动追踪"></td>
                <td>高精度自动追踪</td>
                <td>所有炮台的射程提高 1。</td>
                <td>100/100</td>
                <td>60 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/swann/structurearmor.png" alt="建筑护甲"></td>
                <td>建筑护甲</td>
                <td>建筑的护甲提高 2。</td>
                <td>100/100</td>
                <td>60 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/swann/firesuppressionsystems.png" alt="自动灭火系统"></td>
                <td>自动灭火系统</td>
                <td>自动扑灭所有建筑火灾，并使所有建筑以每秒 15 点生命值的速度自动修复至最大生命值的 50%。</td>
                <td>100/100</td>
                <td>60 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/swann/kmcautoloaders.png" alt="KMC 自动装填器"></td>
                <td>KMC 自动装填器</td>
                <td>所有炮台的攻击速度提高 25%。</td>
                <td>150/150</td>
                <td>90 秒</td>
            </tr>
        </tbody>
    </table>
    <h3 id="dondrill">亡者之夜的激光钻机</h3>
    <p>在“亡者之夜”中，斯旺应使用激光钻机清理被感染的建筑；用“集中光束”或“脉冲炮”顺便消灭守军只是额外收益。下图展示了这两个技能的推荐施放位置。请注意，此处“集中光束”只投入了刚好足以一击摧毁被感染建筑的精通点数（13 点）。投入更多精通点数后效果会更好，例如按照本攻略投入 19 点。</p>
    <p>还要注意，不同玩家位置对应的“集中光束”施放点也不同。由于光束从你的激光钻机发射，玩家所在位置会改变光束的角度。遗憾的是，纯粹受感染建筑相对钻机的布局影响，玩家 2 的“集中光束”效率明显更低。</p>
    <p>为了稳定取得最佳位置，可让大力神运输机“战术跃迁”到目标地点获取视野，以便精确调整光束位置。</p>
    <h4>集中光束位置（玩家 1）：</h4>
    <p>11 座建筑</p>
    <div class='switcher'>
        <div id="p1_cb_swDiv" class='locPic'>
            <img id ='p1_cb_sw' src='/images/commanderdata/guides/swann/p1_cb_sw_before.jpg' alt='集中光束位置（西南）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p1_cb_sw' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p1_cb_sw' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p1_cb_sw_minimap.jpg' alt='集中光束位置（西南）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p1_cb_sw_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p1_cb_sw_after.jpg');
        preload(imgList);

        $("input[name='p1_cb_sw']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p1_cb_sw');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p1_cb_sw_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p1_cb_swDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p1_cb_sw');
        })
    </script>
    <p>9 座建筑</p>
    <div class='switcher'>
        <div id ='p1_cb_neDiv' class='locPic'>
            <img id ='p1_cb_ne' src='/images/commanderdata/guides/swann/p1_cb_ne_before.jpg' alt='集中光束位置（东北）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p1_cb_ne' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p1_cb_ne' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p1_cb_ne_minimap.jpg' alt='集中光束位置（东北）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p1_cb_ne_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p1_cb_ne_after.jpg');
        preload(imgList);

        $("input[name='p1_cb_ne']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p1_cb_ne');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p1_cb_ne_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p1_cb_neDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p1_cb_ne');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='p1_cb_nwDiv' class='locPic'>
            <img id ='p1_cb_nw' src='/images/commanderdata/guides/swann/p1_cb_nw_before.jpg' alt='集中光束位置（西北）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p1_cb_nw' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p1_cb_nw' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p1_cb_nw_minimap.jpg' alt='集中光束位置（西北）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p1_cb_nw_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p1_cb_nw_after.jpg');
        preload(imgList);

        $("input[name='p1_cb_nw']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p1_cb_nw');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p1_cb_nw_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p1_cb_nwDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p1_cb_nw');
        })
    </script>
    <p>7 座建筑</p>
    <div class='switcher'>
        <div id ='p1_cb_sDiv' class='locPic'>
            <img id ='p1_cb_s' src='/images/commanderdata/guides/swann/p1_cb_s_before.jpg' alt='集中光束位置（南）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p1_cb_s' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p1_cb_s' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p1_cb_s_minimap.jpg' alt='集中光束位置（南）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p1_cb_s_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p1_cb_s_after.jpg');
        preload(imgList);

        $("input[name='p1_cb_s']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p1_cb_s');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p1_cb_s_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p1_cb_sDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p1_cb_s');
        })
    </script>
    <h4>集中光束位置（玩家 2）：</h4>
    <p>9 座建筑</p>
    <div class='switcher'>
        <div id ='p2_cb_neDiv' class='locPic'>
            <img id ='p2_cb_ne' src='/images/commanderdata/guides/swann/p2_cb_ne_before.jpg' alt='集中光束位置（东北）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p2_cb_ne' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p2_cb_ne' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p2_cb_ne_minimap.jpg' alt='集中光束位置（东北）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p2_cb_ne_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p2_cb_ne_after.jpg');
        preload(imgList);

        $("input[name='p2_cb_ne']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p2_cb_ne');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p2_cb_ne_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p2_cb_neDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p2_cb_ne');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='p2_cb_seDiv' class='locPic'>
            <img id ='p2_cb_se' src='/images/commanderdata/guides/swann/p2_cb_se_before.jpg' alt='集中光束位置（东南）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p2_cb_se' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p2_cb_se' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p2_cb_se_minimap.jpg' alt='集中光束位置（东南）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p2_cb_se_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p2_cb_se_after.jpg');
        preload(imgList);

        $("input[name='p2_cb_se']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p2_cb_se');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p2_cb_se_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p2_cb_seDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p2_cb_se');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='p2_cb_nwDiv' class='locPic'>
            <img id ='p2_cb_nw' src='/images/commanderdata/guides/swann/p2_cb_nw_before.jpg' alt='集中光束位置（西北）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p2_cb_nw' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p2_cb_nw' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p2_cb_nw_minimap.jpg' alt='集中光束位置（西北）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p2_cb_nw_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p2_cb_nw_after.jpg');
        preload(imgList);

        $("input[name='p2_cb_nw']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p2_cb_nw');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p2_cb_nw_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p2_cb_nwDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p2_cb_nw');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='p2_cb_sDiv' class='locPic'>
            <img id ='p2_cb_s' src='/images/commanderdata/guides/swann/p2_cb_s_before.jpg' alt='集中光束位置（南）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p2_cb_s' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p2_cb_s' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p2_cb_s_minimap.jpg' alt='集中光束位置（南）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p2_cb_s_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p2_cb_s_after.jpg');
        preload(imgList);

        $("input[name='p2_cb_s']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p2_cb_s');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p2_cb_s_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p2_cb_sDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p2_cb_s');
        })
    </script>
    <p>7 座建筑</p>
    <div class='switcher'>
        <div id ='p2_cb_wDiv' class='locPic'>
            <img id ='p2_cb_w' src='/images/commanderdata/guides/swann/p2_cb_w_before.jpg' alt='集中光束位置（西）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='p2_cb_w' value='before' checked>施放前</label><br>
                <label><input type='radio' name='p2_cb_w' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/p2_cb_w_minimap.jpg' alt='集中光束位置（西）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/p2_cb_w_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/p2_cb_w_after.jpg');
        preload(imgList);

        $("input[name='p2_cb_w']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#p2_cb_w');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/p2_cb_w_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#p2_cb_wDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'p2_cb_w');
        })
    </script>
    <h4>脉冲炮位置：</h4>
    <p>9 座建筑</p>
    <div class='switcher'>
        <div id ='pc_neDiv' class='locPic'>
            <img id ='pc_ne' src='/images/commanderdata/guides/swann/pc_ne_before.jpg' alt='脉冲炮位置（东北）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='pc_ne' value='before' checked>施放前</label><br>
                <label><input type='radio' name='pc_ne' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/pc_ne_minimap.jpg' alt='脉冲炮位置（东北）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/pc_ne_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/pc_ne_after.jpg');
        preload(imgList);

        $("input[name='pc_ne']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#pc_ne');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/pc_ne_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#pc_neDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'pc_ne');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='pc_nwDiv' class='locPic'>
            <img id ='pc_nw' src='/images/commanderdata/guides/swann/pc_nw_before.jpg' alt='脉冲炮位置（西北）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='pc_nw' value='before' checked>施放前</label><br>
                <label><input type='radio' name='pc_nw' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/pc_nw_minimap.jpg' alt='脉冲炮位置（西北）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/pc_nw_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/pc_nw_after.jpg');
        preload(imgList);

        $("input[name='pc_nw']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#pc_nw');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/pc_nw_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#pc_nwDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'pc_nw');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='pc_wDiv' class='locPic'>
            <img id ='pc_w' src='/images/commanderdata/guides/swann/pc_w_before.jpg' alt='脉冲炮位置（西）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='pc_w' value='before' checked>施放前</label><br>
                <label><input type='radio' name='pc_w' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/pc_w_minimap.jpg' alt='脉冲炮位置（西）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/pc_w_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/pc_w_after.jpg');
        preload(imgList);

        $("input[name='pc_w']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#pc_w');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/pc_w_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#pc_wDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'pc_w');
        })
    </script>
    <p>8 座建筑</p>
    <div class='switcher'>
        <div id ='pc_sDiv' class='locPic'>
            <img id ='pc_s' src='/images/commanderdata/guides/swann/pc_s_before.jpg' alt='脉冲炮位置（南）'>
        </div>
        <div class = 'locMinimap'>
            <form action='#'>
                <label><input type='radio' name='pc_s' value='before' checked>施放前</label><br>
                <label><input type='radio' name='pc_s' value='after'>施放后</label><br>
            </form>
            <br><br>
            <div>
                <img src='/images/commanderdata/guides/swann/pc_s_minimap.jpg' alt='脉冲炮位置（南）小地图'>
            </div>
        </div>
    </div>
    <script>
        var imgList=[];
        imgList.push('/images/commanderdata/guides/swann/pc_s_before.jpg');
        imgList.push('/images/commanderdata/guides/swann/pc_s_after.jpg');
        preload(imgList);

        $("input[name='pc_s']").change(function(){
            var phase= $(this).val();
            var oldImg = $('#pc_s');
            var img = new Image();
            img.src = '/images/commanderdata/guides/swann/pc_s_'+ phase + '.jpg';
            var newImg = $(img).hide();
            $('#pc_sDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'pc_s');
        })
    </script>
    <h3>玩法提示</h3>
    <ul>
        <li>部队中务必配备足够的科学船。它们不仅能提供侦测，还能让你使用多种实用技能。</li>
        <li>完成升级的怨灵只有在移动时才能造成高额伤害。你需要练习走A操作，才能有效发挥它们的威力。</li>
        <li>大力神运输机可以装载已进入攻城模式的攻城坦克。利用这一点将受伤的攻城坦克从前排转移到后排，避免损失。</li>
        <li>从大力神运输机中卸载的攻城坦克，炮口总会朝向运输机面朝的方向。让大力神运输机面向预定目标，可缩短坦克转动火炮并开火所需的时间。</li>
        <li>雷诺可以使用你的科技反应堆！在盟友基地用重工厂建造科技反应堆，然后升空移走重工厂，雷诺便可使用它。</li>
        <li>用大力神运输机获取视野，再让激光钻机消灭进攻波次。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
