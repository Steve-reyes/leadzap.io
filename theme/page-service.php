<?php
/**
 * Template Name: Service Page
 * Description: Individual service page matching Nimo dark theme
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="apple-touch-icon" href="/wp-content/themes/nimo/img/apple-touch-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?> LeadZap — Services</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
    *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body { background:#111111; color:#b5b5b5; font-family:'Inter',sans-serif; font-size:18px; font-weight:400; line-height:1.6; overflow-x:hidden; }
    img { max-width:100%; display:block; }
    a { text-decoration:none; color:inherit; }
    ul { list-style:none; }
    .container { max-width:1320px; margin:0 auto; padding:0 24px; }
    :root { --body-bg:#111111; --text:#b5b5b5; --white:#ffffff; --lime:#d6f345; --dark-btn:#282828; --btn-text:#171619; --hero-bg:#000000; --tag-bg:#323232; --border-rgba:rgba(255,255,255,0.2); }

    .nm-pr-btn-1 { display:inline-flex; align-items:center; gap:14px; background:#282828; color:#e0e0e0; padding:6px 30px 6px 6px; border-radius:100px; font-family:'Inter',sans-serif; font-size:16px; font-weight:600; border:none; cursor:pointer; transition:all 0.3s ease; }
    .nm-pr-btn-1:hover { background:#333; color:#d6f345; }
    .nm-pr-btn-1.lime-bg:hover { opacity:0.9; color:#171619; }
    .nm-pr-btn-1.white-border:hover { border-color:#d6f345; color:#d6f345; }
    .nm-pr-btn-1 .wa_magnetic_btn_2_elm { display:inline-flex; align-items:center; justify-content:center; width:42px; height:42px; background:#d6f345; border-radius:50%; color:#171619; font-size:18px; flex-shrink:0; }
    .nm-pr-btn-1.lime-bg { background:#d6f345; color:#171619; }
    .nm-pr-btn-1.lime-bg .wa_magnetic_btn_2_elm { background:#171619; color:#d6f345; }
    .section-badge { font-family:'Inter',sans-serif; font-size:20px; font-weight:600; color:#d6f345; display:inline-block; margin-bottom:16px; }
    .section-badge::before { content:"{ "; }
    .section-badge::after { content:" }"; }
    .section-title { font-family:'Space Grotesk',sans-serif; font-size:clamp(36px,5vw,64px); font-weight:700; color:#ffffff; line-height:1.1; letter-spacing:-1.5px; }

    .header { position:fixed; top:0; left:0; right:0; z-index:1000; background:rgba(17,17,17,0.95); backdrop-filter:blur(20px); border-bottom:1px solid rgba(255,255,255,0.06); padding:18px 0; }
    .header-inner { display:flex; align-items:center; justify-content:space-between; }
    .header-logo { font-family:'Space Grotesk',sans-serif; font-size:28px; font-weight:700; color:#ffffff; }
    .header-nav { display:flex; align-items:center; gap:36px; }
    .header-nav a.nav-cta { background:#d6f345; color:#171619; padding:12px 28px; border-radius:100px; font-family:'Inter',sans-serif; font-weight:600; font-size:16px; }
    .header-nav a.nav-cta:hover { background:#c8e03a; }
    .hamburger { display:none; flex-direction:column; gap:5px; cursor:pointer; }
    .hamburger span { width:28px; height:3px; background:#fff; border-radius:3px; }
    .header-nav .nav-item { position:relative; list-style:none; }
    .header-nav .nav-item > a { font-family:'Space Grotesk',sans-serif; font-size:16px; font-weight:700; color:#fff; transition:color 0.3s; padding:12px 0; display:inline-block; }
    .header-nav .nav-item > a:hover { color:#d6f345; }
    .header-nav .sub-menu { position:absolute; top:100%; left:0; min-width:220px; display:block; background:#1a1a1a; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:12px 0; opacity:0; visibility:hidden; transform:translateY(8px); transition:all 0.25s ease; z-index:999; pointer-events:none; box-shadow:0 20px 60px rgba(0,0,0,0.6); }
    .header-nav .menu-item-has-children:hover > .sub-menu,
    .header-nav .sub-menu:hover { opacity:1; visibility:visible; transform:translateY(0); pointer-events:auto; }
    .header-nav .sub-menu .nav-item > a { display:block; padding:10px 24px; font-size:15px; font-weight:500; color:#b5b5b5; }
    .header-nav .sub-menu .nav-item > a:hover { color:#d6f345; background:rgba(214,243,69,0.05); }
    .header-nav .sub-menu .sub-menu { left:100%; top:-12px; transform:translateX(8px); }
    .header-nav .menu-item-has-children > a::after { content:'▾'; display:inline-block; margin-left:6px; font-size:10px; color:#888; transition:transform 0.2s; }
    .header-nav .menu-item-has-children:hover > a::after { transform:rotate(180deg); }
    .header-nav ul { display:flex; align-items:center; gap:36px; margin:0; padding:0; list-style:none; }
    .header-nav ul .nav-cta a { background:#d6f345; color:#171619; padding:12px 28px; border-radius:100px; font-family:'Inter',sans-serif; font-weight:600; font-size:16px; }
    .header-nav ul .nav-cta a:hover { background:#c8e03a; color:#171619; }

    /* ===== SERVICE PAGE ===== */
    .service-page {
      padding:160px 0 80px;
      background:#111111;
      min-height:100vh;
    }
    .service-page .back-link {
      display:inline-flex; align-items:center; gap:8px;
      color:#888; font-size:15px; font-weight:600; margin-bottom:40px; transition:color 0.3s;
    }
    .service-page .back-link:hover { color:#d6f345; }
    .service-page-header {
      max-width:900px;
      margin:0 auto 50px;
      text-align:center;
    }
    .service-page-header h1 {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(32px,5vw,56px);
      font-weight:700; color:#fff;
      line-height:1.15; letter-spacing:-1.5px;
      margin-bottom:20px;
    }
    .service-page-header p {
      font-size:18px; color:#b5b5b5; line-height:1.7; max-width:700px; margin:0 auto;
    }
    .service-page-content {
      max-width:800px;
      margin:0 auto;
    }
    .service-page-content h2 {
      font-family:'Space Grotesk',sans-serif;
      font-size:28px; font-weight:700; color:#fff;
      margin:50px 0 20px; letter-spacing:-0.5px;
    }
    .service-page-content h2:first-of-type { margin-top:0; }
    .service-page-content h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:22px; font-weight:700; color:#fff;
      margin:30px 0 16px; letter-spacing:-0.3px;
    }
    .service-page-content p {
      font-size:17px; color:#b5b5b5; line-height:1.8; margin-bottom:20px;
    }
    .service-page-content a { color:#d6f345; border-bottom:1px solid transparent; transition:border 0.3s; }
    .service-page-content a:hover { border-bottom-color:#d6f345; }
    .service-page-content ul, .service-page-content ol { margin:20px 0; padding-left:24px; }
    .service-page-content li { margin-bottom:10px; font-size:17px; color:#b5b5b5; line-height:1.7; }
    .service-page-content li strong { color:#fff; }
    .service-page-content .check-star { color:#d6f345; margin-right:8px; }
    .service-page-cta {
      text-align:center;
      margin-top:60px;
      padding-top:40px;
      border-top:1px solid rgba(255,255,255,0.06);
    }
    .service-page-cta h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:28px; font-weight:700; color:#fff;
      margin-bottom:16px;
    }
    .service-page-cta p {
      font-size:16px; color:#b5b5b5; margin-bottom:24px;
    }

    .footer { background:#000000; padding:80px 0 30px; }
    .footer-top { text-align:center; margin-bottom:60px; }
    .footer-top h2 { font-family:'Space Grotesk',sans-serif; font-size:clamp(36px,5vw,60px); font-weight:700; color:#ffffff; margin-bottom:24px; }
    .footer-top .nm-pr-btn-1 { margin:0 auto; }
    .footer-grid { display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:40px; padding-bottom:50px; border-bottom:1px solid rgba(255,255,255,0.06); margin-bottom:30px; }
    .footer-col h4 { font-family:'Space Grotesk',sans-serif; font-size:20px; font-weight:700; color:#fff; margin-bottom:20px; }
    .footer-col p { font-size:15px; color:#b5b5b5; line-height:1.7; max-width:320px; }
    .footer-col ul li { margin-bottom:12px; }
    .footer-col ul li a { font-size:15px; color:#b5b5b5; transition:color 0.3s; }
    .footer-col ul li a:hover { color:#d6f345; }

    /* ===== CONTACT FORM ===== */
    .wpcf7-form .cf7-contact-form label { display:block; font-size:13px; font-weight:600; color:#fff; margin-bottom:4px; }
    .wpcf7-form .cf7-contact-form input[type="text"],
    .wpcf7-form .cf7-contact-form input[type="email"],
    .wpcf7-form .cf7-contact-form input[type="tel"],
    .wpcf7-form .cf7-contact-form select,
    .wpcf7-form .cf7-contact-form textarea {
      width:100%; background:#1a1a1a; border:1px solid rgba(255,255,255,0.12); border-radius:12px;
      padding:10px 14px; font-size:15px; font-family:'Inter',sans-serif; color:#fff;
      outline:none; transition:border-color 0.3s; margin-bottom:10px;
    }
    .wpcf7-form .cf7-contact-form input:focus,
    .wpcf7-form .cf7-contact-form select:focus,
    .wpcf7-form .cf7-contact-form textarea:focus { border-color:#d6f345; }
    .wpcf7-form .cf7-contact-form textarea { min-height:100px; resize:vertical; }
    .wpcf7-form .cf7-contact-form input[type="submit"] {
      background:#d6f345; color:#171619; padding:10px 32px; border:none; border-radius:100px;
      font-family:'Inter',sans-serif; font-size:15px; font-weight:600; cursor:pointer;
      transition:opacity 0.3s; display:inline-block;
    }
    .wpcf7-form .cf7-contact-form input[type="submit"]:hover { opacity:0.85; }
    .wpcf7-form .cf7-contact-form p { margin:0 0 6px 0; }
    .wpcf7-form .cf7-contact-form br { display:none; }
    .wpcf7 form .wpcf7-response-output { margin:20px 0; padding:16px 20px; border-radius:12px; font-size:15px; }
    .wpcf7 form.invalid .wpcf7-response-output, .wpcf7 form.unaccepted .wpcf7-response-output { border-color:#e74c3c; background:rgba(231,76,60,0.1); color:#e74c3c; }
    .wpcf7 form.sent .wpcf7-response-output { border-color:#27ae60; background:rgba(39,174,96,0.1); color:#27ae60; }
    .wpcf7-spinner { display:block; margin:16px auto; }

    /* ===== SUCCESS OVERLAY ===== */
    .leadzap-overlay { display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.85); z-index:99999; align-items:center; justify-content:center; backdrop-filter:blur(8px); }
    .leadzap-overlay.active { display:flex; }
    .leadzap-modal { background:#1a1a1a; border:1px solid rgba(255,255,255,0.08); border-radius:24px; padding:48px 40px; max-width:460px; width:90%; text-align:center; animation:modalPop 0.3s ease; }
    @keyframes modalPop { 0% { transform:scale(0.9); opacity:0; } 100% { transform:scale(1); opacity:1; } }
    .leadzap-modal .check-icon { width:72px; height:72px; background:#d6f345; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 24px; font-size:36px; color:#171619; }
    .leadzap-modal h3 { font-family:'Space Grotesk',sans-serif; font-size:26px; font-weight:700; color:#fff; margin-bottom:12px; }
    .leadzap-modal p { font-size:15px; color:#b5b5b5; line-height:1.6; margin-bottom:28px; }
    .leadzap-modal .modal-btn { background:#d6f345; color:#171619; padding:12px 32px; border:none; border-radius:100px; font-family:'Inter',sans-serif; font-size:15px; font-weight:600; cursor:pointer; transition:opacity 0.3s; }
    .leadzap-modal .modal-btn:hover { opacity:0.85; }

    /* ===== CONTACT INFO GRID ===== */
    .contact-info-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:20px; margin-top:50px; }
    .contact-info-card { background:#1a1a1a; border-radius:16px; padding:32px 28px; border:1px solid rgba(255,255,255,0.06); text-align:center; transition:all 0.4s; }
    .contact-info-card:hover { border-color:rgba(214,243,69,0.3); transform:translateY(-4px); }
    .contact-info-card .contact-icon { font-size:36px; margin-bottom:16px; }
    .contact-info-card h3 { font-family:'Space Grotesk',sans-serif; font-size:20px; font-weight:700; color:#fff; margin-bottom:10px; }
    .contact-info-card p { font-size:15px; color:#b5b5b5; line-height:1.7; }
    .contact-info-card a { color:#d6f345; border-bottom:1px solid transparent; transition:border 0.3s; }
    .contact-info-card a:hover { border-bottom-color:#d6f345; }
    .footer-bottom { text-align:center; font-size:15px; color:#666; }

    @media(max-width:991px) {
      .header-nav ul { display:none; flex-direction:column; position:fixed; top:75px; left:0; right:0; background:#1a1a1a; padding:24px; gap:0; border-bottom:1px solid rgba(255,255,255,0.06); z-index:999; }
      .header-nav ul.open { display:flex; }
      .header-nav ul .nav-item > a { display:block; padding:14px 0; border-bottom:1px solid rgba(255,255,255,0.04); }
      .header-nav .sub-menu { position:static; opacity:1; visibility:visible; transform:none; pointer-events:auto; box-shadow:none; background:transparent; border:none; padding-left:20px; display:none; }
      .header-nav .menu-item-has-children.open > .sub-menu { display:block; }
      .header-nav .sub-menu .nav-item > a { padding:10px 0; }
      .hamburger { display:flex; }
    }
    @media(min-width:992px) { .hamburger { display:none; } .header-nav ul { display:flex; } }
  </style>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="container header-inner">
      <a href="<?php echo home_url('/'); ?>" class="header-logo">LeadZap</a>
      <nav class="header-nav">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => false,
            'fallback_cb' => false,
            'depth' => 3,
            'walker' => new Nimo_Walker_Nav_Menu(),
            'items_wrap' => '<ul>%3$s<li class="nav-cta"><a href="'.home_url('/#contact').'">Get in Touch</a></li></ul>',
          ]);
        ?>
      </nav>
      <div class="hamburger"><span></span><span></span><span></span></div>
    </div>
  </header>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="service-page">
    <div class="container">
      <a href="<?php echo home_url('/#services'); ?>" class="back-link">&#8592; Back to All Services</a>

      <div class="service-page-header">
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
          <p><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
      </div>

      <div class="service-page-content">
        <?php the_content(); ?>
      </div>

    </div>
  </section>
  <?php endwhile; endif; wp_reset_postdata(); ?>

  <footer class="footer">
    <div class="container">
      <?php $hidden_page_ids = array(53); if (!in_array(get_queried_object_id(), $hidden_page_ids)) : ?>
      <div class="footer-top">
        <h2>Ready to grow your<br>service business?</h2>
        <a href="<?php echo home_url('/#contact'); ?>" class="nm-pr-btn-1 lime-bg">
          <span class="wa_magnetic_btn_2_elm">&#x2197;</span>
          Get in Touch
        </a>
      </div>
      <?php endif; ?>
      <div class="footer-grid">
        <div class="footer-col">
          <h4>LeadZap</h4>
          <p>We help HVAC, PLUMBING, ELECTRICAL, and HOME SERVICE COMPANIES grow through smart digital marketing, lead generation, and local SEO strategies that deliver real leads.</p>
        </div>
        <div class="footer-col">
          <h4>About</h4>
          <ul>
            <li><a href="<?php echo home_url('/#about'); ?>">About Us</a></li>
            <li><a href="<?php echo home_url('/#services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('/#portfolio'); ?>">Portfolio</a></li>
            <li><a href="<?php echo home_url('/#team'); ?>">Our Team</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Features</h4>
          <ul>
            <li><a href="<?php echo home_url('/case-studies/'); ?>">Case Studies</a></li>
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
      <div class="footer-bottom">&copy; <?php echo date('Y'); ?>. All rights reserved by LeadZap</div>
    </div>
  </footer>

  <script>
    (function(){
      const hamburger = document.querySelector('.hamburger');
      const nav = document.querySelector('.header-nav ul');
      if(!hamburger || !nav) return;
      hamburger.addEventListener('click', function(){ nav.classList.toggle('open'); });
      if(window.innerWidth < 992){
        document.querySelectorAll('.header-nav .menu-item-has-children > a').forEach(function(link){
          link.addEventListener('click', function(e){
            if(window.innerWidth >= 992) return;
            e.preventDefault();
            this.parentElement.classList.toggle('open');
          });
        });
      }
      document.addEventListener('click', function(e){
        if(!e.target.closest('.header')) nav.classList.remove('open');
      });
    })();
  </script>

  <!-- Success Overlay -->
  <div id="leadzap-overlay" class="leadzap-overlay">
    <div class="leadzap-modal">
      <div class="check-icon">&#10003;</div>
      <h3>Message Sent!</h3>
      <p>Thanks for reaching out. One of our team members will get back to you within 24 hours.</p>
      <button class="modal-btn" onclick="document.getElementById('leadzap-overlay').classList.remove('active')">Got it</button>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var overlay = document.getElementById('leadzap-overlay');
      if (!overlay) return;

      // Listen for CF7 form submit events
      document.querySelectorAll('.wpcf7-form').forEach(function(form) {
        form.addEventListener('wpcf7submit', function(e) {
          overlay.classList.add('active');
        });
      });

      // Also catch the form submit success via mutation observer
      // (fallback for when wpcf7submit event doesn't fire)
      var observer = new MutationObserver(function() {
        document.querySelectorAll('.wpcf7-form.sent').forEach(function(form) {
          if (!form.dataset.leadzapShown) {
            form.dataset.leadzapShown = '1';
            overlay.classList.add('active');
            setTimeout(function() { form.dataset.leadzapShown = ''; }, 5000);
          }
        });
      });
      observer.observe(document.body, { subtree: true, attributes: true, attributeFilter: ['class'] });
    });
  </script>

  <?php wp_footer(); ?>
</body>
</html>
