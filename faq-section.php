<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <span class="faq-subheading ">FAQ</span>
            <h2 class="faq-headline">Frequently Asked Questions</h2>
            <p class="faq-description">Find answers to common questions about our services and process.</p>
        </div>
        
        <div class="faq-grid">
            <div class="faq-column">
                <div class="faq-item">
                    <button class="faq-question">
                        <span class="question-text">What services do you offer?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>We offer a comprehensive range of IT services including Shopify app development, website development, e-commerce solutions, mobile app development, and digital marketing services. Our team specializes in creating custom solutions tailored to your business needs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="question-text">How long does a typical project take?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Project timelines vary depending on complexity and scope. A simple website typically takes 2-4 weeks, while complex e-commerce platforms or custom applications may take 8-12 weeks. We provide detailed timelines during our initial consultation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="question-text">What is your pricing structure?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>We offer flexible pricing models including fixed-price projects, hourly rates, and retainer agreements. After understanding your requirements, we provide transparent quotes with no hidden costs. Contact us for a custom quote based on your specific needs.</p>
                    </div>
                </div>
            </div>

            <div class="faq-column">
                <div class="faq-item">
                    <button class="faq-question">
                        <span class="question-text">Do you provide ongoing support and maintenance?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive support and maintenance packages to ensure your digital assets remain secure, up-to-date, and performing optimally. Our support team is available to address any issues and implement updates as needed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="question-text">Can you help with existing projects?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely! We can take over existing projects, provide improvements, fix issues, or help you scale your current solution. Our team is experienced in working with various technologies and can seamlessly integrate with your existing systems.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="question-text">How do I get started?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Getting started is easy! Simply contact us through our website, email, or phone. We'll schedule a consultation to understand your requirements, discuss your goals, and provide a tailored proposal. Once you're ready, we'll begin the development process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .faq-section {
        padding: 80px 0;
        background: var(--bg-primary);
        position: relative;
        overflow: hidden;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .faq-subheading  {
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

    .faq-subheading.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .faq-headline {
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

    .faq-headline.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .faq-description {
        font-size: 16px;
        color: var(--text-secondary);
        margin: 0;
        line-height: 1.7;
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.7s ease 0.2s, transform 0.7s ease 0.2s;
    }

    .faq-description.anim-in {
        opacity: 1;
        transform: translateY(0);
    }

    .faq-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .faq-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .faq-item {
        background: var(--card-bg);
        border: 1px solid var(--card-border);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.4s ease;
        box-shadow: 0 0 15px var(--shadow-color);
        backdrop-filter: blur(10px);
        animation: itemReveal 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards, itemPulse 4s ease-in-out infinite;
        animation-delay: var(--item-delay, 0s), var(--pulse-delay, 0s);
        opacity: 0;
        transform: translateY(-50px) rotateX(20deg);
    }

    .faq-item:nth-child(1) { --item-delay: 0.1s; --pulse-delay: 0s; }
    .faq-item:nth-child(2) { --item-delay: 0.2s; --pulse-delay: 0.5s; }
    .faq-item:nth-child(3) { --item-delay: 0.3s; --pulse-delay: 1s; }
    .faq-column:nth-child(2) .faq-item:nth-child(1) { --item-delay: 0.4s; --pulse-delay: 1.5s; }
    .faq-column:nth-child(2) .faq-item:nth-child(2) { --item-delay: 0.5s; --pulse-delay: 2s; }
    .faq-column:nth-child(2) .faq-item:nth-child(3) { --item-delay: 0.6s; --pulse-delay: 2.5s; }

    @keyframes itemReveal {
        to {
            opacity: 1;
            transform: translateY(0) rotateX(0deg);
        }
    }

    @keyframes itemPulse {
        0%, 100% { box-shadow: 0 0 15px var(--shadow-color); }
        50% { box-shadow: 0 0 15px var(--shadow-color), 0 0 20px rgba(var(--accent-primary), 0.2); }
    }

    .faq-item:hover {
        border-color: var(--accent-primary);
        box-shadow: 0 20px 40px var(--shadow-color), 0 0 30px rgba(var(--accent-primary), 0.3);
        transform: translateY(-5px);
    }

    .faq-question {
        width: 100%;
        padding: 25px;
        background: none;
        border: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        text-align: left;
        height: 80px;
    }
    .faq-question:focus {
        outline: none;
    }

    .question-text {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
        flex: 1;
    }

    .faq-icon {
        width: 30px;
        height: 30px;
        background: var(--gradient-secondary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        font-weight: 700;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }

    .faq-item.active .faq-icon {
        transform: rotate(45deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.4s ease;
    }

    .faq-answer p {
        padding: 0 25px 25px;
        margin: 0;
        font-size: 16px;
        line-height: 1.7;
        color: var(--text-secondary);
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
    }

    @media (max-width: 991px) {
        .faq-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {
        .faq-headline {
            font-size: 32px;
        }

        .question-text {
            font-size: 16px;
        }
        .faq-section {
            padding: 40px 0;
        }
    }
    </style>

    <script>
    (function() {
        'use strict';

        function initHeaderReveal(section) {
            var els = section.querySelectorAll('.faq-subheading, .faq-headline, .faq-description');
            if (!els.length) return;

            if (!('IntersectionObserver' in window)) {
                els.forEach(function (el) { el.classList.add('anim-in'); });
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
        }

        function initFAQAccordion(section) {
            var questions = section.querySelectorAll('.faq-question');
            if (!questions.length) return;

            questions.forEach(function(question) {
                question.addEventListener('click', function() {
                    var item = this.parentElement;
                    var answer = item.querySelector('.faq-answer');
                    var isActive = item.classList.contains('active');
                    
                    // Close all items with smooth animation
                    section.querySelectorAll('.faq-item').forEach(function(faqItem) {
                        if (faqItem !== item) {
                            faqItem.classList.remove('active');
                            var otherAnswer = faqItem.querySelector('.faq-answer');
                            otherAnswer.style.maxHeight = null;
                        }
                    });

                    // Toggle clicked item with smooth animation
                    if (!isActive) {
                        item.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    } else {
                        item.classList.remove('active');
                        answer.style.maxHeight = null;
                    }
                });
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var section = document.querySelector('.faq-section');
            if (section) {
                initHeaderReveal(section);
                initFAQAccordion(section);
            }
        });
    })();
    </script>
</section>
