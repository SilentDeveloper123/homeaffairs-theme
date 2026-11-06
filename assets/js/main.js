jQuery(function ($) {

  // ── Reduced Motion Detection ──
  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ── Page Loader ──
  $(window).on('load', function () { $('#pageLoader').addClass('hidden'); });
  setTimeout(function () { $('#pageLoader').addClass('hidden'); }, 3000);

  // ── Mobile Menu ──
  var $hamburger = $('#hamburgerBtn');
  var $mobileNav = $('#mobileNavDrawer');

  function openMobileNav() {
    $('.mobile-search-panel').removeClass('is-open').attr('aria-hidden', 'true');
    $('.mobile-search-backdrop').removeClass('is-open');
    $('.mobile-search-toggle').removeClass('is-active').attr('aria-expanded', 'false');
    $mobileNav.fadeIn(prefersReducedMotion ? 0 : 200).css('display', 'flex');
    $hamburger.attr('aria-expanded', 'true');
    setTimeout(function () { $mobileNav.find('.close-btn').trigger('focus'); }, 220);
  }

  function closeMobileNav() {
    $mobileNav.fadeOut(prefersReducedMotion ? 0 : 200);
    $hamburger.attr('aria-expanded', 'false').trigger('focus');
  }

  $hamburger.on('click', openMobileNav);
  $mobileNav.find('.close-btn').on('click', closeMobileNav);
  $mobileNav.find('a').on('click', closeMobileNav);

  // Escape key closes mobile nav
  $(document).on('keydown', function (e) {
    if (e.key === 'Escape' && $mobileNav.is(':visible')) {
      closeMobileNav();
    }
  });

  // Focus trap inside mobile nav
  $mobileNav.on('keydown', function (e) {
    if (e.key !== 'Tab') return;
    var $focusable = $mobileNav.find('a, button, [tabindex]:not([tabindex="-1"])').filter(':visible');
    if (!$focusable.length) return;
    var first = $focusable.first()[0], last = $focusable.last()[0];
    if (e.shiftKey) {
      if (document.activeElement === first) { e.preventDefault(); last.focus(); }
    } else {
      if (document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });

  // ── Keyboard-accessible Dropdown Navigation ──
  (function () {
    $('header .dropdown-group, .topbar .dropdown-group').each(function () {
      var $group = $(this);
      var $trigger = $group.children('a').first();
      var $menu = $group.children('.dropdown-menu').first();

      if (!$menu.length) return;

      var menuId = 'dd-' + Math.random().toString(36).substr(2, 8);
      $menu.attr({ id: menuId, role: 'menu' });
      $trigger.attr({ 'aria-haspopup': 'menu', 'aria-expanded': 'false', 'aria-controls': menuId });
      $menu.find('> li > a, > a').attr('role', 'menuitem').attr('tabindex', '-1');

      function openMenu() {
        $trigger.attr('aria-expanded', 'true');
        $group.addClass('dd-open');
        $menu.find('[role="menuitem"]').first().attr('tabindex', '0').trigger('focus');
      }

      function closeMenu() {
        $trigger.attr('aria-expanded', 'false');
        $group.removeClass('dd-open');
        $menu.find('[role="menuitem"]').attr('tabindex', '-1');
      }

      $trigger.on('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ' || e.key === 'ArrowDown') {
          if ($menu.is(':visible') || $group.hasClass('dd-open')) {
            closeMenu();
          } else {
            e.preventDefault();
            openMenu();
          }
        }
      });

      $menu.on('keydown', '[role="menuitem"]', function (e) {
        var $items = $menu.find('[role="menuitem"]:visible');
        var idx = $items.index(this);
        if (e.key === 'ArrowDown') { e.preventDefault(); $items.eq((idx + 1) % $items.length).attr('tabindex', '0').trigger('focus'); }
        if (e.key === 'ArrowUp')   { e.preventDefault(); $items.eq((idx - 1 + $items.length) % $items.length).attr('tabindex', '0').trigger('focus'); }
        if (e.key === 'Escape')    { closeMenu(); $trigger.trigger('focus'); }
        if (e.key === 'Tab')       { closeMenu(); }
      });
    });

    $(document).on('click', function (e) {
      if (!$(e.target).closest('.dropdown-group').length) {
        $('header .dropdown-group, .topbar .dropdown-group').each(function () {
          $(this).removeClass('dd-open')
            .children('a').attr('aria-expanded', 'false');
          $(this).find('[role="menuitem"]').attr('tabindex', '-1');
        });
      }
    });
  })();

  // ── Mobile Search Overlay ──
  (function () {
    var $panel = $('#mobileSearchPanel');
    var $backdrop = $('#mobileSearchBackdrop');
    var $toggle = $('.mobile-search-toggle');
    if (!$panel.length || !$toggle.length) return;
    var $input = $panel.find('input[type="search"]');

    function openSearch() {
      $panel.addClass('is-open').attr('aria-hidden', 'false');
      $backdrop.addClass('is-open');
      $toggle.addClass('is-active').attr('aria-expanded', 'true');
      setTimeout(function () { $input.trigger('focus'); }, 200);
    }

    function closeSearch() {
      $panel.removeClass('is-open').attr('aria-hidden', 'true');
      $backdrop.removeClass('is-open');
      $toggle.removeClass('is-active').attr('aria-expanded', 'false');
    }

    $toggle.on('click', function () {
      $panel.hasClass('is-open') ? closeSearch() : openSearch();
    });

    $panel.find('.mobile-search-close').on('click', closeSearch);
    $backdrop.on('click', closeSearch);

    $(document).on('keyup', function (e) {
      if (e.key === 'Escape' && $panel.hasClass('is-open')) {
        closeSearch();
        $toggle.trigger('focus');
      }
    });
  })();

  // ── Hero Slider ──
  if ($('.hero-slide').length > 1) {
    var si = 0, st;
    function goTo(n) {
      var slides = $('.hero-slide'), dots = $('.hero-dot');
      if (!slides.length) return;
      si = (n + slides.length) % slides.length;
      slides.removeClass('active');
      dots.removeClass('active');
      $('.slide-bg').removeClass('active');
      slides.eq(si).addClass('active');
      dots.eq(si).addClass('active');
      $('.slide-bg').eq(si).addClass('active');
    }
    function next() { goTo(si + 1); }
    function prev() { goTo(si - 1); }
    function start() {
      if (prefersReducedMotion) return;
      st = setInterval(next, 5500);
    }
    $('.hero-next').on('click', function () { clearInterval(st); next(); start(); });
    $('.hero-prev').on('click', function () { clearInterval(st); prev(); start(); });
    $('.hero-dot').on('click', function () { clearInterval(st); goTo($(this).index()); start(); });
    $(document).on('keydown', function (e) {
      if (!$('.hero-slider').length) return;
      if (e.key === 'ArrowRight') { clearInterval(st); next(); start(); }
      if (e.key === 'ArrowLeft')  { clearInterval(st); prev(); start(); }
    });
    start();
  }

  // ── Tabs ──
  $('.tab').on('click', function () {
    var $tabs = $(this).closest('.tab-group').find('.tab');
    $tabs.removeClass('active').removeClass('border-secondary text-secondary').addClass('border-transparent text-gray-400')
         .attr('aria-selected', 'false');
    $(this).addClass('active').removeClass('border-transparent text-gray-400').addClass('border-secondary text-secondary')
           .attr('aria-selected', 'true');
    var target = $(this).data('tab');
    $($(this).closest('.tab-group').parent().find('.tab-panel')).addClass('hidden').attr('aria-hidden', 'true');
    $('#' + target).removeClass('hidden').attr('aria-hidden', 'false');
  });

  // ── Set --topbar-height CSS variable (used by sticky nav top offset) ──
  function setTopbarHeightVar() {
    var topbarEl = document.getElementById('siteTopbar');
    if (topbarEl) {
      document.documentElement.style.setProperty('--topbar-height', topbarEl.offsetHeight + 'px');
    }
  }
  setTopbarHeightVar();
  $(window).on('resize', setTopbarHeightVar);

  // ── Scroll to anchor ──
  $('a[href^="#"]').on('click', function (e) {
    var href = $(this).attr('href');
    if (href === '#' || !href) return;
    var t = $(href);
    if (t.length) {
      var topbar  = document.getElementById('siteTopbar');
      var siteNav = document.getElementById('siteNav');
      var headerOffset = ((topbar ? topbar.offsetHeight : 0) + (siteNav ? siteNav.offsetHeight : 0)) + 16;
      e.preventDefault();
      var scrollDuration = prefersReducedMotion ? 0 : 500;
      $('html, body').animate({ scrollTop: t.offset().top - headerOffset }, scrollDuration, 'swing', function () {
        t.trigger('focus');
      });
    }
  });

  // ── Back to Top ──
  var btt = $('<button type="button" class="back-to-top" aria-label="Back to top" title="Back to top"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"/></svg></button>');
  $('body').append(btt);
  $(window).on('scroll', function () {
    $(this).scrollTop() > 500 ? btt.addClass('show') : btt.removeClass('show');
  });
  btt.on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, prefersReducedMotion ? 0 : 500);
  });

  // ── Counter Animation ──
  function animateCounters() {
    $('.stat-counter').each(function () {
      if ($(this).data('haCounting')) return;
      $(this).data('haCounting', true);
      var $el = $(this), target = parseInt($el.text().replace(/,/g, '')), current = 0, step = Math.ceil(target / 40);
      if (isNaN(target) || target === 0) return;
      if (prefersReducedMotion) { $el.text(target.toLocaleString()); return; }
      var interval = setInterval(function () {
        current += step;
        if (current >= target) { current = target; clearInterval(interval); }
        $el.text(current.toLocaleString());
      }, 40);
    });
  }

  // ── Intersection Observer for counters ──
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { animateCounters(); observer.disconnect(); }
      });
    }, { threshold: 0.5 });
    var statsEl = document.querySelector('.stats-bar');
    if (statsEl) observer.observe(statsEl);
  }

  // ── Infinite Horizontal News Ticker with Interactive Controls ──
  (function () {
    var track = document.getElementById('tickerTrack');
    if (!track) return;
    var origItems = Array.from(track.children);
    if (!origItems.length) return;

    // Clone items so the marquee tape streams infinitely without gaps
    origItems.forEach(function (item) { track.appendChild(item.cloneNode(true)); });
    origItems.forEach(function (item) { track.appendChild(item.cloneNode(true)); });

    var pos = 0;
    var speed = 0.55; // Smooth continuous right-to-left drift
    var running = !prefersReducedMotion;
    var isManualScrolling = false;
    var animId = null;

    function getSetWidth() {
      var first = origItems[0];
      var last = origItems[origItems.length - 1];
      if (!first || !last) return 1000;
      return (last.getBoundingClientRect().right - first.getBoundingClientRect().left);
    }

    function tick() {
      if (running && !isManualScrolling) {
        pos -= speed;
        var setW = getSetWidth();
        if (pos <= -setW) {
          pos += setW;
        } else if (pos > 0) {
          pos -= setW;
        }
        track.style.transform = 'translate3d(' + pos + 'px, 0, 0)';
      }
      animId = requestAnimationFrame(tick);
    }

    function scrollBy(delta) {
      isManualScrolling = true;
      var start = pos;
      var duration = 350;
      var startTime = performance.now();

      function animateScroll(now) {
        var elapsed = now - startTime;
        var progress = Math.min(elapsed / duration, 1);
        var ease = 1 - Math.pow(1 - progress, 3); // easeOutCubic
        pos = start + delta * ease;

        var setW = getSetWidth();
        if (pos <= -setW) pos += setW;
        if (pos > 0) pos -= setW;

        track.style.transform = 'translate3d(' + pos + 'px, 0, 0)';

        if (progress < 1) {
          requestAnimationFrame(animateScroll);
        } else {
          isManualScrolling = false;
        }
      }
      requestAnimationFrame(animateScroll);
    }

    var $ticker = $(track).closest('.news-ticker');
    var $buttons = $ticker.find('.ticker-prev, .ticker-next');

    // When cursor is on button, auto sliding MUST STOP
    $buttons.on('mouseenter focusin', function () {
      running = false;
    });

    $buttons.on('mouseleave focusout', function () {
      running = !prefersReducedMotion;
    });

    // Also pause when hovering over the news items so user can read / click link
    $(track).on('mouseenter focusin', function () {
      running = false;
    });

    $(track).on('mouseleave focusout', function () {
      running = !prefersReducedMotion;
    });

    // Left button scrolls right (previous news)
    $ticker.find('.ticker-prev').on('click', function (e) {
      e.preventDefault();
      scrollBy(280);
    });

    // Right button scrolls left (next news)
    $ticker.find('.ticker-next').on('click', function (e) {
      e.preventDefault();
      scrollBy(-280);
    });

    if (!prefersReducedMotion) {
      animId = requestAnimationFrame(tick);
    }
  })();

  // ── Accordion ──
  $('.accordion-toggle').on('click', function () {
    var $item = $(this).closest('.accordion-item');
    var isOpen = $item.hasClass('open');
    $item.find('.accordion-content').slideToggle(prefersReducedMotion ? 0 : 200);
    $item.toggleClass('open');
    $(this).attr('aria-expanded', !isOpen);
  });
  $('.accordion-toggle').each(function () {
    $(this).attr('aria-expanded', $(this).closest('.accordion-item').hasClass('open') ? 'true' : 'false');
  });

  // ── Secondary Menu ──
  function hideSecondaryMenu() {
    $('.secondary-menu-panel').removeClass('open');
    $('.secondary-menu-btn').attr('aria-expanded', 'false').find('i').removeClass('rotate-180');
    setTimeout(function () { $('.secondary-menu-panel').addClass('hidden'); }, 300);
  }
  $('.secondary-menu-btn').on('click', function () {
    var isHidden = $('.secondary-menu-panel').hasClass('hidden');
    if (isHidden) {
      $('.secondary-menu-panel').removeClass('hidden').addClass('open');
      $(this).attr('aria-expanded', 'true').find('i').addClass('rotate-180');
    } else {
      hideSecondaryMenu();
    }
  });
  $('.secondary-menu-close').on('click', hideSecondaryMenu);
  $('.secondary-menu-panel').on('click', '.secondary-link', hideSecondaryMenu);
  $(document).on('click', function (e) {
    if ($(e.target).closest('.secondary-menu-panel, .secondary-menu-btn').length === 0 && $('.secondary-menu-panel').hasClass('open')) {
      hideSecondaryMenu();
    }
  });

  // ── Lightbox Auto-Binding & Initialization for All Galleries ──
  function haInitLightbox() {
    if (typeof GLightbox === 'undefined') return null;

    var imageRegex = /\.(jpe?g|png|webp|gif|svg)(\?.*)?$/i;

    // 1. Grouped Core WordPress Block Galleries & Classic Galleries
    document.querySelectorAll('.wp-block-gallery, .gallery, .blocks-gallery-grid').forEach(function (galleryEl, gIdx) {
      var galleryId = galleryEl.id || ('ha-gallery-' + (gIdx + 1));
      galleryEl.querySelectorAll('a').forEach(function (anchor) {
        var href = anchor.getAttribute('href');
        if (href && imageRegex.test(href)) {
          anchor.classList.add('glightbox');
          if (!anchor.hasAttribute('data-gallery')) {
            anchor.setAttribute('data-gallery', galleryId);
          }
          var img = anchor.querySelector('img');
          if (img && !anchor.hasAttribute('data-title')) {
            var caption = anchor.closest('figure') ? anchor.closest('figure').querySelector('figcaption') : null;
            var title = (caption && caption.textContent.trim()) || img.getAttribute('alt') || img.getAttribute('title');
            if (title) {
              anchor.setAttribute('data-title', title);
            }
          }
        }
      });
    });

    // 2. Standalone image links in entry-content and articles
    document.querySelectorAll('.entry-content a, article a').forEach(function (anchor) {
      var href = anchor.getAttribute('href');
      if (href && imageRegex.test(href) && !anchor.classList.contains('glightbox')) {
        anchor.classList.add('glightbox');
        var img = anchor.querySelector('img');
        if (img && !anchor.hasAttribute('data-title')) {
          var caption = anchor.closest('figure') ? anchor.closest('figure').querySelector('figcaption') : null;
          var title = (caption && caption.textContent.trim()) || img.getAttribute('alt') || img.getAttribute('title');
          if (title) {
            anchor.setAttribute('data-title', title);
          }
        }
      }
    });

    // 3. Initialize GLightbox instance
    if (window.haLightbox && typeof window.haLightbox.destroy === 'function') {
      try { window.haLightbox.destroy(); } catch (e) {}
    }
    window.haLightbox = GLightbox({
      selector: '.glightbox',
      touchNavigation: true,
      loop: true,
      zoomable: true,
      draggable: true
    });

    return window.haLightbox;
  }

  window.haInitLightbox = haInitLightbox;
  haInitLightbox();

  // ── AOS-style scroll animations ──
  if ('IntersectionObserver' in window) {
    var animObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fadeIn');
          animObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    document.querySelectorAll('.scroll-animate').forEach(function (el) {
      if (!prefersReducedMotion) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
      }
      animObserver.observe(el);
    });
  }

  // ── Keyboard focus-visible helper ──
  document.addEventListener('keydown', function () {
    document.body.classList.add('js-focus-visible');
  });
  document.addEventListener('mousedown', function () {
    document.body.classList.remove('js-focus-visible');
  });

  // ── Language Switcher Accessibility (hreflang & lang) ──
  $('.lang-switch a, .lang-switcher a').each(function () {
    var href = $(this).attr('href') || '';
    if (href.indexOf('/si') !== -1) {
      $(this).attr('hreflang', 'si').attr('lang', 'si');
    } else if (href.indexOf('/ta') !== -1) {
      $(this).attr('hreflang', 'ta').attr('lang', 'ta');
    } else if (href.indexOf('/en') !== -1) {
      $(this).attr('hreflang', 'en').attr('lang', 'en');
    }
  });

});
