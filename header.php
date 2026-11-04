<?php defined( 'ABSPATH' ) || exit; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Noto+Sans+Sinhala:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@400;500;600;700&family=Noto+Color+Emoji&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Noto+Sans+Sinhala:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@400;500;600;700&family=Noto+Color+Emoji&display=swap" rel="stylesheet"></noscript>
<!-- Tailwind CSS: compiled stylesheet (assets/css/tailwind.css) enqueued in inc/enqueue.php -->

<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-warm-white text-gray-800 antialiased' ); ?>>
<?php wp_body_open(); ?>

<!-- Skip to main content (WCAG 2.4.1 Accessibility) -->
<a href="#main-content" class="skip-link">
  <?php esc_html_e( 'Skip to main content', 'homeaffairs' ); ?>
</a>

<div class="page-loader" id="pageLoader">
  <div class="loader-spinner"></div>
  <div class="loader-text">Loading&hellip;</div>
</div>

<?php
$ha_email              = carbon_get_theme_option( 'ha_email' ) ?: 'info@moha.gov.lk';
$ha_ministry_name      = carbon_get_theme_option( 'ha_ministry_name' ) ?: __( 'Ministry of Public Administration, Provincial Councils and Local Government', 'homeaffairs' );
$ha_division_name      = carbon_get_theme_option( 'ha_division_name' ) ?: __( 'Home Affairs Division', 'homeaffairs' );
$ha_emblem_id          = carbon_get_theme_option( 'ha_emblem' );
$ha_emblem_url         = $ha_emblem_id ? wp_get_attachment_image_url( absint( $ha_emblem_id ), 'full' ) : '';
if ( empty( $ha_emblem_url ) ) {
    $ha_emblem_url = get_template_directory_uri() . '/assets/images/emblem-sri-lanka.svg';
}
$ha_gov_gateway_url      = carbon_get_theme_option( 'ha_gov_gateway_url' ) ?: 'https://www.gov.lk';
$ha_gov_gateway_logo_url = carbon_get_theme_option( 'ha_gov_gateway_logo_url' ) ?: 'https://moha.gov.lk/web/images/gov.png';
$ha_search_placeholder   = carbon_get_theme_option( 'ha_search_placeholder' ) ?: __( 'Search...', 'homeaffairs' );
$cta_text                = carbon_get_theme_option( 'ha_cta_button_text' ) ?: __( 'Circuit Booking', 'homeaffairs' );
$cta_icon                = carbon_get_theme_option( 'ha_cta_button_icon' ) ?: 'fas fa-calendar-check';
$cta_link                = carbon_get_theme_option( 'ha_cta_button_link' ) ?: '#';
?>

