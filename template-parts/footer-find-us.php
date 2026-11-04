<?php
defined( 'ABSPATH' ) || exit;

$map_title = ha_get_theme_option( 'ha_map_column_title' );
$map_url   = ha_get_theme_option( 'ha_map_embed_url' );
?>
<div>
  <?php if ( ! empty( $map_title ) ) : ?>
    <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6"><?php echo esc_html( $map_title ); ?></h4>
  <?php endif; ?>
  <?php if ( ! empty( $map_url ) ) : ?>
    <div class="rounded-xl overflow-hidden border border-white/10">
      <iframe src="<?php echo esc_url( $map_url ); ?>" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php esc_attr_e( 'Map to Home Affairs Division', 'homeaffairs' ); ?>"></iframe>
    </div>
  <?php endif; ?>
</div>
