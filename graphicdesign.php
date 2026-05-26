<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="css/service-pages.css" />

<!-- Page Title Row -->
<div class="ttm-page-title-row redesign-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box text-center">
                    <div class="page-title-heading">
                        <h1 class="title">Graphic Design</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                        <span>Graphic Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-body-redesign">
    <!-- Hero Section -->
    <section class="redesign-section">
        <div class="container">
            <div class="service-hero-grid">
                <div class="hero-content-col">
                    <h5>Creative Studio</h5>
                    <h2>Intelligent <span>Branding & Design</span> that captures attention</h2>
                    <p>We are a high-end graphic design and user interface agency helping ambitious brands achieve success through visual excellence. From modern brand guides and logos to interactive web layouts and packaging styling, our design specialists craft cohesive designs that communicate premium value.</p>
                    <div class="hero-cta-buttons">
                        <a href="contact.php" class="btn-primary-redesign cta-primary">
                            <span button="button-text-wrapper">Request Design Consultation <i class="fa fa-angle-right"></i></span>
                        </a>
                        <a href="#capabilities" class="btn-secondary-redesign cta-secondary">
                            <span class="button-text-wrapper">View Capabilities</span>
                        </a>
                    </div>
                </div>
                
                <div class="hero-visual-col">
                    <div class="mockup-container">
                        <div class="canvas-container">
                            <div class="canvas-toolbar">
                                <span class="canvas-tool active"><i class="fa fa-mouse-pointer"></i></span>
                                <span class="canvas-tool"><i class="fa fa-pencil"></i></span>
                                <span class="canvas-tool"><i class="fa fa-font"></i></span>
                                <span class="canvas-tool"><i class="fa fa-image"></i></span>
                            </div>
                            <div class="canvas-artboard">
                                <div class="canvas-vector-shape">
                                    <span class="canvas-anchor-point anch-1"></span>
                                    <span class="canvas-anchor-point anch-2"></span>
                                    <span class="canvas-anchor-point anch-3"></span>
                                    <span class="canvas-anchor-point anch-4"></span>
                                </div>
                            </div>
                            <div class="canvas-layers-box">
                                <div class="layer-item">
                                    <span></span> Vector Shape
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities Grid -->
    <section id="capabilities" class="redesign-section-alt">
        <div class="container">
            <div class="redesign-section-title text-center">
                <h2>Our Design Core Capabilities</h2>
                <p>We deliver high-end architectural integrations and beautiful store designs customized to your specific brand goals.</p>
            </div>
            
            <div class="capabilities-grid">
                <div class="capability-card">
                    <div class="capability-card-icon"><i class="fa fa-bookmark"></i></div>
                    <h4>Brand Identity & Logos</h4>
                    <p>Creating highly memorable logos, packaging guides, and typography books that elevate brand equity and establish marketplace value.</p>
                </div>
                
                <div class="capability-card anim-delay-1">
                    <div class="capability-card-icon"><i class="fa fa-desktop"></i></div>
                    <h4>UI / UX Design</h4>
                    <p>Designing modern user interface frameworks and user experience layouts (wireframes, prototypes) using leading tools like Figma.</p>
                </div>
                
                <div class="capability-card anim-delay-2">
                    <div class="capability-card-icon"><i class="fa fa-bullhorn"></i></div>
                    <h4>Digital Ad Assets</h4>
                    <p>Constructing high-converting visual advertising banners, social media marketing grids, and email template styling.</p>
                </div>
                
                <div class="capability-card anim-delay-3">
                    <div class="capability-card-icon"><i class="fa fa-archive"></i></div>
                    <h4>Packaging Design</h4>
                    <p>Custom structural outlines, color palette layouts, and vector patterns designed from scratch to improve product shelves visibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Process -->
    <section class="redesign-section">
        <div class="container">
            <div class="redesign-section-title text-center">
                <h2>Our Creative Process</h2>
                <p>A structured, high-transparency roadmap optimized to bring outstanding concepts into digital reality.</p>
            </div>
            
            <div class="roadmap-timeline">
                <div class="roadmap-step">
                    <div class="roadmap-step-circle">01</div>
                    <h5>Moodboard</h5>
                    <p>Collect colors, references, typography styles, and establish moodboard targets.</p>
                </div>
                <div class="roadmap-step">
                    <div class="roadmap-step-circle">02</div>
                    <h5>Wireframes</h5>
                    <p>Draft wireframe structures to define layout positions and user flow constraints.</p>
                </div>
                <div class="roadmap-step">
                    <div class="roadmap-step-circle">03</div>
                    <h5>Bespoke Design</h5>
                    <p>Construct custom pixel-perfect high-fidelity designs matching light and dark themes.</p>
                </div>
                <div class="roadmap-step">
                    <div class="roadmap-step-circle">04</div>
                    <h5>Asset Delivery</h5>
                    <p>Deliver vector maps, styling guidelines, and web assets organized for deployment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Conversion Banner -->
    <section class="redesign-section">
        <div class="container">
            <div class="redesign-cta-banner">
                <div class="redesign-cta-content">
                    <h2>Upgrade your company visual style today</h2>
                    <p>Partner with Surat's leading creative design studio to configure unforgettable assets that connect with consumers.</p>
                    <a href="contact.php" class="redesign-cta-btn cta-primary">
                        <span class="button-text-wrapper">Consult Our Experts <i class="fa fa-chevron-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
        function makeAnimatedButton(buttonSelector) {
        const buttons = document.querySelectorAll(buttonSelector);
        buttons.forEach(button => {
            const textSpan = button.querySelector('span');
            if (!textSpan) return;

            const text = textSpan.textContent.trim();
            const iconSvg = button.querySelector('svg');

            button.innerHTML = '';

            const textWrapper = document.createElement('span');
            textWrapper.className = 'button-text-wrapper';

            const mother1 = document.createElement('span');
            mother1.className = 'span-mother';
            
            const mother2 = document.createElement('span');
            mother2.className = 'span-mother2';

            for (let i = 0; i < text.length; i++) {
                const char = text[i];
                const letter1 = document.createElement('span');
                const letter2 = document.createElement('span');

                if (char === ' ') {
                    letter1.innerHTML = '&nbsp;';
                    letter2.innerHTML = '&nbsp;';
                } else {
                    letter1.textContent = char;
                    letter2.textContent = char;
                }

                const delay = i * 0.035;
                letter1.style.transitionDelay = `${delay}s`;
                letter2.style.transitionDelay = `${delay}s`;

                mother1.appendChild(letter1);
                mother2.appendChild(letter2);
            }

            textWrapper.appendChild(mother1);
            textWrapper.appendChild(mother2);
            
            button.appendChild(textWrapper);
            if (iconSvg) {
                button.appendChild(iconSvg);
            }
        });
    }
    
    // Initialize the animated button
    document.addEventListener('DOMContentLoaded', function() {
        makeAnimatedButton('.cta-primary');
        makeAnimatedButton('.cta-secondary');
    });
</script>

<?php include 'footer.php';?>