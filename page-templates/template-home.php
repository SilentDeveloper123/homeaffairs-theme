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

get_header();

// Carbon Fields Section Visibility & Data for Home Page
$page_id = get_the_ID();
if ( ! $page_id ) {
	$page_id = (int) get_option( 'page_on_front' );
}

$ha_home_show_slider         = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_slider' ) ?: 'show' ) : 'show';
$ha_home_show_notices        = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_notices' ) ?: 'show' ) : 'show';
$ha_home_show_ticker         = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_ticker' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_breaking_news' ) ?: 'show' ) ) : 'show';
$ha_home_show_stats          = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_stats' ) ?: 'show' ) : 'show';
$ha_home_show_news           = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_news' ) ?: 'show' ) : 'show';
$ha_home_show_adv1_dt        = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_adv1_dt' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_initiatives' ) ?: 'show' ) ) : 'show';
$ha_home_show_adv1_banners   = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_adv1_banners' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_initiatives' ) ?: 'show' ) ) : 'show';
$ha_home_show_services       = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_services' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_quick_access' ) ?: 'show' ) ) : 'show';
$ha_home_show_adv2_rti       = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_adv2_rti' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_leadership' ) ?: 'show' ) ) : 'show';
$ha_home_show_adv2_1905      = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_adv2_1905' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_leadership' ) ?: 'show' ) ) : 'show';
$ha_home_show_downloads      = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_downloads' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_qa3' ) ?: 'show' ) ) : 'show';
$ha_home_show_contact_banner = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_contact_banner' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_cta' ) ?: 'show' ) ) : 'show';
$ha_home_show_institutions   = function_exists( 'carbon_get_post_meta' ) ? ( carbon_get_post_meta( $page_id, 'ha_home_show_institutions' ) ?: ( carbon_get_post_meta( $page_id, 'ha_home_show_orgs' ) ?: 'show' ) ) : 'show';

// Retrieve Hero Repeater Slides (No seeder fallback)
$raw_slides = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_slides' ) : array();
$slides     = ( ! empty( $raw_slides ) && is_array( $raw_slides ) ) ? $raw_slides : array();

// Special Notices Column Options
$notices_badge   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_notices_title' ) : '';
$notices_count   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_notices_count' ) : '3';
$notices_count   = ! empty( $notices_count ) ? intval( $notices_count ) : 3;
$notices_cat     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_notices_category' ) : '';
$notices_all_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_notices_view_all_url' ) : '';
$notices_btn_text = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_notices_btn_text' ) : '';

$hero_visible = ( 'hide' !== $ha_home_show_slider || 'hide' !== $ha_home_show_notices || 'hide' !== $ha_home_show_ticker );
?>

