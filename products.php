<?php 
$current_page = 'products.php';
include 'header.php';
?>

<style>
/* ==========================================================================
   FixNex HERO SECTION - Premium Animated Hero
   ========================================================================== */

/* ---- HERO ---- */
.fn-hero {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, #020c24 0%, #071538 40%, #0a1f5c 70%, #0f2d7a 100%);
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 100px 0 60px;
}

/* Animated starfield background */
.fn-hero-stars {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
}
.fn-hero-stars::before,
.fn-hero-stars::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        radial-gradient(1px 1px at 10% 15%, rgba(255,255,255,0.6) 0%, transparent 100%),
        radial-gradient(1px 1px at 25% 40%, rgba(255,255,255,0.5) 0%, transparent 100%),
        radial-gradient(1.5px 1.5px at 50% 10%, rgba(255,255,255,0.8) 0%, transparent 100%),
        radial-gradient(1px 1px at 75% 25%, rgba(255,255,255,0.6) 0%, transparent 100%),
        radial-gradient(1px 1px at 90% 60%, rgba(255,255,255,0.5) 0%, transparent 100%),
        radial-gradient(1.5px 1.5px at 15% 70%, rgba(255,255,255,0.7) 0%, transparent 100%),
        radial-gradient(1px 1px at 60% 80%, rgba(255,255,255,0.4) 0%, transparent 100%),
        radial-gradient(1px 1px at 35% 90%, rgba(255,255,255,0.6) 0%, transparent 100%),
        radial-gradient(2px 2px at 80% 85%, rgba(255,255,255,0.5) 0%, transparent 100%),
        radial-gradient(1px 1px at 45% 55%, rgba(255,255,255,0.7) 0%, transparent 100%);
    animation: starTwinkle 4s ease-in-out infinite alternate;
}
.fn-hero-stars::after {
    background-image:
        radial-gradient(1px 1px at 5% 50%, rgba(100,180,255,0.6) 0%, transparent 100%),
        radial-gradient(1.5px 1.5px at 30% 20%, rgba(100,180,255,0.5) 0%, transparent 100%),
        radial-gradient(1px 1px at 65% 35%, rgba(100,180,255,0.8) 0%, transparent 100%),
        radial-gradient(1px 1px at 85% 10%, rgba(100,180,255,0.6) 0%, transparent 100%),
        radial-gradient(1px 1px at 20% 85%, rgba(100,180,255,0.5) 0%, transparent 100%),
        radial-gradient(2px 2px at 55% 65%, rgba(100,180,255,0.7) 0%, transparent 100%),
        radial-gradient(1px 1px at 95% 40%, rgba(100,180,255,0.4) 0%, transparent 100%);
    animation-delay: -2s;
    animation-duration: 6s;
}
@keyframes starTwinkle {
    0% { opacity: 0.4; }
    100% { opacity: 1; }
}

/* Large glowing orbs */
.fn-hero-orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(80px);
    animation: orbFloat 12s ease-in-out infinite alternate;
}
.fn-hero-orb-1 {
    width: 500px; height: 500px;
    top: -100px; left: -100px;
    background: radial-gradient(circle, rgba(37, 99, 235, 0.35) 0%, transparent 70%);
}
.fn-hero-orb-2 {
    width: 400px; height: 400px;
    bottom: -80px; right: 10%;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.3) 0%, transparent 70%);
    animation-delay: -6s;
}
.fn-hero-orb-3 {
    width: 300px; height: 300px;
    top: 40%; right: 35%;
    background: radial-gradient(circle, rgba(124, 58, 237, 0.2) 0%, transparent 70%);
    animation-delay: -3s;
}
@keyframes orbFloat {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(30px, -30px) scale(1.1); }
    100% { transform: translate(-20px, 20px) scale(0.95); }
}

/* Animated grid mesh */
.fn-hero-grid {
    position: absolute;
    inset: 0;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(30, 91, 255, 0.06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(30, 91, 255, 0.06) 1px, transparent 1px);
    background-size: 70px 70px;
    mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, rgba(0,0,0,0.6) 0%, transparent 100%);
}

/* Hero content layout */
.fn-hero-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 40px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
}

/* LEFT: Text content */
.fn-hero-left {
    animation: heroSlideLeft 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
}
@keyframes heroSlideLeft {
    from { opacity: 0; transform: translateX(-50px); }
    to   { opacity: 1; transform: translateX(0); }
}

.fn-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 18px;
    border-radius: 9999px;
    background: rgba(30, 91, 255, 0.15);
    border: 1px solid rgba(30, 91, 255, 0.4);
    color: #60a5fa;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    margin-bottom: 28px;
}
.fn-hero-badge-dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #60a5fa;
    animation: heroBadgePulse 2s ease-in-out infinite;
    box-shadow: 0 0 0 0 rgba(96, 165, 250, 0.6);
}
@keyframes heroBadgePulse {
    0%   { box-shadow: 0 0 0 0 rgba(96, 165, 250, 0.6); }
    70%  { box-shadow: 0 0 0 8px rgba(96, 165, 250, 0); }
    100% { box-shadow: 0 0 0 0 rgba(96, 165, 250, 0); }
}

.fn-hero-title {
    font-size: clamp(36px, 4.5vw, 68px);
    font-weight: 900;
    line-height: 1.1;
    color: #ffffff;
    margin: 0 0 24px;
    letter-spacing: -1px;
}
.fn-hero-title-blue {
    background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 40%, #38bdf8 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    display: inline;
}
.fn-hero-title-white { color: #ffffff; }

.fn-hero-subtitle {
    font-size: clamp(15px, 1.4vw, 18px);
    color: #93c5fd;
    line-height: 1.7;
    margin: 0 0 40px;
    max-width: 520px;
}

/* CTA Buttons */
.fn-hero-ctas {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 48px;
}

.fn-hero-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 32px;
    background: linear-gradient(135deg, #1e5bff 0%, #3b82f6 100%);
    color: #ffffff !important;
    text-decoration: none !important;
    border-radius: 14px;
    font-size: 15px;
    font-weight: 800;
    box-shadow: 0 8px 30px rgba(30, 91, 255, 0.5), 0 0 0 1px rgba(255,255,255,0.1) inset;
    transition: transform 250ms ease, box-shadow 250ms ease;
    position: relative;
    overflow: hidden;
}
.fn-hero-btn-primary::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 250ms ease;
}
.fn-hero-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 40px rgba(30, 91, 255, 0.65);
    color: #ffffff !important;
}
.fn-hero-btn-primary:hover::before { opacity: 1; }

.fn-hero-btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 32px;
    background: rgba(255, 255, 255, 0.06);
    color: #e2e8f0 !important;
    text-decoration: none !important;
    border-radius: 14px;
    font-size: 15px;
    font-weight: 800;
    border: 1.5px solid rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    transition: background 250ms ease, border-color 250ms ease, transform 250ms ease;
}
.fn-hero-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(255, 255, 255, 0.35);
    transform: translateY(-3px);
    color: #ffffff !important;
}

/* App store badges */
.fn-hero-stores {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}
.fn-hero-stores-label {
    font-size: 12px;
    color: #64748b;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    white-space: nowrap;
}
.fn-hero-store-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 11px 20px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 12px;
    text-decoration: none !important;
    backdrop-filter: blur(10px);
    transition: background 200ms, border-color 200ms, transform 200ms;
}
.fn-hero-store-badge:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.25);
    transform: translateY(-2px);
}
.fn-hero-store-badge i {
    font-size: 22px;
    color: #ffffff;
}
.fn-hero-store-badge-text { text-align: left; }
.fn-hero-store-badge-text small {
    display: block;
    font-size: 9px;
    color: #94a3b8;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    line-height: 1;
    margin-bottom: 2px;
}
.fn-hero-store-badge-text span {
    display: block;
    font-size: 14px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1;
}

/* Stats row */
.fn-hero-stats {
    display: flex;
    gap: 32px;
    margin-top: 44px;
    padding-top: 36px;
    border-top: 1px solid rgba(255,255,255,0.08);
    flex-wrap: wrap;
}
.fn-hero-stat {
    text-align: left;
}
.fn-hero-stat-num {
    font-size: clamp(26px, 2.5vw, 36px);
    font-weight: 900;
    color: #ffffff;
    line-height: 1;
    margin-bottom: 4px;
}
.fn-hero-stat-num span {
    background: linear-gradient(135deg, #3b82f6, #38bdf8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.fn-hero-stat-label {
    font-size: 12px;
    color: #64748b;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}
.fn-hero-stat-divider {
    width: 1px;
    background: rgba(255,255,255,0.08);
    align-self: stretch;
}

/* RIGHT: Visual / Phone + floating cards */
.fn-hero-right {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: heroSlideRight 0.9s cubic-bezier(0.16, 1, 0.3, 1) 0.15s both;
}
@keyframes heroSlideRight {
    from { opacity: 0; transform: translateX(50px); }
    to   { opacity: 1; transform: translateX(0); }
}

/* Rotating ring behind phone */
.fn-hero-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(30, 91, 255, 0.2);
    animation: ringRotate 20s linear infinite;
}
.fn-hero-ring-1 {
    width: 460px; height: 460px;
    border-style: dashed;
}
.fn-hero-ring-2 {
    width: 360px; height: 360px;
    border-color: rgba(56, 189, 248, 0.15);
    animation-direction: reverse;
    animation-duration: 15s;
}
@keyframes ringRotate {
    from { transform: rotate(0deg); }
    to   { transform: rotate(360deg); }
}

/* Phone mockup (hero) */
.fn-hero-phone {
    width: 240px;
    height: 490px;
    background: linear-gradient(160deg, #1e293b, #0f172a);
    border-radius: 38px;
    border: 2.5px solid rgba(255,255,255,0.12);
    box-shadow:
        0 0 0 1px rgba(0,0,0,0.3),
        0 30px 80px rgba(0,0,0,0.5),
        0 0 60px rgba(30, 91, 255, 0.2),
        inset 0 0 20px rgba(255,255,255,0.03);
    position: relative;
    overflow: hidden;
    z-index: 2;
    animation: phoneFloat 5s ease-in-out infinite;
}
@keyframes phoneFloat {
    0%   { transform: translateY(0px); }
    50%  { transform: translateY(-14px); }
    100% { transform: translateY(0px); }
}
.fn-hero-phone-island {
    width: 80px; height: 22px;
    background: #000;
    border-radius: 0 0 14px 14px;
    margin: 0 auto 0;
    position: relative;
    z-index: 2;
}
.fn-hero-phone-screen {
    width: 100%;
    height: calc(100% - 22px);
    overflow: hidden;
    border-radius: 0 0 36px 36px;
}
.fn-hero-phone-screen img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    display: block;
}

/* Floating cards around phone */
.fn-hero-float-card {
    position: absolute;
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 16px;
    padding: 14px 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    z-index: 5;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    white-space: nowrap;
    animation: cardFloat 4s ease-in-out infinite;
}
.fn-hero-float-card:nth-child(2) { animation-delay: -1.3s; }
.fn-hero-float-card:nth-child(3) { animation-delay: -2.6s; }
.fn-hero-float-card:nth-child(4) { animation-delay: -0.7s; }
@keyframes cardFloat {
    0%   { transform: translateY(0px); }
    50%  { transform: translateY(-8px); }
    100% { transform: translateY(0px); }
}

.fn-hero-float-card-1 {
    top: 40px; left: -50px;
}
.fn-hero-float-card-2 {
    bottom: 100px; left: -70px;
}
.fn-hero-float-card-3 {
    top: 80px; right: -50px;
}
.fn-hero-float-card-4 {
    bottom: 60px; right: -40px;
}

.fn-fcard-icon {
    width: 40px; height: 40px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.fn-fcard-icon-blue  { background: rgba(30, 91, 255, 0.2); }
.fn-fcard-icon-green { background: rgba(16, 185, 129, 0.2); }
.fn-fcard-icon-yellow { background: rgba(245, 158, 11, 0.2); }
.fn-fcard-icon-purple { background: rgba(139, 92, 246, 0.2); }

.fn-fcard-text small {
    display: block;
    font-size: 10px;
    color: #64748b;
    font-weight: 600;
    letter-spacing: 0.3px;
    text-transform: uppercase;
    margin-bottom: 2px;
}
.fn-fcard-text strong {
    display: block;
    font-size: 14px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
}

/* Scroll indicator */
.fn-hero-scroll {
    position: absolute;
    bottom: 32px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    z-index: 2;
    animation: fadeInUp 1s 1.2s both;
}
.fn-hero-scroll span {
    font-size: 11px;
    color: #475569;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.fn-hero-scroll-mouse {
    width: 22px; height: 34px;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding-top: 5px;
}
.fn-hero-scroll-dot {
    width: 4px; height: 7px;
    background: #3b82f6;
    border-radius: 3px;
    animation: scrollDot 2s ease-in-out infinite;
}
@keyframes scrollDot {
    0%   { transform: translateY(0); opacity: 1; }
    80%  { transform: translateY(10px); opacity: 0; }
    100% { transform: translateY(0); opacity: 0; }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateX(-50%) translateY(20px); }
    to   { opacity: 1; transform: translateX(-50%) translateY(0); }
}

/* Responsive hero */
@media (max-width: 900px) {
    .fn-hero { min-height: auto; padding: 120px 0 60px; }
    .fn-hero-container {
        grid-template-columns: 1fr;
        gap: 50px;
        text-align: center;
    }
    .fn-hero-left { order: 2; }
    .fn-hero-right { order: 1; }
    .fn-hero-subtitle { max-width: 100%; }
    .fn-hero-ctas { justify-content: center; }
    .fn-hero-stores { justify-content: center; }
    .fn-hero-stats { justify-content: center; }
    .fn-hero-stat { text-align: center; }
    .fn-hero-float-card-1,
    .fn-hero-float-card-2 { left: -20px; }
    .fn-hero-float-card-3,
    .fn-hero-float-card-4 { right: -10px; }
    .fn-hero-ring-1 { width: 340px; height: 340px; }
    .fn-hero-ring-2 { width: 260px; height: 260px; }
}
@media (max-width: 500px) {
    .fn-hero-phone { width: 190px; height: 390px; }
    .fn-hero-float-card { display: none; }
    .fn-hero-ring-1 { width: 280px; height: 280px; }
    .fn-hero-ring-2 { width: 210px; height: 210px; }
    .fn-hero-container { padding: 0 20px; }
}

/* ==========================================================================
   FixNex How It Works - Premium Animated Process Flow Showcase Styles
   ========================================================================== */
.fn-process-page {
    background-color: #ffffff;
    color: #071538;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    position: relative;
    overflow-x: hidden;
    padding-bottom: 75px;
    border-top: 1px solid #f1f5f9;
}

/* Background Ambient Elements */
.fn-process-bg-grid {
    display: none;
}

.fn-process-glow {
    position: absolute;
    width: 650px;
    height: 650px;
    border-radius: 50%;
    filter: blur(140px);
    pointer-events: none;
    z-index: 0;
    animation: orbDrift 20s ease-in-out infinite alternate;
}
.fn-process-glow-1 {
    top: 30px;
    left: 8%;
    background: radial-gradient(circle, rgba(37, 99, 235, 0.14) 0%, transparent 70%);
}
.fn-process-glow-2 {
    top: 280px;
    right: 5%;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.13) 0%, transparent 70%);
    animation-delay: -10s;
}

@keyframes orbDrift {
    0% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(40px, 30px) scale(1.08); }
    100% { transform: translate(-30px, -20px) scale(0.95); }
}

/* Section Header */
/* Section Header (Unified FixNex Design System) */
.fn-process-header {
    text-align: center;
    max-width: 840px;
    margin: 50px auto 32px;
    padding: 0 20px;
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.fn-process-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #1e3a8a !important;
    margin-bottom: 14px !important;
}

.fn-process-eyebrow-line {
    display: inline-block;
    width: 24px;
    height: 2px;
    background: #1e3a8a;
    border-radius: 2px;
    transition: width 0.3s ease;
}

.fn-process-header:hover .fn-process-eyebrow-line {
    width: 36px;
}

.fn-process-title {
    font-size: clamp(30px, 3.6vw, 44px) !important;
    font-weight: 800 !important;
    color: #071530 !important;
    line-height: 1.22 !important;
    letter-spacing: -0.8px !important;
    margin: 0 0 14px 0 !important;
    text-transform: none !important;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.fn-process-subtitle {
    font-size: 15px !important;
    font-weight: 400 !important;
    color: #64748b !important;
    line-height: 1.65 !important;
    max-width: 640px !important;
    margin: 0 auto !important;
    text-transform: none !important;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

/* ==========================================================================
   Horizontal Process Track & Connecting Wave
   ========================================================================== */
.fn-process-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 15px clamp(16px, 2.5vw, 36px);
    position: relative;
    z-index: 2;
}

.fn-process-track-wrapper {
    position: relative;
    width: 100%;
    overflow-x: auto;
    overflow-y: visible;
    padding: 10px 0 20px;
    scrollbar-width: thin;
    scrollbar-color: #cbd5e1 transparent;
    -webkit-overflow-scrolling: touch;
    scroll-snap-type: x mandatory;
}

.fn-process-track-wrapper::-webkit-scrollbar {
    height: 7px;
}
.fn-process-track-wrapper::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 9999px;
}
.fn-process-track-wrapper::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

/* SVG Connecting Spline Wave Line with Flowing Animation */
.fn-connecting-wave-svg {
    position: absolute;
    top: 57%;
    left: 0;
    width: 100%;
    height: 140px;
    transform: translateY(-50%);
    pointer-events: none;
    z-index: 1;
}

.fn-wave-path-bg {
    stroke: rgba(37, 99, 235, 0.2);
    stroke-width: 4;
}

.fn-wave-path-animated {
    stroke: #2563eb;
    stroke-width: 3.5;
    stroke-dasharray: 12 10;
    animation: fnWaveFlow 20s linear infinite;
}

@keyframes fnWaveFlow {
    from { stroke-dashoffset: 0; }
    to { stroke-dashoffset: -440; }
}

.fn-process-grid {
    display: grid;
    grid-template-columns: repeat(5, minmax(220px, 1fr));
    gap: clamp(12px, 1.8vw, 24px);
    position: relative;
    z-index: 2;
    min-width: 1140px;
    padding: 10px 10px;
}

/* ==========================================================================
   Individual Process Step Column with Staggered Entrance
   ========================================================================== */
.fn-step-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    text-align: center;
    scroll-snap-align: center;
    transition: transform 400ms cubic-bezier(0.16, 1, 0.3, 1), opacity 400ms ease;
    animation: fnStepEnter 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
}

.fn-step-item:nth-child(1) { animation-delay: 0.1s; }
.fn-step-item:nth-child(2) { animation-delay: 0.25s; }
.fn-step-item:nth-child(3) { animation-delay: 0.4s; }
.fn-step-item:nth-child(4) { animation-delay: 0.55s; }
.fn-step-item:nth-child(5) { animation-delay: 0.7s; }

