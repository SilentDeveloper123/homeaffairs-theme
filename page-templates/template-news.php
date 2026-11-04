<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Media & Publications Hub (3-in-1)
 * Description: Combined Portal for News & Events, Media Center, and Special Notices.
 */

get_header();

get_template_part( 'template-parts/page-banner' );

// -----------------------------------------------------------------------------
// 1. DATA PREPARATION FOR NEWS & EVENTS
// -----------------------------------------------------------------------------
$news_items = [
    [
        'id'        => 1,
        'type'      => 'news',
        'title'     => 'Ministry Launches New Digital Governance Platform',
        'date'      => '2026-08-15',
        'excerpt'   => 'A major step towards digitizing public services across all divisional secretariats island-wide.',
        'image'     => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80',
        'link'      => '#',
        'category'  => 'Digital Strategy'
    ],
    [
        'id'        => 2,
        'type'      => 'event',
        'title'     => 'Annual Civil Security & Community Welfare Symposium',
        'date'      => '2026-09-02',
        'location'  => 'BMICH, Colombo',
        'excerpt'   => 'Gathering stakeholders to discuss community safety and regional administrative enhancements.',
        'image'     => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=600&q=80',
        'link'      => '#',
        'category'  => 'Conferences'
    ],
    [
        'id'        => 3,
        'type'      => 'news',
        'title'     => 'Disaster Relief Distribution Program Completed in Southern Province',
        'date'      => '2026-08-10',
        'excerpt'   => 'Over 10,000 families supported under the revised emergency relief distribution scheme.',
        'image'     => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=600&q=80',
        'link'      => '#',
        'category'  => 'Relief Work'
    ],
    [
        'id'        => 4,
        'type'      => 'event',
        'title'     => 'Public Consultation on Divisional Secretariat Service Upgrades',
        'date'      => '2026-09-18',
        'location'  => 'Kandy District Secretariat',
        'excerpt'   => 'Open session for public feedback on improving frontline administrative workflows.',
        'image'     => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=600&q=80',
        'link'      => '#',
        'category'  => 'Public Forums'
    ],
    [
        'id'        => 5,
        'type'      => 'news',
        'title'     => 'Signing of MoU for Smart District Administration Framework',
        'date'      => '2026-07-28',
        'excerpt'   => 'Strategic partnership aimed at modernizing regional infrastructure and IT integration.',
        'image'     => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=600&q=80',
        'link'      => '#',
        'category'  => 'MoU Signing'
    ],
    [
        'id'        => 6,
        'type'      => 'event',
        'title'     => 'National Grama Niladhari Capacity Building Workshop',
        'date'      => '2026-10-05',
        'location'  => 'SLIDA Auditorium, Colombo',
        'excerpt'   => 'Intensive training for field officers on digital service delivery and record management.',
        'image'     => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80',
        'link'      => '#',
        'category'  => 'Training'
    ]
];
$news_json = json_encode( $news_items );


// -----------------------------------------------------------------------------
// 2. DATA PREPARATION FOR MEDIA CENTER
// -----------------------------------------------------------------------------
$media_albums = [
    [
        'title'  => '78th Independence Day Celebration & Parade',
        'date'   => '2026-02-04',
        'count'  => 6,
        'url'    => '#',
        'cover'  => get_template_directory_uri() . '/assets/images/gallery/independance/6.jpeg',
        'images' => [
            get_template_directory_uri() . '/assets/images/gallery/independance/6.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/independance/1.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/independance/2.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/independance/3.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/independance/4.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/independance/5.jpeg',
        ],
    ],
    [
        'title'  => 'Digital Signature Initiative & Smart Governance Launch',
        'date'   => '2026-01-15',
        'count'  => 3,
        'url'    => '#',
        'cover'  => get_template_directory_uri() . '/assets/images/gallery/digital_signature/1.jpeg',
        'images' => [
            get_template_directory_uri() . '/assets/images/gallery/digital_signature/1.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/digital_signature/2.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/digital_signature/3.jpeg',
        ],
    ],
    [
        'title'  => 'National Public Service Excellence Awards',
        'date'   => '2025-12-10',
        'count'  => 4,
        'url'    => '#',
        'cover'  => get_template_directory_uri() . '/assets/images/gallery/awords/4.jpeg',
        'images' => [
            get_template_directory_uri() . '/assets/images/gallery/awords/4.jpeg',
            get_template_directory_uri() . '/assets/images/gallery/awords/1.png',
            get_template_directory_uri() . '/assets/images/gallery/awords/2.png',
            get_template_directory_uri() . '/assets/images/gallery/awords/3.png',
        ],
    ],
    [
        'title'  => 'Staff Training & Grassroots Capacity Building Workshop',
        'date'   => '2025-11-05',
        'count'  => 5,
        'url'    => '#',
        'cover'  => get_template_directory_uri() . '/assets/images/gallery/workshop/1.png',
        'images' => [
            get_template_directory_uri() . '/assets/images/gallery/workshop/1.png',
            get_template_directory_uri() . '/assets/images/gallery/workshop/2.png',
            get_template_directory_uri() . '/assets/images/gallery/workshop/3.png',
            get_template_directory_uri() . '/assets/images/gallery/workshop/4.png',
            get_template_directory_uri() . '/assets/images/gallery/workshop/5.png',
        ],
    ],
    [
        'title'  => 'Disaster Relief Coordination & Emergency Preparedness',
        'date'   => '2025-09-20',
        'count'  => 4,
        'url'    => '#',
        'cover'  => get_template_directory_uri() . '/assets/images/news/1.jpg',
        'images' => [
            get_template_directory_uri() . '/assets/images/news/1.jpg',
            get_template_directory_uri() . '/assets/images/hero-bg-2.jpg',
            get_template_directory_uri() . '/assets/images/hero-bg-3.jpg',
            get_template_directory_uri() . '/assets/images/gallery/independance/3.jpeg',
        ],
    ],
    [
        'title'  => 'Provincial Administration Strategic Conference',
        'date'   => '2025-08-12',
        'count'  => 4,
        'url'    => '#',
        'cover'  => get_template_directory_uri() . '/assets/images/news/2.jpg',
        'images' => [
            get_template_directory_uri() . '/assets/images/news/2.jpg',
            get_template_directory_uri() . '/assets/images/hero-bg-4.jpg',
            get_template_directory_uri() . '/assets/images/hero-bg-1.jpg',
            get_template_directory_uri() . '/assets/images/gallery/workshop/2.png',
        ],
    ],
];

