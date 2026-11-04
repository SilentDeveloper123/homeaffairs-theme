<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Government Holidays & Calendar
 *
 * maroon (#58111A) + gold (#D4AF37) palette.
 * Interactive holiday calendar with type/month/search filters, stats, and PDF download.
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$months = [
	'01' => __( 'January', 'homeaffairs' ), '02' => __( 'February', 'homeaffairs' ), '03' => __( 'March', 'homeaffairs' ),
	'04' => __( 'April', 'homeaffairs' ), '05' => __( 'May', 'homeaffairs' ), '06' => __( 'June', 'homeaffairs' ),
	'07' => __( 'July', 'homeaffairs' ), '08' => __( 'August', 'homeaffairs' ), '09' => __( 'September', 'homeaffairs' ),
	'10' => __( 'October', 'homeaffairs' ), '11' => __( 'November', 'homeaffairs' ), '12' => __( 'December', 'homeaffairs' ),
];

$holiday_types = [
	'public'     => __( 'Public Holidays', 'homeaffairs' ),
	'bank'       => __( 'Bank Holidays', 'homeaffairs' ),
	'mercantile' => __( 'Mercantile Holidays', 'homeaffairs' ),
];

$holidays = [
	// ── January ──
	[ 'date' => '2026-01-01', 'day' => 'Thu', 'name' => __( 'Duruthu Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Duruthu full moon day — public & bank holiday.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	[ 'date' => '2026-01-15', 'day' => 'Thu', 'name' => __( 'Tamil Thai Pongal Day', 'homeaffairs' ), 'desc' => __( 'Harvest festival celebrated by Tamil community.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	[ 'date' => '2026-01-26', 'day' => 'Mon', 'name' => __( 'Duruthu Full Moon Poya (Supplementary)', 'homeaffairs' ), 'desc' => __( 'Supplementary public holiday.', 'homeaffairs' ), 'types' => [ 'public' ] ],
	// ── February ──
	[ 'date' => '2026-02-04', 'day' => 'Wed', 'name' => __( 'National Independence Day', 'homeaffairs' ), 'desc' => __( '78th anniversary of Sri Lankan independence.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	[ 'date' => '2026-02-13', 'day' => 'Fri', 'name' => __( 'Navam Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Navam full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── March ──
	[ 'date' => '2026-03-14', 'day' => 'Sat', 'name' => __( 'Madin Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Madin full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── April ──
	[ 'date' => '2026-04-07', 'day' => 'Tue', 'name' => __( 'Bank Holiday — Day Prior to Sinhala & Tamil New Year', 'homeaffairs' ), 'desc' => __( 'Bank holiday declared ahead of the national new year.', 'homeaffairs' ), 'types' => [ 'bank' ] ],
	[ 'date' => '2026-04-08', 'day' => 'Wed', 'name' => __( 'Sinhala & Tamil New Year\'s Eve', 'homeaffairs' ), 'desc' => __( 'National new year celebrations commence.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	[ 'date' => '2026-04-09', 'day' => 'Thu', 'name' => __( 'Sinhala & Tamil New Year\'s Day', 'homeaffairs' ), 'desc' => __( 'Main new year day celebrated island-wide.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	[ 'date' => '2026-04-12', 'day' => 'Sun', 'name' => __( 'Bak Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Bak full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	[ 'date' => '2026-04-13', 'day' => 'Mon', 'name' => __( 'Bank Holiday — Day After Bak Poya', 'homeaffairs' ), 'desc' => __( 'Supplementary bank holiday.', 'homeaffairs' ), 'types' => [ 'bank' ] ],
	[ 'date' => '2026-04-10', 'day' => 'Fri', 'name' => __( 'Good Friday', 'homeaffairs' ), 'desc' => __( 'Christian observance of Good Friday.', 'homeaffairs' ), 'types' => [ 'public' ] ],
	[ 'date' => '2026-04-11', 'day' => 'Sat', 'name' => __( 'Day After Good Friday', 'homeaffairs' ), 'desc' => __( 'Supplementary holiday.', 'homeaffairs' ), 'types' => [ 'public' ] ],
	// ── May ──
	[ 'date' => '2026-05-01', 'day' => 'Fri', 'name' => __( 'May Day', 'homeaffairs' ), 'desc' => __( 'International Workers\' Day.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	[ 'date' => '2026-05-11', 'day' => 'Mon', 'name' => __( 'Vesak Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Vesak — most sacred Buddhist full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	[ 'date' => '2026-05-12', 'day' => 'Tue', 'name' => __( 'Day Following Vesak Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Supplementary public & mercantile holiday.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	// ── June ──
	[ 'date' => '2026-06-10', 'day' => 'Wed', 'name' => __( 'Poson Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Poson — introduction of Buddhism to Sri Lanka.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── July ──
	[ 'date' => '2026-07-09', 'day' => 'Thu', 'name' => __( 'Esala Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Esala full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── August ──
	[ 'date' => '2026-08-07', 'day' => 'Fri', 'name' => __( 'Nikini Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Nikini full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── September ──
	[ 'date' => '2026-09-05', 'day' => 'Sat', 'name' => __( 'Binara Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Binara full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── October ──
	[ 'date' => '2026-10-05', 'day' => 'Mon', 'name' => __( 'Vap Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Vap full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── November ──
	[ 'date' => '2026-11-03', 'day' => 'Tue', 'name' => __( 'Ill Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Ill full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	// ── December ──
	[ 'date' => '2026-12-03', 'day' => 'Thu', 'name' => __( 'Unduvap Full Moon Poya', 'homeaffairs' ), 'desc' => __( 'Unduvap full moon day.', 'homeaffairs' ), 'types' => [ 'public', 'bank' ] ],
	[ 'date' => '2026-12-25', 'day' => 'Fri', 'name' => __( 'Christmas Day', 'homeaffairs' ), 'desc' => __( 'Christian celebration of the birth of Jesus Christ.', 'homeaffairs' ), 'types' => [ 'public', 'bank', 'mercantile' ] ],
	[ 'date' => '2026-12-26', 'day' => 'Sat', 'name' => __( 'Day After Christmas', 'homeaffairs' ), 'desc' => __( 'Supplementary holiday.', 'homeaffairs' ), 'types' => [ 'public' ] ],
];

$holidays_json = json_encode( $holidays );
$months_json   = json_encode( $months );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- ═══ INTRO ═══ -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'GOVERNMENT HOLIDAYS 2026', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'Government Holidays & Calendar', 'homeaffairs' ); ?></h1>
		</div>

	<!-- ═══ QUICK STATS ═══ -->
	<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
		<div class="bg-white border border-gray-200/80 rounded-xl shadow-sm p-4 flex items-center gap-4">
			<div class="w-10 h-10 rounded-lg bg-maroon/10 flex items-center justify-center text-maroon shrink-0"><i class="fa-solid fa-calendar-check"></i></div>
			<div><span class="text-xl font-extrabold text-maroon" id="stat-public">0</span><p class="text-xs text-gray-500 font-medium"><?php esc_html_e( 'Public Holidays', 'homeaffairs' ); ?></p></div>
		</div>
		<div class="bg-white border border-gray-200/80 rounded-xl shadow-sm p-4 flex items-center gap-4">
			<div class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center text-secondary shrink-0"><i class="fa-solid fa-building-columns"></i></div>
			<div><span class="text-xl font-extrabold text-maroon" id="stat-bank">0</span><p class="text-xs text-gray-500 font-medium"><?php esc_html_e( 'Bank Holidays', 'homeaffairs' ); ?></p></div>
		</div>
		<div class="bg-white border border-gray-200/80 rounded-xl shadow-sm p-4 flex items-center gap-4">
			<div class="w-10 h-10 rounded-lg bg-amber-50 flex items-center justify-center text-amber-600 shrink-0"><i class="fa-solid fa-briefcase"></i></div>
			<div><span class="text-xl font-extrabold text-maroon" id="stat-mercantile">0</span><p class="text-xs text-gray-500 font-medium"><?php esc_html_e( 'Mercantile Holidays', 'homeaffairs' ); ?></p></div>
		</div>
	</div>

	<!-- ═══ FILTER HUB ═══ -->
	<div class="bg-white border border-gray-200/80 rounded-2xl shadow-sm p-5 lg:p-6 mb-8">
		<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
			<div class="flex flex-wrap items-center gap-2">
				<button class="cal-filter-btn active" data-type="all"><?php esc_html_e( 'All Holidays', 'homeaffairs' ); ?></button>
				<button class="cal-filter-btn" data-type="public"><?php esc_html_e( 'Public Holidays', 'homeaffairs' ); ?></button>
				<button class="cal-filter-btn" data-type="bank"><?php esc_html_e( 'Bank Holidays', 'homeaffairs' ); ?></button>
				<button class="cal-filter-btn" data-type="mercantile"><?php esc_html_e( 'Mercantile Holidays', 'homeaffairs' ); ?></button>
			</div>
			<div class="flex items-center gap-3">
				<select id="cal-month" class="w-full sm:w-40 rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-sm text-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
					<option value="all"><?php esc_html_e( 'All Months', 'homeaffairs' ); ?></option>
					<?php foreach ( $months as $num => $label ) : ?>
					<option value="<?php echo esc_attr( $num ); ?>"><?php echo esc_html( $label ); ?></option>
					<?php endforeach; ?>
				</select>
				<div class="relative w-full sm:w-48">
					<i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
					<input type="text" id="cal-search" class="w-full rounded-lg border border-gray-200 bg-white pl-9 pr-3 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="<?php esc_attr_e( 'Search holidays...', 'homeaffairs' ); ?>">
				</div>
			</div>
		</div>
	</div>

	<!-- ═══ COUNT ═══ -->
	<div id="cal-count" class="text-xs text-gray-600 mb-3 font-medium"></div>

	<!-- ═══ TABLE ═══ -->

						<!-- Modern Data Table Chart View -->
	<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
		<div class="overflow-x-auto">
			<table class="w-full text-left border-collapse">
				<thead>
					<tr class="bg-maroon text-white text-[11px] font-extrabold uppercase tracking-wider">
						<th class="py-3.5 px-4 w-12 text-center">#</th>
						<th class="py-3.5 px-4"><?php esc_html_e( 'Date', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4"><?php esc_html_e( 'Holiday Name', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4"><?php esc_html_e( 'Day', 'homeaffairs' ); ?></th>
						<th class="py-3.5 px-4"><?php esc_html_e( 'Type', 'homeaffairs' ); ?></th>	
					</tr>
				</thead>
				<tbody id="cal-tbody"></tbody>
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





	<!-- ═══ EMPTY STATE ═══ -->
	<div id="cal-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-gray-50 rounded-2xl flex items-center justify-center mb-5">
			<i class="fa-solid fa-calendar-xmark text-3xl text-gray-300"></i>
		</div>
		<p class="text-base font-medium text-gray-500"><?php esc_html_e( 'No holidays match your current filters.', 'homeaffairs' ); ?></p>
		<p class="text-sm text-gray-600 mt-1"><?php esc_html_e( 'Try a different month or search term.', 'homeaffairs' ); ?></p>
	</div>

	<!-- ═══ PDF DOWNLOAD CTA ═══ -->
	<div class="mt-10 bg-gradient-to-r from-maroon to-maroon-bright rounded-2xl p-6 lg:p-8 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-md">
		<div>
			<h3 class="text-lg sm:text-xl font-extrabold text-white"><?php esc_html_e( 'Official Government Gazette — Holiday Calendar 2026', 'homeaffairs' ); ?></h3>
			<p class="text-sm text-white/70 mt-1"><?php esc_html_e( 'Download the complete schedule of government holidays as published in the official gazette notice.', 'homeaffairs' ); ?></p>
		</div>
		<a href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/governance/calendar.jpg' ); ?>" class="inline-flex items-center gap-2 bg-secondary text-maroon font-bold text-sm px-6 py-3 rounded-xl hover:bg-secondary-light transition-colors shadow-lg shrink-0 whitespace-nowrap">
			<i class="fa-solid fa-file-pdf"></i>
			<?php esc_html_e( 'Download PDF (240 KB)', 'homeaffairs' ); ?>   
		</a>
	</div>
</div>

<script>
(function() {
	var data = <?php echo $holidays_json; ?>;
	var months = <?php echo $months_json; ?>;
	var filtered = [];
	var activeType = 'all';
	var activeMonth = 'all';

	var tbody = document.getElementById('cal-tbody');
	var empty = document.getElementById('cal-empty');
	var count = document.getElementById('cal-count');
	var search = document.getElementById('cal-search');
	var monthSel = document.getElementById('cal-month');

	if (!data || !data.length) { showEmpty(); return; }

	// Stats
	var statPub = document.getElementById('stat-public');
	var statBank = document.getElementById('stat-bank');
	var statMerc = document.getElementById('stat-mercantile');
	var sp = 0, sb = 0, sm = 0;
	for (var i = 0; i < data.length; i++) {
		var t = data[i].types;
		if (t.indexOf('public') !== -1) sp++;
		if (t.indexOf('bank') !== -1) sb++;
		if (t.indexOf('mercantile') !== -1) sm++;
	}
	if (statPub) statPub.textContent = sp;
	if (statBank) statBank.textContent = sb;
	if (statMerc) statMerc.textContent = sm;

	function formatDateBadge(iso) {
		var d = new Date(iso + 'T00:00:00');
		var dd = ('0' + d.getDate()).slice(-2);
		var mmm = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'][d.getMonth()];
		var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var dn = days[d.getDay()];
		return '<span class="inline-flex flex-col items-center w-12 sm:w-14 py-1.5 rounded-lg bg-maroon/5 border border-maroon/10"><span class="text-[11px] font-bold text-maroon leading-none">' + dd + '</span><span class="text-[9px] text-gray-500 uppercase mt-0.5">' + mmm + '</span></span>';
	}

	function getTypePills(types) {
		var html = '';
		for (var i = 0; i < types.length; i++) {
			var t = types[i];
			var cls = t === 'public' ? 'bg-maroon/10 text-maroon' : t === 'bank' ? 'bg-secondary/15 text-amber-700' : 'bg-amber-50 text-amber-600';
			var label = t === 'public' ? 'P' : t === 'bank' ? 'B' : 'M';
			html += '<span class="inline-block text-[10px] font-bold px-2 py-0.5 rounded ' + cls + ' mr-1" title="' + t + '">' + label + '</span>';
		}
		return html;
	}

	
	function showEmpty() {
		tbody.innerHTML = '';
		empty.classList.remove('hidden');
		count.textContent = '';
	}

	function filterData() {
		var q = search.value.toLowerCase().trim();
		filtered = [];
		for (var i = 0; i < data.length; i++) {
			var d = data[i];
			if (activeType !== 'all' && d.types.indexOf(activeType) === -1) continue;
			if (activeMonth !== 'all' && d.date.slice(5,7) !== activeMonth) continue;
			if (q !== '' && d.name.toLowerCase().indexOf(q) === -1 && d.desc.toLowerCase().indexOf(q) === -1) continue;
			filtered.push(d);
		}
		render();
	}

	function render() {
		var total = filtered.length;
		if (total === 0) { showEmpty(); return; }
		empty.classList.add('hidden');
		count.textContent = total + ' <?php echo esc_js( __( 'holiday(s) found for 2026', 'homeaffairs' ) ); ?>';

		var html = '';
		for (var i = 0; i < filtered.length; i++) {
			var d = filtered[i];
			html += '<tr class="border-t border-gray-100 hover:bg-amber-50/40 transition-colors">'
				+ '<td class="px-4 py-3.5 text-gray-600 font-medium text-center text-xs">' + (i + 1) + '</td>'
				+ '<td class="px-4 py-3.5">' + formatDateBadge(d.date) + '</td>'
				+ '<td class="px-4 py-3.5"><span class="text-sm font-bold text-gray-800">' + d.name + '</span><p class="text-xs text-gray-600 mt-0.5">' + d.desc + '</p></td>'
				+ '<td class="px-4 py-3.5 text-xs font-medium text-gray-600 hidden md:table-cell">' + d.day + '</td>'
				+ '<td class="px-4 py-3.5">' + getTypePills(d.types) + '</td>'
				
		}
		tbody.innerHTML = html;
	}

	search.addEventListener('input', filterData);
	monthSel.addEventListener('change', function() { activeMonth = this.value; filterData(); });

	var btns = document.querySelectorAll('.cal-filter-btn');
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener('click', function() {
			for (var j = 0; j < btns.length; j++) btns[j].classList.remove('active');
			this.classList.add('active');
			activeType = this.getAttribute('data-type');
			filterData();
		});
	}

	filterData();
})();
</script>

<style>
.cal-filter-btn {
	display: inline-flex; align-items: center;
	padding: 0.5rem 1rem; border-radius: 0.5rem;
	font-size: 0.8125rem; font-weight: 600;
	color: #6B7280; background: #F9FAFB;
	border: 1px solid #E5E7EB;
	cursor: pointer; transition: all 0.2s ease;
}
.cal-filter-btn:hover { background: #F3F4F6; }
.cal-filter-btn.active { background: var(--color-maroon); color: #fff; border-color: var(--color-maroon); }
</style>

<?php get_footer(); ?>