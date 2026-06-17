import re, os, subprocess, sys

FRONT_FILE = "/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php"

with open(FRONT_FILE, "r") as f:
    front = f.read()

changes = 0

# Hero subtitle
if "Service Business Web Agency" in front:
    front = front.replace("Service Business Web Agency", "Marketing for Contractors Who Actually Do the Work")
    changes += 1
    print("Hero subtitle updated")

# Hero paragraph
old_para = """                  <p class="section-desc" style="max-width:600px;margin-top:32px;">
            We build, optimize, and grow digital marketing systems for HVAC,
            plumbing, electrical, and home service companies. SEO, Google Ads,
            and websites that actually book jobs.
          </p>"""

new_para = """                  <p class="section-desc" style="max-width:600px;margin-top:32px;">
            We are the agency HVAC, plumbing, electrical, roofing, and landscaping
            contractors trust to keep the phones ringing. SEO, Google Ads, and
            websites that book jobs — not just look nice on a laptop.
          </p>"""

if old_para in front:
    front = front.replace(old_para, new_para)
    changes += 1
    print("Hero paragraph updated")

# About section - Mission card
old_mission = "Get home service businesses ranking on page one with targeted SEO, Google Ads, and conversion-driven websites that produce real, measurable results for their bottom line."
new_mission = "Get service contractors ranking on page one and running ad campaigns that produce real leads — no bloated retainers, no agency nonsense."
if old_mission in front:
    front = front.replace(old_mission, new_mission)
    changes += 1
    print("Mission card updated")

# About section - How We Do It card
old_how = "Local SEO, Google Ads, review management, and lead-gen websites — all fine-tuned for home service companies. You focus on the work. We keep the leads coming."
new_how = "Local SEO, Google Ads, review systems, and conversion websites — all tuned for HVAC, plumbing, electrical, roofing, and landscaping. You run the jobs. We keep the pipeline full."
if old_how in front:
    front = front.replace(old_how, new_how)
    changes += 1
    print("How We Do It card updated")

# About section - Why Us card
old_why = "We understand the service business grind because we have lived it. Slow seasons, no-shows, cash flow crunches — every strategy we build is designed to fight those exact battles."
new_why = "We have been inside your business. We know slow seasons kill cash flow and no-shows wreck margins. Every strategy we build fights those exact problems."
if old_why in front:
    front = front.replace(old_why, new_why)
    changes += 1
    print("Why Us card updated")

# Services heading
if "8 services to grow your service business" in front:
    front = front.replace("8 services to grow your service business", "8 services to keep your phone ringing")
    changes += 1
    print("Services heading updated")

# Testimonial stat labels
front = front.replace("Jobs Booked", "Jobs Won")
front = front.replace("Agency Years", "Years in Trades")
print("Stat labels updated")

# Footer description
old_footer = "We help HVAC, plumbing, and electrical contractors get more leads through SEO, Google Ads, and conversion-focused websites. No fluff. Just results."
new_footer = "We help HVAC, plumbing, electrical, and landscaping contractors get more leads through SEO, Google Ads, and conversion-focused websites. No fluff. Just booked jobs."
if old_footer in front:
    front = front.replace(old_footer, new_footer)
    changes += 1
    print("Footer description updated")

# Service page footer description (different version)
old_svc_footer = "We help HVAC, PLUMBING, ELECTRICAL, and HOME SERVICE COMPANIES grow through smart digital marketing, lead generation, and local SEO strategies that deliver real leads."
new_svc_footer = "We help HVAC, plumbing, electrical, and landscaping contractors grow with digital marketing that actually works. SEO, ads, and websites built for trades, not trends."
front = front.replace(old_svc_footer, new_svc_footer)