<!-- ═══ TOPBAR ═══ -->
<div class="topbar sticky top-0 z-[60] text-[11px] sm:text-xs border-b border-white/10 text-white !bg-primary-darker py-2" id="siteTopbar">
    
  <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-y-1.5 px-4 sm:px-6 lg:px-8">
    
    <!-- Phone & Email -->
    <div class="flex items-center gap-2.5 sm:gap-4 topbar-contact min-w-0 shrink-0">
      <?php
      $phone = carbon_get_theme_option( 'ha_telephone' );
      if ( ! empty( $phone ) ) {
          $phone_url = preg_replace( '/[^\d+]/', '', $phone );
          echo '<a href="tel:' . esc_attr( $phone_url ) . '" class="flex items-center gap-1.5 text-white/90 hover:text-secondary-light focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary-light rounded transition-colors shrink-0 whitespace-nowrap"><i class="fas fa-phone-alt text-[10px] sm:text-[11px] text-secondary-light shrink-0" aria-hidden="true"></i><span class="topbar-phone font-medium text-[11px] sm:text-xs whitespace-nowrap">' . esc_html( $phone ) . '</span></a>';
      } else {
          echo '<a href="tel:+94112050450" class="flex items-center gap-1.5 text-white/90 hover:text-secondary-light focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary-light rounded transition-colors shrink-0 whitespace-nowrap"><i class="fas fa-phone-alt text-[10px] sm:text-[11px] text-secondary-light shrink-0" aria-hidden="true"></i><span class="topbar-phone font-medium text-[11px] sm:text-xs whitespace-nowrap">+94 112 050 450</span></a>';
      }
      ?>
      <span class="hidden sm:block w-px h-3.5 bg-white/20 shrink-0" aria-hidden="true"></span>
      <a href="mailto:<?php echo esc_attr( $ha_email ); ?>" class="hidden sm:flex items-center gap-1.5 text-white/90 hover:text-secondary-light focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary-light rounded transition-colors shrink-0 whitespace-nowrap"><i class="fas fa-envelope text-[10px] sm:text-[11px] text-secondary-light shrink-0" aria-hidden="true"></i><span class="font-medium text-[11px] sm:text-xs"><?php echo esc_html( $ha_email ); ?></span></a>
    </div>

    <!-- Topbar Right Side Container (Menu + Gov Gateway + Language Switcher) -->
    <div class="flex flex-wrap md:flex-nowrap w-auto items-center justify-end gap-2 sm:gap-3.5 md:gap-2 xl:gap-3.5 shrink-0 ml-auto">
      
      <!-- Topbar Navigation Menu (Clean & Borderless) -->
      <div class="hidden lg:flex items-center relative z-[60]">
        <div class="flex items-center gap-4 text-white/90 [&_a]:text-white/85 [&_a:hover]:text-secondary-light [&_a]:transition-colors [&_a]:font-medium [&_a]:text-xs [&_li]:list-none">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-topbar',
            'container'      => false,
            'items_wrap'     => '%3$s',
            'walker'         => new HA_Topbar_Walker(),
            'depth'          => 1,
            'fallback_cb'    => '__return_false',
          ) );
          ?>
        </div>
      </div>

      <span class="hidden lg:block w-px h-3.5 bg-white/20 shrink-0" aria-hidden="true"></span>

      <!-- Smart Gateway to Government of Sri Lanka -->
      <a href="<?php echo esc_url( $ha_gov_gateway_url ); ?>" target="_blank" rel="noopener noreferrer" class="gov-gateway inline-flex items-center shrink-0 rounded opacity-95 hover:opacity-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary-light transition-opacity" aria-label="<?php esc_attr_e( 'Smart Gateway to Government of Sri Lanka', 'homeaffairs' ); ?>" title="<?php esc_attr_e( 'Smart Gateway to Government of Sri Lanka', 'homeaffairs' ); ?>">
        <img src="<?php echo esc_url( $ha_gov_gateway_logo_url ); ?>" alt="<?php esc_attr_e( 'Smart Gateway to Government of Sri Lanka', 'homeaffairs' ); ?>" width="68" height="20" class="h-4 sm:h-5 w-auto" loading="lazy" decoding="async">
      </a>

      <span class="hidden sm:block w-px h-3.5 bg-white/20 shrink-0" aria-hidden="true"></span>

      <!-- Language Switcher (MSLS) -->
      <div class="lang-switcher flex items-center gap-1.5" role="navigation" aria-label="<?php esc_attr_e( 'Language Selection', 'homeaffairs' ); ?>">
        <?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
      </div>

    </div>

  </div>
</div>

<!-- ═══ BRANDING / LOGO AREA (scrolls away) ═══ -->
<div class="bg-white/95 border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between gap-4 py-3 sm:py-3.5">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-3 min-w-0 group no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded-lg">
        <img src="<?php echo esc_url( $ha_emblem_url ); ?>" alt="<?php esc_attr_e( 'National Emblem of Sri Lanka', 'homeaffairs' ); ?>" width="600" height="851" class="h-14 sm:h-16 lg:h-18 xl:h-20 w-auto shrink-0 object-contain transition-transform duration-200 group-hover:scale-105" loading="lazy" decoding="async">
        <span class="min-w-0 flex flex-col justify-center leading-none">
          <span class="block text-slate-600 font-medium text-[11px] sm:text-xs lg:text-[13px] leading-tight tracking-tight mb-1"><?php echo esc_html( $ha_ministry_name ); ?></span>
          <span class="block text-black font-black text-sm sm:text-base lg:text-lg xl:text-xl leading-tight tracking-tight group-hover:text-primary transition-colors"><?php echo esc_html( $ha_division_name ); ?></span>
        </span>
      </a>

      <!-- Search + Circuit Booking Button (desktop) -->
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
      </div>
    </div>
  </div>