$media_videos = [
    [
        'title'     => 'Ministry Annual Progress Review & Strategic Plan 2026–2030',
        'date'      => '2026-07-18',
        'duration'  => '14:20',
        'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'thumb'     => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'title'     => 'Documentary: Modernizing Frontline Public Services',
        'date'      => '2026-07-02',
        'duration'  => '08:45',
        'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'thumb'     => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'title'     => 'Press Conference: Implementation of Digital Identity Verification',
        'date'      => '2026-06-20',
        'duration'  => '22:10',
        'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'thumb'     => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'title'     => 'Special Address by the Hon. Minister on Civil Reforms',
        'date'      => '2026-05-12',
        'duration'  => '18:05',
        'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'thumb'     => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=600&q=80',
    ],
];


// -----------------------------------------------------------------------------
// 3. DATA PREPARATION FOR SPECIAL NOTICES
// -----------------------------------------------------------------------------
$notices = [
    [ 'title' => 'Revision of Grama Niladhari Service Conditions — 2026',                 'ref' => 'MOHA/2026/SN/01', 'category' => 'policy',  'publish_date' => '2026-07-18', 'notice_url' => '/wp-content/uploads/notices/2026/sn01-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn01-schedule.pdf' ],
    [ 'title' => 'Application Call for Development Officer Recruitment 2026',            'ref' => 'MOHA/2026/SN/02', 'category' => 'urgent', 'publish_date' => '2026-07-15', 'notice_url' => '/wp-content/uploads/notices/2026/sn02-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn02-application.pdf' ],
    [ 'title' => 'Closure of Ministry Offices for Public Holiday — July 2026',           'ref' => 'MOHA/2026/SN/03', 'category' => 'general', 'publish_date' => '2026-07-12', 'notice_url' => '/wp-content/uploads/notices/2026/sn03-notice.pdf',   'attachment_url' => '' ],
    [ 'title' => 'Establishment Circular 05/2026 — Revised Leave Code Implementation',   'ref' => 'MOHA/2026/SN/04', 'category' => 'policy',  'publish_date' => '2026-07-10', 'notice_url' => '/wp-content/uploads/notices/2026/sn04-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn04-circular.pdf' ],
    [ 'title' => 'Press Release — National Anti-Drug Campaign Progress Report',          'ref' => 'MOHA/2026/SN/05', 'category' => 'press',   'publish_date' => '2026-07-08', 'notice_url' => '/wp-content/uploads/notices/2026/sn05-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn05-report.pdf' ],
    [ 'title' => 'Urgent — Temporary Transfer of Divisional Secretaries (Western Province)', 'ref' => 'MOHA/2026/SN/06', 'category' => 'urgent', 'publish_date' => '2026-07-05', 'notice_url' => '/wp-content/uploads/notices/2026/sn06-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn06-order.pdf' ],
    [ 'title' => 'New Guidelines for Circuit Bungalow Booking Procedure',                'ref' => 'MOHA/2026/SN/07', 'category' => 'policy',  'publish_date' => '2026-07-01', 'notice_url' => '/wp-content/uploads/notices/2026/sn07-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn07-guidelines.pdf' ],
    [ 'title' => 'General Notice — Maintenance of Service Records for Pension Eligibility','ref' => 'MOHA/2026/SN/08', 'category' => 'general', 'publish_date' => '2026-06-28', 'notice_url' => '/wp-content/uploads/notices/2026/sn08-notice.pdf',   'attachment_url' => '' ],
    [ 'title' => 'Press Release — Digital Signature Rollout Completion',                 'ref' => 'MOHA/2026/SN/09', 'category' => 'press',   'publish_date' => '2026-06-25', 'notice_url' => '/wp-content/uploads/notices/2026/sn09-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn09-media.pdf' ],
    [ 'title' => 'Urgent — Extension of Application Deadline for Management Assistant Recruitment','ref' => 'MOHA/2026/SN/10', 'category' => 'urgent', 'publish_date' => '2026-06-22', 'notice_url' => '/wp-content/uploads/notices/2026/sn10-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn10-addendum.pdf' ],
    [ 'title' => 'Policy Update — Revised Procurement Thresholds for Divisional Secretariats', 'ref' => 'MOHA/2026/SN/11', 'category' => 'policy',  'publish_date' => '2026-06-20', 'notice_url' => '/wp-content/uploads/notices/2026/sn11-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn11-procurement-guide.pdf' ],
    [ 'title' => 'General Notice — Annual Stock Verification Schedule 2026',             'ref' => 'MOHA/2026/SN/12', 'category' => 'general', 'publish_date' => '2026-06-18', 'notice_url' => '/wp-content/uploads/notices/2026/sn12-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn12-stock-form.pdf' ],
    [ 'title' => 'Press Release — Ministry Wins eGovernance Excellence Award 2026',      'ref' => 'MOHA/2026/SN/13', 'category' => 'press',   'publish_date' => '2026-06-15', 'notice_url' => '/wp-content/uploads/notices/2026/sn13-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn13-award.pdf' ],
    [ 'title' => 'Urgent — Flood Relief Coordination Centres Activation Notice',          'ref' => 'MOHA/2026/SN/14', 'category' => 'urgent', 'publish_date' => '2026-06-12', 'notice_url' => '/wp-content/uploads/notices/2026/sn14-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn14-relief-plan.pdf' ],
    [ 'title' => 'General Notice — Office Timings During Ramadan 2026',                  'ref' => 'MOHA/2026/SN/15', 'category' => 'general', 'publish_date' => '2026-06-10', 'notice_url' => '/wp-content/uploads/notices/2026/sn15-notice.pdf',   'attachment_url' => '' ],
    [ 'title' => 'Policy Update — Revised Code of Conduct for Public Officers',          'ref' => 'MOHA/2026/SN/16', 'category' => 'policy',  'publish_date' => '2026-06-08', 'notice_url' => '/wp-content/uploads/notices/2026/sn16-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn16-conduct.pdf' ],
];
$notices_json = json_encode( $notices );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

    <!-- MASTER TAB NAVIGATION -->
    <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-4 mb-10 pb-4 border-b border-gray-200">
        <button type="button" class="hub-tab-btn active" data-tab="tab-news">
            <i class="fas fa-newspaper mr-2"></i> News & Events
        </button>
        <button type="button" class="hub-tab-btn" data-tab="tab-media">
            <i class="fas fa-photo-video mr-2"></i> Media Center
        </button>
        <button type="button" class="hub-tab-btn" data-tab="tab-notices">
            <i class="fas fa-bullhorn mr-2"></i> Special Notices
        </button>
    </div>

    <!-- =================================================================== -->
    <!-- TAB 1: NEWS & EVENTS PORTAL                                         -->
    <!-- =================================================================== -->
    <div id="tab-news" class="hub-tab-content active">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
                <?php esc_html_e( 'UPDATES & HAPPENINGS', 'homeaffairs' ); ?>
            </span>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker">News & Events Portal</h1>
        </div>

        <div class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300">
            <div class="flex flex-wrap items-center gap-2 mb-5">
                <button type="button" class="ne-filter-btn active" data-filter="all">All Items</button>
                <button type="button" class="ne-filter-btn" data-filter="news">Latest News</button>
                <button type="button" class="ne-filter-btn" data-filter="event">Upcoming Events</button>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
                <div class="w-full flex-1 relative">
                    <label for="ne-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Search News & Events</label>
                    <div class="relative">
                        <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
                        <input type="text" id="ne-search" class="ne-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="Search by title, keyword, or location...">
                    </div>
                </div>
                <button type="button" id="ne-clear" class="flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-primary-darker transition-all duration-200 whitespace-nowrap">
                    <i class="fas fa-times text-xs"></i> Reset
                </button>
            </div>
        </div>

        <div id="ne-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8"></div>

        <div id="ne-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
            <div class="w-20 h-20 bg-primary-darker/5 rounded-2xl flex items-center justify-center mb-5">
                <i class="fas fa-newspaper text-3xl text-primary-darker"></i>
            </div>
            <p class="text-base font-medium text-gray-700">No news or events match your criteria.</p>
            <p class="text-sm text-gray-500 mt-1">Try resetting the search or selecting a different category.</p>
        </div>
    </div>

    <!-- =================================================================== -->
    <!-- TAB 2: MEDIA CENTER HUB                                             -->
    <!-- =================================================================== -->
    <div id="tab-media" class="hub-tab-content">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
                <?php esc_html_e( 'GALLERY & MEDIA', 'homeaffairs' ); ?>
            </span>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker">Media Center</h1>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-2 mb-10 flex justify-center max-w-md mx-auto">
            <button type="button" class="mc-subtab-btn active w-1/2 py-2.5 text-sm font-bold rounded-xl transition-all" data-subtab="photos">
                <i class="fas fa-images mr-2"></i> Photo Albums
            </button>
            <button type="button" class="mc-subtab-btn w-1/2 py-2.5 text-sm font-bold rounded-xl transition-all text-gray-500" data-subtab="videos">
                <i class="fas fa-video mr-2"></i> Video Gallery
            </button>
        </div>

        <!-- Photos Section -->
        <div id="mc-photos-sec">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ( $media_albums as $album ) : ?>
                    <div class="mc-album-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group flex flex-col cursor-pointer" data-album="<?php echo esc_attr( json_encode( $album ) ); ?>">
                        <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                            <img loading="lazy" decoding="async" src="<?php echo esc_url( $album['cover'] ); ?>" alt="<?php echo esc_attr( $album['title'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 right-3 bg-black/70 text-white text-xs font-semibold px-2.5 py-1 rounded-full backdrop-blur-md">
                                <i class="fas fa-camera mr-1 text-secondary"></i> <?php echo esc_html( $album['count'] ); ?> Photos
                            </span>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs text-gray-600 font-medium block mb-1">
                                    <i class="far fa-calendar-alt text-secondary mr-1"></i> <?php echo esc_html( date( 'M d, Y', strtotime( $album['date'] ) ) ); ?>
                                </span>
                                <h3 class="text-base font-bold text-gray-800 line-clamp-2 group-hover:text-primary-darker transition-colors">
                                    <?php echo esc_html( $album['title'] ); ?>
                                </h3>
                            </div>
                            <button type="button" class="mt-4 inline-flex items-center text-xs font-bold text-primary-darker group-hover:text-secondary transition-colors text-left bg-transparent border-0 p-0 cursor-pointer">
                                View Gallery <i class="fas fa-arrow-right ml-1.5 transition-transform group-hover:translate-x-1"></i>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Videos Section -->
        <div id="mc-videos-sec" class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <?php foreach ( $media_videos as $vid ) : ?>
                    <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                        <div class="relative aspect-video bg-black group">
                            <img loading="lazy" decoding="async" src="<?php echo esc_url( $vid['thumb'] ); ?>" alt="<?php echo esc_attr( $vid['title'] ); ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-60 transition-opacity">
                            <button type="button" class="mc-play-btn absolute inset-0 m-auto w-14 h-14 rounded-full bg-secondary text-primary-darker flex items-center justify-center text-xl shadow-lg hover:scale-110 transition-transform" data-video="<?php echo esc_url( $vid['video_url'] ); ?>">
                                <i class="fas fa-play ml-1"></i>
                            </button>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-xs px-2 py-0.5 rounded font-mono">
                                <?php echo esc_html( $vid['duration'] ); ?>
                            </span>
                        </div>
                        <div class="p-5">
                            <span class="text-xs text-gray-600 font-medium block mb-1">
                                <i class="far fa-calendar-alt text-secondary mr-1"></i> <?php echo esc_html( date( 'M d, Y', strtotime( $vid['date'] ) ) ); ?>
                            </span>
                            <h3 class="text-base font-bold text-gray-800"><?php echo esc_html( $vid['title'] ); ?></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- =================================================================== -->
    <!-- TAB 3: SPECIAL NOTICES PORTAL                                       -->
    <!-- =================================================================== -->
    <div id="tab-notices" class="hub-tab-content">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
                <?php esc_html_e( 'PUBLICATIONS & ANNOUNCEMENTS', 'homeaffairs' ); ?>
            </span>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker">Special Notices & Announcements</h1>
        </div>

        <div id="sn-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300">
            <div class="flex flex-wrap items-center gap-2 mb-5">
                <button type="button" class="sn-type-btn active" data-category="all">All Notices</button>
                <button type="button" class="sn-type-btn" data-category="urgent">Urgent Announcements</button>
                <button type="button" class="sn-type-btn" data-category="general">General Notices</button>
                <button type="button" class="sn-type-btn" data-category="policy">Policy Updates</button>
                <button type="button" class="sn-type-btn" data-category="press">Press Releases</button>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
                <div class="w-full flex-1 relative">
                    <label for="sn-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Search by Notice Title or Reference</label>
                    <div class="relative">
                        <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
                        <input type="text" id="sn-search" class="sn-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="e.g. MOHA/2026/SN/01, policy, urgent...">
                    </div>
                </div>
                <button type="button" id="sn-clear" class="flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-primary-darker transition-all duration-200 whitespace-nowrap">
                    <i class="fas fa-times text-xs"></i> Reset
                </button>
            </div>
        </div>

        <div class="overflow-x-auto -mx-4 sm:mx-0">
            <table id="sn-table" class="sn-table w-full text-left">
                <thead class="sn-thead">
                    <tr>
                        <th class="sn-th" style="min-width:260px;">Notice Title & Reference</th>
                        <th class="sn-th">Category</th>
                        <th class="sn-th" style="min-width:170px;">Publication Date & Status</th>
                        <th class="sn-th" style="min-width:220px;">Resource Actions / Downloads</th>
                    </tr>
                </thead>
                <tbody id="sn-body"></tbody>
            </table>
        </div>

        <div id="sn-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
            <div class="w-20 h-20 bg-primary-darker/5 rounded-2xl flex items-center justify-center mb-5">
                <i class="fas fa-bullhorn text-3xl text-primary-darker"></i>
            </div>
            <p class="text-base font-medium text-gray-700">No notices match your current criteria.</p>
            <p class="text-sm text-gray-500 mt-1">Please adjust the category or search term above.</p>
        </div>
    </div>

