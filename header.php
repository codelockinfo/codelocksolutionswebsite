<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Shopify Apps, Shopify Store, Theme Design, WordPress Site, Android Apps, Degital Marketing" />
<meta name="description" content="Codelock Solutions – Provide IT Sollutions and Services" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Shopify Experts: Unleash Your E-commerce Success with Expert Shopify Website Development and Consulting</title>
<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/rs6.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/theme.css"/>

<!-- Prevent FOUC: apply saved theme before first paint -->
<script>
(function(){
    var t = localStorage.getItem('clTheme') || 'dark';
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

.ttm-topbar-wrapper a, .ttm-topbar-wrapper .top-contact li, .ttm-topbar-wrapper .top-contact li i {
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
}

[data-theme="light"] .ttm-stickable-header {
    background: rgba(255, 255, 255, 0.95) !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.is-sticky .ttm-stickable-header, .ttm-header-wrap.is-sticky {
    background: rgba(7, 5, 20, 0.95) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
}

[data-theme="light"] .is-sticky .ttm-stickable-header, 
[data-theme="light"] .ttm-header-wrap.is-sticky {
    background: rgba(255, 255, 255, 0.98) !important;
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
#site-navigation .menu ul.dropdown > li > a {
    color: #e0e0e0 !important;
    font-weight: 500;
    transition: color 0.3s ease;
}

[data-theme="light"] #site-navigation .menu ul.dropdown > li > a {
    color: #333333 !important;
}

#site-navigation .menu ul.dropdown > li:hover > a, 
#site-navigation .menu ul.dropdown > li.active > a {
    color: #00f2fe !important;
}

[data-theme="light"] #site-navigation .menu ul.dropdown > li:hover > a, 
[data-theme="light"] #site-navigation .menu ul.dropdown > li.active > a {
    color: #728948 !important;
}

/* Dropdown Menu styling */
#site-navigation .menu ul.dropdown ul {
    background: #0a0818 !important;
    border: 1px solid rgba(124, 58, 237, 0.3) !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.8) !important;
    transition: background 0.3s ease;
}

[data-theme="light"] #site-navigation .menu ul.dropdown ul {
    background: #ffffff !important;
    border: 1px solid rgba(0, 0, 0, 0.1) !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

#site-navigation .menu ul.dropdown ul > li > a {
    color: #cccccc !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
}

[data-theme="light"] #site-navigation .menu ul.dropdown ul > li > a {
    color: #333333 !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
}

#site-navigation .menu ul.dropdown ul > li:hover > a {
    color: #ffffff !important;
    background: rgba(124, 58, 237, 0.2) !important;
    padding-left: 20px !important;
}

[data-theme="light"] #site-navigation .menu ul.dropdown ul > li:hover > a {
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
    
    /* Fix mobile header background */
    .ttm-stickable-header-w {
        background-color: #070514 !important;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        transition: background-color 0.3s ease;
    }
    
    [data-theme="light"] .ttm-stickable-header-w {
        background-color: #ffffff !important;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }
    
    .ttm-header-wrap {
        background-color: #070514 !important;
        transition: background-color 0.3s ease;
    }
    
    [data-theme="light"] .ttm-header-wrap {
        background-color: #ffffff !important;
    }

    /* Fix mobile menu dropdown background and links */
    #site-header-menu #site-navigation .menu > ul {
        background-color: #0a0818 !important;
        border-top: 3px solid #00f2fe !important;
        transition: background-color 0.3s ease;
    }
    
    [data-theme="light"] #site-header-menu #site-navigation .menu > ul {
        background-color: #ffffff !important;
        border-top: 3px solid #0066cc !important;
    }
    
    #site-header-menu #site-navigation .menu ul li a {
        color: #e0e0e0 !important;
        transition: color 0.3s ease;
    }
    
    [data-theme="light"] #site-header-menu #site-navigation .menu ul li a {
        color: #333333 !important;
    }
    
    #site-header-menu #site-navigation .menu ul li:hover > a,
    #site-header-menu #site-navigation .menu ul li.active > a {
        color: #00f2fe !important;
        background-color: rgba(255,255,255,0.02) !important;
    }
    
    [data-theme="light"] #site-header-menu #site-navigation .menu ul li:hover > a,
    [data-theme="light"] #site-header-menu #site-navigation .menu ul li.active > a {
        color: #0066cc !important;
        background-color: rgba(0,0,0,0.02) !important;
    }
    
    /* Fix header alignment (Logo left, Toggle right) */
    .site-branding {
        text-align: center !important;
    }
    .ttm-menu-toggle {
        float: left !important;
        margin-right: 15px !important;
        z-index: 10;
        margin-top: 5px;
    }
    .ttm-menu-toggle label {
        top: 25px !important;
    }
}
</style>
</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
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
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:codelockinfo@gmail.com">codelockinfo@gmail.com</a></li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-clock-o"></i>Office Hour: 09:30am - 6:30pm</li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/codelocksolutions/" class=" tooltip-bottom" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <!--<li><a href="#" class=" tooltip-bottom" data-tooltip="Google"><i class="fa fa-google-plus"></i></a>-->
                                    <!--</li>-->
                                    <li><a href="https://api.whatsapp.com/send?phone=7600464414" class=" tooltip-bottom" data-tooltip="Whatsapp"><i class="fa fa-whatsapp"></i></a>
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
                            <button id="theme-toggle" class="theme-toggle-btn theme-toggle-header-right" aria-label="Toggle theme">
                                <svg class="sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="5"/>
                                    <line x1="12" y1="1" x2="12" y2="3"/>
                                    <line x1="12" y1="21" x2="12" y2="23"/>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                                    <line x1="1" y1="12" x2="3" y2="12"/>
                                    <line x1="21" y1="12" x2="23" y2="12"/>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                                </svg>
                                <svg class="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
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
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li class="active"><a href="index.php">Home</a></li>

                                            <li><a href="about.php">About Us</a></li>

                                            <li><a href="services.php">Services</a>
                                                <ul>
                                                    <li><a href="shopifyapps.php">Shopify apps</a></li>
                                                    <li><a href="websitedevlopment.php">Website devlopment</a></li>
                                                    <li><a href="ecommercewebsite.php">E-commerce Website</a></li>
                                                    <!--<li><a href="androiddevlopment.php">Android Devlopment</a></li>-->
                                                    <!--<li><a href="graphicdesign.php">Graphic Design</a></li>-->
                                                </ul>
                                            </li>

                                            <li><a href="career.php">Career</a></li>
                                            <li><a href="blogs.php">blogs</a></li>


                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->

        </header><!--header end-->