@keyframes fnStepEnter {
    0% {
        opacity: 0;
        transform: translateY(45px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fnFadeDown {
    0% {
        opacity: 0;
        transform: translateY(-25px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ==========================================================================
   Realistic Mobile Phone Mockup + Floating Keyframes
   ========================================================================== */
.fn-phone-mockup {
    zoom: 0.82;
    width: 275px;
    height: 560px;
    background: #0f172a;
    border: 9px solid #1e293b;
    border-radius: 46px;
    box-shadow: 
        0 25px 60px -15px rgba(15, 23, 42, 0.35),
        0 0 0 1px rgba(255, 255, 255, 0.08) inset,
        0 15px 35px -5px rgba(30, 91, 255, 0.15);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    transition: transform 450ms cubic-bezier(0.16, 1, 0.3, 1), box-shadow 450ms ease, border-color 300ms ease;
    cursor: pointer;
}

/* Organic Floating Animation Staggered across phones */
.fn-step-item:nth-child(1) .fn-phone-mockup { animation: fnFloat1 5.5s ease-in-out infinite; }
.fn-step-item:nth-child(2) .fn-phone-mockup { animation: fnFloat2 6.2s ease-in-out infinite 0.6s; }
.fn-step-item:nth-child(3) .fn-phone-mockup { animation: fnFloat3 5.8s ease-in-out infinite 1.2s; }
.fn-step-item:nth-child(4) .fn-phone-mockup { animation: fnFloat4 6.4s ease-in-out infinite 1.8s; }
.fn-step-item:nth-child(5) .fn-phone-mockup { animation: fnFloat5 6.0s ease-in-out infinite 2.4s; }

@keyframes fnFloat1 {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-9px); }
}
@keyframes fnFloat2 {
    0%, 100% { transform: translateY(-4px); }
    50% { transform: translateY(6px); }
}
@keyframes fnFloat3 {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-11px); }
}
@keyframes fnFloat4 {
    0%, 100% { transform: translateY(-5px); }
    50% { transform: translateY(7px); }
}
@keyframes fnFloat5 {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
}

/* Hover Lift & 3D Lighting Effect */
.fn-step-item:hover .fn-phone-mockup {
    animation-play-state: paused !important;
    transform: translateY(-16px) scale(1.028);
    border-color: #3b82f6;
    box-shadow: 
        0 40px 80px -15px rgba(15, 23, 42, 0.55),
        0 25px 45px -5px rgba(37, 99, 235, 0.35),
        0 0 0 2px rgba(59, 130, 246, 0.4) inset;
}

/* Glass Sheen Reflection with Shimmer sweep on hover */
.fn-phone-mockup::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 80%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.12) 0%, transparent 60%);
    pointer-events: none;
    z-index: 30;
    transition: opacity 300ms ease;
}

.fn-phone-mockup::after {
    content: "";
    position: absolute;
    top: -50%;
    left: -120%;
    width: 80%;
    height: 200%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transform: rotate(25deg);
    pointer-events: none;
    z-index: 35;
    transition: none;
}
.fn-step-item:hover .fn-phone-mockup::after {
    left: 150%;
    transition: left 900ms ease;
}

/* Top Dynamic Island Notch */
.fn-phone-island {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    width: 82px;
    height: 22px;
    background: #000000;
    border-radius: 20px;
    z-index: 40;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.4);
}
.fn-phone-camera-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #0f172a;
    border: 1px solid rgba(255,255,255,0.15);
}

/* Status Bar */
.fn-phone-status {
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 18px 0;
    font-size: 11px;
    font-weight: 700;
    color: #ffffff;
    position: relative;
    z-index: 20;
}
.fn-phone-status-light {
    color: #1e293b;
}

/* Phone Screen Content Container */
.fn-phone-screen {
    flex: 1;
    overflow: hidden;
    position: relative;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

/* Bottom Home Indicator Bar */
.fn-phone-home-bar {
    position: absolute;
    bottom: 6px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: #94a3b8;
    border-radius: 9999px;
    z-index: 40;
}

/* ==========================================================================
   Screen 1: FixNex Real App Home Screen UI
   ========================================================================== */
.fn-screen-home {
    background: #f5f6fa;
    height: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
}
/* Top white header area */
.fn-home-header {
    background: #ffffff;
    padding: 10px 12px 8px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}
.fn-home-greeting {
    font-size: 13px;
    font-weight: 800;
    color: #0f172a;
    display: flex;
    align-items: center;
    gap: 4px;
}
.fn-home-location {
    display: flex;
    align-items: center;
    gap: 3px;
    margin-top: 2px;
    font-size: 8.5px;
    color: #2563eb;
    font-weight: 600;
}
.fn-home-bell {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #334155;
    font-size: 10px;
    flex-shrink: 0;
    position: relative;
}
.fn-home-bell::after {
    content: '';
    position: absolute;
    top: 4px;
    right: 4px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #ef4444;
    border: 1px solid #fff;
    animation: livePulseRed 2s infinite;
}
@keyframes livePulseRed {
    0% { box-shadow: 0 0 0 0 rgba(239,68,68,0.7); }
    70% { box-shadow: 0 0 0 5px rgba(239,68,68,0); }
    100% { box-shadow: 0 0 0 0 rgba(239,68,68,0); }
}
/* Search bar */
.fn-home-search {
    background: #ffffff;
    padding: 0 12px 10px;
}
.fn-home-search-box {
    background: #f1f5f9;
    border-radius: 10px;
    padding: 7px 10px;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 9.5px;
    color: #94a3b8;
}
.fn-home-search-box i { color: #94a3b8; font-size: 10px; }
/* AC Service Banner Slider */
.fn-home-banner {
    margin: 0 10px;
    border-radius: 14px;
    overflow: hidden;
    position: relative;
    background: linear-gradient(135deg, #0d2353 0%, #1e5bff 100%);
    padding: 12px;
    display: flex;
    gap: 8px;
    align-items: stretch;
    min-height: 96px;
    box-shadow: 0 4px 16px rgba(30,91,255,0.25);
}
.fn-banner-text { flex: 1; }
.fn-banner-pro-tag {
    font-size: 7px;
    font-weight: 700;
    color: #93c5fd;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 2px;
    display: flex;
    align-items: center;
    gap: 4px;
}
.fn-banner-pro-tag span {
    background: rgba(255,255,255,0.15);
    padding: 1px 5px;
    border-radius: 4px;
    letter-spacing: 0.05em;
}
.fn-banner-service-name {
    font-size: 16px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.1;
    letter-spacing: -0.02em;
}
.fn-banner-service-sub {
    font-size: 7.5px;
    color: #bfdbfe;
    margin: 3px 0 8px;
    font-weight: 500;
}
.fn-banner-icons {
    display: flex;
    gap: 6px;
    margin-bottom: 8px;
}
.fn-banner-icon-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2px;
    font-size: 6px;
    color: #bfdbfe;
    font-weight: 600;
}
.fn-banner-icon-item i {
    width: 18px;
    height: 18px;
    border-radius: 5px;
    background: rgba(255,255,255,0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8px;
    color: #fff;
}
.fn-banner-cta {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: rgba(255,255,255,0.92);
    color: #0d2353;
    font-size: 7.5px;
    font-weight: 800;
    padding: 4px 8px;
    border-radius: 8px;
    animation: btnShine 3.5s infinite;
    position: relative;
    overflow: hidden;
}
.fn-banner-img {
    width: 90px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    overflow: visible;
    position: relative;
}
.fn-banner-img img {
    width: 95px;
    object-fit: contain;
    object-position: bottom;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
}
.fn-banner-dots {
    position: absolute;
    bottom: 8px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 4px;
}
.fn-banner-dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: rgba(255,255,255,0.4);
}
.fn-banner-dot.active {
    background: #fff;
    width: 12px;
    border-radius: 3px;
}
/* Popular Categories */
.fn-home-section {
    padding: 8px 12px 4px;
}
.fn-home-section-title {
    font-size: 10px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 7px;
}
.fn-home-cats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 5px;
}
.fn-cat-item {
    background: #ffffff;
    border-radius: 10px;
    padding: 6px 4px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    border: 1px solid #f1f5f9;
    transition: transform 200ms ease, box-shadow 200ms ease;
    cursor: pointer;
}
.fn-cat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37,99,235,0.1);
}
.fn-cat-icon {
    width: 32px;
    height: 32px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    overflow: hidden;
}
.fn-cat-icon img { width: 100%; height: 100%; object-fit: contain; }
.fn-cat-label {
    font-size: 6.5px;
    font-weight: 700;
    color: #334155;
    text-align: center;
    line-height: 1.3;
}
.fn-cat-view-all {
    background: #eff6ff;
    border-color: #dbeafe;
}
.fn-cat-view-all .fn-cat-icon {
    background: #2563eb;
    color: #fff;
    font-size: 12px;
}
.fn-cat-view-all .fn-cat-label { color: #2563eb; font-weight: 800; }
/* Become a Partner Banner */
.fn-home-partner-banner {
    margin: 6px 10px 4px;
    background: linear-gradient(135deg, #f0f7ff 0%, #e8f4ff 100%);
    border: 1px solid #dbeafe;
    border-radius: 12px;
    padding: 8px 10px;
    display: flex;
    gap: 8px;
    align-items: center;
    flex: 1;
    min-height: 0;
}
.fn-partner-text { flex: 1; }
.fn-partner-tag {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 6.5px;
    font-weight: 700;
    color: #2563eb;
    background: rgba(37,99,235,0.08);
    padding: 2px 5px;
    border-radius: 4px;
    margin-bottom: 3px;
}
.fn-partner-title {
    font-size: 9.5px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.2;
    margin-bottom: 2px;
}
.fn-partner-sub {
    font-size: 7px;
    color: #475569;
    margin-bottom: 6px;
    line-height: 1.3;
}
.fn-partner-btn {
    background: #2563eb;
    color: #fff;
    border: none;
    border-radius: 7px;
    padding: 4px 10px;
    font-size: 7.5px;
    font-weight: 800;
    display: inline-flex;
    align-items: center;
    gap: 3px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.fn-partner-btn::after {
    content: '';
    position: absolute;
    top: 0; left: -100%; width: 60%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: btnShine 3s infinite;
}
.fn-partner-img {
    width: 55px;
    flex-shrink: 0;
    display: flex;
    align-items: flex-end;
}
.fn-partner-img img {
    width: 100%;
    object-fit: contain;
    object-position: bottom;
    filter: drop-shadow(0 2px 6px rgba(0,0,0,0.15));
}
/* Bottom Nav */
.fn-home-bottom-nav {
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 6px 0;
    flex-shrink: 0;
    margin-top: auto;
}
.fn-bnav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2px;
    font-size: 6px;
    color: #94a3b8;
    font-weight: 600;
    min-width: 36px;
}
.fn-bnav-item i { font-size: 11px; }
.fn-bnav-item.active { color: #2563eb; }

@keyframes blinkCursor {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

/* ==========================================================================
   Screen 2: Choose Provider UI + Interactive Badges
   ========================================================================== */
.fn-screen-provider {
    background: #f8fafc;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.fn-provider-hero-bg {
    background: linear-gradient(135deg, #1e5bff 0%, #0d2353 100%);
    height: 100px;
    padding: 12px;
    color: #ffffff;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}
.fn-provider-avatar-wrap {
    margin-top: -45px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.fn-provider-avatar {
    width: 76px;
    height: 76px;
    border-radius: 50%;
    border: 4px solid #ffffff;
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    overflow: hidden;
    background: #fff;
    position: relative;
}
.fn-provider-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.fn-provider-online-badge {
    position: absolute;
    top: 4px;
    right: 4px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #22c55e;
    border: 2px solid #fff;
    box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
    animation: livePulseGreen 2s infinite;
}

@keyframes livePulseGreen {
    0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.8); }
    70% { box-shadow: 0 0 0 7px rgba(34, 197, 94, 0); }
    100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
}

.fn-provider-name-row {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: 6px;
}
.fn-provider-name {
    font-size: 14px;
    font-weight: 850;
    color: #071538;
}
.fn-provider-verified-check {
    width: 14px;
    height: 14px;
    background: #2563eb;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 8px;
    box-shadow: 0 2px 6px rgba(37, 99, 235, 0.4);
}
.fn-provider-rating-pill {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #fef3c7;
    color: #d97706;
    padding: 2px 8px;
    border-radius: 9999px;
    font-size: 10px;
    font-weight: 800;
    margin-top: 4px;
}
.fn-provider-action-pills {
    display: flex;
    gap: 8px;
    padding: 10px 14px 4px;
}
.fn-provider-action-pill {
    flex: 1;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 6px;
    border-radius: 10px;
    font-size: 10px;
    font-weight: 700;
    color: #334155;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
}
.fn-provider-action-pill.active {
    background: #eff6ff;
    border-color: #bfdbfe;
    color: #1e5bff;
}
.fn-provider-services-list {
    padding: 8px 14px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.fn-provider-service-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 7px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: border-color 200ms ease, transform 200ms ease;
}
.fn-provider-service-item:hover {
    border-color: #93c5fd;
    transform: translateX(2px);
}
.fn-provider-service-item-left {
    display: flex;
    align-items: center;
    gap: 8px;
}
.fn-provider-service-item-icon {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
}
.fn-provider-service-title {
    font-size: 10.5px;
    font-weight: 800;
    color: #0f172a;
}
.fn-provider-service-desc {
    font-size: 8.5px;
    color: #64748b;
}
.fn-provider-footer-btns {
    margin-top: auto;
    padding: 10px 14px 12px;
    display: flex;
    gap: 8px;
}
.fn-btn-call {
    flex: 1;
    background: #f1f5f9;
    border: 1px solid #cbd5e1;
    border-radius: 10px;
    padding: 8px;
    font-size: 11px;
    font-weight: 700;
    color: #1e293b;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    cursor: pointer;
}
.fn-btn-book {
    flex: 2;
    background: #0d2353;
    border: none;
    border-radius: 10px;
    padding: 8px;
    font-size: 11px;
    font-weight: 800;
    color: #ffffff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.fn-btn-book::after {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 60%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
    animation: btnShine 3.5s infinite;
}

@keyframes btnShine {
    0%, 60% { left: -100%; }
    100% { left: 160%; }
}

/* ==========================================================================
   Screen 3: Schedule Booking UI + Pulsing Time Slots
   ========================================================================== */
.fn-screen-booking {
    background: #f8fafc;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.fn-chat-header {
    background: #ffffff;
    border-bottom: 1px solid #e2e8f0;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.fn-chat-user {
    display: flex;
    align-items: center;
    gap: 8px;
}
.fn-chat-avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
}
.fn-chat-name {
    font-size: 11px;
    font-weight: 800;
    color: #071538;
}
.fn-chat-status {
    font-size: 8.5px;
    color: #16a34a;
    font-weight: 700;
}
.fn-chat-body {
    flex: 1;
    padding: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    overflow-y: auto;
}
.fn-msg-bubble {
    max-width: 82%;
    padding: 8px 10px;
    border-radius: 12px;
    font-size: 9.5px;
    line-height: 1.4;
    animation: msgPop 0.5s ease both;
}

@keyframes msgPop {
    0% { opacity: 0; transform: translateY(6px); }
    100% { opacity: 1; transform: translateY(0); }
}

.fn-msg-incoming {
    background: #ffffff;
    color: #1e293b;
    border: 1px solid #e2e8f0;
    align-self: flex-start;
    border-bottom-left-radius: 4px;
}
.fn-msg-outgoing {
    background: #2563eb;
    color: #ffffff;
    align-self: flex-end;
    border-bottom-right-radius: 4px;
}
.fn-slot-picker-box {
    background: #ffffff;
    border: 1px solid #dbeafe;
    border-radius: 12px;
    padding: 10px;
    margin-top: 4px;
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.06);
}
.fn-slot-picker-title {
    font-size: 10px;
    font-weight: 800;
    color: #1e3a8a;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 4px;
}
.fn-slot-chips {
    display: flex;
    gap: 4px;
    flex-wrap: wrap;
}
.fn-slot-chip {
    background: #f1f5f9;
    border-radius: 6px;
    padding: 4px 7px;
    font-size: 8.5px;
    font-weight: 700;
    color: #475569;
    transition: all 200ms ease;
}
.fn-slot-chip.selected {
    background: #2563eb;
    color: #ffffff;
    box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
    animation: slotChipGlow 2.5s infinite;
}

@keyframes slotChipGlow {
    0% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.6); }
    70% { box-shadow: 0 0 0 6px rgba(37, 99, 235, 0); }
    100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0); }
}

.fn-chat-input-bar {
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    padding: 8px 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.fn-chat-input {
    flex: 1;
    background: #f1f5f9;
    border-radius: 9999px;
    padding: 6px 12px;
    font-size: 10px;
    color: #64748b;
}
.fn-chat-send-btn {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: #2563eb;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: transform 200ms ease;
}
.fn-chat-send-btn:hover {
    transform: scale(1.1);
}

/* ==========================================================================
   Screen 4: Live GPS Tracking UI + Animated Vector Route & Radar Pin
   ========================================================================== */
.fn-screen-tracking {
    position: relative;
    height: 100%;
    background: #eef5ec;
    overflow: hidden;
}
.fn-map-vector {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}

/* Animated Route Path */
.fn-gps-path {
    stroke-dasharray: 8 6;
    animation: gpsRouteMove 2.5s linear infinite;
}

@keyframes gpsRouteMove {
    from { stroke-dashoffset: 28; }
    to { stroke-dashoffset: 0; }
}

/* Expanding Radar Waves around Vehicle */
.fn-radar-ring-1 {
    transform-origin: 70px 340px;
    animation: radarRipple 2.2s cubic-bezier(0.2, 0.8, 0.2, 1) infinite;
}
.fn-radar-ring-2 {
    transform-origin: 70px 340px;
    animation: radarRipple 2.2s cubic-bezier(0.2, 0.8, 0.2, 1) infinite 1.1s;
}

@keyframes radarRipple {
    0% { r: 10px; opacity: 0.8; stroke-width: 3; }
    100% { r: 35px; opacity: 0; stroke-width: 0.5; }
}

.fn-map-top-bar {
    position: absolute;
    top: 12px;
    left: 12px;
    right: 12px;
    background: #ffffff;
    border-radius: 12px;
    padding: 8px 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 10.5px;
    font-weight: 800;
    color: #071538;
    z-index: 10;
}
.fn-map-eta-pill {
    background: #22c55e;
    color: #ffffff;
    padding: 2px 8px;
    border-radius: 9999px;
    font-size: 9px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}
.fn-map-eta-dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #fff;
    animation: blinkCursor 1.2s infinite;
}

.fn-map-bottom-card {
    position: absolute;
    bottom: 12px;
    left: 10px;
    right: 10px;
    background: #ffffff;
    border-radius: 16px;
    padding: 10px 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    z-index: 10;
    display: flex;
    align-items: center;
    gap: 10px;
}
.fn-map-marker-icon {
    width: 32px;
    height: 32px;
    border-radius: 10px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.fn-map-dest-info {
    flex: 1;
}
.fn-map-dest-title {
    font-size: 11px;
    font-weight: 850;
    color: #0f172a;
}
.fn-map-dest-sub {
    font-size: 9px;
    color: #64748b;
}

/* ==========================================================================
   Screen 5: Safe Payment & Rating UI + Pop Checkmark
   ========================================================================== */
.fn-screen-payment {
    background: #f8fafc;
    height: 100%;
    display: flex;
    flex-direction: column;
    padding: 16px 14px;
    align-items: center;
    text-align: center;
}
.fn-pay-success-badge {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #dcfce7;
    color: #16a34a;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 14px;
    box-shadow: 0 8px 24px rgba(22, 163, 74, 0.25);
    animation: checkmarkPop 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) both;
}

@keyframes checkmarkPop {
    0% { transform: scale(0.3); opacity: 0; }
    70% { transform: scale(1.15); }
    100% { transform: scale(1); opacity: 1; }
}

