
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










// Add color customization options to the Customizer
function custom_theme_colors_customize_register( $wp_customize ) {
    // Add a section for colors
    $wp_customize->add_section( 'custom_theme_colors', array(
        'title' => __( 'Theme Colors', 'text-domain' ),
        'priority' => 30,
    ) );

    // Add a setting for primary color
    $wp_customize->add_setting( 'primary_color', array(
        'default' => '#007bff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    // Add a control for primary color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label' => __( 'Primary Color', 'text-domain' ),
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
        h1, h2, h3 {
            color: $primary_color;
        }
    ";

    wp_add_inline_style( 'exclusive_style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_colors_css' );