<?php if ( $hero_visible ) : ?>
<!-- ═══ HERO SLIDER (COMPACT HEIGHT MAROON & GOLD THEME) ═══ -->
<section id="main-content" tabindex="-1" class="pt-8 pb-14 lg:pt-10 lg:pb-16 hero-slider main-slider relative overflow-hidden bg-primary-dark">
  
  <!-- Atmospheric Gradient Overlay (Washes over ::after underlayer and blends across section) -->
  <div class="hero-gradient-overlay"></div>

  <?php if ( 'hide' !== $ha_home_show_slider ) : ?>
  <!-- Slider Background Stage (Right Area on Desktop with Middle Blend, No Full-Width Photo) -->
  <div class="hero-slider-bg-stage">
    <?php foreach ( $slides as $i => $s ) :
      $active_cls = ( 0 === $i ) ? ' active' : '';
      $img_url    = function_exists( 'ha_resolve_image_url' ) ? ha_resolve_image_url( ! empty( $s['slide_image'] ) ? $s['slide_image'] : '', 'full', function_exists( 'ha_placeholder_image' ) ? ha_placeholder_image( 800, 400, 'Slide Image' ) : 'https://placehold.co/800x400?text=Slide+Image' ) : 'https://placehold.co/800x400?text=Slide+Image';
    ?>
      <div class="slide-bg<?php echo esc_attr( $active_cls ); ?>" style="background-image: url('<?php echo esc_url( $img_url ); ?>')"></div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch justify-between">
      
      <?php if ( 'hide' !== $ha_home_show_slider ) : ?>
      <!-- Left Content / Slides -->
      <div class="w-full <?php echo ( 'hide' === $ha_home_show_notices ) ? 'lg:w-full' : 'lg:w-[60%] xl:w-[62%]'; ?> min-w-0 flex flex-col justify-between">
        <div class="hero-slides relative">
          
          <?php foreach ( $slides as $i => $s ) :
            $active_cls = ( 0 === $i ) ? ' active' : '';
            $subtitle   = ! empty( $s['slide_subtitle'] ) ? $s['slide_subtitle'] : '';
            $title      = ! empty( $s['slide_title'] ) ? $s['slide_title'] : '';
            $desc       = ! empty( $s['slide_desc'] ) ? $s['slide_desc'] : '';
            $btn_text   = ! empty( $s['slide_btn_text'] ) ? $s['slide_btn_text'] : '';
            $btn_url    = ! empty( $s['slide_btn_url'] ) ? $s['slide_btn_url'] : '';
            $btn_target = ! empty( $s['slide_btn_target'] ) ? $s['slide_btn_target'] : '_self';
          ?>
          <!-- Slide <?php echo $i + 1; ?> -->
          <div class="hero-slide<?php echo esc_attr( $active_cls ); ?>">
            <?php if ( $subtitle ) : ?>
              <div class="inline-flex items-center gap-1.5 bg-secondary/20 text-secondary-light text-[9px] font-semibold tracking-wider uppercase px-2.5 py-0.5 rounded-full mb-2 backdrop-blur-md border border-secondary/30">
                <i class="fas fa-landmark text-[8px] text-secondary"></i> <?php echo esc_html( $subtitle ); ?>
              </div>
            <?php endif; ?>
      
            <?php if ( $title ) : ?>
              <h1 class="text-lg sm:text-xl lg:text-2xl font-bold !text-white leading-snug mb-2 tracking-tight">
                <?php echo esc_html( $title ); ?>
              </h1>
            <?php endif; ?>

            <?php if ( $desc ) : ?>
              <p class="text-[11px] sm:text-xs text-secondary-light/85 max-w-lg mb-4 leading-relaxed font-normal">
                <?php echo esc_html( $desc ); ?>
              </p>
            <?php endif; ?>

            <?php if ( ! empty( $btn_text ) ) : ?>
              <div class="flex gap-2.5 justify-start flex-wrap">
                <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $btn_target ); ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                  <i class="fas fa-users-cog text-[10px]"></i> <?php echo esc_html( $btn_text ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
                </a>
              </div>
            <?php endif; ?>
          </div>
          <?php endforeach; ?>

        </div>

        <?php if ( count( $slides ) > 1 ) : ?>
        <!-- Pagination Dots -->
        <div class="flex items-center gap-2 mt-4" role="tablist" aria-label="<?php esc_attr_e( 'Slide pagination', 'homeaffairs' ); ?>">
          <?php foreach ( $slides as $i => $s ) : ?>
            <button type="button" class="hero-dot<?php echo ( 0 === $i ) ? ' active' : ''; ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Slide %d', 'homeaffairs' ), $i + 1 ) ); ?>"></button>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <?php if ( 'hide' !== $ha_home_show_notices ) : ?>
      <!-- Right Special Notices Tiles (Exact Original Sizes with White Text) -->
      <div class="hero-special-tiles hero-special-titles flex flex-col gap-1.5 w-full <?php echo ( 'hide' === $ha_home_show_slider ) ? 'lg:max-w-md mx-auto' : 'lg:w-60 lg:ml-auto'; ?> shrink-0 justify-center z-10">
        <div class="flex items-center gap-2 mb-0.5">
          <span class="special-notices-badge text-white border border-secondary/30 text-[8px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full flex items-center gap-1 backdrop-blur-md shadow-sm">
            <i class="fas fa-bullhorn text-[7px] text-secondary"></i> <?php echo esc_html( $notices_badge ); ?>
          </span>
        </div>

        <?php
        $sn_args = array(
          'post_type'      => 'special_notice',
          'posts_per_page' => $notices_count,
          'post_status'    => 'publish',
        );
        if ( ! empty( $notices_cat ) ) {
          $sn_args['tax_query'] = array(
            array(
              'taxonomy' => 'notice_category',
              'field'    => 'slug',
              'terms'    => $notices_cat,
            ),
          );
        }
        $sn_query = new WP_Query( $sn_args );

        if ( $sn_query->have_posts() ) :
          while ( $sn_query->have_posts() ) : $sn_query->the_post();
            $notice_id    = get_the_ID();
            $notice_icon  = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $notice_id, 'notice_icon', 'fas fa-bullhorn' ) : ( function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( carbon_get_post_meta( $notice_id, 'notice_icon' ), 'fas fa-bullhorn' ) : 'fas fa-bullhorn' );
            $custom_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $notice_id, 'notice_custom_title' ) : '';
            $n_title      = $custom_title ?: get_the_title();
            $n_short_desc = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $notice_id, 'notice_short_desc' ) : '';
            $n_desc       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $notice_id, 'notice_desc' ) : '';
            $tile_desc    = ! empty( $n_short_desc ) ? $n_short_desc : ( ! empty( $n_desc ) ? $n_desc : get_the_excerpt() );
            $n_file      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $notice_id, 'notice_attachment' ) : '';
            $n_url       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $notice_id, 'notice_url' ) : '';
            $n_link      = ! empty( $n_file ) ? $n_file : ( ! empty( $n_url ) ? $n_url : get_permalink() );
            $is_download = ! empty( $n_file );
        ?>
          <a href="<?php echo esc_url( $n_link ); ?>" <?php echo $is_download ? 'target="_blank" rel="noopener noreferrer"' : ''; ?> 
             class="tile border border-secondary/20 border-l-2 border-l-secondary rounded p-2 backdrop-blur-md transition-all group shadow-sm">
            <div class="flex items-start gap-2">
              <div class="tile-icon w-5 h-5 bg-primary-dark/80 rounded flex items-center justify-center shrink-0 group-hover:bg-secondary transition-all">
                <i class="<?php echo esc_attr( $notice_icon ); ?> text-white group-hover:text-white text-[9px]"></i>
              </div>
              <div class="min-w-0 flex-1">
                <strong class="tile-text block text-[10px] font-medium text-white transition-colors line-clamp-1">
                  <?php echo esc_html( $n_title ); ?>
                </strong>
                <?php if ( $tile_desc ) : ?>
                  <span class="tile-date text-[8.5px] text-white/80 block line-clamp-1">
                    <?php echo esc_html( $tile_desc ); ?>
                  </span>
                <?php endif; ?>
              </div>
              <?php if ( $is_download ) : ?>
                <span class="shrink-0 text-secondary-light/70 group-hover:text-secondary text-[8px] mt-0.5"><i class="fas fa-file-pdf"></i></span>
              <?php endif; ?>
            </div>
          </a>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          // Static default notices when no CPT posts have been published yet
        ?>
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
        <?php endif; ?>

        <!-- View All Link -->
        <?php
        $display_notices_btn_text = ! empty( $notices_btn_text ) ? $notices_btn_text : __( 'View all notices', 'homeaffairs' );
        if ( ! empty( $notices_all_url ) || ! empty( $notices_btn_text ) ) :
        ?>
        <a href="<?php echo esc_url( $notices_all_url ); ?>" 
           class="view-all-notices text-primary hover:text-primary font-bold text-[9.5px] transition-colors inline-flex items-center gap-1 mt-0.5 px-0.5">
          <?php echo esc_html( $display_notices_btn_text ); ?> <i class="fas fa-arrow-right text-[7.5px] text-primary"></i>
        </a>
        <?php endif; ?>
      </div>
      <?php endif; ?>

    </div>
  </div>

  <?php if ( 'hide' !== $ha_home_show_ticker ) : ?>
  <!-- Breaking News Overlay -->
  <div class="news-ticker news-ticker--overlay absolute inset-x-0 bottom-0 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center h-9 sm:h-10">
      <span class="bg-secondary text-bg-dark text-[9px] sm:text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-1 rounded mr-3 shrink-0 flex items-center gap-1 shadow-sm"><i class="fas fa-bolt text-[8px]"></i> <?php esc_html_e( 'Breaking', 'homeaffairs' ); ?></span>
      <div class="ticker-window overflow-hidden flex-1 relative h-full">
        <div class="ticker-track text-[11px] sm:text-xs font-medium text-white/90" id="tickerTrack">
          <?php
          $ticker_news_query = new WP_Query( array(
            'post_type'      => 'news_announcement',
            'posts_per_page' => 8,
            'post_status'    => 'publish',
          ) );

          if ( $ticker_news_query->have_posts() ) :
            while ( $ticker_news_query->have_posts() ) : $ticker_news_query->the_post();
              $t_id   = get_the_ID();
              $t_file = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $t_id, 'news_attachment' ) : '';
              $t_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $t_id, 'news_attachment_url' ) : '';
              $t_link = ! empty( $t_file ) ? $t_file : ( ! empty( $t_url ) ? $t_url : get_permalink() );
          ?>
            <a href="<?php echo esc_url( $t_link ); ?>" <?php echo ! empty( $t_file ) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="ticker-item">
              <i class="fas fa-circle text-[4px] text-secondary shrink-0" aria-hidden="true"></i>
              <span class="ticker-title font-medium text-white"><?php the_title(); ?></span>
              <span class="ticker-sep text-secondary font-bold mx-1">-</span>
              <span class="ticker-date text-secondary-light/90 text-[10px] sm:text-[11px] font-medium"><?php echo esc_html( get_the_date( 'd F Y' ) ); ?></span>
            </a>
          <?php
            endwhile;
            wp_reset_postdata();
          endif; ?>
        </div>
      </div>
      <div class="ticker-nav flex items-center gap-1 ml-3 shrink-0">
        <button type="button" class="ticker-prev w-5 h-5 flex items-center justify-center rounded-full bg-white/10 hover:bg-secondary hover:text-bg-dark transition-all text-[9px] text-white/80 backdrop-blur-sm cursor-pointer" aria-label="<?php esc_attr_e( 'Previous', 'homeaffairs' ); ?>"><i class="fas fa-chevron-left"></i></button>
        <button type="button" class="ticker-next w-5 h-5 flex items-center justify-center rounded-full bg-white/10 hover:bg-secondary hover:text-bg-dark transition-all text-[9px] text-white/80 backdrop-blur-sm cursor-pointer" aria-label="<?php esc_attr_e( 'Next', 'homeaffairs' ); ?>"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ( 'hide' !== $ha_home_show_slider && count( $slides ) > 1 ) : ?>
  <!-- Navigation Arrows -->
  <button type="button" class="hero-prev absolute left-2 top-1/2 -translate-y-1/2 z-20 w-7 h-7 rounded-full bg-primary-dark/80 text-white flex items-center justify-center hover:bg-secondary hover:text-primary-dark transition-all backdrop-blur-md border border-secondary/20">
    <i class="fas fa-chevron-left text-[9px]"></i>
  </button>
  <button type="button" class="hero-next absolute right-2 top-1/2 -translate-y-1/2 z-20 w-8 h-7 rounded-full bg-primary-dark/80 text-white flex items-center justify-center hover:bg-secondary hover:text-primary-dark transition-all backdrop-blur-md border border-secondary/20">
    <i class="fas fa-chevron-right text-[9px]"></i>
  </button>
  <?php endif; ?>
