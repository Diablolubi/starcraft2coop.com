<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>StarCraft II 合作任务——敌方阵容</title>
  <meta name="description" content="StarCraft II 合作任务敌方阵容指南：了解混合体以及埃蒙进攻波中的各类单位。">
  <meta name="keywords" content="星际争霸 合作任务 指南 敌方阵容">
  <link rel="canonical" href="https://starcraft2coop.com/guides/enemycomps">
  <script src="/scripts/preload.js"></script>
  <style>
    @media (min-width: 701px){
        #compDiv{
            width:500px;
            height:500px;
            display:inline-block;
            margin-top:50px;
        }
        .unitSkills td:nth-child(2), .unitSkills td:nth-child(4),
        .unitSkills th:nth-child(2), .unitSkills th:nth-child(4){
            width:1%;
            white-space: nowrap;
        }
    }
    @media (max-width: 700px){
        #compDiv{
            width:250px;
            height:250px;
            display:inline-block;
            margin-top:50px;
        }
        #compDiv img{
            max-width:250px;
        }
        .unitSkills th:nth-child(1),.unitSkills td:nth-child(1)
        {
            display:none;
        }
    }
    .techLevelTable td:first-child{
        text-align:center;
    }
    .techLevelTable td{
        vertical-align:top;
    }
    .techLevelTable thead{
        text-align:center;
    }
    .techLevelTable img{
        width:30px;
        background-color:black;
        border-radius:30px;
    }
    .centered {
        text-align:center
    }
    #compPreview{
        position:absolute;
    }
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
        padding-top:15px;
    }
    .faded{
        opacity:0.5;
    }
  </style>
  <?= startContent() ?>
    <h1>敌方阵容：进攻波单位与混合体数据</h1>
    <?php include("../../includes/reporterror.php");?>
    <div id="links">
        <h2>本页目录</h2>
        <p><a href="#genNotes">概要说明</a></p>
        <p><a href="#race">敌方种族</a></p>
        <p><a href="#composition">阵容</a></p>
        <p><a href="#tech">科技等级</a></p>
        <p><a href="#strength">强度等级</a></p>
        <p><a href="#limits">单位数量限制</a></p>
        <p><a href="#demo">综合演示</a></p>
        <p><a href="#upgrades">升级</a></p>
        <p><a href="#hybrids">混合体</a></p>
    </div>
    <h2 id="genNotes">概要说明</h2>
    <p>在任何任务中，你都需要应对袭击基地、分矿或任务目标的进攻波。进攻波的单位类型和数量受以下因素影响：</p>
    <ul>
        <li><b>敌方种族</b>：这是最直观的因素。进攻波中的单位属于当前敌人的种族。唯一的例外是<a href="/missions/cradleofdeath">死亡摇篮</a>：你的卡车还会受到第二个种族单位的攻击。</li>
        <li><b>阵容</b>：游戏开始时会确定一种预设阵容，它决定进攻波中出现哪些单位。例如，人类生化阵容的进攻波中不会出现战列巡航舰。</li>
        <li><b>科技等级</b>：决定你会遇到的最高阶单位。低科技等级的进攻波可能只有跳虫，而较高等级可能出现巢虫领主。范围为 1-7。</li>
        <li><b>强度等级</b>：影响进攻波中的单位数量，范围为 1-7。</li>
    </ul>
    <p>随着任务推进，进攻波的科技等级与强度等级都会提升，使其越来越强大。</p>
    <h2 id="race">敌方种族</h2>
    <p>除<a href="/missions/cradleofdeath">死亡摇篮</a>外，每个任务中你只会面对一个种族（星灵、人类或异虫）。该种族在游戏开始时便已确定。要判断敌方是否为异虫，可按 Alt + T；若是异虫，小地图上会显示菌毯蔓延。</p>
    <p>在<a href="/missions/cradleofdeath">死亡摇篮</a>中，只有袭击卡车的进攻波会包含第二个种族的单位。</p>
    <h2 id="composition">阵容</h2>
    <p>可能遇到的星灵阵容（及其最高科技单位）如下：</p>
    <ul>
        <li><b>传送门：</b>主要依靠传送门单位造成范围伤害和输出。</li>
        <li><b>机械巨像：</b>使用巨像造成范围伤害，并由哨兵控制敌军。</li>
        <li><b>机械金甲虫：</b>高伤害阵容，旨在快速摧毁敌方基地。</li>
        <li><b>黄金舰队航母：</b>以航空母舰为核心，凭借数量压倒敌军。</li>
        <li><b>黄金舰队风暴战舰：</b>空中攻城阵容，擅长摧毁敌方建筑。</li>
        <li><b>混合科技：</b>混编来自不同科技建筑的星灵单位。</li>
        <li><b>经典星灵地面：</b>以《母巢之战》单位为基础的星灵地面阵容。</li>
        <li><b>经典星灵空军：</b>以《母巢之战》单位为基础的星灵空军阵容。</li>
    </ul>
    <p>可能遇到的人类阵容（及其最高科技单位）如下：</p>
    <ul>
        <li><b>生化机械空军：</b>以生物单位为主，并辅以工厂与空中单位。</li>
        <li><b>机械星港：</b>依靠重工厂单位的人类机械化阵容。</li>
        <li><b>暗影科技：</b>从远距离攻击敌人的阵容。</li>
        <li><b>人类空军：</b>依靠星港单位输出的空军阵容。</li>
        <li><b>经典人类生化：</b>以《母巢之战》生物单位为基础的人类阵容。</li>
        <li><b>经典人类机械：</b>以《母巢之战》机械单位为基础的人类阵容。</li>
    </ul>
    <p>可能遇到的异虫阵容（及其最高科技单位）如下：</p>
    <ul>
        <li><b>地面：</b>使用异虫地面单位围攻敌方基地。</li>
        <li><b>飞龙跳虫：</b>以异龙和跳虫为核心的阵容。</li>
        <li><b>虫群：</b>依靠海量单位淹没敌人的阵容。</li>
        <li><b>经典异虫地面：</b>以《母巢之战》单位为基础的异虫地面阵容。</li>
        <li><b>经典异虫空军：</b>以《母巢之战》单位为基础的异虫空军阵容。</li>
    </ul>
    <p>请注意，上述名称不会显示在游戏内的敌方阵容指示器中。游戏会使用自定义标题描述阵容，下一节将列出这些标题。</p>
    <h2 id="tech">科技等级</h2>
    <div id="tooltip">提示</div>
    <p>科技等级决定敌人在科技树上的发展程度。科技等级越高，进攻波中的高科技单位越多。科技等级范围为 1-7。</p>
    <p>将鼠标悬停在单位图标上即可显示其名称。</p>
    <p>下表列出了各科技等级下星灵进攻波中的单位：</p>
    <div class="tableContainer">
        <table class="techLevelTable">
            <thead>
                <tr>
                    <th>科技等级</th>
                    <th><span class="faded">传送门</span><br>大师与机械</th>
                    <th><span class="faded">机械巨像</span><br>高耸行者</th>
                    <th><span class="faded">机械金甲虫</span><br>毁灭火炮</th>
                    <th><span class="faded">黄金舰队航母</span><br>卡莱之光</th>
                    <th><span class="faded">黄金舰队风暴战舰</span><br>风暴围城</th>
                    <th><span class="faded">混合科技</span><br>暗影破坏</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/phoenix.png" alt="凤凰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"></td>
                    <td><img src="/images/comps/unitimages/immortal.png" alt="不朽者"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/immortal.png" alt="不朽者"></td>
                    <td><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/phoenix.png" alt="凤凰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="/images/comps/unitimages/immortal.png" alt="不朽者"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"></td>
                    <td><img src="/images/comps/unitimages/immortal.png" alt="不朽者"><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/immortal.png" alt="不朽者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/oracle.png" alt="先知"></td>
                    <td><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/phoenix.png" alt="凤凰"><img src="/images/comps/unitimages/oracle.png" alt="先知"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/darktemplar.png" alt="黑暗圣堂武士"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"><img src="/images/comps/unitimages/archon.png" alt="执政官"></td>
                    <td><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/colossus.png" alt="巨像"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/disruptor.png" alt="干扰者"><img src="/images/comps/unitimages/reaver.png" alt="金甲虫"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/voidray.png" alt="虚空辉光舰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/voidray.png" alt="虚空辉光舰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/phoenix.png" alt="凤凰"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/darktemplar.png" alt="黑暗圣堂武士"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/colossus.png" alt="巨像"><img src="/images/comps/unitimages/archon.png" alt="执政官"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/colossus.png" alt="巨像"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/disruptor.png" alt="干扰者"><img src="/images/comps/unitimages/reaver.png" alt="金甲虫"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/oracle.png" alt="先知"><img src="/images/comps/unitimages/carrier.png" alt="航空母舰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/oracle.png" alt="先知"><img src="/images/comps/unitimages/tempest.png" alt="风暴战舰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/darktemplar.png" alt="黑暗圣堂武士"><img src="/images/comps/unitimages/disruptor.png" alt="干扰者"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/stalker.png" alt="追猎者"><img src="/images/comps/unitimages/colossus.png" alt="巨像"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"><img src="/images/comps/unitimages/immortal.png" alt="不朽者"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/colossus.png" alt="巨像"><img src="/images/comps/unitimages/immortal.png" alt="不朽者"></td>
                    <td><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/immortal.png" alt="不朽者"><img src="/images/comps/unitimages/disruptor.png" alt="干扰者"><img src="/images/comps/unitimages/reaver.png" alt="金甲虫"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/oracle.png" alt="先知"><img src="/images/comps/unitimages/carrier.png" alt="航空母舰"><img src="/images/comps/unitimages/voidray.png" alt="虚空辉光舰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/oracle.png" alt="先知"><img src="/images/comps/unitimages/tempest.png" alt="风暴战舰"><img src="/images/comps/unitimages/voidray.png" alt="虚空辉光舰"></td>
                    <td><img src="/images/comps/unitimages/adept.png" alt="使徒"><img src="/images/comps/unitimages/phoenix.png" alt="凤凰"><img src="/images/comps/unitimages/sentry.png" alt="哨兵"><img src="/images/comps/unitimages/darktemplar.png" alt="黑暗圣堂武士"><img src="/images/comps/unitimages/disruptor.png" alt="干扰者"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tableContainer">
        <table class="techLevelTable">
            <thead>
                <tr>
                    <th>科技等级</th>
                    <th><span class="faded">经典地面</span><br>艾尔先锋</th>
                    <th><span class="faded">经典空军</span><br>族母舰队</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/dragoon.png" alt="龙骑士"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/dragoon.png" alt="龙骑士"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"></td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/corsair.png" alt="海盗船"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="/images/comps/unitimages/dragoon.png" alt="龙骑士"><img src="/images/comps/unitimages/reaver.png" alt="金甲虫"></td>
                    <td><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/corsair.png" alt="海盗船"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"><img src="/images/comps/unitimages/archon.png" alt="执政官"><img src="/images/comps/unitimages/reaver.png" alt="金甲虫"></td>
                    <td><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/carrier.png" alt="航空母舰"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/dragoon.png" alt="龙骑士"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"><img src="/images/comps/unitimages/arbiter.png" alt="仲裁者"></td>
                    <td><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/carrier.png" alt="航空母舰"><img src="/images/comps/unitimages/arbiter.png" alt="仲裁者"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="/images/comps/unitimages/zealot.png" alt="狂热者"><img src="/images/comps/unitimages/dragoon.png" alt="龙骑士"><img src="/images/comps/unitimages/hightemplar.png" alt="高阶圣堂武士"><img src="/images/comps/unitimages/archon.png" alt="执政官"><img src="/images/comps/unitimages/reaver.png" alt="金甲虫"><img src="/images/comps/unitimages/arbiter.png" alt="仲裁者"></td>
                    <td><img src="/images/comps/unitimages/scout.png" alt="侦察机"><img src="/images/comps/unitimages/corsair.png" alt="海盗船"><img src="/images/comps/unitimages/carrier.png" alt="航空母舰"><img src="/images/comps/unitimages/arbiter.png" alt="仲裁者"></td>
            </tbody>
        </table>
    </div>
    <p>下表列出了各科技等级下人类进攻波中的单位。若某科技等级包含多行，则会随机采用其中一种组合：</p>
    <div class="tableContainer">
        <table class="techLevelTable">
            <thead>
                <tr>
                    <th>科技等级</th>
                    <th><span class="faded">生化机械空军</span><br>突袭小队</th>
                    <th><span class="faded">机械星港</span><br>战争机器</th>
                    <th><span class="faded">暗影科技</span><br>暗影科技</th>
                    <th><span class="faded">人类空军</span><br>帝国战斗群</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"></td>
                    <td><img src="/images/comps/unitimages/hellion.png" alt="恶火"></td>
                    <td><img src="/images/comps/unitimages/reaper.png" alt="死神"></td>
                    <td><img src="/images/comps/unitimages/viking.png" alt="维京战机"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/hellion.png" alt="恶火"><br><img src="/images/comps/unitimages/warhound.png" alt="战狼"><img src="/images/comps/unitimages/hellion.png" alt="恶火"></td>
                    <td><img src="/images/comps/unitimages/reaper.png" alt="死神"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"></td>
                    <td><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/banshee.png" alt="女妖"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/firebat.png" alt="火蝠"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/hellbat.png" alt="恶蝠"><br><img src="/images/comps/unitimages/warhound.png" alt="战狼"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/hellbat.png" alt="恶蝠"></td>
                    <td><img src="/images/comps/unitimages/reaper.png" alt="死神"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/liberator.png" alt="解放者"></td>
                    <td><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><br><img src="/images/comps/unitimages/banshee.png" alt="女妖"><img src="/images/comps/unitimages/marine.png" alt="陆战队员"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/ghost.png" alt="幽灵"><img src="/images/comps/unitimages/medivac.png" alt="医疗运输机"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/hellbat.png" alt="恶蝠"><img src="/images/comps/unitimages/widowmine.png" alt="寡妇雷"><br><img src="/images/comps/unitimages/warhound.png" alt="战狼"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/hellbat.png" alt="恶蝠"><img src="/images/comps/unitimages/widowmine.png" alt="寡妇雷"></td>
                    <td><img src="/images/comps/unitimages/reaper.png" alt="死神"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/liberator.png" alt="解放者"><br><img src="/images/comps/unitimages/reaper.png" alt="死神"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/cyclone.png" alt="飓风"></td>
                    <td><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/banshee.png" alt="女妖"><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><br><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/liberator.png" alt="解放者"><img src="/images/comps/unitimages/marine.png" alt="陆战队员"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/medivac.png" alt="医疗运输机"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"><img src="/images/comps/unitimages/widowmine.png" alt="寡妇雷"><br><img src="/images/comps/unitimages/warhound.png" alt="战狼"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"><img src="/images/comps/unitimages/widowmine.png" alt="寡妇雷"></td>
                    <td><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/liberator.png" alt="解放者"><img src="/images/comps/unitimages/cyclone.png" alt="飓风"></td>
                    <td><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/banshee.png" alt="女妖"><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/liberator.png" alt="解放者"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/ghost.png" alt="幽灵"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/thor.png" alt="雷神"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"><img src="/images/comps/unitimages/widowmine.png" alt="寡妇雷"><br><img src="/images/comps/unitimages/warhound.png" alt="战狼"><img src="/images/comps/unitimages/thor.png" alt="雷神"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"><img src="/images/comps/unitimages/widowmine.png" alt="寡妇雷"></td>
                    <td><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/cyclone.png" alt="飓风"></td>
                    <td><img src="/images/comps/unitimages/banshee.png" alt="女妖"><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/liberator.png" alt="解放者"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><br><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/liberator.png" alt="解放者"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/marine.png" alt="陆战队员"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/ghost.png" alt="幽灵"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
                    <td><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/thor.png" alt="雷神"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
                    <td><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/marauder.png" alt="劫掠者"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/cyclone.png" alt="飓风"><img src="/images/comps/unitimages/liberator.png" alt="解放者"></td>
                    <td><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/banshee.png" alt="女妖"><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><br><img src="/images/comps/unitimages/viking.png" alt="维京战机"><img src="/images/comps/unitimages/liberator.png" alt="解放者"><img src="/images/comps/unitimages/raven.png" alt="铁鸦"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tableContainer">
        <table class="techLevelTable">
            <thead>
                <tr>
                    <th>科技等级</th>
                    <th><span class="faded">经典生化</span><br>经典步兵</th>
                    <th><span class="faded">经典机械</span><br>经典机械</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"></td>
                    <td><img src="/images/comps/unitimages/vulture.png" alt="秃鹫"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"></td>
                    <td><img src="/images/comps/unitimages/vulture.png" alt="秃鹫"><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/firebat.png" alt="火蝠"></td>
                    <td><img src="/images/comps/unitimages/vulture.png" alt="秃鹫"><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/wraith.png" alt="怨灵"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"></td>
                    <td><img src="/images/comps/unitimages/vulture.png" alt="秃鹫"><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/wraith.png" alt="怨灵"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/ghost.png" alt="幽灵"></td>
                    <td><img src="/images/comps/unitimages/vulture.png" alt="秃鹫"><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/firebat.png" alt="火蝠"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="/images/comps/unitimages/marine.png" alt="陆战队员"><img src="/images/comps/unitimages/medic.png" alt="医疗兵"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/ghost.png" alt="幽灵"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
                    <td><img src="/images/comps/unitimages/goliath.png" alt="歌利亚"><img src="/images/comps/unitimages/siegetank.png" alt="攻城坦克"><img src="/images/comps/unitimages/battlecruiser.png" alt="战列巡航舰"><img src="/images/comps/unitimages/sciencevessel.png" alt="科学船"></td>
            </tbody>
        </table>
    </div>
    <p>部分进攻波会在两种单位类型中任选其一（以“或”标示）。两者各有 50% 概率出现，且每波只会出现其中一种。</p>
    <p>下表列出了各科技等级下异虫进攻波中的单位：</p>
    <div class="tableContainer">
        <table class="techLevelTable">
            <thead>
                <tr>
                    <th>科技等级</th>
                    <th><span class="faded">地面</span><br>肆虐虫灾</th>
                    <th><span class="faded">飞龙跳虫</span><br>巢虫腐化</th>
                    <th><span class="faded">虫群</span><br>爆炸威胁</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"><img src="/images/comps/unitimages/zergling.png" alt="跳虫"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/baneling.png" alt="爆虫"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/baneling.png" alt="爆虫"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/aberration.png" alt="畸变体"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/viper.png" alt="飞蛇"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/ravager.png" alt="破坏者"><img src="/images/comps/unitimages/lurker.png" alt="潜伏者"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/infestor.png" alt="感染者"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/aberration.png" alt="畸变体"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/swarmhost.png" alt="虫群宿主"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/infestor.png" alt="感染者"><img src="/images/comps/unitimages/lurker.png" alt="潜伏者"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/infestor.png" alt="感染者"><img src="/images/comps/unitimages/corruptor.png" alt="腐化者"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/aberration.png" alt="畸变体"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/viper.png" alt="飞蛇"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/baneling.png" alt="爆虫"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/infestor.png" alt="感染者"><img src="/images/comps/unitimages/ravager.png" alt="破坏者"><img src="/images/comps/unitimages/ultralisk.png" alt="雷兽"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/infestor.png" alt="感染者"><img src="/images/comps/unitimages/broodlord.png" alt="巢虫领主"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/swarmhost.png" alt="虫群宿主"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/viper.png" alt="飞蛇"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/baneling.png" alt="爆虫"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="/images/comps/unitimages/roach.png" alt="蟑螂"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/infestor.png" alt="感染者"><img src="/images/comps/unitimages/ravager.png" alt="破坏者"><img src="/images/comps/unitimages/ultralisk.png" alt="雷兽"></td>
                    <td><img src="/images/comps/unitimages/corruptor.png" alt="腐化者"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/infestor.png" alt="感染者"><img src="/images/comps/unitimages/broodlord.png" alt="巢虫领主"></td>
                    <td><img src="/images/comps/unitimages/aberration.png" alt="畸变体"><img src="/images/comps/unitimages/swarmhost.png" alt="虫群宿主"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/viper.png" alt="飞蛇"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/baneling.png" alt="爆虫"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tableContainer">
        <table class="techLevelTable">
            <thead>
                <tr>
                    <th>科技等级</th>
                    <th><span class="faded">经典地面</span><br>侵袭虫群</th>
                    <th><span class="faded">经典空军</span><br>吞噬天灾</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/lurker.png" alt="潜伏者"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/broodqueen.png" alt="巢穴女王"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/lurker.png" alt="潜伏者"></td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/guardian.png" alt="守护者"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/lurker.png" alt="潜伏者"><img src="/images/comps/unitimages/broodqueen.png" alt="巢穴女王"></td>
                    <td><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/guardian.png" alt="守护者"><img src="/images/comps/unitimages/devourer.png" alt="吞噬者"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/ultralisk.png" alt="雷兽"></td>
                    <td><img src="/images/comps/unitimages/mutalisk.png" alt="异龙"><img src="/images/comps/unitimages/guardian.png" alt="守护者"><img src="/images/comps/unitimages/devourer.png" alt="吞噬者"><img src="/images/comps/unitimages/broodqueen.png" alt="巢穴女王"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="/images/comps/unitimages/zergling.png" alt="跳虫"><img src="/images/comps/unitimages/hydralisk.png" alt="刺蛇"><img src="/images/comps/unitimages/lurker.png" alt="潜伏者"><img src="/images/comps/unitimages/ultralisk.png" alt="雷兽"><img src="/images/comps/unitimages/broodqueen.png" alt="巢穴女王"></td>
                    <td><img src="/images/comps/unitimages/guardian.png" alt="守护者"><img src="/images/comps/unitimages/devourer.png" alt="吞噬者"><img src="/images/comps/unitimages/scourge.png" alt="爆蚊"><img src="/images/comps/unitimages/broodqueen.png" alt="巢穴女王"></td>
            </tbody>
        </table>
        <p>请注意，经典空军科技等级 4 使用的守护者与更高科技等级进攻波中的不同。该守护者的攻击间隔为 3，而其他波次中的为 2，且攻击伤害也更低，因此其攻击速度稍慢。</p>
    </div>
    <script>
        $(".techLevelTable img").on('mouseover',function(e){
            $("#tooltip").html("<b>" + $(this).attr("alt") + "</b>");
            $("#tooltip").show();
        });
        $(".techLevelTable img").on('mouseleave',function(){
            $("#tooltip").hide();
        });
        $(".techLevelTable img").on('mousemove',function(e){
            $('#tooltip').css('top', e.pageY-40);
            $('#tooltip').css('left', e.pageX+5);
            $('#tooltip').css('position', "absolute");

        });
    </script>
    <h2 id="strength">强度等级</h2>
    <p>强度等级决定进攻波中的单位数量。游戏会随机生成进攻波：虽然科技等级和强度等级固定，但阵容允许存在少量变化，因此每次进攻波并不完全相同。例如，某一波中可能有更多解放者，但飓风更少。</p>
    <p>不过，强度等级与进攻波的资源造价相关。进攻波不会超过该强度等级对应的资源造价上限。下表给出了各强度等级的估算最大资源造价。</p>
    <p>进攻波各强度等级的资源造价：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>强度等级</th>
                <th>最大资源造价</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>600</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1200</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2100</td>
            </tr>
            <tr>
                <td>4</td>
                <td>3200</td>
            </tr>
            <tr>
                <td>5</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>7200</td>
            </tr>
            <tr>
                <td>7</td>
                <td>9600</td>
            </tr>
        </tbody>
    </table>
    <h2 id="limits">单位数量限制</h2>
    <p>进攻波会限制某些单位的出现数量。这能避免大量生成容易被针对的单一科技单位，从而提高进攻波的整体战斗力。</p>
    <p>并非所有单位都有限制；受限的通常是施法单位。具体如下：</p>
    <table class="centered">
        <thead>
            <tr>
                <th>单位</th>
                <th>每波上限</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>海盗船</td>
                <td>5</td>
            </tr>
            <tr>
                <td>高阶圣堂武士</td>
                <td>3</td>
            </tr>
            <tr>
                <td>感染者</td>
                <td>5</td>
            </tr>
            <tr>
                <td>哨兵</td>
                <td>4</td>
            </tr>
            <tr>
                <td>飞蛇</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <h2 id="demo">综合演示</h2>
    <p>你可以通过下方演示查看科技等级和强度等级对不同阵容进攻波的影响。此处强度等级与科技等级相同，这也是游戏中大多数进攻波的常见设置。</p>
    <div id="compDemo">
        <form action='#'>
            <select id="enemyComp">
                <option value="gateway">星灵 传送门</option>
                <option value="robocolossus">星灵 机械巨像</option>
                <option value="roboreaver">星灵 机械金甲虫</option>
                <option value="skytosscarrier">星灵 黄金舰队航母</option>
                <option value="skytosstempest">星灵 黄金舰队风暴战舰</option>
                <option value="techy">星灵 混合科技</option>
                <option value="groundclassicp">星灵 经典地面</option>
                <option value="airclassicp">星灵 经典空军</option>
                <option value="biomechstar">人类 生化机械空军</option>
                <option value="mechstarport">人类 机械星港</option>
                <option value="shadowtech">人类 暗影科技</option>
                <option value="skyterran">人类 空军</option>
                <option value="bioclassic">人类 经典生化</option>
                <option value="mechclassic">人类 经典机械</option>
                <option value="groundzerg">异虫 地面</option>
                <option value="mutaling">异虫 飞龙跳虫</option>
                <option value="swarmy">异虫 虫群</option>
                <option value="groundclassicz">异虫 经典地面</option>
                <option value="airclassicz">异虫 经典空军</option>
            </select>
            <select id="powerLevel">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
        </form>
        <div id="compDiv">
            <img id="compPreview" src="/images/comps/gateway1.jpg" alt="敌方阵容示例">
        </div>
    </div>
    <script>
        var imgList=[];
        $("#enemyComp > option").each(function(){
            for(var i=1; i<8; i++){
                imgList.push('/images/comps/' + this.value + i + ".jpg");
            }
        });
        preload(imgList);

        var updateImage = function(){
            var oldImg = $('#compPreview');
            var img = new Image();
            img.src = '/images/comps/' + $("#enemyComp").val() + $("#powerLevel").val() + '.jpg';
            var newImg = $(img).hide();
            $('#compDiv').append(img);
            oldImg.stop(true).fadeOut(500, function() {
                $(oldImg).remove();
            });
            newImg.fadeIn(500);
            newImg.attr('id', 'compPreview');
            return false;
        };
        $("#enemyComp").change(function(){
            updateImage();
        });
        $("#powerLevel").change(function(){
            updateImage();
        });
    </script>
    <h2 id="upgrades">升级</h2>
    <p>随着任务推进，AI 会自动完成升级研究，使任务难度随时间自然提升。具体时间如下：</p>
    <h3>星灵升级</h3>
    <h4>星灵攻防等级升级</h4>
    <div class="tableContainer">
        <table class="centered">
            <thead>
                <tr>
                    <th>等级</th>
                    <th>地面武器</th>
                    <th>地面护甲</th>
                    <th>护盾</th>
                    <th>空中武器</th>
                    <th>空中护甲</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>10:00</td>
                    <td>15:00</td>
                    <td>15:00</td>
                    <td>10:00</td>
                    <td>15:00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4>星灵技能研究</h4>
    <table>
        <thead>
            <tr>
                <th>研究项目</th>
                <th>时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>巨像 - 延展热能长枪</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>海盗船 - 干扰网</td>
                <td>12:00</td>
            </tr>
            <tr>
                <td>龙骑士 - 奇点充能</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>高阶圣堂武士 - 灵能风暴</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>追猎者 - 闪现</td>
                <td>8:00</td>
            </tr>
            <tr>
                <td>狂热者 - 冲锋</td>
                <td>8:00</td>
            </tr>
        </tbody>
    </table>
    <h3>人类升级</h3>
    <h4>人类攻防等级升级</h4>
    <div class="tableContainer">
        <table class="centered">
            <thead>
                <tr>
                    <th>等级</th>
                    <th>步兵武器</th>
                    <th>步兵护甲</th>
                    <th>舰船武器</th>
                    <th>舰船护甲</th>
                    <th>载具武器</th>
                    <th>载具护甲</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>10:00</td>
                    <td>15:00</td>
                    <td>10:00</td>
                    <td>15:00</td>
                    <td>10:00</td>
                    <td>15:00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20:00</td>
                    <td>30:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4>人类技能研究</h4>
    <table>
        <thead>
            <tr>
                <th>研究项目</th>
                <th>时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>女妖 - 隐形力场</td>
                <td>12:00</td>
            </tr>
            <tr>
                <td>指挥中心 - 轨道控制基地</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>飓风 - 磁场加速器</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>火蝠 - 兴奋剂</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>歌利亚 - 阿瑞斯级瞄准系统</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>恶火 - 地狱预燃器</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>劫掠者 - 震撼弹</td>
                <td>8:00</td>
            </tr>
            <tr>
                <td>劫掠者 - 兴奋剂</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>陆战队员 - 战斗护盾</td>
                <td>8:00</td>
            </tr>
            <tr>
                <td>陆战队员 - 兴奋剂</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>科学船 - 防御矩阵</td>
                <td>0:00</td>
            </tr>
        </tbody>
    </table>
    <h3>异虫升级</h3>
    <h4>异虫攻防等级升级</h4>
    <div class="tableContainer">
        <table class="centered">
            <thead>
                <tr>
                    <th>等级</th>
                    <th>近战攻击</th>
                    <th>远程攻击</th>
                    <th>地面单位甲壳</th>
                    <th>飞行单位攻击</th>
                    <th>飞行单位甲壳</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                    <td>0:00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>10:00</td>
                    <td>10:00</td>
                    <td>15:00</td>
                    <td>10:00</td>
                    <td>15:00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                    <td>20:00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4>异虫技能研究</h4>
    <table>
        <thead>
            <tr>
                <th>研究项目</th>
                <th>时间</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>爆虫 - 离心钩</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>刺蛇 - 肌肉增强</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>蟑螂 - 胶质重构</td>
                <td>8:00</td>
            </tr>
            <tr>
                <td>蟑螂 - 掘地之爪</td>
                <td>12:00</td>
            </tr>
            <tr>
                <td>雷兽 - 几丁质护甲</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>跳虫 - 肾上腺</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>跳虫 - 代谢加速</td>
                <td>8:00</td>
            </tr>
        </tbody>
    </table>
    <h2 id="hybrids">混合体</h2>
    <p>根据任务不同，进攻波可能伴随数量不等的混合体。混合体的加入与敌方阵容、强度等级或科技等级无关，而是由任务设计决定。共有五种混合体可能随进攻波出现，其能力如下。</p>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/comps/hybrids/hybriddestroyer.jpg" alt="混合体毁灭者">
            <p>混合体<br>毁灭者</p>
        </div>
        <div class="descContainer">
            <p>使用引力牢笼技能持续造成伤害。</p>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>数据</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/comps/hybrids/gravitonprison.png" alt="引力牢笼"></td>
                        <td>引力牢笼</td>
                        <td>使目标单位浮空并禁用其技能。</td>
                        <td>
                            <ul>
                                <li>射程： 8</li>
                                <li>总伤害： 60</li>
                                <li>持续时间： 4 秒</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/comps/hybrids/hybridreaver.jpg" alt="混合体掠夺者">
            <p>混合体<br>掠夺者</p>
        </div>
        <div class="descContainer">
            <p>可使用吞噬 DNA 技能治疗自身。</p>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>数据</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/comps/hybrids/consumedna.png" alt="吞噬 DNA"></td>
                        <td>吞噬 DNA</td>
                        <td>吸收目标单位的生命精华。</td>
                        <td>
                            <ul>
                                <li>冷却时间： 10 秒</li>
                                <li>射程： 5</li>
                                <li>总伤害： 100</li>
                                <li>治疗量： 50</li>
                                <li>持续时间： 1 秒</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/comps/hybrids/hybridnemesis.jpg" alt="混合体天罚者">
            <p>混合体<br>天罚者</p>
        </div>
        <div class="descContainer">
            <p>空中混合体，可用相位转移技能使建筑失效。</p>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>数据</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/comps/hybrids/phaseshift.png" alt="相位转移"></td>
                        <td>相位转移</td>
                        <td>使目标单位进入相位状态 10 秒。相位状态下的单位免疫所有伤害和大多数效果，但无法攻击或使用技能。</td>
                        <td>
                            <ul>
                                <li>冷却时间： 10 秒</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/comps/hybrids/hybridbehemoth.jpg" alt="混合体巨兽">
            <p>混合体<br>巨兽</p>
        </div>
        <div class="descContainer">
            <p>靠近该混合体的单位会被减速。</p>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>数据</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/comps/hybrids/constrictingslime.png" alt="束缚黏液"></td>
                        <td>束缚黏液</td>
                        <td>向附近敌人喷射黏液，使其减速 5 秒。</td>
                        <td>
                            <ul>
                                <li>冷却时间： 15 秒</li>
                                <li>射程： 6</li>
                                <li>总伤害： 5（对重甲为 10）</li>
                                <li>减速幅度： 50%</li>
                                <li>持续时间： 5 秒</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/comps/hybrids/consumedna.png" alt="吞噬 DNA"></td>
                        <td>吞噬 DNA</td>
                        <td>吸收目标单位的生命精华。</td>
                        <td>
                            <ul>
                                <li>冷却时间： 10 秒</li>
                                <li>射程： 5</li>
                                <li>总伤害： 100</li>
                                <li>治疗量： 50</li>
                                <li>持续时间： 1 秒</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="leftImage">
        <div class="imageContainer">
            <img src="/images/comps/hybrids/hybriddominator.jpg" alt="混合体支配者">
            <p>混合体<br>支配者</p>
        </div>
        <div class="descContainer">
            <p>强大的施法型混合体。</p>
            <p>技能：</p>
            <table class="unitSkills">
                <thead>
                    <tr>
                        <th>技能</th>
                        <th>名称</th>
                        <th>说明</th>
                        <th>数据</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/images/comps/hybrids/plasmablast.png" alt="等离子爆裂"></td>
                        <td>等离子爆裂</td>
                        <td>向目标发射一团生物等离子体，造成 260 点伤害。</td>
                        <td>
                            <ul>
                                <li>冷却时间： 3 秒</li>
                                <li>能量： 25</li>
                                <li>蓄力时间： 3 秒</li>
                                <li>目标射程： 10</li>
                                <li>冲击范围： 20</li>
                                <li>对目标造成 100% 伤害</li>
                                <li>距离 0 至 0.1 时造成 75% 伤害</li>
                                <li>距离 0.1 至 0.2 时造成 25% 伤害</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/comps/hybrids/psionicstorm.png" alt="灵能风暴"></td>
                        <td>灵能风暴</td>
                        <td>制造持续 4 秒的灵能风暴，对目标区域内所有敌方单位最多造成 80 点伤害，不会伤害友方单位。</td>
                        <td>
                            <ul>
                                <li>冷却时间： 8 秒</li>
                                <li>能量： 25</li>
                                <li>施法距离： 9</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<script src="/scripts/nav.js"></script>
<?= endContent() ?>