.fn-pay-amount {
    font-size: 26px;
    font-weight: 900;
    color: #071538;
    margin-top: 12px;
    letter-spacing: -0.02em;
}
.fn-pay-sub {
    font-size: 10px;
    font-weight: 700;
    color: #16a34a;
    background: #f0fdf4;
    padding: 2px 10px;
    border-radius: 9999px;
    margin-top: 4px;
}
.fn-pay-review-box {
    width: 100%;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 14px;
    margin-top: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
}
.fn-pay-review-title {
    font-size: 11px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
}
.fn-pay-stars-row {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4px;
    color: #f59e0b;
    font-size: 14px;
    margin-bottom: 10px;
}
.fn-pay-stars-row i {
    animation: starPulse 2.5s ease-in-out infinite alternate;
}
.fn-pay-stars-row i:nth-child(1) { animation-delay: 0s; }
.fn-pay-stars-row i:nth-child(3) { animation-delay: 0.4s; }

@keyframes starPulse {
    0% { transform: scale(1); }
    100% { transform: scale(1.18); filter: drop-shadow(0 0 3px rgba(245, 158, 11, 0.6)); }
}

.fn-pay-stars-score {
    font-size: 13px;
    font-weight: 900;
    color: #0f172a;
    margin: 0 2px;
}
.fn-pay-btn-done {
    width: 100%;
    background: #2563eb;
    color: #ffffff;
    border: none;
    border-radius: 10px;
    padding: 8px;
    font-size: 11px;
    font-weight: 700;
}
.fn-pay-btn-bottom {
    margin-top: auto;
    width: 100%;
    background: #0d2353;
    color: #ffffff;
    border: none;
    border-radius: 12px;
    padding: 10px;
    font-size: 11px;
    font-weight: 800;
    cursor: pointer;
    transition: background 200ms ease;
}
.fn-pay-btn-bottom:hover {
    background: #1e3a8a;
}

/* ==========================================================================
   Step Info Badge & Typography + Pulse Radar Ripple
   ========================================================================== */
.fn-step-meta {
    margin-top: 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 5;
    max-width: 230px;
}

/* Circular Blue Number Badge with Sequential Radar Waves */
.fn-step-number-badge {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #ffffff;
    font-size: 13.5px;
    font-weight: 900;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 
        0 6px 16px rgba(37, 99, 235, 0.4),
        0 0 0 3px #ffffff;
    margin-bottom: 10px;
    position: relative;
    z-index: 10;
    transition: transform 300ms cubic-bezier(0.16, 1, 0.3, 1), box-shadow 300ms ease;
    animation: stepBadgePulse 3.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.fn-step-item:nth-child(1) .fn-step-number-badge { animation-delay: 0s; }
.fn-step-item:nth-child(2) .fn-step-number-badge { animation-delay: 0.7s; }
.fn-step-item:nth-child(3) .fn-step-number-badge { animation-delay: 1.4s; }
.fn-step-item:nth-child(4) .fn-step-number-badge { animation-delay: 2.1s; }
.fn-step-item:nth-child(5) .fn-step-number-badge { animation-delay: 2.8s; }

@keyframes stepBadgePulse {
    0% {
        box-shadow: 
            0 0 0 0 rgba(37, 99, 235, 0.5),
            0 8px 20px rgba(37, 99, 235, 0.4),
            0 0 0 4px #ffffff;
    }
    60% {
        box-shadow: 
            0 0 0 14px rgba(37, 99, 235, 0),
            0 8px 20px rgba(37, 99, 235, 0.4),
            0 0 0 4px #ffffff;
    }
    100% {
        box-shadow: 
            0 0 0 0 rgba(37, 99, 235, 0),
            0 8px 20px rgba(37, 99, 235, 0.4),
            0 0 0 4px #ffffff;
    }
}

.fn-step-item:hover .fn-step-number-badge {
    transform: scale(1.18);
    background: linear-gradient(135deg, #1d4ed8 0%, #00d2ff 100%);
    box-shadow: 0 12px 28px rgba(37, 99, 235, 0.6), 0 0 0 4px #ffffff;
}

.fn-step-title {
    font-size: 16px;
    font-weight: 800;
    color: #071538;
    margin: 0 0 4px;
    line-height: 1.25;
    transition: color 250ms ease;
}

.fn-step-item:hover .fn-step-title {
    color: #1e5bff;
}

.fn-step-tag {
    font-size: 12px;
    font-weight: 700;
    color: #1e5bff;
    margin-bottom: 4px;
}

.fn-step-desc {
    font-size: 12px;
    font-weight: 500;
    color: #64748b;
    line-height: 1.45;
    margin: 0;
}

/* ==========================================================================
   Bottom Action Banner
   ========================================================================== */
.fn-bottom-cta-card {
    max-width: 1100px;
    margin: 60px auto 0;
    background: linear-gradient(135deg, #071a4d 0%, #0D2353 100%);
    border-radius: 28px;
    padding: 44px clamp(20px, 4vw, 56px);
    color: #ffffff;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    box-shadow: 0 25px 60px -10px rgba(13, 35, 83, 0.35);
    position: relative;
    overflow: hidden;
    animation: fnStepEnter 1s ease both;
}

.fn-bottom-cta-card::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.25) 0%, transparent 70%);
}

.fn-bottom-cta-text h3 {
    font-size: clamp(24px, 2.5vw, 34px);
    font-weight: 900;
    color: #ffffff;
    margin: 0 0 8px;
}

.fn-bottom-cta-text p {
    font-size: 15px;
    color: #93c5fd;
    margin: 0;
}

.fn-bottom-cta-btns {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    position: relative;
    z-index: 2;
}

.fn-btn-primary-glow {
    background: #1e5bff;
    color: #ffffff !important;
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 800;
    font-size: 14.5px;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 10px 25px rgba(30, 91, 255, 0.4);
    transition: transform 200ms ease, background 200ms ease, box-shadow 200ms ease;
}

.fn-btn-primary-glow:hover {
    background: #194fd8;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(30, 91, 255, 0.55);
}

.fn-btn-secondary-outline {
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff !important;
    border: 1.5px solid rgba(255, 255, 255, 0.25);
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 800;
    font-size: 14.5px;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: background 200ms ease, border-color 200ms ease;
}

.fn-btn-secondary-outline:hover {
    background: rgba(255, 255, 255, 0.16);
    border-color: #ffffff;
}

@media (max-width: 1400px) {
    .fn-connecting-wave-svg {
        display: none;
    }
}
@media (max-width: 600px) {
    .fn-process-header {
        margin: 22px auto 18px !important;
    }
    .fn-process-title {
        font-size: 26px !important;
        line-height: 1.25 !important;
    }
    .fn-process-page {
        padding-bottom: 40px !important;
    }
    .fn-bottom-cta-card {
        padding: 30px 22px;
        border-radius: 20px;
        margin-top: 40px;
    }
    .fn-bottom-cta-btns {
        flex-direction: column;
        width: 100%;
        gap: 12px;
    }
    .fn-btn-primary-glow,
    .fn-btn-secondary-outline {
        width: 100%;
        justify-content: center;
        text-align: center;
    }
}
</style>

<!-- =========================================================
     FIXNEX GLOBAL SMOOTH SCROLL & FIXED HEADER OFFSET
     ========================================================= -->
<style>
html {
    scroll-behavior: smooth;
}
#fnh-hero,
#fn-services-catalog,
#fn-how-it-works-timeline,
#fn-fingertips-experience,
#fn-merchant-opportunities,
#fn-everyday-difference,
#fn-dual-cta,
.fn-process-page {
    scroll-margin-top: 85px;
}
</style>

<!-- =========================================================
     FIXNEX HERO SECTION — Pixel-perfect match to reference image
     ========================================================= -->
<style>
/* Reset and container for Hero Section */
.fnh2-hero {
    position: relative;
    width: 100%;
    min-height: 660px;
    height: 86vh;
    max-height: 780px;
    background-color: #ffffff;
    background-image: url('images/fixnex/hero-technician.jpg');
    background-size: cover;
    background-position: right top;
    background-repeat: no-repeat;
    overflow: hidden;
    display: flex;
    align-items: center;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}

.fnh2-wrapper {
    position: relative;
    width: 100%;
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 48px;
    height: 100%;
    display: flex;
    align-items: center;
}

/* Left content block */
.fnh2-left-block {
    position: relative;
    z-index: 10;
    max-width: 520px;
    padding: 40px 0;
}

/* Small Tagline: — YOUR HOME, IN GOOD HANDS */
.fnh2-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #1e3a8a !important;
    margin-bottom: 22px !important;
}
.fnh2-eyebrow::before {
    content: '';
    display: inline-block;
    width: 26px;
    height: 2px;
    background: #1e3a8a;
    border-radius: 2px;
}

/* 3-line Headline in Title Case (NOT UPPERCASE) */
.fnh2-heading {
    margin: 0 0 20px 0 !important;
    padding: 0 !important;
    line-height: 1.15 !important;
    letter-spacing: -1.2px !important;
    text-transform: none !important;
}
.fnh2-heading-dark {
    display: block !important;
    font-size: clamp(36px, 4.2vw, 56px) !important;
    font-weight: 800 !important;
    color: #0f172a !important;
    text-transform: none !important;
    line-height: 1.15 !important;
    font-family: inherit !important;
}
.fnh2-heading-blue {
    display: block !important;
    font-size: clamp(36px, 4.2vw, 56px) !important;
    font-weight: 800 !important;
    color: #1d4ed8 !important; /* Vibrant Royal Blue like reference */
    text-transform: none !important;
    line-height: 1.15 !important;
    font-family: inherit !important;
}

/* Subtitle paragraph */
.fnh2-desc {
    font-size: 15px !important;
    color: #64748b !important;
    line-height: 1.65 !important;
    max-width: 440px !important;
    margin: 0 0 32px 0 !important;
    font-weight: 400 !important;
    text-transform: none !important;
}

/* 2 Action Buttons */
.fnh2-buttons {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
}
.fnh2-btn-dark {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    padding: 13px 26px !important;
    background: #0b1736 !important;
    color: #ffffff !important;
    border-radius: 8px !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    border: 1px solid #0b1736 !important;
    box-shadow: 0 4px 14px rgba(11, 23, 54, 0.22) !important;
    transition: all 0.22s ease !important;
}
.fnh2-btn-dark:hover {
    background: #1d4ed8 !important;
    border-color: #1d4ed8 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 8px 20px rgba(29, 78, 216, 0.3) !important;
    color: #ffffff !important;
}
.fnh2-btn-white {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    padding: 13px 26px !important;
    background: #ffffff !important;
    color: #0f172a !important;
    border-radius: 8px !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    border: 1.5px solid #cbd5e1 !important;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04) !important;
    transition: all 0.22s ease !important;
}
.fnh2-btn-white:hover {
    background: #f8fafc !important;
    border-color: #94a3b8 !important;
    transform: translateY(-2px) !important;
    color: #0f172a !important;
}

/* 4 Floating Badges exactly matching reference image */
.fnh2-badge {
    position: absolute;
    background: #ffffff;
    border-radius: 10px;
    padding: 9px 15px;
    display: inline-flex;
    align-items: center;
    gap: 11px;
    box-shadow: 0 10px 25px -4px rgba(15, 23, 42, 0.1), 0 4px 8px -2px rgba(15, 23, 42, 0.05);
    border: 1px solid rgba(226, 232, 240, 0.95);
    z-index: 15;
    animation: fnh2-float 4.5s ease-in-out infinite;
    pointer-events: auto;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.fnh2-badge:hover {
    transform: translateY(-4px) !important;
    box-shadow: 0 16px 30px -4px rgba(15, 23, 42, 0.14) !important;
}

@keyframes fnh2-float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-7px); }
}

/* Badge 1: AC Services (Top near AC unit & technician) */
.fnh2-badge-ac {
    top: 15%;
    right: 80px;
    animation-delay: 0s;
}

/* Badge 2: Plumbing (Near technician's elbow) */
.fnh2-badge-plumbing {
    top: 48%;
    right: 330px;
    animation-delay: -1.5s;
}

/* Badge 3: Home Cleaning (Bottom sofa area) */
.fnh2-badge-cleaning {
    bottom: 45px;
    right: 390px;
    animation-delay: -3s;
}

/* Badge 4: Electrical Services (Bottom right near plant & cabinet) */
.fnh2-badge-electrical {
    bottom: 95px;
    right: 60px;
    animation-delay: -0.8s;
}

.fnh2-badge-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    flex-shrink: 0;
}
.fnh2-badge-text {
    display: flex;
    flex-direction: column;
}
.fnh2-badge-text strong {
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #0f172a !important;
    line-height: 1.25 !important;
    margin-bottom: 1px !important;
    text-transform: none !important;
}
.fnh2-badge-text span {
    font-size: 10.5px !important;
    font-weight: 400 !important;
    color: #64748b !important;
    line-height: 1.2 !important;
    text-transform: none !important;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
    .fnh2-badge-ac { right: 30px; }
    .fnh2-badge-plumbing { right: 240px; }
    .fnh2-badge-cleaning { right: 280px; bottom: 30px; }
    .fnh2-badge-electrical { right: 30px; bottom: 70px; }
}

@media (max-width: 991px) {
    .fnh2-hero {
        height: auto;
        min-height: auto;
        padding: 70px 0;
        background-position: 85% center;
    }
    .fnh2-left-block {
        max-width: 100%;
        background: linear-gradient(to right, rgba(255,255,255,0.96) 0%, rgba(255,255,255,0.92) 55%, rgba(255,255,255,0.4) 100%);
        padding: 28px 24px;
        border-radius: 20px;
    }
    .fnh2-badge {
        display: none !important;
    }
}

@media (max-width: 600px) {
    .fnh2-hero {
        padding: 50px 0;
        background-position: 88% center;
    }
    .fnh2-wrapper {
        padding: 0 18px;
    }
    .fnh2-left-block {
        padding: 22px 18px;
        border-radius: 16px;
    }
    .fnh2-heading {
        font-size: clamp(26px, 7vw, 36px) !important;
    }
    .fnh2-buttons {
        flex-direction: column;
        width: 100%;
        gap: 12px;
    }
    .fnh2-btn-dark,
    .fnh2-btn-white {
        width: 100%;
        justify-content: center;
    }
}
</style>

<section class="fnh2-hero" id="fnh-hero">
    <div class="fnh2-wrapper">

        <!-- Floating Service Card 1: AC Services -->
        <div class="fnh2-badge fnh2-badge-ac">
            <div class="fnh2-badge-icon" style="background: #eff6ff; color: #1d4ed8;">
                <i class="fa fa-snowflake-o"></i>
            </div>
            <div class="fnh2-badge-text">
                <strong>AC Services</strong>
                <span>Comfort, all year round</span>
            </div>
        </div>

        <!-- Floating Service Card 2: Plumbing -->
        <div class="fnh2-badge fnh2-badge-plumbing">
            <div class="fnh2-badge-icon" style="background: #f0f9ff; color: #0284c7;">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                </svg>
            </div>
            <div class="fnh2-badge-text">
                <strong>Plumbing</strong>
                <span>Every drop matters</span>
            </div>
        </div>

        <!-- Floating Service Card 3: Home Cleaning -->
        <div class="fnh2-badge fnh2-badge-cleaning">
            <div class="fnh2-badge-icon" style="background: #f0fdfa; color: #0d9488;">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3l1.912 5.885h6.188l-5.007 3.638 1.912 5.885L12 14.77l-5.005 3.638 1.912-5.885-5.007-3.638h6.188z"/>
                </svg>
            </div>
            <div class="fnh2-badge-text">
                <strong>Home Cleaning</strong>
                <span>A fresh feeling at home</span>
            </div>
        </div>

        <!-- Floating Service Card 4: Electrical Services -->
        <div class="fnh2-badge fnh2-badge-electrical">
            <div class="fnh2-badge-icon" style="background: #eff6ff; color: #1d4ed8;">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#1d4ed8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                </svg>
            </div>
            <div class="fnh2-badge-text">
                <strong>Electrical Services</strong>
                <span>Powering your everyday</span>
            </div>
        </div>

        <!-- Left Content -->
        <div class="fnh2-left-block">

            <!-- Eyebrow: — YOUR HOME, IN GOOD HANDS -->
            <div class="fnh2-eyebrow">YOUR HOME, IN GOOD HANDS</div>

            <!-- Headline: Title Case (Not uppercase) -->
            <h1 class="fnh2-heading">
                <span class="fnh2-heading-dark">Your Home.</span>
                <span class="fnh2-heading-dark">Your Needs.</span>
                <span class="fnh2-heading-blue">Our Professionals.</span>
            </h1>

            <!-- Subtitle -->
            <p class="fnh2-desc">
                Discover reliable professionals for all your home service needs. From everyday repairs to complete home maintenance, FixNex makes finding the right service easier.
            </p>

            <!-- 2 Buttons -->
            <div class="fnh2-buttons">
                <a href="#fn-services-catalog" class="fnh2-btn-dark">
                    Explore Services
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
                <a href="#fn-merchant-opportunities" class="fnh2-btn-white">
                    Join as Merchant
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     FIXNEX SERVICES CATALOG SHOWCASE SECTION
     "Everything Your Home Needs, In One Place."
     ========================================================= -->
<style>
.fn-catalog-section {
    padding: 75px 0 70px;
    background: #ffffff;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    border-bottom: 1px solid #f1f5f9;
}
.fn-catalog-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 48px;
}
.fn-catalog-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 36px;
    gap: 24px;
    flex-wrap: wrap;
}
.fn-catalog-header-left {
    max-width: 640px;
}
.fn-catalog-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #1e3a8a !important;
    margin-bottom: 12px !important;
}
.fn-catalog-eyebrow::before {
    content: '';
    display: inline-block;
    width: 26px;
    height: 2px;
    background: #1e3a8a;
    border-radius: 2px;
}
.fn-catalog-title {
    font-size: clamp(28px, 3.2vw, 42px) !important;
    font-weight: 800 !important;
    color: #0f172a !important;
    line-height: 1.18 !important;
    letter-spacing: -0.8px !important;
    margin: 0 0 12px 0 !important;
    text-transform: none !important;
}
.fn-catalog-subtitle {
    font-size: 15px !important;
    color: #64748b !important;
    line-height: 1.55 !important;
    margin: 0 !important;
    text-transform: none !important;
    font-weight: 400 !important;
}
.fn-catalog-view-all {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    font-weight: 700;
    color: #0f172a !important;
    text-decoration: none !important;
    transition: all 0.2s ease;
    padding-bottom: 6px;
    white-space: nowrap;
}
.fn-catalog-view-all:hover {
    color: #1d4ed8 !important;
    transform: translateX(3px);
}

/* 5 Cards Grid */
.fn-catalog-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-bottom: 36px;
}
.fn-catalog-card {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #eef2f6;
    box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    text-decoration: none !important;
    transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
}
.fn-catalog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 28px -4px rgba(15, 23, 42, 0.1);
    border-color: #cbd5e1;
}
.fn-catalog-img-wrap {
    width: 100%;
    height: 140px;
    overflow: hidden;
    background: #f8fafc;
    position: relative;
}
.fn-catalog-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.35s ease;
}
.fn-catalog-card:hover .fn-catalog-img-wrap img {
    transform: scale(1.05);
}
.fn-catalog-card-body {
    padding: 14px 16px 16px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.fn-catalog-card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    margin-bottom: 4px;
}
.fn-catalog-card-name {
    font-size: 14.5px !important;
    font-weight: 700 !important;
    color: #0f172a !important;
    margin: 0 !important;
    line-height: 1.3 !important;
    text-transform: none !important;
}
.fn-catalog-card-arrow {
    color: #94a3b8;
    transition: transform 0.2s ease, color 0.2s ease;
    flex-shrink: 0;
}
.fn-catalog-card:hover .fn-catalog-card-arrow {
    color: #1d4ed8;
    transform: translate(2px, -2px);
}
.fn-catalog-card-tag {
    font-size: 12px !important;
    color: #64748b !important;
    margin: 0 !important;
    line-height: 1.35 !important;
    text-transform: none !important;
    font-weight: 400 !important;
}

