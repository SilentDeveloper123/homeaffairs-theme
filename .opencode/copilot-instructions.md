# AGENTS.md — Home Affairs WordPress Theme

## Project Context

- **Project**: Home Affairs Division, Public Administration & Disaster Management — Sri Lanka WordPress Theme
- **Type**: WordPress theme converted from static HTML templates
- **Root**: `C:\xampp\htdocs\moha\wp-content\themes\homeaffairs-theme`
- **Local install**: XAMPP WordPress 7.0.7 multisite — `http://localhost/moha/` (root), `/moha/en/` (English, blog ID 4, prefix `wp_4_`), `/moha/si/` (Sinhala), `/moha/ta/` (Tamil). DB: `mohadb`, default prefix `wp_`
- **Text Domain**: `homeaffairs`
- **Color Scheme**: Maroon + Gold (see full token list in §Colors below)
- **No green brand colors** (`#43c000` or green utilities as brand styling). The only green in the theme is semantic `emerald` status styling (Active/Available badges).

## Tech Stack

| Technology | Version | Usage |
|---|---|---|
| PHP | 8.0+ | WordPress templates, theme setup, enqueue |
| SCSS (dart-sass) | ^1.77.8 | Custom styles; compile via `npm run build:css` |
| Tailwind CSS | 3.4.x (Play-CDN runtime build) | Utility classes — **runtime**, vendored at `assets/css/lib/tailwind.min.js`; config is inline JS, not a config file |
| Font Awesome 6 | 6.5.1 | Icons; use `fas` prefix |
| jQuery | 3.7.1 | DOM manipulation, sliders, accordion, ticker |
| GLightbox | 3.3.0 | Lightbox galleries |
| Carbon Fields | ^3.6 | Custom fields framework |

## File Locations

- **PHP templates**: `*.php` in theme root (header.php, footer.php, home.php, page.php, single.php, archive.php, search.php, category.php, tag.php, singular.php, attachment.php, 404.php, comments.php, sidebar.php, index.php, functions.php)
- **SCSS source**: `assets/scss/` (**31 partials** + `style.scss` entry = 32 SCSS files)
- **Compiled CSS**: `assets/css/style.css` (compressed, no sourcemap — never edit directly)
- **JavaScript**: `assets/js/main.js` (jQuery wrapped in `jQuery(function ($) { })`)
- **Library assets**: `assets/js/lib/` and `assets/css/lib/`
- **Template parts**: `template-parts/` (page-banner, content-*, footer-*)
- **Custom page templates**: `page-templates/` — **35 files, all named `template-{slug}.php`** (renamed from the old `page-*.php` convention). Files: `template-1905`, `template-banglow-booking`, `template-banglow-colombo`, `template-banglow-gampaha`, `template-bid-documents`, `template-circulars`, `template-contact-us`, `template-district-secretariats`, `template-division-administration`, `template-divisional-secretariats`, `template-divisions`, `template-e-forms`, `template-exam-results`, `template-full-width`, `template-governance-structure`, `template-government-calendar`, `template-grama-niladhari`, `template-history`, `template-home`, `template-institutions`, `template-landing`, `template-media-center`, `template-national-symbols`, `template-news-events`, `template-news`, `template-online-services`, `template-procurements`, `template-publications`, `template-rti`, `template-scholarships`, `template-services`, `template-special-notices`, `template-transfer-procedures`, `template-vacancies`, `template-who-we-are` (all `.php`)
- **Theme functions**: `inc/` (enqueue.php, setup.php, helpers.php, widgets.php, menu-icons.php, walkers.php, plugins.php, theme-options.php, fa-icons.php, fa-brands.php)
- **Documentation**: `doc/` — `COLOR_GUIDE.md`, `COLOR_GUIDE.html`, `COLOR_PALETTE_TOOL.html` (interactive palette generator), `WordPress_Multisite_Migration_Guide-Bilingual.pdf`

## Colors

Design tokens are defined in **three places that must stay in sync**:

