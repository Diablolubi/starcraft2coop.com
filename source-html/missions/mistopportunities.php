<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 机会渺茫</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：机会渺茫">
  <meta name="keywords" content="星际争霸 II 合作任务 机会渺茫 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/mistopportunities">
  <script src="/scripts/preload.js"></script>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>机会渺茫</h1>
    <p id="missionPlace">贝尔石</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#botOrder">机器人采集顺序</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>早在阿克图尔斯倒台之前就被困在贝尔石的伊冈·斯台特曼，如今正遭到埃蒙军队的袭击。保护他的采集机器人收集这颗行星上的地嗪，防止这些资源落入敌手。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>护送采集机器人（5 个波次）</li>
            <li>不得让 2 个机器人被摧毁</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>摧毁萃取装置 (2)</li>
        </ul>
    <h2 id="botOrder">机器人采集顺序</h2>
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
    <?php $mission = "mistopportunities"; ?>
    <p>共有五个机器人波次会离开基地前去采集地嗪。本任务的目标是保护这些机器人免受敌方部队攻击。随着任务推进，每个波次中的机器人数量会逐渐增加。各波次的采集位置如下所示。</p>
    <img src="/images/missiondata/mistopportunities/botwaves.jpg" alt="各波次的采集位置">
    <p>每个机器人需要 60 秒采集地嗪。请注意，机器人往返地嗪喷口还需要一定时间，在途中也可能遭到零散敌军和进攻波次的袭击。</p>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/mistopportunities/extractiondevice.jpg" alt="地嗪萃取装置">
        <img src="/images/missiondata/mistopportunities/extractiondevice.jpg" alt="地嗪萃取装置">
    </div>
    <p>奖励目标要求你摧毁两台正在从贝尔石滑翔者体内抽取地嗪的地嗪萃取装置。</p>
    <p>每台萃取装置都有敌军守卫。第一台萃取装置的位置和守军如下所示。</p>
    <?php switcher_generator("extractiondevice1") ?>
    <p>第二台萃取装置的位置和守军如下所示。这些部队强大得多，但站位也更加密集。</p>
    <?php switcher_generator("extractiondevice2") ?>
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明参见<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>“机会渺茫”中有三类重要时间点：</p>
    <ul>
        <li><b>进攻波次：</b>以你的基地为目标的波次。</li>
        <li><b>采集机器人：</b>采集机器人出发并暴露在敌方攻击下的时间。</li>
        <li><b>骚扰波次：</b>专门以机器人为目标并试图将其摧毁的波次。</li>
    </ul>
    <p>本任务进攻波次的时间、强度等级和科技等级如下。</p>
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
                <td>3:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>10:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>15:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>4</td>
                <td>21:15</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>5</td>
                <td>28:06</td>
                <td>6</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
    <p>此外，第 3 和第 5 个进攻波次会带有混合体。这两个波次都会包含 2 个小型混合体和 1 个大型混合体。混合体类型取决于敌方种族，具体如下：</p>
    <table>
        <thead>
            <tr>
                <th>种族</th>
                <th>小型混合体</th>
                <th>大型混合体</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>星灵</td>
                <td>混合体毁灭者</td>
                <td>混合体巨兽</td>
            </tr>
            <tr>
                <td>人类</td>
                <td>混合体掠夺者</td>
                <td>混合体支配者</td>
            </tr>
            <tr>
                <td>异虫</td>
                <td>混合体天罚者</td>
                <td>混合体支配者</td>
            </tr>
        </tbody>
    </table>
    <p>每个采集机器人波次出发前都会发出警告。机器人会在 45 秒后于站点实际出现，再过 20 秒便出发采集地嗪。所有时间如下。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>机器人波次</th>
                <th>警告时间</th>
                <th>生成时间</th>
                <th>出发时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3:30</td>
                <td>4:15</td>
                <td>4:35</td>
            </tr>
            <tr>
                <td>2</td>
                <td>6:45</td>
                <td>7:30</td>
                <td>7:55</td>
            </tr>
            <tr>
                <td>3</td>
                <td>11:00</td>
                <td>11:45</td>
                <td>12:10</td>
            </tr>
            <tr>
                <td>4</td>
                <td>17:00</td>
                <td>17:45</td>
                <td>18:20</td>
            </tr>
            <tr>
                <td>5</td>
                <td>23:40</td>
                <td>24:25</td>
                <td>25:00</td>
            </tr>
        </tbody>
    </table>
    <p>骚扰波次会陆续生成并攻击采集机器人。每个机器人波次对应的骚扰波次时间如下。</p>
    <p>机器人波次 1：</p>
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
                <td>5:00</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>5:25</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <p>机器人波次 2：</p>
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
                <td>8:15</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>8:40</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>9:05</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>9:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <p>机器人波次 3：</p>
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
                <td>12:25</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>12:50</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>13:15</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>13:40</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>14:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>14:25</td>
                <td>3</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>
    <p>机器人波次 4：</p>
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
                <td>18:40</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>19:15</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>3</td>
                <td>19:50</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>4</td>
                <td>19:55</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>20:25</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>21:00</td>
                <td>4</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <p>注意：如果第一或第四个波次从左下方生成，该波次及其后的所有波次都将只有 1 级科技。</p>
    <p>机器人波次 5：</p>
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
                <td>25:10</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>25:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>3</td>
                <td>25:50</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>4</td>
                <td>26:05</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>26:25</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
                <td>27:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>7</td>
                <td>27:35</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>8</td>
                <td>28:10</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>9</td>
                <td>28:45</td>
                <td>5</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次在地图上有两个生成点，如下所示。</p>
    <img src="/images/missiondata/mistopportunities/attackwavespawns.jpg" alt="进攻波次生成位置">
    <p>护送期间的波次生成位置要复杂得多，同一区域内存在多个不同的生成点。其规律是：骚扰波次刚开始时会使用离机器人较远的生成点；随着机器人继续采集地嗪，系统会改用更近的生成点。各机器人波次可能使用的骚扰波次生成位置如下。</p>
    <p>机器人波次 1：</p>
    <img src="/images/missiondata/mistopportunities/wave1harassspawns.jpg" alt="机器人波次 1 的骚扰波次生成位置">
    <p>机器人波次 2：</p>
    <img src="/images/missiondata/mistopportunities/wave2harassspawns.jpg" alt="机器人波次 2 的骚扰波次生成位置">
    <p>机器人波次 3：</p>
    <img src="/images/missiondata/mistopportunities/wave3harassspawns.jpg" alt="机器人波次 3 的骚扰波次生成位置">
    <p>机器人波次 4：</p>
    <img src="/images/missiondata/mistopportunities/wave4harassspawns.jpg" alt="机器人波次 4 的骚扰波次生成位置">
    <p>机器人波次 5：</p>
    <img src="/images/missiondata/mistopportunities/wave5harassspawns.jpg" alt="机器人波次 5 的骚扰波次生成位置">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>提前清理采集位置，确保机器人不会受到伤害。</li>
        <li>只要奖励目标持续受到攻击，其倒计时就会暂停。这意味着单个光子炮或作战单位就能阻止倒计时。你可以先清理该区域，再利用这一点摧毁奖励目标。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在关键隘口布置剧毒巢穴，削弱进攻波次和骚扰波次。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在关键隘口布置磁力地雷，削弱进攻波次和骚扰波次。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：在关键隘口附近修建静态防御，以消灭骚扰波次。</li>
        <li><a href="/commanders/kerrigan">凯瑞甘</a>：欧米伽虫洞能提供极佳的机动性，让你快速连续防守多个机器人。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请在关键隘口布置蜘蛛雷，削弱进攻波次和骚扰波次。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请在关键隘口布置蜘蛛雷，削弱进攻波次和骚扰波次。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：布置黑暗水晶塔并使用其召回，让你的部队在地图上快速转移。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：虚空阵列船能提供极佳的机动性，让你快速连续防守多个机器人。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
