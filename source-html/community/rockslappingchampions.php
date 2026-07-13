<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 拍石冠军</title>
  <meta name="description" content="“拍石冠军”是本站的招牌喜剧解说系列，风格类似“青铜组英雄”。">
  <meta name="keywords" content="星际争霸 II, 合作任务, 拍石冠军">
  <link rel="canonical" href="https://starcraft2coop.com/community/rockslappingchampions">
  <script>
        function validate() {
          var x = $('#rcForm [name=file]').val()
          if (x == "") {
              alert("尚未选择文件");
              return false;
          }
          var x = $('#rcForm [name=desc]').val()
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
        #commanderSelection{
            display:none;
            text-align:center;
        }
        #commanderSelection img{
            cursor: pointer;
            margin-left:5px;
            margin-right:5px;
            border-radius:50%;
        }
        #rcList{
            height: 500px;
            overflow-y: scroll;
            display:none;
        }
        .rcThumb{
            width: 175px;
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 15%;
            cursor:pointer;
        }
        .filtered{
            opacity:0.33;
        }
    </style>
  <?= startContent() ?>
    <h1>拍石冠军</h1>
    <h2>系列简介</h2>
    <p>“拍石冠军”是一档合作任务喜剧解说系列，主角往往展现出糟糕的决策与战略思维。系列名称源自<a href="/commanders/dehaka">德哈卡拍石头</a>（一种效率极低的德哈卡开局）。对局使用独特的合作任务观战界面进行解说，视频中还会穿插“你知道吗？”小知识。</p>
    <p>解说使用的合作任务观战界面是本站内容专用界面。除资源、补给和升级等常规观战信息外，它还会显示可用次数、冷却时间和解锁状态等面板技能信息。</p>
    <h2>完整播放列表</h2>
    <iframe width="480" height="270" src="https://www.youtube.com/embed/videoseries?list=PL-U97hco2Fu543NyDyGNox2VGtz6BkbWl" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h2>提交录像供解说</h2>
    <!--
    <p>You are welcome to submit replays for casting. Before submitting a replay, please consider the following:</p>
    <ul>
        <li>Gameplay must show exceptionally poor strategy. Mistakes happen in co-op. The series is focused on poor core understanding of the co-op mode and not mechanical ability.<br>
            Additionally, it is quite common to see players take a very passive role in a game (building defenses and not pushing objectives). While they definitely fit the bill for this series, the games are not particularly interesting to cast, unless their strategy backfires.
        </li>
        <li>Games should feature two players working towards completion of the mission and not one player harassing another (e.g. TK'ing) and be played to victory for both players.</li>
        <li>Due to limitations with Blizzard's UI functionality, the following information will not be available for viewing:
            <ul>
                <li>Dehaka's Essence</li>
            </ul>
            Please take the above limitations into consideration when submitting a replay.
        </li>
        <li>Be a game on Brutal difficulty. Players use easier difficulty levels to experiment and practice with commanders and may take away from the spirit of the series.</li>
        <li>If you believe you might have also been a Rockslapper during a game, please mention in your description if you would be okay if the episode is casted as a double-Rockslapping Champion episode.</li>
        <li>If you would like either or both of the player's names to be anonymized, please mention so in your description. Do note that only names on the interface will be anonymized. Accidental hovers over units will still show player's names (although every effort to avoid doing so will be taken).</li>
    </ul>
    <p>If you would like to see statistics about the series, please check out the <a href="/resources/stats">Statistics Page</a>. It shows statistics such as top submitters and commanders most featured as the Rockslapper in the series.</p>

    <form action="rockslappingchampions.php" name="submissionform" id="rcForm" class="captchaForm" onsubmit="return validate()" method="post" enctype="multipart/form-data">
        <p>Replay File: <input type="file" name="file" accept=".SC2Replay"></p>
        <p>Brief Description: <input name="desc" type="text" size="30"></p>
        <p style="display:none">Leave this empty: <input type="text" name="url"></p>
        <input type="hidden" name="recaptcha_response" id="rcFormRecaptchaResponse">
        <p><input type="submit" id="submitbtn" value="Submit"></p>
        <p id="captchaTOS">This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy">Privacy Policy</a> and
    <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
    </form>-->
    <p>投稿现已关闭，感谢支持。</p>
    <h2>按指挥官筛选</h2>
    <p>如果想按“拍石”指挥官筛选往期节目，可以点击下方链接生成完整节目列表。点击指挥官头像可将其从列表中排除。</p>
    <p>合辑会考虑该期出现的所有指挥官。只要其中至少一名指挥官未被过滤，合辑就会继续显示在列表中。</p>
    <div id="player">
        <iframe id="video" width="640" height="360" src="about:blank" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <p id="showList"><a href="#">显示列表</a></p>
    <div id="commanderSelection">
    </div>
    <div id="rcList">
    </div>
    <script>
        $(document).on('click','#commanderSelection img',function(){
            $(this).toggleClass("filtered");
            refilter();
        });
        $(document).on('click','#select',function(){
            $("#commanderSelection img.filtered").each(function(){
                $(this).removeClass("filtered");
            });
            refilter();
        });
        $(document).on('click','#unselect',function(){
            $("#commanderSelection img:not(.filtered)").each(function(){
                $(this).addClass("filtered");
            });
            refilter();
        });
        function refilter(){
            var commanders = [];
            $("#commanderSelection img:not(.filtered)").each(function(){
                commanders.push("." + $(this).attr("data-commander"));
            });
            var collection = $('#rcList a');

            $("#rcList a").hide();
            if(commanders.length!==0){
                collection = collection.filter(commanders.join());
            }
            else{
                return true;
            }
            collection.show();
        }
        $(document).click(function(e) {
            if (e.srcElement !== $("#player")){
                $("#video").attr("src",$("#video").attr("src"));
                $("#player").fadeOut();
            }
        });
        $(document).on('click','.rcThumb',function(){
            $("#video").attr("src",$(this).parent().attr("href"));
            $("#player").fadeIn();
            return false;
        });
        $("#showList").click(function(e){
            e.preventDefault();
            $("#showList").hide();
            $("#commanderSelection").show();
            $("#rcList").show();
            $.ajax({
                type: 'GET',
                url: '../scripts/generaterclist.php',
                success: function(data) {
                    var stringArray=JSON.parse(data);
                    $("#commanderSelection").html(stringArray[0]);
                    $("#rcList").html(stringArray[1]);
                    const commanderNames = {
                        raynor: "雷诺", kerrigan: "凯瑞甘", artanis: "阿塔尼斯", swann: "斯旺",
                        zagara: "扎加拉", vorazun: "沃拉尊", karax: "凯拉克斯", abathur: "阿巴瑟",
                        alarak: "阿拉纳克", nova: "诺娃", stukov: "斯托科夫", fenix: "菲尼克斯",
                        dehaka: "德哈卡", horner: "汉与霍纳", tychus: "泰凯斯", zeratul: "泽拉图",
                        stetmann: "斯台特曼", mengsk: "蒙斯克"
                    };
                    $("#commanderSelection img").each(function () {
                        const commander = $(this).attr("alt");
                        $(this).attr("data-commander", commander);
                        $(this).attr("alt", commanderNames[commander] || commander);
                    });
                    $("#select").text("全选");
                    $("#unselect").text("全部取消");
                    $("#rcList img.rcThumb").attr("alt", "YouTube 视频缩略图");
                }
            });
            return true;
        })
    </script>
<?= endContent() ?>
