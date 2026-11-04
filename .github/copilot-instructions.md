# GitHub Copilot Instructions — Home Affairs WordPress Theme

## Project Overview
WordPress theme for the Ministry of Home Affairs, Public Administration & Disaster Management — Sri Lanka. Maroon/gold brand palette only; semantic status accents (red/amber/emerald/blue/purple) are allowed for alerts, statuses, categories and file-type icons. No green brand styling.
- **Root**: `C:\xampp\htdocs\moha\wp-content\themes\homeaffairs-theme` (XAMPP WordPress 7.0.7 multisite, DB `mohadb`, English subsite = `/moha/en/`, prefix `wp_4_`)
- **Text domain**: `homeaffairs`

## Theme Structure
- **PHP templates** in theme root: `header.php`, `footer.php`, `home.php`, `page.php`, `single.php`, `archive.php`, `search.php`, `category.php`, `tag.php`, `singular.php`, `attachment.php`, `404.php`, `comments.php`, `sidebar.php`, `index.php`, `functions.php`
- **SCSS source**: `assets/scss/` (**31 partials** + `style.scss` entry, compiled to `assets/css/style.css`)
- **JavaScript**: `assets/js/main.js` (jQuery wrapped in `jQuery(function ($) { })`)
- **Theme functions**: `inc/` — enqueue.php, setup.php, helpers.php, widgets.php, menu-icons.php, walkers.php, plugins.php, theme-options.php, fa-icons.php, fa-brands.php
- **Template parts**: `template-parts/` — page-banner, content-*, footer-*
- **Page templates**: `page-templates/` — **35 files, all `template-{slug}.php`**: template-1905.php, template-banglow-booking.php, template-banglow-colombo.php, template-banglow-gampaha.php, template-bid-documents.php, template-circulars.php, template-contact-us.php, template-district-secretariats.php, template-division-administration.php, template-divisional-secretariats.php, template-divisions.php, template-e-forms.php, template-exam-results.php, template-full-width.php, template-governance-structure.php, template-government-calendar.php, template-grama-niladhari.php, template-history.php, template-home.php, template-institutions.php, template-landing.php, template-media-center.php, template-national-symbols.php, template-news-events.php, template-news.php, template-online-services.php, template-procurements.php, template-publications.php, template-rti.php, template-scholarships.php, template-services.php, template-special-notices.php, template-transfer-procedures.php, template-vacancies.php, template-who-we-are.php
- **Documentation**: `doc/` — COLOR_GUIDE.md/html, COLOR_PALETTE_TOOL.html (interactive), migration PDF

## Colors (Maroon + Gold, 17 tokens)

Defined in 3 places that must stay in sync:
1. **Inline Tailwind config** — `header.php:11` AND `page-templates/template-landing.php:20` (no `tailwind.config.js`; keys with hyphens MUST be quoted, e.g. `"primary-dark"`)
2. **SCSS variables** — `assets/scss/_variables.scss`
3. **CSS custom properties** — `:root` in `assets/scss/_base.scss`

| Token | Hex | Tailwind classes |
|---|---|---|
| primary | `#591521` | `bg/text/border-primary` |
| primary-dark | `#4b121c` | `bg-primary-dark` |
| primary-darker | `#3b0e16` | `bg/text-primary-darker` |
| primary-light / steel | `#801e2f` | `bg-primary-light`, `bg-steel` |
| secondary | `#dfa21f` | `bg/text/border-secondary` |
| secondary-light | `#e7b750` | `bg/text-secondary-light` |
| secondary-dark | `#b78519` | `bg-secondary-dark` |
| bg-dark | `#441019` | `bg-bg-dark` |
| warm-white | `#fff5f0` | `bg-warm-white` |
| maroon | `#54141f` | `bg-maroon` |
| maroon-bright | `#731b2b` | `bg-maroon-bright` |
| maroon-deep | `#3e0f17` | `bg-maroon-deep` |
| maroon-black | `#300b12` | `bg-maroon-black` |
| gold-deep | `#c9921c` | `bg-gold-deep` |
| gold-bright | `#e5b347` | `bg-gold-bright` |
| gold-dark | `#986e15` | `bg-gold-dark` |

