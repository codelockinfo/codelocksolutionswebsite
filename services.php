<?php include 'header.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<style>
/* ==========================================================================
   Antigravity Premium Services Page Stylesheet
   ========================================================================== */

/* Global Container Theme Background */
.site-main {
    background: var(--bg-primary) !important;
    color: var(--text-primary);
    transition: background 0.3s ease, color 0.3s ease;
}

/* Hero Section */
.services-hero {
    padding: 120px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

[data-theme="dark"] .services-hero {
    background: radial-gradient(circle at top right, rgba(0, 242, 254, 0.08), transparent 45%),
                radial-gradient(circle at bottom left, rgba(255, 0, 127, 0.06), transparent 45%);
}

[data-theme="light"] .services-hero {
    background: radial-gradient(circle at top right, rgb(114 137 72 / 7%) 0%, transparent 45%),            
                radial-gradient(circle at bottom left, rgb(207 255 121 / 13%) 0%, transparent 45%);
}

.services-hero h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 24px;
    background: linear-gradient(135deg, var(--text-primary), var(--accent-primary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -1.5px;
    line-height: 1.2;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.services-hero h1.anim-in {
    opacity: 1;
    transform: translateY(0);
}

.services-hero p {
    color: var(--text-secondary);
    font-size: 18px;
    max-width: 700px;-
    margin: 0 auto 35px;
    line-height: 1.6;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease 0.2s, transform 0.8s ease 0.2s;
}

.services-hero p.anim-in {
    opacity: 1;
    transform: translateY(0);
}

/* Service Card Grid */
.service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 30px;
    padding: 60px 0 90px;
}

.service-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 24px;
    padding: 45px 35px;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    z-index: 1;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 242, 254, 0.04), rgba(255, 0, 127, 0.04));
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: -1;
}

.service-card:hover {
    transform: translateY(-10px);
    border-color: var(--accent-primary);
    box-shadow: 0 20px 40px rgba(0, 242, 254, 0.15), 0 0 30px rgba(255, 0, 127, 0.04);
}

.service-card:hover::before {
    opacity: 1;
}

.service-icon-box {
    width: 70px;
    height: 70px;
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.02);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    border: 1px solid var(--border-color);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.service-card:hover .service-icon-box {
    background: var(--gradient-secondary);
    border-color: transparent;
    transform: scale(1.1) rotate(6deg);
    box-shadow: 0 10px 20px rgba(255, 0, 127, 0.2);
}

.service-icon-box svg {
    width: 32px;
    height: 32px;
    fill: none;
    stroke: var(--accent-primary);
    stroke-width: 1.8;
    transition: all 0.4s ease;
}

.service-card:hover .service-icon-box svg {
    stroke: #ffffff;
}

.service-card h3 {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: var(--text-primary);
    transition: color 0.3s ease;
}

.service-card:hover h3 {
    color: var(--accent-primary);
}

.service-card p {
    color: var(--text-secondary);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 30px;
    flex-grow: 1;
}

.service-link {
    display: inline-flex;
    align-items: center;
    color: var(--text-primary);
    font-weight: 600;
    text-decoration: none;
    font-size: 16px;
    gap: 8px;
    transition: all 0.3s ease;
    margin-top: auto;
}

.service-link svg {
    width: 18px;
    height: 18px;
    stroke: currentColor;
    stroke-width: 2.2;
    fill: none;
    transition: transform 0.3s ease;
}

.service-card:hover .service-link {
    color: var(--accent-primary);
}

.service-card:hover .service-link svg {
    transform: translateX(6px);
}

/* Chronological Timeline */
.process-section {
    padding: 80px 0;
    position: relative;
}

.process-section h2 {
    font-size: 2.8rem;
    font-weight: 800;
    text-align: center;
    margin-bottom: 15px;
    color: var(--text-primary);
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.process-section h2.anim-in {
    opacity: 1;
    transform: translateY(0);
}

.process-section p.subtitle {
    text-align: center;
    color: var(--text-secondary);
    font-size: 1.15rem;
    max-width: 600px;
    margin: 0 auto 60px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease 0.15s, transform 0.8s ease 0.15s;
}

.process-section p.subtitle.anim-in {
    opacity: 1;
    transform: translateY(0);
}

.process-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    position: relative;
}

.process-grid::before {
    content: '';
    position: absolute;
    top: 55px;
    left: 12%;
    right: 12%;
    height: 2px;
    background: linear-gradient(90deg, var(--accent-primary) 0%, var(--accent-secondary) 100%);
    z-index: 0;
    opacity: 0.25;
}

.process-step {
    background: var(--bg-primary);
    padding: 40px 25px;
    border-radius: 24px;
    border: 1px solid var(--border-color);
    text-align: center;
    position: relative;
    z-index: 1;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    opacity: 0;
    transform: translateY(40px) scale(0.9);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.process-step.anim-in {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.process-step:nth-child(1) { transition-delay: 0.1s; }
.process-step:nth-child(2) { transition-delay: 0.2s; }
.process-step:nth-child(3) { transition-delay: 0.3s; }
.process-step:nth-child(4) { transition-delay: 0.4s; }

.process-step:hover {
    border-color: var(--accent-secondary);
    transform: translateY(-8px);
    box-shadow: 0 5px 20px var(--shadow-color);
}

.process-num {
    width: 50px;
    height: 50px;
    background: var(--gradient-secondary);
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.2rem;
    margin: 0 auto 25px;
    box-shadow: 0 8px 16px var(--shadow-color);
}

.process-step h5 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 12px;
    color: var(--text-primary);
}

.process-step p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

/* Accordion FAQs */
.faq-section {
    padding: 80px 0;
    background: var(--bg-secondary);
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
}

.faq-section h2 {
    font-size: 2.8rem;
    font-weight: 800;
    text-align: center;
    margin-bottom: 15px;
    color: var(--text-primary);
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.faq-section h2.anim-in {
    opacity: 1;
    transform: translateX(0);
}

.faq-section p.subtitle {
    text-align: center;
    color: var(--text-secondary);
    font-size: 1.15rem;
    max-width: 600px;
    margin: 0 auto 50px;
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.8s ease 0.15s, transform 0.8s ease 0.15s;
}

.faq-section p.subtitle.anim-in {
    opacity: 1;
    transform: translateX(0);
}

.faq-container {
    max-width: 850px;
    margin: 0 auto;
}

.faq-item {
    background: rgba(255, 255, 255, 0.01);
    border: 1px solid var(--border-color);
    border-radius: 16px;
    margin-bottom: 18px;
    padding: 24px 30px;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.faq-item.anim-in {
    opacity: 1;
    transform: translateX(0);
}

.faq-item:nth-child(1) { transition-delay: 0.1s; }
.faq-item:nth-child(2) { transition-delay: 0.2s; }
.faq-item:nth-child(3) { transition-delay: 0.3s; }
.faq-item:nth-child(4) { transition-delay: 0.4s; }
.faq-item:nth-child(5) { transition-delay: 0.5s; }
.faq-item:nth-child(6) { transition-delay: 0.6s; }

.faq-item:hover {
    border-color: var(--accent-primary);
    background: rgba(255, 255, 255, 0.02);
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-primary);
    user-select: none;
}

.faq-question:hover {
    color: var(--accent-primary);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s cubic-bezier(0, 1, 0, 1), padding 0.3s ease;
    color: var(--text-secondary);
    font-size: 1.05rem;
    line-height: 1.6;
    padding-top: 0;
}
[data-theme="dark"] .faq-item.active {
    border-color: var(--accent-primary);
    background: rgba(0, 242, 254, 0.02);
}

[data-theme="light"] .faq-item.active {
    border-color: var(--accent-primary);
    background: rgb(114 137 72 / 7%);
}


.faq-item.active .faq-answer {
    max-height: 500px;
    padding-top: 18px;
    transition: max-height 0.3s cubic-bezier(0.95, 0.05, 0.795, 0.035), padding 0.3s ease;
}

.faq-icon-box {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-primary);
    transition: all 0.3s ease;
}

.faq-icon-box svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    stroke-width: 2.5;
    fill: none;
    transition: transform 0.3s ease;
}

