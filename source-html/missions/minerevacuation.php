<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 疏散矿工</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：疏散矿工">
  <meta name="keywords" content="星际争霸 II 合作任务 疏散矿工 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/minerevacuation">
  <script src="/scripts/preload.js"></script>
  <?= startContent() ?>
    <h1><span class="unbold">任务：</span>疏散矿工</h1>
    <p id="missionPlace">贾尔班</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#evacShip">撤离船位置与顺序</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>凯莫瑞安联合体的一座偏远采矿殖民地正遭受感染肆虐。当地矿工工会领袖黛布拉·格林决心将矿工们安全撤离。击退埃蒙的军队与感染体，协助他们完成撤离。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>殖民船起飞时保护它们 (5)</li>
            <li>不得让 2 艘船被摧毁</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>消灭疫病使者 (1)</li>
            <li>摧毁根除者 (2)</li>
        </ul>
    <h2 id="evacShip">撤离船位置与顺序</h2>
    <?php $mission = "minerevacuation"; ?>
    <p>这张地图上没有敌方基地，因此无需分析基地。不过，船只会按半随机顺序起飞，你必须推进并清理若干小型敌方营地。</p>
    <p>地图上共有 9 艘船，其位置如下所示。</p>
    <img src="/images/missiondata/minerevacuation/evacuationshiplocations.jpg" alt="撤离船的位置">
    <p>在残酷难度下，1 号船会在游戏开始时自动被摧毁。</p>
    <p>接下来，2、3 或 6 号船中的一艘会被摧毁。各艘船被摧毁的概率如下。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>船只</th>
                <th>被摧毁概率</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>40%</td>
            </tr>
            <tr>
                <td>3</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>6</td>
                <td>40%</td>
            </tr>
        </tbody>
    </table>
    <p>随后，4、7 或 9 号船中的一艘会被摧毁。各艘船被摧毁的概率如下。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>船只</th>
                <th>被摧毁概率</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>4</td>
                <td>33%</td>
            </tr>
            <tr>
                <td>7</td>
                <td>33%</td>
            </tr>
            <tr>
                <td>9</td>
                <td>33%</td>
            </tr>
        </tbody>
    </table>
    <p>游戏开始时，船只会被分配起飞优先级。这决定了你发射船只时地图上信标出现的顺序。该顺序为半随机，具体如下。请注意，已被摧毁的船只会被跳过，系统将选择下一艘。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>顺序</th>
                <th>船只</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3,4,5</td>
                <td>2,5,6<br>2,6,5<br>5,2,6<br>6,2,5</td>
            </tr>
            <tr>
                <td>6,7</td>
                <td>4,9<br>9,4</td>
            </tr>
            <tr>
                <td>8</td>
                <td>8</td>
            </tr>
            <tr>
                <td>9</td>
                <td>7</td>
            </tr>
        </tbody>
    </table>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/minerevacuation/blightbringer.jpg" alt="疫病使者">
        <img src="/images/missiondata/minerevacuation/eradicator.jpg" alt="根除者">
        <img src="/images/missiondata/minerevacuation/eradicator.jpg" alt="根除者">
    </div>
    <p>地图上有两个奖励目标。第一个要求你消灭疫病使者。疫病使者拥有寄生炸弹攻击，因此如果选择用空军与之交战，请密切注意部队。地面部队则很容易遭受其喷吐攻击，同样需要持续关注。</p>
    <p>根除者要危险得多。其中一个会发动对空攻击，并通过地面上的多个圆形标记指示目标；另一个会沿直线造成伤害，足以重创地面部队。最好使用空中单位迎战根除者，以免损失整支军队。</p>
    <p>疫病使者（黄色）和根除者（绿色）的位置如下所示。</p>
    <img src="/images/missiondata/minerevacuation/bonusobjectivelocations.jpg" alt="奖励目标的位置">
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明参见<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>本任务有三类值得关注的时间点：</p>
    <ul>
        <li><b>进攻波次：</b>以你的主基地和分矿为目标的进攻波次。</li>
        <li><b>恐慌事件：</b>若船只未在规定时间内发射，它们会陷入恐慌并强制起飞。</li>
        <li><b>夺船波次：</b>被派往攻击特定船只的进攻波次。</li>
    </ul>
    <p>进攻波次的时间、强度等级和科技等级如下所示。</p>
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
                <td>6:30</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>13:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>17:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>4</td>
                <td>23:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>5</td>
                <td>26:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>7</td>
                <td>28:00</td>
                <td>6</td>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
                <td>32:00</td>
                <td>6</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
    <p>如果船只未能及时发射，其中一艘会开始恐慌并强制起飞，迫使玩家更积极地推进。提前发射一艘船会取消对应的恐慌计时，这可用于避开更难防守的船只。恐慌时间如下。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>船只</th>
                <th>恐慌时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3:45</td>
            </tr>
            <tr>
                <td>2</td>
                <td>12:00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>16:30</td>
            </tr>
            <tr>
                <td>4</td>
                <td>23:30</td>
            </tr>
            <tr>
                <td>5</td>
                <td>27:00</td>
            </tr>
            <tr>
                <td>6</td>
                <td>29:00</td>
            </tr>
            <tr>
                <td>7</td>
                <td>29:30</td>
            </tr>
        </tbody>
    </table>
    <p>夺船波次会以船只为目标并试图将其摧毁。这些波次的时间、强度等级和科技等级如下。</p>
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
                <td>8:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>15:12</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>19:18</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>19:24</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>26:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <p>奖励目标会在 9:00 和 15:00 出现。疫病使者有 66% 的概率先出现。</p>
    <h2 id="spawnPoints">出生点</h2>
    <p>所有进攻波次和夺船波次都从地图边缘生成。进攻波次有三个生成点，夺船波次则有九个，因此几乎无法通过蹲守生成点来提前消灭波次。</p>
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>留意小地图上的夺船波次；它们可能在你没有察觉时摧毁船只。</li>
        <li>不要用整支地面部队迎战根除者，其中一个根除者拥有致命的对地攻击。</li>
        <li>第一波之后的所有进攻波次都会攻击你的分矿，请确保那里有充足的防御。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/kerrigan">凯瑞甘</a>：使用欧米伽虫洞快速增援部队，并为被感染的女妖提供反隐。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：菌毯铺开后，将被感染的移民营移到分矿，以缩短感染体的行进时间。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：时间停止也会延缓船只的发射流程。它冻结地图上所有事物的同时，船只的发射倒计时也会在时间停止持续期间暂停。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：使用虚空阵列船快速增援部队。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
