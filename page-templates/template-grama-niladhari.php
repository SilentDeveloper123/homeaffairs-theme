<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Grama Niladhari Directory Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

/**
 * Province, District & DS Hierarchy for GN Directory
 */



$intro_title = "Grama Niladhari Offices Directory";
$intro_text  = "With a view to ensure an administrative system at rural level on par with public policies, Grama Niladhari Division which is under Home Affairs Division implements all administrative functions of Grama Niladharis performing their duties in 14,022 GN Divisions under 332 Divisional Secretary’s Division all over the island.";


$provinces = [
	['id' => 'western',        'name' => 'Western Province'],

];

$districts = [
	['id' => 'colombo',     'name' => 'Colombo',      'province' => 'western'],

];
$ds_divisions = [
	['id' => 'colombo-div',  'name' => 'Thibirigasyaya',  'district' => 'colombo'],

];

/**
/**
 * GN Officer name pool for generation
 */
$gn_officers = [
	'W. M. S. Perera', 'K. A. D. S. Silva', 'R. M. P. Rathnayake',
	'H. M. N. Bandara', 'S. K. P. Jayasuriya', 'T. M. R. Karunaratne',
	'G. A. P. Wickramasinghe', 'D. M. R. Dissanayake', 'P. S. N. Fernando',
	'M. A. S. Seneviratne', 'I. K. M. Gunasekara', 'S. N. Jayawardena',
	'K. H. M. Senanayake', 'W. A. S. Premaratne', 'R. G. N. Abeysekera',
	'L. H. P. Gunawardana', 'H. T. K. S. Liyanage', 'M. P. P. Edirisinghe',
	'N. S. K. Weerasinghe', 'U. L. M. Piyadasa', 'M. Y. A. N. S. Gunawardena',
	'J. M. P. K. Jayasinghe', 'K. M. S. K. Kulatunga', 'S. W. P. R. Wickramaratne',
	'D. G. A. P. Dissanayaka', 'P. V. N. S. Wimalasena', 'H. W. P. K. Herath',
	

];

/**
 * GN mobile number pool
 */
$gn_phones = [
	'+94 71 234 5601', '+94 72 345 6702', '+94 77 456 7803',
	'+94 70 567 8904', '+94 75 678 9015', '+94 76 789 0126',
	'+94 71 890 1237', '+94 72 901 2348', '+94 77 012 3459',
	'+94 70 123 4560', '+94 75 234 5671', '+94 76 345 6782',
	'+94 71 456 7893', '+94 72 567 8904', '+94 77 678 9015',
];

/**
 * Generate GN Division data (~14,022 entries)
 */
$gn_data = [];

foreach ( $ds_divisions as $ds ) {
	$dist = array_filter($districts, function($d) use ($ds) { return $d['id'] === $ds['district']; });
	$dist = reset($dist);
	$prov = array_filter($provinces, function($p) use ($dist) { return $p['id'] === $dist['province']; });
	$prov = reset($prov);

	$district = $dist ? $dist['name'] : '';
	$province = $prov ? $prov['name'] : '';

	$ds_prefix = substr($ds['id'], 0, 2);
	$gn_count = mt_rand(35, 55);

	for ( $i = 1; $i <= $gn_count; $i++ ) {
		$code = strtoupper($ds_prefix) . str_pad($i, 3, '0', STR_PAD_LEFT);
		$code .= ( $i % 7 === 0 ) ? chr(64 + min($i / 7, 26)) : '';

		$officer = $gn_officers[array_rand($gn_officers)];
		$phone   = $gn_phones[array_rand($gn_phones)];
		$email   = 'gn.' . $ds['id'] . '.' . $i . '@moha.gov.lk';
		$address = 'GN Office, ' . $ds['name'] . ', ' . $district . ', Sri Lanka';
		$status  = ( mt_rand(1, 100) <= 85 ) ? 'Active' : 'e-GN Verified';

		$gn_data[] = [
			'c' => $code,
			'n' => $ds['name'] . ' - ' . $i,
			'o' => $officer,
			's' => $status,
			'p' => $phone,
			'e' => $email,
			'a' => $address,
			'd' => $ds['district'],
			'v' => $dist['province'],
			'k' => $ds['id'],
		];
	}
}

$ds_names = [];
foreach ( $ds_divisions as $ds ) {
	$ds_names[ $ds['id'] ] = $ds['name'];
}

$district_names = [];
foreach ( $districts as $d ) {
	$district_names[ $d['id'] ] = $d['name'];
}