[data-theme="dark"] .faq-item.active .faq-icon-box {
    background: var(--gradient-secondary);
    color: #ffffff;
    box-shadow: 0 5px 10px rgba(255, 0, 127, 0.2);
}

[data-theme="light"] .faq-item.active .faq-icon-box {
    background: var(--gradient-secondary);
    color: #ffffff;
    box-shadow: 0 5px 10px rgb(40 167 69 / 33%);
}

.faq-item.active .faq-icon-box svg {
    transform: rotate(45deg);
}

/* Call to Action */
.cta-banner {
    text-align: center;
    position: relative;
    overflow: hidden;
    padding: 80px 0;
}

.banner-container {
    border: 1px solid var(--border-color);
    border-radius: 32px;
    padding: 60px 40px;
}

[data-theme="dark"] .banner-container{
    background: linear-gradient(135deg, rgba(7, 5, 20, 0.96), rgba(10, 8, 24, 0.96)), var(--bg-image);
}

[data-theme="light"] .banner-container{
    background: var(--bg-primary);
}

.cta-content {
    position: relative;
    z-index: 1;
}

.cta-banner h2 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 20px;
    background: linear-gradient(135deg, var(--text-primary), var(--accent-primary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -1px;
    line-height: 60px;
    opacity: 0;
    transform: scale(0.8) rotate(-5deg);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.cta-banner h2.anim-in {
    opacity: 1;
    transform: scale(1) rotate(0deg);
}

.cta-banner p {
    color: var(--text-primary);
    font-size: 18px;
    max-width: 650px;
    margin: 0 auto 40px;
    line-height: 1.6;
    opacity: 0;
    transform: scale(0.8) rotate(5deg);
    transition: opacity 0.8s ease 0.15s, transform 0.8s ease 0.15s;
}

.cta-banner p.anim-in {
    opacity: 1;
    transform: scale(1) rotate(0deg);
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-btn-primary {
    background: var(--gradient-secondary);
    color: #ffffff !important;
    padding: 16px 36px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    border: none;
    cursor: pointer;
    font-size: 1.05rem;
}

.cta-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px var(--shadow-color);
}

.cta-btn-secondary {
    background: rgba(255, 255, 255, 0.04);
    color: var(--text-primary) !important;
    padding: 16px 36px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
    font-size: 1.05rem;
}

.cta-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.08);
    transform: translateY(-3px);
    border-color: var(--border-color);
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

/* Responsive Fixes */
@media (max-width: 1024px) {
    .process-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .process-grid::before {
        display: none; /* Hide horizontal connector on tablet */
    }
}

@media (max-width: 768px) {
    .services-hero {
        padding: 60px 0 40px;
    }
    .services-showcase-section,
    .process-section,
    .faq-section,
    .cta-banner {
        padding: 40px 0;
    }
    .services-hero h1 {
        font-size: 30px;
    }
    .services-hero p {
        font-size: 16px;
    }

    .process-section h2,
    .faq-section h2 {
        font-size: 28px;
    }
    .process-section p.subtitle,
    .faq-section p.subtitle {
        font-size: 16px;
    }

    .faq-question {
        font-size: 16px;
    }

    .faq-answer {
        font-size: 14px;
    }
    
    .process-grid {
        grid-template-columns: 1fr;
    }

    .banner-container {
        padding: 40px 20px;
    }
    
    .cta-banner h2 {
        font-size: 28px;
        line-height: 36px;
    }

    .cta-banner p {
        font-size: 16px;
    }

    .cta-btn-primary, 
    .cta-btn-secondary {
        font-size: 14px;
        padding: 14px 30px;
    }
    
    .faq-item {
        padding: 16px;
    }
}

/* ==========================================================================
   Services Showcase Section Styles
   ========================================================================== */
.services-showcase-section {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-secondary);
    overflow: hidden;
}

.cards-container {
    position: relative;
    width: 90%;
    max-width: 1200px;
    height: 600px;
}

.showcase-row {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    gap: 60px;
    background: var(--bg-primary);
    border: 1px solid var(--border-color);
    border-radius: 32px;
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0,0,0,0.15);
    will-change: transform, opacity, filter;
}

.showcase-row:nth-child(1) { z-index: 1; }
.showcase-row:nth-child(2) { z-index: 2; }
.showcase-row:nth-child(3) { z-index: 3; }
.showcase-row:nth-child(4) { z-index: 4; }
.showcase-row:nth-child(5) { z-index: 5; }
.showcase-row:nth-child(6) { z-index: 6; }

.showcase-row:nth-child(even) {
    flex-direction: row-reverse;
}

.showcase-visual-col,
.showcase-content-col {
    flex: 1;
    width: 50%;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.showcase-content-col {
    padding: 40px 60px;
}

.visual-wrapper {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 480px;
}

/* Device Mockups Base */
.mockup-phone {
    width: 230px;
    height: 460px;
    background: #0f0f1b;
    border: 10px solid #1a1a2e;
    border-radius: 36px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    border-color: rgba(255, 255, 255, 0.1);
    transition: border-color 0.3s, background 0.3s;
}
[data-theme="light"] .mockup-phone {
    background: #ffffff;
    border-color: #1e293b;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
}
.mockup-phone::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 110px;
    height: 18px;
    background: #1a1a2e;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    z-index: 10;
}
[data-theme="light"] .mockup-phone::before {
    background: #1e293b;
}

.mockup-browser {
    width: 380px;
    height: 270px;
    background: #0d0c18;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: background 0.3s, border-color 0.3s;
}
[data-theme="light"] .mockup-browser {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.08);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
}

.mockup-tablet {
    width: 320px;
    height: 380px;
    background: #0c0b16;
    border: 12px solid #1a1a2e;
    border-radius: 28px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    border-color: rgba(255, 255, 255, 0.1);
    transition: border-color 0.3s, background 0.3s;
}
[data-theme="light"] .mockup-tablet {
    background: #ffffff;
    border-color: #1e293b;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
}

.mockup-canvas {
    width: 320px;
    height: 320px;
    background: #0e0d1d;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    transition: background 0.3s, border-color 0.3s;
}
[data-theme="light"] .mockup-canvas {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.08);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
}

.mockup-graph-card {
    width: 340px;
    height: 280px;
    background: #0b0a18;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    transition: background 0.3s, border-color 0.3s;
}
[data-theme="light"] .mockup-graph-card {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.08);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
}

/* Floating Widgets System */
.floating-widget {
    position: absolute;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.6s ease;
    z-index: 10;
}
.floating-widget-inner {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background: rgba(20, 18, 38, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
    transition: background 0.3s, border-color 0.3s, box-shadow 0.3s;
}
[data-theme="light"] .floating-widget-inner {
    background: rgba(255, 255, 255, 0.9);
    border-color: rgba(0, 0, 0, 0.06);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}
.floating-widget-inner svg {
    width: 18px;
    height: 18px;
    stroke: var(--accent-primary);
    stroke-width: 2.2;
    fill: none;
    flex-shrink: 0;
}
.floating-widget-inner span {
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    color: var(--text-primary);
    white-space: nowrap;
}

/* Individual Floating animations (separated to allow non-synchronous cycle) */
.fw-anim-1 { animation: float-y-1 6s ease-in-out infinite; }
.fw-anim-2 { animation: float-y-2 7s ease-in-out infinite; }
.fw-anim-3 { animation: float-y-3 5.5s ease-in-out infinite; }
.fw-anim-4 { animation: float-y-1 6.5s ease-in-out infinite; }
.fw-anim-5 { animation: float-y-2 5.8s ease-in-out infinite; }

@keyframes float-y-1 {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-12px) rotate(2deg); }
}
@keyframes float-y-2 {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-16px) rotate(-3deg); }
}
@keyframes float-y-3 {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-9px) rotate(1.5deg); }
}

