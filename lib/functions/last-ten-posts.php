<?php 
function display_last_ten_posts_in_current_category() {
    // Get the current post's categories
    $categories = get_the_category();

    // If the post has categories
    if ($categories) {
        // Get the first category slug
        $category_slug = $categories[0]->slug;

        // Define arguments for the query to get the last ten posts in the current category
        $args = array(
            'posts_per_page' => 10,
            'post_type'      => 'post',
            'category_name'  => $category_slug,
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        // Perform the query
        $query = new WP_Query($args);

        // Check if there are any posts
        if ($query->have_posts()) {
            echo '<ul class="last-ten-posts">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li>';
                // Display post title with link
                echo '<a href="' . get_permalink() . '">'.the_post_thumbnail( 'thumbnail', array( 'class' => 'xs-small rounded-circle' ) ) . get_the_title() . '</a>';
                echo '</li>';
            }
            echo '</ul>';
            // Restore original post data
            wp_reset_postdata();
        } else {
            echo esc_html__('No posts found in this category.', 'mexclusive');
        }
    } else {

        echo esc_html__('This post does not have any categories.', 'mexclusive');
    }
}
?>