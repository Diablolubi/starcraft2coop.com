<?php /** @generateStatic */

require_once __DIR__ . "/../includes/wrapper.php";
require_once __DIR__ . "/../includes/queries.php";

function homeMissionImageFilename(string $mission): string
{
    return mission_token($mission);
}

function homeMutationMutatorLink(array $mutator): string
{
    $filename = mutator_token($mutator['mutatorname']);
    return "<a href=\"/mutators/" . $filename . "\"><img class=\"miniIcon\" src=\"/images/mutators/" .
        $filename . ".png\" alt=\"\">" . $mutator['mutatorname'] . "</a>";
}

function homeMutationMutators(array $mutation, array $mutators): string
{
    $links = [];
    foreach (["mut01", "mut02", "mut03"] as $mutatorKey) {
        if ($mutation[$mutatorKey]) {
            $links[] = homeMutationMutatorLink($mutators[intval($mutation[$mutatorKey]) - 1]);
        } else {
            $links[] = '';
        }
    }
    return implode("</td><td>\n", $links);
}

function homeMutationRow(string $week, array $mutation, array $mutators): string
{
    $missionFilename = homeMissionImageFilename($mutation["map"]);
    $html = "<tr>\n";
    $html .= "<td class=\"left-column\">" . $week . "</td>\n";
    $html .= "<td><strong>" . $mutation["mutation"] . "</strong></td>\n";
    $html .= "<td><div class=\"mapImg mapImg-" . $missionFilename . "\">" .
        htmlspecialchars(mapDisplayName($mutation["map"])) . "</div></td>\n";
    $html .= "<td>" . homeMutationMutators($mutation, $mutators) . "</td>\n";
    $html .= "</tr>\n";
    return $html;
}

$cycleList = get_mutationcycle();
$mutators = get_mutators();
[$currentWeekIndex, $currentWeekStart] = get_currentmutationcycle();
$nextWeekIndex = ($currentWeekIndex + 1) % count($cycleList);
$nextWeekStart = $currentWeekStart + (7 * 24 * 60 * 60);
$secondNextWeekIndex = ($currentWeekIndex + 2) % count($cycleList);
$secondNextWeekStart = $currentWeekStart + (2 * 7 * 24 * 60 * 60);
$thirdNextWeekIndex = ($currentWeekIndex + 3) % count($cycleList);
$thirdNextWeekStart = $currentWeekStart + (3 * 7 * 24 * 60 * 60);
?>
<?= startHead() ?>
    <title>StarCraft II 合作任务——指挥官攻略、任务数据及更多内容！</title>
    <meta name="description" content="全面的 StarCraft II 合作任务资料站，提供指挥官攻略、任务数据、单位数据、突变信息等内容！">
    <meta name="keywords" content="StarCraft II 合作任务攻略">
    <link rel="canonical" href="https://starcraft2coop.com">

    <style>
        @media (min-width: 701px){
            #updateTable td:nth-child(1){
                width:120px;
            }
        }
        @media (max-width: 700px){
            #updateTable td:nth-child(1){
                width:35%;
            }
        }
        .left-column{
            text-align: left;
            white-space: nowrap;
        }
        #updateTable td, #updateTable th{
            border:none;
        }
        #service{
            padding:0.5rem;
            display:inline-block;
            font-size:0.85rem;
            border:1px solid white;
        }
        #homeMutationTable td:nth-child(4){
            min-width:180px;
        }
    </style>