/* Positions of floating widgets - Row 1 (Shopify Apps) */
.row-shopify-apps .fw-1 { top: 18%; left: 8%; }
.row-shopify-apps .fw-2 { top: 40%; left: 4%; }
.row-shopify-apps .fw-3 { bottom: 20%; left: 6%; }
.row-shopify-apps .fw-4 { top: 25%; right: 6%; }
.row-shopify-apps .fw-5 { bottom: 28%; right: 8%; }

.row-shopify-apps:hover .fw-1 { transform: translate(-15px, -15px) scale(1.05); }
.row-shopify-apps:hover .fw-2 { transform: translate(-20px, 0px) scale(1.05); }
.row-shopify-apps:hover .fw-3 { transform: translate(-15px, 15px) scale(1.05); }
.row-shopify-apps:hover .fw-4 { transform: translate(15px, -10px) scale(1.05); }
.row-shopify-apps:hover .fw-5 { transform: translate(20px, 10px) scale(1.05); }

/* Positions of floating widgets - Row 2 (Website Development) */
.row-web-dev .fw-1 { top: 12%; left: 10%; }
.row-web-dev .fw-2 { bottom: 15%; left: 12%; }
.row-web-dev .fw-3 { top: 15%; right: 12%; }
.row-web-dev .fw-4 { bottom: 18%; right: 10%; }

.row-web-dev:hover .fw-1 { transform: translate(-12px, -15px) scale(1.05); }
.row-web-dev:hover .fw-2 { transform: translate(-15px, 12px) scale(1.05); }
.row-web-dev:hover .fw-3 { transform: translate(15px, -12px) scale(1.05); }
.row-web-dev:hover .fw-4 { transform: translate(12px, 15px) scale(1.05); }

/* Positions of floating widgets - Row 3 (E-commerce Solutions) */
.row-ecom .fw-1 { top: 15%; left: 10%; }
.row-ecom .fw-2 { top: 46%; left: 6%; }
.row-ecom .fw-3 { bottom: 15%; left: 12%; }
.row-ecom .fw-4 { top: 22%; right: 8%; }
.row-ecom .fw-5 { bottom: 25%; right: 10%; }

.row-ecom:hover .fw-1 { transform: translate(-15px, -15px) scale(1.05); }
.row-ecom:hover .fw-2 { transform: translate(-20px, 0px) scale(1.05); }
.row-ecom:hover .fw-3 { transform: translate(-15px, 15px) scale(1.05); }
.row-ecom:hover .fw-4 { transform: translate(15px, -10px) scale(1.05); }
.row-ecom:hover .fw-5 { transform: translate(20px, 10px) scale(1.05); }

/* Positions of floating widgets - Row 4 (Android Development) */
.row-android .fw-1 { top: 18%; left: 8%; }
.row-android .fw-2 { bottom: 22%; left: 6%; }
.row-android .fw-3 { top: 25%; right: 6%; }
.row-android .fw-4 { bottom: 30%; right: 8%; }

.row-android:hover .fw-1 { transform: translate(-15px, -12px) scale(1.05); }
.row-android:hover .fw-2 { transform: translate(-15px, 15px) scale(1.05); }
.row-android:hover .fw-3 { transform: translate(15px, -10px) scale(1.05); }
.row-android:hover .fw-4 { transform: translate(15px, 15px) scale(1.05); }

/* Positions of floating widgets - Row 5 (Graphic Design) */
.row-graphic .fw-1 { top: 12%; left: 12%; }
.row-graphic .fw-2 { bottom: 15%; left: 10%; }
.row-graphic .fw-3 { top: 18%; right: 10%; }
.row-graphic .fw-4 { bottom: 20%; right: 12%; }

.row-graphic:hover .fw-1 { transform: translate(-12px, -15px) scale(1.05); }
.row-graphic:hover .fw-2 { transform: translate(-12px, 15px) scale(1.05); }
.row-graphic:hover .fw-3 { transform: translate(15px, -12px) scale(1.05); }
.row-graphic:hover .fw-4 { transform: translate(15px, 12px) scale(1.05); }

/* Positions of floating widgets - Row 6 (Digital Marketing) */
.row-marketing .fw-1 { top: 15%; left: 12%; }
.row-marketing .fw-2 { bottom: 18%; left: 10%; }
.row-marketing .fw-3 { top: 18%; right: 12%; }
.row-marketing .fw-4 { bottom: 20%; right: 8%; }

.row-marketing:hover .fw-1 { transform: translate(-12px, -15px) scale(1.05); }
.row-marketing:hover .fw-2 { transform: translate(-12px, 15px) scale(1.05); }
.row-marketing:hover .fw-3 { transform: translate(15px, -12px) scale(1.05); }
.row-marketing:hover .fw-4 { transform: translate(15px, 15px) scale(1.05); }

/* Content Card Styles */
.showcase-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 24px;
    padding: 30px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    z-index: 2;
    overflow: hidden;
}
.showcase-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 242, 254, 0.02), rgba(255, 0, 127, 0.02));
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: -1;
}
.showcase-card:hover {
    transform: translateY(-5px);
    border-color: var(--accent-primary);
    box-shadow: 0 10px 30px var(--shadow-color);
}
.showcase-card:hover::before {
    opacity: 1;
}

.showcase-card h3 {
    font-size: 30px;
    font-weight: 800;
    margin-bottom: 15px;
    color: var(--text-primary);
    letter-spacing: -0.5px;
}
.showcase-card p {
    font-size: 16px;
    line-height: 1.6;
    color: var(--text-secondary);
    margin-bottom: 15px;
}

.showcase-checklist {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}
.showcase-checklist li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 16px;
    color: var(--text-secondary);
    margin-bottom: 10px;
}
.showcase-checklist li:last-child {
    margin-bottom: 0;
}

.chk-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: rgba(16, 185, 129, 0.1);
    color: #10b981;
    flex-shrink: 0;
}
[data-theme="light"] .chk-icon {
    background: rgba(114, 137, 72, 0.15);
    color: #728948;
}
.chk-icon svg {
    width: 12px;
    height: 12px;
    stroke: currentColor;
    stroke-width: 3.5;
    fill: none;
}

/* Mockup Screens Design Styling */

