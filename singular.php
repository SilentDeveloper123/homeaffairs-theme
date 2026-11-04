<?php
defined( 'ABSPATH' ) || exit;
$ha_email = carbon_get_theme_option( 'ha_email' ) ?: 'info@moha.gov.lk';
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<main class="py-14 lg:py-20 bg-gray-50" role="main">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-12">
      <div class="lg:col-span-2">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-card border border-gray-100 p-8 lg:p-10' ); ?>>
              <div class="flex flex-wrap items-center gap-4 text-xs text-gray-600 mb-6 pb-6 border-b border-gray-100">
                <span><i class="far fa-calendar-alt mr-1.5 text-secondary" aria-hidden="true"></i><?php echo get_the_date(); ?></span>
                <span><i class="far fa-user mr-1.5 text-secondary" aria-hidden="true"></i><?php echo esc_html( get_the_author() ); ?></span>
                <?php $ha_cats = get_the_category(); if ( ! empty( $ha_cats ) ) : ?>
                  <span><i class="far fa-folder-open mr-1.5 text-secondary" aria-hidden="true"></i><a href="<?php echo esc_url( get_category_link( $ha_cats[0]->term_id ) ); ?>" class="hover:text-secondary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded"><?php echo esc_html( $ha_cats[0]->name ); ?></a></span>
                <?php endif; ?>
              </div>
              <div class="entry-content prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-5">
                <?php the_content(); ?>
              </div>
              <?php
              wp_link_pages( array(
                'before' => '<div class="page-links flex gap-2 mt-6 text-sm">' . esc_html__( 'Pages:', 'homeaffairs' ),
                'after'  => '</div>',
              ) );
              ?>
              <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-100">
                <span class="text-gray-600 text-sm hover:text-secondary transition-colors flex items-center gap-2"><?php previous_post_link( '%link', '<i class="fas fa-chevron-left text-[10px]" aria-hidden="true"></i> ' . esc_html__( 'Previous', 'homeaffairs' ) ); ?></span>
                <span class="text-gray-600 text-sm hover:text-secondary transition-colors flex items-center gap-2"><?php next_post_link( '%link', esc_html__( 'Next', 'homeaffairs' ) . ' <i class="fas fa-chevron-right text-[10px]" aria-hidden="true"></i>' ); ?></span>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <aside class="space-y-6" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'homeaffairs' ); ?>">
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-sm mb-4 uppercase tracking-wider"><?php esc_html_e( 'Categories', 'homeaffairs' ); ?></h3>
          <ul class="space-y-2 text-sm">
            <?php wp_list_categories( array( 'title_li' => '', 'orderby' => 'name' ) ); ?>
          </ul>
        </div>
        <div class="bg-primary text-white rounded-2xl shadow-card p-6">
          <h3 class="font-bold text-base mb-4 flex items-center gap-2"><i class="fas fa-headset text-secondary" aria-hidden="true"></i> <?php esc_html_e( 'Quick Contacts', 'homeaffairs' ); ?></h3>
          <div class="space-y-3 text-sm text-white/80">
            <span class="flex items-center gap-3"><i class="fas fa-phone text-secondary w-4" aria-hidden="true"></i> +94 112 050 450</span>
            <span class="flex items-center gap-3"><i class="fas fa-envelope text-secondary w-4" aria-hidden="true"></i> <?php echo esc_html( $ha_email ); ?></span>
          </div>
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
