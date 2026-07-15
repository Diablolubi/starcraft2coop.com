<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 精通临界点计算器</title>
  <meta name="description" content="计算达到特定伤害临界点所需的精通点数。">
  <meta name="keywords" content="星际争霸 II, 合作任务, 精通, 临界点, 伤害计算器">
  <link rel="canonical" href="https://starcraft2coop.com/tools/masterybreakpoints">
  <style>
        #abilityContainer,#damageContainer, #protossContainer,#terranContainer,#zergContainer,#infestedContainer,#mutatorContainer{
            border: 1px solid white;
            display: inline-block;
            border-radius: 5px;
            padding: 5px;
        }
        #abilityContainer img{
            max-width:50px;
        }
        #unitContainerSingle,#unitContainerMulti{
            display:block;
            margin-bottom:50px;
        }
        #slide{
            vertical-align:middle;
            width:400px;
        }
        #masteryPoints{
            vertical-align:middle;
        }
        #input{
            width:49%;
            display:inline-block;
            vertical-align:top;
        }
        #calculatedOutput{
            width:49%;
            display:inline-block;
            display:none;
        }
        #unitContainerSingle img, #unitContainerMulti img{
            max-width:40px;
        }
        .unselected{
            opacity:0.5;
        }
        .note{
            font-size:0.6em;
            font-style:italic;
        }
        #unitContainerSingle td:nth-child(2), #unitContainerSingle td:nth-child(3){
            width:400px;
        }
        #unitContainerMulti td:nth-child(2), #unitContainerMulti td:nth-child(3), #unitContainerMulti td:nth-child(4), #unitContainerMulti td:nth-child(5){
            width:200px;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1>精通临界点计算器</h1>
    <?php include("../../includes/reporterror.php");?>
    <p>可使用下方计算器确定消灭埃蒙部队中各类单位所需的精通点数。注意：不考虑任务目标、感染体单位和突变因子单位。左右移动滑块分配精通点数，单位图标会随之移动，显示哪些单位能被消灭、哪些能够存活。</p>
    <div id="input">
        <h2>选择技能/伤害类型</h2>
        <div id="abilityContainer">
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/leapingstrike.png" alt="凯瑞甘的跳跃猛击">
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/psionicshift.png" alt="凯瑞甘的灵能位移">
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/immobilizationwave.png" alt="凯瑞甘的定身波">
            <br>
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/leapingstrikep2.png" alt="凯瑞甘的跳跃猛击">
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/psionicshiftp2.png" alt="凯瑞甘的灵能位移">
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/immobilizationwavep2.png" alt="凯瑞甘的定身波">
            <br>
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/kineticblast.png" alt="凯瑞甘的动能冲击">
            <img class="tooltip unselected" src="/images/commanderdata/hero/kerrigan/crushinggrip.png" alt="凯瑞甘的粉碎之握">
            <br>
            <img class="tooltip unselected" src="/images/commanderdata/abilities/swann/concentratedbeam.png" alt="斯旺的集中光束">
            <img class="tooltip unselected" src="/images/commanderdata/hero/zagara/infesteddrop.png" alt="扎加拉的感染空投单个囊体撞击">
            <img class="tooltip unselected" src="/images/commanderdata/abilities/abathur/spawntoxicnest.png" alt="阿巴瑟的剧毒巢穴">
            <img class="tooltip unselected" src="/images/commanderdata/hero/nova/snipe.png" alt="诺娃的狙击">
            <img class="tooltip unselected" id="penBlast1" src="/images/commanderdata/hero/nova/penetratingblast.png" alt="诺娃的穿透射击">
            <img class="tooltip unselected" id="penBlast2" src="/images/commanderdata/hero/nova/stancedanceswitch.png" alt="诺娃配合形态切换的穿透射击">
            <img class="tooltip unselected" id="sabotageDrone" src="/images/commanderdata/hero/nova/sabotagedrone.png" alt="诺娃的破坏无人机">
            <img class="tooltip unselected" id="banelingBarrage" src="/images/commanderdata/hero/zagara/banelingbarrage.png" alt="扎加拉的爆虫弹幕（每只爆虫命中）">
            <br>
            <img class="tooltip unselected" src="/images/commanderportraits/kerriganportrait.png" alt="凯瑞甘英雄单位的攻击伤害">
            <img class="tooltip unselected" src="/images/commanderportraits/zagaraportrait.png" alt="扎加拉英雄单位的攻击伤害">
            <img class="tooltip unselected" src="/images/commanderportraits/alarakportrait.png" alt="阿拉纳克英雄单位的攻击伤害">
        </div>
    </div>
    <div id="calculatedOutput">
        <h2>伤害属性</h2>
        <div id="damageContainer">
            <div id="damageStats">
                <p>基础伤害：<span id="baseDmg"></span></p>
                <p>精通增幅：<span id="dmgIncrease"></span>%</p>
                <p>当前伤害：<span id="currentDamage"></span><span id="bonus"></span></p>
            </div>
            <div id="sliderContainer">
                <div id="sliderBar">
                    <input id="slide" type="range" min="0" max="30" step="1" value="0" oninput="updateUnits()">
                    <span id="masteryPoints">0</span>
                </div>
                <br>
                <div id="armorContainer">
                    <label><input type="radio" id="armor0" name="armor" value="0" onchange="updateUnits()">0 点护甲</label>
                    <label><input type="radio" id="armor1" name="armor" value="1" onchange="updateUnits()">1 点护甲</label>
                    <label><input type="radio" id="armor2" name="armor" value="2" onchange="updateUnits()">2 点护甲</label>
                    <label><input type="radio" id="armor3" name="armor" value="3" onchange="updateUnits()">3 点护甲</label>
                </div>
            </div>
        </div>
    </div>
    <div class="unitContainer" id="unitContainerSingle">
        <h2>敌方单位</h2>
        <p class="note">注意：异虫单位受到伤害并存活后会恢复生命值，分配精通点数时请考虑这一点。</p>
        <table>
            <thead>
                <tr>
                    <th>种族</th>
                    <th>一击消灭</th>
                    <th>能够存活</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-race="Protoss">星灵</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Terran">人类</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Zerg">异虫</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Infested">感染体</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Mutator">突变因子</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="unitContainer" id="unitContainerMulti">
        <h2>敌方单位</h2>
        <p class="note">注意：异虫单位受到伤害并存活后会恢复生命值，分配精通点数时请考虑这一点。</p>
        <table>
            <thead>
                <tr>
                    <th>种族</th>
                    <th>一击</th>
                    <th>两击</th>
                    <th>三击</th>
                    <th>四击以上</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-race="Protoss">星灵</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Terran">人类</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Zerg">异虫</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Infested">感染体</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td data-race="Mutator">突变因子</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="<?= cachebusted_asset('/scripts/masterybreakpoints.js') ?>"></script>
    <script>
        var breakpointData;
        var selectedAbility;
        var unitsList;
        var multishot = false;
        var breakpointDataPromise = fetch("../data/masterybreakpoints.json")
            .then(function(response) { return response.json(); })
            .then(function(data) { breakpointData = data; return data; });

        $( document ).ready(function() {
            $("#unitContainerSingle").hide();
            $("#unitContainerMulti").hide();
        });
        $(document).on('mouseover','.tooltip',function(){
            $("#tooltip").html($(this).attr("alt")).show();
        });
        $(document).on('mouseleave','.tooltip',function(){ $("#tooltip").hide(); });
        $(document).on('mousemove','.tooltip',function(e){
            $('#tooltip').css({top: e.pageY-40, left: e.pageX+5, position: "absolute"});
        });
        $(".tooltip").click(function(){
            $(".selected").addClass("unselected").removeClass("selected");
            $(this).addClass("selected").removeClass("unselected");
            var src = $(this).attr('src').split('/');
            var abilityName = src[src.length-1].slice(0, -4);
            if (!breakpointData) {
                var clickedElement = this;
                breakpointDataPromise.then(function() { $(clickedElement).trigger('click'); });
                return;
            }
            if (!breakpointData.abilities[abilityName]) return;
            selectedAbility = breakpointData.abilities[abilityName];
            $("#baseDmg").text(selectedAbility.baseDamage);
            $("#dmgIncrease").text(Math.round(selectedAbility.damageIncrease * 10000) / 100);
            $("#calculatedOutput").css("display", "inline-block");
            $("#unitContainerSingle").toggle(!selectedAbility.spammable);
            $("#unitContainerMulti").toggle(selectedAbility.spammable);
            multishot = selectedAbility.spammable;
            $("#slide").val(0);
            $("#armorContainer").toggle(selectedAbility.affectedByArmor);
            if (selectedAbility.affectedByArmor) $("#armor1").prop('checked', true);
            updateUnits();
        });
        function updateUnits(){
            if (!selectedAbility || !breakpointData) return;
            var points = parseInt($("#slide").val(), 10);
            var armor = $("#armorContainer").is(":visible") ? parseInt($("input[name='armor']:checked").val(), 10) : 0;
            var currentDamage = window.masteryBreakpoints.calculateDamage(selectedAbility, points);
            var effectiveDamage = currentDamage - (selectedAbility.affectedByArmor ? armor : 0);
            unitsList = window.masteryBreakpoints.classifyUnits(breakpointData.units, selectedAbility, points, armor);
            $("#currentDamage").text(currentDamage);
            if($("#penBlast1").hasClass("selected") || $("#penBlast2").hasClass("selected")){
                $("#bonus").text("（+" + currentDamage + " 对轻甲）");
            } else if($("#sabotageDrone").hasClass("selected")){
                $("#bonus").text("（+" + currentDamage + " 对建筑）");
            } else {
                $("#bonus").text("");
            }
            var container = multishot ? "#unitContainerMulti" : "#unitContainerSingle";
            $("#masteryPoints").text(points);
            $(container + " table tbody tr").each(function(){
                var row = $(this);
                row.find("td").slice(1).empty();
                (unitsList[row.find("td:first-child").data("race")] || []).forEach(function(item){
                    var imageName = item.token + ".png";
                    var classes = "unit tooltip";
                    var calculatedDamage = effectiveDamage;
                    if(item.light==1){
                        classes += " light";
                        if($("#penBlast1").hasClass("selected") || $("#penBlast2").hasClass("selected")) calculatedDamage *= 2;
                    }
                    if(item.structure==1){
                        classes += " structure";
                        if($("#sabotageDrone").hasClass("selected")) calculatedDamage *= 2;
                    }
                    var durability = item.hp + item.shields;
                    var hitCount = multishot ? Math.min(Math.ceil(durability / calculatedDamage), 4) : (durability <= calculatedDamage ? 1 : 2);
                    row.find("td:nth-child(" + (hitCount + 1) + ")").append(
                        "<img class='" + classes + "' src='/images/comps/unitimages/" + imageName + "' alt='" + item.name + "：" + durability + " 耐久度'>"
                    );
                });
            });
        }
    </script>
<?= endContent() ?>
