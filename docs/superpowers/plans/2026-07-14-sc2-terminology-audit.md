# SC2 简体中文术语审校实施计划

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:executing-plans (recommended) or superpowers:subagent-driven-development to implement this plan task-by-task.

**Goal:** 审校并统一单位、建筑及相关用户可见术语，修正源数据后发布到 GitHub Pages。

**Architecture:** 以 `translation/glossary.json` 作为统一术语索引，数据页面继续从 `source-data` 生成；新增验证脚本检查英文键的一致中文译名和例外登记。

**Tech Stack:** JSON、PHP 静态生成器、Bun/TypeScript 测试、Python 翻译验证、GitHub Actions Pages。

## Global Constraints

- 保留内部 ID、路由 slug、文件名、代码标识符、占位符、数值和媒体 URL。
- 官方没有简体中文译名的合作任务专属内容必须登记为例外。
- 不直接编辑生成目录掩盖源文件问题。

### Task 1: 建立术语审计清单

**Files:**
- Modify: `translation/glossary.json`
- Create: `translation/terminology-exceptions.json`
- Test: `tests/i18n/test_terminology_consistency.py`

- [ ] 从 `playerunits.json`、`amonunits.json`、`playerupgrades.json`、`playertalents.json` 提取英文键和现有中文。
- [ ] 为建筑/单位优先项建立唯一映射；争议项写入例外表。
- [ ] 编写测试，检查同一英文键不得出现多个非例外译名，并检查例外字段完整。
- [ ] 运行 `py -m unittest tests/i18n/test_terminology_consistency.py`，确认基线测试结果。
- [ ] 提交术语清单和测试。

### Task 2: 修正单位与建筑源数据

**Files:**
- Modify: `source-data/playerunits.json`
- Modify: `source-data/amonunits.json`
- Modify: `source-data/playerupgrades.json`
- Modify: `source-data/playertalents.json`

- [ ] 先写针对代表性官方术语的失败断言，例如 Marine=陆战队员、Shield Battery=护盾电池、Missile Turret=导弹塔、Spine Crawler=脊针爬虫。
- [ ] 按术语表修正用户可见 `name`、升级名、技能名和精通/威望名；不改键、ID、数值和占位符。
- [ ] 运行术语测试、源数据验证和相关 Bun 测试。
- [ ] 提交源数据修正。

### Task 3: 修正页面与 UI 文本

**Files:**
- Modify: `source-html/scripts/units.tsx`
- Modify: `source-html/units/index.php`
- Modify: 受审计影响的 `source-html/commanders/*.php`、`source-html/resources/*.php` 和页面数据文件

- [ ] 搜索同一术语在页面文案中的重复或不一致写法。
- [ ] 统一页面标题、分类名、图注、alt 和说明文字；保留路由与媒体引用。
- [ ] 运行 PHP lint、Bun 单测和翻译验证。
- [ ] 提交页面文案修正。

### Task 4: 构建、抽查与发布

**Files:**
- Regenerate: `html/`
- Verify: `.github/workflows/`

- [ ] 运行 `generate-html-dir.ts` 和 `generate-static.php`。
- [ ] 运行完整 Bun/Python/PHP 测试和 Pages 子路径检查。
- [ ] 抽查单位、指挥官、搜索结果和升级/精通页面。
- [ ] 提交生成目录，推送 `zh-CN`，监控 Pages Actions 至成功。
