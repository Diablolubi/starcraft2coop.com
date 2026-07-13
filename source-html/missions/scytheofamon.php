<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
require_once "../../includes/switchergenerator.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务攻略 - 埃蒙之镰</title>
  <meta name="description" content="《星际争霸 II》合作任务攻略：埃蒙之镰">
  <meta name="keywords" content="星际争霸 II 合作任务 埃蒙之镰 攻略">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/missionstyle.css?v=1.00">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/missions/scytheofamon">
  <script src="/scripts/preload.js"></script>
  <style>
    .sliver{
        margin-bottom:50px;
    }
    .sliverDiv{
        display:inline-block;
        margin-right:25px;
        width:400px;
        height:400px;
    }
    .sliverDiv img{
        position:absolute;
    }
    .sliverMinimap{
        display:inline-block;
    }
  </style>
<?= startContent() ?>
    <h1><span class="unbold">任务：</span>埃蒙之镰</h1>
    <p id="missionPlace">萨尔纳加神庙</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#misSum">任务概述</a></p>
        <p><a href="#objectives">任务目标</a></p>
        <p><a href="#idRace">识别敌方种族</a></p>
        <p><a href="#sliverGrowth">虚空裂片成长</a></p>
        <p><a href="#sliverAbilities">虚空裂片技能</a></p>
        <p><a href="#bonus">完成奖励目标</a></p>
        <p><a href="#timings">时间点</a></p>
        <p><a href="#spawnPoints">出生点</a></p>
        <p><a href="#misTips">任务技巧</a></p>
        <p><a href="#comTips">指挥官专属技巧</a></p>
    </div>
    <h2 id="misSum">任务概述</h2>
    <p>奈拉齐姆侦察兵莱拉克发现了惊人的事实：埃蒙的军队入侵了一座萨尔纳加神庙，并利用其中的能量唤醒黑暗之神最强大的造物之一。趁一切还来得及，摧毁虚空裂片，阻止他们的计划。</p>
    <h2 id="objectives">任务目标</h2>
    <h3>主要目标</h3>
        <ul>
            <li>摧毁虚空裂片 (5)</li>
            <li>不得让虚空之影混合体苏醒。</li>
        </ul>
    <h3>奖励目标</h3>
        <ul>
            <li>护送撤离船 (3)</li>
        </ul>
    <h2 id="idRace">识别敌方种族</h2>
    <p>在《星际争霸 II》合作模式中，识别敌方种族、进而判断敌方部队组合十分重要，这能让你有效克制任务中的进攻波次。在其他任务中，有菌毯意味着敌方是异虫；没有菌毯则意味着敌方可能是星灵或人类。“埃蒙之镰”是游戏中唯一能仅凭菌毯分布准确识别敌方种族的任务。按 Alt + T 查看菌毯分布，你会看到以下三种图案之一。</p>
    <p>星灵菌毯分布：</p>
    <img src="/images/missiondata/scytheofamon/creepspread_protoss.jpg" alt="星灵菌毯分布">
    <p>人类菌毯分布：</p>
    <img src="/images/missiondata/scytheofamon/creepspread_terran.jpg" alt="人类菌毯分布">
    <p>异虫菌毯分布：</p>
    <img src="/images/missiondata/scytheofamon/creepspread_zerg.jpg" alt="异虫菌毯分布">
    <p>演示视频如下：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/9g-vLQou8-w" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h2 id="sliverGrowth">虚空裂片成长</h2>
    <?php $mission = "scytheofamon"; ?>
    <p>每摧毁一个虚空裂片，剩余虚空裂片都会获得更多增援。此外，所有其他虚空裂片的护盾上限增加 2000，并立即恢复全部护盾，因此会变得更难摧毁。各裂片的增援成长如下。</p>
    <p>出现的所有单位都是虚空单位，它们会从裂片周围的虚空裂隙中生成，再移动到各自位置。这些单位可以被支配和回收，但无法被黑暗执政官精神控制。</p>
    <p>裂片 1：</p>
    <div class='sliver'>
        <div id="sliver1Div" class='sliverDiv'><img id ='sliver1Pic' src=' /images/missiondata/scytheofamon/sliver1-0.jpg' alt='裂片 1'></div>
            <div class = 'sliverMinimap'>
                <form action='#'>
                    <label><input type='radio' name='sliver1States' value='0' checked>已摧毁 0 个裂片</label><br>
                    <label><input type='radio' name='sliver1States' value='1'>已摧毁 1 个裂片</label><br>
                    <label><input type='radio' name='sliver1States' value='2'>已摧毁 2 个裂片</label><br>
                    <label><input type='radio' name='sliver1States' value='3'>已摧毁 3 个裂片</label><br>
                    <label><input type='radio' name='sliver1States' value='4'>已摧毁 4 个裂片</label><br>
                </form>
                <br><br>
                <div><img src='/images/missiondata/scytheofamon/sliver1minimap.jpg' alt='基地小地图'></div>
            </div>
    </div>
    <p>裂片 2：</p>
    <div class='sliver'>
        <div id="sliver2Div"  class='sliverDiv'><img id ='sliver2Pic' src=' /images/missiondata/scytheofamon/sliver2-0.jpg' alt='裂片 2'></div>
            <div class = 'sliverMinimap'>
                <form action='#'>
                    <label><input type='radio' name='sliver2States' value='0' checked>已摧毁 0 个裂片</label><br>
                    <label><input type='radio' name='sliver2States' value='1'>已摧毁 1 个裂片</label><br>
                    <label><input type='radio' name='sliver2States' value='2'>已摧毁 2 个裂片</label><br>
                    <label><input type='radio' name='sliver2States' value='3'>已摧毁 3 个裂片</label><br>
                    <label><input type='radio' name='sliver2States' value='4'>已摧毁 4 个裂片</label><br>
                </form>
                <br><br>
                <div><img src='/images/missiondata/scytheofamon/sliver2minimap.jpg' alt='基地小地图'></div>
            </div>
    </div>
    <p>裂片 3：</p>
    <div class='sliver'>
        <div id="sliver3Div"  class='sliverDiv'><img id ='sliver3Pic' src=' /images/missiondata/scytheofamon/sliver3-0.jpg' alt='裂片 3'></div>
            <div class = 'sliverMinimap'>
                <form action='#'>
                    <label><input type='radio' name='sliver3States' value='0' checked>已摧毁 0 个裂片</label><br>
                    <label><input type='radio' name='sliver3States' value='1'>已摧毁 1 个裂片</label><br>
                    <label><input type='radio' name='sliver3States' value='2'>已摧毁 2 个裂片</label><br>
                    <label><input type='radio' name='sliver3States' value='3'>已摧毁 3 个裂片</label><br>
                    <label><input type='radio' name='sliver3States' value='4'>已摧毁 4 个裂片</label><br>
                </form>
                <br><br>
                <div><img src='/images/missiondata/scytheofamon/sliver3minimap.jpg' alt='基地小地图'></div>
            </div>
    </div>
    <p>裂片 4：</p>
    <div class='sliver'>
        <div id="sliver4Div"  class='sliverDiv'><img id ='sliver4Pic' src=' /images/missiondata/scytheofamon/sliver4-0.jpg' alt='裂片 4'></div>
            <div class = 'sliverMinimap'>
                <form action='#'>
                    <label><input type='radio' name='sliver4States' value='0' checked>已摧毁 0 个裂片</label><br>
                    <label><input type='radio' name='sliver4States' value='1'>已摧毁 1 个裂片</label><br>
                    <label><input type='radio' name='sliver4States' value='2'>已摧毁 2 个裂片</label><br>
                    <label><input type='radio' name='sliver4States' value='3'>已摧毁 3 个裂片</label><br>
                    <label><input type='radio' name='sliver4States' value='4'>已摧毁 4 个裂片</label><br>
                </form>
                <br><br>
                <div><img src='/images/missiondata/scytheofamon/sliver4minimap.jpg' alt='基地小地图'></div>
            </div>
    </div>
    <p>裂片 5：</p>
    <div class='sliver'>
        <div id="sliver5Div"  class='sliverDiv'><img id ='sliver5Pic' src=' /images/missiondata/scytheofamon/sliver5-0.jpg' alt='裂片 5'></div>
            <div class = 'sliverMinimap'>
                <form action='#'>
                    <label><input type='radio' name='sliver5States' value='0' checked>已摧毁 0 个裂片</label><br>
                    <label><input type='radio' name='sliver5States' value='1'>已摧毁 1 个裂片</label><br>
                    <label><input type='radio' name='sliver5States' value='2'>已摧毁 2 个裂片</label><br>
                    <label><input type='radio' name='sliver5States' value='3'>已摧毁 3 个裂片</label><br>
                    <label><input type='radio' name='sliver5States' value='4'>已摧毁 4 个裂片</label><br>
                </form>
                <br><br>
                <div><img src='/images/missiondata/scytheofamon/sliver5minimap.jpg' alt='基地小地图'></div>
            </div>
    </div>
    <script>
        var imgList=[];
        for (var i=1;i<6;i++){
            for (var j=0; j<5; j++){
                imgList.push('/images/missiondata/scytheofamon/sliver' + i +'-'+ j + '.jpg');
            }
        }
        preload(imgList);
        $("input[name='sliver1States']").change(function(){
            var state= $(this).val();
            var oldImg = $('#sliver1Pic');
            var img = new Image();
            img.src = '/images/missiondata/scytheofamon/sliver1-'+ state + '.jpg';
            var newImg = $(img).hide();
            $('#sliver1Div').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'sliver1Pic');
        })
        $("input[name='sliver2States']").change(function(){
            var state= $(this).val();
            var oldImg = $('#sliver2Pic');
            var img = new Image();
            img.src = '/images/missiondata/scytheofamon/sliver2-'+ state + '.jpg';
            var newImg = $(img).hide();
            $('#sliver2Div').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'sliver2Pic');
        })
        $("input[name='sliver3States']").change(function(){
            var state= $(this).val();
            var oldImg = $('#sliver3Pic');
            var img = new Image();
            img.src = '/images/missiondata/scytheofamon/sliver3-'+ state + '.jpg';
            var newImg = $(img).hide();
            $('#sliver3Div').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'sliver3Pic');
        })
        $("input[name='sliver4States']").change(function(){
            var state= $(this).val();
            var oldImg = $('#sliver4Pic');
            var img = new Image();
            img.src = '/images/missiondata/scytheofamon/sliver4-'+ state + '.jpg';
            var newImg = $(img).hide();
            $('#sliver4Div').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'sliver4Pic');
        })
        $("input[name='sliver5States']").change(function(){
            var state= $(this).val();
            var oldImg = $('#sliver5Pic');
            var img = new Image();
            img.src = '/images/missiondata/scytheofamon/sliver5-'+ state + '.jpg';
            var newImg = $(img).hide();
            $('#sliver5Div').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(this).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'sliver5Pic');
        })
    </script>
    <h2 id="sliverAbilities">虚空裂片技能</h2>
    <p>虚空裂片受到攻击时会施放各种技能。第一个虚空裂片没有技能，后续每个虚空裂片都会从下表中随机新增一种技能。因此，裂片 #4 和 #5 会拥有全部技能。</p>
    <p>技能列表如下：</p>
    <table>
        <thead>
            <tr>
                <th>技能</th>
                <th>说明</th>
                <th>冷却时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>震荡波</td>
                <td>在虚空裂片周围 11 射程内施放范围效果，蓄力 3 秒后使范围内所有单位昏迷 2 秒。</td>
                <td>14 秒</td>
            </tr>
            <tr>
                <td>死亡之握</td>
                <td>在虚空裂片周围 16 射程内生成一枚死亡之握水晶。若虚空裂片 #4 和 #5 拥有此技能，会生成 2 枚而非 1 枚死亡之握水晶。死亡之握水晶会禁用一组生命值与护盾值之和低于 800* 的单位，并在 10 秒后将其摧毁，除非水晶先被摧毁。</td>
                <td>60 秒</td>
            </tr>
            <tr>
                <td>不稳定能量</td>
                <td>造成 100 点范围伤害，作用区域位于虚空裂片周围 18 射程内，效果在 4 秒后触发。</td>
                <td>20 秒</td>
            </tr>
        </tbody>
    </table>
    <p>* 死亡之握水晶的目标选择代码会选取一个单位，并将其生命值与护盾值之和加入计数池。如果池中总值低于 800，死亡之握水晶会继续选择目标，直至总值超过 800。因此，死亡之握水晶可能捕获生命值超过 800 的单位。</p>
    <h2 id="bonus">完成奖励目标</h2>
    <div id="objectiveImages">
        <img src="/images/missiondata/scytheofamon/warpprism.jpg" alt="折跃棱镜">
        <img src="/images/missiondata/scytheofamon/warpprism.jpg" alt="折跃棱镜">
        <img src="/images/missiondata/scytheofamon/warpprism.jpg" alt="折跃棱镜">
    </div>
    <div id="globalRaceSelect">
        <p>将所有基地分析图片切换为以下种族：</p>
        <form action="#">
            <input type="radio" name="globalRace" value="protoss" checked>星灵<br>
            <input type="radio" name="globalRace" value="terran">人类<br>
            <input type="radio" name="globalRace" value="zerg">异虫<br>
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
    <p>奖励目标要求你护送一艘试图撤离平民的折跃棱镜。这些棱镜的停靠点位于敌方基地内。假设目标没有被击落，按停靠顺序会遇到以下基地。</p>
    <p>停靠点 1：</p>
    <?php switcher_generator("bonusbase1long") ?>
    <p>停靠点 2：</p>
    <?php switcher_generator("bonusbase2") ?>
    <p>停靠点 3：</p>
    <?php switcher_generator("bonusbase3long") ?>
    <p>还需注意，每个停靠点都会出现不同种族的敌方单位，而且不会与本地图进攻波次的种族完全一致。不过，可以根据进攻波次的种族推断上述三个停靠点各自会出现何种敌人，具体如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>进攻波次种族</th>
                <th>停靠点 1 种族</th>
                <th>停靠点 2 种族</th>
                <th>停靠点 3 种族</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>星灵</td>
                <td>异虫</td>
                <td>人类</td>
                <td>星灵</td>
            </tr>
            <tr>
                <td>人类</td>
                <td>星灵</td>
                <td>异虫</td>
                <td>人类</td>
            </tr>
            <tr>
                <td>异虫</td>
                <td>人类</td>
                <td>星灵</td>
                <td>异虫</td>
            </tr>
        </tbody>
    </table>
    <p>第一个停靠点总是在同一区域。不过，停靠点 2 和 3 的顺序会互换，条件是在奖励目标离开第一个停靠点前摧毁上方的裂片 3。</p>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2:48</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>7:00</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>9:00</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>12:30</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>16:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
                <td>19:00</td>
                <td>6</td>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
                <td>22:00</td>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <td>8</td>
                <td>24:00</td>
                <td>6</td>
                <td>6</td>
            </tr>
            <tr>
                <td>9</td>
                <td>26:00</td>
                <td>6</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
    <p>此外，部分进攻波次还会包含混合体。对应波次及其中的混合体数量如下：</p>
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
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2</td>
                <td>1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>2</td>
                <td>1</td>
            </tr>
            <tr>
                <td>6</td>
                <td>2</td>
                <td>1</td>
            </tr>
            <tr>
                <td>7</td>
                <td>2</td>
                <td>1</td>
            </tr>
            <tr>
                <td>8</td>
                <td>2</td>
                <td>1</td>
            </tr>
            <tr>
                <td>9</td>
                <td>2</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <p>这些混合体的类型取决于敌方种族，具体如下：</p>
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
    <p>奖励目标会在以下时间向停靠点移动：</p>
    <ul>
        <li>7:00</li>
        <li>13:00</li>
        <li>16:00</li>
    </ul>
    <h2 id="spawnPoints">出生点</h2>
    <p>进攻波次会从地图两侧生成，各自拥有独立的生成点。遗憾的是，这些位置无法通行，因此不能直接蹲守。不过，所有进攻波次都会前往一处混合体生成点集结，而这个位置<i>可以</i>蹲守。各生成点如下。</p>
    <p>北侧进攻波次：</p>
    <img src="/images/missiondata/scytheofamon/northernspawnpoint.jpg" alt="北侧生成点">
    <p>南侧进攻波次：</p>
    <img src="/images/missiondata/scytheofamon/southernspawnpoint.jpg" alt="南侧生成点">
    <h2 id="misTips">任务技巧</h2>
    <ul>
        <li>为后续虚空裂片准备充足部队。死亡之握水晶可以瞬间消灭一支规模很小的军队。</li>
        <li>死亡之握水晶无法以英雄单位为目标。</li>
        <li>死亡之握水晶被视为单位，因此可以成为狙击和心灵震爆等技能的目标。</li>
        <li>熟练玩家可以反向清图，从离基地最远的虚空裂片开始。这样能在那些难缠的裂片尚且较弱时尽早将其移除。</li>
        <li>通常最好先清除裂片 2，尽早取得分矿。这对于需要强大经济的指挥官尤其有用。</li>
    </ul>
    <h2 id="comTips">指挥官专属技巧</h2>
    <ul>
        <li><a href="/commanders/abathur">阿巴瑟</a>：在混合体生成位置布置剧毒巢穴，削弱进攻波次。</li>
        <li><a href="/commanders/abathur">阿巴瑟</a>：任务开始时采集生物质，可在虚空裂隙附近布置剧毒巢穴，快速从裂隙单位身上获取生物质。</li>
        <li><a href="/commanders/alarak">阿拉纳克</a>：先用两次光子超载清除分矿处的裂片。</li>
        <li><a href="/commanders/artanis">阿塔尼斯</a>：先用一次太阳能轰炸清除分矿处的裂片。</li>
        <li><a href="/commanders/horner">汉与霍纳</a>：在混合体生成位置布置磁力地雷，削弱进攻波次。</li>
        <li><a href="/commanders/karax">凯拉克斯</a>：让探机潜入分矿裂片的位置，再用光子炮将其摧毁。</li>
        <li><a href="/commanders/mengsk">蒙斯克</a>：蒙斯克可以较轻松地速通本任务：用地堡清除裂片 4，用核弹清除裂片 3 和 5，再用裂地者清除裂片 1 和 2。</li>
        <li><a href="/commanders/nova">诺娃</a>：游戏开始时，可以采集上方分矿左侧的高能瓦斯而不引起敌军仇恨。</li>
        <li><a href="/commanders/nova">诺娃</a>：如果使用攻城坦克，请在混合体生成位置布置蜘蛛雷，削弱进攻波次。</li>
        <li><a href="/commanders/raynor">雷诺</a>：如果使用秃鹫，请在混合体生成位置布置蜘蛛雷，削弱进攻波次。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：游戏开始时，可以采集上方分矿左侧的高能瓦斯而不引起敌军仇恨。</li>
        <li><a href="/commanders/vorazun">沃拉尊</a>：在地图两侧布置黑暗水晶塔，以便拦截进攻波次。</li>
        <li><a href="/commanders/zeratul">泽拉图</a>：虚空抑制晶体可以打断并禁用虚空裂片的所有技能。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
