<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: District Secretariats Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$img_base = get_template_directory_uri() . '/assets/images/districts/';

$intro_title = "District Secretariats of Sri Lanka";
$intro_text  = "Sri Lanka is divided into 25 districts, each administered by a District Secretariat headed by a District Secretary (also known as the Government Agent). These District Secretariats serve as the primary administrative link between the central government and the divisional secretariats, ensuring effective implementation of national policies, coordination of development activities, and delivery of public services at the district level.";
$intro_text2 = "Each District Secretariat operates under the purview of the Home Affairs Division, working diligently to uphold the highest standards of governance, public service, and administrative efficiency across the island.";

$sidebar_title = "District Directory";
$checking_label = "Checking...";
$online_label   = "System Online";

$provinces = [
	[ 'name' => 'Western Province',       'slug' => 'western',       'districts' => [
		[ 'id' => 'colombo',      'name' => 'Colombo',      'GA'=> 'Mr. Ginige Prasanna Janaka Kumara',        'tel' => '+94 11 234 5671', 'fax' => '+94 11 234 5672', 'email' => 'ds@colombo.dist.gov.lk',      'address' => 'District Secretariat, Colombo 01, Sri Lanka',  'website' => 'http://www.colombo.dist.gov.lk'],
		[ 'id' => 'gampaha',      'name' => 'Gampaha',      'GA'=> 'Mr. Lalinda Gamage',		  				'tel' => '+94 33 222 2361', 'fax' => '+94 33 222 2362', 'email' => 'districtsec-gampaha@moha.gov.lk',      'address' => 'District Secretariat, Gampaha, Sri Lanka',  'website' => 'http://www.gampaha.dist.gov.lk'],
		[ 'id' => 'kalutara',     'name' => 'Kalutara',      'GA'=> 'Mr.H. M. S. P. Herath',		  			'tel' => '+94 34 222 2261', 'fax' => '+94 34 222 2262', 'email' => 'districtsec-kalutara@moha.gov.lk',     'address' => 'District Secretariat, Kalutara, Sri Lanka', 'website' =>'http://kalutara.dist.gov.lk' ],
	] ],
	[ 'name' => 'Central Province',       'slug' => 'central',       'districts' => [
		[ 'id' => 'kandy',         'name' => 'Kandy',      'GA'=> ' Mr. Indika Udawatta',		  		'tel' => '+94 81 222 3391', 'fax' => '+94 81 222 3392', 'email' => 'districtsec-kandy@moha.gov.lk',         'address' => 'District Secretariat, Kandy, Sri Lanka', 'website' =>'http://www.kandy.dist.gov.lk'],
		[ 'id' => 'matale',        'name' => 'Matale',      'GA'=> 'Mr. Prasanna Madanayake',		  	'tel' => '+94 66 222 2661', 'fax' => '+94 66 222 2662', 'email' => 'districtsec-matale@moha.gov.lk',        'address' => 'District Secretariat, Matale, Sri Lanka', 'website' =>'http://www.matale.dist.gov.lk' ],
	] ],
];