/* Phone Screen Store Styling */
.phone-screen {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    background: #070514;
    padding-top: 15px; /* offset notch */
    transition: background 0.3s;
}
[data-theme="light"] .phone-screen {
    background: #f8fafc;
}
.phone-header {
    height: 40px;
    padding: 0 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
[data-theme="light"] .phone-header {
    border-bottom-color: rgba(0, 0, 0, 0.05);
}
.phone-logo {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 0.75rem;
    font-weight: 800;
    color: var(--text-primary);
}
.phone-logo svg {
    width: 12px;
    height: 12px;
    stroke: currentColor;
    fill: none;
}
.phone-header-icons {
    display: flex;
    gap: 8px;
    color: var(--text-secondary);
}
.phone-header-icons svg {
    width: 12px;
    height: 12px;
    stroke: currentColor;
    fill: none;
}

.phone-banner {
    height: 120px;
    background: linear-gradient(135deg, #7c3aed, #db2777);
    padding: 16px;
    display: flex;
    align-items: flex-end;
    position: relative;
    overflow: hidden;
}
.phone-banner::after {
    content: '';
    position: absolute;
    top: -20px;
    right: -20px;
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}
.phone-banner-text h4 {
    margin: 0;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 800;
    margin-bottom: 6px;
}
.phone-banner-text span {
    font-size: 0.6rem;
    font-weight: 700;
    padding: 4px 8px;
    background: #fff;
    color: #000;
    border-radius: 4px;
}

.phone-products {
    flex: 1;
    padding: 16px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    overflow: hidden;
}
.phone-product-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    padding: 8px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}
[data-theme="light"] .phone-product-card {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.05);
}
.phone-product-card .p-img {
    height: 55px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.05);
}
[data-theme="light"] .phone-product-card .p-img {
    background: #f1f5f9;
}
.phone-product-card .p-img.p-img-1 {
    background: radial-gradient(circle, #b45309 60%, transparent 60%);
    background-size: 24px 24px;
    background-repeat: no-repeat;
    background-position: center;
}
.phone-product-card .p-img.p-img-2 {
    background: radial-gradient(circle, #78350f 60%, transparent 60%);
    background-size: 24px 24px;
    background-repeat: no-repeat;
    background-position: center;
}
.phone-product-card span {
    font-size: 0.65rem;
    font-weight: 700;
    color: var(--text-primary);
}

/* Browser Screen Web Dashboard Styling */
.browser-topbar {
    height: 34px;
    background: #141324;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    padding: 0 14px;
    display: flex;
    align-items: center;
    gap: 15px;
    flex-shrink: 0;
}
[data-theme="light"] .browser-topbar {
    background: #f1f5f9;
    border-bottom-color: rgba(0, 0, 0, 0.05);
}
.browser-dots {
    display: flex;
    gap: 6px;
}
.browser-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
}
.browser-dot.red { background: #ef4444; }
.browser-dot.yellow { background: #eab308; }
.browser-dot.green { background: #22c55e; }

.browser-address {
    flex: 1;
    height: 20px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 6px;
    font-size: 0.65rem;
    color: var(--text-tertiary);
    padding: 0 10px;
    display: flex;
    align-items: center;
}
[data-theme="light"] .browser-address {
    background: rgba(0, 0, 0, 0.04);
}

.browser-screen {
    flex: 1;
    display: flex;
    background: #080715;
    overflow: hidden;
}
[data-theme="light"] .browser-screen {
    background: #fafafc;
}
.browser-sidebar {
    width: 60px;
    background: rgba(255, 255, 255, 0.02);
    border-right: 1px solid rgba(255, 255, 255, 0.04);
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}
[data-theme="light"] .browser-sidebar {
    background: #ffffff;
    border-right-color: rgba(0, 0, 0, 0.04);
}
.sidebar-bar {
    height: 8px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 4px;
}
[data-theme="light"] .sidebar-bar {
    background: #e2e8f0;
}
.sidebar-bar.active {
    background: var(--accent-primary);
}

.browser-content {
    flex: 1;
    padding: 14px;
    display: flex;
    flex-direction: column;
    gap: 14px;
}
.browser-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
.browser-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}
[data-theme="light"] .browser-card {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.04);
}
.b-card-num {
    font-size: 0.9rem;
    font-weight: 800;
    color: var(--text-primary);
}
.b-card-label {
    height: 4px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 2px;
    width: 60%;
}
[data-theme="light"] .b-card-label {
    background: #e2e8f0;
}

.browser-chart-card {
    flex: 1;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    padding: 12px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
[data-theme="light"] .browser-chart-card {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.04);
}
.chart-top-bar {
    height: 6px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 3px;
    width: 40%;
}
[data-theme="light"] .chart-top-bar {
    background: #e2e8f0;
}
.chart-bars {
    display: flex;
    align-items: flex-end;
    gap: 8px;
    height: 60px;
}
.chart-bar {
    flex: 1;
    background: rgba(255, 255, 255, 0.08);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    height: 20%;
    transition: height 1s;
}
[data-theme="light"] .chart-bar {
    background: #e2e8f0;
}
.chart-bar.b-active {
    background: var(--accent-primary);
}
.showcase-row:hover .chart-bar-1 { height: 70%; }
.showcase-row:hover .chart-bar-2 { height: 90%; }
.showcase-row:hover .chart-bar-3 { height: 50%; }
.showcase-row:hover .chart-bar-4 { height: 80%; }
.showcase-row:hover .chart-bar-5 { height: 60%; }

/* Tablet Screen E-commerce Catalog Styling */
.tablet-screen {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    background: #090815;
    padding: 16px;
    gap: 16px;
    transition: background 0.3s;
}
[data-theme="light"] .tablet-screen {
    background: #fafafc;
}
.tablet-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    padding-bottom: 10px;
}
[data-theme="light"] .tablet-header {
    border-bottom-color: rgba(0, 0, 0, 0.05);
}
.tablet-logo {
    font-size: 0.85rem;
    font-weight: 800;
    color: var(--text-primary);
}
.tablet-nav {
    display: flex;
    gap: 8px;
}
.tablet-nav-item {
    width: 16px;
    height: 5px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 2px;
}
[data-theme="light"] .tablet-nav-item {
    background: #e2e8f0;
}

.tablet-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
.tablet-product-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    padding: 8px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}
[data-theme="light"] .tablet-product-card {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.04);
}
.t-prod-img {
    height: 70px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}
[data-theme="light"] .t-prod-img {
    background: #f1f5f9;
}
.t-prod-img.t-prod-1 {
    background: radial-gradient(circle, var(--accent-primary) 30%, transparent 35%);
    background-size: 30px 30px;
    background-repeat: no-repeat;
    background-position: center;
}
.t-prod-img.t-prod-2 {
    background: radial-gradient(circle, var(--accent-secondary) 30%, transparent 35%);
    background-size: 30px 30px;
    background-repeat: no-repeat;
    background-position: center;
}
.t-prod-img.t-prod-3 {
    background: radial-gradient(circle, #10b981 30%, transparent 35%);
    background-size: 30px 30px;
    background-repeat: no-repeat;
    background-position: center;
}
.t-prod-title {
    height: 5px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 2px;
    width: 80%;
}
[data-theme="light"] .t-prod-title {
    background: #e2e8f0;
}
.t-prod-price {
    height: 4px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 2px;
    width: 40%;
}
[data-theme="light"] .t-prod-price {
    background: #e2e8f0;
}

.tablet-banner {
    flex: 1;
    background: linear-gradient(135deg, rgba(0, 242, 254, 0.08), rgba(255, 0, 127, 0.08));
    border: 1px dashed rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-secondary);
    font-size: 0.75rem;
    font-weight: 700;
}
[data-theme="light"] .tablet-banner {
    background: rgba(114, 137, 72, 0.08);
    border-color: rgba(114, 137, 72, 0.15);
}

/* Phone Screen (Android) Dashboard Interface */
.phone-dashboard {
    flex: 1;
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.phone-dash-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.phone-dash-title {
    font-size: 0.85rem;
    font-weight: 800;
    color: var(--text-primary);
}
.phone-avatar {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--accent-primary);
}

.phone-dash-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 14px;
    padding: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
[data-theme="light"] .phone-dash-card {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.04);
}
.dash-card-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.dash-card-text {
    width: 60px;
    height: 6px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 3px;
}
[data-theme="light"] .dash-card-text {
    background: #e2e8f0;
}
.dash-card-toggle {
    width: 24px;
    height: 12px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 6px;
    position: relative;
    cursor: pointer;
}
[data-theme="light"] .dash-card-toggle {
    background: #e2e8f0;
}
.dash-card-toggle::after {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
    width: 8px;
    height: 8px;
    background: var(--text-tertiary);
    border-radius: 50%;
    transition: transform 0.3s;
}
.dash-card-toggle.t-active {
    background: var(--accent-primary);
}
.dash-card-toggle.t-active::after {
    transform: translateX(12px);
    background: #ffffff;
}

