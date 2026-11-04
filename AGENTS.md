# AGENTS.md — Home Affairs WordPress Theme

**Project**: Home Affairs Division, Public Administration & Disaster Management — Sri Lanka WordPress theme.
**Root**: `C:\xampp\htdocs\moha\wp-content\themes\homeaffairs-theme` (XAMPP WordPress 7.0.7 multisite: `/moha/`, `/moha/en/`, `/moha/si/`, `/moha/ta/`; DB `mohadb`).

## Read These First

- **Full agent instructions**: `.opencode/copilot-instructions.md` (tech stack, walkers, coding rules, build commands)
- **Color system**: `doc/COLOR_GUIDE.md` (and `doc/COLOR_GUIDE.html`) — 17 maroon/gold tokens defined in 3 layers; re-theme steps in §8/§8B
- **Palette generator**: `doc/COLOR_PALETTE_TOOL.html` — interactive tool producing copy-ready Tailwind config + SCSS variables
- **Multisite migration**: `doc/WordPress_Multisite_Migration_Guide-Bilingual.pdf`

## Quick Facts

- Text domain: `homeaffairs`; PHP 8.0+; SCSS → `assets/css/style.css` via `npm run build:css`
- **Tailwind = Play-CDN runtime** (`assets/css/lib/tailwind.min.js`); config is **inline JS** in `header.php:11` and `page-templates/template-landing.php:20` (no `tailwind.config.js`). Hyphenated keys must be quoted (`"primary-dark"`).
- Page templates: `page-templates/template-{slug}.php` (**35 files**)
- SCSS: **31 partials** plus the `style.scss` entry (32 SCSS files total)
- 6 menu walkers in `inc/walkers.php`; 5 menu locations
- **Palette: maroon + gold only** — `#591521` primary family, `#dfa21f` secondary family. `steel` is a legacy alias of `primary-light` (`#801e2f`); no navy (`#0A1931`) or old steel-blue tokens remain.
- Semantic accents (`red`/`amber`/`emerald`/`blue`/`purple`) appear only in status, alert, category and file-type indicators — never as brand colors.
- No `#43c000` or green brand styling; UTF-8 without BOM; all strings escaped with `esc_html__()`/`esc_url()`