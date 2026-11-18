<?php 
$is_products_page = true;
include 'header.php';
?>

<link rel="stylesheet" type="text/css" href="css/fixnex-product.css?v=9" />

<div class="fn-page-wrapper">
    <!-- Ambient ambient glow elements -->
    <div class="fn-ambient-glow fn-glow-1"></div>
    <div class="fn-ambient-glow fn-glow-2"></div>

    <!-- ==========================================================================
         HERO SECTION
         ========================================================================== -->
    <section class="landing-hero reveal-section is-visible">
        <div class="landing-hero__inner">
            
            <!-- Left Side: Text Copy & CTA Buttons -->
            <div class="landing-hero__copy">
                <div class="landing-pill">
                    <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                    <span>ONE PLATFORM. ENDLESS SERVICES</span>
                </div>

                <h1 class="landing-title">
                    Trusted Home Services.
                    <span>Made Easy with FixNex.</span>
                </h1>

                <p class="landing-subtitle">
                    Finding reliable home services has never been easier. Browse verified professionals, compare services, and book instantly with confidence. Whether you need repairs, maintenance, installations, or cleaning, our platform provides a seamless experience with live updates, secure transactions, quality assurance, and dedicated support to keep your home running smoothly.
                </p>

                <div class="landing-actions">
                    <a 
                        href="https://fixnex.in" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="landing-btn landing-btn--primary"
                    >
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        <span>Find Services</span>
                    </a>

                    <div class="landing-provider-btn-wrapper">
                        <a 
                            href="https://fixnex.in/merchant/onboarding" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="landing-btn landing-btn--secondary"
                        >
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
                            <span>Become a Provider</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Orbit Animation & Center Provider -->
            <div class="landing-hero__visual">
                <div class="landing-orbit landing-orbit--outer"></div>
                <div class="landing-orbit landing-orbit--inner"></div>

                <!-- Center Technician / Provider Photo -->
                <div class="landing-provider">
                    <div class="landing-provider__photo">
                        <picture>
                            <source media="(max-width: 640px)" srcset="images/fixnex/person-mb.webp" />
                            <img src="images/fixnex/person.webp" alt="FixNex Professional" loading="eager" />
                        </picture>
                    </div>
                </div>

                <!-- Orbiting Service Cards -->
                <!-- 1. AC Repair -->
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="landing-service-card landing-card-ac">
                    <em>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </em>
                    <img src="images/fixnex/ac-repair.webp" alt="AC Repair" />
                    <div class="card-footer-info">
                        <span class="landing-headphone-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                        </span>
                        <strong>AC Repair</strong>
                    </div>
                </a>

                <!-- 2. Plumbing -->
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="landing-service-card landing-card-plumbing">
                    <em>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </em>
                    <img src="images/fixnex/plumbing.webp" alt="Plumbing" />
                    <div class="card-footer-info">
                        <span class="landing-headphone-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                        </span>
                        <strong>Plumbing</strong>
                    </div>
                </a>

                <!-- 3. Cleaning -->
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="landing-service-card landing-card-cleaning">
                    <em>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </em>
                    <img src="images/fixnex/cleaning.webp" alt="Cleaning" />
                    <div class="card-footer-info">
                        <span class="landing-headphone-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                        </span>
                        <strong>Cleaning</strong>
                    </div>
                </a>

                <!-- 4. Electrical -->
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="landing-service-card landing-card-electrical">
                    <em>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </em>
                    <img src="images/fixnex/electric.webp" alt="Electrical" />
                    <div class="card-footer-info">
                        <span class="landing-headphone-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                        </span>
                        <strong>Electrical</strong>
                    </div>
                </a>

                <!-- 5. Painting -->
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="landing-service-card landing-card-painting">
                    <em>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </em>
                    <img src="images/fixnex/painting.webp" alt="Painting" />
                    <div class="card-footer-info">
                        <span class="landing-headphone-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                        </span>
                        <strong>Painting</strong>
                    </div>
                </a>
            </div>

        </div>
    </section>

            <!-- ==========================================================================
         CATEGORY CAROUSEL SECTION (Exact FixNex React CategorySection)
         ========================================================================== -->
    <section class="landing-category-section reveal-section is-visible">
        <div class="landing-category-sticky">
            
            <!-- Section Heading -->
            <div class="landing-section-heading">
                <span class="landing-category-eyebrow">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                    Explore Services
                </span>
                <div>
                    <h2 id="landing-category-title">Popular Home Service Categories in<br>India</h2>
                    <p>Book verified home repair, maintenance and cleaning experts across India.</p>
                </div>
            </div>

            <!-- Carousel Viewport -->
            <div class="landing-category-carousel">
                <div class="landing-category-viewport" id="landingCategoryViewport">
                    <div class="landing-category-grid">
                        <?php 
                        $landing_categories = [
                            [
                                'id' => 'carpentry',
                                'name' => 'Carpentry',
                                'iconUrl' => 'images/fixnex/icon-carpentry.webp',
                                'imageUrl' => 'images/fixnex/carpentry.webp',
                                'description' => 'Professional Carpenter Repairing And Installing Wooden Doors, Cabinets, Wardrobes, Shelves, And Furniture In A...',
                                'link' => 'https://fixnex.in/services/carpentry'
                            ],
                            [
                                'id' => 'plumbing',
                                'name' => 'Plumbing Services',
                                'iconUrl' => 'images/fixnex/icon-plumbing.webp',
                                'imageUrl' => 'images/fixnex/plumbing-banner.webp',
                                'description' => 'Professional Plumbing Services For Pipe Leakage Repair, Tap Fixing, Bathroom Blockage Cleaning, Water Line Maintenance...',
                                'link' => 'https://fixnex.in/services/plumbing-services'
                            ],
                            [
                                'id' => 'water-tank',
                                'name' => 'Water Tank Cleaning',
                                'iconUrl' => 'images/fixnex/icon-water-tank.webp',
                                'imageUrl' => 'images/fixnex/water-tank.webp',
                                'description' => 'Water Tank Cleaning Service Helps Remove Dirt, Algae, Mud, Bacteria, Bad Smell, And Harmful Germs From Overhead And...',
                                'link' => 'https://fixnex.in/services/water-tank-cleaning'
                            ],
                            [
                                'id' => 'ac-services',
                                'name' => 'AC Services',
                                'iconUrl' => 'images/fixnex/icon-ac.webp',
                                'imageUrl' => 'images/fixnex/ac-services-banner.webp',
                                'description' => 'Professional AC Services Including AC Repair, Installation, Uninstallation, Gas Filling, Maintenance, And Annual Servicing. We...',
                                'link' => 'https://fixnex.in/services/ac-services'
                            ],
                            [
                                'id' => 'gas-stove',
                                'name' => 'Gas Stove Repair',
                                'iconUrl' => 'images/fixnex/icon-gas-stove.webp',
                                'imageUrl' => 'images/fixnex/gas-stove.webp',
                                'description' => 'Professional Gas Stove Repair And Maintenance Service Including Burner Cleaning, Valve Replacement, Ignition Fixin...',
                                'link' => 'https://fixnex.in/services/gas-stove-repair'
                            ]
                        ];

                        foreach ($landing_categories as $c_idx => $cat): 
                            $is_active = ($c_idx === 2);
                            $pos_class = $is_active ? 'is-active' : ($c_idx === 1 ? 'is-before-1' : ($c_idx === 3 ? 'is-after-1' : ($c_idx === 0 ? 'is-before-2' : 'is-after-2')));
                        ?>
                            <article 
                                class="landing-category-card <?php echo $pos_class; ?>" 
                                data-index="<?php echo $c_idx; ?>"
                            >
                                <!-- Banner Image -->
                                <div class="landing-category-card__image">
                                    <img src="<?php echo htmlspecialchars($cat['imageUrl']); ?>" alt="<?php echo htmlspecialchars($cat['name']); ?>" draggable="false" loading="eager" />
                                </div>

                                <!-- Card Body -->
                                <div class="landing-category-card__body">
                                    <div class="landing-category-card__header-row">
                                        <span class="landing-category-card__icon">
                                            <img 
                                                src="<?php echo htmlspecialchars($cat['iconUrl']); ?>" 
                                                alt="<?php echo htmlspecialchars($cat['name']); ?> Icon" 
                                                class="cat-icon-thumb"
                                                style="width:22px; height:22px; max-width:22px; max-height:22px; object-fit:contain; display:block;"
                                                draggable="false" 
                                            />
                                        </span>
                                        <strong><?php echo htmlspecialchars($cat['name']); ?></strong>
                                    </div>

                                    <p class="landing-category-card__desc">
                                        <?php echo htmlspecialchars($cat['description']); ?>
                                    </p>

                                    <!-- View Services Button (Visible ONLY on Active Card) -->
                                    <a 
                                        href="<?php echo htmlspecialchars($cat['link']); ?>" 
                                        target="_blank" 
                                        rel="noopener noreferrer" 
                                        class="landing-category-card__button"
                                    >
                                        <span>View Services</span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================================================
         FEATURED EXPERTS SECTION (Exact FixNex React FeaturedSection)
         ========================================================================== -->
    <section class="fn-experts-section">
        <div class="fn-experts-container">
            <div class="fn-experts-layout">
                
                <!-- ================= LEFT COLUMN ================= -->
                <div class="fn-experts-col-left">
                    
                    <!-- Header Heading -->
                    <div class="fn-experts-header">
                        <h2 class="fn-experts-title">
                            World-Class <br />
                            <span class="service-sub-text">Service Experts</span>
                        </h2>
                        <p class="fn-experts-subtitle">
                            Experience the highest standard of home services with our rigorously vetted and top-rated professionals.
                        </p>
                        
                        <a
                            href="https://fixnex.in/services"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="fn-experts-view-btn"
                        >
                            <span>View All Experts</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>

                    <!-- List of Expert Cards -->
                    <div class="fn-experts-card-list">
                        <?php 
                        $defaultExperts = [
                            [
                                'name' => 'Vipul',
                                'role' => 'Water Tank Cleaning',
                                'rating' => 5.0,
                                'jobs' => 14,
                                'available' => true,
                                'img' => 'https://images.unsplash.com/photo-1540569014015-19a7be504e3a?w=150&auto=format&fit=crop&q=80',
                                'review' => 'Excellent service!'
                            ],
                            [
                                'name' => 'Samir chuhan',
                                'role' => 'Electrical',
                                'rating' => 0.0,
                                'jobs' => 8,
                                'available' => true,
                                'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&auto=format&fit=crop&q=80',
                                'review' => 'Very professional electrician'
                            ],
                            [
                                'name' => 'Sarfaraz Khan',
                                'role' => 'Air conditioner',
                                'rating' => 0.0,
                                'jobs' => 5,
                                'available' => true,
                                'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&auto=format&fit=crop&q=80',
                                'review' => 'Prompt and efficient cooling repair'
                            ]
                        ];

                        foreach ($defaultExperts as $pro): 
                        ?>
                            <div class="fn-expert-card">
                                <div class="fn-expert-card-left">
                                    <!-- Avatar with Online Green Dot -->
                                    <div class="fn-expert-avatar-wrap">
                                        <div class="fn-expert-avatar-inner">
                                            <img 
                                                src="<?php echo htmlspecialchars($pro['img']); ?>" 
                                                alt="<?php echo htmlspecialchars($pro['name']); ?>" 
                                                loading="lazy"
                                            />
                                        </div>
                                        <div 
                                            class="fn-expert-status-dot <?php echo $pro['available'] ? 'is-available' : 'is-offline'; ?>" 
                                            title="<?php echo $pro['available'] ? 'Available Now' : 'Offline'; ?>"
                                        ></div>
                                    </div>

                                    <!-- Details: Name, Category Pill, Rating -->
                                    <div class="fn-expert-details">
                                        <div class="fn-expert-name-row">
                                            <h4 class="fn-expert-name"><?php echo htmlspecialchars($pro['name']); ?></h4>
                                            <span class="fn-expert-verify-check">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </span>
                                        </div>

                                        <div class="fn-expert-meta-row">
                                            <!-- Service Category Badge -->
                                            <div class="fn-expert-role-badge">
                                                <span><?php echo htmlspecialchars($pro['role']); ?></span>
                                            </div>

                                            <!-- Rating Badge -->
                                            <div class="fn-expert-rating-badge">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span><?php echo $pro['rating'] > 0 ? number_format($pro['rating'], 1) : '0.0'; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Message Button -->
                                <a
                                    href="https://fixnex.in/services"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="fn-expert-msg-btn"
                                >
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path><path d="M8 10h.01"></path><path d="M12 10h.01"></path><path d="M16 10h.01"></path></svg>
                                    <span>Message</span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>

                <!-- ================= RIGHT COLUMN ================= -->
                <div class="fn-experts-col-right">
                    
                    <!-- Header: Eyebrow + Title -->
                    <div class="fn-right-header">
                        <div class="fn-right-eyebrow">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>
                            <span>Trusted Nationwide</span>
                        </div>
                        <h3 class="fn-right-title">
                            The Gold Standard in<br />Home Services.
                        </h3>
                    </div>

                    <!-- Metric Grid -->
                    <div class="fn-metrics-grid">
                        
                        <!-- Card 1: Total Impact (Full Width Dark Blue) -->
                        <div class="fn-metric-card fn-metric-card--impact">
                            <div>
                                <p class="fn-impact-label">Total Impact</p>
                                <h4 class="fn-impact-number">33+</h4>
                                <p class="fn-impact-desc">Services successfully completed.</p>
                            </div>

                            <div class="fn-impact-icon-circle animate-float-mini">
                                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                            </div>
                        </div>

                        <!-- Card 2: Rating (White Card) -->
                        <div class="fn-metric-card fn-metric-card--rating">
                            <div class="fn-stars-row">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                            <div>
                                <h4 class="fn-rating-number">5.0</h4>
                                <p class="fn-rating-label">Average Customer Rating</p>
                            </div>
                        </div>

                        <!-- Card 3: 24/7 Support (Light Blue Card) -->
                        <div class="fn-metric-card fn-metric-card--support">
                            <div class="fn-metric-badge-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                            </div>
                            <div>
                                <h4 class="fn-support-number">24/7</h4>
                                <p class="fn-support-label">Active Support</p>
                            </div>
                        </div>

                        <!-- Card 4: Verified Providers (Light Green Card) -->
                        <div class="fn-metric-card fn-metric-card--verified">
                            <div class="fn-metric-badge-icon fn-metric-badge-icon--green">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                            </div>
                            <div>
                                <h4 class="fn-verified-number">6+</h4>
                                <p class="fn-verified-label">Verified Providers</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================================================
         MOST REQUESTED SERVICES SECTION (Exact FixNex React MostRequestedServices)
         ========================================================================== -->
    <section class="landing-requested-section">
        <div class="landing-requested-shell">
            
            <!-- Top Header Row -->
            <div class="landing-requested-heading">
                <h2>Most Requested Home Services Near You</h2>
                <a
                    href="https://fixnex.in/services"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="landing-requested-view-all"
                >
                    <span>View All</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Horizontal Slider Frame -->
            <div class="landing-requested-frame">
                <div class="landing-requested-slider" id="landingRequestedSlider">
                    <?php 
                    $sampleServices = [
                        [
                            'id' => '1',
                            'title' => 'AC Services Near By SHYAM BIHARI MAURYA',
                            'category' => 'AC Services',
                            'description' => 'Visit Charge: ₹300 Professional AC repair, servicing, installation, and maintenance service...',
                            'address' => '1, Shreenathji Society, Bhagya Laxmi Society',
                            'price' => 599,
                            'imageUrl' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=500&auto=format&fit=crop&q=80',
                            'link' => 'https://fixnex.in/services/ac-services'
                        ],
                        [
                            'id' => '2',
                            'title' => 'Sofa Cleaning Near By Me',
                            'category' => 'Cleaning',
                            'description' => 'Sofa cleaning charges for a 6-seater sofa: ₹900.',
                            'address' => '5PMR+465, Bhatpore, Hazira',
                            'price' => 900,
                            'imageUrl' => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?w=500&auto=format&fit=crop&q=80',
                            'link' => 'https://fixnex.in/services/deep-home-cleaning'
                        ],
                        [
                            'id' => '3',
                            'title' => 'Sofa cleaning Deep',
                            'category' => 'Cleaning',
                            'description' => 'Sofa cleaning Deep with hot water extraction and sanitized wash.',
                            'address' => '443, Bhatpore, Surat',
                            'price' => 749,
                            'imageUrl' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=500&auto=format&fit=crop&q=80',
                            'link' => 'https://fixnex.in/services/deep-home-cleaning'
                        ],
                        [
                            'id' => '4',
                            'title' => 'Bhatrom machine cleaning Deep hard water steam remove',
                            'category' => 'Cleaning',
                            'description' => 'Deep clean Full bathroom with heavy hard water scaling removal.',
                            'address' => '443, Bhatpore, Surat',
                            'price' => 499,
                            'imageUrl' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=500&auto=format&fit=crop&q=80',
                            'link' => 'https://fixnex.in/services/deep-home-cleaning'
                        ],
                        [
                            'id' => '5',
                            'title' => 'Professional cleaning',
                            'category' => 'Cleaning',
                            'description' => 'Cleaning professional and Home deep sanitize service.',
                            'address' => '443, Bhatpore, Surat',
                            'price' => 1000,
                            'imageUrl' => 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?w=500&auto=format&fit=crop&q=80',
                            'link' => 'https://fixnex.in/services/deep-home-cleaning'
                        ]
                    ];

                    foreach ($sampleServices as $service): 
                    ?>
                        <article class="landing-requested-card">
                            <!-- Media Image & Category Badge -->
                            <div class="landing-requested-card__media">
                                <img
                                    src="<?php echo htmlspecialchars($service['imageUrl']); ?>"
                                    alt="<?php echo htmlspecialchars($service['title']); ?>"
                                    draggable="false"
                                    loading="lazy"
                                />
                                <span class="landing-requested-card__category">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>
                                    <span><?php echo htmlspecialchars($service['category']); ?></span>
                                </span>
                            </div>

                            <!-- Card Body -->
                            <div class="landing-requested-card__body">
                                <h3 class="landing-requested-card__title">
                                    <?php echo htmlspecialchars($service['title']); ?>
                                </h3>

                                <p><?php echo htmlspecialchars($service['description']); ?></p>

                                <!-- Address Pill -->
                                <div class="landing-requested-card__meta">
                                    <span>
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <span class="truncate"><?php echo htmlspecialchars($service['address']); ?></span>
                                    </span>
                                </div>

                                <!-- Footer with Price and Book Button -->
                                <div class="landing-requested-card__footer">
                                    <div>
                                        <small>STARTS FROM</small>
                                        <strong>₹<?php echo htmlspecialchars($service['price']); ?></strong>
                                    </div>

                                    <a
                                        href="<?php echo htmlspecialchars($service['link']); ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="fn-book-btn"
                                    >
                                        <span>Book</span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================================================
         HOW FIXNEX WORKS SECTION (Exact FixNex React HowItWorksSection)
         ========================================================================== -->
    <section class="landing-how-section reveal-section is-visible" aria-labelledby="landing-how-title">
        <div class="landing-section-heading landing-how-heading">
            <span>Start to Finish</span>
            <div>
                <h2 id="landing-how-title">How FixNex Works: Booking Doorstep Services</h2>
                <p>From selecting verified experts to seamless doorstep service, every step stays transparent.</p>
            </div>
        </div>

        <div class="landing-how-flow" aria-label="How booking works">
            <ol class="landing-how-steps">
                <?php 
                $how_steps = [
                    [
                        'label' => 'Find Category', 
                        'copy' => 'Pick the service you need.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>', 
                        'image' => 'images/fixnex/1.webp'
                    ],
                    [
                        'label' => 'Choose Provider', 
                        'copy' => 'Select a verified professional.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>', 
                        'image' => 'images/fixnex/2.webp'
                    ],
                    [
                        'label' => 'Chat', 
                        'copy' => 'Confirm details before booking.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>', 
                        'image' => 'images/fixnex/5.webp'
                    ],
                    [
                        'label' => 'Book Service', 
                        'copy' => 'Schedule date, time, and address.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="m9 16 2 2 4-4"/></svg>', 
                        'image' => 'images/fixnex/3.webp'
                    ],
                    [
                        'label' => 'Live Tracking', 
                        'copy' => 'Follow every visit in real time.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8c0 4.5-6 9-6 9s-6-4.5-6-9a6 6 0 0 1 12 0Z"/><circle cx="12" cy="8" r="2"/><path d="M8.835 14H5a1 1 0 0 0-.9.56l-1.9 3.8A1 1 0 0 0 3 20h18a1 1 0 0 0 .894-1.45l-1.9-3.8A1 1 0 0 0 19.1 14h-3.935"/></svg>', 
                        'image' => 'images/fixnex/4.webp'
                    ],
                    [
                        'label' => 'Payment', 
                        'copy' => 'Pay securely after service.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>', 
                        'image' => 'images/fixnex/6.webp'
                    ],
                    [
                        'label' => 'Review', 
                        'copy' => 'Rate your experience.', 
                        'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>', 
                        'image' => 'images/fixnex/7.webp'
                    ],
                ];

                foreach ($how_steps as $s_idx => $step): 
                ?>
                    <li
                        class="landing-how-step is-step-visible"
                        data-step-index="<?php echo $s_idx; ?>"
                        style="--step-index: <?php echo $s_idx; ?>;"
                    >
                        <!-- Central Circle Marker Icon -->
                        <div class="landing-how-step__marker">
                            <?php echo $step['icon']; ?>
                        </div>

                        <!-- Step Card -->
                        <div class="landing-how-step__card">
                            <span class="landing-how-step__image">
                                <img src="<?php echo htmlspecialchars($step['image']); ?>" alt="<?php echo htmlspecialchars($step['label']); ?>" loading="lazy" />
                            </span>
                            <small><?php echo str_pad($s_idx + 1, 2, '0', STR_PAD_LEFT); ?></small>
                            <strong><?php echo htmlspecialchars($step['label']); ?></strong>
                            <p><?php echo htmlspecialchars($step['copy']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- ==========================================================================
         FIXNEX APP DOWNLOAD SECTION (Exact FixNex React AppDownloadSection)
         ========================================================================== -->
    <section class="landing-app-section reveal-section is-visible" aria-labelledby="landing-app-title">
        <div class="landing-app-section__inner">
            <!-- Left Content Side -->
            <div class="landing-app-copy">
                <span class="landing-app-eyebrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                    <span>FixNex Mobile App</span>
                </span>

                <h2 id="landing-app-title">
                    All Home Services.
                    <span>One App. Zero Hassle.</span>
                </h2>
                <p>
                    Download the FixNex app for quick booking, live tracking, service chat,
                    and secure updates in one clean customer experience.
                </p>

                <div class="landing-app-download-stack">
                    <!-- Download Card with Store Badges -->
                    <div class="landing-app-promo-card">
                        
                        <!-- Title & Store Buttons -->
                        <div class="landing-app-promo-content">
                            <h3>
                                Download the <span>FixNex App</span>
                            </h3>

                            <div class="landing-app-promo-stores">
                                <!-- Google Play -->
                                <div class="landing-app-store-badge">
                                    <a
                                        href="https://play.google.com/store/apps/details?id=fixnex.myapp"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        title="Get it on Google Play"
                                    >
                                        <img src="images/fixnex/google-play-badge.webp" alt="Get it on Google Play" loading="lazy" />
                                    </a>
                                </div>

                                <!-- App Store -->
                                <div class="landing-app-store-badge">
                                    <a
                                        href="https://fixnex.in"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        title="Download on the App Store"
                                    >
                                        <img src="images/fixnex/app-store-badge.webp" alt="Download on the App Store" loading="lazy" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 Feature Benefits Tags -->
                    <div class="landing-app-benefits-grid">
                        <div class="landing-app-benefit-tag">
                            <div class="landing-app-benefit-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                            </div>
                            <strong>Faster Booking</strong>
                        </div>

                        <div class="landing-app-benefit-tag">
                            <div class="landing-app-benefit-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
                            </div>
                            <strong>Instant Support</strong>
                        </div>

                        <div class="landing-app-benefit-tag">
                            <div class="landing-app-benefit-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                            </div>
                            <strong>Secure Payments</strong>
                        </div>

                        <div class="landing-app-benefit-tag">
                            <div class="landing-app-benefit-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <strong>Live Tracking</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Phone Mockup with Glowing Rings & 4 Orbiting Signal Chips -->
            <div class="landing-app-visual landing-app-visual--download" aria-label="FixNex app preview">
                <div class="landing-app-visual-glow"></div>
                <div class="landing-app-visual-ring"></div>
                <div class="landing-app-visual-ring landing-app-visual-ring--thin"></div>

                <!-- Floating Chip 1: Quick Booking -->
                <div class="landing-app-signal-card landing-app-signal-card--booking">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    <span>
                        <small>Quick Booking</small>
                        Book in seconds
                    </span>
                </div>

                <!-- Floating Chip 2: Live Tracking -->
                <div class="landing-app-signal-card landing-app-signal-card--tracking">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>
                        <small>Live Tracking</small>
                        Expert on the way
                    </span>
                </div>

                <!-- Floating Chip 3: Secure Payment -->
                <div class="landing-app-signal-card landing-app-signal-card--payment">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    <span>
                        <small>Secure Payment</small>
                        Safe checkout
                    </span>
                </div>

                <!-- Floating Chip 4: Instant Chat -->
                <div class="landing-app-signal-card landing-app-signal-card--chat">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
                    <span>
                        <small>Instant Chat</small>
                        Support online
                    </span>
                </div>

                <!-- Central Main Phone Mockup -->
                <img class="landing-app-phone-image" src="images/fixnex/app-mobile.webp" alt="FixNex mobile app screen" loading="lazy" />
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         TRUST HUB SECTION (Exact FixNex React TrustHubSection)
         ========================================================================== -->
    <section class="landing-trust-section reveal-section is-visible">
        <!-- Background Floating Ambient Blobs -->
        <div class="hidden lg:block">
            <div class="fn-trust-blob" style="top:50%; left:50%; transform:translate(-50%,-50%); width:700px; height:700px; background:rgba(219,234,254,0.35); filter:blur(100px);"></div>
            <div class="fn-trust-blob animate-css-float-up" style="top:8%; right:8%; width:80px; height:80px; border:2px solid rgba(191,219,254,0.4); background:rgba(239,246,255,0.3); --float-duration:6s;"></div>
            <div class="fn-trust-blob animate-css-float-up" style="top:12%; right:14%; width:30px; height:30px; border:2px solid rgba(191,219,254,0.3); background:rgba(219,234,254,0.2); --float-duration:4s; --float-delay:1s;"></div>
            <div class="fn-trust-blob animate-css-float-down" style="top:15%; left:6%; width:60px; height:60px; border:2px solid rgba(191,219,254,0.3); background:rgba(239,246,255,0.2); --float-duration:7s;"></div>
            <div class="fn-trust-blob animate-css-float-up" style="bottom:10%; right:6%; width:70px; height:70px; border:2px solid rgba(191,219,254,0.35); background:rgba(239,246,255,0.25); --float-duration:8s;"></div>
            <div class="fn-trust-blob animate-css-float-down" style="bottom:8%; left:8%; width:50px; height:50px; border:2px solid rgba(191,219,254,0.3); background:rgba(239,246,255,0.2); --float-duration:6.5s; --float-delay:1s;"></div>
        </div>

        <div class="landing-trust-section__inner">
            <!-- Section Heading -->
            <div class="landing-trust-heading">
                <div class="landing-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#2563eb" stroke="#ffffff" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    <span>Trusted By Thousands</span>
                </div>
                <h2>
                    Why Customers <span class="trust-text">Trust FixNex</span> for Doorstep Services
                </h2>
                <p class="landing-section-description">
                    Experience reliable, verified and hassle-free home services with complete transparency and peace of mind.
                </p>
            </div>

            <!-- Desktop Interactive Stage (Center Hexagon + Curved SVG Connecting Lines + 6 Cards) -->
            <div class="fn-trust-desktop-stage">
                <div class="fn-trust-canvas">
                    
                    <!-- SVG Glowing Paths -->
                    <div class="fn-trust-svg-wrap">
                        <svg width="1400" height="700" viewBox="-700 -350 1400 700">
                            <defs>
                                <filter id="glow-line" filterUnits="userSpaceOnUse" x="-700" y="-350" width="1400" height="700">
                                    <feGaussianBlur stdDeviation="3" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                                <linearGradient id="hubGrad" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#2563eb" />
                                    <stop offset="100%" stop-color="#0f172a" />
                                </linearGradient>
                            </defs>
                            
                            <!-- Base Paths and Connection Nodes for all 6 cards -->
                            <!-- Card 1 (Top Left) -->
                            <g>
                                <path d="M -218 -180 C -191.5 -180, -191.5 -76, -165 -76" fill="none" stroke="#dbeafe" stroke-width="3" filter="url(#glow-line)" />
                                <path d="M -218 -180 C -191.5 -180, -191.5 -76, -165 -76" fill="none" stroke="#ffffff" stroke-width="3" class="fn-path-traveler" filter="url(#glow-line)" />
                                <circle cx="-218" cy="-180" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                                <circle cx="-165" cy="-76" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                            </g>
                            <!-- Card 2 (Top Right) -->
                            <g>
                                <path d="M 218 -180 C 191.5 -180, 191.5 -76, 165 -76" fill="none" stroke="#dbeafe" stroke-width="3" filter="url(#glow-line)" />
                                <path d="M 218 -180 C 191.5 -180, 191.5 -76, 165 -76" fill="none" stroke="#ffffff" stroke-width="3" class="fn-path-traveler" filter="url(#glow-line)" style="animation-delay: 0.6s;" />
                                <circle cx="218" cy="-180" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                                <circle cx="165" cy="-76" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                            </g>
                            <!-- Card 3 (Center Left) -->
                            <g>
                                <path d="M -298 0 C -231.5 0, -231.5 0, -165 0" fill="none" stroke="#dbeafe" stroke-width="3" filter="url(#glow-line)" />
                                <path d="M -298 0 C -231.5 0, -231.5 0, -165 0" fill="none" stroke="#ffffff" stroke-width="3" class="fn-path-traveler" filter="url(#glow-line)" style="animation-delay: 1.2s;" />
                                <circle cx="-298" cy="0" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                                <circle cx="-165" cy="0" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                            </g>
                            <!-- Card 4 (Center Right) -->
                            <g>
                                <path d="M 298 0 C 231.5 0, 231.5 0, 165 0" fill="none" stroke="#dbeafe" stroke-width="3" filter="url(#glow-line)" />
                                <path d="M 298 0 C 231.5 0, 231.5 0, 165 0" fill="none" stroke="#ffffff" stroke-width="3" class="fn-path-traveler" filter="url(#glow-line)" style="animation-delay: 1.8s;" />
                                <circle cx="298" cy="0" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                                <circle cx="165" cy="0" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                            </g>
                            <!-- Card 5 (Bottom Left) -->
                            <g>
                                <path d="M -218 180 C -191.5 180, -191.5 76, -165 76" fill="none" stroke="#dbeafe" stroke-width="3" filter="url(#glow-line)" />
                                <path d="M -218 180 C -191.5 180, -191.5 76, -165 76" fill="none" stroke="#ffffff" stroke-width="3" class="fn-path-traveler" filter="url(#glow-line)" style="animation-delay: 2.4s;" />
                                <circle cx="-218" cy="180" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                                <circle cx="-165" cy="76" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                            </g>
                            <!-- Card 6 (Bottom Right) -->
                            <g>
                                <path d="M 218 180 C 191.5 180, 191.5 76, 165 76" fill="none" stroke="#dbeafe" stroke-width="3" filter="url(#glow-line)" />
                                <path d="M 218 180 C 191.5 180, 191.5 76, 165 76" fill="none" stroke="#ffffff" stroke-width="3" class="fn-path-traveler" filter="url(#glow-line)" style="animation-delay: 3s;" />
                                <circle cx="218" cy="180" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                                <circle cx="165" cy="76" r="4" fill="white" stroke="#3b82f6" stroke-width="2" filter="url(#glow-line)" />
                            </g>
                        </svg>
                    </div>

                    <!-- Central Hexagon Trust Hub -->
                    <div class="fn-central-hub-pos">
                        <div class="fn-central-hub-box">
                            <!-- Background Glowing Hexagon -->
                            <svg viewBox="0 0 100 115" class="fn-hub-hex-bg" style="filter: drop-shadow(0 0 40px rgba(59,130,246,0.25)); width: 340px; height: 390px;">
                                <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="url(#hubGrad)" />
                            </svg>

                            <div class="fn-hub-content">
                                <div class="fn-hub-badge-hex">
                                    <svg viewBox="0 0 100 115" style="position:absolute; inset:0; width:100%; height:100%;">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="rgba(255,255,255,0.15)" stroke="rgba(255,255,255,0.4)" stroke-width="1" />
                                    </svg>
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="rgba(255,255,255,0.2)" stroke="#ffffff" stroke-width="2" style="position:relative; z-index:2;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                                </div>

                                <h3 class="fn-hub-title">FixNex</h3>
                                <p class="fn-hub-subtitle">Trust Hub</p>

                                <div class="fn-hub-features">
                                    <div class="fn-hub-feat-item">
                                        <div class="fn-hub-check-dot">
                                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                        </div>
                                        <span>Verified Professionals</span>
                                    </div>
                                    <div class="fn-hub-feat-item">
                                        <div class="fn-hub-check-dot">
                                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                        </div>
                                        <span>Secure & Safe Services</span>
                                    </div>
                                    <div class="fn-hub-feat-item">
                                        <div class="fn-hub-check-dot">
                                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                        </div>
                                        <span>100% Satisfaction Guarantee</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6 Peripheral HexCards -->
                    <!-- 1. Verified Professionals -->
                    <div class="fn-hex-card-item fn-pos-1">
                        <div class="fn-hex-card-shell">
                            <div class="fn-card-diamond-left"></div>
                            <div class="fn-card-diamond-right"></div>
                            <div class="fn-card-body-wrap">
                                <div class="fn-card-hex-icon-wrap">
                                    <svg viewBox="0 0 100 115" class="fn-card-hex-bg">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="#ffffff" stroke="#e0e7ff" stroke-width="3" />
                                    </svg>
                                    <div class="fn-card-icon-circle">
                                        <div class="fn-card-icon-pill">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="fn-card-copy">
                                    <h4>Verified Professionals</h4>
                                    <p>Background-checked and skilled experts</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Real-Time Tracking -->
                    <div class="fn-hex-card-item fn-pos-2">
                        <div class="fn-hex-card-shell">
                            <div class="fn-card-diamond-left"></div>
                            <div class="fn-card-diamond-right"></div>
                            <div class="fn-card-body-wrap">
                                <div class="fn-card-hex-icon-wrap">
                                    <svg viewBox="0 0 100 115" class="fn-card-hex-bg">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="#ffffff" stroke="#e0e7ff" stroke-width="3" />
                                    </svg>
                                    <div class="fn-card-icon-circle">
                                        <div class="fn-card-icon-pill">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="fn-card-copy">
                                    <h4>Real-Time Tracking</h4>
                                    <p>Track your expert live from start to finish</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Instant Support -->
                    <div class="fn-hex-card-item fn-pos-3">
                        <div class="fn-hex-card-shell">
                            <div class="fn-card-diamond-left"></div>
                            <div class="fn-card-diamond-right"></div>
                            <div class="fn-card-body-wrap">
                                <div class="fn-card-hex-icon-wrap">
                                    <svg viewBox="0 0 100 115" class="fn-card-hex-bg">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="#ffffff" stroke="#e0e7ff" stroke-width="3" />
                                    </svg>
                                    <div class="fn-card-icon-circle">
                                        <div class="fn-card-icon-pill">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="fn-card-copy">
                                    <h4>Instant Support</h4>
                                    <p>24/7 support for all your queries</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Secure Payments -->
                    <div class="fn-hex-card-item fn-pos-4">
                        <div class="fn-hex-card-shell">
                            <div class="fn-card-diamond-left"></div>
                            <div class="fn-card-diamond-right"></div>
                            <div class="fn-card-body-wrap">
                                <div class="fn-card-hex-icon-wrap">
                                    <svg viewBox="0 0 100 115" class="fn-card-hex-bg">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="#ffffff" stroke="#e0e7ff" stroke-width="3" />
                                    </svg>
                                    <div class="fn-card-icon-circle">
                                        <div class="fn-card-icon-pill">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="fn-card-copy">
                                    <h4>Secure Payments</h4>
                                    <p>100% secure & cashless payments</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Satisfaction Guarantee -->
                    <div class="fn-hex-card-item fn-pos-5">
                        <div class="fn-hex-card-shell">
                            <div class="fn-card-diamond-left"></div>
                            <div class="fn-card-diamond-right"></div>
                            <div class="fn-card-body-wrap">
                                <div class="fn-card-hex-icon-wrap">
                                    <svg viewBox="0 0 100 115" class="fn-card-hex-bg">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="#ffffff" stroke="#e0e7ff" stroke-width="3" />
                                    </svg>
                                    <div class="fn-card-icon-circle">
                                        <div class="fn-card-icon-pill">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="fn-card-copy">
                                    <h4>Satisfaction Guarantee</h4>
                                    <p>Not satisfied? We'll make it right</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6. On-Time Service -->
                    <div class="fn-hex-card-item fn-pos-6">
                        <div class="fn-hex-card-shell">
                            <div class="fn-card-diamond-left"></div>
                            <div class="fn-card-diamond-right"></div>
                            <div class="fn-card-body-wrap">
                                <div class="fn-card-hex-icon-wrap">
                                    <svg viewBox="0 0 100 115" class="fn-card-hex-bg">
                                        <path d="M50 0 C55 0 58 2 61 4 L95 24 C98 26 100 29 100 33 L100 82 C100 86 98 89 95 91 L61 111 C58 113 55 115 50 115 C45 115 42 113 39 111 L5 91 C2 89 0 86 0 82 L0 33 C0 29 2 26 5 24 L39 4 C42 2 45 0 50 0 Z" fill="#ffffff" stroke="#e0e7ff" stroke-width="3" />
                                    </svg>
                                    <div class="fn-card-icon-circle">
                                        <div class="fn-card-icon-pill">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="fn-card-copy">
                                    <h4>On-Time Service</h4>
                                    <p>We value your schedule and time</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile View: 2-Column Alternating Cards with Central Spine -->
            <div class="fn-trust-mobile-stage">
                <div class="fn-trust-mobile-grid">
                    <div class="fn-trust-mobile-spine"></div>
                    <div class="fn-trust-mobile-dot" style="top: 42.5px;"></div>
                    <div class="fn-trust-mobile-dot" style="top: 147.5px;"></div>
                    <div class="fn-trust-mobile-dot" style="top: 252.5px;"></div>

                    <?php 
                    $trust_services = [
                        ['title' => 'Verified Professionals', 'desc' => 'Background-checked and skilled experts', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>'],
                        ['title' => 'Real-Time Tracking', 'desc' => 'Track your expert live start to finish', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>'],
                        ['title' => 'Instant Support', 'desc' => '24/7 support for all your queries', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>'],
                        ['title' => 'Secure Payments', 'desc' => '100% secure & cashless payments', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>'],
                        ['title' => 'Satisfaction Guarantee', 'desc' => "Not satisfied? We'll make it right", 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>'],
                        ['title' => 'On-Time Service', 'desc' => 'We value your schedule and time', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>'],
                    ];

                    foreach ($trust_services as $t_idx => $ts): 
                        $is_left = ($t_idx % 2 === 0);
                    ?>
                        <div class="fn-trust-mobile-card">
                            <div class="fn-card-body-wrap" style="padding: 10px 12px; gap: 10px; border-radius: 18px; border: 1px solid #e2e8f0; <?php echo $is_left ? 'text-align: right; justify-content: flex-end;' : 'text-align: left; justify-content: flex-start;'; ?>">
                                <?php if (!$is_left): ?>
                                    <div class="fn-card-icon-pill" style="width: 28px; height: 28px; flex-shrink: 0;">
                                        <?php echo $ts['icon']; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="fn-card-copy">
                                    <h4 style="font-size: 13px; margin: 0 0 2px;"><?php echo htmlspecialchars($ts['title']); ?></h4>
                                    <p style="font-size: 10px;"><?php echo htmlspecialchars($ts['desc']); ?></p>
                                </div>

                                <?php if ($is_left): ?>
                                    <div class="fn-card-icon-pill" style="width: 28px; height: 28px; flex-shrink: 0;">
                                        <?php echo $ts['icon']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================================================
         TESTIMONIALS / CUSTOMER REVIEWS (Exact FixNex React Testimonials)
         ========================================================================== -->
    <section class="landing-page-shell testimonials-page-home reveal-section is-visible" id="testimonialsSection">
        <!-- Background Soft Glow Orbs -->
        <div class="ambient-background">
            <div class="glow-orb orb-1"></div>
            <div class="glow-orb orb-2"></div>
        </div>

        <div class="testimonials-container">
            <!-- Heading -->
            <div class="testimonials-header">
                <div class="landing-pill">
                    <svg class="badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    <span>Customer Reviews</span>
                </div>
                <h2 class="title-section">
                    Reviews From <br />
                    <span class="text-blue">FixNex Customers</span>
                </h2>
                <p class="subtitle">Experience reliable, verified and hassle-free home services.</p>
            </div>

            <?php
            $top_reviews = [
                ['id' => 1, 'name' => 'Neha Singh', 'rating' => 5, 'content' => 'Good quality service at a reasonable price. The team arrived on time and finished the work quickly.'],
                ['id' => 2, 'name' => 'Priya', 'rating' => 5, 'content' => 'Great experience from start to finish. The technician was knowledgeable, polite, and efficient. Will definitely use this service again.'],
                ['id' => 3, 'name' => 'Karan Mehta', 'rating' => 5, 'content' => 'Outstanding service and excellent customer support. Everything was handled professionally and exceeded my expectations.'],
            ];

            $bottom_reviews = [
                ['id' => 4, 'name' => 'Amit', 'rating' => 5, 'content' => 'Very satisfied with the service. The team was polite, skilled, and completed the job efficiently. Will definitely use their service again.'],
                ['id' => 5, 'name' => 'Mehul Patel', 'rating' => 5, 'content' => 'Excellent service and professional staff. The work was completed on time and with great quality. Highly recommended!'],
                ['id' => 6, 'name' => 'Rahul Sharma', 'rating' => 5, 'content' => 'Good experience overall. The technician arrived on time and solved the issue quickly. Reasonable pricing and reliable service.'],
            ];
            ?>

            <!-- 2-Row Infinite Marquee Tracks -->
            <div class="scroll-wrapper">
                <!-- Row 1 (Scrolls Left) -->
                <div class="scroll-track scroll-left">
                    <div class="scroll-content">
                        <?php foreach (array_merge($top_reviews, $top_reviews) as $idx => $review): ?>
                            <div class="testimonial-card">
                                <div class="card-mouse-glow"></div>
                                <div class="card-content-wrapper">
                                    <div class="card-header">
                                        <div class="profile-info">
                                            <h4 class="profile-name"><?php echo htmlspecialchars($review['name']); ?></h4>
                                        </div>
                                    </div>

                                    <!-- Star Rating -->
                                    <div class="star-rating">
                                        <?php for ($s = 1; $s <= 5; $s++): ?>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#f59e0b" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <?php endfor; ?>
                                    </div>

                                    <!-- Review Content -->
                                    <p class="review-content"><?php echo htmlspecialchars($review['content']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="scroll-content" aria-hidden="true" tabindex="-1">
                        <?php foreach (array_merge($top_reviews, $top_reviews) as $idx => $review): ?>
                            <div class="testimonial-card">
                                <div class="card-mouse-glow"></div>
                                <div class="card-content-wrapper">
                                    <div class="card-header">
                                        <div class="profile-info">
                                            <h4 class="profile-name"><?php echo htmlspecialchars($review['name']); ?></h4>
                                        </div>
                                    </div>

                                    <!-- Star Rating -->
                                    <div class="star-rating">
                                        <?php for ($s = 1; $s <= 5; $s++): ?>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#f59e0b" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <?php endfor; ?>
                                    </div>

                                    <!-- Review Content -->
                                    <p class="review-content"><?php echo htmlspecialchars($review['content']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Row 2 (Scrolls Right) -->
                <div class="scroll-track scroll-right">
                    <div class="scroll-content">
                        <?php foreach (array_merge($bottom_reviews, $bottom_reviews) as $idx => $review): ?>
                            <div class="testimonial-card">
                                <div class="card-mouse-glow"></div>
                                <div class="card-content-wrapper">
                                    <div class="card-header">
                                        <div class="profile-info">
                                            <h4 class="profile-name"><?php echo htmlspecialchars($review['name']); ?></h4>
                                        </div>
                                    </div>

                                    <!-- Star Rating -->
                                    <div class="star-rating">
                                        <?php for ($s = 1; $s <= 5; $s++): ?>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#f59e0b" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <?php endfor; ?>
                                    </div>

                                    <!-- Review Content -->
                                    <p class="review-content"><?php echo htmlspecialchars($review['content']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="scroll-content" aria-hidden="true" tabindex="-1">
                        <?php foreach (array_merge($bottom_reviews, $bottom_reviews) as $idx => $review): ?>
                            <div class="testimonial-card">
                                <div class="card-mouse-glow"></div>
                                <div class="card-content-wrapper">
                                    <div class="card-header">
                                        <div class="profile-info">
                                            <h4 class="profile-name"><?php echo htmlspecialchars($review['name']); ?></h4>
                                        </div>
                                    </div>

                                    <!-- Star Rating -->
                                    <div class="star-rating">
                                        <?php for ($s = 1; $s <= 5; $s++): ?>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#f59e0b" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <?php endfor; ?>
                                    </div>

                                    <!-- Review Content -->
                                    <p class="review-content"><?php echo htmlspecialchars($review['content']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA Button -->
            <div class="cta-section">
                <button class="cta-button" type="button" id="openReviewModalBtn">
                    <span class="btn-text">Write a Review</span>
                    <div class="btn-glow"></div>
                    <div class="btn-ripple"></div>
                </button>
            </div>
        </div>

        <!-- Review Submission Modal (Exact Popup Dialog) -->
        <div class="fn-review-modal-backdrop" id="reviewModal" style="display: none;">
            <div class="fn-review-modal-box">
                <button class="fn-review-modal-close" type="button" id="closeReviewModalBtn">&times;</button>
                <div id="reviewFormContainer">
                    <h3 class="fn-review-modal-title">Write a Review</h3>
                    <p class="fn-review-modal-subtitle">Share your experience with FixNex home services</p>

                    <form id="fnReviewForm" onsubmit="event.preventDefault(); submitFixnexReview();">
                        <div class="fn-modal-rating-select">
                            <span style="font-size:13px; font-weight:700; color:#1e293b; margin-right:8px;">Rating:</span>
                            <button type="button" class="fn-modal-star-btn active" data-rating="1">&#9733;</button>
                            <button type="button" class="fn-modal-star-btn active" data-rating="2">&#9733;</button>
                            <button type="button" class="fn-modal-star-btn active" data-rating="3">&#9733;</button>
                            <button type="button" class="fn-modal-star-btn active" data-rating="4">&#9733;</button>
                            <button type="button" class="fn-modal-star-btn active" data-rating="5">&#9733;</button>
                            <input type="hidden" id="reviewRatingInput" value="5" />
                        </div>

                        <div class="fn-modal-input-group">
                            <label for="reviewName">Your Name</label>
                            <input type="text" id="reviewName" placeholder="e.g. Rahul Sharma" required />
                        </div>

                        <div class="fn-modal-input-group">
                            <label for="reviewContent">Your Review</label>
                            <textarea id="reviewContent" rows="4" placeholder="How was your service experience?" required></textarea>
                        </div>

                        <button type="submit" class="fn-modal-submit-btn">Submit Review</button>
                    </form>
                </div>

                <div class="fn-review-success-msg" id="reviewSuccessMsg">
                    <div style="text-align: center; margin-bottom: 12px;">
                        <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h3 style="font-size:1.3rem; font-weight:800; color:#0d2353; margin-bottom:8px; text-align:center;">Thank You!</h3>
                    <p style="font-size:14px; color:#64748b; margin-bottom:18px; text-align:center;">Your review has been submitted successfully and is pending approval.</p>
                    <button type="button" class="fn-modal-submit-btn" id="finishReviewModalBtn">Done</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         MOST REQUESTED PRODUCTS (Exact FixNex React Component)
         ========================================================================== -->
    <section class="landing-requested-section landing-products-section bg-white pt-2 pb-6" id="productsSection">
        <div class="landing-page-shell max-w-[1900px] mx-auto relative px-4">
            <!-- Section Heading & View All Button -->
            <div class="landing-requested-heading">
                <div>
                    <h2 id="landing-products-title">Most Requested Products</h2>
                </div>
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="landing-requested-view-all">
                    <span>View All</span>
                    <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>

            <?php
            $sample_products = [
                [
                    'id' => 1,
                    'name' => 'Fire Safety',
                    'description' => 'Fire Safety System * Fire Safety Extinguishers * Smoke detector * Sprinklers system * All detect...',
                    'price' => 3000,
                    'imageUrl' => 'https://images.unsplash.com/photo-1582139329536-e7284fece509?w=600&auto=format&fit=crop&q=80',
                ],
                [
                    'id' => 2,
                    'name' => 'Service Valve 5/8',
                    'description' => 'A high-quality service valve used for refrigerant charging, pressure measurement, vacuuming...',
                    'price' => 500,
                    'imageUrl' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=600&auto=format&fit=crop&q=80',
                ],
                [
                    'id' => 3,
                    'name' => 'Service Valve 3/8',
                    'description' => 'A high-quality service valve used for refrigerant charging, pressure measurement, vacuuming...',
                    'price' => 400,
                    'imageUrl' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=600&auto=format&fit=crop&q=80',
                ],
                [
                    'id' => 4,
                    'name' => 'Coating',
                    'description' => 'Provides a durable protective layer that helps prevent rust, corrosion, moisture damage, and...',
                    'price' => 249,
                    'imageUrl' => 'https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?w=600&auto=format&fit=crop&q=80',
                ],
                [
                    'id' => 5,
                    'name' => 'FLAIR NUT',
                    'description' => 'Inspection, tightening, repair, the flare nut used to securely connect copper tubing...',
                    'price' => 170,
                    'imageUrl' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?w=600&auto=format&fit=crop&q=80',
                ],
            ];
            ?>

            <!-- Horizontal Slider Frame -->
            <div class="landing-requested-frame mt-4">
                <div class="landing-requested-slider" id="productSlider">
                    <?php foreach ($sample_products as $p): ?>
                        <article class="landing-requested-card shadow-sm hover:shadow-xl cursor-pointer fn-product-card"
                                 onclick="openProductDetailModal(<?php echo htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8'); ?>)">
                            <!-- Card Image -->
                            <div class="landing-requested-card__media">
                                <img src="<?php echo htmlspecialchars($p['imageUrl']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" loading="lazy" />
                            </div>

                            <!-- Card Body -->
                            <div class="landing-requested-card__body">
                                <div class="landing-requested-card__title">
                                    <?php echo htmlspecialchars($p['name']); ?>
                                </div>

                                <div class="landing-requested-card__meta">
                                    <p class="product-card-desc">
                                        <?php echo htmlspecialchars($p['description']); ?>
                                    </p>
                                </div>

                                <!-- Card Footer: Price & Details Button -->
                                <div class="landing-requested-card__footer">
                                    <div>
                                        <small>Price</small>
                                        <strong>&#8377;<?php echo number_format($p['price']); ?></strong>
                                    </div>
                                    <button type="button" class="fn-product-detail-btn" onclick="event.stopPropagation(); openProductDetailModal(<?php echo htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8'); ?>)">
                                        <span>Details</span>
                                        <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </button>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Product Details Quick View Modal -->
        <div class="fn-product-modal-backdrop" id="productQuickModal" style="display: none;">
            <div class="fn-product-modal-box">
                <button class="fn-product-modal-close" type="button" onclick="closeProductDetailModal()">&times;</button>
                <div class="fn-product-modal-img">
                    <img id="modalProductImg" src="" alt="Product Image" />
                </div>
                <div class="fn-product-modal-body">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <h3 id="modalProductName" style="font-size:1.35rem; font-weight:900; color:#0b1528; margin:0;"></h3>
                        <span id="modalProductPrice" style="font-size:1.3rem; font-weight:950; color:#1e5bff;"></span>
                    </div>
                    <p id="modalProductDesc" style="color:#5e6b82; font-size:14px; line-height:1.55; margin-bottom:20px;"></p>
                    <div style="display:flex; gap:12px;">
                        <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="fn-modal-submit-btn" style="text-align:center; text-decoration:none; display:block;">
                            Enquire on FixNex
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<!-- Interactive Category Carousel Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('.landing-category-section');
    const viewport = document.getElementById('landingCategoryViewport');
    if (!viewport) return;
    const cards = viewport.querySelectorAll('.landing-category-card');
    if (!cards || cards.length === 0) return;

    let activeIndex = 2; // Center active item by default
    let isDragging = false;
    let startX = 0;
    let scrollStart = 0;
    let hasMoved = false;

    function scrollCardIntoCenter(index, smooth) {
        if (!cards[index]) return;
        const card = cards[index];
        const viewportRect = viewport.getBoundingClientRect();
        const cardRect = card.getBoundingClientRect();
        const left = viewport.scrollLeft + (cardRect.left - viewportRect.left) - ((viewport.clientWidth - cardRect.width) / 2);

        viewport.scrollTo({ left: left, behavior: smooth ? 'smooth' : 'auto' });
    }

    function setActiveCard(index, smooth) {
        activeIndex = index;
        cards.forEach((c, i) => {
            c.classList.remove('is-active', 'is-before-1', 'is-before-2', 'is-after-1', 'is-after-2');
            if (i === index) {
                c.classList.add('is-active');
            } else if (i === index - 1) {
                c.classList.add('is-before-1');
            } else if (i === index + 1) {
                c.classList.add('is-after-1');
            } else if (i < index) {
                c.classList.add('is-before-2');
            } else {
                c.classList.add('is-after-2');
            }
        });
        scrollCardIntoCenter(index, smooth);
    }

    // Scroll center card into center on load
    window.addEventListener('load', function() {
        setTimeout(function() {
            scrollCardIntoCenter(activeIndex, false);
        }, 150);
    });
    setTimeout(function() {
        scrollCardIntoCenter(activeIndex, false);
    }, 300);

    // Click handler on cards
    cards.forEach((card, index) => {
        card.addEventListener('click', function (e) {
            if (hasMoved) return;
            setActiveCard(index, true);
        });
    });

    // Pointer Drag Handlers (Mouse & Touch)
    viewport.addEventListener('pointerdown', function (e) {
        if (e.target.closest('a, button')) return;
        isDragging = true;
        hasMoved = false;
        startX = e.clientX;
        scrollStart = viewport.scrollLeft;
        try {
            viewport.setPointerCapture(e.pointerId);
        } catch (_) {}
    });

    viewport.addEventListener('pointermove', function (e) {
        if (!isDragging) return;
        const diff = e.clientX - startX;
        if (Math.abs(diff) > 4) {
            hasMoved = true;
        }
        viewport.scrollLeft = scrollStart - (diff * 1.3);
    });

    function handlePointerEnd(e) {
        if (!isDragging) return;
        isDragging = false;
        try {
            if (e.pointerId) viewport.releasePointerCapture(e.pointerId);
        } catch (_) {}
    }

    viewport.addEventListener('pointerup', handlePointerEnd);
    viewport.addEventListener('pointercancel', handlePointerEnd);

    // Most Requested Services Horizontal Drag Slider
    const requestedSlider = document.getElementById('landingRequestedSlider');
    if (requestedSlider) {
        let isReqDragging = false;
        let reqStartX = 0;
        let reqScrollLeft = 0;
        let reqMoved = false;

        requestedSlider.addEventListener('pointerdown', function (e) {
            if (e.target.closest('a, button')) return;
            isReqDragging = true;
            reqMoved = false;
            reqStartX = e.clientX;
            reqScrollLeft = requestedSlider.scrollLeft;
            try {
                requestedSlider.setPointerCapture(e.pointerId);
            } catch (_) {}
        });

        requestedSlider.addEventListener('pointermove', function (e) {
            if (!isReqDragging) return;
            const diff = e.clientX - reqStartX;
            if (Math.abs(diff) > 4) {
                reqMoved = true;
            }
            requestedSlider.scrollLeft = reqScrollLeft - (diff * 1.4);
        });

        function handleReqPointerEnd(e) {
            if (!isReqDragging) return;
            isReqDragging = false;
            try {
                if (e.pointerId) requestedSlider.releasePointerCapture(e.pointerId);
            } catch (_) {}
        }

        requestedSlider.addEventListener('pointerup', handleReqPointerEnd);
        requestedSlider.addEventListener('pointercancel', handleReqPointerEnd);
    }

    // How It Works Step Scroll Reveal Animation
    const howSection = document.querySelector('.landing-how-section');
    const stepNodes = document.querySelectorAll('.landing-how-step');
    if (howSection && stepNodes.length > 0) {
        if ('IntersectionObserver' in window) {
            const howObserver = new IntersectionObserver(([entry]) => {
                if (entry.isIntersecting) {
                    howSection.classList.add('is-visible');
                }
            }, { threshold: 0.12 });
            howObserver.observe(howSection);

            let lastScrollY = window.scrollY;
            const stepObserver = new IntersectionObserver((entries) => {
                const isScrollingDown = window.scrollY >= lastScrollY;
                lastScrollY = window.scrollY;

                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-step-visible');
                    } else if (entry.boundingClientRect.top > 0) {
                        entry.target.classList.remove('is-step-visible');
                    }
                });
            }, {
                rootMargin: '0px 0px -15% 0px',
                threshold: 0.25,
            });

            stepNodes.forEach((node) => stepObserver.observe(node));
        } else {
            howSection.classList.add('is-visible');
            stepNodes.forEach(node => node.classList.add('is-step-visible'));
        }
    }
});
</script>

<!-- Testimonials Cards Mouse Glow & Review Modal Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Mouse Glow on Testimonial Cards
    const cards = document.querySelectorAll('.testimonial-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            card.style.setProperty('--mouse-x', (e.clientX - rect.left) + 'px');
            card.style.setProperty('--mouse-y', (e.clientY - rect.top) + 'px');
        });
    });

    // 2. Review Modal Logic
    const openBtn = document.getElementById('openReviewModalBtn');
    const closeBtn = document.getElementById('closeReviewModalBtn');
    const finishBtn = document.getElementById('finishReviewModalBtn');
    const modal = document.getElementById('reviewModal');
    const formBox = document.getElementById('reviewFormContainer');
    const successBox = document.getElementById('reviewSuccessMsg');
    const form = document.getElementById('fnReviewForm');
    const ratingInput = document.getElementById('reviewRatingInput');
    const starBtns = document.querySelectorAll('.fn-modal-star-btn');

    function openModal() {
        if (!modal) return;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        if (formBox) formBox.style.display = 'block';
        if (successBox) successBox.style.display = 'none';
    }

    function closeModal() {
        if (!modal) return;
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }

    if (openBtn) openBtn.addEventListener('click', openModal);
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (finishBtn) finishBtn.addEventListener('click', closeModal);

    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });
    }

    // Star Selection
    starBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const val = parseInt(this.getAttribute('data-rating'), 10) || 5;
            if (ratingInput) ratingInput.value = val;
            starBtns.forEach(b => {
                const bVal = parseInt(b.getAttribute('data-rating'), 10);
                if (bVal <= val) {
                    b.classList.add('active');
                } else {
                    b.classList.remove('active');
                }
            });
        });
    });

    // Submit handler
    window.submitFixnexReview = function() {
        if (formBox) formBox.style.display = 'none';
        if (successBox) successBox.style.display = 'block';
        if (form) form.reset();
    };
});
</script>

