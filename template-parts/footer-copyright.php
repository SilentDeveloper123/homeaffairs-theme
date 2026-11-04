<?php
defined( 'ABSPATH' ) || exit;

$ha_gic_url      = carbon_get_theme_option( 'ha_gic_url' ) ?: 'https://gic.gov.lk/';
$ha_gic_logo_url = carbon_get_theme_option( 'ha_gic_logo_url' ) ?: 'https://moha.gov.lk/web/images/gic_en.gif';

$ha_custom_last_update = carbon_get_theme_option( 'ha_last_update_date' );
if ( ! empty( $ha_custom_last_update ) ) {
    $last_update_date = $ha_custom_last_update;
    $last_update_iso  = $ha_custom_last_update;
} elseif ( is_singular() && get_the_modified_date() ) {
    $last_update_date = get_the_modified_date();
    $last_update_iso  = get_the_modified_date( 'c' );
} else {
    $last_mod = function_exists( 'get_lastpostmodified' ) ? get_lastpostmodified( 'blog', 'any' ) : '';
    if ( ! empty( $last_mod ) ) {
        $last_ts          = strtotime( $last_mod );
        $last_update_date = date_i18n( get_option( 'date_format', 'F j, Y' ), $last_ts );
        $last_update_iso  = date_i18n( 'c', $last_ts );
    } else {
        $last_update_date = date_i18n( get_option( 'date_format', 'F j, Y' ) );
        $last_update_iso  = date( 'c' );
    }
}
?>
<div class="border-t border-white/10" role="contentinfo">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col lg:flex-row justify-between items-center gap-4 text-xs text-gray-300">
    <!-- Left: Copyright and Last Update on one line -->
    <div class="flex items-center flex-wrap justify-center lg:justify-start gap-x-2 gap-y-1 text-center lg:text-left text-gray-300">
      <span><?php
      $copyright = carbon_get_theme_option( 'ha_copyright_text' );
      if ( ! empty( $copyright ) ) {
          echo esc_html( $copyright );
      } else {
          echo '&copy; ' . esc_html( date( 'Y' ) ) . ' ' . esc_html( get_bloginfo( 'name' ) ) . ' — ' . esc_html__( 'Sri Lanka. All Rights Reserved.', 'homeaffairs' );
      }
      ?></span>
      <span class="text-white/30 hidden sm:inline select-none" aria-hidden="true">&bull;</span>
      <span class="inline-flex items-center gap-1.5 whitespace-nowrap">
        <span class="text-gray-400"><?php esc_html_e( 'Last Update:', 'homeaffairs' ); ?></span>
        <time datetime="<?php echo esc_attr( $last_update_iso ); ?>" class="text-secondary-light font-semibold"><?php echo esc_html( $last_update_date ); ?></time>
      </span>
    </div>

    <!-- Center: GIC Badge -->
    <div class="footer-gic flex items-center justify-center shrink-0">
      <a href="<?php echo esc_url( $ha_gic_url ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center transition-all hover:scale-105 hover:opacity-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 rounded" aria-label="<?php esc_attr_e( 'Government Information Center (GIC 1919)', 'homeaffairs' ); ?>" title="<?php esc_attr_e( 'Government Information Center (1919)', 'homeaffairs' ); ?>">
        <img src="<?php echo esc_url( $ha_gic_logo_url ); ?>" alt="<?php esc_attr_e( 'Government Information Center (1919)', 'homeaffairs' ); ?>" width="168" height="60" class="h-7 sm:h-8 w-auto object-contain" loading="lazy" decoding="async">
      </a>
    </div>

    <!-- Right: Footer Bottom Menu -->
    <div class="flex items-center justify-center lg:justify-end gap-2 text-gray-300 [&_a]:text-gray-300 [&_a:hover]:text-secondary-light [&_a]:font-medium [&_a]:transition-colors [&_a]:focus-visible:outline-none [&_a]:focus-visible:ring-2 [&_a]:focus-visible:ring-secondary [&_a]:focus-visible:rounded">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-copyright',
        'container'      => false,
        'items_wrap'     => '%3$s',
        'depth'          => 1,
        'walker'         => new HA_Copyright_Walker(),
        'fallback_cb'    => '__return_false',
      ) );
      ?>
    </div>
  </div>
</div>