/* Bottom CTA button row */
.fn-catalog-bottom {
    text-align: center;
}
.fn-catalog-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 26px;
    background: #ffffff;
    color: #0f172a !important;
    border: 1.5px solid #e2e8f0;
    border-radius: 8px;
    font-size: 13.5px;
    font-weight: 600;
    text-decoration: none !important;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
    transition: all 0.2s ease;
}
.fn-catalog-more-btn:hover {
    background: #f8fafc;
    border-color: #cbd5e1;
    color: #1d4ed8 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
}

/* Responsive */
@media (max-width: 1200px) {
    .fn-catalog-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
@media (max-width: 768px) {
    .fn-catalog-container {
        padding: 0 24px;
    }
    .fn-catalog-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
    }
    .fn-catalog-top {
        align-items: flex-start;
    }
}
@media (max-width: 640px) {
    .fn-catalog-section {
        padding: 45px 0 45px !important;
    }
    .fn-catalog-top {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }
    .fn-catalog-container {
        padding: 0 18px;
    }
}
@media (max-width: 480px) {
    .fn-catalog-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
}
</style>

<section class="fn-catalog-section" id="fn-services-catalog">
    <div class="fn-catalog-container">

        <!-- Top Header & Link -->
        <div class="fn-catalog-top">
            <div class="fn-catalog-header-left">
                <div class="fn-catalog-eyebrow">A LITTLE HELP FOR EVERY HOME</div>
                <h2 class="fn-catalog-title">
                    Everything Your Home Needs,<br>In One Place.
                </h2>
                <p class="fn-catalog-subtitle">
                    Explore a wide range of professional home services designed to make everyday life easier.
                </p>
            </div>
            <a href="https://fixnex.in/services" target="_blank" rel="noopener noreferrer" class="fn-catalog-view-all">
                View all services
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>

        <!-- 5 Service Cards Grid -->
        <div class="fn-catalog-grid">

            <!-- Card 1: AC Services -->
            <a href="https://fixnex.in/services/ac-services" target="_blank" rel="noopener noreferrer" class="fn-catalog-card">
                <div class="fn-catalog-img-wrap">
                    <img src="images/fixnex/ac-services-banner.webp?v=3" alt="AC Services">
                </div>
                <div class="fn-catalog-card-body">
                    <div class="fn-catalog-card-header">
                        <h3 class="fn-catalog-card-name">AC Services</h3>
                        <svg class="fn-catalog-card-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                    <p class="fn-catalog-card-tag">A little care. A lot more comfort.</p>
                </div>
            </a>

            <!-- Card 2: Electrical Services -->
            <a href="https://fixnex.in/services/electrical-services" target="_blank" rel="noopener noreferrer" class="fn-catalog-card">
                <div class="fn-catalog-img-wrap">
                    <img src="images/fixnex/electrical-services-banner.webp?v=1" alt="Electrical Services">
                </div>
                <div class="fn-catalog-card-body">
                    <div class="fn-catalog-card-header">
                        <h3 class="fn-catalog-card-name">Electrical Services</h3>
                        <svg class="fn-catalog-card-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                    <p class="fn-catalog-card-tag">Keep your home safely connected.</p>
                </div>
            </a>

            <!-- Card 3: Plumbing -->
            <a href="https://fixnex.in/services/plumbing-services" target="_blank" rel="noopener noreferrer" class="fn-catalog-card">
                <div class="fn-catalog-img-wrap">
                    <img src="images/fixnex/plumbing-banner.webp?v=3" alt="Plumbing">
                </div>
                <div class="fn-catalog-card-body">
                    <div class="fn-catalog-card-header">
                        <h3 class="fn-catalog-card-name">Plumbing</h3>
                        <svg class="fn-catalog-card-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                    <p class="fn-catalog-card-tag">Expert help for every drip and leak.</p>
                </div>
            </a>

            <!-- Card 4: Home Cleaning -->
            <a href="https://fixnex.in/services/deep-home-cleaning" target="_blank" rel="noopener noreferrer" class="fn-catalog-card">
                <div class="fn-catalog-img-wrap">
                    <img src="images/fixnex/home-cleaning-banner.webp?v=3" alt="Home Cleaning">
                </div>
                <div class="fn-catalog-card-body">
                    <div class="fn-catalog-card-header">
                        <h3 class="fn-catalog-card-name">Home Cleaning</h3>
                        <svg class="fn-catalog-card-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                    <p class="fn-catalog-card-tag">A fresh start for every corner.</p>
                </div>
            </a>

            <!-- Card 5: Washing Machine Repair -->
            <a href="https://fixnex.in/services/washing-machine-repair" target="_blank" rel="noopener noreferrer" class="fn-catalog-card">
                <div class="fn-catalog-img-wrap">
                    <img src="images/fixnex/washing-machine-banner.webp?v=3" alt="Washing Machine Repair">
                </div>
                <div class="fn-catalog-card-body">
                    <div class="fn-catalog-card-header">
                        <h3 class="fn-catalog-card-name">Washing Machine Repair</h3>
                        <svg class="fn-catalog-card-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                    <p class="fn-catalog-card-tag">Get your everyday routine back.</p>
                </div>
            </a>

        </div>

        <!-- Bottom "Explore more services ∨" button -->
        <div class="fn-catalog-bottom">
            <a href="https://fixnex.in/services" target="_blank" rel="noopener noreferrer" class="fn-catalog-more-btn">
                Explore more services
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================
     FIXNEX TIMELINE SHOWCASE SECTION (Refined Layout & Smooth Animations)
     "Home Services. Simplified. — From Search to Service"
     ========================================================= -->
<style>
.fn-flow-section {
    padding: 65px 0 75px;
    background: #ffffff;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    overflow: hidden;
    border-bottom: 1px solid #f1f5f9;
}

.fn-flow-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 2;
}

.fn-flow-grid {
    display: grid;
    grid-template-columns: 1fr 1.12fr;
    gap: 60px;
    align-items: center;
}

/* LEFT COLUMN */
.fn-flow-left {
    display: flex;
    flex-direction: column;
}

.fn-flow-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #1e3a8a !important;
    margin-bottom: 14px !important;
}
.fn-flow-eyebrow::before {
    content: '';
    display: inline-block;
    width: 24px;
    height: 2px;
    background: #1e3a8a;
    border-radius: 2px;
}

.fn-flow-title {
    font-size: clamp(32px, 3.8vw, 48px) !important;
    font-weight: 800 !important;
    color: #071530 !important;
    line-height: 1.18 !important;
    letter-spacing: -0.8px !important;
    margin: 0 0 16px 0 !important;
    text-transform: none !important;
}

.fn-flow-desc {
    font-size: 15px !important;
    color: #64748b !important;
    line-height: 1.6 !important;
    margin: 0 0 32px 0 !important;
    max-width: 440px !important;
    font-weight: 400 !important;
    text-transform: none !important;
}

/* Phone Stage */
.fn-flow-phone-stage {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-left: 10px;
}

.fn-flow-phone {
    width: 250px;
    height: 475px;
    background: #0f172a;
    border: 9px solid #1e293b;
    border-radius: 40px;
    box-shadow: 
        0 24px 50px -12px rgba(15, 23, 42, 0.28),
        0 0 0 1px rgba(255, 255, 255, 0.1) inset;
    position: relative;
    overflow: hidden;
    animation: fnTlPhoneFloat 6s ease-in-out infinite;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}
.fn-flow-phone:hover {
    transform: translateY(-4px) scale(1.02);
    box-shadow: 
        0 30px 65px -12px rgba(15, 23, 42, 0.35),
        0 0 0 1px rgba(255, 255, 255, 0.15) inset;
}

@keyframes fnTlPhoneFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-7px); }
}

/* Dynamic Island */
.fn-flow-island {
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 74px;
    height: 18px;
    background: #000000;
    border-radius: 20px;
    z-index: 20;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 6px;
}
.fn-flow-island::after {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #0f172a;
}

/* Screen Cards Container */
.fn-flow-screen-container {
    position: relative;
    width: 100%;
    height: 100%;
    background: #ffffff;
    overflow: hidden;
}

/* Individual Screen Cards */
.fn-screen-card {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background: #f8fafc;
    display: flex;
    flex-direction: column;
    opacity: 0;
    pointer-events: none;
    transform: translateY(12px) scale(0.97);
    transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1), transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    padding: 34px 14px 14px;
    overflow: hidden;
    box-sizing: border-box;
}
.fn-screen-card.active {
    opacity: 1;
    pointer-events: auto;
    transform: translateY(0) scale(1);
}

/* Screen 1: Discover */
.fn-sc-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}
.fn-sc-brand {
    font-size: 13px;
    font-weight: 800;
    color: #071530;
}
.fn-sc-search-bar {
    display: flex;
    align-items: center;
    gap: 7px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 7px 10px;
    font-size: 10.5px;
    color: #64748b;
    margin-bottom: 12px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.03);
}
.fn-sc-hero-promo {
    background: linear-gradient(135deg, #1d4ed8, #2563eb);
    border-radius: 12px;
    padding: 11px 12px;
    color: #ffffff;
    margin-bottom: 12px;
    box-shadow: 0 4px 12px rgba(29, 78, 216, 0.25);
}
.fn-sc-hero-promo span {
    font-size: 8.5px;
    letter-spacing: 1.2px;
    opacity: 0.85;
    text-transform: uppercase;
    font-weight: 700;
}
.fn-sc-hero-promo strong {
    display: block;
    font-size: 13px;
    font-weight: 800;
    margin: 3px 0 0;
}
.fn-sc-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
}
.fn-sc-cat-box {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 8px;
    text-align: center;
    transition: transform 0.2s ease;
}
.fn-sc-cat-box i {
    font-size: 15px;
    color: #1d4ed8;
    display: block;
    margin-bottom: 5px;
}
.fn-sc-cat-box span {
    font-size: 10.5px;
    font-weight: 700;
    color: #071530;
    display: block;
}

/* Screen 2: Choose Pro */
.fn-sc-pro-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 9px 10px;
    margin-bottom: 9px;
    display: flex;
    align-items: center;
    gap: 9px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.03);
}
.fn-sc-pro-card.selected {
    border-color: #1d4ed8;
    background: #eff6ff;
}
.fn-sc-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #1d4ed8;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: 800;
    flex-shrink: 0;
}
.fn-sc-pro-info {
    flex-grow: 1;
}
.fn-sc-pro-info strong {
    display: block;
    font-size: 11.5px;
    color: #071530;
    font-weight: 700;
}
.fn-sc-pro-info small {
    display: block;
    font-size: 9.5px;
    color: #64748b;
    margin-top: 1px;
}
.fn-sc-pro-btn {
    font-size: 9.5px;
    font-weight: 700;
    background: #1d4ed8;
    color: #fff;
    padding: 3px 8px;
    border-radius: 6px;
}

/* Screen 3: Schedule */
.fn-sc-date-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 8px 10px;
    margin-bottom: 9px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.03);
}
.fn-sc-date-pill span {
    font-size: 9px;
    color: #64748b;
    display: block;
    text-transform: uppercase;
    font-weight: 600;
}
.fn-sc-date-pill strong {
    font-size: 11.5px;
    color: #071530;
    font-weight: 700;
}
.fn-sc-slot {
    background: #eff6ff;
    border: 1.5px solid #1d4ed8;
    color: #1d4ed8;
    border-radius: 8px;
    padding: 8px 10px;
    font-size: 11px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 9px;
}
.fn-sc-btn-confirm {
    background: #071530;
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    margin-top: 8px;
    box-shadow: 0 4px 12px rgba(7, 21, 48, 0.2);
}

/* Screen 4: Live Service */
.fn-sc-status-box {
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 8px;
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #065f46;
    font-size: 10.5px;
    font-weight: 700;
    margin-bottom: 12px;
}
.fn-sc-map-mock {
    height: 140px;
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.fn-sc-map-pin {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #1d4ed8;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    box-shadow: 0 0 0 5px rgba(29, 78, 216, 0.25);
    animation: fnPinPulse 2s infinite;
}
@keyframes fnPinPulse {
    0% { box-shadow: 0 0 0 0 rgba(29, 78, 216, 0.5); }
    70% { box-shadow: 0 0 0 10px rgba(29, 78, 216, 0); }
    100% { box-shadow: 0 0 0 0 rgba(29, 78, 216, 0); }
}

/* RIGHT COLUMN - TIMELINE STEPS (100% SCOPED & ALIGNED) */
.fn-flow-right {
    position: relative;
    margin-top: 75px;
}

.fn-timeline-track {
    position: absolute;
    top: 22px;
    bottom: 24px;
    left: 21px;
    width: 2px;
    background: #e2e8f0;
    z-index: 1;
}

.fn-timeline-progress-bar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 0px;
    background: #071530;
    border-radius: 2px;
    transition: height 0.38s cubic-bezier(0.16, 1, 0.3, 1);
}

.fn-timeline-list {
    display: flex !important;
    flex-direction: column !important;
    gap: 16px !important;
    position: relative;
    z-index: 2;
    padding: 0 !important;
    margin: 0 !important;
}

/* Individual Step Item (Strictly Left-Aligned) */
.fn-tl-item {
    display: flex !important;
    flex-direction: row !important;
    align-items: flex-start !important;
    text-align: left !important;
    gap: 20px !important;
    cursor: pointer;
    padding: 12px 16px 12px 0 !important;
    border-radius: 14px;
    position: relative;
    z-index: 2;
    transition: transform 0.26s cubic-bezier(0.16, 1, 0.3, 1), background 0.26s ease;
    user-select: none;
}
.fn-tl-item:hover {
    transform: translateX(4px);
}

/* Badge (Circle with Step Number) */
.fn-tl-badge {
    width: 44px !important;
    height: 44px !important;
    border-radius: 50% !important;
    background: #ffffff !important;
    border: 2px solid #e2e8f0 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 13.5px !important;
    font-weight: 800 !important;
    color: #64748b !important;
    flex-shrink: 0 !important;
    position: relative !important;
    z-index: 3 !important;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.06) !important;
}

/* Active Step Badge */
.fn-tl-item.active .fn-tl-badge {
    background: #071530 !important;
    border-color: #071530 !important;
    color: #ffffff !important;
    transform: scale(1.1) !important;
    box-shadow: 0 6px 20px rgba(7, 21, 48, 0.32), 0 0 0 4px rgba(37, 99, 235, 0.14) !important;
}

/* Step Content Block (Strictly Left-Aligned) */
.fn-tl-content {
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    text-align: left !important;
    padding-top: 3px !important;
    flex-grow: 1 !important;
}

.fn-tl-category {
    font-size: 11px !important;
    font-weight: 700 !important;
    letter-spacing: 1.5px !important;
    text-transform: uppercase !important;
    color: #94a3b8 !important;
    margin-bottom: 3px !important;
    text-align: left !important;
    transition: color 0.25s ease !important;
}
.fn-tl-item.active .fn-tl-category {
    color: #1d4ed8 !important;
}

.fn-tl-title {
    font-size: 18px !important;
    font-weight: 700 !important;
    color: #334155 !important;
    line-height: 1.3 !important;
    margin: 0 0 5px 0 !important;
    text-transform: none !important;
    text-align: left !important;
    transition: color 0.25s ease !important;
}
.fn-tl-item.active .fn-tl-title {
    color: #071530 !important;
    font-weight: 800 !important;
}

.fn-tl-desc {
    font-size: 14px !important;
    color: #64748b !important;
    line-height: 1.55 !important;
    margin: 0 !important;
    max-width: 460px !important;
    text-transform: none !important;
    font-weight: 400 !important;
    text-align: left !important;
    transition: color 0.25s ease !important;
}
.fn-tl-item.active .fn-tl-desc {
    color: #475569 !important;
}

/* Responsive */
@media (max-width: 991px) {
    .fn-flow-grid {
        grid-template-columns: 1fr;
        gap: 35px;
    }
    .fn-flow-right {
        margin-top: 0;
    }
    .fn-flow-phone-stage {
        justify-content: center;
        padding-left: 0;
    }
}
/* Hide Phone Mockup Screen specifically on Mobile View */
@media (max-width: 768px) {
    .fn-flow-phone-stage {
        display: none !important;
        visibility: hidden !important;
        height: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: hidden !important;
    }
    .fn-flow-grid {
        gap: 24px !important;
    }
    .fn-flow-desc {
        margin-bottom: 10px !important;
    }
}
@media (max-width: 600px) {
    .fn-flow-section {
        padding: 40px 0 45px !important;
    }
    .fn-flow-container {
        padding: 0 20px;
    }
    .fn-tl-item {
        gap: 14px !important;
    }
    .fn-tl-badge {
        width: 38px !important;
        height: 38px !important;
        font-size: 12px !important;
    }
    .fn-timeline-track {
        left: 18px;
    }
    .fn-tl-title {
        font-size: 16px !important;
    }
}
</style>

<section class="fn-flow-section" id="fn-how-it-works-timeline">
    <div class="fn-flow-container">
        <div class="fn-flow-grid">

            <!-- LEFT: Title, Description, and Phone Showcase -->
            <div class="fn-flow-left">
                <div class="fn-flow-eyebrow">FROM SEARCH TO SERVICE</div>
                <h2 class="fn-flow-title">Home Services.<br>Simplified.</h2>
                <p class="fn-flow-desc">
                    A better way to care for your home.<br>Just a few simple steps.
                </p>

                <!-- Phone Stage -->
                <div class="fn-flow-phone-stage">
                    <div class="fn-flow-phone" id="fnTimelinePhone">
                        <!-- Dynamic Island Notch -->
                        <div class="fn-flow-island"></div>

                        <!-- Screens Container (Smoothly Transitions with Active Step) -->
                        <div class="fn-flow-screen-container">
                            
                            <!-- Screen 01: Discover & Categories (Real App Search Screen) -->
                            <div class="fn-screen-card active" id="fnCard1" style="padding: 0 !important; overflow: hidden; background: #f4f7fe;">
                                <img 
                                    src="images/fixnex/timeline-screen-discover.png?v=2" 
                                    alt="FixNex Discover Services" 
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top; display: block;"
                                >
                            </div>

                            <!-- Screen 02: Meet Local Verified Professionals (Explore & Service Details) -->
                            <div class="fn-screen-card" id="fnCard2" style="padding: 0 !important; overflow: hidden; background: #f4f7fe;">
                                <img 
                                    src="images/fixnex/timeline-screen-explore.png?v=1" 
                                    alt="FixNex Meet Verified Professionals" 
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top; display: block;"
                                >
                            </div>

                            <!-- Screen 03: Make Booking Simple (Booking Parameters) -->
                            <div class="fn-screen-card" id="fnCard3" style="padding: 0 !important; overflow: hidden; background: #f4f7fe;">
                                <img 
                                    src="images/fixnex/timeline-screen-book.png?v=1" 
                                    alt="FixNex Book Service Parameters" 
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top; display: block;"
                                >
                            </div>

                            <!-- Screen 04: Leave it to Professionals -->
                            <div class="fn-screen-card" id="fnCard4">
                                <div class="fn-sc-header">
                                    <span class="fn-sc-brand">Service Status</span>
                                    <span style="font-size: 9px; color:#059669; font-weight:700;">● Completed</span>
                                </div>
                                <div class="fn-sc-status-box">
                                    <i class="fa fa-check-circle" style="font-size: 16px;"></i>
                                    <div>Service Completed &amp; Verified!</div>
                                </div>
                                <div class="fn-sc-map-mock">
                                    <div class="fn-sc-map-pin">
                                        <i class="fa fa-check"></i>
                                    </div>
                                </div>
                                <div style="font-size: 11px; color:#071530; font-weight: 700; text-align:center;">
                                    Safe Doorstep Care with FixNex
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Timeline Steps (Clickable & Interactive) -->
            <div class="fn-flow-right">
                <div class="fn-timeline-track" id="fnTimelineTrack">
                    <div class="fn-timeline-progress-bar" id="fnTimelineProgress"></div>
                </div>

                <div class="fn-timeline-list" id="fnTimelineList">

                    <!-- Step 01 -->
                    <div class="fn-tl-item active" data-step="1">
                        <div class="fn-tl-badge">01</div>
                        <div class="fn-tl-content">
                            <div class="fn-tl-category">DISCOVER</div>
                            <h3 class="fn-tl-title">Find what your home needs.</h3>
                            <p class="fn-tl-desc">Search for the home service you need, right in your neighbourhood.</p>
                        </div>
                    </div>

                    <!-- Step 02 -->
                    <div class="fn-tl-item" data-step="2">
                        <div class="fn-tl-badge">02</div>
                        <div class="fn-tl-content">
                            <div class="fn-tl-category">EXPLORE</div>
                            <h3 class="fn-tl-title">Meet your local professionals.</h3>
                            <p class="fn-tl-desc">Browse available service providers and explore their profiles.</p>
                        </div>
                    </div>

                    <!-- Step 03 -->
                    <div class="fn-tl-item" data-step="3">
                        <div class="fn-tl-badge">03</div>
                        <div class="fn-tl-content">
                            <div class="fn-tl-category">BOOK</div>
                            <h3 class="fn-tl-title">Make the next step simple.</h3>
                            <p class="fn-tl-desc">Choose a suitable professional and submit your booking request.</p>
                        </div>
                    </div>

                    <!-- Step 04 -->
                    <div class="fn-tl-item" data-step="4">
                        <div class="fn-tl-badge">04</div>
                        <div class="fn-tl-content">
                            <div class="fn-tl-category">GET SERVICE</div>
                            <h3 class="fn-tl-title">Leave it to the professionals.</h3>
                            <p class="fn-tl-desc">Receive booking updates and get your home service completed.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Merchant Section Dynamic 3D Scroll Tilt & Mouse Tracking Animation -->