</main>

<!-- VIDEO MODAL -->
<div id="mc-video-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="relative w-full max-w-4xl bg-black rounded-2xl overflow-hidden shadow-2xl">
        <button type="button" id="mc-modal-close" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center hover:bg-white/40 transition-colors">
            <i class="fas fa-times"></i>
        </button>
        <div class="aspect-video w-full">
            <iframe id="mc-modal-iframe" class="w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- PHOTO ALBUM LIGHTBOX MODAL -->
<div id="mc-photo-lightbox" class="fixed inset-0 z-50 bg-black/95 backdrop-blur-md hidden flex flex-col justify-between p-4 sm:p-6 transition-all duration-300">
    <!-- Top Navigation Header -->
    <div class="flex items-center justify-between text-white z-20 w-full max-w-6xl mx-auto pt-2">
        <div class="space-y-0.5">
            <h4 id="mc-lb-title" class="text-sm sm:text-base font-bold text-white tracking-wide truncate max-w-lg"></h4>
            <span id="mc-lb-counter" class="text-xs font-semibold text-secondary block">1 / 1</span>
        </div>
        <button type="button" id="mc-lb-close" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary cursor-pointer" aria-label="Close Lightbox">
            <i class="fas fa-times text-base"></i>
        </button>
    </div>

    <!-- Image Display & Nav Buttons -->
    <div class="relative flex-1 flex items-center justify-center my-3 w-full max-w-6xl mx-auto">
        <button type="button" id="mc-lb-prev" class="absolute left-2 sm:left-4 z-20 w-11 h-11 bg-black/60 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary cursor-pointer" aria-label="Previous Photo">
            <i class="fas fa-chevron-left text-base"></i>
        </button>
        <div class="max-w-5xl max-h-[75vh] overflow-hidden rounded-2xl shadow-2xl flex items-center justify-center">
            <img id="mc-lb-img" class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl transition-all duration-300" src="" alt="Album Photo">
        </div>
        <button type="button" id="mc-lb-next" class="absolute right-2 sm:right-4 z-20 w-11 h-11 bg-black/60 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary cursor-pointer" aria-label="Next Photo">
            <i class="fas fa-chevron-right text-base"></i>
        </button>
    </div>

    <!-- Bottom Help Notice -->
    <div class="text-center text-xs text-white/50 z-20 pb-2">
        <span>Use left/right arrow keys or click arrows to view photos. Press Esc to close.</span>
    </div>
