<?php
function mexclusive_register_menus() {
    register_nav_menus(array(
        'main-menu' => esc_html__('Main Menu', 'mexclusive'),
        'footer-menu' => esc_html__('Footer Menu', 'mexclusive'),
    ));
}

add_action('init', 'mexclusive_register_menus');