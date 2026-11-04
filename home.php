<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<main class="py-14 lg:py-20 bg-gray-50" role="main">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-12">
      <div class="lg:col-span-2 space-y-6">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php $ha_cats = get_the_category(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-card hover:shadow-card-md border border-gray-100 overflow-hidden card-hover transition-all duration-300' ); ?>>
              <div class="relative">
                <?php if ( has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>" class="block overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-52 sm:h-64 object-cover transition-transform duration-300 hover:scale-105', 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
                  </a>
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>" class="block w-full h-52 sm:h-64 bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
                    <i class="fas fa-newspaper text-white/30 text-5xl" aria-hidden="true"></i>
                  </a>
                <?php endif; ?>
                <?php if ( ! empty( $ha_cats ) ) : ?>
                  <span class="absolute top-3 left-3 inline-flex items-center gap-1.5 text-secondary font-bold text-[10px] tracking-[1px] uppercase bg-primary-darker/90 backdrop-blur px-2.5 py-1 rounded-full shadow-sm"><?php echo esc_html( $ha_cats[0]->name ); ?></span>
                <?php endif; ?>
              </div>
              <div class="p-6">
                <h3 class="text-lg font-bold text-primary mb-2">
                  <a href="<?php the_permalink(); ?>" class="hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded transition-colors"><?php the_title(); ?></a>
                </h3>
                <div class="text-sm text-gray-600 mb-3 leading-relaxed"><?php the_excerpt(); ?></div>
                <div class="text-xs text-gray-500 flex items-center gap-2">
                  <span><i class="far fa-calendar text-secondary mr-1" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
          <?php ha_pagination(); ?>
        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
      </div>
      <aside class="space-y-6" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'homeaffairs' ); ?>">
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-base mb-4"><i class="fas fa-newspaper text-secondary mr-2" aria-hidden="true"></i> <?php esc_html_e( 'Categories', 'homeaffairs' ); ?></h3>
          <ul class="space-y-2 text-sm">
            <?php
            $ha_categories = get_categories( array( 'hide_empty' => true ) );
            foreach ( $ha_categories as $ha_cat ) :
            ?>
              <li><a href="<?php echo esc_url( get_category_link( $ha_cat->term_id ) ); ?>" class="text-gray-600 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded-lg px-3 py-2 -mx-3 flex items-center gap-2 transition-colors"><i class="fas fa-chevron-right text-[8px] text-secondary" aria-hidden="true"></i> <?php echo esc_html( $ha_cat->name ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-base mb-4"><i class="fas fa-clock text-secondary mr-2" aria-hidden="true"></i> <?php esc_html_e( 'Recent Posts', 'homeaffairs' ); ?></h3>
          <ul class="space-y-3 text-sm">
            <?php
            $ha_recent = get_posts( array( 'numberposts' => 5 ) );
            foreach ( $ha_recent as $ha_post ) :
              setup_postdata( $ha_post );
            ?>
              <li><a href="<?php the_permalink(); ?>" class="text-gray-600 hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded-lg px-3 py-2 -mx-3 flex items-start gap-2 leading-snug transition-colors"><?php echo get_the_title( $ha_post->ID ); ?></a></li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-base mb-4"><i class="fas fa-search text-secondary mr-2" aria-hidden="true"></i> <?php esc_html_e( 'Search', 'homeaffairs' ); ?></h3>
          <?php get_search_form(); ?>
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
