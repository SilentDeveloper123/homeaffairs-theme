const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const file = path.resolve(__dirname, '../page-templates/template-media-center.php');
let content = fs.readFileSync(file, 'utf8');

// 1. Replace $photo_albums definition
const oldAlbumsRegex = /\$photo_albums\s*=\s*\[[\s\S]*?\];\s*\$video_gallery/m;

const newAlbumsCode = `$photo_albums = [
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

$video_gallery`;

content = content.replace(oldAlbumsRegex, newAlbumsCode);

// 2. Fix the lightbox HTML structure and styling
const oldModalSectionRegex = /<div id="media-pagination"[\s\S]*?<div id="media-video-modal"[\s\S]*?<\/div>\s*<\/div>/m;

const newModalSection = `<div id="media-pagination" class="flex items-center justify-center gap-1.5 pt-8 mt-6 border-t border-gray-100"></div>
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
</div>`;

content = content.replace(oldModalSectionRegex, newModalSection);

// 3. Update JavaScript openLightbox, prevImage, nextImage, and attachPhotoHandlers
const oldJsRegex = /function attachPhotoHandlers\(\)[\s\S]*?function nextImage\(\)\s*\{[\s\S]*?\}\s*lbClose/m;

const newJs = `function attachPhotoHandlers() {
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

	lbClose`;

content = content.replace(oldJsRegex, newJs);

fs.writeFileSync(file, content, 'utf8');

try {
  execSync('php -l "' + file + '"', { stdio: 'pipe' });
  console.log('[OK] template-media-center.php updated successfully and passed php lint!');
} catch (e) {
  console.error('[FAIL] Syntax error:', e.stderr ? e.stderr.toString() : e.message);
}
