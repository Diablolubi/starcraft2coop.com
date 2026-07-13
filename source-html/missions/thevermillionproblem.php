<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 熔火危机</title>
  <meta name="description" content="《星际争霸 II》合作任务“熔火危机”攻略">
  <meta name="keywords" content="星际争霸 II, 合作任务, 熔火危机, 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/thevermillionproblem">
  <script src="/scripts/preload.js"></script>
  <style>
      #spawnView{
          position:relative;
      }
      #spawn{
          position: absolute;
          left: 0;
          top: 0;
          z-index: 1;
      }
      #spawnView form{
          display:inline-block;
          margin-left:20px;
          vertical-align:top;
          line-height:2em;
      }
  </style>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>熔火危机</h1>
    <p id="missionPlace">维里迪亚主星</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#baseAnalysis">敌方基地分析</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#crystalSpawn">晶体出现顺序</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>埃蒙引发的火山喷发正在摧毁维里迪亚主星。收集重新启动环境稳定器所需的晶体，在星球毁灭前恢复其环境。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>收集氙晶体（20）。</li>
            <li>不要让星球爆炸。</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>消灭熔岩蜥蜴（1）</li>
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
    <?php $mission = "thevermillionproblem"; ?>
    <p>在“熔火危机”中，攻入敌方基地是关键环节，因为大多数晶体都会出现在敌后。</p>
    <p>首先要进攻的是分矿处的基地。那里只有一小支部队防守，用少量部队或英雄单位即可清除。</p>
    <p>注意守卫北侧斜坡的小股部队（下图未显示）。该部队随敌方种族而异，组成如下：</p>
    <ul>
        <li><b>星灵：</b>3 个追猎者</li>
        <li><b>人类：</b>3 个歌利亚</li>
        <li><b>异虫：</b>2 个破坏者和 8 只跳虫</li>
    </ul>
    <?php switcher_generator("expansionlong") ?>
    <p>此后通常要根据晶体的出现位置决定清理哪些基地，而非遵循固定顺序。</p>
    <p>除分矿外，西侧基地通常防守最薄弱，如下所示：</p>
    <?php switcher_generator("wbase") ?>
    <p>接下来通常会攻占北侧基地。其防守稍强，但仍相对容易拿下。</p>
    <?php switcher_generator("nbaselong") ?>
    <p>按任务节奏，清除该基地时会遇到一次熔岩喷发。通常最好继续向下方的东北基地推进。注意该区域的混合体支配者。</p>
    <?php switcher_generator("nebase") ?>
    <p>清除其余基地需要较强的部队。在附近可能出现晶体的剩余基地中，西南基地大概最容易攻克。</p>
    <?php switcher_generator("swbaselong") ?>
    <p>如果选择从该基地向东推进至奖励目标，就需要摧毁一处小型敌军营地。注意，这座岛另一侧的斜坡无人防守，可以避开敌军直接到达奖励目标。</p>
    <?php switcher_generator("bonuscamp") ?>
    <p>从分矿向东推进时会遇到数股敌军，首先是一处部队营地。</p>
    <?php switcher_generator("ebasecamp") ?>
    <p>沿道路向北即可到达敌方基地。</p>
    <?php switcher_generator("ebaselong") ?>
    <p>该基地正南方还有一小片敌军据点。</p>
    <?php switcher_generator("eenclavelong") ?>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/thevermillionproblem/moltensalamander.jpg" alt="熔岩蜥蜴">
    </div>
    <p>奖励目标要求你消灭在下方标记位置出现的熔岩蜥蜴。</p>
    <img src="/images/missiondata/thevermillionproblem/moltensalamanderspawnlocation.jpg" alt="熔岩蜥蜴出现位置的小地图">
    <h2 id="timings">时间点</h2>
    <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方部队组合</a>页面。</p>
    <p>本任务部分进攻波次的出现时间存在偏差，即具体出现时间带有一定随机性。下表列出波次时间及其偏差。偏差为 1:30 表示波次可能在标示时间<i>之前</i> 1:30 到<i>之后</i> 1:30 之间的任意时刻出现。</p>
    <p>本任务的进攻波次时间如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>波次</th>
                <th>时间</th>
                <th>科技等级</th>
                <th>强度等级</th>
                <th>目标</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3:30</td>
                <td>1</td>
                <td>1</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>2</td>
                <td>6:00</td>
                <td>2</td>
                <td>2</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>3</td>
                <td>9:00 ± 1:30</td>
                <td>3</td>
                <td>4</td>
                <td>分矿</td>
            </tr>
            <tr>
                <td>4*</td>
                <td>12:00 ± 1:30</td>
                <td>3</td>
                <td>4</td>
                <td>分矿</td>
            </tr>
            <tr>
                <td>5</td>
                <td>15:00 ± 1:30</td>
                <td>5</td>
                <td>5</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>6</td>
                <td>18:00 ± 1:30</td>
                <td>5</td>
                <td>5</td>
                <td>主基地</td>
            </tr>
            <tr>
                <td>7</td>
                <td>21:00 ± 1:30</td>
                <td>5</td>
                <td>5</td>
                <td>分矿</td>
            </tr>
            <tr>
                <td>8</td>
                <td>24:00 ± 1:30</td>
                <td>6</td>
                <td>6</td>
                <td>分矿</td>
            </tr>
            <tr>
                <td>9</td>
                <td>27:00</td>
                <td>5</td>
                <td>5</td>
                <td>分矿</td>
            </tr>
        </tbody>
    </table>
    <p>* 第 4 波是多路进攻，进攻单位会从两个不同位置出现。</p>
    <p>最后一波进攻会每两分钟重复一次，直至任务结束。</p>
    <p>11:00 后，熔岩蜥蜴会在每次熔岩喷发时开始出现。</p>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次的出生点如下所示。</p>
    <p>进攻波次出生位置（西侧基地）：</p>
    <img src="/images/missiondata/thevermillionproblem/wattackwavespawn.jpg" alt="西侧进攻波次出生点">
    <p>进攻波次出生位置（东侧基地；由于晶体不会在那里出现，通常不会清理）：</p>
    <img src="/images/missiondata/thevermillionproblem/eattackwavespawn.jpg" alt="东侧进攻波次出生点">
    <p>进攻波次出生位置（南侧，奖励目标附近）：</p>
    <img src="/images/missiondata/thevermillionproblem/sattackwavespawn.jpg" alt="南侧进攻波次出生点">
    <p>晶体也有特定的出现位置。不过，每个收集阶段都可能在 10 个以上的独立位置出现晶体，无法逐一列出。此外，随着任务推进，出现位置会随机变化。</p>
    <h2 id="crystalSpawn">晶体出现顺序</h2>
    <p>下方可查看氙晶体的出现顺序和位置。面对会在小地图上隐藏晶体位置的<a href="/resources/mutators">突变因子</a>（例如“黑暗”）时，这些信息可能很有用。</p>
    <div id="spawnView">
        <img id="base"  src="/images/missiondata/thevermillionproblem/mapbase.jpg" alt="地形">
        <img id="spawn" src="/images/missiondata/thevermillionproblem/spawn_01.png" alt="出生点叠加层">
        <form action='#'>
            <label><input type='radio' name='spawn' value='1' checked>第 1 批</label><br>
            <label><input type='radio' name='spawn' value='2'>第 2 批</label><br>
            <label><input type='radio' name='spawn' value='3'>第 3 批</label><br>
            <label><input type='radio' name='spawn' value='4'>第 4 批</label><br>
            <label><input type='radio' name='spawn' value='5'>第 5 批</label><br>
            <label><input type='radio' name='spawn' value='6'>第 6 批</label><br>
            <label><input type='radio' name='spawn' value='7'>第 7 批</label><br>
            <label><input type='radio' name='spawn' value='8'>第 8 批</label><br>
            <label><input type='radio' name='spawn' value='9'>第 9 批</label><br>
        </form>
    </div>
    <script>
        var imgList=[];
        for (var i=1; i<9; i++){
            imgList.push('/images/missiondata/thevermillionproblem/spawn_0' + i + '.png');
        }
        preload(imgList);
        $("input[name='spawn']").change(function(){
            var spawnNum= $(this).val();
            var oldImg = $('#spawn');
            var img = new Image();
            img.src = '/images/missiondata/thevermillionproblem/spawn_0'+ spawnNum + '.png';
            var newImg = $(img).hide();
            $('#base').after(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'spawn');
            return false;
        })
    </script>
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>确保主基地和分矿有足够防御来应对进攻波次。</li>
        <li>本地图有大量混合体支配者，攻入敌方防线时要留意自己的部队。</li>
        <li>从第 3 批开始，每颗晶体都会伴随一小股骚扰部队。派工人拾取晶体前务必先消灭它们。这些部队不会与晶体同时出现，而是经过一段移动时间后抵达。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在出生点放置剧毒巢穴以削弱进攻波次。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在出生点放置磁雷以削弱进攻波次。</li>
        <li><a href="/commanders/kerrigan">凯瑞甘</a>：在每座岛上放置欧米伽虫洞，帮助你和盟友及时拦截进攻波次并收集晶体。</li>
        <li><a href="/commanders/nova">诺娃</a>：使用攻城坦克时，在出生点布置蜘蛛雷以削弱进攻波次。</li>
        <li><a href="/commanders/raynor">雷诺</a>：使用秃鹫战车时，在出生点布置蜘蛛雷以削弱进攻波次。</li>
        <li><a href="/commanders/stetmann">斯台特曼</a>：使用“艾的急切”爱心区域更快送回晶体。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：菌毯铺开后，将被感染的移民营移动到分矿区域。</li>
        <li><a href="/commanders/zagara">扎加拉</a>：在分矿建造用于暴兵的孵化场，以便快速增援。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：在每座岛上放置一艘虚空阵列船，帮助你及时拦截进攻波次并收集晶体。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
