import re

fp = '/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php'
with open(fp, 'r') as f:
    c = f.read()

hero_new = 'We are the agency HVAC, plumbing, electrical, roofing, and landscaping contractors trust to keep the phones ringing. SEO, Google Ads, and websites that book jobs \u2014 not just look nice on a laptop.'
c = re.sub(
    r'We turn HVAC, plumbing, and electrical contractors into lead machines\. Local SEO, Google Ads, and websites built to fill your schedule \u2014 not just look pretty\.',
    hero_new, c
)

mission_new = 'Get service contractors ranking on page one and running ad campaigns that produce real leads \u2014 no bloated retainers, no agency nonsense.'
c = re.sub(
    r'Give home service businesses page-one Google rankings and ad campaigns that actually produce leads \u2014 without the bloated agency fees\.',
    mission_new, c
)

how_new = 'Local SEO, Google Ads, review systems, and conversion websites \u2014 all tuned for HVAC, plumbing, electrical, roofing, and landscaping. You run the jobs. We keep the pipeline full.'
c = re.sub(
    r'Local SEO, Google Ads, review management, and conversion websites \u2014 all tuned for HVAC, plumbing, electrical, and home service\. You focus on the work\. We fill the pipeline\.',
    how_new, c
)

why_new = "We have been inside your business. We know slow seasons kill cash flow and no-shows wreck margins. Every strategy we build fights those exact problems."
c = re.sub(
    r"We've been inside your business\. We know slow seasons kill revenue and no-shows wreck margins\. Every strategy we build fights those exact battles\.",
    why_new, c
)

# Service descriptions
c = c.replace(
    "desc:'Stop hiding on page 5. We get HVAC, plumbing, and electrical contractors on Google\\'s first page",
    "desc:'Stop hiding on page 5. We put HVAC, plumbing, and electrical contractors on page one of Google"
)
c = c.replace(
    "where customers actually find you. Local keywords, Maps rankings, and Google Local Service Ads that pull in calls.',",
    "where homeowners actually find you. Local keywords, Maps rankings, and Google Local Service Ads that pull in calls.',"
)

# Service desc 2
c = c.replace(
    "lightning-fast sites with click-to-call buttons, booking forms, and service-area pages that turn lookers into paying customers.",
    "fast-loading sites with click-to-call buttons, booking forms, and service-area pages that turn browsers into booked appointments."
)

with open(fp, 'w') as f:
    f.write(c)
print('done - front-page.php updated')
