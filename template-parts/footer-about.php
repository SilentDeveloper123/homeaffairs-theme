<?php
defined( 'ABSPATH' ) || exit;

$ha_ministry_name = ha_get_theme_option( 'ha_ministry_name', __( 'Ministry of Public Administration, Provincial Councils and Local Government', 'homeaffairs' ) );
$ha_division_name = ha_get_theme_option( 'ha_division_name', __( 'Home Affairs Division', 'homeaffairs' ) );
$ha_emblem_url    = ha_get_theme_image_url( 'ha_emblem', 'full', get_template_directory_uri() . '/assets/images/emblem-sri-lanka.svg' );
$address          = ha_get_theme_option( 'ha_address', "\"Nila Madura\",\nElvitigala Mawatha, Narahenpita,\nColombo 05, Sri Lanka" );
$phone            = ha_get_theme_option( 'ha_telephone', '+94 112 050 450' );
$phone_url        = preg_replace( '/[^\d+]/', '', $phone );
$email            = ha_get_theme_option( 'ha_email', 'info@moha.gov.lk' );
$website          = ha_get_theme_option( 'ha_website_url', 'www.moha.gov.lk' );
$website_url      = ( strpos( $website, 'http' ) === 0 ) ? $website : 'https://' . ltrim( $website, '/' );
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
  <?php if ( ! empty( $address ) ) : ?>
    <p class="text-sm leading-relaxed mb-5 transition-colors"><?php echo nl2br( esc_html( $address ) ); ?></p>
  <?php endif; ?>
  <div class="space-y-2.5 text-[13px] sm:text-sm">
    <a href="tel:<?php echo esc_attr( $phone_url ); ?>" class="flex items-center gap-2.5 sm:gap-3 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors leading-snug"><i class="fas fa-phone w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="footer-phone font-medium whitespace-nowrap"><?php echo esc_html( $phone ); ?></span></a>
    <a href="mailto:<?php echo esc_attr( $email ); ?>" class="flex items-center gap-2.5 sm:gap-3 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors leading-snug"><i class="fas fa-envelope w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="break-all sm:break-normal font-medium"><?php echo esc_html( $email ); ?></span></a>
    <a href="<?php echo esc_url( $website_url ); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 sm:gap-3 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors leading-snug"><i class="fas fa-globe w-4 text-secondary shrink-0 text-center text-xs sm:text-sm" aria-hidden="true"></i> <span class="font-medium"><?php echo esc_html( $website ); ?></span></a>
  </div>
  <?php
  $fb = ha_get_theme_option( 'ha_social_facebook' );
  $x  = ha_get_theme_option( 'ha_social_x' );
  $yt = ha_get_theme_option( 'ha_social_youtube' );
  $has_social = ! empty( $fb ) || ! empty( $x ) || ! empty( $yt );
  if ( $has_social ) : ?>
    <div class="flex gap-3 mt-6">
      <?php if ( ! empty( $fb ) ) : ?>
        <a href="<?php echo esc_url( $fb ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon w-11 h-11 rounded-full border border-white/15 flex items-center justify-center text-sm text-white/80 hover:bg-secondary hover:text-primary-dark hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <?php endif; ?>
      <?php if ( ! empty( $x ) ) : ?>
        <a href="<?php echo esc_url( $x ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-white/80 hover:bg-secondary hover:text-primary-dark hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="X (Twitter)"><i class="fab fa-x-twitter"></i></a>
      <?php endif; ?>
      <?php if ( ! empty( $yt ) ) : ?>
        <a href="<?php echo esc_url( $yt ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon w-11 h-11 rounded-full border border-white/10 flex items-center justify-center text-sm text-white/80 hover:bg-secondary hover:text-primary-dark hover:border-secondary transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2 focus-visible:ring-offset-bg-dark" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>
