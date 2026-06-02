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
                    <img src="images/blog-img/blog1.webp" alt="Why Shopify is Best in 2026" />
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Why Shopify is the Best eCommerce Platform for Growing Businesses in 2026</h3>
                    <p class="blog-excerpt">Explore why Shopify remains the leading eCommerce platform for growing brands in 2026, offering unmatched scalability, security, and sales-focused features.</p>
                    <a href="why-shopify-best-ecommerce-platform-2026.php" class="blog-link">Read More →</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image">
                    <img src="images/blog-img/why_Shopify-Experts.webp" alt="Shopify vs WooCommerce vs Magento" />
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Top 10 Reasons Entrepreneurs Choose Shopify Over WooCommerce and Magento</h3>
                    <p class="blog-excerpt">A detailed comparison of Shopify, WooCommerce, and Magento. Learn why modern entrepreneurs choose Shopify's hosted ease over complex self-hosted alternatives.</p>
                    <a href="shopify-vs-woocommerce-magento.php" class="blog-link">Read More →</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image">
                    <img src="images/blog-img/shopify-develoment.png" alt="Best Shopify Agency in Surat" />
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Best Shopify Development Agency in Surat: How to Choose the Right Partner</h3>
                    <p class="blog-excerpt">Find the ideal Shopify development agency in Surat. Discover key factors like portfolio, reviews, and communication to select your perfect development partner.</p>
                    <a href="best-shopify-agency-surat.php" class="blog-link">Read More →</a>
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
        padding: 40px 0;
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
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), 
                    box-shadow 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                    border-color 0.5s ease;
        box-shadow: 0 0 15px var(--shadow-color);
        backdrop-filter: blur(10px);
        opacity: 0;
        transform: perspective(1000px) rotateY(-30deg) translateX(-50px);
        transition: opacity 0.8s cubic-bezier(0.34, 1.56, 0.64, 1), 
                    transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1),
                    box-shadow 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                    border-color 0.5s ease;
    }

    .blog-card.anim-in {
        opacity: 1;
        transform: perspective(1000px) rotateY(0deg) translateX(0);
    }

    .blog-card:hover {
        border-color: var(--accent-primary);
        box-shadow: 0 20px 40px var(--shadow-color), 0 0 30px rgba(var(--accent-primary), 0.3);
        transform: translateY(-10px) scale(1.02);
    }

    .blog-image {
        position: relative;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .blog-image img {
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .blog-card:hover .blog-image img {
        transform: scale(1.1);
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
        transition: color 0.3s ease;
    }

    .blog-card:hover .blog-title {
        color: var(--accent-primary);
    }

    .blog-excerpt {
        font-size: 15px;
        line-height: 1.7;
        color: var(--text-secondary);
        margin: 0 0 20px 0;
        transition: color 0.3s ease;
    }

    .blog-card:hover .blog-excerpt {
        color: var(--text-primary);
    }

    .blog-link {
        display: inline-block;
        color: var(--accent-primary);
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .blog-link:hover {
        color: var(--text-primary);
        transform: translateX(8px);
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
            padding: 30px 0;
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