**Palette rule:** maroon/gold is the brand palette. `steel` is a legacy alias of `primary-light` (`#801e2f`) — never reintroduce navy (`#0A1931`). Red/amber/emerald/blue/purple are permitted only for semantic status, alert, category and file-type indicators.

Changing a color = update all 3 layers + `npm run build:css` + hard-refresh. Full procedure: `doc/COLOR_GUIDE.md` §8/§8B, generator: `doc/COLOR_PALETTE_TOOL.html`.

## Menu Walkers (6 in `inc/walkers.php`)

| Walker | Location | Icon Rules |
|---|---|---|
| `HA_Nav_Walker` | `menu-primary` (desktop) | Level 0: no icons, `fa-chevron-down` if children. Level 1-3: user icon if set |
| `HA_Mobile_Walker` | `menu-primary` (mobile) | Level 0: user icon if set. Level 1-3: structural `fa-chevron-right` |
| `HA_Topbar_Walker` | `menu-topbar` | User icon at all levels. Top-level: `text-[9px] sm:text-[10px]`. Dropdown: `w-4 text-secondary` |
| `HA_Quicklinks_Walker` | `menu-mobile` | Level 0: user icon if set, `fa-chevron-down` if children. Level 1: structural `fa-chevron-right` |
| `HA_Footer_Walker` | `menu-footer` | Structural `fa-chevron-right`. Supports `target="_blank"` |
| `HA_Copyright_Walker` | `menu-copyright` | No icons. Dot separators via `walk()` override |

- No hardcoded fallbacks — all menus use `fallback_cb => '__return_false'`
- Icons via `inc/menu-icons.php` — visual icon picker modal, all 1,837 FA 6.5.1 free icons, searchable grid, stores full class in `_menu_item_icon`
- All walkers use `ha_icon_class($item->icon)` for rendering (backward compatible)
- Use `items_wrap => '%3$s'` + `container => false` with non-`<li>` walkers

## Template Hierarchy

| Template | Purpose |
|---|---|
| `home.php` | Blog posts index (2-col: articles + sidebar; cards include featured image + category badge) |
| `page.php` | Static pages with sidebar |
| `single.php` | Single post with sidebar |
| `archive.php` | Archive listing with year/month filters + pagination |
| `category.php` | Category archive |
| `tag.php` | Tag archive |
| `search.php` | Search results |
| `singular.php` | Stripped singular (no image/tags/author/comments) |
| `attachment.php` | Image attachment with GLightbox |
| `comments.php` | Custom comment list + raw HTML form |
| `page-templates/template-home.php` | Home Page (full hero/stats/services/etc.) |
| `page-templates/template-full-width.php` | Full width page (no sidebar) |
| `page-templates/template-landing.php` | Landing Page (standalone `<html>`, own tailwind config + style block) |

## Sync Architecture
- Theme Options → Settings > General & Customizer (bidirectional)
- Logo dark → Customizer `custom_logo` theme mod (bidirectional)
- Hooks: `carbon_fields_theme_options_container_saved`, `update_option_*`, `customize_save_after`
- All syncs use `$current !== $new_value` guards

## Coding Standards

### PHP
- Start all files with `<?php defined( 'ABSPATH' ) || exit;`
- Text domain: `homeaffairs`
- Use `esc_html__()`, `esc_attr__()`, `_e()`, `esc_url()` for all output

### SCSS
- Edit `assets/scss/*.scss`, never `assets/css/style.css`
- Run `npm run build:css` after SCSS changes
- Use the token palette above (primary/secondary families)
- Slide-bg uses opacity transition, not display toggle
- No green hex values anywhere

### JavaScript
- Use `jQuery(function ($) { ... })` wrapper
- No `defer` on main.js
- Tab buttons use `border-secondary`/`text-secondary` classes
- Hero slider: 5500ms interval, reset on interaction
- Ticker: `requestAnimationFrame` at 0.35px/frame
- Tab panels: toggle both `hidden` and `active` classes (CSS keys off `.gov-tab-panel.active`)

## Build
```bash
npm run build:css     # Compile SCSS to compressed CSS
npm run watch:css     # Watch SCSS for changes
composer install      # Install Carbon Fields
```