</div>
</div>

<style>
/* MASTER TAB NAVIGATION STYLES */
.hub-tab-btn {
    padding: 0.75rem 1.5rem;
    font-size: 0.95rem;
    font-weight: 700;
    border-radius: 9999px;
    border: 2px solid #e5e7eb;
    background-color: #ffffff;
    color: #4b5563;
    transition: all 0.3s ease;
    cursor: pointer;
}
.hub-tab-btn:hover {
    border-color: var(--color-secondary);
    color: var(--color-primary-darker);
}
.hub-tab-btn.active {
    background-color: var(--color-primary-darker);
    border-color: var(--color-primary-darker);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.hub-tab-content {
    display: none;
}
.hub-tab-content.active {
    display: block;
    animation: fadeIn 0.4s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(6px); }
    to { opacity: 1; transform: translateY(0); }
}

/* NEWS & EVENTS STYLES */
.ne-filter-btn {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 9999px;
    border: 1px solid #e5e7eb;
    background-color: #f9fafb;
    color: #4b5563;
    transition: all 0.2s ease;
}
.ne-filter-btn:hover {
    border-color: var(--color-secondary);
    color: var(--color-primary-darker);
}
.ne-filter-btn.active {
    background-color: var(--color-primary-darker);
    border-color: var(--color-primary-darker);
    color: #ffffff;
}

