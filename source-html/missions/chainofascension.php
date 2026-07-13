<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 升格之链</title>
  <meta name="description" content="《星际争霸 II》合作任务“升格之链”攻略">
  <meta name="keywords" content="星际争霸 合作模式 攻略 升格之链 任务">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/chainofascension">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>升格之链</h1>
    <p id="missionPlace">斯雷恩</p>
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
    <p>埃蒙企图通过升格之链重新掌控塔达林。协助第一升格者吉娜拉进行拉克希尔仪式，让她击败埃蒙的勇士。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>将埃蒙的勇士推入献祭之坑。</li>
            <li>吉娜拉不能被击败。</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>消灭斯雷恩元素生物（2）</li>
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
    <?php $mission = "chainofascension"; ?>
    <p>你要攻下的第一处营地位于扩张点上方。两名玩家的扩张点都有防御建筑和少量单位驻守。面对异虫阵容时，请留意潜地的雷兽。</p>
    <?php switcher_generator("expo") ?>
    <p>下一处需要占领的营地位于两个扩张点之间，仅有少量防御建筑和地面单位驻守。</p>
    <?php switcher_generator("camp1") ?>
    <p>占领这处营地后不久，第 1 批混合体便会刷新。基地本身防守薄弱，但混合体出现时会带有护卫部队。通常建议在混合体波次刷新<i>之前</i>清理该基地。</p>
    <?php switcher_generator("hybrid1") ?>
    <p>吉娜拉继续前进时，第 2 批混合体会刷新。基地前方有防御建筑把守，后方也有一些（但清理混合体刷新点时无需理会），中部基本空置。与往常一样，混合体会带着护卫部队出现。</p>
    <?php switcher_generator("hybrid2") ?>
    <p>下一处需要清理的是地图中央戒备森严的营地，其中遍布施法单位和高生命值单位。</p>
    <?php switcher_generator("camp2") ?>
    <p>把吉娜拉推进到营地中心之后，第 3 波混合体会刷新。基地本身防守不强，但混合体带来的护卫部队实力很强。在恰当位置使用范围伤害可以迅速清理这一区域。</p>
    <?php switcher_generator("hybrid3") ?>
    <p>最后一处需要处理的营地包含高科技单位。不过此时两名玩家通常都已拥有强大的部队，因此进攻起来反而较为容易。</p>
    <?php switcher_generator("camp3") ?>
    <p>清理这处营地后，吉娜拉一旦抵达触发位置，最后一批混合体就会在献祭之坑后方刷新。那里没有防御建筑或守军，因此无法提前清理；但护卫部队会密集刷新在狭小区域内，交战难度相对较高。</p>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/chainofascension/slaynelemental.jpg" alt="斯雷恩元素生物">
        <img src="/images/missiondata/chainofascension/slaynelemental.jpg" alt="斯雷恩元素生物">
    </div>
    <p>奖励目标要求你消灭两个会显示在小地图上的斯雷恩元素生物。第一个始终在绿色标记位置刷新；第二个会在两个蓝色标记位置之一刷新。刷新点如下所示：</p>
    <img src="/images/missiondata/chainofascension/slaynelementalminimap.jpg" alt="斯雷恩元素生物刷新位置小地图">
    <p>斯雷恩元素生物是空中单位，因此只有能够对空的单位才能攻击它们。它们会施放一种技能（地面上会显示范围标记），将你的部队困在太阳能茧中。茧会缓慢伤害被困的单位，但其他部队可以将其摧毁。</p>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方阵容</a>页面。</p>
    <p>随着吉娜拉被向前推进，混合体会带着护卫部队在地图各处刷新。吉娜拉到达地图上的特定位置时会触发混合体，如下图所示：</p>
    <img src="/images/missiondata/chainofascension/hybridtriggerlocations.jpg" alt="混合体触发位置">
    <p>不过，如果玩家选择推迟推进吉娜拉，无论她位于地图何处，混合体波次都会在特定时间自动刷新。这些时间为：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>刷新时间（分钟）</th>
                <th>护卫部队科技等级</th>
                <th>护卫部队强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>9</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>15</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>3</td>
                <td>23</td>
                <td>6</td>
                <td>6</td>
            </tr>
            <tr>
                <td>4</td>
                <td>30</td>
                <td>6</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
    <p>游戏开始时，为协助埃蒙的勇士推进而刷新的混合体可能采用以下组合：</p>
    <table>
        <thead>
            <tr>
                <th>首领</th>
                <th>护卫 1</th>
                <th>护卫 2</th>
                <th>概率</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>混合体支配者</td>
                <td>混合体掠夺者</td>
                <td>混合体掠夺者</td>
                <td>11%</td>
            </tr>
            <tr>
                <td>混合体支配者</td>
                <td>混合体掠夺者</td>
                <td>混合体天罚者</td>
                <td>11%</td>
            </tr>
            <tr>
                <td>混合体支配者</td>
                <td>混合体天罚者</td>
                <td>混合体天罚者</td>
                <td>11%</td>
            </tr>
            <tr>
                <td>混合体巨兽</td>
                <td>混合体毁灭者</td>
                <td>混合体毁灭者</td>
                <td>22%</td>
            </tr>
            <tr>
                <td>混合体巨兽</td>
                <td>混合体毁灭者</td>
                <td>混合体天罚者</td>
                <td>22%</td>
            </tr>
            <tr>
                <td>混合体巨兽</td>
                <td>混合体天罚者</td>
                <td>混合体天罚者</td>
                <td>22%</td>
            </tr>
        </tbody>
    </table>
    <p>各次混合体波次中每种混合体的刷新数量如下：</p>
    <table>
        <thead>
            <tr>
                <th>波次</th>
                <th>首领</th>
                <th>护卫 1</th>
                <th>护卫 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2</td>
                <td style="text-align:center" colspan="2">5*</td>
            </tr>
            <tr>
                <td>4</td>
                <td>3</td>
                <td style="text-align:center" colspan="2">2/1/4**</td>
            </tr>
        </tbody>
    </table>
    <p>* 将逐个选出 5 个混合体护卫，每次有 33% 的概率选择护卫 2，66% 的概率选择护卫 1。</p>
    <p>**先加入 2 个混合体护卫 1 和 1 个混合体护卫 2；随后再逐个选出 4 个护卫，每次有 33% 的概率选择护卫 2，66% 的概率选择护卫 1。</p>
    <p>如果第 4 波混合体后任务仍未完成，此后每 5 分钟都会有更多混合体波次在同一位置刷新。</p>
    <p>由于这张地图的机制，地图上会出现两类波次：</p>
    <ul>
        <li><b>进攻波次</b>：目标为玩家基地的强大部队，整场任务中出现频率较低。</li>
        <li><b>护送波次</b>：用于将吉娜拉推回去的小规模部队，整场任务中频繁出现。</li>
    </ul>
    <p>进攻波次会随机选择一名玩家（或选择难度更高的玩家），首先从该玩家一侧发起进攻。随后两名玩家会轮流遭到攻击，直至开始刷新双波次。</p>
    <p>本任务的进攻波次时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>类型</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3:30</td>
                <td>2</td>
                <td>2</td>
                <td>单波</td>
            </tr>
            <tr>
                <td>2</td>
                <td>7:00</td>
                <td>5</td>
                <td>5</td>
                <td>单波</td>
            </tr>
            <tr>
                <td>3</td>
                <td>11:00</td>
                <td>4</td>
                <td>4</td>
                <td>单波</td>
            </tr>
            <tr>
                <td>4</td>
                <td>14:00</td>
                <td>5</td>
                <td>5</td>
                <td>单波</td>
            </tr>
            <tr>
                <td>5</td>
                <td>18:00</td>
                <td>4</td>
                <td>4</td>
                <td>双波</td>
            </tr>
            <tr>
                <td>6</td>
                <td>21:30</td>
                <td>7</td>
                <td>5</td>
                <td>双波</td>
            </tr>
            <tr>
                <td>7</td>
                <td>25:30</td>
                <td>7</td>
                <td>6</td>
                <td>双波</td>
            </tr>
        </tbody>
    </table>
    <p>注意：每次混合体刷新都会让此后的所有进攻波次推迟 2 分钟。</p>
    <p>本任务的护送波次时间如下：</p>
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
                <td>3:30</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>5:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>3</td>
                <td>7:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>9:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>11:00</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>12:00</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>7</td>
                <td>13:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>15:00</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>16:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>10</td>
                <td>16:30</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>11</td>
                <td>17:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>12</td>
                <td>18:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>13</td>
                <td>19:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>14</td>
                <td>20:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>15</td>
                <td>20:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>16</td>
                <td>21:30</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>17</td>
                <td>22:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>18</td>
                <td>23:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>19</td>
                <td>24:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>20</td>
                <td>25:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>21</td>
                <td>25:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>22</td>
                <td>26:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>23</td>
                <td>27:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
    <p>注意：每次混合体刷新都会让此后的所有护送波次推迟 2 分钟。</p>
    <p>如果你选择将任务拖到 28:30 之后，余下游戏中会不断重复以下模式：</p>
    <ul>
        <li>护送波次 #20</li>
        <li>护送波次 #21</li>
        <li>混合体刷新</li>
        <li>护送波次 #22</li>
        <li>护送波次 #23</li>
        <li>进攻波次 #7</li>
    </ul>
    <p>斯雷恩元素生物的刷新时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>元素生物</th>
                <th>刷新时间（分钟）</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>元素生物 1</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>元素生物 2</td>
                <td>16:00</td>
            </tr>
        </tbody>
    </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次与护送波次的刷新点不同。</p>
    <p>单波进攻会随机选择一名玩家进行攻击。请注意，如果你的游戏难度高于盟友，你会首先遭到攻击。下一波将攻击另一名玩家，双方轮流受袭，直到双波次开始出现并同时攻击两名玩家。只要埃蒙在某名玩家一侧仍有单位或建筑，进攻波次就会从该侧刷新（下图刷新点 #1 或 #2）；否则会从刷新点 #3 出现。</p>
    <p>进攻波次的刷新位置如下。</p>
    <p>进攻波次刷新位置 1：</p>
    <img src="/images/missiondata/chainofascension/atkwavespawn1.jpg" alt="进攻波次刷新位置 1">
    <p>进攻波次刷新位置 2：</p>
    <img src="/images/missiondata/chainofascension/atkwavespawn2.jpg" alt="进攻波次刷新位置 2">
    <p>进攻波次刷新位置 3：</p>
    <img src="/images/missiondata/chainofascension/atkwavespawn3.jpg" alt="进攻波次刷新位置 3">
    <p>护送波次的刷新点取决于吉娜拉在任务中到达的最远位置。护送波次最初从下图位置 #1 刷新，抵达相应切换点后依次改为位置 #2 和 #3。切换点如下：</p>
    <img src="/images/missiondata/chainofascension/escortchangeover.jpg" alt="护送波次刷新点切换位置">
    <p>护送波次的刷新位置如下。</p>
    <p>护送波次刷新位置 1：</p>
    <img src="/images/missiondata/chainofascension/escortwavespawn1.jpg" alt="护送波次刷新位置 1">
    <p>护送波次刷新位置 2：</p>
    <img src="/images/missiondata/chainofascension/escortwavespawn2.jpg" alt="护送波次刷新位置 2">
    <p>护送波次刷新位置 3：</p>
    <img src="/images/missiondata/chainofascension/escortwavespawn3.jpg" alt="护送波次刷新位置 3">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>用工蜂、探机或 SCV 推进吉娜拉，同时让你的部队提前清理基地并处理进攻波次和护送波次。</li>
        <li>考虑到前期进度，本任务的第 2 波进攻极其强大。请为该波次保留召唤技能。</li>
        <li>尽早触发第 1 批混合体，以推迟致命的第 2 波进攻。</li>
        <li>第 4 波进攻之后的所有波次都是同时攻击两名玩家基地的双波次。</li>
        <li>星灵单位靠近吉娜拉时，护盾恢复速度会提高。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在触发混合体之前，将剧毒巢穴布置在混合体刷新位置，以削弱护卫部队。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在触发混合体之前，将磁力地雷布置在混合体刷新位置，以削弱护卫部队。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请提前在混合体刷新位置布置蜘蛛雷，以削弱护卫部队。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请提前在混合体刷新位置布置蜘蛛雷，以削弱护卫部队。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：让被感染的移民营与吉娜拉保持几格距离，最大限度发挥感染部队的作用。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：可在最后一个混合体触发位置之前使用时间停止，完全跳过第 4 批混合体并完成任务。参见下方视频。</li>
        <iframe width="475" height="268" src="https://www.youtube.com/embed/__D3Y5DliVM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <li><a href="/commanders/zagara">扎加拉</a>：建造 1 只腐化者，先对斯雷恩元素生物施加腐化，再让爆蚊撞向它。</li>
        <li><a href="/commanders/zagara">扎加拉</a>：将用于爆兵的孵化场建在扩张点，以便快速增援。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
