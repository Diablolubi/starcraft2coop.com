<?php /** @generateStatic */
require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
    <title>《星际争霸2》合作任务 - 每周突变</title>
    <meta name="description" content="《星际争霸2》合作任务每周突变">
    <meta name="keywords" content="星际争霸 合作任务 攻略 每周突变">
    <link rel="canonical" href="https://starcraft2coop.com/resources/weeklymutations">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <script>
      function validate() {
          var x = $('#mutationForm [name=file]').val()
          if (x == "") {
              alert("未选择文件");
              return false;
          }
          var x = $('#mutationForm [name=desc]').val()
          if (x == "") {
              alert("说明不能为空");
              return false;
          }
      }
    </script>
    <style>
        #player{
            position:fixed;
            z-index: 3;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display:none;
        }
        #player iframe{
            max-width:none;
            width: 85vw;
            height: 50vw;
        }
        .cast{
            height:30px;
            display:inline;
            vertical-align:middle;
            cursor:pointer;
        }
        #maps, #mutators, #difficultyLevel{
            height:50px;
        }
        #maps p, #mutators p, #difficultyLevel p{
            line-height:50px;
            vertical-align:middle;
        }
        .clickable{
            height:30px;
            cursor:pointer;
        }
        #mutationList td:nth-child(2),
        #mutationList td:nth-child(4),
        #mutationList td:nth-child(5),
        #mutationList td:nth-child(6){
            max-width:175px;
        }
        #current{
            border:1px solid white;
             margin-bottom:2rem;
        }
        #current p{
            padding-left:10px;
        }

        #commanders{
            vertical-align:top;
            display:inline-block;
            max-width:27%;
            border-right: 1px solid white;
            padding-left:5px;
            padding-bottom:5px;
        }
        #tips{
            display:inline-block;
            max-width:70%;
        }
        #commanderTips{
            width:100%;
        }
        .untoggled{
            opacity:0.5;
        }
        .commanderIcon{
            cursor: pointer;
            margin-left:5px;
            margin-right:5px;
            border-radius:50%;
        }
        .commanderTip{
            display:none;

        }
        #castedGame{
            text-align:center;
        }
        #weekly{
            text-align:center;
            margin-top:10px;
        }
        #title{
            text-align:center;
            font-style: italic;
        }
        #info{
            padding-left:10px;
            width:45%;
            display:inline-block;
        }
        #interactions{
            width:45%;
            display:inline-block;
            vertical-align:top;
        }
        .submitted{
            background-color:darkgreen;
        }
        .diff1{
            color:darkgreen;
            border:1px solid;
            padding:5px;
        }
        .diff2{
            color:limegreen;
            border:1px solid;
            padding:5px;
        }
        .diff3{
            color:yellow;
            border:1px solid;
            padding:5px;
        }
        .diff4{
            color:orangered;
            border:1px solid;
            padding:5px;
        }
        .diff5{
            color:red;
            border:1px solid;
            padding:5px;
        }
        .diff6{
            color:maroon;
            border:1px solid;
            padding:5px;
        }
        .diff7{
            color:black;
            border:1px solid;
            padding:5px;
        }
        .ribbon{
            position:relative;
            overflow:hidden;
        }
        .ribbon0{
            position:absolute;
            width: 35px;
            height: 15px;
            background: black;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon1 {
            position: absolute;
            width: 35px;
            height: 15px;
            background: darkgreen;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon2 {
            position: absolute;
            width: 35px;
            height: 15px;
            background: limegreen;
            color:black;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon3{
            position: absolute;
            width: 35px;
            height: 15px;
            background: yellow;
            color:black;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon4 {
            position: absolute;
            width: 35px;
            height: 15px;
            background: orangered;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon5 {
            position: absolute;
            width: 35px;
            height: 15px;
            background: red;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon6{
            position: absolute;
            width: 35px;
            height: 15px;
            background: maroon;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .ribbon7{
            position: absolute;
            width: 35px;
            height: 15px;
            background: black;
            top: 0;
            text-align: center;
            line-height: 15px;
            left:-10px;
            transform: rotate(-45deg);
        }
        .brutalFilter0{
            display: inline-block;
            background: black;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .brutalFilter1{
            display: inline-block;
            background: darkgreen;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .brutalFilter2{
            display: inline-block;
            background: limegreen;
            color:black;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .brutalFilter3{
            display: inline-block;
            background: yellow;
            color:black;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .brutalFilter4{
            display: inline-block;
            background: orangered;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .brutalFilter5{
            display: inline-block;
            background: red;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .brutalFilter6{
            display: inline-block;
            background: maroon;
            border-radius: 50%;
            width: 30px;
            text-align: center;
            line-height: 25px
        }
        .statsTitle{
            text-decoration:underline;
            margin-bottom:0;
        }
        .stats p{
            margin:0.1rem;
            font-size:0.85rem;
        }
        .current{
            background:#2d602d;
        }
    </style>
<?= startContent() ?>
    <h1>每周突变及难度列表</h1>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#guide">每周突变新手指南</a></p>
        <p><a href="#cycle">每周突变循环</a></p>
        <p><a href="#past">带解说的每周突变</a></p>
    </div>
    <h2 id="guide">每周突变新手指南</h2>
    <p>顾名思义，每周突变是以每周挑战形式出现的突变任务。完成每周挑战可根据所选难度获得经验悬赏，具体如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>难度</th>
                <th>悬赏</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>休闲</td>
                <td>25,000</td>
            </tr>
            <tr>
                <td>普通</td>
                <td>35,000</td>
            </tr>
            <tr>
                <td>困难</td>
                <td>50,000</td>
            </tr>
            <tr>
                <td>残酷</td>
                <td>75,000</td>
            </tr>
        </tbody>
    </table>
    <p>完成某一难度的每周突变，也会解锁所有更低难度的悬赏。例如，以残酷难度完成每周突变（俗称“残酷突变”）可获得185,000点经验。每项每周悬赏只能领取一次。</p>
    <p>将鼠标悬停在突变因子图标上可查看简介。详情请参阅<a href="/resources/mutators">突变因子</a>页面。</p>
    <ul>
    </ul>

    <script>
        $(".commanderIcon").click(function(){
            var selectedCommander = $(this).attr('alt');
            $(".commanderIcon").not(".untoggled").addClass("untoggled");
            $('.commanderTip').hide();
            $(this).removeClass("untoggled");
            $("#" + selectedCommander + "Tip").show();
        });
        $(".extraVid").click(function() {
            $("#video").attr("src",$(this).attr("href"));
            $("#player").fadeIn();
            return false;
        });
    </script>
    <div id="tooltip">提示</div>

    <h2 id="cycle">每周突变循环</h2>
    <p>每周突变按下表所示的固定循环出现，<a href="#thisweek">本周当前突变</a>以绿色高亮。</p>
    <table id="mutationCycle">
            <thead>
                <tr id="columnNames">
                    <th>名称</th>
                    <th>地图</th>
                    <th>突变因子1</th>
                    <th>突变因子2</th>
                    <th>突变因子3</th>
                </tr>
            </thead>
            <tbody>
    <?php
    require_once __DIR__ . '/../../includes/queries.php';

    $difficultyArray = get_brutalpluses();
    function getDiffString(?int $brutalPlus): array
    {
        if ($brutalPlus === null) {
            $diffString = "?";
        } else if ($brutalPlus > 6) {
            $diffString = "&#9760;&#65039;"; // skull and crossbones emoji
        } else if ($brutalPlus === 0) {
            // shouldn't ever actually happen
            $diffString = "&#128522;"; // smiling face with smiling eyes emoji
        } else {
            $diffString = "$brutalPlus";
        }

        return [$brutalPlus ?? 0, $diffString];
    }

    function weeklyMutationMutatorLink(array $mutator): string
    {
        $filename = mutator_token($mutator['mutatorname']);
        return "<a href=\"/mutators/" . $filename . "\"><img class=\"miniIcon\" src=\"/images/mutators/" .
            $filename . ".png\" alt=\"\">" . $mutator['mutatorname'] . "</a>";
    }

    $cycleList = get_mutationcycle();
    $mutators = get_mutators();

    [$currentWeekIndex] = get_currentmutationcycle();

    foreach ($cycleList as $rowIndex => $row) {
        $classVals = mission_token($row["map"]);
        $score = 0;
        $unknown = false;
        if ($row["mut01"]) {
            $classVals .= " " . mutator_token($mutators[intval($row["mut01"]) - 1]['mutatorname']);
        }
        if ($row["mut02"]) {
            $classVals .= " " . mutator_token($mutators[intval($row["mut02"]) - 1]['mutatorname']);
        }
        if ($row["mut03"]) {
            $classVals .= " " . mutator_token($mutators[intval($row["mut03"]) - 1]['mutatorname']);
        }
        [$diff, $diffString] = getDiffString($row["brutalplus"]);
        $classVals .= " brutal" . $diff;
        if ($rowIndex == $currentWeekIndex) {
            $classVals .= " current' id='thisweek";
        }
        echo "<tr class='" . $classVals . "'>\n";
        echo "<td class='ribbon'>" . $row["mutation"] . "<div class='ribbon" . $diff . "'>" . $diffString . "</div></td>\n";

        if ($row["map"]) {
            echo "<td><div class='mapImg mapImg-" . mission_token($row["map"]) . "'>" . htmlspecialchars(mapDisplayName($row["map"])) . "</div></td>\n";
        } else {
            echo "<td></td>\n";
        }

        if ($row["mut01"]) {
            echo "<td>" . weeklyMutationMutatorLink($mutators[intval($row["mut01"]) - 1]) . "</td>\n";
        } else {
            echo "<td></td>\n";
        }
        if ($row["mut02"]) {
            echo "<td>" . weeklyMutationMutatorLink($mutators[intval($row["mut02"]) - 1]) . "</td>\n";
        } else {
            echo "<td></td>\n";
        }
        if ($row["mut03"]) {
            echo "<td>" . weeklyMutationMutatorLink($mutators[intval($row["mut03"]) - 1]) . "</td>\n";
        } else {
            echo "<td></td>\n";
        }
        echo "</tr>\n";
    }

    ?>
    </tbody>
    <table>
    <h2 id="past">带解说的每周突变</h2>
    <p>每周突变列表如下：</p>
    <p>筛选条件（点击即可移除）：</p>
    <div id="maps"><p>地图: <select id="mapselect">
        <?php
        foreach (get_missions() as $row) {
            echo("<option value='" . mission_token($row['name']) . "'>" . $row['name'] . "</option>");
        }
        ?>
        </select>
        <button type="button" id="addmap">添加</button>
        </p>
    </div>
    <div id="mutators"><p>突变因子： <select id="mutatorselect">
        <?php
        foreach (get_mutators() as $row) {
            echo("<option value='" . mutator_token($row['mutatorname']) . "'>" . $row['mutatorname'] . "</option>");
        }
        ?>
        </select>
        <button type="button" id="addmutator">添加</button>
        </p>
    </div>
    <div id="difficultyLevel"><p>难度: <select id="difficultyselect"><option value='0'>?</option>
        <?php
        foreach ($difficultyArray as $row) {
            echo("<option value='" . $row['difficulty'] . "'>残酷+" . $row['difficulty'] . "</option>");
        }
        ?>
        </select>
        <button type="button" id="adddifficulty">添加</button>
        </p>
    </div>
    <p>
        <!--button type="button" id="filter">Filter</button-->
        <button type="button" id="clear">清除筛选</button>
    </p>
    <script>
        $("#addmap").click(function(){
            var exists = false;
            $("#maps img").each(function(){
                if($(this).attr('alt')==$("#mapselect").val()){
                    exists = true;
                    return false;
                }
            })
            if(!exists){
                $("#maps p").append('<img class="clickable" src="/images/missionthumbnails/'+ $("#mapselect").val().replace(/ /g,'').toLowerCase() +'.png" alt="' + $("#mapselect").val() + '">')
            }
            updateCastedFilter();
        });
        $("#addmutator").click(function(){
            var exists = false;
            $("#mutators img").each(function(){
                if($(this).attr('alt')==$("#mutatorselect").val()){
                    exists = true;
                    return false;
                }
            })
            if(!exists){
                $("#mutators p").append('<img class="clickable" src="/images/mutators/'+ $("#mutatorselect").val().replace(/ /g,'').toLowerCase() +'.png" alt="' + $("#mutatorselect").val() + '">')
            }
            updateCastedFilter();
        });
        $("#adddifficulty").click(function(){
            var label="";
            if (parseInt($("#difficultyselect").val())>0){
                label = "+" + parseInt($("#difficultyselect").val());
            }
            else{
                label="?";
            }

            var exists = false;
            $("#difficultyLevel div").each(function(){
                if($(this).text()==label){
                    exists = true;
                    return false;
                }
            })
            if(!exists){
                $("#difficultyLevel p").append('<div class="clickable brutalFilter' + $("#difficultyselect").val() + '">'+ label + '</div>');
            }
            updateCastedFilter();
        });
        function updateCastedFilter(){
            var mapClasses = [];
            var mutatorClasses = [];
            var difficultyClasses = [];

            $("#maps img").each(function(){
                mapClasses.push("." + $(this).attr("alt"));
            });
            $("#mutators img").each(function(){
                mutatorClasses.push("." + $(this).attr("alt"));
            });
            $("#difficultyLevel div").each(function(){
                difficultyClasses.push("." + $(this).attr('class').split(' ')[1].replace("Filter",""));
            });

            var collection = $('#mutationList tr');

            $("#mutationList tr").hide();
            if(mapClasses.length!==0){
                collection = collection.filter(mapClasses.join());
            }
            if(mutatorClasses.length!==0){
                mutatorClasses.forEach(function(value){
                    collection = collection.filter(value);
                })
            }
            if(difficultyClasses.length!==0){
                collection = collection.filter(difficultyClasses.join());
            }

            collection.show();
            $("#castedColumnNames").show();
            recount();
        }
        function recount(){
            $("#filterCount").text($('#mutationList tr:visible').length-1);
        }
        $("#clear").click(function(){
            $(".clickable").remove();
            $("#mutationList tr").show();
            updateCastedFilter();
        });
        $(document).on('click','.clickable',function(){
            $(this).remove();
            updateCastedFilter();
        });
        $( document ).ready(function() {
            recount();
        });
    </script>
    <div id="player">
        <iframe id="video" width="640" height="360" src="about:blank" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <p><span id="filterCount">0</span> 项突变</p>
    <div class="tableContainer">
        <table id="mutationList">
            <thead>
                <tr id="castedColumnNames">
                    <th>发布日期</th>
                    <th>名称</th>
                    <th>地图</th>
                    <th>突变因子1</th>
                    <th>突变因子2</th>
                    <th>突变因子3</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $weeklyList = get_weeklymutations();
                $difficultyByMutationId = [];
                foreach (get_mutationcycle() as $cycleRow) {
                    $difficultyByMutationId[(int)$cycleRow['mutationid']] = $cycleRow['brutalplus'] ?? 0;
                }
                foreach ($weeklyList as $row) {
                    $classVals = mission_token($row["map"]);
                    if ($row["mut01"]) {
                        $classVals .= " " . mutator_token($mutators[intval($row["mut01"]) - 1]['mutatorname']);
                    }
                    if ($row["mut02"]) {
                        $classVals .= " " . mutator_token($mutators[intval($row["mut02"]) - 1]['mutatorname']);
                    }
                    if ($row["mut03"]) {
                        $classVals .= " " . mutator_token($mutators[intval($row["mut03"]) - 1]['mutatorname']);
                    }
                    [$diff, $diffString] = getDiffString($difficultyByMutationId[(int)$row['mutationid']] ?? 0);
                    $classVals .= " brutal" . $diff;
                    echo "<tr class='" . $classVals . "'>\n";
                    echo "<td class='ribbon'>" . $row["releasedate"] . "<div class='ribbon" . $diff . "'>" . $diffString . "</div></td>\n";
                    if ($row["link"]) {
                        echo "<td>" . $row["mutation"] . "<img class='cast' src='/images/weeklymutations/casticon.png' alt='https://www.youtube.com/embed/" . $row["link"] . "'></td>\n";
                    } else {
                        echo "<td>" . $row["mutation"] . "</td>\n";
                    }

                    if ($row["map"]) {
                        echo "<td><div class='mapImg mapImg-" . mission_token($row["map"]) . "'>" . htmlspecialchars(mapDisplayName($row["map"])) . "</div></td>\n";
                    } else {
                        echo "<td></td>\n";
                    }

                    if ($row["mut01"]) {
                        echo "<td>" . weeklyMutationMutatorLink($mutators[intval($row["mut01"]) - 1]) . "</td>\n";
                    } else {
                        echo "<td></td>\n";
                    }
                    if ($row["mut02"]) {
                        echo "<td>" . weeklyMutationMutatorLink($mutators[intval($row["mut02"]) - 1]) . "</td>\n";
                    } else {
                        echo "<td></td>\n";
                    }
                    if ($row["mut03"]) {
                        echo "<td>" . weeklyMutationMutatorLink($mutators[intval($row["mut03"]) - 1]) . "</td>\n";
                    } else {
                        echo "<td></td>\n";
                    }
                    echo "</tr>\n";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).click(function(e) {
            if (e.srcElement !== $("#player")){
                $("#video").attr("src",$("#video").attr("src"));
                $("#player").fadeOut();
            }
        });
        $(".cast").click(function() {
            $("#video").attr("src",$(this).attr("alt"));
            $("#player").fadeIn();
            return false;
        });
    </script>

<script src="/scripts/tooltips.js"></script>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
