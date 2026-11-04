const fs = require('fs');
const path = require('path');

const root = path.resolve(__dirname, '..');

function replaceInFile(relativePath, replacements) {
  const filePath = path.join(root, relativePath);
  let raw = fs.readFileSync(filePath, 'utf8');
  const hasCRLF = raw.includes('\r\n');
  let content = raw.replace(/\r\n/g, '\n');
  let modified = false;

  for (let [target, replacement] of replacements) {
    target = target.replace(/\r\n/g, '\n');
    replacement = replacement.replace(/\r\n/g, '\n');

    if (!content.includes(target)) {
      console.error(`FAILED to find target in ${relativePath}:`, target.slice(0, 80));
      process.exit(1);
    }
    content = content.replace(target, replacement);
    modified = true;
  }

  if (modified) {
    if (hasCRLF) {
      content = content.replace(/\n/g, '\r\n');
    }
    fs.writeFileSync(filePath, content, 'utf8');
    console.log(`Updated ${relativePath}`);
  } else {
    console.log(`No changes made to ${relativePath}`);
  }
}

// 1. header.php: Desktop search form & CTA button
replaceInFile('header.php', [
  [
    `      <!-- Search + Circuit Booking Button (desktop) -->
      <div class="hidden lg:flex items-center gap-3 shrink-0">
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="relative flex items-center gap-1.5">
          <label for="header-search-desktop" class="sr-only"><?php esc_html_e( 'Search the website', 'homeaffairs' ); ?></label>
          <input id="header-search-desktop" type="search" name="s" placeholder="<?php echo esc_attr( $ha_search_placeholder ); ?>" value="<?php echo get_search_query(); ?>" class="bg-warm-white hover:bg-white focus:bg-white text-bg-dark text-xs placeholder-gray-400 border border-gray-200 hover:border-gray-300 focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary/20 rounded-full h-9 px-3.5 w-32 focus:w-44 xl:w-52 xl:focus:w-60 transition-all duration-300 shadow-sm" />
          <button type="submit" aria-label="<?php esc_attr_e( 'Search', 'homeaffairs' ); ?>" class="text-primary hover:text-secondary transition-colors p-2 flex items-center justify-center focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded cursor-pointer">
            <i class="fas fa-search text-sm" aria-hidden="true"></i>
          </button>
        </form>
        <a href="<?php echo esc_url( $cta_link ); ?>" class="ha-cta-pulse inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-bold px-4 xl:px-5 py-2.5 rounded-full text-xs shadow-md hover:shadow-lg transition-all whitespace-nowrap no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2">
          <i class="<?php echo esc_attr( $cta_icon ); ?>" aria-hidden="true"></i>
          <span><?php echo esc_html( $cta_text ); ?></span>
        </a>
      </div>`,
    `      <!-- Search + Circuit Booking Button (desktop) -->
      <div class="hidden lg:flex items-center gap-3 shrink-0">
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="relative flex items-center bg-slate-50 hover:bg-white focus-within:bg-white border border-slate-200/90 focus-within:border-secondary focus-within:ring-2 focus-within:ring-secondary/20 rounded-full h-9 transition-all duration-300 shadow-2xs">
          <label for="header-search-desktop" class="sr-only"><?php esc_html_e( 'Search the website', 'homeaffairs' ); ?></label>
          <input id="header-search-desktop" type="search" name="s" placeholder="<?php echo esc_attr( $ha_search_placeholder ); ?>" value="<?php echo get_search_query(); ?>" class="bg-transparent text-bg-dark text-xs placeholder-slate-400 pl-3.5 pr-8 h-full w-32 focus:w-44 xl:w-48 xl:focus:w-56 focus:outline-none transition-all duration-300" />
          <button type="submit" aria-label="<?php esc_attr_e( 'Search', 'homeaffairs' ); ?>" class="absolute right-1 w-7 h-7 rounded-full text-slate-400 hover:text-primary hover:bg-secondary/15 flex items-center justify-center transition-all cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
            <i class="fas fa-search text-xs" aria-hidden="true"></i>
          </button>
        </form>
        <a href="<?php echo esc_url( $cta_link ); ?>" class="ha-cta-pulse inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-bold px-4 xl:px-5 py-2.5 rounded-full text-xs shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all whitespace-nowrap no-underline border border-white/10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2">
          <i class="<?php echo esc_attr( $cta_icon ); ?> text-secondary-light" aria-hidden="true"></i>
          <span><?php echo esc_html( $cta_text ); ?></span>
        </a>
      </div>`
  ]
]);

