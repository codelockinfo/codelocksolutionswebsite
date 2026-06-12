
<?php include 'header.php';?>
<style>
/* Career Page Dark/Light Theme Styles - Using Site Theme Variables */
.career-page {
    background: var(--bg-primary);
    background-image: var(--bg-image);
    background-attachment: fixed;
    color: var(--text-primary);
    transition: all 0.3s ease;
}

.career-hero {
    padding: 120px 40px 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.career-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0, 242, 254, 0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

[data-theme="light"] .career-hero::before {
    background: radial-gradient(circle, rgba(114, 137, 72, 0.1) 0%, transparent 70%);
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes titleShine {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
}

.career-hero h1 {
    font-size: 3.2rem;
    font-weight: 800;
    margin-bottom: 20px;
    background: linear-gradient(120deg, #00f2fe 0%, #10b981 35%, #ffffff 50%, #10b981 65%, #00f2fe 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    position: relative;
    z-index: 1;
    text-shadow: 0 0 35px rgba(0, 242, 254, 0.15);
    animation: titleShine 16s linear infinite;
}

[data-theme="light"] .career-hero h1 {
    background: linear-gradient(120deg, #728948 0%, #374a16 35%, #5a6e34 50%, #374a16 65%, #728948 100%);
    background-size: 200% auto;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: none;
}

.career-hero p {
    font-size: 18px;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.career-jobs-section {
    padding: 40px;
}

.career-jobs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.job-card {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: 20px;
    padding: 30px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(50px);
}

.job-card.visible {
    opacity: 1;
    transform: translateY(0);
}

.job-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--gradient-primary);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
}

.job-card:hover::before {
    transform: scaleX(1);
}

.job-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px var(--shadow-color);
}

.job-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
}

.job-icon {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
}

.job-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: var(--text-primary);
}

.job-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 20px;
}

.job-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.job-meta-item i {
    color: var(--accent-primary);
}

.job-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.job-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid var(--border-color);
}

.apply-btn {
    background: var(--gradient-primary);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    line-height: 16px;
}

.apply-btn:hover {
    color: #fff;
    transform: scale(1.05);
    box-shadow: 0 10px 25px var(--shadow-color);
}

.know-more-btn {
    background: transparent;
    color: var(--text-primary);
    border: 2px solid var(--accent-primary);
    padding: 10px 28px;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    line-height: 16px;
}

.know-more-btn:hover {
    background: var(--gradient-primary);
    color: white;
    border-color: transparent;
    transform: scale(1.05);
    box-shadow: 0 10px 25px var(--shadow-color);
    text-decoration: none;
}

/* Span Mother Hover Text Transitions */
    .button-text-wrapper {
        position: relative;
        display: inline-flex;
        overflow: hidden;
        height: 1.4em;
        align-items: center;
    }

    .span-mother {
        display: flex;
        position: relative;
    }

    .span-mother2 {
        display: flex;
        position: absolute;
        top: 0;
        left: 0;
    }

    .span-mother span {
        display: inline-block;
        transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .span-mother2 span {
        display: inline-block;
        transform: translateY(-1.4em);
        transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .cta-primary:hover .span-mother span,
    .cta-secondary:hover .span-mother span {
        transform: translateY(1.4em);
    }

    .cta-primary:hover .span-mother2 span,
    .cta-secondary:hover .span-mother2 span {
        transform: translateY(0);
    }

/* Job Details Modal Premium Styles */
.job-details-modal-content h4 {
    font-size: 1.2rem;
    font-weight: 700;
    margin: 25px 0 12px;
    color: var(--text-primary);
    border-left: 4px solid var(--accent-primary);
    padding-left: 12px;
}

.job-details-modal-content ul {
    list-style: none;
    padding: 0;
}

.job-details-modal-content li {
    padding: 8px 0;
    padding-left: 25px;
    position: relative;
    color: var(--text-secondary);
}

.job-details-modal-content li::before {
    content: '▸';
    position: absolute;
    left: 0;
    color: var(--accent-primary);
    font-size: 1.1rem;
}

.modal-header .close {
    color: var(--text-primary);
    opacity: 0.8;
    text-shadow: none;
    transition: all 0.3s ease;
    font-size: 2rem;
    padding: 20px;
    margin: -25px -30px -25px auto;
}

.modal-header .close:hover {
    color: var(--accent-primary) !important;
    opacity: 1 !important;
}

#jobDetailsModal .btn-secondary:hover {
    background: var(--border-color);
    color: var(--text-primary);
}

/* Custom scrollbar and max height inside the details modal */
#jobDetailsModal .modal-body::-webkit-scrollbar {
    width: 6px;
}

