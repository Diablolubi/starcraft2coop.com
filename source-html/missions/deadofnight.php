<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 亡者之夜</title>
  <meta name="description" content="《星际争霸 II》合作任务“亡者之夜”攻略">
  <meta name="keywords" content="星际争霸 合作模式 攻略 亡者之夜 任务">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/deadofnight">
  <script src="/scripts/preload.js"></script>
  <style>
      .specialInfested{
          border-radius:50%;
      }
  </style>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>亡者之夜</h1>
    <p id="missionPlace">查兹顿</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#baseAnalysis">敌方基地分析</a></p>
        <p><a href="#dayNight">昼夜循环信息</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>帝国的一颗边陲星球上发现了迅速蔓延的感染。在感染扩散之前烧毁所有被感染的建筑。夜幕降临后，感染者会开始攻击你。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>摧毁所有被感染的建筑（151）</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>消灭病毒噬体</li>
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
    <p>请注意，下方图片显示的是任务开始时的状态。随着任务推进，敌方基地中会增加混合体。</p>
    <?php $mission = "deadofnight"; ?>
    <p>起始位置西侧有一处营地，防守非常薄弱。</p>
    <?php switcher_generator("w") ?>
    <p>从上述营地顺时针方向有一座小型敌方基地。敌人排列成线，最适合在这里使用直线型召唤技能。</p>
    <?php switcher_generator("nwlong") ?>
    <p>地图北部的敌方基地戒备森严，需要一支具有一定规模的部队才能攻入。</p>
    <?php switcher_generator("nlong") ?>
    <p>地图东北部的飞地非常适合使用脉冲炮和核弹等大范围召唤技能。</p>
    <?php switcher_generator("ne") ?>
    <p>东部敌方基地防御坚固，需要强大的部队才能攻入。</p>
    <?php switcher_generator("e") ?>
    <p>东南部基地是地图上最大的敌方基地，其中有多个混合体和隐形单位。</p>
    <?php switcher_generator("selong") ?>
    <p>西南部遍布防守薄弱的营地，非常适合在第一个夜晚结束后进攻。</p>
    <?php switcher_generator("slong") ?>
    <?php switcher_generator("swlong") ?>
    <h2 id="dayNight">昼夜循环信息</h2>
    <p>白昼固定持续 3:30，夜晚固定持续 4:00。前几次昼夜循环如下：</p>
    <table>
        <thead>
            <tr>
                <th>阶段</th>
                <th>开始</th>
                <th>结束</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>第 1 个白昼</td>
                <td>0:00</td>
                <td>3:30</td>
            </tr>
            <tr>
                <td>第 1 个夜晚</td>
                <td>3:30</td>
                <td>7:30</td>
            </tr>
            <tr>
                <td>第 2 个白昼</td>
                <td>7:30</td>
                <td>11:00</td>
            </tr>
            <tr>
                <td>第 2 个夜晚</td>
                <td>11:00</td>
                <td>15:00</td>
            </tr>
            <tr>
                <td>第 3 个白昼</td>
                <td>15:00</td>
                <td>18:30</td>
            </tr>
            <tr>
                <td>第 3 个夜晚</td>
                <td>18:30</td>
                <td>22:30</td>
            </tr>
        </tbody>
    </table>
    <p>白昼不会刷新感染者，因此很容易清理被感染的建筑。守卫这些建筑的敌方单位数量很少。摧毁被感染的建筑时会刷新一定数量的巢虫，具体取决于被摧毁的建筑：</p>
    <ul>
        <li><b>被感染的生态穹顶（1300 生命值）：</b>6 只巢虫</li>
        <li><b>其他所有被感染的建筑（500 生命值）：</b>3 只巢虫</li>
    </ul>
    <p>每天白昼开始时，地图上尚未清理的区域都会增加一些混合体协助防守。这些混合体不包含地图起始时已有的混合体。新增数量如下。轻型混合体包括混合体掠夺者和混合体毁灭者；重型混合体包括混合体巨兽和混合体支配者。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>白昼</th>
                <th>新增轻型混合体</th>
                <th>新增重型混合体</th>
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
                <td>2</td>
                <td>0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2</td>
                <td>1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>4</td>
                <td>1</td>
            </tr>
            <tr>
                <td>5+</td>
                <td>5</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <p>新增混合体的类型取决于敌方种族，汇总如下：</p>
    <table>
        <thead>
            <tr>
                <th>种族</th>
                <th>轻型混合体</th>
                <th>重型混合体</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>星灵</td>
                <td>混合体毁灭者</td>
                <td>混合体支配者</td>
            </tr>
            <tr>
                <td>人类</td>
                <td>混合体掠夺者</td>
                <td>混合体支配者</td>
            </tr>
            <tr>
                <td>异虫</td>
                <td>混合体掠夺者</td>
                <td>混合体巨兽</td>
            </tr>
        </tbody>
    </table>
    <p>夜晚则截然不同。被感染的平民、被感染的陆战队员和畸变体会源源不断地攻击你。</p>
    <p>感染单位只会从特定位置发起攻击，具体取决于当前夜晚。下表列出了任务中受袭的方向。</p>
    <table>
        <thead>
            <tr>
                <th>夜晚</th>
                <th>方向</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>南侧</td>
            </tr>
            <tr>
                <td>2</td>
                <td>南侧 + 北侧</td>
            </tr>
            <tr>
                <td>3+</td>
                <td>四面全部</td>
            </tr>
        </tbody>
    </table>
    <p>地图上的感染单位分为两个不同“组别”：</p>
    <ul>
        <li><b>进攻波次：</b>成群的感染单位会主动向你的基地推进。波次中可能包含：
        <ul>
            <li>被感染的平民</li>
            <li>被感染的陆战队员</li>
            <li>畸变体</li>
        </ul></li>
        <li><b>杂兵：</b>持续刷新并向你的基地移动的感染单位。其中包括：
        <ul>
            <li>被感染的平民</li>
            <li>被感染的陆战队员</li>
            <li>易爆感染体</li>
            <li>畸变体</li>
        </ul></li>
    </ul>
    <p>通常很难区分进攻波次与杂兵，而且基地的所有入口都必须防守，因此波次阵容和时间并不重要。</p>
    <p>每个夜晚杂兵感染单位的每秒刷新率如下。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>夜晚</th>
                <th>被感染的平民</th>
                <th>被感染的陆战队员</th>
                <th>易爆感染体</th>
                <th>畸变体</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>0.91</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>0.32</td>
                <td>0.63</td>
                <td>0</td>
                <td>0.1</td>
            </tr>
            <tr>
                <td>3</td>
                <td>0.32</td>
                <td>0.48</td>
                <td>0.16</td>
                <td>0.20</td>
            </tr>
            <tr>
                <td>4</td>
                <td>0.32</td>
                <td>0.63</td>
                <td>0.32</td>
                <td>0.38</td>
            </tr>
            <tr>
                <td>5</td>
                <td>0.32</td>
                <td>0.63</td>
                <td>0.63</td>
                <td>0.57</td>
            </tr>
            <tr>
                <td>6+</td>
                <td>0.48</td>
                <td>0.91</td>
                <td>0.91</td>
                <td>0.83</td>
            </tr>
        </tbody>
    </table>
    <p>除了标准感染单位，你还会受到特殊感染体的攻击。游戏会从下列四种感染体中随机选择两种：第一种在第一个夜晚出现，第二种在第二个夜晚出现。</p>
    <img class="specialInfested" src="/images/missiondata/deadofnight/choker.jpg" alt="扼喉者">
    <p>扼喉者可以持续击晕目标单位直至其死亡。拥有狂暴增益的单位免疫此效果（例如莽兽、奥丁和雷兽）。它对英雄构成巨大威胁，但一次只能持续控制一个英雄单位，因此附近有多个英雄时，其他英雄可以处理扼喉者。扼喉者同时最多能以 5 个单位为目标。</p>
    <p>通常建议先派一些廉价单位进入扼喉者的攻击范围，再用更昂贵的单位攻击它。位移技能可以挣脱扼喉者的控制，包括：</p>
    <ul>
        <li>阿塔尼斯的守护之壳</li>
        <li>菲尼克斯的塞布罗斯仲裁者召回</li>
        <li>诺娃的战术空运</li>
        <li>泰凯斯的医疗运输</li>
        <li>沃拉尊的黑暗水晶塔召回</li>
        <li>沃拉尊的紧急召回</li>
    </ul>
    <img class="specialInfested"  src="/images/missiondata/deadofnight/hunterling.jpg" alt="猎杀虫">
    <p>猎杀虫可以跃过悬崖，无需通过基地入口便能抵达晶体矿区。第 1 个夜晚由玩家 1 防守时，这一点尤其麻烦。一种解决办法是用小型 2x2 建筑堵住左上方屏障左侧的高地，例如水晶塔、补给站、孢子爬虫或脊针爬虫。你需要用运输单位将一个工人送到那里。</p>
    <p>猎杀虫的跳跃攻击可以击晕单位 5 秒。位移技能可以挣脱其控制，包括：</p>
    <ul>
        <li>菲尼克斯的塞布罗斯仲裁者召回</li>
        <li>诺娃的战术空运</li>
        <li>泰凯斯的医疗运输</li>
        <li>沃拉尊的黑暗水晶塔召回</li>
    </ul>
    <img class="specialInfested"  src="/images/missiondata/deadofnight/kaboomer.jpg" alt="爆裂者">
    <p>爆裂者死亡时会爆炸，对周围所有敌人造成伤害。它还会持续发动范围攻击，迅速消灭低生命值目标；对建筑造成双倍伤害。</p>
    <img class="specialInfested"  src="/images/missiondata/deadofnight/spotter.jpg" alt="侦察者">
    <p>侦察者是唯一会飞行的特殊感染体。它可以禁用水晶塔、防御塔和地堡，如果不迅速处理会极其危险。一个侦察者会禁用两座建筑。</p>
    <p>此外，它还会提供光环增益，使附近感染单位的移动速度提高 1、生命恢复速度提高 2。</p>
    <br><br>
    <p>此外，从第 3 个夜晚开始，你还要面对一种额外威胁：坑道网络或腐臭兽。</p>
    <p>坑道网络与游戏中的其他坑道威胁相同，应当迅速摧毁；否则它们会释放一波强度等级 3、科技等级 3 的<a href="/guides/enemycomps">敌方阵容</a>单位攻击你。</p>
    <img class="specialInfested"  src="/images/missiondata/deadofnight/stank.jpg" alt="腐臭兽">
    <p>腐臭兽是一种类似雷兽的强大单位，需要整支部队全力攻击才能消灭。腐臭兽在白昼不会燃烧，因此必须亲手消灭，否则它能在几分钟内摧毁你的整个基地。</p>
    <br><br>
    <p>每个夜晚刷新的特殊感染体数量如下。由于刷新位置各不相同，且刷新时间取决于顺序，具体时间难以预测，因此不再列出。</p>
    <div class="tableContainer">
        <table class="centered">
            <thead>
                <tr>
                    <th>夜晚</th>
                    <th>扼喉者</th>
                    <th>猎杀虫</th>
                    <th>爆裂者</th>
                    <th>侦察者</th>
                    <th>腐臭兽</th>
                    <th>同时存在的坑道虫上限</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>3</td>
                    <td>11</td>
                    <td>3</td>
                    <td>3</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>10</td>
                    <td>32</td>
                    <td>14</td>
                    <td>11</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>14</td>
                    <td>30</td>
                    <td>15</td>
                    <td>15</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>16</td>
                    <td>18</td>
                    <td>12</td>
                    <td>12</td>
                    <td>2</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>19</td>
                    <td>36</td>
                    <td>19</td>
                    <td>19</td>
                    <td>4</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>6+</td>
                    <td>32</td>
                    <td>66</td>
                    <td>32</td>
                    <td>40</td>
                    <td>11</td>
                    <td>6</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>你可以在夜晚攻击建筑，但建筑会根据当前夜晚刷新下列感染单位。每座建筑再次刷新同一组单位前有 30 秒冷却时间。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>夜晚</th>
                <th>刷新单位</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>6 个被感染的平民</td>
            </tr>
            <tr>
                <td>2,3</td>
                <td>6 个被感染的平民<br>4 个被感染的陆战队员</td>
            </tr>
            <tr>
                <td>4,5</td>
                <td>6 个被感染的平民<br>9 个被感染的陆战队员<br>3 个易爆感染体<br>2 个畸变体</td>
            </tr>
            <tr>
                <td>6+</td>
                <td>6 个被感染的平民<br>12 个被感染的陆战队员<br>3 个易爆感染体<br>3 个畸变体</td>
            </tr>
        </tbody>
    </table>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/deadofnight/virophage.jpg" alt="病毒噬体">
    </div>
    <p>奖励目标要求你消灭从第 3 个夜晚起在夜间出现的病毒噬体。</p>
    <p>病毒噬体会在下图所示位置之一刷新。</p>
    <img src="/images/missiondata/deadofnight/virophagespawnlocations.jpg" alt="病毒噬体刷新位置">
    <p>病毒噬体的刷新位置取决于相应区域内被感染建筑的数量。它会在被感染建筑最少的区域刷新。游戏从左上角开始顺时针检查各区域，并优先选择后检查的区域。因此，如果你已清理地图南部，病毒噬体必定会在那里刷新。</p>
    <h2 id="timings">时间点</h2>
        <p>注意：科技等级与强度等级的说明可参阅<a href="/guides/enemycomps">敌方阵容</a>页面。</p>
        <p>进攻波次固定在夜晚倒计时剩余 1:00 时刷新，并且始终由运输单位运送。来袭方向随机。每个夜晚的进攻波次科技等级和强度等级如下。</p>
        <table class="centered">
            <thead>
                <tr>
                    <th>夜晚</th>
                    <th>科技等级</th>
                    <th>强度等级</th>
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
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>5+</td>
                    <td>4</td>
                    <td>4</td>
                </tr>
            </tbody>
        </table>
    <h2 id="spawnPoints">出生点</h2>
    <p>感染杂兵会从地图上任意被感染的建筑随机刷新。因此，如果你已经清理一部分地图，该侧只需较少防御即可应对感染者。请记住仍然会有感染进攻波次来袭。</p>
    <p>进攻波次在地图四角附近刷新，然后集结至地图上的一个位置。</p>
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>通常可以在第 3 个夜晚前完成任务，从而完全避免防守两个以上入口，也无需应对坑道虫或腐臭兽。</li>
        <li>两名玩家都应以推进并清理地图为目标，尽快完成任务。</li>
        <li>猎杀虫喜欢攻击晶体矿区。如果本局特殊感染体包括猎杀虫，请确保晶体矿区有适当防御。</li>
        <li>先用可牺牲单位接战扼喉者，让它控制这些单位，然后再投入更昂贵或英雄单位。</li>
        <li>使用拥有水晶塔的星灵指挥官时，用多个水晶塔为建筑供能，避免侦察者禁用唯一的关键水晶塔，导致整套生产设施断电。</li>
        <li>使用拥有水晶塔的星灵指挥官时，在盟友的防御建筑前放置水晶塔，引诱侦察者对其施放停滞效果。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：被感染的平民不会掉落生物质。如果防守稳固，可将剧毒巢穴布置在防线后方，只引诱畸变体和特殊感染体踩中它们。</li>
        <li><a href="/commanders/dehaka">德哈卡</a>：德哈卡一刷新就让他向西前往小型敌军营地收集精华，再向南走上坡道，在第一个夜晚前获取更多精华。</li>
        <li><a href="/commanders/fenix">菲尼克斯</a>：虽然只爆一种单位通常并非良策，但大量拥有升级的侦察机可以迅速消灭感染单位。白昼时将侦察机分成两到三队清理地图。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：升级凝固汽油弹的强袭战机平台可以在夜间摧毁被感染的建筑。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：使用强袭战机平台时，投入作用范围精通，以便瞄准两座被感染建筑之间，一次空袭同时摧毁两座建筑。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：升级后的太阳能长枪可以烧毁排列成线的被感染建筑。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：使用亚顿之矛技能消灭本任务中的空中单位，无需建造防空单位。</li>
        <li><a href="/commanders/nova">诺娃</a>：部队继续清剿敌军时，用渡鸦的磁轨炮台摧毁被感染的建筑。</li>
        <li><a href="/commanders/stukov">斯托科夫</a>：对坑道虫使用感染建筑，选中巢虫并攻击已经被感染的坑道虫，将其清除。</li>
        <li><a href="/commanders/swann">斯旺</a>：斯旺可以在夜间防守的同时，用赫拉克勒斯提供视野，让钻机瞄准被感染的建筑完成任务。高效使用召唤技能的方法请参阅<a href="/commanders/swann">斯旺指挥官页面</a>。</li>
        <li><a href="/commanders/tychus">泰凯斯</a>：让天狼星的炮台摧毁被感染的建筑，同时让不法之徒继续向前清理。</li>
        <li><a href="/commanders/zagara">扎加拉</a>：如果高效使用狂暴和空投蟑螂，大量满级升级的跳虫可帮助扎加拉在第三个夜晚前清完整张地图。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：部队继续清剿敌军时，用阴影投射的光子炮清理建筑。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：泽拉图的纯粹意志被动在免疫增益施加到他身上时，可让他挣脱扼喉者的控制。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
