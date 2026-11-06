<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Media Center Hub Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Media Center";
$ha_uri = get_template_directory_uri();
$ha_uploads = content_url( '/uploads' );

/**
 * Photo albums data
 * Structure: [title, date, count, cover, images[]]
 */

$photo_albums = [
	[
		'title'  => '78th Independence Day Celebration',
		'date'   => '2026-02-04',
		'count'  => 6,
		'cover'  => $ha_uri . '/assets/images/gallery/independance/6.jpeg',
		'images' => [
			$ha_uri . '/assets/images/gallery/independance/6.jpeg',
			$ha_uri . '/assets/images/gallery/independance/1.jpeg',
			$ha_uri . '/assets/images/gallery/independance/2.jpeg',
			$ha_uri . '/assets/images/gallery/independance/3.jpeg',
			$ha_uri . '/assets/images/gallery/independance/4.jpeg',
			$ha_uri . '/assets/images/gallery/independance/5.jpeg',
		],
	],
	[
		'title'  => 'Digital Signature Initiative Launch',
		'date'   => '2026-01-15',
		'count'  => 3,
		'cover'  => $ha_uri . '/assets/images/gallery/digital_signature/1.jpeg',
		'images' => [
			$ha_uri . '/assets/images/gallery/digital_signature/1.jpeg',
			$ha_uri . '/assets/images/gallery/digital_signature/2.jpeg',
			$ha_uri . '/assets/images/gallery/digital_signature/3.jpeg',
		],
	],
	[
		'title'  => 'National Public Service Awards 2025',
		'date'   => '2025-12-10',
		'count'  => 4,
		'cover'  => $ha_uri . '/assets/images/gallery/awords/4.jpeg',
		'images' => [
			$ha_uri . '/assets/images/gallery/awords/4.jpeg',
			$ha_uri . '/assets/images/gallery/awords/1.png',
			$ha_uri . '/assets/images/gallery/awords/2.png',
			$ha_uri . '/assets/images/gallery/awords/3.png',
		],
	],
	[
		'title'  => 'Staff Training & Capacity Building Workshop',
		'date'   => '2025-11-05',
		'count'  => 5,
		'cover'  => $ha_uri . '/assets/images/gallery/workshop/1.png',
		'images' => [
			$ha_uri . '/assets/images/gallery/workshop/1.png',
			$ha_uri . '/assets/images/gallery/workshop/2.png',
			$ha_uri . '/assets/images/gallery/workshop/3.png',
			$ha_uri . '/assets/images/gallery/workshop/4.png',
			$ha_uri . '/assets/images/gallery/workshop/5.png',
		],
	],
	[
		'title'  => 'Disaster Relief & Emergency Preparedness Coordination',
		'date'   => '2025-09-20',
		'count'  => 4,
		'cover'  => $ha_uri . '/assets/images/news/1.jpg',
		'images' => [
			$ha_uri . '/assets/images/news/1.jpg',
			$ha_uri . '/assets/images/hero-bg-2.jpg',
			$ha_uri . '/assets/images/hero-bg-3.jpg',
			$ha_uri . '/assets/images/gallery/independance/3.jpeg',
		],
	],
	[
		'title'  => 'Provincial Administration Strategic Conference 2025',
		'date'   => '2025-08-12',
		'count'  => 4,
		'cover'  => $ha_uri . '/assets/images/news/2.jpg',
		'images' => [
			$ha_uri . '/assets/images/news/2.jpg',
			$ha_uri . '/assets/images/hero-bg-4.jpg',
			$ha_uri . '/assets/images/hero-bg-1.jpg',
			$ha_uri . '/assets/images/gallery/workshop/2.png',
		],
	],
	[
		'title'  => 'Community Outreach & Grassroots Consultation Mission',
		'date'   => '2025-07-18',
		'count'  => 4,
		'cover'  => $ha_uri . '/assets/images/news/3.jpg',
		'images' => [
			$ha_uri . '/assets/images/news/3.jpg',
			$ha_uri . '/assets/images/gallery/independance/4.jpeg',
			$ha_uri . '/assets/images/gallery/workshop/4.png',
			$ha_uri . '/assets/images/gallery/digital_signature/2.jpeg',
		],
	],
	[
		'title'  => 'National Governance & Public Administration Forum',
		'date'   => '2025-05-22',
		'count'  => 4,
		'cover'  => $ha_uri . '/assets/images/news/4.jpg',
		'images' => [
			$ha_uri . '/assets/images/news/4.jpg',
			$ha_uri . '/assets/images/gallery/awords/1.png',
			$ha_uri . '/assets/images/gallery/digital_signature/3.jpeg',
			$ha_uri . '/assets/images/gallery/independance/2.jpeg',
		],
	],
];

