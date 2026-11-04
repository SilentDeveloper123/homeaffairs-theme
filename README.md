# Home Affairs Theme — Home Affairs Division, Sri Lanka

WordPress theme for the **Home Affairs Division**. Converted from the static MOHA HTML template set. Maroon/gold color scheme.

- **Root**: `C:\xampp\htdocs\moha\wp-content\themes\homeaffairs-theme`
- **Live**: `http://localhost/moha/` — multisite (root `/moha/`, `/moha/en/` EN, `/moha/si/` SI, `/moha/ta/` TA; DB `mohadb`)
- **Text domain**: `homeaffairs`

## Project Structure

```
homeaffairs-theme/
├── style.css                  # Theme header (WP required)
├── functions.php              # Carbon Fields boot, inc/ requires
├── header.php                 # Topbar, nav, mobile menu, ticker, page loader (+ inline Tailwind config)
├── footer.php                 # 4-column footer, copyright bar
├── index.php                  # Ultimate fallback
├── home.php                   # Blog posts index (cards with featured image + category badge)
├── page.php                   # Default page with sidebar
├── single.php                 # Single post
├── archive.php                # Archive listing
├── search.php                 # Search results
├── category.php               # Category archive
├── tag.php                    # Tag archive
├── singular.php               # Singular post (stripped)
├── attachment.php             # Image attachment
├── 404.php                    # 404 error
├── comments.php               # Custom comment list + form
├── sidebar.php                # Widgetized sidebar
├── inc/
│   ├── setup.php              # Theme support, 5 nav menu locations
│   ├── theme-options.php      # Carbon Fields (9 tabs, bidirectional sync, export/import)
│   ├── enqueue.php            # Assets (local — no CDN at runtime)
│   ├── widgets.php            # 5 sidebar/widget areas
│   ├── helpers.php            # Breadcrumbs, pagination, subtitle
│   ├── menu-icons.php         # FA icon picker modal (WP Admin nav menus)
│   ├── fa-icons.php           # 1,837 FA 6.5.1 free icons array
│   ├── fa-brands.php          # 519 FA 6.5.1 brand icon names
│   ├── walkers.php            # 6 menu walkers + ha_icon_class()
│   └── plugins.php            # TGM plugin activation
├── template-parts/
│   ├── page-banner.php        # Page header with breadcrumbs
│   ├── content-*.php          # Content display (archive, single, page, search, none)
│   └── footer-*.php           # Footer column fallbacks (about, links, inquiry, find-us, copyright)
├── page-templates/            # 35 templates — all named template-{slug}.php
│   ├── template-home.php      # Home Page template (hero, stats, services, etc.)
│   ├── template-full-width.php# Full Width Page (no sidebar)
│   ├── template-landing.php   # Landing Page (standalone <html>, own Tailwind config)
│   └── … (32 more: 1905, banglow-booking, banglow-colombo, banglow-gampaha,
│        bid-documents, circulars, contact-us, district-secretariats,
│        division-administration, divisional-secretariats, divisions, e-forms,
│        exam-results, governance-structure, government-calendar, grama-niladhari,
│        history, institutions, media-center, national-symbols, news-events, news,
│        online-services, procurements, publications, rti, scholarships, services,
│        special-notices, transfer-procedures, vacancies, who-we-are)
├── doc/                       # Documentation
│   ├── COLOR_GUIDE.md         # Color system guide (markdown)
│   ├── COLOR_GUIDE.html       # Color system guide (styled HTML)
│   ├── COLOR_PALETTE_TOOL.html# Interactive palette generator + live preview + copy-ready code
│   └── WordPress_Multisite_Migration_Guide-Bilingual.pdf
├── assets/
│   ├── scss/                  # 31 SCSS partials + style.scss entry
│   ├── css/                   # style.css (compiled), fontawesome-all.min.css, inter-font.css, lib/ (tailwind.min.js)
│   ├── js/                    # main.js (identical logic to HTML templates), lib/
│   ├── fonts/                 # Inter self-hosted WOFF2 subsets
│   ├── webfonts/              # Font Awesome 6 WOFF2/TTF
│   └── images/                # hero-bg, landing-bg, governance/ portraits, org-chart.png
├── languages/                 # .pot translation file
├── vendor/                    # Carbon Fields (Composer)
├── classes/                   # TGM Plugin Activation class
├── package.json               # SCSS & Tailwind CLI build tooling
└── README.md
```

## Setup

Follow these steps when setting up the theme on a new local or staging environment:

### 1. Download Ignored Media Assets
Because image assets (banners, sliders, gallery, governance portraits, district images) are large, they are excluded from Git to keep repository operations fast.

