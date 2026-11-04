<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: news and events
 * Description: Modern Table Chart View for Ministry Publications & Official Documents.
 */

get_header();

// ── 1. MAIN HERO BANNER ──
get_header();

// ── 1. MAIN HERO BANNER ──
get_template_part( 'template-parts/page-banner' );

// ── 2. DEFINE CATEGORIES ──
$categories = [
    'all'            => __( 'All Updates', 'homeaffairs' ),
    'news'           => __( 'Latest News', 'homeaffairs' ),
    'events'         => __( 'Upcoming Events', 'homeaffairs' ),
    'press-releases' => __( 'Press Releases', 'homeaffairs' ),
    'notices'        => __( 'Special Notices', 'homeaffairs' ),
];

// ── 3. DEFINE YEARS FILTER ──
$years = [ 'all', '2026', '2025', '2024' ];

// ── 4. FALLBACK NEWS & EVENTS DATA ──
$news_events = [
    [
        'id'          => 1,
        'title'       => __( '78th National Independence Day Celebrated at Independence Square', 'homeaffairs' ),
        'cat_slug'    => 'events',
        'category'    => __( 'Upcoming Events', 'homeaffairs' ),
        'date'        => '2026-02-04',
        'display_date'=> '04 Feb 2026',
        'year'        => '2026',
        'location'    => 'Independence Square, Colombo',
        'summary'     => __( 'The Ministry of Home Affairs successfully coordinated the national celebration event bringing together civil administrators.', 'homeaffairs' ),
        'url'         => '#',
        'is_featured' => true,
    ],
    [
        'id'          => 2,
        'title'       => __( 'Digital Signature System Launched for Secure Documents', 'homeaffairs' ),
        'cat_slug'    => 'press-releases',
        'category'    => __( 'Press Releases', 'homeaffairs' ),
        'date'        => '2026-08-28',
        'display_date'=> '28 Aug 2026',
        'year'        => '2026',
        'location'    => 'Nila Medura, Colombo',
        'summary'     => __( 'New digital signature framework implemented across all Divisional Secretariats to speed up public service delivery.', 'homeaffairs' ),
        'url'         => '#',
        'is_featured' => false,
    ],
    [
        'id'          => 3,
        'title'       => __( 'District Secretaries Progress Review Meeting', 'homeaffairs' ),
        'cat_slug'    => 'events',
        'category'    => __( 'Upcoming Events', 'homeaffairs' ),
        'date'        => '2026-09-15',
        'display_date'=> '15 Sep 2026',
        'year'        => '2026',
        'location'    => 'Main Auditorium, Ministry of Home Affairs',
        'summary'     => __( 'Progress review and strategic planning session with all 25 District Secretaries across the island.', 'homeaffairs' ),
        'url'         => '#',
        'is_featured' => false,
    ],
    [
        'id'          => 4,
        'title'       => __( 'Regional Administration Reforms Implemented for Q3 2026', 'homeaffairs' ),
        'cat_slug'    => 'news',
        'category'    => __( 'Latest News', 'homeaffairs' ),
        'date'        => '2026-08-15',
        'display_date'=> '15 Aug 2026',
        'year'        => '2026',
        'location'    => 'Island-wide',
        'summary'     => __( 'Key restructuring aimed at improving Grama Niladhari division workflows and citizen charter response times.', 'homeaffairs' ),
        'url'         => '#',
        'is_featured' => false,
    ],
    [
        'id'          => 5,
        'title'       => __( 'Special Notice: Public Service Hours During Festival Season', 'homeaffairs' ),
        'cat_slug'    => 'notices',
        'category'    => __( 'Special Notices', 'homeaffairs' ),
        'date'        => '2026-04-10',
        'display_date'=> '10 Apr 2026',
        'year'        => '2026',
        'location'    => 'All Divisional Secretariats',
        'summary'     => __( 'Updated operating schedules and counter service timelines for divisional secretariat offices during April holidays.', 'homeaffairs' ),
        'url'         => '#',
        'is_featured' => false,
    ],
];

