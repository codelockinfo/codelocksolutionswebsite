<?php
// Start dynamic URL buffer to rewrite all internal links to clean extensionless URLs
ob_start(function($buffer) {
    return preg_replace_callback(
        '/href=["\'](?![a-zA-Z0-9]+:\/\/)(?![^"\']+\-mail\.php)([^"\']+\.php)([^"\']*)["\']/',
        function($matches) {
            $clean_url = preg_replace('/\.php$/', '', $matches[1]);
            if ($clean_url === 'index') {
                $clean_url = '/';
            }
            return 'href="' . $clean_url . $matches[2] . '"';
        },
        $buffer
    );
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $clean_path = preg_replace('/\.php$/', '', $request_path);
        
        // Canonicalize index.php to root /
        if ($clean_path == '/index') {
            $clean_path = '/';
        }
        
        // Parse the current active domain and dynamically strip 'www.' if present
        $raw_host = $_SERVER['HTTP_HOST'];
        $clean_host = preg_replace('/^www\./i', '', $raw_host);
        
        // Construct canonical URL using HTTPS and clean dynamic host
        $canonical_url = "https://" . $clean_host . $clean_path;
        if ($clean_path !== '/') {
            $canonical_url = rtrim($canonical_url, '/');
        }

        // Determine Google Tracking tags dynamically based on domain
        if (strpos($clean_host, 'codelocksolutions.in') !== false) {
            $ga_id = 'G-3FS97C85C3';
            $gtm_id = 'GTM-5HTV7K3K';
        } else {
            // Default to .com tags (handles local development and codelocksolutions.com)
            $ga_id = 'G-W43RFKKGCK';
            $gtm_id = 'GTM-WK4NRFPV';
        }
    ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_id; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?php echo $ga_id; ?>');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo $gtm_id; ?>');</script>
    <!-- End Google Tag Manager -->
    <?php
        // Dynamic SEO Configuration
        $current_page = basename($_SERVER['SCRIPT_NAME']);

        // Fallback SEO mapping
        $seo_defaults = [
            'index.php' => [
                'title' => 'Shopify Experts & E-Commerce Agency | Codelock Solutions',
                'desc' => 'Codelock Solutions is a leading Shopify development agency providing custom Shopify theme design, Shopify app development, and expert consulting services.'
            ],
            'about.php' => [
                'title' => 'About Us | Shopify Development Company | Codelock Solutions',
                'desc' => 'Learn about Codelock Solutions. We are a professional team of Shopify experts and e-commerce developers delivering high-quality web solutions worldwide.'
            ],
            'services.php' => [
                'title' => 'Shopify & E-commerce Web Services | Codelock Solutions',
                'desc' => 'Explore our e-commerce web development, custom Shopify theme design, Shopify app development, mobile apps, and digital marketing services.'
            ],
            'projects.php' => [
                'title' => 'Shopify Portfolio & E-commerce Projects | Codelock Solutions',
                'desc' => 'Browse our portfolio of custom Shopify stores, theme customizations, and successful e-commerce projects delivered by Codelock Solutions.'
            ],
            'career.php' => [
                'title' => 'Careers | Join Our Shopify Developer Team | Codelock Solutions',
                'desc' => 'Looking to grow your career in IT and web development? Join Codelock Solutions as a Shopify developer, designer, or digital marketer. Apply today!'
            ],
            'blogs.php' => [
                'title' => 'Shopify Blog & E-commerce Insights | Codelock Solutions',
                'desc' => 'Read our latest articles, guides, and tips on Shopify development, e-commerce strategies, store speed optimization, and digital marketing.'
            ],
            'contact.php' => [
                'title' => 'Contact Us | Shopify Development Quote | Codelock Solutions',
                'desc' => 'Get in touch with Codelock Solutions today. Contact our expert team for custom Shopify web design, app development, and e-commerce consulting.'
            ],
            'allapps.php' => [
                'title' => 'Custom Shopify Apps & Store Utilities | Codelock Solutions',
                'desc' => 'Discover powerful custom Shopify apps developed by Codelock Solutions to boost your store\'s sales, increase conversion rates, and optimize workflows.'
            ],
            'androiddevlopment.php' => [
                'title' => 'Android App Development Services | Codelock Solutions',
                'desc' => 'Build high-performing, custom Android mobile applications for your e-commerce business. Reach mobile users with Codelock Solutions.'
            ],
            'custom_web.php' => [
                'title' => 'Shopify vs Custom Website Comparison | Codelock Solutions',
                'desc' => 'An in-depth comparison between Shopify and custom web development. Find out which platform fits your e-commerce business goals best.'
            ],
            'digitalmarketing.php' => [
                'title' => 'Digital Marketing & E-commerce SEO | Codelock Solutions',
                'desc' => 'Boost your store\'s visibility, drive high-quality organic traffic, and increase conversion rates with our expert e-commerce SEO services.'
            ],
            'ecommercewebsite.php' => [
                'title' => 'E-commerce & Shopify Store Setup | Codelock Solutions',
                'desc' => 'Get full-service e-commerce website development. We build secure, responsive, and fast online stores tailored to your business needs.'
            ],
            'graphicdesign.php' => [
                'title' => 'UI/UX & Graphic Design Services | Codelock Solutions',
                'desc' => 'Stunning, modern UI/UX design for web and mobile apps. Enhance your brand identity with custom graphic design by Codelock Solutions.'
            ],
            'hireexpert.php' => [
                'title' => 'Why Hire Shopify Experts for Your Store? | Codelock',
                'desc' => 'Learn the benefits of hiring certified Shopify experts to build, customize, and optimize your e-commerce store for maximum growth.'
            ],
            'pricing-blog.php' => [
                'title' => 'Shopify Design & Customization Pricing | Codelock Solutions',
                'desc' => 'Compare pricing models for Shopify store design, theme customization, and development services to plan your e-commerce budget.'
            ],
            'shopifyapps.php' => [
                'title' => 'Custom Shopify App Development Services | Codelock Solutions',
                'desc' => 'Extend your store\'s functionality with custom-built Shopify apps. Tailored integration, secure code, and dedicated support.'
            ],
            'shopifyplus.php' => [
                'title' => 'Shopify Plus Enterprise Solutions | Codelock Solutions',
                'desc' => 'Scale your high-volume e-commerce brand with Shopify Plus enterprise solutions. Specialized migration, checkout customizer, and automation.'
            ],
            'coststart.php' => [
                'title' => 'Shopify Store Startup Cost Breakdown | Codelock Solutions',
                'desc' => 'A comprehensive guide to starting costs for a Shopify store, including plans, transaction fees, themes, and app subscriptions.'
            ],
            'revenue24.php' => [
                'title' => 'Increase Shopify Store Revenue | Codelock Solutions',
                'desc' => 'Discover optimization tips, upsell methods, page speed improvements, and design hacks to double your e-commerce sales in 2024.'
            ],
            'tranceclient.php' => [
                'title' => 'Client Reviews & E-commerce Stories | Codelock Solutions',
                'desc' => 'See how we help global e-commerce merchants succeed. Client reviews, testimonials, and case studies for Codelock Solutions.'
            ],
            'websitedevlopment.php' => [
                'title' => 'Custom Web & E-commerce Development | Codelock Solutions',
                'desc' => 'Professional PHP, WordPress, and Shopify website development services. Fast, secure, and modern designs that convert visitors.'
            ],
            'blogdetail.php' => [
                'title' => 'E-commerce Blog & Shopify Guides | Codelock Solutions',
                'desc' => 'Read our comprehensive guides on Shopify theme design, custom app integrations, e-commerce scaling, and store launch checklists.'
            ],
        ];

        // Handle projects dynamically (e.g. project-ayaani.php)
        if (strpos($current_page, 'project-') === 0) {
            $project_raw = str_replace(['project-', '.php'], '', $current_page);
            $project_names = [
                'aadhunikgtech' => 'Aadhunik Gtech',
                'ayaani' => 'Ayaani',
                'bbare' => 'Bbare',
                'civiajewels' => 'Civia Jewels',
                'cosnet' => 'Cosnet',
                'fabdreamsorganic' => 'Fab Dreams Organic',
                'fillerlabdenmark' => 'Filler Lab Denmark',
                'florenceblack' => 'Florence Black',
                'gemroyals' => 'Gem Royals',
                'hamporio' => 'Hamporio',
                'ibex' => 'IBEX',
                'justmeats' => 'True Nature Meats',
                'kiddicare' => 'Kiddicare',
                'millenniumjewelery' => 'Millennium Jewelery',
                'naturanari' => 'Natura Nari',
                'pazzionindia' => 'Pazzion India',
                'rakva' => 'Rakva',
                'rangya' => 'Rangya',
                'terragentle' => 'Terra Gentle',
                'tistabene' => 'Tistabene',
                'warriorworld' => 'Warrior World',
            ];
            $project_name = isset($project_names[$project_raw]) ? $project_names[$project_raw] : ucwords(str_replace('-', ' ', $project_raw));
            
            $default_title = $project_name . " Case Study | Codelock Solutions";
            $default_desc = "Explore the custom Shopify store design, theme customization, and e-commerce integrations developed by Codelock Solutions for " . $project_name . ".";
        } else {
            $default_title = $seo_defaults[$current_page]['title'] ?? 'Shopify Experts & E-Commerce Agency | Codelock Solutions';
            $default_desc = $seo_defaults[$current_page]['desc'] ?? 'Codelock Solutions is a leading Shopify development agency providing custom Shopify theme design, Shopify app development, and expert consulting services.';
        }

        // Set final title and description variables
        $seo_title = isset($page_title) ? $page_title : $default_title;
        $seo_desc = isset($page_description) ? $page_description : $default_desc;
    ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="Shopify Apps, Shopify Store, Theme Design, WordPress Site, Android Apps, Digital Marketing" />
    <meta name="description" content="<?php echo htmlspecialchars($seo_desc); ?>" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo htmlspecialchars($seo_title); ?></title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?v=2" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css?v=2" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css?v=2">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css?v=2" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css?v=2" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css?v=2" />

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/rs6.css?v=2">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css?v=2">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes2.css?v=2" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main4.css?v=2" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive3.css?v=2" />
    <link rel="stylesheet" type="text/css" href="css/style1.css?v=2" />
    <link rel="stylesheet" type="text/css" href="css/theme1.css?v=2" />

    <!-- Prevent FOUC: apply saved theme before first paint -->
    <script>
        (function () {
            var t = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', t);
        })();
    </script>

    <style>
        /* Header & Topbar Theme Support */
        .ttm-topbar-wrapper {
            display: none;
            background: #04030a !important;
            color: #a3a3a3 !important;
            border-bottom: 1px solid rgba(124, 58, 237, 0.2) !important;
            transition: background 0.3s ease, color 0.3s ease;
        }

        [data-theme="light"] .ttm-topbar-wrapper {
            background: #ffffff !important;
            color: #333333 !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .ttm-topbar-wrapper a,
        .ttm-topbar-wrapper .top-contact li,
        .ttm-topbar-wrapper .top-contact li i {
            color: #a3a3a3 !important;
            transition: color 0.3s;
        }

        [data-theme="light"] .ttm-topbar-wrapper a,
        [data-theme="light"] .ttm-topbar-wrapper .top-contact li,
        [data-theme="light"] .ttm-topbar-wrapper .top-contact li i {
            color: #333333 !important;
        }

        .ttm-topbar-wrapper a:hover {
            color: #00f2fe !important;
        }

        [data-theme="light"] .ttm-topbar-wrapper a:hover {
            color: #0066cc !important;
        }

        /* Main Header */
        .ttm-stickable-header {
            background: rgba(7, 5, 20, 0.85) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: background 0.3s ease;
            padding: 0 40px;
        }

        [data-theme="light"] .ttm-stickable-header {
            background: rgba(255, 255, 255, 0.95) !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .is-sticky .ttm-stickable-header,
        .ttm-header-wrap.is-sticky,
        .ttm-stickable-header.fixed-header {
            background: #000000 !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
        }

        [data-theme="light"] .is-sticky .ttm-stickable-header,
        [data-theme="light"] .ttm-header-wrap.is-sticky,
        [data-theme="light"] .ttm-stickable-header.fixed-header {
            background: #ffffff !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
        }

        /* Logo */
        .site-branding img {
            filter: brightness(0) invert(1);
            opacity: 0.9;
            transition: opacity 0.3s ease;
        }

        [data-theme="light"] .site-branding img {
            filter: none;
            opacity: 1;
        }

        .site-branding img:hover {
            opacity: 1;
        }

        /* Navigation Links */
        #site-navigation .menu ul.dropdown>li>a {
            color: #e0e0e0 !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        [data-theme="light"] #site-navigation .menu ul.dropdown>li>a {
            color: #333333 !important;
        }

        #site-navigation .menu ul.dropdown>li:hover>a,
        #site-navigation .menu ul.dropdown>li.active>a {
            color: #00f2fe !important;
        }

        [data-theme="light"] #site-navigation .menu ul.dropdown>li:hover>a,
        [data-theme="light"] #site-navigation .menu ul.dropdown>li.active>a {
            color: #728948 !important;
        }

        /* Dropdown Menu styling */
        #site-navigation .menu ul.dropdown ul {
            background: #0a0818 !important;
            border: 1px solid rgba(124, 58, 237, 0.3) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8) !important;
            transition: background 0.3s ease;
        }

        [data-theme="light"] #site-navigation .menu ul.dropdown ul {
            background: #ffffff !important;
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }

        #site-navigation .menu ul.dropdown ul>li>a {
            color: #cccccc !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        [data-theme="light"] #site-navigation .menu ul.dropdown ul>li>a {
            color: #333333 !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
        }

        #site-navigation .menu ul.dropdown ul>li:hover>a {
            color: #ffffff !important;
            background: rgba(124, 58, 237, 0.2) !important;
            padding-left: 20px !important;
        }

        [data-theme="light"] #site-navigation .menu ul.dropdown ul>li:hover>a {
            color: #728948 !important;
            background: rgba(0, 102, 204, 0.1) !important;
        }

        /* Social icons in topbar */
        .ttm-social-links-wrapper.list-inline .social-icons li a {
            color: #fff !important;
            border-color: transparent !important;
            transition: background 0.3s ease;
        }

        [data-theme="light"] .ttm-social-links-wrapper.list-inline .social-icons li a {
            color: #000 !important;
        }

        /* Mobile Responsive Fixes */
        @media (max-width: 1199px) {
            /* Mobile menu toggle button */
            .ttm-menu-toggle-block .toggle-block {
                background-color: var(--text-primary) !important;
            }

            .ttm-stickable-header {
                padding: 0 !important;
            }

            /* Fix mobile header background */
            .ttm-stickable-header-w {
                background-color: #070514 !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
                transition: background-color 0.3s ease;
            }

            [data-theme="light"] .ttm-stickable-header-w {
                background-color: #ffffff !important;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }

            .ttm-header-wrap {
                background-color: #070514 !important;
                transition: background-color 0.3s ease;
            }

            [data-theme="light"] .ttm-header-wrap {
                background-color: #ffffff !important;
            }

            /* Fix mobile menu dropdown background and links */
            #site-header-menu #site-navigation .menu>ul {
                background-color: #0a0818 !important;
                border-top: 3px solid #00f2fe !important;
                transition: background-color 0.3s ease;
            }

            [data-theme="light"] #site-header-menu #site-navigation .menu>ul {
                background-color: #ffffff !important;
                border-top: 3px solid #728948 !important;
            }

            #site-header-menu #site-navigation .menu ul li a {
                color: #e0e0e0 !important;
                transition: color 0.3s ease;
            }

            [data-theme="light"] #site-header-menu #site-navigation .menu ul li a {
                color: #333333 !important;
            }

            #site-header-menu #site-navigation .menu ul li:hover>a,
            #site-header-menu #site-navigation .menu ul li.active>a {
                color: #00f2fe !important;
                background-color: rgba(255, 255, 255, 0.02) !important;
            }

            [data-theme="light"] #site-header-menu #site-navigation .menu ul li:hover>a,
            [data-theme="light"] #site-header-menu #site-navigation .menu ul li.active>a {
                color: var(--accent-primary) !important;
                background-color: rgba(0, 0, 0, 0.02) !important;
            }

            /* Fix header alignment (Logo left, Toggle right) */
            .site-branding {
                text-align: center !important;
            }

            .ttm-menu-toggle {
                float: none !important;
                left: 16px;
                margin: 0 !important;
                position: absolute;
                top: 30px;
                z-index: 1001;
            }

            .ttm-menu-toggle label {
                top: 0 !important;
            }

            .ttm-menu-toggle .toggle-block {
                border-radius: 999px;
                transition: opacity 0.2s ease, transform 0.32s ease, margin 0.32s ease;
            }

            #site-header-menu #site-navigation .menu {
                background: #05030e;
                bottom: 0;
                display: block !important;
                height: calc(100dvh - 80px);
                height: calc(100vh - 80px);
                left: 0;
                max-height: 0;
                opacity: 0;
                overflow: hidden;
                pointer-events: none;
                position: fixed;
                right: 0;
                top: 80px;
                transform: translateY(-12px) scale(0.98);
                transform-origin: top center;
                width: 100vw;
                transition: max-height 0.45s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.25s ease, transform 0.35s ease, visibility 0s linear 0.35s;
                visibility: hidden;
                z-index: 9998;
            }

            #site-header-menu #site-navigation .menu:before {
                background:
                    linear-gradient(135deg, rgba(0, 242, 254, 0.14), rgba(0, 242, 254, 0) 34%),
                    repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.045) 0 1px, transparent 1px 48px),
                    repeating-linear-gradient(0deg, rgba(255, 255, 255, 0.035) 0 1px, transparent 1px 48px);
                content: "";
                inset: 0;
                opacity: 0;
                pointer-events: none;
                position: absolute;
                transform: translateY(-18px);
                transition: opacity 0.35s ease, transform 0.45s ease;
            }

            #site-header-menu #site-navigation .menu.active:before {
                opacity: 1;
                transform: translateY(0);
            }

            #site-header-menu #site-navigation .menu.active {
                height: calc(100dvh - 80px) !important;
                height: calc(100vh - 80px) !important;
                max-height: calc(100dvh - 80px);
                max-height: calc(100vh - 80px);
                opacity: 1;
                overflow-y: auto;
                pointer-events: auto;
                transform: translateY(0) scale(1);
                transition-delay: 0s;
                visibility: visible;
                -webkit-overflow-scrolling: touch;
            }

            #site-header-menu #site-navigation .menu>ul>li {
                border: 0 !important;
                counter-increment: mobile-nav;
                opacity: 0;
                transform: translateX(-26px);
                transition: opacity 0.24s ease, transform 0.28s ease;
            }

            #site-header-menu #site-navigation .menu>ul>li:nth-child(even) {
                transform: translateX(26px);
            }

            #site-header-menu #site-navigation .menu.active>ul>li {
                opacity: 1;
                transform: translateX(0);
            }

            #site-header-menu #site-navigation .menu>ul>li>a {
                align-items: center;
                background: linear-gradient(90deg, rgba(255, 255, 255, 0.075), rgba(255, 255, 255, 0.02)) !important;
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-left: 3px solid rgba(0, 242, 254, 0.55);
                border-radius: 8px;
                box-sizing: border-box;
                display: flex !important;
                font-size: clamp(16px, 4.6vw, 22px);
                font-weight: 700;
                justify-content: flex-start;
                letter-spacing: 0;
                min-height: 56px;
                overflow: hidden;
                padding: 0 20px !important;
                position: relative;
                text-transform: capitalize;
                width: 100%;
            }

            #site-header-menu #site-navigation .menu>ul>li:hover>a,
            #site-header-menu #site-navigation .menu>ul>li.active>a {
                background: linear-gradient(90deg, rgba(0, 242, 254, 0.17), rgba(124, 58, 237, 0.12)) !important;
                border-color: rgba(0, 242, 254, 0.38);
            }

            #site-header-menu #site-navigation .menu>ul>li:hover>a:after,
            #site-header-menu #site-navigation .menu>ul>li.active>a:after {
                color: #00f2fe;
                transform: translate(4px, -50%);
            }

            [data-theme="light"] #site-header-menu #site-navigation .menu {
                background: #f7fbff;
            }

            [data-theme="light"] #site-header-menu #site-navigation .menu:before {
                background:
                    linear-gradient(135deg, rgba(0, 102, 204, 0.12), rgba(0, 102, 204, 0) 34%),
                    repeating-linear-gradient(90deg, rgba(0, 0, 0, 0.045) 0 1px, transparent 1px 48px),
                    repeating-linear-gradient(0deg, rgba(0, 0, 0, 0.035) 0 1px, transparent 1px 48px);
            }

            [data-theme="light"] #site-header-menu #site-navigation .menu>ul>li>a {
                background: linear-gradient(90deg, rgba(255, 255, 255, 0.9), rgba(114, 137, 72, 0.08)) !important;
                border-color: rgba(0, 0, 0, 0.08);
                border-left-color: rgb(114 137 72 / 56%);
            }

            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(1) { transition-delay: 0.04s; }
            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(2) { transition-delay: 0.07s; }
            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(3) { transition-delay: 0.10s; }
            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(4) { transition-delay: 0.13s; }
            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(5) { transition-delay: 0.16s; }
            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(6) { transition-delay: 0.19s; }
            #site-header-menu #site-navigation .menu.active>ul>li:nth-child(7) { transition-delay: 0.22s; }

            body.mobile-menu-open {
                overflow: hidden;
            }

            body.mobile-menu-open #whatsapp-chat,
            body.mobile-menu-open .blantershow-chat {
                opacity: 0;
                pointer-events: none;
                transform: scale(0.88);
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $gtm_id; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--page start-->
    <div class="page">
        <!-- preloader start -->
        <div id="preloader">
            <div class="loader-ring">
                <div class="loader-dot"></div>
            </div>
            <span class="loader-brand">Codelock</span>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li><i class="fa fa-map-marker"></i>Uttran, Surat, Gujarat.</li>
                            <li><i class="fa fa-envelope-o"></i><a
                                    href="mailto:codelockinfo@gmail.com">codelockinfo@gmail.com</a></li>
                        </ul>

                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-clock-o"></i>Office Hour: 09:30am - 6:30pm</li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/codelocksolutions/" class=" tooltip-bottom"
                                            data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <!--<li><a href="#" class=" tooltip-bottom" data-tooltip="Google"><i class="fa fa-google-plus"></i></a>-->
                                    <!--</li>-->
                                    <li><a href="https://api.whatsapp.com/send?phone=7600464414" class=" tooltip-bottom"
                                            data-tooltip="Whatsapp"><i class="fa fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="header-btn">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="#">Get A Quote</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <!-- theme toggle button - positioned at right corner -->
                            <button id="theme-toggle" class="theme-toggle-btn theme-toggle-header-right"
                                aria-label="Toggle theme">
                                <svg class="sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <circle cx="12" cy="12" r="5" />
                                    <line x1="12" y1="1" x2="12" y2="3" />
                                    <line x1="12" y1="21" x2="12" y2="23" />
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                                    <line x1="1" y1="12" x2="3" y2="12" />
                                    <line x1="21" y1="12" x2="23" y2="12" />
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                                </svg>
                                <svg class="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                                </svg>
                            </button>
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.php" title="Codelock Solutions" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo.png" alt="logo">
                                    </a>
                                </div><!-- site-branding end -->

                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="ttm-rt-contact">
                                        <!-- header-icons -->
                                        <!-- <div class="ttm-header-icons ">
                                            <span class="ttm-header-icon ttm-header-cart-link">
                                                <a href="#"><i class="ti ti-shopping-cart"></i>
                                                    <span class="number-cart">0</span>
                                                </a>
                                            </span>
                                            <div class="ttm-header-icon ttm-header-search-link">
                                                <a href="#"><i class="ti ti-search"></i></a>
                                                <div class="ttm-search-overlay">
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- header-icons end -->
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation menu" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block" aria-label="Toggle navigation menu">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu" aria-label="Primary navigation">
                                        <ul class="dropdown">
                                            <li><a href="index.php" class="gtm-nav-link" data-nav-name="Home">Home</a></li>
                                            <li><a href="about.php" class="gtm-nav-link" data-nav-name="About Us">About Us</a></li>
                                            <li><a href="services.php" class="gtm-nav-link" data-nav-name="Services">Services</a>
                                                <!-- <ul>
                                                    <li><a href="shopifyapps.php">Shopify apps</a></li>
                                                    <li><a href="websitedevlopment.php">Website devlopment</a></li>
                                                    <li><a href="ecommercewebsite.php">E-commerce Website</a></li> -->
                                                    <!--<li><a href="androiddevlopment.php">Android Devlopment</a></li>-->
                                                    <!--<li><a href="graphicdesign.php">Graphic Design</a></li>-->
                                                <!-- </ul> -->
                                            </li>
                                            <li><a href="projects.php" class="gtm-nav-link" data-nav-name="Projects">Projects</a></li>
                                            <li><a href="career.php" class="gtm-nav-link" data-nav-name="Career">Career</a></li>
                                            <li><a href="blogs.php" class="gtm-nav-link" data-nav-name="Blogs">blogs</a></li>
                                            <li><a href="contact.php" class="gtm-nav-link" data-nav-name="Contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

<script>
// Set active navigation link based on current page
document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('#menu .dropdown > li > a');
    
    navLinks.forEach(link => {
        const linkPath = new URL(link.href).pathname;
        
        // Remove active class from all
        link.parentElement.classList.remove('active');
        
        // Normalize paths (remove .php extension for comparison)
        const normalizedCurrentPath = currentPath.replace(/\.php$/, '');
        const normalizedLinkPath = linkPath.replace(/\.php$/, '');
        
        // Add active class to matching link
        if (normalizedCurrentPath === normalizedLinkPath || 
            (normalizedCurrentPath.includes(normalizedLinkPath) && normalizedLinkPath !== '/index') ||
            (normalizedCurrentPath === '/' && normalizedLinkPath.includes('index'))) {
            link.parentElement.classList.add('active');
        }
    });
});
</script>