<script>
(function() {
    var section = document.getElementById("fn-merchant-opportunities");
    if (!section) return;
    var card = section.querySelector(".fn-merch-card");
    var halo = section.querySelector(".fn-merch-glow-halo");
    if (!card) return;

    var curX = 0, curY = 0, curZ = 0, curS = 1;
    var targetX = 0, targetY = 0, targetZ = 0, targetS = 1;
    var isVisible = false;
    var rafId = null;

    var mouseX = 0, mouseY = 0;
    var isHovered = false;

    function calcTilt() {
        var rect = section.getBoundingClientRect();
        var winH = window.innerHeight || document.documentElement.clientHeight;
        
        var sectionCenter = rect.top + rect.height / 2;
        var screenCenter = winH / 2;
        
        // factor = 0 when section is in viewport center (Straight / Seedha 0deg)
        // factor > 0 when approaching from bottom (Tedha / Tilted forward)
        // factor < 0 when scrolling past it downwards (Tedha in opposite exit angle)
        var factor = (sectionCenter - screenCenter) / (winH * 0.65);
        if (factor > 1.2) factor = 1.2;
        if (factor < -1.2) factor = -1.2;

        var isMobile = window.innerWidth <= 768;
        var maxTiltY = isMobile ? 6 : 10;
        var maxTiltX = isMobile ? 4 : 7;

        targetX = factor * -maxTiltX + (isHovered ? mouseY * 6 : 0);
        targetY = factor * maxTiltY + (isHovered ? mouseX * 8 : 0);
        targetZ = (1 - Math.min(Math.abs(factor), 1)) * 30;
        targetS = 1 - Math.min(Math.abs(factor), 1) * 0.03;
    }

    function loop() {
        if (!isVisible) return;

        // Smooth fluid momentum lerp (0.1)
        curX += (targetX - curX) * 0.1;
        curY += (targetY - curY) * 0.1;
        curZ += (targetZ - curZ) * 0.1;
        curS += (targetS - curS) * 0.1;

        var shadowX = (-curY * 1.3).toFixed(1);
        var shadowY = (24 + Math.abs(curX) * 0.8).toFixed(1);
        var shadowBlur = (55 + curZ * 0.8).toFixed(1);

        card.style.transform = "perspective(1200px) translateY(" + ((-curX * 1.4)).toFixed(1) + "px) translateZ(" + curZ.toFixed(1) + "px) rotateX(" + curX.toFixed(2) + "deg) rotateY(" + curY.toFixed(2) + "deg) scale(" + curS.toFixed(3) + ")";
        card.style.boxShadow = shadowX + "px " + shadowY + "px " + shadowBlur + "px -12px rgba(0, 0, 0, 0.65), 0 0 35px rgba(56, 189, 248, " + (0.15 + (curZ / 100)).toFixed(2) + ")";

        if (halo) {
            halo.style.transform = "translate(" + (-curY * 1.5).toFixed(1) + "px, " + (curX * 1.5).toFixed(1) + "px) scale(" + (0.95 + (curZ / 120)).toFixed(2) + ")";
        }

        rafId = requestAnimationFrame(loop);
    }

    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    isVisible = true;
                    calcTilt();
                    if (!rafId) rafId = requestAnimationFrame(loop);
                } else {
                    isVisible = false;
                    if (rafId) {
                        cancelAnimationFrame(rafId);
                        rafId = null;
                    }
                }
            });
        }, { threshold: [0, 0.1, 0.25, 0.5, 0.75, 1.0], rootMargin: "100px 0px" });
        observer.observe(section);
    } else {
        isVisible = true;
        rafId = requestAnimationFrame(loop);
    }

    window.addEventListener("scroll", function() {
        if (isVisible) calcTilt();
    }, { passive: true });

    card.addEventListener("mousemove", function(e) {
        var rect = card.getBoundingClientRect();
        mouseX = (e.clientX - rect.left) / rect.width - 0.5;
        mouseY = -((e.clientY - rect.top) / rect.height - 0.5);
        isHovered = true;
        calcTilt();
    });
    card.addEventListener("mouseleave", function() {
        mouseX = 0;
        mouseY = 0;
        isHovered = false;
        calcTilt();
    });
})();
</script>

<!-- Timeline Interactive Animation Script (Precise Alignment & Clean Transitions) -->
<script>
(function() {
    var section = document.getElementById('fn-how-it-works-timeline');
    if (!section) return;

    var stepItems = section.querySelectorAll('.fn-tl-item');
    var screenCards = section.querySelectorAll('.fn-screen-card');
    var progressBar = document.getElementById('fnTimelineProgress');
    var track = document.getElementById('fnTimelineTrack');
    var currentStep = 1;
    var autoPlayTimer = null;
    var isPaused = false;
    var resumeTimer = null;

    function updateProgressBar(stepIndex) {
        if (!progressBar || !track || !stepItems[stepIndex]) return;
        var badge = stepItems[stepIndex].querySelector('.fn-tl-badge');
        if (!badge) return;

        var trackRect = track.getBoundingClientRect();
        var badgeRect = badge.getBoundingClientRect();

        var centerPos = (badgeRect.top + badgeRect.height / 2) - trackRect.top;
        if (centerPos < 0) centerPos = 0;
        progressBar.style.height = centerPos + 'px';
    }

    function activateStep(stepNum) {
        currentStep = stepNum;

        stepItems.forEach(function(item, idx) {
            if ((idx + 1) === stepNum) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });

        screenCards.forEach(function(card, idx) {
            if ((idx + 1) === stepNum) {
                card.classList.add('active');
            } else {
                card.classList.remove('active');
            }
        });

        updateProgressBar(stepNum - 1);
    }

    function startAutoPlay() {
        stopAutoPlay();
        autoPlayTimer = setInterval(function() {
            if (!isPaused) {
                var next = currentStep >= stepItems.length ? 1 : currentStep + 1;
                activateStep(next);
            }
        }, 3400);
    }

    function stopAutoPlay() {
        if (autoPlayTimer) clearInterval(autoPlayTimer);
    }

    function pauseAndResumeAutoPlay() {
        isPaused = true;
        if (resumeTimer) clearTimeout(resumeTimer);
        resumeTimer = setTimeout(function() {
            isPaused = false;
        }, 5500);
    }

    stepItems.forEach(function(item, idx) {
        var step = idx + 1;
        item.addEventListener('click', function() {
            activateStep(step);
            pauseAndResumeAutoPlay();
        });

        item.addEventListener('mouseenter', function() {
            activateStep(step);
            pauseAndResumeAutoPlay();
        });
    });

    // Initialize
    activateStep(1);
    startAutoPlay();

    window.addEventListener('resize', function() {
        updateProgressBar(currentStep - 1);
    });
})();
</script>

<!-- =========================================================
     FIXNEX EXPERIENCE SECTION
     "Everything You Need, Right at Your Fingertips."
     ========================================================= -->
<style>
.fn-ft-section {
    padding: 70px 0 75px;
    background: #ffffff;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    overflow: hidden;
    border-bottom: 1px solid #f1f5f9;
}

.fn-ft-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 2;
}

.fn-ft-grid {
    display: grid;
    grid-template-columns: 1fr 1.15fr;
    gap: 50px;
    align-items: center;
}

/* LEFT COLUMN: Visual Card Stage */
.fn-ft-left {
    display: flex;
    justify-content: center;
    align-items: center;
}

.fn-ft-stage {
    position: relative;
    width: 100%;
    max-width: 440px;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fnFtFloat 6s ease-in-out infinite;
    transition: transform 0.35s ease;
}
.fn-ft-stage:hover {
    transform: translateY(-6px) scale(1.02);
}

@keyframes fnFtFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.fn-ft-backdrop {
    width: 100%;
    max-width: 390px;
    padding: 32px 26px;
    background: linear-gradient(145deg, #eaf2fd 0%, #f1f6fd 100%);
    border-radius: 36px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    transform-style: flat;
    box-shadow: 
        0 24px 50px -12px rgba(37, 99, 235, 0.12),
        0 0 0 1px rgba(219, 234, 254, 0.7);
}

.fn-ft-phone {
    width: 234px;
    background: #0f172a;
    border: 7px solid #0f172a;
    border-radius: 32px;
    position: relative;
    overflow: hidden;
    box-shadow: 
        0 22px 48px -10px rgba(15, 23, 42, 0.35),
        0 0 0 1px rgba(255, 255, 255, 0.1) inset;
    transform-origin: center center;
    transform-style: flat;
    transform: perspective(1200px) translateZ(40px);
    will-change: transform, box-shadow;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    isolation: isolate;
}

.fn-ft-screen-img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 25px;
}

/* Floating Badges on the Outside of the Stage */
.fn-ft-badge {
    position: absolute;
    background: #ffffff;
    border-radius: 14px;
    padding: 10px 15px;
    box-shadow: 
        0 16px 36px -8px rgba(15, 23, 42, 0.18),
        0 0 0 1px rgba(226, 232, 240, 0.9);
    display: flex;
    align-items: center;
    gap: 11px;
    z-index: 5;
    white-space: nowrap;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    user-select: none;
}
.fn-ft-badge:hover {
    box-shadow: 
        0 20px 42px -6px rgba(15, 23, 42, 0.22),
        0 0 0 1px rgba(37, 99, 235, 0.3);
}

.fn-ft-badge-left {
    left: -48px;
    top: 55px;
    animation: fnFtFloatBadge1 4.5s ease-in-out infinite;
}

.fn-ft-badge-right {
    right: -48px;
    bottom: 60px;
    animation: fnFtFloatBadge2 5.5s ease-in-out infinite;
}

@keyframes fnFtFloatBadge1 {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

@keyframes fnFtFloatBadge2 {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(8px); }
}

.fn-ft-badge-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #eff6ff;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1d4ed8;
    font-size: 15px;
    flex-shrink: 0;
}
.fn-ft-badge-icon .fa-mobile {
    font-size: 19px;
}

.fn-ft-badge-info strong {
    display: block;
    font-size: 13px;
    font-weight: 800;
    color: #071530;
    line-height: 1.25;
}
.fn-ft-badge-info small {
    display: block;
    font-size: 10.5px;
    color: #64748b;
    line-height: 1.3;
    margin-top: 2px;
}

/* RIGHT COLUMN: Content */
.fn-ft-right {
    display: flex;
    flex-direction: column;
}

.fn-ft-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #1e3a8a !important;
    margin-bottom: 14px !important;
}
.fn-ft-eyebrow::before {
    content: '';
    display: inline-block;
    width: 26px;
    height: 2px;
    background: #1e3a8a;
    border-radius: 2px;
}

.fn-ft-title {
    font-size: clamp(30px, 3.6vw, 46px) !important;
    font-weight: 800 !important;
    color: #0f172a !important;
    line-height: 1.18 !important;
    letter-spacing: -1px !important;
    margin: 0 0 16px 0 !important;
    text-transform: none !important;
}

.fn-ft-desc {
    font-size: 15px !important;
    color: #64748b !important;
    line-height: 1.65 !important;
    margin: 0 0 32px 0 !important;
    max-width: 520px !important;
    font-weight: 400 !important;
    text-transform: none !important;
}

/* 2-Column Feature List */
.fn-ft-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px 28px;
    margin-bottom: 36px;
    max-width: 480px;
}

.fn-ft-feature-item {
    display: flex;
    align-items: center;
    gap: 11px;
    font-size: 14px;
    font-weight: 600;
    color: #1e293b;
    transition: transform 0.2s ease, color 0.2s ease;
}
.fn-ft-feature-item:hover {
    transform: translateX(4px);
    color: #1d4ed8;
}

.fn-ft-icon-box {
    width: 28px;
    height: 28px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    color: #1d4ed8;
    background: #eff6ff;
    flex-shrink: 0;
}

/* CTA Buttons Row */
.fn-ft-ctas {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}

.fn-ft-btn-play {
    display: inline-flex;
    align-items: center;
    gap: 11px;
    background: #0b1736;
    color: #ffffff !important;
    padding: 10px 22px;
    border-radius: 10px;
    text-decoration: none !important;
    box-shadow: 0 4px 14px rgba(11, 23, 54, 0.22);
    transition: all 0.22s ease;
}
.fn-ft-btn-play:hover {
    background: #1d4ed8;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(29, 78, 216, 0.3);
    color: #ffffff !important;
}

.fn-ft-btn-play-text {
    display: flex;
    flex-direction: column;
    text-align: left;
    line-height: 1.15;
}
.fn-ft-btn-play-text small {
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 0.6px;
    opacity: 0.85;
    text-transform: uppercase;
}
.fn-ft-btn-play-text span {
    font-size: 14px;
    font-weight: 800;
    color: #ffffff;
}

.fn-ft-btn-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    font-weight: 700;
    color: #0f172a !important;
    text-decoration: none !important;
    padding: 10px 16px;
    transition: all 0.2s ease;
}
.fn-ft-btn-link:hover {
    color: #1d4ed8 !important;
    transform: translateX(3px);
}

/* Responsive */
@media (max-width: 991px) {
    .fn-ft-grid {
        grid-template-columns: 1fr;
        gap: 50px;
    }
    .fn-ft-stage {
        max-width: 360px;
    }
}
@media (max-width: 600px) {
    .fn-ft-section {
        padding: 45px 0 45px !important;
    }
    .fn-ft-container {
        padding: 0 20px;
    }
    .fn-ft-features {
        grid-template-columns: 1fr;
        gap: 14px;
    }
    .fn-ft-backdrop {
        max-width: 290px;
        padding: 18px 12px;
        border-radius: 28px;
    }
    .fn-ft-phone {
        width: 195px;
        border-radius: 26px;
    }
    .fn-ft-badge-left {
        left: -10px;
        top: 20px;
        transform: scale(0.88);
    }
    .fn-ft-badge-right {
        right: -10px;
        bottom: 25px;
        transform: scale(0.88);
    }
}
@media (max-width: 480px) {
    .fn-ft-stage {
        max-width: 310px;
    }
    .fn-ft-backdrop {
        max-width: 265px;
        padding: 16px 10px;
    }
    .fn-ft-phone {
        width: 180px;
        border-width: 6px;
    }
    .fn-ft-badge {
        padding: 8px 11px;
        font-size: 11px;
    }
    .fn-ft-badge-icon {
        width: 30px;
        height: 30px;
    }
    .fn-ft-badge-left {
        left: -8px;
        top: 15px;
        transform: scale(0.82);
    }
    .fn-ft-badge-right {
        right: -8px;
        bottom: 20px;
        transform: scale(0.82);
    }
    .fn-ft-ctas {
        flex-direction: column;
        align-items: stretch;
        gap: 12px;
    }
    .fn-ft-btn-play {
        width: 100%;
        justify-content: center;
    }
    .fn-ft-btn-link {
        width: 100%;
        justify-content: center;
        text-align: center;
    }
}
</style>

