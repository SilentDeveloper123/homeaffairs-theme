<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<main class="py-14 lg:py-20 bg-gray-50" role="main">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto mb-10">
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="flex gap-3" role="search">
        <label for="search-page-input" class="sr-only"><?php esc_html_e( 'Search the website', 'homeaffairs' ); ?></label>
        <input id="search-page-input" type="text" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search the website...', 'homeaffairs' ); ?>" class="flex-1 border border-gray-200 rounded-xl px-5 py-3.5 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary shadow-sm">
        <button type="submit" class="bg-secondary text-bg-dark font-bold px-6 py-3.5 rounded-xl text-sm hover:bg-secondary-dark hover:text-white transition-all shadow-sm flex items-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><i class="fas fa-search" aria-hidden="true"></i> <?php esc_html_e( 'Search', 'homeaffairs' ); ?></button>
      </form>
    </div>
    <p class="text-gray-600 text-sm mb-8 text-center font-medium"><?php
      global $wp_query;
      printf( esc_html__( '%d results found for &ldquo;%s&rdquo;', 'homeaffairs' ), $wp_query->found_posts, get_search_query() );
    ?></p>
    <?php if ( have_posts() ) : ?>
      <div class="space-y-4 max-w-3xl mx-auto">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'search' ); ?>
        <?php endwhile; ?>
      </div>
      <?php ha_pagination(); ?>
    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