$all_districts = [];
foreach ( $provinces as $p ) {
	foreach ( $p['districts'] as $d ) {
		$d['province'] = $p['name'];
		$d['province_slug'] = $p['slug'];
		$all_districts[] = $d;
	}
}
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
	<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
		<div class="lg:col-span-2 space-y-6">
			<!-- Intro Card -->
			<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8">
				<div class="flex items-center gap-3 mb-5">
					<span class="p-2.5 rounded-xl bg-maroon/5 text-secondary"><i class="fas fa-building-columns text-lg"></i></span>
					<h2 class="text-xl lg:text-2xl font-bold text-maroon m-0"><?php echo esc_html( $intro_title ); ?></h2>
				</div>
				<div class="text-gray-500 text-justify text-sm leading-relaxed space-y-4">
					<p><?php echo esc_html( $intro_text ); ?></p>
					<p><?php echo esc_html( $intro_text2 ); ?></p>
				</div>
			</div>

			<!-- Directory Table Card -->
			<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8">
				<h2 class="text-lg lg:text-xl font-bold text-maroon mb-5 flex items-center gap-2.5">
					<span class="p-2 rounded-xl bg-maroon/5 text-secondary"><i class="fas fa-map-location-dot text-sm"></i></span>
					District Secretariat Directory
				</h2>

				<!-- Search Input -->
				
				<div class="relative mb-6">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-600 text-sm pointer-events-none"></i>
					<input type="text" id="district-search" class="w-full rounded-xl border border-primary-darker/20 bg-white pl-10 pr-4 py-2.5 text-sm text-slate-700 placeholder:text-slate-500 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all" placeholder="Search by district name...">
				</div>

				<div class="overflow-x-auto -mx-6 lg:-mx-8">
					<div class="inline-block min-w-full align-middle px-6 lg:px-8">
						<table class="dist-table w-full text-left border-collapse">
							<thead>
								<tr class="border-b border-primary-darker/15 text-left text-xs font-bold text-primary-darker uppercase tracking-wider bg-primary-darker/5">
									<th class="py-3.5 px-4 rounded-l-lg">Province &amp; District</th>
									<th class="py-3.5 px-4">District Secretary / GA</th>
									<th class="py-3.5 px-4">Contact Information</th>
									<th class="py-3.5 px-4">Website </th>
								</tr>
							</thead>
							<tbody id="district-tbody" class="divide-y divide-gray-100 text-xs">
								<?php foreach ( $all_districts as $d ) : ?>
									<tr class="dist-row hover:bg-white/80 transition-colors" 
									data-name="<?php echo esc_attr( strtolower( $d['name'] ) ); ?>" 
								
									data-province="<?php echo esc_attr( strtolower( $d['province'] ) ); ?>">
									
										<td class="py-4 px-4 align-top">
											<span class="inline-block text-[9px] font-bold px-2 py-0.5 rounded bg-slate-100 text-slate-700 border border-slate-200 mb-1"><?php echo esc_html( $d['province'] ); ?></span>
											<span class="block text-sm font-extrabold text-slate-900"><?php echo esc_html( $d['name'] ); ?></span>
										</td>
										<td class="py-4 px-4 align-top">
											<div class="flex items-center gap-3">
												<div class="w-14 h-14 rounded-full overflow-hidden border border-gray-200 bg-gray-50 flex-shrink-0">
													<img loading="lazy" decoding="async" src="<?php echo esc_url( $img_base . $d['id'] . '.jpg' ); ?>" alt="<?php echo esc_attr( $d['name'] ); ?> District Secretary" class="w-full h-full object-cover object-top" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
													<div class="hidden w-full h-full items-center justify-center bg-gray-100 text-gray-300"><i class="fas fa-user-tie text-base"></i></div>
												</div>
												<div>
													<span class="block font-bold text-slate-800"> <?php echo esc_html( $d['GA'] ); ?></span>
												</div>
											</div>
										</td>
										<td class="py-4 px-4 align-top">
											<div class="space-y-1 text-gray-600">
												<div class="flex items-start gap-1.5"><i class="fas fa-map-marker-alt text-secondary text-[10px] mt-0.5"></i><span><?php echo esc_html( $d['address'] ); ?></span></div>
												<div class="flex items-center gap-1.5"><i class="fas fa-phone-alt text-secondary text-[10px]"></i><span><?php echo esc_html( $d['tel'] ); ?></span></div>
												<div class="flex items-center gap-1.5"><i class="fas fa-fax text-secondary text-[10px]"></i><span><?php echo esc_html( $d['fax'] ); ?></span></div>
												<div class="flex items-center gap-1.5"><i class="fas fa-envelope text-secondary text-[10px]"></i><a href="mailto:<?php echo esc_attr( $d['email'] ); ?>" class="text-maroon hover:underline font-medium"><?php echo esc_html( $d['email'] ); ?></a></div>
											</div>
										</td>
										
									
										<td class="ds-td">
										<?php if ( ! empty( $d['website'] ) ) : ?>
											<a href="<?php echo esc_url( $d['website'] ); ?>" target="_blank" rel="noopener noreferrer" class="ds-visit-btn">
												<i class="fas fa-external-link-alt"></i> Visit Site
											</a>
										<?php else : ?>
											<span class="text-gray-600">-</span>
										<?php endif; ?>
									</td>



									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

				<div id="dist-empty" class="hidden flex flex-col items-center justify-center py-12 text-gray-600">
					<div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mb-4">
						<i class="fas fa-map-pin text-2xl text-gray-300"></i>
					</div>
					<p class="text-sm font-medium text-gray-500">No districts match your search criteria.</p>
					<p class="text-xs text-gray-600 mt-1">Try a different district name or province.</p>
				</div>
			</div>
		</div>

		<!-- Sidebar Area -->
		<div class="lg:sticky lg:top-6 space-y-6">
			<!-- Directory Navigation Box -->
			<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
				<h3 class="font-bold text-maroon text-base mb-4 flex items-center gap-2.5">
					<i class="fas fa-map-location-dot text-secondary"></i> <?php echo esc_html( $sidebar_title ); ?>
				</h3>
				<nav class="overflow-y-auto max-h-[60vh] pr-1">
					<ul class="space-y-1">
						<li>
							<a href="#intro" class="flex items-center gap-2 py-1.5 px-3 rounded-lg text-xs font-bold text-maroon bg-secondary/10 no-underline">
								<i class="fas fa-chevron-right text-[9px] text-secondary"></i>
								<?php echo esc_html( $intro_title ); ?>
							</a>
						</li>
						<?php foreach ( $provinces as $p ) : ?>
							<li class="pt-2">
								<a href="#province-<?php echo esc_attr( $p['slug'] ); ?>" class="flex items-center gap-2 py-1.5 px-3 rounded-lg text-xs font-extrabold text-maroon bg-maroon/5 no-underline">
									<i class="fas fa-chevron-right text-[9px] text-secondary"></i>
									<span class="truncate"><?php echo esc_html( $p['name'] ); ?></span>
								</a>
							</li>
							<?php foreach ( $p['districts'] as $d ) : ?>
								<li>
									<a href="#district-<?php echo esc_attr( $d['id'] ); ?>" class="flex items-center gap-2 py-1 px-3 rounded-lg text-xs font-medium text-gray-500 hover:text-maroon hover:bg-secondary/10 no-underline ml-3">
										<i class="fas fa-circle text-[4px] text-gray-300"></i>
										<span class="truncate"><?php echo esc_html( $d['name'] ); ?></span>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<!-- Quick Facts SECONDARY Box -->
			<div class="bg-maroon text-white rounded-2xl shadow-md p-6">
				<h3 class="font-bold text-sm mb-5 flex items-center gap-2 text-white">
					<i class="fas fa-chart-simple text-secondary"></i> Quick Facts
				</h3>
				<div class="space-y-4">
					<div class="flex items-center justify-between border-b border-white/10 pb-3">
						<span class="text-xs text-white/80">Provinces</span>
						<span class="text-lg font-black text-secondary"><?php echo count( $provinces ); ?></span>
					</div>
					<div class="flex items-center justify-between border-b border-white/10 pb-3">
						<span class="text-xs text-white/80">Total Districts</span>
						<span class="text-lg font-black text-secondary"><?php echo count( $all_districts ); ?></span>
					</div>
					<div class="flex items-center justify-between border-b border-white/10 pb-3">
						<span class="text-xs text-white/80">Divisional Secretariats</span>
						<span class="text-sm font-bold text-white/90">331</span>
					</div>
					<div class="flex items-center justify-between">
						<span class="text-xs text-white/80">Grama Niladhari Divisions</span>
						<span class="text-sm font-bold text-white/90">14,022</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
(function() {
	var searchInput = document.getElementById('district-search');
	var tbody = document.getElementById('district-tbody');
	var emptyEl = document.getElementById('dist-empty');
	var rows = [].slice.call( tbody.querySelectorAll('.dist-row') );

	if ( searchInput && tbody ) {
		searchInput.addEventListener('input', function() {
			var q = this.value.toLowerCase().trim();
			var visible = 0;

			rows.forEach(function( row ) {
				var name = row.getAttribute('data-name') || '';
				var distri = row.getAttribute('data-districts') || '';
				var provi = row.getAttribute('data-province') || '';
				var match = name.indexOf(q) !== -1 || distri.indexOf(q) !== -1 || provi.indexOf(q) !== -1;

				row.style.display = match ? '' : 'none';
				if ( match ) { visible++; }
			});

			emptyEl.classList.toggle('hidden', visible > 0);
		});
	}
})();
</script>


<?php get_footer(); ?>