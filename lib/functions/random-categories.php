
<?php
function display_last_post_in_random_categories() {
    // Get random categories
    $categories = get_categories(array(
        'orderby' => 'rand',
        'number' => 4
    ));

    // Start the features section
    $output = '<!-- Features Start -->
        <div class="container-fluid features mb-5">
            <div class="container py-5">
                <div class="row g-4">';

    // Loop through each random category
    foreach ($categories as $category) {
        // Define arguments for the query to get the last post in the category
        $args = array(
            'posts_per_page' => 1,
            'post_type' => 'post',
            'category__in' => array($category->term_id),
            'orderby' => 'date',
            'order' => 'DESC'
        );

        // Perform the query
        $query = new WP_Query($args);

        // Get total post count in the category
        $category_post_count = $category->count;

        // Check if there are any posts
        if ($query->have_posts()) {
            // Start the features item
            $output .= '<div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="row g-4 align-items-center features-item">';

            // Display category name and total post count
            $output .= '<h2 class="text-uppercase mb-3">' . $category->name.'</h2>';

            // Display the last post title
            while ($query->have_posts()) {
                $query->the_post();
                $output .= '<div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="' . get_template_directory_uri() . '/img/' . $category->slug . '.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">' . $category_post_count . '</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <a href="' . get_permalink() . '" class="h6">' . get_the_title() . '</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>' . get_the_date() . '</small>
                                </div>
                            </div>';
            }

            // End the features item
            $output .= '</div></div>';
            
            // Restore original post data
            wp_reset_postdata();
        } else {
            $output .= 'No posts found in category ' . $category->name;
        }
    }

    // Close the row and container
    $output .= '</div></div></div><!-- Features End -->';

    // Output the generated HTML
    echo $output;
}


/* */
?>