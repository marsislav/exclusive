<?php
// Add color customization options to the Customizer
function custom_theme_colors_customize_register( $wp_customize ) {
    // Add a section for colors
    $wp_customize->add_section( 'custom_theme_colors', array(
        'title' => __( 'Theme Colors', 'exclusive' ),
        'priority' => 30,
    ) );

    // Add a setting for primary color
    $wp_customize->add_setting( 'primary_color', array(
        'default' => '#007bff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    // Add a control for primary color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label' => __( 'Primary Color', 'exclusive' ),
        'section' => 'custom_theme_colors',
        'settings' => 'primary_color',
    ) ) );
}

add_action( 'customize_register', 'custom_theme_colors_customize_register' );

// Apply custom colors to theme elements
function custom_theme_colors_css() {
    $primary_color = get_theme_mod( 'primary_color', '#000000' );

    $custom_css = "
        /* Customize anchor tag */
        a {
            color: $primary_color;
        }

        .bg-primary {
            background-color:$primary_color!important;
        }

        .border-primary {
            border-color: $primary_color!important;
        }

        .text-primary {
            color: $primary_color!important;
        }

        .post-counter, .back-to-top {
            background:$primary_color!important;;
        }
   
        /* Customize headings */
        h1, h2, h3 {
            color: $primary_color;
        }
    ";

    wp_add_inline_style( 'exclusive_style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_colors_css' );