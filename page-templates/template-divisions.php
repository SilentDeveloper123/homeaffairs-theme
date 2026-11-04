<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Main Divisions Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Introduction";
$intro_text  = "The Home Affairs Division serves as the nucleus of civil administration within the Ministry of Public Administration, Provincial Councils and Local Government. The Division encompasses specialized operational branches and coordinates key affiliated departments—including the Registrar General’s Department—to manage critical facets of governance, regional administrative management, institutional development, technological modernization, and good governance.";
$intro_text2 = "Working in alignment with national priorities, the Division oversees an island-wide administrative network spanning District Secretariats, Divisional Secretariats, and Grama Niladhari divisions to ensure excellence, transparency, and efficiency in public service delivery at every level.";

$divisions_data = [
	[
		'id'    => 'administration',
		'title' => 'Administration Division',
		'icon'  => 'fa-building',
		'slug'  => 'administration',
		'summary' => 'Managing day-to-day administrative functions, service conditions, and human resource policies across all departments of the Ministry.',
	],

	[
		'id'    => 'home-affairs',
		'title' => 'Home Affairs Division',
		'icon'  => 'fa-house-chimney',
		'slug'  => 'home-affairs',
		'summary' => 'Serving as the central coordinating body for civil administration, policy implementation, and service delivery across all districts.',
	],

	[
		'id'    => 'finance',
		'title' => 'Finance Division',
		'icon'  => 'fa-coins',
		'slug'  => 'finance',
		'summary' => 'Overseeing financial management, budgeting, accounting, and reporting to ensure fiscal discipline and transparency across the institution.',
	],
	[
		'id'    => 'planning',
		'title' => 'Planning Division',
		'icon'  => 'fa-chart-line',
		'slug'  => 'planning',
		'summary' => 'Driving strategic planning, project formulation, monitoring, and evaluation of development initiatives aligned with national priorities.',
	],
	[
		'id'    => 'development',
		'title' => 'Development Division',
		'icon'  => 'fa-tree',
		'slug'  => 'development',
		'summary' => 'Coordinating rural development programmes, community projects, and district-level development activities across the island.',
	],
	[
		'id'    => 'engineering',
		'title' => 'Engineering Division',
		'icon'  => 'fa-microchip',
		'slug'  => 'engineering',
		'summary' => 'Managing information technology systems, digitization projects, and technical infrastructure to modernize public service delivery.',
	],
	[
		'id'    => 'regional-reforms',
		'title' => 'Regional Administration Reforms Division',
		'icon'  => 'fa-city',
		'slug'  => 'regional-reforms',
		'summary' => 'Implementing administrative reforms, service restructuring, and efficiency improvement at Divisional Secretariat level.',
	],
	[
		'id'    => 'internal-audit',
		'title' => 'Internal Audit Division',
		'icon'  => 'fa-file-invoice',
		'slug'  => 'internal-audit',
		'summary' => 'Conducting financial and performance audits to ensure fiscal discipline, accountability, and regulatory compliance.',
	],
	[
		'id'    => 'investigation',
		'title' => 'Investigation Division',
		'icon'  => 'fa-search',
		'slug'  => 'investigation',
		'summary' => 'Carrying out complaint investigations, administrative inquiries, and disciplinary proceedings on matters referred to the Ministry.',
	],
	
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-14">
		<div class="lg:col-span-2">
			<h2 class="div-intro-title text-2xl lg:text-3xl font-extrabold text-primary-dark tracking-tight mb-6">
				<?php echo esc_html( $intro_title ); ?>
			</h2>
			<div class="text-slate-600 text-sm sm:text-base text-justify leading-relaxed space-y-4">
				<p><?php echo $intro_text; ?></p>
				<p><?php echo $intro_text2; ?></p>
			</div>
		</div>
		<div>
			<div class="bg-primary-dark rounded-2xl p-6 text-white shadow-md">
				<h3 class="text-sm font-bold mb-5 flex items-center gap-2 text-white">
					<i class="fas fa-chart-bar text-secondary"></i> Quick Facts
				</h3>
				<div class="space-y-0">
					<div class="flex items-center justify-between border-b border-slate-700/50 py-3">
						<span class="text-xs text-white/70">Total Divisions</span>
						<span class="text-secondary font-bold text-lg"><?php echo count( $divisions_data ); ?></span>
					</div>
					<div class="flex items-center justify-between border-b border-slate-700/50 py-3">
						<span class="text-xs text-white/70">Established</span>
						<span class="text-sm font-bold text-white/90">2016</span>
					</div>
					<div class="flex items-center justify-between border-b border-slate-700/50 py-3">
						<span class="text-xs text-white/70">Sub-Units</span>
						<span class="text-sm font-bold text-white/90">20</span>
					</div>
					<div class="flex items-center justify-between py-3 border-none">
						<span class="text-xs text-white/70">Jurisdiction</span>
						<span class="text-sm font-bold text-white/90">Island-wide</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
		<?php foreach ( $divisions_data as $div ) : ?>
			<?php $page_url = esc_url( home_url( '/divisions/' . $div['slug'] . '/' ) ); ?>
			<a href="<?php echo $page_url; ?>" class="div-card bg-white border border-slate-100 rounded-2xl shadow-sm hover:-translate-y-2 hover:shadow-xl hover:border-slate-200 transition-all duration-300 group cursor-pointer no-underline block p-7">
				<div class="flex items-start gap-4 mb-4">
					<div class="div-icon-wrap">
						<i class="fas <?php echo esc_attr( $div['icon'] ); ?>"></i>
					</div>
					<h3 class="div-card-title m-0 flex-1 pt-1">
						<?php echo esc_html( $div['title'] ); ?>
					</h3>
				</div>
				<p class="div-card-text m-0 mb-5">
					<?php echo esc_html( $div['summary'] ); ?>
				</p>
				<div class="div-cta">
					<span>Explore Division</span>
					<i class="fas fa-arrow-right"></i>
				</div>
			</a>
		<?php endforeach; ?>
	</div>
</main>

<?php get_footer(); ?>