</section>
<?php endif; // end hero_visible ?>



<?php if ( "hide" !== $ha_home_show_stats ) :
  $raw_stats   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_stats' ) : array();
  $stats_items = ( ! empty( $raw_stats ) && is_array( $raw_stats ) ) ? $raw_stats : array();
  $stat_cols = min( 4, max( 1, count( $stats_items ) ) );
?>
<!-- ═══ MODERN COMPACT SLIM STATS BAR (MAROON & GOLD THEME) ═══ -->
<div class="stats-bar bg-white border-b-2 border-solid border-primary">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-<?php echo esc_attr( $stat_cols ); ?>">
      <?php foreach ( $stats_items as $stat ) :
        $s_count = ! empty( $stat['stat_count'] ) ? $stat['stat_count'] : '';
        $s_title = ! empty( $stat['stat_title'] ) ? $stat['stat_title'] : '';
      ?>
      <div class="stat-item py-2 sm:py-2.5 text-center px-2 group transition-all duration-300 hover:bg-gray-50/60">
        <div class="stat-counter stat-num block text-lg sm:text-xl lg:text-2xl font-black text-primary-darker tracking-tight drop-shadow-sm group-hover:scale-105 transition-transform"><?php echo esc_html( $s_count ); ?></div>
        <div class="text-[9px] sm:text-[10px] text-primary mt-0.5 font-bold uppercase tracking-wider">
          <?php echo esc_html( $s_title ); ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php endif; ?>


    
<?php if ( "hide" !== $ha_home_show_news ) :
  $news_sec_title     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_news_title' ) : '';
  $news_sec_subtitle  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_news_subtitle' ) : '';
  $news_view_all_text = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_news_view_all_text' ) : '';
  $news_view_all      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_news_view_all_url' ) : '';
  
  $featured_cat_slug = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_news_featured_category' ) : '';
  $featured_cat_slug = $featured_cat_slug ?: 'featured-news';

  // Helper function to build structured card data (no seeder fallback, placehold.co placeholder image)
  if ( ! function_exists( 'ha_prepare_news_item_data' ) ) {
    function ha_prepare_news_item_data( $post_obj ) {
      if ( ! $post_obj ) {
        return array(
          'title'      => '',
          'desc'       => '',
          'cat'        => '',
          'date'       => '',
          'date_short' => '',
          'image'      => 'https://placehold.co/1600x980?text=News+Image',
          'link'       => '#',
          'is_pdf'     => false,
        );
      }
      $np_id    = is_object( $post_obj ) ? $post_obj->ID : (int) $post_obj;
      $custom_t = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $np_id, 'news_custom_title' ) : '';
      $title    = $custom_t ?: get_the_title( $np_id );
      $short_d  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $np_id, 'news_short_desc' ) : '';
      $desc     = $short_d ?: wp_trim_words( get_the_excerpt( $np_id ), 22 );
      $terms    = get_the_terms( $np_id, 'news_category' );
      $cat_name = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
      $img_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $np_id, 'news_featured_image' ) : '';
      if ( ! $img_url ) {
        $img_url = get_the_post_thumbnail_url( $np_id, 'ha-news-hero' );
      }
      if ( ! $img_url ) {
        $img_url = 'https://placehold.co/1600x980?text=News+Image';
      }
      $file_url = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $np_id, 'news_attachment' ) : '';
      $ext_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $np_id, 'news_attachment_url' ) : '';
      $link_url = ! empty( $file_url ) ? $file_url : ( ! empty( $ext_url ) ? $ext_url : get_permalink( $np_id ) );

      return array(
        'title'      => $title,
        'desc'       => $desc,
        'cat'        => $cat_name,
        'date'       => get_the_date( 'F j, Y', $np_id ),
        'date_short' => get_the_date( 'M d, Y', $np_id ),
        'image'      => $img_url,
        'link'       => $link_url,
        'is_pdf'     => ! empty( $file_url ),
      );
    }
  }

  // 1. MAIN CARD: Most recent news from Featured News Category
  $featured_query_args = array(
    'post_type'      => 'news_announcement',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
    'tax_query'      => array(
      array(
        'taxonomy' => 'news_category',
        'field'    => 'slug',
        'terms'    => array_unique( array_filter( array( $featured_cat_slug, 'featured-news', 'featured' ) ) ),
      ),
    ),
  );
  $featured_posts = get_posts( $featured_query_args );

  // Graceful fallback to latest published news item if no post is tagged with Featured News Category
  if ( empty( $featured_posts ) ) {
    $featured_posts = get_posts( array(
      'post_type'      => 'news_announcement',
      'posts_per_page' => 1,
      'post_status'    => 'publish',
    ) );
  }

  $featured_id   = ! empty( $featured_posts ) ? $featured_posts[0]->ID : 0;
  $featured_news = ! empty( $featured_posts ) ? ha_prepare_news_item_data( $featured_posts[0] ) : array(
    'title'      => '',
    'desc'       => '',
    'cat'        => '',
    'date'       => '',
    'date_short' => '',
    'image'      => 'https://placehold.co/1600x980?text=News+Image',
    'link'       => '#',
    'is_pdf'     => false,
  );

  // 2. OTHER CARDS: Display other recent news excluding Featured News
  $other_query_args = array(
    'post_type'      => 'news_announcement',
    'posts_per_page' => 4,
    'post_status'    => 'publish',
    'tax_query'      => array(
      array(
        'taxonomy' => 'news_category',
        'field'    => 'slug',
        'terms'    => array_unique( array_filter( array( $featured_cat_slug, 'featured-news', 'featured' ) ) ),
        'operator' => 'NOT IN',
      ),
    ),
  );
  if ( $featured_id > 0 ) {
    $other_query_args['post__not_in'] = array( $featured_id );
  }
  $other_posts = get_posts( $other_query_args );

  $small_news = array();
  if ( ! empty( $other_posts ) ) {
    foreach ( $other_posts as $op ) {
      $small_news[] = ha_prepare_news_item_data( $op );
    }
  }
