<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 往日神庙</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：往日神庙">
  <meta name="keywords" content="星际争霸 II 合作任务 往日神庙 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/templeofthepast">
  <script src="/scripts/preload.js"></script>
  <style>
    .arrow{
        font-size:1.8em;
        font-weight:bold;
        vertical-align:middle;
    }
    .topAlign{
        vertical-align:text-top;
    }
  </style>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>往日神庙</h1>
    <p id="missionPlace">夏库拉斯</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
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
    <p>夏库拉斯上的萨尔纳加神庙正遭受袭击。构筑防御，抵挡敌人的围攻。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>保卫神庙 (26:00)</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>摧毁天顶石 (3)</li>
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
    <?php $mission = "templeofthepast"; ?>
    <p>在“往日神庙”中，你不必攻入敌方基地，但出于以下原因，强烈建议这样做：</p>
    <ul>
        <li>摧毁敌方基地可以阻止敌人增建静态防御，避免这些防线最终推进到你的斜坡前。</li>
        <li>这样可以轻松接近地图上生成的虚空撕裂者，而无需在途中损失部队；尤其是趁敌人最弱时尽早清除基地，效果更佳。</li>
        <li>可以用顶栏技能蹲守进攻波次的生成点，在主力部队交战前先削弱敌军。</li>
        <li>这些基地防守十分薄弱，很容易清除。</li>
    </ul>
    <p>共有三座基地需要清除，分别对应通往神庙的三条斜坡，如下所示。注意：图中是敌方基地的初始配置。随着任务时间推移，敌人会建造更多静态防御，因此最好尽快将其清除。</p>
    <p>中间基地：</p>
    <?php switcher_generator("basemidlong") ?>
    <p>上方基地：</p>
    <?php switcher_generator("basetop") ?>
    <p>下方基地：</p>
    <?php switcher_generator("basebottomlong") ?>
    <p>如果愿意，也可以清除空投部队出发的基地。不过这样做没有实际收益，而且必须让空中单位飞过去，或将部队折跃、传送到那里。</p>
    <?php switcher_generator("basedroplong") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/templeofthepast/zenithstone.jpg" alt="天顶石">
        <img src="/images/missiondata/templeofthepast/zenithstone.jpg" alt="天顶石">
        <img src="/images/missiondata/templeofthepast/zenithstone.jpg" alt="天顶石">
    </div>
    <p>奖励目标要求你摧毁地图上的三块天顶石。每块天顶石都位于一条通往神庙的道路旁，位置如下：</p>
    <img src="/images/missiondata/templeofthepast/zenithstonelocations.jpg" alt="天顶石位置小地图">
    <p>天顶石从游戏开始时就已存在。当玩家进入任意天顶石周围 15 射程内，或游戏经过 9 分钟后，它们便会显现。摧毁天顶石没有时间限制。每块石头只有一小股敌军守卫；此外，当生命值降至 50% 以下时，它们会在周围随机区域施放灵能风暴。</p>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明参见<a href="/guides/enemycomps">敌方部队组合</a>页面。如果同一时间出现的进攻波次具有不同的强度等级和科技等级，则会分别用逗号分隔。</p>
    <p>本任务有两种模式，如下所示。进攻方向表示进攻波次的移动方向。</p>
    <div class="tableContainer">
        <table class="centered">
            <tbody class="topAlign">
                <tr>
                    <td>
                        <p><b>模式 A：</b>将在 3:15 发出进攻警告</p>
                        <table class="centered directions">
                            <thead>
                                <tr>
                                    <th>时间</th>
                                    <th>科技等级</th>
                                    <th>强度等级</th>
                                    <th>方向</th>
                                    <th>备注</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3:00</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4:00</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>6:00</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>1 个小型混合体</td>
                                </tr>
                                <tr>
                                    <td>6:45</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>7:30</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>8:15</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>虚空撕裂者 + 进攻波次</td>
                                </tr>
                                <tr>
                                    <td>9:00</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↘↖</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>10:00</td>
                                    <td>4,2</td>
                                    <td>3,3</td>
                                    <td><span class="arrow">↘↖</span></td>
                                    <td>玩家 1：1 个小型混合体</td>
                                </tr>
                                <tr>
                                    <td>11:00</td>
                                    <td>4,4</td>
                                    <td>4,3</td>
                                    <td><span class="arrow">↘↖</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>12:30</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>13:15</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>13:45</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="arrow">↖</span></td>
                                    <td>仅虚空撕裂者</td>
                                </tr>
                                <tr>
                                    <td>15:00</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投<br>1 个混合体天罚者</td>
                                </tr>
                                <tr>
                                    <td>15:20</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投<br>1 个混合体天罚者</td>
                                </tr>
                                <tr>
                                    <td>16:10</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>16:40</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>16:55</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="arrow">↘</span></td>
                                    <td>仅虚空撕裂者</td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td><span class="arrow">↘</span></td>
                                    <td>3 个小型混合体<br>1 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>18:15</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td><span class="arrow">↖</span></td>
                                    <td>3 个小型混合体<br>1 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>19:15</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投</td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>20:15</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙↙</span></td>
                                    <td>双重空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>20:45</td>
                                    <td>2,4</td>
                                    <td>3,3</td>
                                    <td><span class="arrow">↖↖</span></td>
                                    <td>双重空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>21:15</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↗↗</span></td>
                                    <td>双重空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>21:30</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙↙</span> 或 <span class="arrow">↖↖</span> 或 <span class="arrow">↗↗</span></td>
                                    <td>双重空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>22:00</td>
                                    <td>6</td>
                                    <td>5</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>22:30</td>
                                    <td>4,6</td>
                                    <td>5,5</td>
                                    <td><span class="arrow">↘↖</span></td>
                                    <td>双重虚空撕裂者 + 进攻波次</td>
                                </tr>
                                <tr>
                                    <td>23:30</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td><span class="arrow">↘</span></td>
                                    <td>4 个小型混合体<br>2 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>23:40</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td><span class="arrow">↖</span></td>
                                    <td>3 个小型混合体<br>2 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>24:40</td>
                                    <td>5,6,7</td>
                                    <td>5,5,7</td>
                                    <td><span class="arrow">↘↖↗</span></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <p><b>模式 B：</b>将在 3:10 发出进攻警告</p>
                        <table class="centered directions">
                            <thead>
                                <tr>
                                    <th>时间</th>
                                    <th>科技等级</th>
                                    <th>强度等级</th>
                                    <th>方向</th>
                                    <th>备注</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3:00</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4:10</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>6:00</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>1 个小型混合体</td>
                                </tr>
                                <tr>
                                    <td>6:45</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>7:30</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>8:15</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>仅虚空撕裂者</td>
                                </tr>
                                <tr>
                                    <td>9:00</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↘</span> 或 <span class="arrow">↖</span></td>
                                    <td>两支 3/3 进攻波次同时出现</td>
                                </tr>
                                <tr>
                                    <td>10:00</td>
                                    <td>4,2</td>
                                    <td>3,3</td>
                                    <td><span class="arrow">↘↖</span></td>
                                    <td>玩家 1：1 个小型混合体<br>玩家 2：2 个小型混合体</td>
                                </tr>
                                <tr>
                                    <td>11:00</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↖</span> 或 <span class="arrow">↘</span></td>
                                    <td>两支 4/4 进攻波次同时出现</td>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>12:30</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>3 个小型混合体</td>
                                </tr>
                                <tr>
                                    <td>13:35</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td><span class="arrow">↖</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>13:45</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="arrow">↖</span></td>
                                    <td>仅虚空撕裂者</td>
                                </tr>
                                <tr>
                                    <td>15:00</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>15:30</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投舱/折跃</td>
                                </tr>
                                <tr>
                                    <td>15:45</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="arrow">↘</span></td>
                                    <td>仅虚空撕裂者</td>
                                </tr>
                                <tr>
                                    <td>16:35</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投<br>1 个混合体天罚者</td>
                                </tr>
                                <tr>
                                    <td>16:55</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投<br>1 个混合体天罚者</td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td><span class="arrow">↘</span> 或 <span class="arrow">↗</span></td>
                                    <td>3 个小型混合体<br>1 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>18:15</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td><span class="arrow">↖</span> 或 <span class="arrow">↗</span></td>
                                    <td>3 个小型混合体<br>1 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>19:15</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投</td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td><span class="arrow">↗</span></td>
                                    <td>虚空撕裂者 + 进攻波次<br>3 个小型混合体<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>20:20</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投<br>1 个混合体天罚者</td>
                                </tr>
                                <tr>
                                    <td>20:40</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td><span class="arrow">↙</span></td>
                                    <td>空投<br>1 个混合体天罚者</td>
                                </tr>
                                <tr>
                                    <td>22:30</td>
                                    <td>4,6</td>
                                    <td>5,5</td>
                                    <td><span class="arrow">↘↖</span></td>
                                    <td>双重虚空撕裂者 + 进攻波次</td>
                                </tr>
                                <tr>
                                    <td>23:30</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td><span class="arrow">↘</span></td>
                                    <td>4 个小型混合体<br>2 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>23:40</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td><span class="arrow">↖</span></td>
                                    <td>3 个小型混合体<br>2 个混合体天罚者<br>1 个大型混合体</td>
                                </tr>
                                <tr>
                                    <td>24:40</td>
                                    <td>5,6,7</td>
                                    <td>5,5,7</td>
                                    <td><span class="arrow">↘↖↗</span></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>部分进攻波次还会包含混合体，其类型取决于敌方种族与任务模式，具体如下：</p>
    <table>
        <tr>
            <th colspan="3">模式 A</th>
            <th colspan="3">模式 B</th>
        </tr>
        <tr>
            <th>种族</th>
            <th>小型混合体</th>
            <th>大型混合体</th>
            <th>种族</th>
            <th>小型混合体</th>
            <th>大型混合体</th>
        </tr>
        <tbody>
            <tr>
                <td>星灵</td>
                <td>混合体掠夺者</td>
                <td>混合体巨兽</td>
                <td>星灵</td>
                <td>混合体天罚者</td>
                <td>混合体支配者</td>
            </tr>
            <tr>
                <td>人类 (50%)</td>
                <td>混合体毁灭者</td>
                <td>混合体巨兽</td>
                <td>人类 (50%)</td>
                <td>混合体天罚者</td>
                <td>混合体巨兽</td>
            </tr>
            <tr>
                <td>人类 (50%)</td>
                <td>混合体掠夺者</td>
                <td>混合体支配者</td>
                <td>人类 (50%)</td>
                <td>混合体天罚者</td>
                <td>混合体支配者</td>
            </tr>
            <tr>
                <td>异虫</td>
                <td>混合体毁灭者</td>
                <td>混合体支配者</td>
                <td>异虫</td>
                <td>混合体天罚者</td>
                <td>混合体巨兽</td>
            </tr>
        </tbody>
    </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>本任务有两类值得关注的生成点：</p>
    <ul>
        <li><b>进攻波次生成点：</b>前往神庙的进攻波次会在这里生成。共有四个生成点，分别对应神庙的各个方向（三条斜坡和一次空投进攻）。</li>
        <li><b>空投/折跃位置：</b>任务中期，人类和异虫部队会空投至此，星灵部队则会折跃进入。共有四个可能的空投/折跃位置。</li>
    </ul>
    <p>上方进攻波次生成点：</p>
    <img src="/images/missiondata/templeofthepast/topspawnpoint.jpg" alt="上方进攻波次生成点">
    <p>中间进攻波次生成点：</p>
    <img src="/images/missiondata/templeofthepast/midspawnpoint.jpg" alt="中间进攻波次生成点">
    <p>下方进攻波次生成点：</p>
    <img src="/images/missiondata/templeofthepast/bottomspawnpoint.jpg" alt="下方进攻波次生成点">
    <p>空投进攻波次生成点：</p>
    <img src="/images/missiondata/templeofthepast/dropspawnpoint.jpg" alt="空投进攻波次生成点">
    <p>空投进攻与折跃位置如下：</p>
    <img src="/images/missiondata/templeofthepast/warpinlocations.jpg" alt="空投舱/折跃位置">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>尽量尽早清除地图周围的敌方基地，以降低任务难度。</li>
        <li>面对包含爆蚊的异虫部队组合时，请修建对空防御，并在适用时于神庙周围布置王虫，防止爆蚊攻击神庙。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在中路岩石前布置剧毒巢穴，消灭早期进攻波次，并在它们打破岩石前拖延时间。</li>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在进攻波次生成位置布置剧毒巢穴，以削弱敌军。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：消灭每块天顶石旁的敌人，尽早获取精华。使用深槽虫道或跳过岩石即可抵达这些位置。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在中路岩石前布置磁力地雷，消灭早期进攻波次，并在它们打破岩石前拖延时间。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在进攻波次生成位置布置磁力地雷，以削弱敌军。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请在进攻波次和虚空撕裂者的生成位置布置蜘蛛雷，以削弱敌军。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请在进攻波次和虚空撕裂者的生成位置布置蜘蛛雷，以削弱敌军。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
