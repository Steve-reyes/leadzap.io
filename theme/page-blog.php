<?php
/**
 * Template Name: Blog Archive
 * Description: Blog listing page matching LeadZap dark theme
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?> LeadZap — Blog</title>
  <meta name="description" content="Actionable marketing tips, SEO strategies, and growth advice for HVAC, plumbing, electrical, and home service business owners.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
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
    .nm-pr-btn-1:hover { background:#333; color:#d6f345; }
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
    .nm-pr-btn-1.lime-bg { background:#d6f345; color:#171619; }
    .nm-pr-btn-1.lime-bg .wa_magnetic_btn_2_elm { background:#171619; color:#d6f345; }
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
    .header-nav .nav-item { position:relative; list-style:none; }
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
      position:absolute; top:100%; left:0;
      min-width:220px; display:block;
      background:#1a1a1a;
      border:1px solid rgba(255,255,255,0.08);
      border-radius:12px; padding:12px 0;
      opacity:0; visibility:hidden;
      transform:translateY(8px);
      transition:all 0.25s ease;
      z-index:999; pointer-events:none;
      box-shadow:0 20px 60px rgba(0,0,0,0.6);
    }
    .header-nav .menu-item-has-children:hover > .sub-menu,
    .header-nav .sub-menu:hover {
      opacity:1; visibility:visible;
      transform:translateY(0); pointer-events:auto;
    }
    .header-nav .sub-menu .nav-item > a {
      display:block; padding:10px 24px;
      font-size:15px; font-weight:500; color:#b5b5b5;
    }
    .header-nav .sub-menu .nav-item > a:hover { color:#d6f345; background:rgba(214,243,69,0.05); }
    .header-nav .sub-menu .sub-menu { left:100%; top:-12px; transform:translateX(8px); }
    .header-nav .menu-item-has-children > a::after {
      content:'▾'; display:inline-block;
      margin-left:6px; font-size:10px; color:#888; transition:transform 0.2s;
    }
    .header-nav .menu-item-has-children:hover > a::after { transform:rotate(180deg); }
    .header-nav ul {
      display:flex; align-items:center; gap:36px;
      margin:0; padding:0; list-style:none;
    }
    .header-nav ul .nav-cta a {
      background:#d6f345; color:#171619;
      padding:12px 28px; border-radius:100px;
      font-family:'Inter',sans-serif;
      font-weight:600; font-size:16px;
    }
    .header-nav ul .nav-cta a:hover { background:#c8e03a; color:#171619; }

    /* ===== BLOG ARCHIVE ===== */
    .blog-archive {
      padding:160px 0 100px;
      background:#111111;
      min-height:100vh;
    }
    .blog-archive-header {
      margin-bottom:60px;
      text-align:center;
    }
    .blog-archive-header .section-title {
      max-width:600px;
      margin:0 auto;
    }
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
    .blog-card .post-thumbnail {
      width:100%; height:220px; object-fit:cover;
    }
    .blog-card-body { padding:28px; }
    .blog-date {
      font-size:13px; color:#777; margin-bottom:8px;
    }
    .blog-card h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:20px; font-weight:700;
      color:#fff; margin-bottom:12px; line-height:1.3;
    }
    .blog-card p {
      font-size:15px; color:#b5b5b5;
      line-height:1.7; margin-bottom:20px;
    }
    .blog-card .card-btn {
      font-size:14px; font-weight:600; color:#d6f345;
      display:inline-flex; align-items:center; gap:8px;
      transition:gap 0.3s;
    }
    .blog-card .card-btn:hover { gap:14px; }

    /* ===== PAGINATION ===== */
    .blog-pagination {
      margin-top:60px;
      text-align:center;
    }
    .blog-pagination .page-numbers {
      display:inline-flex; align-items:center; gap:8px;
    }
    .blog-pagination a, .blog-pagination span {
      display:inline-flex; align-items:center; justify-content:center;
      width:44px; height:44px;
      border-radius:12px;
      background:#1a1a1a;
      border:1px solid rgba(255,255,255,0.06);
      color:#b5b5b5;
      font-size:15px; font-weight:600;
      transition:all 0.3s;
    }
    .blog-pagination a:hover { border-color:#d6f345; color:#d6f345; }
    .blog-pagination .current { background:#d6f345; color:#171619; border-color:#d6f345; }
    .blog-pagination .next, .blog-pagination .prev { font-size:18px; }

    /* ===== EMPTY STATE ===== */
    .blog-empty {
      text-align:center;
      padding:80px 0;
      color:#666;
      font-size:20px;
    }

    /* ===== FOOTER ===== */
    .footer {
      background:#000000;
      padding:80px 0 30px;
    }
    .footer-top { text-align:center; margin-bottom:60px; }
    .footer-cta-btn { display:inline-block; background:#d6f345; color:#171619; padding:14px 36px; border-radius:100px; font-family:'Inter',sans-serif; font-size:16px; font-weight:600; transition:background 0.3s; cursor:pointer; border:none; text-decoration:none; }
    .footer-cta-btn:hover { background:#c8e03a; }
    .footer-top h2 {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(36px,5vw,60px);
      font-weight:700;
      color:#ffffff;
      margin-bottom:24px;
    }
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
      font-size:20px; font-weight:700;
      color:#fff; margin-bottom:20px;
    }
    .footer-col p {
      font-size:15px; color:#b5b5b5; line-height:1.7; max-width:320px;
    }
    .footer-col ul li { margin-bottom:12px; }
    .footer-col ul li a {
      font-size:15px; color:#b5b5b5; transition:color 0.3s;
    }
    .footer-col ul li a:hover { color:#d6f345; }
    .footer-bottom { text-align:center; font-size:15px; color:#666; }

    /* ===== RESPONSIVE ===== */
    @media(max-width:1024px) { .blog-grid { grid-template-columns:1fr 1fr; } }
    @media(max-width:767px) { .blog-grid { grid-template-columns:1fr; } }
    @media(max-width:991px) {
      .header-nav ul {
        display:none; flex-direction:column;
        position:fixed; top:75px; left:0; right:0;
        background:#1a1a1a; padding:24px; gap:0;
        border-bottom:1px solid rgba(255,255,255,0.06); z-index:999;
      }
      .header-nav ul.open { display:flex; }
      .header-nav ul .nav-item > a { display:block; padding:14px 0; border-bottom:1px solid rgba(255,255,255,0.04); }
      .header-nav .sub-menu { position:static; opacity:1; visibility:visible; transform:none; pointer-events:auto; box-shadow:none; background:transparent; border:none; padding-left:20px; display:none; }
      .header-nav .menu-item-has-children.open > .sub-menu { display:block; }
      .header-nav .sub-menu .nav-item > a { padding:10px 0; }
      .hamburger { display:flex; }
    }
    @media(min-width:992px) {
      .hamburger { display:none; }
      .header-nav ul { display:flex; }
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ===== HEADER ===== -->
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
            'items_wrap' => '<ul>%3$s<li class="nav-cta"><a href="'.'/contact-us/'.'">Get in Touch</a></li></ul>',
          ]);
        ?>
      </nav>
      <div class="hamburger"><span></span><span></span><span></span></div>
    </div>
  </header>

  <!-- ===== BLOG ARCHIVE ===== -->
  <section class="blog-archive">
    <div class="container">
      <div class="blog-archive-header">
        <span class="section-badge"> Tips & strategy </span>
        <h1 class="section-title">Insights that help<br>you win more jobs</h1>
      </div>

      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $blog_query = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 12,
          'paged' => $paged,
        ]);
      ?>

      <?php if ($blog_query->have_posts()) : ?>
        <div class="blog-grid">
          <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <article class="blog-card">
              <div class="blog-card-body">
                <div class="blog-date"><?php echo get_the_date('F j, Y'); ?></div>
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="card-btn">Read More &#x2192;</a>
              </div>
            </article>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <?php if ($blog_query->max_num_pages > 1) : ?>
          <div class="blog-pagination">
            <?php
              echo paginate_links([
                'total'   => $blog_query->max_num_pages,
                'current' => max(1, $paged),
                'mid_size' => 2,
                'prev_text' => '&#8592;',
                'next_text' => '&#8594;',
              ]);
            ?>
          </div>
        <?php endif; ?>

      <?php else : ?>
        <div class="blog-empty">
          <p>No blog posts published yet. Check back for marketing tips that help you win more jobs!</p>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <h2>Ready to make<br>your phone ring?</h2>
        <a href="<?php echo '/contact-us/'; ?>" class="footer-cta-btn">Claim Your Free Call</a>
      </div>
      <div class="footer-grid">
        <div class="footer-col">
          <h4>LeadZap</h4>
          <p>We help HVAC, plumbing, and electrical contractors get more leads through SEO, Google Ads, and conversion-focused websites. No fluff. Just results.</p>
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
      <div class="footer-bottom">&copy; <?php echo date('Y'); ?>. All rights reserved. LeadZap — Service Business Web Agency.</div>
    </div>
  </footer>

  <!-- ===== SCRIPTS ===== -->
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
  <?php wp_footer(); ?>
</body>
</html>
