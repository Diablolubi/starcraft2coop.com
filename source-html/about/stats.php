<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>StarCraft II 合作任务——统计数据</title>
  <meta name="description" content="与 starcraft2coop.com 和 StarCraft II 内容相关的各类统计数据，例如每周突变中各突变因子的出现次数。">
  <meta name="keywords" content="StarCraft II 合作任务统计">
  <link rel="canonical" href="https://starcraft2coop.com/resources/stats">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
  <script src="/scripts/chartcolors.js"></script>
  <style>
    .centered{
        text-align:center;
    }
    .subheading{
        font-size:1.5em;
        margin:10px;
        vertical-align:middle;
        display:inline-block;
    }
    .infoIcon img{
        width:20px;
        height:20px;
        vertical-align:middle;
    }
    .tooltip{
        display:none;
    }
  </style>
  <?= startContent() ?>
    <h1>本站与合作任务相关统计</h1>
    <?php

    require_once __DIR__ . '/../../includes/queries.php';

    $mutatorInteractionCount = count(get_mutator_interactions());
    $mutatorCommanderTipsCount = count(get_mutator_commander_tips());
    $patchCount = count(get_patch_data());

    $weeklyMutations = get_weeklymutations();
    $weeklyMutationCount = count($weeklyMutations);

    $woms = array_filter($weeklyMutations, fn($weeklyMutation) => $weeklyMutation['mut01'] == 8);
    $WOMCount = count($woms);

    $mutators = get_mutators();

    $sortedMissions = get_missions();
    usort($sortedMissions, fn($a, $b) => $b['mutationcount'] <=> $a['mutationcount']);

    $sortedMutators = $mutators;
    usort($sortedMutators, fn($a, $b) => $b['mutationcount'] <=> $a['mutationcount']);

    function statsMutatorToken(string $name): string
    {
        return mutator_token($name);
    }
    ?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#general">常规统计</a></p>
        <p><a href="#site">本站统计</a></p>
        <p><a href="#weeklyMutations">每周突变</a></p>
        <p><a href="#rc">拍石冠军</a></p>
        <p></p>
    </div>
    <div id="tooltip">提示</div>
    <h2 id="general">常规统计</h2>
    <p>这些统计数据直接与合作任务模式相关，不包括任何社区制作内容。请注意，加入新内容后，在全站更新以适配新补丁之前，这些数据可能不够准确。出现这种情况时，我们会在网站首页发布消息提醒读者。</p>
    <p>指挥官总数：<?= count(get_commanders()) ?></p>
    <p>任务总数：<?= count(get_missions()) ?></p>
    <p>突变因子总数：<?= count(get_mutators()) ?></p>
    <h2 id="site">本站统计</h2>
    <p>这些统计可以让你一窥 starcraft2coop.com 的幕后。本站数据库保存了大量数据，方便用户按需查询突变因子互动等实用信息。其中很多数据会自动提取，并以容易查找的方式呈现给读者，例如<a href="/resources/weeklymutations">每周突变</a>页面。</p>
    <p>突变因子互动总数：<?= $mutatorInteractionCount ?></p>
    <p>指挥官应对突变因子技巧数：<?= $mutatorCommanderTipsCount ?></p>
    <p>分析器可识别补丁数：<?= $patchCount ?></p>
    <h2 id="weeklyMutations">每周突变</h2>
    <p>以下是截至目前（包括当前一期）所有<a href="/resources/weeklymutations">每周突变</a>的一些有趣统计，包括出现频率最高和最低的突变因子。每周突变偶尔会重复，可能影响计数，因此统计会分别考虑包含和排除重复期数的情况。</p>
    <p>每周突变总数：<?= $weeklyMutationCount ?></p>
    <p>厄运之轮出现次数：<?= $WOMCount ?></p>
    <p>出现最频繁的任务：</p>
    <table>
        <thead>
            <tr>
                <th colspan=2>每个周期</th>
            </tr>
            <tr>
                <th>地图</th>
                <th>出现次数</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sortedMissions as $mission) {
                echo("<tr>");
                echo("<td>{$mission['name']}</td>");
                echo("<td class=centered>{$mission['mutationcount']}</td>");
                echo("<tr>\n");
            }
            ?>
        </tbody>
    </table>
    <p>出现最频繁的突变因子：</p>
    <table>
        <thead>
            <tr>
                <th colspan=2>每个周期</th>
            </tr>
            <tr>
                <th>突变因子</th>
                <th>出现次数</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sortedMutators as $mutator) {
                if (original_name('mutators', $mutator['mutatorname']) === 'Random') {
                    continue;
                }
                echo("<tr>");
                $filename = statsMutatorToken($mutator['mutatorname']);
                $img = "<img class='miniIcon' src='/images/mutators/" . $filename . ".png' alt=''>";
                echo("<td><a href='/mutators/" . $filename . "'>$img{$mutator['mutatorname']}</a></td>");
                echo("<td class=centered>{$mutator['mutationcount']}</td>");
                echo("<tr>\n");
            }
            ?>
        </tbody>
    </table>

    <h2 id="community">社区统计</h2>
        <p>注意：数据来自本站过去支持上传录像时收到的录像；目前已不再支持录像上传。<br>
        数据生成时间：2024-05-04 04:00:01<br>
        统计录像总数：255876</p>
    <div class="infoIcon">
        <p class="subheading">各服务器统计对局总数</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">各服务器进行的对局数量。</span>
    </div>
        <div class="chart">
        <canvas id="communityServerGamesChart" width="500" height="250"></canvas>
    </div>
    <script>
        var ctx = $('#communityServerGamesChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["亚洲","中国","欧洲","北美"],
                datasets: [{
                    data: [15069,379,98577,141851],
                    backgroundColor:[colorAsia,colorCN,colorEU,colorNA],
                    hoverBackgroundColor:[colorAsiaDark,colorCNDark,colorEUDark,colorNADark],
                }]
            },
            options:{
                responsive:false,
                legend: {
                    labels: {
                        fontColor: "white",
                        filter: function(legendItem, data) {
                            if(data.datasets[0].data[legendItem.index]==0){
                                return false
                            }
                            else{
                                return true;
                            }
                        }
                    },
                    position: "right",
                    align: "middle"
                },
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return(data.labels[tooltipItem[0].index])
                        },
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                            return currentValue + " 场对局（" + percentage + "%）";
                        }
                    }
                }
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">各指挥官统计对局总数</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">各指挥官的对局数量，按热门程度从高到低排列。</span>
    </div>
        <div class="chart">
        <canvas id="communityCommanderGamesChart" width="500" height="250"></canvas>
    </div>
    <script>
        var ctx = $('#communityCommanderGamesChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["泰凯斯","德哈卡","阿巴瑟","蒙斯克","斯托科夫","诺娃","扎加拉","凯瑞甘","斯台特曼","凯拉克斯","泽拉图","雷诺","霍纳","斯旺","阿拉纳克","阿塔尼斯","菲尼克斯","沃拉尊"],
                datasets: [{
                    data: [22401,21504,18877,18129,17699,17045,13926,13667,12726,12652,12405,11676,11272,10949,10783,10224,10200,9741],
                    backgroundColor:[tychusColor,dehakaColor,abathurColor,mengskColor,stukovColor,novaColor,zagaraColor,kerriganColor,stetmannColor,karaxColor,zeratulColor,raynorColor,hornerColor,swannColor,alarakColor,artanisColor,fenixColor,vorazunColor],
                    hoverBackgroundColor:[darkTychusColor,darkDehakaColor,darkAbathurColor,darkMengskColor,darkStukovColor,darkNovaColor,darkZagaraColor,darkKerriganColor,darkStetmannColor,darkKaraxColor,darkZeratulColor,darkRaynorColor,darkHornerColor,darkSwannColor,darkAlarakColor,darkArtanisColor,darkFenixColor,darkVorazunColor],
                }]
            },
            options:{
                responsive:false,
                legend: {
                    display:false,
                },
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return(data.labels[tooltipItem[0].index])
                        },
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                            return currentValue + " 场对局（" + percentage + "%）";
                        }
                    }
                }
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">各任务统计对局总数</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">各任务的对局数量，按热门程度从高到低排列。</span>
    </div>
        <div class="chart">
        <canvas id="communityMissionGamesChart" width="500" height="250"></canvas>
    </div>
    <script>
        var ctx = $('#communityMissionGamesChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["虚空撕裂","湮灭快车","亡者之夜","克哈裂痕","往日神庙","虚空降临","天锁","机会渺茫","恶意代码","疏散矿工","飞升之链","埃蒙之镰","聚铁成兵","熔火危机","死亡摇篮"],
                datasets: [{
                    data: [32228,23680,23455,18090,16890,16778,15438,15280,14686,14258,14094,14016,13475,12605,10903],
                    backgroundColor:[missionColors[0],missionColors[1],missionColors[2],missionColors[3],missionColors[4],missionColors[5],missionColors[6],missionColors[7],missionColors[8],missionColors[9],missionColors[10],missionColors[11],missionColors[12],missionColors[13],missionColors[14]],
                    hoverBackgroundColor:[darkMissionColors[0],darkMissionColors[1],darkMissionColors[2],darkMissionColors[3],darkMissionColors[4],darkMissionColors[5],darkMissionColors[6],darkMissionColors[7],darkMissionColors[8],darkMissionColors[9],darkMissionColors[10],darkMissionColors[11],darkMissionColors[12],darkMissionColors[13],darkMissionColors[14]],
                }]
            },
            options:{
                responsive:false,
                legend: {
                    display:false,
                },
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return(data.labels[tooltipItem[0].index])
                        },
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                            return currentValue + " 场对局（" + percentage + "%）";
                        }
                    }
                }
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">各难度统计对局总数</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">各难度下进行的对局数量。</span>
    </div>
        <div class="chart">
        <canvas id="communityDifficultyGamesChart" width="500" height="250"></canvas>
    </div>
    <script>
        var ctx = $('#communityDifficultyGamesChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["休闲（0.66%）","普通（3.39%）","困难（11.81%）","残酷（72.71%）","残酷+1（7.2%）","残酷+2（0.74%）","残酷+3（1.06%）","残酷+4（1.85%）","残酷+5（0.27%）","残酷+6（0.31%）"],
                datasets: [{
                    data: [1686,8678,30211,186037,18421,1902,2707,4744,687,803],
                    backgroundColor:[casualColor,normalColor,hardColor,brutalColor,brutal1Color,brutal2Color,brutal3Color,brutal4Color,brutal5Color,brutal6Color],
                    hoverBackgroundColor:[darkCasualColor,darkNormalColor,darkHardColor,darkBrutalColor,darkBrutal1Color,darkBrutal2Color,darkBrutal3Color,darkBrutal4Color,darkBrutal5Color,darkBrutal6Color],
                }]
            },
            options:{
                responsive:false,
                legend: {
                    position: "right",
                    align: "middle",
                    labels:{
                        fontColor: "white",
                    },
                },
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return(data.labels[tooltipItem[0].index])
                        },
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                            return currentValue + " 场对局（" + percentage + "%）";
                        }
                    }
                }
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">各敌方阵容统计对局总数</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">在能够识别敌方阵容的对局中，面对各阵容的对局数量。</span>
    </div>
        <div class="chart">
        <canvas id="communityCompGamesChart" width="500" height="250"></canvas>
    </div>
    <script>
        var ctx = $('#communityCompGamesChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["星灵阵容","大师与机械","高耸行者","毁灭火炮","卡莱之光","风暴围城","暗影破坏","艾尔先锋","族母舰队","人类阵容","突袭小队","战争机器","暗影科技","帝国战斗群","经典步兵","经典机械","异虫阵容","肆虐虫灾","巢虫腐化","爆炸威胁","侵袭虫群","吞噬天灾"],
                datasets: [{
                    data: [0,10931,10915,10772,10220,10793,11077,9379,9006,0,14508,14671,14770,15006,12410,12501,0,18049,17088,18199,15046,14354],
                    backgroundColor:compColors,
                    hoverBackgroundColor:darkCompColors,
                }]
            },
            options:{
                legend: {
                    position: "right",
                    align: "middle",
                    labels:{
                        fontColor: "white",
                        filter: function(legendItem, chartData) {
                            if(legendItem.text.includes("阵容")){
                                return true;
                            }
                            else{
                                return false;
                            }
                        }
                    },
                    onClick: function(e, legendItem) {
                        var index = legendItem.datasetIndex;
                        var ci = this.chart;;
                        var meta = ci.getDatasetMeta(0)
                        if(legendItem.text.includes("星灵")){
                            for(var i=0;i<9;i++){
                                meta.data[i].hidden = !meta.data[i].hidden;
                            }
                        }
                        else if(legendItem.text.includes("人类")){
                            for(var i=9;i<16;i++){
                                meta.data[i].hidden = !meta.data[i].hidden;
                            }
                        }
                        else{
                            for(var i=16;i<22;i++){
                                meta.data[i].hidden = !meta.data[i].hidden;
                            }

                        }
                        ci.update();
                    }
                },
                responsive:false,
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return(data.labels[tooltipItem[0].index])
                        },
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                            return currentValue + " 场对局（" + percentage + "%）";
                        }
                    }
                }
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">指挥官胜率</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">各指挥官的胜率，按胜率从高到低排列。</span>
    </div>
        <div class="chart">
        <canvas id="communityCommanderWinRateChart" width="600" height="400"></canvas>
    </div>
    <script>
        var ctx = $('#communityCommanderWinRateChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["德哈卡","泽拉图","诺娃","菲尼克斯","阿塔尼斯","霍纳","阿巴瑟","阿拉纳克","凯瑞甘","斯台特曼","蒙斯克","扎加拉","凯拉克斯","斯旺","泰凯斯","沃拉尊","斯托科夫","雷诺"],
                datasets: [{
                    data: [19884,11408,15612,9257,9268,10147,16891,9642,12166,11277,15989,12271,11139,9610,19642,8492,15167,9785],
                    backgroundColor: winColor,
                    hoverBackgroundColor: darkWinColor,
                },
                {
                    data: [1620,997,1433,943,956,1125,1986,1141,1501,1449,2140,1655,1513,1339,2759,1249,2532,1891],
                    backgroundColor: lossColor,
                    hoverBackgroundColor: darkLossColor,
                }]
            },
            options:{
                responsive:false,
                legend:{
                    display:false,
                },
                scales:{
                    xAxes:[{
                        ticks:{
                            fontColor: "white"
                        },
                        stacked:true,
                    }],
                    yAxes:[{
                        ticks:{
                            beginAtZero: true,
                            fontColor: "white"
                        },
                        stacked:true,
                    }]
                },
                tooltips: {
                    custom: function(tooltip) {
                        if (!tooltip) return;
                        tooltip.displayColors = false;
                    },
                    callbacks: {
                        label: function(tooltipItem, data) {
                            if(tooltipItem.datasetIndex==0){
                                var currentWins = tooltipItem.yLabel;
                                var totalGames = currentWins + data.datasets[1].data[tooltipItem.index];
                                var percentage = Math.floor(((currentWins/totalGames) * 100)+0.5);
                                return(currentWins + " 场胜利（胜率 " + percentage + "%）");
                            }
                            else{
                                var currentLosses = tooltipItem.yLabel;
                                var totalGames = currentLosses + data.datasets[0].data[tooltipItem.index];
                                var wins = totalGames - currentLosses;
                                var percentage = Math.floor(((wins/totalGames) * 100)+0.5);
                                return(currentLosses + " 场失败（胜率 " + percentage + "%）");
                            }
                        }
                    }
                },
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">任务胜率</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">各任务的胜率，按胜率从高到低排列。</span>
    </div>
        <div class="chart">
        <canvas id="communityMissionWinRateChart" width="600" height="400"></canvas>
    </div>
    <script>
        var ctx = $('#communityMissionWinRateChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["天锁","虚空撕裂","克哈裂痕","熔火危机","虚空降临","亡者之夜","聚铁成兵","疏散矿工","死亡摇篮","湮灭快车","往日神庙","恶意代码","机会渺茫","埃蒙之镰","飞升之链"],
                datasets: [{
                    data: [14555,30327,16529,11441,15155,21170,12111,12648,9619,20865,14410,12366,12861,11768,11822],
                    backgroundColor: winColor,
                    hoverBackgroundColor: darkWinColor,
                },
                {
                    data: [883,1901,1561,1164,1623,2285,1364,1610,1284,2815,2480,2320,2419,2248,2272],
                    backgroundColor: lossColor,
                    hoverBackgroundColor: darkLossColor,
                }]
            },
            options:{
                responsive:false,
                legend:{
                    display:false,
                },
                scales:{
                    xAxes:[{
                        ticks:{
                            fontColor: "white"
                        },
                        stacked:true,
                    }],
                    yAxes:[{
                        ticks:{
                            beginAtZero: true,
                            fontColor: "white"
                        },
                        stacked:true,
                    }]
                },
                tooltips: {
                    custom: function(tooltip) {
                        if (!tooltip) return;
                        tooltip.displayColors = false;
                    },
                    callbacks: {
                        label: function(tooltipItem, data) {
                            if(tooltipItem.datasetIndex==0){
                                var currentWins = tooltipItem.yLabel;
                                var totalGames = currentWins + data.datasets[1].data[tooltipItem.index];
                                var percentage = Math.floor(((currentWins/totalGames) * 100)+0.5);
                                return(currentWins + " 场胜利（胜率 " + percentage + "%）");
                            }
                            else{
                                var currentLosses = tooltipItem.yLabel;
                                var totalGames = currentLosses + data.datasets[0].data[tooltipItem.index];
                                var wins = totalGames - currentLosses;
                                var percentage = Math.floor(((wins/totalGames) * 100)+0.5);
                                return(currentLosses + " 场失败（胜率 " + percentage + "%）");
                            }
                        }
                    }
                },
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">敌方阵容胜率</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">能够识别阵容时，各敌方阵容对应的胜率，按胜率从高到低排列。</span>
    </div>
        <div class="chart">
        <canvas id="communityCompWinRateChart" width="600" height="400"></canvas>
    </div>
    <script>
        var ctx = $('#communityCompWinRateChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["吞噬天灾","暗影破坏","卡莱之光","风暴围城","经典步兵","突袭小队","侵袭虫群","巢虫腐化","高耸行者","大师与机械","族母舰队","毁灭火炮","战争机器","肆虐虫灾","经典机械","艾尔先锋","爆炸威胁","帝国战斗群","暗影科技"],
                datasets: [{
                    data: [13304,10183,9365,9862,11338,13219,13704,15533,9884,9886,8130,9686,13118,16116,11059,8290,16032,13171,12873],
                    backgroundColor: winColor,
                    hoverBackgroundColor: darkWinColor,
                },
                {
                    data: [1050,894,855,931,1072,1289,1342,1555,1031,1045,876,1086,1553,1933,1442,1089,2167,1835,1897],
                    backgroundColor: lossColor,
                    hoverBackgroundColor: darkLossColor,
                }]
            },
            options:{
                responsive:false,
                legend:{
                    display:false,
                },
                scales:{
                    xAxes:[{
                        ticks:{
                            fontColor: "white"
                        },
                        stacked:true,
                    }],
                    yAxes:[{
                        ticks:{
                            beginAtZero: true,
                            fontColor: "white"
                        },
                        stacked:true,
                    }]
                },
                tooltips: {
                    custom: function(tooltip) {
                        if (!tooltip) return;
                        tooltip.displayColors = false;
                    },
                    callbacks: {
                        label: function(tooltipItem, data) {
                            if(tooltipItem.datasetIndex==0){
                                var currentWins = tooltipItem.yLabel;
                                var totalGames = currentWins + data.datasets[1].data[tooltipItem.index];
                                var percentage = Math.floor(((currentWins/totalGames) * 100)+0.5);
                                return(currentWins + " 场胜利（胜率 " + percentage + "%）");
                            }
                            else{
                                var currentLosses = tooltipItem.yLabel;
                                var totalGames = currentLosses + data.datasets[0].data[tooltipItem.index];
                                var wins = totalGames - currentLosses;
                                var percentage = Math.floor(((wins/totalGames) * 100)+0.5);
                                return(currentLosses + " 场失败（胜率 " + percentage + "%）");
                            }
                        }
                    }
                },
            }
        });
    </script>
    <div class="infoIcon">
        <p class="subheading">最快通关时间（残酷）</p>
        <img src="/images/replayanalyzer/info.png" alt="信息">
        <span class="tooltip">在残酷难度下，可以速通的任务所记录到的最快胜利时间。</span>
    </div>
    <table>
        <thead>
            <tr>
                <th>任务名称</th>
                <th>通关时间</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>天锁</td><td>05:33</td></tr><tr><td>虚空撕裂</td><td>06:30</td></tr><tr><td>埃蒙之镰</td><td>07:15</td></tr><tr><td>克哈裂痕</td><td>08:20</td></tr><tr><td>飞升之链</td><td>09:25</td></tr><tr><td>疏散矿工</td><td>09:51</td></tr><tr><td>亡者之夜</td><td>10:44</td></tr><tr><td>死亡摇篮</td><td>11:02</td></tr><tr><td>聚铁成兵</td><td>14:22</td></tr>        </tbody>
    </table>
    <h2 id="rc">拍石冠军</h2>
    <p>这是本站的招牌系列。以下统计汇总了该系列中一些常见问题的相关信息，也能让经常投稿的玩家互相比拼，看看谁更胜一筹！</p>
    <p>注意：完整单集收录计 +1.0 分，合集收录计 +0.5 分。如果同一位投稿者在一部合集中多次入选，则每份投稿分别获得 +0.5 分。</p>
    <p>若要了解“拍石冠军”的更多信息并查看视频链接，请访问<a href="/community/rockslappingchampions">此页面</a>。</p>
    <p>投稿次数最多的玩家：</p>
    <table>
        <thead>
            <tr>
                <th>玩家</th>
                <th>得分</th>
                <th>总集数</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Sintharius</td><td class=centered>14.5</td><td class=centered>16</td><tr>