<?= startContent() ?>
    <h1>StarCraft II 合作任务</h1>
    <details>
        <summary>这是什么网站？</summary>
        <p>StarCraft II 是 Blizzard Entertainment 推出的一款即时战略游戏，也是史上最成功的即时战略游戏之一。2015 年，StarCraft II 推出了合作任务模式：两名玩家在任务中并肩对抗埃蒙。游戏提供多位风格各异的指挥官和众多可选地图。</p>
        <p>本站汇集 StarCraft II 合作任务社区整理的各类资料，旨在通过深入分析指挥官与地图，并提供应对游戏中棘手局面的技巧，帮助玩家提升水平。</p>
        <p>StarCraft II 目前可以免费游玩。合作任务模式中有三位指挥官完全免费，其余指挥官可免费游玩至 5 级。如果你是新玩家，请查看<a href="/guides/newplayer">新手指南</a>，挑选自己的第一位指挥官。也可以阅读<a href="guides/generaltips">通用技巧</a>，了解开始游玩该模式时非常实用的建议。</p>
        <p>前往 StarCraft II <a href="https://starcraft2.com" rel="nofollow">官方网站</a>，加入对抗埃蒙的战斗！</p>
    </details>
    <h2>每周突变</h2>
    <div class="tableContainer">
        <table id="homeMutationTable">
            <thead>
                <tr>
                    <th>周次</th>
                    <th>名称</th>
                    <th>地图</th>
                    <th colspan="3">突变因子</th>
                </tr>
            </thead>
            <tbody>
                <?= homeMutationRow("本周", $cycleList[$currentWeekIndex], $mutators) ?>
                <tr><td colspan="6"><span id="nextMutationCountdown" data-next-mutation-start="<?= $nextWeekStart * 1000 ?>"></span></td></tr>
                <?= homeMutationRow(date("M j", $nextWeekStart), $cycleList[$nextWeekIndex], $mutators) ?>
                <?= homeMutationRow(date("M j", $secondNextWeekStart), $cycleList[$secondNextWeekIndex], $mutators) ?>
                <?= homeMutationRow(date("M j", $thirdNextWeekStart), $cycleList[$thirdNextWeekIndex], $mutators) ?>
                <tr><td colspan="6"><p><a href="/resources/weeklymutations#thisweek">查看更多周次</a></p></td></tr>
            </tbody>
        </table>
    </div>
    <script>
        (function() {
            var countdown = document.getElementById("nextMutationCountdown");
            var nextMutationStart = parseInt(countdown.getAttribute("data-next-mutation-start"), 10);

            function pluralize(value, unit) {
                if (!value) return "";
                return value + " " + unit;
            }

            function updateNextMutationCountdown() {
                var remainingSeconds = Math.floor((nextMutationStart - Date.now()) / 1000);
                if (remainingSeconds <= 0) {
                    countdown.textContent = "下一轮突变已经开始。";
                    return;
                }
                var days = Math.floor(remainingSeconds / 86400);
                remainingSeconds %= 86400;
                var hours = Math.floor(remainingSeconds / 3600);
                remainingSeconds %= 3600;
                var minutes = Math.floor(remainingSeconds / 60);
                var seconds = remainingSeconds % 60;
                countdown.textContent = "距离下一轮突变开始还有 " +
                    pluralize(days, "天") + " " +
                    hours + ":" +
                    `${minutes}`.padStart(2, "0") + ":" +
                    `${seconds}`.padStart(2, "0");
            }

            updateNextMutationCountdown();
            setInterval(updateNextMutationCountdown, 1000);
        }());
    </script>
    <script src="/scripts/tooltips.js"></script>
    <h2>社区链接</h2>
    <ul>
        <li><a href="https://discord.gg/VQnXMdm">StarCraft II 合作任务 Discord 社区</a></li>
        <li><a href="https://reddit.com/r/starcraft2coop">/r/starcraft2coop Reddit 社区</a></li>
    </ul>
    <h2>最新动态：</h2>
    <table>
        <tr>
            <td class="left-column">
                <p>2026-05-18</p>
            </td>
            <td>
                <p>首页已经重新设计，并新增了<a href="/units/">单位数据页面</a>。</p>
            </td>
        </tr>
        <tr>
            <td class="left-column">
                <p>2026-05-07</p>
            </td>
            <td>
                <p>我一直在努力完善本站：更新了威望建议，现在可以更方便地跳转到本周突变；菜单导航也已改版，突变因子页面则经过了全面重做。</p>
            </td>
        </tr>
        <tr>
            <td class="left-column">
                <p>2026-03-21</p>
            </td>
            <td>
                <p>starcraft2coop.com 将继续运行！遗憾的是，账户和录像分析器已无法使用。</p>
                <p>本站源代码现已<a href="https://github.com/SerineMolecule/starcraft2coop.com" target="_blank">发布在 GitHub</a>，欢迎参与改进。</p>
            </td>
        </tr>
    </table>
<?= endContent() ?>
