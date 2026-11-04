<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Bid Documents Repository
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Bid Documents Repository";

/**
 * Bid document entries
 * Structure: [name, code, category, revision, size, format, url]
 */
$documents = [
	[ 'name' => 'Standard Bidding Document for Procurement of Goods',                'code' => 'SBD 01',                    'category' => 'goods',        'revision' => 'Jan 2026', 'size' => '2.4 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-01-goods.pdf' ],
	[ 'name' => 'Standard Bidding Document for Procurement of Works',                'code' => 'SBD 02',                    'category' => 'works',        'revision' => 'Jan 2026', 'size' => '3.1 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-02-works.pdf' ],
	[ 'name' => 'Standard Bidding Document for Procurement of Services',             'code' => 'SBD 03',                    'category' => 'services',     'revision' => 'Nov 2025', 'size' => '1.8 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-03-services.pdf' ],
	[ 'name' => 'Pre-Qualification Document for Large Infrastructure Works',         'code' => 'PQ 01',                     'category' => 'works',        'revision' => 'Jan 2026', 'size' => '4.2 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/pq-01-infrastructure.pdf' ],
	[ 'name' => 'Request for Proposals — Consultancy Services (Quality & Cost)',   'code' => 'RFP 01 — QCBS',             'category' => 'consultancy',  'revision' => 'Sep 2025', 'size' => '2.0 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/rfp-01-qcbs.pdf' ],
	[ 'name' => 'Request for Proposals — Consultancy Services (Quality Only)',     'code' => 'RFP 02 — QBS',              'category' => 'consultancy',  'revision' => 'Sep 2025', 'size' => '1.9 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/rfp-02-qbs.pdf' ],
	[ 'name' => 'Request for Proposals — Consultancy Services (Lump Sum)',           'code' => 'RFP 03 — LS',               'category' => 'consultancy',  'revision' => 'Sep 2025', 'size' => '1.7 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/rfp-03-ls.pdf' ],
	[ 'name' => 'Standard Form of Contract — Procurement of Goods',                'code' => 'SBD 01 — Contract',         'category' => 'goods',        'revision' => 'Jan 2026', 'size' => '1.2 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-01-goods-contract.pdf' ],
	[ 'name' => 'Standard Form of Contract — Procurement of Works',                'code' => 'SBD 02 — Contract',         'category' => 'works',        'revision' => 'Jan 2026', 'size' => '1.5 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-02-works-contract.pdf' ],
	[ 'name' => 'Bid Security Form (Bank Guarantee Template)',                     'code' => 'FORM — BS 01',              'category' => 'goods',        'revision' => 'Mar 2025', 'size' => '0.6 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-bs-01-bid-security.doc' ],
	[ 'name' => 'Performance Security Form (Bank Guarantee Template)',             'code' => 'FORM — PS 01',              'category' => 'works',        'revision' => 'Mar 2025', 'size' => '0.6 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-ps-01-performance-security.doc' ],
	[ 'name' => 'Vendor Registration Application Form',                            'code' => 'FORM — REG 01',             'category' => 'registration', 'revision' => 'Jun 2025', 'size' => '0.8 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-reg-01-vendor-registration.doc' ],
	[ 'name' => 'Contractor Registration Application Form',                        'code' => 'FORM — REG 02',             'category' => 'registration', 'revision' => 'Jun 2025', 'size' => '0.9 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-reg-02-contractor-registration.doc' ],
	[ 'name' => 'Consultant Registration Application Form',                        'code' => 'FORM — REG 03',             'category' => 'registration', 'revision' => 'Jun 2025', 'size' => '0.7 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-reg-03-consultant-registration.doc' ],
	[ 'name' => 'Standard Bidding Document for Supply & Installation of IT Systems','code' => 'SBD 04',                     'category' => 'goods',        'revision' => 'Nov 2025', 'size' => '2.8 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-04-it-systems.pdf' ],
	[ 'name' => 'Standard Bidding Document for Procurement of Vehicles',           'code' => 'SBD 05',                    'category' => 'goods',        'revision' => 'Nov 2025', 'size' => '2.2 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-05-vehicles.pdf' ],
	[ 'name' => 'Standard Bidding Document for Small Works (Community Projects)',  'code' => 'SBD 06',                    'category' => 'works',        'revision' => 'Jan 2026', 'size' => '2.6 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-06-small-works.pdf' ],
	[ 'name' => 'Standard Bidding Document for Procurement of Pharmaceuticals',    'code' => 'SBD 07',                    'category' => 'goods',        'revision' => 'Sep 2025', 'size' => '1.6 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-07-pharma.pdf' ],
	[ 'name' => 'Framework Agreement Template for Recurring Goods',                'code' => 'FA 01',                     'category' => 'goods',        'revision' => 'Mar 2025', 'size' => '1.1 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/fa-01-framework-goods.pdf' ],
	[ 'name' => 'Framework Agreement Template for Recurring Services',             'code' => 'FA 02',                     'category' => 'services',     'revision' => 'Mar 2025', 'size' => '1.0 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/fa-02-framework-services.pdf' ],
	[ 'name' => 'Expression of Interest (EOI) Template — Consultancy Services',    'code' => 'EOI 01',                    'category' => 'consultancy',  'revision' => 'Sep 2025', 'size' => '0.9 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/eoi-01-consultancy.doc' ],
	[ 'name' => 'Expression of Interest (EOI) Template — Works Contracts',         'code' => 'EOI 02',                    'category' => 'works',        'revision' => 'Sep 2025', 'size' => '1.0 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/eoi-02-works.doc' ],
	[ 'name' => 'Technical Evaluation Report Template — Goods',                    'code' => 'EVAL — TEC 01',             'category' => 'goods',        'revision' => 'Jun 2025', 'size' => '0.7 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/eval-tec-01-goods.doc' ],
	[ 'name' => 'Technical Evaluation Report Template — Works',                    'code' => 'EVAL — TEC 02',             'category' => 'works',        'revision' => 'Jun 2025', 'size' => '0.8 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/eval-tec-02-works.doc' ],
	[ 'name' => 'Financial Evaluation Report Template — Goods',                    'code' => 'EVAL — FIN 01',             'category' => 'goods',        'revision' => 'Jun 2025', 'size' => '0.6 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/eval-fin-01-goods.doc' ],
	[ 'name' => 'Financial Evaluation Report Template — Works',                    'code' => 'EVAL — FIN 02',             'category' => 'works',        'revision' => 'Jun 2025', 'size' => '0.6 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/eval-fin-02-works.doc' ],
	[ 'name' => 'Standard Bidding Document for Procurement of Consultancy Services (Time-Based)', 'code' => 'SBD 08',     'category' => 'consultancy',  'revision' => 'Nov 2025', 'size' => '2.3 MB',  'format' => 'pdf', 'url' => '/wp-content/uploads/bid-documents/sbd-08-consultancy-time.pdf' ],
	[ 'name' => 'Procurement Plan Template (Annual Procurement Plan)',             'code' => 'FORM — PP 01',              'category' => 'registration', 'revision' => 'Mar 2025', 'size' => '0.5 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-pp-01-procurement-plan.doc' ],
	[ 'name' => 'Bid Opening Minutes Template',                                    'code' => 'FORM — BO 01',              'category' => 'services',     'revision' => 'Mar 2025', 'size' => '0.5 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-bo-01-bid-opening.doc' ],
	[ 'name' => 'Contract Award Notice Template',                                  'code' => 'FORM — CA 01',              'category' => 'services',     'revision' => 'Mar 2025', 'size' => '0.5 MB',  'format' => 'word','url' => '/wp-content/uploads/bid-documents/form-ca-01-contract-award.doc' ],
];

