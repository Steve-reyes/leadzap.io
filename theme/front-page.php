<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="apple-touch-icon" href="/wp-content/themes/nimo/img/apple-touch-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LeadZap  -  Lead Generation & SEO for Home Service Contractors</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
      color:#e0e0e0;
      padding:6px 30px 6px 6px;
      border-radius:100px;
      font-family:'Inter',sans-serif;
      font-size:16px;
      font-weight:600;
      border:none;
      cursor:pointer;
      transition:all 0.3s ease;
    }
    .nm-pr-btn-1:hover { background:#333; color:#d6f345; }
    .nm-pr-btn-1.lime-bg:hover { opacity:0.9; }
    .nm-pr-btn-1.white-border:hover { border-color:#d6f345; color:#d6f345; }
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
      background:url('/wp-content/themes/nimo/img/leadzap/hero-bg.jpg') center/cover no-repeat;
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
    .about-header { text-align:center; margin-bottom:60px; }
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

    /* ===== B2B SECTION ===== */
    .b2b-section { padding:100px 0; background:#0f0f0f; position:relative; overflow:hidden; }
    .b2b-section::before { content:''; position:absolute; top:-50%; right:-20%; width:600px; height:600px; background:radial-gradient(circle,rgba(214,243,69,0.04) 0%,transparent 70%); pointer-events:none; }
    .b2b-header { text-align:center; margin-bottom:60px; }
    .b2b-badge { display:inline-block; background:rgba(214,243,69,0.12); color:#d6f345; font-size:12px; font-weight:600; letter-spacing:2px; padding:6px 18px; border-radius:100px; margin-bottom:20px; }
    .b2b-subtitle { max-width:680px; margin:20px auto 0; font-size:17px; color:#b5b5b5; line-height:1.7; }
    .b2b-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:24px; margin-bottom:60px; }
    .b2b-card { background:#1a1a1a; border:1px solid rgba(255,255,255,0.06); border-radius:16px; padding:36px 32px; transition:all 0.4s; }
    .b2b-card:hover { border-color:rgba(214,243,69,0.25); transform:translateY(-4px); }
    .b2b-icon { font-size:26px; margin-bottom:16px; color:#d6f345; }
    .b2b-card h3 { font-family:'Space Grotesk',sans-serif; font-size:20px; font-weight:700; color:#fff; margin-bottom:10px; }
    .b2b-card p { font-size:15px; color:#b5b5b5; line-height:1.7; }
    .b2b-stats { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-bottom:50px; }
    .b2b-stat { text-align:center; background:rgba(214,243,69,0.04); border:1px solid rgba(214,243,69,0.08); border-radius:16px; padding:32px 20px; }
    .b2b-stat-num { display:block; font-family:'Space Grotesk',sans-serif; font-size:42px; font-weight:700; color:#d6f345; margin-bottom:6px; }
    .b2b-stat-label { font-size:14px; color:#888; line-height:1.5; }
    .b2b-cta { text-align:center; }
    .b2b-cta .nm-pr-btn-1 { display:inline-flex; align-items:center; gap:8px; }

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
    .portfolio-item-overlay {
      opacity:0;
      transition:opacity 0.4s ease;
    }
    .portfolio-item:hover .portfolio-item-overlay {
      opacity:1;
    }
    .portfolio-overlay-content {
      flex:1;
    }
    .portfolio-overlay-desc {
      font-size:13px;
      line-height:1.5;
      color:#e0e0e0;
      margin-top:8px;
      display:none;
    }
    .portfolio-item:hover .portfolio-overlay-desc {
      display:block;
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
    .portfolio-meta {
      padding:16px 0 4px;
    }
    .portfolio-meta strong {
      display:block;
      font-family:"Space Grotesk",sans-serif;
      font-size:16px;
      font-weight:700;
      color:#fff;
      margin-bottom:2px;
    }
    .portfolio-meta span {
      font-size:14px;
      color:#888;
    }
        .portfolio-meta {
      padding:16px 0 4px;
    }
    .portfolio-meta strong {
      display:block;
      font-family:"Space Grotesk",sans-serif;
      font-size:16px;
      font-weight:700;
      color:#fff;
      margin-bottom:2px;
    }
    .portfolio-meta span {
      font-size:14px;
      color:#888;
    }
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
    .review-author .avatar-placeholder {
      width:48px;
      height:48px;
      border-radius:50%;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight:700;
      font-size:14px;
      font-family:"Space Grotesk",sans-serif;
      flex-shrink:0;
      background:#d6f345;
      color:#171619;
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
        <div class="hero-badge"> Service Growth Agency </div>
        <h1 class="hero-title">LeadZap</h1>
        <h2 class="hero-sub">More Leads. More Growth. Less Fluff.</h2>
        <p class="hero-text">We get your phone ringing with real leads  -  not vanity metrics. Lead generation from Google Maps and permits, SEO that puts you on page one, Google Ads that produce calls, and websites built to convert. No agency fluff. Just booked jobs.</p>
        <div class="hero-actions">
          <a href="/contact-us/" class="nm-pr-btn-1 lime-bg">
            <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
            Book a Free Call
          </a>
        </div>
      </div>
      <div class="hero-image-wrap">
        <div class="hero-shape"></div>
        <div class="hero-shape hero-shape-2"></div>
        <img src="/wp-content/themes/nimo/img/leadzap/hero-right.jpg" alt="Agency">
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about" id="about">
<section class="about" id="about">
  <div class="container">
    <div class="about-header">
      <span class="section-badge"> Built for trades </span>
      <h2 class="section-title">We grow service<br>companies. Full stop.</h2>
      <p class="section-desc" style="max-width:650px; margin:20px auto 0; color:#b5b5b5; font-size:17px; line-height:1.7; text-align:center;">LeadZap is a lead generation and digital marketing agency built exclusively for HVAC, plumbing, electrical, roofing, and landscaping contractors. We don&#039;t do generic marketing. We build pipelines that actually close.</p>
    </div>
    <div class="about-grid">
      <div class="about-card">
        <div class="about-card-icon"><i class="fas fa-bullseye"></i></div>
        <h3>What We Do</h3>
        <p>LeadZap generates qualified, ready-to-close leads for service contractors. From Google Maps scraping and local service ads to permit tracking and conversion websites — every channel is tuned specifically for trades that need their pipeline full.</p>
      </div>
      <div class="about-card">
        <div class="about-card-icon"><i class="fas fa-lightbulb"></i></div>
        <h3>Who We Serve</h3>
        <p>HVAC, plumbing, electrical, roofing, landscaping, and commercial contractors. If your business relies on service calls, seasonal cycles, and local reputation — you are exactly who we build for. We know the industry, the margins, and what actually converts.</p>
      </div>
      <div class="about-card">
        <div class="about-card-icon"><i class="fas fa-rocket"></i></div>
        <h3>The LeadZap Difference</h3>
        <p>No long contracts. No fluff reports. Every campaign has a measurable lead target. Track your cost per lead, calls per day, and revenue attributed to each channel in a dashboard that actually makes sense.</p>
      </div>
    </div>
  </div>
</section><section class="services" id="services">
  <div class="container">
    <div class="services-header">
      <span class="section-badge"> What we do </span>
      <h2 class="section-title">10 ways we drive<br>growth for your business</h2>
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
            <p id="svc-desc">Stop hiding on page 5. We get HVAC, plumbing, electrical, roofing, and landscaping contractors on Google's first page  -  where customers actually find you.</p>
            <ul class="services-checklist" id="svc-checklist">
              <li><span class="check-star">&#x2605;</span> Industry-specific keyword research</li>
              <li><span class="check-star">&#x2605;</span> Google Business Profile takeover</li>
              <li><span class="check-star">&#x2605;</span> Local Service Ads setup</li>
            </ul>
            <a id="svc-link" class="nm-pr-btn-1" href="https://nimo-clone.87.106.124.206.nip.io/service-business-seo/" target="_blank" rel="noopener">
              <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
              Read More
            </a>
          </div>
          <img id="svc-img" src="/wp-content/themes/nimo/img/leadzap/service-seo.jpg" alt="Service">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== B2B & COMMERCIAL LEAD GEN SECTION ===== -->
<section class="b2b-section" id="b2b-leads">
  <div class="container">
    <div class="b2b-header">
      <span class="b2b-badge">B2B &amp; COMMERCIAL</span>
      <h2 class="section-title">Commercial Lead Generation<br><span style="color:#d6f345">for Service Contractors</span></h2>
      <p class="b2b-subtitle">Residential leads are great. But one commercial contract can be worth 20 residential jobs. We help you find, qualify, and close high-value B2B opportunities.</p>
    </div>

    <div class="b2b-grid">
      <div class="b2b-card">
        <div class="b2b-icon"><i class="fas fa-hard-hat"></i></div>
        <h3>Building Permit Tracking</h3>
        <p>We monitor every building permit, planning application, and development approval in your service area. When someone files for a major renovation or new construction, you are the first contractor they hear from.</p>
      </div>
      <div class="b2b-card">
        <div class="b2b-icon"><i class="fas fa-clipboard-list"></i></div>
        <h3>Business Registration Alerts</h3>
        <p>New businesses mean new HVAC installs, electrical work, plumbing, and landscaping contracts. We scrape new business registrations daily and deliver them to your CRM before your competitors even know they exist.</p>
      </div>
      <div class="b2b-card">
        <div class="b2b-icon"><i class="fas fa-search"></i></div>
        <h3>Decision-Maker Contact Enrichment</h3>
        <p>Raw permit data is useless without contacts. We enrich every lead with verified phone numbers, email addresses, and company profiles so your sales team can start dialing immediately.</p>
      </div>
      <div class="b2b-card">
        <div class="b2b-icon"><i class="fas fa-box"></i></div>
        <h3>Weekly B2B Lead Lists</h3>
        <p>No dashboards to check, no portals to log into. We send you a clean, prioritized list of B2B leads every Monday morning. CSV or direct CRM integration  -  your choice.</p>
      </div>
    </div>

    <div class="b2b-stats">
      <div class="b2b-stat">
        <span class="b2b-stat-num">3-5x</span>
        <span class="b2b-stat-label">Higher average contract value vs. residential</span>
      </div>
      <div class="b2b-stat">
        <span class="b2b-stat-num">80%</span>
        <span class="b2b-stat-label">Less competition on commercial projects</span>
      </div>
      <div class="b2b-stat">
        <span class="b2b-stat-num">2,400+</span>
        <span class="b2b-stat-label">Permits &amp; leads tracked monthly</span>
      </div>
    </div>

    <div class="b2b-cta">
      <a href="/contact-us/" class="nm-pr-btn-1 lime-bg">
        Get Your First B2B Lead List Free
        <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
      </a>
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
          <h4>55+</h4>
          <p>Jobs Won</p>
        </div>
        <div class="tq-stat">
          <h4>5+</h4>
          <p>Years in Trades</p>
        </div>
        <div class="tq-stat">
          <h4>100+</h4>
          <p>Cities Covered</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DISABLED: portfolio section
<!-- DISABLED
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

<!-- ===== REVIEWS ===== -->
<section class="reviews" id="reviews">
  <div class="container">
    <div class="reviews-header">
      <span class="section-badge"> Testimonials </span>
      <h2 class="section-title">The best reviews<br>from clients</h2>
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
      <h2 class="section-title">Meet our talented<br>professionals</h2>
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
      <span class="section-badge"> Questions? </span>
      <h2 class="section-title">Frequently Asked<br>Questions</h2>
    </div>
    <div class="faq-list" id="faq-list"></div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <h2>Ready to make<br>your phone ring?</h2>
      <a href="/contact-us/" class="nm-pr-btn-1 lime-bg">
        <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
        Book a Free Call
      </a>
    </div>
    <div class="footer-grid">
      <div class="footer-col">
        <h4>LeadZap</h4>
        <p>We generate qualified leads for HVAC, plumbing, electrical, roofing, and landscaping contractors. Google Maps scraping, permit tracking, SEO, Google Ads, and websites built to convert. Your phone rings. Your business grows. No fluff.</p>
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
          <li><a href="/contact-us/">Contact Us</a></li>
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
      &copy; 2025. All rights reserved. LeadZap  -  Lead Generation & Growth for Home Service Contractors.
    </div>
  </div>
</footer>

<script>
  // ===== SERVICES TABS =====
  (function(){
    const serviceData = [
      {
        title:'Service Business SEO',
        desc:'Stop hiding on page 5. We put HVAC, plumbing, electrical, roofing, and landscaping contractors on page one of Google  -  where homeowners actually find you. Local keywords, Maps rankings, and Google Local Service Ads that pull in calls.',
        checks:['Industry-specific keyword research','Google Business Profile takeover','Local Service Ads setup & management','Technical SEO for service websites'],
        img:'/wp-content/themes/nimo/img/leadzap/service-seo.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/service-business-seo/'
      },
      {
        title:'Lead Generation',
        desc:'New business permits, building permits, and fresh construction projects happening in your service area right now. We use Google Maps data and proprietary systems to find businesses that need your work  -  enriched with names, phone numbers, and project details so you can contact them today.',
        checks:['Google Maps lead scraping for your service area','New permit & approval tracking systems','Business & contact data enrichment','Ready-to-call lead lists delivered weekly'],
        img:'/wp-content/themes/nimo/img/leadzap/service-lead.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/lead-generation/'
      },
      {
        title:'Lead-Gen Website Design',
        desc:'Your website should book jobs while you sleep. We build mobile-first, fast-loading sites with click-to-call buttons, booking forms, and service-area pages that turn browsers into booked appointments.',
        checks:['Custom lead-gen website design','Mobile-first with instant load times','Strategic CTAs & booking forms','Service area & location pages'],
        img:'/wp-content/themes/nimo/img/leadzap/service-web.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/lead-gen-website-design/'
      },
      {
        title:'Local Search Optimization',
        desc:'When a pipe bursts at 2 AM, your name needs to pop up first. We optimize your Google Maps listing, local citations, and directory presence so you own every "near me" search in your territory.',
        checks:['Google Maps ranking boost','NAP consistency across 50+ sites','Local citation building','Review generation & response system'],
        img:'/wp-content/themes/nimo/img/leadzap/service-local.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/local-search-optimization/'
      },
      {
        title:'Social Media Marketing',
        desc:'Before-and-after photos. Customer testimonials. Seasonal offers. We run your Facebook, Instagram, and Nextdoor presence so homeowners see your name before they even search.',
        checks:['Platform strategy per market','Weekly content with pro photos','Before/after showcase campaigns','Targeted local ad spend'],
        img:'/wp-content/themes/nimo/img/leadzap/service-social.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/social-media-marketing/'
      },
      {
        title:'Google Ads & PPC',
        desc:'Stop burning cash on clicks that don\'t call. We build Google Ads campaigns engineered for one thing: phone rings and booked appointments. Call-only ads, smart bidding, and zero wasted spend.',
        checks:['Call-only & lead-gen campaigns','Local keyword & geo-targeting','Smart bidding for max conversions','Weekly performance reporting'],
        img:'/wp-content/themes/nimo/img/leadzap/service-ads.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/google-ads-ppc/'
      },
      {
        title:'Reputation Management',
        desc:'One bad review can cost you thousands. We automate review collection, respond to every rating, and build a 5-star reputation that makes choosing you a no-brainer for every homeowner.',
        checks:['Automated review request system','24/7 review monitoring & alerts','Professional response templates','Competitor reputation tracking'],
        img:'/wp-content/themes/nimo/img/leadzap/service-rep.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/reputation-management/'
      },
      {
        title:'Email & SMS Campaigns',
        desc:'Don\'t let past customers forget you exist. Automated email and SMS sequences remind them about tune-ups, seasonal maintenance, and special offers  -  turning one-time jobs into lifetime clients.',
        checks:['Automated email nurture sequences','SMS marketing for urgent offers','Seasonal campaign calendars','Performance & ROI analytics'],
        img:'/wp-content/themes/nimo/img/leadzap/service-email.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/email-sms-campaigns/'
      },
      {
        title:'Branding & Logo Design',
        desc:'Your truck wrap, your website, your uniforms  -  they all tell a story. We build professional brand identities that scream trust, reliability, and quality before you say a single word.',
        checks:['Logo & wordmark design','Full brand color & type system','Truck/van wrap design','Brand guidelines document'],
        img:'/wp-content/themes/nimo/img/leadzap/service-seo.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/branding-logo-design/'
      },

      {
        title:'B2B & Commercial Lead Gen',
        desc:'Commercial projects are bigger tickets with fewer competitors. We find commercial construction permits, new business registrations, and building approvals - then enrich every lead with decision-maker contacts for your sales team.',
        checks:['Commercial permit & approval tracking','New business registration scraping','Decision-maker contact enrichment','B2B lead lists delivered weekly'],
        img:'/wp-content/themes/nimo/img/leadzap/service-b2b.jpg',
        url:'https://nimo-clone.87.106.124.206.nip.io/b2b-commercial-lead-generation/'
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
      { name:'Tom Baker', role:'Owner, Baker HVAC Services', text:'LeadZap got us from 2 calls a day to 15+. Our Google Business profile went from page 3 to #1 in 6 weeks. Best money we have ever spent.', img:'/wp-content/themes/nimo/img/leadzap/review1.jpg' },
      { name:'Rebecca Tremblay', role:'CEO, Pro Plumbing Co', text:'We cut our ad spend by 40% and doubled our leads. Finally found an agency that understands plumbing contractors, not just digital marketing buzzwords.', img:'/wp-content/themes/nimo/img/leadzap/review2.jpg' },
      { name:'Rick Morales', role:'Owner, Morales Electric', text:'I was stuck on page 5 for every keyword. LeadZap put us on page 1 in under 3 months. My phone has not stopped ringing since.', img:'/wp-content/themes/nimo/img/leadzap/review3.jpg' },
      { name:'Diane Harper', role:'Founder, CleanRight Services', text:'The website LeadZap built us books appointments automatically. The booking form and click-to-call alone paid for the whole project in 2 months.', img:'/wp-content/themes/nimo/img/leadzap/review4.jpg' },
      { name:'Steve Crawford', role:'COO, Crawford Roofing', text:'Three agencies failed before LeadZap. They actually understand roofing  -  the seasonal cycles, the big-ticket sales, the local market dynamics. Huge difference.', img:'/wp-content/themes/nimo/img/leadzap/review5.jpg' },
      { name:'Maria Santos', role:'Owner, Santos Landscaping', text:'Slow seasons used to terrify me. Now our email and SMS campaigns keep the schedule full year-round. 50+ new clients this year from digital alone.', img:'/wp-content/themes/nimo/img/leadzap/review6.jpg' }
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
            <div class="avatar-placeholder">${r.name.split(" ")[0].charAt(0)}${r.name.split(" ")[1]?.charAt(0) || ""}</div>
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
      { name:'Alex Rivera', role:'CEO & Founder', img:'/wp-content/themes/nimo/img/leadzap/team1.jpg' },
      { name:'Bryann Shelton', role:'Marketing Director', img:'/wp-content/themes/nimo/img/leadzap/team2.jpg' },
      { name:'Marcus Lee', role:'Lead Developer', img:'/wp-content/themes/nimo/img/leadzap/team3.jpg' },
      { name:'Olivia Chen', role:'SEO Strategist', img:'/wp-content/themes/nimo/img/leadzap/team4.jpg' }
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
      { q:'What does LeadZap do for home service businesses?', a:'We handle SEO, lead-gen websites, local search, social media, Google Ads, reputation management, email/SMS, and branding  -  built exclusively for HVAC, plumbing, electrical, roofing, landscaping, and home service companies.' },
      { q:'How fast will I get more calls?', a:'Most contractors see a spike in calls within 4-8 weeks from local SEO alone. Full SEO results hit in 3-6 months. We send monthly lead reports so you never wonder where your traffic is coming from.' },
      { q:'How much does a service business website cost?', a:'Our lead-gen sites start at a flat, transparent rate. No hidden fees, no surprise charges. Reach out for a free quote tailored to your market size and service area.' },
      { q:'Can you handle multi-city service areas?', a:'Yes. We build location-specific pages and citation strategies that dominate every city you service. Whether you are a single truck or a 50-truck fleet, our approach scales with you.' },
      { q:'How do I start working with LeadZap?', a:'Click "Book a Free Call" or reach out through our contact form. We will schedule a free discovery call, learn about your business, and build a marketing plan that fits your goals and budget.' }
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
      { title:'6 SEO Hacks Every HVAC Contractor Needs in 2026', excerpt:'Local search is changing fast. Here is what is actually working to keep HVAC companies on page 1  -  and what is not.', date:'June 14, 2026', img:'/wp-content/themes/nimo/img/leadzap/blog1.jpg' },
      { title:'Stop Building Brochure Websites. Build a Lead Machine Instead.', excerpt:'The difference between a website that sits there and a website that books jobs? These 5 features. Install them and watch your phone ring.', date:'June 7, 2026', img:'/wp-content/themes/nimo/img/leadzap/blog2.jpg' },
      { title:'The Plumbing SEO Playbook: Own Your Local Market', excerpt:'Google Business Profile optimization, review management, and local keywords  -  the exact playbook plumbing contractors use to dominate their area.', date:'June 1, 2026', img:'/wp-content/themes/nimo/img/leadzap/blog3.jpg' }
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
