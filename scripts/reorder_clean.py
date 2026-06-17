fp = '/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php'
with open(fp, 'r') as f:
    c = f.read()

# === TABS HTML ===
# The Lead Gen tab is currently at the end. Need to move it after "Service Business SEO" tab.
# Current: SEO(0), Web(1), Local(2), Social(3), Ads(4), Rep(5), Email(6), Brand(7), Lead(8)
# Target:  SEO(0), Lead(1), Web(2), Local(3), Social(4), Ads(5), Rep(6), Email(7), Brand(8)

old_tabs_html = """        <div class="services-tab" data-tab="1"><span class="tab-num">02</span>Lead-Gen Website Design</div>
        <div class="services-tab" data-tab="2"><span class="tab-num">03</span>Local Search Optimization</div>
        <div class="services-tab" data-tab="3"><span class="tab-num">04</span>Social Media Marketing</div>
        <div class="services-tab" data-tab="4"><span class="tab-num">05</span>Google Ads &amp; PPC</div>
        <div class="services-tab" data-tab="5"><span class="tab-num">06</span>Reputation Management</div>
        <div class="services-tab" data-tab="6"><span class="tab-num">07</span>Email &amp; SMS Campaigns</div>
        <div class="services-tab" data-tab="7"><span class="tab-num">08</span>Branding &amp; Logo Design</div>
        <div class="services-tab" data-tab="8"><span class="tab-num">09</span>Lead Generation</div>"""

new_tabs_html = """        <div class="services-tab" data-tab="1"><span class="tab-num">02</span>Lead Generation</div>
        <div class="services-tab" data-tab="2"><span class="tab-num">03</span>Lead-Gen Website Design</div>
        <div class="services-tab" data-tab="3"><span class="tab-num">04</span>Local Search Optimization</div>
        <div class="services-tab" data-tab="4"><span class="tab-num">05</span>Social Media Marketing</div>
        <div class="services-tab" data-tab="5"><span class="tab-num">06</span>Google Ads &amp; PPC</div>
        <div class="services-tab" data-tab="6"><span class="tab-num">07</span>Reputation Management</div>
        <div class="services-tab" data-tab="7"><span class="tab-num">08</span>Email &amp; SMS Campaigns</div>
        <div class="services-tab" data-tab="8"><span class="tab-num">09</span>Branding &amp; Logo Design</div>"""

if old_tabs_html in c:
    c = c.replace(old_tabs_html, new_tabs_html)
    print('Tabs reordered')
else:
    print('Tabs HTML not matched - checking...')
    # Debug: show what's around there
    idx = c.find('data-tab="1"')
    if idx > 0:
        print(c[idx:idx+150])

# === SERVICE DATA JS ARRAY ===
# Move Lead Generation entry from end to index 1
# Remove it from end first
lead_entry = """      {
        title:'Lead Generation',
        desc:'New business permits, building permits, and fresh construction projects happening in your service area right now. We use Google Maps data and proprietary systems to find businesses that need your work — enriched with names, phone numbers, and project details so you can contact them today.',
        checks:['Google Maps lead scraping for your service area','New permit & approval tracking systems','Business & contact data enrichment','Ready-to-call lead lists delivered weekly'],
        img:'https://picsum.photos/seed/nimo-lead/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/lead-generation/'
      },"""

# Find where Lead Generation is in the array
lg_start = c.find("title:'Lead Generation'")
if lg_start > 0:
    # Find the containing entry block
    entry_start = c.rfind('{', 0, lg_start)
    # Find the end of this entry (the closing },)
    # Look for the pattern:  },\n  { or  }\n  ];
    rest = c[lg_start:]
    entry_end_search = rest.find('\n    },\n')
    if entry_end_search > 0:
        entry_end = lg_start + entry_end_search + 7  # include the },
        entry_block = c[entry_start:entry_end]
        rest_after_entry = c[entry_end:]
        
        # Remove it
        c = c[:entry_start] + rest_after_entry
        
        # Now insert it after the SEO entry (first entry)
        seo_entry_end = c.find('\n    },\n    {\n        title:\'')
        if seo_entry_end > 0:
            insert_pos = seo_entry_end + 7  # after the },
            leading_ws = '      '
            c = c[:insert_pos] + ',\n' + entry_block.strip(',\n') + '\n    },\n    {' + c[insert_pos:]
            # Fix: we removed it and now re-insert. The original has an extra ",\n    {" between entries
            # Actually simpler: just swap by moving the block
            print('Lead Generation entry moved to position 1')
        else:
            print('Could not find SEO entry end')
    else:
        print('Could not find entry end')
else:
    print('Lead Generation not found in serviceData array')

with open(fp, 'w') as f:
    f.write(c)
print('written')
