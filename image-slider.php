<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"/>
<section id="marquee-slider" class="marquee-slider-section">
    <div class="marquee-slider-container">
        
        <div class="marquee-badge">
            <div class="marquee-badge-inner">
                <span>1200+ Websites Built on Shopify</span>
                <svg class="globe-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                   <circle cx="12" cy="12" r="10"></circle>
                   <line x1="2" y1="12" x2="22" y2="12"></line>
                   <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
            </div>
        </div>

        <?php
        $projects = [
            ['img' => 'images/our project/shopify website1.png', 'link' => 'https://kiddicare.co.nz/'],
            ['img' => 'images/our project/shopify website2.png', 'link' => 'https://www.terragentle.in/'],
            ['img' => 'images/our project/shopify website3.png', 'link' => 'https://www.justmeats.com/'],
            ['img' => 'images/our project/shopify website4.png', 'link' => 'https://millenniumjewelery.com/'],
            ['img' => 'images/our project/shopify website5.png', 'link' => 'https://www.tistabene.com/'],
            ['img' => 'images/our project/shopify website6.png', 'link' => 'https://www.fabdreamsorganic.com'],
            ['img' => 'images/our project/shopify website7.png', 'link' => 'https://ffab.com/'],
            ['img' => 'images/our project/shopify website8.png', 'link' => 'https://www.florenceblack.co.uk/'],
            ['img' => 'images/our project/shopify website9.png', 'link' => 'https://pazzion.in/'],
            ['img' => 'images/our project/shopify website10.png', 'link' => 'https://fillerlab.dk/']
        ];
        
        // Ensure minimum items for smooth scrolling by duplicating the array
        $row1 = array_slice(array_merge($projects, $projects), 0, 10);
        $row2 = array_slice(array_merge($projects, $projects), 4, 10);
        $row3 = array_slice(array_merge($projects, $projects), 8, 10);

        function renderRow($items, $speedClass, $directionClass) {
            $content = '<div class="marquee-content">';
            foreach($items as $item) {
                $content .= '<a href="'.$item['link'].'" target="_blank" class="marquee-item">';
                $content .= '<img src="'.$item['img'].'" alt="Shopify Store">';
                $content .= '</a>';
            }
            $content .= '</div>';
            
            return '<div class="marquee-row '.$directionClass.' '.$speedClass.'"><div class="marquee-track">'.$content.$content.'</div></div>';
        }
        ?>

        <?= renderRow($row1, 'speed-slow', 'dir-left') ?>
        <?= renderRow($row2, 'speed-normal', 'dir-right') ?>
        <?= renderRow($row3, 'speed-slow', 'dir-left') ?>
        
    </div>
</section>

<style>
.marquee-slider-section {
    position: relative;
    background: var(--bg-primary);
    padding: 80px 0;
    overflow: hidden;
    width: 100%;
    transition: background 0.3s ease;
}

.marquee-slider-container {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Badge Styling */
.marquee-badge {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    padding: 3px;
    background: var(--gradient-secondary);
    background-size: 300% 300%;
    border-radius: 50px;
    box-shadow: 0 0 40px rgba(var(--accent-secondary), 0.6), 0 0 20px rgba(var(--accent-primary), 0.4);
    animation: gradientSpin 4s ease infinite;
}

.marquee-badge-inner {
    background: var(--bg-primary);
    color: var(--text-primary);
    padding: 14px 28px;
    border-radius: 46px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    font-size: 1.25rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    white-space: nowrap;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.marquee-badge-inner.anim-in {
    opacity: 1;
    transform: translateY(0);
}

.marquee-badge-inner svg {
    width: 22px;
    height: 22px;
}

@keyframes gradientSpin {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Marquee Tracks */
.marquee-row {
    display: flex;
    overflow: hidden;
    user-select: none;
}

.marquee-track {
    display: flex;
    gap: 30px;
    width: max-content;
}

.marquee-content {
    display: flex;
    gap: 15px;
}

/* Animation directions */
.dir-left .marquee-track {
    animation: scrollLeft 50s linear infinite;
}
.dir-right .marquee-track {
    animation: scrollRight 60s linear infinite;
}

/* Speeds */
.speed-slow .marquee-track { animation-duration: 120s; }
.speed-normal .marquee-track { animation-duration: 100s; }

@keyframes scrollLeft {
    to { transform: translateX(calc(-50% - 15px)); }
}
@keyframes scrollRight {
    from { transform: translateX(calc(-50% - 15px)); }
    to { transform: translateX(0); }
}

/* Pause on hover */
.marquee-slider-container:hover .marquee-track {
    animation-play-state: paused;
}

/* Items */
.marquee-item {
    position: relative;
    display: block;
    width: 425px;
    height: 225px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px var(--shadow-color);
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), filter 0.4s, box-shadow 0.4s;
    filter: grayscale(60%) brightness(0.6);
    animation: itemFloat 4s ease-in-out infinite;
    animation-delay: var(--item-delay, 0s);
}

@keyframes itemFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.marquee-item:nth-child(odd) { --item-delay: 0s; }
.marquee-item:nth-child(even) { --item-delay: 2s; }

.marquee-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.marquee-item:hover {
    transform: scale(1) translateY(0px);
    filter: grayscale(0%) brightness(0.9);
    z-index: 5;
    box-shadow: 0 20px 40px rgba(var(--accent-primary), 0.2);
    animation: none;
}

.marquee-item:hover img {
    transform: scale(1);
}

/* Mobile Adjustments */
@media (max-width: 990px) {
    .marquee-item {
        width: 350px;
        height: 220px;
    }
    .marquee-badge-inner {
        font-size: 1rem;
        padding: 10px 20px;
    }
}
@media (max-width: 768px) {
    .marquee-item {
        width: 280px;
        height: 150px;
        filter: grayscale(2%) brightness(0.8);
    }
    .marquee-badge-inner {
        font-size: 0.9rem;
        padding: 8px 16px;
    }
    .marquee-badge-inner svg {
        width: 18px;
        height: 18px;
    }
    .marquee-slider-section {
        padding: 40px 0;
    }
    .marquee-slider-container {
        gap: 15px;
    }
    .marquee-track, .marquee-content {
        gap: 15px;
    }
    @keyframes scrollLeft {
        to { transform: translateX(calc(-50% - 7.5px)); }
    }
    @keyframes scrollRight {
        from { transform: translateX(calc(-50% - 7.5px)); }
        to { transform: translateX(0); }
    }
}
</style>

<script>
(function() {
    'use strict';

    function initHeaderReveal(section) {
        var els = section.querySelectorAll('.marquee-badge-inner');
        if (!els.length) return;

        if (!('IntersectionObserver' in window)) {
            els.forEach(function (el) { el.classList.add('anim-in'); });
            return;
        }

        var obs = new IntersectionObserver(function (entries, o) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('anim-in');
                    o.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        els.forEach(function (el) { obs.observe(el); });
    }

    function init() {
        document.querySelectorAll('.marquee-slider-section').forEach(function(section) {
            initHeaderReveal(section);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>