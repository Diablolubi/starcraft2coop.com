<?php

if (isset($_GET['unit'])) {
    if (!is_string($_GET['unit']) || !ctype_digit($_GET['unit'])) {
        echo("错误！");
        die();
    }
    require_once __DIR__ . '/../../includes/queries.php';
    $unit = get_amonunit((int)$_GET['unit']);
    if ($unit !== null) {
        $finalString = "<span class='title'>" . $unit['name'] . "</span>\n";

        if ($unit['shields'] !== "0") {
            $finalString .= "<span id='unitShields'>护盾：" . $unit['shields'] . "</span><br>\n";
            $finalString .= "<span id='unitShieldArmor'>护盾护甲：" . $unit['shieldarmor'] . "</span><br>\n";
        }
        $finalString .= "<span id='unitHP'>生命值：" . $unit['hp'] . "</span><br>\n";
        $finalString .= "<span id='unitArmor'>护甲：" . $unit['armor'] . "</span><br>\n";
        $finalString .= "<span class='title'>标签</span><br>\n";
        if ($unit['light']) {
            $finalString .= "轻甲<br>\n";
        }
        if ($unit['armored']) {
            $finalString .= "重甲<br>\n";
        }
        if ($unit['biological']) {
            $finalString .= "生物<br>\n";
        }
        if ($unit['mechanical']) {
            $finalString .= "机械<br>\n";
        }
        if ($unit['psionic']) {
            $finalString .= "灵能<br>\n";
        }
        if ($unit['heroic']) {
            $finalString .= "英雄<br>\n";
        }
        if ($unit['massive']) {
            $finalString .= "重型<br>\n";
        }
        if ($unit['structure']) {
            $finalString .= "建筑<br>\n";
        }
        echo $finalString;
    } else {
        echo("错误！");
    }
} else {
    echo("错误！");
}
