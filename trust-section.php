<section class="trust-metrics-section">
    <div class="container">
        <div class="metrics-top-row">
            <h2 class="metrics-title trust-animate">Performance Metrics.</h2>
            <p class="metrics-desc trust-animate">
                Delivering measurable impact through strategic<br>design, development, and growth optimization.
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
    background-color: #070514; /* Matches hero section */
    padding: 80px 0;
    font-family: 'Inter', sans-serif;
    color: #ffffff;
    overflow: hidden;
}

.metrics-top-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 60px;
    flex-wrap: wrap;
    gap: 20px;
}

.metrics-title {
    font-size: 48px;
    font-weight: 700;
    margin: 0;
    letter-spacing: -1px;
    color: #fff;
}

.metrics-desc {
    color: #a1a1aa;
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
    text-align: right;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.metric-card {
    background: #0d0f17;
    border-radius: 16px;
    padding: 40px 30px;
    transition: all 0.4s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    position: relative;
    z-index: 1;
}

/* Continuous gradient border animation (Without Hover) */
.metric-card::before {
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

@keyframes gradientSpin {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Hover effects */
.metric-card.active:hover {
    transform: translateY(-12px) scale(1.03);
    background: #111420;
    box-shadow: 0 20px 40px rgba(124, 58, 237, 0.3);
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
    background: linear-gradient(135deg, #00f2fe, #ff007f);
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
    color: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin: 0;
}

/* Animations */
.trust-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.trust-animate.active {
    opacity: 1;
    transform: translateY(0);
}

.metric-card:nth-child(1) { transition-delay: 0.1s; }
.metric-card:nth-child(2) { transition-delay: 0.2s; }
.metric-card:nth-child(3) { transition-delay: 0.3s; }
.metric-card:nth-child(4) { transition-delay: 0.4s; }

/* Responsive */
@media (max-width: 1200px) {
    .metrics-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .metrics-title {
        font-size: 40px;
    }
}

@media (max-width: 768px) {
    .trust-metrics-section {
        padding: 40px 0;;
    }
    .metrics-top-row {
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 40px;
    }
    .metrics-desc {
        text-align: left;
    }
    .metrics-grid {
        grid-template-columns: 1fr;
    }
    .metrics-title {
        font-size: 32px;
    }
    .metric-number {
        font-size: 48px;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Scroll animation observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                // Trigger counter if it's a metric card
                const counters = entry.target.querySelectorAll('.counter');
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000; // ms
                    const increment = target / (duration / 16); // 60fps
                    
                    let current = 0;
                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.innerText = Math.ceil(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    
                    // Only run once
                    if (counter.innerText === "0") {
                        updateCounter();
                    }
                });
                
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.trust-animate').forEach((el) => {
        observer.observe(el);
    });
});
</script>
