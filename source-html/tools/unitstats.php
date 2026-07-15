<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 单位属性</title>
  <meta name="description" content="查看并比较合作任务中各单位升级前后的属性，也包含埃蒙单位的数据。">
  <meta name="keywords" content="星际争霸 II, 合作任务, 单位属性, 比较">
  <link rel="canonical" href="https://starcraft2coop.com/tools/unitstats">
  <style>
    @media (max-width: 700px){
        #unitStats tr:not(#dataContainers) td:nth-child(2),#unitStats tr:not(#dataContainers) td:nth-child(3){
            display:none;
        }
        #raceFilters{
            line-height:50px;
        }
        #dataContainer{
            width:100px;
            height:250px;
            float:right;
            background-color:#1f1f1f;
            border-radius:25px;
            border:1px solid #ccc;
            padding:5px;
        }
    }
    @media (min-width: 701px){
        #dataContainer{
            width:240px;
            height:250px;
            float:right;
            background-color:#1f1f1f;
            border-radius:25px;
            border:1px solid #ccc;
            padding:5px;
        }
    }
    .tableContainer{
        overflow:hidden;
    }
    #unitStats{
        overflow:hidden;
        table-layout:fixed;
        width:100%;
    }
    #unitStats th:nth-child(1){
        width:30px;
    }
    #unitStats th:nth-child(2){
        width:200px;
        text-align: middle;
    }
    #unitStats th:nth-child(3){
        width:250px;
    }
    #unitStats th:nth-child(4){
        width:250px;
    }
    #unitStats td:first-child img{
        cursor:pointer;
        width:30px;
        border-radius: 50%;
    }
    #leftList, #leftStats, #comparison{
        vertical-align:top;
        overflow:hidden;
    }
    #leftList ul{
        list-style-type: none;
        padding: 0;
    }
    #leftList li{
        font-size:0.98em;
        cursor:pointer;
    }
    #leftList{
        text-align:left;
    }
    #unitStats th{
        border: none;
        vertical-align:bottom;
    }
    #unitStats td{
        border:none;
    }
    #unitStats td{
        border-right: 1px solid #ccc;
    }
    #unitStats th.rotate1 > div {
      transform:
        translate(23px, -7px)
        rotate(315deg);
        width: 30px;
    }
    #comparisonContainer{
        vertical-align:top;
    }
    .title{
        display:block;
        text-align:center;
        text-decoration:underline;
        margin-top:15px;
    }
    #unitHP{
        color:chartreuse;
    }
    #unitArmor{
        color:darkgreen;
    }
    #unitShields{
        color:aqua;
    }
    #unitShieldArmor{
        color:darkseagreen;
    }
    #unitEnergy{
        color:darkorchid;
    }
    .upgradesList{
        margin-top:50px;
        padding:5px;
        border:1px solid white;
        padding-right:3px;
        padding-right:3px;
        padding-bottom:5px;
    }
    .upgradesList img{
        width:50px;
        cursor:pointer;
        opacity:0.25;
    }
    .upgradesList img.selectedUpgrade{
        border:1px dashed yellow;
        opacity: 1;
    }
    .masteryContainer, .prestigeContainer{
        margin-top:15px;
        padding:5px;
        border:1px solid white;
    }
    .rangeContainer{
        display:flex;
    }
    .modified{
        color:yellow;
    }
    label{
        width:150px;
    }
    #amonFilter td{
        border:none;
    }
    #amonTableContainer{
        max-width:60%;
        float:left;
        border: 1px solid #ccc;
        padding-top:10px;
        padding-bottom:10px;
        border-radius:25px;
        margin-bottom:50px;
    }
    #flexContainer{
        width:100%;
    }
    .toggle{
        border: 1px solid #ccc;
        margin: 5px;
        padding: 5px;
        cursor:pointer;
        border-radius:10px;
    }
    .content{
        display: inline-flex;
        border: 1px solid #ccc;
        margin: 5px;
        padding: 5px;
        cursor:pointer;
        border-radius:10px;
    }
    .Protoss{
        background-color:peru;
    }
    .Terran{
        background-color:darkblue;
    }
    .Zerg{
        background-color:darkmagenta;
    }
    .Hybrid{
        background-color:black;
    }
    .Infested{
        background-color:darkred;
    }
    .Objective{
        background-color:darkgreen;
    }
    .Mutator{
        background-color:orangered;
    }
    .clear{
        clear:both;
    }
    th.rotate1{
        height: 140px;
        white-space: nowrap;
    }
    th.rotate1 > div > span{
        border-bottom: 1px solid #ccc;
        padding: 5px 10px;
    }
  </style>
  <?= startContent() ?>
    <h1>玩家与埃蒙单位属性列表</h1>
    <?php include("../../includes/reporterror.php");?>
    <h2>单位比较</h2>
    <p>使用下方工具可查看单个单位的属性，或比较两个单位。点击指挥官，再点击其单位即可查看属性；若要比较，请在另一侧选择指挥官及其单位。</p>
    <p>数据说明：</p>
    <ul>
        <li>数据只显示基础属性，以及会影响这些基础属性的升级。影响技能冷却时间的升级不会显示。</li>
        <li>所有进化单位（例如阿巴瑟的吞噬者、德哈卡的原始战斗单位）的建造时间只包含进化耗时，不包含前置单位的建造时间。</li>
        <li>使用充能次数生产的单位（例如阿塔尼斯）以充能冷却时间作为建造时间。斯托科夫的单位显示实际建造时间，而非充能时间。</li>
        <li>一次生成多个的单位（例如跳虫），资源消耗会除以生成数量。</li>
        <li>可叠加多层的强化效果（例如生物质）按最大层数计算。</li>
        <li>只列出会改变单位武器属性的升级。因此，菲尼克斯“网络管理员”等伤害减免效果不会显示。</li>
        <li>数值由计算得出，可能存在轻微的舍入误差。</li>
    </ul>
    <div id="tooltip" style="display: none; top: 1601px; left: 667px; position: absolute;"><b>升级名称</b><br><br>所选升级的说明。</div>
    <div class="tableContainer">
        <table id="unitStats">
            <thead>
                <tr>
                    <th class="rotate1"><div><span>指挥官</span></div></th>
                    <th>单位</th>
                    <th>数据</th>
                    <th>比较</th>
                </tr>
            </thead>
            <tbody>
                <tr id="dataContainers">
                    <td></td>
                    <td rowspan="19" id="leftList"></td>
                    <td rowspan="19" id="leftStats"></td>
                    <td rowspan="19" id="comparisonContainer"><button id='clearCompare' type='button'>清除</button><div id="comparison"></div></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/raynorportrait.png" data-commander="Raynor" alt="雷诺"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/kerriganportrait.png" data-commander="Kerrigan" alt="凯瑞甘"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/artanisportrait.png" data-commander="Artanis" alt="阿塔尼斯"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/swannportrait.png" data-commander="Swann" alt="斯旺"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/zagaraportrait.png" data-commander="Zagara" alt="扎加拉"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/vorazunportrait.png" data-commander="Vorazun" alt="沃拉尊"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/karaxportrait.png" data-commander="Karax" alt="凯拉克斯"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/abathurportrait.png" data-commander="Abathur" alt="阿巴瑟"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/alarakportrait.png" data-commander="Alarak" alt="阿拉纳克"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/novaportrait.png" data-commander="Nova" alt="诺娃"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/stukovportrait.png" data-commander="Stukov" alt="斯托科夫"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/fenixportrait.png" data-commander="Fenix" alt="菲尼克斯"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/dehakaportrait.png" data-commander="Dehaka" alt="德哈卡"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/hornerportrait.png" data-commander="Horner" alt="汉与霍纳"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/tychusportrait.png" data-commander="Tychus" alt="泰凯斯"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/zeratulportrait.png" data-commander="Zeratul" alt="泽拉图"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/stetmannportrait.png" data-commander="Stetmann" alt="斯台特曼"></td>
                </tr>
                <tr>
                    <td><img src="/images/commanderportraits/mengskportrait.png" data-commander="Mengsk" alt="蒙斯克"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        var oldtdRight;
        var oldtdLeft;
        var unitColumn;
        var selectedCommanders= ["",""];
        var selectedUnits= ["",""];
        $("#unitStats img").on("click", function(){
            var selectedCommander = $(this).data("commander");
            $(this).parent().css("background-color", "darkslateblue");
            if (oldtdLeft){
                oldtdLeft.css("background-color","");
            }
            oldtdLeft=$(this).parent();
            selectedCommanders[0] = selectedCommander;
            $("#leftList").text("正在加载……");

            $.ajax({
                type: 'GET',
                url: '/scripts/calculatestats.php',
                data: {mode:1, commander: selectedCommander},
                success: function(response) {
                    $("#leftList").html(response);
                }
            });
        });
        $("#unitStats").on("click", "li", function(){
            var selectedUnit = $(this).data("unit");
            var dataColumn;
            var unitColumn;
            var selectedCommander = selectedCommanders[0];
            selectedUnits[0] = selectedUnit;
            $("#leftStats").text("正在加载……");
            $.ajax({
                type: 'GET',
                url: '/scripts/calculatestats.php',
                data: {mode:2, commander: selectedCommander, unit: selectedUnit },
                success: function(response) {
                    response = JSON.parse(response);
                    $("#leftList").find(".upgradesList").remove();
                    $("#leftList").append(response[1]);
                    $("#leftStats").html("<button id='setCompare' type='button'>设为比较对象 &gt;&gt;</button><br><div id='statsContent'>" + response[0] + "</div>");
                },
            });
        });

        $("#leftList").on('mouseover',"img", function(e){
            var upgrade = $(this).attr("alt").split(":");
            $("#tooltip").html("<b>" + upgrade[0] + "</b><br><br>" + upgrade[1]);
            $("#tooltip").show();
        });
        $("#leftList").on('mouseleave',"img", function(){
            $("#tooltip").hide();
        });
        $("#leftList").on('mouseover',"img",function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
        $("#leftList").on('click',"img", function(e){
            $(this).toggleClass("selectedUpgrade");
        });

        $("#leftList").on('click',"#recalculate", function(e){
            var jsonobject = {};
            var upgradeArray=[];
            var masteryArray=[];

            jsonobject['mode'] = 3;
            jsonobject['commander'] = selectedCommanders[0];
            jsonobject['selectedUnit'] = selectedUnits[0];

            $("#leftList").find(".upgradesList").find(".selectedUpgrade").each(function(){
                var filePath = $(this).attr("src");
                var tempArray = filePath.split("/");
                upgradeArray.push(tempArray[5].replace(".png", ""));
            })
            jsonobject['upgrades']=upgradeArray;

            if($("#leftList input[name='attackupgradelevel']:checked").length){
                jsonobject['attacklevel'] = $("#leftList input[name='attackupgradelevel']:checked").val();
                jsonobject['armorlevel'] = $("#leftList input[name='armorupgradelevel']:checked").val();
            }
            else if($("#leftList input[name='rank']:checked").length){
                jsonobject['ranklevel'] = $("#leftList input[name='rank']:checked").val();
            }
            else{
                jsonobject['artifactslevel'] =$("#leftList input[name='fragmentscollected']:checked").val();
            }

            if($("#leftList input[name='shieldupgradelevel']:checked").length){
                jsonobject['shieldlevel'] = $("#leftList input[name='shieldupgradelevel']:checked").val();
            }

            $(".masterySlider").each(function(){
                masteryArray.push([$(this).attr('name'), $(this).val()]);
            })
            jsonobject['masteries']= masteryArray;

            if($("#leftList input[name='" + selectedCommanders[0] + "Prestige']:checked").length){
                jsonobject['prestige'] = $("#leftList input[name='" + selectedCommanders[0] + "Prestige']:checked").val();
            }

            console.log(jsonobject);
            $.ajax({
                type: 'GET',
                url: '/scripts/calculatestats.php',
                data: jsonobject,
                success: function(response){
                    $("#leftStats").html("<button id='setCompare' type='button'>设为比较对象 &gt;&gt;</button><br><div id='statsContent'>" + response + "</div>");
                }
            })
        });
        $("#leftList").on('input',".masterySlider", function(e){
            $(this).siblings("span").text($(this).val());

        })
        $("#leftStats").on('click',"#setCompare", function(e){
            $("#comparison").html($("#statsContent").html());
        })
        $("#clearCompare").on('click', function(e){
            $("#comparison").html("");
        })
    </script>
    <h2>敌方目标耐久度</h2>
    <p>使用下方筛选器查看耐久度（生命值 + 护盾）低于特定数值的敌方单位和任务目标。点击单位可查看其耐久数据与相关标签。</p>
    <p>种族筛选：</p>
    <p id="raceFilters">
        <span class="toggle Protoss" data-race="Protoss">星灵</span>
        <span class="toggle Terran" data-race="Terran">人类</span>
        <span class="toggle Zerg" data-race="Zerg">异虫</span>
        <span class="toggle Hybrid" data-race="Hybrid">混合体</span>
        <span class="toggle Infested" data-race="Infested">感染体</span>
        <span class="toggle Objective" data-race="Objective">任务目标</span>
        <span class="toggle Mutator" data-race="Mutator">突变因子</span>
    </p>
    <div id="formElements">
        <table id="amonFilter">
            <tbody>
                <tr>
                    <td><label>最低耐久度：</label></td>
                    <td><input type="text" id="minVitality" maxlength="5" size="5"></td>
                </tr>
                <tr>
                    <td><label>最高耐久度：</label></td>
                    <td><input type="text" id="maxVitality" maxlength="5" size="5"></td>
                </tr>
            </tbody>
        </table>
        <button id="filter" type="button">筛选</button><button id="reset" type="button">重置</button>
    </div>
    <br><br>
    <script>
        $(".toggle").on("click", function(){
            var toggledRace = $(this).attr("class").toString().split(' ')[1];
            if ($(this).css("opacity")==0.25){
                $(this).css("opacity", 1.0);
                $(".content." + toggledRace).fadeIn(400, function(){
                    $(".content." + toggledRace).css("display","inline-flex");
                })

            }
            else{
                $(this).css("opacity", 0.25);
                $(".content." + toggledRace).fadeOut(400, function(){
                    $(".content." + toggledRace).css("display","none");
                })

            }

        })
    </script>
    <div id="dataContainer"></div>
    <div id="amonTableContainer">
        <div id="flexContainer">
            <?php include("../scripts/generatetable.php");?>
        </div>
    </div>
    <script>
        var amonUnits = [];
        fetch("../data/amonunits.json").then(function(response){ return response.json(); }).then(function(data){ amonUnits = data; });

        function renderAmonStats(unit) {
            var html = "<span class='title'>" + unit.name + "</span>";
            if (unit.shields !== 0) html += "<span id='unitShields'>护盾：" + unit.shields + "</span><br><span id='unitShieldArmor'>护盾护甲：" + unit.shieldarmor + "</span><br>";
            html += "<span id='unitHP'>生命值：" + unit.hp + "</span><br><span id='unitArmor'>护甲：" + unit.armor + "</span><br><span class='title'>标签</span><br>";
            [["light", "轻甲"], ["armored", "重甲"], ["biological", "生物"], ["mechanical", "机械"], ["psionic", "灵能"], ["heroic", "英雄"], ["massive", "重型"], ["structure", "建筑"]].forEach(function(tag){ if (unit[tag[0]]) html += tag[1] + "<br>"; });
            return html;
        }

        function renderAmonTable(minVitality, maxVitality) {
            var units = amonUnits.filter(function(unit){
                var vitality = unit.hp + unit.shields;
                return vitality >= minVitality && vitality <= maxVitality;
            }).sort(function(a, b){ return a.name.localeCompare(b.name); });
            return units.map(function(unit){ return "<div class='content " + unit.race + "' data-amon-id='" + unit.amonid + "'>" + unit.name + "</div>"; }).join("");
        }

        $("#flexContainer").on("click",".content", function(){
            selectedUnit=$(this).data("amon-id");
            var unit = amonUnits.find(function(item){ return String(item.amonid) === String(selectedUnit); });
            if (unit) $("#dataContainer").html(renderAmonStats(unit));
        })
        $("#filter").on("click", function(){
            var maxVit=$("#maxVitality").val();
            var minVit=$("#minVitality").val();
            if (maxVit!=="" || minVit!==""){
                if(maxVit==""){
                    maxVit = 0;
                }
                if(minVit==""){
                    minVit = 0;
                }
                $("#flexContainer").html(renderAmonTable(parseInt(minVit, 10), parseInt(maxVit, 10)));
                $(".toggle").each(function(){
                    if($(this).css("opacity")==0.25) $("#flexContainer").find("." + $(this).data("race")).css("display","none");
                });
            }

        })
        $("#reset").on("click", function(){
            $(".toggle").each(function(){
                $(this).css("opacity",1);
            })
            $("#maxVitality").val("");
            $("#minVitality").val("");
            $("#flexContainer").html(renderAmonTable(0, Number.MAX_SAFE_INTEGER));
        })
    </script>
    <div class="clear"></div>
<?= endContent() ?>
