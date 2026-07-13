<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 下载</title>
  <meta name="description" content="供社区免费使用的工具和软件列表；使用所提供的代码需要一定编程经验。">
  <meta name="keywords" content="星际争霸 II, 合作任务, 工具, 下载">
  <link rel="canonical" href="https://starcraft2coop.com/tools/downloads">
  <style>
        #output{
            font-family: "Courier New", Courier, monospace;
            background-color: steelblue;
            display: inline-block;
            padding: 10px;
        }
  </style>
  <?= startContent() ?>
    <h1>下载（合作任务助手与录像解析脚本）</h1>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#coopassistant">合作任务叠加界面</a></p>
        <!--
        <p><a href="#coopassistant">Co-op Assistant</a></p>
        <p><a href="#download1">Download</a></p>
        <p><a href="#usage1">Usage Notes</a></p>
        <p><a href="#config1">Configuring the Program</a></p>-->
        <p><a href="#replaySummarizer">合作任务录像数据汇总器</a></p>
        <p><a href="#download2">下载</a></p>
        <p><a href="#usage2">使用说明</a></p>
        <p><a href="#updates2">更新</a></p>
        <p><a href="#other2">其他说明</a></p>
    </div>
    <h2 id="coopassistant">合作任务叠加界面</h2>
    <p>推荐使用<a href="https://github.com/FluffyMaguro/SC2_Coop_overlay" rel="nofollow">Maguro 的合作任务叠加界面</a>查看游戏统计信息，并自动将录像文件上传至网站。</p>
    <!--
    <h2 id="coopassistant">Co-op Assistant</h2>
    <p>This is a Windows application that provides two pieces of functionality which can be turned on/off as required:</p>
    <ul>
        <li>It detects the map you're playing on, and if you are playing on a map with a fast expand, will prompt you for a commander. If there is a fast expand available for the commander, it will create a small overlay, with an image from this site to remind you how to fast expand</li>
        <li>If you have an account on this site, your replays will be automatically uploaded to your account</li>
    </ul>
    <h2 id="download1">Download Links</h2>
    <form action="downloads.php" name="download1form" id="download1Form" class="dynamic" method="post" enctype="multipart/form-data">
        <input type="hidden" name="recaptcha_response" id="download1FormRecaptchaResponse">
        <p><input type="submit" id="startDownload1" value="Download Co-op Assistant"></p>
        <p id="captchaTOS">This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy">Privacy Policy</a> and
    <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
    </form>
    <h2 id="usage1">Usage Notes</h2>
    <ul>
        <li>You will to have the .NET Framework 4.7.2. You can get it from <a href="https://support.microsoft.com/en-ae/help/4054530/microsoft-net-framework-4-7-2-offline-installer-for-windows" rel="nofollow">here</a>.</li>
        <li>An internet connection will be required for the program to function.</li>
        <li>If there is an update to the program, you will be notified when you launch it. Updates should be few and far between, and usually only if a new commander gets added with a Fast Expand strategy.</li>
        <li>The program will need write access to its current running folder to save your settings. It is best to save this program in its own folder on your Desktop or other directory where write permissions exist.</li>
    </ul>
    <h2 id="config1">Configuring the Program</h2>
    <p><b>For Automatic Uploading of Replays to your starcraft2coop.com Account</b></p>
    <ol>
        <li>Generate a Secret Key from the Account Settings tab in the <a href="/account">Account Page</a>.
            <img src="/images/tools/generatekey.jpg" alt="Generating a New Secret Key">
        </li>
        <li>In the Settings section of the Co-op Assistant, upload the settings under the "Upload Configuration" section. Make sure you select the correct account folder. Its path should be similar to:<br>
            C:\Users\[Your PC Username]\Documents\Starcraft II\Accounts\[Numbers]
            <img src="/images/tools/uploadconfig.jpg" alt="Setting Upload Config">
        </li>
        <li>Press "Save" to save the Settings</li>
    </ol>
    <p><b>For Fast Expand Assistance</b></p>
    <ol>
        <li>In the Settings section of the Co-op Assistant, input your replay username (IGN) into the text box.
            <img src="/images/tools/ign.jpg" alt="Setting the IGN">
        </li>
        <li><b>If you are playing the game in English</b>
            <ul>
                <li>You are done</li>
            </ul>
        </li>
        <li><b>If you are playing the game in another language</b>
        <ul>
            <li>You will need to collect identifying player names from the Starcraft II Client as follows:
                <ol>
                    <li>In Starcraft II, navigate to a map in the Replays tab and click on it. Do not open the Replay.</li>
                    <li>Note the unique name that identifies the mission (not the player names, and not "Amon's Forces").
                        <img src="/images/tools/names.jpg" alt="Finding the Unique Name">
                    </li>
                    <li>In the Settings section of the Co-op Assistant, input that unique name into Language Localization section.
                        <img src="/images/tools/language.jpg" alt="Setting the Language Localization Settings">
                    </li>
                </ol>
            </li>
        </ul>
        </li>
    </ol>
    <p><b>For Twitch Extension Integration</b></p>
    <ol>
        <li>Install starcraft2coop.com's Twitch Extension from <a href="https://dashboard.twitch.tv/extensions/mpniwm1y35j26et6cc3qcmve1p2t5r-0.0.1" rel="nofollow">here</a>.</li>
        <li>Make sure you have a valid Username and Secret Key assigned in your starcraft2coop.com account.</li>
        <li>Link your Twitch account in the <a href="/account">Account Page</a> Settings tab.
            <img src="/images/tools/twitch.jpg" alt="Linking Your Twitch Account">
        </li>
        <li>You will be asked to Authorize the application. Once accepted, you will be redirected back to the Account Page.</li>
        <li>If you can see your Twitch username after "Authenticated Twitch User", the extension will now receive your end-of-game replay stats and display it.</li>
    </ol>
    <p>Note: If you would like to disable the Twitch Integration, click "Clear Token" to stop data being sent.</p>
    <p><b>For Mutator Identification</b></p>
    <ol>
        <li>Make sure you have a valid Username and Secret Key assigned in your starcraft2coop.com account.</li>
        <li>Download both, the OpenCV library and the Mutator Finder Plugin (links below).</li>
        <li>Place them in the same directory as the Co-op Assistant.</li>
        <li>If Twitch Integration is enabled, Mutator data will be sent when the Co-op Assistant is running.</li>
    </ol>
    <p>Note: If a mutator present does not get automatically identified, you may select the unidentified mutator and click "Add Mutator". This will take a screenshot of the mutator and save it in an "Extra Icons" folder to help with future identification.</p>
    <img src="/images/tools/mutatoridentification.jpg" alt="Mutator Identification">
    <h2 id="download1">Download Links</h2>
    <form action="downloads.php" name="download3form" id="download3Form" class="dynamic" method="post" enctype="multipart/form-data">
        <input type="hidden" name="recaptcha_response" id="download3FormRecaptchaResponse">
        <p><input type="submit" id="startDownload3" value="Download OpenCV Library">
    </form>
    <form action="downloads.php" name="download4form" id="download4Form" class="dynamic" method="post" enctype="multipart/form-data">
        <input type="hidden" name="recaptcha_response" id="download4FormRecaptchaResponse">
        <p><input type="submit" id="startDownload4" value="Download Mutator Finder"></p>
        <p id="captchaTOS">This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy">Privacy Policy</a> and
    <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
    </form>
    -->
    <h2 id="replaySummarizer">合作任务录像数据汇总器</h2>
    <p>这是一个 Python 脚本，可读取录像文件夹并生成分隔符文本文件，汇总合作任务录像数据，供导入后进一步分析。输出示例如下：</p>
    <div id="output">
        <p>游玩日期&#9;地图&#9;指挥官&#9;等级&#9;盟友指挥官&#9;盟友等级&#9;游戏类型&#9;结果&#9;游戏时长<br>
            2019-02-18&#9;升格之链&#9;霍纳&#9;0&#9;斯托科夫&#9;34&#9;标准&#9;失败&#9;1552<br>
            2019-02-15&#9;死亡摇篮&#9;凯拉克斯&#9;0&#9;阿巴瑟&#9;25&#9;标准&#9;胜利&#9;1359<br>
            2019-02-15&#9;死亡摇篮&#9;沃拉尊&#9;0&#9;泽拉图&#9;0&#9;标准&#9;胜利&#9;1538<br>
            2019-02-27&#9;往日神庙&#9;霍纳&#9;71&#9;凯拉克斯&#9;1000&#9;突变因子&#9;胜利&#9;1591<br>
            2019-02-24&#9;熔火危机&#9;德哈卡&#9;57&#9;雷诺&#9;0&#9;标准&#9;失败&#9;1536<br>
            2019-02-17&#9;虚空降临&#9;斯旺&#9;0&#9;菲尼克斯&#9;73&#9;标准&#9;胜利&#9;1465</p>
    </div>
    <h2 id="download2">下载链接</h2>
    <p><a href="/files/CRDS.py" download>下载 CRDS</a></p>
    <h2 id="usage2">使用说明</h2>
    <ul>
        <li>该脚本需要 Python 2，因为 S2Protocol 使用此版本的 Python 编写。可从<a href="https://www.python.org/downloads/release/python-2718/">这里</a>下载 Python，请为你的系统选择合适的安装程序。</li>
        <li>脚本需要安装 Python 的 S2Protocol，可从<a href="https://github.com/Blizzard/s2protocol" rel="nofollow">这里</a>获取。如果已安装 Pip，可执行“pip install s2protocol”安装 S2Protocol。</li>
        <li>请确保录像文件夹路径和玩家名称填写正确。错误的玩家名称可能导致脚本无法判断你使用的指挥官。</li>
        <li>脚本完成后，会在运行目录创建名为“output.txt”的汇总数据文件。</li>
        <li>由于只读取简单数据，解析一份录像通常不应超过一秒。</li>
        <li>你也可以修改脚本来解析天梯对局信息。不过该脚本按现状提供，且只支持合作任务；不提供合作任务录像数据的高级解析支持。</li>
    </ul>
    <h2 id="updates2">更新</h2>
    <ul>
        <li>《星际争霸 II》发布新版本（主要或次要补丁）时，可能需要更新 S2Protocol。可将 GitHub 上新增的协议文件复制到 S2Protocol 的 Versions 文件夹；如果使用 Pip 安装，也可执行“pip install s2protocol --upgrade”。</li>
        <li>S2Protocol 有时不会及时更新，此时可将上一个协议版本用于最新构建。只需复制最后一个协议文件，并将副本重命名为最新构建 ID，解析器通常即可正常工作。协议很少改动，大多数新版本只是旧版的副本，因此旧协议也可能兼容较新的录像文件。</li>
        <li>上述情况过去也曾发生，处理旧录像文件时同样可能遇到。如果发现缺少某个协议版本，可按上述步骤解决。</li>
    </ul>
    <h2 id="other2">其他说明</h2>
    <ul>
        <li>地图名称会受游戏语言影响，即按创建录像时所用游戏语言显示。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
