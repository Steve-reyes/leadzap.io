import re

fp = '/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php'
with open(fp, 'r') as f:
    c = f.read()

# 1. Add 9th tab in HTML (after branding tab at line 1107)
old_tabs_end = """        <div class="services-tab" data-tab="7"><span class="tab-num">08</span>Branding &amp; Logo Design</div>
          </div>"""

new_tabs_end = """        <div class="services-tab" data-tab="7"><span class="tab-num">08</span>Branding &amp; Logo Design</div>
        <div class="services-tab" data-tab="8"><span class="tab-num">09</span>Lead Generation</div>
          </div>"""

c = c.replace(old_tabs_end, new_tabs_end)

# 2. Add 9th entry in serviceData JS array (before "]; // end serviceData")
old_array_end = """  }
    ];

    const tabs = document.querySelectorAll('.services-tab');"""

new_array_end = """  },
  {
    title:'Lead Generation',
    desc:'New business permits, building permits, and fresh construction projects happening in your service area right now. We use Google Maps data and proprietary systems to find businesses that need your work — enriched with names, phone numbers, and project details so you can contact them today.',
    checks:['Google Maps lead scraping for your service area','New permit & approval tracking systems','Business & contact data enrichment','Ready-to-call lead lists delivered weekly'],
    img:'https://picsum.photos/seed/nimo-lead/500/360',
    url:'http://nimo-wp.212.227.153.56.sslip.io/lead-generation/'
  }
    ];

    const tabs = document.querySelectorAll('.services-tab');"""

c = c.replace(old_array_end, new_array_end)

with open(fp, 'w') as f:
    f.write(c)
print('front-page.php updated with 9th service')
