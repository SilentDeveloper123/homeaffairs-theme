<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<section class="py-14 lg:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-8"><p class="text-gray-600 text-sm"><?php printf( esc_html__( 'All articles categorized under &ldquo;%s&rdquo;.', 'homeaffairs' ), single_cat_title( '', false ) ); ?></p></div>
    <?php if ( have_posts() ) : ?>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'archive' ); ?>
        <?php endwhile; ?>
      </div>
      <?php ha_pagination(); ?>
    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
