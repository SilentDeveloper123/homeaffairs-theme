<?php
/**
 * Single News & Announcement Post Template
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;
get_header(); ?>

<?php get_template_part( 'template-parts/page-banner' ); ?>

<main class="py-12 lg:py-16 bg-gray-50" role="main">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-10">
      
      <!-- Main Article Column (2 Cols) -->
      <div class="lg:col-span-2">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          $post_id     = get_the_ID();
          $custom_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_custom_title' ) : '';
          $disp_title   = $custom_title ?: get_the_title();
          $short_desc   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_short_desc' ) : '';
          $wysiwyg_desc = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_description' ) : '';
          $feat_img     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_featured_image' ) : '';
          if ( ! $feat_img && has_post_thumbnail() ) {
            $feat_img = get_the_post_thumbnail_url( $post_id, 'ha-news-hero' );
          }
          $gallery      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_gallery' ) : array();
          $attachment   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_attachment' ) : '';
          $att_url      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_attachment_url' ) : '';
          $doc_link     = ! empty( $attachment ) ? $attachment : $att_url;

          $terms        = get_the_terms( $post_id, 'news_category' );
          $cat_name     = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->name : __( 'News & Announcement', 'homeaffairs' );
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl shadow-card border border-gray-100 overflow-hidden' ); ?>>
            
            <?php if ( $feat_img ) : ?>
              <a href="<?php echo esc_url( $feat_img ); ?>" class="glightbox block relative w-full h-72 sm:h-96 lg:h-[420px] bg-gray-100 overflow-hidden group cursor-pointer" data-gallery="news-gallery-<?php echo esc_attr( $post_id ); ?>" data-title="<?php echo esc_attr( $disp_title ); ?>">
                <img src="<?php echo esc_url( $feat_img ); ?>" alt="<?php echo esc_attr( $disp_title ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/25 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100 pointer-events-none">
                  <span class="w-12 h-12 rounded-full bg-white/90 text-primary flex items-center justify-center shadow-lg transition-transform group-hover:scale-110">
                    <i class="fas fa-search-plus text-base text-secondary"></i>
                  </span>
                </div>
              </a>
            <?php endif; ?>

            <div class="p-6 sm:p-8 lg:p-10">
              
              <!-- Meta Badges -->
              <div class="flex flex-wrap items-center gap-3 text-xs text-gray-600 mb-4 pb-4 border-b border-gray-100">
                <span class="bg-secondary/15 text-primary font-bold px-3 py-1 rounded-full uppercase tracking-wider text-[10px]">
                  <?php echo esc_html( $cat_name ); ?>
                </span>
                <span class="flex items-center gap-1.5"><i class="far fa-calendar-alt text-secondary"></i> <?php echo get_the_date(); ?></span>
                <span class="flex items-center gap-1.5"><i class="far fa-user text-secondary"></i> <?php echo esc_html( get_the_author() ); ?></span>
                <?php if ( $doc_link ) : ?>
                  <span class="ml-auto inline-flex items-center gap-1 text-secondary font-bold"><i class="fas fa-file-pdf"></i> <?php esc_html_e( 'Document Available', 'homeaffairs' ); ?></span>
                <?php endif; ?>
              </div>

              <!-- Main Title -->
              <h1 class="text-xl sm:text-2xl lg:text-3xl font-black text-primary leading-tight mb-4">
                <?php echo esc_html( $disp_title ); ?>
              </h1>

              <!-- Lead / Short Description -->
              <?php if ( $short_desc ) : ?>
                <div class="p-4 bg-gray-50 border-l-4 border-secondary rounded-r-xl mb-6 text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                  <?php echo esc_html( $short_desc ); ?>
                </div>
              <?php endif; ?>

              <!-- Document / PDF Attachment Download Box -->
              <?php if ( $doc_link ) : ?>
                <div class="mb-8 p-4 sm:p-5 bg-gradient-to-r from-primary-dark/5 to-secondary/10 border border-secondary/30 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                  <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-secondary/20 text-secondary flex items-center justify-center text-xl shrink-0">
                      <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                      <h4 class="font-bold text-primary text-sm"><?php esc_html_e( 'Official Announcement Document', 'homeaffairs' ); ?></h4>
                      <p class="text-xs text-gray-500 mt-0.5"><?php esc_html_e( 'Download verified press release or gazette notice (PDF).', 'homeaffairs' ); ?></p>
                    </div>
                  </div>
                  <a href="<?php echo esc_url( $doc_link ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-secondary hover:bg-secondary-dark text-primary font-extrabold text-xs tracking-wider transition-all shadow-sm shrink-0">
                    <i class="fas fa-download"></i> <?php esc_html_e( 'Download PDF', 'homeaffairs' ); ?>
                  </a>
                </div>
              <?php endif; ?>

              <!-- Full Article Body -->
              <div class="entry-content prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-5 text-sm sm:text-base">
                <?php
                if ( $wysiwyg_desc ) {
                  echo wp_kses_post( wpautop( $wysiwyg_desc ) );
                } else {
                  the_content();
                }
                ?>
              </div>

              <!-- Media Gallery (Max 8 Images) -->
              <?php if ( ! empty( $gallery ) ) : ?>
                <div class="mt-10 pt-8 border-t border-gray-100">
                  <h3 class="text-base sm:text-lg font-bold text-primary mb-4 flex items-center gap-2">
                    <i class="fas fa-images text-secondary"></i> <?php esc_html_e( 'Photo Gallery', 'homeaffairs' ); ?>
                  </h3>
                  <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                    <?php foreach ( $gallery as $g_item ) :
                      $g_img  = ! empty( $g_item['gallery_image'] ) ? $g_item['gallery_image'] : '';
                      $g_capt = ! empty( $g_item['gallery_caption'] ) ? $g_item['gallery_caption'] : '';
                      if ( ! $g_img ) continue;
                    ?>
                      <a href="<?php echo esc_url( $g_img ); ?>" class="glightbox group relative block rounded-xl overflow-hidden shadow-2xs border border-gray-100 aspect-video bg-gray-100 cursor-pointer" data-gallery="news-gallery-<?php echo esc_attr( $post_id ); ?>" data-title="<?php echo esc_attr( $g_capt ?: $disp_title ); ?>">
                        <img src="<?php echo esc_url( $g_img ); ?>" alt="<?php echo esc_attr( $g_capt ?: $disp_title ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/25 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100 pointer-events-none">
                          <span class="w-8 h-8 rounded-full bg-white/90 text-primary flex items-center justify-center shadow-md">
                            <i class="fas fa-search-plus text-xs text-secondary"></i>
                          </span>
                        </div>
                        <?php if ( $g_capt ) : ?>
                          <div class="absolute inset-x-0 bottom-0 bg-black/60 text-white text-[10px] p-1.5 truncate pointer-events-none">
                            <?php echo esc_html( $g_capt ); ?>
                          </div>
                        <?php endif; ?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Back to News link -->
              <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-between">
                <a href="<?php echo esc_url( home_url( '/news-announcements/' ) ); ?>" class="inline-flex items-center gap-2 text-primary hover:text-secondary font-bold text-xs transition-colors">
                  <i class="fas fa-arrow-left text-[10px]"></i> <?php esc_html_e( 'Back to All News & Announcements', 'homeaffairs' ); ?>
                </a>
              </div>

            </div>
          </article>
        <?php endwhile; endif; ?>
      </div>

      <!-- Sidebar Column (1 Col) -->
      <aside class="space-y-6" role="complementary">
        
        <!-- Categories Widget -->
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-sm mb-4 uppercase tracking-wider flex items-center gap-2">
            <i class="fas fa-folder text-secondary text-xs"></i> <?php esc_html_e( 'News Categories', 'homeaffairs' ); ?>
          </h3>
          <ul class="space-y-2 text-xs">
            <?php
            $news_terms = get_terms( array( 'taxonomy' => 'news_category', 'hide_empty' => false ) );
            if ( ! empty( $news_terms ) && ! is_wp_error( $news_terms ) ) :
              foreach ( $news_terms as $nt ) :
            ?>
              <li>
                <a href="<?php echo esc_url( get_term_link( $nt ) ); ?>" class="text-gray-600 hover:text-secondary flex items-center justify-between py-1 border-b border-gray-50 transition-colors">
                  <span><?php echo esc_html( $nt->name ); ?></span>
                  <span class="bg-gray-100 text-gray-500 rounded-full px-2 py-0.5 text-[10px] font-semibold"><?php echo esc_html( $nt->count ); ?></span>
                </a>
              </li>
            <?php endforeach; endif; ?>
          </ul>
        </div>

        <!-- Recent News Widget -->
        <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6">
          <h3 class="font-bold text-primary text-sm mb-4 uppercase tracking-wider flex items-center gap-2">
            <i class="fas fa-newspaper text-secondary text-xs"></i> <?php esc_html_e( 'Latest Announcements', 'homeaffairs' ); ?>
          </h3>
          <ul class="space-y-3">
            <?php
            $recent_news = new WP_Query( array(
              'post_type'      => 'news_announcement',
              'posts_per_page' => 5,
              'post_status'    => 'publish',
            ) );
            if ( $recent_news->have_posts() ) :
              while ( $recent_news->have_posts() ) : $recent_news->the_post();
            ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="text-xs text-gray-700 hover:text-secondary font-medium transition-colors block line-clamp-2">
                  <?php the_title(); ?>
                </a>
                <span class="text-[10px] text-gray-400 mt-0.5 block"><?php echo get_the_date( 'M d, Y' ); ?></span>
              </li>
            <?php endwhile; wp_reset_postdata(); else : ?>
              <li class="text-xs text-gray-400"><?php esc_html_e( 'No recent announcements.', 'homeaffairs' ); ?></li>
            <?php endif; ?>
          </ul>
        </div>

        <!-- Help Desk Banner -->
        <div class="bg-gradient-to-br from-primary-dark to-primary text-white rounded-2xl p-6 shadow-md border border-secondary/20">
          <span class="text-[9px] uppercase tracking-widest text-secondary font-bold block mb-1"><?php esc_html_e( 'Media Inquiries', 'homeaffairs' ); ?></span>
          <h4 class="font-bold text-base mb-2"><?php esc_html_e( 'Information & Media Unit', 'homeaffairs' ); ?></h4>
          <p class="text-xs text-secondary-light/85 leading-relaxed mb-4"><?php esc_html_e( 'Home Affairs Division, Sri Lanka', 'homeaffairs' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="inline-flex items-center gap-2 text-xs font-bold text-secondary hover:text-white transition-colors">
            <span><?php esc_html_e( 'Contact Media Unit', 'homeaffairs' ); ?></span>
            <i class="fas fa-arrow-right text-[10px]"></i>
          </a>
        </div>

      </aside>

    </div>
  </div>
</main>

<?php get_footer(); ?>
