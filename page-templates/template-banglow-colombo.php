<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Colombo Circuit Bungalow View
 * Description: Detailed view page for Colombo Circuit Bungalow with room types, pricing, gallery slider, nearby places, and booking modal.
 */

get_header();

get_template_part( 'template-parts/page-banner' );

// Colombo Circuit Bungalow Details
$bungalow = [
    'id'          => 'colombo',
    'name'        => 'Colombo Circuit Bungalow',
    'province'    => 'Western Province',
    'location'    => 'Colombo 07',
    'address'     => 'Independence Avenue, Colombo 07',
    'tel'         => '+94 11 286 1489',
    'email'       => 'info@moha.gov.lk',
    'keeper'      => 'Caretaker Officer',
    'capacity'    => '5 Rooms (15 Guests)',
    'rate'        => 'LKR 500 - 1000 / Night',
    'description' => 'The Colombo Circuit Bungalow is located in the heart of Colombo 07, providing convenient, comfortable, and secure accommodation for government officials and public sector officers visiting the capital city.',
    'main_image'  => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80',
    'gallery'     => [
        'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1200&q=80'
    ],
    'rooms'       => [
        [
            'type'  => 'VIP Executive Suite (AC)',
            'beds'  => '1 King Bed (Max 2 Persons)',
            'rate'  => 'LKR 2,500 / Night',
            'image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'type'  => 'Deluxe Double Room (AC)',
            'beds'  => '1 Double Bed (Max 2 Persons)',
            'rate'  => 'LKR 1,800 / Night',
            'image' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'type'  => 'Family Room (AC)',
            'beds'  => '2 Double Beds (Max 4 Persons)',
            'rate'  => 'LKR 2,200 / Night',
            'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'type'  => 'Standard Officer Room (Non-AC)',
            'beds'  => '1 Single Bed (Max 1 Person)',
            'rate'  => 'LKR 1,000 / Night',
            'image' => 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&fit=crop&w=500&q=80'
        ]
    ],
    'nearby_places' => [
        [
            'title'    => 'Independence Memorial Hall',
            'distance' => '0.5 km (5 mins away)',
            'image'    => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'title'    => 'Lotus Tower & Galle Face Green',
            'distance' => '3.5 km (10 mins away)',
            'image'    => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'title'    => 'Gangaramaya Temple & Beira Lake',
            'distance' => '2.0 km (8 mins away)',
            'image'    => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=500&q=80'
        ]
    ]
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:py-10">
    
    <!-- Standardized Main Topic Header -->
    <div class="text-center max-w-3xl mx-auto mb-8">
        <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-2">
            <?php echo esc_html( $bungalow['province'] ); ?>
        </span>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-dark">
            <?php echo esc_html( $bungalow['name'] ); ?>
        </h1>
        <p class="text-xs sm:text-sm text-slate-500 mt-2 flex items-center justify-center gap-1.5">
            <i class="fas fa-map-pin text-secondary"></i> <?php echo esc_html( $bungalow['address'] ); ?>
        </p>
    </div>

    <!-- Main Layout Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        <!-- Left & Center Section -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Main Featured Image & Interactive Gallery Grid -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                <div class="relative h-72 sm:h-96 bg-slate-100 group cursor-pointer overflow-hidden" onclick="openGalleryLightbox(0)">
                    <img loading="lazy" decoding="async" id="main-display-img" src="<?php echo esc_url( $bungalow['main_image'] ); ?>" alt="<?php echo esc_attr( $bungalow['name'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-4 left-4 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-lg bg-white/90 text-primary-dark shadow-sm">
                        <?php echo esc_html( $bungalow['location'] ); ?>
                    </span>
                    <span class="absolute bottom-4 right-4 text-[11px] font-bold px-3 py-1.5 rounded-xl bg-black/60 text-white backdrop-blur-sm flex items-center gap-1.5 opacity-90 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-search-plus text-secondary"></i> Click to Zoom / View Gallery
                    </span>
                </div>

                <div class="p-6 space-y-5">
                    <h2 class="text-base font-bold text-primary-dark">Bungalow Overview</h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        <?php echo esc_html( $bungalow['description'] ); ?>
                    </p>

                    <!-- Gallery Thumbnails for Slider Lightbox -->
                    <div class="pt-2">
                        <h4 class="text-xs font-bold text-slate-700 mb-2.5 flex items-center gap-1.5">
                            <i class="fas fa-images text-secondary"></i> Photo Gallery <span class="text-slate-600 font-normal text-[11px]">(Click any image to expand)</span>
                        </h4>
                        <div class="grid grid-cols-4 gap-2.5">
                            <?php foreach ( $bungalow['gallery'] as $index => $img ) : ?>
                                <div class="h-16 sm:h-20 rounded-xl overflow-hidden border border-slate-200 bg-slate-50 cursor-pointer group/thumb relative" onclick="openGalleryLightbox(<?php echo $index; ?>)">
                                    <img loading="lazy" decoding="async" src="<?php echo esc_url( $img ); ?>" class="w-full h-full object-cover group-hover/thumb:scale-110 transition-transform duration-300">
                                    <div class="absolute inset-0 bg-black/20 group-hover/thumb:bg-transparent transition-colors"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rooms & Rates Section -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 space-y-4">
                <h3 class="font-bold text-primary-dark text-sm sm:text-base flex items-center gap-2 border-b border-slate-100 pb-3">
                    <i class="fas fa-bed text-secondary"></i> Available Rooms & Pricing
                </h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ( $bungalow['rooms'] as $room ) : ?>
                        <div class="bg-slate-50 rounded-xl border border-slate-200/60 overflow-hidden flex flex-col justify-between">
                            <a href="<?php echo esc_url( $room['image'] ); ?>" class="glightbox block h-32 bg-slate-200 overflow-hidden cursor-pointer group/room relative" data-gallery="colombo-rooms" data-title="<?php echo esc_attr( $room['type'] ); ?> - <?php echo esc_attr( $room['rate'] ); ?>">
                                <img loading="lazy" decoding="async" src="<?php echo esc_url( $room['image'] ); ?>" alt="<?php echo esc_attr( $room['type'] ); ?>" class="w-full h-full object-cover group-hover/room:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-black/0 group-hover/room:bg-black/25 flex items-center justify-center opacity-0 group-hover/room:opacity-100 transition-opacity pointer-events-none">
                                    <span class="w-8 h-8 rounded-full bg-white/90 text-primary flex items-center justify-center shadow-md">
                                        <i class="fas fa-search-plus text-xs text-secondary"></i>
                                    </span>
                                </div>
                            </a>
                            <div class="p-3.5 space-y-1.5 flex-1 flex flex-col justify-between">
                                <div>
                                    <h4 class="text-xs font-bold text-primary-dark"><?php echo esc_html( $room['type'] ); ?></h4>
                                    <p class="text-[11px] text-slate-500"><i class="fas fa-user-friends text-secondary mr-1"></i> <?php echo esc_html( $room['beds'] ); ?></p>
                                </div>
                                <div class="pt-2 border-t border-slate-200/60 flex items-center justify-between">
                                    <span class="text-[11px] font-extrabold text-secondary"><?php echo esc_html( $room['rate'] ); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Places You Can Visit Section -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 space-y-4">
                <h3 class="font-bold text-primary-dark text-sm sm:text-base flex items-center gap-2 border-b border-slate-100 pb-3">
                    <i class="fas fa-compass text-secondary"></i> Places You Can Visit Near This Bungalow
                </h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <?php foreach ( $bungalow['nearby_places'] as $place ) : ?>
                        <div class="group bg-slate-50 rounded-xl border border-slate-200/60 overflow-hidden hover:border-secondary/50 hover:shadow-md transition-all duration-300">
                            <a href="<?php echo esc_url( $place['image'] ); ?>" class="glightbox block h-28 overflow-hidden bg-slate-200 relative cursor-pointer" data-gallery="colombo-places" data-title="<?php echo esc_attr( $place['title'] ); ?> (<?php echo esc_attr( $place['distance'] ); ?>)">
                                <img loading="lazy" decoding="async" src="<?php echo esc_url( $place['image'] ); ?>" alt="<?php echo esc_attr( $place['title'] ); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                <span class="absolute bottom-2 left-2 text-[10px] font-bold text-white bg-secondary/80 px-2 py-0.5 rounded-md">
                                    <i class="fas fa-route text-[8px] mr-1"></i> <?php echo esc_html( $place['distance'] ); ?>
                                </span>
                                <span class="absolute top-2 right-2 w-7 h-7 bg-black/50 hover:bg-secondary text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-search-plus text-[10px] text-secondary group-hover:text-primary"></i>
                                </span>
                            </a>
                            <div class="p-3">
                                <h4 class="text-xs font-bold text-primary-dark line-clamp-2 leading-tight group-hover:text-secondary transition-colors">
                                    <?php echo esc_html( $place['title'] ); ?>
                                </h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!-- Right Side: Booking Actions & Contact Sidebar -->
        <div class="space-y-4 lg:sticky lg:top-6">
            
            <!-- Booking Card -->
            <div class="bg-gradient-to-br from-primary-dark via-primary-dark to-slate-900 text-white rounded-3xl shadow-xl p-6 relative overflow-hidden space-y-5">
                <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-secondary/10 rounded-full blur-2xl pointer-events-none"></div>
                
                <h3 class="font-bold text-sm sm:text-base flex items-center gap-2.5 text-white border-b border-white/10 pb-3">
                    <i class="fas fa-calendar-check text-secondary text-base"></i> Reservation & Booking
                </h3>

                <div class="space-y-3 text-xs text-slate-300">
                    <div class="flex justify-between border-b border-white/10 pb-2">
                        <span>Overall Capacity:</span>
                        <strong class="text-white"><?php echo esc_html( $bungalow['capacity'] ); ?></strong>
                    </div>
                    <div class="flex justify-between border-b border-white/10 pb-2">
                        <span>General Rate:</span>
                        <strong class="text-secondary"><?php echo esc_html( $bungalow['rate'] ); ?></strong>
                    </div>
                    <div class="flex justify-between border-b border-white/10 pb-2">
                        <span>Caretaker:</span>
                        <strong class="text-white"><?php echo esc_html( $bungalow['keeper'] ); ?></strong>
                    </div>
                    <div class="flex justify-between pb-1">
                        <span>Contact Tel:</span>
                        <strong class="text-white"><?php echo esc_html( $bungalow['tel'] ); ?></strong>
                    </div>
                </div>

                <div class="space-y-2 pt-2">
                    <!-- Book Now Button -->
                    <button type="button" onclick="openBookingModal()" class="w-full py-3 px-4 rounded-xl bg-secondary text-primary-dark font-black text-xs hover:bg-secondary-light transition-all shadow-md flex items-center justify-center gap-2">
                        <i class="fas fa-bookmark text-[11px]"></i> Check Availability & Book
                    </button>
                    
                    <!-- Download PDF Form -->
                    <a href="#" class="w-full py-2.5 px-4 rounded-xl bg-white/10 text-white hover:bg-white/20 transition-all text-xs font-bold text-center block no-underline">
                        <i class="fas fa-file-pdf mr-1.5 text-secondary"></i> Download PDF Form
                    </a>
                </div>
            </div>

            <!-- Helpdesk Box -->
            <div class="bg-white rounded-2xl border border-slate-200/80 p-4 text-xs text-slate-600 space-y-2 shadow-sm">
                <h4 class="font-bold text-primary-dark flex items-center gap-1.5">
                    <i class="fas fa-headset text-secondary"></i> Need Assistance?
                </h4>
                <p class="text-[11px] text-slate-500">For booking inquiries, official approvals, and inquiries regarding <?php echo esc_html( $bungalow['name'] ); ?>.</p>
                <p class="text-[11px] font-semibold text-slate-700 pt-1"><i class="fas fa-phone-alt text-secondary mr-1"></i> <?php echo esc_html( $bungalow['tel'] ); ?></p>
            </div>

        </div>
    </div>
</main>

<!-- Gallery Lightbox Slider Modal (Full Screen Image Viewer) -->
<div id="gallery-modal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-md flex flex-col justify-between p-4 sm:p-6 transition-all duration-300">
    <div class="flex items-center justify-between text-white z-10">
        <span id="gallery-counter" class="text-xs font-bold tracking-wider bg-white/10 px-3 py-1 rounded-full">1 / 4</span>
        <button type="button" onclick="closeGalleryLightbox()" class="w-9 h-9 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center transition-colors">
            <i class="fas fa-times text-sm"></i>
        </button>
    </div>

    <div class="relative flex-1 flex items-center justify-center my-4">
        <!-- Previous Button -->
        <button type="button" onclick="changeGallerySlide(-1)" class="absolute left-2 sm:left-6 z-10 w-11 h-11 bg-black/50 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg">
            <i class="fas fa-chevron-left text-base"></i>
        </button>

        <!-- Main Slide Image -->
        <div class="max-w-5xl max-h-[75vh] overflow-hidden rounded-2xl shadow-2xl flex items-center justify-center">
            <img loading="lazy" decoding="async" id="gallery-modal-img" src="" class="max-h-[75vh] w-auto max-w-full object-contain rounded-2xl transition-all duration-300">
        </div>

        <!-- Next Button -->
        <button type="button" onclick="changeGallerySlide(1)" class="absolute right-2 sm:right-6 z-10 w-11 h-11 bg-black/50 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg">
            <i class="fas fa-chevron-right text-base"></i>
        </button>
    </div>

    <div class="text-center text-xs text-slate-600 z-10">
        Use arrows or click buttons to slide photos.
    </div>
</div>

<!-- Booking Modal Popup -->
<div id="booking-modal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full overflow-hidden shadow-2xl transition-all transform scale-95 opacity-0 duration-200" id="modal-box">
        <div class="bg-primary-dark text-white p-4 flex items-center justify-between">
            <h3 class="font-bold text-sm"><i class="fas fa-bookmark text-secondary mr-2"></i> Book <?php echo esc_html( $bungalow['name'] ); ?></h3>
            <button type="button" onclick="closeBookingModal()" class="w-7 h-7 bg-white/10 text-white rounded-full flex items-center justify-center hover:bg-white/20 transition-colors"><i class="fas fa-times text-xs"></i></button>
        </div>
        <div class="p-5 space-y-4 text-xs text-slate-600">
            <form class="space-y-3">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Full Name</label>
                        <input type="text" class="w-full rounded-xl border border-slate-200 bg-slate-50 p-2.5 text-xs text-slate-700 focus:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="Officer Name">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">NIC Number</label>
                        <input type="text" class="w-full rounded-xl border border-slate-200 bg-slate-50 p-2.5 text-xs text-slate-700 focus:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="NIC Number">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Check-In Date</label>
                        <input type="date" class="w-full rounded-xl border border-slate-200 bg-slate-50 p-2.5 text-xs text-slate-700 focus:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Check-Out Date</label>
                        <input type="date" class="w-full rounded-xl border border-slate-200 bg-slate-50 p-2.5 text-xs text-slate-700 focus:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
                    </div>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Select Room Type</label>
                    <select class="w-full rounded-xl border border-slate-200 bg-slate-50 p-2.5 text-xs text-slate-700 focus:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
                        <?php foreach ( $bungalow['rooms'] as $room ) : ?>
                            <option><?php echo esc_html( $room['type'] . ' - ' . $room['rate'] ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Designation & Workplace</label>
                    <input type="text" class="w-full rounded-xl border border-slate-200 bg-slate-50 p-2.5 text-xs text-slate-700 focus:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="Government Department / Ministry">
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full py-2.5 bg-primary-dark text-white rounded-xl font-bold hover:bg-secondary hover:text-primary-dark transition-all">Submit Reservation Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Gallery Lightbox Slider Functionality
var galleryImages = <?php echo json_encode( $bungalow['gallery'] ); ?>;
var currentSlideIndex = 0;

function openGalleryLightbox(index) {
    if (typeof GLightbox !== 'undefined' && typeof galleryImages !== 'undefined' && galleryImages.length > 0) {
        var glElements = galleryImages.map(function(imgUrl, idx) {
            return {
                href: imgUrl,
                type: 'image',
                title: '<?php echo esc_js( $bungalow['name'] ); ?> (' + (idx + 1) + '/' + galleryImages.length + ')'
            };
        });
        var instance = GLightbox({
            elements: glElements,
            startAt: index || 0,
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
        instance.open();
        return;
    }
    currentSlideIndex = index;
    updateLightboxImage();
    document.getElementById('gallery-modal').classList.remove('hidden');
}

function closeGalleryLightbox() {
    document.getElementById('gallery-modal').classList.add('hidden');
}

function changeGallerySlide(direction) {
    currentSlideIndex += direction;
    if (currentSlideIndex >= galleryImages.length) {
        currentSlideIndex = 0;
    }
    if (currentSlideIndex < 0) {
        currentSlideIndex = galleryImages.length - 1;
    }
    updateLightboxImage();
}

function updateLightboxImage() {
    var imgEl = document.getElementById('gallery-modal-img');
    var counterEl = document.getElementById('gallery-counter');
    imgEl.src = galleryImages[currentSlideIndex];
    counterEl.innerText = (currentSlideIndex + 1) + ' / ' + galleryImages.length;
}

// Booking Modal Functionality
function openBookingModal() {
    var modal = document.getElementById('booking-modal');
    var box = document.getElementById('modal-box');
    modal.classList.remove('hidden');
    setTimeout(function() {
        box.classList.remove('scale-95', 'opacity-0');
        box.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeBookingModal() {
    var modal = document.getElementById('booking-modal');
    var box = document.getElementById('modal-box');
    box.classList.remove('scale-100', 'opacity-100');
    box.classList.add('scale-95', 'opacity-0');
    setTimeout(function() {
        modal.classList.add('hidden');
    }, 200);
}

// Keyboard Navigation for Gallery Lightbox
document.addEventListener('keydown', function(e) {
    var galleryModal = document.getElementById('gallery-modal');
    if (!galleryModal.classList.contains('hidden')) {
        if (e.key === 'ArrowLeft') changeGallerySlide(-1);
        if (e.key === 'ArrowRight') changeGallerySlide(1);
        if (e.key === 'Escape') closeGalleryLightbox();
    }
});
</script>

<?php get_footer(); ?>