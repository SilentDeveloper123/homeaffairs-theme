<div class="bg-white rounded-2xl shadow-card border border-gray-100 p-12 text-center">
  <div class="text-6xl text-gray-300 mb-6"><i class="fas fa-file-circle-exclamation text-secondary/60" aria-hidden="true"></i></div>
  <h2 class="text-2xl font-bold text-primary mb-4"><?php esc_html_e( 'Nothing Found', 'homeaffairs' ); ?></h2>
  <p class="text-gray-600 mb-8 max-w-md mx-auto leading-relaxed">
    <?php
    if ( is_search() ) {
      esc_html_e( 'Sorry, no results matched your search terms. Please try again with different keywords.', 'homeaffairs' );
    } else {
      esc_html_e( 'No content has been published yet. Please check back later.', 'homeaffairs' );
    }
    ?>
  </p>
  <div class="max-w-md mx-auto">
    <?php get_search_form(); ?>
  </div>
</div>