# ===== SERVICE DATA ARRAY REWRITE =====
service_start = front.find("const serviceData = [")
service_end = front.find("]; // end serviceData")
if service_start > 0 and service_end > 0:
    service_end += len("]; // end serviceData")
    
    new_service_data = """const serviceData = [
  {
    title:'Service Business SEO',
    desc:'Stop hiding on page 5. We put HVAC, plumbing, and electrical contractors on page one of Google — where homeowners actually find you. Local keywords, Maps rankings, and Google Local Service Ads that pull in calls.',
    checks:['Trade-specific keyword research','Google Business Profile takeover','Local Service Ads setup & management','Technical SEO for contractor websites'],
    img:'https://picsum.photos/seed/nimo-seo/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/service-business-seo/'
  },
  {
    title:'Lead-Gen Website Design',
    desc:'Your website should book jobs while you sleep. We build mobile-first, fast-loading sites with click-to-call buttons, booking forms, and service-area pages that turn browsers into booked appointments.',
    checks:['Custom lead-gen website design','Mobile-first with fast load times','Strategic CTAs & booking forms','Service area & location pages'],
    img:'https://picsum.photos/seed/nimo-web/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/lead-gen-website-design/'
  },
  {
    title:'Local Search Optimization',
    desc:'When a pipe bursts at 2 AM, your name needs to show up first. We optimize your Google Maps listing, local citations, and directories so you own every "near me" search in your territory.',
    checks:['Google Maps ranking boost','NAP consistency across 50+ sites','Local citation building','Review generation & response system'],
    img:'https://picsum.photos/seed/nimo-local/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/local-search-optimization/'
  },
  {
    title:'Social Media Marketing',
    desc:'Before-and-after photos. Customer wins. Seasonal offers. We run your Facebook, Instagram, and Nextdoor presence so homeowners see your name before they even search.',
    checks:['Platform strategy per market','Weekly content with pro photos','Before/after showcase campaigns','Targeted local ad spend'],
    img:'https://picsum.photos/seed/nimo-social/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/social-media-marketing/'
  },
  {
    title:'Google Ads & PPC',
    desc:"Stop burning cash on clicks that don't convert. We build Google Ads campaigns engineered for one result: phone calls and booked appointments. Call-only ads, smart bidding, zero wasted budget.",
    checks:['Call-only & lead-gen campaigns','Local keyword & geo-targeting','Smart bidding for max conversions','Weekly performance reporting'],
    img:'https://picsum.photos/seed/nimo-ads/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/google-ads-ppc/'
  },
  {
    title:'Reputation Management',
    desc:'One bad review can cost you thousands in lost jobs. We automate review collection, respond to every rating, and build a 5-star reputation that makes choosing you a no-brainer.',
    checks:['Automated review request system','24/7 review monitoring & alerts','Professional response templates','Competitor reputation tracking'],
    img:'https://picsum.photos/seed/nimo-rep/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/reputation-management/'
  },
  {
    title:'Email & SMS Campaigns',
    desc:'Your past customers are your easiest revenue. Automated email and SMS sequences remind them about tune-ups, seasonal maintenance, and offers — turning one-time jobs into repeat clients.',
    checks:['Automated email nurture sequences','SMS marketing for time-sensitive offers','Seasonal campaign calendars','Performance & ROI analytics'],
    img:'https://picsum.photos/seed/nimo-email/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/email-sms-campaigns/'
  },
  {
    title:'Branding & Logo Design',
    desc:'Your truck wrap, your website, your uniforms — they all tell a story. We build professional brand identities that communicate trust, reliability, and quality before you say a word.',
    checks:['Logo & wordmark design','Full brand color & type system','Truck/van wrap design','Brand guidelines document'],
    img:'https://picsum.photos/seed/nimo-brand/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/branding-logo-design/'
  }
]; // end serviceData"""
    
    front = front[:service_start] + new_service_data + front[service_end:]
    changes += 1
    print("Service data array replaced")

# ===== REVIEWS SECTION =====
# Find and replace the 6 review cards
reviews_section_end = front.find('"hear from real service business owners"')

# Review 1 - Tom Baker
front = front.replace(
    "LeadZap turned our online presence around completely. We went from 2-3 calls a day to 15+ booked appointments weekly. Our Google ranking skyrocketed and our revenue doubled in 4 months. Best decision we have made for our business.",
    "LeadZap took us from 2 calls a day to 15+. Our Google Business profile went from page 3 to #1 in 6 weeks. Best money we have ever spent on marketing."
)

# Review 2 - Lisa Nguyen
front = front.replace(
    "We were spending a fortune on Google Ads with almost no return. LeadZap reworked our entire strategy and we cut costs by 40% while doubling our leads. Finally, an agency that actually understands service businesses.",
    "We cut ad spend by 40% and doubled our leads. Finally found an agency that understands plumbing contractors, not just digital marketing buzzwords."
)

# Review 3 - Rick Morales
front = front.replace(
    "Before LeadZap, we were invisible online. Page 5 for every keyword. They got us on page 1 in under 3 months. Our phones are ringing non-stop and we are booking jobs faster than we can handle them.",
    "I was invisible on page 5 for every keyword. LeadZap put us on page 1 in under 3 months. My phone has not stopped ringing since."
)

# Review 4 - Diane Harper
front = front.replace(
    "The website LeadZap built for us books appointments automatically. We are getting leads while we sleep. The SEO work they did has us ranking for keywords we thought were impossible. Truly game-changing.",
    "The website LeadZap built books appointments automatically. We are getting leads while we sleep. The SEO work put us ranking for keywords we thought were impossible."
)

# Review 5 - Steve Crawford
front = front.replace(
    "We had tried three other agencies before LeadZap. None of them understood the roofing industry. LeadZap got it from day one. Our lead volume has tripled and our cost per lead has dropped by half.",
    "We tried three other agencies before LeadZap. None understood the roofing industry. LeadZap got it day one. Lead volume tripled, cost per lead cut in half."
)

# Review 6 - Maria Santos
front = front.replace(
    "The team at LeadZap treats our business like it is their own. They are responsive, data-driven, and they genuinely care about our results. We have seen consistent month-over-month growth since we started working with them.",
    "LeadZap treats our business like it is their own. Responsive, data-driven, and they genuinely care. We have seen consistent month-over-month growth since day one."
)

print("Reviews updated")

