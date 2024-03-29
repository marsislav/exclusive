<?php
// Add color customization options to the Customizer
function custom_theme_colors_customize_register( $wp_customize ) {
    // Add a section for colors
    $wp_customize->add_section( 'custom_theme_colors', array(
        'title' => __( 'Theme Colors', 'mexclusive' ),
        'priority' => 30,
    ) );

    // Add a setting for primary color
    $wp_customize->add_setting( 'primary_color', array(
        'default' => '#1b7dff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    // Add a control for primary color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label' => __( 'Primary Color', 'mexclusive' ),
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
        h1,h2{
            color: $primary_color;
        }
        #submit {
            border: 1px solid $primary_color;
        }

        #submit:hover {
            background: $primary_color;
        }
    ";

    wp_add_inline_style( 'mexclusive_style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_colors_css' );