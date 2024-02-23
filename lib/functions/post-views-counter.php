<?php 
//Post views counter
function exclusive_increment_post_views() {
    if (is_single()) {
        global $post;
        $views = get_post_meta($post->ID, 'post_views', true);
        $views = $views ? $views : 0;
        $views++;
        update_post_meta($post->ID, 'post_views', $views);
    }
}

// Hook into WordPress
add_action('wp_head', 'exclusive_increment_post_views');


// Function to display post views count
function exclusive_display_post_views() {
    global $post;
    $views = get_post_meta($post->ID, 'post_views', true);
    $views = $views ? $views : 0;
    echo $views;
}