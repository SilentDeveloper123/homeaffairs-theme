<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Main Institutions Directory
 */

get_header();

// ── 1. MAIN HERO BANNER ──
get_template_part( 'template-parts/page-banner' );

$institutions = [
	[
		'id'      => 'district-secretariats',
		'title'   => 'District Secretariats',
		'icon'    => 'fa-map-marked-alt',
		'slug'    => 'district-secretariats',
		'summary' => 'Access the complete directory of all 25 District Secretariats across Sri Lanka, including contact details, regional maps, and administrative profiles for each district.',
		'cta'     => 'View Directory',
	],
	[
		'id'      => 'divisional-secretariats',
		'title'   => 'Divisional Secretariats',
		'icon'    => 'fa-sitemap',
		'slug'    => 'divisional-secretariats',
		'summary' => 'Browse all 331 Divisional Secretariats (DS Divisions) with comprehensive officer information, contact data, and administrative jurisdiction details.',
		'cta'     => 'View Directory',
	],
	[
		'id'      => 'grama-niladhari',
		'title'   => 'Grama Niladhari Offices',
		'icon'    => 'fa-home',
		'slug'    => 'grama-niladhari',
		'summary' => 'Explore the extensive network of over 14,000 Grama Niladhari divisions with officer profiles, contact numbers, and regional administrative boundaries.',
		'cta'     => 'Access Portal',
	],
];

$affiliated = [
	[
		'id'      => 'registrar-offices',
		'title'   => 'Registrar General\'s Department',
		'icon'    => 'fa-file-signature',
		'slug'    => 'registrar-offices',
		'summary' => 'Access information on birth, death, and marriage registration services, civil status documentation, and related public services.',
		'cta'     => 'Access Portal',
	],
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

	<!-- STANDARD PAGE TITLE SECTION -->
	<div class="text-center max-w-3xl mx-auto mb-10">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'INSTITUTIONAL DIRECTORY', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'Affiliated Institutions Overview', 'homeaffairs' ); ?></h1>
	</div>

	<!-- Core Institutions -->
	<div class="mb-12">
		<div class="flex items-center gap-2 mb-6 border-b border-gray-100 pb-3">
			<i class="fas fa-star text-secondary text-sm"></i>
			<h2 class="text-sm font-extrabold text-maroon uppercase tracking-wider m-0">
				<?php esc_html_e( 'Core Administrative Institutions', 'homeaffairs' ); ?>
			</h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php foreach ( $institutions as $inst ) : ?>
				<?php $page_url = esc_url( home_url( '/institutions/' . $inst['slug'] . '/' ) ); ?>
				<a href="<?php echo $page_url; ?>" class="bg-white border border-gray-200/80 rounded-xl p-6 shadow-sm hover:-translate-y-1 hover:shadow-md hover:border-secondary transition-all duration-300 group no-underline flex flex-col justify-between">
					<div>
						<div class="flex items-center gap-3 mb-4">
							<div class="w-10 h-10 rounded-lg bg-maroon/5 text-maroon group-hover:bg-maroon group-hover:text-secondary flex items-center justify-center transition-colors">
								<i class="fas <?php echo esc_attr( $inst['icon'] ); ?> text-base"></i>
							</div>
							<h3 class="text-base font-extrabold text-slate-900 group-hover:text-maroon transition-colors m-0">
								<?php echo esc_html( $inst['title'] ); ?>
							</h3>
						</div>
						<p class="text-xs text-gray-500 leading-relaxed mb-6">
							<?php echo esc_html( $inst['summary'] ); ?>
						</p>
					</div>
					<div class="flex items-center gap-2 text-xs font-bold text-maroon group-hover:text-secondary transition-colors pt-2 border-t border-gray-50">
						<span><?php echo esc_html( $inst['cta'] ); ?></span>
						<i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- Affiliated Institutions -->
	<div>
		<div class="flex items-center gap-2 mb-6 border-b border-gray-100 pb-3">
			<i class="fas fa-link text-secondary text-sm"></i>
			<h2 class="text-sm font-extrabold text-maroon uppercase tracking-wider m-0">
				<?php esc_html_e( 'Other Affiliated Institutions', 'homeaffairs' ); ?>
			</h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php foreach ( $affiliated as $inst ) : ?>
				<?php $page_url = esc_url( home_url( '/institutions/' . $inst['slug'] . '/' ) ); ?>
				<a href="https://www.rgd.gov.lk/web/index.php/en/" class="bg-white border border-gray-200/80 rounded-xl p-6 shadow-sm hover:-translate-y-1 hover:shadow-md hover:border-secondary transition-all duration-300 group no-underline flex flex-col justify-between">
					<div>
						<div class="flex items-center gap-3 mb-4">
							<div class="w-10 h-10 rounded-lg bg-maroon/5 text-maroon group-hover:bg-maroon group-hover:text-secondary flex items-center justify-center transition-colors">
								<i class="fas <?php echo esc_attr( $inst['icon'] ); ?> text-base"></i>
							</div>
							<h3 class="text-base font-extrabold text-slate-900 group-hover:text-maroon transition-colors m-0">
								<?php echo esc_html( $inst['title'] ); ?>
							</h3>
						</div>
						<p class="text-xs text-gray-500 leading-relaxed mb-6">
							<?php echo esc_html( $inst['summary'] ); ?>
						</p>
					</div>
					<div class="flex items-center gap-2 text-xs font-bold text-maroon group-hover:text-secondary transition-colors pt-2 border-t border-gray-50">
						<span><?php echo esc_html( $inst['cta'] ); ?></span>
						<i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>

</main>

<?php get_footer(); ?>