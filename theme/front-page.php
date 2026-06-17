<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LeadZap  -  Marketing for Contractors Who Actually Do the Work</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* ===== RESET & BASE ===== */
    *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body {
      background:#111111;
      color:#b5b5b5;
      font-family:'Inter',sans-serif;
      font-size:18px;
      font-weight:400;
      line-height:1.6;
      overflow-x:hidden;
    }
    img { max-width:100%; display:block; }
    a { text-decoration:none; color:inherit; }
    ul { list-style:none; }
    .container {
      max-width:1320px;
      margin:0 auto;
      padding:0 24px;
    }

    /* ===== COLORS ===== */
    :root {
      --body-bg:#111111;
      --text:#b5b5b5;
      --white:#ffffff;
      --lime:#d6f345;
      --dark-btn:#282828;
      --btn-text:#171619;
      --hero-bg:#000000;
      --tag-bg:#323232;
      --border-rgba:rgba(255,255,255,0.2);
    }

    /* ===== BUTTONS ===== */
    .nm-pr-btn-1 {
      display:inline-flex;
      align-items:center;
      gap:14px;
      background:#282828;
      color:#171619;
      padding:6px 30px 6px 6px;
      border-radius:100px;
      font-family:'Inter',sans-serif;
      font-size:16px;
      font-weight:600;
      border:none;
      cursor:pointer;
      transition:all 0.3s ease;
    }
    .nm-pr-btn-1:hover { opacity:0.85; }
    .nm-pr-btn-1 .wa_magnetic_btn_2_elm {
      display:inline-flex;
      align-items:center;
      justify-content:center;
      width:42px;
      height:42px;
      background:#d6f345;
      border-radius:50%;
      color:#171619;
      font-size:18px;
      flex-shrink:0;
      transition:all 0.3s ease;
    }
    .nm-pr-btn-1.lime-bg {
      background:#d6f345;
      color:#171619;
    }
    .nm-pr-btn-1.lime-bg .wa_magnetic_btn_2_elm {
      background:#171619;
      color:#d6f345;
    }
    .nm-pr-btn-1.white-border {
      background:transparent;
      border:1px solid rgba(255,255,255,0.2);
      color:#fff;
    }
    .nm-pr-btn-1.white-border .wa_magnetic_btn_2_elm {
      background:#d6f345;
      color:#171619;
    }

    /* ===== SECTION TITLES ===== */
    .section-badge {
      font-family:'Inter',sans-serif;
      font-size:20px;
      font-weight:600;
      color:#d6f345;
      display:inline-block;
      margin-bottom:16px;
    }
    .section-badge::before { content:"{ "; }
    .section-badge::after { content:" }"; }
    .section-title {
      font-family:'Space Grotesk',sans-serif;
      font-size: clamp(36px,5vw,64px);
      font-weight:700;
      color:#ffffff;
      line-height:1.1;
      letter-spacing:-1.5px;
    }
    .section-desc {
      font-size:18px;
      color:#b5b5b5;
      margin-top:20px;
      max-width:600px;
    }

    /* ===== HEADER ===== */
    .header {
      position:fixed;
      top:0;
      left:0;
      right:0;
      z-index:1000;
      background:rgba(17,17,17,0.95);
      backdrop-filter:blur(20px);
      border-bottom:1px solid rgba(255,255,255,0.06);
      padding:18px 0;
    }
    .header-inner {
      display:flex;
      align-items:center;
      justify-content:space-between;
    }
    .header-logo {
      font-family:'Space Grotesk',sans-serif;
      font-size:28px;
      font-weight:700;
      color:#ffffff;
    }
    .header-nav {
      display:flex;
      align-items:center;
      gap:36px;
    }
    .header-nav a.nav-cta {
      background:#d6f345;
      color:#171619;
      padding:12px 28px;
      border-radius:100px;
      font-family:'Inter',sans-serif;
      font-weight:600;
      font-size:16px;
    }
    .header-nav a.nav-cta:hover { background:#c8e03a; }
    .hamburger { display:none; flex-direction:column; gap:5px; cursor:pointer; }
    .hamburger span { width:28px; height:3px; background:#fff; border-radius:3px; }

    /* ===== DROPDOWN NAV ===== */
    .header-nav .nav-item {
      position:relative;
      list-style:none;
    }
    .header-nav .nav-item > a {
      font-family:'Space Grotesk',sans-serif;
      font-size:16px;
      font-weight:700;
      color:#fff;
      transition:color 0.3s;
      padding:12px 0;
      display:inline-block;
    }
    .header-nav .nav-item > a:hover { color:#d6f345; }
    .header-nav .sub-menu {
      position:absolute;
      top:100%;
      left:0;
      min-width:220px;
      display:block;
      background:#1a1a1a;
      border:1px solid rgba(255,255,255,0.08);
      border-radius:12px;
      padding:12px 0;
      opacity:0;
      visibility:hidden;
      transform:translateY(8px);
      transition:all 0.25s ease;
      z-index:999;
      pointer-events:none;
      box-shadow:0 20px 60px rgba(0,0,0,0.6);
    }
    .header-nav .menu-item-has-children:hover > .sub-menu,
    .header-nav .sub-menu:hover {
      opacity:1;
      visibility:visible;
      transform:translateY(0);
      pointer-events:auto;
    }
    .header-nav .sub-menu .nav-item > a {
      display:block;
      padding:10px 24px;
      font-size:15px;
      font-weight:500;
      color:#b5b5b5;
    }
    .header-nav .sub-menu .nav-item > a:hover {
      color:#d6f345;
      background:rgba(214,243,69,0.05);
    }
    .header-nav .sub-menu .sub-menu {
      left:100%;
      top:-12px;
      transform:translateX(8px);
    }
    .header-nav .menu-item-has-children > a::after {
      content:'▾';
      display:inline-block;
      margin-left:6px;
      font-size:10px;
      color:#888;
      transition:transform 0.2s;
    }
    .header-nav .menu-item-has-children:hover > a::after {
      transform:rotate(180deg);
    }
    .header-nav ul {
      display:flex;
      align-items:center;
      gap:36px;
      margin:0;
      padding:0;
      list-style:none;
    }
    .header-nav ul .nav-cta a {
      background:#d6f345;
      color:#171619;
      padding:12px 28px;
      border-radius:100px;
      font-family:'Inter',sans-serif;
      font-weight:600;
      font-size:16px;
    }
    .header-nav ul .nav-cta a:hover { background:#c8e03a; color:#171619; }

    /* Responsive */
    @media(max-width:991px) {
      .header-nav ul {
        display:none;
        flex-direction:column;
        position:fixed;
        top:75px;
        left:0;
        right:0;
        background:#1a1a1a;
        padding:24px;
        gap:0;
        border-bottom:1px solid rgba(255,255,255,0.06);
        z-index:999;
      }
      .header-nav ul.open { display:flex; }
      .header-nav ul .nav-item > a {
        display:block;
        padding:14px 0;
        border-bottom:1px solid rgba(255,255,255,0.04);
      }
      .header-nav .sub-menu {
        position:static;
        opacity:1;
        visibility:visible;
        transform:none;
        pointer-events:auto;
        box-shadow:none;
        background:transparent;
        border:none;
        padding-left:20px;
        display:none;
      }
      .header-nav .menu-item-has-children.open > .sub-menu { display:block; }
      .header-nav .sub-menu .nav-item > a { padding:10px 0; }
      .hamburger { display:flex; }
    }
    @media(min-width:992px) {
      .hamburger { display:none; }
      .header-nav ul { display:flex; }
    }

    /* ===== HERO ===== */
    .hero {
      background:#000000;
      padding:140px 0 80px;
      position:relative;
      overflow:hidden;
      min-height:90vh;
      display:flex;
      align-items:center;
    }
    .hero::before {
      content:'';
      position:absolute;
      inset:0;
      background:url('https://picsum.photos/seed/nimo-hero/1920/1080') center/cover no-repeat;
      opacity:0.35;
    }
    .hero .container { position:relative; z-index:2; width:100%; }
    .hero-grid {
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:60px;
      align-items:center;
    }
    .hero-badge { font-size:20px; font-weight:600; color:#d6f345; margin-bottom:12px; display:flex; align-items:center; gap:8px; }
    .hero-badge::before { content:"{ "; }
    .hero-badge::after { content:" }"; }
    .hero-title {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(60px,8vw,120px);
      font-weight:700;
      color:#ffffff;
      letter-spacing:-2.4px;
      line-height:0.95;
      margin-bottom:16px;
    }
    .hero-sub {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(24px,3vw,42px);
      font-weight:600;
      color:#d6f345;
      margin-bottom:20px;
    }
    .hero-text {
      font-size:18px;
      color:#b5b5b5;
      max-width:540px;
      margin-bottom:36px;
      line-height:1.7;
    }
    .hero-actions {
      display:flex;
      align-items:center;
      gap:24px;
      flex-wrap:wrap;
    }
    .hero-play-btn {
      display:inline-flex;
      align-items:center;
      gap:12px;
      color:#fff;
      font-size:16px;
      font-weight:600;
      cursor:pointer;
      transition:color 0.3s;
    }
    .hero-play-btn .play-icon {
      width:52px;
      height:52px;
      border-radius:50%;
      background:#282828;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      font-size:20px;
      transition:background 0.3s;
    }
    .hero-play-btn:hover .play-icon { background:#d6f345; color:#171619; }
    .hero-image-wrap {
      position:relative;
      display:flex;
      justify-content:center;
      align-items:center;
    }
    .hero-image-wrap img {
      width:100%;
      max-width:520px;
      border-radius:20px;
      object-fit:cover;
    }
    .hero-shape {
      position:absolute;
      width:400px;
      height:400px;
      border:1px solid rgba(214,243,69,0.15);
      border-radius:50%;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      animation:float 6s ease-in-out infinite;
    }
    .hero-shape-2 {
      width:300px;
      height:300px;
      animation-delay:-2s;
    }
    @keyframes float {
      0%,100%{ transform:translate(-50%,-50%) translateY(0); }
      50%{ transform:translate(-50%,-50%) translateY(-20px); }
    }

    /* ===== BRAND STRIP ===== */
    .brand-strip {
      padding:80px 0 60px;
      background:#111111;
      text-align:center;
    }
    .brand-strip h3 {
      font-family:'Inter',sans-serif;
      font-size:18px;
      font-weight:600;
      color:#b5b5b5;
      margin-bottom:40px;
    }
    .brand-logos {
      display:flex;
      justify-content:center;
      align-items:center;
      gap:60px;
      flex-wrap:wrap;
      opacity:0.6;
    }
    .brand-logos .brand-item {
      font-size:22px;
      font-weight:700;
      font-family:'Space Grotesk',sans-serif;
      color:#fff;
      letter-spacing:1px;
    }

    /* ===== ABOUT ===== */
    .about {
      padding:100px 0;
      background:#111111;
    }
    .about-header { margin-bottom:60px; }
    .about-grid {
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:30px;
    }
    .about-card {
      background:#1a1a1a;
      border-radius:20px;
      padding:40px 36px;
      border:1px solid rgba(255,255,255,0.06);
      transition:all 0.4s ease;
    }
    .about-card:hover { border-color:rgba(214,243,69,0.3); transform:translateY(-6px); }
    .about-card-icon {
      width:56px;
      height:56px;
      background:rgba(214,243,69,0.12);
      border-radius:14px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:26px;
      margin-bottom:24px;
      color:#d6f345;
    }
    .about-card h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:24px;
      font-weight:700;
      color:#fff;
      margin-bottom:16px;
    }
    .about-card p {
      font-size:16px;
      color:#b5b5b5;
      line-height:1.7;
    }

    /* ===== SERVICES ===== */
    .services {
      padding:100px 0;
      background:#0d0d0d;
    }
    .services-header { margin-bottom:60px; }
    .services-layout {
      display:grid;
      grid-template-columns:380px 1fr;
      gap:50px;
      align-items:start;
    }
    .services-tabs {
      display:flex;
      flex-direction:column;
      gap:4px;
    }
    .services-tab {
      background:#1a1a1a;
      border:1px solid rgba(255,255,255,0.06);
      border-radius:14px;
      padding:16px 20px;
      font-size:15px;
      font-weight:500;
      color:#b5b5b5;
      cursor:pointer;
      transition:all 0.3s;
      text-align:left;
      font-family:'Inter',sans-serif;
      display:flex;
      align-items:center;
      gap:12px;
    }
    .services-tab .tab-num {
      font-size:12px;
      font-weight:700;
      color:#d6f345;
      opacity:0.5;
      width:20px;
    }
    .services-tab:hover,
    .services-tab.active {
      background:rgba(214,243,69,0.08);
      border-color:rgba(214,243,69,0.3);
      color:#fff;
    }
    .services-tab.active .tab-num { opacity:1; }
    .services-content {
      background:#1a1a1a;
      border-radius:20px;
      padding:40px;
      border:1px solid rgba(255,255,255,0.06);
    }
    .services-content-wrap {
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:40px;
      align-items:center;
    }
    .services-content h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:30px;
      font-weight:700;
      color:#fff;
      margin-bottom:20px;
    }
    .services-content p {
      font-size:16px;
      color:#b5b5b5;
      margin-bottom:24px;
      line-height:1.7;
    }
    .services-checklist {
      display:flex;
      flex-direction:column;
      gap:12px;
      margin-bottom:30px;
    }
    .services-checklist li {
      display:flex;
      align-items:center;
      gap:12px;
      font-size:15px;
      color:#b5b5b5;
    }
    .services-checklist li .check-star {
      color:#d6f345;
      font-size:16px;
    }
    .services-content img {
      width:100%;
      border-radius:16px;
      object-fit:cover;
      aspect-ratio:4/3;
    }

    /* ===== TESTIMONIAL QUOTE ===== */
    .testimonial-quote {
      padding:100px 0;
      background:#000000;
      text-align:center;
    }
    .tq-block {
      max-width:900px;
      margin:0 auto;
    }
    .tq-quote {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(32px,4.5vw,64px);
      font-weight:700;
      color:#ffffff;
      line-height:1.15;
      letter-spacing:-1.5px;
      margin-bottom:60px;
    }
    .tq-quote em { font-style:normal; color:#d6f345; }
    .tq-stats {
      display:flex;
      justify-content:center;
      gap:80px;
      flex-wrap:wrap;
    }
    .tq-stat h4 {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(40px,5vw,70px);
      font-weight:700;
      color:#d6f345;
    }
    .tq-stat p {
      font-size:16px;
      color:#b5b5b5;
      margin-top:4px;
    }

    /* ===== PORTFOLIO ===== */
    .portfolio {
      padding:100px 0;
      background:#111111;
    }
    .portfolio-header {
      display:flex;
      justify-content:space-between;
      align-items:flex-end;
      margin-bottom:50px;
      flex-wrap:wrap;
      gap:24px;
    }
    .portfolio-grid {
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:30px;
    }
    .portfolio-item {
      position:relative;
      border-radius:20px;
      overflow:hidden;
      aspect-ratio:16/11;
      cursor:pointer;
      background:#1a1a1a;
    }
    .portfolio-item img {
      width:100%;
      height:100%;
      object-fit:cover;
      transition:transform 0.6s ease;
    }
    .portfolio-item:hover img { transform:scale(1.08); }
    .portfolio-item-overlay {
      position:absolute;
      bottom:0;
      left:0;
      right:0;
      padding:24px;
      background:linear-gradient(transparent,rgba(0,0,0,0.85));
      display:flex;
      justify-content:space-between;
      align-items:center;
    }
    .portfolio-item-tag {
      background:#323232;
      color:#ffffff;
      padding:6px 18px;
      border-radius:100px;
      font-size:13px;
      font-weight:600;
      border:1px solid rgba(255,255,255,0.2);
    }
    .portfolio-item-link {
      width:40px;
      height:40px;
      background:#d6f345;
      border-radius:50%;
      display:flex;
      align-items:center;
      justify-content:center;
      color:#171619;
      font-size:16px;
      transition:transform 0.3s;
    }
    .portfolio-item-link:hover { transform:rotate(45deg); }
    .portfolio-footer {
      margin-top:50px;
      text-align:center;
    }

    /* ===== REVIEWS ===== */
    .reviews {
      padding:100px 0;
      background:#0d0d0d;
    }
    .reviews-header { margin-bottom:60px; }
    .reviews-slider {
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:30px;
    }
    .review-card {
      background:#1a1a1a;
      border-radius:20px;
      padding:36px;
      border:1px solid rgba(255,255,255,0.06);
    }
    .review-stars {
      color:#d6f345;
      font-size:18px;
      margin-bottom:20px;
      letter-spacing:2px;
    }
    .review-card blockquote {
      font-size:16px;
      color:#b5b5b5;
      line-height:1.7;
      margin-bottom:24px;
      font-style:italic;
    }
    .review-author {
      display:flex;
      align-items:center;
      gap:14px;
    }
    .review-author img {
      width:48px;
      height:48px;
      border-radius:50%;
      object-fit:cover;
    }
    .review-author h5 {
      font-size:16px;
      font-weight:600;
      color:#fff;
    }
    .review-author span {
      font-size:13px;
      color:#777;
    }
    .reviews-nav {
      display:flex;
      justify-content:center;
      gap:12px;
      margin-top:40px;
    }
    .reviews-nav button {
      width:44px;
      height:44px;
      border-radius:50%;
      background:#282828;
      border:none;
      color:#fff;
      font-size:18px;
      cursor:pointer;
      transition:all 0.3s;
    }
    .reviews-nav button:hover { background:#d6f345; color:#171619; }

    /* ===== TEAM ===== */
    .team {
      padding:100px 0;
      background:#111111;
    }
    .team-header { margin-bottom:60px; }
    .team-grid {
      display:grid;
      grid-template-columns:repeat(4,1fr);
      gap:30px;
    }
    .team-card {
      text-align:center;
      background:#1a1a1a;
      border-radius:20px;
      padding:30px 20px 24px;
      border:1px solid rgba(255,255,255,0.06);
      transition:all 0.4s;
    }
    .team-card:hover { border-color:rgba(214,243,69,0.3); transform:translateY(-6px); }
    .team-card img {
      width:120px;
      height:120px;
      border-radius:50%;
      object-fit:cover;
      margin:0 auto 20px;
    }
    .team-card h4 {
      font-family:'Space Grotesk',sans-serif;
      font-size:20px;
      font-weight:700;
      color:#fff;
      margin-bottom:4px;
    }
    .team-card span {
      font-size:14px;
      color:#b5b5b5;
    }

    /* ===== FAQ ===== */
    .faq {
      padding:100px 0;
      background:#0d0d0d;
    }
    .faq-header { margin-bottom:60px; }
    .faq-list {
      max-width:800px;
      margin:0 auto;
      display:flex;
      flex-direction:column;
      gap:12px;
    }
    .faq-item {
      background:#1a1a1a;
      border-radius:16px;
      border:1px solid rgba(255,255,255,0.06);
      overflow:hidden;
    }
    .faq-question {
      width:100%;
      text-align:left;
      padding:22px 28px;
      font-size:17px;
      font-weight:600;
      color:#fff;
      background:none;
      border:none;
      cursor:pointer;
      display:flex;
      justify-content:space-between;
      align-items:center;
      font-family:'Inter',sans-serif;
      transition:color 0.3s;
    }
    .faq-question:hover { color:#d6f345; }
    .faq-question .faq-icon {
      width:32px;
      height:32px;
      border-radius:50%;
      background:#282828;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:16px;
      color:#fff;
      flex-shrink:0;
      transition:all 0.3s;
    }
    .faq-item.open .faq-question .faq-icon {
      background:#d6f345;
      color:#171619;
      transform:rotate(45deg);
    }
    .faq-answer {
      max-height:0;
      overflow:hidden;
      transition:max-height 0.4s ease, padding 0.4s ease;
      padding:0 28px;
    }
    .faq-answer p {
      padding-bottom:22px;
      font-size:16px;
      color:#b5b5b5;
      line-height:1.7;
    }
    .faq-item.open .faq-answer {
      max-height:300px;
      padding:0 28px;
    }

    /* ===== BLOG ===== */
    .blog {
      padding:100px 0;
      background:#111111;
    }
    .blog-header { margin-bottom:60px; }
    .blog-grid {
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:30px;
    }
    .blog-card {
      background:#1a1a1a;
      border-radius:20px;
      overflow:hidden;
      border:1px solid rgba(255,255,255,0.06);
      transition:all 0.4s;
    }
    .blog-card:hover { transform:translateY(-6px); border-color:rgba(214,243,69,0.2); }
    .blog-card img {
      width:100%;
      height:220px;
      object-fit:cover;
    }
    .blog-card-body {
      padding:28px;
    }
    .blog-date {
      font-size:13px;
      color:#777;
      margin-bottom:8px;
    }
    .blog-card h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:20px;
      font-weight:700;
      color:#fff;
      margin-bottom:12px;
      line-height:1.3;
    }
    .blog-card p {
      font-size:15px;
      color:#b5b5b5;
      line-height:1.7;
      margin-bottom:20px;
    }
    .blog-card .card-btn {
      font-size:14px;
      font-weight:600;
      color:#d6f345;
      display:inline-flex;
      align-items:center;
      gap:8px;
      transition:gap 0.3s;
    }
    .blog-card .card-btn:hover { gap:14px; }

    /* ===== FOOTER ===== */
    .footer {
      background:#000000;
      padding:80px 0 30px;
    }
    .footer-top {
      text-align:center;
      margin-bottom:60px;
    }
    .footer-top h2 {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(36px,5vw,60px);
      font-weight:700;
      color:#ffffff;
      margin-bottom:24px;
    }
    .footer-top .nm-pr-btn-1 { margin:0 auto; }
    .footer-grid {
      display:grid;
      grid-template-columns:2fr 1fr 1fr 1fr;
      gap:40px;
      padding-bottom:50px;
      border-bottom:1px solid rgba(255,255,255,0.06);
      margin-bottom:30px;
    }
    .footer-col h4 {
      font-family:'Space Grotesk',sans-serif;
      font-size:20px;
      font-weight:700;
      color:#fff;
      margin-bottom:20px;
    }
    .footer-col p {
      font-size:15px;
      color:#b5b5b5;
      line-height:1.7;
      max-width:320px;
    }
    .footer-col ul li {
      margin-bottom:12px;
    }
    .footer-col ul li a {
      font-size:15px;
      color:#b5b5b5;
      transition:color 0.3s;
    }
    .footer-col ul li a:hover { color:#d6f345; }
    .footer-bottom {
      text-align:center;
      font-size:15px;
      color:#666;
    }

    /* ===== RESPONSIVE ===== */
    @media(max-width:1024px) {
      .hero-grid { grid-template-columns:1fr; text-align:center; }
      .hero-text { margin:0 auto 36px; }
      .hero-actions { justify-content:center; }
      .hero-image-wrap { display:none; }
      .about-grid { grid-template-columns:1fr 1fr; }
      .services-layout { grid-template-columns:1fr; }
      .services-content-wrap { grid-template-columns:1fr; }
      .reviews-slider { grid-template-columns:1fr 1fr; }
      .team-grid { grid-template-columns:1fr 1fr; }
      .blog-grid { grid-template-columns:1fr 1fr; }
      .footer-grid { grid-template-columns:1fr 1fr; }
    }
    @media(max-width:768px) {
      .header-nav { display:none; }
      .hamburger { display:flex; }
      .hero-title { font-size:clamp(44px,12vw,80px); }
      .about-grid { grid-template-columns:1fr; }
      .portfolio-grid { grid-template-columns:1fr; }
      .reviews-slider { grid-template-columns:1fr; }
      .team-grid { grid-template-columns:1fr 1fr; }
      .blog-grid { grid-template-columns:1fr; }
      .footer-grid { grid-template-columns:1fr; }
      .tq-stats { gap:40px; }
    }
    @media(max-width:480px) {
      .team-grid { grid-template-columns:1fr; }
    }
  </style>
</head>
<body>

<!-- ===== HEADER ===== -->
<header class="header">
  <div class="container header-inner">
    <div class="header-logo">LeadZap</div>
    <nav class="header-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => false,
          'fallback_cb' => false,
          'depth' => 3,
          'walker' => new Nimo_Walker_Nav_Menu(),
          'items_wrap' => '<ul>%3$s<li class="nav-cta"><a href="#contact">Get in Touch</a></li></ul>',
        ]);
      ?>
    </nav>
    <div class="hamburger"><span></span><span></span><span></span></div>
  </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="container">
    <div class="hero-grid">
      <div>
        <div class="hero-badge"> Home Service Growth Agency </div>
        <h1 class="hero-title">LeadZap</h1>
        <h2 class="hero-sub">Marketing for Contractors Who Actually Do the Work</h2>
        <p class="hero-text">We are the agency HVAC, plumbing, electrical, roofing, and landscaping contractors trust to keep the phones ringing. SEO, Google Ads, and websites that book jobs  -  not just look nice on a laptop.</p>
        <div class="hero-actions">
          <button class="nm-pr-btn-1 lime-bg" onclick="alert('Book a Free Call')">
            <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
            Book a Free Call
          </button>
          <span class="hero-play-btn">
            <span class="play-icon">&#x25B6;</span>
            Read More
          </span>
        </div>
      </div>
      <div class="hero-image-wrap">
        <div class="hero-shape"></div>
        <div class="hero-shape hero-shape-2"></div>
        <img src="https://picsum.photos/seed/nimo-hero-right/520/580" alt="Agency">
      </div>
    </div>
  </div>
</section>

<!-- ===== BRAND STRIP ===== -->
<section class="brand-strip">
  <div class="container">
    <h3>Trusted by service pros from coast to coast</h3>
    <div class="brand-logos">
      <span class="brand-item">HVAC Pros</span>
      <span class="brand-item">Plumbing Co</span>
      <span class="brand-item">ElectriServ</span>
      <span class="brand-item">CleanTech</span>
      <span class="brand-item">RoofMasters</span>
      <span class="brand-item">LawnCare+</span>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about" id="about">
  <div class="container">
    <div class="about-header">
      <span class="section-badge"> Built for trades </span>
      <h2 class="section-title">We grow service<br>companies. Full stop.</h2>
    </div>
    <div class="about-grid">
      <div class="about-card">
        <div class="about-card-icon">&#x1F3AF;</div>
        <h3>Our Mission</h3>
        <p>Get service contractors ranking on page one and running ad campaigns that produce real leads  -  no bloated retainers, no agency nonsense.</p>
      </div>
      <div class="about-card">
        <div class="about-card-icon">&#x1F4A1;</div>
        <h3>How We Do It</h3>
        <p>Local SEO, Google Ads, review systems, and conversion websites  -  all tuned for HVAC, plumbing, electrical, roofing, and landscaping. You run the jobs. We keep the pipeline full.</p>
      </div>
      <div class="about-card">
        <div class="about-card-icon">&#x1F91D;</div>
        <h3>Why Us</h3>
        <p>We have been inside your business. We know slow seasons kill cash flow and no-shows wreck margins. Every strategy we build fights those exact problems.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services" id="services">
  <div class="container">
    <div class="services-header">
      <span class="section-badge"> What we do </span>
      <h2 class="section-title">10 services to keep<br>your phone ringing</h2>
    </div>
    <div class="services-layout">
      <div class="services-tabs">
        <div class="services-tab active" data-tab="0"><span class="tab-num">01</span>Service Business SEO</div>
        <div class="services-tab" data-tab="1"><span class="tab-num">02</span>Lead Generation</div>
        <div class="services-tab" data-tab="2"><span class="tab-num">03</span>Lead-Gen Website Design</div>
        <div class="services-tab" data-tab="3"><span class="tab-num">04</span>Local Search Optimization</div>
        <div class="services-tab" data-tab="4"><span class="tab-num">05</span>Social Media Marketing</div>
        <div class="services-tab" data-tab="5"><span class="tab-num">06</span>Google Ads &amp; PPC</div>
        <div class="services-tab" data-tab="6"><span class="tab-num">07</span>Reputation Management</div>
        <div class="services-tab" data-tab="7"><span class="tab-num">08</span>Email &amp; SMS Campaigns</div>
        <div class="services-tab" data-tab="8"><span class="tab-num">09</span>Branding &amp; Logo Design</div>
        <div class="services-tab" data-tab="9"><span class="tab-num">10</span>B2B &amp; Commercial Lead Gen</div>
      </div>
      <div class="services-content">
        <div class="services-content-wrap">
          <div>
            <h3 id="svc-title">Service Business SEO</h3>
            <p id="svc-desc">Stop hiding on page 5. We get HVAC, plumbing, and electrical contractors on Google's first page  -  where customers actually find you.</p>
            <ul class="services-checklist" id="svc-checklist">
              <li><span class="check-star">&#x2605;</span> Industry-specific keyword research</li>
              <li><span class="check-star">&#x2605;</span> Google Business Profile takeover</li>
              <li><span class="check-star">&#x2605;</span> Local Service Ads setup</li>
            </ul>
            <a id="svc-link" class="nm-pr-btn-1" href="https://nimo-clone.212.227.153.56.sslip.io/service-business-seo/" target="_blank" rel="noopener">
              <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
              Read More
            </a>
          </div>
          <img id="svc-img" src="https://picsum.photos/seed/nimo-brand/500/360" alt="Service">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIAL QUOTE ===== -->
<section class="testimonial-quote">
  <div class="container">
    <div class="tq-block">
      <div class="tq-quote">
        A marketing machine <em>built for</em> trades, not trends.
      </div>
      <div class="tq-stats">
        <div class="tq-stat">
          <h4>95+</h4>
          <p>Jobs Won</p>
        </div>
        <div class="tq-stat">
          <h4>12+</h4>
          <p>Years in Trades</p>
        </div>
        <div class="tq-stat">
          <h4>22+</h4>
          <p>5-Star Reviews</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PORTFOLIO ===== -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="portfolio-header">
      <div>
        <span class="section-badge"> Our work </span>
        <h2 class="section-title">Projects that fill<br>service schedules</h2>
      </div>
      <button class="nm-pr-btn-1 white-border" onclick="alert('View Portfolio')">
        <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
        View Portfolio
      </button>
    </div>
    <div class="portfolio-grid">
      <div class="portfolio-item">
        <img src="https://picsum.photos/seed/nimo-port1/600/420" alt="Portfolio 1">
        <div class="portfolio-item-overlay">
          <span class="portfolio-item-tag">HVAC Website</span>
          <span class="portfolio-item-link">&#x2197;</span>
        </div>
      </div>
      <div class="portfolio-item">
        <img src="https://picsum.photos/seed/nimo-port2/600/420" alt="Portfolio 2">
        <div class="portfolio-item-overlay">
          <span class="portfolio-item-tag">Plumbing SEO</span>
          <span class="portfolio-item-link">&#x2197;</span>
        </div>
      </div>
      <div class="portfolio-item">
        <img src="https://picsum.photos/seed/nimo-port3/600/420" alt="Portfolio 3">
        <div class="portfolio-item-overlay">
          <span class="portfolio-item-tag">Electrical Lead-Gen</span>
          <span class="portfolio-item-link">&#x2197;</span>
        </div>
      </div>
      <div class="portfolio-item">
        <img src="https://picsum.photos/seed/nimo-port4/600/420" alt="Portfolio 4">
        <div class="portfolio-item-overlay">
          <span class="portfolio-item-tag">Branding</span>
          <span class="portfolio-item-link">&#x2197;</span>
        </div>
      </div>
    </div>
    <div class="portfolio-footer">
      <button class="nm-pr-btn-1 lime-bg" onclick="alert('More Portfolio')">
        <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
        More Portfolio
      </button>
    </div>
  </div>
</section>

<!-- ===== REVIEWS ===== -->
<section class="reviews" id="reviews">
  <div class="container">
    <div class="reviews-header">
      <span class="section-badge"> Testimonials </span>
      <h2 class="section-title">Hear from real<br>service business owners</h2>
    </div>
    <div class="reviews-slider" id="reviews-slider">
      <!-- JS fills this -->
    </div>
    <div class="reviews-nav">
      <button id="rev-prev">&#x2190;</button>
      <button id="rev-next">&#x2192;</button>
    </div>
  </div>
</section>

<!-- ===== TEAM ===== -->
<section class="team" id="team">
  <div class="container">
    <div class="team-header">
      <span class="section-badge"> Our team </span>
      <h2 class="section-title">The people behind<br>your next lead surge</h2>
    </div>
    <div class="team-grid" id="team-grid">
      <!-- JS fills this -->
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq" id="faq">
  <div class="container">
    <div class="faq-header">
      <span class="section-badge"> FAQ </span>
      <h2 class="section-title">Got questions?<br>We've got answers.</h2>
    </div>
    <div class="faq-list" id="faq-list">
      <!-- JS fills this -->
    </div>
  </div>
</section>

<!-- ===== BLOG ===== -->
<section class="blog" id="blog">
  <div class="container">
    <div class="blog-header">
      <span class="section-badge"> Tips & strategy </span>
      <h2 class="section-title">Market smarter.<br>Grow faster.</h2>
    </div>
    <div class="blog-grid" id="blog-grid">
      <!-- JS fills this -->
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <h2>Ready to make<br>your phone ring?</h2>
      <button class="nm-pr-btn-1 lime-bg" onclick="alert('Claim Your Free Call')">
        <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
        Claim Your Free Call
      </button>
    </div>
    <div class="footer-grid">
      <div class="footer-col">
        <h4>LeadZap</h4>
        <p>We help HVAC, plumbing, electrical, and landscaping contractors get more leads through SEO, Google Ads, and conversion-focused websites. No fluff. Just booked jobs.</p>
      </div>
      <div class="footer-col">
        <h4>About</h4>
        <ul>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Our Team</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Features</h4>
        <ul>
          <li><a href="#">Case Studies</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Pricing</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025. All rights reserved. LeadZap  -  Marketing for Contractors Who Actually Do the Work.
    </div>
  </div>
</footer>

<script>
  // ===== SERVICES TABS =====
  (function(){
    const serviceData = [
      {
        title:'Service Business SEO',
        desc:'Stop hiding on page 5. We put HVAC, plumbing, and electrical contractors on page one of Google  -  where homeowners actually find you. Local keywords, Maps rankings, and Google Local Service Ads that pull in calls.',
        checks:['Industry-specific keyword research','Google Business Profile takeover','Local Service Ads setup & management','Technical SEO for service websites'],
        img:'https://picsum.photos/seed/nimo-seo/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/service-business-seo/'
      },
      {
        title:'Lead Generation',
        desc:'New business permits, building permits, and fresh construction projects happening in your service area right now. We use Google Maps data and proprietary systems to find businesses that need your work  -  enriched with names, phone numbers, and project details so you can contact them today.',
        checks:['Google Maps lead scraping for your service area','New permit & approval tracking systems','Business & contact data enrichment','Ready-to-call lead lists delivered weekly'],
        img:'https://picsum.photos/seed/nimo-lead/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/lead-generation/'
      },
      {
        title:'Lead-Gen Website Design',
        desc:'Your website should book jobs while you sleep. We build mobile-first, fast-loading sites with click-to-call buttons, booking forms, and service-area pages that turn browsers into booked appointments.',
        checks:['Custom lead-gen website design','Mobile-first with instant load times','Strategic CTAs & booking forms','Service area & location pages'],
        img:'https://picsum.photos/seed/nimo-web/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/lead-gen-website-design/'
      },
      {
        title:'Local Search Optimization',
        desc:'When a pipe bursts at 2 AM, your name needs to pop up first. We optimize your Google Maps listing, local citations, and directory presence so you own every "near me" search in your territory.',
        checks:['Google Maps ranking boost','NAP consistency across 50+ sites','Local citation building','Review generation & response system'],
        img:'https://picsum.photos/seed/nimo-local/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/local-search-optimization/'
      },
      {
        title:'Social Media Marketing',
        desc:'Before-and-after photos. Customer testimonials. Seasonal offers. We run your Facebook, Instagram, and Nextdoor presence so homeowners see your name before they even search.',
        checks:['Platform strategy per market','Weekly content with pro photos','Before/after showcase campaigns','Targeted local ad spend'],
        img:'https://picsum.photos/seed/nimo-social/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/social-media-marketing/'
      },
      {
        title:'Google Ads & PPC',
        desc:'Stop burning cash on clicks that don\'t call. We build Google Ads campaigns engineered for one thing: phone rings and booked appointments. Call-only ads, smart bidding, and zero wasted spend.',
        checks:['Call-only & lead-gen campaigns','Local keyword & geo-targeting','Smart bidding for max conversions','Weekly performance reporting'],
        img:'https://picsum.photos/seed/nimo-ads/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/google-ads-ppc/'
      },
      {
        title:'Reputation Management',
        desc:'One bad review can cost you thousands. We automate review collection, respond to every rating, and build a 5-star reputation that makes choosing you a no-brainer for every homeowner.',
        checks:['Automated review request system','24/7 review monitoring & alerts','Professional response templates','Competitor reputation tracking'],
        img:'https://picsum.photos/seed/nimo-rep/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/reputation-management/'
      },
      {
        title:'Email & SMS Campaigns',
        desc:'Don\'t let past customers forget you exist. Automated email and SMS sequences remind them about tune-ups, seasonal maintenance, and special offers  -  turning one-time jobs into lifetime clients.',
        checks:['Automated email nurture sequences','SMS marketing for urgent offers','Seasonal campaign calendars','Performance & ROI analytics'],
        img:'https://picsum.photos/seed/nimo-email/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/email-sms-campaigns/'
      },
      {
        title:'Branding & Logo Design',
        desc:'Your truck wrap, your website, your uniforms  -  they all tell a story. We build professional brand identities that scream trust, reliability, and quality before you say a single word.',
        checks:['Logo & wordmark design','Full brand color & type system','Truck/van wrap design','Brand guidelines document'],
        img:'https://picsum.photos/seed/nimo-brand/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/branding-logo-design/'
      },

      {
        title:'B2B & Commercial Lead Gen',
        desc:'Commercial projects are bigger tickets with fewer competitors. We find commercial construction permits, new business registrations, and building approvals - then enrich every lead with decision-maker contacts for your sales team.',
        checks:['Commercial permit & approval tracking','New business registration scraping','Decision-maker contact enrichment','B2B lead lists delivered weekly'],
        img:'https://picsum.photos/seed/nimo-b2b/500/360',
        url:'https://nimo-clone.212.227.153.56.sslip.io/b2b-commercial-lead-generation/'
      },
    ];

    const tabs = document.querySelectorAll('.services-tab');
    const titleEl = document.getElementById('svc-title');
    const descEl = document.getElementById('svc-desc');
    const checksEl = document.getElementById('svc-checklist');
    const imgEl = document.getElementById('svc-img');
    const linkEl = document.getElementById('svc-link');

    function setTab(index){
      const d = serviceData[index];
      titleEl.textContent = d.title;
      descEl.textContent = d.desc;
      checksEl.innerHTML = d.checks.map(c => '<li><span class="check-star">&#9733;</span> '+c+'</li>').join('');
      imgEl.src = d.img;
      linkEl.href = d.url;
      tabs.forEach(t => t.classList.remove('active'));
      tabs[index].classList.add('active');
    }

    tabs.forEach((tab, i) => {
      tab.addEventListener('click', () => setTab(i));
    });
    setTab(0);
  })();

  // ===== REVIEWS =====
  (function(){
    const reviews = [
      { name:'Tom Baker', role:'Owner, Baker HVAC Services', text:'LeadZap got us from 2 calls a day to 15+. Our Google Business profile went from page 3 to #1 in 6 weeks. Best money we have ever spent.', img:'https://picsum.photos/seed/rev1/96/96' },
      { name:'Lisa Nguyen', role:'CEO, Pro Plumbing Co', text:'We cut our ad spend by 40% and doubled our leads. Finally found an agency that understands plumbing contractors, not just digital marketing buzzwords.', img:'https://picsum.photos/seed/rev2/96/96' },
      { name:'Rick Morales', role:'Owner, Morales Electric', text:'I was stuck on page 5 for every keyword. LeadZap put us on page 1 in under 3 months. My phone has not stopped ringing since.', img:'https://picsum.photos/seed/rev3/96/96' },
      { name:'Diane Harper', role:'Founder, CleanRight Services', text:'The website LeadZap built us books appointments automatically. The booking form and click-to-call alone paid for the whole project in 2 months.', img:'https://picsum.photos/seed/rev4/96/96' },
      { name:'Steve Crawford', role:'COO, Crawford Roofing', text:'Three agencies failed before LeadZap. They actually understand roofing  -  the seasonal cycles, the big-ticket sales, the local market dynamics. Huge difference.', img:'https://picsum.photos/seed/rev5/96/96' },
      { name:'Maria Santos', role:'Owner, Santos Landscaping', text:'Slow seasons used to terrify me. Now our email and SMS campaigns keep the schedule full year-round. 50+ new clients this year from digital alone.', img:'https://picsum.photos/seed/rev6/96/96' }
    ];

    const container = document.getElementById('reviews-slider');
    let start = 0;
    const perPage = 3;

    function renderReviews(){
      const visible = [];
      for(let i=0; i<perPage; i++){
        const r = reviews[(start + i) % reviews.length];
        visible.push(r);
      }
      container.innerHTML = visible.map(r => `
        <div class="review-card">
          <div class="review-stars">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
          <blockquote>"${r.text}"</blockquote>
          <div class="review-author">
            <img src="${r.img}" alt="${r.name}">
            <div>
              <h5>${r.name}</h5>
              <span>${r.role}</span>
            </div>
          </div>
        </div>
      `).join('');
    }

    document.getElementById('rev-prev').addEventListener('click', () => {
      start = (start - 1 + reviews.length) % reviews.length;
      renderReviews();
    });
    document.getElementById('rev-next').addEventListener('click', () => {
      start = (start + 1) % reviews.length;
      renderReviews();
    });

    renderReviews();
  })();

  // ===== TEAM =====
  (function(){
    const members = [
      { name:'Alex Rivera', role:'CEO & Founder', img:'https://picsum.photos/seed/team1/240/240' },
      { name:'Bryann Shelton', role:'Marketing Director', img:'https://picsum.photos/seed/team2/240/240' },
      { name:'Marcus Lee', role:'Lead Developer', img:'https://picsum.photos/seed/team3/240/240' },
      { name:'Olivia Chen', role:'SEO Strategist', img:'https://picsum.photos/seed/team4/240/240' }
    ];
    document.getElementById('team-grid').innerHTML = members.map(m => `
      <div class="team-card">
        <img src="${m.img}" alt="${m.name}" loading="lazy">
        <h4>${m.name}</h4>
        <span>${m.role}</span>
      </div>
    `).join('');
  })();

  // ===== FAQ =====
  (function(){
    const faqs = [
      { q:'What does LeadZap do for home service businesses?', a:'We handle SEO, lead-gen websites, local search, social media, Google Ads, reputation management, email/SMS, and branding  -  built exclusively for HVAC, plumbing, electrical, landscaping, and home service companies.' },
      { q:'How fast will I get more calls?', a:'Most contractors see a spike in calls within 4-8 weeks from local SEO alone. Full SEO results hit in 3-6 months. We send monthly lead reports so you never wonder where your traffic is coming from.' },
      { q:'How much does a service business website cost?', a:'Our lead-gen sites start at a flat, transparent rate. No hidden fees, no surprise charges. Reach out for a free quote tailored to your market size and service area.' },
      { q:'Can you handle multi-city service areas?', a:'Yes. We build location-specific pages and citation strategies that dominate every city you service. Whether you are a single truck or a 50-truck fleet, our approach scales with you.' },
      { q:'How do I start working with LeadZap?', a:'Click "Claim Your Free Call" or reach out through our contact form. We will schedule a free discovery call, learn about your business, and build a marketing plan that fits your goals and budget.' }
    ];

    const list = document.getElementById('faq-list');
    list.innerHTML = faqs.map((f, i) => `
      <div class="faq-item${i===0?' open':''}">
        <button class="faq-question" data-index="${i}">
          ${f.q}
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>${f.a}</p>
        </div>
      </div>
    `).join('');

    list.addEventListener('click', e => {
      const btn = e.target.closest('.faq-question');
      if(!btn) return;
      const item = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      // close all
      list.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));
      if(!isOpen) item.classList.add('open');
    });
  })();

  // ===== BLOG =====
  (function(){
    const posts = [
      { title:'6 SEO Hacks Every HVAC Contractor Needs in 2026', excerpt:'Local search is changing fast. Here is what is actually working to keep HVAC companies on page 1  -  and what is not.', date:'June 14, 2026', img:'https://picsum.photos/seed/blog1/400/260' },
      { title:'Stop Building Brochure Websites. Build a Lead Machine Instead.', excerpt:'The difference between a website that sits there and a website that books jobs? These 5 features. Install them and watch your phone ring.', date:'June 7, 2026', img:'https://picsum.photos/seed/blog2/400/260' },
      { title:'The Plumbing SEO Playbook: Own Your Local Market', excerpt:'Google Business Profile optimization, review management, and local keywords  -  the exact playbook plumbing contractors use to dominate their area.', date:'June 1, 2026', img:'https://picsum.photos/seed/blog3/400/260' }
    ];
    document.getElementById('blog-grid').innerHTML = posts.map(p => `
      <div class="blog-card">
        <img src="${p.img}" alt="${p.title}" loading="lazy">
        <div class="blog-card-body">
          <div class="blog-date">${p.date}</div>
          <h3>${p.title}</h3>
          <p>${p.excerpt}</p>
          <a href="#" class="card-btn">Read More &#x2192;</a>
        </div>
      </div>
    `).join('');
  })();

  // ===== NAV: Hamburger Toggle =====
  (function(){
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.header-nav ul');
    if(!hamburger || !nav) return;
    hamburger.addEventListener('click', function(){
      nav.classList.toggle('open');
    });
    // Mobile: tap on parent toggles submenu
    if(window.innerWidth < 992){
      document.querySelectorAll('.header-nav .menu-item-has-children > a').forEach(function(link){
        link.addEventListener('click', function(e){
          if(window.innerWidth >= 992) return;
          e.preventDefault();
          this.parentElement.classList.toggle('open');
        });
      });
    }
    // Close on outside click
    document.addEventListener('click', function(e){
      if(!e.target.closest('.header')) nav.classList.remove('open');
    });
  })();
</script>
</body>
</html>
