<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-card hover:shadow-card-md border border-gray-100 overflow-hidden transition-all duration-300 group' ); ?>>
  <div class="relative overflow-hidden">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500', 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
    <?php else : ?>
      <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/page-banner.jpg' ); ?>" alt="" class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
    <?php endif; ?>
    <div class="absolute top-3 left-3 bg-primary-darker/90 backdrop-blur text-secondary text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm"><?php echo get_the_date( 'F Y' ); ?></div>
  </div>
  <div class="p-5">
    <h3 class="font-bold text-primary text-sm mb-2 group-hover:text-secondary">
      <a href="<?php the_permalink(); ?>" class="hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors"><?php the_title(); ?></a>
    </h3>
    <div class="text-gray-600 text-xs leading-relaxed mb-3"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink(); ?>" class="text-secondary hover:text-secondary-dark text-xs font-semibold inline-flex items-center gap-1.5 hover:gap-2.5 transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded"><?php esc_html_e( 'Read More', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[8px]" aria-hidden="true"></i></a>
  </div>
</article>