#jobDetailsModal .modal-body::-webkit-scrollbar-track {
    background: transparent;
}

#jobDetailsModal .modal-body::-webkit-scrollbar-thumb {
    background: var(--border-color);
    border-radius: 10px;
}

#jobDetailsModal .modal-body::-webkit-scrollbar-thumb:hover {
    background: var(--accent-primary);
}

#jobDetailsModal .modal-content {
    max-height: 85vh;
    display: flex;
    flex-direction: column;
}

#jobDetailsModal .modal-body {
    overflow-y: auto;
    flex: 1 1 auto;
}

/* Custom scrollbar and max height inside the apply modal */
#largeModal .modal-body::-webkit-scrollbar {
    width: 6px;
}

#largeModal .modal-body::-webkit-scrollbar-track {
    background: transparent;
}

#largeModal .modal-body::-webkit-scrollbar-thumb {
    background: var(--border-color);
    border-radius: 10px;
}

#largeModal .modal-body::-webkit-scrollbar-thumb:hover {
    background: var(--accent-primary);
}

#largeModal .modal-content {
    max-height: 85vh;
    display: flex;
    flex-direction: column;
}

#largeModal .modal-body {
    overflow-y: auto;
    flex: 1 1 auto;
}

#largeModal .btn-secondary:hover {
    background: var(--border-color);
    color: var(--text-primary);
}

.job-details {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease;
}

.job-card.expanded .job-details {
    max-height: 2000px;
}

.job-details-content {
    padding-top: 20px;
}

.job-details-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 20px 0 10px;
    color: var(--text-primary);
}

.job-details-content ul {
    list-style: none;
    padding: 0;
}

.job-details-content li {
    padding: 8px 0;
    padding-left: 25px;
    position: relative;
    color: var(--text-secondary);
}

.job-details-content li::before {
    content: '▸';
    position: absolute;
    left: 0;
    color: var(--accent-primary);
}

/* Modal Styles */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0.5) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

body.modal-open {
    overflow: hidden;
}

body.modal-open .career-page,
body.modal-open header {
    filter: blur(5px);
    -webkit-filter: blur(5px);
}

.modal-content {
    background: var(--bg-primary);
    border: 1px solid var(--card-border);
    border-radius: 20px;
}

.modal-header {
    border-bottom: 1px solid var(--border-color);
    padding: 25px 30px;
}

.modal-title {
    color: var(--text-primary);
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
}

.modal-body {
    padding: 30px;
}

.form-group label {
    color: var(--text-primary);
    font-weight: 600;
    margin-bottom: 8px;
}

.form-control {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    color: var(--text-primary);
    border-radius: 10px;
    padding: 12px 15px;
}

.form-control:disabled,
.form-control[readonly] {
    background: var(--bg-secondary);
    cursor: not-allowed;
}

/* Hide number input spinners */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type="number"] {
    -moz-appearance: textfield;
}

.btn-submit {
    background: var(--gradient-primary);
    color: white;
    border: none;
    padding: 12px 40px;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-submit:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px var(--shadow-color);
}

@media (max-width: 768px) {
    .career-hero {
        padding: 80px 20px 40px;
    }
    .career-jobs-section {
        padding: 30px 20px;
    }
    .career-hero h1 {
        font-size: 2.5rem;
    }
    
    .career-jobs-grid {
        grid-template-columns: 1fr;
    }
    
    .modal {
        z-index: 10000 !important;
    }
    .modal-title {
        font-size: 20px;
        line-height: 24px;
    }
    .modal-content {
        top: 50px;
    }
    .job-card {
        padding: 24px;
    }
    .job-card-header-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
    .job-card-header {
        margin-bottom: 0;
    }
    .job-icon {
        width: 48px;
        height: 48px;
        font-size: 20px;
    }
    .job-title {
        font-size: 20px;
        margin-bottom: 0;
    }
    .job-meta {
        margin-bottom: 15px;
    }
    .job-description {
        margin-bottom: 15px;
    }
    .job-card-footer {
        padding-top: 15px;
    }
}

