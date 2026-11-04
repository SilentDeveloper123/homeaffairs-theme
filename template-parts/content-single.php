<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden' ); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="overflow-hidden">
      <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-64 sm:h-80 lg:h-96 object-cover' ) ); ?>
    </div>
  <?php endif; ?>
  <div class="p-8 lg:p-10">
    <div class="flex flex-wrap items-center gap-4 text-[12px] text-gray-600 mb-5">
      <span class="bg-secondary/10 text-secondary font-semibold px-3 py-1 rounded-full"><?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
          echo esc_html( $categories[0]->name );
        } else {
          esc_html_e( 'Press Release', 'homeaffairs' );
        }
      ?></span>
      <span><i class="far fa-calendar-alt mr-1.5 text-secondary"></i><?php echo get_the_date(); ?></span>
      <span><i class="far fa-user mr-1.5 text-secondary"></i><?php echo esc_html( get_the_author() ); ?></span>
      <span><i class="far fa-comment mr-1.5 text-secondary"></i><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e( 'Comments', 'homeaffairs' ); ?></span>
    </div>
    <h1 class="text-2xl lg:text-3xl font-bold text-primary mb-6"><?php the_title(); ?></h1>
    <div class="entry-content prose prose-gray max-w-none text-gray-500 leading-relaxed space-y-5">
      <?php the_content(); ?>
    </div>
    <?php
    wp_link_pages( array(
      'before' => '<div class="page-links flex gap-2 mt-6 text-sm">' . esc_html__( 'Pages:', 'homeaffairs' ),
      'after'  => '</div>',
    ) );
    ?>
    <?php
    $ha_tags = get_the_tags();
    if ( $ha_tags ) :
    ?>
      <div class="flex flex-wrap items-center gap-2 mt-8 pt-6 border-t border-gray-100">
        <span class="text-xs text-gray-600 font-semibold mr-1"><?php esc_html_e( 'Tags:', 'homeaffairs' ); ?></span>
        <?php foreach ( $ha_tags as $ha_tag ) : ?>
          <a href="<?php echo esc_url( get_tag_link( $ha_tag->term_id ) ); ?>" class="bg-gray-100 text-gray-500 text-[11px] font-medium px-3 py-1 rounded-full hover:bg-secondary hover:text-white transition-all"><?php echo esc_html( $ha_tag->name ); ?></a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</article>
