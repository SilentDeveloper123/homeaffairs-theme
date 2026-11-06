<?php
/**
 * Template Name: Divisions Landing Template
 *
 * Divisions directory listing all ministry divisions with Quick Facts,
 * Introduction, and dynamic CPT-driven division cards.
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'template-parts/page-banner' );

$lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';

$page_id = get_queried_object_id();

// Section Visibility Toggles
$show_intro = function_exists( 'carbon_get_post_meta' ) && $page_id ? carbon_get_post_meta( $page_id, 'ha_divisions_show_intro' ) : ( function_exists( 'carbon_get_the_post_meta' ) ? carbon_get_the_post_meta( 'ha_divisions_show_intro' ) : 'show' );
if ( empty( $show_intro ) ) {
	$show_intro = 'show';
}

$show_facts = function_exists( 'carbon_get_post_meta' ) && $page_id ? carbon_get_post_meta( $page_id, 'ha_divisions_show_facts' ) : ( function_exists( 'carbon_get_the_post_meta' ) ? carbon_get_the_post_meta( 'ha_divisions_show_facts' ) : 'show' );
if ( empty( $show_facts ) ) {
	$show_facts = 'show';
}

$show_grid = function_exists( 'carbon_get_post_meta' ) && $page_id ? carbon_get_post_meta( $page_id, 'ha_divisions_show_grid' ) : ( function_exists( 'carbon_get_the_post_meta' ) ? carbon_get_the_post_meta( 'ha_divisions_show_grid' ) : 'show' );
if ( empty( $show_grid ) ) {
	$show_grid = 'show';
}

// Introduction Content
$intro_title = function_exists( 'carbon_get_post_meta' ) && $page_id ? carbon_get_post_meta( $page_id, 'ha_divisions_intro_title' ) : ( function_exists( 'carbon_get_the_post_meta' ) ? carbon_get_the_post_meta( 'ha_divisions_intro_title' ) : '' );
$intro_desc  = function_exists( 'carbon_get_post_meta' ) && $page_id ? carbon_get_post_meta( $page_id, 'ha_divisions_intro_desc' ) : ( function_exists( 'carbon_get_the_post_meta' ) ? carbon_get_the_post_meta( 'ha_divisions_intro_desc' ) : '' );

if ( empty( $intro_title ) ) {
	$default_intro_titles = array(
		'en' => 'Introduction',
		'si' => 'හැඳින්වීම',
		'ta' => 'அறிமுகம்',
	);
	$intro_title = isset( $default_intro_titles[ $lang ] ) ? $default_intro_titles[ $lang ] : $default_intro_titles['en'];
}

// Localized strings
$labels = array(
	'quick_facts'    => array( 'en' => 'Quick Facts', 'si' => 'කෙටි කරුණු', 'ta' => 'விரைவான தகவல்கள்' ),
	'total_divs'     => array( 'en' => 'Total Divisions', 'si' => 'මුළු අංශ', 'ta' => 'மொத்தப் பிரிவுகள்' ),
	'established'    => array( 'en' => 'Established', 'si' => 'ආරම්භය', 'ta' => 'நிறுவப்பட்டது' ),
	'est_year'       => array( 'en' => '2016', 'si' => '2016', 'ta' => '2016' ),
	'sub_units'      => array( 'en' => 'Sub Units / Divisions', 'si' => 'උප ඒකක / අංශ', 'ta' => 'துணை அலகுகள் / பிரிவுகள்' ),
	'jurisdiction'   => array( 'en' => 'Jurisdiction', 'si' => 'බල ප්‍රදේශය', 'ta' => 'அதிகார வரம்பு' ),
	'juris_val'      => array( 'en' => 'Island-wide', 'si' => 'දිවයින පුරා', 'ta' => 'நாடளாவிய ரீதியில்' ),
	'btn_explore'    => array( 'en' => 'Explore Division', 'si' => 'අංශය ගවේෂණය කරන්න', 'ta' => 'பிரிவை ஆராய்க' ),
	'no_divisions'   => array( 'en' => 'No divisions found.', 'si' => 'අංශ කිසිවක් හමු නොවීය.', 'ta' => 'பிரிவுகள் எதுவும் காணப்படவில்லை.' ),
);

$lbl_quick_facts  = $labels['quick_facts'][ $lang ] ?? $labels['quick_facts']['en'];
$lbl_total_divs   = $labels['total_divs'][ $lang ] ?? $labels['total_divs']['en'];
$lbl_established  = $labels['established'][ $lang ] ?? $labels['established']['en'];
$lbl_est_year     = $labels['est_year'][ $lang ] ?? $labels['est_year']['en'];
$lbl_sub_units    = $labels['sub_units'][ $lang ] ?? $labels['sub_units']['en'];
$lbl_jurisdiction = $labels['jurisdiction'][ $lang ] ?? $labels['jurisdiction']['en'];
$lbl_juris_val    = $labels['juris_val'][ $lang ] ?? $labels['juris_val']['en'];
$lbl_btn_explore  = $labels['btn_explore'][ $lang ] ?? $labels['btn_explore']['en'];
$lbl_no_divisions = $labels['no_divisions'][ $lang ] ?? $labels['no_divisions']['en'];

// Count total divisions from CPT
$count_posts = wp_count_posts( 'ha-division' );
$total_divisions_count = isset( $count_posts->publish ) ? (int) $count_posts->publish : 0;

// Count total sub-units across all published divisions
$total_sub_units_count = 0;
$all_div_ids = get_posts( array(
	'post_type'      => array( 'ha-division', 'ha_division' ),
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'fields'         => 'ids',
) );

if ( ! empty( $all_div_ids ) && function_exists( 'carbon_get_post_meta' ) ) {
	foreach ( $all_div_ids as $d_id ) {
		$subs = carbon_get_post_meta( $d_id, 'division_sub_units' );
		if ( is_array( $subs ) ) {
			$total_sub_units_count += count( $subs );
		}
	}
}
if ( $total_sub_units_count === 0 ) {
	$total_sub_units_count = 16; // reasonable baseline if repeaters empty
}

// Divisions Query
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );

$div_query = new WP_Query( array(
	'post_type'      => array( 'ha-division', 'ha_division' ),
	'post_status'    => 'publish',
	'posts_per_page' => 9,
	'paged'          => $paged,
	'orderby'        => 'menu_order date',
	'order'          => 'ASC',
) );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<?php if ( 'show' === $show_intro || 'show' === $show_facts ) : ?>
		<div class="grid grid-cols-1 <?php echo ( 'show' === $show_intro && 'show' === $show_facts ) ? 'lg:grid-cols-3' : ''; ?> gap-8 mb-14 items-start">
			
			<?php if ( 'show' === $show_intro ) : ?>
				<div class="<?php echo ( 'show' === $show_facts ) ? 'lg:col-span-2' : 'w-full'; ?>">
					<?php if ( ! empty( $intro_title ) ) : ?>
						<h2 class="div-intro-title text-2xl lg:text-3xl font-extrabold text-primary-dark tracking-tight mb-6">
							<?php echo esc_html( $intro_title ); ?>
						</h2>
					<?php endif; ?>

					<?php if ( ! empty( $intro_desc ) ) : ?>
						<div class="text-slate-600 text-sm sm:text-base text-justify leading-relaxed space-y-4">
							<?php echo wp_kses_post( $intro_desc ); ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ( 'show' === $show_facts ) : ?>
				<div class="<?php echo ( 'hide' === $show_intro ) ? 'max-w-md mx-auto w-full' : ''; ?>">
					<div class="bg-primary-dark rounded-2xl p-6 text-white shadow-md">
						<h3 class="text-sm font-bold mb-5 flex items-center gap-2 text-white">
							<i class="fas fa-chart-bar text-secondary"></i> <?php echo esc_html( $lbl_quick_facts ); ?>
						</h3>
						<div class="space-y-0">
							<div class="flex items-center justify-between border-b border-slate-700/50 py-3">
								<span class="text-xs text-white/70"><?php echo esc_html( $lbl_total_divs ); ?></span>
								<span class="text-secondary font-bold text-lg"><?php echo esc_html( $total_divisions_count ); ?></span>
							</div>
							<div class="flex items-center justify-between border-b border-slate-700/50 py-3">
								<span class="text-xs text-white/70"><?php echo esc_html( $lbl_established ); ?></span>
								<span class="text-sm font-bold text-white/90"><?php echo esc_html( $lbl_est_year ); ?></span>
							</div>
							<div class="flex items-center justify-between border-b border-slate-700/50 py-3">
								<span class="text-xs text-white/70"><?php echo esc_html( $lbl_sub_units ); ?></span>
								<span class="text-sm font-bold text-white/90"><?php echo esc_html( $total_sub_units_count ); ?></span>
							</div>
							<div class="flex items-center justify-between py-3 border-none">
								<span class="text-xs text-white/70"><?php echo esc_html( $lbl_jurisdiction ); ?></span>
								<span class="text-sm font-bold text-white/90"><?php echo esc_html( $lbl_juris_val ); ?></span>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

		</div>
	<?php endif; ?>

	<?php if ( 'show' === $show_grid ) : ?>
		<?php if ( $div_query->have_posts() ) : ?>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
				<?php while ( $div_query->have_posts() ) : $div_query->the_post();
					$p_id = get_the_ID();

					// Title
					$card_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $p_id, 'division_title' ) : '';
					if ( empty( $card_title ) ) {
						$card_title = get_the_title();
					}

					// Icon
					$card_icon = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $p_id, 'division_icon', 'fas fa-sitemap' ) : ( function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $p_id, 'division_icon' ) : 'fas fa-sitemap' );
					$card_icon = is_string( $card_icon ) ? $card_icon : ( function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( $card_icon, 'fas fa-sitemap' ) : 'fas fa-sitemap' );
					if ( empty( $card_icon ) ) {
						$card_icon = 'fas fa-sitemap';
					}

					// Short description
					$card_desc = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $p_id, 'division_short_intro' ) : '';
					if ( empty( $card_desc ) ) {
						$card_desc = get_the_excerpt();
					}

					$card_link = get_permalink();
				?>
					<a href="<?php echo esc_url( $card_link ); ?>" class="div-card bg-white border border-slate-100 rounded-2xl shadow-sm hover:-translate-y-2 hover:shadow-xl hover:border-slate-200 transition-all duration-300 group cursor-pointer no-underline block p-7">
						<div class="flex items-start gap-4 mb-4">
							<div class="div-icon-wrap">
								<i class="<?php echo esc_attr( $card_icon ); ?>"></i>
							</div>
							<h3 class="div-card-title m-0 flex-1 pt-1">
								<?php echo esc_html( $card_title ); ?>
							</h3>
						</div>
						<p class="div-card-text m-0 mb-5">
							<?php echo esc_html( $card_desc ); ?>
						</p>
						<div class="div-cta">
							<span><?php echo esc_html( $lbl_btn_explore ); ?></span>
							<i class="fas fa-arrow-right"></i>
						</div>
					</a>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>

			<?php
			// Pagination (Max 9 per page)
			$total_pages = $div_query->max_num_pages;
			if ( $total_pages > 1 ) :
			?>
				<div class="mt-12 flex justify-center">
					<nav class="inline-flex rounded-xl shadow-sm -space-x-px" aria-label="Pagination">
						<?php
						echo paginate_links( array(
							'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
							'format'    => '?paged=%#%',
							'current'   => max( 1, $paged ),
							'total'     => $total_pages,
							'prev_text' => '<i class="fas fa-chevron-left mr-1"></i> ' . esc_html__( 'Previous', 'homeaffairs' ),
							'next_text' => esc_html__( 'Next', 'homeaffairs' ) . ' <i class="fas fa-chevron-right ml-1"></i>',
							'type'      => 'plain',
						) );
						?>
					</nav>
				</div>
			<?php endif; ?>

		<?php else : ?>
			<div class="text-center py-16 bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
				<i class="fas fa-sitemap text-4xl text-slate-300 mb-4 block"></i>
				<p class="text-slate-500 text-base m-0"><?php echo esc_html( $lbl_no_divisions ); ?></p>
			</div>
		<?php endif; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
