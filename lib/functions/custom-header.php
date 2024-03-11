<?php
//Custom Header

/**
 * Theme Name: Your Theme Name
 * Theme URI: Your Theme URI
 * Author: Your Name
 * Author URI: Your Author URI
 * Description: Your theme description.
 * Version: 1.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// Add support for custom header
function mytheme_custom_header_setup() {
    $args = array(
        'default-image'      => '',
        'width'              => '100%',
        'height'             => 'auto',
        'flex-height'        => true,
        'flex-width'         => true,
        'default-text-color' => '',
        'header-text'        => true,
        'uploads'            => true,
        'wp-head-callback'   => 'mytheme_header_style',
    );

    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'mytheme_custom_header_setup' );

// Custom header style
function mytheme_header_style() {
    // Add custom header styles here
}