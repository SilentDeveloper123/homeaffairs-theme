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
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-card border border-gray-100 overflow-hidden' ); ?>>
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-64 sm:h-80 lg:h-96 object-cover', 'loading' => 'eager', 'decoding' => 'async' ) ); ?>
              <?php endif; ?>
              <div class="p-8 lg:p-10">
                <div class="flex flex-wrap items-center gap-4 text-xs text-gray-600 mb-5">
                  <span class="bg-secondary/10 text-secondary font-semibold px-3 py-1 rounded-full"><?php
                    $ha_cats = get_the_category();
                    echo esc_html( ! empty( $ha_cats ) ? $ha_cats[0]->name : __( 'Press Release', 'homeaffairs' ) );
                  ?></span>
                  <span><i class="far fa-calendar-alt mr-1.5 text-secondary" aria-hidden="true"></i><?php echo get_the_date(); ?></span>
                  <span><i class="far fa-user mr-1.5 text-secondary" aria-hidden="true"></i><?php echo esc_html( get_the_author() ); ?></span>
                  <span><i class="far fa-comment mr-1.5 text-secondary" aria-hidden="true"></i><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e( 'Comments', 'homeaffairs' ); ?></span>
                </div>
                <div class="entry-content prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-5">
                  <?php the_content(); ?>
                </div>
                <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links flex gap-2 mt-6 text-sm">' . esc_html__( 'Pages:', 'homeaffairs' ),
                  'after'  => '</div>',
                ) );
                $ha_tags = get_the_tags();
                if ( $ha_tags ) :
                ?>
                  <div class="flex flex-wrap items-center gap-2 mt-8 pt-6 border-t border-gray-100">
                    <span class="text-xs text-gray-600 font-semibold mr-1"><?php esc_html_e( 'Tags:', 'homeaffairs' ); ?></span>
                    <?php foreach ( $ha_tags as $ha_tag ) : ?>
                      <a href="<?php echo esc_url( get_tag_link( $ha_tag->term_id ) ); ?>" class="bg-gray-100 text-gray-700 text-[11px] font-medium px-3 py-1 rounded-full hover:bg-secondary hover:text-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary"><?php echo esc_html( $ha_tag->name ); ?></a>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6 sm:p-8 mt-8 flex items-center gap-5">
          <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-steel flex items-center justify-center text-white text-2xl shrink-0"><i class="fas fa-user-tie" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-bold text-primary text-sm"><?php esc_html_e( 'Media Unit', 'homeaffairs' ); ?></h4>
            <p class="text-gray-600 text-xs mt-1"><?php esc_html_e( 'Home Affairs Division', 'homeaffairs' ); ?></p>
          </div>
        </div>
        <?php if ( comments_open() || get_comments_number() ) : ?>
          <?php comments_template(); ?>
        <?php endif; ?>
      </div>
      <aside class="space-y-8" role="complementary" aria-label="<?php esc_attr_e( 'Post Sidebar', 'homeaffairs' ); ?>">
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-sm mb-4 uppercase tracking-wider"><?php esc_html_e( 'Categories', 'homeaffairs' ); ?></h3>
          <ul class="space-y-2 text-sm">
            <?php wp_list_categories( array( 'title_li' => '', 'orderby' => 'name' ) ); ?>
          </ul>
        </div>
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-sm mb-4 uppercase tracking-wider"><?php esc_html_e( 'Recent Posts', 'homeaffairs' ); ?></h3>
          <ul class="space-y-3 text-sm">
            <?php
            $ha_recent = new WP_Query( array( 'posts_per_page' => 5, 'ignore_sticky_posts' => true ) );
            while ( $ha_recent->have_posts() ) : $ha_recent->the_post(); ?>
              <li><a href="<?php the_permalink(); ?>" class="text-gray-600 hover:text-secondary transition-colors flex items-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded"><i class="fas fa-chevron-right text-[8px] text-secondary" aria-hidden="true"></i><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-sm mb-4 uppercase tracking-wider"><?php esc_html_e( 'Search', 'homeaffairs' ); ?></h3>
          <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="flex gap-2" role="search">
            <label for="single-search" class="sr-only"><?php esc_html_e( 'Search posts', 'homeaffairs' ); ?></label>
            <input id="single-search" type="text" name="s" placeholder="<?php esc_attr_e( 'Search...', 'homeaffairs' ); ?>" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-xs focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
            <button type="submit" class="bg-secondary text-bg-dark font-bold px-4 py-2 rounded-lg text-xs hover:bg-secondary-dark hover:text-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary" aria-label="<?php esc_attr_e( 'Search', 'homeaffairs' ); ?>"><i class="fas fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
