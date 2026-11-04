<div>
  <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6"><?php echo esc_html( carbon_get_theme_option( 'ha_map_column_title' ) ?: __( 'Find Us', 'homeaffairs' ) ); ?></h4>
  <div class="rounded-xl overflow-hidden border border-white/10">
    <?php
    $map_url = carbon_get_theme_option( 'ha_map_embed_url' );
    if ( empty( $map_url ) ) {
        $map_url = '';
    }
    ?>
    <iframe src="<?php echo esc_url( $map_url ); ?>" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php esc_attr_e( 'Map to Ministry of Home Affairs', 'homeaffairs' ); ?>"></iframe>
  </div>
  <!-- <div class="mt-5 space-y-2 text-sm">
    <div class="flex items-center gap-3 text-gray-600"><i class="fas fa-clock w-4 text-secondary"></i><span><?php esc_html_e( 'Mon — Fri: 8:30 AM — 4:30 PM', 'homeaffairs' ); ?></span></div>
    <div class="flex items-center gap-3 text-gray-600"><i class="fas fa-clock w-4 text-secondary"></i><span><?php esc_html_e( 'Sat — Sun: Closed', 'homeaffairs' ); ?></span></div>
    <div class="flex items-center gap-3 text-gray-600"><i class="fas fa-calendar-alt w-4 text-secondary"></i><span><?php esc_html_e( 'Public Holidays: Closed', 'homeaffairs' ); ?></span></div>
  </div> -->
</div>
