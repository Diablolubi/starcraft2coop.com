<?php

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
    <title>StarCraft II 合作任务——找不到页面！</title>
    <meta name="description" content="StarCraft II 合作任务错误页面">
    <meta name="keywords" content="StarCraft II 合作任务错误">
    <style>
    p{
        text-align:center;
        margin:auto;
    }
    .errorImg{
        border-radius:50%;
        display:block;
        margin:auto;
        padding-top:25px;
        padding-bottom:25px;
    }
    </style>
<?= startContent() ?>
    <?php
    if (isset($_SERVER['HTTP_REFERER'])) {
        $ref = $_SERVER['HTTP_REFERER'];
    } else {
        $ref = "";
    }
    $cur = $_SERVER['REQUEST_URI'];

    if ($ref !== "") {
        $errorTime = date('Y-m-d H:i:s');
        file_put_contents(
            __DIR__ . "/../../logs/404log.txt",
            "[$errorTime] $ref ===> $cur \n",
            FILE_APPEND
        );
    }
    $val = rand(1, 3);
    if ($val == 1) {
        echo "<p>你必须建造更多水晶塔！</p>";
        echo '<img class="errorImg"  src="/images/errors/pylon.jpg" alt="水晶塔">';
    } elseif ($val == 2) {
        echo "<p>需要更多补给站！</p>";
        echo '<img class="errorImg"  src="/images/errors/supplydepot.jpg" alt="补给站">';
    } else {
        echo "<p>孵化更多王虫！</p>";
        echo '<img class="errorImg" src="/images/errors/overlord.jpg" alt="王虫">';
    }
    ?>

    <p>（当然，也可能只是找不到这个页面。）</p>

<?= endContent() ?>
