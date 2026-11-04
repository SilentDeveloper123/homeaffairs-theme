<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Publications & Downloads
 * Description: Modern Table Chart View for Ministry Publications & Official Documents.
 */

get_header();

// ── 1. MAIN HERO BANNER ──
get_template_part( 'template-parts/page-banner' );

// ── 2. DEFINE CATEGORIES (Fixes Undefined Variable $categories Error) ──
$categories = [
	'all'               => __( 'All Categories', 'homeaffairs' ),
	'annual-reports'    => __( 'Annual Performance Reports', 'homeaffairs' ),
	'handbooks'         => __( 'Statistical Handbooks', 'homeaffairs' ),
	'development-plans' => __( 'Development Plans', 'homeaffairs' ),
	'citizen-charters'  => __( 'Citizen Charters', 'homeaffairs' ),
	'circulars'         => __( 'Circulars & Gazettes', 'homeaffairs' ),
];

// ── 3. DEFINE YEARS FILTER ──
$years = [ 'all', '2026', '2025', '2024', '2023', '2022' ];

// ── 4. FALLBACK PUBLICATIONS DATA ──
$publications = [
	[
		'title'    => __( 'Ministry Annual Performance Report 2025', 'homeaffairs' ),
		'ref_code' => 'MOHA/PR/2025/01',
		'cat_slug' => 'annual-reports',
		'category' => __( 'Annual Performance Reports', 'homeaffairs' ),
		'year'     => '2025',
		'size'     => '4.2 MB',
		'format'   => 'PDF',
		'langs'    => [ 'Sinhala', 'English', 'Tamil' ],
		'url'      => '#',
	],
	[
		'title'    => __( 'District Administration Statistical Handbook 2025', 'homeaffairs' ),
		'ref_code' => 'MOHA/ST/2025/08',
		'cat_slug' => 'handbooks',
		'category' => __( 'Statistical Handbooks', 'homeaffairs' ),
		'year'     => '2025',
		'size'     => '8.5 MB',
		'format'   => 'PDF',
		'langs'    => [ 'English' ],
		'url'      => '#',
	],
	[
		'title'    => __( 'Citizen Charter & Public Service Guidelines 2026', 'homeaffairs' ),
		'ref_code' => 'MOHA/CC/2026/01',
		'cat_slug' => 'citizen-charters',
		'category' => __( 'Citizen Charters', 'homeaffairs' ),
		'year'     => '2026',
		'size'     => '1.8 MB',
		'format'   => 'PDF',
		'langs'    => [ 'Sinhala', 'Tamil' ],
		'url'      => '#',
	],
	[
		'title'    => __( 'Provincial Development Action Plan 2024-2028', 'homeaffairs' ),
		'ref_code' => 'MOHA/DP/2024/03',
		'cat_slug' => 'development-plans',
		'category' => __( 'Development Plans', 'homeaffairs' ),
		'year'     => '2024',
		'size'     => '6.1 MB',
		'format'   => 'PDF',
		'langs'    => [ 'Sinhala', 'English' ],
		'url'      => '#',
	],
	[
		'title'    => __( 'Grama Niladhari Division Administrative Manual', 'homeaffairs' ),
		'ref_code' => 'MOHA/GN/2023/12',
		'cat_slug' => 'handbooks',
		'category' => __( 'Statistical Handbooks', 'homeaffairs' ),
		'year'     => '2023',
		'size'     => '5.4 MB',
		'format'   => 'PDF',
		'langs'    => [ 'Sinhala' ],
		'url'      => '#',
	],
	[
		'title'    => __( 'Ministry Annual Performance Report 2024', 'homeaffairs' ),
		'ref_code' => 'MOHA/PR/2024/01',
		'cat_slug' => 'annual-reports',
		'category' => __( 'Annual Performance Reports', 'homeaffairs' ),
		'year'     => '2024',
		'size'     => '3.9 MB',
		'format'   => 'PDF',
		'langs'    => [ 'Sinhala', 'English', 'Tamil' ],
		'url'      => '#',
	],
	[
		'title'    => __( 'Special Administrative Circular on Festival Season Leave', 'homeaffairs' ),
		'ref_code' => 'MOHA/CIR/2026/04',
		'cat_slug' => 'circulars',
		'category' => __( 'Circulars & Gazettes', 'homeaffairs' ),
		'year'     => '2026',
		'size'     => '850 KB',
		'format'   => 'PDF',
		'langs'    => [ 'Sinhala', 'Tamil' ],
		'url'      => '#',
	],
];

