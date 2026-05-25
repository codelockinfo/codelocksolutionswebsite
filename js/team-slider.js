document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    const sliders = document.querySelectorAll('.team-slider');
    function initHeaderReveal(section) {
        var els = section.querySelectorAll('.team-subheading, .team-title, .team-subtitle');
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

    sliders.forEach(function(slider) {
        const track = slider.querySelector('.slider-track');
        const prevBtn = slider.querySelector('.slider-prev');
        const nextBtn = slider.querySelector('.slider-next');
        const members = track.querySelectorAll('.team-member');
        const dotsContainer = slider.querySelector('.slider-dots');
        
        let currentIndex = 0;
        const totalMembers = members.length;

        function getMembersToShow() {
            if (window.innerWidth < 576) {
                return 1; // Mobile: show 1 member
            } else if (window.innerWidth < 768) {
                return 2; // Tablet: show 2 members
            } else if (window.innerWidth < 1200) {
                return 3; // Small desktop: show 3 members
            } else {
                return 4; // Desktop: show 4 members
            }
        }

        function getMaxIndex() {
            const membersToShow = getMembersToShow();
            return Math.max(0, totalMembers - membersToShow);
        }

        function createDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            
            const maxIndex = getMaxIndex();
            // Only show dots if there is content to scroll
            if (maxIndex <= 0) return;

            for (let i = 0; i <= maxIndex; i++) {
                const dot = document.createElement('div');
                dot.classList.add('slider-dot');
                if (i === currentIndex) dot.classList.add('active');
                
                dot.addEventListener('click', function() {
                    currentIndex = i;
                    updateSlider();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateSlider() {
            const membersToShow = getMembersToShow();
            const maxIndex = getMaxIndex();
            
            // Adjust current index if it exceeds maximum possible index
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }

            const memberWidth = members[0].offsetWidth;
            const gap = 30; // Match the gap in CSS
            const translateX = -(currentIndex * (memberWidth + gap));
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update active dot
            if (dotsContainer) {
                const dots = dotsContainer.querySelectorAll('.slider-dot');
                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }

            // Update button states
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }

        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        nextBtn.addEventListener('click', function() {
            const maxIndex = getMaxIndex();
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });

        // Swipe support
        let startX = 0;
        let endX = 0;

        track.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchmove', function(e) {
            endX = e.touches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchend', function() {
            const threshold = 50;
            const swipeDistance = startX - endX;
            const maxIndex = getMaxIndex();

            if (Math.abs(swipeDistance) > threshold) {
                if (swipeDistance > 0 && currentIndex < maxIndex) {
                    // Swiped left -> next
                    currentIndex++;
                    updateSlider();
                } else if (swipeDistance < 0 && currentIndex > 0) {
                    // Swiped right -> previous
                    currentIndex--;
                    updateSlider();
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            createDots();
            updateSlider();
        });

        // IntersectionObserver for scroll-reveal animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                root: null,
                threshold: 0.1,
                rootMargin: '0px'
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const revealItems = entry.target.querySelectorAll('.team-reveal');
                        revealItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.classList.add('reveal-active');
                            }, index * 100);
                        });
                    } else {
                        const revealItems = entry.target.querySelectorAll('.team-reveal');
                        revealItems.forEach(item => item.classList.remove('reveal-active'));
                    }
                });
            }, observerOptions);

            observer.observe(slider);
        } else {
            // Fallback for older browsers
            members.forEach(m => m.classList.add('reveal-active'));
        }

        // Initialize
        createDots();
        updateSlider();
    });
    function init() {
        document.querySelectorAll('.team-section').forEach(function (section) {
            initHeaderReveal(section);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
});