/* Premium File Upload Box */
.upload-box {
    border: 2px dashed rgba(124, 58, 237, 0.4);
    background: rgba(124, 58, 237, 0.03);
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 5px;
}

[data-theme="light"] .upload-box {
    border: 2px dashed rgba(0, 102, 204, 0.3);
    background: rgba(0, 102, 204, 0.01);
}

.upload-box:hover {
    border-color: var(--accent-primary);
    background: rgba(124, 58, 237, 0.08);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

[data-theme="light"] .upload-box:hover {
    background: rgba(0, 102, 204, 0.05);
}

.upload-box.drag-over {
    border-color: #10B981;
    background: rgba(16, 185, 129, 0.08);
}

.upload-icon {
    font-size: 38px;
    color: var(--accent-primary);
    margin-bottom: 12px;
    transition: transform 0.3s ease;
}

.upload-box:hover .upload-icon {
    transform: translateY(-4px);
}

.upload-text {
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: var(--text-primary);
    display: block;
    margin-bottom: 4px;
}

.upload-subtext {
    font-family: 'Inter', sans-serif;
    font-size: 12px;
    color: var(--text-secondary);
    display: block;
}

/* File Preview Container */
.file-preview-container {
    margin-top: 15px;
    animation: fadeInSlide 0.4s ease;
}

@keyframes fadeInSlide {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.file-preview-card {
    display: flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 12px 16px;
    gap: 15px;
}

[data-theme="light"] .file-preview-card {
    background: rgba(0, 0, 0, 0.02);
}

.file-preview-icon {
    font-size: 26px;
    color: var(--accent-primary);
    display: flex;
    align-items: center;
    justify-content: center;
}

.file-preview-details {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    flex-grow: 1;
}

.file-preview-name {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: var(--text-primary);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.file-preview-size {
    font-family: 'Inter', sans-serif;
    font-size: 12px;
    color: var(--text-secondary);
}

.file-preview-remove {
    background: transparent;
    border: none;
    color: var(--text-secondary);
    cursor: pointer;
    font-size: 16px;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.2s, transform 0.2s;
}

.file-preview-remove:hover {
    color: #EF4444;
    transform: scale(1.1);
}

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

<div class="career-page">
    <!-- Hero Section -->
    <section class="career-hero">
        <div class="container">
            <h1>Join Our Team</h1>
            <p>Are you up to the challenge? Check out our career opportunities and become part of our innovative team!</p>
        </div>
    </section>

    <!-- Jobs Section -->
    <section class="career-jobs-section">
        <div class="container">
            <div class="career-jobs-grid">
                <!-- Shopify Developer Card -->
                <div class="job-card" data-job="shopify-developer">
                    <div class="job-card-header-wrapper">
                        <div class="job-card-header">
                            <div class="job-icon">
                                <i class="fa fa-shopping-bag"></i>
                            </div>
                        </div>
                        <h3 class="job-title">Shopify Developer</h3>
                    </div>
                    <div class="job-meta">
                        <div class="job-meta-item">
                            <i class="fa fa-briefcase"></i>
                            <span>Full Time</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fa fa-clock-o"></i>
                            <span>1-3+ Years</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fa fa-map-marker"></i>
                            <span>Surat</span>
                        </div>
                    </div>
                    <p class="job-description">
                        You will be responsible for developing/maintaining and innovating high octane portal using SHOPIFY. Also API integration for different Payment gateways, shipping methods like Fedex, USPS, UPS, social media, Google Map, Google Analytics, warehouse management, commission junction and other function specific APIs.
                    </p>
                    <div class="job-card-footer">
                        <a href="#" class="know-more-btn cta-secondary gtm-career-link" data-career-name="Shopify Developer - Know More" data-toggle="modal" data-target="#jobDetailsModal">
                            <span class="button-text-wrapper">Know More</span>
                        </a>
                        <a href="#" class="apply-btn cta-primary gtm-career-link" data-career-name="Shopify Developer - Apply" data-toggle="modal" data-target="#largeModal" data-position="Shopify Developer">
                            <span class="button-text-wrapper">Apply Now</span>
                        </a>
                    </div>
                    <div class="job-details">
                        <div class="job-details-content">
                            <h4>Skills Required:</h4>
                            <ul>
                                <li>Expert Knowledge of Shopify and all its features</li>
                                <li>Can write some Javascript code</li>
                                <li>Html5, CSS3, CSS Frameworks are a must</li>
                                <li>Advanced understanding of IT processes and Software Development Life Cycle</li>
                                <li>Ability to create advance layout using HTML and CSS</li>
                                <li>Very good knowledge of Liquid - Shopify's proprietary scripting language</li>
                                <li>Knowledge of Speed optimization, App Development</li>
                                <li>Knowledge of cross browser quirks</li>
                                <li>Understanding of various design patterns & Custom Shopify theme development</li>
                                <li>You Show understanding of design and usability principles</li>
                                <li>You have worked on customized themes and understand what a hamburger menu is</li>
                                <li>Should have done at least 10-20 or more Shopify projects on their own</li>
                                <li>Minimum work experience: 2 to 4 years</li>
                            </ul>
                            <h4>Responsibility:</h4>
                            <ul>
                                <li>Communication with leads (3-10 negotiations per week)</li>
                                <li>Preparing commercial proposals</li>
                                <li>Leading and coordinating relationships between stakeholders from Django Stars side and client's side during the sale cycle</li>
                                <li>Building long-term relationships with our clients</li>
                                <li>Lead qualification</li>
                                <li>Understand real customers' needs and readiness for cooperation</li>
                                <li>Work with existing leads database (reactivation)</li>
                                <li>Ability to mentor junior team members and conduct interviews with candidates would be a plus</li>
                            </ul>
                            <h4>What we will expect from you:</h4>
                            <ul>
                                <li>Must be able to work in a team</li>
                                <li>Must have good communication skills</li>
                                <li>Growth mindset</li>
                                <li>Quick learner</li>
                            </ul>
                            <h4>We offer:</h4>
                            <ul>
                                <li>In-house Multilingual speaker</li>
                                <li>Work appreciation activities</li>
                                <li>Internship and training accomplishment</li>
                                <li>Encouragement of projects and conferences</li>
                                <li>Professional working environment</li>
                                <li>Miscellaneous activities enforcement</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Front End Developer Card -->
                <div class="job-card" data-job="front-end-developer">
                    <div class="job-card-header-wrapper">
                        <div class="job-card-header">
                            <div class="job-icon">
                                <i class="fa fa-code"></i>
                            </div>
                        </div>
                        <h3 class="job-title">Front End Developer</h3>
                    </div>
                    <div class="job-meta">
                        <div class="job-meta-item">
                            <i class="fa fa-briefcase"></i>
                            <span>Full Time</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fa fa-clock-o"></i>
                            <span>1-3+ Years</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fa fa-map-marker"></i>
                            <span>Surat</span>
                        </div>
                    </div>
                    <p class="job-description">
                        We have always appreciated new talent and groomed. Join our team to create stunning user interfaces and exceptional web experiences.
                    </p>
                    <div class="job-card-footer">
                        <a href="#" class="know-more-btn cta-primary gtm-career-link" data-career-name="Front End Developer - Know More" data-toggle="modal" data-target="#jobDetailsModal">
                            <span class="button-text-wrapper">Know More</span>
                        </a>
                        <a href="#" class="apply-btn cta-secondary gtm-career-link" data-career-name="Front End Developer - Apply" data-toggle="modal" data-target="#largeModal" data-position="Front End Developer">
                            <span class="button-text-wrapper">Apply Now</span>
                        </a>
                    </div>
                    <div class="job-details">
                        <div class="job-details-content">
                            <h4>Required Skills:</h4>
                            <ul>
                                <li>Must be fluent at PSD to HTML</li>
                                <li>Must be familiar with pixel perfect adjustment</li>
                                <li>Knowledge of Bootstrap and responsive web design is highly desirable</li>
                                <li>Proficiency in Photoshop, Illustrator and Sketch(optional) and j Query and AJAX</li>
                                <li>Excellent visual design skills with sensitivity to user-system interaction</li>
                                <li>Up-to-date with the latest UI trends, techniques, and technologies</li>
                                <li>Must have working experience across multiple browsers and edit suites</li>
                                <li>Knowledge of Angular.js/React.js/Vue.js would be great and will be considered first</li>
                            </ul>
                            <h4>Roles and Responsibilities:</h4>
                            <ul>
                                <li>Create responsive HTML using HTML5/CSS3/Bootstrap/SCSS technologies</li>
                                <li>Create pixel perfect mockup to web output</li>
                                <li>Make sure HTML is fully compatible in cross browsers and devices</li>
                                <li>Understand project requirements clearly which will be given in English language</li>
                                <li>Coordinate with TL/PM regarding ongoing process and daily activity</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- PHP Developer Card -->
                <div class="job-card" data-job="php-developer">
                    <div class="job-card-header-wrapper">
                        <div class="job-card-header">
                            <div class="job-icon">
                                <i class="fa fa-server"></i>
                            </div>
                        </div>
                        <h3 class="job-title">PHP Developer</h3>
                    </div>
                    <div class="job-meta">
                        <div class="job-meta-item">
                            <i class="fa fa-briefcase"></i>
                            <span>Full Time</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fa fa-clock-o"></i>
                            <span>1-3+ Years</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fa fa-map-marker"></i>
                            <span>Surat</span>
                        </div>
                    </div>
                    <p class="job-description">
                        We have always appreciated new talent and groomed. Join our team to build robust backend solutions and powerful web applications.
                    </p>
                    <div class="job-card-footer">
                        <a href="#" class="know-more-btn cta-primary gtm-career-link" data-career-name="PHP Developer - Know More" data-toggle="modal" data-target="#jobDetailsModal">
                        <span class="button-text-wrapper">Know More</span>
                        </a>
                        <a href="#" class="apply-btn cta-secondary gtm-career-link" data-career-name="PHP Developer - Apply" data-toggle="modal" data-target="#largeModal" data-position="PHP Developer">
                            <span class="button-text-wrapper">Apply Now</span>
                        </a>
                    </div>
                    <div class="job-details">
                        <div class="job-details-content">
                            <h4>Required Skills:</h4>
                            <ul>
                                <li>Good knowledge of developing themes and plugin</li>
                                <li>Good knowledge of Framework and Apache2, MVC pattern</li>
                                <li>Good knowledge of Javascript, HTML5, CSS 3+, XML, DHTML</li>
                                <li>Thorough understanding of AJAX, jQuery and website frameworks</li>
                                <li>Very good knowledge of version control systems (SVN, GIT, TFS)</li>
                                <li>Good team player enjoying developing solutions with others</li>
                                <li>Experience with web and interface design</li>
                                <li>Must show some previous project and/or hacks</li>
                                <li>Passionate about quality and details</li>
                                <li>Hard-working and a fast learner</li>
                            </ul>
                            <h4>Roles and Responsibilities:</h4>
                            <ul>
                                <li>Developing and designing of applications</li>
                                <li>Developing project work related to Laravel, Wordpress and Codeigniter</li>
                                <li>Migration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Job Details Modal -->
<div class="modal fade" id="jobDetailsModal" tabindex="-1" role="dialog" aria-labelledby="jobDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="jobDetailsModalLabel">Job Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="job-meta d-flex flex-wrap gap-3 mb-4" style="gap: 20px; border-bottom: 1px solid var(--border-color); padding-bottom: 15px;"></div>
                <div class="job-details-modal-content"></div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid var(--border-color); padding: 20px 30px; display: flex; justify-content: flex-end; gap: 15px;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 30px; padding: 12px 30px; font-weight: 600; background: transparent; border: 1px solid var(--border-color); color: var(--text-secondary); transition: all 0.3s ease;">Close</button>
                <a href="#" id="career-modal-apply-btn" class="apply-btn modal-apply-btn cta-primary gtm-career-link" data-career-name="Modal Job - Apply">
                    <span class="button-text-wrapper">Apply Now</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">We're always looking to work with the best people.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="applyJobForm" class="row ttm-quote-form clearfix" method="post" action="career-mail" enctype="multipart/form-data">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="firstname" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="lastname" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input name="mobilenumber" type="number" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Position</label>
                            <input name="position" type="text" required="required" class="form-control" id="positionInput">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Location</label>
                            <input name="location" type="text" required="required" readonly="" value="Surat" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <label>Have a resume ready? Upload it now</label><br>
                        <!-- Hidden default file input -->
                        <input type="file" name="resumefile" id="file-upload" class="d-none" accept=".doc,.docx,.txt,.pdf,.rtf">
                        
                        <!-- Custom styled upload box -->
                        <div class="upload-box" id="upload-box">
                            <div class="upload-content">
                                <i class="fa fa-cloud-upload upload-icon"></i>
                                <span class="upload-text">Upload CV/Resume</span>
                                <span class="upload-subtext">or drag and drop here</span>
                            </div>
                        </div>

                        <!-- Uploaded file preview container -->
                        <div class="file-preview-container" id="file-preview-container" style="display: none;">
                            <div class="file-preview-card">
                                <div class="file-preview-icon">
                                    <i class="fa fa-file-pdf-o" id="preview-file-icon"></i>
                                </div>
                                <div class="file-preview-details">
                                    <span class="file-preview-name" id="preview-file-name">filename.pdf</span>
                                    <span class="file-preview-size" id="preview-file-size">1.2 MB</span>
                                </div>
                                <button type="button" class="file-preview-remove" id="btn-remove-file" title="Remove file">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        
                        <p class="light-gray" style="margin-top: 10px; font-size: 0.85rem;">Supported Formats: DOC, DOCX, TXT, PDF, RTF.</p>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Write About Your Self...</label>
                            <textarea name="aboutself" required="required" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="border-top: 1px solid var(--border-color); padding: 20px 30px; display: flex; justify-content: space-between; align-items: center; background: var(--card-bg); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                <div style="display: flex; gap: 15px;">
                    <button type="button" class="btn btn-secondary modal-back-btn" data-dismiss="modal" style="border-radius: 30px; padding: 12px 30px; font-weight: 600; background: transparent; border: 1px solid var(--border-color); color: var(--text-secondary); transition: all 0.3s ease;">Back</button>
                </div>
                <button type="submit" form="applyJobForm" name="submit" id="submit" class="btn-submit" value="submit" style="margin: 0;">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// Job Card Expand/Collapse
const jobCards = document.querySelectorAll('.job-card');

jobCards.forEach(card => {
    const header = card.querySelector('.job-card-header');
});

// Scroll Reveal Animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, index * 150);
        }
    });
}, observerOptions);