$publications_json = json_encode( $publications, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

	<!-- STANDARD PAGE TITLE SECTION -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'DOCUMENT REPOSITORY', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'Publications & Official Downloads', 'homeaffairs' ); ?></h1>
		</div>

	<!-- Filter Hub & Search Bar -->
	<div id="filter-hub" class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 lg:p-5 mb-6">
		<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
			
			<!-- Category Tabs -->
			<div class="flex flex-wrap items-center gap-2">
				<?php if ( ! empty( $categories ) && is_array( $categories ) ) : ?>
					<?php foreach ( $categories as $slug => $name ) : ?>
						<button type="button" class="pub-filter-btn <?php echo 'all' === $slug ? 'active' : ''; ?> font-bold text-xs px-3.5 py-2 rounded-lg transition-all border border-gray-200 text-slate-700 hover:bg-maroon/5" data-category="<?php echo esc_attr( $slug ); ?>">
							<?php echo esc_html( $name ); ?>
						</button>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<!-- Year Filter & Search Bar -->
			<div class="flex items-center gap-3 w-full lg:w-auto">
				<!-- Year Dropdown -->
				<select id="pub-year-filter" class="rounded-lg border border-gray-200 bg-slate-50/50 px-3 py-2 text-xs font-bold text-slate-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:bg-white focus:border-maroon">
					<option value="all"><?php esc_html_e( 'All Years', 'homeaffairs' ); ?></option>
					<?php foreach ( $years as $y ) : ?>
						<?php if ( 'all' !== $y ) : ?>
							<option value="<?php echo esc_attr( $y ); ?>"><?php echo esc_html( $y ); ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>

				<!-- Search Input -->
				<div class="relative w-full lg:w-64">
					<i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-xs pointer-events-none"></i>
					<input type="text" id="pub-search" class="w-full rounded-lg border border-gray-200 bg-slate-50/50 pl-9 pr-4 py-2 text-xs text-slate-800 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:bg-white focus:border-maroon" placeholder="<?php esc_attr_e( 'Search documents...', 'homeaffairs' ); ?>">
				</div>
			</div>

		</div>
	</div>

	<!-- Results Count -->
	<div id="pub-count" class="text-xs font-semibold text-gray-500 mb-3 px-1"></div>

	<!-- Modern Data Table Chart View -->
	<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
		<div class="overflow-x-auto">
			<table class="w-full text-left border-collapse">
				<thead>
					<tr class="bg-maroon text-white text-[11px] font-extrabold uppercase tracking-wider">
						<th class="py-3.5 px-4 w-12 text-center">#</th>
						<th class="py-3.5 px-4"><?php esc_html_e( 'Document Title & Details', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4 w-44"><?php esc_html_e( 'Category', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4 w-20 text-center"><?php esc_html_e( 'Year', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4 w-36 text-center"><?php esc_html_e( 'Languages', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4 w-32 text-center"><?php esc_html_e( 'Download', 'homeaffairs' ); ?></th>
					</tr>
				</thead>
				<tbody id="pub-chart-body" class="divide-y divide-gray-100 text-xs">
					<!-- Generated by JavaScript -->
				</tbody>
			</table>
		</div>

		<!-- Empty State -->
		<div id="pub-empty" class="hidden flex flex-col items-center justify-center py-12 text-gray-600">
			<i class="fa-solid fa-file-circle-xmark text-3xl text-gray-300 mb-3"></i>
			<p class="text-xs font-bold text-gray-500"><?php esc_html_e( 'No publications match your filter criteria.', 'homeaffairs' ); ?></p>
		</div>
	</div>

	<!-- Pagination -->
	<div id="pub-pagination" class="flex items-center justify-center gap-1.5 pt-6 mt-4"></div>

</main>

<style>
	.pub-filter-btn.active {
		background-color: var(--color-maroon) !important;
		color: #ffffff !important;
		border-color: var(--color-maroon) !important;
	}
	.page-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 32px;
		height: 32px;
		border-radius: 8px;
		border: 1px solid #e5e7eb;
		font-size: 11px;
		font-weight: 700;
		color: #374151;
		transition: all 0.2s;
	}
	.page-btn:hover {
		background-color: #f9fafb;
		border-color: #d1d5db;
	}
	.page-btn.page-active {
		background-color: var(--color-secondary) !important;
		color: var(--color-maroon) !important;
		border-color: var(--color-secondary) !important;
	}
</style>

<script>
(function() {
	var publications = <?php echo $publications_json; ?>;
	var filtered = [];
	var activeCategory = 'all';
	var activeYear = 'all';
	var page = 1;
	var perPage = 8;

	var chartBody = document.getElementById('pub-chart-body');
	var emptyEl = document.getElementById('pub-empty');
	var countEl = document.getElementById('pub-count');
	var pagEl = document.getElementById('pub-pagination');
	var searchInput = document.getElementById('pub-search');
	var yearSelect = document.getElementById('pub-year-filter');

	function filterData() {
		var q = searchInput.value.toLowerCase().trim();
		filtered = [];

		publications.forEach(function(item) {
			if (activeCategory !== 'all' && item.cat_slug !== activeCategory) return;
			if (activeYear !== 'all' && item.year !== activeYear) return;
			if (q !== '' && item.title.toLowerCase().indexOf(q) === -1 && item.ref_code.toLowerCase().indexOf(q) === -1) return;
			filtered.push(item);
		});

		page = 1;
		render();
	}

	function render() {
		var total = filtered.length;
		var totalPages = Math.ceil(total / perPage) || 1;
		if (page > totalPages) page = totalPages;
		var start = (page - 1) * perPage;
		var end = Math.min(start + perPage, total);
		var pageData = filtered.slice(start, end);

		if (total === 0) {
			chartBody.innerHTML = '';
			emptyEl.classList.remove('hidden');
			countEl.textContent = '';
			pagEl.innerHTML = '';
			return;
		}

		emptyEl.classList.add('hidden');
		countEl.textContent = 'Showing ' + (start + 1) + '–' + end + ' of ' + total + ' publications found';

		var html = '';
		pageData.forEach(function(item, idx) {
			var langsHtml = '';
			if (Array.isArray(item.langs)) {
				item.langs.forEach(function(l) {
					langsHtml += '<span class="inline-block text-[9px] font-bold px-1.5 py-0.5 rounded bg-slate-100 text-slate-700 border border-slate-200 mr-1">' + l + '</span>';
				});
			}

			html += '<tr class="hover:bg-amber-50/40 transition-colors group">'
				+ '<td class="py-3.5 px-4 text-center font-bold text-gray-600">' + (start + idx + 1) + '</td>'
				+ '<td class="py-3.5 px-4">'
					+ '<div class="flex items-start gap-2.5">'
						+ '<i class="fa-solid fa-file-pdf text-red-700 text-base mt-0.5"></i>'
						+ '<div>'
							+ '<a href="' + item.url + '" class="font-extrabold text-slate-900 group-hover:text-maroon transition-colors leading-snug block mb-0.5">' + item.title + '</a>'
							+ '<span class="text-[10px] text-gray-600 font-medium">Ref: ' + item.ref_code + ' | Format: ' + item.format + ' (' + item.size + ')</span>'
						+ '</div>'
					+ '</div>'
				+ '</td>'
				+ '<td class="py-3.5 px-4 whitespace-nowrap">'
					+ '<span class="inline-block text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-800 border border-slate-200">' + item.category + '</span>'
				+ '</td>'
				+ '<td class="py-3.5 px-4 text-center font-bold text-slate-700 whitespace-nowrap">' + item.year + '</td>'
				+ '<td class="py-3.5 px-4 text-center whitespace-nowrap">' + langsHtml + '</td>'
				+ '<td class="py-3.5 px-4 text-center whitespace-nowrap">'
					+ '<a href="' + item.url + '" download class="inline-flex items-center gap-1.5 text-[11px] font-black text-maroon bg-secondary/20 hover:bg-secondary hover:text-maroon px-3 py-1.5 rounded-lg transition-all">'
						+ '<i class="fa-solid fa-download text-[10px]"></i> Download'
					+ '</a>'
				+ '</td>'
				+ '</tr>';
		});
		chartBody.innerHTML = html;

		// Pagination Render
		var phtml = '';
		var prevD = page <= 1 ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="page-btn' + prevD + '" data-p="' + (page - 1) + '"><i class="fa-solid fa-chevron-left"></i></a>';
		for (var p = 1; p <= totalPages; p++) {
			var act = p === page ? ' page-active' : '';
			phtml += '<a href="#" class="page-btn' + act + '" data-p="' + p + '">' + p + '</a>';
		}
		var nextD = page >= totalPages ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="page-btn' + nextD + '" data-p="' + (page + 1) + '"><i class="fa-solid fa-chevron-right"></i></a>';
		pagEl.innerHTML = phtml;

		[].forEach.call(pagEl.querySelectorAll('.page-btn'), function(btn) {
			btn.addEventListener('click', function(e) {
				e.preventDefault();
				var p = parseInt(this.getAttribute('data-p'), 10);
				if (p >= 1 && p <= totalPages) {
					page = p;
					render();
				}
			});
		});
	}

	// Event Listeners
	searchInput.addEventListener('input', filterData);
	yearSelect.addEventListener('change', function() {
		activeYear = this.value;
		filterData();
	});

	document.querySelectorAll('.pub-filter-btn').forEach(function(btn) {
		btn.addEventListener('click', function() {
			document.querySelectorAll('.pub-filter-btn').forEach(function(b) { b.classList.remove('active'); });
			this.classList.add('active');
			activeCategory = this.getAttribute('data-category');
			filterData();
		});
	});

	filterData();
})();
</script>

<?php get_footer(); ?>