$video_gallery = [
	[ 'title' => '78th Independence Day Celebration \u2014 Highlights',            'date' => '2026-02-04', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/2b080d/D4AF37?text=Independence+Day+2026' ],
	[ 'title' => 'Digital Signature Initiative \u2014 Launch Ceremony',            'date' => '2026-01-15', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/4a1017/ffffff?text=Digital+Signature+Launch' ],
	[ 'title' => 'Ministerial Address \u2014 National Public Service Awards',     'date' => '2025-12-10', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/D4AF37/ffffff?text=Awards+2025' ],
	[ 'title' => 'Capacity Building Programme for Grama Niladhari Officers',      'date' => '2025-10-15', 'type' => 'vimeo',  'id' => '76979871',     'cover' => 'https://placehold.co/800x450/2b080d/ffffff?text=GN+Training' ],
	[ 'title' => 'Disaster Preparedness Workshop \u2014 Southern Province',       'date' => '2025-09-08', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/58111A/ffffff?text=Disaster+Preparedness' ],
	[ 'title' => 'Provincial Administration Conference 2025 \u2014 Key Sessions', 'date' => '2025-08-12', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/2b080d/ffffff?text=Provincial+Conference' ],
	[ 'title' => 'Community Outreach Programme \u2014 Eastern Province Documentary','date' => '2025-07-18', 'type' => 'vimeo',  'id' => '76979871',     'cover' => 'https://placehold.co/800x450/4a1017/ffffff?text=Community+Outreach' ],
	[ 'title' => 'Public Service Day Celebrations 2025',                          'date' => '2025-06-15', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/D4AF37/ffffff?text=Public+Service+Day' ],
	[ 'title' => 'Training Programme on Digital Government Services',             'date' => '2025-05-20', 'type' => 'youtube', 'id' => 'dQw4w9WgXcQ', 'cover' => 'https://placehold.co/800x450/2b080d/ffffff?text=Digital+Gov+Training' ],
	[ 'title' => 'Republic Day Celebrations 2025 \u2014 Full Ceremony',           'date' => '2025-05-22', 'type' => 'vimeo',  'id' => '76979871',     'cover' => 'https://placehold.co/800x450/2b080d/ffffff?text=Republic+Day+2025' ],
];

$albums_json = json_encode( $photo_albums );
$videos_json = json_encode( $video_gallery );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<!-- Service Page Style Header -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'MEDIA GALLERY', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker"><?php echo esc_html( $intro_title ); ?></h1>
	</div>

	<!-- Filter & Search Bar with SECONDARY/SECONDARY Theme Accent -->
	<div id="media-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300 media-filter-bar">
		<div class="flex flex-wrap items-center gap-2 mb-5">
			<button class="media-type-btn active px-4 py-2 rounded-lg text-xs font-semibold transition-all" data-type="all">Show All Assets</button>
			<button class="media-type-btn px-4 py-2 rounded-lg text-xs font-semibold transition-all text-gray-600 hover:bg-gray-100" data-type="photos"><i class="fas fa-images mr-1.5 text-secondary"></i> Photo Albums</button>
			<button class="media-type-btn px-4 py-2 rounded-lg text-xs font-semibold transition-all text-gray-600 hover:bg-gray-100" data-type="videos"><i class="fas fa-video mr-1.5 text-secondary"></i> Video Gallery</button>
		</div>
		<div class="w-full sm:w-96">
			<label for="media-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Filter by Event or Keyword</label>
			<div class="relative">
				<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
				<input type="text" id="media-search" class="media-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-primary-darker" placeholder="e.g. Independence Day, Workshop, Ceremony...">
			</div>
		</div>
	</div>

	<div id="media-count" class="text-xs text-gray-600 mb-4 font-medium"></div>

	<div id="media-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5"></div>

	<div id="media-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-gray-50 rounded-2xl flex items-center justify-center mb-5">
			<i class="fas fa-photo-film text-3xl text-gray-300"></i>
		</div>
		<p class="text-base font-medium text-gray-500">No media assets match your current filter criteria.</p>
		<p class="text-sm text-gray-600 mt-1">Please adjust your filters or explore different categories.</p>
	</div>

	<div id="media-pagination" class="flex items-center justify-center gap-1.5 pt-8 mt-6 border-t border-gray-100"></div>
</main>

<!-- Photo Album Lightbox Modal -->
<div id="media-lightbox" class="media-lb hidden fixed inset-0 z-50 flex flex-col justify-between bg-black/95 backdrop-blur-md p-4 sm:p-6 transition-all duration-300">
	<!-- Top Navigation Header -->
	<div class="flex items-center justify-between text-white z-20 w-full max-w-6xl mx-auto pt-2">
		<div class="space-y-0.5">
			<h4 id="lb-title" class="text-sm sm:text-base font-bold text-white tracking-wide truncate max-w-lg"></h4>
			<span id="lb-counter" class="text-xs font-semibold text-secondary block">1 / 1</span>
		</div>
		<button type="button" id="lb-close" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary cursor-pointer" aria-label="Close Lightbox">
			<i class="fas fa-times text-base"></i>
		</button>
	</div>

	<!-- Image Display & Nav Buttons -->
	<div class="relative flex-1 flex items-center justify-center my-3 w-full max-w-6xl mx-auto">
		<button type="button" id="lb-prev" class="absolute left-2 sm:left-4 z-20 w-11 h-11 bg-black/60 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary cursor-pointer" aria-label="Previous Photo">
			<i class="fas fa-chevron-left text-base"></i>
		</button>
		<div class="max-w-5xl max-h-[75vh] overflow-hidden rounded-2xl shadow-2xl flex items-center justify-center">
			<img id="lb-img" class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl transition-all duration-300" src="" alt="Album Photo">
		</div>
		<button type="button" id="lb-next" class="absolute right-2 sm:right-4 z-20 w-11 h-11 bg-black/60 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary cursor-pointer" aria-label="Next Photo">
			<i class="fas fa-chevron-right text-base"></i>
		</button>
	</div>

	<!-- Bottom Help Notice -->
	<div class="text-center text-xs text-white/50 z-20 pb-2">
		<span>Use left/right arrow keys or click arrows to view photos. Press Esc to close.</span>
	</div>
</div>

<!-- Video Modal -->
<div id="media-video-modal" class="media-vm hidden fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm p-4">
	<button type="button" id="vm-close" class="absolute top-5 right-5 text-white/60 hover:text-white text-2xl z-10 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" aria-label="Close Video"><i class="fas fa-times"></i></button>
	<div id="vm-container" class="w-full max-w-5xl aspect-video rounded-xl overflow-hidden shadow-2xl"></div>
</div>

<style>
	/* Custom Theme Class Helpers mapped to var(--color-primary-darker) and var(--color-secondary) */
	.media-type-btn.active {
		background-color: var(--color-primary-darker) !important;
		color: var(--color-secondary) !important;
	}
	.media-page-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 36px;
		height: 36px;
		border-radius: 8px;
		font-size: 13px;
		font-weight: 600;
		color: #4b5563;
		background-color: #f9fafb;
		border: 1px solid #e5e7eb;
		transition: all 0.2s;
	}
	.media-page-btn:hover {
		background-color: #f3f4f6;
		color: var(--color-primary-darker);
	}
	.media-page-active {
		background-color: var(--color-primary-darker) !important;
		color: var(--color-secondary) !important;
		border-color: var(--color-primary-darker) !important;
	}
</style>

<script>
(function() {
	var albums = <?php echo $albums_json; ?>;
	var videos = <?php echo $videos_json; ?>;
	var allItems = [];
	var filtered = [];
	var activeType = 'all';
	var page = 1;
	var perPage = 8;

	albums.forEach(function( a ) { a._mediaType = 'photo'; allItems.push( a ); });
	videos.forEach(function( v ) { v._mediaType = 'video'; allItems.push( v ); });

	var typeBtns = document.querySelectorAll('.media-type-btn');
	var searchInput = document.getElementById('media-search');
	var gridEl = document.getElementById('media-grid');
	var emptyEl = document.getElementById('media-empty');
	var countEl = document.getElementById('media-count');
	var pagEl = document.getElementById('media-pagination');

	var lightbox = document.getElementById('media-lightbox');
	var lbImg = document.getElementById('lb-img');
	var lbClose = document.getElementById('lb-close');
	var lbPrev = document.getElementById('lb-prev');
	var lbNext = document.getElementById('lb-next');
	var currentImages = [];
	var currentIndex = 0;

	var videoModal = document.getElementById('media-video-modal');
	var vmContainer = document.getElementById('vm-container');
	var vmClose = document.getElementById('vm-close');

	function formatDate( iso ) {
		var d = new Date( iso + 'T00:00:00' );
		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		return d.getDate() + ' ' + months[ d.getMonth() ] + ' ' + d.getFullYear();
	}

	function filterData() {
		var q = searchInput.value.toLowerCase().trim();
		filtered = [];

		allItems.forEach(function( item ) {
			if ( activeType !== 'all' && item._mediaType !== activeType ) { return; }
			if ( q !== '' ) {
				var title = item.title.toLowerCase();
				if ( title.indexOf(q) === -1 ) { return; }
			}
			filtered.push( item );
		});

		page = 1;
		render();
	}

	function render() {
		var total = filtered.length;
		var totalPages = Math.ceil( total / perPage ) || 1;
		if ( page > totalPages ) { page = totalPages; }

		var start = ( page - 1 ) * perPage;
		var end = Math.min( start + perPage, total );
		var pageData = filtered.slice( start, end );

		if ( total === 0 ) {
			gridEl.innerHTML = '';
			emptyEl.classList.remove('hidden');
			countEl.textContent = '';
			pagEl.innerHTML = '';
			return;
		}
		emptyEl.classList.add('hidden');
		countEl.textContent = 'Showing ' + ( total > 0 ? start + 1 : 0 ) + '\u2013' + end + ' of ' + total + ' media assets';

		var html = '';
		for ( var i = 0; i < pageData.length; i++ ) {
			var item = pageData[i];
			if ( item._mediaType === 'photo' ) {
				html += renderPhotoCard( item, start + i );
			} else {
				html += renderVideoCard( item );
			}
		}
		gridEl.innerHTML = html;

		var phtml = '';
		var prevDisabled = page <= 1 ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="media-page-btn' + prevDisabled + '" data-page="' + ( page - 1 ) + '"><i class="fas fa-chevron-left" style="font-size:10px"></i></a>';

		for ( var p = 1; p <= totalPages; p++ ) {
			var active = p === page ? ' media-page-active' : '';
			phtml += '<a href="#" class="media-page-btn' + active + '" data-page="' + p + '">' + p + '</a>';
		}

		var nextDisabled = page >= totalPages ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="media-page-btn' + nextDisabled + '" data-page="' + ( page + 1 ) + '"><i class="fas fa-chevron-right" style="font-size:10px"></i></a>';

		pagEl.innerHTML = phtml;

		[].forEach.call( pagEl.querySelectorAll('.media-page-btn'), function( btn ) {
			btn.addEventListener('click', function( e ) {
				e.preventDefault();
				var p = parseInt( this.getAttribute('data-page'), 10 );
				if ( p >= 1 && p <= totalPages ) {
					page = p;
					render();
					document.getElementById('media-filter-hub').scrollIntoView({ behavior: 'smooth', block: 'start' });
				}
			});
		});

		attachPhotoHandlers();
		attachVideoHandlers();
	}

	function renderPhotoCard( album, idx ) {
		return '<div class="media-photo-card group relative rounded-xl overflow-hidden cursor-pointer bg-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-gray-100" data-album-idx="' + idx + '">'
			+ '<div class="aspect-[4/3] overflow-hidden">'
			+ '<img src="' + album.cover + '" alt="' + album.title + '" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" onerror="this.parentElement.innerHTML=\'<div class=\\\'flex items-center justify-center w-full h-full bg-gradient-to-br from-primary-darker/10 to-secondary/10 text-gray-300\\\'><i class=\\\'fas fa-image text-4xl\\\'></i></div>\'">'
			+ '</div>'
			+ '<div class="absolute inset-0 bg-gradient-to-t from-primary-darker/90 via-primary-darker/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">'
			+ '<h3 class="text-sm font-bold text-white leading-snug">' + album.title + '</h3>'
			+ '<p class="text-xs text-white/70 mt-0.5">' + formatDate( album.date ) + '</p>'
			+ '<span class="inline-flex items-center gap-1 text-xs text-secondary font-semibold mt-1.5"><i class="fas fa-images"></i> ' + album.count + ' Photos</span>'
			+ '</div>'
			+ '</div>';
	}

	function renderVideoCard( video ) {
		var embedUrl = video.type === 'youtube' ? 'https://www.youtube.com/embed/' + video.id + '?autoplay=1' : 'https://player.vimeo.com/video/' + video.id + '?autoplay=1';
		return '<div class="media-video-card group relative rounded-xl overflow-hidden cursor-pointer bg-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-gray-100" data-embed="' + embedUrl + '">'
			+ '<div class="aspect-video overflow-hidden">'
			+ '<img src="' + video.cover + '" alt="' + video.title + '" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" onerror="this.parentElement.innerHTML=\'<div class=\\\'flex items-center justify-center w-full h-full bg-gradient-to-br from-primary-darker/10 to-secondary/10 text-gray-300\\\'><i class=\\\'fas fa-video text-4xl\\\'></i></div>\'">'
			+ '</div>'
			+ '<div class="absolute inset-0 bg-black/20 flex items-center justify-center">'
			+ '<i class="fas fa-play-circle text-secondary text-5xl opacity-95 group-hover:scale-110 transition-transform duration-300 drop-shadow-lg"></i>'
			+ '</div>'
			+ '<div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-primary-darker/90 to-transparent">'
			+ '<h3 class="text-sm font-semibold text-white leading-snug">' + video.title + '</h3>'
			+ '<p class="text-xs text-white/70 mt-0.5">' + formatDate( video.date ) + '</p>'
			+ '</div>'
			+ '</div>';
	}

	function attachPhotoHandlers() {
		document.querySelectorAll('.media-photo-card').forEach(function( card ) {
			card.addEventListener('click', function() {
				var albumIdx = parseInt( this.getAttribute('data-album-idx'), 10 );
				var album = filtered[ albumIdx ];
				if ( album && album.images && album.images.length > 0 ) {
					currentImages = album.images;
					currentIndex = 0;
					openLightbox( album.title );
				}
			});
		});
	}

	function openLightbox( title ) {
		if ( currentImages.length === 0 ) { return; }
		if ( typeof GLightbox !== 'undefined' ) {
			var glElements = currentImages.map(function( imgUrl, i ) {
				return {
					href: imgUrl,
					type: 'image',
					title: ( title || 'Photo Gallery' ) + ' (' + ( i + 1 ) + '/' + currentImages.length + ')'
				};
			});
			var instance = GLightbox({
				elements: glElements,
				startAt: currentIndex || 0,
				touchNavigation: true,
				loop: true,
				zoomable: true
			});
			instance.open();
			return;
		}
		lbImg.src = currentImages[ currentIndex ];
		var titleEl = document.getElementById('lb-title');
		var counterEl = document.getElementById('lb-counter');
		if ( titleEl ) { titleEl.textContent = title || 'Photo Gallery'; }
		if ( counterEl ) { counterEl.textContent = ( currentIndex + 1 ) + ' / ' + currentImages.length; }
		lightbox.classList.remove('hidden');
		document.body.style.overflow = 'hidden';
	}

	function closeLightbox() {
		lightbox.classList.add('hidden');
		lbImg.src = '';
		document.body.style.overflow = '';
	}

	function prevImage() {
		if ( currentImages.length === 0 ) return;
		currentIndex = ( currentIndex - 1 + currentImages.length ) % currentImages.length;
		lbImg.src = currentImages[ currentIndex ];
		var counterEl = document.getElementById('lb-counter');
		if ( counterEl ) { counterEl.textContent = ( currentIndex + 1 ) + ' / ' + currentImages.length; }
	}

	function nextImage() {
		if ( currentImages.length === 0 ) return;
		currentIndex = ( currentIndex + 1 ) % currentImages.length;
		lbImg.src = currentImages[ currentIndex ];
		var counterEl = document.getElementById('lb-counter');
		if ( counterEl ) { counterEl.textContent = ( currentIndex + 1 ) + ' / ' + currentImages.length; }
	}

	lbClose.addEventListener('click', closeLightbox );
	lbPrev.addEventListener('click', prevImage );
	lbNext.addEventListener('click', nextImage );

	lightbox.addEventListener('click', function( e ) {
		if ( e.target === lightbox ) { closeLightbox(); }
	});

	document.addEventListener('keydown', function( e ) {
		if ( !lightbox.classList.contains('hidden') ) {
			if ( e.key === 'Escape' ) { closeLightbox(); }
			else if ( e.key === 'ArrowLeft' ) { prevImage(); }
			else if ( e.key === 'ArrowRight' ) { nextImage(); }
		}
		if ( !videoModal.classList.contains('hidden') ) {
			if ( e.key === 'Escape' ) { closeVideoModal(); }
		}
	});

	function openVideoModal( embedUrl ) {
		vmContainer.innerHTML = '<iframe src="' + embedUrl + '" class="w-full h-full rounded-xl" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
		videoModal.classList.remove('hidden');
		document.body.style.overflow = 'hidden';
	}

	function closeVideoModal() {
		vmContainer.innerHTML = '';
		videoModal.classList.add('hidden');
		document.body.style.overflow = '';
	}

	vmClose.addEventListener('click', closeVideoModal );
	videoModal.addEventListener('click', function( e ) {
		if ( e.target === videoModal ) { closeVideoModal(); }
	});

	typeBtns.forEach(function( btn ) {
		btn.addEventListener('click', function() {
			typeBtns.forEach(function( b ) { b.classList.remove('active'); });
			this.classList.add('active');
			activeType = this.getAttribute('data-type');
			filterData();
		});
	});

	searchInput.addEventListener('input', filterData );

	filterData();
})();
</script>

<?php get_footer(); ?>