<?php
defined( 'ABSPATH' ) || exit;

$ha_ministry_name = carbon_get_theme_option( 'ha_ministry_name' ) ?: __( 'Ministry of Public Administration, Provincial Councils and Local Government', 'homeaffairs' );
$ha_division_name = carbon_get_theme_option( 'ha_division_name' ) ?: __( 'Home Affairs Division', 'homeaffairs' );
$ha_emblem_id     = carbon_get_theme_option( 'ha_emblem' );
$ha_emblem_url    = $ha_emblem_id ? wp_get_attachment_image_url( absint( $ha_emblem_id ), 'full' ) : '';
if ( empty( $ha_emblem_url ) ) {
    $ha_emblem_url = get_template_directory_uri() . '/assets/images/emblem-sri-lanka.svg';
}
?>
<div>
  <div class="mb-5">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-start gap-3.5 min-w-0 group no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded-lg">
      <img src="<?php echo esc_url( $ha_emblem_url ); ?>" alt="<?php esc_attr_e( 'National Emblem of Sri Lanka', 'homeaffairs' ); ?>" width="600" height="851" class="h-14 sm:h-16 lg:h-18 xl:h-20 w-auto shrink-0 object-contain transition-transform duration-200 group-hover:scale-105" loading="lazy" decoding="async">
      <span class="min-w-0 flex flex-col justify-start leading-none">
        <span class="block text-white/80 font-medium text-[10px] leading-normal mb-1.5"><?php echo esc_html( $ha_ministry_name ); ?></span>
        <span class="block text-white font-black text-[16px] leading-tight group-hover:text-secondary transition-colors"><?php echo esc_html( $ha_division_name ); ?></span>
      </span>
    </a>
  </div>
  <?php
  $address = carbon_get_theme_option( 'ha_address' );
  if ( ! empty( $address ) ) {
      echo '<p class="text-sm leading-relaxed mb-5 transition-colors">' . nl2br( esc_html( $address ) ) . '</p>';
  } else {
      echo '<p class="text-sm leading-relaxed mb-5 transition-colors">&ldquo;Nila Madura&rdquo;, Independence Square,<br>Colombo 07, Sri Lanka.</p>';
  }
  ?>
  <div class="space-y-2.5 text-[13px] sm:text-sm">
    <?php
    $phone = carbon_get_theme_option( 'ha_telephone' );
    if ( ! empty( $phone ) ) {
        $phone_url = preg_replace( '/[^\d+]/', '', $phone );
        echo '<a href="tel:' . esc_attr( $phone_url ) . '" class="flex items-center gap-2.5 sm:gap-3 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors leading-snug"><i class="fas fa-phone w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="footer-phone font-medium whitespace-nowrap">' . esc_html( $phone ) . '</span></a>';
    } else {
        echo '<a href="tel:+94112050450" class="flex items-center gap-2.5 sm:gap-3 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors leading-snug"><i class="fas fa-phone w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="footer-phone font-medium whitespace-nowrap">+94 112 050 450</span></a>';
    }
    ?>
    <?php $email = carbon_get_theme_option( 'ha_email' ) ?: 'info@moha.gov.lk'; ?>
    <a href="mailto:<?php echo esc_attr( $email ); ?>" class="flex items-center gap-2.5 sm:gap-3 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors leading-snug"><i class="fas fa-envelope w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="break-all sm:break-normal font-medium"><?php echo esc_html( $email ); ?></span></a>
    <span class="flex items-center gap-2.5 sm:gap-3 leading-snug"><i class="fas fa-globe w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="font-medium">www.moha.gov.lk</span></span>
  </div>
  <?php
  $fb   = carbon_get_theme_option( 'ha_social_facebook' );
  $x    = carbon_get_theme_option( 'ha_social_x' );
  $yt   = carbon_get_theme_option( 'ha_social_youtube' );
  $has_social = ! empty( $fb ) || ! empty( $x ) || ! empty( $yt );
  if ( $has_social ) {
      echo '<div class="flex gap-3 mt-6">';
      if ( ! empty( $fb ) ) {
          echo '<a href="' . esc_url( $fb ) . '" target="_blank" rel="noopener noreferrer" class="social-icon w-11 h-11 rounded-full border border-white/15 flex items-center justify-center text-sm text-white/80 hover:bg-secondary hover:text-primary-dark hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>';
      }
      if ( ! empty( $x ) ) {
          echo '<a href="' . esc_url( $x ) . '" target="_blank" rel="noopener noreferrer" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="X (Twitter)"><i class="fab fa-twitter"></i></a>';
      }
      if ( ! empty( $yt ) ) {
          echo '<a href="' . esc_url( $yt ) . '" target="_blank" rel="noopener noreferrer" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="YouTube"><i class="fab fa-youtube"></i></a>';
      }
      echo '</div>';
  } else {
      echo '<div class="flex gap-3 mt-6">';
      echo '<a href="#" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>';
      echo '<a href="#" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="Twitter"><i class="fab fa-twitter"></i></a>';
      echo '<a href="#" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="YouTube"><i class="fab fa-youtube"></i></a>';
      echo '<a href="#" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-gray-600 hover:bg-secondary hover:text-white hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>';
      echo '</div>';
  }
  ?>
</div>
