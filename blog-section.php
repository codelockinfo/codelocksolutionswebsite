<section class="blog-section">
    <div class="container">
        <div class="section-header">
            <span class="blog-subheading ">Blog</span>
            <h2 class="blog-headline">Latest Insights</h2>
            <p class="blog-description">Stay updated with the latest trends, tips, and news from the tech world.</p>
        </div>
        
        <div class="blog-grid">
            <div class="blog-card">
                <div class="blog-image">
                    <img src="images/blog-img/shopify-develoment.png" alt="Transferring Development Store" />
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Transferring Shopify Development Store to Clients</h3>
                    <p class="blog-excerpt">Step-by-step technical instructions for developers handoffs, detailing merchant ownership transition, billing updates, and API transfers.</p>
                    <a href="tranceclient.php" class="blog-link">Read More →</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image">
                    <img src="images/blog-img/shopify plus.webp" alt="Shopify Plus Benefits" />
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">What Are The Benefits Of Shopify Plus When You Upgrade?</h3>
                    <p class="blog-excerpt">Learn about global multi-store setups, wholesale B2B modules, automated scaling scripts, and customized checkout integrations on Shopify Plus.</p>
                    <a href="shopifyplus.php" class="blog-link">Read More →</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image">
                    <img src="images/blog-img/why_Shopify-Experts.webp" alt="Why Hire Shopify Experts" />
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Why Should You Hire Shopify Experts</h3>
                    <p class="blog-excerpt">Building a conversion-optimized store demands technical knowledge. Explore how hiring certified Shopify developers accelerates launching products.</p>
                    <a href="hireexpert.php" class="blog-link">Read More →</a>
                </div>
            </div>
        </div>

        <div class="blog-footer">
            <a href="blogs.php" class="view-all-btn cta-primary">
                <span>View All Articles</span>
            </a>
        </div>
    </div>

    <style>
    .blog-section {
        padding: 80px 0;
        background: var(--bg-primary);
        position: relative;
        overflow: hidden;
    }

    .blog-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .blog-subheading  {
        display: inline-block;
        background: var(--gradient-secondary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 14px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .blog-subheading .anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .blog-headline {
        font-size: 42px;
        font-weight: 800;
        margin: 0 0 16px 0;
        color: var(--text-primary);
        letter-spacing: -1px;
        line-height: 1.2;
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.7s ease 0.1s, transform 0.7s ease 0.1s;
    }

    .blog-headline.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .blog-description {
        font-size: 16px;
        color: var(--text-secondary);
        margin: 0;
        line-height: 1.7;
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.7s ease 0.2s, transform 0.7s ease 0.2s;
    }

    .blog-description.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 50px;
    }

    .blog-card {
        background: var(--card-bg);
        border: 1px solid var(--card-border);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
        box-shadow: 0 0 15px var(--shadow-color);
        backdrop-filter: blur(10px);
        animation: cardFloat 5s ease-in-out infinite, cardShimmer 3s ease-in-out infinite;
        animation-delay: var(--card-delay, 0s), var(--shimmer-delay, 0s);
        opacity: 0;
        transform: perspective(1000px) rotateY(-30deg) translateX(-50px);
        transition: opacity 0.8s cubic-bezier(0.34, 1.56, 0.64, 1), transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .blog-card.anim-in {
        opacity: 1;
        transform: perspective(1000px) rotateY(0deg) translateX(0);
    }

    @keyframes cardFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }

    @keyframes cardShimmer {
        0%, 100% {
            border-color: var(--card-border);
        }
        50% {
            border-color: var(--accent-primary);
            box-shadow: 0 0 15px var(--shadow-color), 0 0 20px rgba(var(--accent-primary), 0.2);
        }
    }

    .blog-card:nth-child(1) { --card-delay: 0s; --shimmer-delay: 0s; }
    .blog-card:nth-child(2) { --card-delay: 0.5s; --shimmer-delay: 0.5s; }
    .blog-card:nth-child(3) { --card-delay: 1s; --shimmer-delay: 1s; }

    .blog-card:hover {
        border-color: var(--accent-primary);
        box-shadow: 0 20px 40px var(--shadow-color), 0 0 30px rgba(var(--accent-primary), 0.3);
        transform: translateY(-10px) scale(1.02);
        animation: none;
    }

    .blog-image {
        position: relative;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .blog-category {
        position: absolute;
        top: 20px;
        left: 20px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 6px 14px;
        border-radius: 20px;
        color: white;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .blog-date {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        padding: 6px 14px;
        border-radius: 20px;
        color: white;
        font-size: 12px;
        font-weight: 600;
    }

    .blog-content {
        padding: 30px;
    }

    .blog-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--text-primary);
        margin: 0 0 15px 0;
        line-height: 1.4;
    }

    .blog-excerpt {
        font-size: 15px;
        line-height: 1.7;
        color: var(--text-secondary);
        margin: 0 0 20px 0;
    }

    .blog-link {
        display: inline-block;
        color: var(--accent-primary);
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .blog-link:hover {
        color: var(--text-primary);
        transform: translateX(5px);
    }

    .blog-footer {
        text-align: center;
    }

    .view-all-btn {
        display: inline-block;
        padding: 16px 40px;
        background: var(--gradient-primary);
        color: white;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .view-all-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px var(--shadow-color);
    }

    @media (max-width: 991px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 767px) {
        .blog-section {
            padding: 40px 0;
        }
        .blog-grid {
            grid-template-columns: 1fr;
        }

        .blog-headline {
            font-size: 32px;
        }
    }
    </style>

    <script>
    (function() {
        'use strict';

        function initHeaderReveal(section) {
            var els = section.querySelectorAll('.blog-subheading , .blog-headline, .blog-description, .blog-footer');
            var cards = section.querySelectorAll('.blog-card');
            if (!els.length) return;

            if (!('IntersectionObserver' in window)) {
                els.forEach(function (el) { el.classList.add('anim-in'); });
                cards.forEach(function (card) { card.classList.add('anim-in'); });
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
            cards.forEach(function (card) { obs.observe(card); });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var section = document.querySelector('.blog-section');
            if (section) {
                initHeaderReveal(section);
            }
        });
    })();
    </script>
</section>
