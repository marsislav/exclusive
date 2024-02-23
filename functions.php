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
<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-dark link-hover"><i class="fa fa-user"></i> <?php echo esc_html(get_the_author());?> </a>
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


class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        $args = (object) $args;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}