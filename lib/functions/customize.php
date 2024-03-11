<?php

function mexclusive_customize_register( $wp_customize ) {

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

    $wp_customize->add_section('mexclusive_single_blog_options', array(
        'title' => esc_html__( 'Single Blog Options', 'mexclusive' ),
        'description' => esc_html__( 'You can change single blog options from here.', 'mexclusive' ),
        'active_callback' => 'mexclusive_show_single_blog_section'
    ));

    $wp_customize->add_setting('mexclusive_display_author_info', array(
        'default' => true,
        'transport' => 'postMessage',
        'sanitize_callback' => 'mexclusive_sanitize_checkbox'
    ));

    $wp_customize->add_control('mexclusive_display_author_info', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Show Author Info', 'mexclusive' ),
        'section' => 'mexclusive_single_blog_options'
    ));

    function mexclusive_sanitize_checkbox( $checked ) {
        return (isset($checked) && $checked === true) ? true : false;
    }

    function mexclusive_show_single_blog_section() {
        global $post;
        return is_single() && $post->post_type === 'post';
    }


    /*################## GENERAL SETTINGS ########################*/

    $wp_customize->add_section('mexclusive_general_options', array(
        'title' => esc_html__( 'General Options', 'mexclusive' ),
        'description' => esc_html__( 'You can change general options from here.', 'mexclusive' )
    ));


    $wp_customize->add_setting( 'mexclusive_portfolio_slug', array(
		'default'           => 'portfolio',
		'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mexclusive_portfolio_slug', array(
		'type'    => 'text',
        'label'    => esc_html__( 'Portfolio Slug', 'mexclusive' ),
        'description' => esc_html__( 'Will appear in the archive url', 'mexclusive' ),
		'section'  => 'mexclusive_general_options',
    ));

    /*################## FOOTER SETTINGS ########################*/

    $wp_customize->selective_refresh->add_partial('mexclusive_footer_partial', array(
        'settings' => array('mexclusive_footer_bg', 'mexclusive_footer_layout'),
        'selector' => '#footer',
        'container_inclusive' => false,
        'render_callback' => function() {
            get_template_part( 'template-parts/footer/widgets' );
            get_template_part( 'template-parts/footer/info' );
        }
    ));

    $wp_customize->add_section('mexclusive_footer_options', array(
        'title' => esc_html__( 'Footer Options', 'mexclusive' ),
        'description' => esc_html__( 'You can change footer options from here.', 'mexclusive' )
    ));

    $wp_customize->add_setting('mexclusive_site_info', array(
        'default' => '',
        'sanitize_callback' => 'mexclusive_sanitize_site_info',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('mexclusive_site_info', array(
        'type' => 'text',
        'label' => esc_html__( 'Site Info', 'mexclusive' ),
        'section' => 'mexclusive_footer_options'
    ));

    $wp_customize->add_setting('mexclusive_footer_bg', array(
        'default' => 'dark',
        'transport' => 'postMessage',
        'sanitize_callback' => 'mexclusive_sanitize_footer_bg'
    ));

    $wp_customize->add_control('mexclusive_footer_bg', array(
        'type' => 'select',
        'label' => esc_html__( 'Footer Background', 'mexclusive' ),
        'choices' => array(
            'light' => esc_html__( 'Light', 'mexclusive' ),
            'dark' => esc_html__( 'Dark', 'mexclusive' ),
        ),
        'section' => 'mexclusive_footer_options'
    ));

    $wp_customize->add_setting('mexclusive_footer_layout', array(
        'default' => '3,3,3,3',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'mexclusive_validate_footer_layout'
    ));

    $wp_customize->add_control('mexclusive_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__( 'Footer Layout', 'mexclusive' ),
        'section' => 'mexclusive_footer_options'
    ));
    
}

add_action( 'customize_register', 'mexclusive_customize_register' );

function mexclusive_validate_footer_layout( $validity, $value) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', 'mexclusive' ));
    }
    return $validity;
}
/*
function mexclusive_sanitize_footer_bg( $input ) {
    $valid = array('light', 'dark');
    if( in_array($input, $valid, true) ) {
        return $input;
    }
    return 'dark';
}*/

function mexclusive_sanitize_site_info( $input ) {
    $allowed = array('a' => array(
        'href' => array(),
        'title' => array()
    ));
    return wp_kses($input, $allowed);
}