<?php 
//Get the author 

function exclusive_authorInfo() {?>
<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> <?php echo esc_html(get_the_author());?> </a>
<?php 
}

//Posted on  
function exclusive_postedOn() {?>
 <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Posted on <a href="<?php esc_url(get_permalink());?>" class="text-dark link-hover me-3"><time datetime="<?php echo esc_attr(get_the_date());?>">
                            <?php echo esc_html(get_the_date());?>
                            </time></a>
<?php }

function exclusive_scripts() {


    wp_register_style( 'animate', get_template_directory_uri().'/lib/animate/animate.min.css'); 
    wp_enqueue_style( 'animate' );
    
    
    wp_register_style( 'owl', get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css'); 
    wp_enqueue_style( 'owl' );	



    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css'); 
    wp_enqueue_style( 'bootstrap' );	
    
    wp_register_style( 'exclusive_style', get_template_directory_uri().'/css/style.css'); 
    wp_enqueue_style( 'exclusive_style' );





    //Scripts

    wp_register_script( 'bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), false, true );
    wp_register_script( 'easing',get_template_directory_uri().'/lib/easing/easing.min.js', array(), false, true );
    wp_register_script( 'waypoints',get_template_directory_uri().'/lib/waypoints/waypoints.min.js', array(), false, true );

    wp_register_script( 'owl',get_template_directory_uri().'/lib/owlcarousel/owl.carousel.min.js', array(), false, true );

    wp_register_script( 'exclusive_main',get_template_directory_uri().'/js/main.js', array(), false, true );

  



    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap');
    wp_enqueue_script( 'easing');
    wp_enqueue_script( 'waypoints');
    wp_enqueue_script( 'owl');
    wp_enqueue_script( 'exclusive_main');


	//Miro

}
add_action( 'wp_enqueue_scripts', 'exclusive_scripts' );


require_once('lib/functions/post-views-counter.php');
require_once('lib/functions/pupular-tags.php');
require_once('lib/functions/theme-support.php');
require_once('lib/functions/sidebars.php');
require_once('lib/functions/customize.php');