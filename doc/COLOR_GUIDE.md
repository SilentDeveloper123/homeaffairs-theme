# Home Affairs Theme — Color System Guide

Comprehensive reference for the maroon + gold color design system used by the **Home Affairs** WordPress theme (`homeaffairs-theme`).

- Version: 1.0
- Last updated: 2026-10-26

---

## Table of Contents

1. [Design System Overview](#1-design-system-overview)
2. [Color Palette Reference](#2-color-palette-reference)
3. [Where Colors Are Defined](#3-where-colors-are-defined)
4. [Utility Class Usage (bg-, text-, border-, gradient-)](#4-utility-class-usage)
5. [CSS Variables (var(--...))](#5-css-variables)
6. [Opacity Modifiers & Tints](#6-opacity-modifiers--tints)
7. [Examples](#7-examples)
8. [How to Change Theme Colors Manually (Primary & Secondary)](#8-how-to-change-theme-colors-manually)
9. [Changing the Total Color Theme (Full Re-theme)](#8b-changing-the-total-color-theme-full-re-theme)
10. [Custom Color Palette Tool (Testing)](#custom-color-palette-tool)
11. [Troubleshooting / Common Pitfalls](#9-troubleshooting--common-pitfalls)

---

## 1. Design System Overview

The theme uses a **two-brand-color system** with extended tint shades:

| Family | Role | Primary Value |
|---|---|---|
| **Primary** | Maroon — main brand, buttons, headings, emphasis | `#591521` |
| **Secondary** | Gold — accents, highlights, hover states, badges | `#dfa21f` |
| **Neutrals** | Warm white backgrounds + Tailwind slate/gray scales | `#fff5f0` |

The palette is exposed in **three layers**, all kept in sync:

1. **Tailwind config** (inline JS) — powers utility classes `bg-primary`, `text-secondary`, etc.
2. **SCSS variables** (`_variables.scss`) — powers the compiled `style.css` and `--color-*` custom properties.
3. **CSS custom properties** (`:root` in `_base.scss`) — used by embedded styles and SCSS rules.

> ⚠️ Because the palette lives in three places, a color change **must be applied in all three** (see [Section 8](#8-how-to-change-theme-colors-manually)).

---

## 2. Color Palette Reference

### Brand Colors

| Token | Tailwind Class Prefix | Hex | Description |
|---|---|---|---|
| `primary` | `bg-primary` / `text-primary` / `border-primary` | `#591521` | Brand maroon (buttons, headings) |
| `primary-dark` | `bg-primary-dark` | `#4b121c` | Darker maroon (hover, hero bg) |
| `primary-darker` | `bg-primary-darker` | `#3b0e16` | Deepest maroon (footer, borders) |
| `primary-light` | `bg-primary-light` | `#801e2f` | Bright maroon (gradients, `steel` alias) |
| `secondary` | `bg-secondary` / `text-secondary` / `border-secondary` | `#dfa21f` | Brand gold (accents, highlights) |
| `secondary-light` | `bg-secondary-light` | `#e7b750` | Pale gold (topbar text, badges) |
| `secondary-dark` | `bg-secondary-dark` | `#b78519` | Muted gold (hover, borders) |

### Extended Maroon / Gold Shades

| Token | Hex | Typical Use |
|---|---|---|
| `maroon` | `#54141f` | Alt maroon for gradients |
| `maroon-bright` | `#731b2b` | Bright accent |
| `maroon-deep` | `#3e0f17` | Deep background |
| `maroon-black` | `#300b12` | Darkest / text-on-dark |
| `gold-deep` | `#c9921c` | Muted gold |
| `gold-bright` | `#e5b347` | Bright gold accent |
| `gold-dark` | `#986e15` | Dark gold (text on light) |
| `bg-dark` | `#441019` | Dark maroon chrome (nav, drawer) |
| `warm-white` | `#fff5f0` | Page/section background |
| `steel` | `#801e2f` | Alias of `primary-light` |

### Standard Tailwind Palettes Used

- `white` — `bg-white`, `text-white` (with opacity steps `/5 /10 /15 /20 /25 /30 /40 /60 /70 /80 /90`)
- `black` — `bg-black/20 /40 /80 /90`
- `slate` — `50 … 950` (body text, muted labels, borders)
- `gray` — `50 … 800` (secondary text, dividers)

### Semantic Accent Colors (status only)

The brand palette is strictly maroon/gold. The following Tailwind accents appear only in semantic contexts — never in navigation, buttons, headings or section backgrounds:

| Accent | Allowed use |
|---|---|
| `red` | Urgent notices, prohibited items, PDF/file actions, validation errors |
| `amber` | Certificates, warnings, caution callouts |
| `emerald` | "Active", "Available" and success status indicators |
| `blue` / `purple` | General-category badges and non-PDF file-type icons |

---

## 3. Where Colors Are Defined

All definitions live inside the theme root: `wp-content/themes/homeaffairs-theme/`

### 3.1 Tailwind Config (inline JS)

There is **no `tailwind.config.js` file**. The config is an inline `<script>` in **two** places:

1. `header.php` — line 11 (used by every page except the landing page)
2. `page-templates/template-landing.php` — line 20 (standalone landing page)

```js
tailwind.config={theme:{extend:{colors:{
  "primary":"#591521",
  "primary-dark":"#4b121c",
  "primary-darker":"#3b0e16",
  "primary-light":"#801e2f",
  "secondary":"#dfa21f",
  "secondary-light":"#e7b750",
  "secondary-dark":"#b78519",
  "bg-dark":"#441019",
  "steel":"#801e2f",
  "warm-white":"#fff5f0",
  "maroon":"#54141f",
  "maroon-bright":"#731b2b",
  "maroon-deep":"#3e0f17",
  "maroon-black":"#300b12",
  "gold-deep":"#c9921c",
  "gold-bright":"#e5b347",
  "gold-dark":"#986e15"
}}}}
```

> ⚠️ Keys with hyphens **must be quoted** (`"primary-dark"`). Unquoted keys throw `Uncaught SyntaxError: Unexpected token '-'` and disable all custom colors.

### 3.2 SCSS Variables

`assets/scss/_variables.scss` — base source of truth for SCSS:

```scss
$color-primary:         #591521;
$color-primary-dark:    #4b121c;
$color-primary-darker:  #3b0e16;
$color-primary-light:   #801e2f;

$color-secondary:       #dfa21f;
$color-secondary-light: #e7b750;
$color-secondary-dark:  #b78519;

$color-bg-dark:         #441019;
$bg-warm-white:         #fff5f0;

$color-maroon:          #54141f;
$color-maroon-bright:   #731b2b;
$color-maroon-deep:     #3e0f17;
$color-maroon-black:    #300b12;

$color-gold-deep:       #c9921c;
$color-gold-bright:     #e5b347;
$color-gold-dark:       #986e15;

$steel:                 $color-primary-light;
```

### 3.3 CSS Custom Properties

`assets/scss/_base.scss` — `:root` block (lines 3–40) exposes every SCSS variable as `--color-*`:

```scss
:root {
  --color-primary: #{$color-primary};
  --color-primary-dark: #{$color-primary-dark};
  --color-primary-darker: #{$color-primary-darker};
  --color-primary-light: #{$color-primary-light};

  --color-secondary: #{$color-secondary};
  --color-secondary-light: #{$color-secondary-light};
  --color-secondary-dark: #{$color-secondary-dark};

  --color-bg-dark: #{$color-bg-dark};
  --bg-warm-white: #{$bg-warm-white};
  // ...maroon / gold / tint vars
}
```

### 3.4 Compiled Stylesheet

The compiled output is `assets/css/style.css` (enqueued site-wide). Any SCSS edit requires recompilation (`npx sass assets/scss/style.scss assets/css/style.css`) so the `:root` block and component rules refresh.

---

## 4. Utility Class Usage

Tailwind utilities are generated at runtime by the Play-CDN build (`assets/css/lib/tailwind.min.js`) using the inline config in Section 3.1. Examples:

| Purpose | Classes |
|---|---|
| Background fill | `bg-primary`, `bg-secondary`, `bg-primary-dark`, `bg-warm-white`, `bg-bg-dark` |
| Text color | `text-primary`, `text-secondary`, `text-primary-darker`, `text-secondary-light` |
| Border | `border-primary`, `border-secondary`, `border-primary-darker/15`, `border-secondary/30` |
| Dividers | `divide-white/10` |
| Gradient stops | `from-primary`, `to-secondary`, `via-primary/60` |
| Hover state | `hover:bg-primary-dark`, `hover:border-secondary`, `group-hover:text-secondary` |
| Opacity variants | `bg-primary/10`, `text-secondary/20`, `border-secondary/40`, `from-secondary/10` |

Gradient example used on the hero:

```html
<div class="bg-gradient-to-br from-primary-darker to-slate-800">…</div>
```

---

## 5. CSS Variables

Embedded `<style>` blocks and SCSS use the custom properties directly:

```css
/* header.php topbar */
background-color: var(--color-primary-darker) !important;
border-top-color: var(--color-secondary) !important;

/* template-landing.php language buttons */
background: var(--color-secondary);
color: var(--color-bg-dark);
border-color: var(--color-secondary-dark);
```

Available variables: `--color-primary`, `--color-primary-dark`, `--color-primary-darker`, `--color-primary-light`, `--color-secondary`, `--color-secondary-light`, `--color-secondary-dark`, `--color-bg-dark`, `--bg-warm-white`, `--steel`, `--color-maroon`, `--color-maroon-bright`, `--color-maroon-deep`, `--color-maroon-black`, `--color-gold-deep`, `--color-gold-bright`, `--color-gold-dark`, plus the `-tint-*` variants.

---

## 6. Opacity Modifiers & Tints

### Tailwind slash syntax

```html
<button class="bg-primary/10 text-secondary/20 border-secondary/30">…</button>
```

### SCSS derived tints (`_variables.scss` lines 19–38)

| Variable | Value |
|---|---|
| `$color-secondary-tint` | `rgba(212,175,55,0.08)` |
| `$color-secondary-tint-strong` | `rgba(212,175,55,0.15)` |
| `$color-secondary-tint-light` | `rgba(212,175,55,0.10)` |
| `$color-secondary-tint-med` | `rgba(212,175,55,0.20)` |
| `$color-secondary-tint-deep` | `rgba(212,175,55,0.25)` |
| `$color-secondary-tint-vivid` | `rgba(212,175,55,0.30)` |
| `$color-bg-dark-tint-strong` | `rgba(74,14,23,0.88)` |
| `$color-primary-tint-72` | `rgba(128,0,32,0.72)` |
| `$color-primary-dark-tint-78` | `rgba(88,0,22,0.78)` |
| `$color-maroon-tint-05 … 15` | `rgba(88,17,26,0.05 … 0.15)` |
| `$color-primary-darker-tint-04 … 20` | `rgba(43,8,13,0.04 … 0.20)` |

---

## 7. Examples

### 7.1 Primary button

```html
<a href="/services" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark
   text-white font-bold px-5 py-2.5 rounded-full text-xs shadow-md
   hover:shadow-lg transition-all no-underline">
  <i class="fas fa-arrow-right"></i> Read More
</a>
```

### 7.2 Secondary / gold outline button

```html
<a href="/circulars" class="inline-flex items-center gap-2 border-2 border-secondary
   text-secondary hover:bg-secondary hover:text-primary-darker
   px-5 py-2.5 rounded-lg font-bold text-sm transition-all no-underline">
  Browse Circulars
</a>
```

### 7.3 Section badge (gold pill)

```html
<span class="inline-flex items-center gap-2 bg-secondary/10 text-secondary
     font-bold text-[10px] tracking-[2px] uppercase px-3.5 py-1 rounded-full border border-secondary/30">
  Ministry Governance
</span>
```

### 7.4 Card with warm-white background

```html
<div class="bg-warm-white rounded-2xl border border-primary-darker/15
     shadow-sm p-6 sm:p-8 hover:border-secondary transition-all">
  <h3 class="text-xl font-extrabold text-primary-darker">Card Title</h3>
  <p class="text-sm text-slate-600 mt-2">Body copy…</p>
</div>
```

### 7.5 Gradient band

```html
<section class="bg-gradient-to-r from-primary via-primary/80 to-secondary">
  <div class="max-w-7xl mx-auto px-6 py-16 text-white">…</div>
</section>
```

### 7.6 Embedded style using CSS variables

```html
<div class="topbar" style="background-color: var(--color-primary-darker);
     color: var(--color-secondary-light);">…</div>
```

### 7.7 Pulsing CTA (Circuit Booking)

```html
<a class="ha-cta-pulse bg-primary hover:bg-primary-dark text-white rounded-full …">Book</a>
```

Powered by `assets/css/style.css` rules `.ha-cta-pulse::before/.after` (gold→primary ring `rgba(128,0,32,…)`).

---

## 8. How to Change Theme Colors Manually

> Changing primary/secondary requires editing **three places** (Tailwind config, SCSS variable, and in most cases a recompile). Do them in this order and the whole theme updates consistently.

### Step 1 — Pick your new colors

Example: change primary to **dark blue `#123a6b`** and secondary to **teal `#0f9d8f`**.

### Step 2 — Edit the Tailwind config

Open `header.php` line 11 (and `page-templates/template-landing.php` line 20 if the landing page must match). Keep keys quoted:

```js
tailwind.config={theme:{extend:{colors:{
  "primary":"#123a6b",
  "primary-dark":"#0d2b52",        // darker shade of new primary
  "primary-darker":"#071a33",      // darkest shade
  "primary-light":"#1a4f8c",       // lighter shade
  "secondary":"#0f9d8f",
  "secondary-light":"#aef0e8",     // pale tint
  "secondary-dark":"#0b7268",      // muted shade
  // ...leave maroon/gold shades unless you want to replace them too
}}}}
```

### Step 3 — Edit the SCSS variables

Open `assets/scss/_variables.scss` and update the matching variables (lines 1–7):

```scss
$color-primary:         #123a6b;
$color-primary-dark:    #0d2b52;
$color-primary-darker:  #071a33;
$color-primary-light:   #1a4f8c;

$color-secondary:       #0f9d8f;
$color-secondary-light: #aef0e8;
$color-secondary-dark:  #0b7268;
```

Optional — update the derived tints near the bottom if you want them based on the new colors:

```scss
$color-secondary-tint: rgba($color-secondary, 0.08);
$color-primary-tint-72: rgba($color-primary, 0.72);
```

### Step 4 — Recompile the CSS

From the theme folder:

```powershell
npx sass assets/scss/style.scss assets/css/style.css
```

(or any build step your workflow uses). This regenerates the `:root` block and component styles from the new SCSS variables.

### Step 5 — Check hardcoded uses

Search for the old hex values to catch embedded/legacy styles:

```powershell
rg -i "#591521|#dfa21f" --glob "!node_modules" .
```

Replacements to consider:
- Old primary `#591521` → new primary
- Old secondary `#dfa21f` → new secondary
- Related shades (`#4b121c`, `#b78519`, etc.) in `.php` inline `style="..."` attributes and `template-landing.php` `<style>` block.

### Step 6 — Clear browser cache & verify

1. Hard-refresh (Ctrl+F5) so the runtime Tailwind script re-reads the new config.
2. Check the homepage, topbar, footer, hero, and the Circuit Booking pulse effect.
3. Check a subpage template (e.g. `template-governance-structure.php` tabs) for the new colors.

---

## 8B. Changing the Total Color Theme (Full Re-theme)

Changing just primary/secondary (Section 8) is enough when you want to **re-tint** the existing maroon/gold look. To **fully re-theme** the site (e.g. navy + teal, or a government blue + orange scheme), you must replace the entire token set so the extended maroon/gold shades and warm neutrals stop leaking through in gradients, overlays, the footer, and the landing page.

### Step 1 — Define the new token map

Every token below must get a value. Use the interactive palette tool (`COLOR_PALETTE_TOOL.html`) to auto-generate shades and the exact code blocks.

| Token | Old (maroon/gold) | Example New (blue/teal) | Role |
|---|---|---|---|
| `primary` | `#591521` | `#123a6b` | Brand main |
| `primary-dark` | `#4b121c` | `#0d2b52` | Hover, hero bg |
| `primary-darker` | `#3b0e16` | `#071a33` | Footer, borders |
| `primary-light` | `#801e2f` | `#1a4f8c` | Gradients, `steel` |
| `secondary` | `#dfa21f` | `#0f9d8f` | Accent main |
| `secondary-light` | `#e7b750` | `#aef0e8` | Topbar text, badges |
| `secondary-dark` | `#b78519` | `#0b7268` | Hover, borders |
| `maroon` | `#54141f` | `#0e2a52` | Alt gradient color |
| `maroon-bright` | `#731b2b` | `#1c4a8c` | Bright accent |
| `maroon-deep` | `#3e0f17` | `#051224` | Deep background |
| `maroon-black` | `#300b12` | `#02060f` | Darkest |
| `gold-deep` | `#c9921c` | `#0a6d63` | Muted accent |
| `gold-bright` | `#e5b347` | `#5fd4c5` | Bright accent |
| `gold-dark` | `#986e15` | `#0a4f48` | Accent text on light |
| `bg-dark` | `#441019` | `#0a1c33` | Chrome (nav, drawer) |
| `warm-white` | `#fff5f0` | `#F4F7FB` | Section bg (cool-tinted white) |
| `steel` | `#801e2f` | `#1a4f8c` | Alias = primary-light |

### Step 2 — Update the Tailwind config (both files)

`header.php:11` **and** `page-templates/template-landing.php:20`:

```js
tailwind.config={theme:{extend:{colors:{
  "primary":"#123a6b","primary-dark":"#0d2b52","primary-darker":"#071a33","primary-light":"#1a4f8c",
  "secondary":"#0f9d8f","secondary-light":"#aef0e8","secondary-dark":"#0b7268",
  "bg-dark":"#0a1c33","steel":"#1a4f8c","warm-white":"#F4F7FB",
  "maroon":"#0e2a52","maroon-bright":"#1c4a8c","maroon-deep":"#051224","maroon-black":"#02060f",
  "gold-deep":"#0a6d63","gold-bright":"#5fd4c5","gold-dark":"#0a4f48"
}}}}
```

> Even though the keys keep the names `maroon`/`gold`, they now hold the new theme's shades — no template markup needs to change.

### Step 3 — Update SCSS variables

`assets/scss/_variables.scss` — replace all values (lines 1–16):

```scss
$color-primary:         #123a6b;
$color-primary-dark:    #0d2b52;
$color-primary-darker:  #071a33;
$color-primary-light:   #1a4f8c;

$color-secondary:       #0f9d8f;
$color-secondary-light: #aef0e8;
$color-secondary-dark:  #0b7268;

$color-bg-dark:         #0a1c33;
$bg-warm-white:         #F4F7FB;

$color-maroon:          #0e2a52;
$color-maroon-bright:   #1c4a8c;
$color-maroon-deep:     #051224;
$color-maroon-black:    #02060f;

$color-gold-deep:       #0a6d63;
$color-gold-bright:     #5fd4c5;
$color-gold-dark:       #0a4f48;
```

### Step 4 — Recompile CSS

```powershell
npx sass assets/scss/style.scss assets/css/style.css
```

### Step 5 — Replace hardcoded maroon/gold

Search every PHP template, inline `<style>` and `style="…"` attribute for the **old extended shades** that the palette tool doesn't cover. At minimum:

```powershell
rg -i "#591521|#4b121c|#3b0e16|#801e2f|#dfa21f|#e7b750|#b78519|#54141f|#731b2b|#3e0f17|#300b12|#c9921c|#e5b347|#986e15|#441019|#fff5f0" --glob "!node_modules" .
```

Key spots that hardcode colors and must be re-themed by hand:
- `header.php` topbar & footer inline styles (`var(--color-*)` auto-update — no edit needed).
- `template-landing.php` `<style>` block (language buttons, `.landing-cover` gradient).
- `template-home.php` hero section background `bg-primary-dark` (auto via token) and any inline `style=` attributes.
- `assets/css/style.css` component rules that use literal hex (e.g. `.gov-tab-btn`, `.ha-cta-pulse`).

### Step 6 — Update documentation & verify

1. Update the swatch values in this guide / `COLOR_GUIDE.html` if you keep them as reference.
2. Hard-refresh and audit: topbar, main nav, hero, stats bar, footer, mobile drawer, Circuit Booking pulse, landing page, and one tabbed subpage.
3. Verify color contrast (primary text on secondary, secondary-light text on primary-dark) — the palette tool includes contrast hints.

---

## Custom Color Palette Tool

An interactive tool ships with this guide: **`doc/COLOR_PALETTE_TOOL.html`**. Open it in any modern browser (double-click, or via `http://localhost/moha/wp-content/themes/homeaffairs-theme/doc/COLOR_PALETTE_TOOL.html`).

### What it does

1. **Pick colors** — set a base `primary` and `secondary` (or use presets / random).
2. **Auto-derive shades** — it generates `-dark`, `-darker`, `-light` (and the `maroon`/`gold` extended family) using HSL math, so every token gets a value automatically.
3. **Live preview** — renders the topbar, buttons, badges, cards, gradient band, tab pill and the Circuit-Booking pulse using your palette, exactly like the theme.
4. **Contrast hints** — shows WCAG-style pass/fail hints for the main text combinations.
5. **Copy-ready code** — outputs the Tailwind config object and the `_variables.scss` block for both:
   - **Section 8** (primary/secondary only) — quick re-tint.
   - **Section 8B** (full theme) — the complete 17-token replacement.
6. **Copy buttons** — one-click copy of the JS config and the SCSS variables to the clipboard.

### Workflow

1. Open the tool and tune `primary` / `secondary` until the preview looks right.
2. Copy the generated **Tailwind config** → paste into `header.php:11` (and `template-landing.php:20`).
3. Copy the generated **SCSS variables** → paste into `assets/scss/_variables.scss`.
4. Run `npx sass assets/scss/style.scss assets/css/style.css`.
5. Hard-refresh and verify (see Section 8 Step 6 / Section 8B Step 6).

---

## 9. Troubleshooting / Common Pitfalls

| Symptom | Cause | Fix |
|---|---|---|
| `Uncaught SyntaxError: Unexpected token '-'` | Unquoted hyphenated keys in inline config | Quote keys: `"primary-dark"` |
| Custom colors not rendering at all | The inline config `script` threw an error before Tailwind read it | Validate config with `node --check` on the extracted script |
| Colors changed in SCSS but site still shows old ones | `style.css` not recompiled | Re-run the Sass build |
| Landing page shows old colors after header change | Landing page has its **own** config | Edit `template-landing.php` too |
| CDN warning in console | Play-CDN runtime build | Warning text is stripped from vendored `tailwind.min.js`; optionally move to compiled CSS via Tailwind CLI/PostCSS |
| Tab panels not switching | JS toggling `hidden` only, while CSS keys off `.active` | Toggle both `hidden` and `active` classes |

---

*Generated from the theme source. Re-run the color scan (see conversation report `Current_Color_Theme_Report`) whenever the palette changes. Interactive companion tool: `doc/COLOR_PALETTE_TOOL.html`.*
