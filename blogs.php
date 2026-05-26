<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/service-pages.css" />

<!-- page-title -->
<div class="ttm-page-title-row redesign-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box text-center">
                    <div class="page-title-heading">
                        <h1 class="title">Blog & Insights</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                        <span>Blog</span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- page-title end-->

<div class="service-body-redesign body-section ttm-row">
    <div class="container">
        <!-- Resources Section Title -->
        <h2 class="resources-section-title">More Resources</h2>

        <!-- Search & Filter Controls -->
        <div class="blog-filter-section">
            <div class="blog-search-box">
                <input type="text" id="blogSearch" placeholder="Search articles..." />
                <i class="fa fa-search"></i>
            </div>
            <div class="blog-categories">
                <button class="blog-cat-btn active" data-filter="all">All Articles</button>
                <button class="blog-cat-btn" data-filter="pricing">Pricing & Budget</button>
                <button class="blog-cat-btn" data-filter="strategy">Shopify Strategy</button>
                <button class="blog-cat-btn" data-filter="growth">Store Growth</button>
                <button class="blog-cat-btn" data-filter="tech">Technical Guides</button>
            </div>
        </div>
        
        <!-- Split Hero Section -->
        <div class="blog-hero-split">
            <!-- Left Large Card (Featured Blog) -->
            <a href="pricing-blog.php" class="hero-large-card blog-item-card" data-category="pricing">
                <div class="hero-large-image">
                    <img src="images/blog-img/pricing.png" alt="Shopify Pricing" />
                </div>
                <h2 class="hero-large-title">
                    Shopify Website Design Pricing in 2024-2025: Clear Breakdown for Successful E-commerce Scaling
                </h2>
                <div class="hero-large-author">
                    <img src="images/logo.png" alt="Codelock solutions" />
                    <div class="author-meta-info">
                        <span class="author-name-text">Codelock Team</span>
                        <span class="author-date-text">July 9, 2024</span>
                    </div>
                </div>
            </a>

            <!-- Right Sidebar List (4 Articles) -->
            <div class="hero-sidebar-list">
                <a href="custom_web.php" class="sidebar-list-item blog-item-card" data-category="strategy">
                    <div class="sidebar-item-content">
                        <h4 class="sidebar-item-title">Shopify vs Custom Website: Which One to Invest in 2024?</h4>
                        <span class="sidebar-item-date">July 2, 2024</span>
                    </div>
                    <div class="sidebar-item-thumb">
                        <img src="images/blog-img/custom_web.webp" alt="Shopify vs Custom" />
                    </div>
                </a>

                <a href="hireexpert.php" class="sidebar-list-item blog-item-card" data-category="strategy">
                    <div class="sidebar-item-content">
                        <h4 class="sidebar-item-title">Why Should You Hire Shopify Experts for Your E-commerce Growth?</h4>
                        <span class="sidebar-item-date">June 25, 2024</span>
                    </div>
                    <div class="sidebar-item-thumb">
                        <img src="images/blog-img/why_Shopify-Experts.webp" alt="Hire Shopify Experts" />
                    </div>
                </a>

                <a href="revenue24.php" class="sidebar-list-item blog-item-card" data-category="growth">
                    <div class="sidebar-item-content">
                        <h4 class="sidebar-item-title">How to Increase Average Shopify Store Revenue in 2024</h4>
                        <span class="sidebar-item-date">June 24, 2024</span>
                    </div>
                    <div class="sidebar-item-thumb">
                        <img src="images/blog-img/Increase-shopify-sales.png" alt="Increase Shopify Sales" />
                    </div>
                </a>

                <a href="shopifyplus.php" class="sidebar-list-item blog-item-card" data-category="strategy">
                    <div class="sidebar-item-content">
                        <h4 class="sidebar-item-title">What Are The Benefits Of Shopify Plus When You Upgrade?</h4>
                        <span class="sidebar-item-date">June 20, 2024</span>
                    </div>
                    <div class="sidebar-item-thumb">
                        <img src="images/blog-img/shopify plus.webp" alt="Shopify Plus" />
                    </div>
                </a>
            </div>
        </div>

        <!-- Resources Card Grid -->
        <div class="row" id="blogGrid">
            <!-- Card 1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="pricing">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/pricing.png" alt="Shopify Pricing" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Pricing</span></div>
                        <h4 class="resource-card-title">
                            <a href="pricing-blog.php">Shopify Website Design Pricing in 2024-2025</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Planning to build or revamp your Shopify store? Get a clear, comprehensive breakdown of website design costs, theme selections, and customization budgets.
                        </p>
                        <a href="pricing-blog.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="strategy">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/custom_web.webp" alt="Shopify vs Custom" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Strategy</span></div>
                        <h4 class="resource-card-title">
                            <a href="custom_web.php">Shopify vs Custom Website: Which One to Invest in 2024?</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Compare Shopify's convenience and app integrations against custom-built platforms. Discover which infrastructure matches your business goals.
                        </p>
                        <a href="custom_web.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="strategy">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/why_Shopify-Experts.webp" alt="Why Hire Shopify Experts" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Strategy</span></div>
                        <h4 class="resource-card-title">
                            <a href="hireexpert.php">Why Should You Hire Shopify Experts</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Building a conversion-optimized store demands technical knowledge. Explore how hiring certified Shopify developers accelerates launching products.
                        </p>
                        <a href="hireexpert.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="growth">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/Increase-shopify-sales.png" alt="Increase Store Revenue" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Store Growth</span></div>
                        <h4 class="resource-card-title">
                            <a href="revenue24.php">How to Increase Average Shopify Store Revenue in 2024</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Unlock new store scaling models. Review checkout optimization rules, upsells, cart triggers, and conversion audits to increase transaction metrics.
                        </p>
                        <a href="revenue24.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="strategy">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/shopify plus.webp" alt="Shopify Plus Benefits" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Strategy</span></div>
                        <h4 class="resource-card-title">
                            <a href="shopifyplus.php">What Are The Benefits Of Shopify Plus When You Upgrade?</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Learn about global multi-store setups, wholesale B2B modules, automated scaling scripts, and customized checkout integrations on Shopify Plus.
                        </p>
                        <a href="shopifyplus.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="pricing">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/setup.webp" alt="Shopify Startup Cost" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Pricing</span></div>
                        <h4 class="resource-card-title">
                            <a href="coststart.php">How Much Does It Cost to Start or Run a Shopify Store?</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Calculate subscription plans, domain names, transaction fees, theme pricing, and application add-ons to forecast launching budgets accurately.
                        </p>
                        <a href="coststart.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="growth">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/What-is-Shopify-Collabs.jpg" alt="Shopify Collabs Guide" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Store Growth</span></div>
                        <h4 class="resource-card-title">
                            <a href="collabs.php">Shopify Collabs – Everything You Need to Know in 2024</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Harness influencer networks inside Shopify. Learn how Shopify Collabs tracks affiliate links, manages creators, and handles automated commissions.
                        </p>
                        <a href="collabs.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 blog-item-card" data-category="tech">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="images/blog-img/shopify-develoment.png" alt="Transferring Development Store" />
                    </div>
                    <div class="resource-card-body">
                        <div class="resource-card-tagline">CodelockSolutions. <span>Technical</span></div>
                        <h4 class="resource-card-title">
                            <a href="tranceclient.php">Transferring Shopify Development Store to Clients</a>
                        </h4>
                        <p class="resource-card-excerpt">
                            Step-by-step technical instructions for developers handoffs, detailing merchant ownership transition, billing updates, and API transfers.
                        </p>
                        <a href="tranceclient.php" class="resource-card-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ============================================================
       STEP 1 — Mark every element we want to animate
       (data-sr + optional --sr-delay for stagger)
    ============================================================ */
    function tag(el, type, delayS) {
        if (!el) return;
        el.setAttribute('data-sr', type);
        if (delayS) el.style.setProperty('--sr-delay', delayS + 's');
    }

    /* Page title */
    tag(document.querySelector('.redesign-page-title-row .title-box'), 'fadedown', 0);

    /* Hero large card */
    tag(document.querySelector('.hero-large-card'), 'left', 0);

    /* Sidebar list items — staggered right slide */
    document.querySelectorAll('.sidebar-list-item').forEach((el, i) => {
        tag(el, 'right', (i * 0.1).toFixed(2));
    });

    /* "More Resources" title */
    tag(document.querySelector('.resources-section-title'), 'fadeup', 0);

    /* Filter bar */
    tag(document.querySelector('.blog-filter-section'), 'scale', 0.1);

    /* Grid cards — staggered fade-up, reset stagger every 3 (row) */
    document.querySelectorAll('#blogGrid > .blog-item-card').forEach((el, i) => {
        tag(el, 'fadeup', ((i % 3) * 0.1).toFixed(2));
    });

    /* ============================================================
       STEP 2 — After the first paint, apply the hidden state
       (using requestAnimationFrame prevents "flash of invisible")
    ============================================================ */
    requestAnimationFrame(() => {
        /* Force a style read so the browser has already painted */
        document.querySelectorAll('[data-sr]').forEach(el => {
            /* Temporarily disable transition while setting hidden state */
            el.style.transition = 'none';
            el.classList.remove('sr-visible');

            /* Force reflow — this commits the hidden style */
            void el.offsetHeight;

            /* Re-enable transitions */
            el.style.transition = '';
        });

        /* ============================================================
           STEP 3 — IntersectionObserver: toggle .sr-visible both ways
                     so animation replays every time the element enters
        ============================================================ */
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const el = entry.target;

                if (entry.isIntersecting) {
                    el.classList.add('sr-visible');

                    /* Title underline */
                    if (el.classList.contains('resources-section-title')) {
                        setTimeout(() => el.classList.add('title-line-in'), 300);
                    }
                } else {
                    /* Remove visible → element resets to hidden state ready to re-animate */
                    el.classList.remove('sr-visible');

                    /* Reset title underline */
                    if (el.classList.contains('resources-section-title')) {
                        el.classList.remove('title-line-in');
                    }
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        document.querySelectorAll('[data-sr]').forEach(el => observer.observe(el));
    });

    /* ============================================================
       SEARCH + CATEGORY FILTER
    ============================================================ */
    const searchInput   = document.getElementById('blogSearch');
    const filterButtons = document.querySelectorAll('.blog-cat-btn');
    const allCards      = document.querySelectorAll('.blog-item-card');
    const blogGrid      = document.getElementById('blogGrid');

    /* "No results" element */
    let noBlogsEl = document.querySelector('.no-blogs-found');
    if (!noBlogsEl) {
        noBlogsEl = document.createElement('div');
        noBlogsEl.className = 'no-blogs-found';
        noBlogsEl.style.display = 'none';
        noBlogsEl.innerHTML = `
            <i class="fa fa-search"></i>
            <h4>No Articles Found</h4>
            <p>We couldn't find any articles matching your search query or selected category.</p>
        `;
        blogGrid.parentNode.appendChild(noBlogsEl);
    }

    let activeFilter = 'all';
    let searchQuery  = '';

    const heroSplit = document.querySelector('.blog-hero-split');

    function filterCards() {
        let visible = 0;

        /* Show hero split only on "All Articles" with no search query */
        const showHero = (activeFilter === 'all' && searchQuery === '');
        if (heroSplit) {
            if (showHero) {
                heroSplit.style.transition = 'opacity 0.4s ease, transform 0.4s cubic-bezier(0.16,1,0.3,1)';
                heroSplit.style.opacity    = '1';
                heroSplit.style.transform  = 'translateY(0)';
                heroSplit.style.display    = '';
            } else {
                heroSplit.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                heroSplit.style.opacity    = '0';
                heroSplit.style.transform  = 'translateY(-12px)';
                setTimeout(() => { heroSplit.style.display = 'none'; }, 300);
            }
        }

        allCards.forEach((card, idx) => {
            /* Skip hero/sidebar cards when not showing hero */
            const isHeroCard = card.closest('.blog-hero-split');
            if (isHeroCard) return;

            const category  = card.getAttribute('data-category') || '';
            const titleEl   = card.querySelector('.hero-large-title, .sidebar-item-title, .resource-card-title a');
            const title     = titleEl   ? titleEl.textContent.toLowerCase()   : '';
            const excerptEl = card.querySelector('.resource-card-excerpt');
            const excerpt   = excerptEl ? excerptEl.textContent.toLowerCase() : '';

            const matchFilter = (activeFilter === 'all' || category === activeFilter);
            const matchSearch = title.includes(searchQuery) || excerpt.includes(searchQuery);

            if (matchFilter && matchSearch) {
                card.style.display = '';
                card.style.opacity    = '0';
                card.style.transform  = 'translateY(24px) scale(0.96)';
                const delay = (idx % 3) * 80;
                setTimeout(() => {
                    card.style.transition = 'opacity 0.5s cubic-bezier(0.16,1,0.3,1), transform 0.5s cubic-bezier(0.16,1,0.3,1)';
                    card.style.opacity    = '1';
                    card.style.transform  = 'translateY(0) scale(1)';
                }, delay + 10);
                visible++;
            } else {
                card.style.display = 'none';
            }
        });

        noBlogsEl.style.display = visible === 0 && !showHero ? 'block' : 'none';
    }

    searchInput.addEventListener('input', e => {
        searchQuery = e.target.value.toLowerCase().trim();
        filterCards();
    });

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            activeFilter = this.dataset.filter;
            filterCards();
        });
    });

    /* Search icon colour sync */
    const searchIcon = document.querySelector('.blog-search-box i');
    if (searchInput && searchIcon) {
        searchInput.addEventListener('focus', () => { searchIcon.style.color = 'var(--accent-primary)'; });
        searchInput.addEventListener('blur',  () => { searchIcon.style.color = ''; });
    }

});
</script>

<?php include 'footer.php'; ?>