        <!--footer start-->
           <div id='whatsapp-chat' class='hide'>



</div>
<!-- Animated WhatsApp Button -->
<style>
/* === Animated WhatsApp Floating Button === */
.wa-float-wrapper {
    position: fixed;
    bottom: 82px;
    right: 28px;
    z-index: 9999;
    display: flex;
    align-items: center;
    flex-direction: row-reverse;
    gap: 12px;
}

.wa-btn {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    box-shadow: 0 6px 24px rgba(37,211,102,0.45), 0 2px 8px rgba(0,0,0,0.18);
    text-decoration: none;
    animation: waBounce 2.4s cubic-bezier(0.36, 0.07, 0.19, 0.97) infinite;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    flex-shrink: 0;
}

/* Pulsing sonar rings */
.wa-btn::before,
.wa-btn::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: rgba(37, 211, 102, 0.4);
    animation: waPulse 2.4s ease-out infinite;
    pointer-events: none;
}
.wa-btn::after {
    animation-delay: 0.8s;
    background: rgba(37, 211, 102, 0.25);
}

/* Icon bounce animation */
@keyframes waBounce {
    0%,  100% { transform: translateY(0) scale(1); }
    30%         { transform: translateY(-8px) scale(1.06); }
    50%         { transform: translateY(0px) scale(0.97); }
    70%         { transform: translateY(-4px) scale(1.03); }
    85%         { transform: translateY(0px) scale(1); }
}

/* Sonar pulse animation */
@keyframes waPulse {
    0%   { transform: scale(1);   opacity: 0.7; }
    80%  { transform: scale(2.2); opacity: 0; }
    100% { transform: scale(2.2); opacity: 0; }
}

/* SVG icon subtle animation */
.wa-btn svg {
    width: 28px;
    height: 28px;
    position: relative;
    z-index: 1;
    filter: drop-shadow(0 1px 3px rgba(0,0,0,0.3));
    transition: transform 0.3s ease;
}
.wa-btn:hover svg {
    transform: rotate(15deg) scale(1.1);
}

/* Chat label tooltip */
.wa-label {
    background: #fff;
    color: #075E54;
    font-family: 'Inter', 'Segoe UI', sans-serif;
    font-size: 14px;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 50px;
    white-space: nowrap;
    box-shadow: 0 4px 18px rgba(0,0,0,0.14);
    letter-spacing: 0.01em;
    opacity: 0;
    transform: translateX(12px);
    transition: opacity 0.35s cubic-bezier(0.4,0,0.2,1), transform 0.35s cubic-bezier(0.4,0,0.2,1);
    pointer-events: none;
    display: flex;
    align-items: center;
    gap: 6px;
}
.wa-label::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #25D366;
    animation: waLabelDot 1.4s ease-in-out infinite;
}
@keyframes waLabelDot {
    0%,100% { opacity: 1; transform: scale(1); }
    50%      { opacity: 0.4; transform: scale(0.7); }
}

/* Show label on wrapper hover */
.wa-float-wrapper:hover .wa-label {
    opacity: 1;
    transform: translateX(0);
    pointer-events: auto;
}

/* Ripple click effect */
.wa-btn:active::before {
    animation: waRipple 0.5s ease-out;
}
@keyframes waRipple {
    0%   { transform: scale(1);   opacity: 0.9; }
    100% { transform: scale(3.2); opacity: 0; }
}

/* Initial entrance animation */
.wa-float-wrapper {
    animation: waSlideIn 0.7s 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) both;
}
@keyframes waSlideIn {
    from { transform: translateY(60px) scale(0.5); opacity: 0; }
    to   { transform: translateY(0)    scale(1);   opacity: 1; }
}
</style>

<div class="wa-float-wrapper">
    <a class="wa-btn blantershow-chat" href="https://wa.me/+917600464414" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/>
            <path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/>
            <path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/>
        </svg>
    </a>
    <span class="wa-label">Chat with us!</span>
