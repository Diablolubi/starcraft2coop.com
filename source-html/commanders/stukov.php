<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>星际争霸 2 合作模式 - 指挥官攻略 - 斯托科夫</title>
  <meta name="description" content="星际争霸 2 合作模式斯托科夫指挥官攻略">
  <meta name="keywords" content="星际争霸 合作模式 攻略 斯托科夫 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/stukov">
  <style>
        #content{
            background: url(/images/commanderdata/bgs/stukov.png);
            background-repeat: no-repeat;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>斯托科夫</h1>
    <p id="commanderMotto">感染的上将</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#comSum">指挥官概述</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">晋升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐部队构成</a></p>
        <p><a href="#units">作战单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
    </div>
    <h2 id="comSum">指挥官概述</h2>
    <p>斯托科夫以铺天盖地的感染单位淹没敌人，从而支配战场。</p>
    <h2 id="levelUnlocks">等级解锁</h2>
    <table class="progressionTable">
        <thead>
            <tr>
                <th>等级/图标</th>
                <th>名称</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_01.png" alt = "感染"></td>
                <td>感染</td>
                <td>
                    斯托科夫开局拥有一座被感染的移民营，它每 60 秒自动免费生成感染步兵单位。<br><br>斯托科夫的主要建筑会以更快速度、无限范围生成菌毯。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_02.png" alt = "敌意孵化"></td>
                <td>敌意孵化</td>
                <td>
                    感染建筑现在可额外储存两次充能，并可对敌方建筑施放；除生成巢虫外，还会使其无法运作。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_03.png" alt = "疫病蔓延"></td>
                <td>疫病蔓延</td>
                <td>
                   在被感染的移民营解锁额外一级感染。<br><br>同时在感染指挥中心解锁一项升级，使感染建筑生成的巢虫数量提高 50%。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_04.png" alt = "末日巨兽"></td>
                <td>末日巨兽</td>
                <td>
                    解锁在目标位置生成末日巨兽的能力。末日巨兽可由玩家控制，并会战斗 60 秒。可从顶部面板召唤末日巨兽。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_05.png" alt = "感染工程站升级包"></td>
                <td>感染工程站升级包</td>
                <td>
                    在感染工程站解锁以下升级：
                    <ul>
                        <li>提高感染碉堡的护甲。</li>
                        <li>提高感染碉堡扎根时的生命恢复速度。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_06.png" alt = "腐化征召"></td>
                <td>腐化征召</td>
                <td>
                    生成被感染的陆战队员现在可额外储存 10 次充能，被感染的陆战队员的生成速度提高 100%。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_07.png" alt = "感染步兵升级包"></td>
                <td>感染步兵升级包</td>
                <td>
                    在被感染的移民营解锁一项升级，使被感染的平民死亡时生成巢虫。<br><br>在感染兵营科技实验室解锁一项升级，使被感染的陆战队员和被感染的士兵对其攻击的单位造成额外持续伤害。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_08.png" alt = "新单位：巢虫女王"></td>
                <td>新单位：巢虫女王</td>
                <td>
                    空中支援单位。可以使用眼虫共生和生成巢虫。<br><br>可以攻击空中单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_09.png" alt = "感染重工厂升级包"></td>
                <td>感染重工厂升级包</td>
                <td>
                    在感染重工厂科技实验室解锁以下升级：
                    <ul>
                        <li>提高感染攻城坦克对重甲目标造成的伤害。</li>
                        <li>使感染响尾蛇在身后留下黏液轨迹，对敌方地面单位造成伤害并使其减速。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_10.png" alt = "亚历山大号"></td>
                <td>亚历山大号</td>
                <td>
                    解锁在目标位置召唤亚历山大号的能力。亚历山大号可由玩家控制，并会战斗 60 秒。可从顶部面板召唤亚历山大号。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_11.png" alt = "感染星港升级包"></td>
                <td>感染星港升级包</td>
                <td>
                    在感染星港科技实验室解锁以下升级：
                    <ul>
                        <li>提高感染女妖的生命值。</li>
                        <li>降低感染解放者攻击时受到的伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_12.png" alt = "燃烧义肢"></td>
                <td>燃烧义肢</td>
                <td>
                   末日巨兽的攻击和首次出现时造成的范围伤害提高 100%。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_13.png" alt = "巢虫女王升级包"></td>
                <td>巢虫女王升级包</td>
                <td>
                    在感染星港科技实验室解锁以下升级：
                    <ul>
                        <li>巢虫女王的能量恢复速度提高 100%，并使其出生时拥有全部能量。</li>
                        <li>使巢虫女王能够定身并显形敌方地面单位，同时持续对其造成伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/stukov/stukov_14.png" alt = "膨胀碉堡"></td>
                <td>膨胀碉堡</td>
                <td>
                    感染碉堡的单位容量提高 2，被感染的士兵的生成速度提高 20%。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/stukov/stukov_15.png" alt = "神经感染"></td>
                <td>神经感染</td>
                <td>
                    斯托科夫会控制正被亚历山大号触须攻击的敌方单位。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示指挥官实力会在该等级显著提升。</p>
    <h2 id="achievements">成就</h2>
    <p>斯托科夫的专属成就如下：</p>
    <table>
        <thead>
            <tr>
                <th>成就</th>
                <th>名称</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/achievements/stukov/abroodofyourown.jpg" alt="自己的巢群"></td>
                <td>自己的巢群</td>
                <td>在合作任务中，用友方建筑生成的巢虫对敌人造成 10,000 点伤害。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/stukov/apocalisknow.jpg" alt="末日巨兽降临"></td>
                <td>末日巨兽降临</td>
                <td>在合作任务中，使用末日巨兽造成 100,000 点伤害。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/stukov/shortterminfestment.jpg" alt="短期感染"></td>
                <td>短期感染</td>
                <td>在合作任务中生成 5,000 名被感染的陆战队员。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/stukov/thestukovmaneuver.jpg" alt="斯托科夫战术"></td>
                <td>斯托科夫战术</td>
                <td>在合作任务中，使用亚历山大号造成 100,000 点伤害。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">面板技能</h2>
    <p>15 级且未分配精通点时，斯托科夫的面板技能如下：</p>
    <table class="calldownTable">
        <thead>
            <tr>
                <th>面板技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>推荐用法</th>
                <th>数值</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/abilities/stukov/deploypsiemitter.png" alt = "部署灵能发射器"></td>
                <td>部署灵能发射器</td>
                <td>命令所有现有及新生成的感染步兵单位前往指定地点。</td>
                <td>
                    <ul>
                        <li>经常调整灵能发射器的位置，确保感染单位朝你希望的方向移动。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：0 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/stukov/infeststructure.png" alt = "感染建筑"></td>
                <td>感染建筑</td>
                <td>感染目标友方或敌方建筑，使其生成 60 只巢虫，过程持续 20 秒。<br><br>友方建筑每秒恢复 25 点生命值；敌方建筑则会在效果持续期间无法运作。</td>
                <td>
                    <ul>
                        <li>感染建筑无法以拔起的碉堡为目标。先令碉堡扎根，施放感染建筑后再将其拔起。</li>
                        <li>可在部队进攻时吸引敌方单位的注意力。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：180 秒</li>
                        <li>冷却时间：90 秒</li>
                        <li>最大充能次数：3</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/stukov/apocalisk.png" alt = "末日巨兽"></td>
                <td>末日巨兽</td>
                <td>在目标位置生成一只末日巨兽。末日巨兽可由玩家控制，并会战斗 60 秒。</td>
                <td>
                    <ul>
                        <li>适合应对地面部队。</li>
                        <li>也能应付少量空中单位。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：240 秒</li>
                        <li>冷却时间：300 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/stukov/aleksander.png" alt = "亚历山大号"></td>
                <td>亚历山大号</td>
                <td>在目标位置召唤感染战列巡航舰亚历山大号。亚历山大号可由玩家控制，并会战斗 60 秒。</td>
                <td>
                    <ul>
                        <li>适合攻入敌方基地。</li>
                        <li>亚历山大号被摧毁后会坠落地面，造成 300 点伤害，并在接下来的 30 秒内每秒生成一个感染单位。</li>
                        <li>拥有降低所受伤害的光环。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：360 秒</li>
                        <li>冷却时间：360 秒</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>末日巨兽技能会将一只末日巨兽带到战场。该单位自身拥有以下技能：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/apocalisk">
                <img src="/images/commanderdata/abilities/stukov/apocalisk.jpg" alt="末日巨兽">
                <p>末日巨兽</p>
            </a>
        </div>
        <div>
            <table class="centered unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/stukov/clusterrockets.png" alt="集束火箭"></td>
                        <td>集束火箭</td>
                        <td>向目标敌方空中单位齐射 5 枚导弹，总计造成 100 点伤害。（最多 40 枚导弹）</td>
                        <td>10 秒/5 枚导弹</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/stukov/burrowcharge.png" alt="潜地冲锋"></td>
                        <td>潜地冲锋</td>
                        <td>潜入地下并冲向目标位置，造成 150 点伤害，并使非英雄敌人昏迷 5 秒。</td>
                        <td>10 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="leveling">晋升前升级</h2>
    <p>难度：简单</p>
    <p>斯托科夫在低等级时的玩法与巅峰等级阶段基本相同。不过，他的感染单位生成速度会明显较慢（因为尚未解锁膨胀碉堡升级）。因此，选择卸载碉堡、一次性放出大量感染单位时需要谨慎，因为重新填满碉堡需要一段时间。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是斯托科夫三个技能组的推荐点数分配。这是一套未选择威望时适用于所有地图的通用配置。强烈建议你根据自己的玩法和具体挑战调整精通（例如<a href="/resources/weeklymutations">每周突变</a>）。</p>
    <p>技能组 1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>生成易爆感染体的几率</td>
                <td>每点 0.5%<br>最高 15%</td>
                <td>30</td>
                <td rowspan="2">更积极使用感染建筑的玩家可以考虑将部分点数投入相应精通。不过，易爆感染体能造成大量溅射伤害，有助于削弱敌方防线，这一点也应纳入考量。</td>
            </tr>
            <tr>
                <td>感染建筑冷却时间</td>
                <td>每点 -1.5 秒<br>最多 -45 秒</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">易爆感染体能提升指挥官的整体实力，还会使亚历山大号开始生成易爆感染体。感染建筑固然实用，但其强度仍不及真正部署在战场上的单位。</p>
    <p>技能组 2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>亚历山大号冷却时间</td>
                <td>每点 -3 秒<br>最多 -90 秒</td>
                <td>0</td>
                <td rowspan="2">喜欢在亚历山大号（可提供伤害减免增益）的掩护下攻入敌方基地的玩家，可以考虑为亚历山大号精通投入一些点数。不过，这会占用末日巨兽精通的点数，从而降低其使用频率。</td>
            </tr>
            <tr>
                <td>末日巨兽冷却时间</td>
                <td>每点 -3 秒<br>最多 -90 秒</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">尽管亚历山大号强大得多，但其使用次数通常不如末日巨兽；后者可以频繁召唤，用来应对进攻波和小规模推进。</p>
    <p>技能组 3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>感染步兵持续时间</td>
                <td>每点 1 秒<br>最高 30 秒</td>
                <td>30</td>
                <td rowspan="2">大量使用机械单位（响尾蛇、解放者和攻城坦克）的玩家，可能更愿意将点数投入机械单位精通，进一步强化部队。</td>
            </tr>
            <tr>
                <td>机械单位攻击速度</td>
                <td>每点 1%<br>最高 30%</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">通常不会使用足够多的机械单位，因此难以体现机械单位攻击速度精通的价值。持续时间精通会影响所有感染单位，因而强大得多。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是斯托科夫的威望。“完全生效等级”指该威望发挥全部效果时所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>惊人血肉焊机</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>重工厂和星港不再有科技要求。</li>
                        <li>机械作战单位的费用降低 30%。</li>
                        <li>自动有丝分裂生成感染攻城坦克弹药的速度提高 200%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>被感染的移民营不会出现，也无法建造。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望让斯托科夫在前期就能轻松获得机械单位。移除科技要求并降低单位费用，使他可以更早建立地图控制力。这是一个极其强大的威望；失去被感染的移民营只会影响感染单位专属升级（厌氧强化和巢虫孕育）。这些升级虽然实用，但价值仍不及大幅降价的机械单位。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>瘟疫守望者</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>女妖最多可装载 16 个感染步兵，并可将运载单位发射到地面目标处。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>被感染的平民的限时生命缩短 30%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>女妖可将单位卸载到 10 射程内的目标位置，并造成 20 点伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望使女妖兼具医疗运输机的作用，可将感染步兵运送到地图各处。它虽然能衍生一些富有创意的战术，但频繁装卸单位需要大量微操，回报并不相称。此外，考虑到感染女妖费用高昂，它们应对大多数地面目标时通常不如响尾蛇有效，因此这一威望的实用性相当有限。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>尸群领主</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>感染碉堡生成被感染的士兵的速度提高 200%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>感染碉堡不再拥有载荷空间。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望将碉堡从静态防御建筑变为被感染的士兵生成器。碉堡会失去驻军功能，但能以极快速度生成感染单位。对偏好大量碉堡战术的玩家而言，这一威望优于不选择威望。它与感染单位持续时间精通搭配良好，也适合只需朝单一方向推进的地图。使用这一威望挑战往日神庙等任务会更困难一些。它在对抗<a href="/resources/mutators">突变因子</a>，例如爆破机器人、黑死病和杀戮机器人时会非常有效。</td>
            </tr>
        </tbody>
    </table>
    <p>惊人血肉焊机让斯托科夫在最弱势的前期就能使用他最强大的单位。这一威望用途广泛，整体表现胜过其他威望，至少在常规玩法中最值得推荐。</p>
    <h2 id="army">推荐部队构成</h2>
    <p>斯托科夫的推荐部队构成如下。此处假设未选择威望，并采用推荐的精通点数分配。这只是部队框架的基础建议。建议先了解<a href="#units">单位</a>章节中的每个单位，再根据实际情况补充科技单位，以便更好地应对不同局面。</p>
    <img class="army" src="/images/commanderdata/units/stukov/infestedbunker.jpg" alt="感染碉堡"><img class="army" src="/images/commanderdata/units/stukov/infesteddiamondback.jpg" alt="感染响尾蛇">
    <p>优先攀科技组建感染响尾蛇部队，并将剩余晶体矿投入感染碉堡和被感染的移民营的升级。</p>
    <div class="techContainer"><img class="army" src="/images/commanderdata/units/stukov/infestedsiegetank.jpg" alt="感染攻城坦克"><div class="techAdd">+</div></div>
    <p>如需坚守特定防御位置，可在部队中加入感染攻城坦克。</p>
    <script>
        $(".army").on('mouseover',function(e){
            var unit = $(this).attr("alt").split(":");
            $("#tooltip").html("<b>" + unit[0] + "</b>");
            $("#tooltip").show();
        });
        $(".army").on('mouseleave',function(){
            $("#tooltip").hide();
        });
        $(".army").on('mousemove',function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
        $(".techAdd").on('mouseover',function(e){
            var unit = $(this).siblings(".army").attr("alt").split(":");
            $("#tooltip").html("<b>" + unit[0] + "</b>");
            $("#tooltip").show();
        });
        $(".techAdd").on('mouseleave',function(){
            $("#tooltip").hide();
        });
        $(".techAdd").on('mousemove',function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
    </script>
    <h2 id="units">作战单位</h2>
    <p>如需了解斯托科夫的单位属性、单位对比和升级计算，请访问<a href="/units/#stukov">数据表</a>页面。</p>
    <p>斯托科夫的作战单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infestedcivilian">
                <img src="/images/commanderdata/units/stukov/infestedcivilian.jpg" alt="被感染的平民">
                <p>被感染的平民</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由被感染的移民营生成。</li>
                <li>强烈建议购买被感染的移民营的全部升级，因为这些升级非常强大，能迅速滚起优势。</li>
                <li>持续 90 秒。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/anaerobicenhancement.png" alt="厌氧强化"></td>
                        <td>厌氧强化</td>
                        <td>使被感染的平民能够迅速扑向附近的敌方地面单位。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/broodlinggestation.png" alt="巢虫孕育"></td>
                        <td>巢虫孕育</td>
                        <td>被感染的平民死亡时生成一只巢虫。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/volatileinfested">
                <img src="/images/commanderdata/units/stukov/volatileinfested.jpg" alt="易爆感染体">
                <p>易爆感染体</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由被感染的移民营生成，取代部分被感染的平民。</li>
                <li>持续 90 秒。</li>
                <li>死亡时造成溅射伤害。</li>
                <li>感染攻城坦克的炮弹也会生成该单位。</li>
                <li>受感染攻城坦克的酸性酶升级影响。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/anaerobicenhancement.png" alt="厌氧强化"></td>
                        <td>厌氧强化</td>
                        <td>使被感染的平民能够迅速扑向附近的敌方地面单位。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/broodlinggestation.png" alt="巢虫孕育"></td>
                        <td>巢虫孕育</td>
                        <td>被感染的平民死亡时生成一只巢虫。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/acidicenzymes.png" alt="酸性酶"></td>
                        <td>酸性酶</td>
                        <td>感染攻城坦克在两种模式下对重甲单位和建筑额外造成 +15 点伤害。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infestedmarine">
                <img src="/images/commanderdata/units/stukov/infestedmarine.jpg" alt="被感染的陆战队员/被感染的士兵">
                <p>被感染的陆战队员/被感染的士兵</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由兵营生成。</li>
                <li>碉堡会生成“被感染的士兵”。被感染的士兵与被感染的陆战队员的属性相同，只有生存时间不同：被感染的陆战队员为 90 秒，被感染的士兵为 30 秒。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/retinalaugmentation.png" alt="视网膜强化"></td>
                        <td>视网膜强化</td>
                        <td>被感染的陆战队员和被感染的士兵的攻击射程提高 +1。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/plaguedmunitions.png" alt="疫病弹药"></td>
                        <td>疫病弹药</td>
                        <td>被感染的陆战队员和被感染的士兵会对其攻击的单位额外造成 50 点伤害，持续 15 秒。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infestedbunker">
                <img src="/images/commanderdata/units/stukov/infestedbunker.jpg" alt="感染碉堡">
                <p>感染碉堡</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>扎根的感染碉堡每 24 秒生成一个被感染的士兵。</li>
                <li>扎根的感染碉堡即使没有升级也拥有很高的生命恢复速度，不过仍建议购买该升级。</li>
                <li>拔起的感染碉堡同时拥有近战和远程攻击。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/regenerativeplating.png" alt="再生装甲板"></td>
                        <td>再生装甲板</td>
                        <td>感染碉堡扎根时的生命恢复速度提高一倍。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/calcifiedarmor.png" alt="钙化装甲"></td>
                        <td>钙化装甲</td>
                        <td>感染碉堡获得 +3 护甲。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infesteddiamondback">
                <img src="/images/commanderdata/units/stukov/infesteddiamondback.jpg" alt="感染响尾蛇">
                <p>感染响尾蛇</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>使用得当时，是斯托科夫手下的强力单位。</li>
                <li>通过拉扯敌方单位来避免承受伤害非常重要。</li>
                <li>可以使用真菌缠绕，将敌方空中单位拉到地面，使地面单位也能攻击它们。</li>
                <li>无法对带有“不可阻挡”标签的单位使用真菌缠绕（例如虚空降临中的穿梭机）。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/stukov/fungalsnare.png" alt="真菌缠绕"></td>
                        <td>真菌缠绕</td>
                        <td>将目标敌方空中单位拉到地面，使其他单位可以像攻击地面单位一样攻击它。</td>
                        <td>45 秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/saturatedcultures.png" alt="饱和培养物"></td>
                        <td>饱和培养物</td>
                        <td>感染响尾蛇的真菌缠绕冷却时间缩短 15 秒。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/causticmucus.png" alt="腐蚀黏液"></td>
                        <td>腐蚀黏液</td>
                        <td>感染响尾蛇移动时会留下酸液轨迹，每秒对敌方单位造成 20 点伤害。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infestedsiegetank">
                <img src="/images/commanderdata/units/stukov/infestedsiegetank.jpg" alt="感染攻城坦克">
                <p>感染攻城坦克</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>可以使用深槽虫道前往任意可见且有菌毯的位置，冷却时间为 60 秒。</li>
                <li>以被感染的平民（来自被感染的移民营）或被感染的士兵（来自感染碉堡）作为弹药。</li>
                <li>无法使用兵营生成的被感染的陆战队员。</li>
                <li>每装载一个感染单位便恢复 20 点生命值。</li>
                <li>扎根时射程为 18。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/stukov/deeptunnel.png" alt="深槽虫道"></td>
                        <td>深槽虫道</td>
                        <td>可以快速移动到任意可见且有菌毯的位置。</td>
                        <td>60 秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/automatedmitosis.png" alt="自动有丝分裂"></td>
                        <td>自动有丝分裂</td>
                        <td>感染攻城坦克自动生成 1 发爆炸生物质弹药，间隔 30 秒。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/acidicenzymes.png" alt="酸性酶"></td>
                        <td>酸性酶</td>
                        <td>感染攻城坦克在两种模式下对重甲单位和建筑额外造成 +15 点伤害。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infestedliberator">
                <img src="/images/commanderdata/units/stukov/infestedliberator.jpg" alt="感染解放者">
                <p>感染解放者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>斯托科夫强力的对空手段。</li>
                <li>很容易对目标造成伤害溢出，因此不建议大量建造。</li>
                <li>云雾扩散升级必不可少。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/viralcontamination.png" alt="病毒污染"></td>
                        <td>病毒污染</td>
                        <td>感染解放者对主要目标造成的伤害提高 100%。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/clouddispersal.png" alt="云雾扩散"></td>
                        <td>云雾扩散</td>
                        <td>感染解放者攻击时会立即化为一团微生物云雾，使其受到的伤害降低 85%。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/infestedbanshee">
                <img src="/images/commanderdata/units/stukov/infestedbanshee.jpg" alt="感染女妖">
                <p>感染女妖</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由于有更优秀的对地单位，通常不建议使用。</li>
                <li>可以潜地，以更快速度恢复生命值和能量。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/stukov/cloak.png" alt="隐形"></td>
                        <td>隐形</td>
                        <td>使单位隐形，令敌方单位无法看到或攻击它。隐形单位只会被侦测单位或侦测效果显形。隐形的感染女妖射程还会提高 2。<br><br>每秒消耗 0.9 点能量。</td>
                        <td>0 秒</td>
                        <td>0</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/stukov/burrow.png" alt="潜地"></td>
                        <td>潜地</td>
                        <td>使单位钻入地下。潜地单位无法移动或攻击，但在未被侦测时不会被发现。</td>
                        <td>0 秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/rapidhibernation.png" alt="快速休眠"></td>
                        <td>快速休眠</td>
                        <td>使感染女妖能够潜地。感染女妖潜地时每秒恢复 20 点生命值和能量。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/bracedexoskeleton.png" alt="强化外骨骼"></td>
                        <td>强化外骨骼</td>
                        <td>感染女妖获得 +100 点生命值。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#stukov/broodqueen">
                <img src="/images/commanderdata/units/stukov/broodqueen.jpg" alt="巢虫女王">
                <p>巢虫女王</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>主要用于施放真菌增生；该技能可重创由低生命值单位组成的进攻波，例如虫群异虫。</li>
                <li>巢虫女王的仇恨优先级很高，较容易损失，因此生成巢虫的效果相对有限。</li>
                <li>只有在缺少侦测手段时才应使用眼虫共生。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/stukov/ocularsymbiote.png" alt="眼虫共生"></td>
                        <td>眼虫共生</td>
                        <td>使一个友方单位的视野提高 5，并使其能在 180 秒内侦测隐形和潜地单位。</td>
                        <td>0 秒</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/stukov/spawnbroodlings.png" alt="生成巢虫"></td>
                        <td>生成巢虫</td>
                        <td>对一个目标敌方单位造成 300 点伤害。该单位死亡时，会从尸体中生成 2 只巢虫。</td>
                        <td>0 秒</td>
                        <td>100</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/stukov/fungalgrowth.png" alt="真菌增生"></td>
                        <td>真菌增生</td>
                        <td>定身敌方单位并造成 80 点伤害，持续 4 秒。使隐形和潜地单位显形。</td>
                        <td>0 秒</td>
                        <td>75</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/fungalgrowth.png" alt="真菌增生"></td>
                        <td>真菌增生</td>
                        <td>使巢虫女王可以定身敌方单位并造成 80 点伤害，持续 4 秒，并令隐形或潜地目标显形。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/stukov/enhancedmitochondria.png" alt="强化线粒体"></td>
                        <td>强化线粒体</td>
                        <td>巢虫女王的能量恢复速度提高 100%。巢虫女王出生时拥有全部能量。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是斯托科夫的标准经济型建造顺序。如需进一步了解如何阅读和编写自己的建造顺序，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        15 王虫<br>
        15 精炼厂<br>
        19 在岩石处建造指挥中心<br>
        21 精炼厂<br>
        21 厌氧强化<br>
        22 工程站<br>
        22 王虫<br>
        24 巢虫孕育<br>
        25 兵营
    </p>
    <h2 id="guide">玩法攻略</h2>
    <h3>常见玩法误区</h3>
    <p>斯托科夫玩家常见的误区之一，是选择以兵营为核心的部队。大多数情况下这并无大碍，但在持续时间远超平均对局的任务中，这一战术可能会失效；某些突变因子会造成这种局面。对局时间过长时，以兵营为核心的斯托科夫可能耗尽晶体矿，因为他的感染部队无法永久存在。</p>
    <p>更好的选择是以碉堡为核心，利用它们免费生成感染单位。即使在普通任务中，碉堡流也优于兵营流，因为碉堡战斗力更强，还能恢复生命值。此外，碉堡内的被感染的士兵在离开碉堡前没有限时生命。</p>
    <h3>被感染的移民营</h3>
    <p>被感染的移民营提供若干最强力的升级，也是斯托科夫部队的核心。居民营每 60 秒会根据自身等级生成一波被感染的平民。平民最初以卵的形态出现，需要 30 秒孵化。</p>
    <p>被感染的移民营的感染等级会永久保留。也就是说，即使它被摧毁，重建后仍会保持原等级。</p>
    <table>
        <thead>
            <tr>
                <th>等级</th>
                <th>卵</th>
                <th>要求</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>8</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>1</td>
                <td>16</td>
                <td>感染兵营</td>
                <td>200/0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>32</td>
                <td>感染工程站</td>
                <td>300/100</td>
            </tr>
            <tr>
                <td>3</td>
                <td>64</td>
                <td>感染军械库</td>
                <td>400/200</td>
            </tr>
        </tbody>
    </table>
    <h3>玩法技巧</h3>
    <ul>
        <li>使用攻城坦克时，如果它们不在碉堡附近，请务必将灵能发射器放在攻城坦克旁边。</li>
        <li>感染碉堡扎根时属于建筑，拔起时属于单位。灵活扎根和拔起碉堡，可有效克制不同单位（例如用扎根碉堡应对寡妇雷，用拔起碉堡应对收割者）。</li>
        <li>攻入敌方基地前，先令一座碉堡扎根，对其施放感染建筑，再将其拔起并向前移动。感染建筑会持续治疗碉堡。</li>
        <li>碉堡生命值较低时，卸载其中单位以降低它的仇恨优先级，让它有机会脱离战斗而不被摧毁。</li>
        <li>重工厂科技实验室提供的酸性酶升级会影响攻城坦克发射的易爆感染体。因此，购买该升级也会强化被感染的移民营生成的易爆感染体。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