// 2. footer-inquiry.php: Fix contrast of Send button
replaceInFile('template-parts/footer-inquiry.php', [
  [
    `<button type="submit" class="bg-secondary text-white font-bold px-5 py-2.5 rounded-lg text-xs hover:bg-secondary-dark transition-all w-full flex items-center justify-center gap-2"><i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Send Message', 'homeaffairs' ); ?></button>`,
    `<button type="submit" class="bg-secondary text-primary-dark font-black px-5 py-2.5 rounded-lg text-xs hover:bg-secondary-dark hover:text-white transition-all w-full flex items-center justify-center gap-2 shadow-sm hover:shadow-gold"><i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Send Message', 'homeaffairs' ); ?></button>`
  ]
]);

// 3. footer-about.php: Fix social icons text-gray-600 contrast
replaceInFile('template-parts/footer-about.php', [
  [
    `class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark"`,
    `class="social-icon w-11 h-11 rounded-full border border-white/15 flex items-center justify-center text-sm text-white/80 hover:bg-secondary hover:text-primary-dark hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark"`
  ]
]);

// 4. assets/scss/_hero.scss: View all notices contrast & active dot
replaceInFile('assets/scss/_hero.scss', [
  [
    `  .view-all-notices {
    color: $color-primary !important;
    font-weight: 700;

    &:hover {
      color: $color-primary !important;
    }

    i {
      color: $color-primary !important;
    }
  }`,
    `  .view-all-notices {
    color: $color-secondary-light !important;
    font-weight: 700;
    transition: color 0.2s ease, transform 0.2s ease;

    &:hover {
      color: $color-secondary !important;
    }

    i {
      color: $color-secondary-light !important;
      transition: transform 0.2s ease;
    }

    &:hover i {
      color: $color-secondary !important;
      transform: translateX(2px);
    }
  }`
  ],
  [
    `  a.tile {
    background: linear-gradient(269deg, #3b0e16 10%, #591521 80%, #801e2f 95%);
    opacity: 0.95;
    transition: opacity 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;

    &:hover {
      opacity: 1;
      transform: translateY(-1px);
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
    }`,
    `  a.tile {
    background: linear-gradient(269deg, #3b0e16 10%, #591521 80%, #801e2f 95%);
    opacity: 0.95;
    border: 1px solid rgba(255, 255, 255, 0.12) !important;
    border-left: 2.5px solid $color-secondary !important;
    border-radius: 8px !important;
    transition: all 0.25s $ease-out;

    &:hover {
      opacity: 1;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
      border-color: rgba($color-secondary, 0.4) !important;
      border-left-color: $color-secondary !important;
    }`
  ],
  [
    `// ── Stats Bar ────────────────────────────────────────────────────────
.stats-bar {
  background-color: #ffffff !important;
  border-bottom: 2px solid $color-primary !important;`,
    `// ── Hero Navigation Dots ──────────────────────────────────────────────
.hero-dot {
  width: 7px;
  height: 7px;
  border-radius: 9999px;
  background-color: rgba(255, 255, 255, 0.4);
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  cursor: pointer;

  &:hover {
    background-color: rgba(255, 255, 255, 0.8);
  }

  &.active {
    width: 22px;
    background-color: $color-secondary !important;
  }
}

// ── Stats Bar ────────────────────────────────────────────────────────
.stats-bar {
  background-color: #ffffff !important;
  border-bottom: 1px solid rgba(89, 21, 33, 0.12) !important;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);`
  ]
]);

