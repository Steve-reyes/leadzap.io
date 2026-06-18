<?php
/**
 * LeadZap Theme Functions
 */

// === Register Navigation Menus ===
register_nav_menus([
    'primary' => 'Primary Navigation',
]);

// === Enable featured images ===
add_theme_support('post-thumbnails');

// === Walker: Escape default WP menu classes, keep ours minimal ===
class Nimo_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="sub-menu">';
    }
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        $output .= '<li class="nav-item' . ($has_children ? ' menu-item-has-children' : '') . '">';
        $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }
}

// === Create sample menu on theme activation ===
add_action('after_switch_theme', function () {
    // Check if menu already exists
    $locations = get_nav_menu_locations();
    if (!empty($locations['primary'])) return;

    $menu_name = 'Nimo Main Menu';
    $menu_id = wp_create_nav_menu($menu_name);

    if (is_wp_error($menu_id)) return;

    $items = [
        ['title' => 'Home', 'url' => home_url('/#home')],
        ['title' => 'About Us', 'url' => home_url('/#about')],
        ['title' => 'Services', 'url' => '#'],
        ['title' => 'Website Design', 'url' => home_url('/#services'), 'parent' => 'Services'],
        ['title' => 'SEO Optimization', 'url' => home_url('/#services'), 'parent' => 'Services'],
        ['title' => 'Social Media', 'url' => home_url('/#services'), 'parent' => 'Services'],
        ['title' => 'Lead Generation', 'url' => home_url('/#services'), 'parent' => 'Services'],
        ['title' => 'AI Automation', 'url' => home_url('/#services'), 'parent' => 'Services'],
        ['title' => 'Case Studies', 'url' => '#'],
        ['title' => 'Branding', 'url' => '#'],
        ['title' => 'Pricing', 'url' => '#'],
        ['title' => 'Blog', 'url' => '#'],
    ];

    $parent_map = [];
    $id_map = [];

    // First pass: create all items
    foreach ($items as $i => $item) {
        $id_map[$i] = wp_update_nav_menu_item($menu_id, 0, [
            'menu-item-title' => $item['title'],
            'menu-item-url' => $item['url'],
            'menu-item-status' => 'publish',
        ]);
        if (!empty($item['parent'])) {
            $parent_map[$id_map[$i]] = $item['parent'];
        }
    }

    // Second pass: set parent relationships
    $title_to_id = [];
    foreach ($items as $i => $item) {
        $title_to_id[$item['title']] = $id_map[$i];
    }
    foreach ($parent_map as $child_id => $parent_title) {
        if (isset($title_to_id[$parent_title])) {
            update_post_meta($child_id, '_menu_item_menu_item_parent', $title_to_id[$parent_title]);
        }
    }

    // Assign to primary location
    set_theme_mod('nav_menu_locations', ['primary' => $menu_id]);
});


// Prevent wptexturize from breaking CF7 shortcodes
add_filter('no_texturize_shortcodes', function($shortcodes) {
    $shortcodes[] = 'contact-form-7';
    return $shortcodes;
});

// Bypass CF7 mail - Flamingo handles storage
add_filter("wpcf7_skip_mail", "__return_true");

// Override CF7 mail_sent_ok message
add_filter("wpcf7_messages", function($messages, $contact_form) {
    $messages["mail_sent_ok"] = array(
        "description" => "Sender was unable to send",
        "default" => "Thank you for your message. We will get back to you within 24 hours."
    );
    return $messages;
}, 10, 2);