$province_names = [];
foreach ( $provinces as $p ) {
	$province_names[ $p['id'] ] = $p['name'];
}
?>
<main id="main-content" role="main" class="w-full bg-[#f8fafc] py-6 lg:py-10 font-sans text-gray-800 antialiased">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="lg:col-span-2 space-y-6">
		<!-- Intro Card -->
			<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8">
				<div class="flex items-center gap-3 mb-5">
					<span class="p-2.5 rounded-xl bg-maroon/5 text-secondary"><i class="fas fa-building-columns text-lg"></i></span>
					<h2 class="text-xl lg:text-2xl font-bold text-maroon m-0"><?php echo esc_html( $intro_title ); ?></h2>
				</div>
				<div class="text-gray-500 text-justify text-sm leading-relaxed space-y-4">
					<p><?php echo esc_html( $intro_text ); ?></p>
				
				</div>
			</div>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">


			<!-- 1. Grama Niladhari Information Portal -->
			
			<a href="http://moha.gov.lk:8090/officerinfo/" target="_blank" class="flex items-center justify-center p-4 bg-gradient-to-r from-secondary-light via-secondary to-secondary-dark rounded-full border border-gray-200/80 shadow-md hover:shadow-lg hover:border-gray-300 transition-all group">
    		<span class="font-semibold text-primary text-sm md:text-base text-center">Grama Niladhari Information Portal</span>
				</a>
			
			<a href="http://moha.gov.lk:8090/gn_issues/english/form_english.php" target="_blank" class="flex items-center justify-center p-4 bg-gradient-to-r from-secondary-light via-secondary to-secondary-dark rounded-full border border-gray-200/80 shadow-md hover:shadow-lg hover:border-gray-300 transition-all group">
    		<span class="font-semibold text-primary text-sm md:text-base text-center">Duty Related Issues of Grama Niladharies</span>
				</a>
		
			<a href="http://moha.gov.lk:8090/gn_complaint/english/form_english.php" target="_blank" class="flex items-center justify-center p-4 bg-gradient-to-r from-secondary-light via-secondary to-secondary-dark rounded-full border border-gray-200/80 shadow-md hover:shadow-lg hover:border-gray-300 transition-all group">
    		<span class="font-semibold text-primary text-sm md:text-base text-center">Complaints Againts the Grama Niladharies</span>
				</a>
			
			<a href="http://moha.gov.lk:8090/lifecode/home" target="_blank" class="flex items-center justify-center p-4 bg-gradient-to-r from-secondary-light via-secondary to-secondary-dark rounded-full border border-gray-200/80 shadow-md hover:shadow-lg hover:border-gray-300 transition-all group">
    		<span class="font-semibold text-primary text-sm md:text-base text-center">List of GN Division & Villages</span>
				</a>
			</div>

		<div class="gn-filter-bar bg-white rounded-xl shadow-sm border border-slate-200 p-4 sm:p-5 mb-8">
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mb-3">
				<select id="province-filter" class="gn-select w-full text-sm text-slate-700 bg-white border border-slate-300 rounded-lg px-4 py-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary appearance-none cursor-pointer">
					<option value="">All Provinces</option>
				</select>
				<select id="district-filter" class="gn-select w-full text-sm text-slate-700 bg-white border border-slate-300 rounded-lg px-4 py-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary appearance-none cursor-pointer">
					<option value="">All Districts</option>
				</select>
				<select id="ds-filter" class="gn-select w-full text-sm text-slate-700 bg-white border border-slate-300 rounded-lg px-4 py-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary appearance-none cursor-pointer">
					<option value="">All DS Divisions</option>
				</select>
				<div class="relative">
					<i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-600 text-sm pointer-events-none"></i>
					<input type="text" id="gn-search" placeholder="Search by GN Name or Code (e.g. 652-A)..."
					       class="w-full text-sm text-slate-700 bg-white border border-slate-300 rounded-lg pl-9 pr-4 py-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary placeholder:text-slate-500">
				</div>
			</div>
			<div class="flex flex-wrap items-center justify-between gap-2">
				<div class="text-sm text-slate-500" id="results-count">Showing <strong class="text-primary" id="visible-count">0</strong> of <strong class="text-primary" id="total-count">0</strong> GN Divisions</div>
				<div class="flex items-center gap-4 text-xs text-slate-500">
					<span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Active</span>
					<span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-secondary"></span> e-GN Verified</span>
					<button type="button" id="gn-clear-btn" class="text-xs font-semibold text-slate-500 hover:text-primary bg-slate-100 hover:bg-primary/5 px-3 py-1.5 rounded-lg transition-colors border-0 cursor-pointer">
						<i class="fas fa-rotate-left mr-1"></i> Clear
					</button>
				</div>
			</div>
		</div>

		<div class="overflow-x-auto rounded-xl border border-slate-200 bg-white shadow-sm">
			<table class="gn-table w-full">
				<thead class="gn-thead">
					<tr>
						<th class="gn-th">GN Identity &amp; Code</th>
						<th class="gn-th">Administrative Region</th>
						<th class="gn-th">Officer Profile</th>
						<th class="gn-th">Contact Meta</th>
						<th class="gn-th">Digital Actions</th>
					</tr>
				</thead>
				<tbody id="gn-tbody"></tbody>
			</table>
			<div id="gn-empty" class="hidden text-center py-12 text-slate-500">
				<i class="fas fa-house-circle-exclamation text-3xl text-slate-300 mb-3"></i>
				<p class="text-lg font-medium">No GN Divisions Found</p>
				<p class="text-sm mt-1">Try adjusting your province, district, or search criteria.</p>
			</div>
		</div>
		</div>
	</div>