// 5. assets/scss/_dropdowns.scss: Modern minimalist glass/card dropdowns
replaceInFile('assets/scss/_dropdowns.scss', [
  [
    `.dropdown-menu {
  position: absolute; top: 100%; left: 0; min-width: 220px;
  background: white; border-radius: 0 0 $radius-md $radius-md;
  box-shadow: 0 20px 60px rgba(0,0,0,0.15);
  opacity: 0; visibility: hidden; transform: translateY(8px);
  transition: all $dur-base $ease-in-out;
  border: 1px solid rgba(0,0,0,0.05);
  z-index: 200;

  // Open on hover OR when JS adds .dd-open class (keyboard)
  .dropdown-group:hover > &,
  .dropdown-group:focus-within > &,
  .dropdown-group.dd-open > & {
    opacity: 1; visibility: visible; transform: translateY(0);
  }

  a {
    display: block;
    padding: 11px 20px; font-weight: 500; width: 100%;
    color: $gray-700; border-bottom: 1px solid $gray-100; transition: all $dur-fast $ease-in-out;

    &:last-child { border-bottom: none; border-radius: 0 0 $radius-md $radius-md; }
    &:hover { background: $color-secondary-tint; color: $color-secondary; padding-left: 26px; }
    &:focus-visible { outline: 2px solid $color-secondary; outline-offset: -2px; background: $color-secondary-tint; }

    @media (prefers-reduced-motion: reduce) { transition: none; &:hover { padding-left: 20px; } }
  }

  // ── Nested 3rd-level ───────────────────────────────────────────
  .dropdown-group {
    position: relative;
    > a {
      padding-right: 32px;
      .fa-chevron-right { position: absolute; right: 14px; top: 50%; transform: translateY(-50%); }
    }
  }

  .dropdown-menu {
    top: -1px; left: 100%; margin-left: 0;
    border-radius: $radius-md; min-width: 220px;
    a { padding: 9px 18px; }
    a:first-child { border-radius: $radius-md $radius-md 0 0; }
  }
}`,
    `.dropdown-menu {
  position: absolute; top: 100%; left: 0; min-width: 230px;
  background: white; border-radius: 12px;
  box-shadow: 0 16px 40px rgba(89, 21, 33, 0.12), 0 2px 8px rgba(0, 0, 0, 0.04);
  opacity: 0; visibility: hidden; transform: translateY(8px);
  transition: opacity $dur-fast $ease-out, transform $dur-fast $ease-out, visibility $dur-fast $ease-out;
  border: 1px solid rgba(89, 21, 33, 0.08);
  padding: 6px 0;
  z-index: 200;

  // Open on hover OR when JS adds .dd-open class (keyboard)
  .dropdown-group:hover > &,
  .dropdown-group:focus-within > &,
  .dropdown-group.dd-open > & {
    opacity: 1; visibility: visible; transform: translateY(0);
  }

  a {
    display: block;
    padding: 10px 18px; font-weight: 500; width: 100%; font-size: 13px;
    color: $gray-700; border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    border-left: 2.5px solid transparent;
    transition: all $dur-fast $ease-out;

    &:last-child { border-bottom: none; }
    &:hover {
      background: rgba($color-secondary, 0.08);
      color: $color-primary;
      border-left-color: $color-secondary;
      padding-left: 22px;
    }
    &:focus-visible {
      outline: 2px solid $color-secondary;
      outline-offset: -2px;
      background: rgba($color-secondary, 0.08);
      border-left-color: $color-secondary;
    }

    @media (prefers-reduced-motion: reduce) { transition: none; &:hover { padding-left: 18px; } }
  }

  // ── Nested 3rd-level ───────────────────────────────────────────
  .dropdown-group {
    position: relative;
    > a {
      padding-right: 32px;
      .fa-chevron-right { position: absolute; right: 14px; top: 50%; transform: translateY(-50%); font-size: 10px; }
    }
  }

  .dropdown-menu {
    top: -6px; left: 100%; margin-left: 4px;
    border-radius: 12px; min-width: 230px;
    a { padding: 9px 18px; }
  }
}`
  ]
]);

