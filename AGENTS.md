# AGENTS.md — Home Affairs WordPress Theme

**Project**: Home Affairs Division, Public Administration & Disaster Management — Sri Lanka WordPress theme.
**Root**: `C:\xampp\htdocs\moha\wp-content\themes\homeaffairs-theme` (XAMPP WordPress 7.0.7 multisite: `/moha/`, `/moha/en/`, `/moha/si/`, `/moha/ta/`; DB `mohadb`).

## Read These First

- **Full agent instructions**: `.opencode/copilot-instructions.md` (tech stack, walkers, coding rules, build commands)
- **Color system**: `doc/COLOR_GUIDE.md` (and `doc/COLOR_GUIDE.html`) — 17 maroon/gold tokens defined in 3 layers; re-theme steps in §8/§8B
- **Palette generator**: `doc/COLOR_PALETTE_TOOL.html` — interactive tool producing copy-ready Tailwind config + SCSS variables
- **Multisite migration**: `doc/WordPress_Multisite_Migration_Guide-Bilingual.pdf`

## Developer References

- **[Carbon Fields Documentation](https://docs.carbonfields.net/)**: Official documentation for Carbon Fields (containers, fields, complex repeaters, theme options, and Gutenberg blocks).
- **[WordPress Functions Reference](https://developer.wordpress.org/reference/functions/)**: Official developer documentation for core WordPress functions and APIs.
- **[WordPress Codex](https://codex.wordpress.org/)**: Historical reference and deep documentation for WordPress architecture.
- **[WordPress Theme Developer Handbook](https://developer.wordpress.org/themes/)**: Official guidelines and best practices for WordPress theme development.
- **[Awesome Carbon Fields](https://github.com/htmlburger/awesome-carbon-fields)**: Curated list of Carbon Fields field types and extensions (e.g. `htmlburger/carbon-field-icon`, `htmlburger/carbon-field-number`).

## Quick Facts

- **Text domain**: `homeaffairs`; PHP 8.0+; SCSS → `assets/css/style.css` via `npm run build:css`.
- **Tailwind**: Play-CDN runtime (`assets/css/lib/tailwind.min.js`); config is inline JS in `header.php:11` and `page-templates/template-landing.php:20` (no `tailwind.config.js`). Hyphenated keys must be quoted (`"primary-dark"`).
- **Page templates**: `page-templates/template-{slug}.php` (**35 files**).
- **Custom Post Types & Taxonomies**:
  - `special_notice` with `notice_category` taxonomy.
  - `news_announcement` with `news_category` taxonomy (`featured-news` category for hero highlights).
- **Carbon Fields & Custom Fields**:
  - Registered in `inc/custom-fields.php` and `inc/theme-options.php`.
  - Icon fields use native `Field::make('icon', ...)->add_fontawesome_options()` from `htmlburger/carbon-field-icon`.
  - Icon selection is strictly Font Awesome only (Dashicons and other providers filtered via `ha_extend_carbon_icon_options`).
  - Do NOT inject legacy jQuery wrapper buttons (`.ha-icon-picker-cf`) into Carbon Fields React icon pickers.
- **Editor & Thumbnail Suppression**: Default WordPress WYSIWYG editor and featured image metabox are suppressed on page templates and CPTs (`inc/custom-fields.php`).
- **Section Visibility**: All `template-home.php` sections support independent `show`/`hide` radio toggles.
- **Palette**: Maroon + Gold only — `#591521` primary family, `#dfa21f` secondary family. `steel` is an alias of `primary-light` (`#801e2f`); no navy (`#0A1931`) or old steel-blue tokens remain.
- **Multilingual**: Subsite architecture (`/moha/en/`, `/moha/si/`, `/moha/ta/`).
- **Encoding & Escaping**: UTF-8 without BOM; all strings escaped with `esc_html__()`, `esc_attr__()`, `esc_url()`.