- 📥 **Download Assets**: [Home Affairs Theme Assets (Google Drive)](https://drive.google.com/drive/folders/1m-JVmrvxQVkqPbjRB2Ri-FrD3JMO7hjN) (includes `assets-images.zip`)
- Place/extract the downloaded folders into `assets/images/`:
  ```
  assets/images/
  ├── banner/
  ├── districts/
  ├── gallery/
  ├── governance/
  ├── main-slider/
  ├── news/
  ├── staff/
  └── ... (logos, emblems, backgrounds)
  ```

### 2. Install Dependencies & Build
```bash
# A. Install PHP dependencies (Carbon Fields)
composer install

# B. Install Node dev dependencies (Sass, Tailwind CLI)
npm install

# C. Compile CSS (SCSS + Tailwind)
npm run build
# Or individually: npm run build:css && npm run build:tailwind
```

### 3. WordPress Configuration
1. Activate theme in **WP Admin → Appearance → Themes**.
2. Assign menus under **Appearance → Menus** (5 locations):
   - `menu-primary` | `menu-topbar` | `menu-mobile` | `menu-footer` | `menu-copyright`
3. Configure site identity and settings under **Appearance → Theme Options**.

---

## Git Ignored Files & Assets Reference

The following files and directories are ignored in `.gitignore`:

| Ignored Path | Purpose | How to Obtain / Restore |
|---|---|---|
| `assets/images/` | Theme images, banners, staff portraits, and district graphics | Download from [Google Drive](https://drive.google.com/drive/folders/1m-JVmrvxQVkqPbjRB2Ri-FrD3JMO7hjN) and place in `assets/images/` |
| `vendor/` | PHP libraries (Carbon Fields) | Run `composer install` |
| `node_modules/` | Front-end build tools (Sass, Tailwind CSS) | Run `npm install` |
| `composer.lock` | Composer lockfile | Managed locally |
| `*.map` | CSS source maps | Generated during development builds |
| `.vscode/`, `.idea/` | Local code editor configurations | Auto-generated by your IDE |
| `.DS_Store`, `Thumbs.db` | Operating system cache files | Ignored automatically |

## Git & Branching Workflow

This repository uses a two-tier branching model (`main` & `dev`):

- **`main`**: Production-ready code only. Merged only after testing and review.
- **`dev`**: Active development branch. All feature branches branch from here.

### Developer Step-by-Step Guide:

1. **Switch to `dev` and pull latest changes**:
   ```bash
   git checkout dev
   git pull origin dev
   ```

2. **Create your own local branch**:
   ```bash
   git checkout -b feature/your-task-name
   # Examples:
   # git checkout -b feature/slider-update
   # git checkout -b fix/contact-form
   ```

3. **Commit your work**:
   ```bash
   git add .
   git commit -m "feat: describe your change"
   ```

4. **Sync with latest `dev` before pushing**:
   ```bash
   git fetch origin
   git merge origin/dev
   ```

5. **Push and create a Pull Request to `dev`**:
   ```bash
   git push -u origin feature/your-task-name
   ```
   - On GitHub, create a Pull Request targeting **`base: dev`**.
   - Once reviewed, merge it into `dev`.

6. **Production Release (`dev` → `main`)**:
   - After reviewing the changes on `dev`, merge `dev` into `main`:
   ```bash
   git checkout main
   git pull origin main
   git merge --no-ff dev -m "release: merge dev into main"
   git push origin main
   ```

## Dependencies

| Dependency | Type | Source |
|---|---|---|
| WordPress 6.4+ (multisite; tested on 7.0.7) | Runtime | — |
| Carbon Fields ^3.6 | Runtime | Composer |
| TGM Plugin Activation | Runtime | Bundled (`classes/`) |
| Tailwind CSS 3.4.x | Frontend | **Play-CDN runtime build** (`assets/css/lib/tailwind.min.js`) — config is **inline JS** in `header.php` & `template-landing.php`, not a config file |
| Font Awesome 6.5.1 | Frontend | Local (`assets/css/fontawesome-all.min.css`) |
| jQuery 3.7.1 | Frontend | Local (`assets/js/lib/jquery-3.7.1.min.js`) |
| GLightbox 3.3.0 | Frontend | Local (`assets/js/lib/glightbox.min.js`) |
| Inter font | Frontend | Self-hosted (`assets/fonts/*.woff2` + Google Fonts fallback link) |
| Sass ^1.77.8 | Dev | npm |

**Required plugin**: Multisite Language Switcher (via TGM)
**Recommended**: Classic Editor, Contact Form 7

## Theme Options (Appearance → Theme Options)

8-tab Carbon Fields admin page:

| Tab | Fields | Sync |
|---|---|---|
| **Site Identity** | Site Title, Tagline, Site Icon (image) | Bidirectional ↔ Settings > General & Customizer |
| **Branding & Header** | Ministry Name, Division Name, National Emblem (Header & Footer), Gov.lk Gateway URL/Logo, Search Placeholder | Header & Footer branding + search |
| **Content** | Copyright Text, Footer Menu Title, Contact Form Title, Map Column Title | — |
| **Contact** | Address, Telephone, Email, Fax | — |
| **Social Media** | Facebook, X (Twitter), YouTube URLs | — |
| **Map** | Google Maps Embed URL | Live iframe preview |
| **Header CTA** | Button Text (70%), Button Icon (text + datalist + live FA preview, 30%), Button Link | 1,837 FA icons; branding row desktop, primary row mobile |
| **Tools** | Export/Import JSON | — |

## Menu Locations & Walkers

| Location | Walker(s) | Depth |
|---|---|---|
| `menu-primary` | `HA_Nav_Walker` (desktop) / `HA_Mobile_Walker` (mobile) | 3 |
| `menu-topbar` | `HA_Topbar_Walker` | 2 |
| `menu-mobile` | `HA_Quicklinks_Walker` | 2 |
| `menu-footer` | `HA_Footer_Walker` | 1 |
| `menu-copyright` | `HA_Copyright_Walker` | 1 |

All walkers use `fallback_cb => '__return_false'` — no hardcoded fallback HTML.

## Colors — Maroon + Gold (17 tokens)

Defined in **three layers that must stay in sync**:

1. **Inline Tailwind config** — `header.php:11` and `page-templates/template-landing.php:20`. No `tailwind.config.js` file. ⚠️ Hyphenated keys must be quoted (`"primary-dark"`), otherwise a JS SyntaxError kills all custom colors.
2. **SCSS variables** — `assets/scss/_variables.scss`
3. **CSS custom properties** — `:root` in `assets/scss/_base.scss`

| Token | Hex | Token | Hex |
|---|---|---|---|
| `primary` | `#591521` | `maroon` | `#54141f` |
| `primary-dark` | `#4b121c` | `maroon-bright` | `#731b2b` |
| `primary-darker` | `#3b0e16` | `maroon-deep` | `#3e0f17` |
| `primary-light` / `steel` | `#801e2f` | `maroon-black` | `#300b12` |
| `secondary` | `#dfa21f` | `gold-deep` | `#c9921c` |
| `secondary-light` | `#e7b750` | `gold-bright` | `#e5b347` |
| `secondary-dark` | `#b78519` | `gold-dark` | `#986e15` |
| `bg-dark` | `#441019` | `warm-white` | `#fff5f0` |

**Palette rule:** maroon/gold is the brand palette. `steel` is a legacy alias of `primary-light` (`#801e2f`) — not a blue token; no navy (`#0A1931`) remains. Semantic red/amber/emerald/blue/purple accents are limited to status, alert, category and file-type indicators, never brand styling.

**Documentation**: full guide, examples, re-theme procedures and the interactive palette tool live in **`doc/`** — start with `doc/COLOR_GUIDE.md` (or `.html`), and use `doc/COLOR_PALETTE_TOOL.html` to generate new palettes with copy-ready Tailwind + SCSS code.

Also note: `template-landing.php` is a standalone document with its **own** inline Tailwind config and `<style>` block — keep it in sync with `header.php` when changing colors.

## Template Hierarchy

| File | Usage |
|---|---|
| `header.php` | Topbar (phone/email/Gov.lk/language), sticky branding row (emblem + ministry/division + desktop search/CTA), compact primary nav + mobile accordion/search overlay, floating quicklinks, page loader |
| `footer.php` | 4-column footer (widgets or fallback template parts) + copyright bar |
| `home.php` | Blog posts index (2-col: articles + sidebar; featured image + category badge on cards) |
| `page.php` | Static pages with sidebar |
| `single.php` | Single post with sidebar |
| `archive.php` | Archive listing (3-col grid, filters, pagination) |
| `category.php` | Category archive |
| `tag.php` | Tag archive |
| `search.php` | Search results |
| `singular.php` | Stripped singular (no image/tags/author/comments) |
| `attachment.php` | Image attachment with GLightbox |
| `404.php` | 404 error page |
| `page-templates/template-home.php` | Home Page (hero, stats, services, about, steps, news, CTA, gallery) |
| `page-templates/template-full-width.php` | Full width with banner + content |
| `page-templates/template-landing.php` | Landing page |

## Key Rules

- `assets/css/style.css` is a **compiled artifact** — always edit `assets/scss/*.scss`
- No green brand styling (`#43c000` or green utilities as brand colors); emerald is reserved for semantic "Active/Available" status
- Slide backgrounds use opacity transitions, not display toggles
- All jQuery wrapped in `jQuery(function ($) { })`
- All user-facing strings escaped: `esc_html__()`, `esc_attr__()`, `esc_url()`
- Carbon Fields options use `_` prefix; read via `carbon_get_theme_option()`
- Theme options admin JS in `admin_footer` with `setTimeout(200)` to avoid React DOM conflicts
- Text domain: `homeaffairs`
- All page templates follow `template-{slug}.php` naming (new ones must too)
- Tab panels key off `.gov-tab-panel.active` in CSS — JS must toggle both `hidden` and `active`

## Adding a New Page Template

Create a file in `page-templates/` named `template-{slug}.php` with this header:

```php
<?php
/**
 * Template Name: Your Template Name
 */
defined( 'ABSPATH' ) || exit;
get_header();
get_template_part( 'template-parts/page-banner' );
// your custom layout here
get_footer();
```

It will appear in the WP Admin Page Attributes → Template dropdown automatically.