1. **Inline Tailwind config** — `header.php` line 11 AND `page-templates/template-landing.php` line 20 (there is **no** `tailwind.config.js`)
2. **SCSS variables** — `assets/scss/_variables.scss`
3. **CSS custom properties** — `:root` block in `assets/scss/_base.scss` (compiled into `style.css`)

| Token | Hex | Utility classes |
|---|---|---|
| `primary` | `#591521` | `bg-primary`, `text-primary`, `border-primary` |
| `primary-dark` | `#4b121c` | `bg-primary-dark` (hover, hero) |
| `primary-darker` | `#3b0e16` | `bg-primary-darker`, `text-primary-darker` (footer, borders) |
| `primary-light` | `#801e2f` | `bg-primary-light` (gradients; `steel` alias) |
| `secondary` | `#dfa21f` | `bg-secondary`, `text-secondary`, `border-secondary` |
| `secondary-light` | `#e7b750` | `bg-secondary-light`, `text-secondary-light` (topbar, badges) |
| `secondary-dark` | `#b78519` | `bg-secondary-dark`, `hover:bg-secondary-dark` |
| `bg-dark` | `#441019` | `bg-bg-dark`, `text-bg-dark` (nav, drawer) |
| `warm-white` | `#fff5f0` | `bg-warm-white` (page/section bg) |
| `maroon` | `#54141f` | `bg-maroon` etc. |
| `maroon-bright` | `#731b2b` | `bg-maroon-bright` |
| `maroon-deep` | `#3e0f17` | `bg-maroon-deep` |
| `maroon-black` | `#300b12` | `bg-maroon-black` |
| `gold-deep` | `#c9921c` | `bg-gold-deep` |
| `gold-bright` | `#e5b347` | `bg-gold-bright` |
| `gold-dark` | `#986e15` | `bg-gold-dark` |
| `steel` | `#801e2f` | alias of `primary-light` |

**Critical rules:**
- **Brand palette is maroon/gold only.** `steel` is a legacy alias of `primary-light` (`#801e2f`), not a blue token — never reintroduce navy (`#0A1931`) or old steel-blue colors.
- Semantic accents (`red`/`amber`/`emerald`/`blue`/`purple`) are limited to status, alert, category and file-type indicators; do not use them as brand colors.
- Hyphenated keys in the inline config **must be quoted**: `"primary-dark"` — unquoted keys throw `Uncaught SyntaxError: Unexpected token '-'` and disable ALL custom colors.
- Changing a color = update all three layers + recompile SCSS (`npm run build:css`) + hard-refresh (Tailwind runtime re-reads config on load).
- Full re-theme procedure and the interactive generator: `doc/COLOR_GUIDE.md` (sections 8 & 8B) and `doc/COLOR_PALETTE_TOOL.html`.
- `template-landing.php` is a **standalone `<html>` document** (does not use `get_header()`) — it carries its **own copy** of the Tailwind config and its own `<style>` block. Always update it too.

## Key Coding Rules

### PHP / WordPress
- All PHP files start with `<?php defined( 'ABSPATH' ) || exit;`
- All user-facing strings use translation functions: `esc_html__()`, `esc_attr__()`, `_e()`, `esc_url()`
- Text domain: `homeaffairs`
- jQuery enqueued via `wp_enqueue_script` (not hardcoded in header), with `jquery` dependency
- Footer scripts enqueued with `true` as 5th parameter (in footer)
- All output escaped appropriately
- `ha_pagination()` for post listing pagination; `wp_link_pages()` for multi-page content

### Menu Walkers
6 walkers in `inc/walkers.php`:

