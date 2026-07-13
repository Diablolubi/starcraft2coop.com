<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 2》合作任务 - 指挥官攻略 - 蒙斯克</title>
  <meta name="description" content="《星际争霸 2》合作任务蒙斯克指挥官攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 蒙斯克 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/mengsk">
  <script src="/scripts/preload.js"></script>
  <style>
        @media (min-width: 701px){
            .fastExpand{
                display:inline-block;
                width:400px;
                height:400px;
            }
            .fastExpand img{
                position:absolute;
            }
            #fastExpoTable td:nth-child(2){
                width:50px;
            }
        }
        @media (max-width: 700px){
            #fastExpoTable th{
                display:none;
                border:none;
            }
            #fastExpoTable td{
                display:block;
                border:none;
            }
            .fastExpand{
                display:inline-block;
                width:250px;
                height:250px;
            }
            .fastExpand img{
                position:absolute;
                width:250px;
            }
        }
        #content{
            background: url(/images/commanderdata/bgs/mengsk.png);
            background-repeat: no-repeat;
        }
        .rankTable img{
            float:left;
        }
        .rankTable td:nth-child(1),.rankTable td:nth-child(2){
            text-align:center;
        }
        .guard {
            font-weight:bold;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>蒙斯克</h1>
    <p id="commanderMotto">帝国元首</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#comSum">指挥官概述</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">飞升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐部队组成</a></p>
        <p><a href="#units">作战单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
        <p><a href="#fastexpand">快速开矿</a></p>
        <p><a href="#videos">视频攻略</a></p>
    </div>
    <h2 id="comSum">指挥官概述</h2>
    <p>蒙斯克以征召而来的劳工和士兵巩固防线，再辅以强大的皇家卫队单位和远距离炮火支援。</p>
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
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_01.png" alt = "法律与秩序"></td>
                <td>法律与秩序</td>
                <td>
                    蒙斯克征召帝国劳工代替SCV采集资源，并征召帝国冲锋队代替陆战队员作战。他的皇家卫队单位可以提升军阶，获得新技能并强化已有技能。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_02.png" alt = "扩展武器库"></td>
                <td>扩展武器库</td>
                <td>
                    允许冲锋队装备CPO-7“火蜥蜴”火焰喷射器和“冰雹”发射器。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_03.png" alt = "新单位：大地碎裂炮"></td>
                <td>新单位：大地碎裂炮</td>
                <td>
                   在目标位置附近随机进行轰炸，对区域内的地面单位造成伤害。解锁顶部面板的“辐射打击”。<br><br>可以攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_04.png" alt = "辐射打击"></td>
                <td>辐射打击</td>
                <td>
                    解锁发射实验性弹头的能力，由大地碎裂炮向目标区域附近随机开火。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_05.png" alt = "绝对权威"></td>
                <td>绝对权威</td>
                <td>
                    接受教导的劳工、冲锋队和皇家卫队会提供帝国支持度，从而提高天命皇权的生成速度。解锁“放大电波”升级，使接受教导的劳工和冲锋队提供的帝国支持度加倍（在聚变芯体中研究）。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_06.png" alt = "工程站升级包"></td>
                <td>工程站升级包</td>
                <td>
                    在工程站中解锁下列升级：
                    <ul>
                        <li>使补给地堡内单位的射程额外提高1。</li>
                        <li>使大地碎裂炮“轰击”技能的射程提高25。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_07.png" alt = "战争恶狼"></td>
                <td>战争恶狼</td>
                <td>
                    “战争恶犬”会随天命皇权等级提高而额外部署异龙和雷兽。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_08.png" alt = "皇家卫队基础升级包"></td>
                <td>皇家卫队基础升级包</td>
                <td>
                    解锁下列升级：
                    <ul>
                        <li>使壁垒卫士的攻击可以减速敌方单位（在皇家军校中研究）。</li>
                        <li>使攻城模式下的冲击分队在被帝国仲裁机吊挂时可以攻击敌方空中单位（在军械库中研究）。</li>
                        <li>提高天空之怒的移动速度（在聚变芯体中研究）。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_09.png" alt = "新单位：黑色战锤"></td>
                <td>新单位：黑色战锤</td>
                <td>
                    皇家卫队重型突击机甲。可以使用掩护射击模式。在重工厂中建造。<br><br>可以攻击地面和空中单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_10.png" alt = "核弹天劫"></td>
                <td>核弹天劫</td>
                <td>
                    解锁召唤战术导弹雨并以一枚核弹收尾的能力。可从顶部面板发动“核弹天劫”。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_11.png" alt = "神经毒素弹头"></td>
                <td>神经毒素弹头</td>
                <td>
                    “辐射打击”命中时会使敌方单位陷入恐惧，令其惊慌逃窜。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_12.png" alt = "新单位：奥古斯特格勒的骄傲"></td>
                <td>新单位：奥古斯特格勒的骄傲</td>
                <td>
                   强大的皇家卫队战舰。可以使用大和炮与战术折跃。在星港中建造。<br><br>可以攻击地面和空中单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_13.png" alt = "彻底毁灭"></td>
                <td>彻底毁灭</td>
                <td>
                    将“核弹天劫”投下的战术导弹数量从20枚提高至40枚。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_14.png" alt = "皇家卫队高级升级包"></td>
                <td>皇家卫队高级升级包</td>
                <td>
                    解锁下列升级：
                    <ul>
                        <li>使元首鬼影无需引导即可发射战术导弹打击（在皇家军校中研究）。</li>
                        <li>黑色战锤使其下方单位的护甲提高5点（在军械库中研究）。</li>
                        <li>奥古斯特格勒的骄傲使附近友方远程地面单位的攻击射程提高1（在聚变芯体中研究）。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/mengsk/mengsk_15.png" alt = "保证晋升"></td>
                <td>保证晋升</td>
                <td>
                    皇家卫队现在可以晋升至3级军阶，并获得下列能力：
                    <ul>
                        <li>壁垒卫士可以大幅提高自身攻击速度。</li>
                        <li>元首鬼影的“焰能爆燃”会在目标死亡时引发爆炸。“EMP震爆”还会根据吸取的能量值对单位造成等量伤害。</li>
                        <li>扩大冲击分队在攻城模式下攻击的作用范围。</li>
                        <li>提高黑色战锤在掩护射击模式下的攻击速度。</li>
                        <li>使天空之怒在战机模式下有几率闪避敌方攻击。天空之怒在突击模式下受到致命伤害时，会变形为战机模式并获得一道屏障。</li>
                        <li>使奥古斯特格勒的骄傲的大和炮可以连续快速开火三次。</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官获得了显著的强度提升。</p>
    <h2 id="achievements">成就</h2>
    <p>蒙斯克的指挥官专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/mengsk/earthbroken.jpg" alt="八字克土"></td>
                <td>八字克土</td>
                <td>使用大地碎裂炮的轰击造成200,000点伤害。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/mengsk/iamthelaw.jpg" alt="我就是王法"></td>
                <td>我就是王法</td>
                <td>使用“辐射打击”“战争恶犬”和“核弹天劫”累计消灭2000个敌方单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/mengsk/thebestemperor.jpg" alt="文武双全英明神武泰伦明灯大帝"></td>
                <td>文武双全英明神武泰伦明灯大帝</td>
                <td>在困难难度中，将至少50补给单位的皇家卫队同时晋升至3级军阶。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/mengsk/thiswasyourrifle.jpg" alt="枪就是你的生命"></td>
                <td>枪就是你的生命</td>
                <td>让帝国冲锋队拾取500件武器。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">面板技能</h2>
    <p>15级且未分配精通点数时，蒙斯克的面板技能如下：</p>
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
                <td><img src="/images/commanderdata/abilities/mengsk/forcedconscription.png" alt = "强制征召"></td>
                <td>强制征召</td>
                <td>从轨道空投一座补给地堡，里面还有6名不幸的冲锋队员值守。</td>
                <td>
                    <ul>
                        <li>若选择了天命皇权精通，便可在游戏极早期快速开矿。</li>
                        <li>可将其空投至前线，把冲锋队变回劳工以协助维修单位。</li>
                        <li>只要地形已经探索，即使没有视野也可以空投。</li>
                        <li>回收不再使用的地堡以获得额外资源。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>充能冷却时间：60秒</li>
                        <li>所需天命皇权：25</li>
                        <li>建造时间：3秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/mengsk/contaminatedstrike.png" alt = "辐射打击"></td>
                <td>辐射打击</td>
                <td>为所有大地碎裂炮装填实验性弹头，可瞄准地图上的任意区域。弹头会随机落在目标区域附近，使敌人在恐惧中四处逃窜，并让该区域充满受辐射的生物质。所有进入其中的敌人每秒受到5点伤害，且受影响的单位无法隐形。</td>
                <td>
                    <ul>
                        <li>适合在推进前投向进攻波次或敌方基地。</li>
                        <li>只有被第一轮打击命中的敌人才会陷入恐惧；后来走进毒云的敌人不会恐惧。</li>
                        <li>恐惧会取消单位当前的命令，因此被“辐射打击”命中的进攻波次会停止向玩家基地移动。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：30秒</li>
                        <li>所需天命皇权：25</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/mengsk/dogsofwar1.png" alt = "战争恶犬（等级1）"><img src="/images/commanderdata/abilities/mengsk/dogsofwar2.png" alt = "战争恶犬（等级2）"><img src="/images/commanderdata/abilities/mengsk/dogsofwar3.png" alt = "战争恶犬（等级3）"><img src="/images/commanderdata/abilities/mengsk/dogsofwar4.png" alt = "战争恶犬（等级4）"></td>
                <td>战争恶犬</td>
                <td>在目标位置部署30只被奴役的跳虫，持续60秒。被奴役的异虫会寻找并攻击最近的敌人。<br><br>根据天命皇权额外部署被奴役的异虫。<br><br>50%：额外部署10只刺蛇。<br>75%：额外部署10只异龙。<br>100%：额外部署5只雷兽。</td>
                <td>
                    <ul>
                        <li>在部分地图快速开矿时可用来代替一座地堡（参见玩法攻略），但效率较低，不推荐这样做。</li>
                        <li>非常适合吸引敌方单位火力，让你的部队在异虫阵线后方输出。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：180秒</li>
                        <li>所需天命皇权：25</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/mengsk/nuclearannihilation.png" alt = "核弹天劫"></td>
                <td>核弹天劫</td>
                <td>以仿佛无穷无尽的40枚战术导弹覆盖目标区域，每枚导弹对小范围造成150（对建筑+100）点伤害，随后再投下一枚核弹，对大范围造成500（对建筑+300）点伤害。</td>
                <td>
                    <ul>
                        <li>范围伤害极高，可用于清理敌方基地。</li>
                        <li>使用此技能前，先用大地碎裂炮取得敌方基地中心的视野。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：300秒</li>
                        <li>所需天命皇权：100</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">飞升前升级</h2>
    <p>难度：中等</p>
    <p>在解锁大地碎裂炮之前，蒙斯克升级会非常困难，因为他几乎无法在交战中做到部队无损。解锁大地碎裂炮后，应在推进前用它削弱敌方基地与进攻波次。由冲锋队在前排阻挡敌军，再让冲击分队提供伤害。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是蒙斯克的三个技能组及各自推荐的点数分配。这套分配是一种通用配置，适用于未选择威望的大多数地图。强烈建议你根据自己的玩法和面对的具体挑战（例如<a href="/resources/weeklymutations">每周突变</a>）调整精通。</p>
    <p>技能组1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>劳工与冲锋队帝国支持度</td>
                <td>每点1%<br>最高30%</td>
                <td>30</td>
                <td rowspan="2">皇家卫队造价极高，而产生天命皇权的效率相对较低，因此皇家卫队精通竞争力很弱。玩家始终可以使用劳工和冲锋队，它们在帝国见证者附近能产生更多天命皇权。</td>
            </tr>
            <tr>
                <td>皇家卫队帝国支持度</td>
                <td>每点1%<br>最高30%</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">考虑到蒙斯克玩法多样，劳工精通是更好的选择，因为无论采用何种玩法都能受益，让指挥官在所有地图上都保持效能。</p>
    <p>技能组2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>成吨伤害</td>
                <td>每点1%<br>最高30%</td>
                <td>?</td>
                <td rowspan="2">在天命皇权生成速度最大化的前提下，“成吨伤害”精通适合更依赖顶部面板技能的玩法；“皇家卫队费用”则能让部队中容纳更多皇家卫队单位。</td>
            </tr>
            <tr>
                <td>皇家卫队费用</td>
                <td>每点-0.66%<br>最高-20%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">如果玩家经常使用“战争恶犬”（多线操作吃力时也可能用它来快速开矿），选择“成吨伤害”会更有收益。否则，“皇家卫队费用”是更好的选择，因为它能直接强化你的部队。</p>
    <p>技能组3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>起始天命皇权</td>
                <td>每点1<br>最高30</td>
                <td>30</td>
                <td rowspan="2">“皇家卫队经验获取速度”精通可以让皇家卫队快速升级，尽早获得3级军阶加成；“起始天命皇权”则为指挥官提供更多前期选择。</td>
            </tr>
            <tr>
                <td>皇家卫队经验获取速度</td>
                <td>每点0.5%<br>最高15%</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">“起始天命皇权”是更好的选择，因为它能让蒙斯克在2分钟时使用两座补给地堡，从而快速开矿并发展经济。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是蒙斯克的威望。“生效等级”指该威望发挥完整效果时所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>毒性暴君</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>“辐射打击”的恐惧持续时间延长200%；其持续伤害效果还会使目标受到的伤害提高25%；技能消耗降低20%，冷却时间缩短66%。</li>
                        <li>冲锋队操作大地碎裂炮时会提供帝国支持度。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用“核弹天劫”。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>说明</th>
                <td>
                    <ul>
                        <li>只有获得5级解锁项“绝对权威”后，天命皇权生成效果才会生效。</li>
                        <li>“放大电波”会影响大地碎裂炮内的冲锋队。</li>
                        <li>大地碎裂炮内的冲锋队无需帝国见证者也能额外生成天命皇权。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>11</td>
            </tr>
            <tr>
                <th>建议</th><td>当玩家把大地碎裂炮纳入战术体系时，此威望的表现最佳。虽然无法使用“核弹天劫”，但可以在蒙斯克的部队推进前对敌方基地施放“辐射打击”。恐惧和易伤效果能让进攻敌方基地变得极为高效。此威望也进一步简化了进攻波次的处理：恐惧不仅会打断进攻波次AI的移动命令，额外的增伤也能让你更轻松地在效果持续期间消灭敌军。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>底层的力量</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>皇家卫队的高能瓦斯费用降低25%，经验获取量提高100%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>皇家卫队的晶体矿费用提高100%，补给消耗提高50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>说明</th>
                <td>
                    <ul>
                        <li>此威望的皇家卫队费用与“皇家卫队费用”精通以乘法方式叠加。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>此威望让玩家可以专注于量产皇家卫队：游戏开局便能迅速生产皇家卫队，从而改善前期表现。它与“皇家卫队费用”精通配合良好，与“皇家卫队帝国支持度”精通的配合则更加出色。由于皇家卫队的补给消耗提高，两者结合能达到游戏中最高的天命皇权生成速度之一。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>死亡贩子</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>装备武器的冲锋队死亡时会启动武器的自毁机制。</li>
                        <li>冲锋队武器的费用变为40点晶体矿和20点高能瓦斯。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>冲锋队不再掉落武器。</li>
                        <li>无法使用帝国仲裁机。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>说明</th>
                <td>
                    <ul>
                        <li>武器会对1.5范围内造成150（对建筑+100）点伤害。</li>
                        <li>武器会在12射程内搜索目标。</li>
                        <li>武器需要视野才能发现目标。</li>
                        <li>若未找到目标，武器会在2秒后引爆。</li>
                        <li>武器也可以瞄准空中单位。</li>
                        <li>冲锋队可以变回劳工，彼此维修。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>2</td>
            </tr>
            <tr>
                <th>建议</th><td>此威望大幅降低为冲锋队装备强化武器的费用，使蒙斯克能迅速提高前期每秒伤害。由于没有帝国仲裁机，壁垒卫士与元首鬼影受到的伤害无法恢复，冲锋队则需要变回劳工才能互相维修。因此建议围绕地堡作战，以减少部队承受的伤害。推进敌方基地或进攻波次时也要谨慎：建议先用面板技能或大地碎裂炮削弱敌军，再由部队收尾，从而降低战损。也可以牺牲少量冲锋队来削弱进攻波次，但要留意敌军阵型占地范围。分散在大范围内的波次会让交换效率远低于聚成一团的波次。也不要让冲锋队冲进敌方基地送死，因为武器爆炸很可能一次只能消灭一个单位。</td>
            </tr>
        </tbody>
    </table>
    <p>蒙斯克的所有威望都有可用之处，具体取决于玩家偏好的玩法。不过在常规游戏中，“死亡贩子”使蒙斯克能灵活应对多种局面。虽然强化冲锋队的造价略有提高，但它们能提升你与埃蒙换兵时的整体效率，回报十分可观。</p>
    <h2 id="army">推荐部队组成</h2>
    <p>蒙斯克的推荐部队组成如下。此处假定未选择威望，并采用推荐精通分配。这只是部队框架的基础建议。建议先了解<a href="#units">单位</a>章节中的各个单位，再根据实际局势加入科技单位，以便更好地应对挑战。</p>
    <img class="army" src="/images/commanderdata/units/mengsk/dominionassaulttrooper.jpg" alt="帝国突击手冲锋队"><img class="army" src="/images/commanderdata/units/mengsk/dominionrockettrooper.jpg" alt="帝国火箭筒冲锋队"><img class="army" src="/images/commanderdata/units/mengsk/aegisguard.jpg" alt="壁垒卫士"><img class="army" src="/images/commanderdata/units/mengsk/imperialintercessor.jpg" alt="帝国仲裁机"><img  class="army" src="/images/commanderdata/units/mengsk/prideofaugustgrad.jpg" alt="奥古斯特格勒的骄傲"><img class="army"  src="/images/commanderdata/units/mengsk/imperialwitness.jpg" alt="帝国见证者">
    <p>混编不同类型的冲锋队十分重要。突击手冲锋队负责输出，火箭筒冲锋队则能轻松处理空中单位，两者比例取决于敌方部队组成和地图目标。用壁垒卫士为冲锋队承担伤害，并让帝国仲裁机治疗受伤单位。尽快攀升科技生产奥古斯特格勒的骄傲，以获得强大的进攻波次处理能力。记得让帝国见证者进入爱国者模式，为部队提供额外增益。</p>
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
    <p>有关蒙斯克单位属性、单位间对比与升级计算的更多信息，请参阅<a href="/units/#mengsk">数据表</a>页面。</p>
    <p>蒙斯克的作战单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/dominiontrooper">
                <img src="/images/commanderdata/units/mengsk/dominiontrooper.jpg" alt="帝国冲锋队">
                <p>帝国冲锋队</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>蒙斯克最基础的作战单位。</li>
                <li>可以装备三种武器之一，以提高属性并获得伤害加成。</li>
                <li>在大多数任务中，驻入地堡后可用于防守第一波进攻。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/dominionassaulttrooper">
                <img src="/images/commanderdata/units/mengsk/dominionassaulttrooper.jpg" alt="帝国突击手冲锋队">
                <p>帝国突击手冲锋队</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>全能型输出单位。</li>
                <li>伤害输出是普通帝国冲锋队的两倍。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/dominionflametrooper">
                <img src="/images/commanderdata/units/mengsk/dominionflametrooper.jpg" alt="帝国火焰器冲锋队">
                <p>帝国火焰器冲锋队</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>生命值远高于其他冲锋队，且初始拥有1点护甲。</li>
                <li>适合对付成群的轻甲单位，例如异虫部队。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/dominionrockettrooper">
                <img src="/images/commanderdata/units/mengsk/dominionrockettrooper.jpg" alt="帝国火箭筒冲锋队">
                <p>帝国火箭筒冲锋队</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>拥有非常强力的对空攻击，并对重甲空中目标造成额外伤害。</li>
                <li>攻击地面单位时仍使用冲锋队原本未强化的武器。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/aegisguard">
                <img src="/images/commanderdata/units/mengsk/aegisguard.jpg" alt="壁垒卫士">
                <p>壁垒卫士</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>适合在前线为其他单位承担伤害。</li>
                <li>对重甲目标伤害出色，解锁“高级兴奋剂”后尤其如此。</li>
                <li>2级军阶升级使其能高效应对包含大量低生命值单位的波次，例如异虫或经典生化部队。</li>
                <li>2级军阶的溅射伤害取决于主目标的护甲类型，并会无视受到溅射伤害单位的护甲。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>所需军阶</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/mengsk/highgradestimpacks.png" alt="高级兴奋剂"></td>
                        <td>高级兴奋剂</td>
                        <td>攻击速度提高200%，持续10秒。</td>
                        <td>30秒</td>
                        <td>3</td>
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
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/incapacitatorshells.png" alt="制残弹"></td>
                        <td>制残弹</td>
                        <td>使壁垒卫士的攻击可以减速敌方单位（移动速度降低60%，持续3秒）。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
            <p>军阶解锁：</p>
            <table class="rankTable">
                <thead>
                    <tr>
                        <th>军阶</th>
                        <th>总经验值</th>
                        <th>军阶加成</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1200</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/aegisbarrier.png" alt="壁垒屏障"><p><b>壁垒屏障：</b>为壁垒卫士提供一道可吸收300点伤害的护盾。护盾被击破时会释放能量脉冲，击退附近地面单位。该护盾每60秒恢复至满值。</p></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>4000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>攻击会形成锥形弹片，对目标身后的敌人造成20%伤害。</p></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>8800</td>
                        <td><img src="/images/commanderdata/unitskills/mengsk/highgradestimpacks.png" alt="高级兴奋剂"><p><b>高级兴奋剂：</b>攻击速度提高200%，持续10秒。</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/emperorsshadow">
                <img src="/images/commanderdata/units/mengsk/emperorsshadow.jpg" alt="元首鬼影">
                <p>元首鬼影</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>“战术飞弹打击”的作用范围较小，实用性不高。</li>
                <li>“焰能爆燃”可用于处理跳虫等小规模生物单位波次。</li>
                <li>面对高伤害机械单位组成时，“EMP震爆”十分重要。</li>
                <li>建造多座皇家军校可让元首鬼影拥有多枚可供发射的核弹。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>所需军阶</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/mengsk/pyrokineticimmolation.png" alt="焰能爆燃"></td>
                        <td>焰能爆燃</td>
                        <td>点燃一名敌方生物单位，持续20秒，每秒对目标自身及附近敌方生物单位造成20点伤害。可以设为自动施放。消耗75点能量。</td>
                        <td>5秒</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/mengsk/empblast.png" alt="EMP震爆"></td>
                        <td>EMP震爆</td>
                        <td>对目标区域内敌方单位的护盾造成100点伤害并耗尽其能量。使机械单位昏迷1秒。隐形单位被命中后会显形10秒。可以设为自动施放。消耗75点能量。</td>
                        <td>8秒</td>
                        <td>0</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/mengsk/labyrinthcloak.png" alt="迷宫式隐形迷彩"></td>
                        <td>迷宫式隐形迷彩</td>
                        <td>元首鬼影受到攻击后，10秒内免受任何伤害。该效果每30秒只能触发一次。</td>
                        <td>30秒</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/mengsk/tacticalmissilestrike.png" alt="战术飞弹打击"></td>
                        <td>战术飞弹打击</td>
                        <td>在目标位置召唤一次战术飞弹打击。战术飞弹需要4秒落地，但会对小范围内敌人造成最多150（对建筑+100）点伤害。（命中点1.5范围内造成100%伤害，1.5至2.0范围造成50%伤害。）<br><br>冷却时间即制造一枚飞弹所需的时间。</td>
                        <td>90秒</td>
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
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/sovereigntacticalmissiles.png" alt="元首战术飞弹"></td>
                        <td>元首战术飞弹</td>
                        <td>元首鬼影施放“战术飞弹打击”时不再需要引导。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
            <p>军阶解锁：</p>
            <table class="rankTable">
                <thead>
                    <tr>
                        <th>军阶</th>
                        <th>总经验值</th>
                        <th>军阶加成</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1200</td>
                        <td><img src="/images/commanderdata/unitskills/mengsk/labyrinthcloak.png" alt="迷宫式隐形迷彩"><p><b>迷宫式隐形迷彩：</b>元首鬼影受到攻击后，10秒内免受任何伤害。该效果每30秒只能触发一次。</p></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>4000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>“焰能爆燃”的周期伤害提高50%。“EMP震爆”的昏迷时间延长1秒。</p></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>8800</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>目标死亡时，“焰能爆燃”会对附近敌人造成50点伤害。“EMP震爆”会吸取目标的全部能量，并造成与吸取量相等的伤害。</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/shockdivision">
                <img src="/images/commanderdata/units/mengsk/shockdivision.jpg" alt="冲击分队">
                <p>冲击分队</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>部署在地堡后方时，适合应对以地面单位为主的进攻波次。</li>
                <li>以攻城模式吊挂在帝国仲裁机下方时，可作为对空选择。</li>
                <li>吊挂时的伤害输出不如黑色战锤和奥古斯特格勒的骄傲等更优秀的对空单位。</li>
            </ul>
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
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/armamentstabilizers.png" alt="武器稳定器"></td>
                        <td>武器稳定器</td>
                        <td>使攻城模式下的冲击分队被帝国仲裁机吊挂时，能以较低的射速（66%）攻击空中单位。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/smartservos.png" alt="智能伺服器"></td>
                        <td>智能伺服器</td>
                        <td>使冲击分队、黑色战锤和天空之怒的变形时间缩短66%。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
            <p>军阶解锁：</p>
            <table class="rankTable">
                <thead>
                    <tr>
                        <th>军阶</th>
                        <th>总经验值</th>
                        <th>军阶加成</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1800</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/shockandawe.png" alt="震撼与敬畏"><p><b>震撼与敬畏：</b>在攻城模式下，该单位的攻击会使敌方单位昏迷1秒。对每个单位每5秒只能触发一次。<br><br>重型和英雄单位只会被减速。</p></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>6000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>在攻城模式下，视野与攻击射程提高2。</p></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>13200</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>攻城模式下攻击的作用范围扩大40%。</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/blackhammer">
                <img src="/images/commanderdata/units/mengsk/blackhammer.jpg" alt="黑色战锤">
                <p>黑色战锤</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>适合在前线承受伤害，对地输出也相当不错。</li>
                <li>掩护射击模式非常适合处理大量低生命值空中单位。</li>
            </ul>
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
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/bulwarkfield.png" alt="壁垒场"></td>
                        <td>壁垒场</td>
                        <td>黑色战锤使附近（5范围内）的友方地面单位获得+5护甲。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/smartservos.png" alt="智能伺服器"></td>
                        <td>智能伺服器</td>
                        <td>使冲击分队、黑色战锤和天空之怒的变形时间缩短66%。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
            <p>军阶解锁：</p>
            <table class="rankTable">
                <thead>
                    <tr>
                        <th>军阶</th>
                        <th>总经验值</th>
                        <th>军阶加成</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2400</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>掩护射击模式的作用范围扩大50%。</p></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>8000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>掩护射击模式的射程提高2。</p></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>17600</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>掩护射击模式下的攻击速度提高33%。</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/skyfury">
                <img src="/images/commanderdata/units/mengsk/skyfury.jpg" alt="天空之怒">
                <p>天空之怒</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>相较于其定位，造价过高，而且作用被蒙斯克的其他单位盖过。</li>
                <li>达到1级军阶后，可用于对付重型目标。</li>
                <li>达到2级军阶后，每次切换模式都会使其伤害输出提高5秒，可用于打出爆发伤害。</li>
            </ul>
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
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/aesirturbines.png" alt="亚萨涡轮机"></td>
                        <td>亚萨涡轮机</td>
                        <td>使天空之怒的移动速度提高55%。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/smartservos.png" alt="智能伺服器"></td>
                        <td>智能伺服器</td>
                        <td>使冲击分队、黑色战锤和天空之怒的变形时间缩短66%。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
            <p>军阶解锁：</p>
            <table class="rankTable">
                <thead>
                    <tr>
                        <th>军阶</th>
                        <th>总经验值</th>
                        <th>军阶加成</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1200</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>对重型目标造成50点额外伤害。</p></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>4000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/tacticalrealignment.png" alt="战术调整"><p><b>战术调整：</b>变形后，该单位的攻击伤害提高50%，持续5秒。该效果每15秒只能触发一次。</p></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>8800</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/evasivemaneuvers.png" alt="闪避机动"><p><b>闪避机动：</b>该单位有50%的几率闪避攻击。</p><br><br>
                        <img src="/images/commanderdata/unitupgrades/mengsk/phoenixprotocol.png" alt="不死鸟协议"><p><b>不死鸟协议：</b>该单位受到致命伤害时，天空之怒会变形为战机模式，并暂时获得一道可吸收400点伤害、持续15秒的屏障。该效果每90秒只能触发一次。</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/imperialintercessor">
                <img src="/images/commanderdata/units/mengsk/imperialintercessor.jpg" alt="帝国仲裁机">
                <p>帝国仲裁机</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>让冲锋队在战斗中存活的重要单位。</li>
                <li>两项升级都能显著提高仲裁机的效能与生存能力。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>所需军阶</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/mengsk/heal.png" alt="治疗"></td>
                        <td>治疗</td>
                        <td>治疗一个友方生物目标。<br><br>每消耗3点能量恢复9点生命值。</td>
                        <td>0秒</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/mengsk/igniteafterburners.png" alt="后燃推进系统"></td>
                        <td>后燃推进系统</td>
                        <td>该单位的移动速度提高70%，持续8秒。</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/dualresuscitators.png" alt="双重复苏器"></td>
                        <td>双重复苏器</td>
                        <td>使帝国仲裁机可以同时治疗两个目标。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/scatterveil.png" alt="散射帷幕"></td>
                        <td>散射帷幕</td>
                        <td>使帝国仲裁机永久隐形，并获得一道可吸收100点伤害的护盾。</td>
                        <td>50/50</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/imperialwitness">
                <img src="/images/commanderdata/units/mengsk/imperialwitness.jpg" alt="帝国见证者">
                <p>帝国见证者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>蒙斯克生成天命皇权的关键单位。</li>
                <li>玩家应尽快生产该单位，并让它在自己的矿区上方进入爱国者模式。</li>
                <li>不要放在盟友矿区上方，因为这样无法生成天命皇权，而且矿区饱和后，移动速度提升也不会增加资源收入。</li>
                <li>也可让它在战场交战区域上方进入爱国者模式，以利用移动速度和攻击速度增益。</li>
                <li>爱国者模式下为15范围内单位提供20%攻击速度与移动速度加成。</li>
            </ul>
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
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/amplifiedairwaves.png" alt="放大电波"></td>
                        <td>放大电波</td>
                        <td>使受到帝国见证者“教导”影响的劳工与冲锋队提供的帝国支持度加倍。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#mengsk/prideofaugustgrad">
                <img src="/images/commanderdata/units/mengsk/prideofaugustgrad.jpg" alt="奥古斯特格勒的骄傲">
                <p>奥古斯特格勒的骄傲</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>非常适合处理进攻波次中聚成一团的敌方单位。</li>
                <li>达到3级军阶后，大和炮会重新选择目标，避免对单个单位伤害溢出。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>所需军阶</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/mengsk/yamatocannon.png" alt="大和炮"></td>
                        <td>大和炮</td>
                        <td>使用毁灭性的等离子炮轰击目标，造成300点伤害。</td>
                        <td>120秒</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/mengsk/tacticaljump.png" alt="战术跳跃"></td>
                        <td>战术跳跃</td>
                        <td>跃迁至目标位置。战列巡航舰在跃迁期间无敌。</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/fieldassisttargetingsystem.png" alt="战场辅助瞄准系统"></td>
                        <td>战场辅助瞄准系统</td>
                        <td>使奥古斯特格勒的骄傲可以让附近友方远程地面单位的射程提高1。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                </tbody>
            </table>
            <p>军阶解锁：</p>
            <table class="rankTable">
                <thead>
                    <tr>
                        <th>军阶</th>
                        <th>总经验值</th>
                        <th>军阶加成</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>3000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>大和炮与战术跳跃可额外储存一次充能。</p></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>10000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>大和炮会对目标周围区域造成伤害。</p></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>22000</td>
                        <td><img src="/images/commanderdata/unitupgrades/mengsk/veterancy.png" alt="精英化"><p>大和炮额外开火2次，并选择新的目标。</p></td>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是蒙斯克的标准经济建造顺序。有关如何阅读及编写自己的建造顺序，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        13补给：在分矿空投地堡<br>
        24补给：建造地堡，主矿保留16名劳工<br>
        25补给：卸下分矿地堡内单位并清理岩石<br>
        28补给：派4名劳工前往分矿<br>
        30补给：用4名劳工建造征兵中心<br>
        32补给：将冲锋队变为劳工，快速建造分矿基地<br>
        32补给：空投地堡，卸下单位并转为劳工<br>
        38补给：用3名劳工建造精炼厂<br>
        38补给：用3名劳工建造精炼厂<br>
        39补给：用3名劳工建造精炼厂<br>
        41补给：用3名劳工建造精炼厂<br>
        45补给：用8名劳工建造兵营<br>
        50补给：用8名劳工建造重工厂<br>
        53补给：用8名劳工建造星港<br>
        56补给：生产帝国见证者<br>
    </p>
    <h2 id="guide">玩法攻略</h2>
    <h3>玩法误区</h3>
    <p>冲锋队的武器升级看似昂贵，却能大幅提高单位的作战表现。若有闲置晶体矿，务必尽可能用于升级冲锋队武器。</p>
    <p>另一个常见诱惑是生产大量皇家卫队单位。这样会使击杀敌人获得的经验分摊给更多单位，拖慢它们提升军阶的速度。对壁垒卫士等小型单位而言，影响或许不大；但对奥古斯特格勒的骄傲等大型单位来说，问题会非常严重。这些单位在3级军阶时会获得显著强化，甚至到这一军阶才真正体现不可替代的价值。若同时拥有多艘奥古斯特格勒的骄傲，再加上它们极高的升级经验需求，玩家可能始终无法升到使其发挥关键作用的军阶。</p>
    <h3>单位军阶</h3>
    <p>蒙斯克的皇家卫队拥有精英化机制。地图各处有敌方单位被消灭时，它们便可获得经验。积累到一定经验后，单位会提升军阶，解锁额外技能或加成。升级机制如下：</p>
    <ul>
        <li>敌方单位被消灭时，每点被消灭单位的补给消耗会“掉落”100点经验。</li>
        <li>若该单位不是英雄单位且补给消耗为0，则不掉落经验。</li>
        <li>若该单位是英雄单位且补给消耗为0，则掉落800点经验。</li>
        <li>掉落的经验由被消灭单位15范围内所有符合条件的单位（尚未满级的皇家卫队）平均分配。</li>
        <li>若被消灭单位15范围内没有符合条件的单位，则由地图上所有符合条件的单位平均分配经验。</li>
        <li>皇家卫队达到最高军阶后，会从符合条件的单位池中移除，以免浪费经验。</li>
    </ul>
    <h3>多名劳工协同建造</h3>
    <p>蒙斯克可以派多名劳工共同建造一座建筑。不同劳工数量对应的建筑完成时间如下：</p>
    <table>
        <thead>
            <tr>
                <th>劳工数</th>
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
    <h3 id="fastexpand">快速开矿</h3>
    <p>在“起始天命皇权”精通投入30点后，蒙斯克达到50点天命皇权时便可使用下列任意一种面板技能组合，从而开始双地堡开矿。单地堡开矿则可在游戏开始时进行。</p>
    <ul>
        <li>两座地堡</li>
        <li>一座地堡，加一次1级“战争恶犬”</li>
        <li>一次2级“战争恶犬”</li>
    </ul>
    <p>下方展示的最优开矿方式要求玩家尽量多用地堡面板技能，并避免使用异虫面板技能。原因是空投地堡会额外提供冲锋队，它们可变回劳工以迅速让分矿满采。不过，若玩家觉得这些开矿操作太难，也可以尝试用异虫面板技能代替一座地堡（但这些方案尚未经过测试）。</p>
    <p>下方图片展示了各地图的快速开矿方式。这些操作需要大量练习才能稳定完成，但能让你取得经济优势。</p>
    <table id="fastExpoTable">
        <thead>
            <tr>
                <th>地图</th>
                <th>玩家1分矿</th>
                <th>玩家2分矿</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/missions/chainofascension">飞升之链</a><br /><br />
                    <form action='#'>
                        <label><input type='radio' name='coa' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='coa' value='terran'>人类</label><br>
                        <label><input type='radio' name='coa' value='zerg'>异虫</label><br></form>
                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_coa_protoss_1.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_coa_terran_1.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_coa_zerg_1.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_coa_protoss_2.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_coa_terran_2.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_coa_zerg_2.jpg');
                        preload(imgList);
                        $("input[name='coa']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#coa1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/mengsk/fastexpand_coa_'+ race + '_1.jpg';
                            var newImg = $(img).hide();
                            $('#coa1div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'coa1');
                            var oldImg = $('#coa2');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/mengsk/fastexpand_coa_'+ race + '_2.jpg';
                            var newImg = $(img).hide();
                            $('#coa2div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'coa2');
                            return false;
                        })
                    </script>
                </td>
                <td><div class="fastExpand" id="coa1div"><img id="coa1" src="/images/commanderdata/guides/mengsk/fastexpand_coa_protoss_1.jpg" alt="飞升之链玩家1快速开矿"></div></td>
                <td><div class="fastExpand" id="coa2div"><img id="coa2" src="/images/commanderdata/guides/mengsk/fastexpand_coa_protoss_2.jpg" alt="飞升之链玩家2快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                <td class="centered" colspan="2">快速开矿不值得，损失冲锋队和地堡的风险太高。</td>
            </tr>
            <tr>
                <td><a href="/missions/deadofnight">亡者之夜</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/lockload">天锁</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/malwarfare">恶意代码</a>*<br /><br />
                    <form action='#'>
                        <label><input type='radio' name='mw' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='mw' value='terran'>人类</label><br>
                        <label><input type='radio' name='mw' value='zerg'>异虫</label><br></form>
                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_mw_protoss_1.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_mw_terran_1.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_mw_zerg_1.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_mw_protoss_2.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_mw_terran_2.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_mw_zerg_2.jpg');
                        preload(imgList);
                        $("input[name='mw']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#mw1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/mengsk/fastexpand_mw_'+ race + '_1.jpg';
                            var newImg = $(img).hide();
                            $('#mw1div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'mw1');
                            var oldImg = $('#mw2');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/mengsk/fastexpand_mw_'+ race + '_2.jpg';
                            var newImg = $(img).hide();
                            $('#mw2div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'mw2');
                            return false;
                        })
                    </script>
                </td>
                <td><div class="fastExpand" id="mw1div"><img id="mw1" src="/images/commanderdata/guides/mengsk/fastexpand_mw_protoss_1.jpg" alt="恶意代码玩家1快速开矿"></div></td>
                <td><div class="fastExpand" id="mw2div"><img id="mw2" src="/images/commanderdata/guides/mengsk/fastexpand_mw_protoss_2.jpg" alt="恶意代码玩家2快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                <td colspan="2"><div class="fastExpand"><img id="me1" src="/images/commanderdata/guides/mengsk/fastexpand_me.jpg" alt="疏散矿工快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/partparcel">聚铁成兵</a>*<br /><br />
                    <form action='#'>
                        <label><input type='radio' name='pp' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='pp' value='terran'>人类</label><br>
                        <label><input type='radio' name='pp' value='zerg'>异虫</label><br></form>
                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_pp_protoss.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_pp_terran.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_pp_zerg.jpg');
                        preload(imgList);
                        $("input[name='pp']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#pp1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/mengsk/fastexpand_pp_'+ race + '.jpg';
                            var newImg = $(img).hide();
                            $('#pp1div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'pp1');
                            return false;
                        })
                    </script>
                </td>
                <td colspan="2"><div class="fastExpand" id="pp1div"><img id="pp1" src="/images/commanderdata/guides/mengsk/fastexpand_pp_protoss.jpg" alt="聚铁成兵快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                <td colspan="2"><div class="fastExpand"><img id="soa1" src="/images/commanderdata/guides/mengsk/fastexpand_soa.jpg" alt="埃蒙之镰快速开矿"></div><p>注意：在此任务中快速开矿会拖慢任务完成速度。使用地堡面板技能清理4号裂片（西南）。3号（北）与5号（西北）裂片可用“核弹天劫”清理。1号（主基地）与2号（分矿）裂片则可用任务过程中建造的大地碎裂炮清理。</p></td>
            </tr>
            <tr>
                <td><a href="/missions/templeofthepast">往日神庙</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/thevermillionproblem">熔火危机</a><br /><br />
                    <form action='#'>
                        <label><input type='radio' name='tvp' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='tvp' value='terran'>人类</label><br>
                        <label><input type='radio' name='tvp' value='zerg'>异虫</label><br></form>
                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_tvp_protoss.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_tvp_terran.jpg');
                        imgList.push('/images/commanderdata/guides/mengsk/fastexpand_tvp_zerg.jpg');
                        preload(imgList);
                        $("input[name='tvp']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#tvp1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/mengsk/fastexpand_tvp_'+ race + '.jpg';
                            var newImg = $(img).hide();
                            $('#tvp1div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            return false;
                        })
                    </script>
                </td>
                <td colspan="2"><div class="fastExpand" id="tvp1div"><img id="tvp1" src="/images/commanderdata/guides/mengsk/fastexpand_tvp_protoss.jpg" alt="熔火危机快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/voidlaunch">虚空降临</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                <td class="centered" colspan="2">分矿无人驻守</td>
            </tr>
        </tbody>
    </table>
    <p>*由于这些任务的分矿驻军很少，只需一座地堡即可清理。因此可将第二座地堡投在主矿，卸下冲锋队并将其变为劳工，进一步加快主矿饱和。</p>
    <h3>大地碎裂炮</h3>
    <p>大地碎裂炮是蒙斯克玩法的核心组成部分。它们用于削弱进攻波次和敌方基地，让蒙斯克较为脆弱的征召部队能在更有利的条件下交战。大地碎裂炮可以使用下列升级：</p>
    <table class="unitUpgrades">
        <thead>
            <tr>
                <th>升级</th>
                <th>名称</th>
                <th>效果</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                <th>研究时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/mengsk/neosteelfortifiedarmor.png" alt="新钢强化装甲"></td>
                <td>新钢强化装甲</td>
                <td>使补给地堡、导弹塔和大地碎裂炮的生命值（+200）与护甲（+2）提高。</td>
                <td>100/100</td>
                <td>90秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/mengsk/hemisphericaccelerants.png" alt="半球加速剂"></td>
                <td>半球加速剂</td>
                <td>使大地碎裂炮“轰击”技能的射程提高25。</td>
                <td>150/150</td>
                <td>90秒</td>
            </tr>
        </tbody>
    </table>
    <p>除升级外，让征召单位（冲锋队或劳工）进入大地碎裂炮后，每装载一名征召单位，每30秒内的炮击轮数便增加一轮。下表汇总了相关数据：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>装载的征召单位数</th>
                <th>每30秒炮击轮数</th>
                <th>炮击间隔</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>1</td>
                <td>30秒</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>15秒</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3</td>
                <td>10秒</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
                <td>7.5秒</td>
            </tr>
            <tr>
                <td>4</td>
                <td>5</td>
                <td>6秒</td>
            </tr>
        </tbody>
    </table>
    <p>大地碎裂炮的攻击带有随机性。选择轰击区域后，大地碎裂炮会在所选位置7.5范围内随机选取一个半径为3的区域。炮弹命中前会提供半径4的视野，命中时对该区域造成100点伤害。下图展示了涉及范围的大致大小：</p>
    <img src="/images/commanderdata/guides/mengsk/artillerysizes.jpg" alt="蒙斯克火炮作用范围">
    <p>上图标示的区域含义如下：</p>
    <ul>
        <li><span style="color:red">红色区域：</span>假设以水晶塔为目标中心，轰击中心可能随机落入的区域。</li>
        <li><span style="color:yellow">黄色区域：</span>假设轰击中心选在红色区域边缘，火炮可能造成伤害的区域。</li>
        <li><span style="color:limegreen">绿色区域：</span>单次轰击的大小。该区域内所有敌方地面单位都会受到100点伤害。</li>
    </ul>
    <p>下表给出了不同数量大地碎裂炮进行火炮轰击时各项概率的计算数据。测量参数如下：</p>
    <ul>
        <li><b>大地碎裂炮数量：</b>场上的大地碎裂炮数量。</li>
        <li><b>重叠概率：</b>至少有两枚炮弹的作用区域相互重叠的概率。</li>
        <li><b>预期重叠数：</b>一轮炮击中预计会发生重叠的炮弹数量。</li>
        <li><b>平均轰击覆盖率：</b>轰击所覆盖的总区域（红色与黄色区域）百分比。</li>
    </ul>
    <table class="centered">
        <thead>
            <tr>
                <th>大地碎裂炮数量</th>
                <th>重叠概率</th>
                <th>预期重叠数</th>
                <th>平均轰击覆盖率</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>2</td><td>43%</td><td>0.43</td><td>15%</td></tr>
            <tr><td>3</td><td>66%</td><td>0.85</td><td>22%</td></tr>
            <tr><td>4</td><td>79%</td><td>1.28</td><td>27%</td></tr>
            <tr><td>5</td><td>87%</td><td>1.71</td><td>32%</td></tr>
            <tr><td>6</td><td>91%</td><td>2.13</td><td>36%</td></tr>
            <tr><td>7</td><td>94%</td><td>2.56</td><td>40%</td></tr>
            <tr><td>8</td><td>96%</td><td>2.98</td><td>44%</td></tr>
            <tr><td>9</td><td>98%</td><td>3.40</td><td>47%</td></tr>
            <tr><td>10</td><td>98%</td><td>3.84</td><td>49%</td></tr>
            <tr><td>11</td><td>99%</td><td>4.27</td><td>52%</td></tr>
            <tr><td>12</td><td>99%</td><td>4.69</td><td>54%</td></tr>
            <tr><td>13</td><td>99%</td><td>5.12</td><td>56%</td></tr>
            <tr><td>14</td><td>100%</td><td>5.54</td><td>58%</td></tr>
            <tr><td>15</td><td>100%</td><td>5.96</td><td>60%</td></tr>
            <tr><td>16</td><td>100%</td><td>6.39</td><td>61%</td></tr>
            <tr><td>17</td><td>100%</td><td>6.83</td><td>63%</td></tr>
            <tr><td>18</td><td>100%</td><td>7.25</td><td>64%</td></tr>
            <tr><td>19</td><td>100%</td><td>7.67</td><td>65%</td></tr>
            <tr><td>20</td><td>100%</td><td>8.09</td><td>66%</td></tr>
        </tbody>
    </table>
    <p>下表显示每轮炮击命中不同大小目标的概率与预期命中次数。以下列出部分任务目标的半径作为参考：</p>
    <ul>
        <li>采集装置（<a href="/missions/mistopportunities">机会渺茫</a>）：3.50</li>
        <li>守门者构造体（<a href="/missions/cradleofdeath">死亡摇篮</a>）：1.75</li>
        <li>莫比斯混合体实验体（<a href="/missions/partparcel">聚铁成兵</a>）：0.75</li>
        <li>虚空裂隙（<a href="/resources/mutators">突变因子</a>）：1.00</li>
        <li>虚空碎片（<a href="/missions/riftstokorhal">克哈裂痕</a>）：4.50</li>
        <li>虚空裂片（<a href="/missions/scytheofamon">埃蒙之镰</a>）：4.50</li>
        <li>虚空撕裂者（<a href="/missions/templeofthepast">往日神庙</a>和<a href="/missions/voidthrashing">虚空撕裂</a>）：2.50</li>
        <li>萨尔纳加构造体（<a href="/missions/lockload">天锁</a>）：0.75</li>
    </ul>
    <table class="centered">
        <thead>
            <tr>
                <th>大地碎裂炮数量</th>
                <th colspan="2">点目标</th>
                <th colspan="2">半径1</th>
                <th colspan="2">半径2</th>
                <th colspan="2">半径2.5</th>
            </tr>
        </thead>
        <tbody>
            <tr><td></td><td>命中概率</td><td>预期命中次数</td><td>命中概率</td><td>预期命中次数</td><td>命中概率</td><td>预期命中次数</td><td>命中概率</td><td>预期命中次数</td></tr>
            <tr><td>2</td><td>29%</td><td>0.32</td><td>48%</td><td>0.57</td><td>69%</td><td>0.89</td><td>78%</td><td>1.07</td></tr> <tr><td>3</td><td>41%</td><td>0.48</td><td>64%</td><td>0.86</td><td>83%</td><td>1.34</td><td>90%</td><td>1.62</td></tr>
            <tr><td>4</td><td>50%</td><td>0.64</td><td>74%</td><td>1.14</td><td>91%</td><td>1.78</td><td>96%</td><td>2.15</td></tr>
            <tr><td>5</td><td>58%</td><td>0.80</td><td>81%</td><td>1.42</td><td>95%</td><td>2.22</td><td>98%</td><td>2.69</td></tr>
            <tr><td>6</td><td>65%</td><td>0.96</td><td>87%</td><td>1.71</td><td>97%</td><td>2.67</td><td>99%</td><td>3.23</td></tr>
            <tr><td>7</td><td>70%</td><td>1.12</td><td>90%</td><td>1.99</td><td>98%</td><td>3.11</td><td>100%</td><td>3.76</td></tr>
            <tr><td>8</td><td>75%</td><td>1.28</td><td>93%</td><td>2.28</td><td>99%</td><td>3.56</td><td>100%</td><td>4.31</td></tr>
            <tr><td>9</td><td>79%</td><td>1.44</td><td>95%</td><td>2.56</td><td>99%</td><td>4.00</td><td>100%</td><td>4.84</td></tr>
            <tr><td>10</td><td>83%</td><td>1.60</td><td>96%</td><td>2.85</td><td>100%</td><td>4.44</td><td>100%</td><td>5.37</td></tr>
            <tr><td>11</td><td>85%</td><td>1.76</td><td>97%</td><td>3.13</td><td>100%</td><td>4.89</td><td>100%</td><td>5.92</td></tr>
            <tr><td>12</td><td>88%</td><td>1.92</td><td>98%</td><td>3.42</td><td>100%</td><td>5.34</td><td>100%</td><td>6.46</td></tr>
            <tr><td>13</td><td>90%</td><td>2.08</td><td>99%</td><td>3.70</td><td>100%</td><td>5.79</td><td>100%</td><td>7.00</td></tr>
            <tr><td>14</td><td>91%</td><td>2.25</td><td>99%</td><td>3.99</td><td>100%</td><td>6.23</td><td>100%</td><td>7.54</td></tr>
            <tr><td>15</td><td>93%</td><td>2.40</td><td>99%</td><td>4.26</td><td>100%</td><td>6.67</td><td>100%</td><td>8.07</td></tr>
            <tr><td>16</td><td>94%</td><td>2.56</td><td>100%</td><td>4.55</td><td>100%</td><td>7.11</td><td>100%</td><td>8.60</td></tr>
            <tr><td>17</td><td>95%</td><td>2.72</td><td>100%</td><td>4.83</td><td>100%</td><td>7.55</td><td>100%</td><td>9.15</td></tr>
            <tr><td>18</td><td>96%</td><td>2.88</td><td>100%</td><td>5.11</td><td>100%</td><td>7.99</td><td>100%</td><td>9.67</td></tr>
            <tr><td>19</td><td>96%</td><td>3.05</td><td>100%</td><td>5.42</td><td>100%</td><td>8.45</td><td>100%</td><td>10.22</td></tr>
            <tr><td>20</td><td>97%</td><td>3.20</td><td>100%</td><td>5.69</td><td>100%</td><td>8.89</td><td>100%</td><td>10.76</td></tr>
        </tbody>
    </table>
    <p>请注意，若单位半径为4或更大，则每轮炮击都必定命中该单位。</p>
    <p>若想进一步了解这些数据的生成方式，可以观看下方视频：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/yL6FQIlkE30" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h3>天命皇权生成</h3>
    <p>天命皇权相当于部分星灵指挥官所拥有的能量。提高“帝国支持度”即可生成天命皇权。帝国支持度总值除以240，便是每秒生成的天命皇权。帝国支持度有三种来源：</p>
    <ul>
        <li>基础值：40</li>
        <li>皇家卫队单位：基础值为补给消耗的100%。每提升一级军阶增加50%，在3级军阶时最高达到补给消耗的250%。</li>
        <li>接受教导的征召单位：帝国见证者处于爱国者模式时会教导下方单位，每点补给提供1点；研究“放大电波”后，每点补给提供2点。</li>
    </ul>
    <p>拥有冲锋队天命皇权精通与“放大电波”时，两座完全满采基地可提供约154点帝国支持度（每秒0.6点天命皇权）。没有该升级时，帝国支持度为64（每秒0.27点天命皇权）。</p>
    <h3>玩法提示</h3>
    <ul>
        <li>尽快生产帝国见证者，其提供的天命皇权生成能力能让你更频繁地使用面板技能。</li>
        <li>在需要不断深入地图推进的任务中，回收大地碎裂炮，再到更靠近前线的位置重建。</li>
        <li>进入建筑（例如地堡和大地碎裂炮）的单位不会通过帝国见证者生成天命皇权。</li>
        <li>让冲锋队进入大地碎裂炮时，确保它们没有装备武器。装备的武器不会为大地碎裂炮带来任何收益。</li>
        <li>让冲锋队进入地堡前，务必升级其武器，以利用提高后的攻击伤害。</li>
        <li>冲锋队可以建造作战建筑。让它们在前线建造地堡或大地碎裂炮，并派多名冲锋队加速建造。</li>
        <li>中后期争取拥有3至4座征兵中心，以便在交战损失后迅速补充冲锋队。</li>
        <li>装备武器的冲锋队被消灭后，掉落的武器会在地面保留300秒，随后消失并返还120点晶体矿。</li>
    </ul>
    <h2 id="videos">视频攻略</h2>
    <p>下方视频演示了前文介绍的各种快速开矿方式。请注意，从4.11.3补丁起，蒙斯克的“起始天命皇权”精通已经调整，游戏开始时无法直接空投两座地堡。采用双地堡开矿时，需要等待约2分钟才能部署两座地堡。采用单地堡开矿时，开局无法立即让矿区满采。</p>
    <iframe width="950" height="535" src="https://www.youtube.com/embed/videoseries?list=PL-U97hco2Fu67esg6PKcDnh9ejc_3UZ7p" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
