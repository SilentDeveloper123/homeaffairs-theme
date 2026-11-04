<?php
$ha_title    = get_the_title();
$ha_subtitle = get_post_meta( get_the_ID(), 'page_subtitle', true );
if ( is_home() ) {
  $ha_title = __( 'News & Updates', 'homeaffairs' );
} elseif ( is_category() ) {
  $ha_title = single_cat_title( '', false );
} elseif ( is_tag() ) {
  $ha_title = single_tag_title( '', false );
} elseif ( is_author() ) {
  $ha_title = get_the_author();
} elseif ( is_year() ) {
  $ha_title = sprintf( __( 'Year: %s', 'homeaffairs' ), get_the_date( 'Y' ) );
} elseif ( is_month() ) {
  $ha_title = get_the_date( 'F Y' );
} elseif ( is_day() ) {
  $ha_title = get_the_date( 'F j, Y' );
} elseif ( is_post_type_archive() ) {
  $ha_title = post_type_archive_title( '', false );
} elseif ( is_tax() ) {
  $ha_title = single_term_title( '', false );
} elseif ( is_search() ) {
  $ha_title = sprintf( __( 'Search Results for: %s', 'homeaffairs' ), get_search_query() );
} elseif ( is_404() ) {
  $ha_title = __( 'Page Not Found', 'homeaffairs' );
} elseif ( is_archive() ) {
  $ha_title = __( 'Archives', 'homeaffairs' );
}
?>
<div id="main-content" tabindex="-1" class="banner-page relative overflow-hidden focus:outline-none">
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
</div>