$documents_json = json_encode( $documents );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<!-- Section Header matching Services Hub -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'PROCUREMENT REPOSITORY', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker"><?php echo esc_html( $intro_title ); ?></h1>
	</div>

	<!-- Filter Hub Box -->
	<div id="bid-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300 bid-filter-bar">
		<div class="flex flex-wrap items-center gap-2 mb-5">
			<button type="button" class="bid-type-btn active" data-category="all">All Documents</button>
			<button type="button" class="bid-type-btn" data-category="goods">Goods</button>
			<button type="button" class="bid-type-btn" data-category="works">Works</button>
			<button type="button" class="bid-type-btn" data-category="services">Services</button>
			<button type="button" class="bid-type-btn" data-category="consultancy">Consultancy</button>
			<button type="button" class="bid-type-btn" data-category="registration">Registration Templates</button>
		</div>
		<div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
			<div class="w-full flex-1 relative">
				<label for="bid-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Search by Document Name or Code</label>
				<div class="relative">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
					<input type="text" id="bid-search" class="bid-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="e.g. SBD 01, goods, works, pre-qualification...">
				</div>
			</div>
			<button type="button" id="bid-clear" class="bid-clear-btn flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-primary-darker transition-all duration-200 whitespace-nowrap">
				<i class="fas fa-times text-xs"></i> Reset
			</button>
		</div>
	</div>

	<!-- Table Container -->
	<div class="overflow-x-auto -mx-4 sm:mx-0">
		<table id="bid-table" class="bid-table w-full text-left">
			<thead class="bid-thead">
				<tr>
					<th class="bid-th" style="min-width:260px;">Document Title</th>
					<th class="bid-th">Category</th>
					<th class="bid-th" style="min-width:170px;">File Meta & Revision</th>
					<th class="bid-th" style="min-width:170px;">Direct Action / Download</th>
				</tr>
			</thead>
			<tbody id="bid-body"></tbody>
		</table>
	</div>

	<!-- Empty State -->
	<div id="bid-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-primary-darker/5 rounded-2xl flex items-center justify-center mb-5">
			<i class="fas fa-file-alt text-3xl text-primary-darker"></i>
		</div>
		<p class="text-base font-medium text-gray-700">No documents match your current criteria.</p>
		<p class="text-sm text-gray-500 mt-1">Try adjusting the category or search term above.</p>
	</div>