</div>

<!-- ═══ STICKY NAV ROW ═══ -->
<div class="ha-sticky-header sticky z-50 shadow-sm backdrop-blur-md" style="top:var(--topbar-height,38px)" id="siteNav">
<!-- ═══ MAIN HEADER / NAVIGATION ═══ -->
<header class="bg-white/95 border-b-2 border-secondary w-full" role="banner">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-10 lg:h-11 min-w-0">
      
      <!-- Main Navigation Links -->
      <nav class="hidden lg:flex flex-1 items-center justify-center gap-1 text-[13px] self-stretch" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'homeaffairs' ); ?>">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-primary',
          'container'      => false,
          'items_wrap'     => '%3$s',
          'walker'         => new HA_Nav_Walker(),
          'depth'          => 3,
          'fallback_cb'    => '__return_false',
        ) );
        ?>
      </nav>

      <!-- Mobile Hamburger Menu Button + Search + CTA -->
      <div class="flex lg:hidden items-center gap-2 w-full">
        <button type="button" class="hamburger flex flex-col items-center justify-center gap-1.5 cursor-pointer p-2.5 hover:bg-gray-100 rounded-lg transition-colors min-w-[44px] min-h-[44px]" aria-label="<?php esc_attr_e( 'Open navigation menu', 'homeaffairs' ); ?>" aria-expanded="false" aria-controls="mobileNavDrawer" id="hamburgerBtn">
          <span class="w-6 h-[2px] bg-bg-dark rounded shrink-0 transition-transform duration-200"></span>
          <span class="w-6 h-[2px] bg-bg-dark rounded shrink-0 transition-opacity duration-200"></span>
          <span class="w-6 h-[2px] bg-bg-dark rounded shrink-0 transition-transform duration-200"></span>
        </button>
        <div class="flex items-center gap-2 ml-auto min-w-0">
          <button type="button" class="mobile-search-toggle p-2 text-primary hover:text-secondary transition-colors flex items-center justify-center shrink-0 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded" aria-label="<?php esc_attr_e( 'Open search', 'homeaffairs' ); ?>" aria-expanded="false" aria-controls="mobileSearchPanel">
            <i class="fas fa-search text-base sm:text-lg" aria-hidden="true"></i>
          </button>
          <a href="<?php echo esc_url( $cta_link ); ?>" class="ha-cta-pulse inline-flex items-center gap-1.5 bg-primary hover:bg-primary-dark text-white font-bold px-3 py-1.5 rounded-full text-[10px] shadow-sm transition-all whitespace-nowrap no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
            <i class="<?php echo esc_attr( $cta_icon ); ?>" aria-hidden="true"></i>
            <span><?php echo esc_html( $cta_text ); ?></span>
          </a>
        </div>
      </div>

    </div>
  </div>
