<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 2》合作任务 - 指挥官攻略 - 泰凯斯</title>
  <meta name="description" content="《星际争霸 2》合作任务泰凯斯指挥官攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 泰凯斯 Tychus 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/tychus">
  <style>
        #content{
            background: url(/images/commanderdata/bgs/tychus.png);
            background-repeat: no-repeat;
        }
        @media (min-width: 701px){
            .outlaw{
                height:830px;
                margin-top:20px;
            }
        }
        @media (max-width: 700px){
            .outlawAbility{
                clear:both;
            }
        }
        .heroUpgrades th:nth-child(4){
            white-space:nowrap;
        }
        .override{
            height:880px;
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>泰凯斯</h1>
    <p id="commanderMotto">传奇亡命之徒</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#comSum">指挥官概述</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">飞升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#army">推荐部队组成</a></p>
        <p><a href="#outlaws">亡命之徒</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
    </div>
    <h2 id="comSum">指挥官概述</h2>
    <p>泰凯斯率领一群强大的亡命之徒，凭借各自独特的技能和装备掌控战场。</p>
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
                <td><img src="/images/commanderdata/progression/tychus/tychus_01.png" alt = "往日重现"></td>
                <td>往日重现</td>
                <td>
                    泰凯斯的人口上限为 100，可以从乔伊雷酒吧招募传奇亡命之徒。这些亡命之徒属于英雄单位；阵亡时会逃过一劫，之后可在酒吧再次招募。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_02.png" alt = "多多益善"></td>
                <td>多多益善</td>
                <td>
                    解锁为泰凯斯的队伍招募第 5 名亡命之徒的能力。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_03.png" alt = "奥丁"></td>
                <td>奥丁</td>
                <td>
                   解锁在目标位置召唤奥丁的能力。奥丁落地时造成 150 点伤害，并接走泰凯斯作为驾驶员。奥丁可由玩家操控，持续作战 60 秒。可从顶部面板召唤奥丁。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/tychus/tychus_04.png" alt = '新亡命之徒：凯夫“响尾蛇”韦斯特'></td>
                <td>新亡命之徒：凯夫“响尾蛇”韦斯特</td>
                <td>
                    肌肉猛男之一。擅长支援友军并对付重甲地面单位。可使用部署恢复装置。从乔伊雷酒吧招募。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_05.png" alt = "工程站升级包"></td>
                <td>工程站升级包</td>
                <td>
                    在工程站解锁以下升级：
                    <ul>
                        <li>泰凯斯、歪嘴山姆和天狼星的攻击速度提高 25%。</li>
                        <li>烈焰、炮弹和响尾蛇的生命值提高 25%。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/tychus/tychus_06.png" alt = '新亡命之徒：詹姆斯“天狼星”赛克斯'></td>
                <td>新亡命之徒：詹姆斯“天狼星”赛克斯</td>
                <td>
                    神枪手之一。擅长部署炮台，并赋予自己和炮台特殊能力。可使用部署战狼炮台。从乔伊雷酒吧招募。<br><br>可攻击地面和空中单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/tychus/tychus_07.png" alt = "首位免费"></td>
                <td>首位免费</td>
                <td>
                    泰凯斯招募首名亡命之徒所需的晶体矿和高能瓦斯降低 50%。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_08.png" alt = '新亡命之徒：罗伯“炮弹”博斯韦尔'></td>
                <td>新亡命之徒：罗伯“炮弹”博斯韦尔</td>
                <td>
                    肌肉猛男之一。擅长承受伤害并以牙还牙。可使用强力冲击。从乔伊雷酒吧招募。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/tychus/tychus_09.png" alt = "需要搭车吗？"></td>
                <td>需要搭车吗？</td>
                <td>
                    医疗运输平台的数量上限从 1 提高至 3。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_10.png" alt = "新亡命之徒：维嘉"></td>
                <td>新亡命之徒：维嘉</td>
                <td>
                    技术专家之一。擅长控制敌方单位。可使用支配，并可升级为侦测单位。从乔伊雷酒吧招募。<br><br>可攻击地面和空中单位。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/tychus/tychus_11.png" alt = "顺手牵羊"></td>
                <td>顺手牵羊</td>
                <td>
                    所有装备的费用降低 100 晶体矿和 100 高能瓦斯。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_12.png" alt = "首批终极装备包"></td>
                <td>首批终极装备包</td>
                <td>
                    解锁以下升级：
                    <ul>
                        <li>场上每有一名亡命之徒，泰凯斯的武器伤害便会提高（在神枪手藏身处购买）。</li>
                        <li>歪嘴山姆每次攻击都会缩短爆破装药的启动时间（在神枪手藏身处购买）。</li>
                        <li>烈焰受到的所有伤害均不会超过 30 点（在猛男军械库购买）。</li>
                        <li>尼卡拉中尉可以为友方单位施加防御护盾（在技术专家安全屋购买）。</li>
                        <li>纳克斯可缩短所有亡命之徒主要技能的启动时间和冷却时间（在技术专家安全屋购买）。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_13.png" alt = "全副武装"></td>
                <td>全副武装</td>
                <td>
                    在工程站解锁以下升级：
                    <ul>
                        <li>4 级和 5 级亡命之徒武器研究。</li>
                        <li>4 级和 5 级亡命之徒生命值与护甲研究。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/tychus/tychus_14.png" alt = "高级终极装备包"></td>
                <td>高级终极装备包</td>
                <td>
                    解锁以下升级：
                    <ul>
                        <li>提高天狼星的战狼炮台的生命值和攻击伤害（在神枪手藏身处购买）。</li>
                        <li>响尾蛇的攻击可造成范围伤害（在猛男军械库购买）。</li>
                        <li>炮弹每次攻击有 30% 几率造成 4 倍伤害（在猛男军械库购买）。</li>
                        <li>延长维嘉的支配技能持续时间（在技术专家安全屋购买）。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/tychus/tychus_15.png" alt = "大红按钮"></td>
                <td>大红按钮</td>
                <td>
                    在工程站解锁以下升级。
                    <ul>
                        <li>将奥丁的弹幕技能替换为更强的技能，使奥丁能够召唤核弹。</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示指挥官实力大幅提升的等级。</p>
    <h2 id="achievements">成就</h2>
    <p>泰凯斯的指挥官专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/tychus/buybuybuybuybuy.jpg" alt="买买买（买买）"></td>
                <td>买买买（买买）</td>
                <td>在困难难度下，于 20 分钟前购买 5 件终极装备。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/tychus/iaintflippingthisbill.jpg" alt="这账单我可不买"></td>
                <td>这账单我可不买</td>
                <td>购买所有英雄单位的终极装备。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/tychus/outofnetworkcoverage.jpg" alt="服务区外保障"></td>
                <td>服务区外保障</td>
                <td>在合作任务中为盟友单位恢复 50,000 点生命值。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/tychus/pushincaseofemergency.jpg" alt="紧急时请按下"></td>
                <td>紧急时请按下</td>
                <td>使用奥丁的“大红按钮”技能消灭 1,000 个单位。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">面板技能</h2>
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
                <td><img src="/images/commanderdata/abilities/tychus/medivacpickup.png" alt = "医疗运输机接送"></td>
                <td>医疗运输机接送</td>
                <td>立即将目标区域内的所有亡命之徒运送至指定位置，并在抵达后为其恢复生命值、使其隐形（持续 10 秒）。这些单位受到攻击时将停止恢复生命值并解除隐形。</td>
                <td>
                    <ul>
                        <li>适合用于处理进攻波次后迅速返回。</li>
                        <li>可将刚招募或复活的亡命之徒运送至主力队伍。</li>
                        <li>在招募治疗者之前，可作为有效的治疗手段。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>冷却时间：120 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/tychus/calldownodin.png" alt = "召唤奥丁"></td>
                <td>召唤奥丁</td>
                <td>在目标位置召唤奥丁，落地时造成 150 点伤害。奥丁会让泰凯斯担任驾驶员；若泰凯斯已阵亡，则会将其复活。奥丁可由玩家操控，持续作战 60 秒。</td>
                <td>
                    <ul>
                        <li>生存能力极强。</li>
                        <li>非常适合推进敌方基地。</li>
                        <li>可在进攻敌方基地前免费复活泰凯斯。</li>
                        <li>“大红按钮”伤害极高，是必买升级。</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>初始冷却：600 秒</li>
                        <li>冷却时间：360 秒</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>“召唤奥丁”会将一台奥丁投送至战场。奥丁自身拥有下列技能；根据是否研究“大红按钮”，它会获得其中一个技能。每个技能都只有一次使用次数，因此必须选择合适的位置与时机。</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#tychus/odin">
                <img src="/images/commanderdata/units/tychus/odin.jpg" alt="奥丁">
                <p>奥丁</p>
            </a>
        </div>
        <div>
            <table class="centered unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/barrage.png" alt="弹幕"></td>
                        <td>弹幕</td>
                        <td>使大范围内的所有敌人昏迷，并在 5 秒内造成 1000 点伤害。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/bigredbutton.png" alt="大红按钮"></td>
                        <td>大红按钮</td>
                        <td>对目标位置发动核打击。核弹会在 3 秒后落地，对大范围内的敌人造成至多 1000 点伤害。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>奥丁的“大红按钮”会根据敌人与目标区域中心的距离造成不同伤害。下图展示了奥丁核弹落地后的效果，并叠加标出了各区域造成的伤害。</p>
    <img src="/images/commanderdata/abilities/tychus/bigredbuttonarea.jpg" alt="大红按钮伤害范围">
    <p>详细伤害如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>距中心距离</th>
                <th>伤害</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0-8</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>8-10</td>
                <td>500</td>
            </tr>
            <tr>
                <td>10-12</td>
                <td>250</td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">飞升前升级</h2>
    <p>难度：非常简单</p>
    <p>泰凯斯在 1 级时就拥有应对几乎所有任务和敌方组合所需的手段，因此是最容易练级的指挥官之一。在解锁响尾蛇之前，以尼卡拉作为主要治疗者。由于可用升级较少，只需建造两座工程站。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是泰凯斯的三个技能组及推荐点数分配。它们是一套未选择任何威望时，适用于所有地图的通用配置。强烈建议你根据自己的玩法和所面对的具体挑战（例如<a href="/resources/weeklymutations">每周突变</a>）调整精通点数。</p>
    <p>技能组 1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>补充说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>泰凯斯攻击速度</td>
                <td>每点 1%<br>最高 30%</td>
                <td>0</td>
                <td rowspan="2">具体选择取决于玩家的风格。偏好积极进攻的玩家可以选择撕裂者手雷精通，缩短其冷却时间，以便更频繁地使用。尤其适合亲自频繁操控泰凯斯，并尽可能高效使用所有亡命之徒技能的玩家。</td>
            </tr>
            <tr>
                <td>泰凯斯撕裂者手雷冷却时间</td>
                <td>每点 -1%<br>最高 -30%</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">撕裂者手雷可在交战开始时造成爆发伤害，通常能直接消灭低生命值单位。缩短其冷却时间后，玩家可以更频繁地接战并采取更激进的打法，而这种打法在合作任务中往往收益更高。</p>
    <p>技能组 2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>补充说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>三人组研究强化</td>
                <td>每点 0.5%<br>最高 15%</td>
                <td>30</td>
                <td rowspan="2">总体而言，这两项精通都不算出色。三人组精通只影响工程站中的三项升级，而非整个亡命之徒类别。在某些会让你很早遭受攻击、需要尽快布防的突变中，亡命之徒可用时间或许有用。</td>
            </tr>
            <tr>
                <td>亡命之徒可用时间</td>
                <td>每点 -3 秒<br>最高 -90 秒</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">除非面对必须尽早招募亡命之徒的特殊情况（例如竞速），否则三人组研究精通是更好的选择，尽管其效果也相对有限。此外，在普通任务中，你很少能在如此早期就凑齐招募首名亡命之徒所需的资源。</p>
    <p>技能组 3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>能力</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>补充说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>医疗运输机接送冷却时间</td>
                <td>每点 -1.5 秒<br>最高 -45 秒</td>
                <td>?</td>
                <td rowspan="2">两项选择各有优势，取决于玩家对机动性的需求。如果任务不太需要频繁转场，可以考虑缩短奥丁的冷却时间，尤其是在奥丁能帮助你有效突破敌方防线时。</td>
            </tr>
            <tr>
                <td>奥丁冷却时间</td>
                <td>每点 -4 秒<br>最高 -120 秒</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">医疗运输机接送冷却时间可让你更频繁地使用运输机，提高机动性并降低亡命之徒阵亡的概率。奥丁通常用于推进敌方基地，将冷却时间缩短 120 秒（降至 240 秒）也非常实用。两项选择都很有竞争力。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是泰凯斯的威望。“有效等级”指该威望完整生效所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>技术招聘专员</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>亡命之徒主动技能的冷却时间缩短 35%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>亡命之徒的招募费用及两次招募之间的等待时间提高 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>说明</th>
                <td>
                    <ul>
                        <li>撕裂者手雷的冷却缩减与精通效果相加计算。</li>
                        <li>先计算亡命之徒可用时间精通，再计算威望带来的等待时间增加。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>有效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>该威望让亡命之徒能更频繁地使用技能，并能与泰凯斯的撕裂者手雷冷却精通形成很好的叠加效果。喜欢积极微操亡命之徒、频繁使用其技能的玩家可以从这一威望中获得很高收益。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>独狼</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>离开其他亡命之徒的视野范围后，每招募一名亡命之徒，该亡命之徒造成的伤害提高 30%，受到的伤害降低 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用终极装备。</li>
                        <li>装备费用提高 25%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>说明</th>
                <td>
                    <ul>
                        <li>天狼星的炮台可获得独狼增益。</li>
                        <li>维嘉支配的单位可获得独狼增益。</li>
                        <li>只有对应英雄单位获得独狼增益时，其炮台和支配单位才会获得增益。</li>
                        <li>奥丁进入范围时不会移除其他亡命之徒的独狼增益。</li>
                        <li>伤害减免先于护甲计算。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>有效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>独狼是极其强大的威望。运用得当时，玩家可以同时从地图多个方向推进。这显然需要大量微操和单独控制单位，但成功执行后的回报也极高。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>忠诚遛狗师</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>奥丁不再需要泰凯斯担任驾驶员，持续时间延长 100%，冷却时间缩短 40%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>无法使用弹幕和大红按钮。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>说明</th>
                <td>
                    <ul>
                        <li>先计算奥丁冷却时间精通，再额外缩短 40% 冷却时间。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>有效等级</th>
                <td>3</td>
            </tr>
            <tr>
                <th>建议</th><td>对这一威望而言，失去弹幕影响不大，但失去大红按钮会让奥丁无法造成大范围爆发伤害。不过，更长的持续时间和更短的冷却时间足以弥补这一点，并且还能与奥丁冷却时间精通形成良好叠加。</td>
            </tr>
        </tbody>
    </table>
    <p>常规玩法中，泰凯斯的三个威望都是可靠选择。技术招聘专员泛用性强，能轻松应对任何地图，是不错的选择。</p>
    <h2 id="army">推荐部队组成</h2>
    <p>泰凯斯的推荐部队组成如下。此处假设未选择任何威望，并采用推荐的精通点数分配。这只是部队框架的基础建议。建议先了解<a href="#units">单位</a>章节中的各个单位，再根据实际情况加入其他功能型亡命之徒。</p>
    <img class="army" src="/images/commanderdata/units/tychus/tychus.jpg" alt="泰凯斯·芬利"><img class="army" src="/images/commanderdata/units/tychus/rattlesnake.jpg" alt='凯夫“响尾蛇”韦斯特'><img class="army" src="/images/commanderdata/units/tychus/sirius.jpg" alt='詹姆斯“天狼星”赛克斯'>
    <p>先招募响尾蛇既能获得充足治疗，也能提高队伍的潜在伤害输出。之后可以招募天狼星处理空中单位，并进一步提高输出。此外，他的炮台具有侦测能力，因此无需专门为了侦测而招募技术专家。</p>
    <div class="techContainer"><img class="army"  src="/images/commanderdata/units/tychus/crookedsam.jpg" alt="歪嘴山姆"><div class="techAdd">+</div></div>
    <p>将歪嘴山姆加入队伍，利用其强大的控制技能和爆破装药造成的高额单体伤害。</p>
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
    <h2 id="outlaws">亡命之徒</h2>
    <p>泰凯斯的亡命之徒分为三类：</p>
    <ul>
        <li><b>神枪手：</b>负责造成伤害。</li>
        <li><b>肌肉猛男：</b>拥有很强的生存能力，负责承受伤害。</li>
        <li><b>技术专家：</b>拥有非常独特的技能，专门应对特定战术需求。</li>
    </ul>
    <p>每名亡命之徒的招募费用为 1000/200，但首名亡命之徒只需 500/100。普通装备费用为 600/150，终极装备费用为 1200/400。购买全部三件主要装备后，才能购买终极装备。这意味着一名亡命之徒的总费用为 4000/1050（不计首名亡命之徒折扣）。</p>
    <p>泰凯斯会在 3:00 时登场，同时开放一个亡命之徒招募栏位。此后每隔 4 分钟开放一个新的招募栏位。</p>
    <p>如需了解泰凯斯单位的详细属性、单位对比和升级计算，请参阅<a href="/units/#tychus">数据表</a>页面。</p>
    <p>泰凯斯的亡命之徒如下：</p>
    <h3>神枪手：</h3>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/tychus">
                <img src="/images/commanderdata/units/tychus/tychus.jpg" alt="泰凯斯·芬利">
                <p>泰凯斯·芬利</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/shreddergrenade.png" alt="撕裂者手雷"></td>
                        <td>撕裂者手雷</td>
                        <td>对目标区域内的敌方单位造成 75 点伤害。</td>
                        <td>20 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/kd9aimplosioncore.png" alt="KD9a 内爆核心"></td>
                        <td>KD9a 内爆核心</td>
                        <td>使泰凯斯的撕裂者手雷将受影响单位拉向作用区域中心，并使其昏迷 2 秒。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/vanadiumshell.png" alt="钒制弹壳"></td>
                        <td>钒制弹壳</td>
                        <td>泰凯斯的撕裂者手雷伤害提高 50 点。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/kelmorianripperrounds.png" alt="凯莫瑞安撕裂弹"></td>
                        <td>凯莫瑞安撕裂弹</td>
                        <td>泰凯斯的攻击使目标护甲降低 5，持续 2 秒。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/sureshotnetworkedhelm.png" alt="神射手联网头盔"></td>
                        <td>神射手联网头盔</td>
                        <td>泰凯斯身边每有一名亡命之徒，其武器伤害便提高 20%。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>用他抵御首个进攻波次、清理岩石，然后向外推进。</li>
                <li>配合医疗运输机接送，他在前期推进时通常不会阵亡。</li>
                <li>如果奥丁可用且能有效发挥作用，可通过召唤奥丁复活泰凯斯。</li>
                <li>装有 KD9a 内爆核心的撕裂者手雷与纳克斯的超声波脉冲配合效果极佳。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/crookedsam">
                <img src="/images/commanderdata/units/tychus/crookedsam.jpg" alt="歪嘴山姆">
                <p>歪嘴山姆</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/demolitioncharge.png" alt="爆破装药"></td>
                        <td>爆破装药</td>
                        <td>标记一个目标单位，5 秒后造成 500 点伤害。最多储存 3 次使用次数。</td>
                        <td>30 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/larscorpg7charges.png" alt="拉尔斯公司 G7 炸药"></td>
                        <td>拉尔斯公司 G7 炸药</td>
                        <td>歪嘴山姆的爆破装药伤害提高 100%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/moebiusrestraintmatrix.png" alt="莫比斯拘束矩阵"></td>
                        <td>莫比斯拘束矩阵</td>
                        <td>使被歪嘴山姆的爆破装药命中的单位昏迷并失去侦测能力。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/procyonshadesuit.png" alt="南河三暗影战衣"></td>
                        <td>南河三暗影战衣</td>
                        <td>歪嘴山姆受到攻击后免疫所有伤害，移动速度提高 80%，持续 5 秒。每 15 秒最多触发一次。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/enhancedhostilitieskit.png" alt="强化敌对套件"></td>
                        <td>强化敌对套件</td>
                        <td>歪嘴山姆每次攻击都会使爆破装药的启动时间缩短 3 秒。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>非常适合摧毁任务目标和高生命值建筑。</li>
                <li>可以在<a href="/missions/oblivionexpress">湮灭快车</a>和<a href="/missions/partparcel">聚铁成兵</a>等任务的列车上放置多个爆破装药。</li>
                <li>莫比斯拘束矩阵可以禁用混合体支配者等单位的技能。</li>
                <li>很容易吸引仇恨，应让他待在其他亡命之徒身后。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/sirius">
                <img src="/images/commanderdata/units/tychus/sirius.jpg" alt='詹姆斯“天狼星”赛克斯'>
                <p>詹姆斯“天狼星”赛克斯</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/deploywarhoundturret.png" alt="部署战狼炮台"></td>
                        <td>部署战狼炮台</td>
                        <td>部署一座自动防御炮台。炮台会获得与天狼星本人相同的装备加成，并在 60 秒后失效。最多储存 5 次使用次数。<br><br>可攻击地面和空中单位。</td>
                        <td>15 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/sa55thunderboltmissiles.png" alt="SA-55 雷霆导弹"></td>
                        <td>SA-55 雷霆导弹</td>
                        <td>为天狼星配备导弹，可对 8 个空中目标各造成 100 点伤害。战狼炮台可对 2 个空中目标各造成 100 点伤害。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/moebiusm34terrorrounds.png" alt="莫比斯 M34 恐惧弹"></td>
                        <td>莫比斯 M34 恐惧弹</td>
                        <td>天狼星每次攻击有 30% 几率在小范围内施加恐惧，使区域内的敌方单位因恐惧四处逃窜 3 秒。战狼炮台每次攻击有 3% 几率施加恐惧。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/d99detonator.png" alt="D99 起爆器"></td>
                        <td>D99 起爆器</td>
                        <td>天狼星阵亡时触发爆炸，对周围区域内的敌方单位造成 300 点伤害。战狼炮台被摧毁时造成 50 点伤害。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/umojanturretframe.png" alt="尤摩扬炮台框架"></td>
                        <td>尤摩扬炮台框架</td>
                        <td>战狼炮台的生命值和武器伤害提高 75%。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>升级 SA-55 雷霆导弹后拥有出色的对空能力。</li>
                <li>他的炮台具有侦测能力，可在缺少侦测手段时使用。</li>
                <li>前期尚未招募治疗者时，可以让炮台在交战中替其他亡命之徒承受伤害。</li>
            </ul>
        </div>
    </div>
    <h3>肌肉猛男：</h3>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/blaze">
                <img src="/images/commanderdata/units/tychus/blaze.jpg" alt='迈尔斯“烈焰”刘易斯'>
                <p>迈尔斯“烈焰”刘易斯</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/oilspill.png" alt="油污喷射"></td>
                        <td>油污喷射</td>
                        <td>用油浸透敌方地面单位，使其攻击速度和移动速度降低 75%，并且无法隐形。受油污喷射影响的单位被火焰攻击命中后，会在 10 秒内每秒受到 5 点伤害（对轻甲单位额外造成 5 点伤害）。</td>
                        <td>15 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/highcapacitycontainers.png" alt="大容量油罐"></td>
                        <td>大容量油罐</td>
                        <td>烈焰的油污喷射半径提高 100%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/hadesoil.png" alt="哈迪斯燃油"></td>
                        <td>哈迪斯燃油</td>
                        <td>强化烈焰的油污喷射所触发的燃烧效果，使其对轻甲单位每秒额外造成 25 点伤害。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/wildflamefueladditives.png" alt="野火燃料添加剂"></td>
                        <td>野火燃料添加剂</td>
                        <td>受到烈焰油污喷射的燃烧效果影响的单位死亡时会爆炸，并将燃烧效果传播给区域内的敌方单位。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/xcmc670combatsuit.png" alt="XCMC-670 作战服"></td>
                        <td>XCMC-670 作战服</td>
                        <td>烈焰每次受到的伤害最多为 30 点。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>在感染体地图中属于必选单位。</li>
                <li>“野火燃料添加剂”是他最重要的升级，因为它能让火焰连锁传播。</li>
                <li>油污喷射可降低敌人的攻击速度，提高烈焰承受伤害的能力，还能显形地面隐形单位。</li>
                <li>在感染体地图中，终极装备的优先级应较低。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/cannonball">
                <img src="/images/commanderdata/units/tychus/cannonball.jpg" alt='罗伯“炮弹”博斯韦尔'>
                <p>罗伯“炮弹”博斯韦尔</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/heavyimpact.png" alt="强力冲击"></td>
                        <td>强力冲击</td>
                        <td>炮弹将自己拉向目标位置，撞击时造成 20 点伤害并使敌方单位昏迷。</td>
                        <td>15 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/x71impactboots.png" alt="X-71 冲击靴"></td>
                        <td>X-71 冲击靴</td>
                        <td>炮弹的强力冲击昏迷时间和作用半径提高 100%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/criticalresponsesystem.png" alt="危机响应系统"></td>
                        <td>危机响应系统</td>
                        <td>炮弹受到致命伤害时恢复全部生命值，并免疫伤害 5 秒。每 60 秒最多触发一次。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/redlinepowercells.png" alt="红线动力电池"></td>
                        <td>红线动力电池</td>
                        <td>炮弹每次攻击都会使攻击速度提高 3%，最高提高 60%；同时使攻击伤害提高 3 点，最高提高 60 点。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/maliceammunition.png" alt="M.A.L.I.C.E. 弹药"></td>
                        <td>M.A.L.I.C.E. 弹药</td>
                        <td>炮弹的攻击有 30% 几率造成 4 倍伤害。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>危机响应系统使他的承伤能力极强。</li>
                <li>长时间输出时，红线动力电池与 M.A.L.I.C.E. 弹药可以形成良好叠加。</li>
                <li>但游戏中的大多数交战都很短，因此很难充分发挥这些升级的效果。</li>
                <li>应使用强力冲击将炮弹送到亡命之徒队伍前排，让他承担伤害。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer outlaw override">
            <a class="unitStatsLink" href="/units/#tychus/rattlesnake">
                <img src="/images/commanderdata/units/tychus/rattlesnake.jpg" alt='凯夫“响尾蛇”韦斯特'>
                <p>凯夫“响尾蛇”韦斯特</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/deployrevitalizer.png" alt="部署恢复装置"></td>
                        <td>部署恢复装置</td>
                        <td>在地面放置一个建筑，使其周围区域内的所有友方单位每秒恢复相当于其生命值上限 2% 的生命值。最多储存 3 次使用次数。</td>
                        <td>30 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/umojansignalmodulator.png" alt="尤摩扬信号调制器"></td>
                        <td>尤摩扬信号调制器</td>
                        <td>响尾蛇的恢复装置治疗速率提高 100%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/moebiusaggressionblend.png" alt="莫比斯侵略配方"></td>
                        <td>莫比斯侵略配方</td>
                        <td>响尾蛇的恢复装置范围内的单位额外获得 15% 攻击速度。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/secretstashstimpack.png" alt="私藏兴奋剂"></td>
                        <td>私藏兴奋剂</td>
                        <td>使响尾蛇每秒恢复 2 点生命值，并提高其攻击速度和移动速度，持续 15 秒。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/hammermunitions.png" alt="重锤弹药"></td>
                        <td>重锤弹药</td>
                        <td>响尾蛇的攻击会使敌人减速，并在范围内造成相当于攻击伤害 50% 的伤害。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>私藏兴奋剂不如其他部分装备实用，升级优先级应较低。</li>
                <li>响尾蛇既能治疗，又能提高其他亡命之徒的伤害输出，因此在大多数组合中都不可或缺。</li>
                <li>多个恢复装置的效果不会叠加。</li>
                <li>他会吸引敌人仇恨，需要留意其生命值。</li>
                <li>终极装备的收益同样不值其费用，应列为最低优先级的升级之一。</li>
            </ul>
        </div>
    </div>
    <h3>技术专家：</h3>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/vega">
                <img src="/images/commanderdata/units/tychus/vega.jpg" alt='维嘉'>
                <p>维嘉</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/dominate.png" alt="支配"></td>
                        <td>支配</td>
                        <td>暂时控制目标敌方单位，并使其造成的伤害提高 50%。被支配的单位会在 240 秒后自毁。最多储存 3 次使用次数。</td>
                        <td>30 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/moebiuspsionicmotivator.png" alt="莫比斯灵能激励器"></td>
                        <td>莫比斯灵能激励器</td>
                        <td>维嘉的支配会完全恢复目标的生命值、护盾和能量，并使其攻击速度提高 75%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/neuraldisruptiondevice.png" alt="神经扰乱装置"></td>
                        <td>神经扰乱装置</td>
                        <td>维嘉的支配会迷惑被支配单位周围区域内的敌方单位，迫使它们互相攻击 10 秒。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/psiprojector.png" alt="灵能投射器"></td>
                        <td>灵能投射器</td>
                        <td>使维嘉能够将最多 5 个敌方空中单位拉至地面，让友方单位可以像攻击地面单位一样攻击它们。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/type88persuader.png" alt="88 型说服器"></td>
                        <td>88 型说服器</td>
                        <td>维嘉的支配持续时间延长 200%。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>支配配合神经扰乱装置，可以处理棘手的进攻波次。</li>
                <li>微操得当时，维嘉可以夺取埃蒙的单位并让其反戈一击。</li>
                <li>如果打算夺取敌方单位，莫比斯灵能激励器是很实用的升级。</li>
                <li>如果打算利用被支配单位协助推进任务，建议购买终极装备。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/nux">
                <img src="/images/commanderdata/units/tychus/nux.jpg" alt='纳克斯'>
                <p>纳克斯</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/ultrasonicpulse.png" alt="超声波脉冲"></td>
                        <td>超声波脉冲</td>
                        <td>释放持续 6 秒的超声波能量脉冲，每秒对目标区域内的敌方单位造成 20 点伤害，不会伤害友方单位。最多储存 3 次使用次数。</td>
                        <td>30 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/t4cloudburstshells.png" alt="T4 云爆弹"></td>
                        <td>T4 云爆弹</td>
                        <td>纳克斯的超声波脉冲伤害提高 50%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/ultrasonicboosters.png" alt="超声波增幅器"></td>
                        <td>超声波增幅器</td>
                        <td>纳克斯的超声波脉冲半径提高 50%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/crystallineamplifiers.png" alt="晶体放大器"></td>
                        <td>晶体放大器</td>
                        <td>纳克斯的超声波脉冲持续时间延长 100%。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/n3networking.png" alt="N3 网络系统"></td>
                        <td>N3 网络系统</td>
                        <td>使纳克斯能够将附近所有亡命之徒主要技能的启动时间和冷却时间缩短 20%。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>一次超声波脉冲配合泰凯斯装有 KD9a 内爆核心的撕裂者手雷，就能清掉整支进攻波次。</li>
                <li>超声波脉冲可用于显形隐形和潜地单位。</li>
                <li>如果不打算购买纳克斯的终极装备，则无需升级晶体放大器。</li>
                <li>他的终极装备使其能与其他亡命之徒形成良好配合。</li>
            </ul>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer outlaw">
            <a class="unitStatsLink" href="/units/#tychus/nikara">
                <img src="/images/commanderdata/units/tychus/nikara.jpg" alt='莱娜·尼卡拉中尉'>
                <p>莱娜·尼卡拉中尉</p>
            </a>
        </div>
        <div class="outlawAbility">
            <p>技能：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>冷却时间</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/abilities/tychus/reinvigoratingburst.png" alt="焕发活力"></td>
                        <td>焕发活力</td>
                        <td>立即为尼卡拉中尉周围区域内的友方单位恢复 200 点生命值，并使其攻击和技能伤害提高 25%。随后在 10 秒内每秒额外恢复 10 点生命值。</td>
                        <td>30 秒</td>
                    </tr>
                </tbody>
            </table>
            <p>主要装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/umojanrepairnanites.png" alt="尤摩扬修复纳米机器人"></td>
                        <td>尤摩扬修复纳米机器人</td>
                        <td>尼卡拉中尉的焕发活力即时治疗量和持续治疗量提高 100%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/procyonserum.png" alt="南河三血清"></td>
                        <td>南河三血清</td>
                        <td>尼卡拉中尉的超级治疗速率提高 100%。</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/procyontwinhealbeamgauntlet.png" alt="南河三双重治疗光束手套"></td>
                        <td>南河三双重治疗光束手套</td>
                        <td>使尼卡拉中尉可以同时对两个目标施放超级治疗。</td>
                    </tr>
                </tbody>
            </table>
            <p>终极装备：</p>
            <table class="unitAbilities">
                <thead>
                    <tr>
                        <th>终极装备</th>
                        <th>名称</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/tychus/xm77matrixgenerator.png" alt="XM-77 矩阵发生器"></td>
                        <td>XM-77 矩阵发生器</td>
                        <td>使尼卡拉中尉可以为目标友方单位施加护盾，在 20 秒内吸收 400 点伤害。</td>
                    </tr>
                </tbody>
            </table>
            <p>使用说明：</p>
            <ul>
                <li>治疗能力极强。</li>
                <li>前期可与维嘉配合，治疗被支配的高生命值目标。</li>
                <li>焕发活力会使包括技能和法术在内的所有伤害提高 25%。</li>
                <li>在某些突变中有特定用途。</li>
            </ul>
        </div>
    </div>
    <p>除上述装备外，泰凯斯还有三项“三人组”升级，具体如下：</p>
    <table class="heroUpgrades">
        <thead>
            <tr>
                <th>升级</th>
                <th>名称</th>
                <th>效果</th>
                <th><img src="/images/commanderdata/unitupgrades/iconmineral.png" alt="晶体矿">/<img src="/images/commanderdata/unitupgrades/icongas_terran.png" alt="高能瓦斯"></th>
                <th>研究时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/tychus/itcetriggers.png" alt="ITC-E 扳机"></td>
                <td>ITC-E 扳机</td>
                <td>泰凯斯、歪嘴山姆和天狼星的攻击速度提高 25%。</td>
                <td>150/150</td>
                <td>90 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/tychus/endurancesupplements.png" alt="耐力补剂"></td>
                <td>耐力补剂</td>
                <td>烈焰、炮弹和响尾蛇的生命值提高 25%。</td>
                <td>150/150</td>
                <td>90 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/unitupgrades/tychus/flashforcegdmvisor.png" alt="闪电部队 GDM 面罩"></td>
                <td>闪电部队 GDM 面罩</td>
                <td>使维嘉、纳克斯和尼卡拉中尉获得侦测能力，可以发现隐形和潜地的敌方单位。</td>
                <td>75/75</td>
                <td>90 秒</td>
            </tr>
        </tbody>
    </table>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是泰凯斯的标准经济型建造顺序。如需了解如何阅读和设计自己的建造顺序，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        17 指挥中心<br>
        18 炼油厂<br>
        19 炼油厂<br>
        20 工程站<br>
        22 2 座炮台 -> 岩石
    </p>
    <h2 id="guide">玩法攻略</h2>
    <h3>常见误区</h3>
    <p>泰凯斯玩家常见的误区之一，是在采用维嘉核心打法时仍然优先研究攻击和护甲升级。被支配的单位无法获得泰凯斯攻击和护甲升级的加成，因此这些升级的优先级应较低。</p>
    <p>操作水平较高时，甚至可以采用更贪经济的打法，先招募其他伤害输出者，完全依靠医疗运输平台提供治疗。</p>
    <h3>玩法技巧</h3>
    <ul>
        <li>确保拥有足够的医疗运输平台，以获得处理任务所需的机动性。单位受到伤害时会停止治疗，因此若使用医疗运输机治疗，应先撤离敌方火力范围。</li>
        <li>建议建造三座工程站：两座研究攻击和护甲升级，另一座研究其他升级。</li>
        <li>尽早建造指挥中心，然后根据是否想让泰凯斯早期推进、以及分矿是否有敌人把守，选择用泰凯斯（放弃早期工程站）或按上述建造顺序用两座炮台清理分矿。</li>
        <li>可以通过召唤奥丁复活泰凯斯，从而节省晶体矿。</li>
        <li>如果盟友不帮忙，可能需要优先招募天狼星来补充前期伤害。此时应确保有一座医疗运输平台可用于治疗。</li>
        <li>治疗者（响尾蛇/尼卡拉）的选择取决于所用的亡命之徒。以低生命值亡命之徒（技术专家）为主的组合从尼卡拉处获益更多，而高生命值亡命之徒（肌肉猛男）为主的组合更适合响尾蛇。</li>
    </ul>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
