<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Ministry Services & Projects Hub
 *
 * maroon (#58111A) + gold (#D4AF37) palette.
 * Filterable table grid with categories, status badges, and action links.
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$service_categories = [
	'all'       => __( 'All Services', 'homeaffairs' ),
	'digital'   => __( 'Digital & Web Projects', 'homeaffairs' ),
	'facilities'=> __( 'Facilities & Reservations', 'homeaffairs' ),
	'citizen'   => __( 'Citizen Administrative Services', 'homeaffairs' ),
];

$services_list = [
	[
		'title' => __( 'Auditorium & Conference Hall Reservation', 'homeaffairs' ),
		'desc'  => __( 'Online booking request for ministry auditorium and conference halls. Seating capacity up to 250, with audio/visual equipment available upon request.', 'homeaffairs' ),
		'cat'   => 'facilities',
		'status'=> __( 'Online Booking Available', 'homeaffairs' ),
		'label' => __( 'Reserve Now', 'homeaffairs' ),
		'url'   => '#',
		'icon'  => 'fa-building-columns',
	],
	[
		'title' => __( 'Web Revamp & Digitalization Project', 'homeaffairs' ),
		'desc'  => __( 'Ministry-wide digital transformation initiative covering e-services portal, online application systems, and public administration digitization.', 'homeaffairs' ),
		'cat'   => 'digital',
		'status'=> __( 'In Progress', 'homeaffairs' ),
		'label' => __( 'View Project Details', 'homeaffairs' ),
		'url'   => content_url( '/uploads/services/district-user-manual-v11.pdf' ),
		'icon'  => 'fa-laptop-code',
	],
	[
		'title' => __( 'Grama Niladhari & Regional Admin Services', 'homeaffairs' ),
		'desc'  => __( 'Issuance of Grama Niladhari certificates, public complaints registration, and coordination with divisional secretariat offices.', 'homeaffairs' ),
		'cat'   => 'citizen',
		'status'=> __( 'Active', 'homeaffairs' ),
		'label' => __( 'Apply Now', 'homeaffairs' ),
		'url'   => '#',
		'icon'  => 'fa-people-arrows',
	],
	[
		'title' => __( 'Issuance of Special Permits & Approvals', 'homeaffairs' ),
		'desc'  => __( 'Downloadable application forms and procedure guides for special permits, approvals, and administrative authorizations under ministry purview.', 'homeaffairs' ),
		'cat'   => 'citizen',
		'status'=> __( 'Active', 'homeaffairs' ),
		'label' => __( 'Download Form', 'homeaffairs' ),
		'url'   => '#',
		'icon'  => 'fa-file-pen',
	],
	[
		'title' => __( 'Online RTI Information Portal', 'homeaffairs' ),
		'desc'  => __( 'Submit Right to Information requests, track application status, and browse proactive disclosures published by the Ministry.', 'homeaffairs' ),
		'cat'   => 'digital',
		'status'=> __( 'Active', 'homeaffairs' ),
		'label' => __( 'Access Portal', 'homeaffairs' ),
		'url'   => home_url( '/rti/' ),
		'icon'  => 'fa-scale-balanced',
	],
	[
		'title' => __( 'Circuit Bungalow Online Booking', 'homeaffairs' ),
		'desc'  => __( 'Reserve ministry circuit bungalows for official use. View availability, check amenities, and submit booking requests online.', 'homeaffairs' ),
		'cat'   => 'facilities',
		'status'=> __( 'Online Booking Available', 'homeaffairs' ),
		'label' => __( 'Book Now', 'homeaffairs' ),
		'url'   => '#',
		'icon'  => 'fa-house-chimney',
	],
	[
		'title' => __( 'Public Service Examination Portal', 'homeaffairs' ),
		'desc'  => __( 'View exam notices, download results, and access study materials for departmental open competitive and efficiency bar examinations.', 'homeaffairs' ),
		'cat'   => 'citizen',
		'status'=> __( 'Active', 'homeaffairs' ),
		'label' => __( 'View Notices', 'homeaffairs' ),
		'url'   => home_url( '/exam-notices/' ),
		'icon'  => 'fa-file-lines',
	],
	[
		'title' => __( 'e-Service Portal & Digital Forms', 'homeaffairs' ),
		'desc'  => __( 'One-stop digital platform for submitting applications, downloading forms, and tracking service requests online without visiting the ministry.', 'homeaffairs' ),
		'cat'   => 'digital',
		'status'=> __( 'In Progress', 'homeaffairs' ),
		'label' => __( 'Explore e-Services', 'homeaffairs' ),
		'url'   => '#',
		'icon'  => 'fa-globe',
	],
];

$services_json = json_encode( $services_list );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'MINISTRY SERVICES', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'Services & Projects Hub', 'homeaffairs' ); ?></h1>
		</div>

	<div class="bg-white border border-gray-200/80 rounded-2xl shadow-sm p-5 lg:p-6 mb-8">
		<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
			<div class="flex flex-wrap items-center gap-2">
				<?php foreach ( $service_categories as $slug => $label ) : ?>
				<button type="button" class="svc-filter-btn <?php echo $slug === 'all' ? 'active' : ''; ?>" data-filter="<?php echo esc_attr( $slug ); ?>"><?php echo esc_html( $label ); ?></button>
				<?php endforeach; ?>
			</div>
			<div class="relative w-full sm:w-64">
				<i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
				<input type="text" id="svc-search" class="w-full rounded-lg border border-gray-200 bg-white pl-9 pr-3 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="<?php esc_attr_e( 'Search services...', 'homeaffairs' ); ?>">
			</div>
		</div>
	</div>

	<div id="svc-count" class="text-xs text-gray-600 mb-3 font-medium"></div>
	
	

					<!-- Modern Data Table Chart View -->
	<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
		<div class="overflow-x-auto">
			<table class="w-full text-left border-collapse">
				<thead>
					<tr class="bg-maroon text-white text-[11px] font-extrabold uppercase tracking-wider">
						<th class="py-3.5 px-4 w-12 text-center">#</th>
						<th class="py-3.5 px-4"><?php esc_html_e( 'Service', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4 w-44"><?php esc_html_e( 'Category', 'homeaffairs' ); ?></th>	
						<th class="py-3.5 px-4 w-44 text-center"><?php esc_html_e( 'Downloads', 'homeaffairs' ); ?></th>
					</tr>
				</thead>
				<tbody id="svc-tbody"></tbody>
			</table>
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

	

	<div id="svc-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-gray-50 rounded-2xl flex items-center justify-center mb-5">
			<i class="fa-solid fa-handshake-slash text-3xl text-gray-300"></i>
		</div>
		<p class="text-base font-medium text-gray-500"><?php esc_html_e( 'No services match your current filters.', 'homeaffairs' ); ?></p>
		<p class="text-sm text-gray-600 mt-1"><?php esc_html_e( 'Try a different category or search term.', 'homeaffairs' ); ?></p>
	</div>

	<div id="svc-pagination" class="flex items-center justify-center gap-1.5 pt-6 mt-6 border-t border-gray-100"></div>
</div>

<script>

(function() {
	var data = <?php echo $services_json; ?>;
	var filtered = [];
	var activeFilter = 'all';
	var page = 1, perPage = 6;

	var tbody = document.getElementById('svc-tbody');
	var empty = document.getElementById('svc-empty');
	var count = document.getElementById('svc-count');
	var pagEl = document.getElementById('svc-pagination');
	var search = document.getElementById('svc-search');

	if (!data || !data.length) { showEmpty(); return; }

	function showEmpty() { tbody.innerHTML = ''; empty.classList.remove('hidden'); count.textContent = ''; pagEl.innerHTML = ''; }

	function filterData() {
		var q = search.value.toLowerCase().trim();
		filtered = [];
		for (var i = 0; i < data.length; i++) {
			var d = data[i];
			if (activeFilter !== 'all' && d.cat !== activeFilter) continue;
			if (q !== '' && d.title.toLowerCase().indexOf(q) === -1 && d.desc.toLowerCase().indexOf(q) === -1) continue;
			filtered.push(d);
		}
		page = 1;
		render();
	}

	function render() {
		var total = filtered.length;
		if (total === 0) { showEmpty(); return; }
		empty.classList.add('hidden');
		var totalPages = Math.ceil(total / perPage) || 1;
		if (page > totalPages) page = totalPages;
		var start = (page - 1) * perPage;
		var end = Math.min(start + perPage, total);
		var pageData = filtered.slice(start, end);

		count.textContent = start + 1 + '\u2013' + end + ' of ' + total + ' <?php echo esc_js( __( 'service(s)', 'homeaffairs' ) ); ?>';

		var html = '';

		for (var i = 0; i < pageData.length; i++) {
				var d = pageData[i];
				var catLabel = d.cat === 'digital' ? '<?php echo esc_js( __( 'Digital & Web Projects', 'homeaffairs' ) ); ?>' : d.cat === 'facilities' ? '<?php echo esc_js( __( 'Facilities & Reservations', 'homeaffairs' ) ); ?>' : '<?php echo esc_js( __( 'Citizen Admin Services', 'homeaffairs' ) ); ?>';
				var fileUrl = (d.url && d.url.trim() !== '') ? d.url : '#';

				html += '<tr class="border-t border-gray-100 hover:bg-amber-50/40 transition-colors">'
					+ '<td class="px-4 py-3.5 text-gray-600 font-medium text-center text-xs">' + (start + i + 1) + '</td>'
					+ '<td class="px-4 py-3.5"><div class="flex items-start gap-3"><div class="w-9 h-9 shrink-0 rounded-lg bg-maroon/5 flex items-center justify-center text-maroon text-sm"><i class="fa-solid ' + (d.icon || 'fa-file') + '"></i></div><div><span class="text-sm font-bold text-gray-800">' + d.title + '</span><p class="text-xs text-gray-600 mt-0.5">' + d.desc + '</p></div></div></td>'
					+ '<td class="px-4 py-3.5 text-xs font-medium text-gray-600 hidden md:table-cell">' + catLabel + '</td>'
					
					
					+ '<td class="py-3.5 px-4 text-center whitespace-nowrap">'
					+   '<a href="' + fileUrl + '" download class="inline-flex items-center gap-1.5 text-[11px] font-black text-maroon bg-secondary/20 hover:bg-secondary hover:text-maroon px-3 py-1.5 rounded-lg transition-all">'
					+       '<i class="fa-solid fa-download text-[10px]"></i> '
					+       '<?php echo esc_js( __( 'Download', 'homeaffairs' ) ); ?>'
					+   '</a>'
					+ '</td>'
					
					+ '</tr>';
			}


		tbody.innerHTML = html;

		var phtml = '';
		var prevD = page <= 1 ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="svc-page-btn' + prevD + '" data-p="' + (page - 1) + '"><i class="fa-solid fa-chevron-left" style="font-size:10px"></i></a>';
		for (var p = 1; p <= totalPages; p++) {
			phtml += '<a href="#" class="svc-page-btn' + (p === page ? ' active' : '') + '" data-p="' + p + '">' + p + '</a>';
		}
		var nextD = page >= totalPages ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="svc-page-btn' + nextD + '" data-p="' + (page + 1) + '"><i class="fa-solid fa-chevron-right" style="font-size:10px"></i></a>';
		pagEl.innerHTML = phtml;

		[].forEach.call(pagEl.querySelectorAll('.svc-page-btn'), function(btn) {
			btn.addEventListener('click', function(e) {
				e.preventDefault();
				var p = parseInt(this.getAttribute('data-p'), 10);
				if (p >= 1 && p <= totalPages) { page = p; render(); }
			});
		});
	}

	search.addEventListener('input', filterData);

	var btns = document.querySelectorAll('.svc-filter-btn');
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener('click', function() {
			for (var j = 0; j < btns.length; j++) btns[j].classList.remove('active');
			this.classList.add('active');
			activeFilter = this.getAttribute('data-filter');
			filterData();
		});
	}

	filterData();
})();
</script>

<style>
.svc-filter-btn {
	display: inline-flex; align-items: center;
	padding: 0.5rem 1rem; border-radius: 0.5rem;
	font-size: 0.8125rem; font-weight: 600;
	color: #6B7280; background: #F9FAFB;
	border: 1px solid #E5E7EB;
	cursor: pointer; transition: all 0.2s ease;
}
.svc-filter-btn:hover { background: #F3F4F6; }
.svc-filter-btn.active { background: var(--color-maroon); color: #fff; border-color: var(--color-maroon); }
.svc-page-btn {
	display: inline-flex; align-items: center; justify-content: center;
	width: 2rem; height: 2rem; border-radius: 0.5rem;
	font-size: 0.8125rem; font-weight: 600; color: #6B7280;
	background: #F9FAFB; border: 1px solid #E5E7EB;
	text-decoration: none; transition: all 0.2s ease;
}
.svc-page-btn:hover { background: #F3F4F6; }
.svc-page-btn.active { background: var(--color-maroon); color: #fff; border-color: var(--color-maroon); }
</style>

<?php get_footer(); ?>