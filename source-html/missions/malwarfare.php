<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 恶意代码</title>
  <meta name="description" content="《星际争霸 II》合作任务“恶意代码”攻略">
  <meta name="keywords" content="星际争霸 合作模式 攻略 恶意代码 任务">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/malwarfare">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>恶意代码</h1>
    <p id="missionPlace">净化者设施</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#towerOrder">压制塔顺序</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>很久以前，这座星灵设施曾被用于将伟大战士的人格转化为名为净化者的 AI。研究人员曾在一名塔达林囚犯身上测试这一过程，但其失控的人格开始攻击设施。现在，净化者守护者奥拉娜正试图夺回控制权。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>不要让奥拉娜的运输船被摧毁</li>
            <li>净化安全终端（5）</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>下载 AI 人格（6）</li>
        </ul>
    <h2 id="towerOrder">压制塔顺序</h2>
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
    <?php $mission = "malwarfare"; ?>
    <p>你要攻下的第一处营地位于扩张点上方。“恶意代码”中两名玩家的扩张点都有防御建筑和少量单位驻守。</p>
    <?php switcher_generator("expo") ?>
    <p>奥拉娜的运输船会在各终端之间移动并逐一净化。净化终端需要 2:45。你的目标是保护运输船免受进攻波次和压制塔的攻击。每净化一个终端，运输船都会恢复最多 5,000 点已损失生命值。</p>
    <p>压制塔每次齐射对奥拉娜的运输船造成 240 点伤害，该技能冷却时间为 6 秒。</p>
    <p>此外还有两个计时机制。玩家与压制塔交战后，它会停止攻击奥拉娜 30 秒，随后恢复攻击。如果玩家未能在压制塔刷新后的三分钟内摧毁它，它将每 2 秒攻击一次奥拉娜的运输船。</p>
    <p>第一个终端就是任务开始时奥拉娜所在的位置，不会刷新压制塔发动攻击。</p>
    <p>第二个终端会刷新一座压制塔。下图显示压制塔的潜在刷新点，这些位置只有少量单位和防御建筑驻守。</p>
    <img src="/images/missiondata/malwarfare/sec2towers.jpg" alt="终端 2 压制塔位置">
    <p>第三个终端会刷新两座压制塔。刷新点有两种可能模式（用不同颜色表示）。实心区域表示最先刷新的压制塔，连线表示随后刷新的压制塔。</p>
    <img src="/images/missiondata/malwarfare/sec3towers.jpg" alt="终端 3 压制塔位置">
    <p>第四个终端会刷新三座压制塔。刷新点有两种可能模式（用不同颜色表示）。实心区域表示最先刷新的压制塔，连线表示随后刷新的压制塔。</p>
    <img src="/images/missiondata/malwarfare/sec4towers.jpg" alt="终端 4 压制塔位置">
    <p>第五个终端会刷新四座压制塔。刷新点有两种可能模式（用不同颜色表示）。实心区域表示最先刷新的压制塔，连线表示随后刷新的压制塔。</p>
    <img src="/images/missiondata/malwarfare/sec5towers.jpg" alt="终端 5 压制塔位置">
    <p>下方视频展示了压制塔各刷新模式的顺序：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/D8lznL2PorU" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <p>压制塔拥有两项技能：</p>
    <ul>
        <li>多目标锁定：对瞄准圈内所有敌方单位造成 40 点伤害，并使其攻击速度和移动速度降低 50%，持续 4 秒</li>
        <li>单目标锁定：对瞄准圈内所有敌方单位造成 150 点伤害</li>
    </ul>
    <h2 id="bonus">完成奖励目标</h2>
    <p>奖励目标要求你从地图上的两个信标处各下载三个人工智能人格。这是唯一需要消耗资源才能完成的奖励目标。下载每个人格需要 350 晶体矿和 100 高能瓦斯，因此完成单个目标的全部下载需要 1050 晶体矿和 300 高能瓦斯。目标会在开始后整整 4 分钟时失效。每个信标都有敌方单位和防御建筑把守。</p>
    <p>第一个信标如下。</p>
    <?php switcher_generator("beacon1") ?>
    <p>第二个信标如下。</p>
    <?php switcher_generator("beacon2") ?>
    <p>请注意，开始下载第一个 AI 人格时，会刷新三波敌军试图摧毁目标。清理这些波次后，只要拥有视野即可完成余下下载。</p>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方阵容</a>页面。</p>
    <p>本节列出三类时间：</p>
    <ul>
        <li><b>压制塔时间：</b>每座压制塔的刷新时间。</li>
        <li><b>骚扰波次时间：</b>奥拉娜净化各终端时攻击其运输船的小规模波次。</li>
        <li><b>进攻波次时间：</b>以你的基地为目标的进攻波次。</li>
    </ul>
    <p>压制塔刷新时间如下。所有时间均为终端完成净化前的倒计时剩余时间。</p>
    <p>终端 2：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>压制塔</th>
                <th>剩余时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1:00</td>
            </tr>
        </tbody>
    </table>
    <p>终端 3：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>压制塔</th>
                <th>剩余时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1:55</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1:20</td>
            </tr>
        </tbody>
    </table>
    <p>终端 4：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>压制塔</th>
                <th>剩余时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1:15</td>
            </tr>
            <tr>
                <td>3</td>
                <td>0:33</td>
            </tr>
        </tbody>
    </table>
    <p>终端 5：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>压制塔</th>
                <th>剩余时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1:35</td>
            </tr>
            <tr>
                <td>3+4</td>
                <td>0:55</td>
            </tr>
        </tbody>
    </table>
    <p>骚扰波次刷新时间如下。所有时间均为终端完成净化前的倒计时剩余时间。</p>
    <p>终端 2：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>剩余时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:25</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1:35</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>1:00</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>0:20</td>
                <td>1</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <p>终端 3：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>剩余时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:30</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2:15</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1:40</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>1:20</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>1:00</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>0:41</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>7</td>
                <td>0:20</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <p>终端 4：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>剩余时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:25</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1:40</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1:10*</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>4</td>
                <td>0:55</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>0:28**</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>0:15</td>
                <td>4</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
    <p>*仅适用于上图蓝色模式。</p>
    <p>**仅适用于上图黄色模式。</p>
    <p>终端 5：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>剩余时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1:55</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1:30</td>
                <td>5</td>
                <td>4</td>
            </tr>
            <tr>
                <td>4</td>
                <td>0:22</td>
                <td>5</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>0:50</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>0:30</td>
                <td>5</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
    <p>进攻波次的机制略有不同。第一波进攻<i>必定</i>在 3:36 出现。</p>
    <p>后续两波进攻则会在运输船抵达地图上的特定位置时触发。下方小地图标出了触发第二和第三波进攻的位置。</p>
    <img src="/images/missiondata/malwarfare/attackwavetriggers.jpg" alt="进攻波次触发位置">
    <p>这些进攻波次的强度与科技等级如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>进攻波次</th>
                <th>科技等级</th>
                <th>强度等级</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>骚扰波次与进攻波次的刷新点不同。骚扰波次会从终端区域内的随机位置生成。</p>
    <p>进攻波次则有固定数量的刷新位置。进攻波次 1 和 2 的潜在刷新点相同，如下图所示。</p>
    <img src="/images/missiondata/malwarfare/wave12spawnpoint.jpg" alt="进攻波次 1 和 2 的刷新点">
    <p>进攻波次 3 只有一个刷新点，如下图所示。</p>
    <img src="/images/missiondata/malwarfare/wave3spawnpoint.jpg" alt="进攻波次 3 的刷新点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>奥拉娜的运输船移动时请密切留意。敌方单位攻击会使其减速，让敌人有更多时间造成伤害。</li>
        <li>每个终端结束时，奥拉娜的运输船不会直接恢复全部生命值；每个终端总计恢复 5000 点生命值。</li>
        <li>为奖励目标下载人格时，只会有三波间隔很短的敌军刷新。清理这些进攻波次后，只需保持视野即可完成其余下载，无需布置防御。</li>
        <li>提前清理运输船前方区域，是确保其免受伤害并尽快完成任务的最佳方法。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在扩张点营地外布置剧毒巢穴，再引诱敌方单位踩中，以便前期获取生物质。</li>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在进攻波次及压制塔守军的刷新位置布置剧毒巢穴，以削弱它们。</li>
        <li><a href="/commanders/alarak">阿拉纳克</a>：（有风险）让探机从晶体矿区后方偷偷下去，建造水晶塔并对其使用结构过载，以便前期夺取扩张点。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在进攻波次及压制塔守军的刷新位置布置磁力地雷，以削弱它们。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：压制塔不是英雄单位，因此空间站重新部署会对其造成全额伤害。这样可以立即摧毁第一座压制塔，并显著削减其他压制塔的生命值。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：游戏开始时用亚顿之矛技能夺取扩张点。</li>
        <li><a href="/commanders/kerrigan">凯瑞甘</a>：在每个压制塔刷新位置外放置欧米伽虫洞，以便快速抵达。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请在进攻波次及压制塔守军的刷新位置布置蜘蛛雷，以削弱它们。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请在进攻波次及压制塔守军的刷新位置布置蜘蛛雷，以削弱它们。</li>
        <li><a href="/commanders/stetmann">斯台特曼</a>：安全终端之间的距离可能太远，因此可在附近建造孵化场，作为铺设艾星的起点。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：建造第 3 座指挥中心，将其扎根在第二个终端附近以铺设菌毯。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：虚空抑制晶体可以延迟压制塔刷新。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：在每个压制塔刷新位置外放置虚空阵列船，以便快速抵达。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
