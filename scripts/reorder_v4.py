fp = '/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php'
with open(fp, 'r') as f:
    c = f.read()

# Find the start of the serviceData array
start = c.find('const serviceData = [')
end = c.find('];\n    const tabs', start)
if end < 0:
    end = c.find('];\n\n    const tabs', start)
if end < 0:
    # Find the next ]; after serviceData
    rest = c[start+len('const serviceData = ['):]
    end_in_rest = rest.find('];')
    end = start + len('const serviceData = [') + end_in_rest + 2

old_block = c[start:end]

new_block = """const serviceData = [
      {
        title:'Service Business SEO',
        desc:'Stop hiding on page 5. We put HVAC, plumbing, and electrical contractors on page one of Google — where homeowners actually find you. Local keywords, Maps rankings, and Google Local Service Ads that pull in calls.',
        checks:['Industry-specific keyword research','Google Business Profile takeover','Local Service Ads setup & management','Technical SEO for service websites'],
        img:'https://picsum.photos/seed/nimo-seo/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/service-business-seo/'
      },
      {
        title:'Lead Generation',
        desc:'New business permits, building permits, and fresh construction projects happening in your service area right now. We use Google Maps data and proprietary systems to find businesses that need your work — enriched with names, phone numbers, and project details so you can contact them today.',
        checks:['Google Maps lead scraping for your service area','New permit & approval tracking systems','Business & contact data enrichment','Ready-to-call lead lists delivered weekly'],
        img:'https://picsum.photos/seed/nimo-lead/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/lead-generation/'
      },
      {
        title:'Lead-Gen Website Design',
        desc:'Your website should book jobs while you sleep. We build mobile-first, fast-loading sites with click-to-call buttons, booking forms, and service-area pages that turn browsers into booked appointments.',
        checks:['Custom lead-gen website design','Mobile-first with instant load times','Strategic CTAs & booking forms','Service area & location pages'],
        img:'https://picsum.photos/seed/nimo-web/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/lead-gen-website-design/'
      },
      {
        title:'Local Search Optimization',
        desc:'When a pipe bursts at 2 AM, your name needs to pop up first. We optimize your Google Maps listing, local citations, and directory presence so you own every "near me" search in your territory.',
        checks:['Google Maps ranking boost','NAP consistency across 50+ sites','Local citation building','Review generation & response system'],
        img:'https://picsum.photos/seed/nimo-local/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/local-search-optimization/'
      },
      {
        title:'Social Media Marketing',
        desc:'Before-and-after photos. Customer testimonials. Seasonal offers. We run your Facebook, Instagram, and Nextdoor presence so homeowners see your name before they even search.',
        checks:['Platform strategy per market','Weekly content with pro photos','Before/after showcase campaigns','Targeted local ad spend'],
        img:'https://picsum.photos/seed/nimo-social/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/social-media-marketing/'
      },
      {
        title:'Google Ads & PPC',
        desc:'Stop burning cash on clicks that don\'t call. We build Google Ads campaigns engineered for one thing: phone rings and booked appointments. Call-only ads, smart bidding, and zero wasted spend.',
        checks:['Call-only & lead-gen campaigns','Local keyword & geo-targeting','Smart bidding for max conversions','Weekly performance reporting'],
        img:'https://picsum.photos/seed/nimo-ads/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/google-ads-ppc/'
      },
      {
        title:'Reputation Management',
        desc:'One bad review can cost you thousands. We automate review collection, respond to every rating, and build a 5-star reputation that makes choosing you a no-brainer for every homeowner.',
        checks:['Automated review request system','24/7 review monitoring & alerts','Professional response templates','Competitor reputation tracking'],
        img:'https://picsum.photos/seed/nimo-rep/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/reputation-management/'
      },
      {
        title:'Email & SMS Campaigns',
        desc:'Don\'t let past customers forget you exist. Automated email and SMS sequences remind them about tune-ups, seasonal maintenance, and special offers — turning one-time jobs into lifetime clients.',
        checks:['Automated email nurture sequences','SMS marketing for urgent offers','Seasonal campaign calendars','Performance & ROI analytics'],
        img:'https://picsum.photos/seed/nimo-email/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/email-sms-campaigns/'
      },
      {
        title:'Branding & Logo Design',
        desc:'Your truck wrap, your website, your uniforms — they all tell a story. We build professional brand identities that scream trust, reliability, and quality before you say a single word.',
        checks:['Logo & wordmark design','Full brand color & type system','Truck/van wrap design','Brand guidelines document'],
        img:'https://picsum.photos/seed/nimo-brand/500/360',
        url:'http://nimo-wp.212.227.153.56.sslip.io/branding-logo-design/'
      }
    ]"""

print(f'old block length: {len(old_block)}')
print(f'new block length: {len(new_block)}')

c = c.replace(old_block, new_block)

# Also remove orphaned Lead Generation entry that might be after the array
orphan1 = '{\n    title:\'Lead Generation\','
if orphan1 in c:
    # Find and remove the entire orphan block
    idx = c.find(orphan1)
    # Go to the end of the block
    end_orphan = c.find('\n  },', idx) + 5
    c = c[:idx] + c[end_orphan:]
    print('removed orphan block')

with open(fp, 'w') as f:
    f.write(c)
print('done')