</header>

  <!-- Mobile Search Slide Panel -->
  <div id="mobileSearchPanel" class="mobile-search-panel lg:hidden" aria-hidden="true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3">
      <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2">
        <div class="relative flex flex-1 items-center bg-white border-2 border-gray-200 rounded-full pl-4 pr-11 py-2.5 focus-within:border-secondary transition-all shadow-sm">
          <i class="fas fa-search text-primary text-xs mr-2" aria-hidden="true"></i>
          <input type="search" name="s" placeholder="<?php echo esc_attr( $ha_search_placeholder ); ?>" value="<?php echo get_search_query(); ?>" class="flex-1 min-w-0 bg-transparent text-bg-dark text-sm placeholder-gray-400 focus:outline-none" />
          <button type="submit" aria-label="<?php esc_attr_e( 'Search', 'homeaffairs' ); ?>" class="absolute right-1.5 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-primary hover:bg-primary-dark text-white flex items-center justify-center transition-colors">
            <i class="fas fa-arrow-right text-[11px]" aria-hidden="true"></i>
          </button>
        </div>
        <button type="button" class="mobile-search-close w-9 h-9 rounded-full bg-gray-100 hover:bg-secondary hover:text-primary-dark text-gray-600 flex items-center justify-center transition-colors shrink-0" aria-label="<?php esc_attr_e( 'Close search', 'homeaffairs' ); ?>">
          <i class="fas fa-times text-sm" aria-hidden="true"></i>
        </button>
      </form>
    </div>
  </div>

</div>
<!-- ═══ /STICKY NAV ROW ═══ -->

<div id="mobileSearchBackdrop" class="mobile-search-backdrop lg:hidden" aria-hidden="true"></div>

<!-- Mobile Navigation Drawer -->
<div class="nav-mobile fixed inset-0 z-[100] hidden" id="mobileNavDrawer" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Navigation menu', 'homeaffairs' ); ?>">
  <button type="button" class="close-btn absolute top-5 right-5 text-white text-3xl bg-transparent border-0 cursor-pointer hover:text-secondary transition-colors z-10 min-w-[44px] min-h-[44px] flex items-center justify-center" aria-label="<?php esc_attr_e( 'Close navigation menu', 'homeaffairs' ); ?>"><i class="fas fa-times" aria-hidden="true"></i></button>
  <div class="h-full overflow-y-auto px-4 py-20 w-full bg-bg-dark">
    <div class="nav-links w-full" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'homeaffairs' ); ?>">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-primary',
        'container'      => false,
        'items_wrap'     => '%3$s',
        'walker'         => new HA_Mobile_Walker(),
        'depth'          => 3,
        'fallback_cb'    => '__return_false',
      ) );
      ?>
    </div>
  </div>
</div>

<!-- Secondary Menu Wrap (Mobile) -->
<div class="secondary-menu-wrap lg:hidden">
  <button type="button" class="secondary-menu-btn fixed left-0 top-1/2 -translate-y-1/2 z-[90] bg-bg-dark text-white rounded-r-full shadow-lg hover:bg-primary transition-all flex items-center gap-1.5 pl-2.5 pr-3 py-2.5 text-[11px] font-semibold min-h-[40px]" aria-expanded="false" aria-controls="secondaryMenuPanel" aria-label="<?php esc_attr_e( 'Open quick links menu', 'homeaffairs' ); ?>">
    <i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i><span>More</span>
  </button>
  <div id="secondaryMenuPanel" class="secondary-menu-panel fixed inset-x-0 bottom-0 z-[110] bg-bg-dark text-white rounded-t-2xl shadow-2xl translate-y-full transition-transform duration-300 max-h-[70vh] overflow-y-auto hidden" role="dialog" aria-label="<?php esc_attr_e( 'Quick links', 'homeaffairs' ); ?>" aria-modal="false">
    <div class="sticky top-0 bg-bg-dark flex items-center justify-between px-6 py-4 border-b border-white/10">
      <span class="font-bold text-sm"><i class="fas fa-link text-secondary mr-2" aria-hidden="true"></i>Quick Links</span>
      <button type="button" class="secondary-menu-close text-white/60 hover:text-white transition-colors p-2 min-w-[36px] min-h-[36px]" aria-label="<?php esc_attr_e( 'Close quick links menu', 'homeaffairs' ); ?>"><i class="fas fa-times text-lg" aria-hidden="true"></i></button>
    </div>
    <div class="px-4 py-3">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-mobile',
        'container'      => false,
        'items_wrap'     => '%3$s',
        'depth'          => 2,
        'fallback_cb'    => '__return_false',
        'walker'         => new HA_Quicklinks_Walker(),
      ) );
      ?>
    </div>
  </div>
</div>
