<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 残酷+难度</title>
  <meta name="description" content="《星际争霸 II》合作任务残酷+难度与突变因子">
  <meta name="keywords" content="星际争霸 II, 合作任务, 残酷+, 突变因子">
  <link rel="canonical" href="https://starcraft2coop.com/resources/brutal">
  <style>
    #points{
        display:inline;
    }
    #points th{
        cursor:pointer;
    }
    .sort{
        display:inline-block;
        width:30px;
    }
    .sort img{
        width:25px;
    }
    #mutationBox{
        border:1px solid white;
        display:none;
    }
    .toggled{
        background-color: darkslateblue;
    }
    #totalCost{
        background-color:khaki;
        color:black;
        font-size:0.8em;
        display:none;
        z-index:1;
        padding:5px;
        border-radius:5px;
        margin-left:10px;
    }
    .tooltip{
        padding-left:10px;
        padding-right:10px;
        border-radius:25%;
    }
    form{
        margin-bottom:50px;
    }
  </style>
  <?= startContent() ?>
    <h1>残酷+难度：突变因子点数区间与模板</h1>
    <?php include("../../includes/reporterror.php");?>
    <p>残酷+属于“扩展难度”：任务仍以普通残酷难度进行，但除标准任务机制外，还会加入一定数量的随机<a href="mutators">突变因子</a>。只要所用指挥官达到 15 级，就能加入残酷+的随机匹配；残酷+2 及以上难度则必须与队伍中的另一名玩家组队游玩。</p>
    <p>如需了解残酷+如何选择突变因子，可观看下方视频。视频会介绍突变任务模板、如何用数学方法计算不同的突变因子组合数量，以及如何重新平衡权重，使其更接近暴雪的设计意图。</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/9jfWuM215_c" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <p>系统会选取 2 至 4 个突变因子。每个难度等级都有一个总点数区间，对应突变任务的整体难度。各难度的点数与突变因子数量区间如下。注意，残酷+生成的突变因子数量并非均匀分布；按暴雪的设计意图，出现 2 个或 3 个突变因子的概率高于 4 个。详情请观看上方视频。</p>
    <table id="limits" class="centered">
        <thead>
            <tr>
                <th>难度</th>
                <th>最低点数</th>
                <th>最高点数</th>
                <th>最少突变因子</th>
                <th>最多突变因子</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once __DIR__ . '/../../includes/queries.php';

            $brutalPlus = get_brutalpluses();
            foreach ($brutalPlus as $row) {
                echo "<tr><td>" . $row['difficulty'] . "</td><td>" . $row['minpoints'] . "</td><td>" . $row['maxpoints'] . "</td><td>" . $row['minmutators'] . "</td><td>" . $row['maxmutators'] . "</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <p>游戏中的每个突变因子都按其难度分配了点数。更多信息可参阅<a href="mutators">突变因子页面</a>，其中包含内部机制和各指挥官应对技巧等详细内容。突变因子及其点数如下。</p>
    <p>点击列标题可按该列升序或降序排列。点击某行可切换选中状态，并计算所选突变因子的总点数。</p>

    <table id="points">
        <thead>
            <tr>
                <th id="col1">突变因子 <div class="sort"><img src="/images/asc.png" alt="按升序排列" data-sort-direction="asc"><img src="/images/desc.png" alt="按降序排列" data-sort-direction="desc" style="display:none"></div></th>
                <th id="col2">点数 <div class="sort"><img src="/images/asc.png" alt="按升序排列" data-sort-direction="asc" style="display:none"><img src="/images/desc.png" alt="按降序排列" data-sort-direction="desc" style="display:none"></div></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $mutatorInfo = get_mutators();
            usort($mutatorInfo, fn($a, $b) => $a['mutatorname'] <=> $b['mutatorname']);
            $mutators = array_fill(0, 11, []);
//10 is the highest point value
            $countArray = array_fill(0, 11, 0);
            foreach ($mutatorInfo as $row) {
                if ($row['abomination'] > 0) {
                    echo "<tr><td>" . $row['mutatorname'] . "</td><td>" . $row['abomination'] . "</td></tr>";
                    $countArray[$row['abomination']] += 1;
                    array_push($mutators[$row['abomination']], $row['mutatorname']) ;
                }
            }
            ?>
        </tbody>
    </table>
    <div id="totalCost">总点数</div>
    <script>
        $('#points th').click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            var sortedAsc = false;
            var iconVisible = false;
            $(this).find('img').each(function(){
               if($(this).is(':visible')){
                   iconVisible = true;
                   if ($(this).data('sort-direction')==="asc"){
                       sortedAsc = true;
                   }
               }
            });
            if (!iconVisible){
                 $(this).parents('table'). find('img').hide();
                 $(this).find('img:first').toggle()
            }
            else{
                $(this).find("img").toggle();
            }
            if (sortedAsc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){table.append(rows[i])}

        })
        $('#points td').click(function(){
            $(this).parent().toggleClass("toggled");
            if($('.toggled').length>0){
                var totalCost = 0;
                $('.toggled').each(function(){
                    totalCost += parseInt($(this).find('td:nth-child(2)').text());
                    $("#totalCost").text("总点数：" + totalCost);
                })
                $("#totalCost").css('display', 'inline');
            }
            else{
                $("#totalCost").hide();
            }
        })
        $(window).scroll(function() {
            var tableTop = $("#col1").offset().top;
            var tableBottom = $("#points td").last().offset().top;
            var documentHeight = $(document).height();
            if (tableTop > $(window).scrollTop()) {
                $("#totalCost").css({
                    position: 'absolute',
                    top: tableTop
                });
            }
            else if (tableTop < $(window).scrollTop() + $(window).height()) {
                $("#totalCost").css({
                    position: 'fixed',
                    top: 10
                });
            } else {
                $("#totalCost").css({
                    position: 'fixed',
                    top: tableBottom - $(window).scrollTop()
                });
            }
        });
        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index)
                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
            }
        }
        function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
    </script>
    <p>可使用下方演示模拟不同难度的随机突变任务模板。选择所需的残酷+难度并点击“生成”即可。该算法非常接近《星际争霸 II》引擎生成突变任务时所用的算法；由于这里使用 PHP 而非 Galaxy 编写，仅做了少量性能优化。生成突变因子组合后，还会显示其总点数。</p>
    <form action='#'>
        <select id="difficultyLevel">
            <option value="1">残酷+1</option>
            <option value="2">残酷+2</option>
            <option value="3">残酷+3</option>
            <option value="4">残酷+4</option>
            <option value="5">残酷+5</option>
            <option value="6">残酷+6</option>
        </select>
        <input type="submit" value="生成" id="generateMutation">
    </form>
    <div id="tooltip">提示</div>
    <div id="mutationBox">
        <p>突变因子（<span id="cost">0</span> 点）：</p>
        <div id="randomMutation">
        </div>
    </div>
    <script>
        $("#generateMutation").on("click", function(event){
            event.preventDefault();
            $("#cost").text("?");
            $("#randomMutation").empty();
            $("#randomMutation").append("<p>正在加载……</p>");
            var difficultyLevel = parseInt($("#difficultyLevel").val());

            $.ajax({
                type: 'GET',
                url: '/scripts/generatemutation.php',
                data: { difficulty:difficultyLevel },
                success: function(response) {
                    var template = response;
                    generateMutation(template);
                },
            dataType:"json"
            });


        });


        function generateTemplate(muts, minPts, maxPts){
            var found = false;
            var cost = 0;
            var totalCost = 0;
            var result = [];
            const limits = <?php echo(json_encode($countArray))?>;
            while (!found){
                totalCost = 0;
                result = new Array(11).fill(0);
                for (var i=0; i<muts; i++){
                    //10 is the maximum point value
                    cost = Math.floor(Math.random() * Math.min((maxPts-muts + 1), 10)) + 1;
                    totalCost += cost;
                    if (totalCost > maxPts){
                        break;
                    }
                    else{
                        result[cost] += 1;
                    }
                    if(result[cost] > limits[cost]){
                        break;
                    }
                }
                if (totalCost <= maxPts && totalCost >=minPts){
                    found = true;
                    for(var i=0; i<result.length-1;i++){
                        if (result[i] > limits[i]){
                            found=false;
                        }
                    }

                }
            }
            return result;
        }

        function generateMutation(template){
            const mutatorArray = <?php echo(json_encode($mutators))?>;
            var cost = 0;
            var costString = '';
            $("#randomMutation").empty();
            $("#mutationBox").show();
            for(var i=template.length-1;i>0;i--){
                if (template[i]>0){
                    for(var j=0;j<template[i];j++){
                        cost += i;
                        costString += i + ' + ';
                        var randomIndex = Math.floor(Math.random() *  mutatorArray[i].length);
                        var selectedMutator = mutatorArray[i][randomIndex];
                        var selectedMutatorSlug = selectedMutator.toLowerCase().replace(/[^a-z0-9]+/g, '');
                        mutatorArray[i]=mutatorArray[i].slice(0, randomIndex).concat(mutatorArray[i].slice(randomIndex + 1, mutatorArray[i].length));
                        $("#randomMutation").append('<a href="/mutators/' + selectedMutatorSlug + '"><img class="tooltip" src="/images/mutators/' + selectedMutatorSlug + '.png" alt=""></a>')
                    }
                }
            }
            $("#cost").text(costString.slice(0, -3) + ' = ' + cost);
        }

        function weightedRandom(prob) {
            var i;
            var sum=0;
            var r=Math.random();
            for (i in prob) {
                sum += prob[i];
                if (r <= sum){
                    return i;
                }
            }
        }

    </script>
<script src="/scripts/tooltips.js"></script>
<?= endContent() ?>
