fp = '/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php'
with open(fp, 'r') as f:
    lines = f.readlines()

# Find the branding tab line and add Lead Gen after it
for i, line in enumerate(lines):
    if 'data-tab="7"' in line and '08</span>' in line:
        # Insert 9th tab after this line
        lines.insert(i+1, '        <div class="services-tab" data-tab="8"><span class="tab-num">09</span>Lead Generation</div>\n')
        print(f'Added 9th tab at line {i+2}')
        break

with open(fp, 'w') as f:
    f.writelines(lines)
print('done')
