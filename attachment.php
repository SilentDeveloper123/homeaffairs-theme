<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<section class="py-14 lg:py-20 bg-gray-50">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
          <?php
          $ha_image = wp_get_attachment_image_src( get_the_ID(), 'full' );
          if ( $ha_image ) : ?>
            <a href="<?php echo esc_url( $ha_image[0] ); ?>" class="glightbox">
              <img loading="lazy" decoding="async" src="<?php echo esc_url( $ha_image[0] ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full">
            </a>
          <?php endif; ?>
          <div class="p-5 bg-gray-50 border-t border-gray-100">
            <p class="text-gray-500 text-sm italic"><i class="fas fa-camera text-secondary mr-2"></i><?php the_excerpt(); ?></p>
          </div>
        </div>
        <?php
        wp_link_pages( array(
          'before' => '<div class="flex items-center justify-center gap-2 mt-6 text-sm">' . esc_html__( 'Pages:', 'homeaffairs' ),
          'after'  => '</div>',
        ) );
        ?>
        <div class="grid sm:grid-cols-3 gap-4 mt-6 mb-8">
          <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
            <span class="text-xs text-gray-600 block mb-1"><?php esc_html_e( 'File Type', 'homeaffairs' ); ?></span>
            <span class="text-sm font-semibold text-primary"><?php echo esc_html( get_post_mime_type() ); ?></span>
          </div>
          <?php
          $ha_meta = wp_get_attachment_metadata( get_the_ID() );
          if ( isset( $ha_meta['width'] ) && isset( $ha_meta['height'] ) ) : ?>
            <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
              <span class="text-xs text-gray-600 block mb-1"><?php esc_html_e( 'Dimensions', 'homeaffairs' ); ?></span>
              <span class="text-sm font-semibold text-primary"><?php echo esc_html( $ha_meta['width'] ); ?> &times; <?php echo esc_html( $ha_meta['height'] ); ?> px</span>
            </div>
          <?php endif; ?>
          <div class="bg-white rounded-xl border border-gray-100 p-4 text-center">
            <span class="text-xs text-gray-600 block mb-1"><?php esc_html_e( 'File Size', 'homeaffairs' ); ?></span>
            <span class="text-sm font-semibold text-primary"><?php echo esc_html( size_format( filesize( get_attached_file( get_the_ID() ) ) ) ); ?></span>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-gray-600 text-sm hover:text-secondary transition-colors flex items-center gap-2"><?php previous_image_link( false, '<i class="fas fa-chevron-left text-[10px]"></i> ' . esc_html__( 'Previous Attachment', 'homeaffairs' ) ); ?></span>
          <span class="text-gray-600 text-sm hover:text-secondary transition-colors flex items-center gap-2"><?php next_image_link( false, esc_html__( 'Next Attachment', 'homeaffairs' ) . ' <i class="fas fa-chevron-right text-[10px]"></i>' ); ?></span>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
