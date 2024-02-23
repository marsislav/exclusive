<H1>rdtrsdtrtertretr</H1>
<?php

function exclusive_customize_register( $wp_customize ) {

    $wp_customize->get_setting('blogname')->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial('blogname', array(
        // 'settings' => array('blogname')
        'selector' => '.c-header__blogname',
        'container_inclusive' => false,
        'render_callback' => function() {
            bloginfo( 'name' );
        }
    ));

    /*##################  SINGLE SETTINGS ########################*/

    $wp_customize->add_section('exclusive_single_blog_options', array(
        'title' => esc_html__( 'Single Blog Options', 'exclusive' ),
        'description' => esc_html__( 'You can change single blog options from here.', 'exclusive' ),
        'active_callback' => 'exclusive_show_single_blog_section'
    ));

    $wp_customize->add_setting('exclusive_display_author_info', array(
        'default' => true,
        'transport' => 'postMessage',
        'sanitize_callback' => 'exclusive_sanitize_checkbox'
    ));

    $wp_customize->add_control('exclusive_display_author_info', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Show Author Info', 'exclusive' ),
        'section' => 'exclusive_single_blog_options'
    ));

    function exclusive_sanitize_checkbox( $checked ) {
        return (isset($checked) && $checked === true) ? true : false;
    }

    function exclusive_show_single_blog_section() {
        global $post;
        return is_single() && $post->post_type === 'post';
    }


    /*################## GENERAL SETTINGS ########################*/

    $wp_customize->add_section('exclusive_general_options', array(
        'title' => esc_html__( 'General Options', 'exclusive' ),
        'description' => esc_html__( 'You can change general options from here.', 'exclusive' )
    ));

    $wp_customize->add_setting('exclusive_accent_colour', array(
        'default' => '#20ddae',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'exclusive_accent_colour', array(
        'label' => __( 'Accent Color', 'exclusive' ),
        'section' => 'exclusive_general_options',
    )));

    $wp_customize->add_setting( 'exclusive_portfolio_slug', array(
		'default'           => 'portfolio',
		'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'exclusive_portfolio_slug', array(
		'type'    => 'text',
        'label'    => esc_html__( 'Portfolio Slug', 'exclusive' ),
        'description' => esc_html__( 'Will appear in the archive url', 'exclusive' ),
		'section'  => 'exclusive_general_options',
    ));

    /*################## FOOTER SETTINGS ########################*/

    $wp_customize->selective_refresh->add_partial('exclusive_footer_partial', array(
        'settings' => array('exclusive_footer_bg', 'exclusive_footer_layout'),
        'selector' => '#footer',
        'container_inclusive' => false,
        'render_callback' => function() {
            get_template_part( 'template-parts/footer/widgets' );
            get_template_part( 'template-parts/footer/info' );
        }
    ));

    $wp_customize->add_section('exclusive_footer_options', array(
        'title' => esc_html__( 'Footer Options', 'exclusive' ),
        'description' => esc_html__( 'You can change footer options from here.', 'exclusive' )
    ));

    $wp_customize->add_setting('exclusive_site_info', array(
        'default' => '',
        'sanitize_callback' => 'exclusive_sanitize_site_info',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('exclusive_site_info', array(
        'type' => 'text',
        'label' => esc_html__( 'Site Info', 'exclusive' ),
        'section' => 'exclusive_footer_options'
    ));

    $wp_customize->add_setting('exclusive_footer_bg', array(
        'default' => 'dark',
        'transport' => 'postMessage',
        'sanitize_callback' => 'exclusive_sanitize_footer_bg'
    ));

    $wp_customize->add_control('exclusive_footer_bg', array(
        'type' => 'select',
        'label' => esc_html__( 'Footer Background', 'exclusive' ),
        'choices' => array(
            'light' => esc_html__( 'Light', 'exclusive' ),
            'dark' => esc_html__( 'Dark', 'exclusive' ),
        ),
        'section' => 'exclusive_footer_options'
    ));

    $wp_customize->add_setting('exclusive_footer_layout', array(
        'default' => '3,3,3,3',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'exclusive_validate_footer_layout'
    ));

    $wp_customize->add_control('exclusive_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__( 'Footer Layout', 'exclusive' ),
        'section' => 'exclusive_footer_options'
    ));
    
}

add_action( 'customize_register', 'exclusive_customize_register' );

function exclusive_validate_footer_layout( $validity, $value) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', 'exclusive' ));
    }
    return $validity;
}

function exclusive_sanitize_footer_bg( $input ) {
    $valid = array('light', 'dark');
    if( in_array($input, $valid, true) ) {
        return $input;
    }
    return 'dark';
}

function exclusive_sanitize_site_info( $input ) {
    $allowed = array('a' => array(
        'href' => array(),
        'title' => array()
    ));
    return wp_kses($input, $allowed);
}