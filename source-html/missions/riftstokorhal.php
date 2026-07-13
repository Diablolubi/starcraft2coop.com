<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 克哈裂痕</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：克哈裂痕">
  <meta name="keywords" content="星际争霸 II 合作任务 克哈裂痕 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/riftstokorhal">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>克哈裂痕</h1>
    <p id="missionPlace">克哈</p>
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
    <p>奥古斯特格勒的帝国辖区内遍布虚空裂隙。你们必须齐心协力，在混合体大军压垮防线之前摧毁这些裂隙。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>摧毁所有虚空碎片 (10)</li>
            <li>不得让虚空碎片激活</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>摧毁海盗船 (2)</li>
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
    <?php $mission = "riftstokorhal"; ?>
    <p>随着虚空碎片不断生成，你需要攻入敌方营地和基地将其摧毁。虚空碎片依次出现时，通常会遇到以下顺序的基地和营地。只有上一组虚空碎片被摧毁，或该区域内的所有敌人都被消灭后，下一组虚空碎片才会生成。</p>
    <p>第一个虚空碎片只有一小股敌军把守，防御如下：</p>
    <?php switcher_generator("shard1") ?>
    <p>第二组虚空碎片由规模大得多的敌军把守，防御如下：</p>
    <?php switcher_generator("shard2long") ?>
    <p>如果选择用地面部队攻击第三组虚空碎片，就必须先攻破一座敌方营地。请注意，空中单位可以完全绕过这座营地。营地如下：</p>
    <?php switcher_generator("shard3camp") ?>
    <p>第三组虚空碎片位于一座敌方基地内，基地如下：</p>
    <?php switcher_generator("shard3long") ?>
    <p>最后一组虚空碎片位于一座大得多的敌方基地内，基地前方还有一小股前沿部队。具体如下：</p>
    <?php switcher_generator("shard4long") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/riftstokorhal/pirateship.jpg" alt="海盗船">
        <img src="/images/missiondata/riftstokorhal/pirateship.jpg" alt="海盗船">
    </div>
    <p>奖励目标要求你摧毁两艘会在小地图上出现的海盗船。第一艘总是在绿色标记处生成，第二艘总是在蓝色标记处生成。生成点如下：</p>
    <img src="/images/missiondata/riftstokorhal/piratespawnlocations.jpg" alt="海盗船生成位置">
    <p>海盗船拥有两种技能：</p>
    <ul>
        <li><b>震荡冲击：</b>使海盗船周围所有被命中的非英雄单位失去行动能力。受影响的单位无法移动、攻击或使用技能。</li>
        <li><b>轰炸：</b>沿直线造成大量伤害。若不谨慎应对，这个技能通常足以消灭整支部队。</li>
    </ul>
    <p>第一艘海盗船生成时无人守卫，第二艘则出现在一座敌方基地后方。该基地如下：</p>
    <?php switcher_generator("piratebase") ?>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明参见<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>本任务的进攻波次时间为：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>备注</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:00</td>
                <td>1</td>
                <td>1</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>5:00</td>
                <td>2</td>
                <td>2</td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>8:00</td>
                <td>3</td>
                <td>3</td>
                <td>如果只开了一处分矿，则以该分矿为目标。<br>
                    否则随机选择一处分矿。
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>11:00</td>
                <td>4</td>
                <td>4</td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>14:00</td>
                <td>5</td>
                <td>5</td>
                <td>以另一处分矿为目标</td>
            </tr>
            <tr>
                <td>6</td>
                <td>17:00</td>
                <td>6</td>
                <td>6</td>
                <td></td>
            </tr>
            <tr>
                <td>7</td>
                <td>20:30</td>
                <td>7</td>
                <td>7</td>
                <td></td>
            </tr>
            <tr>
                <td>8</td>
                <td>24:30</td>
                <td>7</td>
                <td>7</td>
                <td></td>
            </tr>
            <tr>
                <td>9</td>
                <td>26:30</td>
                <td>7</td>
                <td>7</td>
                <td></td>
            </tr>
            <tr>
                <td>10</td>
                <td>28:30</td>
                <td>7</td>
                <td>7</td>
                <td></td>
            </tr>
            <tr>
                <td>11</td>
                <td>30:00</td>
                <td>7</td>
                <td>7</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <p>第一艘海盗船会在 11:40 生成。</p>
    <p>满足以下任一条件时，第二艘海盗船会生成：</p>
    <ul>
        <li>任务时间达到 18:50</li>
    </ul>
    <p>或</p>
    <ul>
        <li>最后一组虚空碎片已激活</li>
    </ul>
    <p>或</p>
    <ul>
        <li>海盗基地内超过 25% 的敌人已被消灭。</li>
    </ul>
    <h2 id="spawnPoints">出生点</h2>
    <p>任务开始时，可以通过观察菌毯（异虫），或检查玩家 1 的分矿处是否存在星灵箱子（星灵），来准确识别敌方种族。演示视频如下：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/UXv5i-Ttz1A" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <p>所有进攻波次共用一个生成点。该生成点位于斜坡顶端，紧邻容纳最后一组虚空碎片的基地，其位置如下：</p>
    <img src="/images/missiondata/riftstokorhal/attackwavespawnpoint.jpg" alt="进攻波次生成点">
    <p>虽然蹲守这个生成点相当困难，但大多数进攻波次都会沿同一条路线行动：到达斜坡底部后立即左转，再沿狭窄通道前往地图中央。由于这座基地不在玩家完成任务必须清理的路线上，通常不会有人将其清除。请注意，如果选择清理这座基地，进攻波次可能会被迫在更靠近基地后方（地图边缘）的位置生成。</p>
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>所有进攻波次都从同一位置生成，因此非常容易防守。</li>
        <li>可以用空中单位绕过最后两组虚空碎片外围的防御。</li>
        <li>本地图的第一波敌军来得异常早，在大多数英雄登场前就会生成。务必准备足够的防御来应对。具体技巧见下一节。</li>
    </ul>
    <h3>应对第一波进攻</h3>
    <p>本任务的第一波敌军在 2:00 生成，这意味着大多数部队会在 2:35 至 2:50 之间抵达主基地，远早于大多数英雄单位登场。各指挥官可采用以下方式应对：</p>
    <ul>
        <li>雷诺：快速建造兵营，再修建地堡并装入四名陆战队员</li>
        <li>凯瑞甘：在斜坡拐角修建孵化场，并在后方放置两座脊针爬虫</li>
        <li>阿塔尼斯：折跃狂热者 + 轨道轰炸</li>
        <li>斯旺：根据敌方部队组合选择爆破比利或烈焰贝蒂（提前用 SCV 侦察）</li>
        <li>扎加拉：使用爆虫巢穴免费生成的爆虫</li>
        <li>沃拉尊：用传送门承受伤害，然后使用暗影卫队</li>
        <li>凯拉克斯：轨道轰炸</li>
        <li>阿巴瑟：剧毒巢穴</li>
        <li>阿拉纳克：建筑超载</li>
        <li>诺娃：用兵营和重工厂堵住隘口，然后使用轨道炮台</li>
        <li>斯托科夫：地堡 + 感染建筑</li>
        <li>菲尼克斯：快速召唤你偏好的智能人格英雄（推荐卡尔达利斯）</li>
        <li>德哈卡：使用英雄单位</li>
        <li>汉与霍纳：磁力地雷</li>
        <li>泰凯斯：在泰凯斯登场前用建筑承受伤害</li>
        <li>泽拉图：军团支援技能</li>
        <li>斯台特曼：在斜坡拐角修建孵化场，并在后方放置两座脊针爬虫</li>
        <li>蒙斯克：空投补给地堡</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在主基地斜坡上布置剧毒巢穴，应对早期进攻波次。</li>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在通往地图中央的狭窄通道出口附近布置剧毒巢穴，以削弱或消灭进攻波次。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：只要不被海盗船的冲锋攻击命中，达克伦就能将其摧毁。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：如果把握好时机，让达克伦冲过裂谷，单个达克伦就能摧毁<i>两艘</i>海盗船。演示视频如下：
        <iframe width="475" height="268" src="https://www.youtube.com/embed/vtEeBmEFLt0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在通往地图中央的狭窄通道出口附近布置磁力地雷，以削弱或消灭进攻波次。</li>
        <li><a href="/commanders/mengsk">蒙斯克</a>：在虚空碎片组 #3 与 #4 之间的斜坡顶端空投帝国战士（需研究相应升级），然后建造裂地者，清除地图上的所有虚空碎片。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请在通往地图中央的狭窄通道出口附近布置蜘蛛雷，以削弱或消灭进攻波次。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请在通往地图中央的狭窄通道出口附近布置蜘蛛雷，以削弱或消灭进攻波次。</li>
        <li><a href="/commanders/swann">斯旺</a>：集中光束可以用来应对所有进攻波次，位置正确时甚至能将整波敌军彻底消灭。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
