<!-- Shopify Apps Section -->
<section class="shopify-apps-section">
    <div class="apps-container">
        <div class="apps-content-wrapper">
            <div class="apps-badge">
                <span class="badge-dot"></span>
                <span class="badge-text">Shopify App Development</span>
            </div>

            <h2 class="apps-headline">High-Converting Shopify Apps Developed to Scale Sales</h2>

            <p class="apps-description">
                Power up your online store with our high-performing Shopify apps. From custom GDPR cookie consent banner tools to drag-and-drop form builders and AI-powered product description generators, we develop tools trusted by thousands of e-commerce merchants worldwide.
            </p>

            <a href="allapps.php" class="apps-cta cta-primary">
                <span>View All Apps</span>
                <svg class="cta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <div class="apps-cards-wrapper">
            <!-- App Card 1 -->
            <a href="https://apps.shopify.com/easy-cookie-banner-gdpr-eu" target="_blank">
                <div class="app-card">
                    <div class="app-screenshot">
                        <img src="images/apps/app1-icon-removebg-preview.png" alt="Easy Cookie Bar GDPR / CCPA">
                    </div>
                    <div class="app-details">
                        <h3 class="app-name">Easy Cookie Bar GDPR / CCPA</h3>
                        <p class="app-desc">Compliant cookie consent banner & privacy policy alerts for EU/UK/US e-commerce markets.</p>
                        <div class="app-stats">
                            <span class="app-rating">★ 4.8</span>
                            <span class="app-installs">5K+ installs</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- App Card 2 -->
            <a href="https://apps.shopify.com/easy-form-builder-email" target="_blank">
                <div class="app-card">
                    <div class="app-screenshot">
                        <img src="images/apps/app2-icon-removebg-preview.png" alt="Easy Form Builder & Contact Forms">
                    </div>
                    <div class="app-details">
                        <h3 class="app-name">Easy Form Builder & Contact Forms</h3>
                        <p class="app-desc">Create responsive custom checkout registration forms, wholesale order forms, and popups.</p>
                        <div class="app-stats">
                            <span class="app-rating">★ 4.9</span>
                            <span class="app-installs">8K+ installs</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- App Card 3 -->
            <a href="https://apps.shopify.com/rewriter-mega-description">
                <div class="app-card">
                    <div class="app-screenshot">
                        <img src="images/apps/app3-icon-removebg-preview.png" alt="AI Product Description ReWriter">
                    </div>
                    <div class="app-details">
                        <h3 class="app-name">AI Product Description ReWriter</h3>
                        <p class="app-desc">Automate product descriptions and boost Shopify SEO rankings with AI content generators.</p>
                        <div class="app-stats">
                            <span class="app-rating">★ 4.7</span>
                            <span class="app-installs">3K+ installs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<style>
    /* Shopify Apps Section Styles */
    .shopify-apps-section {
        position: relative;
        padding: 80px 40px;
        background: var(--bg-primary);
        color: var(--text-primary);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
    }

    [data-theme="dark"] .shopify-apps-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(0, 242, 254, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(255, 0, 127, 0.06) 0%, transparent 50%);
        pointer-events: none;
        z-index: 0;
    }

    [data-theme="light"] .shopify-apps-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgb(114 137 72 / 7%) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgb(207 255 121 / 13%) 0%, transparent 50%);
        pointer-events: none;
        z-index: 0;
    }

    .apps-container {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 80px;
        align-items: center;
        z-index: 1;
    }

    .apps-content-wrapper {
        opacity: 0;
        transform: translateX(-50px) scale(0.9);
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .apps-content-wrapper.anim-in {
        opacity: 1;
        transform: translateX(0) scale(1);
    }

    .apps-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 22px;
        background: var(--badge-bg);
        border: 1px solid var(--badge-border);
        border-radius: 50px;
        margin-bottom: 30px;
    }

    .apps-badge .badge-dot {
        width: 8px;
        height: 8px;
        background: var(--accent-primary);
        border-radius: 50%;
        animation: dotPulse 2s ease-in-out infinite;
        box-shadow: 0 0 8px var(--accent-primary);
    }

    .apps-badge .badge-text {
        color: var(--accent-primary);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.1s, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.1s;
    }

    .badge-text.anim-in {
        opacity: 1;
        transform: translateX(0);
    }

    .apps-headline {
        font-size: clamp(36px, 4.5vw, 52px);
        font-weight: 800;
        line-height: 1.15;
        color: var(--text-primary);
        margin-bottom: 25px;
        opacity: 0;
        transform: translateX(-30px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.2s, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.2s;
    }

    .apps-headline.anim-in {
        opacity: 1;
        transform: translateX(0);
    }

    .apps-description {
        font-size: 17px;
        line-height: 1.75;
        color: var(--text-secondary);
        margin-bottom: 40px;
        max-width: 500px;
        opacity: 0;
        transform: translateX(-30px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.3s, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.3s;
    }

    .apps-description.anim-in {
        opacity: 1;
        transform: translateX(0);
    }

    .apps-cta {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 32px;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        border-radius: 12px;
        background: var(--gradient-primary);
        color: #fff;
        border: none;
        box-shadow: 0 4px 18px rgba(var(--accent-primary), 0.25);
        transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        position: relative;
        overflow: hidden;
    }

    .apps-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.35), transparent);
        transition: left 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .apps-cta:hover::before {
        left: 100%;
    }

    .apps-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px var(--shadow-color);
    }

    .apps-cta .cta-icon {
        width: 18px;
        height: 18px;
        transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .apps-cta:hover .cta-icon {
        transform: translateX(4px);
    }

    .apps-cards-wrapper {
        display: flex;
        flex-direction: column;
        gap: 25px;
        animation: fadeInUp 1s cubic-bezier(0.25, 1, 0.5, 1) 0.5s both;
        perspective: 1000px;
    }

    .app-card {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 20px 25px;
        background: var(--card-bg);
        border: 1px solid transparent;
        backdrop-filter: blur(15px);
        border-radius: 16px;
        transition: border-color 0.4s ease, box-shadow 0.4s ease, background 0.4s ease, transform 0.1s ease;
        cursor: pointer;
        animation: cardFloat 6s ease-in-out infinite;
        transform-style: preserve-3d;
        transform: translateZ(0);
        will-change: transform;
    }

    .app-card:hover {
        animation: none !important;
        box-shadow: 0 18px 45px var(--shadow-color);
        border-color: var(--card-border);
    }

    .app-icon {
        width: 50px;
        height: 50px;
        background: var(--gradient-secondary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .app-icon svg {
        width: 24px;
        height: 24px;
        color: var(--bg-primary);
    }

    .app-screenshot {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        overflow: hidden;
        flex-shrink: 0;
        background: var(--bg-secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translateZ(30px);
        transition: transform 0.4s ease;
    }

    .app-card:hover .app-screenshot {
        transform: translateZ(40px) scale(1.05);
    }

    .app-screenshot img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .app-details {
        flex: 1;
        transform: translateZ(15px);
        transition: transform 0.4s ease;
    }
    
    .app-card:hover .app-details {
        transform: translateZ(25px);
    }

    .app-name {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 6px;
    }

    .app-desc {
        font-size: 13px;
        color: var(--text-secondary);
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .app-stats {
        display: flex;
        gap: 15px;
    }

    .app-rating {
        font-size: 12px;
        color: var(--accent-primary);
        font-weight: 600;
    }

    .app-installs {
        font-size: 12px;
        color: var(--text-tertiary);
        font-weight: 500;
    }

    /* Responsive Design for Apps Section */
    @media (max-width: 990px) {
        .apps-container {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 50px;
        }

        .apps-content-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .apps-description {
            margin: 0 auto 40px;
        }

        .apps-cards-wrapper {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            text-align: left;
        }
    }

    @media (max-width: 768px) {
        .shopify-apps-section {
            padding: 40px 20px;
        }

        .apps-headline {
            font-size: 32px;
        }

        .apps-description {
            font-size: 15px;
        }
        .apps-cta.cta-primary {
            width: auto;
        }
    }

    @media (max-width: 749px) {
        .app-card {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .app-stats {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .apps-headline {
            font-size: 28px;
        }

        .apps-cta {
            width: 100%;
            justify-content: center;
    }
</style>

<!-- JavaScript for App Cards fluid 3D Tilt Effect -->
<script>
(function() {
    'use strict';

    function initHeaderReveal(section) {
        var contentWrapper = section.querySelector('.apps-content-wrapper');
        var els = section.querySelectorAll('.badge-text, .apps-headline, .apps-description');
        if (!els.length) return;

        if (!('IntersectionObserver' in window)) {
            if (contentWrapper) contentWrapper.classList.add('anim-in');
            els.forEach(function (el) { el.classList.add('anim-in'); });
            return;
        }

        var obs = new IntersectionObserver(function (entries, o) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    if (contentWrapper) contentWrapper.classList.add('anim-in');
                    entry.target.classList.add('anim-in');
                } else {
                    if (contentWrapper) contentWrapper.classList.remove('anim-in');
                    entry.target.classList.remove('anim-in');
                }
            });
        }, { threshold: 0.2 });

        if (contentWrapper) obs.observe(contentWrapper);
        els.forEach(function (el) { obs.observe(el); });
    }

    function initAppTilt() {
        var cards = document.querySelectorAll('.app-card');

        cards.forEach(function(card) {
            card.addEventListener('mousemove', function(e) {
                card.style.transition = 'none';

                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;

                var xc = rect.width / 2;
                var yc = rect.height / 2;

                var dx = x - xc;
                var dy = y - yc;

                var tiltX = -(dy / yc) * 8;
                var tiltY = (dx / xc) * 8;

                card.style.transform = 'rotateX(' + tiltX + 'deg) rotateY(' + tiltY + 'deg) scale3d(1.03, 1.03, 1.03)';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), border-color 0.4s ease, box-shadow 0.4s ease, background 0.4s ease';
                card.style.transform = 'rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            });
        });
    }

    function init() {
        document.querySelectorAll('.shopify-apps-section').forEach(function(section) {
            initHeaderReveal(section);
        });
        initAppTilt();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>