<?php include 'header.php';?>

<style>
/* About Page Styles - Using Site Theme Variables */
.about-page {
    background: var(--bg-primary);
    background-image: var(--bg-image);
    background-attachment: fixed;
    color: var(--text-primary);
    transition: all 0.3s ease;
    min-height: 100vh;
}

.about-hero {
    padding: 120px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.about-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0, 242, 254, 0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

[data-theme="light"] .about-hero::before {
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

.about-hero h1 {
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

[data-theme="light"] .about-hero h1 {
    background: linear-gradient(120deg, #728948 0%, #374a16 35%, #5a6e34 50%, #374a16 65%, #728948 100%);
    background-size: 200% auto;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: none;
}

.about-hero p {
    font-size: 18px;
    line-height: 22px;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.about-section {
    padding: 80px 0;
}

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.about-text h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 25px;
    color: var(--text-primary);
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    transition-delay: var(--sr-delay, 0s);
}

.about-text h2.sr-visible {
    opacity: 1;
    transform: translateY(0);
}

.about-text p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
    font-size: 16px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    transition-delay: var(--sr-delay, 0s);
}

.about-text p.sr-visible {
    opacity: 1;
    transform: translateY(0);
}

@keyframes floatImage {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(0.8deg); }
    }

.about-image {
    position: relative;
    opacity: 0;
    transform: translateX(60px) scale(0.85) rotateY(-10deg);
    transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1);
    transition-delay: var(--sr-delay, 0s);
}

.about-image.visible,
.about-image.sr-visible {
    opacity: 1;
    transform: translateX(0) scale(1) rotateY(0deg);
}

.about-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    animation: floatImage 8s ease-in-out infinite;
}

.about-image:hover img {
    transform: scale(1.03) translateY(-5px);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 20px;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.section-header p {
    color: var(--text-secondary);
    font-size: 18px;
}

.testimonials-section {
    padding: 80px 0;
    background: var(--bg-secondary);
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.testimonial-card {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: 20px;
    padding: 20px 14px;
    position: relative;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.4s ease;
}

.testimonial-card.visible {
    opacity: 1;
    transform: translateY(0);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px var(--shadow-color);
}

.testimonial-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 20px;
    border: 3px solid var(--accent-primary);
}

.testimonial-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-quote {
    color: var(--text-secondary);
    line-height: 1.8;
    font-style: italic;
    margin-bottom: 25px;
    position: relative;
}

.testimonial-quote::before {
    content: '"';
    font-size: 4rem;
    color: var(--accent-primary);
    position: absolute;
    top: -30px;
    left: -10px;
    opacity: 0.3;
}

.testimonial-author {
    text-align: center;
}

.testimonial-author h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 5px;
}

.testimonial-author span {
    color: var(--text-tertiary);
    font-size: 0.95rem;
}

.testimonial-rating {
    color: #ffd700;
    margin-bottom: 15px;
}

.cta-section {
    padding: 80px 0;
    text-align: center;
}

.cta-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 60px;
    border-radius: 30px;
    position: relative;
    overflow: hidden;
}

[data-theme="dark"] .cta-content {
    background: linear-gradient(135deg, #06a8b0, #04a26d);
}

[data-theme="light"] .cta-content {
    background: var(--gradient-primary);
}

.cta-content::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    animation: rotate 15s linear infinite;
}

.cta-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.cta-content p {
    font-size: 16px;
    line-height: 20px;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 30px;
    position: relative;
    z-index: 1;
}

.cta-btn {
    background: white;
    color: var(--accent-primary);
    padding: 15px 40px;
    border-radius: 30px;
    font-weight: 700;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
    position: relative;
    z-index: 1;
}

.cta-btn:hover {
    color: var(--accent-primary) !important;
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
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

@media (max-width: 991px) {
    .about-content {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

@media (max-width: 768px) {
    .about-hero {
        padding: 80px 0 40px;
    }
    .about-hero h1 {
        font-size: 32px;
    }

    .about-hero p {
        font-size: 16px;
    }
    
    .about-section,
    .testimonials-section,
    .cta-section {
        padding: 40px 0;
    }

    .about-text h2,
    .section-header h2 {
        font-size: 32px;
    }

    .about-text p {
        font-size: 14px;
    }

    .section-header p {
        font-size: 16px;
    }

    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-content {
        padding: 40px 20px;
    }
    
    .cta-content h2 {
        font-size: 1.8rem;
    }
}
</style>

<div class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>About Us</h1>
            <p>We are a leading Shopify development company offering end-to-end solutions to help businesses thrive in the digital world.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h2 data-sr="fadeup">Empowering Your Digital Journey</h2>
                <p data-sr="fadeup" style="--sr-delay: 0.1s">Codelock Solutions is a leading Shopify development company offering end-to-end Shopify solutions all around the globe. We harness the power of E-commerce Shopify and emerging technologies to help our merchants adapt to the digital world and make them successful.</p>
                <p data-sr="fadeup" style="--sr-delay: 0.2s">Web designing is not just a profession for us, it's a passion. We believe that the smart design of any website is the first impression on visitors. And the smart design of any website is the starting point of a successful digital presence.</p>
                <p data-sr="fadeup" style="--sr-delay: 0.3s">We have a special team for website design who has been involved in designing professional websites of all categories. High-tech industries play an important role in the modern economy, and digital solutions have transformed the world for web applications.</p>
            </div>
            <div class="about-image" data-sr="fadeup" style="--sr-delay: 0.4s">
                <img src="images/about-us.png" alt="About Codelock Solutions" />
            </div>
        </div>
    </section>

    <?php include 'what-we-do.php';?>
    <?php include 'trust-section.php';?>


    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="section-header">
            <h2>What Our Clients Say</h2>
            <p>Trusted by businesses worldwide for our expertise and dedication</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="images/testimonial/boy.jpg" alt="Veerbhdrasinh Chauhan" />
                </div>
                <div class="testimonial-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p class="testimonial-quote">Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills required.</p>
                <div class="testimonial-author">
                    <h4>Veerbhdrasinh Chauhan</h4>
                    <span>Web Developer</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="images/testimonial/boy.jpg" alt="Tushar Rathod" />
                </div>
                <div class="testimonial-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p class="testimonial-quote">We provide fantastic collaborative working environment for our employees and good services and values for our satisfied customers.</p>
                <div class="testimonial-author">
                    <h4>Tushar Rathod</h4>
                    <span>Co-founder</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-avatar">
                    <img src="images/testimonial/girl.jpg" alt="Drashti Sankla" />
                </div>
                <div class="testimonial-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p class="testimonial-quote">Great Web Designing company in Surat, friendly support, quality work. Also, great for job seekers, freshers to give boost to their career in IT field.</p>
                <div class="testimonial-author">
                    <h4>Drashti Sankla</h4>
                    <span>Web Designer</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Project?</h2>
                <p>Let's work together to bring your vision to life. Contact us today to discuss your requirements.</p>
                <a href="contact.php" class="cta-btn cta-primary">
                    <span class="button-text-wrapper">Get In Touch</span>
                </a>
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

// Scroll Reveal Animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            entry.target.classList.add('sr-visible');
        }
    });
}, observerOptions);

// Observe all animated elements
document.querySelectorAll('.about-image, .testimonial-card, [data-sr]').forEach(el => {
    observer.observe(el);
});
</script>

<?php include 'footer.php';?>