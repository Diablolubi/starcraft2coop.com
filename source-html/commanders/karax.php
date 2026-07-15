<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸II》合作任务 - 指挥官攻略 - 凯拉克斯</title>
  <meta name="description" content="《星际争霸II》合作任务凯拉克斯指挥官攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 凯拉克斯 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/karax">
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
            background: url(/images/commanderdata/bgs/karax.png);
            background-repeat: no-repeat;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>凯拉克斯</h1>
    <p id="commanderMotto">相位技师</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#comSum">指挥官概要</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">晋升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐部队组成</a></p>
        <p><a href="#units">战斗单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法指南</a></p>
        <p><a href="#fastexpand">快速开矿</a></p>
        <p><a href="#videos">视频攻略</a></p>
    </div>
    <h2 id="comSum">指挥官概要</h2>
    <p>凯拉克斯以强大的防御建筑为核心，辅以机械部队和亚顿之矛掌控战场。</p>
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
                <td><img src="/images/commanderdata/progression/karax/karax_01.png" alt = "机械大师"></td>
                <td>机械大师</td>
                <td>
                    凯拉克斯的战斗单位生命值提高50%，但费用增加30%。轨道轰炸不再有冷却时间和使用次数限制，每次射击消耗5点能量。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_02.png" alt = "亚顿之矛：时空力场"></td>
                <td>亚顿之矛：时空力场</td>
                <td>
                    所有友方建筑的生产速度提高15%。<br><br>被动技能。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_03.png" alt = "新单位：凯达林巨石"></td>
                <td>新单位：凯达林巨石</td>
                <td>
                   威力极强的防御建筑。射程远、伤害高，但造价昂贵且攻击缓慢。<br><br>可攻击地面和空中单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/karax/karax_04.png" alt = "暮光议会升级包"></td>
                <td>暮光议会升级包</td>
                <td>
                    在暮光议会中解锁以下升级：
                    <ul>
                        <li>哨兵阵亡时可自动复活。</li>
                        <li>激励者可暂时控制敌方机械单位。</li>
                        <li>激励者和护盾充能器的能量恢复速度提高200%。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/karax/karax_05.png" alt = "亚顿之矛：时空过载"></td>
                <td>亚顿之矛：时空过载</td>
                <td>
                    时空波现在会使所有友方建筑的生产速度提高至500%，持续20秒。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/karax/karax_06.png" alt = "锻炉升级包"></td>
                <td>锻炉升级包</td>
                <td>
                    在锻炉中解锁以下升级：
                    <ul>
                        <li>光子炮、凯达林巨石和护盾充能器的射程提高2。</li>
                        <li>光子炮和凯达林巨石的攻击速度提高25%。</li>
                        <li>护盾充能器可为建筑提供吸收伤害的屏障。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_07.png" alt = "亚顿之矛：重构光束"></td>
                <td>亚顿之矛：重构光束</td>
                <td>
                    自动持续修复友方机械单位和建筑。最多可同时修复3个目标。<br><br>被动技能。<br><br>单位每秒恢复5点生命值，建筑每秒恢复10点生命值。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_08.png" alt = "太阳能锻炉升级包1"></td>
                <td>太阳能锻炉升级包1</td>
                <td>
                    在太阳能锻炉中解锁以下升级：
                    <ul>
                        <li>重构光束可影响更多目标。</li>
                        <li>太阳能效率等级3。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_09.png" alt = "机械研究所升级包"></td>
                <td>机械研究所升级包</td>
                <td>
                    在机械研究所中解锁以下升级：
                    <ul>
                        <li>解锁不朽者的暗影炮技能，对一个敌方地面或空中单位造成320点伤害。</li>
                        <li>巨像的攻击会点燃地面，持续造成额外伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_10.png" alt = "亚顿之矛：净化光束"></td>
                <td>亚顿之矛：净化光束</td>
                <td>
                    发射一道光束，在15秒内造成750点伤害（对重甲造成1500点伤害）。若未手动控制，光束会自动搜寻目标。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/karax/karax_11.png" alt = "卡莱巧思"></td>
                <td>卡莱巧思</td>
                <td>
                    水晶塔、光子炮、凯达林巨石和护盾充能器可立即折跃完成。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_12.png" alt = "太阳能锻炉升级包2"></td>
                <td>太阳能锻炉升级包2</td>
                <td>
                   在太阳能锻炉中解锁以下升级：
                    <ul>
                        <li>轨道轰炸可使目标区域内的敌人昏迷。</li>
                        <li>太阳能长枪可点燃地面，持续造成额外伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/karax/karax_13.png" alt = "亚顿之矛：净化协议"></td>
                <td>亚顿之矛：净化协议</td>
                <td>
                    净化光束的移动速度提高200%，持续时间延长5秒。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_14.png" alt = "舰队航标升级包"></td>
                <td>舰队航标升级包</td>
                <td>
                    在舰队航标中解锁以下升级：
                    <ul>
                        <li>幻影受到伤害后可暂时进入无敌状态。</li>
                        <li>航母可自动修复附近的机械单位。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/karax/karax_15.png" alt = "统合屏障"></td>
                <td>统合屏障</td>
                <td>
                    所有友方单位获得一道屏障，可阻挡一次至少造成20点伤害的攻击或法术。单位创建时获得此屏障，且每240秒只能获得一次。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官的重要强势期。</p>
    <h2 id="achievements">成就</h2>
    <p>凯拉克斯的指挥官专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/karax/fastfriends.jpg" alt="快速之友"></td>
                <td>快速之友</td>
                <td>在合作任务中使用时空波加速盟友500个单位的训练。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/karax/scorchedearth.jpg" alt="焦土"></td>
                <td>焦土</td>
                <td>在困难难度的一场任务中，使用凯拉克斯的太阳能长枪消灭200个敌方单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/karax/targetpurified.jpg" alt="目标已净化"></td>
                <td>目标已净化</td>
                <td>在困难难度下，用凯拉克斯的一次净化光束消灭50个敌方单位。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/karax/towerdefense.jpg" alt="塔防"></td>
                <td>塔防</td>
                <td>在合作任务中使用凯拉克斯的防御建筑消灭1,000个敌方单位。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">面板技能</h2>
    <p>凯拉克斯在15级且未分配精通点数时的面板技能如下：</p>
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
                <td><img src="/images/commanderdata/abilities/karax/orbitalstrike.png" alt = "轨道轰炸"></td>
                <td>轨道轰炸</td>
                <td>从轨道向战场发射激光，每发造成50点范围伤害（对重甲单位造成100点）。</td>
                <td>
                    <ul>
                        <li>可用于清理分矿点并尽早开矿。</li>
                        <li>非常适合对付聚集的敌人。</li>
                        <li>适合消灭进攻波中的关键单位。</li>
                        <li>缺少对空火力时可用来处理空中单位。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：0秒</li>
                        <li>所需能量：5</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/karax/solarlance.png" alt = "太阳能长枪"></td>
                <td>太阳能长枪</td>
                <td>以3道激光扫射目标区域，每道造成200点伤害。</td>
                <td>
                    <ul>
                        <li>适合处理棘手的进攻波。</li>
                        <li>非常适合推进敌方基地并摧毁关键目标。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：120秒</li>
                        <li>所需能量：50</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/karax/chronowave.png" alt = "时空波"></td>
                <td>时空波</td>
                <td>使所有友方建筑的生产速度提高至500%，持续20秒。</td>
                <td>
                    <ul>
                        <li>冷却结束后应尽快使用。</li>
                        <li>第一次时空波应帮助主矿和分矿尽快补满采集单位。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：300秒</li>
                        <li>冷却时间：240秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/karax/purifierbeam.png" alt = "净化光束"></td>
                <td>净化光束</td>
                <td>发射一道光束，在20秒内造成1000点伤害（对重甲造成2000点）。若未手动控制，光束会自动搜寻目标。</td>
                <td>
                    <ul>
                        <li>适合用于防守严密的基地。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：450秒</li>
                        <li>冷却时间：360秒</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">晋升前升级</h2>
    <p>难度：困难</p>
    <p>凯拉克斯升级较为困难：他尚不能像常规玩法那样瞬间折跃光子炮等防御建筑，单位造价又极其昂贵。部队应以哨兵、不朽者和激励者为主。稳步推进任务，减少不必要的损失，并尽量依靠亚顿之矛技能削弱敌方基地和进攻波。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是凯拉克斯三个技能组的推荐点数分配。这是一套未选择威望时适用于所有地图的通用配置。强烈建议根据自己的玩法和所面对的具体挑战（例如<a href="/resources/weeklymutations">每周突变</a>）调整精通。</p>
    <p>技能组1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>战斗单位生命值和护盾</td>
                <td>每点1%<br>最高30%</td>
                <td>?</td>
                <td rowspan="2">经常采用炮台推进的玩家更适合建筑精通，大量使用凯拉克斯部队的玩家则更适合单位生命精通。此外，单位生命加成为乘算，会与凯拉克斯天赋初始的50%生命加成直接叠乘。点满后单位可获得95%的额外生命值。</td>
            </tr>
            <tr>
                <td>建筑生命值和护盾</td>
                <td>每点2%<br>最高60%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">选择取决于你的玩法。若偏好大量防御建筑，建筑生命精通更合适；但合作任务更鼓励主动进攻，因此通用玩法更推荐战斗单位生命精通。</p>
    <p>技能组2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>修复光束治疗速度</td>
                <td>每点3%<br>最高90%</td>
                <td>?</td>
                <td rowspan="2">这主要取决于玩法。时空波能量恢复精通适合经常依靠亚顿之矛先削弱进攻波和敌方阵地再投入部队的玩家；修复光束治疗精通则适合长时间交战，可提供持续治疗并减少单位损失。</td>
            </tr>
            <tr>
                <td>时空波能量恢复</td>
                <td>每点3<br>最高90</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">两项都很有竞争力，应根据玩法和所选威望决定。</p>
    <p>技能组3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>时空提速效率</td>
                <td>每点1%<br>最高30%</td>
                <td>0</td>
                <td rowspan="2">时空提速精通能让凯拉克斯更快完成研究并训练单位，但投入过多点数会影响其快速开矿能力。</td>
            </tr>
            <tr>
                <td>亚顿之矛初始及最大能量</td>
                <td>每点+3<br>最高+90</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">初始能量是最佳选择，因为它让凯拉克斯几乎能在所有地图上顺利快速开矿。</p>
    <h2 id="prestiges">威望</h2>
    <p>凯拉克斯的威望如下。“生效等级”是指该威望完全发挥效果时所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>战争建筑师</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>修复光束的效果提高100%，可作用于两倍数量的建筑。</li>
                        <li>统合屏障可作用于防御建筑，冷却时间缩短75%。</li>
                        <li>时空提速、时空波和时空力场可作用于防御建筑，提高其攻击速度。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>修复光束只能以建筑为目标。统合屏障不再影响单位。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>威望和精通先作用于基础治疗速度（5/10），之后威望与精通按每点精通0.05/0.1进行叠乘</li>
                        <li>时空提速和时空波也可用于盟友的防御建筑</li>
                        <li>时空力场不会影响盟友的防御建筑</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>15</td>
            </tr>
            <tr>
                <th>建议</th><td>修复光束在7级才解锁，统合屏障则在15级解锁，因此该威望在7级前没有劣势，升级时可一直使用到该等级。此威望以各种时空技能和治疗强化建筑，鼓励凯拉克斯采用防御建筑玩法。但合作任务并不奖励被动防守，所以即使它非常契合这种玩法，也无法为玩家带来额外收益。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>圣堂表象</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>战斗单位费用降低40%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用光子炮和凯达林巨石。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>此威望非常适合凯拉克斯训练部队，而且并非只利好可以快速成型的航母。他能以失去防御建筑为代价迅速集结一支规模可观的部队。这也意味着，在必须依赖防御建筑的任务中（例如<a href="/missions/oblivionexpress">湮灭快车</a>对人类，需要阻止核弹），他必须另寻办法侦测基地中的隐形袭击者。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>天界太阳能</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>轨道轰炸和太阳能长枪的能量消耗降低40%。</li>
                        <li>太阳能长枪和净化光束的冷却时间缩短50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用时空提速、时空波和时空力场。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>10</td>
            </tr>
            <tr>
                <th>建议</th><td>此威望以牺牲凯拉克斯的发展能力为代价强化亚顿之矛技能。亚顿之矛是凯拉克斯优秀玩法的核心，懂得充分发挥它潜力的玩家能从该威望中获得很高收益。由于技能消耗大幅降低，玩家无需依赖时空技能在前期组建一支规模可观的部队，少量单位就已足够，因为亚顿之矛会成为任务中的主要伤害来源。此威望强调亚顿之矛玩法，玩家需要熟悉这种风格才能充分发挥其潜力。</td>
            </tr>
        </tbody>
    </table>
    <p>P2（圣堂表象）通过降低原本昂贵的单位费用，让凯拉克斯成为实力均衡的强力指挥官。他因此能在前期形成战力，也能采用许多此前因单位费用过高而难以实现的玩法。通用凯拉克斯玩法推荐选择此威望。</p>
    <h2 id="army">推荐部队组成</h2>
    <p>以下是凯拉克斯的推荐部队组成，假定未选择威望并采用推荐精通分配。这只是部队框架的基础建议；请先了解<a href="#units">单位</a>章节中的各个单位，再按实际情况补充科技单位。</p>
    <img class="army" src="/images/commanderdata/units/karax/sentinel.jpg" alt="哨兵"><img class="army" src="/images/commanderdata/units/karax/energizer.jpg" alt="激励者"><img class="army" src="/images/commanderdata/units/karax/immortal.jpg" alt="不朽者">
    <p>不朽者是凯拉克斯的主要伤害来源。用哨兵在前方承伤，让不朽者在后方输出。该配兵没有对空能力，需要利用亚顿之矛和暗影炮消灭空中单位。对抗机械单位组成时，也应使用激励者回收其中一部分单位。</p>
    <div class="techContainer"><img class="army" src="/images/commanderdata/units/karax/colossus.jpg" alt="巨像"><div class="techAdd">+</div></div>
    <p>加入巨像，以提供亚顿之矛无法持续承担的额外范围伤害。</p>
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
    <p>有关凯拉克斯单位属性、单位对比和升级计算的更多信息，请参阅<a href="/units/#karax">数据表</a>页面。</p>
    <p>凯拉克斯的战斗单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#karax/sentinel">
                <img src="/images/commanderdata/units/karax/sentinel.jpg" alt="哨兵">
                <p>哨兵</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>不适合作为伤害输出单位。</li>
                <li>适合在前方承伤，让后方更昂贵的单位输出。</li>
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
                        <td><img src="/images/commanderdata/unitskills/karax/charge.png" alt="冲锋"></td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/charge.png" alt="冲锋"></td>
                        <td>冲锋</td>
                        <td>使哨兵能够拦截附近的敌人，并使哨兵的移动速度提高0.25。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/reconstruction.png" alt="重构"></td>
                        <td>重构</td>
                        <td>哨兵阵亡后复活。此效果每120秒只能触发一次。</td>
                        <td>100/100</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#karax/energizer">
                <img src="/images/commanderdata/units/karax/energizer.jpg" alt="激励者">
                <p>激励者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>极其强大且用途广泛。</li>
                <li>可通过折跃为部队提供增援。</li>
                <li>利用时空光束提高单位和建筑的攻击速度与移动速度。</li>
                <li>“回收”非常适合对付人类空军等机械<a href="/guides/enemycomps">单位组成</a>。</li>
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
                        <td><img src="/images/commanderdata/unitskills/karax/chronobeam.png" alt="时空光束"></td>
                        <td>时空光束</td>
                        <td>友方目标的攻击速度提高25%、移动速度提高50%，持续10秒。</td>
                        <td>0秒</td>
                        <td>3</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/karax/reclamation.png" alt="回收"></td>
                        <td>回收</td>
                        <td>暂时控制目标敌方机械单位。回收的单位会在120秒后自毁。</td>
                        <td>120秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/rapidrecharging.png" alt="快速充能"></td>
                        <td>快速充能</td>
                        <td>激励者和护盾充能器的能量恢复速度提高200%。</td>
                        <td>100/100</td>
                        <td>90秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/reclamation.png" alt="回收"></td>
                        <td>回收</td>
                        <td>激励者可暂时控制敌方机械单位。回收的单位会在120秒后自毁。</td>
                        <td>150/150</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#karax/immortal">
                <img src="/images/commanderdata/units/karax/immortal.jpg" alt="不朽者">
                <p>不朽者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强力单位，可对建筑和重甲目标造成高额伤害。</li>
                <li>暗影炮能帮助不朽者快速击杀单位并对付空中目标。</li>
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
                        <td><img src="/images/commanderdata/unitskills/karax/barrier.png" alt="屏障"></td>
                        <td>屏障</td>
                        <td>最多吸收100点伤害，持续10秒。</td>
                        <td>60秒</td>
                        <td>0</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/karax/shadowcannon.png" alt="暗影炮"></td>
                        <td>暗影炮</td>
                        <td>对目标单位或建筑造成320点伤害。<br><br>可对地面和空中单位使用。</td>
                        <td>45秒</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/shadowcannon.png" alt="暗影炮"></td>
                        <td>暗影炮</td>
                        <td>使不朽者能够使用暗影炮，对目标单位或建筑造成320点伤害。<br><br>可对地面和空中单位使用。</td>
                        <td>100/100</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#karax/colossus">
                <img src="/images/commanderdata/units/karax/colossus.jpg" alt="巨像">
                <p>巨像</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>用途较为专门，通常适合感染者地图。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
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
                        <td><img src="/images/commanderdata/unitupgrades/karax/extendedthermallance.png" alt="加长型热能长枪"></td>
                        <td>加长型热能长枪</td>
                        <td>巨像的射程提高3。</td>
                        <td>100/100</td>
                        <td>90秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/firebeam.png" alt="烈焰光束"></td>
                        <td>烈焰光束</td>
                        <td>提高巨像造成的伤害，并使其攻击点燃地面，在5秒内对区域内的敌方地面单位额外造成150点伤害。</td>
                        <td>100/100</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#karax/mirage">
                <img src="/images/commanderdata/units/karax/mirage.jpg" alt="幻影">
                <p>幻影</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>对重甲目标较弱，通常不值得生产。</li>
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
                        <td><img src="/images/commanderdata/unitskills/karax/gravitonbeam.png" alt="引力光束"></td>
                        <td>引力光束</td>
                        <td>使目标单位悬浮在空中并禁用其技能，最多持续10秒。<br><br>重型单位免疫。</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/anionpulsecrystals.png" alt="阴离子脉冲水晶"></td>
                        <td>阴离子脉冲水晶</td>
                        <td>幻影的射程提高2。</td>
                        <td>100/100</td>
                        <td>60秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/phasingarmor.png" alt="相位装甲"></td>
                        <td>相位装甲</td>
                        <td>幻影受到攻击后的2秒内免受伤害。此效果每5秒最多触发一次。</td>
                        <td>100/100</td>
                        <td>90秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#karax/carrier">
                <img src="/images/commanderdata/units/karax/carrier.jpg" alt="航母">
                <p>航母</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>研究引力折跃弹射器后拥有很高的伤害输出。</li>
                <li>使用圣堂表象威望时推荐生产。</li>
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
                        <td><img src="/images/commanderdata/unitskills/karax/buildinterceptor.png" alt="建造拦截机"></td>
                        <td>建造拦截机</td>
                        <td>建造会自动攻击航母目标的拦截机。没有拦截机时航母无法攻击。<br><br>可攻击地面和空中单位，最多拥有8架拦截机。</td>
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
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/repairdrones.png" alt="修理无人机"></td>
                        <td>修理无人机</td>
                        <td>航母获得两架修理无人机，可自动修复附近的友方机械单位。</td>
                        <td>100/100</td>
                        <td>120秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/karax/gravitonwarpcatapult.png" alt="引力折跃弹射器"></td>
                        <td>引力折跃弹射器</td>
                        <td>使航母更快放出拦截机，并使拦截机的攻击速度提高25%。</td>
                        <td>150/150</td>
                        <td>120秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是凯拉克斯的标准经济型建造顺序。有关如何阅读和编排建造顺序的更多信息，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        20次轨道轰炸 -> 岩石<br>
        15星灵枢纽<br>
        15水晶塔<br>
        17吸纳舱<br>
        18吸纳舱<br>
        20锻炉<br>
        26光子炮 -> 瓦斯岩石<br>
        32光子炮 -> 瓦斯岩石
    </p>
    <h2 id="guide">玩法指南</h2>
    <h3>玩法误区</h3>
    <p>凯拉克斯玩家常见的误区之一是急于转型航母海。航母在大多数任务中都非常强大，但如果一味速出航母而不协助盟友，就可能输掉游戏，尤其是在前期目标较难处理时。</p>
    <p>更有效的玩法是建造防御建筑来守卫目标或向目标推进，同时逐步攀升科技转型航母。这样可以减轻盟友的压力，并确保取得胜利。</p>
    <h3>塔推</h3>
    <p>凯拉克斯可以使用以下几种防御建筑：</p>
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
                <td><img src="/images/commanderdata/guides/karax/photoncannon.jpg" alt="光子炮"></td>
                <td>光子炮</td>
                <td>侦测单位<br>生命值：150<br>护盾：150<br>伤害：20<br>射程：7<br>攻击速度：1.25</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/guides/karax/khaydarinmonolith.jpg" alt="凯达林巨石"></td>
                <td>凯达林巨石</td>
                <td>生命值：100<br>护盾：200<br>伤害：100<br>射程：13<br>攻击速度：3</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/guides/karax/shieldbattery.jpg" alt="护盾充能器"></td>
                <td>护盾充能器</td>
                <td>生命值：200<br>护盾：200<br>能量：200<br>射程：4<br>每1点能量恢复3点护盾</td>
            </tr>
        </tbody>
    </table>
    <p>凯拉克斯的一项优势是能在指定位置瞬间折跃水晶塔和防御建筑。这让他可以采用一种非常规玩法：派探机向敌方基地推进，同时利用亚顿之矛提供支援。</p>
    <p>这种玩法确实需要练习，但在高水平操作下既有效又有趣，尽管它可能不如用部队推进。当你在某一区域建立防御阵地时，首先应考虑这些防御的用途，因为这会影响建筑的数量和布局。</p>
    <p>常规推进敌方基地时，通常只需建造一座水晶塔和几座光子炮，清除守卫基地的敌人即可。毕竟基地清理完毕后，这些防御建筑便不会再发挥作用。</p>
    <p>不过，如果你打算用防御建筑抵挡进攻波，就需要进一步了解进攻波的时间和组成。以下是凯拉克斯防御阵地的一种布置示例：</p>
    <img src="/images/commanderdata/guides/karax/staticdefense.jpg" alt="防御阵地">
    <p>这里有几点需要注意：</p>
    <ul>
        <li>注意护盾充能器放在光子炮的<i>前方</i>。敌方单位开始攻击后，必须绕过护盾充能器才能摧毁光子炮。</li>
        <li>建筑类型完全取决于需要防御的敌人：
            <ul>
                <li>用凯达林巨石对付高生命值目标。</li>
                <li>用光子炮对付其他目标。</li>
            </ul>
        你需要相应调整建筑的数量和类型，确保防线能够坚守。
        </li>
        <li>中央的激励者已切换至相位模式，这会降低其仇恨值，使其不易被敌人选为目标。</li>
        <li>前排建筑（护盾充能器和光子炮）之间的间隙尽可能小，以防敌方单位绕至侧后方，削弱防线效果。</li>
    </ul>
    <p>凯拉克斯拥有以下可强化防御建筑的升级：</p>
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
                <td><img src="/images/commanderdata/unitupgrades/karax/rapidrecharging.png" alt="快速充能"></td>
                <td>快速充能</td>
                <td>激励者和护盾充能器的能量恢复速度提高200%。</td>
                <td>100/100</td>
                <td>90秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/karax/enhancedtargeting.png" alt="强化瞄准"></td>
                <td>强化瞄准</td>
                <td>光子炮、凯达林巨石和护盾充能器的射程提高2。</td>
                <td>100/100</td>
                <td>120秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/karax/optimizedordnance.png" alt="优化弹药"></td>
                <td>优化弹药</td>
                <td>光子炮和凯达林巨石的攻击速度提高25%。</td>
                <td>100/100</td>
                <td>120秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/karax/fortificationbarrier.png" alt="强化屏障"></td>
                <td>强化屏障</td>
                <td>使护盾充能器能够为目标建筑提供一道屏障，在10秒内最多吸收100点伤害。</td>
                <td>100/100</td>
                <td>60秒</td>
            </tr>
        </tbody>
    </table>
    <p>除上述升级外，他的防御建筑也会受到星灵护盾升级的加成，但不会受到护甲或攻击升级的影响。</p>
    <p>防御建筑应配合亚顿之矛技能使用。例如，可先用亚顿之矛削弱敌军，以减少防御建筑的损失。凯拉克斯拥有多项可以强化亚顿之矛的升级。</p>
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
                <td><img src="/images/commanderdata/unitupgrades/karax/advancedrepairsystems.png" alt="高级修复系统"></td>
                <td>高级修复系统</td>
                <td>使亚顿之矛的重构光束可以作用于更多目标，最多同时作用于5个目标。</td>
                <td>150/150</td>
                <td>90秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/karax/phasedetonation.png" alt="相位爆破"></td>
                <td>相位爆破</td>
                <td>亚顿之矛的轨道轰炸会使目标区域内的敌方单位昏迷1.5秒。</td>
                <td>150/150</td>
                <td>120秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/karax/solarflare.png" alt="太阳耀斑"></td>
                <td>太阳耀斑</td>
                <td>亚顿之矛的太阳能长枪会点燃沿途地面，在20秒内额外造成600点伤害。</td>
                <td>150/150</td>
                <td>120秒</td>
            </tr>
        </tbody>
    </table>
    <h3>太阳能效率等级</h3>
    <p>下表汇总了凯拉克斯可用的各级太阳能效率。请注意，基础能量恢复速度约为16点能量/分钟。</p>
    <div class="tableContainer">
        <table>
            <thead>
                <tr>
                    <th>等级</th>
                    <th>需求</th>
                    <th>额外能量</th>
                    <th>总能量恢复</th>
                    <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_protoss.png" alt="高能瓦斯"></th>
                    <th>研究时间</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>1点能量/6秒</td>
                    <td>26点能量/分钟</td>
                    <td>100/100</td>
                    <td>90秒</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>暮光议会</td>
                    <td>3点能量/6秒</td>
                    <td>46点能量/分钟</td>
                    <td>150/150</td>
                    <td>120秒</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>舰队航标/机械研究所</td>
                    <td>6点能量/6秒</td>
                    <td>76点能量/分钟</td>
                    <td>200/200</td>
                    <td>180秒</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h3 id="fastexpand">快速开矿</h3>
    <p>在某些只有少量敌人和建筑阻挡分矿的地图上，凯拉克斯可以快速开矿。这些技巧难度较高，因为大多数时候需要向战争迷雾中发射太阳能长枪，因此需要大量练习。</p>
    <p>以下图片展示了各地图的快速开矿方法。这些操作需要大量练习才能掌握，但可以让你在经济上取得领先。</p>
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
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_coa_protoss_1.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_coa_terran_1.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_coa_zerg_1.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_coa_protoss_2.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_coa_terran_2.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_coa_zerg_2.jpg');
                        preload(imgList);
                        $("input[name='coa']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#coa1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/karax/fastexpand_coa_'+ race + '_1.jpg';
                            var newImg = $(img).hide();
                            $('#coa1div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'coa1');
                            var oldImg = $('#coa2');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/karax/fastexpand_coa_'+ race + '_2.jpg';
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
                <td><div class="fastExpand" id="coa1div"><img id="coa1" src="/images/commanderdata/guides/karax/fastexpand_coa_protoss_1.jpg" alt="飞升之链玩家1快速开矿"></div></td>
                <td><div class="fastExpand" id="coa2div"><img id="coa2" src="/images/commanderdata/guides/karax/fastexpand_coa_protoss_2.jpg" alt="飞升之链玩家2快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                <td class="centered" colspan="2">让两辆卡车径直绕过前方构造体，驶向两座信标构造体。使用轨道轰炸摧毁信标构造体并触发第一个任务目标的爆炸，这会同时清理分矿和前方构造体。</td>
            </tr>
            <tr>
                <td><a href="/missions/deadofnight">亡者之夜</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/lockload">天锁</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/malwarfare">恶意代码</a><br /><br />
                    <form action='#'>
                        <label><input type='radio' name='mw' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='mw' value='terran'>人类</label><br>
                        <label><input type='radio' name='mw' value='zerg'>异虫</label><br></form>
                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_mw_protoss_1.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_mw_terran_1.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_mw_zerg_1.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_mw_protoss_2.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_mw_terran_2.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_mw_zerg_2.jpg');
                        preload(imgList);
                        $("input[name='mw']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#mw1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/karax/fastexpand_mw_'+ race + '_1.jpg';
                            var newImg = $(img).hide();
                            $('#mw1div').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'mw1');
                            var oldImg = $('#mw2');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/karax/fastexpand_mw_'+ race + '_2.jpg';
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
                <td><div class="fastExpand" id="mw1div"><img id="mw1" src="/images/commanderdata/guides/karax/fastexpand_mw_protoss_1.jpg" alt="恶意代码玩家1快速开矿"></div></td>
                <td><div class="fastExpand" id="mw2div"><img id="mw2" src="/images/commanderdata/guides/karax/fastexpand_mw_protoss_2.jpg" alt="恶意代码玩家2快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                <td class="centered" colspan="2">没有简单的快速开矿方法。如果想尽早开出分矿，最好用光子炮推进并清理分矿。</td>
            </tr>
            <tr>
                <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/partparcel">聚铁成兵</a><br /><br />
                    <form action='#'>
                        <label><input type='radio' name='pp' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='pp' value='terran'>人类</label><br>
                        <label><input type='radio' name='pp' value='zerg'>异虫</label><br></form>
                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_pp_protoss.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_pp_terran.jpg');
                        imgList.push('/images/commanderdata/guides/karax/fastexpand_pp_zerg.jpg');
                        preload(imgList);
                        $("input[name='pp']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#pp1');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/karax/fastexpand_pp_'+ race + '.jpg';
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
                <td colspan="2"><div class="fastExpand" id="pp1div"><img id="pp1" src="/images/commanderdata/guides/karax/fastexpand_pp_protoss.jpg" alt="聚铁成兵快速开矿"></div></td>
            </tr>
            <tr>
                <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                <td class="centered" colspan="2">没有简单的快速开矿方法。如果想尽早开出分矿，最好用光子炮推进并清理分矿。开始建造光子炮前，务必先用太阳能长枪摧毁虚空裂隙。</td>
            </tr>
            <tr>
                <td><a href="/missions/templeofthepast">往日神庙</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/thevermillionproblem">熔火危机</a></td>
                <td class="centered" colspan="2">没有简单的快速开矿方法。如果想尽早开出分矿，最好用光子炮推进并清理分矿。</td>
            </tr>
            <tr>
                <td><a href="/missions/voidlaunch">虚空降临</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
            <tr>
                <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                <td class="centered" colspan="2">分矿无敌人驻守</td>
            </tr>
        </tbody>
    </table>
    <h3>玩法技巧</h3>
    <ul>
        <li>使用时空波前提前5至10秒通知盟友。这项强力技能可以帮助你们在游戏中取得领先并奠定胜局。</li>
        <li>游戏开始时，无论分矿是否有敌人驻守，都应使用初始的亚顿之矛能量清理分矿。</li>
        <li>激励者很容易吸引敌人的仇恨。长距离推进时将其切换至相位模式，以降低被攻击的概率。</li>
        <li>对太阳能锻炉使用时空提速不会提高亚顿之矛的能量恢复速度。</li>
        <li>太阳能效率等级1是必升项目。如果需要亚顿之矛提供一定支援，应研究太阳能效率等级2；只有在非常特殊的情况下才应研究等级3。</li>
        <li>选中轨道轰炸后按住Shift，再按下任意<a href="/guides/generaltips">绑定了快速施法</a>的按键，即可连续发射轨道轰炸，射击之间不会有延迟。</li>
    </ul>
    <h2 id="videos">视频指南</h2>
    <p>以下视频演示了前文介绍的各种快速开矿方法。由于需要向战争迷雾中发射太阳能长枪，这些快速开矿操作难度很高，需要大量练习。</p>
    <iframe width="950" height="535" src="https://www.youtube.com/embed/videoseries?list=PL-U97hco2Fu6-eOs3pg4Bvvn27uuvClBW" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