.phone-dash-stats {
    flex: 1;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 14px;
    padding: 12px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
[data-theme="light"] .phone-dash-stats {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.04);
}
.dash-stats-top {
    height: 6px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 3px;
    width: 40%;
}
[data-theme="light"] .dash-stats-top {
    background: #e2e8f0;
}
.dash-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    align-items: flex-end;
    gap: 6px;
    height: 70px;
}
.dash-stats-bar {
    background: rgba(255, 255, 255, 0.08);
    border-radius: 2px;
    height: 30%;
    transition: height 1s;
}
[data-theme="light"] .dash-stats-bar {
    background: #e2e8f0;
}
.dash-stats-bar.a-active {
    background: var(--accent-primary);
}
.showcase-row:hover .dash-stats-bar-1 { height: 80%; }
.showcase-row:hover .dash-stats-bar-2 { height: 40%; }
.showcase-row:hover .dash-stats-bar-3 { height: 90%; }
.showcase-row:hover .dash-stats-bar-4 { height: 60%; }

/* Graphic Design Canvas Mockup Styling */
.canvas-header {
    height: 34px;
    background: rgba(255, 255, 255, 0.02);
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    padding: 0 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0;
}
[data-theme="light"] .canvas-header {
    background: #f1f5f9;
    border-bottom-color: rgba(0, 0, 0, 0.04);
}
.canvas-title {
    font-size: 0.65rem;
    font-weight: 700;
    color: var(--text-secondary);
}
.canvas-tools {
    display: flex;
    gap: 6px;
}
.canvas-tool-dot {
    width: 6px;
    height: 6px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 1px;
}
[data-theme="light"] .canvas-tool-dot {
    background: #cbd5e1;
}