$news_json = json_encode( $news_events, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

    <!-- STANDARD PAGE TITLE SECTION -->
    <div class="text-center max-w-3xl mx-auto mb-8">
        <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-amber-500/10 text-amber-800 inline-block mb-3">
            <?php esc_html_e( 'MEDIA & UPDATES', 'homeaffairs' ); ?>
        </span>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'News, Events & Notices', 'homeaffairs' ); ?></h1>
        
    </div>

    <!-- Filter Hub & Search Bar -->
    <div id="filter-hub" class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 lg:p-5 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            
            <!-- Category Tabs -->
            <div class="flex flex-wrap items-center gap-2">
                <?php if ( ! empty( $categories ) && is_array( $categories ) ) : ?>
                    <?php foreach ( $categories as $slug => $name ) : ?>
                        <button type="button" class="news-filter-btn <?php echo 'all' === $slug ? 'active' : ''; ?> font-bold text-xs px-3.5 py-2 rounded-lg transition-all border border-gray-200 text-slate-700 hover:bg-maroon/5" data-category="<?php echo esc_attr( $slug ); ?>">
                            <?php echo esc_html( $name ); ?>
                        </button>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Year Filter & Search Bar -->
            <div class="flex items-center gap-3 w-full lg:w-auto">
                <!-- Year Dropdown -->
                <select id="news-year-filter" class="rounded-lg border border-gray-200 bg-slate-50/50 px-3 py-2 text-xs font-bold text-slate-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:bg-white focus:border-maroon">
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
                    <input type="text" id="news-search" class="w-full rounded-lg border border-gray-200 bg-slate-50/50 pl-9 pr-4 py-2 text-xs text-slate-800 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:bg-white focus:border-maroon" placeholder="<?php esc_attr_e( 'Search news & events...', 'homeaffairs' ); ?>">
                </div>
            </div>

        </div>
    </div>

    <!-- Results Count -->
    <div id="news-count" class="text-xs font-semibold text-gray-500 mb-4 px-1"></div>

    <!-- Dynamic News & Events Grid -->
    <div id="news-grid-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Generated by JavaScript -->
    </div>

    <!-- Empty State -->
    <div id="news-empty" class="hidden bg-white rounded-xl border border-gray-200 flex flex-col items-center justify-center py-12 text-gray-600">
        <i class="fa-solid fa-newspaper text-3xl text-gray-300 mb-3"></i>
        <p class="text-xs font-bold text-gray-500"><?php esc_html_e( 'No news or events match your filter criteria.', 'homeaffairs' ); ?></p>
    </div>

    <!-- Pagination -->
    <div id="news-pagination" class="flex items-center justify-center gap-1.5 pt-8 mt-4"></div>

</main>

<style>
    .news-filter-btn.active {
        background-color: var(--color-maroon, #5c1414) !important;
        color: #ffffff !important;
        border-color: var(--color-maroon, #5c1414) !important;
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
        background-color: var(--color-secondary, #d97706) !important;
        color: #ffffff !important;
        border-color: var(--color-secondary, #d97706) !important;
    }
</style>

<script>
(function() {
    var newsEvents = <?php echo $news_json; ?>;
    var filtered = [];
    var activeCategory = 'all';
    var activeYear = 'all';
    var page = 1;
    var perPage = 6;

    var gridContainer = document.getElementById('news-grid-container');
    var emptyEl = document.getElementById('news-empty');
    var countEl = document.getElementById('news-count');
    var pagEl = document.getElementById('news-pagination');
    var searchInput = document.getElementById('news-search');
    var yearSelect = document.getElementById('news-year-filter');

    function filterData() {
        var q = searchInput.value.toLowerCase().trim();
        filtered = [];

        newsEvents.forEach(function(item) {
            if (activeCategory !== 'all' && item.cat_slug !== activeCategory) return;
            if (activeYear !== 'all' && item.year !== activeYear) return;
            if (q !== '' && item.title.toLowerCase().indexOf(q) === -1 && item.summary.toLowerCase().indexOf(q) === -1) return;
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
            gridContainer.innerHTML = '';
            emptyEl.classList.remove('hidden');
            countEl.textContent = '';
            pagEl.innerHTML = '';
            return;
        }

        emptyEl.classList.add('hidden');
        countEl.textContent = 'Showing ' + (start + 1) + '–' + end + ' of ' + total + ' updates found';

        var html = '';
        pageData.forEach(function(item) {
            html += '<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-all flex flex-col justify-between group">'
                + '<div class="p-5">'
                    + '<div class="flex items-center justify-between gap-2 mb-3">'
                        + '<span class="inline-block text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-amber-50 text-amber-800 border border-amber-200">' + item.category + '</span>'
                        + '<span class="text-[11px] font-semibold text-gray-600"><i class="fa-regular fa-calendar-days mr-1"></i>' + item.display_date + '</span>'
                    + '</div>'
                    + '<a href="' + item.url + '" class="font-extrabold text-slate-900 group-hover:text-maroon transition-colors leading-snug block text-base mb-2">' + item.title + '</a>'
                    + '<p class="text-xs text-gray-500 leading-relaxed line-clamp-3 mb-4">' + item.summary + '</p>'
                + '</div>'
                + '<div class="px-5 py-3.5 bg-slate-50 border-t border-gray-100 flex items-center justify-between text-xs">'
                    + '<span class="text-gray-600 text-[11px] font-medium"><i class="fa-solid fa-location-dot mr-1"></i>' + item.location + '</span>'
                    + '<a href="' + item.url + '" class="font-black text-maroon hover:underline inline-flex items-center gap-1 text-[11px]">'
                        + 'Read More <i class="fa-solid fa-arrow-right text-[10px]"></i>'
                    + '</a>'
                + '</div>'
            + '</div>';
        });
        gridContainer.innerHTML = html;

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

    document.querySelectorAll('.news-filter-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.news-filter-btn').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            activeCategory = this.getAttribute('data-category');
            filterData();
        });
    });

    filterData();
})();
</script>

<?php get_footer(); ?>