</main>

<style>
/* Custom Deep SECONDARY (var(--color-primary-darker)) & SECONDARY (var(--color-secondary)) Theme Styles */
.bid-type-btn {
	padding: 0.5rem 1rem;
	font-size: 0.875rem;
	font-weight: 500;
	border-radius: 9999px;
	border: 1px solid #e5e7eb;
	background-color: #f9fafb;
	color: #4b5563;
	transition: all 0.2s ease;
}
.bid-type-btn:hover {
	border-color: var(--color-secondary);
	color: var(--color-primary-darker);
}
.bid-type-btn.active {
	background-color: var(--color-primary-darker);
	border-color: var(--color-primary-darker);
	color: #ffffff;
}

.bid-search-input:focus {
	border-color: var(--color-primary-darker) !important;
	box-shadow: 0 0 0 2px var(--color-primary-darker-tint-10);
}

.bid-thead {
	background-color: var(--color-primary-darker);
	color: #ffffff;
}
.bid-th {
	padding: 1rem 1.25rem;
	font-size: 0.8125rem;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}
.bid-th:first-child {
	border-top-left-radius: 0.75rem;
}
.bid-th:last-child {
	border-top-right-radius: 0.75rem;
}

.bid-row {
	border-bottom: 1px solid #f3f4f6;
	transition: background-color 0.15s ease;
}
.bid-row-even {
	background-color: #ffffff;
}
.bid-row-odd {
	background-color: #fcfbf9;
}
.bid-row:hover {
	background-color: #fcf8f6;
}