?>
<!-- ═══ NEWS & ANNOUNCEMENTS SECTION (OPTIMIZED 12-COL GRID) ═══ -->
<section class="pt-10 pb-0 lg:pt-12 lg:pb-0 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-6 pb-4 border-b border-gray-200/60 gap-4">
      <div>
        <span class="inline-flex items-center gap-1.5 text-secondary font-bold text-[10px] tracking-[2px] uppercase bg-secondary/10 px-3 py-1 rounded-full mb-2">
          <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
          <?php echo esc_html( $news_sec_subtitle ); ?>
        </span>
        <h2 class="text-2xl sm:text-3xl font-black text-primary tracking-tight">
          <?php echo esc_html( $news_sec_title ); ?>
        </h2>
      </div>
      <?php
      $display_news_btn_text = ! empty( $news_view_all_text ) ? $news_view_all_text : __( 'View All News', 'homeaffairs' );
      if ( ! empty( $news_view_all ) || ! empty( $news_view_all_text ) ) :
      ?>
      <a href="<?php echo esc_url( $news_view_all ); ?>" class="inline-flex items-center gap-2 bg-white text-primary hover:text-secondary-dark font-bold text-xs px-4 py-2 rounded-xl border border-slate-200/90 shadow-2xs hover:border-secondary hover:bg-secondary/5 transition-all group">
        <?php echo esc_html( $display_news_btn_text ); ?> 
        <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
      </a>
      <?php endif; ?>
    </div>

    <!-- Main Grid Container (12 Columns) -->
    <div class="grid lg:grid-cols-12 gap-6 items-stretch">

      <!-- ─── LEFT: FEATURED MAIN NEWS CARD (Spans 5 Cols) ─── -->
      <div class="lg:col-span-5 bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md transition-all duration-300 flex flex-col justify-between h-full group">
        <a href="<?php echo esc_url( $featured_news['link'] ); ?>" <?php echo $featured_news['is_pdf'] ? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="flex flex-col h-full justify-between">
          <div>
            <!-- Main Featured Image -->
            <div class="relative h-56 sm:h-64 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $featured_news['image'] ); ?>" 
                   alt="<?php echo esc_attr( $featured_news['title'] ); ?>" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
              <span class="absolute top-4 left-4 text-[9px] font-bold text-white uppercase tracking-wider bg-secondary px-3 py-1 rounded-full shadow-md">
                <?php echo esc_html( ! empty( $featured_news['cat'] ) ? $featured_news['cat'] : __( 'Featured News', 'homeaffairs' ) ); ?>
              </span>
            </div>

            <!-- Content Area -->
            <div class="p-5">
              <div class="flex items-center gap-3 text-[11px] font-semibold text-gray-600 mb-2">
                <span><i class="far fa-calendar text-secondary mr-1"></i> <?php echo esc_html( $featured_news['date'] ); ?></span>
                <span>•</span>
                <span><i class="fas fa-tag text-secondary mr-1"></i> <?php echo esc_html( $featured_news['cat'] ); ?></span>
                <?php if ( $featured_news['is_pdf'] ) : ?>
                  <span>•</span>
                  <span class="text-secondary font-bold"><i class="fas fa-file-pdf mr-0.5"></i> PDF</span>
                <?php endif; ?>
              </div>
              
              <h3 class="text-base sm:text-lg font-bold text-primary mb-2.5 leading-snug group-hover:text-secondary transition-colors line-clamp-2">
                <?php echo esc_html( $featured_news['title'] ); ?>
              </h3>
              
              <p class="text-xs text-gray-500 line-clamp-3 leading-relaxed">
                <?php echo esc_html( $featured_news['desc'] ); ?>
              </p>
            </div>
          </div>

          <!-- Card Footer -->
          <div class="px-5 py-3.5 bg-slate-50/50 text-xs font-bold text-primary flex items-center justify-between border-t border-gray-100 shrink-0">
            <span><?php echo $featured_news['is_pdf'] ? esc_html__( 'Download Document (PDF)', 'homeaffairs' ) : esc_html__( 'Read Full Article', 'homeaffairs' ); ?></span>
            <i class="fas fa-chevron-right text-[10px] text-secondary group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>
      </div>

      <!-- ─── RIGHT: 4 SMALL NEWS CARDS GRID (Spans 7 Cols, 2x2 Layout) ─── -->
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php foreach ( $small_news as $sn ) : ?>
        <a href="<?php echo esc_url( $sn['link'] ); ?>" <?php echo $sn['is_pdf'] ? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="relative h-28 bg-gray-100 overflow-hidden">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $sn['image'] ); ?>" 
                   alt="<?php echo esc_attr( $sn['title'] ); ?>" 
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-3.5">
              <span class="inline-block text-[8px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-0.5 rounded-full mb-1.5">
                <?php echo esc_html( $sn['cat'] ); ?>
              </span>
              <h4 class="text-xs font-bold text-primary leading-snug line-clamp-2 group-hover:text-secondary transition-colors">
                <?php echo esc_html( $sn['title'] ); ?>
              </h4>
            </div>
          </div>
          <div class="px-3.5 pb-3 pt-1 text-[10px] font-medium text-gray-600 shrink-0 flex items-center justify-between border-t border-gray-50 mt-2">
            <span class="flex items-center gap-1.5"><i class="far fa-calendar text-secondary"></i> <?php echo esc_html( $sn['date_short'] ); ?></span>
            <?php if ( $sn['is_pdf'] ) : ?>
              <span class="text-secondary text-[9px] font-bold"><i class="fas fa-file-pdf mr-0.5"></i> PDF</span>
            <?php endif; ?>
          </div>
        </a>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>
   
