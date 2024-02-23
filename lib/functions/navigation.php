<?php
function exclusive_register_menus() {
    register_nav_menus(array(
        'main-menu' => esc_html__('Main Menu', 'exclusive'),
        'footer-menu' => esc_html__('Footer Menu', 'exclusive'),
    ));
}

add_action('init', 'exclusive_register_menus');