<section class="fn-ft-section" id="fn-fingertips-experience">
    <div class="fn-ft-container">
        <div class="fn-ft-grid">

            <!-- LEFT: Rounded Stage with App Phone & Floating Badges -->
            <div class="fn-ft-left">
                <div class="fn-ft-stage">
                    <!-- Light-Blue Rounded Stage Backdrop -->
                    <div class="fn-ft-backdrop">
                        <!-- High-Definition Phone Mockup -->
                        <div class="fn-ft-phone">
                            <!-- Real App Screen: Find Trusted Services Near You (Full uncropped view) -->
                            <img src="images/fixnex/fingertips-screen.png?v=2" alt="FixNex Find Trusted Services Screen" class="fn-ft-screen-img">
                        </div>
                    </div>
                    
                    <!-- Floating Badge: Left (Explore Services) -->
                    <div class="fn-ft-badge fn-ft-badge-left">
                        <div class="fn-ft-badge-icon">
                            <i class="fa fa-th-large"></i>
                        </div>
                        <div class="fn-ft-badge-info">
                            <strong>Explore Services</strong>
                            <small>Find what your home needs</small>
                        </div>
                    </div>

                    <!-- Floating Badge: Right (FixNex on the go) -->
                    <div class="fn-ft-badge fn-ft-badge-right">
                        <div class="fn-ft-badge-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="fn-ft-badge-info">
                            <strong>FixNex on the go</strong>
                            <small>Your home, always connected</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Content -->
            <div class="fn-ft-right">
                <!-- Eyebrow -->
                <div class="fn-ft-eyebrow">THE FIXNEX EXPERIENCE</div>

                <!-- Headline -->
                <h2 class="fn-ft-title">
                    Everything You Need,<br>Right at Your Fingertips.
                </h2>

                <!-- Subtitle -->
                <p class="fn-ft-desc">
                    Discover services, explore professional profiles and keep track of your booking requests. Your next home service is just a few taps away.
                </p>

                <!-- 2-Column Features Grid -->
                <div class="fn-ft-features">
                    <div class="fn-ft-feature-item">
                        <div class="fn-ft-icon-box">
                            <i class="fa fa-th-large"></i>
                        </div>
                        <span>Service categories</span>
                    </div>

                    <div class="fn-ft-feature-item">
                        <div class="fn-ft-icon-box">
                            <i class="fa fa-user-circle-o"></i>
                        </div>
                        <span>Provider profiles</span>
                    </div>

                    <div class="fn-ft-feature-item">
                        <div class="fn-ft-icon-box">
                            <i class="fa fa-clipboard"></i>
                        </div>
                        <span>Booking requests</span>
                    </div>

                    <div class="fn-ft-feature-item">
                        <div class="fn-ft-icon-box">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <span>My bookings</span>
                    </div>

                    <div class="fn-ft-feature-item">
                        <div class="fn-ft-icon-box">
                            <i class="fa fa-bell-o"></i>
                        </div>
                        <span>Booking updates</span>
                    </div>

                    <div class="fn-ft-feature-item">
                        <div class="fn-ft-icon-box">
                            <i class="fa fa-search"></i>
                        </div>
                        <span>Service discovery</span>
                    </div>
                </div>

                <!-- CTA Row: Google Play + Explore online -->
                <div class="fn-ft-ctas">
                    <a href="https://play.google.com/store/apps/details?id=fixnex.myapp&amp;pcampaignid=web_share" target="_blank" rel="noopener noreferrer" class="fn-ft-btn-play">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M3.6 1.8L13.8 12 3.6 22.2c-.4-.4-.6-1-.6-1.7V3.5c0-.7.2-1.3.6-1.7z" fill="#00C1A6"/>
                            <path d="M17.2 8.6L13.8 12l3.4 3.4 3.9-2.2c1.1-.6 1.1-1.7 0-2.4l-3.9-2.2z" fill="#FFD400"/>
                            <path d="M3.6 1.8l10.2 10.2 3.4-3.4L6.1.5C5.1 0 4.1.4 3.6 1.8z" fill="#00D2FF"/>
                            <path d="M17.2 15.4l-3.4-3.4L3.6 22.2c.5 1.4 1.5 1.8 2.5 1.3l11.1-8.1z" fill="#FF3333"/>
                        </svg>
                        <div class="fn-ft-btn-play-text">
                            <small>GET IT ON</small>
                            <span>Google Play</span>
                        </div>
                    </a>

                    <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="fn-ft-btn-link">
                        Explore online
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Merchant Section Dynamic 3D Scroll Tilt & Mouse Tracking Animation -->
<script>
(function() {
    var section = document.getElementById("fn-merchant-opportunities");
    if (!section) return;
    var card = section.querySelector(".fn-merch-card");
    var halo = section.querySelector(".fn-merch-glow-halo");
    if (!card) return;

    var curX = 0, curY = 0, curZ = 0, curS = 1;
    var targetX = 0, targetY = 0, targetZ = 0, targetS = 1;
    var isVisible = false;
    var rafId = null;

    var mouseX = 0, mouseY = 0;
    var isHovered = false;

    function calcTilt() {
        var rect = section.getBoundingClientRect();
        var winH = window.innerHeight || document.documentElement.clientHeight;
        
        var sectionCenter = rect.top + rect.height / 2;
        var screenCenter = winH / 2;
        
        // factor = 0 when section is in viewport center (Straight / Seedha 0deg)
        // factor > 0 when approaching from bottom (Tedha / Tilted forward)
        // factor < 0 when scrolling past it downwards (Tedha in opposite exit angle)
        var factor = (sectionCenter - screenCenter) / (winH * 0.65);
        if (factor > 1.2) factor = 1.2;
        if (factor < -1.2) factor = -1.2;

        var isMobile = window.innerWidth <= 768;
        var maxTiltY = isMobile ? 6 : 10;
        var maxTiltX = isMobile ? 4 : 7;

        targetX = factor * -maxTiltX + (isHovered ? mouseY * 6 : 0);
        targetY = factor * maxTiltY + (isHovered ? mouseX * 8 : 0);
        targetZ = (1 - Math.min(Math.abs(factor), 1)) * 30;
        targetS = 1 - Math.min(Math.abs(factor), 1) * 0.03;
    }

    function loop() {
        if (!isVisible) return;

        // Smooth fluid momentum lerp (0.1)
        curX += (targetX - curX) * 0.1;
        curY += (targetY - curY) * 0.1;
        curZ += (targetZ - curZ) * 0.1;
        curS += (targetS - curS) * 0.1;

        var shadowX = (-curY * 1.3).toFixed(1);
        var shadowY = (24 + Math.abs(curX) * 0.8).toFixed(1);
        var shadowBlur = (55 + curZ * 0.8).toFixed(1);

        card.style.transform = "perspective(1200px) translateY(" + ((-curX * 1.4)).toFixed(1) + "px) translateZ(" + curZ.toFixed(1) + "px) rotateX(" + curX.toFixed(2) + "deg) rotateY(" + curY.toFixed(2) + "deg) scale(" + curS.toFixed(3) + ")";
        card.style.boxShadow = shadowX + "px " + shadowY + "px " + shadowBlur + "px -12px rgba(0, 0, 0, 0.65), 0 0 35px rgba(56, 189, 248, " + (0.15 + (curZ / 100)).toFixed(2) + ")";

        if (halo) {
            halo.style.transform = "translate(" + (-curY * 1.5).toFixed(1) + "px, " + (curX * 1.5).toFixed(1) + "px) scale(" + (0.95 + (curZ / 120)).toFixed(2) + ")";
        }

        rafId = requestAnimationFrame(loop);
    }

    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    isVisible = true;
                    calcTilt();
                    if (!rafId) rafId = requestAnimationFrame(loop);
                } else {
                    isVisible = false;
                    if (rafId) {
                        cancelAnimationFrame(rafId);
                        rafId = null;
                    }
                }
            });
        }, { threshold: [0, 0.1, 0.25, 0.5, 0.75, 1.0], rootMargin: "100px 0px" });
        observer.observe(section);
    } else {
        isVisible = true;
        rafId = requestAnimationFrame(loop);
    }

    window.addEventListener("scroll", function() {
        if (isVisible) calcTilt();
    }, { passive: true });

    card.addEventListener("mousemove", function(e) {
        var rect = card.getBoundingClientRect();
        mouseX = (e.clientX - rect.left) / rect.width - 0.5;
        mouseY = -((e.clientY - rect.top) / rect.height - 0.5);
        isHovered = true;
        calcTilt();
    });
    card.addEventListener("mouseleave", function() {
        mouseX = 0;
        mouseY = 0;
        isHovered = false;
        calcTilt();
    });
})();
</script>

<!-- Fingertips Dynamic 3D Scroll Tilt Animation (Tedha jab scroll karke aao -> Seedha center me -> Tedha jab niche jao) -->
<script>
(function() {
    var section = document.getElementById('fn-fingertips-experience');
    if (!section) return;
    var phone = section.querySelector('.fn-ft-phone');
    if (!phone) return;

    var curX = 0, curY = 0, curZ = 0, curS = 1;
    var targetX = 0, targetY = 0, targetZ = 0, targetS = 1;
    var isVisible = false;
    var rafId = null;

    function calcTilt() {
        var rect = section.getBoundingClientRect();
        var winH = window.innerHeight || document.documentElement.clientHeight;
        
        // Center of section vs center of viewport
        var sectionCenter = rect.top + rect.height / 2;
        var screenCenter = winH / 2;
        
        // factor = 0 when section center aligns with screen center (Seedha / 0deg Straight)
        // factor > 0 when section is below screen center (scrolling down towards it -> Tedha / Tilted)
        // factor < 0 when section is above screen center (scrolling past it downwards -> Tedha / Tilted in exit direction)
        var factor = (sectionCenter - screenCenter) / (winH * 0.65);
        
        // Clamp factor between -1.15 and 1.15
        if (factor > 1.15) factor = 1.15;
        if (factor < -1.15) factor = -1.15;

        var isMobile = window.innerWidth <= 768;
        var maxTiltY = isMobile ? 8 : 13;
        var maxTiltX = isMobile ? 5 : 8;
        var maxTiltZ = isMobile ? 2 : 4;

        // When approaching (factor > 0): tilted / tedha
        // When in center (factor == 0): completely straight / seedha (0deg)
        // When scrolling down past (factor < 0): tilted / tedha again
        targetX = factor * maxTiltX;
        targetY = factor * -maxTiltY;
        targetZ = factor * -maxTiltZ;
        targetS = 1 - Math.min(Math.abs(factor), 1) * 0.03;
    }

    function loop() {
        if (!isVisible) return;
        
        // Smooth lerp (0.12) for buttery fluid momentum
        curX += (targetX - curX) * 0.12;
        curY += (targetY - curY) * 0.12;
        curZ += (targetZ - curZ) * 0.12;
        curS += (targetS - curS) * 0.12;

        var shadowX = (-curY * 1.1).toFixed(1);
        var shadowY = (22 + Math.abs(curX) * 0.6).toFixed(1);
        var shadowBlur = (40 + Math.abs(curX) * 0.5).toFixed(1);

        phone.style.transform = 'perspective(1200px) translateZ(40px) rotateX(' + curX.toFixed(2) + 'deg) rotateY(' + curY.toFixed(2) + 'deg) rotateZ(' + curZ.toFixed(2) + 'deg) scale(' + curS.toFixed(3) + ')';
        phone.style.boxShadow = shadowX + 'px ' + shadowY + 'px ' + shadowBlur + 'px -10px rgba(15, 23, 42, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.1) inset';

        rafId = requestAnimationFrame(loop);
    }

    // IntersectionObserver to only compute when visible in/near viewport
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    isVisible = true;
                    calcTilt();
                    if (!rafId) rafId = requestAnimationFrame(loop);
                } else {
                    isVisible = false;
                    if (rafId) {
                        cancelAnimationFrame(rafId);
                        rafId = null;
                    }
                }
            });
        }, { rootMargin: '250px 0px' });
        observer.observe(section);
    } else {
        isVisible = true;
        rafId = requestAnimationFrame(loop);
    }

    window.addEventListener('scroll', function() {
        if (isVisible) calcTilt();
    }, { passive: true });

    window.addEventListener('resize', function() {
        calcTilt();
    }, { passive: true });

    calcTilt();
})();
</script>














<!-- =========================================================
     FIXNEX MERCHANT SECTION
     "Your Skills Deserve More Opportunities."
     ========================================================= -->
<style>
.fn-merch-section {
    padding: 75px 0 80px;
    background: linear-gradient(135deg, #050f24 0%, #071530 45%, #0a1f44 100%);
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    overflow: hidden;
}

/* Subtle background glows */
.fn-merch-bg-glow {
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(120px);
    opacity: 0.25;
}
.fn-merch-bg-glow-1 {
    top: -80px;
    right: 5%;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.35) 0%, transparent 70%);
}
.fn-merch-bg-glow-2 {
    bottom: -80px;
    left: 5%;
    background: radial-gradient(circle, rgba(37, 99, 235, 0.3) 0%, transparent 70%);
}

.fn-merch-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 2;
}

.fn-merch-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

/* LEFT COLUMN */
.fn-merch-left {
    display: flex;
    flex-direction: column;
}

.fn-merch-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #60a5fa !important;
    margin-bottom: 14px !important;
}
.fn-merch-eyebrow::before {
    content: '';
    display: inline-block;
    width: 26px;
    height: 2px;
    background: #60a5fa;
    border-radius: 2px;
}

.fn-merch-title {
    font-size: clamp(32px, 3.8vw, 48px) !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    line-height: 1.18 !important;
    letter-spacing: -1px !important;
    margin: 0 0 16px 0 !important;
    text-transform: none !important;
}

.fn-merch-sub {
    font-size: 15px !important;
    color: #94a3b8 !important;
    line-height: 1.6 !important;
    margin: 0 0 28px 0 !important;
    max-width: 500px !important;
    font-weight: 400 !important;
    text-transform: none !important;
}

/* Checklist */
.fn-merch-list {
    display: flex;
    flex-direction: column;
    gap: 13px;
    margin-bottom: 34px;
}
.fn-merch-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    color: #e2e8f0;
    font-weight: 500;
    transition: transform 0.2s ease, color 0.2s ease;
}
.fn-merch-item:hover {
    transform: translateX(4px);
    color: #ffffff;
}

.fn-merch-check {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    border: 1.5px solid #38bdf8;
    color: #38bdf8;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    background: rgba(56, 189, 248, 0.12);
}

/* CTA Button */
.fn-merch-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    color: #071530 !important;
    padding: 13px 26px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none !important;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    transition: all 0.22s ease;
    width: fit-content;
}
.fn-merch-btn:hover {
    background: #38bdf8;
    color: #071530 !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(56, 189, 248, 0.4);
}

/* RIGHT COLUMN: White Card with Technician & 3D Interactive Stage */
.fn-merch-right {
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1200px;
}

.fn-merch-card-stage {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 460px;
}

.fn-merch-glow-halo {
    position: absolute;
    width: 90%;
    height: 90%;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.4) 0%, rgba(37, 99, 235, 0.18) 50%, transparent 72%);
    filter: blur(48px);
    border-radius: 50%;
    pointer-events: none;
    z-index: 1;
    will-change: transform, opacity;
}

.fn-merch-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 14px;
    box-shadow: 
        0 28px 70px -15px rgba(0, 0, 0, 0.65),
        0 0 0 1px rgba(255, 255, 255, 0.12);
    max-width: 440px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 2;
    transform-origin: center center;
    will-change: transform, box-shadow;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    isolation: isolate;
    cursor: default;
}

.fn-merch-card-img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 14px;
}

/* Responsive */
@media (max-width: 991px) {
    .fn-merch-grid {
        grid-template-columns: 1fr;
        gap: 50px;
    }
    .fn-merch-card {
        max-width: 380px;
    }
}
@media (max-width: 600px) {
    .fn-merch-section {
        padding: 45px 0 50px !important;
    }
    .fn-merch-container {
        padding: 0 20px;
    }
    .fn-merch-title {
        font-size: 26px !important;
        line-height: 1.25 !important;
    }
    .fn-merch-btn {
        width: 100%;
        justify-content: center;
    }
    .fn-merch-card {
        max-width: 290px;
    }
}
</style>

<section class="fn-merch-section" id="fn-merchant-opportunities">
    <div class="fn-merch-bg-glow fn-merch-bg-glow-1"></div>
    <div class="fn-merch-bg-glow fn-merch-bg-glow-2"></div>

    <div class="fn-merch-container">
        <div class="fn-merch-grid">

            <!-- LEFT: Content, Checklist, and Button -->
            <div class="fn-merch-left">
                <!-- Eyebrow -->
                <div class="fn-merch-eyebrow">BUILT FOR YOUR NEXT OPPORTUNITY</div>

                <!-- Headline -->
                <h2 class="fn-merch-title">
                    Your Skills Deserve<br>More Opportunities.
                </h2>

                <!-- Subtitle -->
                <p class="fn-merch-sub">
                    Join FixNex and showcase your services to customers looking for home service professionals.
                </p>

                <!-- 5 Checklist Items -->
                <div class="fn-merch-list">
                    <div class="fn-merch-item">
                        <div class="fn-merch-check">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span>Register as a Merchant</span>
                    </div>

                    <div class="fn-merch-item">
                        <div class="fn-merch-check">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span>Complete Your Business Profile</span>
                    </div>

                    <div class="fn-merch-item">
                        <div class="fn-merch-check">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span>Add Your Services</span>
                    </div>

                    <div class="fn-merch-item">
                        <div class="fn-merch-check">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span>Get Your Profile Verified</span>
                    </div>

                    <div class="fn-merch-item">
                        <div class="fn-merch-check">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span>Receive Customer Booking Opportunities</span>
                    </div>
                </div>

                <!-- CTA Button -->
                <a href="https://fixnex.in/merchant/onboarding?mode=register" target="_blank" rel="noopener noreferrer" class="fn-merch-btn">
                    Become a FixNex Merchant
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 4px;">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
            </div>

            <!-- RIGHT: White Card with Technician Thumbs Up -->
            <div class="fn-merch-right">
                <div class="fn-merch-card-stage">
                    <div class="fn-merch-glow-halo"></div>
                    <div class="fn-merch-card">
                        <img src="images/fixnex/merchant-technician-card.png?v=2" alt="FixNex Merchant Professional" class="fn-merch-card-img">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Merchant Section Dynamic 3D Scroll Tilt & Mouse Tracking Animation -->
<script>
(function() {
    var section = document.getElementById("fn-merchant-opportunities");
    if (!section) return;
    var card = section.querySelector(".fn-merch-card");
    var halo = section.querySelector(".fn-merch-glow-halo");
    if (!card) return;

    var curX = 0, curY = 0, curZ = 0, curS = 1;
    var targetX = 0, targetY = 0, targetZ = 0, targetS = 1;
    var isVisible = false;
    var rafId = null;

    var mouseX = 0, mouseY = 0;
    var isHovered = false;

    function calcTilt() {
        var rect = section.getBoundingClientRect();
        var winH = window.innerHeight || document.documentElement.clientHeight;
        
        var sectionCenter = rect.top + rect.height / 2;
        var screenCenter = winH / 2;
        
        // factor = 0 when section is in viewport center (Straight / Seedha 0deg)
        // factor > 0 when approaching from bottom (Tedha / Tilted forward)
        // factor < 0 when scrolling past it downwards (Tedha in opposite exit angle)
        var factor = (sectionCenter - screenCenter) / (winH * 0.65);
        if (factor > 1.2) factor = 1.2;
        if (factor < -1.2) factor = -1.2;

        var isMobile = window.innerWidth <= 768;
        var maxTiltY = isMobile ? 6 : 10;
        var maxTiltX = isMobile ? 4 : 7;

        targetX = factor * -maxTiltX + (isHovered ? mouseY * 6 : 0);
        targetY = factor * maxTiltY + (isHovered ? mouseX * 8 : 0);
        targetZ = (1 - Math.min(Math.abs(factor), 1)) * 30;
        targetS = 1 - Math.min(Math.abs(factor), 1) * 0.03;
    }

    function loop() {
        if (!isVisible) return;

        // Smooth fluid momentum lerp (0.1)
        curX += (targetX - curX) * 0.1;
        curY += (targetY - curY) * 0.1;
        curZ += (targetZ - curZ) * 0.1;
        curS += (targetS - curS) * 0.1;

        var shadowX = (-curY * 1.3).toFixed(1);
        var shadowY = (24 + Math.abs(curX) * 0.8).toFixed(1);
        var shadowBlur = (55 + curZ * 0.8).toFixed(1);

        card.style.transform = "perspective(1200px) translateY(" + ((-curX * 1.4)).toFixed(1) + "px) translateZ(" + curZ.toFixed(1) + "px) rotateX(" + curX.toFixed(2) + "deg) rotateY(" + curY.toFixed(2) + "deg) scale(" + curS.toFixed(3) + ")";
        card.style.boxShadow = shadowX + "px " + shadowY + "px " + shadowBlur + "px -12px rgba(0, 0, 0, 0.65), 0 0 35px rgba(56, 189, 248, " + (0.15 + (curZ / 100)).toFixed(2) + ")";

        if (halo) {
            halo.style.transform = "translate(" + (-curY * 1.5).toFixed(1) + "px, " + (curX * 1.5).toFixed(1) + "px) scale(" + (0.95 + (curZ / 120)).toFixed(2) + ")";
        }

        rafId = requestAnimationFrame(loop);
    }

    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    isVisible = true;
                    calcTilt();
                    if (!rafId) rafId = requestAnimationFrame(loop);
                } else {
                    isVisible = false;
                    if (rafId) {
                        cancelAnimationFrame(rafId);
                        rafId = null;
                    }
                }
            });
        }, { threshold: [0, 0.1, 0.25, 0.5, 0.75, 1.0], rootMargin: "100px 0px" });
        observer.observe(section);
    } else {
        isVisible = true;
        rafId = requestAnimationFrame(loop);
    }

    window.addEventListener("scroll", function() {
        if (isVisible) calcTilt();
    }, { passive: true });

    card.addEventListener("mousemove", function(e) {
        var rect = card.getBoundingClientRect();
        mouseX = (e.clientX - rect.left) / rect.width - 0.5;
        mouseY = -((e.clientY - rect.top) / rect.height - 0.5);
        isHovered = true;
        calcTilt();
    });
    card.addEventListener("mouseleave", function() {
        mouseX = 0;
        mouseY = 0;
        isHovered = false;
        calcTilt();
    });
})();
</script>