jobCards.forEach(card => {
    observer.observe(card);
});

// Set position in modal
const applyButtons = document.querySelectorAll('.apply-btn');
const positionInput = document.getElementById('positionInput');

applyButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const position = btn.getAttribute('data-position');
        positionInput.value = position;
    });
});

// Global flags to track modal state
let cameFromDetails = false;
let backButtonClicked = false;

// Know More Modal Population & Transition
const knowMoreButtons = document.querySelectorAll('.know-more-btn');

knowMoreButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const card = btn.closest('.job-card');
        const title = card.querySelector('.job-title').textContent.trim();
        const meta = card.querySelector('.job-meta').innerHTML;
        const details = card.querySelector('.job-details-content').innerHTML;
        
        // Populate modal
        document.getElementById('jobDetailsModalLabel').textContent = title;
        document.querySelector('#jobDetailsModal .job-meta').innerHTML = meta;
        document.querySelector('#jobDetailsModal .job-details-modal-content').innerHTML = details;
        
        // Set position for the dynamic modal apply button
        const modalApplyBtn = document.querySelector('#jobDetailsModal .modal-apply-btn');
        modalApplyBtn.setAttribute('data-position', title);
    });
});

// Smooth transition and origin tracking
window.addEventListener('load', () => {
    // Reset flags if clicked directly on card's Apply Now button
    $('.job-card-footer .apply-btn').on('click', function() {
        cameFromDetails = false;
        backButtonClicked = false;
    });

    // Handle back button clicked
    $('.modal-back-btn').on('click', function() {
        backButtonClicked = true;
    });

    // Reset backButtonClicked flag if Close button clicked
    $('.modal-close-btn').on('click', function() {
        backButtonClicked = false;
    });

    // Transition from details modal to apply modal
    $('.modal-apply-btn').on('click', function(e) {
        e.preventDefault();
        cameFromDetails = true;
        backButtonClicked = false;
        $('#jobDetailsModal').modal('hide');
        const position = $(this).attr('data-position');
        $('#positionInput').val(position);
        
        // Wait for details modal to hide, then show apply modal
        $('#jobDetailsModal').one('hidden.bs.modal', function() {
            $('#largeModal').modal('show');
        });
    });

    // When closing the apply modal, check if we should return to details modal
    $('#largeModal').on('hidden.bs.modal', function() {
        if (backButtonClicked) {
            backButtonClicked = false;
            if (cameFromDetails) {
                cameFromDetails = false;
                $('#jobDetailsModal').modal('show');
            }
        } else {
            // If closed via close button, backdrop, or escape, stay on career page (do NOT return to details)
            cameFromDetails = false;
        }
    });

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

    // Helper to format bytes
    function formatBytes(bytes, decimals = 2) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const dm = decimals < 0 ? 0 : decimals;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
    }

    // Helper to get file icon class
    function getFileIconClass(filename) {
        const ext = filename.split('.').pop().toLowerCase();
        switch (ext) {
            case 'pdf':
                return 'fa-file-pdf-o';
            case 'doc':
            case 'docx':
                return 'fa-file-word-o';
            case 'txt':
            case 'rtf':
                return 'fa-file-text-o';
            default:
                return 'fa-file-o';
        }
    }

    const fileInput = $('#file-upload');
    const uploadBox = $('#upload-box');
    const previewContainer = $('#file-preview-container');
    const previewIcon = $('#preview-file-icon');
    const previewName = $('#preview-file-name');
    const previewSize = $('#preview-file-size');
    const removeFileBtn = $('#btn-remove-file');

    // Click upload box to trigger file input click
    uploadBox.on('click', function() {
        fileInput.trigger('click');
    });

    // Handle file input changes
    fileInput.on('change', function() {
        handleFileSelect(this.files);
    });

    // Drag and drop handlers
    uploadBox.on('dragover dragenter', function(e) {
        e.preventDefault();
        e.stopPropagation();
        uploadBox.addClass('drag-over');
    });

    uploadBox.on('dragleave dragend drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        uploadBox.removeClass('drag-over');
    });

    uploadBox.on('drop', function(e) {
        const files = e.originalEvent.dataTransfer.files;
        if (files.length > 0) {
            fileInput[0].files = files;
            handleFileSelect(files);
        }
    });

    // Handle the selected file
    function handleFileSelect(files) {
        if (files.length === 0) return;

        const file = files[0];
        const allowedExtensions = /(\.doc|\.docx|\.txt|\.pdf|\.rtf)$/i;

        if (!allowedExtensions.exec(file.name)) {
            showToast('error', 'Invalid file format. Supported formats: DOC, DOCX, TXT, PDF, RTF.');
            clearFileSelection();
            return;
        }

        // Set details and display preview
        previewName.text(file.name);
        previewSize.text(formatBytes(file.size));
        
        // Dynamic file icon
        previewIcon.removeClass().addClass('fa ' + getFileIconClass(file.name));

        uploadBox.hide();
        previewContainer.fadeIn(300);
    }

    // Remove file handler
    removeFileBtn.on('click', function(e) {
        e.stopPropagation();
        clearFileSelection();
    });

    function clearFileSelection() {
        fileInput.val('');
        previewContainer.hide();
        uploadBox.fadeIn(300);
    }

    // AJAX Form Submit
    $('#applyJobForm').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const submitBtn = $('#submit');
        const originalBtnHtml = submitBtn.html();
        
        // Front-end File Validation
        const fileInputEl = $('#file-upload')[0];
        if (fileInputEl.files.length === 0) {
            showToast('error', 'Please upload your resume.');
            return;
        }

        const fileName = fileInputEl.files[0].name;
        const allowedExtensions = /(\.doc|\.docx|\.txt|\.pdf|\.rtf)$/i;
        if (!allowedExtensions.exec(fileName)) {
            showToast('error', 'Invalid file format. Supported formats: DOC, DOCX, TXT, PDF, RTF.');
            return;
        }

        // Show loading spinner state on the submit button
        submitBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Submitting...');

        const formData = new FormData(this);
        formData.append('submit', 'submit');
        formData.append('ajax', '1');

        $.ajax({
            url: form.attr('action') || 'career-mail',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    showToast('success', response.message);
                    form[0].reset();
                    clearFileSelection();
                    
                    // Close the modal after a short delay
                    setTimeout(() => {
                        $('#largeModal').modal('hide');
                    }, 2000);
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