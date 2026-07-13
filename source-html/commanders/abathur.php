<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>星际争霸 II 合作任务 - 指挥官攻略 - 阿巴瑟</title>
  <meta name="description" content="星际争霸 II 合作任务指挥官阿巴瑟攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 阿巴瑟 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/abathur">
  <style>
        #content{
            background: url(/images/commanderdata/bgs/abathur.png);
            background-repeat: no-repeat;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>阿巴瑟</h1>
    <p id="commanderMotto">进化大师</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#comSum">指挥官概述</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">飞升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐部队组成</a></p>
        <p><a href="#units">作战单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
        <p><a href="#biomass">生物质收集</a></p>
    </div>
    <h2 id="comSum">指挥官概述</h2>
    <p>阿巴瑟会从阵亡的敌方单位身上收集生物质，以强化自己的单位。部分单位可以进化为终极进化体——能够带头冲击埃蒙大军的巨型单位。</p>
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
                <td><img src="/images/commanderdata/progression/abathur/abathur_01.png" alt = "生物质收割者"></td>
                <td>生物质收割者</td>
                <td>
                    <ul>
                        <li>阿巴瑟的单位从阵亡敌人身上收集生物质后，可提升生命值、攻击速度和能量恢复速度。</li>
                        <li>蟑螂不消耗高能瓦斯。</li>
                        <li>幼虫的孵化速度加快。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/abathur/abathur_02.png" alt = "终极进化"></td>
                <td>终极进化</td>
                <td>
                    解锁能力：拥有 100 层生物质的地面单位可以进化为莽兽，拥有 100 层生物质的空中单位可以进化为利维坦。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/abathur/abathur_03.png" alt = "剧毒巢穴"></td>
                <td>剧毒巢穴</td>
                <td>
                   被剧毒巢穴伤害的敌人会掉落额外生物质，且攻击速度和移动速度降低。剧毒巢穴被摧毁后有几率重生，并且无法被敌人选为目标。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_04.png" alt = "蟑螂温室升级包"></td>
                <td>蟑螂温室升级包</td>
                <td>
                    在蟑螂温室中解锁以下升级：
                    <ul>
                        <li>蟑螂的生命值低于 50% 时，护甲提高 6 点。</li>
                        <li>破坏者的腐蚀胆汁技能伤害提高 40 点。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_05.png" alt = "强化愈合"></td>
                <td>强化愈合</td>
                <td>
                    愈合最多可储存 3 次使用次数，冷却时间缩短 30 秒。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_06.png" alt = "进化腔升级包"></td>
                <td>进化腔升级包</td>
                <td>
                    在进化腔中解锁以下升级：
                    <ul>
                        <li>使孵化场、虫穴和蜂巢可以同时孵化两只虫群女王。</li>
                        <li>虫群女王的快速输血治疗量提高 10 点，并可同时治疗生物单位和机械单位。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_07.png" alt = "生物质回收"></td>
                <td>生物质回收</td>
                <td>
                    你的单位死亡时有 50% 几率掉落其全部生物质。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_08.png" alt = "新单位：飞蛇"></td>
                <td>新单位：飞蛇</td>
                <td>
                    空中施法单位，能够操控战场局势。可以使用寄生炸弹、吞噬、蔽目毒云和绑架技能。<br><br>可攻击空中单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_09.png" alt = "感染深渊升级包"></td>
                <td>感染深渊升级包</td>
                <td>
                    在感染深渊中解锁以下升级：
                    <ul>
                        <li>解锁虫群宿主的深槽虫道技能，使其能够快速潜地前往目标位置。</li>
                        <li>解锁飞蛇的麻痹倒刺技能，延长绑架造成的昏迷时间。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/abathur/abathur_10.png" alt = "共生体"></td>
                <td>共生体</td>
                <td>
                    莽兽和利维坦获得跟随它们的共生体，共生体会攻击敌人，并以吸收伤害的甲壳保护宿主。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_11.png" alt = "尖塔升级包"></td>
                <td>尖塔升级包</td>
                <td>
                    在尖塔和巨型尖塔中解锁以下升级：
                    <ul>
                        <li>提高守护者的攻击射程。</li>
                        <li>使吞噬者的攻击造成范围伤害。</li>
                        <li>使异龙的攻击对重甲单位造成 100% 额外伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_12.png" alt = "诱变潜能"></td>
                <td>诱变潜能</td>
                <td>
                    破坏者、守护者和吞噬者的变异时间与资源消耗降低 50%。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_13.png" alt = "蝗虫注入"></td>
                <td>蝗虫注入</td>
                <td>
                    敌方单位死亡时有几率生成友方蝗虫。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/abathur/abathur_14.png" alt = "蟑螂进化：邪恶虫种"></td>
                <td>蟑螂进化：邪恶虫种</td>
                <td>
                    将阿巴瑟的蟑螂升级为邪恶虫种。<br><br>突击单位。潜地时可快速恢复生命值。攻击会削弱目标，使其攻击速度和移动速度降低 75%。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/abathur/abathur_15.png" alt = "生质汲取"></td>
                <td>生质汲取</td>
                <td>
                    阿巴瑟的单位每拥有一层生物质，便会以其造成伤害的 1% 治疗自身。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官获得显著强度提升的等级。</p>
    <h2 id="achievements">成就</h2>
    <p>阿巴瑟的指挥官专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/abathur/biggame.jpg" alt="大家伙"></td>
                <td>大家伙</td>
                <td>在合作任务中使用莽兽或利维坦造成 500,000 点伤害。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/abathur/morphology.jpg" alt="形态学"></td>
                <td>形态学</td>
                <td>在困难难度的一场任务中变异出 50 个破坏者、吞噬者或守护者。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/abathur/symbiosis.jpg" alt="共生关系"></td>
                <td>共生关系</td>
                <td>在合作任务中使用阿巴瑟的愈合为盟友单位恢复 50,000 点生命值。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/abathur/toxicity.jpg" alt="剧毒无比"></td>
                <td>剧毒无比</td>
                <td>在困难难度的合作任务中使用剧毒巢穴造成 25,000 点伤害。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">面板技能</h2>
    <p>15 级且未分配精通点数时，阿巴瑟的面板技能如下：</p>
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
                <td><img src="/images/commanderdata/abilities/abathur/spawntoxicnest.png" alt = "孵化剧毒巢穴"></td>
                <td>孵化剧毒巢穴</td>
                <td>在选定位置孵化一个会生成菌毯的剧毒巢穴。敌人踩中时会受到伤害并被减速。被剧毒巢穴伤害的敌人会掉落额外生物质。剧毒巢穴被摧毁后有几率重生。</td>
                <td>
                    <ul>
                        <li>游戏开始时孵化剧毒巢穴，再用蟑螂或孢子爬虫把敌人引入其中，尽快获得第一个终极进化体。</li>
                        <li>把剧毒巢穴放在敌人出生点上，瞬间消灭进攻波次。</li>
                        <li>把剧毒巢穴放在进攻波次的行进路线上，以削弱敌军。</li>
                        <li>在分矿岩石与矿区之间放置一个剧毒巢穴，以便摆下两根脊针爬虫清理岩石。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始充能：5 次</li>
                        <li>冷却时间：20 秒</li>
                        <li>最大充能：5 次</li>
                        <li>孵化时间：15 秒</li>
                        <li>伤害：125</li>
                        <li>移动速度降低：75%</li>
                        <li>攻击速度降低：75%</li>
                        <li>减速持续时间：5 秒</li>
                        <li>重生几率：60%</li>
                        <li>额外生物质：50%</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/abathur/mend.png" alt = "愈合"></td>
                <td>愈合</td>
                <td>立即治疗所有友方单位和建筑，并在短时间内持续恢复生命值。</td>
                <td>
                    <ul>
                        <li>适合长时间交战或需要在地图上持续推进时使用。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始充能：3 次</li>
                        <li>冷却时间：120 秒</li>
                        <li>初始治疗：100HP</li>
                        <li>持续治疗：50HP</li>
                        <li>治疗持续时间：10 秒</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>注意：消灭单位时，单位每占用一点补给，就会掉落 2.5 点生物质。</p>
    <h2 id="leveling">飞升前升级</h2>
    <p>难度：简单</p>
    <p>阿巴瑟升级过程中最困难的是 1 级，此时还无法使用能带来巨大强度提升的终极进化。这个等级建议先使用蟑螂/破坏者/虫群女王组合。异龙表现不佳，因为它们尚未获得收集生物质带来的生命汲取，生存能力很弱。</p>
    <p>提升精通等级期间，将技能组 3 的点数平均分配。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是阿巴瑟的三个技能组及各自的推荐点数分配。请注意，这是未选择任何威望时适用于所有地图的通用方案。强烈建议你根据自己的玩法和面临的具体挑战（例如<a href="/resources/weeklymutations">每周突变</a>）调整精通。</p>
    <p>技能组 1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th><th>数值</th><th>推荐点数</th><th>进一步考虑</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>剧毒巢穴伤害</td>
                <td>每点 2%<br>最高 60%</td>
                <td>30</td>
                <td rowspan="2">如果你希望愈合发挥更大作用且确实常用，可以将点数投入愈合治疗持续时间。一种优化方式是把剧毒巢穴伤害加到刚好能秒杀某种单位，再将剩余点数投入愈合治疗持续时间。你可以使用<a href="/tools/masterybreakpoints">精通阈值计算器</a>进行优化。</td>
            </tr>
            <tr>
                <td>愈合治疗持续时间</td><td>每点 10%<br>最高 300%</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">对通用方案而言，剧毒巢穴伤害通常是更好的选择。阿巴瑟可以用虫群女王承担治疗职责，因此应将全部点数投入剧毒巢穴伤害。</p>
    <p>技能组 2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th><th>数值</th><th>推荐点数</th><th>进一步考虑</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>共生体技能强化</td><td>每点 3.33%<br>最高 99.9%</td>
                <td>30</td>
                <td rowspan="2">双倍生物质几率可让你更快获得终极进化体，也能更快培养出生物质满层单位，效果非常强大。如果你觉得生物质不足，可以考虑投入部分点数。</td>
            </tr>
            <tr>
                <td>双倍生物质几率</td><td>每点 1.5%<br>最高 45%</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">只要操作得当，生物质就不应成为问题。生物质主要在前期用于获得终极进化体；它们成型后便足以应对任务。有效利用剧毒巢穴即可获得足够生物质，做出首个终极进化体并滚起雪球。</p>
    <p>技能组 3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th><th>数值</th><th>推荐点数</th><th>进一步考虑</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>剧毒巢穴最大充能和冷却时间</td><td>每点 1<br>最高 30</td>
                <td>15</td>
                <td rowspan="2">除非你一直缺少剧毒巢穴，否则应在两项之间分配点数。最佳做法是根据自己的玩法，在剧毒巢穴的冷却时间与充能次数之间找到平衡。</td>
            </tr>
            <tr>
                <td>建筑变异与进化速度</td><td>每点 -2%<br>最高 -60%</td>
                <td>15</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">更多可用的剧毒巢穴很有帮助，所以要为第一项投入点数。但加满后充能次数过多，难以有效用完，因此剩余点数投入另一项。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是阿巴瑟的各项威望。“完全生效等级”指该威望发挥全部效果时所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>精华贮藏者</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>作战单位可额外储存 25 点生物质，且死亡时掉落生物质的几率额外提高 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用终极进化。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>与 7 级解锁的生物质回收以加法叠加，使掉落生物质的几率达到 100%。</li>
                        <li>生物质加成也会随额外收集的 25 点生物质线性提高。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>7</td>
            </tr>
            <tr>
                <th>建议</th><td>飞升前低等级升级时，这项威望很有用，因为终极进化体在 10 级解锁共生体前并不强。但进入精通等级后，它会剥夺阿巴瑟极其强势的前期能力与机动性，应尽量避免使用。面对黑死病这类会严重克制终极进化体的<a href="/resources/mutators">突变因子</a>时，这项威望表现不错。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>深隧惊惧</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>蝗虫的攻击射程、移动速度和持续时间提高 50%。</li>
                        <li>深槽虫道升级不再需要蜂巢和视野，并且蟑螂与破坏者也可使用。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>作战单位的高能瓦斯消耗提高 25%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>13 级解锁效果生成的蝗虫也会获得威望强化。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>9</td>
            </tr>
            <tr>
                <th>建议</th><td>这项威望可让阿巴瑟通过深槽虫道转移整支蟑螂/破坏者部队，同时强化虫群宿主的蝗虫。总体而言用途不大，因为莽兽和剧毒巢穴已经能够拦截进攻波次。不过，它也提供了一些富有创意的打法：选择纯地面部队时，只需付出很小的成本增幅，便可突袭任务目标。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>无限进化</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>终极进化体的数量不再限制为 3 个。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>终极进化需要 200 点生物质。</li>
                        <li>生物质的效果减弱。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>每点生物质提供的收益减半。达到 200 点生物质时，加成等同于其他威望下 100 点生物质的加成。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>完全生效等级</th>
                <td>2</td>
            </tr>
            <tr>
                <th>建议</th><td>这项威望乍看很强，实际上却拖慢了阿巴瑟最具优势的强势前期。阿巴瑟的强大之处在于能尽快完成任务。在固定时长的任务中，只要积极收集生物质，这项威望会有不错表现，但不应作为阿巴瑟的常规首选。</td>
            </tr>
        </tbody>
    </table>
    <p>飞升前升级时，达到 7 级后精华贮藏者可让阿巴瑟回收部队掉落的全部生物质，是通用玩法的优秀选择。进入精通等级后，玩家可以根据预期玩法选择不使用威望或使用深隧惊惧，以帮助自己取得胜利。</p>
    <h2 id="army">推荐部队组成</h2>
    <p>阿巴瑟的推荐部队组成如下。该方案假设未选择威望，并采用推荐的精通分配。这只是部队框架的基础建议。建议先了解<a href="#units">单位</a>章节中的各个单位，再根据所处局势加入科技单位。</p>
    <img class="army" src="/images/commanderdata/units/abathur/brutalisk.jpg" alt="莽兽"><img class="army" src="/images/commanderdata/units/abathur/leviathan.jpg" alt="利维坦"><img class="army" src="/images/commanderdata/units/abathur/mutalisk.jpg" alt="异龙">
    <p>终极进化体应当构成部队核心，并应尽快成型，因为它们远强于阿巴瑟的其他单位。之后可将瓦斯收入用于升级和生产异龙。</p>
    <div class="techContainer"><img class="army" src="/images/commanderdata/units/abathur/swarmqueen.jpg" alt="虫群女王"><div class="techAdd">+</div></div>
    <p>向部队中加入虫群女王，为单位提供额外治疗。</p>
    <div class="techContainer"><img class="army" src="/images/commanderdata/units/abathur/devourer.jpg" alt="吞噬者"><div class="techAdd">+</div></div>
    <p>面对重甲空中单位时加入吞噬者，以削减护甲并提供对空范围伤害。</p>
    <div id="tooltip">提示</div>
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
    <p>有关阿巴瑟单位属性、单位对比及升级计算的更多信息，请参阅<a href="/units/#abathur">数据表</a>页面。</p>
    <p>阿巴瑟的作战单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/roach">
                <img src="/images/commanderdata/units/abathur/roach.jpg" alt="蟑螂">
                <p>蟑螂</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>在感染地图上，研究氢碘胆汁以提高对轻甲目标的伤害后，有时能发挥不错的效果。</li>
                <li>蟑螂矿物消耗低，适合用于进化莽兽。</li>
                <li>可以用蟑螂把前期进攻波次引入剧毒巢穴。</li>
                <li>完全升级且生物质满层的蟑螂最多可拥有 15 点护甲（基础 1、升级 3、生物质 5、适应性甲壳 6）。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/glialreconstitution.png" alt="代谢加速"></td><td>代谢加速</td><td>蟑螂的移动速度提高 33%。</td>
                        <td>100/100</td>
                        <td>110 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/tunnelingclaws.png" alt="潜地之爪"></td><td>潜地之爪</td><td>使蟑螂可以在潜地时移动，并使潜地蟑螂的生命恢复速度提高 5 点。</td>
                        <td>100/100</td>
                        <td>110 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/hydriodicbile.png" alt="氢碘胆汁"></td><td>氢碘胆汁</td><td>蟑螂对轻甲单位的伤害提高 8 点。</td>
                        <td>100/100</td>
                        <td>110 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/adaptiveplating.png" alt="适应性甲壳"></td><td>适应性甲壳</td><td>蟑螂生命值低于 50% 时获得 6 点护甲。</td>
                        <td>100/100</td>
                        <td>110 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/ravager">
                <img src="/images/commanderdata/units/abathur/ravager.jpg" alt="破坏者"><p>破坏者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由蟑螂变异而成。</li><li>没有反隐能力时，可用破坏者狙杀隐形单位。</li><li>体型很大，有时会堵住地面部队。</li><li>研究两项升级后非常强大。</li><li>应将技能绑定为<a href="/guides/generaltips">快速施法</a>。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th><th>名称</th><th>说明</th><th>冷却时间</th><th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/corrosivebile.png" alt="腐蚀胆汁"></td><td>腐蚀胆汁</td><td>向目标位置发射一枚飞弹，命中时对区域内敌方单位造成 60 点伤害。<br><br>可以摧毁星灵的力场。</td><td>10 秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/bloatedbileducts.png" alt="膨胀胆管"></td><td>膨胀胆管</td><td>破坏者腐蚀胆汁的命中范围扩大 200%。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/potentbile.png" alt="强效胆汁"></td><td>强效胆汁</td><td>破坏者腐蚀胆汁的伤害提高 40 点。</td>
                        <td>200/200</td>
                        <td>120 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/swarmhost">
                <img src="/images/commanderdata/units/abathur/swarmhost.jpg" alt="虫群宿主"><p>虫群宿主</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强大的防御单位。</li><li>也可用于推进敌方防线。</li><li>深槽虫道提供拦截进攻波次所需的机动性。</li><li>由于瓦斯消耗高且蝗虫存活时间短，通常不适合大量生产。</li><li>在防守型地图上极其有效。</li><li>其仇恨优先级高于蝗虫，需要微操保护。</li><li>攻击速度加成会缩短孵化蝗虫的冷却时间。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th><th>名称</th><th>说明</th><th>冷却时间</th><th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/abathur/spawnlocusts.png" alt="孵化蝗虫"></td><td>孵化蝗虫</td><td>派遣蝗虫前往目标位置。</td>
                        <td>15s</td>
                        <td>0</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/abathur/deeptunnel.png" alt="深槽虫道"></td><td>深槽虫道</td><td>快速潜地前往视野内的目标位置。</td><td>30 秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/pressurizedglands.png" alt="加压腺体"></td><td>加压腺体</td><td>蝗虫可以攻击地面和空中单位。</td>
                        <td>200/200</td>
                        <td>120 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/deeptunnel.png" alt="深槽虫道"></td>
                        <td>深槽虫道</td><td>使虫群宿主可以快速潜地前往地图上任意视野内位置。</td>
                        <td>200/200</td>
                        <td>120 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/mutalisk">
                <img src="/images/commanderdata/units/abathur/mutalisk.jpg" alt="异龙"><p>异龙</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>应作为阿巴瑟部队组成的核心单位。</li><li>没有生物质时极其脆弱。</li><li>生物质满层的异龙可以消灭聚成一团的整支进攻波次。</li>
            </ul>
            <p>技能：无</p><p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/rapidregeneration.png" alt="快速恢复"></td>
                        <td>快速恢复</td><td>异龙脱离战斗时会快速恢复生命值。</td>
                        <td>150/150</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/viciousglave.png" alt="恶毒弹射"></td>
                        <td>恶毒弹射</td><td>异龙的攻击额外弹射三次，最多命中六个目标，且弹射距离更远。</td>
                        <td>150/150</td>
                        <td>90 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/sunderingglave.png" alt="裂甲弹射"></td>
                        <td>裂甲弹射</td><td>异龙对重甲单位造成 100% 额外伤害。</td>
                        <td>200/200</td>
                        <td>120 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/guardian">
                <img src="/images/commanderdata/units/abathur/guardian.jpg" alt="守护者"><p>守护者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由异龙变异而成。</li><li>对地攻城单位。</li><li>守护者射程很远，但每秒伤害低于异龙。</li><li>适合防守型地图。</li>
            </ul>
            <p>技能：无</p><p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/prolongeddispersion.png" alt="延长喷射"></td>
                        <td>延长喷射</td><td>守护者的攻击射程提高 3。</td>
                        <td>200/200</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/devourer">
                <img src="/images/commanderdata/units/abathur/devourer.jpg" alt="吞噬者"><p>吞噬者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>由异龙变异而成。</li><li>对空单位。</li><li>腐蚀喷射升级可使攻击变为范围伤害，对空军组合极具毁灭性。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th><th>名称</th><th>说明</th><th>冷却时间</th><th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/abathur/corrosiveacid.png" alt="腐蚀酸液"></td>
                        <td>腐蚀酸液</td><td>向目标区域内所有敌方单位喷射酸液，使其攻击速度降低 12.5%、护甲降低 3 点。最多叠加 3 次。</td>
                        <td>45s</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/corrosivespray.png" alt="腐蚀喷射"></td>
                        <td>腐蚀喷射</td><td>吞噬者的攻击现在会造成范围伤害。</td>
                        <td>200/200</td>
                        <td>90 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/viper">
                <img src="/images/commanderdata/units/abathur/viper.jpg" alt="飞蛇"><p>飞蛇</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>群体控制单位。</li><li>蔽目毒云是瘫痪敌方地面单位的强力技能。</li><li>可用绑架把攻城坦克、航母等大型单位拉入己方部队中集火。</li><li>寄生炸弹的对空效果不如吞噬者。</li><li>必须研究剧毒微生物，以提高飞蛇的施法距离。</li><li>关闭自动进化，避免飞蛇进化为利维坦而浪费宝贵瓦斯。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th><th>名称</th><th>说明</th><th>冷却时间</th><th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/abduct.png" alt="绑架"></td>
                        <td>绑架</td><td>将目标单位拉向飞蛇。敌人昏迷 1 秒。</td>
                        <td>0 秒</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/disablingcloud.png" alt="蔽目毒云"></td>
                        <td>蔽目毒云</td><td>制造一片毒云，使移动速度降低 50%，并阻止敌方单位和建筑攻击或使用耗能技能。持续 10 秒。</td>
                        <td>0 秒</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/consumption.png" alt="吞噬"></td>
                        <td>吞噬</td><td>从一个友方异虫单位身上吸取最多 75 点生命值，每吸取一点生命值便为飞蛇恢复 2 点能量。</td>
                        <td>10 秒</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/parasiticbomb.png" alt="寄生炸弹"></td>
                        <td>寄生炸弹</td><td>制造半径为 3 的寄生云雾，在 10 秒内对目标及附近敌方空中单位造成 90 点伤害。目标死亡后，云雾会留在其死亡位置直至消散。<br><br>无法以地面单位或建筑为目标。</td>
                        <td>0 秒</td>
                        <td>125</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/virulentmicrobes.png" alt="剧毒微生物"></td>
                        <td>剧毒微生物</td><td>飞蛇所有技能的施法距离提高 4。</td>
                        <td>50/50</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/paralyticbarbs.png" alt="麻痹倒刺"></td>
                        <td>麻痹倒刺</td><td>飞蛇的绑架使单位额外昏迷 5 秒。</td>
                        <td>150/150</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/swarmqueen">
                <img src="/images/commanderdata/units/abathur/swarmqueen.jpg" alt="虫群女王"><p>虫群女王</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>离开菌毯后不会受到移动速度惩罚。</li><li>可以为部队提供治疗支援。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th><th>名称</th><th>说明</th><th>冷却时间</th><th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/spawncreeptumor.png" alt="孵化菌毯肿瘤"></td>
                        <td>孵化菌毯肿瘤</td><td>潜地的菌毯生成器。菌毯为附近异虫建筑提供养分。菌毯肿瘤可以孵化更多菌毯肿瘤。<br><br>加成：异虫在菌毯上移动更快。</td>
                        <td>3s</td>
                        <td>0</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/unitskills/abathur/rapidtransfusion.png" alt="快速输血"></td>
                        <td>快速输血</td><td>持续为一个生物单位或建筑恢复 25 点生命值。</td>
                        <td>3s</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th><th>名称</th><th>效果</th>
                        <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="矿物">/<img src="/images/commanderdata/unitupgrades/icongas_zerg.png" alt="高能瓦斯"></th>
                        <th>研究时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/biomechanicaltransfusion.png" alt="生化机械输血"></td>
                        <td>生化机械输血</td><td>虫群女王快速输血的治疗量提高 10 点，并使其可以治疗机械单位和建筑。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/abathur/incubationchamber.png" alt="孵化室"></td>
                        <td>孵化室</td><td>使孵化场、虫穴和蜂巢可以同时孵化两只虫群女王。</td>
                        <td>100/100</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/brutalisk">
                <img src="/images/commanderdata/units/abathur/brutalisk.jpg" alt="莽兽"><p>莽兽</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强大的地面终极进化体。</li><li>由地面单位进化而成，推荐使用蟑螂。</li><li>正面顺劈攻击会造成范围伤害，能有效清理成群敌人。</li><li>容易受到不朽者等对重甲造成额外伤害的单位克制。</li><li>深槽虫道仅有 10 秒冷却时间，即使没有视野也赋予莽兽极强的机动性。</li>
            </ul>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th><th>名称</th><th>说明</th><th>冷却时间</th><th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitskills/abathur/deeptunnel.png" alt="深槽虫道"></td>
                        <td>深槽虫道</td><td>快速潜地前往目标位置。</td>
                        <td>10 秒</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <p>升级：无</p>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#abathur/leviathan">
                <img src="/images/commanderdata/units/abathur/leviathan.jpg" alt="利维坦"><p>利维坦</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>强大的空中终极进化体。</li><li>由空中单位进化而成，推荐使用异龙。</li><li>由于科技需求较高，建议先获得莽兽。</li>
            </ul>
            <p>技能：无</p><p>升级：无</p>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/commanderdata/units/abathur/symbiote.jpg" alt="共生体">
            <p>共生体</p>
        </div>
        <div class="descContainer">
            <ul>
                <li>伴随终极进化体，造成伤害并提供防御增益。</li><li>可提供 200HP、持续 8 秒的甲壳（不计精通），冷却时间 20 秒。</li><li>对 6 射程内的一个单位造成 20 DPS（不计精通）。</li><li>迫使 8 射程内所有已被吸引仇恨的敌方单位攻击终极进化体，而非其他友方单位。</li>
            </ul>
            <p>技能：无</p><p>升级：无</p>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是阿巴瑟的标准经济型建造顺序。有关如何阅读和编制建造顺序的更多信息，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        14 王虫<br>
        17 蟑螂温室<br>
        20 脊针爬虫<br>
        19 脊针爬虫<br>
        18 萃取巢<br>
        17 萃取巢<br>
        20 蟑螂<br>
        22 王虫<br>
        22 孵化场<br>
        22 萃取巢<br>
        22 萃取巢
    </p>
    <h2 id="guide">玩法攻略</h2><h3>玩法陷阱</h3>
    <p>阿巴瑟玩家常见的误区是大量生产蟑螂。蟑螂虽然最多可达到 15 点护甲，但伤害不高，面对进攻波次和任务目标时往往十分吃力。</p>
    <p>此外，纯蟑螂无法应对空中单位，迫使玩家把部分蟑螂变异为破坏者。不过经验足够时，破坏者确实能有不错表现；要用腐蚀胆汁有效处理空中单位，需要一些练习。</p>
    <h3>生物质计算</h3><p>生物质掉落量按以下方式计算：</p>
    <ol>
        <li>计算基础生物质掉落量：
            <ul>
                <li>若单位是小动物，基础掉落量为 1</li><li>若单位是混合体，基础掉落量为 12</li><li>若单位补给大于 4，基础掉落量为 12</li><li>否则，基础掉落量为 2 x 单位补给</li>
            </ul>
        </li>
        <li>计算额外倍率：
            <ul>
                <li>额外倍率初始设为 1</li><li>若单位曾被剧毒巢穴伤害，额外倍率为 1.5</li><li>根据双倍生物质几率的精通点数，随机将额外倍率覆盖为 2</li>
            </ul>
        </li>
        <li>计算难度倍率：
            <ul>
                <li>残酷难度下为 1.25</li>
            </ul>
        </li>
    </ol>
    <p>生物质掉落量 = 基础生物质掉落量 x 额外倍率 x 难度倍率</p><h3>生物质效果</h3>
    <p>单位可以收集生物质（最多 100 点）来强化自身。阿巴瑟各单位拥有 100 点生物质时的效果如下：</p>
    <table>
        <thead>
            <tr>
                <th>单位</th><th>生物质满层效果</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>蟑螂</td><td>300% 生命值<br>100% 攻击速度<br>+5 护甲<br>100% 生质汲取</td>
            </tr>
            <tr>
                <td>破坏者</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取<br>腐蚀胆汁冷却时间缩短 50%</td>
            </tr>
            <tr>
                <td>虫群宿主</td><td>300% 生命值<br>“孵化蝗虫”冷却时间缩短 50%</td>
            </tr>
            <tr>
                <td>蝗虫*</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取</td>
            </tr>
            <tr>
                <td>异龙</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取</td>
            </tr>
            <tr>
                <td>守护者</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取</td>
            </tr>
            <tr>
                <td>吞噬者</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取</td>
            </tr>
            <tr>
                <td>飞蛇</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取<br>500% 能量恢复</td>
            </tr>
            <tr>
                <td>虫群女王</td><td>300% 生命值<br>100% 攻击速度<br>100% 生质汲取<br>500% 能量恢复</td>
            </tr>
        </tbody>
    </table>
    <p>*蝗虫的强化取决于其所属虫群宿主的生物质。</p><h3>剧毒巢穴用法</h3>
    <p>剧毒巢穴放到地面后，会在敌方单位碰到时立即引爆。这有时并非最优做法，可以右键点击“引爆”技能，将部分巢穴设为手动引爆。原因如下。</p>
    <p>当一队敌人冲向巢穴时，最前方的敌人一碰到巢穴便会将其引爆，如下图所示：</p><img src="/images/commanderdata/guides/abathur/autonestbefore.jpg" alt="剧毒巢穴自动引爆前">
    <p>这样只会消灭少量单位，无法充分利用巢穴的范围伤害，所得生物质大幅减少，而且进攻波次的单位可能仍然存活。</p><img src="/images/commanderdata/guides/abathur/autonestafter.jpg" alt="剧毒巢穴自动引爆后">
    <p>更高效的用法是在进攻波次位于巢穴中央时将其引爆，从而最大化巢穴伤害。建议重新启用自动引爆来触发巢穴，不要在一组巢穴中手动引爆，以免引爆不必要的巢穴。</p><img src="/images/commanderdata/guides/abathur/manualnestbefore.jpg" alt="剧毒巢穴手动引爆前">
    <p>这样能获得多得多的生物质，甚至可用单个巢穴消灭小型进攻波次。</p><img src="/images/commanderdata/guides/abathur/manualnestafter.jpg" alt="剧毒巢穴手动引爆后">
    <p>放置多个巢穴时，建议采用棋盘格布局，最大化伤害覆盖并减少伤害区域不必要的重叠。</p><p>演示视频如下：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/jxEJVn_s5FE" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h3 id="biomass">生物质收集</h3><p>本节列出当前所有合作任务地图的推荐生物质收集位置。最高效的方法是放下剧毒巢穴、关闭自动引爆，再用孢子爬虫把单位引入巢穴。第一波敌军通常会在收集点附近出现，因此也能顺便清理。获得第一个莽兽后，可改用它引怪并继续收集生物质。</p><p>总体而言，异虫有大量脆弱单位，最容易收集生物质；人类单位通常躲在地堡内，因此最难。</p>
    <table>
        <thead>
            <tr>
                <th>任务</th><th>收集位置</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/missions/chainofascension">飞升之链</a><br /><br /><img src="/images/commanderdata/guides/abathur/coa.jpg" alt="飞升之链生物质收集位置">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/cod.jpg" alt="死亡摇篮生物质收集位置">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/deadofnight">亡者之夜</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/don.jpg" alt="亡者之夜生物质收集位置">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/lockload">天锁</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/ll.jpg" alt="天锁生物质收集位置">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/malwarfare">恶意代码</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/mw.jpg" alt="恶意代码生物质收集位置">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/me.jpg" alt="疏散矿工生物质收集位置">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/mo.jpg" alt="机会渺茫生物质收集顺序">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/oe.jpg" alt="湮灭快车生物质收集顺序"><p>由于存在空中单位，这种方法有一定风险。目标是消灭足够多的地面单位，获得 100 点生物质并进化出莽兽来处理空军。如果不习惯这种方法，可在左上方营地入口附近收集生物质并等待进攻波次。</p>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/partparcel">聚铁成兵</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/pp.jpg" alt="聚铁成兵生物质收集顺序"><p>生物质收集位置取决于敌方种族，具体区域如图所示。</p>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/rtk.jpg" alt="克哈裂痕生物质收集顺序">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/soa.jpg" alt="埃蒙之镰生物质收集顺序"><p>先清理玩家 2 基地外的敌方营地，获得少量生物质。随后继续引诱分矿虚空碎片裂隙中生成的单位。</p>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/templeofthepast">往日神庙</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/totp.jpg" alt="往日神庙生物质收集顺序"><p>在中路岩石前放置剧毒巢穴，在进攻波次对岩石造成伤害前将其消灭。</p>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/thevermillionproblem">熔火危机</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/tvp.jpg" alt="熔火危机生物质收集位置"><p>面对人类时，可以先在左侧岛屿收集生物质，再前往中央岛屿。</p>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/voidlaunch">虚空降临</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/vl.jpg" alt="虚空降临生物质收集顺序"><p>清理标记区域内的单位后，在出生点附近放置剧毒巢穴以消灭进攻波次。</p>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                <td>
                    <img src="/images/commanderdata/guides/abathur/vt.jpg" alt="虚空撕裂生物质收集顺序">
                </td>
            </tr>
        </tbody>
    </table>
    <h3>玩法提示</h3>
    <ul>
        <li>游戏开始时孵化剧毒巢穴，用蟑螂或孢子爬虫把敌人引入其中，尽快获得终极进化体。</li><li>用两根脊针爬虫清理分矿，并用剧毒巢穴为其铺设菌毯。</li><li>始终以集齐全部六个终极进化体为目标，并先获得至少一个莽兽。</li><li>游戏开始时集中让一个单位收集生物质，不要分散给所有单位，以加快获得终极进化体。</li><li>让莽兽远离不朽者等对重甲造成额外伤害的单位。</li><li>加入虫群女王，提高部队生存能力。</li><li>使用吞噬者克制空军组合。</li><li>阿巴瑟经常会积压矿物，可在战略位置建造脊针爬虫和孢子爬虫（利用剧毒巢穴的菌毯）来消耗矿物。</li><li>熟练玩家可以关闭剧毒巢穴自动引爆，等敌人在巢穴上聚集后再重新启用，以提高巢穴效率。</li><li>熟练玩家可在部队中加入两到四条飞蛇，并使用蔽目毒云和绑架。</li><li>把单位装入坑道虫可防止其受到 DoT（持续伤害）。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
