/* ================================================================
   process-carousel.js — Enhanced animations matching other sections
   ================================================================ */
(function () {
    'use strict';

    /* ── Header element scroll-reveal ── */
    function initHeaderReveal(section) {
        var els = section.querySelectorAll('.process-subheading, .process-title, .process-subtitle');
        if (!els.length) return;

        if (!('IntersectionObserver' in window)) {
            els.forEach(function (el) { el.classList.add('anim-in'); });
            return;
        }

        var obs = new IntersectionObserver(function (entries, o) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('anim-in');
                } else {
                    entry.target.classList.remove('anim-in');
                }
            });
        }, { threshold: 0.2 });

        els.forEach(function (el) { obs.observe(el); });
    }

    /* ── Slider carousel logic ── */
    function initTimeline(timeline) {
        var track       = timeline.querySelector('.timeline-track');
        var prevBtn     = timeline.querySelector('.timeline-prev');
        var nextBtn     = timeline.querySelector('.timeline-next');
        var steps       = track.querySelectorAll('.timeline-step');
        var progressLine = track.querySelector('.timeline-progress-line');

        if (!track || !steps.length) return;

        // Disable slider functionality on mobile
        var isMobile = window.innerWidth < 769;
        
        var currentIndex = 0;
        var totalSteps   = steps.length;

        function stepsToShow() {
            if (window.innerWidth < 769)  return 1;
            if (window.innerWidth < 1024) return 2;
            return 3;
        }
        function maxIndex() { return Math.max(0, totalSteps - stepsToShow()); }

        function updateProgress() {
            if (!progressLine || isMobile) return;
            var stepW = steps[0].offsetWidth;
            var gap   = 40;
            var targetIndex = currentIndex + stepsToShow() - 1;
            
            // Cap targetIndex to totalSteps - 1
            if (targetIndex >= totalSteps) targetIndex = totalSteps - 1;
            if (targetIndex < 0) targetIndex = 0;
            
            var targetWidth = targetIndex * (stepW + gap) + 2;
            progressLine.style.width = targetWidth + 'px';
        }

        function updateTimeline() {
            if (isMobile) return;
            var max   = maxIndex();
            var stepW = steps[0].offsetWidth;
            var gap   = 40;
            track.style.transform = 'translateX(' + (-(currentIndex * (stepW + gap))) + 'px)';
            updateProgress();
            if (prevBtn) prevBtn.disabled = currentIndex === 0;
            if (nextBtn) nextBtn.disabled = currentIndex >= max;
        }

        if (prevBtn && !isMobile) {
            prevBtn.addEventListener('click', function () {
                if (currentIndex > 0) { currentIndex--; updateTimeline(); }
            });
        }
        if (nextBtn && !isMobile) {
            nextBtn.addEventListener('click', function () {
                if (currentIndex < maxIndex()) { currentIndex++; updateTimeline(); }
            });
        }

        /* Touch swipe - disabled on mobile */
        if (!isMobile) {
            var startX = 0, endX = 0;
            track.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
            track.addEventListener('touchmove',  function (e) { endX   = e.touches[0].clientX; }, { passive: true });
            track.addEventListener('touchend',   function () {
                var dist = startX - endX;
                if (Math.abs(dist) > 50) {
                    if (dist > 0 && currentIndex < maxIndex()) { currentIndex++; updateTimeline(); }
                    else if (dist < 0 && currentIndex > 0)     { currentIndex--; updateTimeline(); }
                }
            });
        }

        window.addEventListener('resize', function () {
            isMobile = window.innerWidth < 769;
            if (currentIndex > maxIndex()) currentIndex = maxIndex();
            updateTimeline();
        });

        /* ── Scroll-reveal with stagger ── */
        if ('IntersectionObserver' in window) {
            var revealObs = new IntersectionObserver(function (entries, o) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var items = entry.target.querySelectorAll('.reveal-item');
                        items.forEach(function (item, i) {
                            setTimeout(function () { item.classList.add('reveal-active'); }, i * 160);
                        });
                        /* Animate progress line in after items appear - only on desktop */
                        if (!isMobile) {
                            setTimeout(function () { updateProgress(); }, items.length * 160 + 200);
                        }
                    } else {
                        var items = entry.target.querySelectorAll('.reveal-item');
                        items.forEach(function (item) { item.classList.remove('reveal-active'); });
                        updateProgress();
                    }
                });
            }, { threshold: 0.15 });

            revealObs.observe(timeline);
        } else {
            steps.forEach(function (s) { s.classList.add('reveal-active'); });
            if (!isMobile) updateProgress();
        }

        /* Init — progress starts at 0, wait for reveal - only on desktop */
        if (!isMobile) {
            updateTimeline();
            progressLine && (progressLine.style.width = '0');
        }
    }

    /* ── Boot ── */
    function init() {
        document.querySelectorAll('.process-section').forEach(function (section) {
            initHeaderReveal(section);
        });
        document.querySelectorAll('.process-timeline').forEach(function (tl) {
            initTimeline(tl);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();