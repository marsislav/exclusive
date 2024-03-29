<?php function mexclusive_scripts() {


wp_register_style( 'animate', get_template_directory_uri().'/lib/animate/animate.min.css'); 
wp_enqueue_style( 'animate' );

wp_register_style( 'owl', get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css'); 
wp_enqueue_style( 'owl' );	

wp_register_style( 'font-awesome', get_template_directory_uri().'/lib/assets/css/font-awesome.css'); 
wp_enqueue_style( 'font-awesome' );	

wp_register_style( 'bootstrap-icons', get_template_directory_uri().'/lib/assets/css/bootstrap-icons.css'); 
wp_enqueue_style( 'bootstrap-icons' );	

wp_register_style( 'bootstrap', get_template_directory_uri().'/lib/assets/css/bootstrap.min.css'); 
wp_enqueue_style( 'bootstrap' );	

wp_register_style( 'mexclusive_style', get_template_directory_uri().'/lib/assets/css/style.css'); 
wp_enqueue_style( 'mexclusive_style' );



//Scripts

wp_register_script( 'bootstrap',get_template_directory_uri().'/lib/assets/js/bootstrap.bundle.min.js', array(), false, true );
wp_register_script( 'easing',get_template_directory_uri().'/lib/easing/easing.min.js', array(), false, true );
wp_register_script( 'waypoints',get_template_directory_uri().'/lib/waypoints/waypoints.min.js', array(), false, true );

wp_register_script( 'owl',get_template_directory_uri().'/lib/owlcarousel/owl.carousel.min.js', array(), false, true );

wp_register_script( 'mexclusive_main',get_template_directory_uri().'/lib/assets/js/main.js', array(), false, true );







wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'bootstrap');
wp_enqueue_script( 'easing');
wp_enqueue_script( 'waypoints');
wp_enqueue_script( 'owl');
if (is_singular() && comments_open() && get_option( 'thread_comments' )){
wp_enqueue_script( 'comment-reply');
}

wp_enqueue_script( 'mexclusive_customizer');
wp_enqueue_script( 'mexclusive_main');



}
add_action( 'wp_enqueue_scripts', 'mexclusive_scripts' );


function theme_add_editor_styles() {
    add_editor_style( get_template_directory_uri().'/css/editor-style.css' );
}
add_action( 'admin_init', 'theme_add_editor_styles' );
