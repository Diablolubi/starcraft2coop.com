<?php

/** @generateStatic */

require_once __DIR__ . "/../../includes/wrapper.php";
?>
<?= startHead() ?>
  <title>《星际争霸 II》合作任务 - 免死效果触发顺序</title>
  <meta name="description" content="《星际争霸 II》合作任务中免死效果的触发顺序">
  <meta name="keywords" content="星际争霸 II, 合作任务, 免死效果, 触发顺序">
  <link rel="canonical" href="https://starcraft2coop.com/resources/deathprevention">
  <style>
    table td:first-child{
        text-align:center;
    }
  </style>
  <?= startContent() ?>
    <h1>免死效果触发顺序</h1>
    <?php
    include("../../includes/reporterror.php");?>
    <h2>概述</h2>
    <p>免死效果可阻止单位死亡，例如<a href="/commanders/artanis">阿塔尼斯的守护之壳</a>和<a href="/commanders/kerrigan">凯瑞甘的雷兽“莽兽品系”被动效果</a>。多个免死效果同时生效时，很难判断它们的触发顺序。下一节列出了这些效果的顺序。</p>
    <p>作为补充背景，本页用于配合以下视频：</p>
    <iframe width="475" height="268" src="https://www.youtube.com/embed/mTKnkozTVuI" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <h2>顺序</h2>
    <table>
        <thead>
            <tr>
                <th>图标</th>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="/images/deathprevention/guardianshell.png" alt="守护之壳">
                </td>
                <td><a href="/commanders/artanis">阿塔尼斯</a>的守护之壳</td>
                <td>指挥官被动技能</td>
                <td>友方单位受到致命伤害时会短暂无敌、免于死亡，并恢复 15% 的生命值和护盾。同一单位在 4 分钟内无法再次获得此保护。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/torrasqueultralisk.png" alt="莽兽">
                </td>
                <td><a href="/commanders/kerrigan">凯瑞甘</a>的莽兽</td>
                <td>单位被动技能</td>
                <td>重型突击生物，拥有造成范围伤害的顺劈攻击。被消灭后可以复活。冷却时间：60 秒。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/primalreconstitution.png" alt="原始重构">
                </td>
                <td><a href="/commanders/dehaka">德哈卡</a>的原始异龙“原始重构”</td>
                <td>单位升级</td>
                <td>原始异龙死亡后会在短时间后复活。每 60 秒最多触发一次。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/reconstruction.png" alt="重构">
                </td>
                <td><a href="/commanders/karax">凯拉克斯</a>的哨兵“重构”</td>
                <td>单位升级</td>
                <td>哨兵被消灭后会复活。该效果每 120 秒只能触发一次。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/backtotheshadows.png" alt="重返阴影">
                </td>
                <td><a href="/commanders/zeratul">泽拉图</a>的虚空圣堂武士“重返阴影”</td>
                <td>单位被动技能</td>
                <td>该单位受到致命伤害时会退入虚空，并在 10 秒内恢复生命值和护盾。每 180 秒最多触发一次。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/emergencyrecall.png" alt="紧急召回">
                </td>
                <td><a href="/commanders/vorazun">沃拉尊</a>的紧急召回</td>
                <td>指挥官被动技能</td>
                <td>友方隐形或潜地单位受到致命伤害时，会被召回至其拥有者的主要建筑。该效果每 4 分钟最多触发一次。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/criticalresponsesystem.png" alt="危机响应系统">
                </td>
                <td><a href="/commanders/tychus">泰凯斯</a>手下炮弹的危机响应系统</td>
                <td>单位升级</td>
                <td>炮弹受到致命伤害时会免疫伤害 5 秒，并恢复全部生命值。每 60 秒最多触发一次。</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/deathprevention/phoenixprotocol.png" alt="凤凰协议">
                </td>
                <td><a href="/commanders/mengsk">蒙斯克</a>的天空之怒“凤凰协议”</td>
                <td>军衔升级</td>
                <td>该单位受到致命伤害时，天空之怒会变形为战斗机模式，并暂时获得一道可在 15 秒内吸收 400 点伤害的屏障。每 90 秒只能触发一次。</td>
            </tr>
        </tbody>
    </table>
<?= endContent() ?>