<tr><td>eViLLiNg</td><td class=centered>14.0</td><td class=centered>14</td><tr>
<tr><td>Aommaster</td><td class=centered>9.0</td><td class=centered>10</td><tr>
<tr><td>macissammich</td><td class=centered>7.0</td><td class=centered>7</td><tr>
<tr><td>Ancalagon</td><td class=centered>5.5</td><td class=centered>6</td><tr>
        </tbody>
    </table>

    <p>最会拍石头的指挥官：</p>
    <table>
        <thead>
            <tr>
                <th>指挥官</th>
                <th>得分</th>
                <th>总集数</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>雷诺</td><td class=centered>16.5</td><td class=centered>19</td><tr>
<tr><td>阿塔尼斯</td><td class=centered>15.0</td><td class=centered>16</td><tr>
<tr><td>泰凯斯</td><td class=centered>12.5</td><td class=centered>15</td><tr>
<tr><td>沃拉尊</td><td class=centered>12.0</td><td class=centered>14</td><tr>
<tr><td>德哈卡</td><td class=centered>12.0</td><td class=centered>15</td><tr>
        </tbody>
    </table>
    <script>
        $('.infoIcon img').mouseover(function(){
            var text = $(this).next().html();
            $("#tooltip").html(text);
            $("#tooltip").show();
        });

        $('.infoIcon img').mouseleave(function(){
            $("#tooltip").hide();
        });

        $('.infoIcon img').mousemove(function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
    </script>
<script src="/scripts/tooltips.js"></script>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