.canvas-screen {
    flex: 1;
    display: flex;
    background: #080716;
}
[data-theme="light"] .canvas-screen {
    background: #f8fafc;
}
.canvas-layers-panel {
    width: 70px;
    background: rgba(255, 255, 255, 0.01);
    border-right: 1px solid rgba(255, 255, 255, 0.04);
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
[data-theme="light"] .canvas-layers-panel {
    background: #ffffff;
    border-right-color: rgba(0, 0, 0, 0.04);
}
.layer-row {
    display: flex;
    align-items: center;
    gap: 5px;
}
.layer-row-eye {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
}
[data-theme="light"] .layer-row-eye {
    background: #cbd5e1;
}
.layer-row-eye.l-active {
    background: var(--accent-primary);
}
.layer-row-name {
    flex: 1;
    height: 4px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 2px;
}
[data-theme="light"] .layer-row-name {
    background: #e2e8f0;
}

.canvas-main-area {
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: radial-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    background-size: 10px 10px;
}
[data-theme="light"] .canvas-main-area {
    background-image: radial-gradient(rgba(0, 0, 0, 0.03) 1px, transparent 1px);
}
.canvas-artboard {
    width: 140px;
    height: 140px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px dashed rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}
[data-theme="light"] .canvas-artboard {
    background: #ffffff;
    border-color: rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
}
.canvas-artboard-design {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
    position: relative;
    transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.showcase-row:hover .canvas-artboard-design {
    transform: rotate(45deg) scale(1.1);
}
.canvas-artboard-design::after {
    content: '';
    position: absolute;
    top: 15px;
    left: 15px;
    width: 30px;
    height: 30px;
    background: #080716;
    border-radius: 50%;
}
[data-theme="light"] .canvas-artboard-design::after {
    background: #ffffff;
}

/* Digital Marketing & SEO Growth Graph card */
.graph-header {
    height: 34px;
    background: rgba(255, 255, 255, 0.02);
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    padding: 0 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
[data-theme="light"] .graph-header {
    background: #f1f5f9;
    border-bottom-color: rgba(0, 0, 0, 0.04);
}
.graph-title {
    font-size: 0.65rem;
    font-weight: 700;
    color: var(--text-secondary);
}
.graph-badge {
    font-size: 0.6rem;
    font-weight: 800;
    color: #10b981;
    background: rgba(16, 185, 129, 0.1);
    padding: 2px 6px;
    border-radius: 4px;
}

.graph-screen {
    flex: 1;
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    background: #070514;
    transition: background 0.3s;
}
[data-theme="light"] .graph-screen {
    background: #fafafc;
}
.graph-stats-row {
    display: flex;
    gap: 14px;
}
.graph-stat-item {
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.graph-stat-num {
    font-size: 0.95rem;
    font-weight: 800;
    color: var(--text-primary);
}
.graph-stat-label {
    height: 4px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 2px;
    width: 40px;
}
[data-theme="light"] .graph-stat-label {
    background: #e2e8f0;
}

.graph-chart-area {
    flex: 1;
    position: relative;
    border-left: 1px solid rgba(255, 255, 255, 0.08);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    margin-top: 10px;
    display: flex;
    align-items: flex-end;
}
[data-theme="light"] .graph-chart-area {
    border-color: rgba(0, 0, 0, 0.08);
}
.graph-line-svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: visible;
}
.graph-line-path {
    stroke: var(--accent-primary);
    stroke-width: 3;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
    stroke-dasharray: 600;
    stroke-dashoffset: 600;
    transition: stroke-dashoffset 1.5s ease-out;
}
.showcase-row.reveal-active .graph-line-path {
    stroke-dashoffset: 0;
}

/* Scroll Trigger fade reveals */
.showcase-row {
    transition: opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1), transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
}


/* Responsive styles for Services Showcase Section */
@media (max-width: 991px) {
    .services-showcase-section {
        padding: 60px 0;
        min-height: 100vh;
        overflow: visible;
    }
    
    .cards-container {
        overflow: visible;
        min-height: 100vh;
        height: auto !important;
    }
    
    .showcase-row {
        flex-direction: column-reverse !important;
        gap: 30px;
        padding: 20px;
        overflow: visible;
        min-height: 90vh;
        height: auto !important;
    }
    
    .showcase-visual-col,
    .showcase-content-col {
        width: 100%;
        padding: 0;
        overflow: visible;
        height: auto !important;
        flex-shrink: 0;
    }
    
    .showcase-visual-col {
        min-height: 240px;
    }
    
    .showcase-content-col {
        min-height: 320px;
    }
    
    .visual-wrapper {
        min-height: 240px;
        overflow: visible;
    }
    
    .showcase-card {
        padding: 20px;
        overflow: visible;
        height: auto !important;
    }
    .showcase-card h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .showcase-card p {
        font-size: 14px;
        line-height: 1.4;
        margin-bottom: 10px;
    }
    .showcase-checklist {
        margin: 0 0 10px 0;
    }
    .showcase-checklist li {
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 0;
    }
    .service-link {
        font-size: 13px;
    }
    .mockup-browser {
        width: 260px;
        height: 180px;
    }
    
    .mockup-phone {
        height: 350px;
        width: 210px;
    }

    .mockup-tablet {
        width: 300px;
        height: 310px;
    }
    
    /* Make widgets slightly smaller on mobile */
    .floating-widget-inner {
        padding: 5px 8px;
    }
    .floating-widget-inner span {
        font-size: 0.65rem;
    }
}
</style>

<!-- Services Main Section -->
<div class="site-main">

    <!-- Hero Section -->
    <section class="services-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h1>Get Perfect Solution for all Web & App services</h1>
                    <p>We combine cutting-edge technology, creative designs, and modern framework systems to help scalable brands achieve exceptional results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Showcase Section -->
    <section class="services-showcase-section">
        <div class="cards-container">
            
            <!-- Row 1: Shopify Apps -->
            <div class="showcase-row row-shopify-apps">
                <div class="showcase-visual-col">
                    <div class="visual-wrapper">
                        <!-- Phone Mockup -->
                        <div class="mockup-phone">
                            <div class="phone-screen">
                                <div class="phone-header">
                                    <span class="phone-logo">
                                        <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        Store
                                    </span>
                                    <div class="phone-header-icons">
                                        <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        <svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    </div>
                                </div>
                                <div class="phone-banner">
                                    <div class="phone-banner-text">
                                        <h4>Artisan Kitchen</h4>
                                        <span>Shop Now</span>
                                    </div>
                                </div>
                                <div class="phone-products">
                                    <div class="phone-product-card">
                                        <div class="p-img p-img-1"></div>
                                        <span>Wooden Bowl</span>
                                    </div>
                                    <div class="phone-product-card">
                                        <div class="p-img p-img-2"></div>
                                        <span>Clay Pot</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Widgets -->
                        <div class="floating-widget fw-1 fw-anim-1">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                                <span>Woo</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-2 fw-anim-2">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                <span>Magento</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-3 fw-anim-3">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                <span>Wix</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-4 fw-anim-4">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>WordPress</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-5 fw-anim-5">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v6c0 1.66 4 3 9 3s9-1.34 9-3V5"></path><path d="M3 11v6c0 1.66 4 3 9 3s9-1.34 9-3v-6"></path></svg>
                                <span>Data</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase-content-col">
                    <div class="showcase-card">
                        <h3>Shopify Apps</h3>
                        <p>We build tailored Shopify applications configured to automate store management, extend base features, and boost overall speed.</p>
                        <ul class="showcase-checklist">
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Custom private & public Shopify apps
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Automated sync & background tasks
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Third-party API & CRM integrations
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Shopify Functions & extensions
                            </li>
                        </ul>
                        <a href="shopifyapps.php" class="service-link">
                            Explore Service 
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Row 2: Website Development -->
            <div class="showcase-row row-web-dev">
                <div class="showcase-visual-col">
                    <div class="visual-wrapper">
                        <!-- Browser Mockup -->
                        <div class="mockup-browser">
                            <div class="browser-topbar">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-address">localhost:3000/dashboard</div>
                            </div>
                            <div class="browser-screen">
                                <div class="browser-sidebar">
                                    <div class="sidebar-bar active"></div>
                                    <div class="sidebar-bar"></div>
                                    <div class="sidebar-bar"></div>
                                    <div class="sidebar-bar"></div>
                                </div>
                                <div class="browser-content">
                                    <div class="browser-grid">
                                        <div class="browser-card">
                                            <span class="b-card-num">98%</span>
                                            <div class="b-card-label"></div>
                                        </div>
                                        <div class="browser-card">
                                            <span class="b-card-num">1.2s</span>
                                            <div class="b-card-label"></div>
                                        </div>
                                        <div class="browser-card">
                                            <span class="b-card-num">A+</span>
                                            <div class="b-card-label"></div>
                                        </div>
                                    </div>
                                    <div class="browser-chart-card">
                                        <div class="chart-top-bar"></div>
                                        <div class="chart-bars">
                                            <div class="chart-bar chart-bar-1 b-active" style="height: 35%;"></div>
                                            <div class="chart-bar chart-bar-2 b-active" style="height: 45%;"></div>
                                            <div class="chart-bar chart-bar-3 b-active" style="height: 25%;"></div>
                                            <div class="chart-bar chart-bar-4 b-active" style="height: 40%;"></div>
                                            <div class="chart-bar chart-bar-5 b-active" style="height: 30%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Widgets -->
                        <div class="floating-widget fw-1 fw-anim-1">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>ReactJS</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-2 fw-anim-2">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                                <span>PHP Stack</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-3 fw-anim-3">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v6c0 1.66 4 3 9 3s9-1.34 9-3V5"></path><path d="M3 11v6c0 1.66 4 3 9 3s9-1.34 9-3v-6"></path></svg>
                                <span>SQL DB</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-4 fw-anim-4">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Security</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase-content-col">
                    <div class="showcase-card">
                        <h3>Website Development</h3>
                        <p>Leverage standard semantic architecture, lightweight components, and speed optimization for your modern web platforms.</p>
                        <ul class="showcase-checklist">
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Custom PHP & Node.js development
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                React & Vue frontend frameworks
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Secure MySQL & MongoDB databases
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                RESTful APIs & system integrations
                            </li>
                        </ul>
                        <a href="websitedevlopment.php" class="service-link">
                            Explore Service 
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Row 3: E-commerce Website -->
            <div class="showcase-row row-ecom">
                <div class="showcase-visual-col">
                    <div class="visual-wrapper">
                        <!-- Tablet Mockup -->
                        <div class="mockup-tablet">
                            <div class="tablet-screen">
                                <div class="tablet-header">
                                    <span class="tablet-logo">E-Store</span>
                                    <div class="tablet-nav">
                                        <div class="tablet-nav-item"></div>
                                        <div class="tablet-nav-item"></div>
                                        <div class="tablet-nav-item"></div>
                                    </div>
                                </div>
                                <div class="tablet-grid">
                                    <div class="tablet-product-card">
                                        <div class="t-prod-img t-prod-1"></div>
                                        <div class="t-prod-title"></div>
                                        <div class="t-prod-price"></div>
                                    </div>
                                    <div class="tablet-product-card">
                                        <div class="t-prod-img t-prod-2"></div>
                                        <div class="t-prod-title"></div>
                                        <div class="t-prod-price"></div>
                                    </div>
                                    <div class="tablet-product-card">
                                        <div class="t-prod-img t-prod-3"></div>
                                        <div class="t-prod-title"></div>
                                        <div class="t-prod-price"></div>
                                    </div>
                                </div>
                                <div class="tablet-banner">
                                    <span>Special Summer Deals - 30% OFF</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Widgets -->
                        <div class="floating-widget fw-1 fw-anim-1">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span>Cart Sync</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-2 fw-anim-2">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                <span>Payment</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-3 fw-anim-3">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                <span>Delivery</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-4 fw-anim-4">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82zM7 7h.01"></path></svg>
                                <span>Promo Tag</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-5 fw-anim-5">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <span>Support</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase-content-col">
                    <div class="showcase-card">
                        <h3>E-commerce Solutions</h3>
                        <p>Achieve maximum customer convenience and dynamic layouts that scale conversion metrics to capture outstanding revenue growth.</p>
                        <ul class="showcase-checklist">
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Optimized Shopify & custom storefronts
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Frictionless checkout checkout paths
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Responsive layouts for all viewports
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Multi-currency & global payments
                            </li>
                        </ul>
                        <a href="ecommercewebsite.php" class="service-link">
                            Explore Service 
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Row 4: Android Development -->
            <div class="showcase-row row-android">
                <div class="showcase-visual-col">
                    <div class="visual-wrapper">
                        <!-- Phone Mockup -->
                        <div class="mockup-phone">
                            <div class="phone-screen">
                                <div class="phone-dashboard">
                                    <div class="phone-dash-header">
                                        <span class="phone-dash-title">My App</span>
                                        <div class="phone-avatar"></div>
                                    </div>
                                    <div class="phone-dash-card">
                                        <div class="dash-card-row">
                                            <div class="dash-card-text"></div>
                                            <div class="dash-card-toggle t-active"></div>
                                        </div>
                                        <div class="dash-card-row">
                                            <div class="dash-card-text" style="width: 40px;"></div>
                                            <div class="dash-card-toggle"></div>
                                        </div>
                                    </div>
                                    <div class="phone-dash-stats">
                                        <div class="dash-stats-top"></div>
                                        <div class="dash-stats-grid">
                                            <div class="dash-stats-bar dash-stats-bar-1 a-active" style="height: 40%;"></div>
                                            <div class="dash-stats-bar dash-stats-bar-2 a-active" style="height: 20%;"></div>
                                            <div class="dash-stats-bar dash-stats-bar-3 a-active" style="height: 50%;"></div>
                                            <div class="dash-stats-bar dash-stats-bar-4 a-active" style="height: 30%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Widgets -->
                        <div class="floating-widget fw-1 fw-anim-1">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10 10 10 0 0 0 10-10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path><path d="M12 6v6l4 2"></path></svg>
                                <span>Play Store</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-2 fw-anim-2">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14h-2v-6h2zm0-8h-2V6h2z"></path></svg>
                                <span>App Store</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-3 fw-anim-3">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 2a8 8 0 0 0-8 8v8l-2 2v1h20v-1l-2-2v-8a8 8 0 0 0-8-8z"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                <span>Push Alert</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-4 fw-anim-4">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Maps API</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase-content-col">
                    <div class="showcase-card">
                        <h3>Android Development</h3>
                        <p>Fully tailored native application setups built to capture and retain the rapidly expanding mobile consumer base.</p>
                        <ul class="showcase-checklist">
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Native Android (Kotlin/Java) apps
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                High-performance mobile features
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Push notifications & offline databases
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Optimized layouts for mobile screens
                            </li>
                        </ul>
                        <a href="androiddevlopment.php" class="service-link">
                            Explore Service 
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Row 5: Graphic Design -->
            <div class="showcase-row row-graphic">
                <div class="showcase-visual-col">
                    <div class="visual-wrapper">
                        <!-- Canvas Mockup -->
                        <div class="mockup-canvas">
                            <div class="canvas-header">
                                <span class="canvas-title">design_v2.psd</span>
                                <div class="canvas-tools">
                                    <span class="canvas-tool-dot"></span>
                                    <span class="canvas-tool-dot"></span>
                                    <span class="canvas-tool-dot"></span>
                                </div>
                            </div>
                            <div class="canvas-screen">
                                <div class="canvas-layers-panel">
                                    <div class="layer-row">
                                        <span class="layer-row-eye l-active"></span>
                                        <div class="layer-row-name"></div>
                                    </div>
                                    <div class="layer-row">
                                        <span class="layer-row-eye l-active"></span>
                                        <div class="layer-row-name"></div>
                                    </div>
                                    <div class="layer-row">
                                        <span class="layer-row-eye"></span>
                                        <div class="layer-row-name"></div>
                                    </div>
                                </div>
                                <div class="canvas-main-area">
                                    <div class="canvas-artboard">
                                        <div class="canvas-artboard-design"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Widgets -->
                        <div class="floating-widget fw-1 fw-anim-1">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 22C17.52 22 22 17.52 22 12S17.52 2 12 2 2 6.48 2 12s4.48 10 10 10zm0-18a8 8 0 1 1 0 16 8 8 0 0 1 0-16z"></path><circle cx="7.5" cy="10.5" r="1.5"></circle><circle cx="11.5" cy="7.5" r="1.5"></circle><circle cx="16.5" cy="9.5" r="1.5"></circle></svg>
                                <span>Palette</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-2 fw-anim-2">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm1 10h-2v6h2zm0-8h-2v2h2z"></path></svg>
                                <span>Pen Tool</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-3 fw-anim-3">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Layers</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-4 fw-anim-4">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line></svg>
                                <span>Type tool</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase-content-col">
                    <div class="showcase-card">
                        <h3>Graphic Design</h3>
                        <p>Establish high fidelity brand assets, logos, and digital interfaces that make your business visually stand out in the crowded market.</p>
                        <ul class="showcase-checklist">
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                User research & wireframe creation
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                High-fidelity visual interactive prototypes
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Beautiful custom branding & vector logotypes
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Responsive interface systems for platforms
                            </li>
                        </ul>
                        <a href="graphicdesign.php" class="service-link">
                            Explore Service 
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Row 6: Digital Marketing -->
            <div class="showcase-row row-marketing">
                <div class="showcase-visual-col">
                    <div class="visual-wrapper">
                        <!-- Graph Card Mockup -->
                        <div class="mockup-graph-card">
                            <div class="graph-header">
                                <span class="graph-title">Traffic & Conversion</span>
                                <span class="graph-badge">+124%</span>
                            </div>
                            <div class="graph-screen">
                                <div class="graph-stats-row">
                                    <div class="graph-stat-item">
                                        <span class="graph-stat-num">45.2k</span>
                                        <div class="graph-stat-label"></div>
                                    </div>
                                    <div class="graph-stat-item">
                                        <span class="graph-stat-num">3.8%</span>
                                        <div class="graph-stat-label"></div>
                                    </div>
                                </div>
                                <div class="graph-chart-area">
                                    <svg class="graph-line-svg">
                                        <path class="graph-line-path" d="M 0,110 C 30,100 60,60 90,70 C 120,80 150,20 180,30 C 210,40 240,5 300,0" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Widgets -->
                        <div class="floating-widget fw-1 fw-anim-1">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                <span>SEO Audit</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-2 fw-anim-2">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><path d="M23 6l-9.5 9.5-5-5L1 18"></path><polyline points="17 6 23 6 23 12"></polyline></svg>
                                <span>ROI Growth</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-3 fw-anim-3">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Target Ad</span>
                            </div>
                        </div>
                        <div class="floating-widget fw-4 fw-anim-4">
                            <div class="floating-widget-inner">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                <span>Global SEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase-content-col">
                    <div class="showcase-card">
                        <h3>Digital Marketing & SEO</h3>
                        <p>Maximize search visibility, target audiences dynamically, and execute result-oriented campaigns that drive scalable growth.</p>
                        <ul class="showcase-checklist">
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Technical SEO & search speed audits
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Strategic keyword & content planning
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Custom marketing automation funnels
                            </li>
                            <li>
                                <span class="chk-icon">
                                    <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                Conversion-first growth analytics tracking
                            </li>
                        </ul>
                        <a href="digitalmarketing.php" class="service-link">
                            Explore Service 
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Chronological Success Workflow Roadmap -->
    <section class="process-section">
        <div class="container">
            <h2>Our Development Process</h2>
            <p class="subtitle">A structured, high-transparency roadmap optimized to bring outstanding concepts into digital reality.</p>
            
            <div class="process-grid">
                
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="process-num">01</div>
                    <h5>Discovery</h5>
                    <p>We consult closely with your brand to uncover key technical needs, wireframe architectures, and project scopes.</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="process-num">02</div>
                    <h5>Design</h5>
                    <p>Our UI/UX specialists deliver gorgeous custom layouts that reflect your precise branding elements.</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="process-num">03</div>
                    <h5>Build</h5>
                    <p>We construct high speed pages, integrate APIs, configure security databases, and write optimized clean code.</p>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="process-num">04</div>
                    <h5>Scale</h5>
                    <p>Rigorous multi-point testing, launch assistance, and post-live performance tuning to keep you scalable.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Expandable Animated FAQ Accordion -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <p class="subtitle">Got questions? We've gathered common inquiries regarding our premium web and Shopify setups.</p>
            
            <div class="faq-container">
                
                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does a typical custom website build take?</span>
                        <div class="faq-icon-box">
                            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Timeline scales directly with project complexity. A high-converting storefront or standard website typically requires 3 to 6 weeks, which covers discovery, bespoke wireframe design, structural frontend development, API backend integrations, and meticulous pre-launch quality testing.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can you build custom Shopify Apps or connect third-party APIs?</span>
                        <div class="faq-icon-box">
                            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. As Shopify Specialists, we specialize in constructing private and public Shopify applications. We regularly configure complex custom integrations for ERP systems, inventory software, third-party logistics (3PL) solutions, CRM platforms, and customized payment gateways.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide ongoing store maintenance and tech support?</span>
                        <div class="faq-icon-box">
                            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. We offer reliable, dedicated retainer contracts and hourly models for continuous tech care. This includes swift bug debugging, security patching, site layout enhancements, core framework upgrades, and speed optimizations so you can scale hassle-free.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do you optimize pages for fast loading and SEO performance?</span>
                        <div class="faq-icon-box">
                            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>We write lightweight semantic code, minify CSS/JS files, leverage lazy-loading mechanisms for high-res images, and avoid bloated framework dependencies. We configure schemas and structure layout parameters perfectly to assure maximum search engine ranking metrics.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Vibrant Call to Action Section -->
    <section class="cta-banner">
        <div class="container">
            <div class="banner-container">
                <div class="cta-content">
                    <h2>Let's build something exceptional together</h2>
                    <p>Partner with an expert development team to configure robust, lightning-fast digital solutions that scale your operations.</p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="cta-btn-primary cta-primary">
                            <span class="button-text-wrapper">Schedule Consultation</span>
                        </a>
                        <a href="hireexpert.php" class="cta-btn-secondary cta-secondary">
                            <span class="button-text-wrapper">Hire Shopify Expert</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!--site-main end-->

<script>
    // Helper function to split button text into letter spans for rolling animation
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
// Expandable FAQ Accordion Logic
document.addEventListener('DOMContentLoaded', function() {
     const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        // Check for saved theme preference or default to dark
        const savedTheme = localStorage.getItem('theme') || 'dark';
        html.setAttribute('data-theme', savedTheme);
        
        // Toggle theme on button click
        if (themeToggle) {
            themeToggle.addEventListener('click', function() {
                const currentTheme = html.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                html.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
    }
        // Dynamic Button Animations (Span Mothers)
        makeAnimatedButton('.cta-primary');
        makeAnimatedButton('.cta-secondary');

    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });

    // Hero Section Scroll Reveal Animation
    const heroSection = document.querySelector('.services-hero');
    if (heroSection) {
        const heroH1 = heroSection.querySelector('h1');
        const heroP = heroSection.querySelector('p');
        
        if ('IntersectionObserver' in window) {
            const heroObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (heroH1) heroH1.classList.add('anim-in');
                        if (heroP) heroP.classList.add('anim-in');
                    } else {
                        if (heroH1) heroH1.classList.remove('anim-in');
                        if (heroP) heroP.classList.remove('anim-in');
                    }
                });
            }, { threshold: 0.2 });
            heroObserver.observe(heroSection);
        } else {
            if (heroH1) heroH1.classList.add('anim-in');
            if (heroP) heroP.classList.add('anim-in');
        }
    }

    // Process Section Scroll Reveal Animation
    const processSection = document.querySelector('.process-section');
    if (processSection) {
        const processH2 = processSection.querySelector('h2');
        const processSubtitle = processSection.querySelector('p.subtitle');
        const processSteps = processSection.querySelectorAll('.process-step');
        
        if ('IntersectionObserver' in window) {
            const processObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (processH2) processH2.classList.add('anim-in');
                        if (processSubtitle) processSubtitle.classList.add('anim-in');
                        processSteps.forEach((step, index) => {
                            setTimeout(() => {
                                step.classList.add('anim-in');
                            }, index * 100);
                        });
                    } else {
                        if (processH2) processH2.classList.remove('anim-in');
                        if (processSubtitle) processSubtitle.classList.remove('anim-in');
                        processSteps.forEach(step => step.classList.remove('anim-in'));
                    }
                });
            }, { threshold: 0.15 });
            processObserver.observe(processSection);
        } else {
            if (processH2) processH2.classList.add('anim-in');
            if (processSubtitle) processSubtitle.classList.add('anim-in');
            processSteps.forEach(step => step.classList.add('anim-in'));
        }
    }

    // FAQ Section Scroll Reveal Animation
    const faqSection = document.querySelector('.faq-section');
    if (faqSection) {
        const faqH2 = faqSection.querySelector('h2');
        const faqSubtitle = faqSection.querySelector('p.subtitle');
        const faqItems = faqSection.querySelectorAll('.faq-item');
        
        if ('IntersectionObserver' in window) {
            const faqObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (faqH2) faqH2.classList.add('anim-in');
                        if (faqSubtitle) faqSubtitle.classList.add('anim-in');
                        faqItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.classList.add('anim-in');
                            }, index * 100);
                        });
                    } else {
                        if (faqH2) faqH2.classList.remove('anim-in');
                        if (faqSubtitle) faqSubtitle.classList.remove('anim-in');
                        faqItems.forEach(item => item.classList.remove('anim-in'));
                    }
                });
            }, { threshold: 0.15 });
            faqObserver.observe(faqSection);
        } else {
            if (faqH2) faqH2.classList.add('anim-in');
            if (faqSubtitle) faqSubtitle.classList.add('anim-in');
            faqItems.forEach(item => item.classList.add('anim-in'));
        }
    }

    // CTA Section Scroll Reveal Animation
    const ctaSection = document.querySelector('.cta-banner');
    if (ctaSection) {
        const ctaH2 = ctaSection.querySelector('h2');
        const ctaP = ctaSection.querySelector('p');
        
        if ('IntersectionObserver' in window) {
            const ctaObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (ctaH2) ctaH2.classList.add('anim-in');
                        if (ctaP) ctaP.classList.add('anim-in');
                    } else {
                        if (ctaH2) ctaH2.classList.remove('anim-in');
                        if (ctaP) ctaP.classList.remove('anim-in');
                    }
                });
            }, { threshold: 0.2 });
            ctaObserver.observe(ctaSection);
        } else {
            if (ctaH2) ctaH2.classList.add('anim-in');
            if (ctaP) ctaP.classList.add('anim-in');
        }
    }

    // Services Showcase GSAP ScrollTrigger Animation (All Devices)
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const section = document.querySelector(".services-showcase-section");
        const showcaseRows = document.querySelectorAll(".showcase-row");

        if (section && showcaseRows.length > 0) {
            // Adjust duration based on viewport
            const isMobile = window.innerWidth <= 991;
            const durationPerCard = isMobile ? 1200 : 1000;
            const totalDuration = showcaseRows.length * durationPerCard;
            
            // Set initial states for all cards except the first one
            showcaseRows.forEach((row, index) => {
                if (index > 0) {
                    gsap.set(row, {
                        yPercent: 100,
                        opacity: 0
                    });
                } else {
                    gsap.set(row, {
                        scale: 1,
                        filter: "brightness(1)"
                    });
                }
            });

            // Create timeline for each card transition
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: section,
                    start: "top top",
                    end: "+=" + totalDuration,
                    scrub: 1,
                    pin: true,
                    anticipatePin: 1
                }
            });

            // Animate each card transition
            showcaseRows.forEach((row, index) => {
                if (index < showcaseRows.length - 1) {
                    const nextRow = showcaseRows[index + 1];
                    
                    // Shrink and darken current card
                    tl.to(row, {
                        scale: isMobile ? 0.95 : 0.92,
                        filter: "brightness(0.4)",
                        duration: 1,
                        ease: "power1.inOut"
                    }, index * 1);

                    // Slide next card up
                    tl.to(nextRow, {
                        yPercent: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power2.out"
                    }, index * 1 + 0.15);
                }
            });
        }
    }
});
</script>

<?php include 'footer.php';?>