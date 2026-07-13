# Local SC2 Terminology Audit Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task with verification checkpoints.

**Goal:** Establish a reproducible proofreading pipeline that uses the installed StarCraft II CASC data and official Simplified Chinese client strings as the primary terminology reference.

**Architecture:** Keep proprietary game data and unpacker binaries outside Git history. A local extraction step produces a machine-readable reference snapshot; repository scripts normalize and compare that snapshot against visible source data, glossary entries, and generated pages. Human review is limited to conflicts, missing keys, and context-sensitive exceptions.

**Tech Stack:** PowerShell, Python 3, JSON/UTF-8, existing unittest suite, local StarCraft II CASC installation, CascView or equivalent CASC reader.

## Global Constraints

- Work only in `C:\GitProjects\Starcraftcoop2`; do not create a worktree or temporary project workspace.
- Use the installed StarCraft II data under `C:\Program Files (x86)\StarCraft II` as the primary reference.
- Never commit proprietary CASC archives, extracted game assets, or third-party unpacker binaries.
- Preserve internal IDs, route slugs, file names, URLs, media IDs, placeholders, and numeric values.
- Keep source data authoritative; never edit generated `html` files directly.
- Every data change requires a failing test first, then the smallest source fix, then a full build and regression test.

---

### Task 1: Add the local reference snapshot contract

**Files:**
- Create: `tools/local-sc2-reference.schema.json`
- Create: `translation/local-sc2-reference.json`
- Test: `tests/i18n/test_local_reference.py`

**Interfaces:**
- The snapshot is an object with `source`, `game_build`, `extracted_at`, and `entries` fields.
- Each entry has `id`, `en`, `zh-CN`, `kind`, and `source_file` fields.
- The committed JSON contains only reviewed terminology rows, not raw game files.

- [x] **Step 1: Write the failing test**

  Add tests asserting that the snapshot is valid JSON, includes the required metadata, contains a reviewed Assimilator row, and has no duplicate `(kind, id)` keys or conflicting translations.

- [x] **Step 2: Run the focused test**

  Run: `C:\Users\70339\.cache\codex-runtimes\codex-primary-runtime\dependencies\python\python.exe -m unittest tests/i18n/test_local_reference.py`

  Expected: FAIL because the snapshot and validator do not exist.

- [x] **Step 3: Add the schema and initial reviewed rows**

  Record the local installation path and client build metadata, then add only rows verified from extracted client strings. Include `Assimilator` as the first row so the “吸纳舱” versus “吸收站” dispute is resolved from the client rather than from web sources.

- [x] **Step 4: Run the focused test again**

  Expected: PASS.

- [ ] **Step 5: Commit**

  Run: `git add tools/local-sc2-reference.schema.json translation/local-sc2-reference.json tests/i18n/test_local_reference.py; git commit -m "test: define local SC2 terminology reference"`

### Task 2: Build the extraction and normalization command

**Files:**
- Create: `tools/extract_local_sc2_reference.py`
- Create: `tools/README-local-sc2-data.md`
- Modify: `.gitignore`
- Test: `tests/i18n/test_local_reference.py`

**Interfaces:**
- Command: `py tools/extract_local_sc2_reference.py --input <extracted-directory> --output translation/local-sc2-reference.generated.json --build <build-id>`
- Input: files exported by CascView or another CASC reader; accepted extensions are `.txt`, `.xml`, `.json`, `.catalog`, and `.csv`.
- Output: deterministic UTF-8 JSON sorted by `kind`, `id`, `en`, `zh-CN`.

- [x] **Step 1: Add failing parser tests**

  Test extraction of `enUS`/`zhCN` pairs, whitespace normalization, duplicate conflict reporting, and exclusion of URLs, numbers, format placeholders, and internal IDs.

- [x] **Step 2: Run tests and observe failure**

  Expected: FAIL because the parser command is missing.

- [x] **Step 3: Implement the parser**

  Parse only explicit locale/key/value records; never infer translations from filenames. Emit a nonzero exit code for conflicting values and a report of unpaired keys. Keep raw input paths out of the committed output except as normalized source basenames.

- [x] **Step 4: Document the local extraction workflow**

  Document opening `C:\Program Files (x86)\StarCraft II\SC2Data` with CascView, exporting localization/data tables, and running the command. Explain that the unpacker and extracted files remain local and are not committed.

- [ ] **Step 5: Run parser tests and commit**

  Run the focused unittest and commit the parser, documentation, tests, and ignore rules.

### Task 3: Add source-to-reference audit reporting

**Files:**
- Create: `tools/audit_local_sc2_terminology.py`
- Create: `reports/local-sc2-terminology-audit.json`
- Test: `tests/i18n/test_local_reference.py`

**Interfaces:**
- Command: `py tools/audit_local_sc2_terminology.py --reference translation/local-sc2-reference.json --roots source-data source-html translation --output reports/local-sc2-terminology-audit.json`
- Report categories: `missing_reference`, `translation_conflict`, `retired_term`, `unreviewed_visible_term`, and `approved_exception`.

- [x] **Step 1: Add failing audit cases**

  Assert that an Assimilator mismatch is reported, that internal IDs and URLs are ignored, and that an approved context-specific exception is not reported as a conflict.

- [x] **Step 2: Run the audit test and observe failure**

  Expected: FAIL because the audit command is missing.

- [x] **Step 3: Implement deterministic audit rules**

  Match by stable English key or internal ID, scan only user-visible source text, and preserve file/line evidence. Do not rewrite source automatically; require a reviewed mapping or explicit exception.

- [x] **Step 4: Run the audit against the current site**

  Use the report to enumerate all inconsistent building/unit/skill/prestige names, including every Assimilator occurrence.

- [ ] **Step 5: Commit the audit tooling and baseline report**

  Commit only the reviewed report and scripts, never extracted proprietary data.

### Task 4: Correct terminology from the local client baseline

**Files:**
- Modify: `translation/glossary.json`
- Modify: `translation/terminology-exceptions.json`
- Modify: affected `source-data/*.json`
- Modify: affected `source-html/**/*.php`
- Test: `tests/i18n/test_terminology_consistency.py`

- [ ] **Step 1: Add failing assertions for every confirmed local mismatch**

  Include Assimilator and all other names reported by the audit, with exact Simplified Chinese client strings.

- [ ] **Step 2: Run terminology tests and record the red set**

- [ ] **Step 3: Apply minimal source-data and source-template fixes**

  Update glossary and explicit exceptions together with source text; regenerate `html` only through the existing build scripts.

- [ ] **Step 4: Run focused and full tests**

  Run the terminology unittest, Bun tests, PHP lint, full Python tests, `git diff --check`, and a complete static build.

- [ ] **Step 5: Commit and publish**

  Push `zh-CN`, monitor the Pages Action, and verify representative public pages and search results.

### Task 5: Make the audit repeatable for future reviews

**Files:**
- Modify: `README.md`
- Modify: `docs/superpowers/specs/2026-07-13-starcraft2coop-zh-local-design.md`

- [ ] **Step 1: Document the source hierarchy**

  Local Simplified Chinese client data is authoritative; repository reviewed glossary is second; community/web sources are discovery-only and cannot override local strings without an explicit exception.

- [ ] **Step 2: Document the review cadence and commands**

  Provide one command sequence for refreshing local data, generating the audit report, reviewing conflicts, rebuilding, and validating Pages.

- [ ] **Step 3: Run documentation/link checks and commit**
