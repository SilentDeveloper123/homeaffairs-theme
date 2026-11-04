<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-card hover:shadow-card-md border border-gray-100 p-6 card-top-line card-hover transition-all duration-300' ); ?>>
  <div class="flex items-center gap-2 text-xs text-gray-600 mb-3">
    <span class="bg-secondary/10 text-secondary font-bold px-2 py-0.5 rounded text-[10px] uppercase"><?php echo esc_html( get_post_type() ); ?></span>
    <span>&middot;</span>
    <span><i class="far fa-calendar-alt mr-1 text-secondary" aria-hidden="true"></i><?php echo get_the_date(); ?></span>
  </div>
  <h3 class="text-lg font-bold text-primary mb-3">
    <a href="<?php the_permalink(); ?>" class="hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors"><?php the_title(); ?></a>
  </h3>
  <div class="text-sm text-gray-700 leading-relaxed mb-4">
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-secondary hover:text-secondary-dark font-semibold text-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded">
    <?php esc_html_e( 'Read More', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]" aria-hidden="true"></i>
  </a>
</article>
