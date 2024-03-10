<?php
function calculate_reading_time() {
    // Get post content
    $post_content = get_post_field( 'post_content', get_the_ID() );

    // Count words
    $word_count = str_word_count( strip_tags( $post_content ) );

    // Estimate reading time (words per minute)
    $words_per_minute = 100; // Adjust as needed
    $reading_time = ceil( $word_count / $words_per_minute );

    // Return reading time
    return $reading_time;
}

function display_reading_time() {
    // Get reading time
    $reading_time = calculate_reading_time();

    // Output reading time
    if ($reading_time < 1) { 
        _e("Less than 1 minute read", 'text-domain');
    } elseif ($reading_time === 1) {
        _e("Approx. 1 minute read", 'text-domain');
    } else {
        printf(
            __("Approx. %d minutes read", 'text-domain'),
            $reading_time
        );
    }
}