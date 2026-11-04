<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<main class="py-14 lg:py-20 bg-gray-50" role="main">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
      <p class="text-gray-600 text-sm font-medium"><?php esc_html_e( 'Browse all archived posts and publications from the Ministry.', 'homeaffairs' ); ?></p>
      <div class="flex flex-wrap gap-2">
        <select aria-label="<?php esc_attr_e( 'Filter by year', 'homeaffairs' ); ?>" class="border border-gray-200 rounded-lg px-3 py-2 text-xs text-gray-700 bg-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
          <option value=""><?php esc_html_e( 'All Years', 'homeaffairs' ); ?></option>
          <?php foreach ( range( date( 'Y' ), 2020 ) as $year ) : ?>
            <option value="<?php echo esc_attr( $year ); ?>" <?php selected( get_query_var( 'year' ), $year ); ?>><?php echo esc_html( $year ); ?></option>
          <?php endforeach; ?>
        </select>
        <select aria-label="<?php esc_attr_e( 'Filter by month', 'homeaffairs' ); ?>" class="border border-gray-200 rounded-lg px-3 py-2 text-xs text-gray-700 bg-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
          <option value=""><?php esc_html_e( 'All Months', 'homeaffairs' ); ?></option>
          <?php for ( $m = 1; $m <= 12; $m++ ) : ?>
            <option value="<?php echo esc_attr( $m ); ?>" <?php selected( get_query_var( 'monthnum' ), $m ); ?>><?php echo esc_html( $GLOBALS['wp_locale']->get_month( $m ) ); ?></option>
          <?php endfor; ?>
        </select>
        <button class="bg-secondary text-bg-dark font-bold px-4 py-2 rounded-lg text-xs hover:bg-secondary-dark hover:text-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><?php esc_html_e( 'Filter', 'homeaffairs' ); ?></button>
      </div>
    </div>
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
</main>

<?php get_footer(); ?>
