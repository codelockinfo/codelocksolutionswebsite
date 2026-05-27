<section class="cta-section">
    <div class="container">
        <div class="cta-wrapper">
            <div class="cta-content">
                <div class="cta-badge">Let's Work Together</div>
                <h2 class="cta-headline">Ready to Transform Your Business?</h2>
                <p class="cta-description">Take the first step towards digital excellence. Our team is ready to help you achieve your goals with innovative solutions.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="cta-btn primary cta-primary">
                        <span class="button-text-wrapper">Get Started</span>
                    </a>
                    <a href="services.php" class="cta-btn secondary cta-secondary">
                        <span class="button-text-wrapper">Our Services</span>
                    </a>
                </div>
            </div>
            <div class="cta-visual">
                <div class="floating-element element-1"></div>
                <div class="floating-element element-2"></div>
                <div class="floating-element element-3"></div>
            </div>
        </div>
    </div>

    <style>
    .cta-section {
        padding: 80px 0;
        background: var(--bg-primary);
        position: relative;
        overflow: hidden;
    }

    [data-theme="dark"] .cta-wrapper {
        background: linear-gradient(135deg, #06a8b0, #04a26d);
    }

    [data-theme="light"] .cta-wrapper {
        background: var(--gradient-primary);
    }

    .cta-wrapper {
        border-radius: 30px;
        padding: 60px;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        opacity: 0;
        transform: scale(0.8) rotate(-5deg);
        transition: opacity 0.8s cubic-bezier(0.34, 1.56, 0.64, 1), transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        animation: wrapperPulse 4s ease-in-out infinite;
    }

    .cta-wrapper.anim-in {
        opacity: 1;
        transform: scale(1) rotate(0deg);
    }

    @keyframes wrapperPulse {
        0%, 100% {
            box-shadow: 0 20px 60px rgba(var(--accent-primary), 0.3);
        }
        50% {
            box-shadow: 0 20px 60px rgba(var(--accent-primary), 0.5), 0 0 40px rgba(var(--accent-primary), 0.3);
        }
    }

    .cta-content {
        flex: 1;
        position: relative;
        z-index: 2;
    }

[data-theme="dark"] .cta-content {
    background: linear-gradient(135deg, #06a8b0, #04a26d);
}

[data-theme="light"] .cta-content {
    background: var(--gradient-primary);
}
    .cta-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 8px 20px;
        border-radius: 20px;
        color: white;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        animation: badgePulse 2s ease-in-out infinite;
        opacity: 0;
        transform: translateY(20px);
        animation-delay: 0.3s;
    }

    .cta-badge.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .cta-headline {
        font-size: 42px;
        font-weight: 800;
        margin: 0 0 20px 0;
        color: white;
        letter-spacing: -1px;
        line-height: 1.2;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease 0.1s, transform 0.6s ease 0.1s;
    }

    .cta-headline.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .cta-description {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.9);
        margin: 0 0 30px 0;
        line-height: 1.7;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease 0.2s, transform 0.6s ease 0.2s;
    }

    .cta-description.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .cta-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease 0.3s, transform 0.6s ease 0.3s;
    }

    .cta-buttons.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes badgePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .cta-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .cta-btn {
        padding: 16px 32px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .cta-btn.primary {
        background: white;
        color: var(--accent-primary);
    }

    .cta-btn.primary:hover {
        color: var(--accent-primary);
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .cta-btn.secondary {
        background: transparent;
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.5);
    }

    .cta-btn.secondary:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        transform: translateY(-3px);
    }

    .cta-visual {
        flex: 0 0 300px;
        height: 300px;
        position: relative;
    }

    .floating-element {
        position: absolute;
        border-radius: 50%;
        opacity: 0.3;
    }

    .element-1 {
        width: 100px;
        height: 100px;
        background: white;
        top: 20px;
        right: 20px;
        animation: float1 6s ease-in-out infinite;
    }

    .element-2 {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.5);
        bottom: 40px;
        right: 80px;
        animation: float2 5s ease-in-out infinite;
    }

    .element-3 {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.7);
        top: 80px;
        right: 120px;
        animation: float3 4s ease-in-out infinite;
    }

    @keyframes float1 {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    @keyframes float2 {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(-180deg); }
    }

    @keyframes float3 {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-10px) rotate(90deg); }
    }

    [data-theme="light"] .cta-wrapper {
        background: linear-gradient(135deg, #728948, #abd373);
    }

    @media (max-width: 991px) {
        .cta-wrapper {
            flex-direction: column;
            text-align: center;
            padding: 40px;
        }

        .cta-buttons {
            justify-content: center;
        }

        .cta-visual {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .cta-section {
            padding: 40px 0;
        }
        .cta-headline {
            font-size: 32px;
        }

        .cta-buttons {
            flex-direction: column;
        }

        .cta-btn {
            width: 100%;
        }
    }
    </style>

    <script>
    (function() {
        'use strict';

        function initCTAReveal(section) {
            var wrapper = section.querySelector('.cta-wrapper');
            var els = section.querySelectorAll('.cta-badge, .cta-headline, .cta-description, .cta-buttons');
            if (!els.length) return;

            if (!('IntersectionObserver' in window)) {
                if (wrapper) wrapper.classList.add('anim-in');
                els.forEach(function (el) { el.classList.add('anim-in'); });
                return;
            }

            var obs = new IntersectionObserver(function (entries, o) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        if (wrapper) wrapper.classList.add('anim-in');
                        entry.target.classList.add('anim-in');
                    }
                });
            }, { threshold: 0.2 });

            if (wrapper) obs.observe(wrapper);
            els.forEach(function (el) { obs.observe(el); });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var section = document.querySelector('.cta-section');
            if (section) {
                initCTAReveal(section);
            }
        });
    })();
    </script>
</section>
