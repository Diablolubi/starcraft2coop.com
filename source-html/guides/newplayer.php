<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>StarCraft II 合作任务——指挥官选择指南</title>
  <meta name="description" content="面向新玩家的 StarCraft II 合作任务指挥官选择指南，介绍各位指挥官的优缺点。">
  <meta name="keywords" content="StarCraft II 合作任务攻略 指挥官选择">
  <link rel="canonical" href="https://starcraft2coop.com/guides/newplayer">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <style>
    @media (min-width: 701px){
        #commanderImage{
            width:50%;
            float:right;
        }
        #commanderImage img{
            width:100%;
        }
        #stats{
            width:50%;
            float:left;
        }
    }
    @media (max-width: 700px){
        #commanderImage{
            display:none;
        }
    }
    #commanderPanel{
        margin-top:50px;
    }
    #commanderDescription{
        clear:both;
    }
    #commanderSelection{
        padding-top:20px;
        text-align:center;
    }
    #commanderSelection img{
        cursor: pointer;
        margin-left:5px;
        margin-right:5px;
        border-radius:50%;
        border: 1px solid transparent;
    }
    #commanderSelection img:hover{
        border-color: rgb(255, 255, 255);
    }
    #commanderSelection img.active{
        border-color: rgb(219, 150, 32);
    }
    #commanderName h2{
        text-align:center;
        margin:0;
    }
    #commanderMotto{
        font-style: italic;
        text-align:center;
        padding-bottom:5px;
    }
    .barContainer{
        margin: 5px auto 12px;
        width:50%;
    }
    .barContainer p{
        white-space:nowrap;
        margin: 0;
    }
    .barTrack{
        height:10px;
        width:100%;
        box-sizing:border-box;
        border:1px solid #888;
        border-radius:6px;
        background-image: repeating-linear-gradient(to right,
            #777 0, #777 1px,
            transparent 1px, transparent 20%);
    }
    .currentProgress{
        height:8px;
        border-radius:6px;
        background-color:darkslateblue;
        width:0%;
    }
    .description{
        display:none;
    }

  </style>

  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1>新玩家指挥官选择指南</h1>
    <p>为指挥官设定任意指标并按 1 到 5 分打分，本身有很强的主观性。本页仅希望粗略展示各位指挥官的实力与玩法风格，帮助新玩家更有依据地选择想玩的指挥官。强烈建议阅读各个指挥官的专属页面，了解其可用技能、常用策略和麾下单位，从而作出更明智的选择。此外，合作任务新玩家也可以查看<a href="/guides/generaltips">通用技巧</a>页面，了解一些实用策略。</p>
    <p>参与社区交流也是了解指挥官和不同玩法风格的好方法。你可以查看<a href="/about/links">相关链接</a>页面，寻找更多 StarCraft II 合作任务社区内容。最后，善于提出好问题、保持开放心态并愿意学习，会让你在提升合作任务水平的路上走得更远。</p>
    <div id="commanderSelection">
        <?php

        require_once __DIR__ . '/../../includes/queries.php';

        $allCommanders = get_commanders();
        foreach ($allCommanders as $row) {
            echo("<img src='/images/commanderportraits/{$row['commander']}portrait.png' alt='{$row['commander']}'>");
        }

        ?>
    </div>
    <div id="commanderPanel">
        <div id="stats">
            <div id="commanderName">
                <h2>雷诺</h2>
            </div>
            <div id="commanderMotto">
                <p>反抗军指挥官</p>
            </div>
            <div id="bars">
                <div id="statDifficulty" class="barContainer">
                    <div class="description">以能够承担任务中应尽的职责为标准，衡量指挥官的上手难度；<br>不要求达到最优操作。</div>
                    <p>上手难度</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statLeveling" class="barContainer">
                    <div class="description">衡量指挥官在升级过程中、尚未达到精通和<br>巅峰等级时的实力。</div>
                    <p>巅峰等级前实力</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statPowerNew" class="barContainer">
                    <div class="description">衡量缺乏经验的合作任务玩家<br>使用该指挥官时能发挥出的实力。</div>
                    <p>新手实力</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statPowerVeteran" class="barContainer">
                    <div class="description">衡量经验丰富的合作任务玩家<br>使用该指挥官时能发挥出的实力。</div>
                    <p>老手实力</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statEarly" class="barContainer">
                    <div class="description">衡量指挥官在游戏前期能为<br>任务目标提供多少帮助。</div>
                    <p>前期实力</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statMacro" class="barContainer">
                    <div class="description">衡量要让指挥官在整场任务中保持效率并持续发展，<br>所需宏观运营的简易程度。</div>
                    <p>运营难度</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statMicro" class="barContainer">
                    <div class="description">衡量要让指挥官保持高水平发挥<br>所需微操的简易程度。</div>
                    <p>微操难度</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statMutation" class="barContainer">
                    <div class="description">衡量指挥官适应游戏中<br>各类突变因子的能力。</div>
                    <p>突变适应性</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
                <div id="statSpeed" class="barContainer">
                    <div class="description">衡量指挥官多快能组建理想阵容，<br>以应对任务目标和进攻波次。</div>
                    <p>成型速度</p>
                    <div class="barTrack"><div class="currentProgress"></div></div>
                </div>
            </div>
        </div>
        <div id="commanderImage">
            <img id="commanderPic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNgYAAAAAMAASsJTYQAAAAASUVORK5CYII=" alt="指挥官图片">
        </div>
    </div>
    <div id="commanderDescription">
        <p></p>
    </div>
    <script>
        $( document ).ready(function() {
            update("raynor");
            $("#commanderSelection img[alt='raynor']").addClass("active");
        });
        $("#commanderSelection").on("click","img", function(){
            var selectedCommander=$(this).attr("alt");
            $("#commanderSelection img").removeClass("active");
            $(this).addClass("active");
            update(selectedCommander)
        })
        $(".barContainer").on('mouseover',function(e){
            var desc = $(this).find(".description").html();
            $("#tooltip").html(desc);
            $("#tooltip").show();
        });
        $(".barContainer").on('mouseleave',function(){
            $("#tooltip").hide();
        });
        $(".barContainer").on('mousemove',function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
        function update(commander){
            var colorArray = ["red", "orangered", "yellow", "limegreen", "darkgreen"]
            $.ajax({
                type: 'GET',
                url: '/data/commandersummaries/' + commander + '.json',
                success: function(val) {
                    $("#commanderName").html("<h2>" + val.fullname + "</h2>");
                    $("#commanderMotto").text(val.motto);
                    $("#commanderPic").hide();
                    $("#commanderPic").attr("src", "/images/selection/" + commander.toLowerCase() + ".png").on("load", function() {
                        $("#commanderPic").show()
                        });
                    const stats = [val.stat01, val.stat02, val.stat03, val.stat04, val.stat05,
                        val.stat06, val.stat07, val.stat08, val.stat09];
                    stats.forEach((stat, i) => {
                        $(".currentProgress").eq(i).animate({width: stats[i]*20 + "%"});
                        $(".currentProgress").eq(i).css("background-color", colorArray[stats[i]-1]);
                    });
                    $("#commanderDescription").html(val.summary).append(" 请前往该指挥官的<a href='/commanders/" + commander + "'>专属页面</a>了解更多信息。");
                }
            });
        }
    </script>
<?= endContent() ?>
