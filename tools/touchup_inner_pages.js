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
  }
}

// 1. template-parts/page-banner.php (used across all 35+ inner page templates)
replaceInFile('template-parts/page-banner.php', [
  [
    `<div id="main-content" tabindex="-1" class="banner-page relative overflow-hidden focus:outline-none">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/page-banner.jpg' ); ?>" alt="" class="absolute inset-0 w-full h-full object-cover z-[1]" loading="eager" decoding="async">
  <!-- Subtle Dark Overlay for better contrast -->
  <div class="absolute inset-0 bg-black/45 pointer-events-none z-[2]"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20 relative z-10">
    <div class="flex items-center gap-2 text-xs text-white/70 mb-4">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors"><i class="fas fa-house-chimney mr-1" aria-hidden="true"></i><?php esc_html_e( 'Home', 'homeaffairs' ); ?></a>
      <?php echo ha_breadcrumb_icons(); ?>
      <span class="text-secondary font-medium" aria-current="page"><?php echo esc_html( $ha_title ); ?></span>
    </div>
    <h1 class="text-3xl lg:text-5xl font-extrabold text-white mb-3 tracking-tight"><?php echo esc_html( $ha_title ); ?></h1>
    <?php if ( ! empty( $ha_subtitle ) ) : ?>
      <p class="text-white/80 text-sm sm:text-base max-w-2xl mt-1"><?php echo esc_html( $ha_subtitle ); ?></p>
    <?php endif; ?>
  </div>
</div>`,
    `<div id="main-content" tabindex="-1" class="banner-page relative overflow-hidden focus:outline-none">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/page-banner.jpg' ); ?>" alt="" class="absolute inset-0 w-full h-full object-cover z-[1]" loading="eager" decoding="async">
  <!-- Atmospheric Dark Maroon Gradient Overlay for high-contrast legibility -->
  <div class="absolute inset-0 bg-gradient-to-r from-primary-darker/95 via-primary-dark/85 to-primary-dark/65 pointer-events-none z-[2]"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 lg:py-14 relative z-10">
    <div class="inline-flex items-center gap-2 text-xs text-white/85 mb-3 px-3.5 py-1.5 rounded-full bg-black/25 backdrop-blur-md border border-white/10 shadow-sm">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors"><i class="fas fa-house-chimney mr-1" aria-hidden="true"></i><?php esc_html_e( 'Home', 'homeaffairs' ); ?></a>
      <?php echo ha_breadcrumb_icons(); ?>
      <span class="text-secondary-light font-semibold" aria-current="page"><?php echo esc_html( $ha_title ); ?></span>
    </div>
    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white tracking-tight drop-shadow-sm"><?php echo esc_html( $ha_title ); ?></h1>
    <?php if ( ! empty( $ha_subtitle ) ) : ?>
      <p class="text-white/90 text-xs sm:text-sm max-w-2xl mt-1.5 leading-relaxed font-normal"><?php echo esc_html( $ha_subtitle ); ?></p>
    <?php endif; ?>
  </div>
</div>`
  ]
]);

// 2. assets/scss/_components.scss: Append unified modern styling for inner page filters, tables, and pagination
const componentsPath = path.join(root, 'assets/scss/_components.scss');
let compRaw = fs.readFileSync(componentsPath, 'utf8');
const compHasCRLF = compRaw.includes('\r\n');
let compContent = compRaw.replace(/\r\n/g, '\n');

const innerPageStyles = `
// ── Modern Minimalist Inner Page Design System Components ────────
// 1. Universal Filter Pill Buttons across all directory templates
.pub-filter-btn,
.svc-filter-btn,
.cal-filter-btn,
.news-filter-btn,
.ne-filter-btn,
.filter-pill {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 6px 14px;
  font-size: 12px;
  font-weight: 600;
  border-radius: 9999px;
  border: 1px solid rgba(226, 232, 240, 0.9);
  background: #ffffff;
  color: #4b5563;
  transition: all $dur-fast $ease-out;
  cursor: pointer;

  &:hover {
    background: rgba($color-secondary, 0.08);
    color: $color-primary;
    border-color: rgba($color-secondary, 0.4);
    transform: translateY(-1px);
  }

  &.active {
    background: $color-primary !important;
    color: #ffffff !important;
    border-color: $color-primary !important;
    box-shadow: 0 2px 8px rgba(89, 21, 33, 0.25);
  }

  &:focus-visible {
    outline: 2px solid $color-secondary;
    outline-offset: 2px;
  }
}

// 2. Universal Pagination Controls across all templates
.page-btn,
.pagination-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 34px;
  height: 34px;
  padding: 0 10px;
  border-radius: 8px;
  border: 1px solid #e2e8f0;
  font-size: 12px;
  font-weight: 700;
  color: #4b5563;
  background: #ffffff;
  transition: all $dur-fast $ease-out;
  cursor: pointer;

  &:hover {
    background-color: rgba($color-secondary, 0.08);
    border-color: rgba($color-secondary, 0.5);
    color: $color-primary;
  }

  &.active,
  &.page-active {
    background-color: $color-secondary !important;
    color: $color-primary-dark !important;
    border-color: $color-secondary !important;
    box-shadow: 0 2px 6px rgba(223, 162, 31, 0.35);
  }

  &:focus-visible {
    outline: 2px solid $color-secondary;
    outline-offset: 2px;
  }
}

// 3. Search inputs on all inner page templates
.search-box-modern,
#svc-search,
#pub-search,
#circ-search,
#doc-search,
#exam-search,
#ds-search,
#gn-search {
  transition: all $dur-fast $ease-out;
  border-radius: 10px;

  &:focus {
    border-color: $color-secondary !important;
    box-shadow: 0 0 0 3px rgba($color-secondary, 0.15) !important;
  }
}

// 4. Action & Download Buttons
.btn-download,
.btn-view {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  font-weight: 700;
  color: $color-primary;
  padding: 5px 12px;
  border-radius: 6px;
  background: rgba($color-primary, 0.05);
  transition: all $dur-fast $ease-out;

  &:hover {
    background: $color-primary;
    color: $color-secondary-light;
    transform: translateY(-1px);
  }
}
`;

if (!compContent.includes('Universal Filter Pill Buttons')) {
  compContent += innerPageStyles;
  if (compHasCRLF) compContent = compContent.replace(/\n/g, '\r\n');
  fs.writeFileSync(componentsPath, compContent, 'utf8');
  console.log('Appended inner page design system rules to assets/scss/_components.scss');
} else {
  console.log('Inner page rules already present in _components.scss');
}

console.log('Inner page touchups finished successfully!');
