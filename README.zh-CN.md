# 《星际争霸 II》合作任务简体中文翻译站

公开站点：<https://diablolubi.github.io/starcraft2coop.com/>

这是基于上游固定提交 `0f18e89693e25ae942ab89747b63e659e8d4473e` 的一次性简体中文派生站，**非官方简体中文翻译站**。项目由 SerineMolecule 维护，原作者为 Aommaster，社区贡献者包括 Aneroid。本站仅供非商业使用，不投放广告、不使用分析追踪，也不收集用户数据。

## 本地启动

Windows 双击 [启动网站.bat](启动网站.bat)，或运行：

```powershell
py scripts/pages/serve_local.py --root html --port 8000 --open-browser
```

服务只绑定 `127.0.0.1`，默认地址为 <http://127.0.0.1:8000/>。

## 构建

需要 Bun、PHP 8.3、Composer 和 Python 3：

```powershell
bun install
make
py scripts/pages/package_pages.py --source html --destination dist-zh/starcraft2coop.com --base /starcraft2coop.com
```

Pages 发布目录使用 `/starcraft2coop.com/` 子路径。图片和视频仍依赖原站及其他外部媒体服务。

## 许可与署名

原项目采用 [CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/)，并禁止广告。本站遵循相同许可和署名要求；本翻译不代表 Blizzard Entertainment 或任何游戏官方团队。
