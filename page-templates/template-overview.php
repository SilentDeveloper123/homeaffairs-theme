<?php
/**
 * Template Name: Overview Template
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

get_header(); 
get_template_part( 'template-parts/page-banner' );

$post_id = get_the_ID();
$lang    = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';

// -----------------------------------------------------------------------------
// 1. Inner Title Section Meta
// -----------------------------------------------------------------------------
$show_header     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_show_header' ) : 'show';
$show_header     = ( 'hide' === $show_header ) ? 'hide' : 'show';
$header_tag      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_header_tag' ) : '';
$header_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_header_title' ) : '';
$header_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_header_subtitle' ) : '';

$has_header = ( 'show' === $show_header && ( ! empty( $header_title ) || ! empty( $header_tag ) || ! empty( $header_subtitle ) ) );

// -----------------------------------------------------------------------------
// 2. Introduction Section Meta
// -----------------------------------------------------------------------------
$show_intro  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_show_intro' ) : 'show';
$show_intro  = ( 'hide' === $show_intro ) ? 'hide' : 'show';
$intro_icon  = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'overview_intro_icon', 'fas fa-landmark' ) : 'fas fa-landmark';
$intro_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_intro_title' ) : '';
$intro_desc  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_intro_desc' ) : '';

$has_intro = ( 'show' === $show_intro && ( ! empty( $intro_title ) || ! empty( $intro_desc ) ) );

// -----------------------------------------------------------------------------
// 3. Vision & Mission Section Meta
// -----------------------------------------------------------------------------
$show_vm       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_show_vision_mission' ) : 'show';
$show_vm       = ( 'hide' === $show_vm ) ? 'hide' : 'show';
$vision_icon   = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'overview_vision_icon', 'fas fa-eye' ) : 'fas fa-eye';
$vision_title  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_vision_title' ) : '';
$vision_desc   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_vision_desc' ) : '';

$mission_icon  = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'overview_mission_icon', 'fas fa-bullseye' ) : 'fas fa-bullseye';
$mission_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_mission_title' ) : '';
$mission_desc  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_mission_desc' ) : '';

$has_vm = ( 'show' === $show_vm && ( ! empty( $vision_title ) || ! empty( $vision_desc ) || ! empty( $mission_title ) || ! empty( $mission_desc ) ) );

// -----------------------------------------------------------------------------
// 4. Objectives Section Meta
// -----------------------------------------------------------------------------
$show_obj  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_show_objectives' ) : 'show';
$show_obj  = ( 'hide' === $show_obj ) ? 'hide' : 'show';
$obj_icon  = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'overview_objectives_icon', 'fas fa-landmark' ) : 'fas fa-landmark';
$obj_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_objectives_title' ) : '';
$obj_desc  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_objectives_desc' ) : '';

$has_obj = ( 'show' === $show_obj && ( ! empty( $obj_title ) || ! empty( $obj_desc ) ) );

// -----------------------------------------------------------------------------
// 5. Strategies Section Meta
// -----------------------------------------------------------------------------
$show_strat  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_show_strategies' ) : 'show';
$show_strat  = ( 'hide' === $show_strat ) ? 'hide' : 'show';
$strat_icon  = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'overview_strategies_icon', 'fas fa-landmark' ) : 'fas fa-landmark';
$strat_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_strategies_title' ) : '';
$strat_desc  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_strategies_desc' ) : '';

$has_strat = ( 'show' === $show_strat && ( ! empty( $strat_title ) || ! empty( $strat_desc ) ) );

// -----------------------------------------------------------------------------
// 6. Main Functions Section Meta
// -----------------------------------------------------------------------------
$show_func  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_show_functions' ) : 'show';
$show_func  = ( 'hide' === $show_func ) ? 'hide' : 'show';
$func_icon  = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'overview_functions_icon', 'fas fa-landmark' ) : 'fas fa-landmark';
$func_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_functions_title' ) : '';
$func_desc  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'overview_functions_desc' ) : '';

$has_func = ( 'show' === $show_func && ( ! empty( $func_title ) || ! empty( $func_desc ) ) );

// -----------------------------------------------------------------------------
// 7. On This Page Navigation Items (Conditioned on active sections)
// -----------------------------------------------------------------------------
$toc_items = array();

if ( $has_intro ) {
	$fallback_intro = ( 'si' === $lang ) ? 'හැඳින්වීම' : ( ( 'ta' === $lang ) ? 'அறிமுகம்' : 'Introduction' );
	$toc_items[] = array(
		'id'    => 'section-intro',
		'title' => ! empty( $intro_title ) ? $intro_title : $fallback_intro,
	);
}

if ( $has_vm ) {
	$vm_heading = ( 'si' === $lang ) ? 'දැක්ම සහ මෙහෙවර' : ( ( 'ta' === $lang ) ? 'பார்வை & இலக்கு' : 'Mission & Vision' );
	$toc_items[] = array(
		'id'    => 'section-vision-mission',
		'title' => $vm_heading,
	);
}

if ( $has_obj ) {
	$fallback_obj = ( 'si' === $lang ) ? 'අරමුණු' : ( ( 'ta' === $lang ) ? 'நோக்கங்கள்' : 'Objectives' );
	$toc_items[] = array(
		'id'    => 'section-objectives',
		'title' => ! empty( $obj_title ) ? $obj_title : $fallback_obj,
	);
}

if ( $has_strat ) {
	$fallback_strat = ( 'si' === $lang ) ? 'උපාය මාර්ග' : ( ( 'ta' === $lang ) ? 'வியூகங்கள்' : 'Strategies' );
	$toc_items[] = array(
		'id'    => 'section-strategies',
		'title' => ! empty( $strat_title ) ? $strat_title : $fallback_strat,
	);
}

if ( $has_func ) {
	$fallback_func = ( 'si' === $lang ) ? 'ප්‍රධාන කාර්යයන්' : ( ( 'ta' === $lang ) ? 'முக்கிய செயல்பாடுகள்' : 'Main Functions' );
	$toc_items[] = array(
		'id'    => 'section-functions',
		'title' => ! empty( $func_title ) ? $func_title : $fallback_func,
	);
}

$toc_heading = ( 'si' === $lang ) ? 'මෙම පිටුවේ අන්තර්ගතය' : ( ( 'ta' === $lang ) ? 'இந்தப் பக்கத்தில்' : 'On This Page' );

// -----------------------------------------------------------------------------
// 8. Quick Contacts (Hardcoded label/icon, Theme Options for data)
// -----------------------------------------------------------------------------
$contact_heading   = ( 'si' === $lang ) ? 'ක්ෂණික සබඳතා' : ( ( 'ta' === $lang ) ? 'விரைவு தொடர்புகள்' : 'Quick Contacts' );
$contact_btn_label = ( 'si' === $lang ) ? 'සම්බන්ධ වන්න' : ( ( 'ta' === $lang ) ? 'தொடர்பு கொள்ள' : 'Contact Us' );

$phone       = function_exists( 'ha_get_theme_option' ) ? ha_get_theme_option( 'ha_telephone' ) : '';
$email       = function_exists( 'ha_get_theme_option' ) ? ha_get_theme_option( 'ha_email' ) : '';
$address     = function_exists( 'ha_get_theme_option' ) ? ha_get_theme_option( 'ha_address' ) : '';
$phone_clean = $phone ? preg_replace( '/[^\d+]/', '', $phone ) : '';

$contact_url = home_url( '/contact-us/' );
if ( function_exists( 'ha_get_theme_option' ) && ha_get_theme_option( 'ha_cta_button_link' ) ) {
	$contact_url = ha_get_theme_option( 'ha_cta_button_link' );
}
?>

<!-- MAIN BODY CONTENT SECTION -->
<main id="main-content" role="main" class="w-full bg-warm-white py-10 lg:py-16 font-sans text-gray-800 antialiased block clear-both">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <?php if ( $has_header ) : ?>
      <!-- Inner Title Section -->
      <div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
        <?php if ( ! empty( $header_tag ) ) : ?>
          <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
            <?php echo esc_html( $header_tag ); ?>
          </span>
        <?php endif; ?>
        <?php if ( ! empty( $header_title ) ) : ?>
          <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker tracking-tight"><?php echo esc_html( $header_title ); ?></h1>
        <?php endif; ?>
        <?php if ( ! empty( $header_subtitle ) ) : ?>
          <p class="text-gray-600 text-sm sm:text-base mt-2 max-w-2xl mx-auto leading-relaxed"><?php echo esc_html( $header_subtitle ); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <!-- Grid System: 3 Columns Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
      
      <!-- LEFT COLUMN: MAIN CONTENT BOXES -->
      <div class="lg:col-span-2 space-y-8">
        
        <?php if ( $has_intro ) : ?>
          <!-- 1. Introduction Section -->
          <div id="section-intro" class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden scroll-mt-24">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
            <?php if ( ! empty( $intro_title ) ) : ?>
              <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
                <i class="<?php echo esc_attr( $intro_icon ); ?> text-secondary text-lg" aria-hidden="true"></i>
                <?php echo esc_html( $intro_title ); ?>
              </h2>
            <?php endif; ?>
            <?php if ( ! empty( $intro_desc ) ) : ?>
              <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4 overview-content [&_ul]:list-disc [&_ul]:list-outside [&_ul]:pl-5 [&_ul]:space-y-2 [&_p]:mb-3 [&_p:last-child]:mb-0">
                <?php echo wp_kses_post( wpautop( $intro_desc ) ); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ( $has_vm ) : ?>
          <!-- 2. Vision & Mission Section -->
          <div id="section-vision-mission" class="grid grid-cols-1 md:grid-cols-2 gap-6 scroll-mt-24">
            
            <?php if ( ! empty( $vision_title ) || ! empty( $vision_desc ) ) : ?>
              <!-- Vision Card -->
              <div class="bg-white rounded-2xl p-6 border-t-4 border-secondary shadow-sm border-x border-b border-secondary/30 flex flex-col justify-between">
                <div>
                  <div class="flex items-center gap-3 mb-3">
                    <span class="w-10 h-10 rounded-full bg-secondary/10 text-secondary flex items-center justify-center text-base border border-secondary/20 shrink-0">
                      <i class="<?php echo esc_attr( $vision_icon ); ?>" aria-hidden="true"></i>
                    </span>
                    <?php if ( ! empty( $vision_title ) ) : ?>
                      <h3 class="text-lg font-bold text-primary-darker tracking-wide"><?php echo esc_html( $vision_title ); ?></h3>
                    <?php endif; ?>
                  </div>
                  <?php if ( ! empty( $vision_desc ) ) : ?>
                    <p class="text-gray-600 text-xs sm:text-[13px] leading-relaxed m-0 text-justify">
                      <?php echo nl2br( esc_html( $vision_desc ) ); ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( ! empty( $mission_title ) || ! empty( $mission_desc ) ) : ?>
              <!-- Mission Card -->
              <div class="bg-white rounded-2xl p-6 border-t-4 border-primary-darker shadow-sm border-x border-b border-secondary/30 flex flex-col justify-between">
                <div>
                  <div class="flex items-center gap-3 mb-3">
                    <span class="w-10 h-10 rounded-full bg-primary-darker/10 text-primary-darker flex items-center justify-center text-base border border-primary-darker/20 shrink-0">
                      <i class="<?php echo esc_attr( $mission_icon ); ?>" aria-hidden="true"></i>
                    </span>
                    <?php if ( ! empty( $mission_title ) ) : ?>
                      <h3 class="text-lg font-bold text-primary-darker tracking-wide"><?php echo esc_html( $mission_title ); ?></h3>
                    <?php endif; ?>
                  </div>
                  <?php if ( ! empty( $mission_desc ) ) : ?>
                    <p class="text-gray-600 text-xs sm:text-[13px] leading-relaxed m-0 text-justify">
                      <?php echo nl2br( esc_html( $mission_desc ) ); ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>

          </div>
        <?php endif; ?>
       
        <?php if ( $has_obj ) : ?>
          <!-- 3. Objectives Section -->
          <div id="section-objectives" class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden scroll-mt-24">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
            <?php if ( ! empty( $obj_title ) ) : ?>
              <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
                <i class="<?php echo esc_attr( $obj_icon ); ?> text-secondary text-lg" aria-hidden="true"></i>
                <?php echo esc_html( $obj_title ); ?>
              </h2>
            <?php endif; ?>
            <?php if ( ! empty( $obj_desc ) ) : ?>
              <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4 overview-content [&_ul]:list-disc [&_ul]:list-outside [&_ul]:pl-5 [&_ul]:space-y-3 [&_p]:mb-3 [&_p:last-child]:mb-0">
                <?php echo wp_kses_post( wpautop( $obj_desc ) ); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ( $has_strat ) : ?>
          <!-- 4. Strategies Section -->
          <div id="section-strategies" class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden scroll-mt-24">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
            <?php if ( ! empty( $strat_title ) ) : ?>
              <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
                <i class="<?php echo esc_attr( $strat_icon ); ?> text-secondary text-lg" aria-hidden="true"></i>
                <?php echo esc_html( $strat_title ); ?>
              </h2>
            <?php endif; ?>
            <?php if ( ! empty( $strat_desc ) ) : ?>
              <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4 overview-content [&_ul]:list-disc [&_ul]:list-outside [&_ul]:pl-5 [&_ul]:space-y-3 [&_p]:mb-3 [&_p:last-child]:mb-0">
                <?php echo wp_kses_post( wpautop( $strat_desc ) ); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ( $has_func ) : ?>
          <!-- 5. Main Functions Section -->
          <div id="section-functions" class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden scroll-mt-24">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
            <?php if ( ! empty( $func_title ) ) : ?>
              <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
                <i class="<?php echo esc_attr( $func_icon ); ?> text-secondary text-lg" aria-hidden="true"></i>
                <?php echo esc_html( $func_title ); ?>
              </h2>
            <?php endif; ?>
            <?php if ( ! empty( $func_desc ) ) : ?>
              <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4 overview-content [&_ul]:list-disc [&_ul]:list-outside [&_ul]:pl-5 [&_ul]:space-y-3 [&_p]:mb-3 [&_p:last-child]:mb-0">
                <?php echo wp_kses_post( wpautop( $func_desc ) ); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

      </div>

      <!-- RIGHT COLUMN: SIDEBAR -->
      <div class="space-y-6 block">
        
        <?php if ( ! empty( $toc_items ) ) : ?>
          <!-- On This Page Widget -->
          <div class="bg-warm-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 block">
            <h3 class="font-bold text-primary-darker text-base mb-4 flex items-center gap-2 border-b border-primary-darker/10 pb-3">
              <i class="fas fa-list-ul text-secondary text-sm" aria-hidden="true"></i> <?php echo esc_html( $toc_heading ); ?>
            </h3>
            <ul class="space-y-3.5 text-xs font-medium text-gray-600 p-0 m-0 list-none">
              <?php foreach ( $toc_items as $item ) : ?>
                <li class="flex items-center gap-2">
                  <i class="fas fa-chevron-right text-[8px] text-secondary shrink-0" aria-hidden="true"></i>
                  <a href="#<?php echo esc_attr( $item['id'] ); ?>" class="hover:text-primary-darker transition-colors no-underline text-gray-600"><?php echo esc_html( $item['title'] ); ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Quick Contacts Widget (primary-darker & secondary-light theme) -->
        <div class="bg-primary-darker text-white rounded-2xl shadow-md p-6 border border-secondary/30 block">
          <h3 class="font-bold text-sm mb-5 flex items-center gap-2 text-secondary-light border-b border-secondary/20 pb-3">
            <i class="fas fa-headset text-secondary-light" aria-hidden="true"></i> <span style="color: var(--color-secondary-light);"><?php echo esc_html( $contact_heading ); ?></span>
          </h3>
          <div class="space-y-3.5 text-xs text-white/90">
            <?php if ( ! empty( $phone ) ) : ?>
              <div class="flex items-center gap-3">
                <i class="fas fa-phone-alt text-secondary w-4 text-left shrink-0" aria-hidden="true"></i> 
                <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="text-white/90 hover:text-secondary transition-colors no-underline"><?php echo esc_html( $phone ); ?></a>
              </div>
            <?php endif; ?>
            <?php if ( ! empty( $email ) ) : ?>
              <div class="flex items-center gap-3">
                <i class="fas fa-envelope text-secondary w-4 text-left shrink-0" aria-hidden="true"></i> 
                <a href="mailto:<?php echo esc_attr( $email ); ?>" class="text-white/90 hover:text-secondary transition-colors no-underline break-all"><?php echo esc_html( $email ); ?></a>
              </div>
            <?php endif; ?>
            <?php if ( ! empty( $address ) ) : ?>
              <div class="flex items-start gap-3">
                <i class="fas fa-map-marker-alt text-secondary w-4 text-left mt-0.5 shrink-0" aria-hidden="true"></i> 
                <span class="text-white/90 leading-normal"><?php echo nl2br( esc_html( $address ) ); ?></span>
              </div>
            <?php endif; ?>
          </div>
          <?php if ( ! empty( $contact_url ) ) : ?>
            <a href="<?php echo esc_url( $contact_url ); ?>" class="mt-6 w-full bg-secondary text-primary-darker font-bold py-2.5 px-4 rounded-xl text-xs hover:bg-gold-deep transition-colors inline-flex items-center justify-center gap-1.5 shadow-sm no-underline">
              <?php echo esc_html( $contact_btn_label ); ?> <i class="fas fa-arrow-right text-[9px]" aria-hidden="true"></i>
            </a>
          <?php endif; ?>
        </div>

      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>
