<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: History and Former Ministers Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$tag_text       = "MINISTRY HERITAGE";
$page_title     = "History & Former Ministers";

$intro_title    = "Civil Administration & History";
$intro_text     = "The subject of Home Affairs, which stands as the nucleus of civil administration in Sri Lanka, has been deeply intertwined with the country's governance history. From the early Chief Secretary’s Office under the British administration to the highly decentralized network of District and Divisional Secretariats today, this division has undergone immense transformation.";
$intro_text2    = "Formally instituted under the Donoughmore Constitution in 1931, the Ministry of Home Affairs assumed pivotal responsibilities post-independence, steering rural governance, regional administration, civil registrations, and community development across the island.";

$ministers_title = "Former Ministers";
$ministers = [
    ['name' => 'Mr. Vajira Abewardhana', 'tenure' => '2015.09.04', 'tenure_end' => '2019.11.21', 'designation' => 'Ministry of Home Affairs', 'img' => 'wajira_abe.jpg'],
    ['name' => 'Mr. M. Joseph Michael Perera', 'tenure' => '2015.03.22', 'tenure_end' => '2015.06.26', 'designation' => 'Ministry of Home Affairs', 'img' => 'joseph_michael.jpg'],
    ['name' => 'Mr. M. Joseph Michael Perera', 'tenure' => '2015.01.12', 'tenure_end' => '2015.03.22', 'designation' => 'Ministry of Home Affairs and Fisheries', 'img' => 'joseph_michael.jpg'],
    ['name' => 'Mr. W. D. J. Senevirathna', 'tenure' => '2010.04.23', 'tenure_end' => '2015.01.09', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'john_senevirathna.jpg'],
    ['name' => 'Mr. Sarath Amunugama', 'tenure' => '2009.01.01', 'tenure_end' => '2009.01.16', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'sarath_amunugama.jpg'],
    ['name' => 'Mr. Karu Jayasuriya', 'tenure' => '2007.01.28', 'tenure_end' => '2008.12.09', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'karu_jayasuriya.jpg'],
    ['name' => 'Mr. Sarath Amunugama', 'tenure' => '2005.11.23', 'tenure_end' => '2007.01.27', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'sarath_amunugama.jpg'],
    ['name' => 'Mr. Amarasiri Dodangoda', 'tenure' => '2004.04.10', 'tenure_end' => '2005.11.22', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'amarasiri_dodangoda.jpg'],
    ['name' => 'Mr. Alick Aluvihare', 'tenure' => '2001.12.12', 'tenure_end' => '2004.02.07', 'designation' => 'Ministry of Home Affairs, Provincial Councils and Local Government', 'img' => 'alic_aluvihare.jpg'],
    ['name' => 'Mr. Richard Pathirana', 'tenure' => '2001.09.14', 'tenure_end' => '2001.12.07', 'designation' => 'Ministry of Public Administration, Home Affairs and Administrative Reforms', 'img' => 'richard_pathirana.jpg'],
    ['name' => 'Mr. Richard Pathirana', 'tenure' => '2000.10.19', 'tenure_end' => '2001.09.14', 'designation' => 'Ministry of Public Administration, Home Affairs and Administrative Reforms', 'img' => 'richard_pathirana.jpg'],
    ['name' => 'Mr. Amarasiri Dodangoda', 'tenure' => '1994.08.19', 'tenure_end' => '1994.11.12', 'designation' => 'Ministry of Home Affairs, Provincial Council and Co-operatives', 'img' => 'amarasiri_dodangoda.jpg'],
    ['name' => 'Mr. Festus Perera', 'tenure' => '1990.03.30', 'tenure_end' => '1993.08.23', 'designation' => 'Ministry of Public Administration, Provincial Councils and Home Affairs', 'img' => 'prostus_perera.jpg'],
    ['name' => 'Mr. U. B. Wijekoon', 'tenure' => '1989.02.18', 'tenure_end' => '1990.03.28', 'designation' => 'Ministry of Public Administration, Provincial Council and Home Affairs', 'img' => 'U_B_Wijekoon.jpg'],
    ['name' => 'Mr. Montague Jayawickrama', 'tenure' => '1978.09.07', 'tenure_end' => '1980.02.12', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'montague_jayawickrama.jpg'],
    ['name' => 'Mr. Montague Jayawickrama', 'tenure' => '1977.07.23', 'tenure_end' => '1978.09.07', 'designation' => 'Ministry of Public Administration and Home Affairs', 'img' => 'montague_jayawickrama.jpg'],
    ['name' => 'Mr. T. B. Ilangaratne', 'tenure' => '1975.09.17', 'tenure_end' => '1977.07.21', 'designation' => 'Ministry of Trade and Ministry of Public Administration and Home Affairs', 'img' => 'illangarathne.jpg'],
    ['name' => 'Mr. Felix Dias Bandaranaike', 'tenure' => '1970.05.31', 'tenure_end' => '1972.05.22', 'designation' => 'Ministry of Public Administration, Local Government and Home Affairs and Minister of Justice', 'img' => 'felix.jpg'],
    ['name' => 'Mr. W. Dahanayake', 'tenure' => '1965.03.27', 'tenure_end' => '1970.03.25', 'designation' => 'Ministry of Home Affairs', 'img' => 'dahanayaka.jpg'],
    ['name' => 'Mr. A. P. Jayasuriya', 'tenure' => '1963.05.29', 'tenure_end' => '1964.06.11', 'designation' => 'Ministry of Local Government and Home Affairs', 'img' => 'a_p_jayasuriya.jpg'],
    ['name' => 'Mr. Maithripala Senanayake', 'tenure' => '1960.07.23', 'tenure_end' => '1963.05.29', 'designation' => 'Ministry of Industries, Home and Cultural Affairs', 'img' => 'm_senanayaka.jpg'],
    ['name' => 'Mr. M. C. M. Kaleel', 'tenure' => '1960.03.30', 'tenure_end' => '1960.07.23', 'designation' => 'Ministry of Home Affairs and Rural Development', 'img' => 'kaleel.jpg'],
    ['name' => 'Mr. Stanley De Zoysa', 'tenure' => '1959.12.08', 'tenure_end' => '1960.03.30', 'designation' => 'Ministry of Home Affairs and Health', 'img' => 'Stanley_de_Zoysa.jpg'],
    ['name' => 'Mr. T. B. Ilangaratne', 'tenure' => '1959.06.09', 'tenure_end' => '1959.12.08', 'designation' => 'Ministry of Home Affairs', 'img' => 'illangarathne.jpg'],
    ['name' => 'Mr. A. P. Jayasuriya', 'tenure' => '1956.04.12', 'tenure_end' => '1959.06.09', 'designation' => 'Ministry of Home Affairs', 'img' => 'a_p_jayasuriya.jpg'],
    ['name' => 'Mr. Oliver Goonetilleke', 'tenure' => '1951.03.01', 'tenure_end' => '1952.04.08', 'designation' => 'Ministry of Home Affairs and Rural Development', 'img' => 'oliver_gunathilaka.jpg'],
    ['name' => 'Sir Edwin Aloysious Perera Wijeyeratne', 'tenure' => '1948.07.22', 'tenure_end' => '1951.02.28', 'designation' => 'Ministry of Home Affairs and Rural Development', 'img' => 'eap_wijayarathna.jpg'],
    ['name' => 'Mr. Oliver Goonetilleke', 'tenure' => '1947.10.14', 'tenure_end' => '1948.07.22', 'designation' => 'Ministry of Home Affairs and Rural Development', 'img' => 'oliver_gunathilaka.jpg'],
    ['name' => 'Mr. Arunachalam Mahadeva', 'tenure' => '1942', 'tenure_end' => '1946', 'designation' => 'Ministry of Home Affairs and Rural Development', 'img' => 'arunachalam.jpg'],
    ['name' => 'Sir Don Baron Jayatilaka', 'tenure' => '1931', 'tenure_end' => '1942', 'designation' => 'Ministry of Home Affairs', 'img' => 'minister_db_jayatilaka.jpg']
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- Service Page Style Center Header -->
	<div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php echo esc_html( $tag_text ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker tracking-tight"><?php echo esc_html( $page_title ); ?></h1>
	</div>

	<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
		
		<!-- Left Main Content Area -->
		<div class="lg:col-span-2 space-y-8">
			
			<!-- Section 1: History Overview -->
			<div class="bg-warm-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden">
				<div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
				<h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
					<i class="fas fa-landmark text-secondary text-lg"></i>
					<?php echo esc_html( $intro_title ); ?>
				</h2>
				<div class="text-slate-600 text-sm leading-relaxed space-y-4">
					<p><?php echo esc_html( $intro_text ); ?></p>
					<p><?php echo esc_html( $intro_text2 ); ?></p>
				</div>
			</div>

		

			<!-- Section 3: Former Ministers List -->
			<div class="bg-warm-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8">
				<h2 class="text-lg lg:text-xl font-bold text-primary-darker mb-5 flex items-center gap-2.5">
					<span class="p-2 rounded-xl bg-primary-darker/10 text-primary-darker"><i class="fas fa-user-shield text-sm"></i></span>
					<?php echo esc_html( $ministers_title ); ?>
				</h2>

				<!-- Search Input -->
				<div class="relative mb-6">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-600 text-sm pointer-events-none"></i>
					<input type="text" id="minister-search" class="w-full rounded-xl border border-primary-darker/20 bg-white pl-10 pr-4 py-2.5 text-sm text-slate-700 placeholder:text-slate-500 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all" placeholder="Search by name, designation or year...">
				</div>

				<div class="overflow-x-auto -mx-6 lg:-mx-8">
					<div class="inline-block min-w-full align-middle px-6 lg:px-8">
						<table class="w-full border-collapse">
							<thead>
								<tr class="border-b border-primary-darker/15 text-left text-xs font-bold text-primary-darker uppercase tracking-wider bg-primary-darker/5">
									<th class="py-3 px-3 rounded-l-lg">Portrait</th>
									<th class="py-3 px-3">Name </th>
									<th class="py-3 px-3">Service Tenure</th>
									<th class="py-3 px-3 rounded-r-lg">Designation</th>
								</tr>
							</thead>
							<tbody id="minister-tbody" class="divide-y divide-primary-darker/10">
								<?php foreach ( $ministers as $m ) :
									$image_url = ! empty( $m['img'] ) ? get_stylesheet_directory_uri() . '/assets/images/governance/' . $m['img'] : '';
									$tenure_display = esc_html( $m['tenure'] ) . ' &mdash; ' . ( ! empty( $m['tenure_end'] ) ? esc_html( $m['tenure_end'] ) : 'Present' );
								?>
									<tr class="hist-row hover:bg-white/80 transition-colors" 
										data-name="<?php echo esc_attr( strtolower( $m['name'] ) ); ?>" 
										data-designation="<?php echo esc_attr( strtolower( $m['designation'] ) ); ?>" 
										data-tenure="<?php echo esc_attr( $m['tenure'] . ' ' . $m['tenure_end'] ); ?>">
										
										<td class="py-3.5 px-3">
											<div class="w-12 h-14 rounded-lg overflow-hidden border border-secondary/50 shadow-sm bg-white shrink-0">
												<?php if ( $image_url ) : ?>
													<img loading="lazy" decoding="async" src="<?php echo esc_url( $image_url ); ?>" 
														 alt="<?php echo esc_attr( $m['name'] ); ?>" 
														 class="w-full h-full object-cover object-top" 
														 onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
													<div class="hidden w-full h-full items-center justify-center bg-primary-darker/5 text-primary-darker/40">
														<i class="fas fa-user-tie text-lg"></i>
													</div>
												<?php else : ?>
													<div class="w-full h-full flex items-center justify-center bg-primary-darker/5 text-primary-darker/40">
														<i class="fas fa-user-tie text-lg"></i>
													</div>
												<?php endif; ?>
											</div>
										</td>

										<td class="py-3.5 px-3">
											<span class="font-bold text-primary-darker text-sm block"><?php echo esc_html( $m['name'] ); ?></span>
										</td>

										<td class="py-3.5 px-3 whitespace-nowrap">
											<div class="inline-flex items-center gap-1.5 bg-white border border-primary-darker/10 px-2.5 py-1 rounded-md text-xs font-semibold text-slate-700 shadow-2xs">
												<i class="far fa-calendar-alt text-secondary"></i>
												<span><?php echo $tenure_display; ?></span>
											</div>
										</td>

										<td class="py-3.5 px-3">
											<span class="text-xs text-slate-600 leading-snug block max-w-xs"><?php echo esc_html( $m['designation'] ); ?></span>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

				<div id="hist-empty" class="hidden flex flex-col items-center justify-center py-12 text-slate-600">
					<div class="w-14 h-14 bg-primary-darker/5 border border-primary-darker/10 rounded-2xl flex items-center justify-center mb-3">
						<i class="fas fa-user-tie text-xl text-primary-darker/40"></i>
					</div>
					<p class="text-sm font-semibold text-slate-600">No former ministers match your search criteria.</p>
					<p class="text-xs text-slate-600 mt-1">Try searching with a different name, designation, or year.</p>
				</div>
			</div>
		</div>

		<!-- Right Sidebar Navigation -->
		<div class="lg:sticky lg:top-6 space-y-6">
			<div class="bg-warm-white rounded-2xl shadow-sm border border-primary-darker/15 p-6">
				<h3 class="font-bold text-primary-darker text-base mb-4 flex items-center gap-2 border-b border-primary-darker/10 pb-3">
					<i class="fas fa-list-ul text-secondary"></i> On This Page
				</h3>
				<ul class="space-y-3 text-xs font-semibold">
					<li class="flex items-center gap-2.5 text-primary-darker">
						<i class="fas fa-chevron-right text-[9px] text-secondary"></i>
						<span><?php echo esc_html( $intro_title ); ?></span>
					</li>
					
					<li class="flex items-center gap-2.5 text-slate-500 hover:text-primary-darker transition-colors cursor-pointer">
						<i class="fas fa-chevron-right text-[9px] text-slate-300"></i>
						<span><?php echo esc_html( $ministers_title ); ?></span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</main>

<script>
(function() {
	var searchInput = document.getElementById('minister-search');
	var tbody = document.getElementById('minister-tbody');
	var emptyEl = document.getElementById('hist-empty');
	var rows = [].slice.call( tbody.querySelectorAll('.hist-row') );

	if ( searchInput && tbody ) {
		searchInput.addEventListener('input', function() {
			var q = this.value.toLowerCase().trim();
			var visible = 0;

			rows.forEach(function( row ) {
				var name = row.getAttribute('data-name') || '';
				var desig = row.getAttribute('data-designation') || '';
				var tenure = row.getAttribute('data-tenure') || '';
				var match = name.indexOf(q) !== -1 || desig.indexOf(q) !== -1 || tenure.indexOf(q) !== -1;

				row.style.display = match ? '' : 'none';
				if ( match ) { visible++; }
			});

			emptyEl.classList.toggle('hidden', visible > 0);
		});
	}
})();
</script>

<?php get_footer(); ?>