// 6. assets/scss/_components.scss: Refined .ha-card, modern scrollbar & selection highlight
replaceInFile('assets/scss/_components.scss', [
  [
    `.ha-card {
  background: white;
  border: 1px solid $border-default;
  border-radius: $radius-lg;
  position: relative;
  overflow: hidden;
  transition:
    box-shadow $dur-base $ease-out,
    transform   $dur-base $ease-out,
    border-color $dur-fast $ease-in-out;

  &::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, $color-secondary, $color-secondary-dark);
    border-radius: $radius-lg $radius-lg 0 0;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform $dur-base $ease-out;
  }

  &:hover {
    box-shadow: 0 8px 32px rgba($color-primary, 0.10);
    transform: translateY(-3px);
    border-color: rgba($color-secondary, 0.4);

    &::before { transform: scaleX(1); }
  }`,
    `.ha-card {
  background: white;
  border: 1px solid rgba(226, 232, 240, 0.9);
  border-radius: 16px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(89, 21, 33, 0.03), 0 1px 2px rgba(0, 0, 0, 0.02);
  transition:
    box-shadow $dur-base $ease-out,
    transform   $dur-base $ease-out,
    border-color $dur-fast $ease-in-out;

  &::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, $color-secondary, $color-secondary-dark);
    border-radius: 16px 16px 0 0;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform $dur-base $ease-out;
  }

  &:hover {
    box-shadow: 0 12px 32px rgba(89, 21, 33, 0.08), 0 2px 6px rgba(89, 21, 33, 0.03);
    transform: translateY(-3px);
    border-color: rgba($color-secondary, 0.4);

    &::before { transform: scaleX(1); }
  }`
  ],
  [
    `// ── Scrollbar ────────────────────────────────────────────────────
::-webkit-scrollbar { width: 8px; }

::-webkit-scrollbar-track { background: $gray-50; }

::-webkit-scrollbar-thumb {
  background: $color-secondary; border-radius: 4px;

  &:hover { background: $color-secondary-dark; }
}`,
    `// ── Modern Minimalist Scrollbar ──────────────────────────────────
::-webkit-scrollbar { width: 7px; height: 7px; }

::-webkit-scrollbar-track { background: #f8fafc; }

::-webkit-scrollbar-thumb {
  background: rgba($color-secondary, 0.6);
  border-radius: 9999px;

  &:hover { background: $color-secondary-dark; }
}

// ── Text Selection Highlight ─────────────────────────────────────
::selection {
  background-color: $color-primary;
  color: #ffffff;
}
::-moz-selection {
  background-color: $color-primary;
  color: #ffffff;
}`
  ],
  [
    `// ── Footer social ────────────────────────────────────────────────
.social-icon {
  transition: all $dur-base $ease-out;

  &:hover {
    background: $color-secondary; color: white; border-color: $color-secondary; transform: translateY(-2px);
  }`,
    `// ── Footer social ────────────────────────────────────────────────
.social-icon {
  transition: all $dur-base $ease-out;
  color: rgba(255, 255, 255, 0.8) !important;
  border-color: rgba(255, 255, 255, 0.15) !important;

  &:hover {
    background: $color-secondary !important;
    color: $color-primary-dark !important;
    border-color: $color-secondary !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(223, 162, 31, 0.35);
  }`
  ]
]);

// 7. assets/scss/_responsive.scss: remove aggressive h1 overrides that balloon compact hero
replaceInFile('assets/scss/_responsive.scss', [
  [
    `  .hero-slider {
    padding-top: 3rem; padding-bottom: 3rem;
    h1 { font-size: 2rem !important; }
  }`,
    `  .hero-slider {
    padding-top: 2rem; padding-bottom: 2.5rem;
  }`
  ],
  [
    `  .hero-slider h1 { font-size: 2.5rem !important; }
  .stat-item { padding-top: 1.5rem; padding-bottom: 1.5rem; }`,
    `  .stat-item { padding-top: 1.5rem; padding-bottom: 1.5rem; }`
  ]
]);

console.log('All partial updates completed successfully!');
