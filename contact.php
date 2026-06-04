<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="css/contact-page4.css" />
<style>
/* Premium Toast Notification */
.ajax-toast {
    position: fixed;
    top: 30px;
    right: 30px;
    z-index: 10500;
    background: rgba(15, 12, 35, 0.85);
    border: 1px solid rgba(124, 58, 237, 0.3);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    color: #ffffff;
    padding: 16px 24px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    gap: 15px;
    transform: translateX(120%);
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.4s ease;
    opacity: 0;
    max-width: 400px;
    min-width: 280px;
}

[data-theme="light"] .ajax-toast {
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid rgba(0, 0, 0, 0.1);
    color: #333333;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.ajax-toast.show {
    transform: translateX(0);
    opacity: 1;
}

.ajax-toast .toast-icon {
    font-size: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.ajax-toast.success .toast-icon {
    color: #10B981;
}

.ajax-toast.error .toast-icon {
    color: #EF4444;
}

.ajax-toast .toast-content {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.4;
    flex-grow: 1;
}

.ajax-toast .toast-close {
    cursor: pointer;
    color: var(--text-secondary);
    opacity: 0.6;
    transition: opacity 0.2s;
    font-size: 16px;
    flex-shrink: 0;
}

.ajax-toast .toast-close:hover {
    opacity: 1;
}
</style>

<!-- SEO Meta for Contact Page -->
<meta name="description" content="Contact CodeLock Solutions – Shopify, Web, Android & Digital Marketing experts in Surat, Gujarat. Call, email, or visit us today.">

<!-- Page Title Row -->
<div class="ttm-page-title-row redesign-page-title-row">
    <!-- Floating animated orbs inside page title -->
    <span class="ct-orb ct-orb-1"></span>
    <span class="ct-orb ct-orb-2"></span>
    <span class="ct-orb ct-orb-3"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box text-center">
                    <div class="page-title-heading fade-in-up">
                        <h1 class="title">Contact Us</h1>
                        <p class="ct-subtitle">Let's build something amazing together. Reach out and we'll respond within 24 hours.</p>
                    </div>
                    <div class="breadcrumb-wrapper fade-in-up">
                        <span>
                            <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-body-redesign">

    <!-- Floating particles layer -->
    <div class="ct-particles-layer" aria-hidden="true">
        <span class="ct-particle" style="--x:12%;--y:20%;--s:6px;--d:4s;--delay:0s"></span>
        <span class="ct-particle" style="--x:35%;--y:70%;--s:4px;--d:6s;--delay:1s"></span>
        <span class="ct-particle" style="--x:60%;--y:15%;--s:8px;--d:5s;--delay:0.5s"></span>
        <span class="ct-particle" style="--x:80%;--y:55%;--s:5px;--d:7s;--delay:2s"></span>
        <span class="ct-particle" style="--x:90%;--y:85%;--s:4px;--d:4.5s;--delay:1.5s"></span>
        <span class="ct-particle" style="--x:25%;--y:90%;--s:7px;--d:8s;--delay:0.3s"></span>
        <span class="ct-particle" style="--x:50%;--y:45%;--s:5px;--d:5.5s;--delay:2.5s"></span>
        <span class="ct-particle" style="--x:70%;--y:30%;--s:6px;--d:6.5s;--delay:0.8s"></span>
    </div>

    <!-- Main Contact Grid -->
    <section class="redesign-section">
        <div class="container">

            <!-- Section intro -->
            <div class="ct-section-intro redesign-section-title text-center">
                <h2>Get In <span>Touch</span></h2>
                <p>Our team of certified experts is ready to help you grow. Tell us about your project and we'll craft a tailored solution for you.</p>
            </div>

            <div class="contact-grid">

                <!-- Left Column: Contact Information Cards -->
                <div class="contact-cards-container">
                    <div class="section-title">
                        <h5>Come Visit Us At</h5>
                        <h2 class="title">Our <span>Locations</span> &amp; Details</h2>
                    </div>

                    <!-- Card 1: Office Address -->
                    <div class="contact-info-card capability-card">
                        <div class="contact-icon-box">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Office Address</h5>
                            <p>2020, Silver Business Point, Green Rd, Uttran, Surat, Gujarat 394105</p>
                        </div>
                    </div>

                    <!-- Card 2: Phone Number -->
                    <div class="contact-info-card capability-card">
                        <div class="contact-icon-box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Our Phone Number</h5>
                            <p><a href="tel:+917600464414">7600464414</a></p>
                        </div>
                    </div>

                    <!-- Card 3: Email Support -->
                    <div class="contact-info-card capability-card">
                        <div class="contact-icon-box">
                            <i class="ti ti-email"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Our Email</h5>
                            <p><a href="https://mail.google.com/mail/?view=cm&fs=1&to=codelockinfo@gmail.com" target="_blank">codelockinfo@gmail.com</a></p>
                        </div>
                    </div>

                    <!-- Response Time Badge -->
                    <div class="ct-response-badge fade-in-up">
                        <span class="ct-pulse-ring"></span>
                        <i class="fa fa-clock-o"></i>
                        Average reply within <strong>&nbsp;24 hours</strong>
                    </div>
                </div>

                <!-- Right Column: Project Enquiry Form Card -->
                <div class="contact-form-container fade-in-up">
                    <div class="section-title">
                        <h5>Enquiry</h5>
                        <h2 class="title">Tell Us About <span>Your Project</span></h2>
                    </div>

                    <form id="ttm-quote-form" class="ttm-quote-form" method="post" action="contact-mail">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group ct-field-wrap">
                                    <label for="name">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" required="required" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group ct-field-wrap">
                                    <label for="mobilenumber">Mobile Number</label>
                                    <input id="mobilenumber" name="mobilenumber" type="number" required="required" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group ct-field-wrap">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" required="required" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group ct-field-wrap">
                                    <label for="companyname">Company Name</label>
                                    <input id="companyname" name="companyname" type="text" required="required" class="form-control" placeholder="Your Company">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group ct-field-wrap">
                                    <label for="aboutcompany">Tell About Your Company...</label>
                                    <textarea id="aboutcompany" name="aboutcompany" required="required" class="form-control" placeholder="Describe your project goals or company needs..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" id="submit" class="btn-submit-redesign cta-primary" value="Submit">
                                    <span class="button-text-wrapper">
                                        Submit Inquiry <i class="fa fa-angle-right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Google Maps Widescreen Card -->
            <div class="contact-map-card fade-in-up">
                <div class="ct-map-label">
                    <i class="fa fa-map-marker"></i> CodeLock Solutions — Surat, Gujarat
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.0038257281203!2d72.86404621441072!3d21.231696886196406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f601a3dcf5d%3A0x6f62c9e8f497282b!2sCodeLock%20Solutions!5e0!3m2!1sen!2sin!4v1611315945559!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
    });

    window.addEventListener('load', () => {
        // Toast notification function
        function showToast(status, message) {
            $('.ajax-toast').remove();
            const iconClass = status === 'success' ? 'fa-check-circle' : 'fa-times-circle';
            const toastHtml = `
                <div class="ajax-toast ${status}">
                    <div class="toast-icon">
                        <i class="fa ${iconClass}"></i>
                    </div>
                    <div class="toast-content">${message}</div>
                    <div class="toast-close">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
            `;
            $('body').append(toastHtml);
            const toast = $('.ajax-toast');
            toast.each(function() { this.offsetHeight; }); // Force reflow
            toast.addClass('show');

            toast.find('.toast-close').on('click', function() {
                toast.removeClass('show');
                setTimeout(() => toast.remove(), 400);
            });

            // Auto hide after 5 seconds
            setTimeout(() => {
                if (toast.hasClass('show')) {
                    toast.removeClass('show');
                    setTimeout(() => toast.remove(), 400);
                }
            }, 5000);
        }

        // AJAX Form Submit
        $('#ttm-quote-form').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const submitBtn = form.find('.btn-submit-redesign');
            const originalBtnHtml = submitBtn.html();
            
            // Show loading spinner state on the submit button
            submitBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Submitting...');

            const formData = new FormData(this);
            formData.append('ajax', '1');

            $.ajax({
                url: form.attr('action') || 'contact-mail',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showToast('success', response.message);
                        form[0].reset();
                    } else {
                        showToast('error', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error Detail:', {
                        status: status,
                        error: error,
                        responseText: xhr.responseText
                    });
                    showToast('error', 'An error occurred. Please try again.');
                },
                complete: function() {
                    // Restore button state
                    submitBtn.prop('disabled', false).html(originalBtnHtml);
                }
            });
        });
    });
</script>

<?php include 'footer.php';?>