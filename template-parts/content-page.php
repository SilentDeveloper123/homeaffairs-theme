<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10 space-y-6 text-gray-500 leading-relaxed' ); ?>>
  <h2 class="text-2xl lg:text-3xl font-bold text-primary"><?php the_title(); ?></h2>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="rounded-xl overflow-hidden">
      <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
    </div>
  <?php endif; ?>
  <div class="entry-content space-y-4">
    <?php the_content(); ?>
  </div>
  <?php
  wp_link_pages( array(
    'before' => '<div class="page-links flex gap-2 mt-6 text-sm">' . esc_html__( 'Pages:', 'homeaffairs' ),
    'after'  => '</div>',
  ) );
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }
  ?>
</article>
