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

array_map('unlink', $to_delete);

foreach ($all_errors as $error) {
    echo "$error\n";
}

exit(empty($all_errors) ? 0 : 1);
