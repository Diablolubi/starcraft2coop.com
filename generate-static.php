<?php

// run from CLI; generate static pages

chdir(__DIR__);
$HTML_DIR = __DIR__ . '/html';
$pages = [];
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($HTML_DIR)) as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') {
        continue;
    }
    $contents = file_get_contents($file->getPathname());
    if (str_contains($contents, '/** @generateStatic ')) {
        $relativePath = str_replace('\\', '/', substr($file->getPathname(), strlen($HTML_DIR)));
        $pages[] = substr($relativePath, 0, -4);
    }
}
sort($pages, SORT_STRING);
if (!$pages) {
    echo "错误：未找到需要静态生成的 PHP 页面！";
    exit(1);
}

$GENERATING_STATIC_PAGES = true;
error_reporting(E_ALL);

set_error_handler(function (int $severity, string $message, string $file, int $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

$all_errors = [];
$to_delete = [];
$officialVisibleTerms = [
    '亡者之夜' => '求生无路', '天锁' => '天界封锁', '恶意代码' => '净网行动',
    '疏散矿工' => '营救矿工', '埃蒙之镰' => '黑暗杀星', '漆黑一片' => '极度谨慎',
    '复仇者' => '复仇战士',
    '烟花表演' => '焰火秀', '坚定意志' => '坚强意志', '就是死不了' => '给我死吧！',
    '熔岩爆裂' => '岩浆爆发', '生命汲取' => '生命吸取', '超远射程' => '超远视距',
    '磁力惊人' => '强磁雷场', '静默时刻' => '默哀', '光子超载' => '光子过载',
    '极性互换' => '极性不定', '极速狂飙' => '速度狂魔', '不给糖就捣蛋' => '不给糖果就捣蛋',
    '眩晕' => '迷失方向', '爆破机器人' => '炸弹机器人', '航空母舰' => '航母',
    '强势部署' => '进攻部署', '异形孵化' => '异形寄生',
    '双刃剑' => '双重压力', '强占地盘' => '强行征用',
    '致命吸引' => '致命勾引', '礼物交换' => '礼尚往来', '核弹来袭' => '核弹打击',
    '微交易' => '拿钱说话', '矿物护盾' => '晶矿护盾', '导弹指挥' => '飞弹大战',
    '相互保证毁灭' => '相互摧毁', '淘气名单' => '杀生业报', '感染爆发' => '丧尸大战',
    '势不可挡' => '灵能爆表', '传播者' => '同化体', '有福同享' => '补给共享',
    '近视眼' => '短视症', '资源短缺' => '小捞油水',
    '火鸡射击' => '捕杀火鸡', '虚空复生者' => '虚空重生者',
    '隐形行动' => '来去无踪',
];
$officialTermPattern = '~' . implode('|', array_map('preg_quote', array_keys($officialVisibleTerms))) . '~u';
foreach ($pages as $page) {
    $_SERVER['REQUEST_URI'] = "$page";
    $_SERVER['PHP_SELF'] = "$page.php";
    $pageDir = $HTML_DIR . dirname($page);
    chdir($pageDir);

    ob_start();
    try {
        require $HTML_DIR . "$page.php";
    } catch (ErrorException $e) {
        $all_errors[] = "Captured an exception in {$e->getFile()}: {$e->getMessage()} (line {$e->getLine()})";
    }
    $html = ob_get_clean();
    $html = str_replace("\r\n", "\n", $html);
    $html = preg_replace_callback($officialTermPattern, fn(array $match): string => $officialVisibleTerms[$match[0]], $html);
    $html = rtrim($html) . "\n";

    $result = file_put_contents($HTML_DIR . "$page.html", $html);
    if (!$result) {
        $all_errors[] = "Error writing $page.html";
        break;
    } else {
        $to_delete[] = $HTML_DIR . "$page.php";
        echo "Generated $page.html ($result bytes)\n";
    }
}

foreach ($to_delete as $generatedPhp) {
    clearstatcache(true, $generatedPhp);
    for ($attempt = 0; $attempt < 5 && file_exists($generatedPhp); $attempt++) {
        if (@unlink($generatedPhp)) {
            break;
        }
        usleep(100000);
    }
}

// JSON data is consumed directly by the browser, so apply the same visible-name
// normalization after build scripts have emitted their data snapshots.
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($HTML_DIR)) as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'json') {
        continue;
    }
    $path = $file->getPathname();
    $contents = file_get_contents($path);
    $normalized = preg_replace_callback($officialTermPattern, fn(array $match): string => $officialVisibleTerms[$match[0]], $contents);
    if ($normalized !== $contents) {
        file_put_contents($path, $normalized);
    }
}

foreach ($all_errors as $error) {
    echo "$error\n";
}

exit(empty($all_errors) ? 0 : 1);
