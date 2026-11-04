<?php
/**
 * Template Name: Home Page
 */


defined( 'ABSPATH' ) || exit;



$ha_uri = get_template_directory_uri();
$ha_home = esc_url( home_url( '/' ) );
$ha_news = esc_url( home_url( '/news/' ) );
$ha_contact = esc_url( home_url( '/contact/' ) );
$ha_circuit = esc_url( home_url( '/circuit-bungalow/' ) );
$ha_services = esc_url( home_url( '/services/' ) );
$ha_eservices = esc_url( home_url( '/e-services/' ) );
$ha_institutions = esc_url( home_url( '/institutions/' ) );
$ha_media = esc_url( home_url( '/media/' ) );
$ha_about = esc_url( home_url( '/about/' ) );
$ha_circulars = esc_url( home_url( '/circulars/' ) );
$ha_special_notices = esc_url( home_url( '/special-notices/' ) );
$ha_scholarships = esc_url( home_url( '/scholarships/' ) );
$ha_exam_results = esc_url( home_url( '/exam-results/' ) );

get_header(); ?>

<!-- ═══ HERO SLIDER (COMPACT HEIGHT MAROON & GOLD THEME) ═══ -->
<section id="main-content" tabindex="-1" class="pt-8 pb-14 lg:pt-10 lg:pb-16 hero-slider main-slider relative overflow-hidden bg-primary-dark">
  
  <!-- Atmospheric Gradient Overlay (Washes over ::after underlayer and blends across section) -->
  <div class="hero-gradient-overlay"></div>

  <!-- Slider Background Stage (Right Area on Desktop with Middle Blend, No Full-Width Photo) -->
  <div class="hero-slider-bg-stage">
    <div class="slide-bg active" style="background-image: url('<?php echo esc_url( $ha_uri . '/assets/images/main-slider/HomeSlide-1.jpg' ); ?>')"></div>
    <div class="slide-bg" style="background-image: url('<?php echo esc_url( $ha_uri . '/assets/images/main-slider/HomeSlide-2.jpg' ); ?>')"></div>
    <div class="slide-bg" style="background-image: url('<?php echo esc_url( $ha_uri . '/assets/images/main-slider/HomeSlide-3.jpg' ); ?>')"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch justify-between">
      
      <!-- Left Content / Slides -->
      <div class="w-full lg:w-[60%] xl:w-[62%] min-w-0 flex flex-col justify-between">
        <div class="hero-slides relative">
          
          <!-- Slide 1 -->
          <div class="hero-slide active">
            <div class="inline-flex items-center gap-1.5 bg-secondary/20 text-secondary-light text-[9px] font-semibold tracking-wider uppercase px-2.5 py-0.5 rounded-full mb-2 backdrop-blur-md border border-secondary/30">
              <i class="fas fa-landmark text-[8px] text-secondary"></i> <?php esc_html_e( 'HOME AFFAIRS DIVISION', 'homeaffairs' ); ?>
            </div>
      
            <h1 class="text-lg sm:text-xl lg:text-2xl font-bold !text-white leading-snug mb-2 tracking-tight">
              <?php esc_html_e( 'Seamless Governance from Central to Grassroots', 'homeaffairs' ); ?>
            </h1>

            <p class="text-[11px] sm:text-xs text-secondary-light/85 max-w-lg mb-4 leading-relaxed font-normal">
              <?php esc_html_e( 'Empowering Regional Secretariats Across the Nation—Facilitating and coordinating Sri Lanka administrative ecosystem to deliver efficient , technology-driven public services.', 'homeaffairs' ); ?>
            </p>

            <div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_services; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                <i class="fas fa-users-cog text-[10px]"></i> <?php esc_html_e( 'About Us', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="hero-slide">
            <div class="inline-flex items-center gap-1.5 bg-secondary/20 text-secondary-light text-[9px] font-semibold tracking-wider uppercase px-2.5 py-0.5 rounded-full mb-2 backdrop-blur-md border border-secondary/30">
              <i class="fas fa-laptop-code text-[8px] text-secondary"></i> <?php esc_html_e( 'REGIONAL ADMINISTRATIVE NETWORK', 'homeaffairs' ); ?>
            </div>

            <h1 class="text-lg sm:text-xl lg:text-2xl font-bold !text-white leading-snug mb-2 tracking-tight">
              <?php esc_html_e( 'Connecting 25 Districts & 335 Divisional Secretariats', 'homeaffairs' ); ?>
            </h1>

            <p class="text-[11px] sm:text-xs text-secondary-light/85 max-w-lg mb-4 leading-relaxed font-normal">
              <?php esc_html_e( 'Island-Wide Public Service Hubs — Seamlessly coordinating regional development, state functions, and civil administration across all 25 districts and 335 divisions.', 'homeaffairs' ); ?>
            </p>

            <div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_eservices; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                <i class="fas fa-map-marked-alt text-[10px]"></i> <?php esc_html_e( 'Explore Regional Network', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="hero-slide">
            <div class="inline-flex items-center gap-1.5 bg-secondary/20 text-secondary-light text-[9px] font-semibold tracking-wider uppercase px-2.5 py-0.5 rounded-full mb-2 backdrop-blur-md border border-secondary/30">
              <i class="fas fa-network-wired text-[8px] text-secondary"></i> <?php esc_html_e( 'CITIZEN SERVICES', 'homeaffairs' ); ?>
            </div>

            <h1 class="text-lg sm:text-xl lg:text-2xl font-bold !text-white leading-snug mb-2 tracking-tight">
              <?php esc_html_e( 'Accessible Government Services for Every Household', 'homeaffairs' ); ?>
            </h1>

            <p class="text-[11px] sm:text-xs text-secondary-light/85 max-w-lg mb-4 leading-relaxed font-normal">
              <?php esc_html_e( '14,022 GN Divisions Island-Wide — Dedicated Grama Niladhari officers working across the island to ensure transparent, accessible, and responsive support for every family.', 'homeaffairs' ); ?>
            </p>

            <div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_institutions; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                <i class="fas fa-location-dot text-[10px]"></i> <?php esc_html_e( 'Find Your GN Officer', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>
          </div>

        </div>

        <!-- Pagination Dots -->
        <div class="flex items-center gap-2 mt-4" role="tablist" aria-label="<?php esc_attr_e( 'Slide pagination', 'homeaffairs' ); ?>">
          <button type="button" class="hero-dot active" aria-label="<?php esc_attr_e( 'Slide 1', 'homeaffairs' ); ?>"></button>
          <button type="button" class="hero-dot" aria-label="<?php esc_attr_e( 'Slide 2', 'homeaffairs' ); ?>"></button>
          <button type="button" class="hero-dot" aria-label="<?php esc_attr_e( 'Slide 3', 'homeaffairs' ); ?>"></button>
        </div>
      </div>

      <!-- Right Special Notices Tiles (Exact Original Sizes with White Text) -->
      <div class="hero-special-tiles hero-special-titles flex flex-col gap-1.5 w-full lg:w-60 shrink-0 lg:ml-auto justify-center z-10">
        <div class="flex items-center gap-2 mb-0.5">
          <span class="special-notices-badge text-white border border-secondary/30 text-[8px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full flex items-center gap-1 backdrop-blur-md shadow-sm">
            <i class="fas fa-bullhorn text-[7px] text-secondary"></i> <?php esc_html_e( 'Special Notices', 'homeaffairs' ); ?>
          </span>
        </div>

        <!-- Notice Item 1 -->
        <a href="<?php echo esc_url( home_url( '/special-notices/' ) ); ?>" 
           class="tile border border-secondary/20 border-l-2 border-l-secondary rounded p-2 backdrop-blur-md transition-all group shadow-sm">
          <div class="flex items-start gap-2">
            <div class="tile-icon w-5 h-5 bg-primary-dark/80 rounded flex items-center justify-center shrink-0 group-hover:bg-secondary transition-all">
              <i class="fas fa-graduation-cap text-white group-hover:text-white text-[9px]"></i>
            </div>
            <div class="min-w-0">
              <strong class="tile-text block text-[10px] font-medium text-white transition-colors line-clamp-1">
                <?php esc_html_e( 'Short Term Training - Singapore 2026', 'homeaffairs' ); ?>
              </strong>
              <span class="tile-date text-[8.5px] text-white/80 block">
                <?php esc_html_e( 'Training programme for officers', 'homeaffairs' ); ?>
              </span>
            </div>
          </div>
        </a>

        <!-- Notice Item 2 -->
        <a href="<?php echo esc_url( home_url( '/special-notices/' ) ); ?>" 
           class="tile border border-secondary/20 border-l-2 border-l-secondary rounded p-2 backdrop-blur-md transition-all group shadow-sm">
          <div class="flex items-start gap-2">
            <div class="tile-icon w-5 h-5 bg-primary-dark/80 rounded flex items-center justify-center shrink-0 group-hover:bg-secondary transition-all">
              <i class="fas fa-laptop text-white group-hover:text-white text-[9px]"></i>
            </div>
            <div class="min-w-0">
              <strong class="tile-text block text-[10px] font-medium text-white transition-colors line-clamp-1">
                <?php esc_html_e( 'Computer Application Assistant 2026', 'homeaffairs' ); ?>
              </strong>
              <span class="tile-date text-[8.5px] text-white/80 block">
                <?php esc_html_e( 'Recruitment examination', 'homeaffairs' ); ?>
              </span>
            </div>
          </div>
        </a>

        <!-- Notice Item 3 -->
        <a href="<?php echo esc_url( home_url( '/special-notices/' ) ); ?>" 
           class="tile border border-secondary/20 border-l-2 border-l-secondary rounded p-2 backdrop-blur-md transition-all group shadow-sm">
          <div class="flex items-start gap-2">
            <div class="tile-icon w-5 h-5 bg-primary-dark/80 rounded flex items-center justify-center shrink-0 group-hover:bg-secondary transition-all">
              <i class="fas fa-file-invoice text-white group-hover:text-white text-[9px]"></i>
            </div>
            <div class="min-w-0">
              <strong class="tile-text block text-[10px] font-medium text-white transition-colors line-clamp-1">
                <?php esc_html_e( 'Ministry Procurement Plan 2026', 'homeaffairs' ); ?>
              </strong>
              <span class="tile-date text-[8.5px] text-white/80 block">
                <?php esc_html_e( 'Annual procurement schedule', 'homeaffairs' ); ?>
              </span>
            </div>
          </div>
        </a>

        <!-- View All Link -->
        <a href="<?php echo esc_url( home_url( '/special-notices/' ) ); ?>" 
           class="view-all-notices text-primary hover:text-primary font-bold text-[9.5px] transition-colors inline-flex items-center gap-1 mt-0.5 px-0.5">
          <?php esc_html_e( 'View all notices', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[7.5px] text-primary"></i>
        </a>
      </div>

    </div>
  </div>

  <!-- Breaking News Overlay -->
  <div class="news-ticker news-ticker--overlay absolute inset-x-0 bottom-0 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center h-9 sm:h-10">
      <span class="bg-secondary text-bg-dark text-[9px] sm:text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-1 rounded mr-3 shrink-0 flex items-center gap-1 shadow-sm"><i class="fas fa-bolt text-[8px]"></i> <?php esc_html_e( 'Breaking', 'homeaffairs' ); ?></span>
      <div class="ticker-window overflow-hidden flex-1 relative h-full">
        <div class="ticker-track text-[11px] sm:text-xs font-medium text-white/90" id="tickerTrack">
          <a href="<?php echo $ha_news; ?>" class="ticker-item">
            <i class="fas fa-circle text-[4px] text-secondary shrink-0" aria-hidden="true"></i>
            <span class="ticker-title font-medium text-white"><?php esc_html_e( '78th National Independence Day (04.02.2026)', 'homeaffairs' ); ?></span>
            <span class="ticker-sep text-secondary font-bold mx-1">-</span>
            <span class="ticker-date text-secondary-light/90 text-[10px] sm:text-[11px] font-medium"><?php esc_html_e( '04 February 2026', 'homeaffairs' ); ?></span>
          </a>
          <a href="<?php echo $ha_news; ?>" class="ticker-item">
            <i class="fas fa-circle text-[4px] text-secondary shrink-0" aria-hidden="true"></i>
            <span class="ticker-title font-medium text-white"><?php esc_html_e( 'Digital Signature System launched for secure document verification', 'homeaffairs' ); ?></span>
            <span class="ticker-sep text-secondary font-bold mx-1">-</span>
            <span class="ticker-date text-secondary-light/90 text-[10px] sm:text-[11px] font-medium"><?php esc_html_e( '28 January 2026', 'homeaffairs' ); ?></span>
          </a>
          <a href="<?php echo $ha_news; ?>" class="ticker-item">
            <i class="fas fa-circle text-[4px] text-secondary shrink-0" aria-hidden="true"></i>
            <span class="ticker-title font-medium text-white"><?php esc_html_e( 'Island-wide Grama Niladhari training programme commences next month', 'homeaffairs' ); ?></span>
            <span class="ticker-sep text-secondary font-bold mx-1">-</span>
            <span class="ticker-date text-secondary-light/90 text-[10px] sm:text-[11px] font-medium"><?php esc_html_e( '20 January 2026', 'homeaffairs' ); ?></span>
          </a>
          <a href="<?php echo $ha_news; ?>" class="ticker-item">
            <i class="fas fa-circle text-[4px] text-secondary shrink-0" aria-hidden="true"></i>
            <span class="ticker-title font-medium text-white"><?php esc_html_e( 'Online Circuit Bungalow Booking system now available 24/7', 'homeaffairs' ); ?></span>
            <span class="ticker-sep text-secondary font-bold mx-1">-</span>
            <span class="ticker-date text-secondary-light/90 text-[10px] sm:text-[11px] font-medium"><?php esc_html_e( '15 January 2026', 'homeaffairs' ); ?></span>
          </a>
          <a href="<?php echo $ha_news; ?>" class="ticker-item">
            <i class="fas fa-circle text-[4px] text-secondary shrink-0" aria-hidden="true"></i>
            <span class="ticker-title font-medium text-white"><?php esc_html_e( 'New public administration reforms to be implemented from Q3 2026', 'homeaffairs' ); ?></span>
            <span class="ticker-sep text-secondary font-bold mx-1">-</span>
            <span class="ticker-date text-secondary-light/90 text-[10px] sm:text-[11px] font-medium"><?php esc_html_e( '10 January 2026', 'homeaffairs' ); ?></span>
          </a>
        </div>
      </div>
      <div class="ticker-nav flex items-center gap-1 ml-3 shrink-0">
        <button type="button" class="ticker-prev w-5 h-5 flex items-center justify-center rounded-full bg-white/10 hover:bg-secondary hover:text-bg-dark transition-all text-[9px] text-white/80 backdrop-blur-sm cursor-pointer" aria-label="<?php esc_attr_e( 'Previous', 'homeaffairs' ); ?>"><i class="fas fa-chevron-left"></i></button>
        <button type="button" class="ticker-next w-5 h-5 flex items-center justify-center rounded-full bg-white/10 hover:bg-secondary hover:text-bg-dark transition-all text-[9px] text-white/80 backdrop-blur-sm cursor-pointer" aria-label="<?php esc_attr_e( 'Next', 'homeaffairs' ); ?>"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>

  <!-- Navigation Arrows -->
  <button type="button" class="hero-prev absolute left-2 top-1/2 -translate-y-1/2 z-20 w-7 h-7 rounded-full bg-primary-dark/80 text-white flex items-center justify-center hover:bg-secondary hover:text-primary-dark transition-all backdrop-blur-md border border-secondary/20">
    <i class="fas fa-chevron-left text-[9px]"></i>
  </button>
  <button type="button" class="hero-next absolute right-2 top-1/2 -translate-y-1/2 z-20 w-8 h-7 rounded-full bg-primary-dark/80 text-white flex items-center justify-center hover:bg-secondary hover:text-primary-dark transition-all backdrop-blur-md border border-secondary/20">
    <i class="fas fa-chevron-right text-[9px]"></i>
  </button>
</section>



<!-- ═══ MODERN COMPACT SLIM STATS BAR (MAROON & GOLD THEME) ═══ -->
<div class="stats-bar bg-white border-b-2 border-solid border-primary">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4">
      
      <!-- Stat Item 1 -->
      <div class="stat-item py-2 sm:py-2.5 text-center px-2 group transition-all duration-300 hover:bg-gray-50/60">
        <div class="stat-counter stat-num block text-lg sm:text-xl lg:text-2xl font-black text-primary-darker tracking-tight drop-shadow-sm group-hover:scale-105 transition-transform">1</div>
        <div class="text-[9px] sm:text-[10px] text-primary mt-0.5 font-bold uppercase tracking-wider">
          <?php esc_html_e( 'Department', 'homeaffairs' ); ?>
        </div>
      </div>
      <!-- Stat Item 2 -->
      <div class="stat-item py-2 sm:py-2.5 text-center px-2 group transition-all duration-300 hover:bg-gray-50/60">
        <div class="stat-counter stat-num block text-lg sm:text-xl lg:text-2xl font-black text-primary-darker tracking-tight drop-shadow-sm group-hover:scale-105 transition-transform">25</div>
        <div class="text-[9px] sm:text-[10px] text-primary mt-0.5 font-bold uppercase tracking-wider">
          <?php esc_html_e( 'District Secretariats', 'homeaffairs' ); ?>
        </div>
      </div>

      <!-- Stat Item 3 -->
      <div class="stat-item py-2 sm:py-2.5 text-center px-2 group transition-all duration-300 hover:bg-gray-50/60">
        <div class="stat-counter stat-num block text-lg sm:text-xl lg:text-2xl font-black text-primary-darker tracking-tight drop-shadow-sm group-hover:scale-105 transition-transform">331</div>
        <div class="text-[9px] sm:text-[10px] text-primary mt-0.5 font-bold uppercase tracking-wider">
          <?php esc_html_e( 'Divisional Secretariats', 'homeaffairs' ); ?>
        </div>
      </div>

      <!-- Stat Item 4 -->
      <div class="stat-item py-2 sm:py-2.5 text-center px-2 group transition-all duration-300 hover:bg-gray-50/60">
        <div class="stat-counter stat-num block text-lg sm:text-xl lg:text-2xl font-black text-primary-darker tracking-tight drop-shadow-sm group-hover:scale-105 transition-transform">14,022</div>
        <div class="text-[9px] sm:text-[10px] text-primary mt-0.5 font-bold uppercase tracking-wider">
          <?php esc_html_e( 'GN Divisions', 'homeaffairs' ); ?>
        </div>
      </div>

    </div>
  </div>
</div>


    
<!-- ═══ NEWS & ANNOUNCEMENTS SECTION (OPTIMIZED 12-COL GRID) ═══ -->
<section class="pt-10 pb-0 lg:pt-12 lg:pb-0 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-6 pb-4 border-b border-gray-200/60 gap-4">
      <div>
        <span class="inline-flex items-center gap-1.5 text-secondary font-bold text-[10px] tracking-[2px] uppercase bg-secondary/10 px-3 py-1 rounded-full mb-2">
          <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
          <?php esc_html_e( 'Latest Updates', 'homeaffairs' ); ?>
        </span>
        <h2 class="text-2xl sm:text-3xl font-black text-primary tracking-tight">
          <?php esc_html_e( 'News & Announcements', 'homeaffairs' ); ?>
        </h2>
      </div>
      <a href="<?php echo esc_url( $ha_news ); ?>" class="inline-flex items-center gap-2 bg-white text-primary hover:text-secondary-dark font-bold text-xs px-4 py-2 rounded-xl border border-slate-200/90 shadow-2xs hover:border-secondary hover:bg-secondary/5 transition-all group">
        <?php esc_html_e( 'View All News', 'homeaffairs' ); ?> 
        <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
      </a>
    </div>

    <!-- Main Grid Container (12 Columns) -->
    <div class="grid lg:grid-cols-12 gap-6 items-stretch">

      <!-- ─── LEFT: FEATURED MAIN NEWS CARD (Spans 5 Cols) ─── -->
      <div class="lg:col-span-5 bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md transition-all duration-300 flex flex-col justify-between h-full group">
        <div class="flex flex-col h-full justify-between">
          <div>
            <!-- Main Featured Image -->
            <div class="relative h-56 sm:h-64 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( content_url( '/uploads/sites/4/2026/07/9_Independence_Day_78th.jpeg' ) ); ?>" 
                   alt="<?php esc_attr_e( '78th Independence Day', 'homeaffairs' ); ?>" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
              <span class="absolute top-4 left-4 text-[9px] font-bold text-white uppercase tracking-wider bg-secondary px-3 py-1 rounded-full shadow-md">
                Featured News
              </span>
            </div>

            <!-- Content Area -->
            <div class="p-5">
              <div class="flex items-center gap-3 text-[11px] font-semibold text-gray-600 mb-2">
                <span><i class="far fa-calendar text-secondary mr-1"></i> February 4, 2025</span>
                <span>•</span>
                <span><i class="fas fa-tag text-secondary mr-1"></i> Official Event</span>
              </div>
              
              <h3 class="text-base sm:text-lg font-bold text-primary mb-2.5 leading-snug group-hover:text-secondary transition-colors line-clamp-2">
                <?php esc_html_e( '78th National Independence Day Celebrated with Grand Ceremony', 'homeaffairs' ); ?>
              </h3>
              
              <p class="text-xs text-gray-500 line-clamp-3 leading-relaxed">
                <?php esc_html_e( 'The Ministry organized a landmark national celebration bringing together government officials, military personnel, and thousands of citizens across the island.', 'homeaffairs' ); ?>
              </p>
            </div>
          </div>

          <!-- Card Footer -->
          <div class="px-5 py-3.5 bg-slate-50/50 text-xs font-bold text-primary flex items-center justify-between border-t border-gray-100 shrink-0">
            <span><?php esc_html_e( 'Read Full Article', 'homeaffairs' ); ?></span>
            <i class="fas fa-chevron-right text-[10px] text-secondary group-hover:translate-x-1 transition-transform"></i>
          </div>
        </div>
      </div>

      <!-- ─── RIGHT: 4 SMALL NEWS CARDS GRID (Spans 7 Cols, 2x2 Layout) ─── -->
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
        
        <!-- Small Card 1 -->
        <div class="bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="relative h-28 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/news/4.jpg' ); ?>" 
                   alt="News Item 1" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-3.5">
              <span class="inline-block text-[8px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-0.5 rounded-full mb-1.5">
                eGovernance
              </span>
              <h4 class="text-xs font-bold text-primary leading-snug line-clamp-2 group-hover:text-secondary transition-colors">
                <?php esc_html_e( 'National Digital Birth Certificate will be issued', 'homeaffairs' ); ?>
              </h4>
            </div>
          </div>
          <div class="px-3.5 pb-3 pt-1 text-[10px] font-medium text-gray-600 shrink-0 flex items-center gap-1.5 border-t border-gray-50 mt-2">
            <i class="far fa-calendar text-secondary"></i> Jan 20, 2025
          </div>
        </div>

        <!-- Small Card 2 -->
        <div class="bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="relative h-28 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/news/2.jpg' ); ?>" 
                   alt="News Item 2" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-3.5">
              <span class="inline-block text-[8px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-0.5 rounded-full mb-1.5">
                Anti-Drug Initiative
              </span>
              <h4 class="text-xs font-bold text-primary leading-snug line-clamp-2 group-hover:text-secondary transition-colors">
                <?php esc_html_e( 'Island-Wide Anti-Drug Campaign', 'homeaffairs' ); ?>
              </h4>
            </div>
          </div>
          <div class="px-3.5 pb-3 pt-1 text-[10px] font-medium text-gray-600 shrink-0 flex items-center gap-1.5 border-t border-gray-50 mt-2">
            <i class="far fa-calendar text-secondary"></i> Dec 12, 2024
          </div>
        </div>

        <!-- Small Card 3 (Duplicated/Reused Image Link) -->
        <div class="bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="relative h-28 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/news/3.jpg' ); ?>" 
                   alt="News Item 3" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-3.5">
              <span class="inline-block text-[8px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-0.5 rounded-full mb-1.5">
                Public Services
              </span>
              <h4 class="text-xs font-bold text-primary leading-snug line-clamp-2 group-hover:text-secondary transition-colors">
                <?php esc_html_e( 'Circuit Bungalow Online Booking System Launch', 'homeaffairs' ); ?>
              </h4>
            </div>
          </div>
          <div class="px-3.5 pb-3 pt-1 text-[10px] font-medium text-gray-600 shrink-0 flex items-center gap-1.5 border-t border-gray-50 mt-2">
            <i class="far fa-calendar text-secondary"></i> Nov 05, 2024
          </div>
        </div>

        <!-- Small Card 4 (Duplicated/Reused Image Link) -->
        <div class="bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="relative h-28 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/news/1.jpg' ); ?>" 
                   alt="News Item 4" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-3.5">
              <span class="inline-block text-[8px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-0.5 rounded-full mb-1.5">
                Administration
              </span>
              <h4 class="text-xs font-bold text-primary leading-snug line-clamp-2 group-hover:text-secondary transition-colors">
                <?php esc_html_e( 'District Secretariat Capacity Building Workshop', 'homeaffairs' ); ?>
              </h4>
            </div>
          </div>
          <div class="px-3.5 pb-3 pt-1 text-[10px] font-medium text-gray-600 shrink-0 flex items-center gap-1.5 border-t border-gray-50 mt-2">
            <i class="far fa-calendar text-secondary"></i> Oct 18, 2024
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
   
 <!-- ═══ COMPACT CREATIVE HERO SHOWCASE SECTION ═══ -->
<section class="py-8 lg:py-10 bg-gray-50 border-b border-gray-200/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
      .visionBannerSlider .swiper-pagination-bullet { background: rgba(89, 21, 33, 0.4); opacity: 0.7; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2); transition: all 0.3s; }
      .visionBannerSlider .swiper-pagination-bullet-active { background: #dfa21f !important; width: 18px; border-radius: 9999px; opacity: 1; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3); }
    </style>

    <!-- Main Grid with Auto Height Match -->
    <div class="grid lg:grid-cols-12 gap-4 items-stretch">

      <!-- ─── LEFT: COMPACT FEATURE HIGHLIGHT CARD (4 Cols) ─── -->
      <div class="lg:col-span-4 relative overflow-hidden rounded-2xl bg-gradient-to-br from-primary-darker via-primary-dark to-primary p-4 sm:p-5 text-white shadow-md border border-secondary/25 group flex flex-col justify-between h-full">
        
        <!-- Background Accents -->
        <div class="absolute -right-10 -top-10 w-32 h-32 bg-secondary/20 rounded-full blur-2xl group-hover:bg-secondary/30 transition-all duration-700 pointer-events-none"></div>
        <div class="absolute -left-10 -bottom-10 w-28 h-28 bg-primary-light/35 rounded-full blur-xl group-hover:scale-125 transition-all duration-700 pointer-events-none"></div>

        <!-- Top Content Area -->
        <div class="relative z-10 space-y-2">
          
          <!-- Live Status Badge -->
          <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-secondary/15 backdrop-blur-md border border-secondary/35 text-[9px] font-bold tracking-wider text-secondary-light uppercase shadow-sm">
            <span class="relative flex h-1.5 w-1.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
              <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-secondary"></span>
            </span>
            <?php esc_html_e( 'Smart e-Government Era', 'homeaffairs' ); ?>
          </div>

          <!-- Main Title -->
          <h2 class="text-base sm:text-lg lg:text-xl font-extrabold tracking-tight text-white leading-tight">
            <?php esc_html_e( 'Digital Transformation & Smart Services', 'homeaffairs' ); ?>
          </h2>

          <!-- Description -->
          <p class="text-[11px] text-secondary-light/90 font-normal leading-relaxed line-clamp-2 sm:line-clamp-3">
            <?php esc_html_e( 'Empowering citizens with seamless online services, digital ID integration, and cloud-first governance.', 'homeaffairs' ); ?>
          </p>

          <!-- Quick Micro-Features -->
          <div class="pt-1 flex flex-wrap gap-1.5 text-[9px] text-white/90 font-semibold">
            <span class="px-2.5 py-0.5 rounded-full bg-black/25 border border-secondary/30 flex items-center gap-1.5 backdrop-blur-sm">
              <i class="fas fa-file-shield text-secondary text-[8px]" aria-hidden="true"></i> <?php esc_html_e( 'Paperless', 'homeaffairs' ); ?>
            </span>
            <span class="px-2.5 py-0.5 rounded-full bg-black/25 border border-secondary/30 flex items-center gap-1.5 backdrop-blur-sm">
              <i class="fas fa-id-card text-secondary text-[8px]" aria-hidden="true"></i> <?php esc_html_e( 'Digital ID', 'homeaffairs' ); ?>
            </span>
            <span class="px-2.5 py-0.5 rounded-full bg-black/25 border border-secondary/30 flex items-center gap-1.5 backdrop-blur-sm">
              <i class="fas fa-bolt text-secondary text-[8px]" aria-hidden="true"></i> <?php esc_html_e( '24/7 Portal', 'homeaffairs' ); ?>
            </span>
          </div>

        </div>

        <!-- Bottom Action Button (Single Button) -->
        <div class="relative z-10 pt-3 mt-3 border-t border-white/15 flex">
          <a href="<?php echo esc_url( $ha_services ); ?>" class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg bg-secondary hover:bg-secondary-dark text-primary-dark font-extrabold text-[11px] sm:text-xs uppercase tracking-wider transition-all duration-300 shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
            <span><?php esc_html_e( 'Explore Services', 'homeaffairs' ); ?></span>
            <i class="fas fa-arrow-right text-[10px]" aria-hidden="true"></i>
          </a>
        </div>

      </div>

      <!-- ─── RIGHT: FULL-FILL COMPACT BANNER CAROUSEL (8 Cols) ─── -->
      <div class="lg:col-span-8 bg-white rounded-2xl shadow-sm relative overflow-hidden flex items-center">
        
        <div class="swiper visionBannerSlider w-full h-full rounded-2xl overflow-hidden bg-white">
          <div class="swiper-wrapper h-full">

            <!-- Slide 1 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/d.png' ); ?>" 
                     alt="Government Banner 1" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/e.png' ); ?>" 
                     alt="Government Banner 2" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/a.jpg' ); ?>" 
                     alt="Government Banner 3" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/b.jpeg' ); ?>" 
                     alt="Government Banner 4" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/c.jpeg' ); ?>" 
                     alt="Government Banner 5" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/f.png' ); ?>" 
                     alt="Government Banner 6" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

            <!-- Slide 7 -->
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url($ha_about); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_uri . '/assets/images/banner/g.png' ); ?>" 
                     alt="Government Banner 7" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>

          </div>

          <!-- Subtle Dots Navigation -->
          <div class="swiper-pagination !bottom-2"></div>

          <!-- Minimal Floating Arrows -->
          <div class="swiper-button-next !text-white !w-6 !h-6 after:!text-[10px] bg-primary-dark/80 hover:bg-secondary hover:!text-primary-dark backdrop-blur-md rounded-full transition-all border border-secondary/30"></div>
          <div class="swiper-button-prev !text-white !w-6 !h-6 after:!text-[10px] bg-primary-dark/80 hover:bg-secondary hover:!text-primary-dark backdrop-blur-md rounded-full transition-all border border-secondary/30"></div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- Swiper JS Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".visionBannerSlider", {
      loop: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      effect: "slide", 
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
</script>




<!-- ═══ DOWNLOADS / QUICK RESOURCES (COMPACT WITH YELLOW BORDER) ═══ -->
<section class="py-12 lg:py-16 bg-warm-white border-t border-b border-slate-200/80 relative overflow-hidden">
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    
    <!-- Compact Header Section -->
    <div class="text-center mb-5">
     
      <h2 class="text-xl sm:text-2xl font-extrabold text-primary tracking-tight">
        <?php esc_html_e( 'Quick Access', 'homeaffairs' ); ?>
      </h2>
    </div>

    <!-- 4-Column Responsive Grid (Tight Gap) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
      
      <!-- Card 1: Circulars -->
      <a href="<?php echo esc_url( $ha_circulars ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-file-alt"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Circulars', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Home Affairs directives', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 2: Exam Results -->
      <a href="<?php echo esc_url( home_url( '/exam-results/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-chart-simple"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Exam Results', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Verified departmental marks', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 3: Transfers -->
      <a href="<?php echo esc_url( home_url( '/transfer-procedures/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-arrows-rotate"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Transfers', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Schedules and guidelines', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 4: Procurement -->
      <a href="<?php echo esc_url( home_url( '/procurements-notices/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-receipt"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Procurement', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Active government tenders', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 5: eforms -->
      <a href="<?php echo esc_url( home_url( '/e-forms/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-laptop-file"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'E Forms', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Downloadable application templates', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 6: Circuit Bungalows -->
      <a href="<?php echo esc_url( home_url( '/circuit-bungalows/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-house-user"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Circuit Bungalows', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Reservations and guidelines', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 7: List of GN Division & Villages -->
      <a href="<?php echo esc_url( home_url( '/gn-divisions/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-map-location-dot"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'List of GN Division & Villages', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Regional administrative directory', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 8: Internal Affairs Unit -->
      <a href="<?php echo esc_url( home_url( '/internal-affairs-unit/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-shield-halved"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Internal Affairs Unit', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Integrity & anti-corruption oversight', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

    </div>
  </div>
</section>


<!-- ═══ RTI BANNER & DYNAMIC TABS CIRCULARS WIDGET (COMPACT HEIGHT) ═══ -->
<section class="py-12 lg:py-16 bg-slate-50 border-t border-b border-gray-200/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-12 gap-5 items-stretch">

      <!-- ─── LEFT: RTI HERO BANNER (COMPACT HEIGHT) ─── -->
      <div class="lg:col-span-7 rounded-2xl p-5 sm:p-6 text-white shadow-lg flex flex-col justify-between relative overflow-hidden group min-h-[280px] sm:min-h-[320px]" style="background-image: url('<?php echo esc_url( $ha_uri . '/assets/images/governance/RTI3.jpg' ); ?>'); background-size: cover; background-position: center;">
        
            <!-- Ambient Dark Gradient Overlay for optimal contrast -->
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/40 pointer-events-none"></div>

        <!-- Upper Content -->
        <div class="relative z-10">
          <div class="flex items-center justify-between mb-3">
            <span class="inline-flex items-center gap-1.5 bg-slate-950/80 backdrop-blur-md text-secondary-light font-extrabold text-[10px] tracking-[1.5px] uppercase px-3 py-1 rounded-full border border-secondary-light/40 shadow-sm">
              <i class="fas fa-scale-balanced text-secondary-light"></i> <?php esc_html_e( 'Transparency Through Information', 'homeaffairs' ); ?>
            </span>
            <span class="hidden sm:inline-block text-[11px] font-semibold text-white bg-slate-950/70 px-2.5 py-0.5 rounded border border-white/20 shadow-sm">
              Act No. 12 of 2016
            </span>
            
          </div>

          <h2 class="text-xl sm:text-2xl lg:text-3xl font-black mb-2 leading-tight tracking-tight text-secondary-light">
            <?php esc_html_e( 'Right to Information', 'homeaffairs' ); ?>
          </h2>

          <p class="text-white text-xs max-w-lg leading-relaxed mb-4 font-semibold drop-shadow-[0_1px_3px_rgba(0,0,0,0.8)]">
            <?php esc_html_e( 'Access official government documents and public information, submit Right to Information (RTI) applications seamlessly, and track active disclosures effortlessly through our central transparent portal.', 'homeaffairs' ); ?>
          </p>
        </div>

        <!-- Lower Action Bar -->
        <div class="relative z-10 flex flex-wrap items-center justify-between gap-3 mt-auto pt-3.5 border-t border-white/25">
          <a href="<?php echo esc_url( home_url( '/rti/' ) ); ?>" class="bg-secondary hover:bg-secondary-dark text-slate-950 font-black px-5 py-2.5 rounded-xl text-xs inline-flex items-center gap-2 shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
            <i class="fas fa-file-signature text-xs"></i> <?php esc_html_e( 'Submit RTI Request', 'homeaffairs' ); ?>
            <i class="fas fa-arrow-right text-[10px]"></i>
          </a>

          <div class="flex items-center gap-2.5">
            <span class="text-[10px] font-bold text-white hidden sm:inline-block drop-shadow">Ensuring Citizens' Right to Information</span>
            <div class="flex items-center gap-1">
              <span class="w-4 h-1.5 bg-secondary rounded-full shadow-sm"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- ─── RIGHT: 1905 ANTI-CORRUPTION HOTLINE BANNER (EXACT BRAND COLORS) ─── -->
      <div class="lg:col-span-5 rounded-2xl p-5 sm:p-6 text-white shadow-lg flex flex-col justify-between relative overflow-hidden group min-h-[280px] sm:min-h-[320px]" style="background-image: url('<?php echo esc_url( $ha_uri . '/assets/images/governance/19051.jpg' ); ?>'); background-size: cover; background-position: center;">
        
          <!-- Ambient Dark Gradient Overlay for optimal contrast -->
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/40 pointer-events-none"></div>


        <!-- Upper Content -->
        <div class="relative z-10">
          <div class="flex items-center justify-between mb-3">
            <span class="inline-flex items-center gap-1.5 bg-slate-950/80 backdrop-blur-md text-secondary-light font-extrabold text-[10px] tracking-[1.5px] uppercase px-3 py-1 rounded-full border border-secondary-light/40 shadow-sm">
              <i class="fas fa-shield-halved text-secondary-light"></i> <?php esc_html_e( 'Report Complaints, Grievances & Issues', 'homeaffairs' ); ?>
            </span>
          
            <span class="hidden sm:inline-block text-[11px] font-semibold text-white bg-slate-950/70 px-2.5 py-0.5 rounded border border-white/20 shadow-sm">
              Shortcode 1905
            </span>
          </div>

          <h2 class="text-xl sm:text-2xl lg:text-3xl font-black mb-2 leading-tight tracking-tight text-secondary-light">
            <?php esc_html_e( 'Grievances Hotline - 1905', 'homeaffairs' ); ?>
          </h2>

          <p class="text-white text-xs max-w-lg leading-relaxed mb-4 font-semibold drop-shadow-[0_1px_3px_rgba(0,0,0,0.8)]">
            <?php esc_html_e('Inform us of your grievances regarding unsatisfactory services provided by institution which are under the ministry of public administration, provincial councils & local goverments.', 'homeaffairs' ); ?>
          </p>
        </div>

        <!-- Lower Action Bar -->
        <div class="relative z-10 flex flex-wrap items-center justify-between gap-3 mt-auto pt-3.5 border-t border-white/25">
          <a href="<?php echo esc_url( home_url( '/1905-2/' ) ); ?>" class="bg-secondary hover:bg-secondary-dark text-slate-950 font-black px-5 py-2.5 rounded-xl text-xs inline-flex items-center gap-2 shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
            <i class="fas fa-info-circle"></i> <?php esc_html_e( 'View More', 'homeaffairs' ); ?>
            <i class="fas fa-arrow-right text-[10px]"></i>
          </a>

          <div class="flex items-center gap-2.5">
            <span class="text-[10px] font-bold text-white hidden sm:inline-block drop-shadow">Direct Citizen Response & Issue Resolution</span>
            <div class="flex items-center gap-1">
              <span class="w-4 h-1.5 bg-secondary rounded-full shadow-sm"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
            </div>
          </div>
        </div>

      </div>
  </div>
</section>


<!-- Tab Switching Script -->
<script>
  function switchTab(evt, tabName) {
    let contents = document.getElementsByClassName("tab-content");
    for (let i = 0; i < contents.length; i++) {
      contents[i].classList.add("hidden");
    }

    let buttons = document.getElementsByClassName("tab-btn");
    for (let i = 0; i < buttons.length; i++) {
      buttons[i].classList.remove("bg-primary-dark", "text-white", "shadow-md");
      buttons[i].classList.add("bg-slate-100", "text-slate-700", "hover:bg-primary-dark/10", "hover:text-primary-dark");
      let icon = buttons[i].querySelector("i");
      if(icon) {
        icon.classList.remove("text-secondary");
        icon.classList.add("text-slate-600");
      }
    }

    document.getElementById(tabName).classList.remove("hidden");
    evt.currentTarget.classList.remove("bg-slate-100", "text-slate-700", "hover:bg-primary-dark/10", "hover:text-primary-dark");
    evt.currentTarget.classList.add("bg-primary-dark", "text-white", "shadow-md");
    let activeIcon = evt.currentTarget.querySelector("i");
    if(activeIcon) {
      activeIcon.classList.remove("text-slate-600");
      activeIcon.classList.add("text-secondary");
    }
  }
</script>



<!-- ═══ KEY SERVICES & NOTICE BOARDS (LUXURY MAROON & GOLD TOUCH) ═══ -->
<section class="py-12 lg:py-16 bg-warm-white relative overflow-hidden">

  <!-- 1. Smooth Soft Mesh Base Layer -->
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary/[0.03] via-transparent to-secondary/[0.03] pointer-events-none"></div>

  <!-- 2. High Transparency Maroon Top-Right Curve Glow -->
  <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-primary/[0.06] rounded-full blur-[120px] pointer-events-none"></div>

  <!-- 3. High Transparency Gold Bottom-Left Curve Glow -->
  <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-secondary/[0.08] rounded-full blur-[120px] pointer-events-none"></div>

  <!-- 4. Subtle Elegant Curved Wave Lines Overlay -->
  <div class="absolute inset-0 opacity-[0.12] pointer-events-none mix-blend-overlay" 
       style="background-image: radial-gradient(circle at 50% 50%, var(--color-primary) 1px, transparent 1px), radial-gradient(circle at 0% 100%, var(--color-secondary) 1px, transparent 1px); background-size: 40px 40px;">
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    
    <!-- Section Header -->
    <div class="text-center mb-6 lg:mb-8 scroll-animate">
      <span class="inline-flex items-center gap-1.5 text-primary font-bold text-[10px] sm:text-[11px] tracking-[2px] uppercase bg-primary/10 px-3 py-0.5 rounded-full mb-1.5 border border-primary/20">
        <i class="fas fa-layer-group text-[9px] text-primary"></i>
        <?php esc_html_e( 'What We Offer', 'homeaffairs' ); ?>
      </span>
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-primary tracking-tight mb-1.5">
        <?php esc_html_e( 'Information on Subsidies', 'homeaffairs' ); ?>
      </h2>
    </div>

    <!-- Grid (3 Columns) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

      <!-- Card 1: Publications & Downloads -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-file-arrow-down"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Resources</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Publications & Downloads', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Access official administrative reports, acts, guidelines, and downloadable forms.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Publications', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 2: Scholarships -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-user-graduate"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Education</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Scholarships', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Explore local and international scholarship opportunities available for public officers.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/scholarships/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Scholarships', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 3: Services -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-handshake-angle"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Public Services</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Services', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Explore citizen services, administrative assistance, permits, and support provided by Home Affairs.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Services', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 4: National Anthem & Flag -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-flag"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Symbols</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'National Anthem & Flag', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Official guidelines, protocols, downloads, and rules regarding the National Flag and Anthem.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/national-anthem-flag-protocol/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Details', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 5: Government Calendar -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-calendar-days"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Schedule</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Government Calendar', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Official public holidays, mercantile holidays, and administrative schedule for the year.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/government-calendar/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Calendar', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 6: Vacancies -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-briefcase"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Careers</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Vacancies', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Find current job openings, public recruitment notices, and career opportunities.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/vacancies/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Vacancies', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ═══ CTA SECTION (COMPACT HEIGHT - MATCHING HERO BANNER) ═══ -->
<section class="relative py-12 lg:py-16 text-center overflow-hidden bg-cover bg-center" style="background-image: url('<?php echo esc_url( $ha_uri . '/assets/images/home-contact.jpg' ); ?>');">
  
  <!-- Subtle Dark Overlay for better contrast -->
  <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

  <!-- Content -->
  <div class="max-w-3xl mx-auto px-4 relative z-10">

    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold mb-2.5" style="color: var(--color-secondary-light) !important; -webkit-text-fill-color: var(--color-secondary-light) !important; text-shadow: 0 2px 8px rgba(0,0,0,0.8);">
      <?php esc_html_e( 'Need Assistance with a Government Service?', 'homeaffairs' ); ?>
    </h2>

   
    <p class="text-white/90 text-xs sm:text-sm lg:text-base mb-5 max-w-2xl mx-auto font-medium">
      <?php esc_html_e( 'Contact your nearest Divisional Secretariat or reach our ministry helpdesk directly — we\'re here to help every citizen, every day.', 'homeaffairs' ); ?>
    </p>

    
    <div class="flex gap-2.5 sm:gap-3 justify-center flex-wrap">
      
     <a href="<?php echo esc_url( $ha_contact ); ?>" class="cta-btn inline-flex items-center gap-2 bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-6 py-2.5 rounded-full text-xs sm:text-sm shadow-md hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0 transition-all border border-secondary-light/30">
  <i class="fas fa-phone-alt text-xs"></i> <?php esc_html_e( 'Contact Us', 'homeaffairs' ); ?>
</a>
    </div>
  </div>
</section>

<!-- ═══ RELATED ORGANIZATIONS / INSTITUTIONS ═══ -->
<section class="py-12 lg:py-16 bg-white border-t border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <!-- Section Header with Line Divider -->
    <div class="relative flex items-center justify-center mb-8">
      <div class="flex-grow border-t border-slate-200"></div>
      <h2 class="text-base sm:text-lg font-black text-primary px-6 bg-white uppercase tracking-wider">
        <?php esc_html_e( 'Related Organizations', 'homeaffairs' ); ?>
      </h2>
      <div class="flex-grow border-t border-slate-200"></div>
    </div>

    <!-- Horizontal Cards Grid (2 columns on mobile, 4 columns on large screens) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <!-- Card 1: Ministry of Public Administration -->
      <a href="https://moha.gov.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( 'Ministry of Public Administration, Provincial Councils and Local Government', 'homeaffairs' ); ?>
        </span>
      </a>

      <!-- Card 2: Public Service Commission -->
      <a href="https://psc.gov.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( 'Public Service Commission', 'homeaffairs' ); ?>
        </span>
      </a>

      <!-- Card 3: Registrar General's Department -->
      <a href="https://www.rgd.gov.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( "Registrar General's Department", 'homeaffairs' ); ?>
        </span>
      </a>

      <!-- Card 4: SLIDA -->
      <a href="https://slida.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( 'Sri Lanka Institute of Development Administration', 'homeaffairs' ); ?>
        </span>
      </a>

    </div>

    <!-- Indicator Dots at the bottom -->
    <div class="flex items-center justify-center gap-1.5 mt-6">
      <span class="w-4 h-1.5 rounded-full bg-secondary inline-block"></span>
      <span class="w-1.5 h-1.5 rounded-full bg-slate-300 inline-block"></span>
      <span class="w-1.5 h-1.5 rounded-full bg-slate-300 inline-block"></span>
    </div>

  </div>
</section>

<?php get_footer(); ?>