</div>
<style>
/* Footer Theme Styles */
.footer {
    background: var(--bg-primary);
    color: var(--text-primary);
    transition: background 0.3s ease, color 0.3s ease;
    animation: footerFadeIn 1s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes footerFadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.first-footer {
    background: var(--bg-secondary);
    padding: 25px 0;
    border-bottom: 1px solid var(--border-color);
}

.footer-logo img {
    max-width: 180px;
    height: auto;
}

.featured-icon-box .ttm-icon {
    color: var(--text-primary);
}

.featured-desc p,
.featured-desc,
.textwidget,
.widget-title,
#menu-footer-services li,
#menu-footer-menu li a {
    color: var(--text-primary);
}

#menu-footer-services li a,
#menu-footer-menu li a {
    color: var(--text-secondary);
    transition: color 0.3s ease;
}

#menu-footer-services li a:hover,
#menu-footer-menu li a:hover {
    color: var(--accent-primary);
}

.second-footer {
    background: var(--bg-tertiary);
    padding: 30px 0;
    border-bottom: 1px solid var(--border-color);
}

.widget-title {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 20px;
    color: var(--text-primary);
}

.bottom-footer-text {
    background: var(--bg-secondary);
    padding: 20px 0;
    border-top: 1px solid var(--border-color);
}

.social-icons ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 10px;
}

.social-icons li {
    display: inline-block;
}

.social-icons a {
    color: var(--text-secondary) !important;
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    animation: iconPulse 3s ease-in-out infinite;
    animation-delay: var(--icon-delay, 0s);
    text-decoration: none;
}

@keyframes iconPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.social-icons li:nth-child(1) a { --icon-delay: 0s; }
.social-icons li:nth-child(2) a { --icon-delay: 0.2s; }
.social-icons li:nth-child(3) a { --icon-delay: 0.4s; }
.social-icons li:nth-child(4) a { --icon-delay: 0.6s; }

.social-icons a:hover {
    color: #ffffff;
    background: var(--accent-primary);
    border-color: var(--accent-primary);
    animation: none;
    transform: scale(1.15) rotate(10deg);
}

.social-icons a i {
    font-size: 16px;
    line-height: 1;
}

/* Fallback: Use SVG icons if Font Awesome doesn't load */
.social-icons a i:before {
    display: block;
}
.cta-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px var(--shadow-color);
    color: #fff;
}
.ttm-btn {
    background: var(--gradient-primary);
    color: #ffffff;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.ttm-btn:hover {
    background: transparent;
    color: var(--accent-primary);
}

