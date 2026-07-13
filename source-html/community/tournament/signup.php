<?php

/** @generateStatic */

require_once __DIR__ . "/../../../includes/wrapper.php";
?>
<?= startHead() ?>
    <title>《星际争霸 II》合作任务 - 锦标赛</title>
    <meta name="description" content="独特的合作任务锦标赛：两支双人队伍在多轮突变任务中展开较量。">
    <meta name="keywords" content="星际争霸 II, 合作任务, 锦标赛">
    <link rel="canonical" href="https://starcraft2coop.com/community/tournament/signup">
<?= startContent() ?>
    <h1>合作任务锦标赛</h1>
    <p>合作任务锦标赛旨在考验玩家在《星际争霸 II》合作任务模式中的操作、知识与地图意识极限。目前，获胜队伍可获得 $100 奖金（每名玩家 $50）。</p>
    <p>你可以访问<a href="archive">存档</a>，查看往届锦标赛进程、下载全部对局录像，并观看每场比赛的解说录像。</p>
    <h2>规则</h2>
    <h3>游戏规则</h3>
    <ul>
        <li>所有对局均使用残酷难度。</li>
        <li>两支队伍的点数池初始均为 4 点。</li>
        <li>两支队伍初始均有 1 条命。</li>
        <li>参赛者可根据面对的突变因子调整威望与精通点数。</li>
        <li>玩家可按需暂停对局，次数不限。</li>
    </ul>
    <h3>禁用内容</h3>
    <ul>
        <li>不得选择“致命吸引”“微交易”“极性”与“眩晕”。</li>
        <li>以下突变因子组合被禁用，任何队伍都不得使用：
            <ul>
                <li>爆破机器人 + 极速狂飙</li>
                <li>扩散 + 生命汲取 + 近视眼</li>
                <li>扫雷专家 + 虚空复生者</li>
                <li>传播者 + 近视眼 + 极速狂飙</li>
            </ul>
        </li>
        <li>以下地图与突变因子组合被禁用，任何队伍都不得使用：
            <ul>
                <li>风暴英雄 + 疏散矿工</li>
                <li>风暴英雄 + 埃蒙之镰</li>
            </ul>
        </li>
        <li>任何队伍都不得使用以下取巧战术：
            <ul>
                <li>升起基地规避攻击</li>
                <li>“亡者之夜”防御塔取巧战术</li>
                <li>雷诺/沃拉尊的无敌隐形单位</li>
                <li>汉/霍纳隐藏突击舰</li>
            </ul>
        </li>
        <li>如有疑问，队伍应在确认选择前向管理员核实某项战术是否允许。</li>
    </ul>
    <h3>锦标赛赛制</h3>
    <ul>
        <li>锦标赛由两支双人队伍参加，共进行多轮比赛。</li>
        <li>每轮按以下方式进行：
            <ul>
                <li>每轮中，每支队伍都要挑战由对手指定的突变因子组合。</li>
                <li>两队轮流向对方要挑战的组合中加入一个突变因子。</li>
                <li>某个突变因子一经选择，本轮及下一轮中任何队伍都不能再次选择。</li>
                <li>受游戏限制，最多可选择 10 个突变因子。</li>
                <li>突变因子组合交给对方后，对方选择用于挑战该组合的地图。</li>
                <li>某张地图一经选择，在该队伍完成地图池中的所有其他地图前不能再次使用。</li>
                <li>某名指挥官一经选择，在该队伍使用过所有其他指挥官前不能再次使用。若玩家未购买某名指挥官，则需使用其 5 级试玩版本。</li>
                <li>每支队伍都要尝试完成任务，不要求完成奖励目标。</li>
                <li>挑战失败后，队伍失去 1 条命，并必须使用相同的指挥官、任务和突变因子组合重试；两次尝试之间可调整威望和精通点数。</li>
                <li>点数不会结转至下一轮。</li>
                <li>每轮开始时点数池都会补满。</li>
                <li>获胜后，该队伍的点数池增加 2 点。</li>
                <li>完成全部奖励目标可为队伍增加 1 条命。</li>
            </ul>
        <li>一支队伍赢得某轮且另一支队伍失败时，该队伍即为最终胜者。</li>
        <li>如果两队在同一轮均告失败，则落败前任务进度（完成百分比）更高的队伍赢得锦标赛。任务进度的定义见下节。</li>
        <li>为防止僵局，若任务游戏时间超过 45:00，则视为失败，并按该时刻的任务进度计算。</li>
        <li>如果一名盟友断线，另一名玩家必须独自完成任务，并可自行使用盟友的单位和资源。如果两名玩家都断线，则该局视为失败。</li>
    </ul>
    <h3>任务进度</h3>
    <p>如果两支队伍均挑战失败，将根据任务进度计算“任务努力度”分数。下表说明分数的计算指标。</p>
    <table>
        <thead>
            <tr>
                <th>任务</th>
                <th>指标</th>
                <th>总量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/missions/chainofascension">升格之链</a></td>
                <td>沿路线到达的最远路径点</td>
                <td>18</td>
            </tr>
            <tr>
                <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                <td>摧毁的设施</td>
                <td>4</td>
            </tr>
            <tr>
                <td><a href="/missions/deadofnight">亡者之夜</a></td>
                <td>摧毁的被感染建筑</td>
                <td>151</td>
            </tr>
            <tr>
                <td><a href="/missions/lockload">天锁</a></td>
                <td>占领天锁的最高数量</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="/missions/malwarfare">恶意代码</a></td>
                <td>完成净化的安全终端</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                <td>救下的撤离飞船</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                <td>完成护送的波次</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                <td>摧毁的列车</td>
                <td>9</td>
            </tr>
            <tr>
                <td><a href="/missions/partparcel">聚铁成兵</a></td>
                <td>消灭的混合体</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                <td>摧毁的虚空碎片</td>
                <td>10</td>
            </tr>
            <tr>
                <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                <td>摧毁的虚空裂片</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="/missions/templeofthepast">往日神庙</a></td>
                <td>神庙存活时间</td>
                <td>26:00</td>
            </tr>
            <tr>
                <td><a href="/missions/thevermillionproblem">熔火危机</a></td>
                <td>送回的晶体</td>
                <td>20</td>
            </tr>
            <tr>
                <td><a href="/missions/voidlaunch">虚空降临</a></td>
                <td>摧毁的运兵船</td>
                <td>35</td>
            </tr>
            <tr>
                <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                <td>消灭的虚空撕裂者</td>
                <td>10</td>
            </tr>
        </tbody>
    </table>
    <h3>能力</h3>
    <p>除标准规则外，每届锦标赛还会为队伍提供 3 项能力，每项在整届比赛中只能使用一次，以帮助队伍推进赛程。这些能力会从下表中随机选取。</p>
    <table>
        <thead>
            <tr>
                <th>能力</th>
                <th>名称</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/tournament/veto.png" alt="标准否决"></td>
                <td>否决突变因子</td>
                <td>从组合中移除一个突变因子。</td>
            </tr>
            <tr>
                <td><img src="/images/tournament/cveto.png" alt="否决指挥官"></td>
                <td>否决指挥官</td>
                <td>阻止对方队伍在一轮中使用某名指挥官。仅当其指挥官池中至少还有 3 名指挥官时才能使用。</td>
            </tr>
            <tr>
                <td><img src="/images/tournament/mveto.png" alt="否决地图"></td>
                <td>否决地图</td>
                <td>阻止对方队伍在一轮中使用某张地图。仅当其地图池中至少还有 2 张地图时才能使用。</td>
            </tr>
            <tr>
                <td><img src="/images/tournament/race.png" alt="竞速胜利"></td>
                <td>竞速胜利</td>
                <td>允许队伍反复重开地图，直到遇到游戏内“敌方部队组合识别”所显示的指定种族。</td>
            </tr>
            <tr>
                <td><img src="/images/tournament/replay.png" alt="重玩地图"></td>
                <td>重玩地图</td>
                <td>允许队伍再次游玩已经使用过的地图。</td>
            </tr>
            <tr>
                <td><img src="/images/tournament/simplify.png" alt="简化"></td>
                <td>简化</td>
                <td>允许队伍在困难难度而非残酷难度下进行本轮。</td>
            </tr>
        </tbody>
    </table>
    <h3>突变因子点数</h3>
    <p>各突变因子的点数如下：</p>
    <table>
        <thead>
            <tr>
                <th>突变因子</th>
                <th>点数</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>强势部署</td><td>4</td></tr>
            <tr><td>异形孵化</td><td>1</td></tr>
            <tr><td>复仇者</td><td>3</td></tr>
            <tr><td>屏障</td><td>1</td></tr>
            <tr><td>黑死病</td><td>4</td></tr>
            <tr><td>暴风雪</td><td>2</td></tr>
            <tr><td>爆破机器人</td><td>6</td></tr>
            <tr><td>震荡攻击</td><td>1</td></tr>
            <tr><td>黑暗</td><td>1</td></tr>
            <tr><td>扩散</td><td>4</td></tr>
            <tr><td>双刃剑</td><td>4</td></tr>
            <tr><td>强占地盘</td><td>1</td></tr>
            <tr><td>闪避机动</td><td>2</td></tr>
            <tr><td>恐惧</td><td>2</td></tr>
            <tr><td>核弹来袭</td><td>3</td></tr>
            <tr><td>坚定意志</td><td>1</td></tr>
            <tr><td>风暴英雄</td><td>6</td></tr>
            <tr><td>鼓舞人心</td><td>2</td></tr>
            <tr><td>就是死不了</td><td>4</td></tr>
            <tr><td>杀戮机器人</td><td>4</td></tr>
            <tr><td>激光钻机</td><td>2</td></tr>
            <tr><td>熔岩爆裂</td><td>1</td></tr>
            <tr><td>生命汲取</td><td>1</td></tr>
            <tr><td>超远射程</td><td>2</td></tr>
            <tr><td>磁力惊人</td><td>2</td></tr>
            <tr><td>矿物护盾</td><td>1</td></tr>
            <tr><td>扫雷专家</td><td>3</td></tr>
            <tr><td>导弹指挥</td><td>3</td></tr>
            <tr><td>静默时刻</td><td>2</td></tr>
            <tr><td>相互保证毁灭</td><td>2</td></tr>
            <tr><td>轨道轰炸</td><td>1</td></tr>
            <tr><td>感染爆发</td><td>2</td></tr>
            <tr><td>光子超载</td><td>1</td></tr>
            <tr><td>势不可挡</td><td>4</td></tr>
            <tr><td>传播者</td><td>4</td></tr>
            <tr><td>净化光束</td><td>1</td></tr>
            <tr><td>焦土政策</td><td>1</td></tr>
            <tr><td>自毁程序</td><td>2</td></tr>
            <tr><td>近视眼</td><td>3</td></tr>
            <tr><td>资源短缺</td><td>4</td></tr>
            <tr><td>极速狂飙</td><td>2</td></tr>
            <tr><td>时空力场</td><td>1</td></tr>
            <tr><td>时间扭曲</td><td>1</td></tr>
            <tr><td>转化</td><td>4</td></tr>
            <tr><td>龙卷风</td><td>1</td></tr>
            <tr><td>虚空复生者</td><td>4</td></tr>
            <tr><td>虚空裂隙</td><td>6</td></tr>
            <tr><td>行尸走肉</td><td>1</td></tr>
            <tr><td>隐形行动</td><td>2</td></tr>
        </tbody>
    </table>
    <h3>良好体育精神</h3>
    <p>与所有电子竞技赛事一样，参赛者应展现良好体育精神，包括但不限于：</p>
    <ul>
        <li>所有参赛者都应以尊重他人且专业的方式行事。</li>
        <li>任何形式的作弊都会立即导致作弊队伍被取消比赛资格，两名玩家也不得参加后续锦标赛。作弊包括使用修改地图、外挂及其他未经授权的软件。</li>
    </ul>
    <h3>参赛者须知</h3>
    <p>如参加本届锦标赛，请注意以下事项，以确保赛事顺利进行：</p>
    <ul>
        <li>强烈建议准备一名替补搭档，以防原搭档无法到场。</li>
        <li>如果搭档未到场，可使用任意方式寻找合作任务搭档（例如 Discord、合作任务 Subreddit、游戏内聊天等）。</li>
        <li>队伍一旦开始比赛，就应以同一阵容完成整届锦标赛，不得更换搭档。</li>
        <li>如果搭档在锦标赛中途退出，剩余玩家必须独自完成后续任务。他们可以选择盟友的指挥官与精通配置（须遵守赛事规则），也可以使用四矿经济。</li>
        <li>可以使用语音聊天与盟友沟通，但更推荐使用游戏内信号和聊天，以便观众理解你们的计划。</li>
        <li>可以在任意服务器参赛。</li>
        <li>你和对方队伍的玩家将获得一个私密频道，用于：
            <ol>
                <li>确认希望对方队伍挑战的突变因子最终组合。</li>
                <li>选择要使用的能力（如需要）。</li>
                <li>发布胜利画面出现前的对局结束截图与录像文件。</li>
            </ol>
        </li>
        <li>请确保已启用录像功能。锦标赛结束后会发布全部对局录像。</li>
        <li>奖金通过 PayPal 支付。如希望改为电子礼品卡或可赠送的游戏内物品（例如指挥官），可以提出申请。</li>
    </ul>
    <h3>报名</h3>
    <?php
    $closed = true;
    if ($closed) {
        include("registrationclosed.php");
    } else {
        include("registrationopen.php");
    }
    ?>
<?= endContent() ?>
