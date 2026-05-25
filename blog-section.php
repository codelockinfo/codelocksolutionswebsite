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
                    <div class="image-placeholder">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                        </svg>
                    </div>
                    <div class="blog-category">E-commerce</div>
                    <div class="blog-date">May 15, 2024</div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">10 Shopify Apps to Boost Your Store Sales</h3>
                    <p class="blog-excerpt">Discover the top Shopify apps that can help increase conversions, improve customer experience, and drive more sales for your e-commerce store.</p>
                    <a href="blogs.php" class="blog-link">Read More →</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image">
                    <div class="image-placeholder">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <div class="blog-category">Web Development</div>
                    <div class="blog-date">May 10, 2024</div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">The Future of Web Development in 2024</h3>
                    <p class="blog-excerpt">Explore the latest trends and technologies shaping the future of web development, from AI integration to progressive web apps.</p>
                    <a href="blogs.php" class="blog-link">Read More →</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image">
                    <div class="image-placeholder">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-9 16H5v-2h6v2zm8 0h-6v-2h6v2zm0-4H5v-2h14v2zm0-4H5V8h14v2z"/>
                        </svg>
                    </div>
                    <div class="blog-category">Digital Marketing</div>
                    <div class="blog-date">May 5, 2024</div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Digital Marketing Strategies for Small Businesses</h3>
                    <p class="blog-excerpt">Learn effective digital marketing strategies that can help small businesses compete and grow in today's competitive online landscape.</p>
                    <a href="blogs.php" class="blog-link">Read More →</a>
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
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .image-placeholder {
        color: white;
        opacity: 0.8;
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
