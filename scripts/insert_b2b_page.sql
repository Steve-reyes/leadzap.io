
-- Insert B2B / Commercial Lead Gen service page
INSERT INTO wp_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (
  50,
  1,
  NOW(),
  NOW(),
  '<h2>What Is B2B & Commercial Lead Generation?</h2>
<p>Commercial clients sign bigger contracts, have steadier needs, and refer other businesses. The problem is finding them before your competitor does. B2B / Commercial Lead Gen is how we deliver commercial construction permits, new business registrations, and building approvals straight to your pipeline.</p>
<h2>How It Works</h2>
<ul>
<li><strong>Commercial Permit Tracking:</strong> We scan county building departments for commercial permits — new construction, tenant improvements, HVAC retrofits, electrical upgrades, and plumbing rough-ins.</li>
<li><strong>New Business Registration Scraping:</strong> When an LLC registers for a restaurant, retail space, or warehouse operation, they need contractors. We flag them within days of filing.</li>
<li><strong>Decision-Maker Enrichment:</strong> Every lead gets enriched with owner names, company phone numbers, email addresses, and project scope details — not a PO Box.</li>
<li><strong>B2B Lead List Delivery:</strong> You receive a curated list of commercial leads every week, ready for your sales team to contact.</li>
</ul>
<h2>Who This Is For</h2>
<p>HVAC contractors chasing rooftop unit replacements and VAV box installations. Electrical contractors targeting panel upgrades and new build-out work. Plumbing contractors looking at commercial kitchen and restroom rough-ins. Roofing contractors tracking flat roof permits. General contractors wanting a head start on new commercial projects.</p>
<h2>What You Get</h2>
<ul>
<li>Weekly commercial lead list delivered to your inbox or CRM</li>
<li>Permit details: project type, estimated value, property address, filing date</li>
<li>Business registration data: company name, owner name, phone, email</li>
<li>County-specific coverage — you pick your target territories</li>
</ul>
<h2>Results You Can Expect</h2>
<p>Commercial contracts average 5-10x the ticket size of residential jobs. A single commercial HVAC retrofit can net $25,000-$50,000. Most contractors report winning their first commercial account within 60 days of starting this program. The data is fresh, the intent is real, and the first caller usually gets the bid.</p>',
  'B2B & Commercial Lead Gen',
  '',
  'publish',
  'closed',
  'closed',
  '',
  'b2b-commercial-lead-generation',
  '',
  '',
  NOW(),
  NOW(),
  '',
  0,
  'https://nimo-clone.212.227.153.56.sslip.io/?page_id=50',
  0,
  'page',
  '',
  0
);

-- Set the template to page-service.php
INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
VALUES (50, '_wp_page_template', 'page-service.php');
