
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
            echo '<ul>';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li>';
                // Display post title with link
                echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                echo '</li>';
            }
            echo '</ul>';
            // Restore original post data
            wp_reset_postdata();
        } else {
            echo 'No posts found in this category.';
        }
    } else {
        echo 'This post does not have any categories.';
    }
}


?>



<?php 
//Get the author 

function exclusive_authorInfo() {?>
<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-dark link-hover"><i class="fa fa-user"></i> <?php echo _e ('Author: ', 'exclusive') . esc_html(get_the_author());?> </a>
<?php 
}

//Posted on  
function exclusive_postedOn() {?>
 <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Posted on <a href="<?php esc_url(get_permalink());?>" class="text-dark link-hover me-3"><time datetime="<?php echo esc_attr(get_the_date());?>">
                            <?php echo esc_html(get_the_date());?>
                            </time></a>
<?php }



require_once('lib/functions/enqueue.php');
require_once('lib/functions/post-views-counter.php');
require_once('lib/functions/pupular-tags.php');
require_once('lib/functions/theme-support.php');
require_once('lib/functions/sidebars.php');
require_once('lib/functions/customize.php');
require_once('lib/functions/navigation.php');
require_once('lib/functions/random-categories.php');
require_once('lib/functions/walker.php');
require_once('lib/functions/dynamic-meta.php');





//Custom Header

/**
 * Theme Name: Your Theme Name
 * Theme URI: Your Theme URI
 * Author: Your Name
 * Author URI: Your Author URI
 * Description: Your theme description.
 * Version: 1.0
 */

// Add support for custom header
function mytheme_custom_header_setup() {
    $args = array(
        'default-image'      => '',
        'width'              => '100%',
        'height'             => 'auto',
        'flex-height'        => true,
        'flex-width'         => true,
        'default-text-color' => '',
        'header-text'        => true,
        'uploads'            => true,
        'wp-head-callback'   => 'mytheme_header_style',
    );

    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'mytheme_custom_header_setup' );

// Custom header style
function mytheme_header_style() {
    // Add custom header styles here
}















// Add support for custom background
function mytheme_custom_background_setup() {
    $args = array(
        'default-color'      => 'ffffff', // Default background color
        'default-image'      => '',        // Default background image
        'default-repeat'     => 'repeat',  // Default background image repeat
        'default-position-x' => 'left',    // Default background image position (X-axis)
        'default-attachment' => 'scroll',  // Default background image attachment
        'default-position-y' => 'top',     // Default background image position (Y-axis)
        'default-size'       => 'auto',    // Default background image size
        'wp-head-callback'   => '_custom_background_cb',
    );

    add_theme_support( 'custom-background', $args );
}
add_action( 'after_setup_theme', 'mytheme_custom_background_setup' );





function exclusive_sanitize_footer_bg( $input ) {
    $valid = array('light', 'dark');
    if( in_array($input, $valid, true) ) {
        return $input;
    }
    return 'dark';
}




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
        echo "Less than 1 minute read";
    } elseif ($reading_time === 1) {
        echo "Approx. 1 minute read";
    } else {
        echo "Approx. " . $reading_time . " minutes read";
    }
}