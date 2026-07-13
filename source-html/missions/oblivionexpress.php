<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 湮灭快车</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：湮灭快车">
  <meta name="keywords" content="星际争霸 II 合作任务 湮灭快车 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/oblivionexpress">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>湮灭快车</h1>
    <p id="missionPlace">塔桑尼斯</p>
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
    <p>莫比斯军团正在用列车将不明货物运过塔桑尼斯地表。与盟友并肩作战，在列车逃脱前将其截停。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>摧毁莫比斯军团列车 (9)</li>
            <li>不得让 2 列列车逃脱</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>摧毁下方轨道上的高速列车</li>
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
    <?php $mission = "oblivionexpress"; ?>
    <p>正常游玩“湮灭快车”时，你无需攻入敌方基地。不过，如果想尽快完成任务，或是不想原地等待，可以推进至地图左侧的两个基地，蹲守列车生成点。</p>
    <p>主要目标会在上方或中间轨道生成，其行进路线如下所示。</p>
    <img src="/images/missiondata/oblivionexpress/mainobjectivepath.jpg" alt="主要目标的行进路线">
    <p>上方基地如下所示。</p>
    <?php switcher_generator("topbaselong") ?>
    <p>下方基地如下所示。</p>
    <?php switcher_generator("bottombaselong") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <p>奖励目标要求你摧毁两列在下方轨道生成的高速列车。它们的行进路线如下所示。</p>
    <img src="/images/missiondata/oblivionexpress/bonusobjectivepath.jpg" alt="奖励目标的行进路线">
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明参见<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>本任务有两类值得关注的时间点：</p>
    <ul>
        <li><b>列车时间：</b>列车的生成时间和位置。</li>
        <li><b>进攻波次：</b>以你的基地为目标的进攻波次。</li>
    </ul>
    <p>列车的生成时间、所在轨道，以及护卫部队的强度等级和科技等级如下。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>列车</th>
                <th>时间</th>
                <th>轨道</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>5:00</td>
                <td>上方</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>8:00</td>
                <td>中间</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>3</td>
                <td>11:00</td>
                <td>上方</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>4,5</td>
                <td>14:00</td>
                <td>上方/中间</td>
                <td>6</td>
                <td>6</td>
            </tr>
            <tr>
                <td>6</td>
                <td>17:00</td>
                <td>中间</td>
                <td>7</td>
                <td>6</td>
            </tr>
            <tr>
                <td>7,8</td>
                <td>20:00</td>
                <td>上方/中间</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>9</td>
                <td>23:00</td>
                <td>中间</td>
                <td>7</td>
                <td>7</td>
            </tr>
            <tr>
                <td>10</td>
                <td>25:00</td>
                <td>上方/中间</td>
                <td>7</td>
                <td>7</td>
            </tr>
        </tbody>
    </table>
    <p>进攻波次的生成时间、方向、强度等级和科技等级如下。方向表示进攻波次会从哪条斜坡推进。请注意，北侧进攻波次会以你的分矿为目标。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>进攻方向</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>4:00</td>
                <td>北</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>6:00</td>
                <td>南</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>7:00</td>
                <td>北</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>10:00</td>
                <td>南</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>13:00</td>
                <td>北</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>16:00</td>
                <td>北</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>7</td>
                <td>19:00</td>
                <td>南</td>
                <td>6</td>
                <td>6</td>
            </tr>
            <tr>
                <td>8</td>
                <td>22:00</td>
                <td>北</td>
                <td>7</td>
                <td>7</td>
            </tr>
            <tr>
                <td>9</td>
                <td>24:00</td>
                <td>南</td>
                <td>7</td>
                <td>7</td>
            </tr>
        </tbody>
    </table>
    <p>两个奖励目标会分别在 12:00 和 21:00 生成。</p>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次与护卫波次使用不同的生成点。</p>
    <p>进攻波次的集结点取决于其来袭方向。北侧集结点如下所示，实质上就是上方轨道的起点。</p>
    <img src="/images/missiondata/oblivionexpress/northerngatherpoint.jpg" alt="北侧集结点">
    <p>南侧集结点如下所示，实质上就是下方轨道的终点。</p>
    <img src="/images/missiondata/oblivionexpress/southerngatherpoint.jpg" alt="南侧集结点">
    <p>列车护卫在分散开来保护列车之前，都只会从一个位置生成。地面护卫的生成点就在地图上的小仓库外。包括空中单位在内的所有单位都会在这些仓库处生成，不过大约 8 秒后，空中单位会传送至不远处的空中生成点。</p>
    <p>上方轨道的护卫生成点如下。</p>
    <img src="/images/missiondata/oblivionexpress/topescortspawnpoint.jpg" alt="上方轨道护卫生成点">
    <p>中间轨道的护卫生成点如下。</p>
    <img src="/images/missiondata/oblivionexpress/midescortspawnpoint.jpg" alt="中间轨道护卫生成点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>如果选择修建静态防御，请将其建在主基地西侧、两条轨道相互靠近的区域。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在北侧斜坡外布置剧毒巢穴，将第一波敌军引入其中以获取生物质。</li>
        <li><a href="/commanders/artanis">阿塔尼斯</a>：如果本任务使用风暴战舰，可对每节车厢分别施放分解，从而叠加对整列列车造成的总伤害。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：如果使用穿刺者，强烈建议研究“软化”升级；它可以分别作用于每节车厢，从而叠加对整列列车造成的总伤害。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：每次列车生成时都可以使用一个顶栏技能摧毁护卫波次。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：研究凝固汽油弹升级的打击战斗机平台可以持续对列车造成伤害。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在中间轨道的集结点布置磁力地雷，以清除空中进攻波次。对星灵使用 2 组，对人类使用 3 组，对异虫使用 1 组。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：每次以 10 发攻击瞄准主矿岩石和高能瓦斯岩石之间的区域，即可清除分矿处的所有岩石。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：升级后的太阳能射线可以摧毁第一列列车。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：空中进攻波次传送至集结点时会挤在一起，可用轨道轰炸将其清除。</li>
        <li><a href="/commanders/swann">斯旺</a>：正确放置集中光束，便能在列车护卫刚生成、全部挤在一起时将其消灭。</li>
        <li><a href="/commanders/swann">斯旺</a>：位置正确的集中光束配合加满的宽度精通，可以用 1 次攻击摧毁第一列列车及其所有护卫。</li>
        <li><a href="/commanders/tychus">泰凯斯</a>：响尾蛇萨姆可以在每节车厢上分别安放爆破装药，是极佳的伤害输出来源。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
