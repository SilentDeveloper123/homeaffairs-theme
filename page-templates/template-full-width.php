<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Full Width Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<section class="py-14 lg:py-20 bg-gray-50">
  <main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</section>

<?php get_footer(); ?>