<!-- =========================================================
     FIXNEX THE EVERYDAY DIFFERENCE SECTION
     "Making Home Services Easier, Every Day."
     ========================================================= -->
<style>
.fn-diff-section {
    padding: 85px 0 95px;
    background: #ffffff;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}

.fn-diff-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 40px;
}

/* Header */
.fn-diff-header {
    margin-bottom: 48px;
}

.fn-diff-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    letter-spacing: 1.8px !important;
    text-transform: uppercase !important;
    color: #1e3a8a !important;
    margin-bottom: 14px !important;
}
.fn-diff-eyebrow::before {
    content: '';
    display: inline-block;
    width: 24px;
    height: 2px;
    background: #1e3a8a;
    border-radius: 2px;
}

.fn-diff-title {
    font-size: clamp(30px, 3.5vw, 44px) !important;
    font-weight: 800 !important;
    color: #071530 !important;
    line-height: 1.2 !important;
    letter-spacing: -0.8px !important;
    margin: 0 !important;
    text-transform: none !important;
}

/* 4 Features Grid */
.fn-diff-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 36px;
    position: relative;
    padding-top: 32px;
    border-top: 1px solid #edf2f7;
}

.fn-diff-card {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    transition: transform 0.25s ease;
}
.fn-diff-card:hover {
    transform: translateY(-4px);
}

.fn-diff-icon-wrap {
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    color: #1d4ed8;
    margin-bottom: 18px;
    transition: transform 0.25s ease, color 0.25s ease;
}
.fn-diff-card:hover .fn-diff-icon-wrap {
    transform: scale(1.12);
    color: #2563eb;
}

.fn-diff-card-title {
    font-size: 16.5px !important;
    font-weight: 700 !important;
    color: #071530 !important;
    margin: 0 0 10px 0 !important;
    line-height: 1.35 !important;
    text-transform: none !important;
}

.fn-diff-card-desc {
    font-size: 13.5px !important;
    color: #64748b !important;
    line-height: 1.55 !important;
    margin: 0 !important;
    font-weight: 400 !important;
    text-transform: none !important;
}

/* Responsive */
@media (max-width: 991px) {
    .fn-diff-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 40px 30px;
    }
}
@media (max-width: 600px) {
    .fn-diff-section {
        padding: 45px 0 20px !important;
    }
    .fn-diff-header {
        margin-bottom: 24px !important;
    }
    .fn-diff-container {
        padding: 0 20px;
    }
    .fn-diff-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        padding-top: 18px;
    }
}
</style>

<section class="fn-diff-section" id="fn-everyday-difference">
    <div class="fn-diff-container">
        <!-- Header -->
        <div class="fn-diff-header">
            <div class="fn-diff-eyebrow">THE EVERYDAY DIFFERENCE</div>
            <h2 class="fn-diff-title">Making Home Services Easier, Every Day.</h2>
        </div>

        <!-- 4 Columns Grid -->
        <div class="fn-diff-grid">
            <!-- Col 1 -->
            <div class="fn-diff-card">
                <div class="fn-diff-icon-wrap">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                    </svg>
                </div>
                <h3 class="fn-diff-card-title">Easy Service Discovery</h3>
                <p class="fn-diff-card-desc">Find services that match your requirements.</p>
            </div>

            <!-- Col 2 -->
            <div class="fn-diff-card">
                <div class="fn-diff-icon-wrap">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                        <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                        <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                        <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                    </svg>
                </div>
                <h3 class="fn-diff-card-title">Multiple Service Categories</h3>
                <p class="fn-diff-card-desc">Explore different home maintenance and repair services.</p>
            </div>

            <!-- Col 3 -->
            <div class="fn-diff-card">
                <div class="fn-diff-icon-wrap">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="3"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <polyline points="9 14 11 16 15 12"></polyline>
                    </svg>
                </div>
                <h3 class="fn-diff-card-title">Convenient Booking</h3>
                <p class="fn-diff-card-desc">Submit service booking requests through FixNex.</p>
            </div>

            <!-- Col 4 -->
            <div class="fn-diff-card">
                <div class="fn-diff-icon-wrap">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                </div>
                <h3 class="fn-diff-card-title">Booking Updates</h3>
                <p class="fn-diff-card-desc">Stay informed about your booking status.</p>
            </div>
        </div>
    </div>
</section>

<!-- Merchant Section Dynamic 3D Scroll Tilt & Mouse Tracking Animation -->
<script>
(function() {
    var section = document.getElementById("fn-merchant-opportunities");
    if (!section) return;
    var card = section.querySelector(".fn-merch-card");
    var halo = section.querySelector(".fn-merch-glow-halo");
    if (!card) return;

    var curX = 0, curY = 0, curZ = 0, curS = 1;
    var targetX = 0, targetY = 0, targetZ = 0, targetS = 1;
    var isVisible = false;
    var rafId = null;

    var mouseX = 0, mouseY = 0;
    var isHovered = false;

    function calcTilt() {
        var rect = section.getBoundingClientRect();
        var winH = window.innerHeight || document.documentElement.clientHeight;
        
        var sectionCenter = rect.top + rect.height / 2;
        var screenCenter = winH / 2;
        
        // factor = 0 when section is in viewport center (Straight / Seedha 0deg)
        // factor > 0 when approaching from bottom (Tedha / Tilted forward)
        // factor < 0 when scrolling past it downwards (Tedha in opposite exit angle)
        var factor = (sectionCenter - screenCenter) / (winH * 0.65);
        if (factor > 1.2) factor = 1.2;
        if (factor < -1.2) factor = -1.2;

        var isMobile = window.innerWidth <= 768;
        var maxTiltY = isMobile ? 6 : 10;
        var maxTiltX = isMobile ? 4 : 7;

        targetX = factor * -maxTiltX + (isHovered ? mouseY * 6 : 0);
        targetY = factor * maxTiltY + (isHovered ? mouseX * 8 : 0);
        targetZ = (1 - Math.min(Math.abs(factor), 1)) * 30;
        targetS = 1 - Math.min(Math.abs(factor), 1) * 0.03;
    }

    function loop() {
        if (!isVisible) return;

        // Smooth fluid momentum lerp (0.1)
        curX += (targetX - curX) * 0.1;
        curY += (targetY - curY) * 0.1;
        curZ += (targetZ - curZ) * 0.1;
        curS += (targetS - curS) * 0.1;

        var shadowX = (-curY * 1.3).toFixed(1);
        var shadowY = (24 + Math.abs(curX) * 0.8).toFixed(1);
        var shadowBlur = (55 + curZ * 0.8).toFixed(1);

        card.style.transform = "perspective(1200px) translateY(" + ((-curX * 1.4)).toFixed(1) + "px) translateZ(" + curZ.toFixed(1) + "px) rotateX(" + curX.toFixed(2) + "deg) rotateY(" + curY.toFixed(2) + "deg) scale(" + curS.toFixed(3) + ")";
        card.style.boxShadow = shadowX + "px " + shadowY + "px " + shadowBlur + "px -12px rgba(0, 0, 0, 0.65), 0 0 35px rgba(56, 189, 248, " + (0.15 + (curZ / 100)).toFixed(2) + ")";

        if (halo) {
            halo.style.transform = "translate(" + (-curY * 1.5).toFixed(1) + "px, " + (curX * 1.5).toFixed(1) + "px) scale(" + (0.95 + (curZ / 120)).toFixed(2) + ")";
        }

        rafId = requestAnimationFrame(loop);
    }

    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    isVisible = true;
                    calcTilt();
                    if (!rafId) rafId = requestAnimationFrame(loop);
                } else {
                    isVisible = false;
                    if (rafId) {
                        cancelAnimationFrame(rafId);
                        rafId = null;
                    }
                }
            });
        }, { threshold: [0, 0.1, 0.25, 0.5, 0.75, 1.0], rootMargin: "100px 0px" });
        observer.observe(section);
    } else {
        isVisible = true;
        rafId = requestAnimationFrame(loop);
    }

    window.addEventListener("scroll", function() {
        if (isVisible) calcTilt();
    }, { passive: true });

    card.addEventListener("mousemove", function(e) {
        var rect = card.getBoundingClientRect();
        mouseX = (e.clientX - rect.left) / rect.width - 0.5;
        mouseY = -((e.clientY - rect.top) / rect.height - 0.5);
        isHovered = true;
        calcTilt();
    });
    card.addEventListener("mouseleave", function() {
        mouseX = 0;
        mouseY = 0;
        isHovered = false;
        calcTilt();
    });
})();
</script>




<!-- =========================================================
     FIXNEX DUAL ACTION CALLOUT SECTION
     Full Code Implementation (Pure HTML/CSS with Responsive Grid):
     "For Your Home" & "For Your Business"
     ========================================================= -->
<style>
.fn-dual-cta-section {
    padding: 70px 0 95px;
    background: #ffffff;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    overflow: hidden;
}

/* Background Subtle Dot Matrix Accents (from Figma Mockup) */
.fn-dual-cta-section::before {
    content: '';
    position: absolute;
    top: 80px;
    left: 24px;
    width: 90px;
    height: 180px;
    background-image: radial-gradient(#bfdbfe 1.8px, transparent 1.8px);
    background-size: 16px 16px;
    opacity: 0.65;
    pointer-events: none;
    z-index: 0;
}
.fn-dual-cta-section::after {
    content: '';
    position: absolute;
    bottom: 60px;
    right: 24px;
    width: 90px;
    height: 180px;
    background-image: radial-gradient(#bfdbfe 1.8px, transparent 1.8px);
    background-size: 16px 16px;
    opacity: 0.65;
    pointer-events: none;
    z-index: 0;
}

.fn-dual-cta-container {
    max-width: 1260px;
    margin: 0 auto;
    padding: 0 35px;
    position: relative;
    z-index: 1;
}

.fn-dual-cta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
}

/* Common Card Styling */
.fn-dual-card {
    position: relative;
    border-radius: 28px;
    background: linear-gradient(135deg, #f7faff 0%, #edf5ff 55%, #e1effe 100%);
    border: 1.5px solid rgba(191, 219, 254, 0.85);
    box-shadow: 0 10px 32px rgba(15, 34, 64, 0.06);
    overflow: hidden;
    display: flex;
    align-items: stretch;
    justify-content: space-between;
    min-height: 310px;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease;
    cursor: default;
    z-index: 1;
}

.fn-dual-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 48px rgba(15, 34, 64, 0.13);
    border-color: rgba(147, 197, 253, 0.95);
}

/* Shimmer Sweep on Card Hover */
.fn-dual-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: -120%;
    width: 80%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.45), transparent);
    transform: skewX(-20deg);
    transition: left 0.75s ease;
    pointer-events: none;
    z-index: 4;
}
.fn-dual-card:hover::after {
    left: 140%;
}

/* Left Content Area */
.fn-dual-content {
    position: relative;
    z-index: 2;
    padding: 34px 20px 32px 34px;
    flex: 1 1 60%;
    max-width: 62%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Top Pill Badge with Icon Container */
.fn-dual-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #e3efff;
    color: #0b3b7e;
    border: 1px solid rgba(191, 219, 254, 0.9);
    border-radius: 50px;
    padding: 5px 14px 5px 6px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: -0.1px;
    margin-bottom: 14px;
    width: fit-content;
    box-shadow: 0 2px 6px rgba(37, 99, 235, 0.08);
}
.fn-pill-icon-box {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #cce3fe;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0066ff;
}

/* Heading with Highlight */
.fn-dual-title {
    font-size: clamp(23px, 2.2vw, 28px) !important;
    font-weight: 800 !important;
    color: #071530 !important;
    line-height: 1.25 !important;
    letter-spacing: -0.4px !important;
    margin: 0 0 10px 0 !important;
    text-transform: none !important;
}
.fn-dual-blue {
    color: #0066ff !important;
}

/* Subtitle */
.fn-dual-desc {
    font-size: 13.5px !important;
    color: #5c6f84 !important;
    line-height: 1.5 !important;
    margin: 0 0 20px 0 !important;
    font-weight: 400 !important;
    text-transform: none !important;
    max-width: 360px;
}

/* 3 Mini Feature Badges Row WITH VERTICAL DIVIDERS (Figma Match) */
.fn-dual-features {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
}
.fn-dual-feat-col {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.fn-dual-feat-divider {
    width: 1px;
    height: 38px;
    background: #cbdcf2;
    flex-shrink: 0;
}
.fn-dual-feat-icon {
    display: flex;
    align-items: center;
    color: #0066ff;
    width: 24px;
    height: 24px;
}
.fn-dual-feat-text {
    display: flex;
    flex-direction: column;
    font-size: 11.5px;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.25;
    letter-spacing: -0.1px;
}

/* Dark Navy Pill Button with Circle Arrow */
.fn-dual-btn-wrap {
    position: relative;
    z-index: 2;
    margin-top: auto;
}

.fn-dual-pill-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: #071530;
    color: #ffffff !important;
    padding: 8px 8px 8px 22px;
    border-radius: 50px;
    font-size: 13.5px;
    font-weight: 700;
    text-decoration: none !important;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 14px rgba(7, 21, 48, 0.2);
    width: fit-content;
}
.fn-dual-pill-btn:hover {
    background: #0c234b;
    box-shadow: 0 8px 22px rgba(7, 21, 48, 0.35);
    transform: translateY(-2px);
}
.fn-dual-pill-btn-arrow {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.25s ease;
    flex-shrink: 0;
}
.fn-dual-pill-btn:hover .fn-dual-pill-btn-arrow {
    transform: translateX(3px);
}

/* Right Visual Art (Technician + bottom blue wave + original badge) */
.fn-dual-art {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 44%;
    height: 100%;
    z-index: 1;
    pointer-events: none;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    overflow: hidden;
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 18%);
    mask-image: linear-gradient(to right, transparent 0%, black 18%);
}
.fn-dual-art-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: right top;
    display: block;
}
.fn-dual-card-home .fn-dual-art-img,
.fn-dual-card-biz .fn-dual-art-img {
    object-position: center 6%;
}

