<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 天锁</title>
  <meta name="description" content="《星际争霸 II》合作任务“天锁”攻略">
  <meta name="keywords" content="星际争霸 合作模式 攻略 天锁 任务">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/lockload">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>天锁</h1>
    <p id="missionPlace">乌尔纳</p>
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
    <p>埃蒙企图在乌尔纳被用于开启通往虚空的大门之前将其摧毁。你和盟友必须在天锁能量过载之前夺取它们的控制权。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>激活天锁（5）</li>
            <li>阻止天锁过载</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>消灭萨尔纳加构造体（1）</li>
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
    <?php $mission = "lockload"; ?>
    <p>任务目标是在天锁过载之前夺取所有天锁。将你和盟友的单位都移动到天锁附近即可开始占领，占领一座天锁需要 30 秒。</p>
    <p>敌人占领天锁时，过载计数便会开始。计数达到 9000 时任务失败。请注意，游戏中以百分比显示该进度。过载速度取决于敌方控制的天锁数量，详见下表。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>敌方控制的天锁</th>
                <th>每秒计数</th>
                <th>距离任务失败的时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>-</td>
            </tr>
            <tr>
                <td>1</td>
                <td>6</td>
                <td>25:00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>7</td>
                <td>21:25</td>
            </tr>
            <tr>
                <td>3</td>
                <td>8</td>
                <td>18:45</td>
            </tr>
            <tr>
                <td>4</td>
                <td>9</td>
                <td>16:40</td>
            </tr>
            <tr>
                <td>5</td>
                <td>10</td>
                <td>15:00</td>
            </tr>
        </tbody>
    </table>
    <p>通常首先占领中央天锁。这里防守非常薄弱，英雄单位一般即可清理。</p>
    <?php switcher_generator("lock_c") ?>
    <p>下一座通常是西侧或南侧天锁。下图为西侧天锁，请留意隐形或潜地单位。</p>
    <?php switcher_generator("lock_w") ?>
    <p>下图为南侧天锁，请留意主力舰。</p>
    <?php switcher_generator("lock_s") ?>
    <p>东侧天锁附近有混合体和高生命值单位，是较难占领的天锁之一。你需要从两条坡道中的一条向上推进才能抵达。</p>
    <p>如果选择从南侧坡道推进，该位置有一处小型敌军营地，如下图所示。请留意隐形单位。</p>
    <?php switcher_generator("lock_e_bottomcamp") ?>
    <p>如果选择从北侧坡道推进，那里同样有一处营地，但由两个混合体毁灭者把守。</p>
    <?php switcher_generator("lock_e_topcamp") ?>
    <p>东侧天锁由主力舰和一个混合体支配者严密把守。</p>
    <?php switcher_generator("lock_e") ?>
    <p>最后需要占领的是北侧天锁。与东侧天锁一样，它也有两条可供通行的坡道。南侧坡道由一小支部队把守。</p>
    <?php switcher_generator("lock_n_rampguard") ?>
    <p>如果选择从东侧坡道上去，则可以完全绕过上述部队。</p>
    <?php switcher_generator("lock_n") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/lockload/xelnagaconstruct.jpg" alt="萨尔纳加构造体">
    </div>
    <p>奖励目标要求你消灭萨尔纳加构造体。构造体由一小支敌方部队把守，如下图所示。</p>
    <?php switcher_generator("xelnagaconstruct") ?>
    <p>萨尔纳加构造体在游戏前期可能很难消灭。如果北侧天锁是最后一座要占领的天锁，通常在前往北侧天锁途中消灭构造体会轻松得多。</p>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方阵容</a>页面。</p>
    <p>敌方进攻波次会优先以特定天锁为目标。他们会选择清单上第一座由玩家控制的天锁；如果清单上的天锁均已过载（即由敌方控制），则会攻击你的基地。</p>
    <p>进攻波次时间、强度与科技等级以及目标天锁如下。其中“O”代表中央天锁。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>目标天锁检查顺序</th>
                <th>备注</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>4:00</td>
                <td>1</td>
                <td>3</td>
                <td>O</td>
                <td>来自左侧的单波</td>
            </tr>
            <tr>
                <td>2</td>
                <td>8:00</td>
                <td>2</td>
                <td>4</td>
                <td>S ⇨ O</td>
                <td>来自右侧的单波</td>
            </tr>
            <tr>
                <td>3</td>
                <td>11:00</td>
                <td>3</td>
                <td>5</td>
                <td>N ⇨ W ⇨ O<br>E ⇨ S ⇨ O</td>
                <td>双波</td>
            </tr>
            <tr>
                <td>4</td>
                <td>14:00</td>
                <td>3</td>
                <td>5</td>
                <td>W ⇨ O<br>S ⇨ O </td>
                <td>双波</td>
            </tr>
            <tr>
                <td>5</td>
                <td>17:00</td>
                <td>4</td>
                <td>6</td>
                <td>N ⇨ W ⇨ O<br>E ⇨ S</td>
                <td>双波</td>
            </tr>
        </tbody>
    </table>
    <p>第 5 波进攻之后，后续波次从第 19 分钟开始遵循下列固定模式。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>目标天锁检查顺序</th>
                <th>备注</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>19:00</td>
                <td>5</td>
                <td>6</td>
                <td>S<br>W</td>
                <td>双波</td>
            </tr>
            <tr>
                <td>21:00</td>
                <td>6</td>
                <td>6</td>
                <td>N ⇨ W<br>W ⇨ O</td>
                <td>双波</td>
            </tr>
            <tr>
                <td>23:00</td>
                <td>4</td>
                <td>6</td>
                <td>W ⇨ O ⇨ S<br>E ⇨ N</td>
                <td>双波</td>
            </tr>
            <tr>
                <td>25:00</td>
                <td>4</td>
                <td>6</td>
                <td>N ⇨ W<br>E ⇨ S</td>
                <td>双波</td>
            </tr>
        </tbody>
    </table>
    <p>上述模式会每 2 分钟无限重复。</p>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次在地图左右两侧各有两个集结点，游戏会选择最靠近目标的集结点。大多数情况下会选择北侧集结点；只有当波次最终以玩家基地为目标时，才会选择南侧集结点。</p>
    <p>地图左侧的集结点如下：</p>
    <img src="/images/missiondata/lockload/leftgatherpoints.jpg" alt="左侧集结点">
    <p>地图右侧的集结点如下：</p>
    <img src="/images/missiondata/lockload/rightgatherpoints.jpg" alt="右侧集结点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>在每座已占领的天锁旁布置防御建筑以提供视野，方便抵御进攻波次。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在已占领天锁的坡道和入口处布置剧毒巢穴，兼顾防守与获取生物质。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：在每座已占领的天锁旁放置一只潜地工蜂，为德哈卡的深槽虫道技能提供视野。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：用磁力地雷防守坡道和天锁入口。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：游戏开始时用亚顿之矛技能夺取扩张点。</li>
        <li><a href="/commanders/kerrigan">凯瑞甘</a>：在每座已占领的天锁旁放置欧米伽虫洞，利用机动性抵御进攻波次。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请用蜘蛛雷防守坡道和天锁入口。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请用蜘蛛雷防守坡道和天锁入口。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：菌毯铺开后，将被感染的移民营移动至扩张点，尽量缩短感染部队的行进时间。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：本任务中<i>不要</i>使用时间停止。该召唤技能会唤醒敌方 AI，使两侧基地不断生产单位并主动夺取天锁，从而显著提高任务难度。</li>
        <li><a href="/commanders/zagara">扎加拉</a>：将用于爆兵的孵化场建在中央天锁旁，以便快速增援。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：在每座已占领的天锁旁放置虚空阵列船，利用机动性抵御进攻波次。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