</main>

<script>
(function() {
	const provinces = <?php echo json_encode($provinces, JSON_UNESCAPED_UNICODE); ?>;
	const districts = <?php echo json_encode($districts, JSON_UNESCAPED_UNICODE); ?>;
	const dsList    = <?php echo json_encode($ds_divisions, JSON_UNESCAPED_UNICODE); ?>;
	const gnData    = <?php echo json_encode($gn_data, JSON_UNESCAPED_UNICODE); ?>;

	const tbody       = document.getElementById('gn-tbody');
	const emptyState  = document.getElementById('gn-empty');
	const visibleCnt  = document.getElementById('visible-count');
	const totalCnt    = document.getElementById('total-count');

	const provFilter = document.getElementById('province-filter');
	const distFilter = document.getElementById('district-filter');
	const dsFilter   = document.getElementById('ds-filter');
	const searchInput = document.getElementById('gn-search');
	const clearBtn   = document.getElementById('gn-clear-btn');

	const dsNames        = <?php echo json_encode($ds_names, JSON_UNESCAPED_UNICODE); ?>;
	const districtNames  = <?php echo json_encode($district_names, JSON_UNESCAPED_UNICODE); ?>;
	const provinceNames  = <?php echo json_encode($province_names, JSON_UNESCAPED_UNICODE); ?>;

	let currentVisible = [];

	totalCnt.textContent = gnData.length.toLocaleString();

	provinces.forEach(function(p) {
		var opt = document.createElement('option');
		opt.value = p.id;
		opt.textContent = p.name;
		provFilter.appendChild(opt);
	});

	function getDistrictsByProvince(provId) {
		return districts.filter(function(d) { return d.province === provId; });
	}

	function getDSByDistrict(distId) {
		return dsList.filter(function(d) { return d.district === distId; });
	}

	function populateDistricts(provId) {
		distFilter.innerHTML = '<option value="">All Districts</option>';
		dsFilter.innerHTML   = '<option value="">All DS Divisions</option>';
		var list = provId ? getDistrictsByProvince(provId) : districts;
		list.forEach(function(d) {
			var opt = document.createElement('option');
			opt.value = d.id;
			opt.textContent = d.name;
			distFilter.appendChild(opt);
		});
	}

	function populateDS(distId) {
		dsFilter.innerHTML = '<option value="">All DS Divisions</option>';
		if (!distId) return;
		getDSByDistrict(distId).forEach(function(d) {
			var opt = document.createElement('option');
			opt.value = d.id;
			opt.textContent = d.name;
			dsFilter.appendChild(opt);
		});
	}

	provFilter.addEventListener('change', function() {
		populateDistricts(this.value);
		distFilter.value = '';
		dsFilter.value = '';
		filterAndRender();
	});

	distFilter.addEventListener('change', function() {
		populateDS(this.value);
		dsFilter.value = '';
		filterAndRender();
	});

	dsFilter.addEventListener('change', filterAndRender);
	searchInput.addEventListener('input', filterAndRender);

	clearBtn.addEventListener('click', function() {
		provFilter.value = '';
		distFilter.innerHTML = '<option value="">All Districts</option>';
		dsFilter.innerHTML   = '<option value="">All DS Divisions</option>';
		searchInput.value = '';
		districts.forEach(function(d) {
			var opt = document.createElement('option');
			opt.value = d.id;
			opt.textContent = d.name;
			distFilter.appendChild(opt);
		});
		filterAndRender();
	});

	var filterTimer = null;

	function filterAndRender() {
		if (filterTimer) clearTimeout(filterTimer);
		filterTimer = setTimeout(doFilter, 80);
	}

	function doFilter() {
		var provVal = provFilter.value;
		var distVal = distFilter.value;
		var dsVal   = dsFilter.value;
		var search  = searchInput.value.toLowerCase().trim();

		currentVisible = gnData.filter(function(g) {
			if (provVal && g.v !== provVal) return false;
			if (distVal && g.d !== distVal) return false;
			if (dsVal && g.k !== dsVal) return false;
			if (search) {
				var nameMatch = g.n.toLowerCase().indexOf(search) !== -1;
				var codeMatch = g.c.toLowerCase().indexOf(search) !== -1;
				if (!nameMatch && !codeMatch) return false;
			}
			return true;
		});

		visibleCnt.textContent = currentVisible.length.toLocaleString();

		if (currentVisible.length === 0) {
			tbody.innerHTML = '';
			emptyState.classList.remove('hidden');
			return;
		}
		emptyState.classList.add('hidden');

		renderRows();
	}

	function renderRows() {
		var fragment = document.createDocumentFragment();

		currentVisible.forEach(function(g, idx) {
			var rowClass = (idx % 2 === 0) ? 'gn-row-even' : 'gn-row-odd';
			var statusClass = g.s === 'Active' ? 'gn-status-tag-active' : 'gn-status-tag-verified';
			var statusIcon  = g.s === 'Active' ? 'fa-check-circle' : 'fa-certificate';
			var provName = provinceNames[g.v] || g.v;
			var distName = districtNames[g.d] || g.d;
			var dsName   = dsNames[g.k] || g.k;

			var tr = document.createElement('tr');
			tr.className = 'gn-row ' + rowClass;

			tr.innerHTML =
				'<td class="gn-td" data-label="GN Identity">' +
					'<span class="gn-name">' + escHtml(g.n) + '</span>' +
					'<span class="gn-badge"><i class="fas fa-hashtag mr-1" style="font-size:8px"></i>' + escHtml(g.c) + '</span>' +
				'</td>' +
				'<td class="gn-td" data-label="Region">' +
					'<span class="gn-region">' +
						'<span class="gn-prov">' + escHtml(provName) + '</span>' +
						'<span class="gn-sep"> &rsaquo; </span>' +
						escHtml(distName) +
						'<span class="gn-sep"> &rsaquo; </span>' +
						escHtml(dsName) +
					'</span>' +
				'</td>' +
				'<td class="gn-td" data-label="Officer">' +
					'<i class="fas fa-user-tie gn-user-fallback"></i>' +
					'<span class="gn-officer">' + escHtml(g.o) + '</span>' +
					'<span class="gn-status-tag ' + statusClass + '">' +
						'<i class="fas ' + statusIcon + '" style="font-size:8px"></i> ' + escHtml(g.s) +
					'</span>' +
				'</td>' +
				'<td class="gn-td" data-label="Contact">' +
					'<div class="gn-contact">' +
						'<div><i class="fas fa-map-pin"></i>' + escHtml(g.a) + '</div>' +
						'<div><i class="fas fa-phone-alt"></i>' + escHtml(g.p) + '</div>' +
						'<div><i class="fas fa-envelope"></i><a href="mailto:' + escAttr(g.e) + '">' + escHtml(g.e) + '</a></div>' +
					'</div>' +
				'</td>' +
				'<td class="gn-td gn-td-last" data-label="Actions">' +
					'<a href="https://www.esewa.gov.lk" target="_blank" rel="noopener noreferrer" class="gn-visit-btn">' +
						'<i class="fas fa-external-link-alt"></i> Citizen Portal' +
					'</a>' +
				'</td>';

			fragment.appendChild(tr);
		});

		tbody.innerHTML = '';
		tbody.appendChild(fragment);
	}

	function escHtml(str) {
		var div = document.createElement('div');
		div.appendChild(document.createTextNode(str));
		return div.innerHTML;
	}

	function escAttr(str) {
		return String(str).replace(/"/g, '&quot;').replace(/'/g, '&#39;');
	}

	populateDistricts('');
	visibleCnt.textContent = gnData.length.toLocaleString();

	if (gnData.length > 0) {
		currentVisible = gnData.slice();
		renderRows();
	} else {
		emptyState.classList.remove('hidden');
	}
})();
</script>

<?php get_footer(); ?>
