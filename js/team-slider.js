document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.team-slider');

    sliders.forEach(function(slider) {
        const track = slider.querySelector('.slider-track');
        const prevBtn = slider.querySelector('.slider-prev');
        const nextBtn = slider.querySelector('.slider-next');
        const members = track.querySelectorAll('.team-member');
        
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

        function updateSlider() {
            const membersToShow = getMembersToShow();
            const maxIndex = getMaxIndex();
            const memberWidth = members[0].offsetWidth;
            const gap = 30; // Match the gap in CSS
            const translateX = -(currentIndex * (memberWidth + gap));
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update button states
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }

        prevBtn.addEventListener('click', function() {
            const maxIndex = getMaxIndex();
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

        // Handle window resize
        window.addEventListener('resize', function() {
            // Reset current index if it exceeds new max index
            const maxIndex = getMaxIndex();
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }
            updateSlider();
        });

        // Initialize
        updateSlider();
    });
});
