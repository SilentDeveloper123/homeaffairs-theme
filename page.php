<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<main class="py-14 lg:py-20 bg-gray-50" role="main">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-12">
      <div class="lg:col-span-2">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <aside role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'homeaffairs' ); ?>">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