<!-- Most Requested Products Drag Slider & Quick View Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('productSlider');
    if (!slider) return;

    let isDown = false;
    let startX = 0;
    let scrollLeft = 0;

    slider.addEventListener('pointerdown', (e) => {
        isDown = true;
        slider.classList.add('is-dragging');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    const stopDrag = () => {
        isDown = false;
        slider.classList.remove('is-dragging');
    };

    slider.addEventListener('pointerleave', stopDrag);
    slider.addEventListener('pointerup', stopDrag);
    slider.addEventListener('pointercancel', stopDrag);

    slider.addEventListener('pointermove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX);
        slider.scrollLeft = scrollLeft - walk;
    });
});

// Product Quick View Modal Functions
function openProductDetailModal(product) {
    const modal = document.getElementById('productQuickModal');
    if (!modal || !product) return;

    document.getElementById('modalProductName').textContent = product.name || '';
    document.getElementById('modalProductPrice').textContent = '₹' + Number(product.price || 0).toLocaleString('en-IN');
    document.getElementById('modalProductDesc').textContent = product.description || '';
    document.getElementById('modalProductImg').src = product.imageUrl || '';
    document.getElementById('modalProductImg').alt = product.name || '';

    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeProductDetailModal() {
    const modal = document.getElementById('productQuickModal');
    if (!modal) return;
    modal.style.display = 'none';
    document.body.style.overflow = '';
}

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('productQuickModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeProductDetailModal();
        });
    }
});
</script>

<?php include 'footer.php';?>
