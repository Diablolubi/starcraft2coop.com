<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 2》合作任务 - 突变因子列表</title>
  <meta name="description" content="《星际争霸 II》合作任务全部突变因子列表，包含机制详解和指挥官专属提示。">
  <meta name="keywords" content="星际争霸 合作任务 指南 突变因子">
  <link rel="canonical" href="https://starcraft2coop.com/resources/mutators">
  <style>
    @media (max-width: 700px){
        #mutatorTable>td:nth-child(1), #mutatorTable>th:nth-child(1){
            display:none;
        }
        #navList{
            display:none;
        }
    }
    #mutatorTable>td:nth-child(1){
        vertical-align:top;
        text-align:center;
        width:7%;
    }
    #mutatorTable>td:nth-child(2){
        vertical-align: top;
        padding-top: 30px;
        width:13%;
    }
    #mutatorTable>td:nth-child(3){
        vertical-align: top;
    }
    #mutatorTable>td:nth-child(4){
        padding-top:15px;
        vertical-align:top;
        text-align:center;
        width:10%;
    }
    .subheading{
        font-weight: bold;
        font-size: 1.5em;
    }
    .dataTable td:nth-child(1),
    .dataTable td:nth-child(2),
    .dataTable td:nth-child(3),
    .dataTable td:nth-child(4){
        vertical-align:middle;
        width:auto;
        padding:5px;
        text-align:left;
    }
    .centered td:nth-child(1),
    .centered td:nth-child(2),
    .centered td:nth-child(3),
    .centered td:nth-child(4){
        text-align:center;
    }
    .detailsButton{
            font-size:0.75em;
            text-decoration:underline;
            cursor:pointer;
    }
    .details{
        display:none;
    }
    .centerAlign{
        display:inline;
        vertical-align:middle;
    }
    .mapSafetyZone{
        border: 1px solid #888;
        display:inline-block;
    }
    .mapSafetyZone p{
        text-align:center;
    }
    #navList{
        font-size:0.75em;
        opacity:0.75;
    }
  </style>
  <?= startContent() ?>
    <h1>合作任务突变因子列表：名称、图标、说明与机制</h1>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#safetyZones">安全区</a></p>
        <p><a href="#mutatorInteractions">突变因子交互</a></p>
        <p><a href="#mutatorList">突变因子列表</a></p>
    </div>
    <h2 id="safetyZones">安全区</h2>
    <p>部分突变因子会制造环境危害，对包括工人在内的玩家单位造成影响或施加减益。这些突变因子会在称为“安全区”的区域内停用。所有玩家主基地和扩张基地均视为安全区。遵循安全区规则的突变因子如下：</p>
    <ul>
        <li>暴风雪</li>
        <li>核弹来袭*</li>
        <li>熔岩爆裂</li>
        <li>轨道轰炸</li>
        <li>净化光束</li>
        <li>时空力场</li>
        <li>时间扭曲</li>
        <li>龙卷风</li>
    </ul>
    <p>*核弹中心不会落在安全区内，但由于爆炸范围很大，核弹仍可能伤害安全区内的单位。</p>
    <p>所有地图的安全区如下图所示。</p>
    <div id="safetyZone">
        <div class="mapSafetyZone">
            <p>升格之链</p>
            <img src="/images/mutatordata/safetyzonechainofascension.jpg" alt="升格之链安全区">
        </div>
        <div class="mapSafetyZone">
            <p>死亡摇篮</p>
            <img src="/images/mutatordata/safetyzonecradleofdeath.jpg" alt="死亡摇篮安全区">
        </div>
        <div class="mapSafetyZone">
            <p>亡者之夜</p>
            <img src="/images/mutatordata/safetyzonedeadofnight.jpg" alt="亡者之夜安全区">
        </div>
        <div class="mapSafetyZone">
            <p>天锁</p>
            <img src="/images/mutatordata/safetyzonelockandload.jpg" alt="天锁安全区">
        </div>
        <div class="mapSafetyZone">
            <p>恶意代码</p>
            <img src="/images/mutatordata/safetyzonemalwarfare.jpg" alt="恶意代码安全区">
        </div>
        <div class="mapSafetyZone">
            <p>疏散矿工</p>
            <img src="/images/mutatordata/safetyzoneminerevacuation.jpg" alt="疏散矿工安全区">
        </div>
        <div class="mapSafetyZone">
            <p>机会渺茫</p>
            <img src="/images/mutatordata/safetyzonemistopportunities.jpg" alt="机会渺茫安全区">
        </div>
        <div class="mapSafetyZone">
            <p>湮灭快车</p>
            <img src="/images/mutatordata/safetyzoneoblivionexpress.jpg" alt="湮灭快车安全区">
        </div>
        <div class="mapSafetyZone">
            <p>聚铁成兵</p>
            <img src="/images/mutatordata/safetyzonepartandparcel.jpg" alt="聚铁成兵安全区">
        </div>
        <div class="mapSafetyZone">
            <p>克哈裂痕</p>
            <img src="/images/mutatordata/safetyzoneriftstokorhal.jpg" alt="克哈裂痕安全区">
        </div>
        <div class="mapSafetyZone">
            <p>埃蒙之镰</p>
            <img src="/images/mutatordata/safetyzonescytheofamon.jpg" alt="埃蒙之镰安全区">
        </div>
        <div class="mapSafetyZone">
            <p>往日神庙</p>
            <img src="/images/mutatordata/safetyzonetempleofthepast.jpg" alt="往日神庙安全区">
        </div>
        <div class="mapSafetyZone">
            <p>熔火危机</p>
            <img src="/images/mutatordata/safetyzonethevermillionproblem.jpg" alt="熔火危机安全区">
        </div>
        <div class="mapSafetyZone">
            <p>虚空降临</p>
            <img src="/images/mutatordata/safetyzonevoidlaunch.jpg" alt="虚空降临安全区">
        </div>
        <div class="mapSafetyZone">
            <p>虚空撕裂</p>
            <img src="/images/mutatordata/safetyzonevoidthrashing.jpg" alt="虚空撕裂安全区">
        </div>
    </div>
    <h2 id="mutatorInteractions">突变因子交互</h2>
    <?php
    require_once __DIR__ . '/../../includes/queries.php';
    $mutatorInfo = get_mutators();
    usort($mutatorInfo, fn($a, $b) => $a['mutatorname'] <=> $b['mutatorname']);
    $mutators = [];
    foreach ($mutatorInfo as $mutator) {
        $mutators[] = [$mutator['mutatorid'],$mutator['mutatorname'],mutator_token($mutator['mutatorname'])];
    }
    ?>
    <form action="mutators.php" method="post">
        <p class="centerAlign">突变因子 1：</p>
        <select name="mut1" id="mut1">
            <?php
            echo "<option value='0'>-</option>";
            foreach ($mutators as [$id, $name, $slug]) {
                echo "<option value='$id' data-slug='$slug'>$name</option>\n";
            }
            ?>
        </select>
        <img class="centerAlign" id="mut1img" src="/images/mutators/random.png" height="50" width="50" alt="突变因子 1">
        <p></p>
        <p class="centerAlign" >突变因子 2：</p>
        <select name="mut2" id="mut2">
            <?php
            echo "<option value='0'>-</option>";
            echo "<option value='-1'>（显示所有交互）</option>";
            foreach ($mutators as [$id, $name, $slug]) {
                echo "<option value='$id' data-slug='$slug'>$name</option>\n";
            }
            ?>
        </select>
        <img class="centerAlign"  id="mut2img" src="/images/mutators/random.png" height="50" width="50" alt="突变因子 2">
        <p></p>
        <button id="reset" type="button">重置</button>
    </form>
    <p>交互：</p>
    <p id="interactions"></p>
    <script>
        var interactionsPairs = {};
        var mutators = {};
        var mutatorSlugs = {};
        var interactionsLoaded = false;
        function getInteractions() {
            if (interactionsLoaded !== false) {
                return !!interactionsLoaded;
            }
            interactionsLoaded = undefined;
            $.ajax({
                type: 'GET',
                url: '/data/mutatorinteractions.json',
                success: function(interactions) {
                    for (var i = 0; i < interactions.length; i++){
                        var key = '' + interactions[i].id1 + '-' + interactions[i].id2;
                        interactionsPairs[key] = interactions[i].interaction;
                    }
                    interactionsLoaded = true;
                    updateInteractions();
                }
            });
            $("#mut1 option").each(function () {
                var val = parseInt(this.value);
                var text = $(this).text();
                mutators[val] = text;
                mutatorSlugs[val] = $(this).data("slug");
            });
            return false;
        }
        function getInteraction(mut1, mut2) {
            if (mut1 > mut2) {
                var temp = mut1;
                mut1 = mut2;
                mut2 = temp;
            }
            var key = '' + mut1 + '-' + mut2;
            return interactionsPairs[key];
        }
        function getAllInteractions(mut) {
            var interactions = {};
            for (var key in mutators) {
                var interaction = getInteraction(mut, parseInt(key));
                if (interaction) {
                    interactions[key] = interaction;
                }
            }
            return interactions;
        }
        function updateInteractions() {
            if (!getInteractions()) return;
            var $mut1 = $("#mut1 option:selected");
            var mut1 = parseInt($mut1.val());
            var filename1 = $mut1.data("slug");
            if (mut1 <= 0) filename1 = 'random';
            var $mut2 = $("#mut2 option:selected");
            var mut2 = parseInt($mut2.val());
            var filename2 = $mut2.data("slug");
            if (mut2 <= 0) filename2 = 'random';
            $("#mut2 option").each(function () {
                var val = parseInt(this.value);
                if (!val || !mut1 || val === -1 || getInteraction(mut1, val)) {
                    this.disabled = false;
                } else {
                    this.disabled = true;
                }
            });
            $("#mut1img").attr("src", "/images/mutators/" + filename1 + ".png");
            $("#mut2img").attr("src", "/images/mutators/" + filename2 + ".png");
            if (mut1 && mut2 === -1) {
                var html = "";
                var interactions = getAllInteractions(mut1);
                for (var key in interactions) {
                    var filename = mutatorSlugs[key];
                    html += "<p><img src=\"/images/mutators/" + filename + ".png\" height=\"25\" width=\"25\" style=\"vertical-align:middle\"> " + mutators[key] + ": " + interactions[key] + "</p>";
                }
                $("#interactions").html(html || "未找到交互。");
            } else if (mut1 && mut2) {
                $("#interactions").text(getInteraction(mut1, mut2) || "未找到交互。");
            } else if (mut1 && !$mut2.length) {
                // mut2 has a disabled option selected, which means there's no interaction
                $("#interactions").text("未找到交互。");
            } else {
                $("#interactions").text(mut1 || mut2 ? "（请选择两个突变因子）" : "");
            }
        }
        $("#mut1").change(function(){
            updateInteractions();
        })
        $("#mut2").change(function(){
            updateInteractions();
        })
        $("#reset").on("click", function(){
            $("#mut1").val(0);
            $("#mut2").val(0);
            $("#mut1 option").removeAttr("disabled");
            $("#mut2 option").removeAttr("disabled");
            $("#mut1img").attr("src", "/images/mutators/random.png");
            $("#mut2img").attr("src", "/images/mutators/random.png");
            $("#interactions").text("");
        })
    </script>
    <h2 id="mutatorList">突变因子列表</h2>
    <p>下方列出了《星际争霸 II》合作任务的全部突变因子及其名称、图标、说明和机制。点击“详情”可显示每个突变因子的更多信息。如需查看突变因子的更多数值数据（以及其他难度等级下的突变因子信息），请访问 <a href="https://seamaguro.blogspot.com/2017/12/mutator-compendium.html" rel="nofollow">Maguro 的博客</a>。</p>
    <p>大多数突变因子还拥有称为“畸变值”的难度分数。这些分数用于为残酷+游戏选择不同难度等级。分数列表和难度等级分界点请参阅<a href="brutal">残酷+页面</a>。</p>
    <p>点击下方链接可快速跳转到相应突变因子：</p>
    <p id="navList"> <a href="#row_afraidofthedark">漆黑一片</a> -
        <a href="#row_aggressivedeployment">强势部署</a> -
        <a href="#row_alienincubation">异形孵化</a> -
        <a href="#row_avenger">复仇者</a> -
        <a href="#row_barrier">屏障</a> -
        <a href="#row_blackdeath">黑死病</a> -
        <a href="#row_blizzard">暴风雪</a> -
        <a href="#row_boombots">爆破机器人</a> -
        <a href="#row_chaosstudios">混乱工作室</a> -
        <a href="#row_concussiveattacks">震荡攻击</a> -
        <a href="#row_darkness">黑暗</a> -
        <a href="#row_diffusion">扩散</a> -
        <a href="#row_doubleedged">双刃剑</a> -
        <a href="#row_eminentdomain">强占地盘</a> -
        <a href="#row_evasivemaneuvers">闪避机动</a> -
        <a href="#row_fatalattraction">致命吸引</a> -
        <a href="#row_fear">恐惧</a> -
        <a href="#row_fireworks">烟花表演</a> -
        <a href="#row_giftexchange">礼物交换</a> -
        <a href="#row_goingnuclear">核弹来袭</a> -
        <a href="#row_hardenedwill">坚定意志</a> -
        <a href="#row_heroesfromthestorm">风暴英雄</a> -
        <a href="#row_inspiration">鼓舞人心</a> -
        <a href="#row_justdie">就是死不了</a> -
        <a href="#row_killbots">杀戮机器人</a> -
        <a href="#row_laserdrill">激光钻机</a> -
        <a href="#row_lavaburst">熔岩爆裂</a> -
        <a href="#row_lifeleech">生命汲取</a> -
        <a href="#row_longrange">超远射程</a> -
        <a href="#row_luckyenvelopes">幸运红包</a> -
        <a href="#row_magnificent">磁力惊人</a> -
        <a href="#row_microtransactions">微交易</a> -
        <a href="#row_mineralshields">矿物护盾</a> -
        <a href="#row_minesweeper">扫雷专家</a> -
        <a href="#row_missilecommand">导弹指挥</a> -
        <a href="#row_momentofsilence">静默时刻</a> -
        <a href="#row_mutuallyassureddestruction">相互保证毁灭</a> -
        <a href="#row_naughtylist">淘气名单</a> -
        <a href="#row_orbitalstrike">轨道轰炸</a> -
        <a href="#row_outbreak">感染爆发</a> -
        <a href="#row_photonoverload">光子超载</a> -
        <a href="#row_polarity">极性互换</a> -
        <a href="#row_poweroverwhelming">势不可挡</a> -
        <a href="#row_propagators">传播者</a> -
        <a href="#row_purifierbeam">净化光束</a> -
        <a href="#row_random">随机</a> -
        <a href="#row_scorchedearth">焦土政策</a> -
        <a href="#row_selfdestruction">自毁程序</a> -
        <a href="#row_sharingiscaring">有福同享</a> -
        <a href="#row_shortsighted">近视眼</a> -
        <a href="#row_slimpickings">资源短缺</a> -
        <a href="#row_speedfreaks">极速狂飙</a> -
        <a href="#row_temporalfield">时空力场</a> -
        <a href="#row_timewarp">时间扭曲</a> -
        <a href="#row_transmutation">转化</a> -
        <a href="#row_trickortreat">不给糖就捣蛋</a> -
        <a href="#row_turkeyshoot">火鸡射击</a> -
        <a href="#row_twister">龙卷风</a> -
        <a href="#row_vertigo">眩晕</a> -
        <a href="#row_voidreanimators">虚空复生者</a> -
        <a href="#row_voidrifts">虚空裂隙</a> -
        <a href="#row_walkinginfested">行尸走肉</a> -
        <a href="#row_wemoveunseen">隐形行动</a></p>