# ===== TEAM SECTION =====
# Team 1 - Alex Rivera
front = front.replace(
    "Alex founded LeadZap after 12 years running his own HVAC business. He knows exactly what contractors need because he has been in their shoes. His mission: build the agency he wished existed when he was running trucks.",
    "Alex Rivera founded LeadZap after a decade running his own HVAC company. He knows what contractors need because he lived it. He built the agency he wished existed when he was running trucks."
)
front = front.replace(
    "Founder & CEO | Former HVAC Contractor",
    "Founder & CEO — Former HVAC Owner"
)

# Team 2 - Bryann Shelton
front = front.replace(
    "Bryann leads our SEO team with over 8 years of experience in local search optimization. She has helped 50+ service businesses dominate their local markets and holds certifications in Google Analytics and SEO.",
    "Bryann Shelton leads our SEO team. 8+ years getting service businesses to page one. She has helped 50+ contractors dominate their local markets and holds Google Analytics and SEO certifications."
)
front = front.replace(
    "Head of SEO | Local Search Specialist",
    "Head of SEO — Local Search Specialist"
)

# Team 3 - Marcus Lee
front = front.replace(
    "Marcus brings 10 years of Google Ads experience to every campaign. A certified Google Ads expert specializing in local service campaigns, he has managed over $5M in ad spend for home service companies.",
    "Marcus Lee brings 10 years of Google Ads experience to every campaign. Certified Google Ads expert specializing in local service. He has managed over $5M in ad spend for home service companies."
)
front = front.replace(
    "PPC Director | Google Ads Certified",
    "PPC Director — Google Ads Certified"
)

# Team 4 - Olivia Chen
front = front.replace(
    "Olivia is the creative force behind our designs. With a background in UX and conversion optimization, she creates websites that don not just look good — they convert. Her work has increased conversion rates by an average of 40% for our clients.",
    "Olivia Chen is the creative force behind our designs. She builds websites that do not just look good — they convert. Her work has increased conversion rates by an average of 40% for our clients."
)
front = front.replace(
    "Lead Designer | UX & Conversion Specialist",
    "Lead Designer — UX & Conversion Specialist"
)

print("Team section updated")

# ===== FAQ =====
# FAQ 1
front = front.replace(
    "How quickly can I expect to see results from SEO or Google Ads?",
    "How fast will I see results?"
)
front = front.replace(
    "For SEO, most clients start seeing movement within 60-90 days. Google Ads can start generating leads within the first week of launch. We provide monthly reporting so you can track progress every step of the way.",
    "SEO takes 60 to 90 days before you see real movement. Google Ads can start sending leads within the first week. We report monthly so you see exactly where every dollar went."
)

# FAQ 2
front = front.replace(
    "How much does it cost to work with LeadZap?",
    "What does it cost to work with LeadZap?"
)
front = front.replace(
    "Every business is different, so we tailor our pricing to your specific needs and goals. We offer flexible packages starting from competitive monthly retainers. Book a free call and we will put together a proposal custom to your business.",
    "Every business is different. We tailor pricing to your needs and goals. Packages start from competitive monthly retainers. Book a free call and we will put together a custom proposal."
)

# FAQ 3
front = front.replace(
    "Do you work with all types of home service businesses, or only specific trades?",
    "Do you work with all trades or only specific ones?"
)
front = front.replace(
    "We specialize in HVAC, plumbing, electrical, roofing, and landscaping contractors. These are the industries we know inside and out. If you are in one of these trades, we can hit the ground running from day one.",
    "We specialize in HVAC, plumbing, electrical, roofing, and landscaping. These are the trades we know inside out. If you are in one of them, we can hit the ground running from day one."
)

# FAQ 4
front = front.replace(
    "Will I have a dedicated point of contact or account manager?",
    "Will I get a dedicated account manager?"
)
front = front.replace(
    "Yes. Every client is assigned a dedicated account manager who knows your business, your goals, and your industry. You will never feel like just another account. We believe in real relationships with real accountability.",
    "Yes. Every client gets a dedicated account manager who knows your business and your goals. You will never feel like just another number. Real relationships, real accountability."
)

# FAQ 5
front = front.replace(
    "What if I am not satisfied with the results?",
    "What if I am not happy with the results?"
)
front = front.replace(
    "We are confident in our ability to deliver, but we also believe in transparency. We provide detailed monthly reports and regular check-ins. If we are not hitting agreed-upon milestones, we will adjust the strategy — no questions asked.",
    "We are confident in what we deliver, but we believe in transparency. Monthly reports, regular check-ins, and if we are not hitting milestones, we adjust the strategy — no questions asked."
)

print("FAQ section updated")

# ===== BLOG PREVIEWS =====
# They're pulled dynamically from DB, so the excerpt/title come from WP posts

# ===== FOOTER ITEMS =====
front = front.replace(
    "LeadZap \u2014 Service Business Web Agency.",
    "LeadZap \u2014 Contractor Marketing Agency."
)

front = front.replace(
    "All rights reserved. LeadZap \u2014 Service Business Web Agency.",
    "All rights reserved. LeadZap \u2014 Marketing for Service Contractors."
)

print("Footer items updated")

# Write back
with open(FRONT_FILE, "w") as f:
    f.write(front)

print(f"\nTotal changes: {changes}")
print("front-page.php written successfully")
