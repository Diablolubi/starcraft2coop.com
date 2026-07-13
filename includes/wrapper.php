<?php

$wrapperNesting = 0;
$assetCachebusters = null;

function cachebusted_asset(string $pathname): string
{
    global $assetCachebusters;
    if ($assetCachebusters === null) {
        $assetCachebusters = [];
        $manifestPath = __DIR__ . '/../html/data/cachebusters.json';
        if (file_exists($manifestPath)) {
            $assetCachebusters = json_decode(file_get_contents($manifestPath), true) ?: [];
        }
    }
    return $assetCachebusters[$pathname] ?? $pathname;
}

function startHead()
{
    global $wrapperNesting;
    $wrapperNesting++;
    if ($wrapperNesting > 1) {
        ob_start();
        return '';
    }
    ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <link rel="stylesheet" href="<?= cachebusted_asset('/styles/global.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
    return '';
}

function startContent()
{
    global $wrapperNesting;
    if ($wrapperNesting > 1) {
        ob_end_clean();
        return '';
    }
    // $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $pageFile = basename($_SERVER['PHP_SELF']);
    $pageSection = basename(dirname($_SERVER['PHP_SELF']));
    if ($pageSection === 'tournament') {
        $pageFile = 'tournament.php';
        $pageSection = basename(dirname(dirname($_SERVER['PHP_SELF'])));
    }
    if (!$pageSection) {
        $pageSection = 'index';
    }
    if ($pageSection === 'mutators') {
        $pageFile = 'mutators.php';
    }
    if ($pageSection === 'units') {
        $pageFile = 'units.php';
    }
    if ($pageSection === 'tools' || $pageSection === 'guides' || $pageSection === 'mutators' || $pageSection === 'units') {
        $pageSection = 'resources';
    }
    ?>
</head>
<body>

<header id="header">
    <img src="/images/starcraft2coop.png" alt="StarCraft II 合作任务">
</header>
<script>
if (document.location.host === 'dev.starcraft2coop.com') {
    document.write('<div class="construction">这里是测试站点。（<a href="https://starcraft2coop.com">前往正式站点</a>）</div>');
}
</script>
<nav id="menu">
<ul id="topmenu">
    <li class="<?=$pageSection === "index" ? 'highlight' : 'normal'?>"><a href="/" title="首页">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><title>首页</title><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg>
    </a></li>
    <li class="<?=$pageSection === "commanders" ? 'highlight' : 'normal'?>"><a href="/" onclick="javascript:openSubmenu(event);" id="submenu-link-commanders">指挥官</a></li>
    <li class="<?=$pageSection === "resources" ? 'highlight' : 'normal'?>"><a href="/" onclick="javascript:openSubmenu(event);" id="submenu-link-resources">攻略</a></li>
    <li class="<?=$pageSection === "missions" ? 'highlight' : 'normal'?>"><a href="/" onclick="javascript:openSubmenu(event);" id="submenu-link-missions">任务</a></li>
    <li class="<?=$pageSection === "about" ? 'highlight' : 'normal'?>"><a href="/" onclick="javascript:openSubmenu(event);" id="submenu-link-about">关于</a></li>
    <li class="normal"><button type="button" id="site-search-button" title="搜索">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>搜索</title><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
        <span class="search-shortcut" aria-hidden="true"></span>
    </button></li>
</ul>
<div id="container">
    <div id="commanderList" class="submenu">
        <a href="/commanders/raynor" class="<?=$pageFile === 'raynor.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/raynorportrait.png" alt="雷诺"></a>
        <a href="/commanders/kerrigan" class="<?=$pageFile === 'kerrigan.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/kerriganportrait.png" alt="凯瑞甘"></a>
        <a href="/commanders/artanis" class="<?=$pageFile === 'artanis.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/artanisportrait.png" alt="阿塔尼斯"></a>
        <a href="/commanders/swann" class="<?=$pageFile === 'swann.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/swannportrait.png" alt="斯旺"></a>
        <a href="/commanders/zagara" class="<?=$pageFile === 'zagara.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/zagaraportrait.png" alt="扎加拉"></a>
        <a href="/commanders/vorazun" class="<?=$pageFile === 'vorazun.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/vorazunportrait.png" alt="沃拉尊"></a>
        <a href="/commanders/karax" class="<?=$pageFile === 'karax.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/karaxportrait.png" alt="凯拉克斯"></a>
        <a href="/commanders/abathur" class="<?=$pageFile === 'abathur.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/abathurportrait.png" alt="阿巴瑟"></a>
        <a href="/commanders/alarak" class="<?=$pageFile === 'alarak.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/alarakportrait.png" alt="阿拉纳克"></a>
        <a href="/commanders/nova" class="<?=$pageFile === 'nova.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/novaportrait.png" alt="诺娃"></a>
        <a href="/commanders/stukov" class="<?=$pageFile === 'stukov.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/stukovportrait.png" alt="斯托科夫"></a>
        <a href="/commanders/fenix" class="<?=$pageFile === 'fenix.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/fenixportrait.png" alt="菲尼克斯"></a>
        <a href="/commanders/dehaka" class="<?=$pageFile === 'dehaka.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/dehakaportrait.png" alt="德哈卡"></a>
        <a href="/commanders/horner" class="<?=$pageFile === 'horner.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/hornerportrait.png" alt="汉与霍纳"></a>
        <a href="/commanders/tychus" class="<?=$pageFile === 'tychus.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/tychusportrait.png" alt="泰凯斯"></a>
        <a href="/commanders/zeratul" class="<?=$pageFile === 'zeratul.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/zeratulportrait.png" alt="泽拉图"></a>
        <a href="/commanders/stetmann" class="<?=$pageFile === 'stetmann.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/stetmannportrait.png" alt="斯台特曼"></a>
        <a href="/commanders/mengsk" class="<?=$pageFile === 'mengsk.php' ? 'highlight' : 'normal'?>"><img src="/images/commanderportraits/mengskportrait.png" alt="蒙斯克"></a>
    </div>
    <div id="missionList" class="submenu">
        <a href="/missions/chainofascension" class="<?=$pageFile === 'chainofascension.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-chainofascension">飞升之链</div></a>
        <a href="/missions/cradleofdeath" class="<?=$pageFile === 'cradleofdeath.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-cradleofdeath">死亡摇篮</div></a>
        <a href="/missions/deadofnight" class="<?=$pageFile === 'deadofnight.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-deadofnight">亡者之夜</div></a>
        <a href="/missions/lockload" class="<?=$pageFile === 'lockload.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-lockload">天锁</div></a>
        <a href="/missions/malwarfare" class="<?=$pageFile === 'malwarfare.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-malwarfare">恶意代码</div></a>
        <a href="/missions/minerevacuation" class="<?=$pageFile === 'minerevacuation.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-minerevacuation">疏散矿工</div></a>
        <a href="/missions/mistopportunities" class="<?=$pageFile === 'mistopportunities.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-mistopportunities">机会渺茫</div></a>
        <a href="/missions/oblivionexpress" class="<?=$pageFile === 'oblivionexpress.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-oblivionexpress">湮灭快车</div></a>
        <a href="/missions/partparcel" class="<?=$pageFile === 'partparcel.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-partparcel">聚铁成兵</div></a>
        <a href="/missions/riftstokorhal" class="<?=$pageFile === 'riftstokorhal.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-riftstokorhal">克哈裂痕</div></a>
        <a href="/missions/scytheofamon" class="<?=$pageFile === 'scytheofamon.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-scytheofamon">埃蒙之镰</div></a>
        <a href="/missions/templeofthepast" class="<?=$pageFile === 'templeofthepast.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-templeofthepast">往日神庙</div></a>
        <a href="/missions/thevermillionproblem" class="<?=$pageFile === 'thevermillionproblem.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-thevermillionproblem">熔火危机</div></a>
        <a href="/missions/voidlaunch" class="<?=$pageFile === 'voidlaunch.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-voidlaunch">虚空降临</div></a>
        <a href="/missions/voidthrashing" class="<?=$pageFile === 'voidthrashing.php' ? 'highlight' : 'normal'?>"><div class="mapImg mapImg-voidthrashing">虚空撕裂</div></a>
    </div>
    <div id="resources" class="submenu">
        <div class="submenu-with-sections"><div class="submenu-section">
            <strong>资料：</strong>
            <ul>
                <li class="<?=$pageFile === "mutators.php" ? 'highlight' : 'normal'?>"><a href="/mutators/">突变因子</a></li>
                <li class="<?=$pageFile === "weeklymutations.php" ? 'highlight' : 'normal'?>"><a href="/resources/weeklymutations">每周突变</a></li>
                <li class="<?=$pageFile === "brutal.php" ? 'highlight' : 'normal'?>"><a href="/resources/brutal">残酷+</a></li>
                <li class="<?=$pageFile === "units.php" ? 'highlight' : 'normal'?>"><a href="/units/">单位数据</a></li>
            </ul>
        </div><div class="submenu-section">
            <strong>攻略：</strong>
            <ul>
                <li class="<?=$pageFile === "buildordertheory.php" ? 'highlight' : 'normal'?>"><a href="/guides/buildordertheory">建造顺序理论</a></li>
                <li class="<?=$pageFile === "enemycomps.php" ? 'highlight' : 'normal'?>"><a href="/guides/enemycomps">敌方阵容</a></li>
                <li class="<?=$pageFile === "generaltips.php" ? 'highlight' : 'normal'?>"><a href="/guides/generaltips">通用技巧</a></li>
                <li class="<?=$pageFile === "newplayer.php" ? 'highlight' : 'normal'?>"><a href="/guides/newplayer">新手指南</a></li>
                <li class="<?=$pageFile === "youtube.php" ? 'highlight' : 'normal'?>"><a href="/guides/youtube">YouTube</a></li>
            </ul>
        </div><div class="submenu-section">
            <strong>其他：</strong>
            <ul>
                <li class="<?=$pageFile === "achievements.php" ? 'highlight' : 'normal'?>"><a href="/resources/achievements">成就</a></li>
                <li class="<?=$pageFile === "ailogic.php" ? 'highlight' : 'normal'?>"><a href="/resources/ailogic">人工智能逻辑</a></li>
                <li class="<?=$pageFile === "bugs.php" ? 'highlight' : 'normal'?>"><a href="/resources/bugs">错误</a></li>
                <li class="<?=$pageFile === "deathprevention.php" ? 'highlight' : 'normal'?>"><a href="/resources/deathprevention">免死效果</a></li>
                <li class="<?=$pageFile === "eastereggs.php" ? 'highlight' : 'normal'?>"><a href="/resources/eastereggs">彩蛋</a></li>
                <li class="<?=$pageFile === "levels.php" ? 'highlight' : 'normal'?>"><a href="/resources/levels">等级</a></li>
                <li class="<?=$pageFile === "patchdata.php" ? 'highlight' : 'normal'?>"><a href="/resources/patchdata">补丁数据</a></li>
                <li class="<?=$pageFile === "downloads.php" ? 'highlight' : 'normal'?>"><a href="/tools/downloads">下载</a></li>
                <li class="<?=$pageFile === "masterybreakpoints.php" ? 'highlight' : 'normal'?>"><a href="/tools/masterybreakpoints">精通阈值</a></li>
            </ul>
        </div></div>
    </div>
    <div id="about" class="submenu">
        <ul>
            <!--<li class="<?=$pageFile === "contact.php" ? 'highlight' : 'normal'?>"><a href="/about/contact">Contact</a></li>-->
            <li class="<?=$pageFile === "faq.php" ? 'highlight' : 'normal'?>"><a href="/about/faq">常见问题</a></li>
            <li class="<?=$pageFile === "links.php" ? 'highlight' : 'normal'?>"><a href="/about/links">相关链接</a></li>
            <!--li class="normal"><a href="https://www.youtube.com/c/Starcraft2Coop" rel="nofollow">Youtube</a></li-->
            <li class="<?=$pageFile === "stats.php" ? 'highlight' : 'normal'?>"><a href="/about/stats">杂项统计</a></li>
        </ul>
    </div>
    <!--<div id="imgs">
        <a href="https://www.youtube.com/c/Starcraft2Coop" rel="nofollow"><img src="/images/links/yt.png" alt="Youtube"></a>
        <a href="https://www.patreon.com/starcraft2coop" rel="nofollow"><img src="/images/links/patreon.png" alt="Patreon"></a>
        <a href="https://www.twitch.tv/aommaster" rel="nofollow"><img src="/images/links/twitch.png" alt="Twitch"></a>
        <a href="https://discord.gg/AbFXRAB" rel="nofollow"><img src="/images/links/discord.png" alt="Discord"></a>
    </div>-->
</div>
</nav>
<script>
    (function($) {
        function openSubmenu(event, elem){
            if (event) event.preventDefault();
            if (!elem) elem = event.currentTarget;
            var alreadyOpen = $(elem).hasClass('open');

            $('#topmenu a').removeClass('open');
            $(".submenu").hide();

            if (alreadyOpen) return;

            $(elem).addClass('open');
            switch (elem.id.slice(13)){
                case "commanders":
                    $("#commanderList").show();
                    break;
                case "missions":
                    $("#missionList").show();
                    break;
                case "resources":
                    $("#resources").show();
                    break;
                case "about":
                    $("#about").show();
                    break;
            }
        }
        window.openSubmenu = openSubmenu;
        if (document.location.pathname === "/") {
            $('#submenu-link-commanders').each(function () {
                openSubmenu(null, this);
            });
        } else {
            $('#topmenu li.highlight a').each(function () {
                openSubmenu(null, this);
            });
        }
    })(jQuery);
</script>
<script src="<?= cachebusted_asset('/scripts/search.js') ?>" defer></script>
<div id="content">
    <?php
    return '';
}

function endContent()
{
    global $wrapperNesting;
    $wrapperNesting--;
    if ($wrapperNesting > 0) {
        return '';
    }
    ?>
</div>

<div id="footer">
    <p>注意：本站生成的所有数据均以“残酷”难度为准；在较低难度下，时间、阵容及其他要素可能有所不同。</p>
    <p>非官方简体中文翻译站，仅供学习与非商业使用。本站无广告，也不收集用户数据。采用 CC BY-NC-SA 4.0 许可。原作者：Aommaster。本站为粉丝站点，与 StarCraft II 或 Blizzard Entertainment 无隶属关系。</p>
</div>

</body>
</html>

    <?php
    return '';
}
?>
