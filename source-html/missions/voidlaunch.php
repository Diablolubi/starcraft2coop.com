<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 虚空降临</title>
  <meta name="description" content="《星际争霸 II》合作任务“虚空降临”攻略">
  <meta name="keywords" content="星际争霸 II, 合作任务, 虚空降临, 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/voidlaunch">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>虚空降临</h1>
    <p id="missionPlace">卡迪尔</p>
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
    <p>埃蒙正在利用卡迪尔的折跃通道，将部队运送到整个星区。运兵船抵达折跃通道前，将其全部摧毁。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>摧毁运兵船（7 波）。</li>
            <li>不能让 5 艘运兵船逃脱。</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>护送科学家前往萨尔纳加神殿（3）</li>
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
    <?php $mission = "voidlaunch"; ?>
    <p>本地图不要求玩家攻入敌方基地，但强烈建议这样做。任务后期运兵船会同时从多个发射台出现，提前清除敌方基地能大幅降低难度。清除基地后，可以直接在发射台旁建造静态防御，蹲守刚出现的运兵船。</p>
    <p>最左侧的基地如下所示：</p>
    <?php switcher_generator("leftbaselong") ?>
    <p>该基地东侧有一座守卫中间发射台的小型基地。这里防守最薄弱，但只能穿过另外两座基地之一才能抵达：</p>
    <?php switcher_generator("midbaselong") ?>
    <p>最右侧的基地如下所示：</p>
    <?php switcher_generator("rightbaselong") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/voidlaunch/researchvessel.jpg" alt="科学船">
        <img src="/images/missiondata/voidlaunch/researchvessel.jpg" alt="科学船">
        <img src="/images/missiondata/voidlaunch/researchvessel.jpg" alt="科学船">
    </div>
    <p>奖励目标要求护送 3 艘科学船前往地图上的萨尔纳加神殿，并击退一波专门攻击科学船的敌军。各萨尔纳加神殿的位置如下：</p>
    <p>第一座神殿只有一小股敌军守卫。</p>
    <?php switcher_generator("shrine1") ?>
    <p>第二座神殿由一支较强的部队守卫。</p>
    <?php switcher_generator("shrine2") ?>
    <p>最后一座神殿由一处敌军营地守卫，需要相当规模的部队才能清除。</p>
    <?php switcher_generator("shrine3long") ?>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>下表列出本任务运兵船的时间、航向，以及护航部队的强度和科技等级。注意，第 7 波会按三种不同模式之一出现，表中均有列出。</p>
    <div class="tableContainer">
        <table class="centered">
            <thead>
                <tr>
                    <th>波次</th>
                    <th>运兵船</th>
                    <th>时间</th>
                    <th>发射台</th>
                    <th>航向</th>
                    <th>科技等级</th>
                    <th>强度等级</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>6:18</td>
                    <td>中间</td>
                    <td>中间</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>9:00</td>
                    <td>中间</td>
                    <td>左侧或右侧</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3</td>
                    <td>12:30</td>
                    <td>中间</td>
                    <td>右侧或左侧</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>3,3</td>
                    <td>15:30</td>
                    <td>左侧、右侧或左侧、中间</td>
                    <td>左侧、中间或中间、右侧</td>
                    <td>3,4 或 4,3</td>
                    <td>3,4 或 4,3</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2,2,2</td>
                    <td>18:00</td>
                    <td>右侧、中间、左侧</td>
                    <td>中间、中间、中间</td>
                    <td>3,4,3</td>
                    <td>3,4,3</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>5</td>
                    <td>20:30</td>
                    <td>左侧或右侧</td>
                    <td>右侧或左侧</td>
                    <td>6 或 6</td>
                    <td>6 或 6</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2,3<br>2,3</td>
                    <td>23:00<br>23:45</td>
                    <td>中间、右侧<br>中间、左侧</td>
                    <td>中间、右侧<br>中间、左侧</td>
                    <td>7,5<br>7,5</td>
                    <td>6,5<br>7,5</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2,2<br>3,3</td>
                    <td>23:00<br>23:30<br>23:35</td>
                    <td>中间<br>中间<br>左侧、右侧</td>
                    <td>左侧/右侧<br>右侧/左侧<br>中间、中间</td>
                    <td>4<br>6<br>7,7</td>
                    <td>5<br>5<br>6,7</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>3,3<br>2,2</td>
                    <td>23:00<br>23:40</td>
                    <td>左侧、右侧<br>左侧、右侧</td>
                    <td>中间、中间<br>左侧、右侧</td>
                    <td>7,6<br>4,6</td>
                    <td>7,6<br>5,5</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>护航波次会从不同于常规进攻波次的单位池中选取单位。单位池如下：</p>
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
                <td>侦察机</td>
                <td>维京战机</td>
                <td>异龙</td>
            </tr>
            <tr>
                <td>2</td>
                <td>侦察机 / 凤凰战机</td>
                <td>维京战机 / 女妖</td>
                <td>异龙 / 腐化者</td>
            </tr>
            <tr>
                <td>3</td>
                <td>侦察机 / 凤凰战机 / 混合体天罚者</td>
                <td>维京战机 / 女妖 / 混合体天罚者</td>
                <td>异龙 / 腐化者 / 混合体天罚者</td>
            </tr>
            <tr>
                <td>4</td>
                <td>虚空辉光舰 / 凤凰战机 / 混合体天罚者 / 先知</td>
                <td>维京战机 / 女妖 / 混合体天罚者 / 收割者</td>
                <td>异龙 / 腐化者 / 混合体天罚者 / 跳虫</td>
            </tr>
            <tr>
                <td>5+</td>
                <td>虚空辉光舰 / 凤凰战机 / 混合体天罚者 / 先知 / 巨像</td>
                <td>维京战机 / 女妖 / 混合体天罚者 / 战列巡航舰</td>
                <td>异龙 / 腐化者 / 混合体天罚者 / 巢虫领主</td>
            </tr>
        </tbody>
    </table>
    <p>最后一波护航部队会根据敌方种族，在每支护航队中包含 2 艘母舰、1 艘洛基或 1 只利维坦。</p>
    <p>本任务的进攻波次时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>出生点</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3:00</td>
                <td>1</td>
                <td>1</td>
                <td>右侧</td>
            </tr>
            <tr>
                <td>2</td>
                <td>5:00</td>
                <td>2</td>
                <td>2</td>
                <td>左侧</td>
            </tr>
            <tr>
                <td>3</td>
                <td>7:30</td>
                <td>2</td>
                <td>2</td>
                <td>分矿建筑最多的一侧</td>
            </tr>
            <tr>
                <td>4</td>
                <td>10:00</td>
                <td>3</td>
                <td>3</td>
                <td>右侧</td>
            </tr>
            <tr>
                <td>5</td>
                <td>11:00</td>
                <td>3</td>
                <td>3</td>
                <td>左侧</td>
            </tr>
            <tr>
                <td>6</td>
                <td>14:00</td>
                <td>3</td>
                <td>3</td>
                <td>折跃通道旁建筑最多的一侧</td>
            </tr>
            <tr>
                <td>7</td>
                <td>16:48</td>
                <td>4</td>
                <td>4</td>
                <td>左侧</td>
            </tr>
            <tr>
                <td>8</td>
                <td>19:18</td>
                <td>5</td>
                <td>5</td>
                <td>右侧</td>
            </tr>
            <tr>
                <td>9</td>
                <td>21:48</td>
                <td>6</td>
                <td>6</td>
                <td>右侧</td>
            </tr>
            <tr>
                <td>10</td>
                <td>24:18</td>
                <td>7</td>
                <td>7</td>
                <td>右侧</td>
            </tr>
        </tbody>
    </table>
    <p>此外，部分进攻波次还会包含混合体。具体波次和混合体数量如下：</p>
    <table>
        <thead>
            <tr>
                <th>波次</th>
                <th>小型混合体</th>
                <th>大型混合体</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2</td>
                <td>0</td>
            </tr>
            <tr>
                <td>5</td>
                <td>3</td>
                <td>0</td>
            </tr>
            <tr>
                <td>6</td>
                <td>3</td>
                <td>0</td>
            </tr>
            <tr>
                <td>7</td>
                <td>0</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>0</td>
                <td>2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>10</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <p>这些混合体的类型按以下规则随机选择：</p>
    <ul>
        <li>小型混合体有 50% 几率为混合体毁灭者，另有 50% 几率为混合体掠夺者。</li>
        <li>大型混合体有 50% 几率为混合体支配者，另有 50% 几率为混合体巨兽。</li>
    </ul>
    <p>各奖励目标会在以下时间开始：</p>
    <ul>
        <li>8:18</li>
        <li>14:48</li>
        <li>19:48</li>
    </ul>
    <h2 id="spawnPoints">出生点</h2>
    <p>所有运兵船及其护航部队都会从发射台出现。此外还有两个专供攻击玩家基地的进攻波次使用的出生点，分别位于第一座萨尔纳加神殿两侧、地图上两个敌方基地入口附近，如下所示。</p>
    <img src="/images/missiondata/voidlaunch/attackwavespawnpoints.jpg" alt="进攻波次出生点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>尽早清除敌方基地可获得两个额外分矿，为后续作战建立更强的经济基础。</li>
        <li>清除发射台周围的敌人后，建造对空静态防御，在运兵船出现时立即将其击落。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在进攻波次的出生位置放置剧毒巢穴以削弱敌军。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：攻击第一座萨尔纳加神殿附近的敌军，获取前期精华。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在进攻波次的出生位置放置磁雷以削弱敌军。</li>
        <li><a href="/commanders/nova">诺娃</a>：使用攻城坦克时，在进攻波次的出生位置布置蜘蛛雷以削弱敌军。</li>
        <li><a href="/commanders/raynor">雷诺</a>：使用秃鹫战车时，在进攻波次的出生位置布置蜘蛛雷以削弱敌军。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：在每条折跃通道旁放置黑暗水晶塔，以便移动部队并拦截同一波中的多艘运兵船。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：泽拉图能在游戏开始时识别敌方种族。与往常一样，有菌毯就表示敌方是异虫；敌方基地有金色地板表示星灵；有混凝土板则表示人类。视频如下：</li>
    </ul>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/YXDuDOIrkro" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
