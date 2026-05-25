<section class="trust-metrics-section">
    <div class="container">
        <div class="metrics-top-row">
            <h2 class="metrics-title trust-animate">Shopify Experts Trust Metrics.</h2>
            <p class="metrics-desc trust-animate">
                Delivering measurable growth and e-commerce success through certified Shopify development,<br>conversion rate optimization (CRO), and enterprise-grade store setups.
            </p>
        </div>
        
        <div class="metrics-grid">
            <div class="metric-card trust-animate">
                <h3 class="metric-number"><span class="counter" data-target="550">0</span>+</h3>
                <p class="metric-label">PROJECTS DELIVERED</p>
            </div>
            
            <div class="metric-card trust-animate">
                <h3 class="metric-number"><span class="counter" data-target="21">0</span>+</h3>
                <p class="metric-label">INDUSTRIES SERVED</p>
            </div>
            
            <div class="metric-card trust-animate">
                <h3 class="metric-number"><span class="counter" data-target="25">0</span>+</h3>
                <p class="metric-label">COUNTRIES COVERED</p>
            </div>
            
            <div class="metric-card trust-animate">
                <h3 class="metric-number"><span class="counter" data-target="5">0</span>+</h3>
                <p class="metric-label">YEARS OF EXPERIENCE</p>
            </div>
        </div>
    </div>
</section>

<style>
.trust-metrics-section {
    background-color: var(--bg-primary);
    padding: 80px 0;
    font-family: 'Inter', sans-serif;
    color: var(--text-primary);
    overflow: hidden;
}

.metrics-top-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 60px;
    flex-wrap: wrap;
    gap: 30px;
}

.metrics-title {
    font-size: 48px;
    font-weight: 700;
    line-height: 58px;
    margin: 0;
    letter-spacing: -1px;
    color: var(--text-primary);
    flex: 1 1 50%;
    max-width: 600px;
    text-align: left;
    opacity: 0;
    transform: scale(0.8);
    filter: blur(10px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), filter 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.metrics-title.anim-in {
    opacity: 1;
    transform: scale(1);
    filter: blur(0);
}

.metrics-desc {
    color: var(--text-secondary);
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
    flex: 1 1 40%;
    text-align: left;
    opacity: 0;
    transform: scale(0.8);
    filter: blur(10px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.1s, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.1s, filter 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.1s;
}

.metrics-desc.anim-in {
    opacity: 1;
    transform: scale(1);
    filter: blur(0);
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.metric-card {
    background: var(--card-bg);
    border-radius: 16px;
    padding: 40px 30px;
    transition: all 0.4s ease;
    box-shadow: 0 10px 40px var(--shadow-color);
    position: relative;
    z-index: 1;
}

/* Continuous gradient border animation (Without Hover) */
[data-theme="dark"] .metric-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    border-radius: 16px;
    padding: 2px;
    background: linear-gradient(90deg, #00f2fe, #2563eb, #7c3aed, #ff007f);
    background-size: 300% 300%;
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0.4; /* Always visible */
    animation: gradientSpin 3s ease infinite;
    z-index: -1;
    transition: all 0.4s ease;
}

[data-theme="light"] .metric-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    border-radius: 16px;
    padding: 2px;
    background: linear-gradient(90deg, #374a16, #728948, #6fab06, #374a16);
    background-size: 300% 300%;
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0.4; /* Always visible */
    animation: gradientSpin 3s ease infinite;
    z-index: -1;
    transition: all 0.4s ease;
}

@keyframes gradientSpin {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Hover effects */
.metric-card.active:hover {
    transform: translateY(-12px) scale(1.03);
    background: var(--card-bg);
    box-shadow: 0 20px 40px var(--shadow-color);
}

.metric-card:hover::before {
    opacity: 1;
    padding: 3px;
    animation: gradientSpin 2s linear infinite; /* Faster spin on hover */
}

.metric-number {
    font-size: 56px;
    font-weight: 700;
    margin: 0 0 15px 0;
    background: var(--gradient-secondary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
    transition: transform 0.4s ease;
}

.metric-card:hover .metric-number {
    transform: scale(1.1);
}

.metric-label {
    font-size: 12px;
    font-weight: 700;
    color: var(--text-tertiary);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin: 0;
}

/* Animations */
.trust-animate {
    opacity: 0;
    transform: translateY(30px) scale(0.9);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.trust-animate.active {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.metric-card {
    animation: metricPulse 3s ease-in-out infinite;
}

.metric-card:nth-child(1) { transition-delay: 0.1s; animation-delay: 0s; }
.metric-card:nth-child(2) { transition-delay: 0.2s; animation-delay: 0.5s; }
.metric-card:nth-child(3) { transition-delay: 0.3s; animation-delay: 1s; }
.metric-card:nth-child(4) { transition-delay: 0.4s; animation-delay: 1.5s; }

@keyframes metricPulse {
    0%, 100% { 
        box-shadow: 0 10px 40px var(--shadow-color);
    }
    50% { 
        box-shadow: 0 10px 40px var(--shadow-color), 0 0 30px rgba(var(--accent-primary), 0.3);
    }
}

/* Responsive */
@media (max-width: 1200px) {
    .metrics-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .metrics-title {
        font-size: 40px;
    }
}
@media (max-width: 990px) {
    .metrics-top-row {
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 40px;
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .trust-metrics-section {
        padding: 40px 0;;
    }
    
    .metrics-desc {
        text-align: left;
        max-width: 100%;
    }
    
    .metrics-title {
        font-size: 32px;
        max-width: 100%;
    }
    .metric-number {
        font-size: 48px;
    }
}

@media (max-width: 749px) {
    .metrics-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
(function() {
    'use strict';

    function initHeaderReveal(section) {
        var els = section.querySelectorAll('.metrics-title, .metrics-desc');
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

    function initCounters(section) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    var counters = entry.target.querySelectorAll('.counter');
                    counters.forEach(function(counter) {
                        var target = +counter.getAttribute('data-target');
                        var duration = 2000;
                        var increment = target / (duration / 16);
                        
                        var current = 0;
                        var updateCounter = function() {
                            current += increment;
                            if (current < target) {
                                counter.innerText = Math.ceil(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        
                        if (counter.innerText === "0") {
                            updateCounter();
                        }
                    });
                }
            });
        }, { threshold: 0.1 });

        section.querySelectorAll('.trust-animate').forEach(function(el) {
            observer.observe(el);
        });
    }

    function init() {
        document.querySelectorAll('.trust-metrics-section').forEach(function(section) {
            initHeaderReveal(section);
            initCounters(section);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>
