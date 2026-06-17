fp = '/var/lib/docker/volumes/nimo-wp-clone_nimo_wp_clone_wp_data/_data/wp-content/themes/nimo/front-page.php'
with open(fp, 'r') as f:
    c = f.read()

c = c.replace(
    "clicks that don't call.",
    "clicks that don\\'t call."
)
c = c.replace(
    "desc:'Don't let past customers forget you exist.",
    "desc:'Don\\'t let past customers forget you exist."
)
c = c.replace(
    'clicks that don\'t call.',
    'clicks that don\\\'t call.'
)
c = c.replace(
    "Don't let past customers",
    "Don\\'t let past customers"
)

with open(fp, 'w') as f:
    f.write(c)
print('fixed')
