<?php

function mexclusive_sidebar_widgets() {
    register_sidebar( array(
        'id' => 'primary-sidebar',
        'name' => esc_html__( 'Primary Sidebar', 'mexclusive' ),
        'description' => esc_html__( 'This sidebar appears in the blog posts page.', 'mexclusive' ),
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ) );
}

$footer_layout = sanitize_text_field(get_theme_mod('mexclusive_footer_layout', '3,3,3,3'));
$footer_layout = preg_replace('/\s+/', '', $footer_layout);
$columns = explode(',', $footer_layout);
$footer_bg = mexclusive_sanitize_footer_bg(get_theme_mod( 'mexclusive_footer_bg', 'dark' ));
$widget_theme = '';
if($footer_bg == 'light') {
    $widget_theme = 'c-footer-widget-dark';
} else {
    $widget_theme = 'c-footer-widget-light';
}

foreach ($columns as $i => $column) {
    register_sidebar( array(
        'id' => 'footer-sidebar-' . ($i + 1),
        'name' => sprintf(esc_html__( 'Footer Widgets Column %s', 'mexclusive' ), $i +1),
        'description' => esc_html__( 'Footer widgets', 'mexclusive' ),
        'before_widget' => '<section id="%1$s" class="c-footer-widget ' . $widget_theme . ' %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ) );
}

add_action('widgets_init', 'mexclusive_sidebar_widgets');