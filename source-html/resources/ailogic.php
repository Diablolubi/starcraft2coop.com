<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸2》合作任务 - AI逻辑</title>
  <meta name="description" content="《星际争霸2》合作任务AI逻辑：了解施法单位如何以及何时使用不同技能。">
  <meta name="keywords" content="星际争霸 合作任务 攻略 AI逻辑 技能">
  <link rel="canonical" href="https://starcraft2coop.com/guides/ailogic">
  <style>
    .leftImage{
        overflow:auto;
        margin-bottom:25px;
    }
    .leftImage div:first-child{
        float:left;
        margin-right:25px;
    }
    .imageContainer img{
        border-radius:50%;
    }
    .subtitle{
        font-weight:bold;
        text-align:center;
    }
    .unitSkills td:nth-child(4),.unitSkills td:nth-child(5){
        text-align:center;
    }
  </style>
  <?= startContent() ?>
    <h1>AI逻辑：技能使用条件</h1>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页章节</h2>
        <p><a href="#genNotes">一般说明</a></p>
        <p><a href="#protoss">星灵单位</a></p>
        <p><a href="#terran">人类单位</a></p>
        <p><a href="#zerg">异虫单位</a></p>
        <p><a href="#hybrid">混合体单位</a></p>
        <p><a href="#mission">任务目标单位</a></p>
        <p><a href="#mutator">突变单位</a></p>
    </div>
    <h2 id="genNotes">一般说明</h2>
    <p>本页列出敌方施法单位可用的技能，并说明AI决定何时、何地施放各项技能的条件。拥有多项技能的单位会优先使用表格中位置靠上的已冷却技能。</p>
    <p>AI使用技能时通常会重点考虑“耐久值”。耐久值就是单位当前生命值与护盾值之和。</p>
    <p>“范围内单位”是指位于技能射程+1范围内的单位，这让施法单位可以先稍作移动，再以最大射程施放技能。</p>
    <p>有时会对一组单位使用耐久评分。系统会根据敌方单位的耐久值，为其分配0.0到1.0的评分：从耐久值0.0起，到各技能指定的伤害值为止。可以把耐久评分理解为该技能预计能消灭的单位数量。具有额外标签的单位还可能增加1.0分。遗憾的是，无法提取耐久评分计算的更多细节。</p>
    <p>带有<del>删除线</del>的文字表示由于代码错误而未被遵循的逻辑。</p>
    <p>“建议”表示向AI发送命令建议，由AI进一步决策；若AI认为没有必要，可能不会执行该命令。</p>
    <h2 id="protoss">星灵单位</h2>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/hightemplar.jpg" alt="高阶圣堂武士">
            <p>高阶圣堂武士</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
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
                        <td><img src="/images/ailogic/psionicstorm.png" alt="灵能风暴"></td>
                        <td>灵能风暴</td>
                        <td>制造一场持续4秒的灵能风暴，对目标区域内的所有敌方单位最多造成80点伤害，不会伤害友方单位。</td>
                        <td>2秒</td>
                        <td>75</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ul>
                                <li>如果高阶圣堂武士的耐久值不低于60%：
                                    <ol>
                                        <li>范围内有3个或更多敌方单位</li>
                                        <li>这些单位的耐久值总和不低于100
                                        <br>&#8618;触发灵能风暴<br><br></li>
                                    </ol>
                                </li>
                                <li>如果高阶圣堂武士的耐久值低于60%：
                                    <ol>
                                        <li>范围内有敌方单位</li>
                                        <li>该单位的耐久值不低于15
                                        <br>&#8618;触发灵能风暴</li>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/archonmerge.png" alt="合体为执政官"></td>
                        <td>合体为执政官</td>
                        <td>牺牲2名圣堂武士合体为一名执政官，可攻击地面和空中单位。</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>一名高阶圣堂武士的耐久值降至60%以下
                                <br>&#8618;与距离5以内的<i>任意</i>高阶圣堂武士合体为执政官。</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/oracle.jpg" alt="先知">
            <p>先知</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
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
                        <td><img src="/images/ailogic/pulsarbeam.png" alt="脉冲光束"></td>
                        <td>脉冲光束</td>
                        <td>为先知的脉冲光束充能，使其能够攻击敌方地面单位。</td>
                        <td>4秒</td>
                        <td>1.4/秒</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ul>
                                <li>如果先知的耐久值不低于50%：
                                    <ol>
                                        <li>有5个或更多地面单位
                                        <br>&#8618;触发脉冲光束<br><br></li>
                                    </ol>
                                </li>
                                <li>如果先知的耐久值低于50%：
                                    <ol>
                                        <li>存在可攻击的地面单位
                                        <br>&#8618;触发脉冲光束</li>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/stasisward.png" alt="静滞结界"></td>
                        <td>静滞结界</td>
                        <td>在目标位置部署一座隐形的静滞结界。被敌方地面单位触发后，结界会使附近敌人陷入静滞状态15秒。被困单位无法被攻击，也不会受到技能影响。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ul>
                                <li>附近没有敌人</li>
                                <li>先知与最近敌方建筑的距离小于60</li>
                                <li>先知的能量不低于80</li>
                                <li>10范围内没有静滞结界
                                <br>&#8618;触发静滞结界</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/sentry.jpg" alt="哨兵">
            <p>哨兵</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
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
                        <td><img src="/images/ailogic/guardianshield.png" alt="守护者之盾"></td>
                        <td>守护者之盾</td>
                        <td>产生范围4的光环，使友方单位受到的所有攻击伤害降低2点，持续15秒。</td>
                        <td>15秒</td>
                        <td>75</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>哨兵未获得另一名哨兵施加的守护者之盾增益</li>
                                <li>范围内有3个或更多远程敌方单位或建筑
                                <br>&#8618;触发守护者之盾</li>
                            </ol>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/forcefield.png" alt="力场"></td>
                        <td>力场</td>
                        <td>生成一道持续15秒、阻碍地面单位移动的屏障。重型单位接触时会摧毁力场。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>哨兵1.5范围内有近战敌人
                                <br>&#8618;在哨兵与敌方单位之间触发力场</li>
                            </ol>
                            <ol>
                                <li>一名耐久值低于20的友方单位，其1.5范围内有敌方近战单位
                                <br>&#8618;在友方单位与敌方单位之间触发力场</li>
                            </ol>
                            <ol>
                                <li>一名友方远程单位，其1.5范围内有敌方近战单位
                                <br>&#8618;在友方单位与敌方单位之间触发力场</li>
                            </ol>
                            <ol>
                                <li>哨兵的能量高于125</li>
                                <li>哨兵的耐久值不高于40</li>
                                <li>有6个或更多敌方远程单位</li>
                                <li>这些敌方单位的耐久评分为6.0，伤害值为1
                                <br>&#8618;触发力场以分割敌方单位</li>
                            </ol>
                            <br>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="terran">人类单位</h2>
    <p>注意：无法从游戏文件中提取幽灵使用核弹的AI逻辑。</p>
    <p>解放者：</p>
    <p>解放者会在以下情况下切换为空对空模式：</p>
    <ul>
        <li>没有可攻击的地面单位</li>
        <li>存在0-7个空中单位，且地面单位少于3个</li>
        <li>存在8个或更多空中单位，且地面单位少于12个</li>
    </ul>
    <p>攻城坦克：</p>
    <p>只要射程内存在有效的地面目标，攻城坦克就会切换至攻城模式。</p>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/battlecruiser.jpg" alt="战列巡航舰">
            <p>战列巡航舰</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/yamatocannon.png" alt="大和炮"></td>
                        <td>大和炮</td>
                        <td>用毁灭性的等离子炮轰击目标，造成300点伤害。</td>
                        <td>0秒</td>
                        <td>100</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位或建筑不是英雄单位</li>
                                <li>敌方单位或建筑的耐久值不低于225
                                <br>&#8618;触发大和炮</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/ghost.jpg" alt="幽灵">
            <p>幽灵</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/sniperround.png" alt="狙击"></td>
                        <td>狙击弹</td>
                        <td>进行一次精确射击，造成25点伤害（对灵能单位为50点）。无视护甲。只能以生物单位为目标。</td>
                        <td>0秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位的耐久值不低于19</li>
                                <li>敌方单位是生物单位且可见</li>
                                <li>敌方单位不是英雄单位
                                <br>&#8618;触发狙击弹</li>
                            </ol>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/empround.png" alt="EMP弹"></td>
                        <td>EMP弹</td>
                        <td>对目标区域内的敌方单位造成100点护盾伤害并耗尽其能量。隐形单位被命中后会显形10秒。</td>
                        <td>0秒</td>
                        <td>75</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位满足以下任一条件：（护盾不低于70）或（能量不低于70）</li>
                                <li>EMP作用范围内有4个或更多单位
                                <br>&#8618;触发EMP弹</li>
                            </ol>
                            <br>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/raven.jpg" alt="渡鸦">
            <p>渡鸦</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/seekermissile.png" alt="追猎者飞弹"></td>
                        <td>追猎者飞弹</td>
                        <td>部署一枚追猎者飞弹，飞弹会在5秒后启动并追踪目标单位，接触时造成100点（对护盾额外+35点）溅射伤害。</td>
                        <td>0秒</td>
                        <td>75</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位的耐久值不低于50
                                <br>&#8618;触发追猎者飞弹</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/pointdefensedrone.png" alt="定点防御无人机"></td>
                        <td>定点防御无人机</td>
                        <td>使用激光击落敌方飞弹。无法拦截特殊攻击。180秒后失效。每次射击消耗10点能量。</td>
                        <td>0秒</td>
                        <td>100</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>根据附近敌方单位的数量按以下方式计算评分：
                                    <ul>
                                        <li>战列巡航舰：每个+3</li>
                                        <li>腐化者：每个+2</li>
                                        <li>刺蛇：每个+1</li>
                                        <li>异龙：每个+2</li>
                                        <li>凤凰：每个+2</li>
                                        <li>追猎者：每个+1</li>
                                        <li>维京战机（战机模式）：每个+2</li>
                                    </ul></li>

                                <li>总评分不低于6
                                <br>&#8618;触发定点防御无人机</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/buildautoturret.png" alt="建造自动炮台"></td>
                        <td>建造自动炮台</td>
                        <td>自动化防御炮台。180秒后失效。可以攻击地面和空中单位。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>炮台预定部署位置的射程内有2个或更多敌方单位</li>
                                <li>如果渡鸦的耐久值不低于65%，耐久评分为1.5；否则耐久评分为0.5。两种情况下伤害值均为40。
                                <br>&#8618;触发建造自动炮台</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/sciencevessel.jpg" alt="科学船">
            <p>科学船</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/defensivematrix.png" alt="防御矩阵"></td>
                        <td>防御矩阵</td>
                        <td>用护盾包围目标，最多可吸收200点伤害。效果持续20秒。</td>
                        <td>20秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>单位当前没有防御矩阵
                                <li>单位已损失超过105点耐久值
                                <br>&#8618;触发防御矩阵</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/irradiate.png" alt="辐射"></td>
                        <td>辐射</td>
                        <td>对一个敌方生物单位及其附近的敌方生物单位造成250点伤害，持续25秒。</td>
                        <td>0秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位是生物单位</li>
                                <li>敌方单位不是英雄单位
                                <br>&#8618;触发辐射</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="zerg">虫族单位</h2>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/broodqueen.jpg" alt="巢群女王">
            <p>巢群女王</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/ensnare.png" alt="诱捕"></td>
                        <td>诱捕</td>
                        <td>使目标区域内单位的移动速度降低50%，持续6秒。使隐形和潜地单位显形。</td>
                        <td>0秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位未受到诱捕影响</li>
                                <li>有2个或更多敌方单位或建筑</li>
                                <li>耐久评分为1.5，伤害值为20
                                <br>&#8618;触发诱捕</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/spawnbroodlings.png" alt="孵化巢虫"></td>
                        <td>孵化巢虫</td>
                        <td>杀死目标敌方地面或空中单位，并从其尸体中孵化2只巢虫。重型单位和英雄单位免疫此效果。</td>
                        <td>0秒</td>
                        <td>100</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位是攻城坦克
                                <br>&#8618;触发孵化巢虫</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/corruptor.jpg" alt="腐化者">
            <p>腐化者</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/corruption.png" alt="腐化"></td>
                        <td>腐化</td>
                        <td>用虫族黏液覆盖目标敌方单位，使其受到的伤害提高20%，持续30秒。</td>
                        <td>45秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ul>
                                <li>如果腐化者的耐久值不低于30%：
                                    <ol>
                                        <li>敌方单位未受到腐化影响</li>
                                        <li>敌方单位的耐久值不低于120
                                        <br>&#8618;触发腐化<br><br></li>
                                    </ol>
                                </li>
                                <li>如果腐化者的耐久值低于30%：
                                    <ol>
                                        <li>敌方单位未受到腐化影响</li>
                                        <li>敌方单位的耐久值不低于40
                                        <br>&#8618;触发腐化<br><br></li>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/causticspray.png" alt="腐蚀喷液"></td>
                        <td>腐蚀喷液</td>
                        <td>喷出一股酸液，每秒造成5点伤害，持续6秒，之后提高至每秒25点伤害。引导型技能。只能以敌方建筑为目标。</td>
                        <td>45秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>范围内没有敌方空中单位</li>
                                <li>范围内有1座或更多敌方建筑
                                <br>&#8618;触发腐蚀喷液<br><br></li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/infestor.jpg" alt="感染者">
            <p>感染者</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/fungalgrowth.png" alt="真菌增生"></td>
                        <td>真菌增生</td>
                        <td>定身敌方单位，并造成38点伤害，持续4秒。使隐形和潜地单位显形。</td>
                        <td>0秒</td>
                        <td>75</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位未受到真菌增生影响</li>
                                <li>有5个或更多敌方单位</li>
                                <li>耐久评分为3.5，伤害值为30
                                <br>&#8618;触发真菌增生</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/infestedterran.png" alt="被感染的人类"></td>
                        <td>被感染的人类</td>
                        <td>孵化一个被感染的人类。被感染的人类持续30秒。</td>
                        <td>0秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ul>
                                <li>如果感染者的耐久值不低于60%：
                                    <ol>
                                        <li>范围内有4个或更多敌方单位</li>
                                        <li>感染者的能量不低于125
                                        <br>&#8618;触发被感染的人类<br><br></li>
                                    </ol>
                                </li>
                                <li>如果感染者的耐久值低于60%：
                                    <ol>
                                        <li>范围内有1个或更多敌方单位
                                        <br>&#8618;触发被感染的人类<br><br></li>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/viper.jpg" alt="飞蛇">
            <p>飞蛇</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/parasiticbomb.png" alt="寄生炸弹"></td>
                        <td>寄生炸弹</td>
                        <td>制造一个半径为3的寄生云雾，对目标及其附近的敌方空中单位造成90点伤害，持续10秒。如果目标死亡，云雾会留在其死亡位置的空中直至消散。无法以地面单位或建筑为目标。</td>
                        <td>0秒</td>
                        <td>125</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方空中单位未受到寄生炸弹影响</li>
                                <li>有1个或更多敌方单位</li>
                                <li>耐久评分为0.5，伤害值为50
                                <br>&#8618;触发寄生炸弹</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/disablingcloud.png" alt="致盲云雾"></td>
                        <td>致盲云雾</td>
                        <td>制造一片云雾，降低移动速度，并使敌方单位和建筑无法攻击或使用消耗能量的技能。持续10秒。</td>
                        <td>0秒</td>
                        <td>75</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>范围内有5个或更多敌方单位</li>
                                <li>敌人的耐久值不低于50</li>
                                <li>耐久评分为4.5，伤害值为10
                                <br>&#8618;触发致盲云雾</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/abduct.png" alt="绑架"></td>
                        <td>绑架</td>
                        <td>将目标单位拉到飞蛇身边。敌人会被击晕1秒。</td>
                        <td>0秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位与飞蛇的距离大于8</li>
                                <li>敌方单位满足以下任一条件：（重型单位）或（攻城坦克）
                                <br>&#8618;触发绑架</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/consumption.png" alt="吞噬"></td>
                        <td>吞噬</td>
                        <td>从一个友方虫族单位身上吸取最多75点生命值，每吸取一点生命值便为飞蛇恢复2点能量。</td>
                        <td>10秒</td>
                        <td>0</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有友方单位</li>
                                <li>友方单位的生命值高于75
                                <br>&#8618;触发吞噬</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="mission">任务目标单位</h2>
    <p>对于许多任务目标单位，只要有一个敌方单位出现，它们便会开始频繁使用技能，并随机选择单位作为目标。如果某个目标单位未列在此处，可以认为它采用这一逻辑。</p>
    <p>此外，此处只列出真实技能。模拟技能（例如“聚铁成兵”中的混合体技能）不会显示。</p>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/choker.jpg" alt="扼杀者">
            <p>扼杀者</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/tentacleattack.png" alt="触手攻击"></td>
                        <td>触手攻击</td>
                        <td>射出最多5条触手，将目标拉向扼杀者并持续造成伤害。</td>
                        <td>6秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>有1个或更多敌方单位</li>
                                <li>耐久评分为2.0，伤害值为64
                                <br>&#8618;触发触手攻击</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/slaynelemental.jpg" alt="斯雷恩元素生物">
            <p>斯雷恩<br>元素生物</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <td>冷却时间</td>
                        <td>能量消耗</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/essenceleech.png" alt="精华汲取（范围）"></td>
                        <td>精华汲取（范围）</td>
                        <td>-</td>
                        <td>0秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>有8个或更多非英雄敌方单位位于距离10以内，或相同数量的建筑位于距离15以内</li>
                                <li>耐久评分为3.5，伤害值为10
                                <br>&#8618;触发精华汲取（范围）</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/essenceleech.png" alt="精华汲取"></td>
                        <td>精华汲取</td>
                        <td>从目标单位吸取能量。</td>
                        <td>0秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>斯雷恩元素生物正在战斗</li>
                                <li>
                                    <ul>
                                        <li>如果上一个攻击者与元素生物的距离不超过20：
                                            <br><del>&#8618;触发精华汲取</del>
                                            <br>&#8618;触发精华汲取（范围）
                                        </li>
                                        <li>如果上一个攻击者与元素生物的距离大于20：
                                            <br><del>&#8618;对距离10以内随机选择的最近敌方单位触发精华汲取</del>
                                            <br>&#8618;对距离10以内随机选择的最近敌方单位触发精华汲取（范围）
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/stank.jpg" alt="恶臭巨兽">
            <p>恶臭巨兽</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/headbutt.png" alt="头槌"></td>
                        <td>头槌</td>
                        <td>对建筑造成巨额伤害。</td>
                        <td>5秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>恶臭巨兽的耐久值不高于40%</li>
                                <li>满足以下任一条件：（范围内有4个或更多敌方单位）或（范围内有1座或更多敌方建筑）：
                                <br>&#8618;触发头槌</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/voidshard.jpg" alt="虚空碎片">
            <p>虚空<br>碎片</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/voidzone.png" alt="虚空区域"></td>
                        <td>虚空区域</td>
                        <td>-</td>
                        <td>30秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位</li>
                                <li>从1-4中取最高耐久评分，伤害值为35
                                <br>&#8618;触发虚空区域</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/voidthrasher.jpg" alt="虚空撕裂者">
            <p>虚空<br>撕裂者</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/lightningaoe.png" alt="范围闪电"></td>
                        <td>范围闪电</td>
                        <td>施放一道闪电技能，在目标位置造成范围伤害。</td>
                        <td>10秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位或建筑</li>
                                <li>敌方单位不是观察者或监察王虫</li>
                                <li>从1-4中取最高耐久评分，伤害值为30
                                <br>&#8618;建议触发范围闪电</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="hybrid">混合体单位</h2>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/hybriddestroyer.jpg" alt="混合体毁灭者">
            <p>混合体<br>毁灭者</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/gravitonprison.png" alt="重力监牢"></td>
                        <td>重力监牢</td>
                        <td>使目标单位漂浮到空中，并使其技能失效。</td>
                        <td>0秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>范围内有敌方单位
                                <br>&#8618;触发重力监牢</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/hybridreaver.jpg" alt="混合体掠夺者">
            <p>混合体<br>掠夺者</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/consumedna.png" alt="吞噬DNA"></td>
                        <td>吞噬DNA</td>
                        <td>吸收目标单位的生命精华。</td>
                        <td>10秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li><del>敌方单位的耐久值不低于75</del>
                                <br>&#8618;触发吞噬DNA。</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/hybridbehemoth.jpg" alt="混合体巨兽">
            <p>混合体<br>巨兽</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/constrictingslime.png" alt="禁锢黏液"></td>
                        <td>禁锢黏液</td>
                        <td>向附近的敌人喷射黏液，使其减速5秒。</td>
                        <td>15秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>距离6以内有6个或更多敌方单位
                                <br>&#8618;触发禁锢黏液。</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/consumedna.png" alt="吞噬DNA"></td>
                        <td>吞噬DNA</td>
                        <td>吸收目标单位的生命精华。</td>
                        <td>10秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li><del>敌方单位的耐久值不低于75</del>
                                <br>&#8618;触发吞噬DNA。</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/hybriddominator.jpg" alt="混合体支配者">
            <p>混合体<br>支配者</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/plasmablast.png" alt="等离子爆破"></td>
                        <td>等离子爆破</td>
                        <td>向目标发射一团生物等离子体，造成260点伤害。</td>
                        <td>10秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位或建筑的耐久值不低于130
                                <br>&#8618;触发等离子爆破</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/psionicstorm.png" alt="灵能风暴"></td>
                        <td>灵能风暴</td>
                        <td>制造一场持续4秒的灵能风暴，对目标区域内所有敌方单位造成最多80点伤害。不会伤害友方单位。</td>
                        <td>8秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有1个或更多敌方单位
                                <li>耐久评分为3.0，伤害值为40
                                <br>&#8618;触发灵能风暴</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 id="mutator">突变因子单位</h2>
    <p>注意：此处未列出埃蒙的凯拉克斯，因为他的技能一旦冷却完毕便会立即使用。</p>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/artanis.jpg" alt="阿塔尼斯">
            <p>阿塔尼斯</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/astralwind.png" alt="星界之风"></td>
                        <td>星界之风</td>
                        <td>为阿塔尼斯及附近所有友方单位恢复300点生命值和200点护盾。</td>
                        <td>15秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>阿塔尼斯已损失超过150点护盾
                                <br>&#8618;触发星界之风</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/lightningdash.png" alt="闪电突袭"></td>
                        <td>闪电突袭</td>
                        <td>阿塔尼斯向前冲锋并释放能量爆发，对附近敌人造成100点伤害并使其昏迷2秒。</td>
                        <td>5秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有3个或更多敌方单位
                                <li>耐久评分为2.0，伤害值为100
                                <br>&#8618;触发闪电突袭</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/dehaka.jpg" alt="德哈卡">
            <p>德哈卡</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/mend.png" alt="治愈"></td>
                        <td>治愈</td>
                        <td>为德哈卡恢复150点生命值，并为附近友方单位恢复50点生命值。随后额外恢复相当于本次治疗量50%的生命值，持续15秒。</td>
                        <td>10秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>德哈卡已损失超过150点生命值
                                <br>&#8618;触发治愈</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/generatespawns.png" alt="生成分裂体"></td>
                        <td>生成分裂体</td>
                        <td>生成两个德哈卡分裂体，它们造成100%的普通伤害，但只有50%的生命值。分裂体持续30秒。</td>
                        <td>45秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位或建筑
                                <br>&#8618;触发生成分裂体</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/drag.png" alt="拖拽"></td>
                        <td>拖拽</td>
                        <td>将目标拉到德哈卡所在位置，并使其暂时昏迷（5秒）。</td>
                        <td>10秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>敌方单位可见
                                <br>&#8618;触发拖拽</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/kerrigan.jpg" alt="凯瑞甘">
            <p>凯瑞甘</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/apocalypse.png" alt="末日浩劫"></td>
                        <td>末日浩劫</td>
                        <td>对大范围内的敌方单位造成300点伤害，对敌方建筑造成700点伤害。</td>
                        <td>60秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有4个或更多敌方单位或建筑
                                <li>耐久评分为1.0，伤害值为300
                                <br>&#8618;触发末日浩劫</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/leapingstrike.png" alt="跳跃攻击"></td>
                        <td>跳跃攻击</td>
                        <td>凯瑞甘跃向目标并造成150点伤害。也可在没有目标时使用，以快速移动。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位
                                <li>敌方单位的耐久值不低于150</li>
                                <li>敌人与凯瑞甘的距离不超过6
                                <br>&#8618;触发跳跃攻击</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/psionicshift.png" alt="灵能位移"></td>
                        <td>灵能位移</td>
                        <td>凯瑞甘冲过敌群，对沿途所有敌人造成50点伤害。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有3个或更多敌方单位
                                <li>耐久评分为2.0，伤害值为50
                                <br>&#8618;触发灵能位移</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/nova.jpg" alt="诺娃">
            <p>诺娃</p>
            <p>100能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/nuke.png" alt="核弹"></td>
                        <td>核弹</td>
                        <td>对目标位置发动核打击。核弹会在5秒后落地，对大范围内的敌人造成最多600点伤害。</td>
                        <td>60秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有4个或更多敌方单位或建筑
                                <li>耐久评分为2.0，伤害值为600
                                <br>&#8618;触发核弹</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/snipe.png" alt="狙击"></td>
                        <td>狙击</td>
                        <td>从远距离对目标敌方地面或空中单位造成200点伤害。可以生物和机械单位为目标。</td>
                        <td>0秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位
                                <li>敌方单位的耐久值不低于75</li>
                                <li>敌人与诺娃的距离不超过10
                                <br>&#8618;触发狙击</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/raynor.jpg" alt="雷诺">
            <p>雷诺</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/penetratorround.png" alt="穿透弹"></td>
                        <td>穿透弹</td>
                        <td>仔细瞄准后，雷诺发射一枚穿透弹，命中沿途的敌人并造成300点伤害。</td>
                        <td>20秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有1个或更多敌方单位
                                <li>耐久评分为1.0，伤害值为80
                                <br>&#8618;触发穿透弹</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/tychus.jpg" alt="泰凯斯">
            <p>泰凯斯</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/tossshreddergrenade.png" alt="投掷撕裂手雷"></td>
                        <td>投掷撕裂手雷</td>
                        <td>投掷一枚手雷，爆炸时造成200点伤害，作用于小范围（距离2）。不会伤害友方单位。</td>
                        <td>20秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有3个或更多敌方单位
                                <li>耐久评分为1.0，伤害值为80
                                <br>&#8618;触发投掷撕裂手雷</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/zagara.jpg" alt="扎加拉">
            <p>扎加拉</p>
            <p>200能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/banelingbarrage.png" alt="毒爆虫弹幕"></td>
                        <td>毒爆虫弹幕</td>
                        <td>向目标地点发射4只毒爆虫。每只毒爆虫爆炸时造成40点伤害（对建筑为80点）。</td>
                        <td>10秒</td>
                        <td>50</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ul>
                                <li>如果附近有敌方单位：
                                    <ol>
                                        <li>附近有1个或更多敌方单位</li>
                                        <li>敌方单位与扎加拉的距离不超过10
                                        <br>&#8618;触发毒爆虫弹幕</li>
                                    </ol>
                                </li>
                                <li>如果附近没有敌方单位：
                                    <ol>
                                        <li>附近有1座或更多敌方建筑</li>
                                        <li>敌方单位与扎加拉的距离不超过10
                                        <br>&#8618;触发毒爆虫弹幕</li>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/spawnhunterkillers.png" alt="孵化猎杀者"></td>
                        <td>孵化猎杀者</td>
                        <td>在目标地点孵化4只猎杀者，持续20秒。</td>
                        <td>30秒</td>
                        <td>60</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位或建筑
                                <br>&#8618;触发孵化猎杀者</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/infesteddrop.png" alt="感染空投"></td>
                        <td>感染空投</td>
                        <td>向目标区域投下10个空投舱，每个空投舱造成50点伤害，并总共孵化10只蟑螂，持续30秒。</td>
                        <td>60秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>区域内有2个或更多敌方单位或建筑
                                <li>耐久评分为3.0，伤害值为500
                                <br>&#8618;触发感染空投</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/massfrenzy.png" alt="群体狂暴"></td>
                        <td>群体狂暴</td>
                        <td>使地图上所有友方单位的攻击速度提高25%，移动速度提高25%，持续15秒。</td>
                        <td>120秒</td>
                        <td>25</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位或建筑</li>
                                <li>有5个或更多友方单位位于扎加拉周围15距离内
                                <li>耐久评分为3.0，伤害值为500
                                <br>&#8618;触发狂暴</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/ailogic/zeratul.jpg" alt="泽拉图">
            <p>泽拉图</p>
            <p>0能量</p>
        </div>
        <div class="descContainer">
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>冷却时间</th>
                        <th>能量消耗</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/ailogic/voidarmor.png" alt="虚空护甲"></td>
                        <td>虚空护甲</td>
                        <td>使附近友方单位获得+100点护盾，持续10秒。</td>
                        <td>20秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位
                                <br>&#8618;建议触发虚空护甲</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/blink.png" alt="闪现"></td>
                        <td>闪现</td>
                        <td>将泽拉图传送至附近位置。</td>
                        <td>3秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位
                                <li>敌方单位与泽拉图的距离不超过8
                                <br>&#8618;建议朝敌方单位触发闪现</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/ailogic/shadowblade.png" alt="暗影之刃"></td>
                        <td>暗影之刃</td>
                        <td>斩击一个敌方单位，造成500点伤害。只能以地面单位为目标。</td>
                        <td>6秒</td>
                        <td>-</td>
                    </tr>
                    <tr><td class="subtitle" colspan=5>使用逻辑</td></tr>
                    <tr>
                        <td colspan=5>
                            <ol>
                                <li>附近有1个或更多敌方单位
                                <li>敌方单位与泽拉图的距离不超过1
                                <br>&#8618;建议触发暗影之刃</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
