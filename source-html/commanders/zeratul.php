<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>星际争霸 2 合作任务 - 指挥官攻略 - 泽拉图</title>
  <meta name="description" content="星际争霸 2 合作任务指挥官泽拉图攻略">
  <meta name="keywords" content="星际争霸 合作任务 攻略 泽拉图 Zeratul 指挥官 精通 威望 配兵">
  <link rel="stylesheet"  media="all" type="text/css" href="/styles/commanderstyle.css?v=2">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel="canonical" href="https://starcraft2coop.com/commanders/zeratul">
  <script src="/scripts/preload.js"></script>
  <style>
        #content{
            background: url(/images/commanderdata/bgs/zeratul.png);
            background-repeat: no-repeat;
        }
        @media (min-width: 701px){
            #pp{
                position:absolute;
            }
            #ppdiv{
                display:inline-block;
                width:800px;
                height:400px;
            }
        }
        @media (max-width: 700px){
            #fastExpand img{
                max-width:200px;
            }
            #pp{
                position:absolute;
            }
            #ppdiv{
                display:inline-block;
                width:200px;
                height:100px;
            }
        }
  </style>
  <?= startContent() ?>
    <div id="tooltip">提示</div>
    <h1><span class="unbold">指挥官：</span>泽拉图</h1>
    <p id="commanderMotto">黑暗教长</p>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#comSum">指挥官概览</a></p>
        <p><a href="#levelUnlocks">等级解锁</a></p>
        <p><a href="#achievements">成就</a></p>
        <p><a href="#calldowns">面板技能</a></p>
        <p><a href="#leveling">飞升前升级</a></p>
        <p><a href="#masteries">精通</a></p>
        <p><a href="#prestiges">威望</a></p>
        <p><a href="#hero">英雄单位</a></p>
        <p><a href="#army">推荐配兵</a></p>
        <p><a href="#units">作战单位</a></p>
        <p><a href="#buildOrder">建造顺序</a></p>
        <p><a href="#guide">玩法攻略</a></p>
        <p><a href="#fastexpand">军团速开分矿</a></p>
        <p><a href="#artifact">神器刷新位置</a></p>
        <p><a href="#artifacttrap">神器封锁</a></p>
        <p><a href="#videos">视频攻略</a></p>
    </div>
    <h2 id="comSum">指挥官概览</h2>
    <p>泽拉图只率领一支规模极小但战力强大的部队，并会在找到萨尔纳加神器后进一步强化他们。</p>
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
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_01.png" alt = "萨尔纳加之力"></td>
                <td>萨尔纳加之力</td>
                <td>
                    泽拉图的初始人口上限为 100，其单位拥有更高的生命值和伤害。建筑无需水晶塔供能，单位也无法直接折跃到战场。泽拉图的古代星灵枢纽可自动建造古代吸收站。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_02.png" alt = "预言应验"></td>
                <td>预言应验</td>
                <td>
                    使泽拉图能够找到第三块也是最后一块神器碎片。找到全部神器碎片后，泽拉图将解锁以下技能：
                    <ul>
                        <li>召唤形体化身——灵能潜力的具现。</li>
                        <li>召唤精华化身——进化潜力的具现。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_03.png" alt = "时空通道强化包 1"></td>
                <td>时空通道强化包 1</td>
                <td>
                   找到第二块神器碎片后，解锁以下通道类神器升级：
                   <ul>
                        <li>萨尔纳加伏击者使用闪现后会留下虚空幻影，以其武器伤害的 50% 攻击一次。</li>
                        <li>萨尔纳加光盾卫士的能量恢复速度提高 100%。</li>
                        <li>虚空圣堂武士的闪现对路径上的单位造成 50 点伤害。</li>
                        <li>超维空间炮和超维空间巨石可将自身投射至目标位置，持续 120 秒。</li>
                   </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_04.png" alt = "新单位：萨尔纳加禁绝者"></td>
                <td>新单位：萨尔纳加禁绝者</td>
                <td>
                    机械干扰单位。可使用净化新星造成高额范围伤害。由构造体设施生产。<br><br>可攻击地面单位。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_05.png" alt = "超维空间强化包"></td>
                <td>超维空间强化包</td>
                <td>
                    解锁选择以下神器技能的选项：
                    <ul>
                        <li>在目标位置部署一座超维空间巨石。超维空间巨石可击晕敌人、投射自身并抵挡伤害。</li>
                        <li>阴影投射和阴影屏障的效果提高 100%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_06.png" alt = "构造体强化包 1"></td>
                <td>构造体强化包 1</td>
                <td>
                    找到第二块神器碎片后，解锁以下构造体类神器升级：
                    <ul>
                        <li>萨尔纳加执行者的对空武器可击退敌方空中单位，并对冲击路径上的单位造成相当于该次攻击 25% 的伤害。</li>
                        <li>萨尔纳加禁绝者的净化新星冷却时间缩短 50%。</li>
                        <li>萨尔纳加观察者的移动速度提高 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_07.png" alt = "虚空之路"></td>
                <td>虚空之路</td>
                <td>
                    解锁选择以下神器技能的选项：
                    <ul>
                        <li>召唤塞达斯及其传奇黑暗执政官军团参战。塞达斯无法直接控制，但可通过顶部面板引导。</li>
                        <li>召唤一枚无敌的虚空抑制晶体，降低附近敌方单位的移动和攻击速度，并使敌方建筑失效。</li>
                        <li>泽拉图及其单位的闪现技能冷却时间缩短 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_08.png" alt = "超能军团"></td>
                <td>超能军团</td>
                <td>
                    找到第三块神器碎片后，传奇军团将获得新技能：
                    <ul>
                        <li>特布鲁斯获得反馈技能，可吸取敌方单位的能量。特布鲁斯的狂热者军团获得冲锋技能，可拦截敌方地面单位。</li>
                        <li>佐拉亚及其虚空辉光舰军团获得棱镜射程技能，可在持续攻击时提高武器射程。</li>
                        <li>塞达斯及其黑暗执政官获得漩涡技能，可暂时击晕一片区域内的敌方单位。</li>
                   </ul>
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_09.png" alt = "新单位：萨尔纳加虚空阵列船"></td>
                <td>新单位：萨尔纳加虚空阵列船</td>
                <td>
                    飞行虫洞生成器。每次生产两个。可部署并连接战场上的所有萨尔纳加虚空阵列船。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_10.png" alt = "时空理论"></td>
                <td>时空理论</td>
                <td>
                    萨尔纳加时空通道和构造体设施所生产单位的建造时间缩短 50%。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_11.png" alt = "时空通道强化包 2"></td>
                <td>时空通道强化包 2</td>
                <td>
                    找到第三块神器碎片后，解锁以下通道类神器升级：
                    <ul>
                        <li>萨尔纳加伏击者最多可储存 3 次预判闪现，并且每 8 秒恢复一次充能。</li>
                        <li>萨尔纳加光盾卫士生成一个射程为 4.5 的光环，将 50% 的所有投射物反弹给攻击者。</li>
                        <li>虚空圣堂武士受到致命伤害时会撤入虚空，并在 10 秒内恢复生命值和护盾。</li>
                        <li>超维空间炮和超维空间巨石每 60 秒可吸收至多 100 点伤害。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_12.png" alt = "黑暗代理"></td>
                <td>黑暗代理</td>
                <td>
                    萨尔纳加光盾卫士的人口占用降至 1，一对萨尔纳加虚空阵列船的人口占用降至 1，萨尔纳加观察者的人口占用降至 0。
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_13.png" alt = "构造体强化包 2"></td>
                <td>构造体强化包 2</td>
                <td>
                    找到第三块神器碎片后，解锁以下构造体类神器升级：
                    <ul>
                        <li>萨尔纳加执行者的屏障可吸收的伤害提高 300%。屏障每次激活时还会完全恢复萨尔纳加执行者的生命值。</li>
                        <li>萨尔纳加禁绝者的净化新星爆炸时会生成三枚小型新星，每枚对路径上的敌方单位造成 50 点伤害。</li>
                        <li>处于虫洞模式的萨尔纳加虚空阵列船使附近友方单位的护盾恢复速度每秒提高 2 点。</li>
                        <li>萨尔纳加观察者的视野范围提高 50%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_14.png" alt = "纯粹完美"></td>
                <td>纯粹完美</td>
                <td>
                    形体化身获得召唤充能水晶的能力，每枚水晶都能施放小型灵能风暴。精华化身获得将大范围内所有敌方单位转化为低等进化形态的能力。
                </td>
            </tr>
            <tr class="spike">
                <td><img src="/images/commanderdata/progression/zeratul/zeratul_15.png" alt = "纯粹意志"></td>
                <td>纯粹意志</td>
                <td>
                    泽拉图每找到一块神器碎片，便会获得额外护盾（+50）、提高暗影顺劈伤害（+10），并增加闪现充能次数（+1）。
                </td>
            </tr>
        </tbody>
    </table>
    <p id="powerSpikeInfo">高亮行表示该指挥官迎来显著的强势期。</p>
    <h2 id="achievements">成就</h2>
    <p>泽拉图的指挥官专属成就如下：</p>
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
                <td><img src="/images/commanderdata/achievements/zeratul/bankshotpocketneutral.jpg" alt="擦板球高手"></td>
                <td>擦板球高手</td>
                <td>使用萨尔纳加禁绝者的集束新星造成 2,000 点伤害。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/zeratul/devolutionretribution.jpg" alt="退化报应"></td>
                <td>退化报应</td>
                <td>在一场游戏中消灭 200 个已退化的敌人。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/zeratul/haveaportablecharger.jpg" alt="带充电宝了吗？"></td>
                <td>带充电宝了吗？</td>
                <td>在合作任务中为友方单位恢复 5,000 点护盾。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/achievements/zeratul/thatbelongsinamuseum.jpg" alt="它属于博物馆！"></td>
                <td>它属于博物馆！</td>
                <td>在困难难度下于 12 分钟内完成萨尔纳加神器。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="calldowns">神器技能</h2>
    <p>以下为泽拉图 15 级且未投入精通点数时的神器技能。每组只能选择一个技能。</p>
    <p>军团面板技能（部署消耗 800 晶体矿）：</p>
    <table class="calldownTable">
        <thead>
            <tr>
                <th>面板技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>推荐用法</th>
                <th>数据</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/telbruslegion.png" alt = "特布鲁斯军团"></td>
                <td>特布鲁斯军团</td>
                <td>召唤特布鲁斯及其传奇狂热者军团参战。该军团无法直接控制，但可通过顶部面板引导，并会战斗 60 秒。</td>
                <td>通常不如其他军团实用，但对异虫兵种组合颇为有效。在<a href="/missions/deadofnight">亡者之夜</a>等任务中也能发挥作用。</td>
                <td>
                    <ul>
                        <li>初始冷却：0 秒</li>
                        <li>冷却时间：120 秒</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/zorayalegion.png" alt = "佐拉亚军团"></td>
                <td>佐拉亚军团</td>
                <td>召唤佐拉亚及其传奇虚空辉光舰军团参战。该军团无法直接控制，但可通过顶部面板引导，并会战斗 60 秒。</td>
                <td>即使分矿有敌军驻守，也拥有很强的速开分矿能力。若双方基地距离较近，甚至能顺带清理盟友的分矿。</td>
                <td>
                    <ul>
                        <li>初始冷却：0 秒</li>
                        <li>冷却时间：120 秒</li>
                    </ul>
                </td>
            </tr>

            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/serdathlegion.png" alt = "塞达斯军团"></td>
                <td>塞达斯军团</td>
                <td>召唤塞达斯及其传奇黑暗执政官军团参战。该军团无法直接控制，但可通过顶部面板引导，并会战斗 60 秒。</td>
                <td>可通过窃取高价值敌军单位来突破难以强攻的防御工事。也可直接部署在强力进攻波次上方，大幅削弱敌军。</td>
                <td>
                    <ul>
                        <li>初始冷却：0 秒</li>
                        <li>冷却时间：120 秒</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>已收集的碎片数量会影响军团。每块碎片都会为英雄单位（特布鲁斯、佐拉亚、塞达斯）增加 100 点护盾；此外还会为特布鲁斯和塞达斯增加 100 点能量。神器碎片也会影响军团生成的单位数量，具体见下表（数字不包括英雄单位）：</p>
    <table class="centered">
        <thead>
            <tr>
                <td>神器</td>
                <td>特布鲁斯</td>
                <td>佐拉亚</td>
                <td>塞达斯</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>10</td>
                <td>4</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1</td>
                <td>13</td>
                <td>5</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>16</td>
                <td>6</td>
                <td>5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>16</td>
                <td>6</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
    <p>特布鲁斯军团技能会将一支特布鲁斯军团部署到战场。军团单位自身拥有以下技能：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/zealot">
                <img src="/images/commanderdata/abilities/zeratul/zealot.jpg" alt="狂热者">
                <p>狂热者</p>
            </a>
        </div>
        <div>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/charge.png" alt="冲锋"></td>
                        <td>冲锋</td>
                        <td>要求：第 3 件萨尔纳加神器。<br>拦截敌方地面单位并提高移动速度。</td>
                        <td>10 秒</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/whirlwind.png" alt="旋风斩"></td>
                        <td>旋风斩</td>
                        <td>每秒对附近所有敌方单位造成 10 点伤害，持续 3 秒。</td>
                        <td>10 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/telbrus">
                <img src="/images/commanderdata/abilities/zeratul/telbrus.jpg" alt="特布鲁斯">
                <p>特布鲁斯</p>
            </a>
        </div>
        <div>
            <table class="unitAbilities">
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
                        <td><img src="/images/commanderdata/abilities/zeratul/psionicstorm.png" alt="灵能风暴"></td>
                        <td>灵能风暴</td>
                        <td>在大范围目标区域制造一场持续 4 秒的灵能风暴，对所有敌方单位造成最多 112 点伤害，并为所有友方单位恢复 112 点护盾。</td>
                        <td>2.5 秒</td>
                        <td>75</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/feedback.png" alt="反馈"></td>
                        <td>反馈</td>
                        <td>要求：第 3 件萨尔纳加神器。<br>吸取目标的全部能量。每吸取一点能量造成 1 点伤害。</td>
                        <td>10 秒</td>
                        <td>50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>塞达斯军团技能会将一支塞达斯军团部署到战场。军团单位自身拥有以下技能：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/darkarchon">
                <img src="/images/commanderdata/abilities/zeratul/darkarchon.jpg" alt="黑暗执政官">
                <p>黑暗执政官</p>
            </a>
        </div>
        <div>
            <table class="unitAbilities">
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
                        <td><img src="/images/commanderdata/abilities/zeratul/mindcontrol.png" alt="精神控制"></td>
                        <td>精神控制</td>
                        <td>使泽拉图暂时控制一个目标敌方单位。被控制的单位会在 120 秒后自毁。<br><br>英雄单位免疫。</td>
                        <td>15 秒</td>
                        <td>150</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/maelstrom.png" alt="漩涡"></td>
                        <td>漩涡</td>
                        <td>要求：第 3 件萨尔纳加神器。<br>使一片区域内的敌方单位和建筑暂时昏迷 3 秒。</td>
                        <td>15 秒</td>
                        <td>50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/serdath">
                <img src="/images/commanderdata/abilities/zeratul/serdath.jpg" alt="塞达斯">
                <p>塞达斯</p>
            </a>
        </div>
        <div>
            <table class="unitAbilities">
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
                        <td><img src="/images/commanderdata/abilities/zeratul/mindcontrol.png" alt="精神控制"></td>
                        <td>精神控制</td>
                        <td>使泽拉图暂时控制一个目标敌方单位。被控制的单位会在 120 秒后自毁。<br><br>英雄单位免疫。</td>
                        <td>15 秒</td>
                        <td>150</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/maelstrom.png" alt="漩涡"></td>
                        <td>漩涡</td>
                        <td>要求：第 3 件萨尔纳加神器。<br>使一片区域内的敌方单位暂时昏迷 3 秒。</td>
                        <td>15 秒</td>
                        <td>50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>碎片 1：</p>
    <table class="calldownTable">
        <thead>
            <tr>
                <th>面板技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>推荐用法</th>
                <th>数据</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/stasisbeam.png" alt = "静滞射线"></td>
                <td>静滞射线</td>
                <td>从神器持有者处发射一道射线，使敌人陷入静滞状态 15 秒。静滞中的单位无法移动、攻击、受到攻击或受技能影响。</td>
                <td>可以暂时让高价值目标退出战斗，以便先解决较弱的单位。不过，瞄准方向取决于神器持有者的位置，因此很难在一条直线上同时命中多个目标。</td>
                <td>冷却时间：90 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/deploytesseractmonolith.png" alt = "部署超维空间巨石"></td>
                <td>部署超维空间巨石</td>
                <td>在目标位置部署一座超维空间巨石。超维空间巨石可击晕敌人、投射自身并抵挡伤害。</td>
                <td>投射后极为强大。多座巨石可用于击晕进攻波次，并协助攻入敌方基地。</td>
                <td>
                    <ul>
                        <li>充能冷却：180 秒</li>
                        <li>最大充能次数：3</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/voidsuppressioncrystal.png" alt = "虚空抑制晶体"></td>
                <td>虚空抑制晶体</td>
                <td>召唤一枚无敌的虚空抑制晶体，使敌方单位的移动和攻击速度降低 70%，并使敌方建筑失效。虚空抑制晶体可控制，持续 30 秒。</td>
                <td>非常适合用于攻入重兵设防的阵地。虽然水晶持续时间不长，但只要时机恰当，30 秒足以清除高价值目标，甚至拔掉整座基地。</td>
                <td>冷却时间：180 秒</td>
            </tr>
        </tbody>
    </table>
    <p>部署超维空间巨石技能会将一座超维空间巨石带入战场。该单位自身拥有以下技能：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/tesseractmonolith">
                <img src="/images/commanderdata/abilities/zeratul/tesseractmonolith.jpg" alt="超维空间巨石">
                <p>超维空间巨石</p>
            </a>
        </div>
        <div>
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
                        <td><img src="/images/commanderdata/abilities/zeratul/shadeprojection.png" alt="阴影投射"></td>
                        <td>阴影投射</td>
                        <td>要求：芯核锻炉和第 2 块萨尔纳加神器碎片<br>将超维空间巨石投射至目标位置，转移其全部护盾和武器，持续 60 秒。该技能激活期间，原超维空间巨石将停止运作。</td>
                        <td>120 秒</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/shadebarrier.png" alt="阴影屏障"></td>
                        <td>阴影屏障</td>
                        <td>要求：芯核锻炉和第 3 块萨尔纳加神器碎片<br>吸收最多 100 点伤害，持续 10 秒。</td>
                        <td>60 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>碎片 2：</p>
    <table class="calldownTable">
        <thead>
            <tr>
                <th>被动能力</th>
                <th>名称</th>
                <th>说明</th>
                <th>推荐用法</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/steadfastreinforcements.png" alt = "刚韧援军"></td>
                <td>刚韧援军</td>
                <td>泽拉图的军团和化身面板技能持续时间延长 50%。</td>
                <td>适合希望更充分利用军团和化身的玩家。不过要注意，它们往往会很快阵亡，因此这一被动升级的实际收益可能低于预期。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/tesseractmatrix.png" alt = "超维空间矩阵"></td>
                <td>超维空间矩阵</td>
                <td>阴影投射的冷却时间缩短 25%，阴影屏障吸收的伤害提高 100%。</td>
                <td>非常适合依靠阴影投射推进或防守的玩家。后期将多余晶体矿投入光炮时，也能显著提高泽拉图的实力。</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/voidblink.png" alt = "虚空闪现"></td>
                <td>虚空闪现</td>
                <td>泽拉图及其单位的闪现技能冷却时间缩短 50%。</td>
                <td>这一被动能力与虚空圣堂武士的虚空之怒升级、伏击者的虚空复仇升级配合极佳。打算大量生产伏击者的玩家应考虑选择它。</td>
            </tr>
        </tbody>
    </table>
    <p>碎片 3：</p>
    <table class="calldownTable">
        <thead>
            <tr>
                <th>技能</th>
                <th>名称</th>
                <th>说明</th>
                <th>推荐用法</th>
                <th>冷却时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/avatarofform.png" alt = "形体化身"></td>
                <td>形体化身</td>
                <td>在目标位置召唤灵能潜力的具现——形体化身。形体化身可控制，并会战斗 60 秒。</td>
                <td>由于无法强化己方单位，通常不如精华化身实用。只用光炮的打法可以选择它。此外，其生成的充能水晶施放灵能风暴的概率很低，生命值也很低。面对虫群异虫等拥有大量低生命值单位的特定<a href="/guides/enemycomps">敌方兵种组合</a>，或对抗感染单位时仍有作用。</td>
                <td>300 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/abilities/zeratul/avatarofessence.png" alt = "精华化身"></td>
                <td>精华化身</td>
                <td>在目标位置召唤进化潜力的具现——精华化身。精华化身可控制，并会战斗 60 秒。</td>
                <td>这是极其强大的化身，因为它能使所有非英雄敌军单位退化（包括感染单位）。英雄单位的攻击速度和移动速度则会降低 50%。一次退化波便能显著削弱敌军。此外，还可在预计交战前几秒召唤化身，预先为己方单位施加攻击速度增益。</td>
                <td>300 秒</td>
            </tr>
        </tbody>
    </table>
    <p>形体化身技能会将形体化身带入战场。该单位自身拥有以下技能：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/avatarofform">
                <img src="/images/commanderdata/abilities/zeratul/avatarofform.jpg" alt="形体化身">
                <p>形体化身</p>
            </a>
        </div>
        <div>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/summonchargedcrystals.png" alt="召唤充能水晶"></td>
                        <td>召唤充能水晶</td>
                        <td>标记一片地面目标区域。2 秒后，形体化身造成 100 点伤害，并在目标位置召唤 10 枚萨尔纳加充能水晶。<br>充能水晶每次攻击有 10% 几率施放小型灵能风暴，在 4 秒内对小范围内的所有敌方单位造成 40 点伤害。</td>
                        <td>25 秒</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/psionicgale.png" alt="灵能烈风"></td>
                        <td>灵能烈风</td>
                        <td>制造一场持续 4 秒的灵能风暴，对大范围目标区域内的所有敌方单位造成 160 点伤害。不会伤害友方单位。</td>
                        <td>10 秒</td>
                    </tr>
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/psionicblast.png" alt="灵能爆破"></td>
                        <td>灵能爆破</td>
                        <td>蓄力后，在 3 秒后对目标单位造成 500 点伤害。</td>
                        <td>10 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>精华化身技能会将精华化身带入战场。该单位自身拥有以下技能：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/avatarofessence">
                <img src="/images/commanderdata/abilities/zeratul/avatarofessence.jpg" alt="精华化身">
                <p>精华化身</p>
            </a>
        </div>
        <div>
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
                    <tr class="autocast">
                        <td><img src="/images/commanderdata/abilities/zeratul/devolutionwave.png" alt="退化波"></td>
                        <td>退化波</td>
                        <td>将精华化身周围大范围内的所有敌方单位转化为低等进化形态。</td>
                        <td>20 秒</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>退化会使精华化身周围 10 射程内所有非英雄、非地图首领的敌方单位退化。英雄单位的攻击速度和移动速度则会降低 50%。退化的机制与<a href="/resources/mutators">突变因子</a>“转化”十分相似。被退化波命中的所有单位都会降低一个阶级，阶级表如下：</p>
    <table>
        <thead>
            <tr>
                <th>阶级</th>
                <th>退化为</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <ul>
                        <li>工蜂</li>
                        <li>探机</li>
                        <li>SCV</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <ul>
                        <li>陆战队员</li>
                        <li>跳虫</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <ul>
                        <li>爆虫</li>
                        <li>恶火</li>
                        <li>恶火战车</li>
                        <li>医疗兵</li>
                        <li>死神</li>
                        <li>蟑螂</li>
                        <li>秃鹫车</li>
                        <li>寡妇雷</li>
                        <li>狂热者</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <ul>
                        <li>使徒</li>
                        <li>火蝠</li>
                        <li>劫掠者</li>
                        <li>哨兵</li>
                        <li>虫群女王</li>
                        <li>女王</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    <ul>
                        <li>腐化者</li>
                        <li>龙骑士</li>
                        <li>幽灵</li>
                        <li>高阶圣堂武士</li>
                        <li>刺蛇</li>
                        <li>医疗运输机</li>
                        <li>异龙</li>
                        <li>凤凰</li>
                        <li>追猎者</li>
                        <li>维京战机</li>
                        <li>寡妇雷</li>
                        <li>寡妇雷（潜地）</li>
                        <li>怨灵</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    <ul>
                        <li>女妖</li>
                        <li>巢穴女王</li>
                        <li>飓风</li>
                        <li>黑暗圣堂武士</li>
                        <li>感染者</li>
                        <li>先知</li>
                        <li>破坏者</li>
                        <li>侦察机</li>
                        <li>战狼</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    <ul>
                        <li>执政官</li>
                        <li>干扰者</li>
                        <li>不朽者</li>
                        <li>解放者</li>
                        <li>潜伏者</li>
                        <li>潜伏者（潜地）</li>
                        <li>铁鸦</li>
                        <li>科学船</li>
                        <li>攻城坦克</li>
                        <li>虫群宿主</li>
                        <li>飞蛇</li>
                        <li>虚空辉光舰</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    <ul>
                        <li>战列巡航舰</li>
                        <li>巢虫领主</li>
                        <li>航母</li>
                        <li>巨像</li>
                        <li>掠夺者</li>
                        <li>风暴战舰</li>
                        <li>雷神</li>
                        <li>雷兽</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>未列出的单位，其阶级等于人口占用，且最低为 1 阶。</p>
    <p>退化波不会通过退化生成以下单位：</p>
    <ul>
        <li>爆虫</li>
        <li>干扰者</li>
        <li>解放者（防卫模式）</li>
        <li>先知</li>
        <li>掠夺者</li>
        <li>爆蚊</li>
        <li>攻城坦克（攻城模式）</li>
    </ul>
    <p>化身周围 10 射程内的所有单位每 15 秒获得一级进化增益；离开范围后，每 15 秒失去一级进化增益。</p>
    <table class="centered">
        <thead>
            <tr>
                <th>增益等级</th>
                <th>攻击速度</th>
                <th>伤害减免</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>25%</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>2</td>
                <td>50%</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>3</td>
                <td>75%</td>
                <td>30%</td>
            </tr>
            <tr>
                <td>4</td>
                <td>100%</td>
                <td>40%</td>
            </tr>
        </tbody>
    </table>
    <h2 id="leveling">飞升前升级</h2>
    <p>难度：简单</p>
    <p>升级初期以伏击者和执行者作为核心部队。达到 3 级后，伏击者会凭借强力的闪现伤害升级大幅提高输出。谨慎使用静滞射线——这是一项较差的面板技能。不要用它静滞整波进攻，而应将进攻波分割成更易处理的几部分。更积极地依赖军团面板技能，即使这意味着要暂时削减单位生产也无妨。</p>
    <h2 id="masteries">精通</h2>
    <p>以下是泽拉图三个技能组的推荐点数分配。这套配置旨在作为未选择任何威望时适用于所有地图的通用方案。强烈建议根据自己的玩法和所面对的特殊挑战（例如<a href="/resources/weeklymutations">每周突变</a>）调整精通。</p>
    <p>技能组 1：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>泽拉图攻击速度</td>
                <td>每点 1.5%<br>最多 45%</td>
                <td>?</td>
                <td rowspan="2">这里的选择取决于你更倚重泽拉图本人还是他的部队。如果喜欢光炮流，投资泽拉图攻击速度更合适。此外，操作泽拉图的水平越高，攻击速度精通带来的收益也越大。</td>
            </tr>
            <tr>
                <td>作战单位攻击速度</td>
                <td>每点 0.5%<br>最多 15%</td>
                <td>?</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">应根据个人玩法选择精通。喜欢操作泽拉图的玩家可以从攻击速度精通中获得很大收益，尤其是与精华化身配合时。</p>
    <p>技能组 2：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>神器碎片刷新速度</td>
                <td>每点 -2 秒<br>最多 -60 秒</td>
                <td>30</td>
                <td rowspan="2">神器碎片直接决定泽拉图在游戏中的强度，应优先选择。喜欢频繁使用支援面板技能的玩家也可考虑缩短其冷却时间。</td>
            </tr>
            <tr>
                <td>支援面板技能冷却缩减</td>
                <td>每点 -1%<br>最多 -30%</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">支援面板技能虽然强大，但对指挥官强度的提升不及神器碎片。提高神器碎片刷新速度的效率高得多。</p>
    <p>技能组 3：</p>
    <table class="masteryTable">
        <thead>
            <tr>
                <th>精通</th>
                <th>数值</th>
                <th>推荐投入点数</th>
                <th>其他考量</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>传奇军团消耗</td>
                <td>每点 -1%<br>最多 -30%</td>
                <td>0</td>
                <td rowspan="2">经常使用化身的玩家能从化身冷却中获益。传奇军团消耗精通便于频繁召唤军团，使用军团速开分矿的玩家也能更快扩张。</td>
            </tr>
            <tr>
                <td>化身冷却时间</td>
                <td>每点 -4 秒<br>最多 -120 秒</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
    <p class="masterySummary">军团面板技能精通虽然能让玩家更快扩张，但消耗降低幅度不足以体现价值。通用玩法更推荐化身精通。</p>
    <h2 id="prestiges">威望</h2>
    <p>以下是泽拉图的威望。“生效等级”表示该威望达到完整效果时所需的等级。</p>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P1：<strong>黎明使徒</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>泽拉图可部署虚空寻觅者号，使目标区域内的所有友方单位获得超级隐形，持续 15 秒。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>虚空寻觅者号不再能运送泽拉图。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>虚空寻觅者号的冷却时间为 180 秒</li>
                        <li>超级隐形范围为所选位置周围 16 射程</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>虚空寻觅者号的主要用途之一是让泽拉图迅速抵达神器碎片处。选择此威望后，可通过虚空阵列船或闪现来弥补无法运输泽拉图的劣势，换取让部队无损攻入敌方基地的超级隐形。这一强力威望能减少泽拉图昂贵单位的损失。双方玩家协同推进敌方基地时尤其出色，因为两边都能利用超级隐形优先击杀关键目标。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P2：<strong>知识探求者</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>泽拉图可收集无限数量的神器碎片。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>泽拉图的作战单位消耗提高 25%。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>每件神器使闪现的充能次数增加 1</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望适合能迅速找到神器碎片的玩家，其效果取决于任务时长。固定时长的任务最适合此威望，因为游戏时间越长，泽拉图单位获得的升级就越多。它与神器刷新精通配合最佳。使用超维空间炮还能进一步缓解劣势，因为它们属于建筑，消耗不会因该威望而提高。</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="prestigeTable">
        <tbody>
            <tr>
                <td class="prestigeTitle" colspan="2">P3：<strong>虚空先驱</strong></td>
            </tr>
            <tr>
                <th>优势</th>
                <td>
                    <ul>
                        <li>每收集一块神器碎片，泽拉图的暗影顺劈冷却时间缩短 5 秒。</li>
                        <li>暗影顺劈会生成一道龙卷风，对敌方单位造成伤害并使其减速。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>劣势</th>
                <td>
                    <ul>
                        <li>泽拉图最多只能收集两块神器碎片。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>备注</th>
                <td>
                    <ul>
                        <li>龙卷风每 0.25 秒造成 5 点伤害，并使单位减速 30%，持续 5 秒</li>
                        <li>龙卷风会优先以反隐单位为目标</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>生效等级</th>
                <td>1</td>
            </tr>
            <tr>
                <th>建议</th><td>这一威望牺牲第三组神器升级（以及化身），换取更加灵活的英雄单位。由于许多单位无法获得第三块神器碎片提供的防御升级，它最适合较短的地图，以及鼓励激进英雄玩法的任务。对抗“扫雷专家”等特定<a href="/resources/mutators">突变因子</a>时效果很好，因为龙卷风无需反隐便能伤害潜地单位。</td>
            </tr>
        </tbody>
    </table>
    <p>泽拉图的所有威望都很扎实，通用玩法选择任何一个（或不选）都能顺利应对。最佳威望高度取决于当前地图。例如，知识探求者最适合长地图，而虚空先驱最适合短地图。</p>
    <h2 id="hero">英雄单位</h2>
    <a class="unitStatsLink" href="/units/#zeratul/zeratul"><img id="heroPic" src="/images/commanderdata/hero/zeratul/zeratul.jpg" alt="泽拉图"></a>
    <p>首次登场时间：4:00</p>
    <p>重生时间：1:00</p>
    <p>泽拉图拥有名为“暗影合一”的被动能力。他永久保持隐形，并在受到攻击后免疫伤害 0.5 秒。该效果每 5 秒最多触发一次。</p>
    <p>泽拉图的技能如下：</p>
    <table class="abilityTable">
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
                <td><img src="/images/commanderdata/hero/zeratul/blink.png" alt = "闪现"></td>
                <td>闪现</td>
                <td>将泽拉图传送至附近目标位置。</td>
                <td>8 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/zeratul/summonvoidseeker.png" alt = "召唤虚空寻觅者号"></td>
                <td>召唤虚空寻觅者号</td>
                <td>将泽拉图运送至目标位置。</td>
                <td>120 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/zeratul/shadowcleave.png" alt = "暗影顺劈"></td>
                <td>暗影顺劈</td>
                <td>对附近敌人造成 100 点伤害。</td>
                <td>12 秒</td>
            </tr>
            <tr>
                <td><img src="/images/commanderdata/hero/zeratul/propheticvision.png" alt = "先知视野"></td>
                <td>先知视野</td>
                <td>显示隐藏的萨尔纳加神器碎片位置，或将其发掘出来。</td>
                <td>未找到碎片时为 10 秒<br>找到碎片后为距离下一块碎片刷新的剩余秒数。</td>
            </tr>
        </tbody>
    </table>
    <p>泽拉图的升级如下：</p>
    <table class="heroUpgrades">
        <thead>
            <tr>
                <th>升级</th>
                <th>名称</th>
                <th>效果</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/images/commanderdata/hero/zeratul/purityofwill.png" alt="纯粹意志"></td>
                <td>纯粹意志</td>
                <td>泽拉图每找到一块神器碎片，便会获得额外护盾（+50）、提高暗影顺劈伤害（+10），并增加闪现充能次数（+1）。</td>
            </tr>
        </tbody>
    </table>
    <h2 id="army">推荐配兵</h2>
    <p>以下是泽拉图的推荐配兵，假定未选择威望并采用推荐精通分配。这只是部队框架的基础建议。建议先了解<a href="#units">单位</a>章节中的每个单位，再根据实际情况加入科技单位，以便更好地应对不同局面。</p>
    <img class="army" src="/images/commanderdata/units/zeratul/xelnagaambusher.jpg" alt="萨尔纳加伏击者"><img class="army" src="/images/commanderdata/units/zeratul/xelnagashieldguard.jpg" alt="萨尔纳加光盾卫士"><img class="army" src="/images/commanderdata/units/zeratul/xelnagavoidarray.jpg" alt="萨尔纳加虚空阵列船">
    <p>大量伏击者的打法非常适合泽拉图，但面对高伤害进攻波次时需要谨慎交战。使用光盾卫士快速补充部队损失的护盾，并用虚空阵列船在地图各处调动部队、处理进攻波次。</p>
    <div class="techContainer"><img class="army"src="/images/commanderdata/units/zeratul/xelnagaenforcer.jpg" alt="萨尔纳加执行者"><div class="techAdd">+</div></div>
    <p>面对大量重甲空中单位时，将执行者加入部队。</p>
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
    <p>如需了解泽拉图单位的详细数据、单位对比和升级计算，请访问<a href="/units/#zeratul">数据表</a>页面。</p>
    <p>泽拉图的作战单位如下：</p>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/xelnagaambusher">
                <img src="/images/commanderdata/units/zeratul/xelnagaambusher.jpg" alt="萨尔纳加伏击者">
                <p>萨尔纳加伏击者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>适合为对地能力强大的部队提供对空支援</li>
                <li>储存足够的闪现充能后，可打出可观的爆发伤害。</li>
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
                    <tr class="unlockable autocast">
                        <td><img src="/images/commanderdata/unitskills/zeratul/predictiveblink.png" alt="预判闪现"></td>
                        <td>预判闪现</td>
                        <td>将该单位传送至附近目标位置。</td>
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
                        <th>所需碎片</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/predictiveblink.png" alt="预判闪现"></td>
                        <td>预判闪现</td>
                        <td>使该单位可传送至附近目标位置。萨尔纳加伏击者的躯体受损后会自动传送至安全位置。</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/vengeanceofthevoid.png" alt="虚空复仇"></td>
                        <td>虚空复仇</td>
                        <td>使用闪现后会留下虚空幻影，以该单位武器伤害的 50% 攻击一次。</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/phasebattery.png" alt="相位电池"></td>
                        <td>相位电池</td>
                        <td>该单位现在最多可储存 3 次预判闪现，并且每 8 秒恢复一次充能。</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/xelnagashieldguard">
                <img src="/images/commanderdata/units/zeratul/xelnagashieldguard.jpg" alt="萨尔纳加光盾卫士">
                <p>萨尔纳加光盾卫士</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>建议部队中配备少量光盾卫士来补充护盾、避免不必要的损失，尤其是考虑到每个单位都十分昂贵。</li>
                <li>反射护盾只对投射物（例如追猎者的攻击）生效，对即时命中攻击（例如陆战队员的攻击）无效。</li>
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
                    <tr class="unlockable autocast">
                        <td><img src="/images/commanderdata/unitskills/zeratul/shieldrecharge.png" alt="护盾充能"></td>
                        <td>护盾充能</td>
                        <td>为一个友方星灵单位恢复护盾。<br><br>每消耗 1 点能量恢复 4 点护盾。</td>
                        <td>0 秒</td>
                        <td>0</td>
                    </tr>
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/zeratul/reflectionshield.png" alt="反射护盾"></td>
                        <td>反射护盾</td>
                        <td>生成一道光环，将 50% 的所有投射物反弹给敌方攻击者，持续 15 秒。可设为自动施放。</td>
                        <td>180 秒</td>
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
                        <th>所需碎片</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/shieldrecharge.png" alt="护盾充能"></td>
                        <td>护盾充能</td>
                        <td>使该单位可为一个友方星灵单位恢复护盾。</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/eclipseprotocol.png" alt="日蚀协议"></td>
                        <td>日蚀协议</td>
                        <td>该单位的能量恢复速度提高 100%。</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/reflectionshield.png" alt="反射护盾"></td>
                        <td>反射护盾</td>
                        <td>使该单位可生成一道光环，将 50% 的所有投射物反弹给敌方攻击者。</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/voidtemplar">
                <img src="/images/commanderdata/units/zeratul/voidtemplar.jpg" alt="虚空圣堂武士">
                <p>虚空圣堂武士</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>对地持续伤害极高。</li>
                <li>能够承受大量伤害，应由光盾卫士提供支援。</li>
                <li>虚空之怒带来很高的爆发伤害，使其强度显著提升。</li>
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
                    <tr class="unlockable">
                        <td><img src="/images/commanderdata/unitskills/zeratul/dtblink.png" alt="闪现"></td>
                        <td>闪现</td>
                        <td>使虚空圣堂武士可传送至附近目标位置。</td>
                        <td>8 秒</td>
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
                        <th>所需碎片</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/dtblink.png" alt="闪现"></td>
                        <td>闪现</td>
                        <td>使该单位可传送至附近目标位置。</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/voidfury.png" alt="虚空之怒"></td>
                        <td>虚空之怒</td>
                        <td>该单位使用闪现时，对路径上的单位造成 50 点伤害。</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/backtotheshadows.png" alt="遁入暗影"></td>
                        <td>遁入暗影</td>
                        <td>该单位受到致命伤害时会撤入虚空，并在 10 秒内恢复生命值和护盾。每 180 秒最多触发一次。</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/xelnagaenforcer">
                <img src="/images/commanderdata/units/zeratul/xelnagaenforcer.jpg" alt="萨尔纳加执行者">
                <p>萨尔纳加执行者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>对空持续伤害极高。</li>
                <li>由于消耗更高、射程略短，对地能力不如普通不朽者。</li>
                <li>可以大量生产，但效率不高，因为攻击属于投射物，容易对目标造成过量伤害并浪费火力。</li>
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
                    <tr class="unlockable autocast">
                        <td><img src="/images/commanderdata/unitskills/zeratul/barrier.png" alt="屏障"></td>
                        <td>屏障</td>
                        <td>吸收最多 100 点伤害，持续 10 秒。</td>
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
                        <th>所需碎片</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/barrier.png" alt="屏障"></td>
                        <td>屏障</td>
                        <td>使该单位可吸收 100 点伤害，持续 10 秒。</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/forcecannon.png" alt="力场光炮"></td>
                        <td>力场光炮</td>
                        <td>使该单位的对空武器可击退敌方空中单位，并对冲击路径上的单位造成相当于该次攻击 25% 的伤害。</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/enternitybarrier.png" alt="永恒屏障"></td>
                        <td>永恒屏障</td>
                        <td>萨尔纳加执行者的屏障吸收伤害提高 300%，并完全修复其躯体损伤。</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/xelnagaabrogator">
                <img src="/images/commanderdata/units/zeratul/xelnagaabrogator.jpg" alt="萨尔纳加禁绝者">
                <p>萨尔纳加禁绝者</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>非常适合对付虫群异虫等拥有大量低生命值单位的<a href="/guides/enemycomps">敌方兵种组合</a>，或用于对抗感染单位。</li>
                <li>在感染主题地图上是极好的防守单位。</li>
                <li>大量生产时容易造成过量伤害，效率相对较低。</li>
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
                        <td><img src="/images/commanderdata/unitskills/zeratul/purificationnova.png" alt="净化新星"></td>
                        <td>净化新星</td>
                        <td>射出一枚能量球，在 3 秒后或接触敌方单位时引爆，对附近地面单位和建筑造成 100 点溅射伤害。技能生效期间，萨尔纳加禁绝者无法移动。</td>
                        <td>12 秒</td>
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
                        <th>所需碎片</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/novabattery.png" alt="新星电池"></td>
                        <td>新星电池</td>
                        <td>净化新星的冷却时间缩短 50%。</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/clusternova.png" alt="集束新星"></td>
                        <td>集束新星</td>
                        <td>净化新星爆炸时会生成三枚小型新星，每枚对路径上的敌方单位造成 50 点伤害。</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <a class="unitStatsLink" href="/units/#zeratul/xelnagavoidarray">
                <img src="/images/commanderdata/units/zeratul/xelnagavoidarray.jpg" alt="萨尔纳加虚空阵列船">
                <p>萨尔纳加虚空阵列船</p>
            </a>
        </div>
        <div class="descContainer">
            <ul>
                <li>泽拉图部队的必备单位，可提供极强的全图机动能力。</li>
                <li>可用于快速向战场增援单位。</li>
            </ul>
            <p>技能：无</p>
            <p>升级：</p>
            <table class="unitUpgrades">
                <thead>
                    <tr>
                        <th>升级</th>
                        <th>名称</th>
                        <th>效果</th>
                        <th>所需碎片</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/infinitevoid.png" alt="无限虚空"></td>
                        <td>无限虚空</td>
                        <td>使萨尔纳加虚空阵列船获得无限装载容量。</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><img src="/images/commanderdata/unitupgrades/zeratul/shieldboosters.png" alt="护盾增幅器"></td>
                        <td>护盾增幅器</td>
                        <td>附近单位每秒额外恢复 2 点护盾。</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="buildOrder">建造顺序</h2>
    <p>以下是泽拉图的标准经济建造顺序（假定军团消耗降低已投入全部点数）。如需了解如何阅读并制定自己的建造顺序，请参阅<a href="/guides/buildordertheory">建造顺序理论</a>页面。</p>
    <p class="buildOrder">
        18 探机 -> 分矿<br>
        19 佐拉亚军团<br>
        21 星灵枢纽
    </p>
    <h2 id="guide">玩法攻略</h2>
    <h3>玩法误区</h3>
    <p>无。</p>
    <h3 id="fastexpand">军团速开分矿</h3>
    <p>泽拉图的一项优势是拥有强大的军团面板技能，不仅能清理分矿岩石，还能清除有敌军驻守的分矿，有时甚至能连盟友的分矿一起清掉。下表说明如何最大限度利用第一次军团召唤。对于某些任务（例如<a href="/missions/oblivionexpress">湮灭快车</a>），由于清理双方分矿十分简单，因此不再提供详细说明。</p>
    <table id="fastExpand">
        <thead>
            <tr>
                <th>地图</th>
                <th>军团开矿方法</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><a href="/missions/chainofascension">飞升之链</a></td>
                <td>清理自己的分矿，并将军团引向最近的敌军营地。</td>
            </tr>
            <tr>
                <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                <td>这种开矿方法难度极高，需要大量练习。<br><br>
                    步骤 1：<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_cod1.jpg" alt="死亡摇篮军团速开分矿步骤 1"><br><br>
                    步骤 2：<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_cod2.jpg" alt="死亡摇篮军团速开分矿步骤 2"><br><br>
                    注意：
                    <ul>
                        <li>构造体死亡后立即把运输车移向第一座信标，以免损失运输车。</li>
                        <li>第二辆运输车可以直接驶向剩余信标，无视残余守军。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/deadofnight">亡者之夜</a></td>
                <td>没有可用分矿。</td>
            </tr>
            <tr>
                <td><a href="/missions/lockload">天锁</a></td>
                <td>按下图召唤一次佐拉亚军团，即可彻底清理双方分矿：<br><img src="/images/commanderdata/guides/zeratul/legionexpand_ll.jpg" alt="天锁军团速开分矿"></td>
            </tr>
            <tr>
                <td><a href="/missions/malwarfare">恶意代码</a></td>
                <td>无法对空的单位会逃离佐拉亚军团，因此很难清理双方分矿。可以用探机把敌军引向军团，提高军团效率。<br><br>
                    面对异虫兵种组合时务必小心。建筑被摧毁后会生成幼虫，可能杀死你的探机。</td>
            </tr>
            <tr>
                <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                <td>这种开矿方法难度极高，需要大量练习。<br><br>
                    步骤 1：前往地图左上角的 4 号疏散飞船。<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_me1.jpg" alt="疏散矿工军团速开分矿步骤 1"><br>注意：如果分矿区域右侧的疏散飞船已被摧毁（信标不存在），可以绕过整个分矿区域，避开其中的所有威胁。<br><br>
                    步骤 2：在该区域部署塞达斯军团，使感染女妖钻出地面并受到精神控制。<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_me2.jpg" alt="疏散矿工军团速开分矿步骤 2"><br><br>
                    步骤 3：用这些女妖清理分矿。确保一架都不要损失，该区域内有许多被感染的陆战队员。
                    注意：
                    <ul>
                        <li>探机能承受被感染的劫掠者 2 次攻击（第三次会死亡）。</li>
                        <li>召唤军团后立即将探机移向分矿，以免被感染单位杀死。</li>
                        <li>可以让感染女妖潜地，使其快速恢复生命值。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                <td>双方分矿距离太远，无法在军团持续时间结束前全部清理。</td>
            </tr>
            <tr>
                <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                <td>双方分矿彼此相邻，因此开矿很简单。</td>
            </tr>
            <tr>
                <td><a href="/missions/partparcel">聚铁成兵</a></td>
                <td>速开分矿的行进路线取决于敌方种族（与<a href="/commanders/alarak">阿拉纳克</a>的速开方法类似）。<br>
                    <form action='#'>
                        <label><input type='radio' name='pp' value='protoss' checked>星灵</label><br>
                        <label><input type='radio' name='pp' value='terran'>人类</label><br>
                        <label><input type='radio' name='pp' value='zerg'>异虫</label><br></form>
                    <div class="fastExpand" id="ppdiv"><img id="pp" src="/images/commanderdata/guides/zeratul/legionexpand_pp_protoss.jpg" alt="泽拉图在聚铁成兵的军团速开分矿"></div>

                    <script>
                        var imgList=[];
                        imgList.push('/images/commanderdata/guides/zeratul/legionexpand_pp_protoss.jpg');
                        imgList.push('/images/commanderdata/guides/zeratul/legionexpand_pp_terran.jpg');
                        imgList.push('/images/commanderdata/guides/zeratul/legionexpand_pp_zerg.jpg');
                        preload(imgList);
                        $("input[name='pp']").change(function(){
                            var race= $(this).val();
                            var oldImg = $('#pp');
                            var img = new Image();
                            img.src = '/images/commanderdata/guides/zeratul/legionexpand_pp_'+ race + '.jpg';
                            var newImg = $(img).hide();
                            $('#ppdiv').append(img);
                            oldImg.stop(true).fadeOut(500, function() {
                                $(this).remove();
                            });
                            newImg.fadeIn(500);
                            newImg.attr('id', 'pp');
                            return false;
                        })
                    </script>
                </td>
            </tr>
            <tr>
                <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                <td>通常很难用清理分矿的军团同时应付第一波进攻。<br><br>佐拉亚军团清理分矿岩石约需 25 秒，再抵达主基地坡口约需 25 秒，因此只剩 10 秒攻击第一波敌军。<br><br>第一波敌军抵达主坡顶端的时间取决于兵种组合，范围为 2:35 至 2:55。因此，最好先用军团防守第一波进攻，再利用剩余时间开始清理岩石；剩余岩石可用少量单位解决。
                </td>
            </tr>
            <tr>
                <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                <td><img src="/images/commanderdata/guides/zeratul/legionexpand_soa.jpg" alt="埃蒙之镰军团速开分矿"></td>
            </tr>
            <tr>
                <td><a href="/missions/templeofthepast">往日神庙</a></td>
                <td>这里的时间非常紧。军团会在计时仅剩 0.1 秒时死亡。<br><br>
                    步骤 1：按下图指定佐拉亚军团的目标。<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_totp1.jpg" alt="往日神庙军团速开分矿步骤 1"><br><br>
                    路线应如下图所示：<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_totp2.jpg" alt="往日神庙军团速开分矿路线"><br><br>
                    步骤 2：虚空辉光舰开始攻击岩石后，立即将行进标记放到上方的气矿岩石处。<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_totp3.jpg" alt="往日神庙军团速开分矿步骤 2"><br><br>
                    操作正确时，主岩石破碎后会有一架虚空辉光舰转去攻击上方气矿岩石，其余军团则攻击下方气矿岩石。<br><br>
                    步骤 3：单独的虚空辉光舰开始攻击上方气矿岩石后，立即通过小地图将行进标记移到盟友下方的气矿岩石处。它们开始移动后，可按下图微调位置。<br>
                    <img src="/images/commanderdata/guides/zeratul/legionexpand_totp4.jpg" alt="往日神庙军团速开分矿步骤 3">
                </td>
            </tr>
            <tr>
                <td><a href="/missions/thevermillionproblem">熔火危机</a></td>
                <td>一次佐拉亚军团无法同时清理你和盟友的分矿。<br><br>
                    务必从东侧或南侧坡道进入分矿，不要走北侧坡道，以避开那里的守军。
                </td>
            </tr>
            <tr>
                <td><a href="/missions/voidlaunch">虚空降临</a></td>
                <td>双方分矿距离太远，无法在军团持续时间结束前全部清理。</td>
            </tr>
            <tr>
                <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                <td>双方分矿距离太远，无法在军团持续时间结束前全部清理。</td>
            </tr>
        </tbody>
    </table>
    <h3 id="artifact">神器刷新位置</h3>
    <p>寻找神器碎片是泽拉图玩法的核心。碎片直接决定单位的强度，因此必须尽快取得。假定每块神器碎片都能立即找到，先知视野会进入 3 分钟冷却（未投入精通点数）。</p>
    <p>如果在一定时间内没有找到神器，小地图会发出提示，并向玩家显示一个圆圈，标出大致搜索区域。每次提示都会缩小搜索半径，让玩家更容易找到神器碎片。提示时间如下，并且也受泽拉图的神器刷新精通影响：</p>
    <table>
        <thead>
            <tr>
                <th>碎片</th>
                <th>提示 1（半径 35）</th>
                <th>提示 2（半径 25）</th>
                <th>提示 3（半径 15）</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>5:00</td>
                <td>6:00</td>
                <td>7:00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>10:00</td>
                <td>11:00</td>
                <td>12:00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>15:00</td>
                <td>16:00</td>
                <td>17:00</td>
            </tr>
        </tbody>
    </table>
    <p>神器会在距离泽拉图神器容器或双方玩家基地中点一定范围内刷新。神器刷新位置受到许多限制，包括最大步行距离以及附近敌方单位的生命值总和。相关技术数据列于下表，后续表格还提供了更直观的图示。</p>
    <p>为使表格能够完整显示，各列标题改用以下变量名：</p>
    <ul>
        <li><b>Rmin：</b>距中心的最小刷新距离。</li>
        <li><b>Rmax：</b>距中心的最大刷新距离。</li>
        <li><b>Wmax：</b>从中心步行至神器刷新点的最大距离。最大步行距离为 0 表示路径长度不受限制，这一数值常见于较开阔的地图。</li>
        <li><b>HPmax：</b>神器刷新位置周围 10 射程内敌方单位的最大生命值总和</li>
    </ul>
    <div class="tableContainer">
        <table class="centered">
                <tr>
                    <th rowspan="2">地图</th>
                    <th colspan="4">碎片 1</th>
                    <th colspan="4">碎片 2</th>
                    <th colspan="4">碎片 3</th>
                </tr>
                <tr>
                    <th>Rmin</th>
                    <th>Rmax</th>
                    <th>Wmax</th>
                    <th>HPmax</th>
                    <th>Rmin</th>
                    <th>Rmax</th>
                    <th>Wmax</th>
                    <th>HPmax</th>
                    <th>Rmin</th>
                    <th>Rmax</th>
                    <th>Wmax</th>
                    <th>HPmax</th>
                </tr>
                <tbody>
                    <tr>
                        <td><a href="/missions/chainofascension">飞升之链</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>110</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                        <td>20</td>
                        <td>40</td>
                        <td>50</td>
                        <td>0</td>
                        <td>50</td>
                        <td>70</td>
                        <td>80</td>
                        <td>1000</td>
                        <td>70</td>
                        <td>90</td>
                        <td>110</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/deadofnight">亡者之夜</a></td>
                        <td>30</td>
                        <td>100</td>
                        <td>60</td>
                        <td>0</td>
                        <td>50</td>
                        <td>100</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>60</td>
                        <td>100</td>
                        <td>150</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/lockload">天锁</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/malwarfare">恶意代码</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>110</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>120</td>
                        <td>140</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                        <td>25</td>
                        <td>40</td>
                        <td>0</td>
                        <td>0</td>
                        <td>40</td>
                        <td>80</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>130</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                        <td>20</td>
                        <td>40</td>
                        <td>60</td>
                        <td>1000</td>
                        <td>40</td>
                        <td>70</td>
                        <td>90</td>
                        <td>1000</td>
                        <td>60</td>
                        <td>90</td>
                        <td>130</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/partparcel">聚铁成兵</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>110</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>60</td>
                        <td>90</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>110</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/templeofthepast">往日神庙</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>0</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/thevermillionproblem">熔火危机</a></td>
                        <td>20</td>
                        <td>40</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/voidlaunch">虚空降临</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                        <td>30</td>
                        <td>50</td>
                        <td>0</td>
                        <td>0</td>
                        <td>50</td>
                        <td>80</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>80</td>
                        <td>100</td>
                        <td>0</td>
                        <td>1000</td>
                    </tr>
                </tbody>
        </table>
    </div>
    <p>下面提供更直观的神器刷新位置指南，绿色、黄色和红色区域分别表示第一、第二和第三件神器的刷新位置。请注意，这些位置取决于附近敌人的生命值，因此面对不同种族，或此前已经推进过相应区域时，结果会略有差异。</p>
    <table class="centered">
            <tr>
                <th>地图</th>
                <th>神器刷新位置</th>
            </tr>
            <tbody>
                <tr>
                    <td><a href="/missions/chainofascension">飞升之链</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_coa.jpg" alt="飞升之链神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/cradleofdeath">死亡摇篮</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_cod.jpg" alt="死亡摇篮神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/deadofnight">亡者之夜</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_don.jpg" alt="亡者之夜神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/lockload">天锁</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_ll.jpg" alt="天锁神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/malwarfare">恶意代码</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_mw.jpg" alt="恶意代码神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/minerevacuation">疏散矿工</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_me.jpg" alt="疏散矿工神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/mistopportunities">机会渺茫</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_mo.jpg" alt="机会渺茫神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/oblivionexpress">湮灭快车</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_oe.jpg" alt="湮灭快车神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/partparcel">聚铁成兵</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_pp.jpg" alt="聚铁成兵神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/riftstokorhal">克哈裂痕</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_rtk.jpg" alt="克哈裂痕神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/scytheofamon">埃蒙之镰</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_soa.jpg" alt="埃蒙之镰神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/templeofthepast">往日神庙</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_totp.jpg" alt="往日神庙神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/thevermillionproblem">熔火危机</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_tvp.jpg" alt="熔火危机神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/voidlaunch">虚空降临</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_vl.jpg" alt="虚空降临神器刷新位置"></td>
                </tr>
                <tr>
                    <td><a href="/missions/voidthrashing">虚空撕裂</a></td>
                    <td><img src="/images/commanderdata/guides/zeratul/artifactspawn_vt.jpg" alt="虚空撕裂神器刷新位置"></td>
                </tr>
            </tbody>
    </table>
    <h3 id="artifacttrap">神器封锁</h3>
    <p>泽拉图使用先知视野时，可以在碎片“刷新”点周围放置建筑，将其封锁。第一块碎片在游戏开始时便已生成，无法用这种方法封锁，但之后的碎片都可以。此技巧<strong>仅适用于六张地图</strong>：死亡摇篮、亡者之夜、恶意代码、疏散矿工、湮灭快车和熔火危机。</p>
    <p>封锁区域必须无法进出（可用探机检查），因此建筑边缘之间必须有一格接触，不能只让角落相接。如果不确定确切位置，可以围一个更大的圈。</p>
    <p>（本攻略经许可改编自 <a href="https://www.youtube.com/watch?v=oPB88elDVWY" target="_blank">TwoTuuu 的视频</a>）。</p>
    <h4><a href="/missions/cradleofdeath">死亡摇篮</a></h4>
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_cod1.jpg" style="width:100%" alt="死亡摇篮神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_cod2.jpg" style="width:100%" alt="死亡摇篮神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_cod3.jpg" style="width:100%" alt="死亡摇篮神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_cod4.jpg" style="width:100%" alt="死亡摇篮神器封锁攻略"><br />
    <h4><a href="/missions/deadofnight">亡者之夜</a></h4>
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_don1.jpg" style="width:100%" alt="亡者之夜神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_don2.jpg" style="width:100%" alt="亡者之夜神器封锁攻略"><br />
    <h4><a href="/missions/malwarfare">恶意代码</a></h4>
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_mw1.jpg" style="width:100%" alt="恶意代码神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_mw2.jpg" style="width:100%" alt="恶意代码神器封锁攻略"><br />
    <h4><a href="/missions/minerevacuation">疏散矿工</a></h4>
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_me1.jpg" style="width:100%" alt="疏散矿工神器封锁攻略"><br />
    <!-- me2 just repeats the note about checking with a probe -->
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_me3.jpg" style="width:100%" alt="疏散矿工神器封锁攻略"><br />
    <!-- me2 just repeats the note about a bigger circle -->
    <h4><a href="/missions/oblivionexpress">湮灭快车</a></h4>
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_oe1.jpg" style="width:100%" alt="湮灭快车神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_oe2.jpg" style="width:100%" alt="湮灭快车神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_oe3.jpg" style="width:100%" alt="湮灭快车神器封锁攻略"><br />
    <h4><a href="/missions/thevermillionproblem">熔火危机</a></h4>
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_tvp1.jpg" style="width:100%" alt="熔火危机神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_tvp2.jpg" style="width:100%" alt="熔火危机神器封锁攻略"><br />
    <img src="/images/commanderdata/guides/zeratul/artifacttrap_tvp3.jpg" style="width:100%" alt="熔火危机神器封锁攻略"><br />
    <h3>玩法技巧</h3>
    <ul>
        <li>点击单位的幽影并按下 ESC 键可以取消幽影。幽影会消失并开始计算冷却时间，让你只在需要时使用幽影。</li>
        <li>如果不确定神器位置，可在地图各处设置路径点。路径点会显示在先知视野中，帮助你迅速找到神器。下方视频展示了这一技巧：</li>
        <li>在整个任务期间持续生产萨尔纳加观察者，并将其以观察者模式部署到整张地图。获得全图视野极其强大，且能与几乎所有指挥官形成良好配合。</li>
        <li>部队达到人口上限后，在基地用多余晶体矿建造超维空间炮，再将阴影投射到地图各处进行防守并协助部队推进。</li>
        <li>将单位装入虚空阵列船可使其免受 DoT（持续伤害）效果。</li>
    </ul>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/h0OZG494TCY" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h2 id="videos">视频攻略</h2>
    <p>以下视频演示了前文所述的各种军团速开分矿方法。请注意，自 4.11.3 补丁起，泽拉图的军团消耗已大幅提高。开矿方法仍然相同，但执行时间会推迟到游戏约 2 分钟时。</p>
    <iframe width="950" height="535" src="https://www.youtube.com/embed/videoseries?list=PL-U97hco2Fu53ZsL8KSqVBysp4tPpg5CT" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
