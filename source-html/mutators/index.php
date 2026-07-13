<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
    <title>《星际争霸 II》合作任务 - 突变因子</title>
    <link rel="canonical" href="https://starcraft2coop.com/mutators/">
    <style>
        .mutatortiles {
            list-style: none;
            margin: 0;
            padding: 0;
            font-size: 1px;
        }
        .mutatortiles li {
            display: inline;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .mutatortiles a {
            display: inline-block;
            margin: 2px;
            width: 100px;
            height: 110px;
            text-align: center;
            vertical-align: top;
        }
        .mutatortiles a img {
            display: block;
            margin: 0 auto;
        }
    </style>
<?= startContent() ?>
    <h1>突变因子</h1>
    <p>
        <label><input type="radio" name="layout" value="icons" id="icons-option" checked>图标</label>
        <label><input type="radio" name="layout" value="table" id="table-option">表格</label>
    </p>
    <ul class="mutatortiles">
    <?php
    require_once __DIR__ . '/../../includes/queries.php';
    $mutators = get_mutators();
    usort($mutators, fn($a, $b) => $a['mutatorname'] <=> $b['mutatorname']);
    foreach ($mutators as $mutator) {
        $filename = mutator_token($mutator['mutatorname']);
        echo '<li><a href="/mutators/' . $filename . '"><img src="/images/mutators/' . $filename . '.png" alt="" />' . $mutator['mutatorname'] . '</a></li>' . "\n";
    }
    ?>
    </ul>
    <table class="mutatortable" style="display:none">
        <tr>
            <th>突变因子</th><th>说明</th><th>可用于自定义模式？</th><th>可由混乱工作室抽取？</th>
        </tr>
    <?php
    foreach ($mutators as $mutator) {
        $filename = mutator_token($mutator['mutatorname']);
        echo '<tr><td style="white-space: nowrap"><a href="/mutators/' . $filename . '" data-no-tooltip><img src="/images/mutators/' . $filename . '.png" alt="" class="miniIcon" />' . $mutator['mutatorname'] . '</a></td><td>' . $mutator['mutatordescription'] . '</td><td style="font-size: 1.5em;text-align: center">' . ($mutator['customusable'] ? '⚙️' : '') . '</td><td style="font-size: 1.5em;text-align: center">' . ($mutator['chaosrollable'] ? '🎲' : '') . '</td></tr>' . "\n";
    }
    ?>
    </table>
    <script>
        let showTable;
        function updateTable() {
            if (showTable === undefined && window.localStorage) {
                showTable = !!localStorage.getItem('showTable');
                if (showTable) {
                    document.getElementById('icons-option').checked = false;
                    document.getElementById('table-option').checked = true;
                }
            } else {
                showTable = !!document.getElementById('table-option').checked;
                if (window.localStorage) localStorage.setItem('showTable', showTable ? '1' : '');
            }
            if (showTable) {
                $('.mutatortiles').hide();
                $('.mutatortable').show();
            } else {
                $('.mutatortiles').show();
                $('.mutatortable').hide();
            }
        }
        $('#icons-option').click(updateTable);
        $('#table-option').click(updateTable);
        updateTable();
    </script>
    <script src="/scripts/tooltips.js"></script>
    <p>如果你更喜欢在单页显示全部内容的旧版布局，<a href="/resources/mutators">仍可在此访问</a>。</p>
<?= endContent() ?>
