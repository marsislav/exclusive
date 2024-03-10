<?php
// Add support for custom background
function mytheme_custom_background_setup() {
    $args = array(
        'default-color'      => 'ffffff', // Default background color
        'default-image'      => '',        // Default background image
        'default-repeat'     => 'repeat',  // Default background image repeat
        'default-position-x' => 'left',    // Default background image position (X-axis)
        'default-attachment' => 'scroll',  // Default background image attachment
        'default-position-y' => 'top',     // Default background image position (Y-axis)
        'default-size'       => 'auto',    // Default background image size
        'wp-head-callback'   => '_custom_background_cb',
    );

    add_theme_support( 'custom-background', $args );
}
add_action( 'after_setup_theme', 'mytheme_custom_background_setup' );