<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 聚铁成兵</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：聚铁成兵">
  <meta name="keywords" content="星际争霸 II 合作任务 聚铁成兵 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/partparcel">
  <script src="/scripts/preload.js"></script>
  <style>
      #hybridExperiment{
          border-radius:50%;
      }
  </style>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>聚铁成兵</h1>
    <p id="missionPlace">莫比斯研究站</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#idRace">识别敌方种族</a></p>
        <p><a href="#baseAnalysis">敌方基地分析</a></p>
        <p><a href="#hybridAbilities">混合体技能</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>莫比斯军团的研究人员一直在混合体身上进行实验，企图创造破坏力更强的恐怖怪物。协助戴维斯将军，用莫比斯军团尚未完工的机械兵器巴利俄斯消灭混合体，终结这一切。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>消灭莫比斯混合体 (3)</li>
            <li>收集巴利俄斯零件以延缓混合体释放 (70 × 3)</li>
            <li>阻止莫比斯混合体计划</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>摧毁列车 (2)</li>
        </ul>
    <h2 id="idRace">识别敌方种族</h2>
    <p>你可以在这张地图上准确识别敌方种族。首先检查菌毯（Alt + T），判断敌人是否为异虫。如果不是，就让一名工人攻击主基地建筑附近的一个箱子。若敌方为星灵，敌方部队组合指示器会出现；若敌方为人类，则不会出现组合指示器。演示视频如下：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/fXVobSPfE5c" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h2 id="baseAnalysis">敌方基地分析</h2>
    <div id="globalRaceSelect">
        <p>将所有基地分析图片切换为以下种族：</p>
        <form action="#">
            <label><input type="radio" name="globalRace" value="protoss" checked>星灵</label><br>
            <label><input type="radio" name="globalRace" value="terran">人类</label><br>
            <label><input type="radio" name="globalRace" value="zerg">异虫</label><br>
        </form>
        <script>
            $("input[name='globalRace']").change(function(){
                var race= $(this).val();
                $('input:radio[value="' + race + '"]').each(function () {
                    if($(this).attr('name')!=="globalRace"){
                        $(this).prop('checked', true).trigger('change');
                    }
                })
                return false;
            })
        </script>
    </div>
    <?php $mission = "partparcel"; ?>
    <p>“聚铁成兵”的分矿有敌军守卫，通常最好先夺取分矿。分矿如下所示。</p>
    <?php switcher_generator("expo") ?>
    <p>之后通常推进左下区域，因为这里防守极为薄弱，而且加上分矿区域的零件，足以完成第一个主要目标。</p>
    <?php switcher_generator("swbase") ?>
    <p>此时第一个混合体应该已经出现。主基地与混合体之间的路径由零散敌军（你在前往分矿时应该已经将其清除）和一座敌方营地把守。该营地如下所示。</p>
    <?php switcher_generator("camp1") ?>
    <p>接下来应攻击分矿东侧的营地，通常正好能顺路迎击生成的进攻波次。该营地如下所示。</p>
    <?php switcher_generator("camp2") ?>
    <p>清除该基地后，通常建议继续清理周边区域。小心这里的混合体支配者。</p>
    <?php switcher_generator("cleanuplong") ?>
    <p>清理完毕后，可以向南推进，拿下地图右下方、主基地外侧的营地。</p>
    <?php switcher_generator("sebase") ?>
    <p>此时你的部队规模应该已经足够，可以随意向各处推进并收集剩余零件来完成任务。上述基地附近还有一座拥有大量零件的敌方基地。</p>
    <?php switcher_generator("eastbaselong") ?>
    <p>该基地正北方有一处凹地，其中还有一些零件可供收集。</p>
    <?php switcher_generator("alcove") ?>
    <p>地图左上角有一座大型敌方营地，那里也有若干零件可供拾取。</p>
    <?php switcher_generator("necamplong") ?>
    <p>最后需要推进的是北侧敌方基地，这里的防守最为严密。两侧各有一条斜坡，如果愿意，也可以从侧面发起攻击。</p>
    <?php switcher_generator("finalbaselong") ?>
    <h2 id="hybridAbilities">混合体技能</h2>
    <img id="hybridExperiment" src="/images/missiondata/partparcel/hybrid.jpg" alt="莫比斯混合体实验品">
    <p>收容舱被打破后出现的混合体拥有专属技能，具体如下：</p>
    <table>
        <thead>
            <tr>
                <th>技能</th>
                <th>说明</th>
                <th>冷却时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>进攻波次生成器</td>
                <td>根据这是任务中的第几个混合体，生成具备以下科技等级和强度等级的进攻波次。详情请参阅<a href="/guides/enemycomps">敌方部队组合页面</a>。
                    <table>
                        <thead>
                            <tr>
                                <th>混合体</th>
                                <th>科技等级</th>
                                <th>强度等级</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>7</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>45 秒</td>
            </tr>
            <tr>
                <td>火焰锁链</td>
                <td>在地面上生成若干光点，它们会在 4.5 秒后爆炸，每次命中造成 50 点伤害。光点可能排列成圆形（半径 10），也可能排列成锥形（长度 15）。</td>
                <td>30 秒</td>
            </tr>
            <tr>
                <td>幻术师</td>
                <td>依次生成 2、3、4 个混合体镜像。所有生成混合体的生命值与护盾值总和为本体最大生命值与护盾值的 30%，并在所有镜像之间平均分配。</td>
                <td>20 秒</td>
            </tr>
            <tr>
                <td>锁定</td>
                <td>选择一个目标并在其身上放置持续 5 秒的锁定标记，随后将其定身，并对地面目标造成 200 点伤害、对空中目标造成 150 点伤害；伤害会在 2 秒后生效。</td>
                <td>12 秒</td>
            </tr>
            <tr>
                <td>腐蚀网格</td>
                <td>在地面上生成网格图案，对其上的所有单位每秒造成 1 点伤害。网格线持续 10 秒。</td>
                <td>45 秒</td>
            </tr>
            <tr>
                <td>静滞</td>
                <td>在地面上生成一片半径为 6、持续 5 秒的区域。区域内的所有单位都会进入静滞状态 8 秒。静滞中的单位无法被攻击，也不会受到伤害，但同样无法移动、攻击或使用技能。</td>
                <td>20 秒</td>
            </tr>
        </tbody>
    </table>
    <p>第一个混合体只有一种技能，第二个有两种，第三个有三种。技能会在混合体之间继承，也就是说，后续混合体会拥有此前混合体的所有技能，并额外获得一种新技能。混合体不会同时拥有火焰锁链和腐蚀网格。</p>
    <h2 id="bonus">完成奖励目标</h2>
    <p>奖励目标要求你在两列莫比斯列车穿过地图前将其摧毁。第一列从左侧生成，第二列从右侧生成，两者使用同一条轨道。列车的行进路线如下：</p>
    <img src="/images/missiondata/partparcel/bonuspath.jpg" alt="奖励列车路线">
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明参见<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>本地图进攻波次的时间、强度等级、科技等级及目标如下。</p>
    <p>本任务的进攻波次时间为：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>目标</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3:45</td>
                <td>1</td>
                <td>1</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>2</td>
                <td>6:30</td>
                <td>2</td>
                <td>2</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>3</td>
                <td>10:00</td>
                <td>3</td>
                <td>3</td>
                <td>分矿</td>
            </tr>
            <tr>
                <td>4</td>
                <td>14:06</td>
                <td>4</td>
                <td>4</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>5</td>
                <td>17:12</td>
                <td>5</td>
                <td>5</td>
                <td>分矿</td>
            </tr>
            <tr>
                <td>6</td>
                <td>20:00</td>
                <td>6</td>
                <td>6</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>7</td>
                <td>24:00</td>
                <td>7</td>
                <td>7</td>
                <td>部队</td>
            </tr>
            <tr>
                <td>8</td>
                <td>27:00</td>
                <td>5</td>
                <td>5</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>9</td>
                <td>30:00</td>
                <td>6</td>
                <td>6</td>
                <td>主基地</td>
            </tr>
        </tbody>
    </table>
    <p>奖励列车的生成时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>列车</th>
                <th>时间</th>
                <th>生成位置</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>8:00</td>
                <td>左侧</td>
            </tr>
            <tr>
                <td>2</td>
                <td>15:00</td>
                <td>右侧</td>
            </tr>
        </tbody>
    </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>本地图的进攻波次共有四个生成点。普通进攻波次的左侧生成点如下：</p>
    <img src="/images/missiondata/partparcel/attackwaveleftspawn.jpg" alt="普通进攻波次的左侧生成点">
    <p>攻击分矿的进攻波次左侧生成点如下：</p>
    <img src="/images/missiondata/partparcel/expattackwaveleftspawn.jpg" alt="分矿进攻波次的左侧生成点">
    <p>普通进攻波次的右侧生成点如下：</p>
    <img src="/images/missiondata/partparcel/attackwaverightspawn.jpg" alt="进攻波次的右侧生成点">
    <p>攻击分矿的进攻波次右侧生成点如下：</p>
    <img src="/images/missiondata/partparcel/expattackwaverightspawn.jpg" alt="分矿进攻波次的右侧生成点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>即使巴利俄斯已经完工，你仍可利用这段时间继续收集零件。零件会继续为倒计时增加秒数，并计入任务的下一阶段，有时甚至能让你立即开始下一个混合体阶段。</li>
        <li>地图上的零件数量多于完成任务所需的数量。</li>
        <li>戴维斯将军不会替你攻击奖励目标，但会攻击其他敌方单位。</li>
        <li>如果巴利俄斯在前往混合体的途中受损过重，它会进入飞行模式，打破混合体收容舱后飞回基地。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/horner">汉与霍纳</a>：打击战斗机平台可以用来打破并收集零件。</li>
        <li><a href="/commanders/tychus">泰凯斯</a>：响尾蛇萨姆可以同时在多节车厢上安放爆破装药，因此极其擅长处理奖励目标。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：菌毯铺开后，将被感染的移民营移到分矿，以缩短感染体的行进时间。</li>
        <li><a href="/commanders/zagara">扎加拉</a>：将额外的孵化场建在分矿，以便快速增援。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：泽拉图可以在游戏开始时识别敌方种族。和往常一样，若存在菌毯，敌方就是异虫。若敌方为人类，小地图上组成菱形的四个箱子会位于分矿区域正中央；若菱形偏离中心，敌方就是星灵。演示视频如下：</li>
    </ul>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/YkCX8PXqyAc" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
