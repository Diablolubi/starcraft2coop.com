# 本地 SC2 官方术语校对

本项目把已安装的《星际争霸 II》简体中文客户端字符串作为术语校对的第一来源。CASC 压缩包、导出的原始文件、CascView/CascLib 程序和临时日志均只保留在本机，不进入 Git 历史。

## 推荐流程

1. 用 CascView（或同等 CASC 读取器）打开 `C:\Program Files (x86)\StarCraft II\SC2Data`，分别导出 `enus.sc2data` 与 `zhcn.sc2data` 下的 `localizeddata` 文本表。优先导出 `editor/editorcatalogstrings.txt`、`editor/editorstrings.txt` 和各模组的 `triggerstrings.txt`。
2. 将导出目录交给规范化工具：

   ```powershell
   py tools/extract_local_sc2_reference.py `
     --input C:\path\to\sc2-export `
     --output translation/local-sc2-reference.generated.json `
     --build 5.0.16.97426
   ```

3. 只把经过人工确认的行复制到 `translation/local-sc2-reference.json`。这个受版本控制的文件不包含原始游戏文件，只包含稳定 ID、英文原文、官方简体中文、类别和来源文件名。
4. 生成源码审计报告：

   ```powershell
   py tools/audit_local_sc2_terminology.py `
     --reference translation/local-sc2-reference.json `
     --roots source-data source-html translation `
     --output reports/local-sc2-terminology-audit.json
   ```

5. 先处理 `translation_conflict` 和 `missing_reference`，再人工审阅 `unreviewed_visible_term`。上下文确实需要不同译名时，必须在 `translation/terminology-exceptions.json` 中写明理由和来源；工具不会自动改写源码。
6. 修改 `source-data`、`source-html` 和术语表后，按项目既有脚本重新生成 `html`，再运行 Python/Bun/PHP 测试和 `git diff --check`。

## 校对原则

- 本地简体中文客户端字符串优先于社区 Wiki、搜索结果和机器翻译；网络资料只用于发现候选项。
- 英文键、内部 ID、URL、媒体 ID、占位符和数值不翻译，也不作为术语冲突。
- 自动报告只提供文件和行号证据；涉及上下文、旧版本名称或合作任务专属名称的决定必须人工确认。
- 每次客户端版本变化都要重新导出并记录 `game_build`，不要自动同步上游或盲目替换整站文本。
