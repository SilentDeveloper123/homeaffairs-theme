<?php
/**
 * Template Name: Main Institutions Directory
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

get_header();

// 1. MAIN HERO BANNER
get_template_part( 'template-parts/page-banner' );

$lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';

if ( 'si' === $lang ) {
	$badge_text = 'ආයතනික නාමාවලිය';
	$page_title = 'අනුබද්ධ ආයතන පිළිබඳ දළ විශ්ලේෂණය';
	$lbl_prev   = 'පෙර';
	$lbl_next   = 'ඊළඟ';
	$institutions = array(
		array(
			'id'      => 'registrar-offices',
			'title'   => 'රෙජිස්ට්‍රාර් ජනරාල් දෙපාර්තමේන්තුව',
			'icon'    => 'fa-file-signature',
			'url'     => 'https://www.rgd.gov.lk/web/index.php/si/',
			'summary' => 'උපත්, මරණ සහ විවාහ ලියාපදිංචි කිරීමේ සේවා, සිවිල් තත්ත්ව ලේඛන සහ අදාළ මහජන සේවාවන් පිළිබඳ තොරතුරු ලබා ගන්න.',
			'cta'     => 'වැඩිදුර තොරතුරු',
			'target'  => '_blank',
		),
		array(
			'id'      => 'district-secretariats',
			'title'   => 'දිස්ත්‍රික් ලේකම් කාර්යාල',
			'icon'    => 'fa-map-marked-alt',
			'url'     => home_url( '/institutions/district-secretariats/' ),
			'summary' => 'සම්බන්ධතා තොරතුරු, ප්‍රාදේශීය සිතියම් සහ එක් එක් දිස්ත්‍රික්කය සඳහා පරිපාලන තොරතුරු ඇතුළත් ශ්‍රී ලංකාවේ සියලුම දිස්ත්‍රික් ලේකම් කාර්යාල 25 හි සම්පූර්ණ නාමාවලිය ලබා ගන්න.',
			'cta'     => 'වැඩිදුර තොරතුරු',
			'target'  => '_self',
		),
		array(
			'id'      => 'divisional-secretariats',
			'title'   => 'ප්‍රාදේශීය ලේකම් කාර්යාල',
			'icon'    => 'fa-sitemap',
			'url'     => home_url( '/institutions/divisional-secretariats/' ),
			'summary' => 'විස්තීර්ණ නිලධාරී තොරතුරු, සම්බන්ධතා දත්ත සහ පරිපාලන බලප්‍රදේශ විස්තර සමඟින් සියලුම ප්‍රාදේශීය ලේකම් කොට්ඨාස 331 පිරික්සන්න.',
			'cta'     => 'වැඩිදුර තොරතුරු',
			'target'  => '_self',
		),
		array(
			'id'      => 'grama-niladhari',
			'title'   => 'ග්‍රාම නිලධාරී කාර්යාල',
			'icon'    => 'fa-home',
			'url'     => home_url( '/institutions/grama-niladhari/' ),
			'summary' => 'නිලධාරී පැතිකඩ, සම්බන්ධතා අංක සහ ප්‍රාදේශීය පරිපාලන සීමාවන් සමඟ ග්‍රාම නිලධාරී වසම් 14,000කට අධික පුළුල් ජාලය ගවේෂණය කරන්න.',
			'cta'     => 'වැඩිදුර තොරතුරු',
			'target'  => '_self',
		),
	);
} elseif ( 'ta' === $lang ) {
	$badge_text = 'நிறுவன அடைவு';
	$page_title = 'இணைந்த நிறுவனங்கள் கண்ணோட்டம்';
	$lbl_prev   = 'முந்தைய';
	$lbl_next   = 'அடுத்த';
	$institutions = array(
		array(
			'id'      => 'registrar-offices',
			'title'   => 'பதிவாளர் நாயகம் திணைக்களம்',
			'icon'    => 'fa-file-signature',
			'url'     => 'https://www.rgd.gov.lk/web/index.php/ta/',
			'summary' => 'பிறப்பு, இறப்பு மற்றும் திருமணப் பதிவு சேவைகள், சிவில் நிலை ஆவணங்கள் மற்றும் தொடர்புடைய பொதுச் சேவைகள் பற்றிய தகவல்களை அணுகவும்.',
			'cta'     => 'மேலும் பார்க்க',
			'target'  => '_blank',
		),
		array(
			'id'      => 'district-secretariats',
			'title'   => 'மாவட்டச் செயலகங்கள்',
			'icon'    => 'fa-map-marked-alt',
			'url'     => home_url( '/institutions/district-secretariats/' ),
			'summary' => 'தொடர்பு விவரங்கள், பிராந்திய வரைபடங்கள் மற்றும் ஒவ்வொரு மாவட்டத்திற்குமான நிர்வாக சுயவிவரங்கள் உட்பட இலங்கையின் 25 மாவட்டச் செயலகங்களின் முழுமையான அடைவை அணுகவும்.',
			'cta'     => 'மேலும் பார்க்க',
			'target'  => '_self',
		),
		array(
			'id'      => 'divisional-secretariats',
			'title'   => 'பிரதேசச் செயலகங்கள்',
			'icon'    => 'fa-sitemap',
			'url'     => home_url( '/institutions/divisional-secretariats/' ),
			'summary' => 'முழுமையான உத்தியோகத்தர் தகவல்கள், தொடர்புத் தரவுகள் மற்றும் நிர்வாக அதிகார வரம்பு விவரங்களுடன் அனைத்து 331 பிரதேசச் செயலகங்களையும் உலாவவும்.',
			'cta'     => 'மேலும் பார்க்க',
			'target'  => '_self',
		),
		array(
			'id'      => 'grama-niladhari',
			'title'   => 'கிராம அலுவலர் அலுவலகங்கள்',
			'icon'    => 'fa-home',
			'url'     => home_url( '/institutions/grama-niladhari/' ),
			'summary' => 'உத்தியோகத்தர் சுயவிவரங்கள், தொடர்பு எண்கள் மற்றும் பிராந்திய நிர்வாக எல்லைகளுடன் 14,000 க்கும் மேற்பட்ட கிராம அலுவலர் பிரிவுகளின் விரிவான வலையமைப்பை ஆராயுங்கள்.',
			'cta'     => 'மேலும் பார்க்க',
			'target'  => '_self',
		),
	);
} else {
	$badge_text = 'INSTITUTIONAL DIRECTORY';
	$page_title = 'Affiliated Institutions Overview';
	$lbl_prev   = 'Prev';
	$lbl_next   = 'Next';
	$institutions = array(
		array(
			'id'      => 'registrar-offices',
			'title'   => "Registrar General's Department",
			'icon'    => 'fa-file-signature',
			'url'     => 'https://www.rgd.gov.lk/web/index.php/en/',
			'summary' => 'Access information on birth, death, and marriage registration services, civil status documentation, and related public services.',
			'cta'     => 'View More',
			'target'  => '_blank',
		),
		array(
			'id'      => 'district-secretariats',
			'title'   => 'District Secretariats',
			'icon'    => 'fa-map-marked-alt',
			'url'     => home_url( '/institutions/district-secretariats/' ),
			'summary' => 'Access the complete directory of all 25 District Secretariats across Sri Lanka, including contact details, regional maps, and administrative profiles for each district.',
			'cta'     => 'View More',
			'target'  => '_self',
		),
		array(
			'id'      => 'divisional-secretariats',
			'title'   => 'Divisional Secretariats',
			'icon'    => 'fa-sitemap',
			'url'     => home_url( '/institutions/divisional-secretariats/' ),
			'summary' => 'Browse all 331 Divisional Secretariats (DS Divisions) with comprehensive officer information, contact data, and administrative jurisdiction details.',
			'cta'     => 'View More',
			'target'  => '_self',
		),
		array(
			'id'      => 'grama-niladhari',
			'title'   => 'Grama Niladhari Offices',
			'icon'    => 'fa-home',
			'url'     => home_url( '/institutions/grama-niladhari/' ),
			'summary' => 'Explore the extensive network of over 14,000 Grama Niladhari divisions with officer profiles, contact numbers, and regional administrative boundaries.',
			'cta'     => 'View More',
			'target'  => '_self',
		),
	);
}

// Pagination Logic (4 items per page)
$per_page     = 4;
$paged        = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : ( get_query_var( 'page' ) ? (int) get_query_var( 'page' ) : 1 );
$current_page = max( 1, $paged );
$total_items  = count( $institutions );
$total_pages  = max( 1, (int) ceil( $total_items / $per_page ) );
$offset       = ( $current_page - 1 ) * $per_page;
$paged_items  = array_slice( $institutions, $offset, $per_page );

$paginate_links = paginate_links( array(
	'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
	'format'    => '?paged=%#%',
	'current'   => $current_page,
	'total'     => $total_pages,
	'type'      => 'array',
	'prev_text' => '<i class="fas fa-chevron-left mr-1" aria-hidden="true"></i> ' . esc_html( $lbl_prev ),
	'next_text' => esc_html( $lbl_next ) . ' <i class="fas fa-chevron-right ml-1" aria-hidden="true"></i>',
) );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

	<!-- STANDARD PAGE TITLE SECTION -->
	<div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php echo esc_html( $badge_text ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker tracking-tight">
			<?php echo esc_html( $page_title ); ?>
		</h1>
	</div>

	<!-- All 4 Cards Displayed in a 2x2 Grid Layout -->
	<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 items-stretch max-w-5xl mx-auto">
		<?php foreach ( $paged_items as $inst ) : ?>
			<a href="<?php echo esc_url( $inst['url'] ); ?>" <?php if ( ! empty( $inst['target'] ) && '_blank' === $inst['target'] ) : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?> class="bg-white border border-gray-200/80 rounded-2xl p-6 sm:p-8 shadow-sm hover:-translate-y-1 hover:shadow-md hover:border-secondary transition-all duration-300 group no-underline flex flex-col justify-between">
				<div>
					<div class="flex items-center gap-4 mb-4">
						<div class="w-12 h-12 rounded-xl bg-primary-darker/5 text-primary-darker group-hover:bg-primary-darker group-hover:text-secondary flex items-center justify-center transition-colors shrink-0 shadow-xs">
							<i class="fas <?php echo esc_attr( $inst['icon'] ); ?> text-xl" aria-hidden="true"></i>
						</div>
						<h3 class="text-lg font-extrabold text-slate-900 group-hover:text-primary-darker transition-colors m-0 leading-snug">
							<?php echo esc_html( $inst['title'] ); ?>
						</h3>
					</div>
					<p class="text-sm text-gray-500 leading-relaxed mb-6">
						<?php echo esc_html( $inst['summary'] ); ?>
					</p>
				</div>
				<div class="flex items-center gap-2 text-xs font-bold text-primary-darker group-hover:text-secondary transition-colors pt-3 border-t border-gray-100">
					<span><?php echo esc_html( $inst['cta'] ); ?></span>
					<i class="fas <?php echo ( ! empty( $inst['target'] ) && '_blank' === $inst['target'] ) ? 'fa-external-link-alt text-[9px]' : 'fa-arrow-right text-[10px]'; ?> group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
				</div>
			</a>
		<?php endforeach; ?>
	</div>

	<!-- Pagination Controls (4 per page) -->
	<div class="mt-12 flex justify-center">
		<nav class="inline-flex items-center gap-1.5" aria-label="<?php esc_attr_e( 'Institutions Pagination', 'homeaffairs' ); ?>">
			<?php if ( ! empty( $paginate_links ) && is_array( $paginate_links ) ) : ?>
				<?php foreach ( $paginate_links as $link ) :
					if ( strpos( $link, 'current' ) !== false ) {
						echo '<span class="bg-primary text-secondary font-bold px-4 py-2 rounded-xl text-sm shadow-sm inline-flex items-center justify-center border border-primary">' . wp_kses_post( $link ) . '</span>';
					} else {
						$link = str_replace( 'page-numbers', 'page-numbers px-4 py-2 rounded-xl text-sm font-semibold text-gray-700 bg-white hover:bg-slate-50 hover:text-primary transition-all border border-slate-200 shadow-xs inline-flex items-center justify-center no-underline', $link );
						echo wp_kses_post( $link );
					}
				endforeach; ?>
			<?php else : ?>
				<span class="px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-400 bg-slate-100 border border-slate-200 cursor-not-allowed select-none inline-flex items-center">
					<i class="fas fa-chevron-left mr-1 text-[10px]" aria-hidden="true"></i> <?php echo esc_html( $lbl_prev ); ?>
				</span>
				<span class="bg-primary text-secondary font-bold px-4 py-2 rounded-xl text-sm shadow-sm border border-primary inline-flex items-center justify-center">
					1
				</span>
				<span class="px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-400 bg-slate-100 border border-slate-200 cursor-not-allowed select-none inline-flex items-center">
					<?php echo esc_html( $lbl_next ); ?> <i class="fas fa-chevron-right ml-1 text-[10px]" aria-hidden="true"></i>
				</span>
			<?php endif; ?>
		</nav>
	</div>

</main>

<?php get_footer(); ?>
