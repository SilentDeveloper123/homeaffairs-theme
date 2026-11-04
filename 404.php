<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<main id="main-content" tabindex="-1" class="banner-page relative overflow-hidden focus:outline-none" role="main">
  <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/95 to-steel/80 z-[2]"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 relative z-10 text-center">
    <h1 class="text-8xl sm:text-9xl lg:text-[10rem] font-black text-white/10 mb-4 leading-none">404</h1>
    <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4"><?php esc_html_e( 'Page Not Found', 'homeaffairs' ); ?></h2>
    <p class="text-white/70 max-w-xl mx-auto text-base mb-8"><?php esc_html_e( 'The page you are looking for might have been moved, deleted, or the link may be incorrect.', 'homeaffairs' ); ?></p>
    <div class="max-w-md mx-auto mb-10">
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="flex gap-2" role="search">
        <label for="search-404" class="sr-only"><?php esc_html_e( 'Search the website', 'homeaffairs' ); ?></label>
        <input id="search-404" type="text" name="s" placeholder="<?php esc_attr_e( 'Search the website...', 'homeaffairs' ); ?>" class="flex-1 border border-white/20 bg-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
        <button type="submit" class="bg-secondary text-bg-dark font-bold px-5 py-3 rounded-xl text-sm hover:bg-secondary-dark hover:text-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary" aria-label="<?php esc_attr_e( 'Submit search', 'homeaffairs' ); ?>"><i class="fas fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
    <div class="flex gap-3 justify-center flex-wrap">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bg-secondary text-bg-dark font-bold px-6 py-3 rounded-xl text-sm hover:bg-secondary-dark hover:text-white transition-all shadow-lg inline-flex items-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><i class="fas fa-house" aria-hidden="true"></i> <?php esc_html_e( 'Go Home', 'homeaffairs' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>" class="bg-white/10 text-white font-semibold px-6 py-3 rounded-xl text-sm hover:bg-white/20 transition-all border border-white/20 inline-flex items-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><i class="fas fa-sitemap" aria-hidden="true"></i> <?php esc_html_e( 'Sitemap', 'homeaffairs' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="bg-white/10 text-white font-semibold px-6 py-3 rounded-xl text-sm hover:bg-white/20 transition-all border border-white/20 inline-flex items-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><i class="fas fa-envelope" aria-hidden="true"></i> <?php esc_html_e( 'Contact', 'homeaffairs' ); ?></a>
    </div>
  </div>
</main>

<?php get_footer(); ?>
