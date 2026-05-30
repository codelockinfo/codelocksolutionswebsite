// ======================================================
// PROJECT DETAIL PAGE - COMMON JAVASCRIPT
// ======================================================

// Scroll Reveal Animation
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in-up').forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });

    function makeAnimatedButton(buttonSelector) {
        const buttons = document.querySelectorAll(buttonSelector);
        buttons.forEach(button => {
            const textSpan = button.querySelector('span');
            if (!textSpan) return;

            const text = textSpan.textContent.trim();
            const iconSvg = button.querySelector('svg');

            button.innerHTML = '';

            const textWrapper = document.createElement('span');
            textWrapper.className = 'button-text-wrapper';

            const mother1 = document.createElement('span');
            mother1.className = 'span-mother';
            
            const mother2 = document.createElement('span');
            mother2.className = 'span-mother2';

            for (let i = 0; i < text.length; i++) {
                const char = text[i];
                const letter1 = document.createElement('span');
                const letter2 = document.createElement('span');

                if (char === ' ') {
                    letter1.innerHTML = '&nbsp;';
                    letter2.innerHTML = '&nbsp;';
                } else {
                    letter1.textContent = char;
                    letter2.textContent = char;
                }

                const delay = i * 0.035;
                letter1.style.transitionDelay = `${delay}s`;
                letter2.style.transitionDelay = `${delay}s`;

                mother1.appendChild(letter1);
                mother2.appendChild(letter2);
            }

            textWrapper.appendChild(mother1);
            textWrapper.appendChild(mother2);
            
            button.appendChild(textWrapper);
            if (iconSvg) {
                button.appendChild(iconSvg);
            }
        });
    }
    
    // Initialize animated buttons
    makeAnimatedButton('.project-btn-primary');
    makeAnimatedButton('.project-btn-secondary');

    // Image Slider Functionality
    function initSliders() {
        const sliders = document.querySelectorAll('.project-screenshot-slider');
        
        sliders.forEach(slider => {
            const track = slider.querySelector('.slider-track');
            const slides = slider.querySelectorAll('.slider-slide');
            const prevBtn = slider.querySelector('.slider-nav.prev');
            const nextBtn = slider.querySelector('.slider-nav.next');
            const pagination = slider.querySelector('.slider-pagination');
            
            if (!track || slides.length === 0) return;
            
            let currentIndex = 0;
            const totalSlides = slides.length;
            
            // Create pagination dots
            if (pagination) {
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'pagination-dot' + (i === 0 ? ' active' : '');
                    dot.addEventListener('click', () => goToSlide(i));
                    pagination.appendChild(dot);
                }
            }
            
            function updateSlider() {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                // Update pagination dots
                const dots = pagination.querySelectorAll('.pagination-dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            function goToSlide(index) {
                if (index < 0) index = totalSlides - 1;
                if (index >= totalSlides) index = 0;
                currentIndex = index;
                updateSlider();
            }
            
            // Navigation button events
            if (prevBtn) {
                prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
            }
            
            if (nextBtn) {
                nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));
            }
            
            // Touch/swipe support
            let touchStartX = 0;
            let touchEndX = 0;
            
            slider.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });
            
            slider.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });
            
            function handleSwipe() {
                const swipeThreshold = 50;
                const diff = touchStartX - touchEndX;
                
                if (Math.abs(diff) > swipeThreshold) {
                    if (diff > 0) {
                        goToSlide(currentIndex + 1);
                    } else {
                        goToSlide(currentIndex - 1);
                    }
                }
            }
            
            // Auto-play (optional)
            let autoPlayInterval;
            
            function startAutoPlay() {
                autoPlayInterval = setInterval(() => {
                    goToSlide(currentIndex + 1);
                }, 5000);
            }
            
            function stopAutoPlay() {
                clearInterval(autoPlayInterval);
            }
            
            // Start auto-play
            startAutoPlay();
            
            // Pause auto-play on hover
            slider.addEventListener('mouseenter', stopAutoPlay);
            slider.addEventListener('mouseleave', startAutoPlay);
            
            // Pause auto-play on touch
            slider.addEventListener('touchstart', stopAutoPlay);
            slider.addEventListener('touchend', startAutoPlay);
        });
    }
    
    // Initialize sliders
    initSliders();
});