<?php
require_once __DIR__ . '/../../includes/queries.php';
$mutatorInfo = get_mutators();
usort($mutatorInfo, fn($a, $b) => $a['mutatorname'] <=> $b['mutatorname']);
?>
        <table id="mutatorTable">
        <thead>
            <tr>
                <th>图标</th>
                <th>名称</th>
                <th>说明</th>
                <th>可用于自定义游戏？</th>
            </tr>
        </thead>
        <tbody>
<?php foreach ($mutatorInfo as $mutator) { ?>
            <tr id="row_<?= mutator_token($mutator['mutatorname']) ?>">
                <td><img src="/images/mutators/<?= mutator_token($mutator['mutatorname']) ?>.png" alt=""></td>
                <td><?= $mutator['mutatorname'] ?></td>
                <td><?= $mutator['mutatordescription'] ?>
                    <br /><br />
                    <details><summary>详情</summary><?= file_get_contents(__DIR__ . '/../../source-data/mutator-details/' . original_name('mutators', $mutator['mutatorname']) . '.html') ?></details>
                </td>
                <td><img src="/images/mutators/<?= $mutator['customusable'] ? 'yes' : 'no' ?>.png" alt="<?= $mutator['customusable'] ? '是' : '否' ?>"></td>
            </tr>
<?php } ?>
        </tbody>
    </table>
    <script>
        $(".detailsButton").on("click", function(){
            $('.toggled:visible').addClass("adsbygoogle");
            $('.toggled:visible').removeClass("toggled");
            $('.adsbygoogle:hidden').addClass("toggled");
            $('.adsbygoogle:hidden').removeClass("adsbygoogle");
            (adsbygoogle = window.adsbygoogle || []).push({});
        })
    </script>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