.ne-search-input:focus {
    border-color: var(--color-primary-darker) !important;
    box-shadow: 0 0 0 2px var(--color-primary-darker-tint-10);
}

.ne-card-badge {
    position: absolute;
    top: 0.75rem;
    left: 0.75rem;
    padding: 0.25rem 0.625rem;
    border-radius: 9999px;
    font-size: 0.6875rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}
.ne-card-badge-news { background-color: var(--color-primary-darker); color: #ffffff; }
.ne-card-badge-event { background-color: var(--color-secondary); color: var(--color-primary-darker); }

/* MEDIA CENTER SUBTAB STYLES */
.mc-subtab-btn.active {
    background-color: var(--color-primary-darker);
    color: #ffffff;
}

/* SPECIAL NOTICES STYLES */
.sn-type-btn {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 9999px;
    border: 1px solid #e5e7eb;
    background-color: #f9fafb;
    color: #4b5563;
    transition: all 0.2s ease;
}
.sn-type-btn:hover {
    border-color: var(--color-secondary);
    color: var(--color-primary-darker);
}
.sn-type-btn.active {
    background-color: var(--color-primary-darker);
    border-color: var(--color-primary-darker);
    color: #ffffff;
}

.sn-search-input:focus {
    border-color: var(--color-primary-darker) !important;
    box-shadow: 0 0 0 2px var(--color-primary-darker-tint-10);
}

.sn-thead {
    background-color: var(--color-primary-darker);
    color: #ffffff;
}
.sn-th {
    padding: 1rem 1.25rem;
    font-size: 0.8125rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}
.sn-th:first-child { border-top-left-radius: 0.75rem; }
.sn-th:last-child { border-top-right-radius: 0.75rem; }

.sn-row {
    border-bottom: 1px solid #f3f4f6;
    transition: background-color 0.15s ease;
}
.sn-row-even { background-color: #ffffff; }
.sn-row-odd { background-color: #fcfbf9; }
.sn-row:hover { background-color: #fcf8f6; }

.sn-td {
    padding: 1.25rem;
    font-size: 0.875rem;
    color: #374151;
    vertical-align: middle;
}

.sn-title {
    display: block;
    font-size: 0.95rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 0.25rem;
}

.sn-cat-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.375rem;
    padding: 0.35rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 600;
    white-space: nowrap;
}
.sn-cat-badge-urgent { background-color: rgba(239, 68, 68, 0.1); color: #dc2626; }
.sn-cat-badge-general { background-color: rgba(59, 130, 246, 0.1); color: #1d4ed8; }
.sn-cat-badge-policy { background-color: var(--color-secondary-tint-strong); color: var(--color-gold-dark); }
.sn-cat-badge-press { background-color: rgba(16, 185, 129, 0.1); color: #047857; }

.sn-date {
    display: flex;
    flex-direction: column;
    gap: 0.375rem;
}
.sn-date-text {
    font-size: 0.85rem;
    font-weight: 600;
    color: #1f2937;
}

.sn-new-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    font-size: 0.65rem;
    font-weight: 700;
    background-color: #ef4444;
    color: #ffffff;
    padding: 0.1rem 0.4rem;
    border-radius: 4px;
    width: fit-content;
    text-transform: uppercase;
}

.sn-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
}

.sn-btn {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px !important;
    padding: 7px 12px !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    border-radius: 6px !important;
    transition: all 0.2s ease !important;
    text-decoration: none !important;
    white-space: nowrap !important;
}

.sn-btn-primary {
    background: linear-gradient(135deg, var(--color-primary-darker) 0%, var(--color-maroon-black)) !important;
    color: #ffffff !important;
    border: 1px solid var(--color-primary-darker) !important;
}
.sn-btn-primary i { color: var(--color-secondary) !important; }
.sn-btn-primary:hover {
    background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-gold-deep)) !important;
    color: var(--color-primary-darker) !important;
}
.sn-btn-primary:hover i { color: var(--color-primary-darker) !important; }

.sn-btn-outline {
    background-color: #f9fafb !important;
    color: #374151 !important;
    border: 1px solid #e5e7eb !important;
}
.sn-btn-outline i { color: var(--color-primary-darker) !important; }
.sn-btn-outline:hover {
    background-color: var(--color-primary-darker) !important;
    color: #ffffff !important;
}
.sn-btn-outline:hover i { color: var(--color-secondary) !important; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // -------------------------------------------------------------------------
    // MASTER TABS CONTROLLER
    // -------------------------------------------------------------------------
    var masterTabBtns = document.querySelectorAll('.hub-tab-btn');
    var masterTabContents = document.querySelectorAll('.hub-tab-content');

    masterTabBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var targetTab = this.getAttribute('data-tab');

            masterTabBtns.forEach(function(b) { b.classList.remove('active'); });
            masterTabContents.forEach(function(c) { c.classList.remove('active'); });

            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });


    // -------------------------------------------------------------------------
    // 1. NEWS & EVENTS LOGIC
    // -------------------------------------------------------------------------
    (function() {
        var neData = <?php echo $news_json; ?>;
        var neFiltered = [];
        var neFilter = 'all';

        var filterBtns = document.querySelectorAll('.ne-filter-btn');
        var searchInput = document.getElementById('ne-search');
        var clearBtn = document.getElementById('ne-clear');
        var grid = document.getElementById('ne-grid');
        var emptyEl = document.getElementById('ne-empty');

        function formatDate(iso) {
            var d = new Date(iso + 'T00:00:00');
            var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
            return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
        }

        function filterNeData() {
            var q = searchInput.value.toLowerCase().trim();
            neFiltered = neData.filter(function(item) {
                if (neFilter !== 'all' && item.type !== neFilter) return false;
                if (q !== '') {
                    var t = item.title.toLowerCase();
                    var e = item.excerpt.toLowerCase();
                    var c = item.category.toLowerCase();
                    var l = (item.location || '').toLowerCase();
                    if (t.indexOf(q) === -1 && e.indexOf(q) === -1 && c.indexOf(q) === -1 && l.indexOf(q) === -1) {
                        return false;
                    }
                }
                return true;
            });
            renderNe();
        }

        function renderNe() {
            if (neFiltered.length === 0) {
                grid.innerHTML = '';
                emptyEl.classList.remove('hidden');
                return;
            }
            emptyEl.classList.add('hidden');

            var html = '';
            neFiltered.forEach(function(item) {
                var isEvent = item.type === 'event';
                var badgeText = isEvent ? 'Event' : 'News';
                var badgeClass = isEvent ? 'ne-card-badge-event' : 'ne-card-badge-news';

                html += '<div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col group">';
                html += '<div class="relative aspect-[16/9] overflow-hidden bg-gray-100">';
                html += '<img loading="lazy" decoding="async" src="' + item.image + '" alt="' + item.title + '" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">';
                html += '<span class="ne-card-badge ' + badgeClass + '">' + badgeText + '</span>';
                html += '</div>';

                html += '<div class="p-5 flex-1 flex flex-col justify-between">';
                html += '<div>';
                html += '<div class="flex items-center gap-3 text-xs text-gray-600 mb-2">';
                html += '<span><i class="far fa-calendar-alt text-secondary mr-1"></i>' + formatDate(item.date) + '</span>';
                if (isEvent && item.location) {
                    html += '<span><i class="fas fa-map-marker-alt text-secondary mr-1"></i>' + item.location + '</span>';
                }
                html += '</div>';

                html += '<h3 class="text-base font-bold text-gray-800 line-clamp-2 mb-2 group-hover:text-primary-darker transition-colors">' + item.title + '</h3>';
                html += '<p class="text-xs text-gray-500 line-clamp-3 leading-relaxed">' + item.excerpt + '</p>';
                html += '</div>';

                html += '<div class="mt-4 pt-3 border-t border-gray-50 flex items-center justify-between">';
                html += '<span class="text-[11px] font-semibold text-gray-600 uppercase tracking-wider">' + item.category + '</span>';
                html += '<a href="' + item.link + '" class="text-xs font-bold text-primary-darker group-hover:text-secondary transition-colors">Read More <i class="fas fa-arrow-right ml-1"></i></a>';
                html += '</div>';

                html += '</div></div>';
            });
            grid.innerHTML = html;
        }

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                filterBtns.forEach(function(b) { b.classList.remove('active'); });
                this.classList.add('active');
                neFilter = this.getAttribute('data-filter');
                filterNeData();
            });
        });

        searchInput.addEventListener('input', filterNeData);
        clearBtn.addEventListener('click', function() {
            filterBtns.forEach(function(b) { b.classList.remove('active'); });
            document.querySelector('.ne-filter-btn[data-filter="all"]').classList.add('active');
            neFilter = 'all';
            searchInput.value = '';
            filterNeData();
        });

        filterNeData();
    })();


    // -------------------------------------------------------------------------
    // 2. MEDIA CENTER LOGIC
    // -------------------------------------------------------------------------
    (function() {
        var subtabBtns = document.querySelectorAll('.mc-subtab-btn');
        var photosSec = document.getElementById('mc-photos-sec');
        var videosSec = document.getElementById('mc-videos-sec');

        subtabBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var target = this.getAttribute('data-subtab');
                subtabBtns.forEach(function(b) {
                    b.classList.remove('active');
                    b.classList.add('text-gray-500');
                });
                this.classList.add('active');
                this.classList.remove('text-gray-500');

                if (target === 'photos') {
                    photosSec.classList.remove('hidden');
                    videosSec.classList.add('hidden');
                } else {
                    photosSec.classList.add('hidden');
                    videosSec.classList.remove('hidden');
                }
            });
        });

        // Video Modal
        var modal = document.getElementById('mc-video-modal');
        var iframe = document.getElementById('mc-modal-iframe');
        var playBtns = document.querySelectorAll('.mc-play-btn');
        var closeBtn = document.getElementById('mc-modal-close');

        playBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var url = this.getAttribute('data-video');
                iframe.src = url + '?autoplay=1';
                modal.classList.remove('hidden');
            });
        });

        function closeModal() {
            modal.classList.add('hidden');
            iframe.src = '';
        }

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) closeModal();
            });
        }
    })();


    // -------------------------------------------------------------------------
    // 3. SPECIAL NOTICES LOGIC
    // -------------------------------------------------------------------------
    (function() {
        var snData = <?php echo $notices_json; ?>;
        var snFiltered = [];
        var snActiveCat = 'all';

        var typeBtns = document.querySelectorAll('.sn-type-btn');
        var searchInput = document.getElementById('sn-search');
        var clearBtn = document.getElementById('sn-clear');
        var tbody = document.getElementById('sn-body');
        var emptyEl = document.getElementById('sn-empty');

        var catIcons = { urgent: 'fa-exclamation-triangle', general: 'fa-bullhorn', policy: 'fa-file-lines', press: 'fa-newspaper' };
        var catLabels = { urgent: 'Urgent', general: 'General', policy: 'Policy', press: 'Press' };

        function formatDate(iso) {
            var d = new Date(iso + 'T00:00:00');
            var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
            var day = d.getDate();
            var suffix = 'th';
            if (day === 1 || day === 21 || day === 31) { suffix = 'st'; }
            else if (day === 2 || day === 22) { suffix = 'nd'; }
            else if (day === 3 || day === 23) { suffix = 'rd'; }
            return day + suffix + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
        }

        function daysSince(iso) {
            var now = new Date();
            now.setHours(0,0,0,0);
            var target = new Date(iso + 'T00:00:00');
            target.setHours(0,0,0,0);
            return Math.floor((now - target) / (1000 * 60 * 60 * 24));
        }

        function filterSnData() {
            var q = searchInput.value.toLowerCase().trim();
            snFiltered = snData.filter(function(item) {
                if (snActiveCat !== 'all' && item.category !== snActiveCat) return false;
                if (q !== '') {
                    var title = item.title.toLowerCase();
                    var ref = item.ref.toLowerCase();
                    var cat = item.category.toLowerCase();
                    if (title.indexOf(q) === -1 && ref.indexOf(q) === -1 && cat.indexOf(q) === -1) {
                        return false;
                    }
                }
                return true;
            });
            renderSn();
        }

        function renderSn() {
            if (snFiltered.length === 0) {
                tbody.innerHTML = '';
                emptyEl.classList.remove('hidden');
                return;
            }
            emptyEl.classList.add('hidden');

            var html = '';
            for (var i = 0; i < snFiltered.length; i++) {
                var n = snFiltered[i];
                var rowClass = (i % 2 === 0) ? 'sn-row-even' : 'sn-row-odd';
                var badgeClass = 'sn-cat-badge-' + n.category;
                var catIcon = catIcons[n.category] || 'fa-tag';
                var catLabel = catLabels[n.category] || n.category;

                var days = daysSince(n.publish_date);
                var newBadge = (days <= 7) ? '<span class="sn-new-badge"><i class="fas fa-bolt"></i> New</span>' : '';

                var attachBtn = n.attachment_url
                    ? '<a href="' + n.attachment_url + '" class="sn-btn sn-btn-primary" target="_blank"><i class="fas fa-download"></i> Attachment</a>'
                    : '<span class="sn-btn sn-btn-outline" style="opacity:0.4;cursor:default"><i class="fas fa-ban"></i> No File</span>';

                html += '<tr class="sn-row ' + rowClass + '">';
                html += '<td class="sn-td"><span class="sn-title">' + n.title + '</span><span class="text-xs text-gray-600 font-mono">' + n.ref + '</span></td>';
                html += '<td class="sn-td"><span class="sn-cat-badge ' + badgeClass + '"><i class="fas ' + catIcon + '"></i> ' + catLabel + '</span></td>';
                html += '<td class="sn-td"><div class="sn-date"><span class="sn-date-text">' + formatDate(n.publish_date) + '</span>' + newBadge + '</div></td>';
                html += '<td class="sn-td"><div class="sn-actions"><a href="' + n.notice_url + '" class="sn-btn sn-btn-outline" target="_blank"><i class="fas fa-file-alt"></i> Notice</a>' + attachBtn + '</div></td>';
                html += '</tr>';
            }
            tbody.innerHTML = html;
        }

        typeBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                typeBtns.forEach(function(b) { b.classList.remove('active'); });
                this.classList.add('active');
                snActiveCat = this.getAttribute('data-category');
                filterSnData();
            });
        });

        searchInput.addEventListener('input', filterSnData);
        clearBtn.addEventListener('click', function() {
            typeBtns.forEach(function(b) { b.classList.remove('active'); });
            document.querySelector('.sn-type-btn[data-category="all"]').classList.add('active');
            snActiveCat = 'all';
            searchInput.value = '';
            filterSnData();
        });

        filterSnData();
    })();

});
</script>

<?php get_footer(); ?>