<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 虚空撕裂</title>
  <meta name="description" content="《星际争霸 II》合作任务“虚空撕裂”攻略">
  <meta name="keywords" content="星际争霸 II, 合作任务, 虚空撕裂, 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/voidthrashing">
  <script src="/scripts/preload.js"></script>
  <style>
    .topAlign{
        vertical-align:text-top;
    }
  </style>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>虚空撕裂</h1>
    <p id="missionPlace">查尔</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#baseAnalysis">敌方基地分析</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>虚空撕裂者正在查尔现身。请通力合作，在铁锤中士的要塞被它们的猛烈攻势摧毁前消灭它们。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>消灭虚空撕裂者（10）</li>
            <li>铁锤中士的要塞必须存活</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>摧毁大天使（1）</li>
        </ul>
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
    <?php $mission = "voidthrashing"; ?>
    <p>“虚空撕裂”中的第一只虚空撕裂者只有一小支敌军守卫。该区域如下所示。</p>
    <?php switcher_generator("thrasher1") ?>
    <p>通往第二批虚空撕裂者的道路上有一处敌军营地，如下所示：</p>
    <?php switcher_generator("thrasher2camp") ?>
    <p>清除该营地后，还需击败守卫第二批虚空撕裂者的强大敌军。</p>
    <?php switcher_generator("thrasher2") ?>
    <p>消灭这批虚空撕裂者后，通往第三批撕裂者的道路同样有一处敌军营地。</p>
    <?php switcher_generator("thrasher3camp") ?>
    <p>清除该营地后，即可消灭第三批虚空撕裂者。</p>
    <?php switcher_generator("thrasher3") ?>
    <p>最后一批虚空撕裂者位于防守严密的敌方基地中，如下所示：</p>
    <?php switcher_generator("thrasher4long") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/voidthrashing/archangel.jpg" alt="大天使">
    </div>
    <p>奖励目标要求你摧毁大天使。大天使是拥有范围攻击的敌方单位，其守卫部队如下所示。奖励目标始终存在于地图上，因此玩家取得该区域视野或经过一定时间后就会触发。</p>
    <?php switcher_generator("archangel") ?>
    <p>大天使的生命值降至 50% 以下时，会切换为战斗机模式并飞往地图上的另一处区域。爆发伤害足够高时，完全可以在它飞走前将其摧毁。下方小地图显示了它飞走后的落点。</p>
    <?php switcher_generator("archangelescape") ?>
    <p>注意：这一过程可能发生数次。在大天使被摧毁前，它会在两个逃离地点之间交替移动。</p>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>当虚空撕裂者周围所有单位和建筑的生命值与护盾值（总耐久）降至游戏开始时的 50% 时，虚空撕裂者便会出现。</p>
    <p>此外，无论任务进度如何，每一批虚空撕裂者都会在指定时间出现。时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>批次</th>
                <th>出现时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>4:30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>9:20</td>
            </tr>
            <tr>
                <td>3</td>
                <td>13:40</td>
            </tr>
            <tr>
                <td>4</td>
                <td>18:00</td>
            </tr>
        </tbody>
    </table>
    <p>本任务有两种进攻波次模式，时间点各不相同。进攻波次时间如下：</p>
    <table class="centered">
        <tbody class="topAlign">
            <tr>
                <td>
                    <p><b>模式 A：</b></p>
                    <table class="centered">
                        <thead>
                            <tr>
                                <th>时间</th>
                                <th>科技等级</th>
                                <th>强度等级</th>
                                <th>出生点</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3:00</td>
                                <td>1</td>
                                <td>1</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>6:00</td>
                                <td>2</td>
                                <td>2</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>9:00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>12:00</td>
                                <td>4</td>
                                <td>4</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>15:00</td>
                                <td>5</td>
                                <td>5</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>18:00</td>
                                <td>6</td>
                                <td>6</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>21:00</td>
                                <td>7</td>
                                <td>7</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>24:00</td>
                                <td>7</td>
                                <td>7</td>
                                <td>右侧</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <p><b>模式 B：</b></p>
                    <table class="centered">
                        <thead>
                            <tr>
                                <th>时间</th>
                                <th>科技等级</th>
                                <th>强度等级</th>
                                <th>出生点</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4:00</td>
                                <td>1</td>
                                <td>2</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>8:00</td>
                                <td>2</td>
                                <td>3</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>10:00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>14:00</td>
                                <td>4</td>
                                <td>5</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>16:00</td>
                                <td>5</td>
                                <td>4</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>20:00</td>
                                <td>6</td>
                                <td>7</td>
                                <td>左侧</td>
                            </tr>
                            <tr>
                                <td>22:00</td>
                                <td>7</td>
                                <td>7</td>
                                <td>右侧</td>
                            </tr>
                            <tr>
                                <td>26:00</td>
                                <td>7</td>
                                <td>7</td>
                                <td>左侧</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <p>如果玩家在 13:30 后仍未取得大天使的视野，奖励目标便会开始。</p>
    <h2 id="spawnPoints">出生点</h2>
    <p>本地图的进攻波次有两个出生点。</p>
    <p>左侧出生点（第二批虚空撕裂者附近）：</p>
    <img src="/images/missiondata/voidthrashing/leftspawnpoint.jpg" alt="左侧出生点">
    <p>右侧出生点（奖励区域附近）：</p>
    <img src="/images/missiondata/voidthrashing/rightspawnpoint.jpg" alt="右侧出生点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>本任务非常短，而且敌方防御薄弱，因此积极进攻会获得更好效果。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在进攻波次的出生位置放置剧毒巢穴以削弱敌军。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在进攻波次的出生位置放置磁雷以削弱敌军。</li>
        <li><a href="/commanders/nova">诺娃</a>：使用攻城坦克时，在进攻波次的出生位置布置蜘蛛雷以削弱敌军。</li>
        <li><a href="/commanders/raynor">雷诺</a>：使用秃鹫战车时，在进攻波次的出生位置布置蜘蛛雷以削弱敌军。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：消灭第一只虚空撕裂者后，将被感染的移民营移动到其位置，以便快速增援。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
