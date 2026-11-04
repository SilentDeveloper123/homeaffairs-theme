<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Divisional Secretariats E-Forms & Services
 * Description: Modern Table Chart View for Divisional Secretariats Official E-Forms & Public Services.
 */

get_header();

// ── 1. MAIN HERO BANNER ──
get_template_part( 'template-parts/page-banner' );

// ── 2. DEFINE CATEGORIES FOR DIVISIONAL SECRETARIAT E-FORMS ──
$categories = [
    'all'                 => __( 'All Categories', 'homeaffairs' ),
    'civil-registration'  => __( 'Civil Registration & Certificates', 'homeaffairs' ),
    'social-services'     => __( 'Social Services & Welfare', 'homeaffairs' ),
    'land-matters'        => __( 'Land & Property Administration', 'homeaffairs' ),
    'business-permits'    => __( 'Business Permits & Revenue', 'homeaffairs' ),
    'grama-niladhari'     => __( 'Grama Niladhari Services', 'homeaffairs' ),
    'identity-cards'      => __( 'NIC & Personal Documentation', 'homeaffairs' ),
];

// ── 3. DEFINE YEARS / REVISION FILTER ──
$years = [ 'all', '2026', '2025', '2024', '2023' ];

// ── 4. DIVISIONAL SECRETARIATS E-FORMS DATA ──
$publications = [
    [
        'title'    => __( 'Application for Extract / Copy of Birth Certificate', 'homeaffairs' ),
        'ref_code' => 'DS/CR/REG/01',
        'cat_slug' => 'civil-registration',
        'category' => __( 'Civil Registration & Certificates', 'homeaffairs' ),
        'year'     => '2026',
        'size'     => '320 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'Tamil', 'English' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Application for Extract / Copy of Marriage Certificate', 'homeaffairs' ),
        'ref_code' => 'DS/CR/REG/02',
        'cat_slug' => 'civil-registration',
        'category' => __( 'Civil Registration & Certificates', 'homeaffairs' ),
        'year'     => '2026',
        'size'     => '310 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'Tamil', 'English' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Application for National Identity Card (NIC) Renewal / Duplicate', 'homeaffairs' ),
        'ref_code' => 'DS/NIC/2026/05',
        'cat_slug' => 'identity-cards',
        'category' => __( 'NIC & Personal Documentation', 'homeaffairs' ),
        'year'     => '2026',
        'size'     => '540 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'Tamil' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Grama Niladhari Character & Residency Certificate Request Form', 'homeaffairs' ),
        'ref_code' => 'DS/GN/CERT/04',
        'cat_slug' => 'grama-niladhari',
        'category' => __( 'Grama Niladhari Services', 'homeaffairs' ),
        'year'     => '2025',
        'size'     => '280 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'Tamil', 'English' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Application for Elderly Relief Allowance & Social Security Benefits', 'homeaffairs' ),
        'ref_code' => 'DS/SS/WEL/2025',
        'cat_slug' => 'social-services',
        'category' => __( 'Social Services & Welfare', 'homeaffairs' ),
        'year'     => '2025',
        'size'     => '410 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'Tamil' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Application for Land Development Ordinance (LDO) Permit Renewal', 'homeaffairs' ),
        'ref_code' => 'DS/LD/LDO/2024',
        'cat_slug' => 'land-matters',
        'category' => __( 'Land & Property Administration', 'homeaffairs' ),
        'year'     => '2024',
        'size'     => '620 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'English' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Business Name Registration & Trade Permit Application', 'homeaffairs' ),
        'ref_code' => 'DS/REV/BUS/03',
        'cat_slug' => 'business-permits',
        'category' => __( 'Business Permits & Revenue', 'homeaffairs' ),
        'year'     => '2026',
        'size'     => '480 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'Tamil', 'English' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Valuation Certificate Request for Property Tax & Leases', 'homeaffairs' ),
        'ref_code' => 'DS/LD/VAL/2025',
        'cat_slug' => 'land-matters',
        'category' => __( 'Land & Property Administration', 'homeaffairs' ),
        'year'     => '2025',
        'size'     => '390 KB',
        'format'   => 'PDF',
        'langs'    => [ 'Sinhala', 'English' ],
        'url'      => '#',
    ],
    [
        'title'    => __( 'Application for Public Assistance Monthly Allowance (PAMA)', 'homeaffairs' ),
        'ref_code' => 'DS/SS/PAMA/01',
        'cat_slug' => 'social-services',
        'category' => __( 'Social Services & Welfare', 'homeaffairs' ),
        'year'     => '2025',
        'size'     => '350 KB',
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
            <?php esc_html_e( 'DIVISIONAL SECRETARIATS PORTAL', 'homeaffairs' ); ?>
        </span>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'E-Forms & Public Service Downloads', 'homeaffairs' ); ?></h1>
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
                    <?php if ( ! empty( $years ) && is_array( $years ) ) : ?>
                        <?php foreach ( $years as $y ) : ?>
                            <?php if ( 'all' !== $y ) : ?>
                                <option value="<?php echo esc_attr( $y ); ?>"><?php echo esc_html( $y ); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>

                <!-- Search Input -->
                <div class="relative w-full lg:w-64">
                    <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-xs pointer-events-none"></i>
                    <input type="text" id="pub-search" class="w-full rounded-lg border border-gray-200 bg-slate-50/50 pl-9 pr-4 py-2 text-xs text-slate-800 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:bg-white focus:border-maroon" placeholder="<?php esc_attr_e( 'Search e-forms...', 'homeaffairs' ); ?>">
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
                        <th class="py-3.5 px-4"><?php esc_html_e( 'E-Form Title & Ref Code', 'homeaffairs' ); ?></th>
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
            <p class="text-xs font-bold text-gray-500"><?php esc_html_e( 'No e-forms match your filter criteria.', 'homeaffairs' ); ?></p>
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
        countEl.textContent = 'Showing ' + (start + 1) + '–' + end + ' of ' + total + ' e-forms found';

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