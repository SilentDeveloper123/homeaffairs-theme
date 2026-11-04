<?php
defined( 'ABSPATH' ) || exit;
$ha_email = carbon_get_theme_option( 'ha_email' ) ?: 'info@moha.gov.lk';
?><div class="space-y-6">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php else : ?>
    <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
      <h3 class="font-bold text-primary text-base mb-4 flex items-center gap-2"><i class="fas fa-list text-secondary" aria-hidden="true"></i> <?php esc_html_e( 'On This Page', 'homeaffairs' ); ?></h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="text-gray-600 hover:text-secondary flex items-center gap-2.5 rounded-lg px-3 py-2 -mx-3 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><i class="fas fa-chevron-right text-[8px] text-secondary" aria-hidden="true"></i> <?php esc_html_e( 'Section Heading', 'homeaffairs' ); ?></a></li>
      </ul>
    </div>
    <div class="bg-primary text-white rounded-2xl shadow-card p-6">
      <h3 class="font-bold text-base mb-4 flex items-center gap-2"><i class="fas fa-headset text-secondary" aria-hidden="true"></i> <?php esc_html_e( 'Quick Contacts', 'homeaffairs' ); ?></h3>
      <div class="space-y-3 text-sm text-white/85">
        <span class="flex items-center gap-3"><i class="fas fa-phone text-secondary w-4" aria-hidden="true"></i> +94 112 050 450</span>
        <span class="flex items-center gap-3"><i class="fas fa-envelope text-secondary w-4" aria-hidden="true"></i> <?php echo esc_html( $ha_email ); ?></span>
        <span class="flex items-center gap-3"><i class="fas fa-location-dot text-secondary w-4" aria-hidden="true"></i> Nila Madura, Independence Sq, Colombo 07</span>
      </div>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="mt-5 inline-flex items-center gap-2 bg-secondary text-bg-dark font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-secondary-dark hover:text-white transition-all w-full justify-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white"><i class="fas fa-envelope" aria-hidden="true"></i> <?php esc_html_e( 'Contact Us', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]" aria-hidden="true"></i></a>
    </div>
  <?php endif; ?>
</div>