/* Corner Circular 3D Badge (Top Right) */
.fn-dual-corner-badge {
    position: absolute;
    top: -4px;
    right: -4px;
    z-index: 4;
    pointer-events: none;
}
.fn-dual-corner-circle {
    width: 58px;
    height: 58px;
    border-radius: 50%;
    background: #ffffff;
    border: 2px solid #0066ff;
    box-shadow: 0 6px 20px rgba(0, 102, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
}
.fn-dual-corner-circle svg {
    width: 22px;
    height: 22px;
    fill: #0066ff;
}

/* Vibrant Blue Corner Wave (Bottom Right) */
.fn-dual-blue-wave {
    position: absolute;
    right: -15px;
    bottom: -20px;
    width: 145px;
    height: 105px;
    background: radial-gradient(ellipse at 90% 90%, #0066ff 0%, #0050e6 65%, transparent 71%);
    border-radius: 90% 0 0 0;
    pointer-events: none;
    z-index: 2;
}

/* Responsive Breakpoints */
@media (max-width: 1024px) {
    .fn-dual-content {
        max-width: 65%;
        padding: 28px 16px 28px 26px;
    }
    .fn-dual-art {
        width: 40%;
    }
}
@media (max-width: 860px) {
    .fn-dual-cta-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    .fn-dual-card {
        min-height: auto;
    }
    .fn-dual-content {
        max-width: 62%;
    }
    .fn-dual-art {
        width: 42%;
    }
}
@media (max-width: 600px) {
    .fn-dual-cta-section {
        padding: 35px 0 35px !important;
    }
    .fn-dual-cta-container {
        padding: 0 16px;
    }
    /* Keep single unified card on mobile without vertical splitting */
    .fn-dual-card {
        flex-direction: row !important;
        align-items: stretch !important;
        border-radius: 20px !important;
        min-height: 265px !important;
        overflow: hidden !important;
        position: relative !important;
    }
    .fn-dual-content {
        max-width: 62% !important;
        flex: 1 1 62% !important;
        padding: 20px 10px 18px 16px !important;
        z-index: 2 !important;
    }
    .fn-dual-pill {
        padding: 4px 10px 4px 5px !important;
        font-size: 11px !important;
        margin-bottom: 10px !important;
    }
    .fn-pill-icon-box {
        width: 20px !important;
        height: 20px !important;
        font-size: 10px !important;
    }
    .fn-dual-title {
        font-size: 17px !important;
        line-height: 1.25 !important;
        margin-bottom: 6px !important;
        letter-spacing: -0.3px !important;
    }
    .fn-dual-desc {
        font-size: 11px !important;
        line-height: 1.35 !important;
        margin-bottom: 12px !important;
        max-width: 100% !important;
    }
    .fn-dual-features {
        gap: 8px !important;
        margin-bottom: 14px !important;
    }
    .fn-dual-feat-icon svg {
        width: 16px !important;
        height: 16px !important;
    }
    .fn-dual-feat-divider {
        height: 26px !important;
    }
    .fn-dual-feat-text {
        font-size: 9.5px !important;
        line-height: 1.2 !important;
    }
    .fn-dual-pill-btn {
        padding: 6px 6px 6px 14px !important;
        font-size: 11.5px !important;
        gap: 8px !important;
    }
    .fn-dual-pill-btn-arrow {
        width: 22px !important;
        height: 22px !important;
    }
    /* Proportionate right-side technician graphic */
    .fn-dual-art {
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
        width: 44% !important;
        height: 100% !important;
        z-index: 1 !important;
        pointer-events: none !important;
        display: flex !important;
        align-items: flex-end !important;
        justify-content: flex-end !important;
        overflow: hidden !important;
        -webkit-mask-image: linear-gradient(to right, transparent 0%, black 18%) !important;
        mask-image: linear-gradient(to right, transparent 0%, black 18%) !important;
    }
    .fn-dual-art-img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: right top !important;
        display: block !important;
    }
    .fn-dual-card-home .fn-dual-art-img,
    .fn-dual-card-biz .fn-dual-art-img {
        object-position: center 6% !important;
    }
    .fn-dual-corner-circle {
        width: 44px !important;
        height: 44px !important;
    }
    .fn-dual-corner-circle svg {
        width: 18px !important;
        height: 18px !important;
    }
    .fn-dual-blue-wave {
        width: 100px !important;
        height: 70px !important;
    }
}
@media (max-width: 380px) {
    .fn-dual-content {
        max-width: 65% !important;
        padding: 16px 8px 16px 14px !important;
    }
    .fn-dual-title {
        font-size: 15.5px !important;
    }
    .fn-dual-desc {
        display: none !important;
    }
    .fn-dual-art {
        width: 42% !important;
    }
}
</style>

<section class="fn-dual-cta-section" id="fn-dual-cta">
    <div class="fn-dual-cta-container">
        <div class="fn-dual-cta-grid">

            <!-- Card 1: For Your Home (Pure HTML/CSS Code) -->
            <div class="fn-dual-card fn-dual-card-home">
                <div class="fn-dual-content">
                    <!-- Pill Badge -->
                    <div class="fn-dual-pill">
                        <span class="fn-pill-icon-box">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 10.5L12 3l9 7.5v8.5a2 2 0 0 1-2 2h-14a2 2 0 0 1-2-2v-8.5z"/>
                                <polyline points="9 21 9 12 15 12 15 21"/>
                            </svg>
                        </span>
                        <span>For Your Home</span>
                    </div>

                    <!-- Title with Exact Line Break & Blue Highlight -->
                    <h2 class="fn-dual-title">
                        Find the Right Professional<br>
                        for <span class="fn-dual-blue">Your Home.</span>
                    </h2>

                    <!-- Subtitle -->
                    <p class="fn-dual-desc">Explore home services and connect with professionals for your everyday needs.</p>

                    <!-- 3 Mini Feature Badges Row WITH VERTICAL DIVIDERS -->
                    <div class="fn-dual-features">
                        <div class="fn-dual-feat-col">
                            <div class="fn-dual-feat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <polyline points="9 12 11 14 15 10"/>
                                </svg>
                            </div>
                            <div class="fn-dual-feat-text">
                                <span>Trusted</span>
                                <span>Professionals</span>
                            </div>
                        </div>

                        <div class="fn-dual-feat-divider"></div>

                        <div class="fn-dual-feat-col">
                            <div class="fn-dual-feat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                                </svg>
                            </div>
                            <div class="fn-dual-feat-text">
                                <span>Quick</span>
                                <span>Service</span>
                            </div>
                        </div>

                        <div class="fn-dual-feat-divider"></div>

                        <div class="fn-dual-feat-col">
                            <div class="fn-dual-feat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                            </div>
                            <div class="fn-dual-feat-text">
                                <span>Top Rated</span>
                                <span>Experts</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="fn-dual-btn-wrap">
                        <a href="https://fixnex.in/services" target="_blank" rel="noopener noreferrer" class="fn-dual-pill-btn">
                            <span>Explore Services</span>
                            <span class="fn-dual-pill-btn-arrow">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#071530" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Art (High-Res Technician + bottom blue wave) -->
                <div class="fn-dual-art">
                    <img src="images/fixnex/card-home-tech-hd.webp" alt="FixNex Professional for Home" class="fn-dual-art-img" />
                    <div class="fn-dual-blue-wave"></div>
                </div>
            </div>

            <!-- Card 2: For Your Business (Pure HTML/CSS Code) -->
            <div class="fn-dual-card fn-dual-card-biz">
                <div class="fn-dual-content">
                    <!-- Pill Badge -->
                    <div class="fn-dual-pill">
                        <span class="fn-pill-icon-box">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l2-5h14l2 5"></path>
                                <path d="M21 9v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9"></path>
                                <path d="M3 9h18"></path>
                                <path d="M9 21V12h6v9"></path>
                            </svg>
                        </span>
                        <span>For Your Business</span>
                    </div>

                    <!-- Title with Exact Line Break & Blue Highlight -->
                    <h2 class="fn-dual-title">
                        Turn Your Skills Into<br>
                        <span class="fn-dual-blue">Opportunities.</span>
                    </h2>

                    <!-- Subtitle -->
                    <p class="fn-dual-desc">Register your business, showcase your services and connect with potential customers.</p>

                    <!-- 3 Mini Feature Badges Row WITH VERTICAL DIVIDERS -->
                    <div class="fn-dual-features">
                        <div class="fn-dual-feat-col">
                            <div class="fn-dual-feat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                    <polyline points="17 6 23 6 23 12"></polyline>
                                </svg>
                            </div>
                            <div class="fn-dual-feat-text">
                                <span>Grow Your</span>
                                <span>Business</span>
                            </div>
                        </div>

                        <div class="fn-dual-feat-divider"></div>

                        <div class="fn-dual-feat-col">
                            <div class="fn-dual-feat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="fn-dual-feat-text">
                                <span>Get More</span>
                                <span>Customers</span>
                            </div>
                        </div>

                        <div class="fn-dual-feat-divider"></div>

                        <div class="fn-dual-feat-col">
                            <div class="fn-dual-feat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20.5 8.5l-4-4a2.12 2.12 0 0 0-3 0L3.5 14.5a2.12 2.12 0 0 0 0 3l3 3a2.12 2.12 0 0 0 3 0L19.5 10.5a1.41 1.41 0 0 0 0-2z"></path>
                                    <path d="M15 15l-3-3"></path>
                                    <path d="M18 18l-3-3"></path>
                                </svg>
                            </div>
                            <div class="fn-dual-feat-text">
                                <span>Build Your</span>
                                <span>Brand</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="fn-dual-btn-wrap">
                        <a href="https://fixnex.in/merchant/onboarding?mode=register" target="_blank" rel="noopener noreferrer" class="fn-dual-pill-btn">
                            <span>Register as Merchant</span>
                            <span class="fn-dual-pill-btn-arrow">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#071530" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Art (High-Res Technician + bottom blue wave) -->
                <div class="fn-dual-art">
                    <img src="images/fixnex/card-biz-tech-hd.webp" alt="FixNex Professional for Business" class="fn-dual-art-img" />
                    <div class="fn-dual-blue-wave"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Merchant Section Dynamic 3D Scroll Tilt & Mouse Tracking Animation -->
<script>
(function() {
    var section = document.getElementById("fn-merchant-opportunities");
    if (!section) return;
    var card = section.querySelector(".fn-merch-card");
    var halo = section.querySelector(".fn-merch-glow-halo");
    if (!card) return;

    var curX = 0, curY = 0, curZ = 0, curS = 1;
    var targetX = 0, targetY = 0, targetZ = 0, targetS = 1;
    var isVisible = false;
    var rafId = null;

    var mouseX = 0, mouseY = 0;
    var isHovered = false;

    function calcTilt() {
        var rect = section.getBoundingClientRect();
        var winH = window.innerHeight || document.documentElement.clientHeight;
        
        var sectionCenter = rect.top + rect.height / 2;
        var screenCenter = winH / 2;
        
        // factor = 0 when section is in viewport center (Straight / Seedha 0deg)
        // factor > 0 when approaching from bottom (Tedha / Tilted forward)
        // factor < 0 when scrolling past it downwards (Tedha in opposite exit angle)
        var factor = (sectionCenter - screenCenter) / (winH * 0.65);
        if (factor > 1.2) factor = 1.2;
        if (factor < -1.2) factor = -1.2;

        var isMobile = window.innerWidth <= 768;
        var maxTiltY = isMobile ? 6 : 10;
        var maxTiltX = isMobile ? 4 : 7;

        targetX = factor * -maxTiltX + (isHovered ? mouseY * 6 : 0);
        targetY = factor * maxTiltY + (isHovered ? mouseX * 8 : 0);
        targetZ = (1 - Math.min(Math.abs(factor), 1)) * 30;
        targetS = 1 - Math.min(Math.abs(factor), 1) * 0.03;
    }

    function loop() {
        if (!isVisible) return;

        // Smooth fluid momentum lerp (0.1)
        curX += (targetX - curX) * 0.1;
        curY += (targetY - curY) * 0.1;
        curZ += (targetZ - curZ) * 0.1;
        curS += (targetS - curS) * 0.1;

        var shadowX = (-curY * 1.3).toFixed(1);
        var shadowY = (24 + Math.abs(curX) * 0.8).toFixed(1);
        var shadowBlur = (55 + curZ * 0.8).toFixed(1);

        card.style.transform = "perspective(1200px) translateY(" + ((-curX * 1.4)).toFixed(1) + "px) translateZ(" + curZ.toFixed(1) + "px) rotateX(" + curX.toFixed(2) + "deg) rotateY(" + curY.toFixed(2) + "deg) scale(" + curS.toFixed(3) + ")";
        card.style.boxShadow = shadowX + "px " + shadowY + "px " + shadowBlur + "px -12px rgba(0, 0, 0, 0.65), 0 0 35px rgba(56, 189, 248, " + (0.15 + (curZ / 100)).toFixed(2) + ")";

        if (halo) {
            halo.style.transform = "translate(" + (-curY * 1.5).toFixed(1) + "px, " + (curX * 1.5).toFixed(1) + "px) scale(" + (0.95 + (curZ / 120)).toFixed(2) + ")";
        }

        rafId = requestAnimationFrame(loop);
    }

    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    isVisible = true;
                    calcTilt();
                    if (!rafId) rafId = requestAnimationFrame(loop);
                } else {
                    isVisible = false;
                    if (rafId) {
                        cancelAnimationFrame(rafId);
                        rafId = null;
                    }
                }
            });
        }, { threshold: [0, 0.1, 0.25, 0.5, 0.75, 1.0], rootMargin: "100px 0px" });
        observer.observe(section);
    } else {
        isVisible = true;
        rafId = requestAnimationFrame(loop);
    }

    window.addEventListener("scroll", function() {
        if (isVisible) calcTilt();
    }, { passive: true });

    card.addEventListener("mousemove", function(e) {
        var rect = card.getBoundingClientRect();
        mouseX = (e.clientX - rect.left) / rect.width - 0.5;
        mouseY = -((e.clientY - rect.top) / rect.height - 0.5);
        isHovered = true;
        calcTilt();
    });
    card.addEventListener("mouseleave", function() {
        mouseX = 0;
        mouseY = 0;
        isHovered = false;
        calcTilt();
    });
})();
</script>



<main class="fn-process-page">
    <div class="fn-process-bg-grid"></div>
    <div class="fn-process-glow fn-process-glow-1"></div>
    <div class="fn-process-glow fn-process-glow-2"></div>

    <!-- Section Title & Subtitle (Unified FixNex Design System) -->
    <div class="fn-process-header">
        <div class="fn-process-eyebrow">
            <span class="fn-process-eyebrow-line"></span>
            <span>HOW FIXNEX WORKS</span>
        </div>
        <h2 class="fn-process-title">
            How FixNex Works: Seamless Doorstep Services.
        </h2>
        <p class="fn-process-subtitle">
            An on-demand doorstep home services platform in India, delivering vetted professionals right to your door with real-time tracking and transparent pricing.
        </p>
    </div>

    <!-- 5-Step Mobile Mockup Showcase Sequence -->
    <div class="fn-process-container">
        <div class="fn-process-track-wrapper">
            
            <!-- Continuous SVG Connector Wave Line with Animated Flow -->
            <svg class="fn-connecting-wave-svg" viewBox="0 0 1440 140" fill="none" preserveAspectRatio="none">
                <!-- Static Soft Glow Background Track -->
                <path 
                    class="fn-wave-path-bg"
                    d="M 40 70 Q 180 120, 360 70 T 720 70 T 1080 70 T 1400 70" 
                />
                <!-- Animated Moving Dashed Flow Path -->
                <path 
                    class="fn-wave-path-animated"
                    d="M 40 70 Q 180 120, 360 70 T 720 70 T 1080 70 T 1400 70" 
                />
            </svg>

            <div class="fn-process-grid">

                <!-- ==========================================
                     STEP 01: Search Service
                     ========================================== -->
                <div class="fn-step-item">
                    <div class="fn-phone-mockup" style="background: #f4f6ff;">
                        <div class="fn-phone-island"><div class="fn-phone-camera-dot"></div></div>
                        <div class="fn-phone-status fn-phone-status-light">
                            <span>9:41</span>
                            <div style="display:flex;gap:4px;align-items:center;">
                                <i class="fa fa-signal" style="font-size:9px;"></i>
                                <i class="fa fa-wifi" style="font-size:9px;"></i>
                                <i class="fa fa-battery-full" style="font-size:9px;"></i>
                            </div>
                        </div>

                        <!-- Screen 1 Inner Content: FixNex App Screenshot (actual image) -->
                        <div class="fn-phone-screen" style="overflow:hidden;">
                            <img 
                                src="images/fixnex/fixnex-app-home.png" 
                                alt="FixNex App Home Screen" 
                                style="width:100%;height:100%;object-fit:cover;object-position:top;display:block;"
                            >
                        </div>

                        <div class="fn-phone-home-bar"></div>
                    </div>

                    <!-- Step 01 Details -->
                    <div class="fn-step-meta">
                        <div class="fn-step-number-badge">01</div>
                        <h3 class="fn-step-title">Search Service</h3>
                        <span class="fn-step-tag">Category &amp; Service search</span>
                        <p class="fn-step-desc">Home cleaning, AC repair, Plumbing, Electrician etc. search karein.</p>
                    </div>
                </div>

                <!-- ==========================================
                     STEP 02: Choose Provider
                     ========================================== -->
                <div class="fn-step-item">
                    <div class="fn-phone-mockup" style="background: #021d48;">
                        <div class="fn-phone-island"><div class="fn-phone-camera-dot"></div></div>
                        <div class="fn-phone-status">
                            <span>9:41</span>
                            <div style="display:flex;gap:4px;align-items:center;">
                                <i class="fa fa-signal" style="font-size:9px;"></i>
                                <i class="fa fa-wifi" style="font-size:9px;"></i>
                                <i class="fa fa-battery-full" style="font-size:9px;"></i>
                            </div>
                        </div>

                        <!-- Screen 2 Inner Content: FixNex Provider Profile (actual image) -->
                        <div class="fn-phone-screen" style="overflow:hidden;background:#021d48;">
                            <img 
                                src="images/fixnex/fixnex-app-provider.png" 
                                alt="FixNex Provider Profile" 
                                style="width:100%;height:100%;object-fit:cover;object-position:top;display:block;"
                            >
                        </div>

                        <div class="fn-phone-home-bar"></div>
                    </div>

                    <!-- Step 02 Details -->
                    <div class="fn-step-meta">
                        <div class="fn-step-number-badge">02</div>
                        <h3 class="fn-step-title">Choose Provider</h3>
                        <span class="fn-step-tag">Verified Expert select karein</span>
                        <p class="fn-step-desc">Provider ki ratings, customer reviews, experience aur prices compare karein.</p>
                    </div>
                </div>

                <!-- ==========================================
                     STEP 03: Schedule Booking
                     ========================================== -->
                <div class="fn-step-item">
                    <div class="fn-phone-mockup" style="background: #022656;">
                        <div class="fn-phone-island"><div class="fn-phone-camera-dot"></div></div>
                        <div class="fn-phone-status">
                            <span>9:41</span>
                            <div style="display:flex;gap:4px;align-items:center;">
                                <i class="fa fa-signal" style="font-size:9px;"></i>
                                <i class="fa fa-wifi" style="font-size:9px;"></i>
                                <i class="fa fa-battery-full" style="font-size:9px;"></i>
                            </div>
                        </div>

                        <!-- Screen 3 Inner Content: FixNex Booking Screen (actual image) -->
                        <div class="fn-phone-screen" style="overflow:hidden;background:#022656;">
                            <img 
                                src="images/fixnex/fixnex-app-booking.png" 
                                alt="FixNex Booking Screen" 
                                style="width:100%;height:100%;object-fit:cover;object-position:top;display:block;"
                            >
                        </div>

                        <div class="fn-phone-home-bar"></div>
                    </div>

                    <!-- Step 03 Details -->
                    <div class="fn-step-meta">
                        <div class="fn-step-number-badge">03</div>
                        <h3 class="fn-step-title">Schedule Booking</h3>
                        <span class="fn-step-tag">Date aur Time slot chunein</span>
                        <p class="fn-step-desc">Apni suvidha ke anusaar doorstep visit ka time aur address set karein.</p>
                    </div>
                </div>

                <!-- ==========================================
                     STEP 04: Live Tracking
                     ========================================== -->
                <div class="fn-step-item">
                    <div class="fn-phone-mockup" style="background: #eef7f2;">
                        <div class="fn-phone-island"><div class="fn-phone-camera-dot"></div></div>
                        <div class="fn-phone-status fn-phone-status-light">
                            <span>9:41</span>
                            <div style="display:flex;gap:4px;align-items:center;">
                                <i class="fa fa-signal" style="font-size:9px;"></i>
                                <i class="fa fa-wifi" style="font-size:9px;"></i>
                                <i class="fa fa-battery-full" style="font-size:9px;"></i>
                            </div>
                        </div>

                        <!-- Screen 4 Inner Content: FixNex Live Tracking (actual image) -->
                        <div class="fn-phone-screen" style="overflow:hidden;background:#eef7f2;">
                            <img 
                                src="images/fixnex/fixnex-app-tracking.png" 
                                alt="FixNex Live Tracking" 
                                style="width:100%;height:100%;object-fit:cover;object-position:top;display:block;"
                            >
                        </div>

                        <div class="fn-phone-home-bar"></div>
                    </div>

                    <!-- Step 04 Details -->
                    <div class="fn-step-meta">
                        <div class="fn-step-number-badge">04</div>
                        <h3 class="fn-step-title">Live Tracking</h3>
                        <span class="fn-step-tag">Real-time tracking map</span>
                        <p class="fn-step-desc">Map par dekhein expert kab nikla aur kab aapke ghar pahunchega.</p>
                    </div>
                </div>

                <!-- ==========================================
                     STEP 05: Doorstep Service & Payment
                     ========================================== -->
                <div class="fn-step-item">
                    <div class="fn-phone-mockup" style="background: #022d64;">
                        <div class="fn-phone-island"><div class="fn-phone-camera-dot"></div></div>
                        <div class="fn-phone-status">
                            <span>9:41</span>
                            <div style="display:flex;gap:4px;align-items:center;">
                                <i class="fa fa-signal" style="font-size:9px;"></i>
                                <i class="fa fa-wifi" style="font-size:9px;"></i>
                                <i class="fa fa-battery-full" style="font-size:9px;"></i>
                            </div>
                        </div>

                        <!-- Screen 5 Inner Content: FixNex Order and Payment (actual image) -->
                        <div class="fn-phone-screen" style="overflow:hidden;background:#022d64;">
                            <img 
                                src="images/fixnex/fixnex-app-payment.png" 
                                alt="FixNex Order and Payment" 
                                style="width:100%;height:100%;object-fit:cover;object-position:top;display:block;"
                            >
                        </div>

                        <div class="fn-phone-home-bar"></div>
                    </div>

                    <!-- Step 05 Details -->
                    <div class="fn-step-meta">
                        <div class="fn-step-number-badge">05</div>
                        <h3 class="fn-step-title">Doorstep Service &amp; Payment</h3>
                        <span class="fn-step-tag">Safe Cashless / Cash payment</span>
                        <p class="fn-step-desc">Kaam complete hone ke baad UPI, Card ya Cash se securely pay karein.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Action CTA Banner -->
    <div class="container">
        <div class="fn-bottom-cta-card">
            <div class="fn-bottom-cta-text">
                <h3>Ready to Experience FixNex?</h3>
                <p>Book verified experts for doorstep repair, cleaning, and maintenance in minutes.</p>
            </div>
            <div class="fn-bottom-cta-btns">
                <a href="https://fixnex.in" target="_blank" rel="noopener noreferrer" class="fn-btn-primary-glow">
                    <span>Explore FixNex Platform</span>
                    <i class="fa fa-arrow-right"></i>
                </a>
                <a href="https://fixnex.in/contact-us" target="_blank" rel="noopener noreferrer" class="fn-btn-secondary-outline">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </div>
</main>

<script>
// Optional subtle interactive 3D perspective effect on mouse move
document.addEventListener('DOMContentLoaded', function() {
    const mockups = document.querySelectorAll('.fn-phone-mockup');
    mockups.forEach(phone => {
        phone.addEventListener('mousemove', function(e) {
            const rect = phone.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const xPercent = (x / rect.width - 0.5) * 16;
            const yPercent = (y / rect.height - 0.5) * -16;
            phone.style.transform = `perspective(1000px) rotateY(${xPercent}deg) rotateX(${yPercent}deg) translateY(-14px) scale(1.03)`;
        });
        phone.addEventListener('mouseleave', function() {
            phone.style.transform = '';
        });
    });
});
</script>

<?php 
include 'footer.php';
?>
