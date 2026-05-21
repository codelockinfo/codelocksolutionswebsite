document.addEventListener('DOMContentLoaded', function() {
    const timelines = document.querySelectorAll('.process-timeline');

    timelines.forEach(function(timeline) {
        const track = timeline.querySelector('.timeline-track');
        const prevBtn = timeline.querySelector('.timeline-prev');
        const nextBtn = timeline.querySelector('.timeline-next');
        const steps = track.querySelectorAll('.timeline-step');
        
        let currentIndex = 0;
        const totalSteps = steps.length;

        function getStepsToShow() {
            if (window.innerWidth < 768) {
                return 1; // Mobile: show 1 step
            } else if (window.innerWidth < 1024) {
                return 2; // Tablet: show 2 steps
            } else {
                return 3; // Desktop: show 3 steps
            }
        }

        function getMaxIndex() {
            const stepsToShow = getStepsToShow();
            return Math.max(0, totalSteps - stepsToShow);
        }

        function updateTimeline() {
            const stepsToShow = getStepsToShow();
            const maxIndex = getMaxIndex();
            const stepWidth = steps[0].offsetWidth;
            const gap = 40; // Match the gap in CSS
            const translateX = -(currentIndex * (stepWidth + gap));
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update button states
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }

        prevBtn.addEventListener('click', function() {
            const maxIndex = getMaxIndex();
            if (currentIndex > 0) {
                currentIndex--;
                updateTimeline();
            }
        });

        nextBtn.addEventListener('click', function() {
            const maxIndex = getMaxIndex();
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateTimeline();
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            // Reset current index if it exceeds new max index
            const maxIndex = getMaxIndex();
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }

            updateTimeline();
        });

        // Init
        updateTimeline();
    });
});