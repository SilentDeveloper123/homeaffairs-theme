<?php
defined( 'ABSPATH' ) || exit;
$ha_footer_bg = get_template_directory_uri() . '/assets/images/footer-bg.jpg';
?>
<footer
  class="relative overflow-hidden bg-cover bg-center bg-gray-900 text-gray-300 border-t border-secondary/30"
  style="background-image: url('<?php echo esc_url( $ha_footer_bg ); ?>'); background-color: var(--color-primary-darker);"
  aria-label="<?php esc_attr_e( 'Site footer', 'homeaffairs' ); ?>"
>
  <!-- Dark overlay for improved text contrast -->
  <div class="absolute inset-0 bg-black/45 pointer-events-none z-0" aria-hidden="true"></div>

  <!-- Footer grid content -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 lg:py-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-16">
    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
      <?php dynamic_sidebar( 'footer-1' ); ?>
    <?php else : ?>
      <?php get_template_part( 'template-parts/footer-about' ); ?>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
      <?php dynamic_sidebar( 'footer-2' ); ?>
    <?php else : ?>
      <?php get_template_part( 'template-parts/footer-links' ); ?>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
      <?php dynamic_sidebar( 'footer-3' ); ?>
    <?php else : ?>
      <?php get_template_part( 'template-parts/footer-inquiry' ); ?>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
      <?php dynamic_sidebar( 'footer-4' ); ?>
    <?php else : ?>
      <?php get_template_part( 'template-parts/footer-find-us' ); ?>
    <?php endif; ?>
  </div>

  <?php get_template_part( 'template-parts/footer-copyright' ); ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
