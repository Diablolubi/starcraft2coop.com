<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 死亡摇篮</title>
  <meta name="description" content="《星际争霸 II》合作任务“死亡摇篮”攻略">
  <meta name="keywords" content="星际争霸 合作模式 攻略 死亡摇篮 任务">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/cradleofdeath">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>死亡摇篮</h1>
    <p id="missionPlace">莫比斯战斗站</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#objectiveOrder">判断目标顺序</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#baseAnalysis">敌方基地分析</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>莫比斯军团正利用这座巨型战斗站攻击帝国殖民地。帮助斯通将萨尔纳加神器运送至关键目标地点，摧毁战斗站并拯救无辜生命。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>护送神器运输车前往混合体设施</li>
            <li>护送神器运输车前往氙气反应堆</li>
            <li>护送神器运输车前往资源储备站</li>
            <li>（护送神器运输车前往高能瓦斯精炼厂）</li>
        </ul>
        <p>或</p>
        <ul>
            <li>（护送神器运输车前往地嗪萃取装置）</li>
        </ul>
        <ul>
            <li>不要让战斗站启动</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>护送神器运输车前往莫比斯研究站（2）</li>
        </ul>
    <h2 id="objectiveOrder">判断目标顺序</h2>
    <?php $mission = "cradleofdeath"; ?>
    <p>分析敌方基地之前，首先必须了解目标顺序。“死亡摇篮”的任务目标含有随机要素。下图显示了各目标的位置，本攻略后文会使用这些名称指代地图上的相应目标。</p>
    <img src="/images/missiondata/cradleofdeath/objectivemap.jpg" alt="目标地图">
    <p>游戏开始时便会确定你需要完成哪些目标及其顺序。目标顺序如下：</p>
    <table class="firstCentered">
        <thead>
            <tr>
                <th>顺序</th>
                <th>目标</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>混合体设施</td>
            </tr>
            <tr>
                <td>2</td>
                <td>氙气反应堆或资源储备站</td>
            </tr>
            <tr>
                <td>3</td>
                <td>氙气反应堆或资源储备站</td>
            </tr>
            <tr>
                <td>4</td>
                <td>高能瓦斯精炼厂或地嗪萃取装置</td>
            </tr>
        </tbody>
    </table>
    <p>也就是说，混合体设施始终是第一个目标，因为你的扩张点就在那里。接下来的两个目标是氙气反应堆和资源储备站，顺序随机。最后则需要完成高能瓦斯精炼厂或地嗪萃取装置。</p>
    <p>大多数情况下，下一个目标会在小地图上标记出来。不过，在“怕黑”等某些<a href="/resources/mutators">突变因子</a>生效时，小地图不会标记这些目标。此时可以通过坡道灯判断下一个目标：当某个目标激活时，离开基地并通往该目标的坡道灯会变为绿色：</p>
    <img src="/images/missiondata/cradleofdeath/objectiveramp.jpg" alt="坡道灯">
    <p>有些玩家希望预先侦察目标顺序。你可以在游戏刚开始时用神器运输车完成侦察。判断目标顺序的方法如下：</p>
    <ol>
        <li>混合体设施始终是第一个目标。</li>
        <li>让运输车驶向氙气反应堆。如果通往反应堆的坡道外没有构造体，氙气反应堆就是第二个目标。</li>
    </ol>
    <img src="/images/missiondata/cradleofdeath/objectivescout1.jpg" alt="侦察目标 1">
    <ol start="3">
        <li>确定第二个目标后，第三个目标就是资源储备站或氙气反应堆中尚未完成的另一个。</li>
        <li>让运输车驶向地嗪萃取装置。如果山谷入口有构造体驻守，它就是第四个目标；如果没有构造体，第四个目标就是高能瓦斯精炼厂。</li>
    </ol>
    <img src="/images/missiondata/cradleofdeath/objectivescout2.jpg" alt="侦察目标 2">
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
    <p>运输车并不只是要被护送到地图上的指定信标处；它们还能禁用散布在各目标沿途的萨尔纳加构造体。在被运输车禁用之前，这些构造体无法成为目标且能造成大量伤害；禁用后便可被攻击并摧毁。</p>
    <p>第一个目标要求你摧毁混合体设施。该区域也包含你的扩张点，因此尽快清理它对经济发展至关重要。这里的守军很少。</p>
    <?php switcher_generator("hybridfacility") ?>
    <p>资源储备站会是第二或第三个目标（详见上文）。如果它是第二个目标，基地配置如左图；如果是第三个目标，则如右图。请留意其中的混合体和额外构造体。</p>
    <?php switcher_generator("resourcestockpilecomparison") ?>
    <p>如果氙气反应堆是第三个目标，你需要先击败坡道下方的一小处敌军营地。</p>
    <?php switcher_generator("xenonreactorcamp") ?>
    <p>氙气反应堆会是第二或第三个目标（详见上文）。如果它是第二个目标，基地配置如左图；如果是第三个目标，则如右图。请留意其中的混合体和额外构造体。</p>
    <?php switcher_generator("xenonreactorcomparison") ?>
    <p>如果最后一个目标是地嗪萃取区，你需要向东南方前进。请留意把守山谷入口的构造体。该区域驻有大量地面部队。</p>
    <?php switcher_generator("terrazineextractorlong") ?>
    <p>如果最后一个目标是高能瓦斯精炼厂区，你需要向西南方前进。该区域驻有大量空中部队。</p>
    <?php switcher_generator("vespenerefinery") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <p>奖励目标要求你将运输车驶到莫比斯研究站前。研究站由一个构造体和一处敌军营地守卫。</p>
    <p>地图上共有两个奖励目标：第二个主要目标激活时出现一个，第三个主要目标激活时再出现一个。此外，第一个奖励目标始终位于主要目标北侧，第二个始终位于主要目标南侧。</p>
    <p>资源储备站北侧的奖励区域如下图所示。如果资源储备站是第二个主要目标，你需要清理这处奖励区域。</p>
    <?php switcher_generator("resourcestockpilebonus1") ?>
    <p>资源储备站南侧的奖励区域如下图所示。如果资源储备站是第三个主要目标，你需要清理这处奖励区域。</p>
    <?php switcher_generator("resourcestockpilebonus2long") ?>
    <p>氙气反应堆北侧的奖励区域如下图所示。如果氙气反应堆是第二个主要目标，你需要清理这处奖励区域。</p>
    <?php switcher_generator("xenonreactorbonus1long") ?>
    <p>氙气反应堆南侧的奖励区域如下图所示。如果氙气反应堆是第三个主要目标，你需要清理这处奖励区域。</p>
    <?php switcher_generator("xenonreactorbonus2long") ?>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方阵容</a>页面。</p>
    <p>由于这张地图的机制，地图上会出现两类攻击：</p>
    <ul>
        <li><b>进攻波次</b>：目标为玩家基地的强大部队，整场任务中出现频率较低。</li>
        <li><b>空投袭击</b>：用于攻击玩家运输车的小规模部队。</li>
    </ul>
    <p>本任务的进攻波次时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>4:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>6:00</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>9:00</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>12:00</td>
                <td>3</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>15:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>18:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>7</td>
                <td>21:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>8</td>
                <td>25:00</td>
                <td>6</td>
                <td>5</td>
            </tr>
            <tr>
                <td>9</td>
                <td>29:00</td>
                <td>7</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
    <p>注意：只有倒计时剩余时间超过 1:30 时才会刷新进攻波次。如果剩余时间较少，进攻波次会推迟到当前目标完成后再刷新。</p>
    <p>空投袭击的时间规则稍微复杂一些。它们以当前目标的开始时间为准，而非任务总时间。下表时间表示相应目标开始后的经过时间：</p>
    <p>注意：只要任一玩家的运输车仍然存活，空投袭击就会出现。如果两辆运输车都被摧毁，空投袭击会等待其中一辆重新刷新后再发动。</p>
    <p>目标 1：</p>
    <p>无空投袭击。</p>
    <p>目标 2：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>目标开始后的经过时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:30</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>4:30</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <p>目标 3：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>目标开始后的经过时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1:30</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2:30</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4:30</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <p>目标 4：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>目标开始后的经过时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:00</td>
                <td>3</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3:00</td>
                <td>3</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>
    <p>空投袭击从不同于常规进攻波次的单位池中选择单位。单位池如下：</p>
    <table>
        <thead>
            <tr>
                <th>科技等级</th>
                <th>星灵单位池</th>
                <th>人类单位池</th>
                <th>异虫单位池</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>蟑螂 / 狂热者</td>
                <td>陆战队员 / 跳虫</td>
                <td>医护兵 / 跳虫</td>
            </tr>
            <tr>
                <td>2</td>
                <td>歌利亚 / 狂热者</td>
                <td>陆战队员 / 凤凰</td>
                <td>侦察机 / 跳虫</td>
            </tr>
            <tr>
                <td>3</td>
                <td>歌利亚 / 狂热者 / 航母 / 蟑螂</td>
                <td>陆战队员 / 凤凰 / 雷神 / 跳虫</td>
                <td>侦察机 / 跳虫 / 医护兵 / 雷兽</td>
            </tr>
        </tbody>
    </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次会从你接下来需要完成的目标位置刷新。进行最后一个目标时，波次会从你没有进攻的另一侧刷新。</p>
    <p>如果进攻波次来自资源储备站一侧，刷新点如下图所示。</p>
    <img src="/images/missiondata/cradleofdeath/resourcestockpilespawnpoint.jpg" alt ="资源储备站刷新点">
    <p>如果进攻波次来自氙气反应堆一侧，刷新点如下图所示。</p>
    <img src="/images/missiondata/cradleofdeath/xenonreactorspawnpoint.jpg" alt ="氙气反应堆刷新点">
    <p>下图显示了进攻波次最后两个位置的刷新点。完成第三个目标并转向最后一个目标后，进攻波次会在这两个位置之间切换。</p>
    <img src="/images/missiondata/cradleofdeath/finalspawnpoint.jpg" alt ="最终刷新点">
    <p>理论上可以利用进攻波次模式预测目标顺序，但相关信息直到游戏后期才会显现，因此这种方法非常不实用。</p>
    <p>空投袭击会尝试攻击运输车附近的区域。根据运输车的位置，有以下两种情况：</p>
    <ul>
        <li>如果运输车位于主基地或扩张点，空投袭击会落在坡道下方的基地外，绝不会刷新在你的基地内部。它们会选择距离运输车最近的区域刷新。</li>
        <li>如果运输车位于地图上其他位置，袭击部队会空投在与运输车相隔一小段距离、位于运输车和目标之间的位置。实际上，它们会试图阻止运输车抵达目标。</li>
    </ul>
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>如果想预先侦察任务目标顺序，请使用运输车。</li>
        <li>先让运输车接近构造体，再让部队跟进，以减少所受伤害。运输车相当坚固且攻击优先级较低，敌人一看到你的部队便会停止攻击运输车并转火。</li>
        <li>进入基地的唯一通道是坡道，很容易防守。</li>
        <li>无需费力清除目标区域内的所有敌人和建筑；只需清理信标上的构造体。运输车就位后会免疫伤害。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在混合体设施外布置剧毒巢穴，再用运输车引诱敌方单位踩中巢穴以收集生物质。</li>
        <li><a href="/commanders/kerrigan">凯瑞甘</a>：在地图各处布置大量欧米伽虫洞，以便处理进攻波次并有效推进。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：在地图各处布置大量虚空阵列船，以便处理进攻波次并有效推进。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