<?php if ( "hide" !== $ha_home_show_adv1_dt || "hide" !== $ha_home_show_adv1_banners ) :
  // Section 6: Digital Transformations Column (no seeder fallback)
  $adv1_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_dt_title' ) : '';
  $adv1_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_dt_subtitle' ) : '';
  $adv1_desc     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_dt_desc' ) : '';
  $adv1_tags_raw = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_dt_tags' ) : '';
  $adv1_tags     = ! empty( $adv1_tags_raw ) ? array_filter( array_map( 'trim', explode( ',', $adv1_tags_raw ) ) ) : array();
  $adv1_btn_text = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_dt_btn_text' ) : '';
  $adv1_btn_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_dt_btn_url' ) : '';

  // Section 7: Government Projects Banners Slider (no seeder fallback)
  $raw_banners = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv1_banners' ) : array();
  $banners     = ( ! empty( $raw_banners ) && is_array( $raw_banners ) ) ? $raw_banners : array();
?>
 <!-- ═══ COMPACT CREATIVE HERO SHOWCASE SECTION (SECTIONS 6 & 7) ═══ -->
<section class="py-8 lg:py-10 bg-gray-50 border-b border-gray-200/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
      .visionBannerSlider .swiper-pagination-bullet { background: rgba(89, 21, 33, 0.4); opacity: 0.7; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2); transition: all 0.3s; }
      .visionBannerSlider .swiper-pagination-bullet-active { background: #dfa21f !important; width: 18px; border-radius: 9999px; opacity: 1; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3); }
    </style>

    <!-- Main Grid with Auto Height Match -->
    <div class="grid lg:grid-cols-12 gap-4 items-stretch">

      <!-- ─── 6. ADVERTISE SECTION 1: DIGITAL TRANSFORMATIONS COLUMN ─── -->
      <?php if ( "hide" !== $ha_home_show_adv1_dt ) : ?>
      <div class="<?php echo ( "hide" === $ha_home_show_adv1_banners ) ? "lg:col-span-12 max-w-4xl mx-auto" : "lg:col-span-4"; ?> relative overflow-hidden rounded-2xl bg-gradient-to-br from-primary-darker via-primary-dark to-primary p-4 sm:p-5 text-white shadow-md border border-secondary/25 group flex flex-col justify-between h-full">
        
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
            <?php echo esc_html( $adv1_subtitle ); ?>
          </div>

          <!-- Main Title -->
          <h2 class="text-base sm:text-lg lg:text-xl font-extrabold tracking-tight text-white leading-tight">
            <?php echo esc_html( $adv1_title ); ?>
          </h2>

          <!-- Description -->
          <p class="text-[11px] text-secondary-light/90 font-normal leading-relaxed line-clamp-2 sm:line-clamp-3">
            <?php echo esc_html( $adv1_desc ); ?>
          </p>

          <!-- Quick Micro-Features / Tags -->
          <?php if ( ! empty( $adv1_tags ) ) : ?>
          <div class="pt-1 flex flex-wrap gap-1.5 text-[9px] text-white/90 font-semibold">
            <?php
            $tag_icons = array( 'fas fa-file-shield', 'fas fa-id-card', 'fas fa-bolt', 'fas fa-cloud', 'fas fa-lock' );
            foreach ( $adv1_tags as $t_idx => $tag_text ) :
              $t_icon = isset( $tag_icons[ $t_idx % count( $tag_icons ) ] ) ? $tag_icons[ $t_idx % count( $tag_icons ) ] : 'fas fa-check-circle';
            ?>
              <span class="px-2.5 py-0.5 rounded-full bg-black/25 border border-secondary/30 flex items-center gap-1.5 backdrop-blur-sm">
                <i class="<?php echo esc_attr( $t_icon ); ?> text-secondary text-[8px]" aria-hidden="true"></i> <?php echo esc_html( $tag_text ); ?>
              </span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

        </div>

        <!-- Bottom Action Button -->
        <?php if ( ! empty( $adv1_btn_text ) ) : ?>
        <div class="relative z-10 pt-3 mt-3 border-t border-white/15 flex">
          <a href="<?php echo esc_url( $adv1_btn_url ); ?>" class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg bg-secondary hover:bg-secondary-dark text-primary-dark font-extrabold text-[11px] sm:text-xs uppercase tracking-wider transition-all duration-300 shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
            <span><?php echo esc_html( $adv1_btn_text ); ?></span>
            <i class="fas fa-arrow-right text-[10px]" aria-hidden="true"></i>
          </a>
        </div>
        <?php endif; ?>

      </div>
      <?php endif; ?>

      <!-- ─── 7. ADVERTISE SECTION 1: GOVERNMENT PROJECTS BANNERS SLIDER ─── -->
      <?php if ( "hide" !== $ha_home_show_adv1_banners ) : ?>
      <div class="<?php echo ( "hide" === $ha_home_show_adv1_dt ) ? "lg:col-span-12" : "lg:col-span-8"; ?> bg-white rounded-2xl shadow-sm relative overflow-hidden flex items-center">
        
        <div class="swiper visionBannerSlider w-full h-full rounded-2xl overflow-hidden bg-white">
          <div class="swiper-wrapper h-full">

            <?php foreach ( $banners as $b ) :
              $b_img   = function_exists( 'ha_resolve_image_url' ) ? ha_resolve_image_url( ! empty( $b['banner_image'] ) ? $b['banner_image'] : '', 'full', function_exists( 'ha_placeholder_image' ) ? ha_placeholder_image( 1370, 500, 'Banner Image' ) : 'https://placehold.co/1370x500?text=Banner+Image' ) : 'https://placehold.co/1370x500?text=Banner+Image';
              $b_title = ! empty( $b['banner_title'] ) ? $b['banner_title'] : '';
              $b_url   = ! empty( $b['banner_url'] ) ? $b['banner_url'] : '#';
            ?>
            <div class="swiper-slide w-full h-full bg-white">
              <a href="<?php echo esc_url( $b_url ); ?>" class="block w-full h-full overflow-hidden group">
                <img loading="lazy" decoding="async" src="<?php echo esc_url( $b_img ); ?>" 
                     alt="<?php echo esc_attr( $b_title ); ?>" 
                     class="w-full h-full aspect-[16/6] sm:aspect-[21/7] object-cover group-hover:scale-105 transition-transform duration-500" />
              </a>
            </div>
            <?php endforeach; ?>

          </div>

          <!-- Pagination Dots Container -->
          <div class="swiper-pagination !bottom-3"></div>

          <!-- Navigation Buttons (Desktop Only, Subtle & Sleek) -->
          <div class="swiper-button-prev !w-8 !h-8 !rounded-full !bg-white/80 hover:!bg-secondary !text-primary-dark hover:!text-primary-darker !shadow-md backdrop-blur-sm transition-all after:!text-xs"></div>
          <div class="swiper-button-next !w-8 !h-8 !rounded-full !bg-white/80 hover:!bg-secondary !text-primary-dark hover:!text-primary-darker !shadow-md backdrop-blur-sm transition-all after:!text-xs"></div>
        </div>

      </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<!-- Swiper JS & Carousel Initialization Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const bannerSwiper = new Swiper(".visionBannerSlider", {
      loop: true,
      speed: 800,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      pagination: {
        el: ".visionBannerSlider .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
</script>
<?php endif; ?>




<?php if ( "hide" !== $ha_home_show_services ) :
  $qa_section_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_qa1_title' ) : '';
  $raw_qa_items     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_qa1_items' ) : array();
  $qa_items         = ( ! empty( $raw_qa_items ) && is_array( $raw_qa_items ) ) ? $raw_qa_items : array();
?>
<!-- ═══ 8. QUICK ACCESS SECTION 1 (COMPACT WITH ACCENT BORDER) ═══ -->
<section class="py-12 lg:py-16 bg-warm-white border-t border-b border-slate-200/80 relative overflow-hidden">
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    
    <!-- Compact Header Section -->
    <div class="text-center mb-5">
      <h2 class="text-xl sm:text-2xl font-extrabold text-primary tracking-tight">
        <?php echo esc_html( $qa_section_title ); ?>
      </h2>
    </div>

    <!-- 4-Column Responsive Grid (Tight Gap) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
      <?php foreach ( $qa_items as $item ) :
        $q_icon_raw = ! empty( $item['qa_icon'] ) ? $item['qa_icon'] : 'fas fa-file-alt';
        $q_icon     = function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( $q_icon_raw, 'fas fa-file-alt' ) : $q_icon_raw;
        $q_title = ! empty( $item['qa_title'] ) ? $item['qa_title'] : '';
        $q_desc  = ! empty( $item['qa_desc'] ) ? $item['qa_desc'] : '';
        $q_url   = ! empty( $item['qa_url'] ) ? $item['qa_url'] : '#';
      ?>
      <a href="<?php echo esc_url( $q_url ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="<?php echo esc_attr( $q_icon ); ?>"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php echo esc_html( $q_title ); ?>
            </strong>
            <?php if ( $q_desc ) : ?>
              <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
                <?php echo esc_html( $q_desc ); ?>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>


<?php if ( "hide" !== $ha_home_show_adv2_rti || "hide" !== $ha_home_show_adv2_1905 ) :
  // Section 9: Right to Information Column (no seeder fallback)
  $adv2_rti_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_title' ) : '';
  $adv2_rti_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_subtitle' ) : '';
  $adv2_rti_desc     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_desc' ) : '';
  $adv2_rti_label    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_label' ) : '';
  $adv2_rti_btn_text = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_btn_text' ) : '';
  $adv2_rti_btn_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_btn_url' ) : '';
  $adv2_rti_tagline  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_tagline' ) : '';
  $adv2_rti_img_raw  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_rti_image' ) : '';
  $adv2_rti_img      = function_exists( 'ha_resolve_image_url' ) ? ha_resolve_image_url( $adv2_rti_img_raw, 'full', function_exists( 'ha_placeholder_image' ) ? ha_placeholder_image( 1025, 695, 'RTI Image' ) : 'https://placehold.co/1025x695?text=RTI+Image' ) : 'https://placehold.co/1025x695?text=RTI+Image';

  // Section 10: Grievances Hotline - 1905 Column (no seeder fallback)
  $adv2_1905_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_title' ) : '';
  $adv2_1905_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_subtitle' ) : '';
  $adv2_1905_desc     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_desc' ) : '';
  $adv2_1905_label    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_label' ) : '';
  $adv2_1905_btn_text = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_btn_text' ) : '';
  $adv2_1905_btn_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_btn_url' ) : '';
  $adv2_1905_tagline  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_tagline' ) : '';
  $adv2_1905_img_raw  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_adv2_1905_image' ) : '';
  $adv2_1905_img      = function_exists( 'ha_resolve_image_url' ) ? ha_resolve_image_url( $adv2_1905_img_raw, 'full', function_exists( 'ha_placeholder_image' ) ? ha_placeholder_image( 1025, 695, '1905 Hotline' ) : 'https://placehold.co/1025x695?text=1905+Hotline' ) : 'https://placehold.co/1025x695?text=1905+Hotline';
?>
<!-- ═══ 9 & 10. ADVERTISE SECTION 2 (RTI & GRIEVANCES HOTLINE 1905) ═══ -->
<section class="py-12 lg:py-16 bg-slate-50 border-t border-b border-gray-200/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-12 gap-5 items-stretch">

      <!-- ─── 9. ADVERTISE SECTION 2: RTI HERO BANNER ─── -->
      <?php if ( "hide" !== $ha_home_show_adv2_rti ) : ?>
      <div class="<?php echo ( "hide" === $ha_home_show_adv2_1905 ) ? "lg:col-span-12" : "lg:col-span-7"; ?> rounded-2xl p-5 sm:p-6 text-white shadow-lg flex flex-col justify-between relative overflow-hidden group min-h-[280px] sm:min-h-[320px]" style="background-image: url('<?php echo esc_url( $adv2_rti_img ); ?>'); background-size: cover; background-position: center;">
        
        <!-- Ambient Dark Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/40 pointer-events-none"></div>

        <!-- Upper Content -->
        <div class="relative z-10">
          <div class="flex items-center justify-between mb-3">
            <span class="inline-flex items-center gap-1.5 bg-slate-950/80 backdrop-blur-md text-secondary-light font-extrabold text-[10px] tracking-[1.5px] uppercase px-3 py-1 rounded-full border border-secondary-light/40 shadow-sm">
              <i class="fas fa-scale-balanced text-secondary-light"></i> <?php echo esc_html( $adv2_rti_subtitle ); ?>
            </span>
            <?php if ( $adv2_rti_label ) : ?>
            <span class="hidden sm:inline-block text-[11px] font-semibold text-white bg-slate-950/70 px-2.5 py-0.5 rounded border border-white/20 shadow-sm">
              <?php echo esc_html( $adv2_rti_label ); ?>
            </span>
            <?php endif; ?>
          </div>

          <h2 class="text-xl sm:text-2xl lg:text-3xl font-black mb-2 leading-tight tracking-tight text-secondary-light">
            <?php echo esc_html( $adv2_rti_title ); ?>
          </h2>

          <p class="text-white text-xs max-w-lg leading-relaxed mb-4 font-semibold drop-shadow-[0_1px_3px_rgba(0,0,0,0.8)]">
            <?php echo esc_html( $adv2_rti_desc ); ?>
          </p>
        </div>

        <!-- Lower Action Bar -->
        <div class="relative z-10 flex flex-wrap items-center justify-between gap-3 mt-auto pt-3.5 border-t border-white/25">
          <?php if ( $adv2_rti_btn_text ) : ?>
          <a href="<?php echo esc_url( $adv2_rti_btn_url ); ?>" class="bg-secondary hover:bg-secondary-dark text-slate-950 font-black px-5 py-2.5 rounded-xl text-xs inline-flex items-center gap-2 shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
            <i class="fas fa-file-signature text-xs"></i> <?php echo esc_html( $adv2_rti_btn_text ); ?>
            <i class="fas fa-arrow-right text-[10px]"></i>
          </a>
          <?php endif; ?>

          <?php if ( $adv2_rti_tagline ) : ?>
          <div class="flex items-center gap-2.5">
            <span class="text-[10px] font-bold text-white hidden sm:inline-block drop-shadow"><?php echo esc_html( $adv2_rti_tagline ); ?></span>
            <div class="flex items-center gap-1">
              <span class="w-4 h-1.5 bg-secondary rounded-full shadow-sm"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- ─── 10. ADVERTISE SECTION 2: 1905 HOTLINE BANNER ─── -->
      <?php if ( "hide" !== $ha_home_show_adv2_1905 ) : ?>
      <div class="<?php echo ( "hide" === $ha_home_show_adv2_rti ) ? "lg:col-span-12" : "lg:col-span-5"; ?> rounded-2xl p-5 sm:p-6 text-white shadow-lg flex flex-col justify-between relative overflow-hidden group min-h-[280px] sm:min-h-[320px]" style="background-image: url('<?php echo esc_url( $adv2_1905_img ); ?>'); background-size: cover; background-position: center;">
        
        <!-- Ambient Dark Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/40 pointer-events-none"></div>

        <!-- Upper Content -->
        <div class="relative z-10">
          <div class="flex items-center justify-between mb-3">
            <span class="inline-flex items-center gap-1.5 bg-slate-950/80 backdrop-blur-md text-secondary-light font-extrabold text-[10px] tracking-[1.5px] uppercase px-3 py-1 rounded-full border border-secondary-light/40 shadow-sm">
              <i class="fas fa-shield-halved text-secondary-light"></i> <?php echo esc_html( $adv2_1905_subtitle ); ?>
            </span>
          
            <?php if ( $adv2_1905_label ) : ?>
            <span class="hidden sm:inline-block text-[11px] font-semibold text-white bg-slate-950/70 px-2.5 py-0.5 rounded border border-white/20 shadow-sm">
              <?php echo esc_html( $adv2_1905_label ); ?>
            </span>
            <?php endif; ?>
          </div>

          <h2 class="text-xl sm:text-2xl lg:text-3xl font-black mb-2 leading-tight tracking-tight text-secondary-light">
            <?php echo esc_html( $adv2_1905_title ); ?>
          </h2>

          <p class="text-white text-xs max-w-lg leading-relaxed mb-4 font-semibold drop-shadow-[0_1px_3px_rgba(0,0,0,0.8)]">
            <?php echo esc_html( $adv2_1905_desc ); ?>
          </p>
        </div>

        <!-- Lower Action Bar -->
        <div class="relative z-10 flex flex-wrap items-center justify-between gap-3 mt-auto pt-3.5 border-t border-white/25">
          <?php if ( $adv2_1905_btn_text ) : ?>
          <a href="<?php echo esc_url( $adv2_1905_btn_url ); ?>" class="bg-secondary hover:bg-secondary-dark text-slate-950 font-black px-5 py-2.5 rounded-xl text-xs inline-flex items-center gap-2 shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
            <i class="fas fa-info-circle"></i> <?php echo esc_html( $adv2_1905_btn_text ); ?>
            <i class="fas fa-arrow-right text-[10px]"></i>
          </a>
          <?php endif; ?>

          <?php if ( $adv2_1905_tagline ) : ?>
          <div class="flex items-center gap-2.5">
            <span class="text-[10px] font-bold text-white hidden sm:inline-block drop-shadow"><?php echo esc_html( $adv2_1905_tagline ); ?></span>
            <div class="flex items-center gap-1">
              <span class="w-4 h-1.5 bg-secondary rounded-full shadow-sm"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
              <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
            </div>
          </div>
          <?php endif; ?>
        </div>

      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>



<?php if ( "hide" !== $ha_home_show_downloads ) :
  $qa3_sec_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_qa3_title' ) : '';
  $qa3_sec_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_qa3_subtitle' ) : '';
  $raw_qa3_items    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_qa3_items' ) : array();
  $qa3_items        = ( ! empty( $raw_qa3_items ) && is_array( $raw_qa3_items ) ) ? $raw_qa3_items : array();
?>
<!-- ═══ 11. QUICK ACCESS SECTION 3 (KEY SERVICES & NOTICE BOARDS) ═══ -->
<section class="py-12 lg:py-16 bg-warm-white relative overflow-hidden">

  <!-- Atmospheric Background Accents -->
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary/[0.03] via-transparent to-secondary/[0.03] pointer-events-none"></div>
  <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-primary/[0.06] rounded-full blur-[120px] pointer-events-none"></div>
  <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-secondary/[0.08] rounded-full blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    
    <!-- Section Header -->
    <div class="text-center mb-6 lg:mb-8 scroll-animate">
      <span class="inline-flex items-center gap-1.5 text-primary font-bold text-[10px] sm:text-[11px] tracking-[2px] uppercase bg-primary/10 px-3 py-0.5 rounded-full mb-1.5 border border-primary/20">
        <i class="fas fa-layer-group text-[9px] text-primary"></i>
        <?php echo esc_html( $qa3_sec_subtitle ); ?>
      </span>
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-primary tracking-tight mb-1.5">
        <?php echo esc_html( $qa3_sec_title ); ?>
      </h2>
    </div>

    <!-- Grid (3 Columns) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ( $qa3_items as $item ) :
        $q_icon_raw = ! empty( $item['qa3_icon'] ) ? $item['qa3_icon'] : 'fas fa-file-arrow-down';
        $q_icon     = function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( $q_icon_raw, 'fas fa-file-arrow-down' ) : $q_icon_raw;
        $q_title = ! empty( $item['qa3_title'] ) ? $item['qa3_title'] : '';
        $q_desc  = ! empty( $item['qa3_desc'] ) ? $item['qa3_desc'] : '';
        $q_btn   = ! empty( $item['qa3_btn_text'] ) ? $item['qa3_btn_text'] : '';
        $q_url   = ! empty( $item['qa3_url'] ) ? $item['qa3_url'] : '#';
        $q_badge = ! empty( $item['qa3_badge'] ) ? $item['qa3_badge'] : '';
        if ( ! empty( $q_badge ) ) {
          $lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';
          if ( 'si' === $lang && strcasecmp( trim( $q_badge ), 'resources' ) === 0 ) {
            $q_badge = 'සම්පත්';
          } elseif ( 'ta' === $lang && strcasecmp( trim( $q_badge ), 'resources' ) === 0 ) {
            $q_badge = 'வளங்கள்';
          }
        }
      ?>
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="<?php echo esc_attr( $q_icon ); ?>"></i>
            </div>
            <?php if ( $q_badge ) : ?>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">
              <?php echo esc_html( $q_badge ); ?>
            </span>
            <?php endif; ?>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php echo esc_html( $q_title ); ?>
          </h3>
          <?php if ( $q_desc ) : ?>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php echo esc_html( $q_desc ); ?>
          </p>
          <?php endif; ?>
        </div>
        <a href="<?php echo esc_url( $q_url ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php echo esc_html( $q_btn ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>


<?php if ( "hide" !== $ha_home_show_contact_banner ) :
  $cta_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_cta_title' ) : '';
  $cta_desc     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_cta_desc' ) : '';
  $cta_btn_icon = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $page_id, 'ha_home_cta_btn_icon', 'fas fa-phone-alt' ) : ( function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( carbon_get_post_meta( $page_id, 'ha_home_cta_btn_icon' ), 'fas fa-phone-alt' ) : 'fas fa-phone-alt' );
  $cta_btn_text = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_cta_btn_text' ) : '';
  $cta_btn_url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_cta_btn_url' ) : '';
  $cta_bg_raw   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_cta_bg_image' ) : '';
  $cta_bg       = function_exists( 'ha_resolve_image_url' ) ? ha_resolve_image_url( $cta_bg_raw, 'full', function_exists( 'ha_placeholder_image' ) ? ha_placeholder_image( 1920, 600, 'CTA Banner' ) : 'https://placehold.co/1920x600?text=CTA+Banner' ) : 'https://placehold.co/1920x600?text=CTA+Banner';
?>
<!-- ═══ 12. CALL TO ACTION BANNER SECTION ═══ -->
<section class="relative py-12 lg:py-16 text-center overflow-hidden bg-cover bg-center" style="background-image: url('<?php echo esc_url( $cta_bg ); ?>');">
  
  <!-- Subtle Dark Overlay for contrast -->
  <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

  <!-- Content -->
  <div class="max-w-3xl mx-auto px-4 relative z-10">

    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold mb-2.5" style="color: var(--color-secondary-light) !important; -webkit-text-fill-color: var(--color-secondary-light) !important; text-shadow: 0 2px 8px rgba(0,0,0,0.8);">
      <?php echo esc_html( $cta_title ); ?>
    </h2>

    <p class="text-white/90 text-xs sm:text-sm lg:text-base mb-5 max-w-2xl mx-auto font-medium">
      <?php echo esc_html( $cta_desc ); ?>
    </p>

    <?php if ( $cta_btn_text ) : ?>
    <div class="flex gap-2.5 sm:gap-3 justify-center flex-wrap">
      <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="cta-btn inline-flex items-center gap-2 bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-6 py-2.5 rounded-full text-xs sm:text-sm shadow-md hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0 transition-all border border-secondary-light/30">
        <i class="<?php echo esc_attr( $cta_btn_icon ); ?> text-xs"></i> <?php echo esc_html( $cta_btn_text ); ?>
      </a>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if ( "hide" !== $ha_home_show_institutions ) :
  $orgs_title     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_orgs_title' ) : '';
  $raw_orgs_items = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $page_id, 'ha_home_orgs_items' ) : array();
  $orgs_items     = ( ! empty( $raw_orgs_items ) && is_array( $raw_orgs_items ) ) ? $raw_orgs_items : array();
?>
<!-- ═══ 13. RELATED ORGANIZATIONS SLIDER SECTION ═══ -->
<section class="py-12 lg:py-16 bg-white border-t border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <!-- Section Header with Line Divider -->
    <div class="relative flex items-center justify-center mb-8">
      <div class="flex-grow border-t border-slate-200"></div>
      <h2 class="text-base sm:text-lg font-black text-primary px-6 bg-white uppercase tracking-wider">
        <?php echo esc_html( $orgs_title ); ?>
      </h2>
      <div class="flex-grow border-t border-slate-200"></div>
    </div>

    <!-- Cards Grid (2 cols mobile, 4 cols desktop) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <?php foreach ( $orgs_items as $org ) :
        $o_logo_raw = ! empty( $org['org_logo'] ) ? $org['org_logo'] : '';
        $o_logo     = function_exists( 'ha_resolve_image_url' ) ? ha_resolve_image_url( $o_logo_raw, 'full', function_exists( 'ha_placeholder_image' ) ? ha_placeholder_image( 160, 160, 'Logo' ) : 'https://placehold.co/160x160?text=Logo' ) : 'https://placehold.co/160x160?text=Logo';
        $o_title    = ! empty( $org['org_title'] ) ? $org['org_title'] : '';
        $o_url      = ! empty( $org['org_url'] ) ? $org['org_url'] : '#';
      ?>
      <a href="<?php echo esc_url( $o_url ); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( $o_logo ); ?>" alt="<?php echo esc_attr( $o_title ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php echo esc_html( $o_title ); ?>
        </span>
      </a>
      <?php endforeach; ?>
    </div>

    <!-- Indicator Dots at the bottom -->
    <div class="flex items-center justify-center gap-1.5 mt-6">
      <span class="w-4 h-1.5 rounded-full bg-secondary inline-block"></span>
      <span class="w-1.5 h-1.5 rounded-full bg-slate-300 inline-block"></span>
      <span class="w-1.5 h-1.5 rounded-full bg-slate-300 inline-block"></span>
    </div>

  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
