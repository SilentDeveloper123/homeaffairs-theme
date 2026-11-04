const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const file = path.resolve(__dirname, '../page-templates/template-news.php');
let content = fs.readFileSync(file, 'utf8');

// 1. Update $media_albums to have real local images and full images array
const oldAlbumsRegex = /\$media_albums\s*=\s*\[[\s\S]*?\];\s*\$media_videos/m;

const newAlbumsCode = `$media_albums = [
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

$media_videos`;

content = content.replace(oldAlbumsRegex, newAlbumsCode);

// 2. Update album cards in mc-photos-sec to have data-album and pointer cursor
const oldCardsRegex = /<div id="mc-photos-sec">[\s\S]*?<\/div>\s*<\/div>\s*<!-- Videos Section -->/m;

const newCardsCode = `<div id="mc-photos-sec">
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

        <!-- Videos Section -->`;

content = content.replace(oldCardsRegex, newCardsCode);

// 3. Add Photo Album Lightbox modal next to mc-video-modal
const oldVideoModalRegex = /<!-- VIDEO MODAL -->[\s\S]*?<\/div>\s*<\/div>/m;

const newModalsCode = `<!-- VIDEO MODAL -->
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
</div>`;

content = content.replace(oldVideoModalRegex, newModalsCode);

// 4. Add JS photo lightbox handlers inside Section 2 (Media Center Logic)
const oldMediaJsRegex = /\/\/ 2\. MEDIA CENTER LOGIC[\s\S]*?modal\.addEventListener\('click'[\s\S]*?\}\);\s*\}\)\(\);/m;

const newMediaJsCode = `// 2. MEDIA CENTER LOGIC
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
                var embedUrl = this.getAttribute('data-embed');
                iframe.src = embedUrl;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                iframe.src = '';
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            });
        }

        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    iframe.src = '';
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        }

        // Photo Album Lightbox
        var mcLightbox = document.getElementById('mc-photo-lightbox');
        var mcLbImg = document.getElementById('mc-lb-img');
        var mcLbTitle = document.getElementById('mc-lb-title');
        var mcLbCounter = document.getElementById('mc-lb-counter');
        var mcLbClose = document.getElementById('mc-lb-close');
        var mcLbPrev = document.getElementById('mc-lb-prev');
        var mcLbNext = document.getElementById('mc-lb-next');

        var mcActiveImages = [];
        var mcActiveIndex = 0;

        function openMcLightbox(album) {
            if (!album || !album.images || !album.images.length) return;
            mcActiveImages = album.images;
            mcActiveIndex = 0;
            updateMcLightbox(album.title);
            mcLightbox.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMcLightbox() {
            if (!mcLightbox) return;
            mcLightbox.classList.add('hidden');
            if (mcLbImg) mcLbImg.src = '';
            document.body.style.overflow = '';
        }

        function updateMcLightbox(title) {
            if (!mcActiveImages.length) return;
            if (mcLbImg) mcLbImg.src = mcActiveImages[mcActiveIndex];
            if (mcLbTitle && title) mcLbTitle.textContent = title;
            if (mcLbCounter) mcLbCounter.textContent = (mcActiveIndex + 1) + ' / ' + mcActiveImages.length;
        }

        function mcPrevImage() {
            if (!mcActiveImages.length) return;
            mcActiveIndex = (mcActiveIndex - 1 + mcActiveImages.length) % mcActiveImages.length;
            updateMcLightbox();
        }

        function mcNextImage() {
            if (!mcActiveImages.length) return;
            mcActiveIndex = (mcActiveIndex + 1) % mcActiveImages.length;
            updateMcLightbox();
        }

        document.querySelectorAll('.mc-album-card').forEach(function(card) {
            card.addEventListener('click', function() {
                var raw = this.getAttribute('data-album');
                if (raw) {
                    try {
                        var album = JSON.parse(raw);
                        openMcLightbox(album);
                    } catch(e) {}
                }
            });
        });

        if (mcLbClose) mcLbClose.addEventListener('click', closeMcLightbox);
        if (mcLbPrev) mcLbPrev.addEventListener('click', mcPrevImage);
        if (mcLbNext) mcLbNext.addEventListener('click', mcNextImage);
        if (mcLightbox) {
            mcLightbox.addEventListener('click', function(e) {
                if (e.target === mcLightbox) closeMcLightbox();
            });
        }

        document.addEventListener('keydown', function(e) {
            if (mcLightbox && !mcLightbox.classList.contains('hidden')) {
                if (e.key === 'Escape') closeMcLightbox();
                if (e.key === 'ArrowLeft') mcPrevImage();
                if (e.key === 'ArrowRight') mcNextImage();
            }
        });

    })();`;

content = content.replace(oldMediaJsRegex, newMediaJsCode);

fs.writeFileSync(file, content, 'utf8');

try {
    execSync('php -l "' + file + '"', { stdio: 'pipe' });
    console.log('[OK] template-news.php updated successfully and passed php lint!');
} catch (e) {
    console.error('[FAIL] Syntax error in template-news.php:', e.stderr ? e.stderr.toString() : e.message);
}
