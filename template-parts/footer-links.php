<div>
  <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6"><?php echo esc_html( carbon_get_theme_option( 'ha_footer_menu_title' ) ?: __( 'Related Links', 'homeaffairs' ) ); ?></h4>
  <?php
  wp_nav_menu( array(
    'theme_location' => 'menu-footer',
    'container'      => false,
    'menu_class'     => 'space-y-3 text-sm',
    'depth'          => 1,
    'walker'         => new HA_Footer_Walker(),
    'fallback_cb'    => '__return_false',
  ) );
  ?>
</div>
