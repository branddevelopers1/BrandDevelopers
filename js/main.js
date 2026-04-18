/**
 * BrandDevelopers Theme — Main JavaScript
 * Handles: sticky header, mobile nav, scroll animations, testimonials, newsletter
 */

(function () {
  'use strict';

  /* ============================================================
     STICKY HEADER
     ============================================================ */
  const header = document.getElementById('site-header');
  if (header) {
    const handleScroll = () => {
      if (window.scrollY > 40) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // run on load
  }

  /* ============================================================
     MOBILE NAV TOGGLE
     ============================================================ */
  const toggle = document.getElementById('nav-toggle');
  const navMenu = document.querySelector('.nav-menu');

  function closeNav() {
    navMenu.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('nav-open');
    toggle.querySelectorAll('span').forEach(s => {
      s.style.transform = '';
      s.style.opacity  = '';
    });
  }

  if (toggle && navMenu) {
    toggle.addEventListener('click', () => {
      const isOpen = navMenu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', String(isOpen));
      document.body.classList.toggle('nav-open', isOpen);

      // Animate hamburger → ✕
      const spans = toggle.querySelectorAll('span');
      if (isOpen) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
        spans[1].style.opacity   = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
      } else {
        spans[0].style.transform = '';
        spans[1].style.opacity   = '';
        spans[2].style.transform = '';
      }
    });

    // Close when a nav link is tapped
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeNav);
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
      if (header && !header.contains(e.target) && navMenu.classList.contains('open')) {
        closeNav();
      }
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) closeNav();
    });
  }

  /* ============================================================
     SCROLL REVEAL — .fade-up elements
     ============================================================ */
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          // Stagger siblings inside same parent
          const siblings = entry.target.parentElement.querySelectorAll('.fade-up');
          let delay = 0;
          siblings.forEach((sib, idx) => {
            if (sib === entry.target) delay = idx * 80;
          });
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, delay);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px',
    });
    fadeEls.forEach(el => observer.observe(el));
  } else {
    // Fallback: show all
    fadeEls.forEach(el => el.classList.add('visible'));
  }

  /* ============================================================
     SKILL BARS — animate when visible
     ============================================================ */
  const skillFills = document.querySelectorAll('.skill-bar__fill');
  if (skillFills.length && 'IntersectionObserver' in window) {
    const barObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const width = entry.target.style.width;
          entry.target.style.width = '0';
          requestAnimationFrame(() => {
            setTimeout(() => { entry.target.style.width = width; }, 100);
          });
          barObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    skillFills.forEach(fill => {
      const orig = fill.style.width;
      fill.dataset.width = orig;
      fill.style.width = '0';
      barObserver.observe(fill);
    });
  }

  /* ============================================================
     TESTIMONIAL SLIDER
     ============================================================ */
  const testimonialDots   = document.querySelectorAll('.testimonial-dots span');
  const testimonialSlides = document.querySelectorAll('.testimonial-slide');

  function showSlide(index) {
    testimonialSlides.forEach((slide, i) => {
      slide.style.display = i === index ? 'block' : 'none';
    });
    testimonialDots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  if (testimonialDots.length && testimonialSlides.length) {
    testimonialDots.forEach((dot) => {
      dot.addEventListener('click', () => {
        const idx = parseInt(dot.getAttribute('data-slide'), 10);
        showSlide(idx);
      });
    });
    // Auto-rotate every 5s
    let currentSlide = 0;
    setInterval(() => {
      currentSlide = (currentSlide + 1) % testimonialSlides.length;
      showSlide(currentSlide);
    }, 5000);
  }

  /* ============================================================
     NEWSLETTER AJAX FORM
     ============================================================ */
  const newsletterForm = document.getElementById('bd-newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const input = newsletterForm.querySelector('input[type="email"]');
      const btn   = newsletterForm.querySelector('button');
      const email = input.value.trim();

      if (!email) return;

      btn.textContent = 'Subscribing...';
      btn.disabled = true;

      try {
        const formData = new FormData();
        formData.append('action', 'bd_newsletter');
        formData.append('email',  email);
        formData.append('nonce',  (typeof bd_ajax !== 'undefined') ? bd_ajax.nonce : '');

        const res  = await fetch((typeof bd_ajax !== 'undefined') ? bd_ajax.ajax_url : '/wp-admin/admin-ajax.php', {
          method: 'POST',
          body:   formData,
        });
        const data = await res.json();

        if (data.success) {
          btn.textContent  = '✓ Subscribed!';
          input.value      = '';
          input.placeholder = data.data.message || 'Thank you!';
        } else {
          btn.textContent = 'Try again';
          btn.disabled    = false;
        }
      } catch (err) {
        btn.textContent = 'Error — try again';
        btn.disabled    = false;
      }
    });
  }

  /* ============================================================
     SMOOTH SCROLL — anchor links
     ============================================================ */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = header ? header.offsetHeight + 24 : 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ============================================================
     PORTFOLIO ITEM — cursor follow effect (desktop only)
     ============================================================ */
  if (window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.portfolio-item').forEach(item => {
      item.addEventListener('mousemove', (e) => {
        const rect = item.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width - 0.5) * 8;
        const y = ((e.clientY - rect.top)  / rect.height - 0.5) * 8;
        item.style.transform = `translateY(-4px) rotateY(${x}deg) rotateX(${-y}deg)`;
      });
      item.addEventListener('mouseleave', () => {
        item.style.transform = '';
      });
    });
  }

})();

/* ── PORTFOLIO FILTER ────────────────────────────────────── */
(function() {
    var filterBtns = document.querySelectorAll('.portfolio-filter__btn');
    var cards      = document.querySelectorAll('.portfolio-item-card');

    if ( ! filterBtns.length ) return;

    filterBtns.forEach( function( btn ) {
        btn.addEventListener( 'click', function() {
            var filter = this.getAttribute( 'data-filter' );

            // Update active button
            filterBtns.forEach( function(b) { b.classList.remove('portfolio-filter__btn--active'); } );
            this.classList.add( 'portfolio-filter__btn--active' );

            // Filter cards
            cards.forEach( function( card ) {
                var cat = card.getAttribute( 'data-category' );
                if ( filter === 'all' || cat === filter ) {
                    card.style.display = '';
                    setTimeout( function() { card.classList.add('visible'); }, 50 );
                } else {
                    card.style.display = 'none';
                    card.classList.remove('visible');
                }
            });
        });
    });
})();