| Walker | Location | Icon Rules |
|---|---|---|
| `HA_Nav_Walker` | `menu-primary` (desktop nav) | Level 0: no icons, `fa-chevron-down` if children. Levels 1-3: user icon if set |
| `HA_Mobile_Walker` | `menu-primary` (mobile accordion) | Level 0: user icon if set, `fa-chevron-down` if children. Levels 1-3: structural `fa-chevron-right` only |
| `HA_Topbar_Walker` | `menu-topbar` | All levels: user icon if set. Top-level uses `text-[9px] sm:text-[10px]`, dropdown uses `w-4 text-secondary` |
| `HA_Quicklinks_Walker` | `menu-mobile` (secondary panel) | Level 0: user icon if set, `fa-chevron-down` if children. Level 1: structural `fa-chevron-right` |
| `HA_Footer_Walker` | `menu-footer` | Structural `fa-chevron-right` only (no user icons). Supports `target="_blank"` via menu item setting |
| `HA_Copyright_Walker` | `menu-copyright` | No icons (plain text). Dot separators via `walk()` override |

- No hardcoded fallback HTML — all menus use `fallback_cb => '__return_false'`
- `wp_nav_menu()` calls use `items_wrap => '%3$s'` and `container => false` for walkers that output raw `<div>`/`<a>`/`<button>` without `<ul>`/`<li>`
- `HA_Copyright_Walker` uses `items_wrap => '%3$s'` to suppress `<ul>`; separator logic tracks item count via `walk()` override
- Menu item icons via `inc/menu-icons.php` — visual icon picker modal with all 1,837 FA 6.5.1 free icons. Correct style prefix (`fab` for brands, `fas` for solid). Modal JS rendered in `admin_footer-nav-menus.php` (after DOM exists), uses `keyup` direct binding for search (not delegation). Search matches by label name only. Stores full class (e.g. `fab fa-joomla`) in `_menu_item_icon` post meta. Preview shows correct icon style for both brands and solid.
- Backward compatible via `ha_icon_class()` in `inc/walkers.php` — `preg_match('/^(fas|far|fab)\s/', $icon)` detects stored full class; `str_starts_with($icon, 'fa-')` handles old format; defaults to `'fas fa-' . $icon` for bare names
- Brand icons from `inc/fa-brands.php` (519 brands, generated from FA `brands.min.css`)
- Solid/regular icons from `inc/fa-icons.php` (1,837 deduplicated, generated from FA `_variables.scss`)
- `ha_get_brand_icons()` in `menu-icons.php` returns brand icon list for picker rendering

### SCSS/CSS
- Never edit `assets/css/style.css` directly — always edit `assets/scss/` partials
- After every SCSS change, run `npm run build:css`
- Slide backgrounds use opacity transitions (`opacity: 0/1`), NOT display toggles
- Page loader `.hidden` uses `!important` to override CSS animation fallback
- Color utility classes in SCSS use tokens: `.text-secondary`, `.bg-secondary`, `.border-secondary` (old `.text-gold`/`.bg-gold` classes exist only in legacy `template-who-we-are.php`)
- No green brand styling (`#43c000` or `-green-` utilities as brand colors). Semantic status accents (red/amber/emerald/blue/purple) are allowed only for alerts, statuses, categories and file-type icons.
- `ha-cta-pulse` (Circuit Booking button blink/wave) is defined in `style.css` — gold/primary rings via `rgba(128,0,32,…)`

### JavaScript
- Wrap in `jQuery(function ($) { ... })` — NOT `$(document).ready()`
- No `defer` on main.js — script tag at end of `<body>`
- Tab toggles use `border-secondary`/`text-secondary` classes
- Hero slider auto-advances every 5500ms, resets on interaction
- News ticker uses `requestAnimationFrame` at 0.35px/frame
- Tab panels (e.g. `template-governance-structure.php`) are controlled by `.gov-tab-panel.active` in `style.css` — toggling **both** `hidden` and `active` classes is required for panels to switch

### Encoding
- All files must be UTF-8 without BOM
- Never convert native Unicode characters (Sinhala, Tamil, em dashes, bullets, ellipsis) to HTML entities

## Build Command
```bash
npm run build:css     # sass assets/scss/style.scss assets/css/style.css --style compressed --no-source-map
npm run watch:css     # sass --watch assets/scss/style.scss assets/css/style.css --style compressed --no-source-map
```