[data-theme="light"] .first-footer {
    background: #ffffff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

[data-theme="light"] .second-footer {
    background: #f8f9fa;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

[data-theme="light"] .bottom-footer-text {
    background: #ffffff;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

[data-theme="light"] .social-icons a {
    background: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row align-items-md-center">
                        <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                            <div class="footer-logo text-sm-center">
                                <img data-src="images/footer-logo.png" class="lazyload" alt="footer-logo">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-md-1">
                            <div class="text-left">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box left-icon icon-align-top">
                                    <div class="featured-icon"><!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-size-md">
                                            <i class="ti ti-location-pin"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content"><!--  featured-content -->
                                        <div class="featured-desc">
                                            <p>2020, silver business point Green Rd, Uttran, Surat, Gujarat 394105</p>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-md-3">
                            <div class="text-sm-right">
                                <a class="ttm-btn ttm-btn-size-md ttm-icon-btn-left cta-primary" href="https://mail.google.com/mail/?view=cm&fs=1&to=codelockinfo@gmail.com" target="_blank" title="" style="text-transform: lowercase;"> codelockinfo@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title">About Our Company</h3>
                                <div class="textwidget widget-text">
                                    Our goal is to serve the Web needs of our clients thereby contributing in the ever growing Business needs We pride ourselves on being easy to work with, creative thinkers and experts in what we do.
                                </div>
                                <div class="quicklink-box">
                                    <!--  featured-icon-box -->
                                    <div class="featured-icon-box left-icon">
                                        <div class="featured-icon"><!--  featured-icon -->
                                            <div class="ttm-icon ttm-icon_element-style-round ttm-icon_element-size-md ttm-icon_element-style-round">
                                                <span class="flaticon flaticon-clock"></span><!--  ttm-icon -->
                                            </div>
                                        </div>
                                        <div class="featured-content"><!--  featured-content -->
                                            <div class="featured-desc"><!--  featured-desc -->
                                                <p>Talk To Our Support</p>
                                            </div>
                                            <div class="featured-title"><!--  featured-title -->
                                                <h5>+91 76004 64414</h5>
                                            </div>
                                        </div>
                                    </div><!--  featured-icon-box END -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                            <div class="widget link-widget clearfix">
                                <h3 class="widget-title">Quick Links</h3>
                                <div class="row">
                                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                       <ul id="menu-footer-services">
                                            <li><a href="contact.php">Customer Services</a></li>
                                            <li><a href="about.php">About Company</a></li>
                                            <li><a href="contact.php">Meet Our Experts</a></li>
                                            <li><a href="career.php">Career</a></li>
                                            <li><a href="shopifyapps.php">Shopify apps</a></li>
                                        </ul>
                                   </div>
                                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <ul id="menu-footer-services">
                                            <li><a href="websitedevlopment.php">Website devlopment</a></li>
                                            <!--<li><a href="androiddevlopment.php">Android Devlopment</a></li>-->
                                            <!--<li><a href="graphicdesign.php">Graphic Design</a></li>-->
                                            <!--<li><a href="digitalmarketing.php">Degital marketing</a></li>-->
                                            <li><a href="ecommercewebsite.php">E-commerce Website</a></li>
                                        </ul>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                            <div class="widget flicker_widget clearfix">
                               <h3 class="widget-title">Contact Us</h3>
                               <div class="textwidget widget-text">
                                    <ul id="menu-footer-services">
                                        <li><i class="fa fa-map-marker"></i> 2020, silver business point Green Rd, Uttran, Surat, Gujarat 394105</li>
                                        <li><i class="fa fa-phone"></i> +91 76004 64414</li>
                                        <li><i class="fa fa-envelope-o"></i> codelockinfo@gmail.com</li>
                                    </ul>

                                    <h5 class="mb-20">Follow Us On</h5>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="https://business.facebook.com/latest/home?asset_id=102472537971901&business_id=222081448788597&nav_ref=bm_home_redirect" data-tooltip="Facebook">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                            </a></li>

                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="https://www.instagram.com/codelocksolutions/" data-tooltip="Instagram">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                            </a></li>

                                            <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="https://www.linkedin.com/company/38132884/admin/" data-tooltip="Linkedin">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                            </a></li>

                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="https://api.whatsapp.com/send/?phone=%2B917600464414&text&type=phone_number&app_absent=0" data-tooltip="Whatsapp">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 2.468 4.048c.347.472 2.442 3.728 5.917 5.228 2.282.983 2.747.787 3.247.737.5-.05 1.6-.654 1.823-1.286.223-.631.223-1.173.156-1.286z"/></svg>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-6">
                            <div class="">
                                <span>Copyright © 2020&nbsp;<a href="#">Codelock Solutions</a></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right res-767-mt-10">
                                <div class="d-lg-inline-flex">
                                    <ul id="menu-footer-menu" class="footer-nav-menu">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

        <!-- Javascript -->

        <script src="js/jquery1.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.js"></script>    
        <script src="js/jquery-waypoints.js"></script>    
        <script src="js/jquery-validate.js"></script> 
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/numinate.min6959.js?ver=4.9.3"></script>
        <script src="js/lazysizes.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/theme.js"></script>

        <!-- Revolution Slider -->
        <script src="revolution/js/revolution1.tools.min.js"></script>
        <script src="revolution/js/rs7.min.js"></script>
        <script src="revolution/js/slider.js"></script>

        <!-- Javascript end-->

</body>
</html>
<?php
// Flush and output the rewritten clean URL HTML buffer
if (ob_get_length()) {
    ob_end_flush();
}
?>