.bid-td {
	padding: 1.25rem;
	font-size: 0.875rem;
	color: #374151;
	vertical-align: middle;
}

.bid-doc-name {
	display: block;
	font-size: 0.95rem;
	font-weight: 700;
	color: #1f2937;
	margin-bottom: 0.25rem;
}

.bid-cat-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.375rem;
	padding: 0.35rem 0.75rem;
	border-radius: 9999px;
	font-size: 0.75rem;
	font-weight: 600;
	white-space: nowrap;
}
.bid-cat-badge-goods { background-color: var(--color-secondary-tint-strong); color: var(--color-gold-dark); }
.bid-cat-badge-works { background-color: var(--color-primary-darker-tint-10); color: var(--color-primary-darker); }
.bid-cat-badge-services { background-color: rgba(59, 130, 246, 0.1); color: #1d4ed8; }
.bid-cat-badge-consultancy { background-color: rgba(16, 185, 129, 0.1); color: #047857; }
.bid-cat-badge-registration { background-color: rgba(139, 92, 246, 0.1); color: #6d28d9; }

.bid-meta {
	display: flex;
	flex-direction: column;
	gap: 0.375rem;
}
.bid-meta-row {
	display: flex;
	align-items: center;
	gap: 0.5rem;
	font-size: 0.8125rem;
	color: #4b5563;
}
.bid-meta-row i {
	color: var(--color-secondary);
	font-size: 0.75rem;
}
.bid-meta-row-text strong {
	color: #1f2937;
}
.bid-meta-size {
	display: inline-block;
	font-size: 0.65rem;
	font-weight: 700;
	background-color: #f3f4f6;
	color: #4b5563;
	padding: 0.05rem 0.35rem;
	border-radius: 3px;
	margin-left: 0.25rem;
}

/* Download Button Custom Styling with Increased Length & Forced Same-Line Inline Alignment */
.bid-download-btn {
	background: linear-gradient(135deg, var(--color-maroon) 0%, var(--color-maroon-deep) 100%) !important;
	color: #ffffff !important;
	border: 1px solid var(--color-maroon) !important;
	box-shadow: 0 2px 6px var(--color-maroon-tint-15);
	display: inline-flex !important;
	flex-direction: row !important;
	align-items: center !important;
	justify-content: center !important;
	flex-wrap: nowrap !important;
	gap: 8px !important;
	padding: 8px 18px !important;
	min-width: 165px !important;
	font-size: 13px !important;
	font-weight: 600 !important;
	border-radius: 6px !important;
	transition: all 0.2s ease !important;
	text-decoration: none !important;
	white-space: nowrap !important;
}

/* Normal state: Icon color light SECONDARY */
.bid-download-btn i,
.bid-download-btn i::before,
.bid-download-btn span {
	display: inline-block !important;
	vertical-align: middle !important;
	float: none !important;
}

.bid-download-btn i,
.bid-download-btn i::before {
	color: var(--color-secondary-light) !important;
	fill: var(--color-secondary-light) !important; 
	transition: all 0.2s ease !important;
	font-size: 13px !important;
	flex-shrink: 0 !important;
	line-height: 1 !important;
}

/* Hover state: Background SECONDARY */
.bid-download-btn:hover {
	background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-gold-deep) 100%) !important;
	color: var(--color-maroon) !important;
	border-color: var(--color-secondary) !important;
}

/* Hover state: Icon & pseudo-elements SECONDARY color */
.bid-download-btn:hover i,
.bid-download-btn:hover i::before {
	color: var(--color-maroon) !important;
	fill: var(--color-maroon) !important; 
}
</style>

<script>
(function() {
	var allData = <?php echo $documents_json; ?>;
	var filtered = [];
	var activeCategory = 'all';

	var typeBtns = document.querySelectorAll('.bid-type-btn');
	var searchInput = document.getElementById('bid-search');
	var clearBtn = document.getElementById('bid-clear');
	var tbody = document.getElementById('bid-body');
	var emptyEl = document.getElementById('bid-empty');

	var catIcons = {
		goods: 'fa-box',
		works: 'fa-hard-hat',
		services: 'fa-concierge-bell',
		consultancy: 'fa-chart-line',
		registration: 'fa-clipboard-list'
	};

	var catLabels = {
		goods: 'Goods',
		works: 'Works',
		services: 'Services',
		consultancy: 'Consultancy',
		registration: 'Registration'
	};

	function filterData() {
		var q = searchInput.value.toLowerCase().trim();

		filtered = allData.filter( function( item ) {
			if ( activeCategory !== 'all' && item.category !== activeCategory ) { return false; }
			if ( q !== '' ) {
				var name = item.name.toLowerCase();
				var code = item.code.toLowerCase();
				var cat = item.category.toLowerCase();
				if ( name.indexOf(q) === -1 && code.indexOf(q) === -1 && cat.indexOf(q) === -1 ) {
					return false;
				}
			}
			return true;
		});

		render();
	}

	function render() {
		if ( filtered.length === 0 ) {
			tbody.innerHTML = '';
			emptyEl.classList.remove('hidden');
			return;
		}
		emptyEl.classList.add('hidden');

		var html = '';
		for ( var i = 0; i < filtered.length; i++ ) {
			var d = filtered[i];
			var rowClass = ( i % 2 === 0 ) ? 'bid-row-even' : 'bid-row-odd';

			var formatIcon = d.format === 'pdf' ? 'fa-file-pdf' : 'fa-file-word';
			var badgeClass = 'bid-cat-badge-' + d.category;
			var catIcon = catIcons[ d.category ] || 'fa-tag';
			var downloadLabel = d.format === 'pdf' ? 'Download PDF' : 'Download DOC';

			html += '<tr class="bid-row ' + rowClass + '">';
			html += '<td class="bid-td" data-label="Document Title">';
			html += '<span class="bid-doc-name">' + d.name + '</span>';
			
			html += '</td>';
			html += '<td class="bid-td" data-label="Category">';
			html += '<span class="bid-cat-badge ' + badgeClass + '"><i class="fas ' + catIcon + '"></i> ' + ( catLabels[ d.category ] || d.category ) + '</span>';
			html += '</td>';
			html += '<td class="bid-td" data-label="File Meta & Revision">';
			html += '<div class="bid-meta">';
			html += '<div class="bid-meta-row">';
			html += '<i class="fas fa-code-branch"></i>';
			html += '<span class="bid-meta-row-text">Revised: <strong>' + d.revision + '</strong></span>';
			html += '</div>';
			html += '<div class="bid-meta-row">';
			html += '<i class="fas fa-database"></i>';
			html += '<div><span class="bid-meta-row-text">Size: <strong>' + d.size + '</strong></span>';
			html += '<span class="bid-meta-size">' + d.format.toUpperCase() + '</span>';
			html += '</div></div></div>';
			html += '</td>';
			html += '<td class="bid-td bid-td-last" data-label="Download">';
			html += '<a href="' + d.url + '" class="bid-download-btn" target="_blank">';
			html += '<i class="fas ' + formatIcon + '"></i>';
			html += '<span>' + downloadLabel + '</span>';
			html += '</a>';
			html += '</td>';
			html += '</tr>';
		}
		tbody.innerHTML = html;
	}

	typeBtns.forEach(function( btn ) {
		btn.addEventListener('click', function() {
			typeBtns.forEach(function( b ) { b.classList.remove('active'); });
			this.classList.add('active');
			activeCategory = this.getAttribute('data-category');
			filterData();
		});
	});

	searchInput.addEventListener('input', filterData );

	clearBtn.addEventListener('click', function() {
		typeBtns.forEach(function( b ) { b.classList.remove('active'); });
		document.querySelector('.bid-type-btn[data-category="all"]').classList.add('active');
		activeCategory = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>