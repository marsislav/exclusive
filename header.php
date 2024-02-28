<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        
        

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



 
    </head>





    <body <?php body_class();?>>
    <?php wp_body_open();?>

/*BGR IMAGE */
    <style>
        body {
            <?php if ( get_background_color() ) : ?>
                background-color: #<?php echo get_background_color(); ?>;
            <?php endif; ?>
            <?php if ( get_background_image() ) : ?>
                background-image: url('<?php echo esc_url( get_background_image() ); ?>');
                background-repeat: <?php echo esc_attr( get_theme_mod( 'background_repeat', 'repeat' ) ); ?>;
                background-position: <?php echo esc_attr( get_theme_mod( 'background_position_x', 'left' ) ); ?> <?php echo esc_attr( get_theme_mod( 'background_position_y', 'top' ) ); ?>;
                background-attachment: <?php echo esc_attr( get_theme_mod( 'background_attachment', 'scroll' ) ); ?>;
                background-size: <?php echo esc_attr( get_theme_mod( 'background_size', 'auto' ) ); ?>;
            <?php endif; ?>
        }
    </style>
</head>
<body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
    <header id="masthead" class="site-header" role="banner">
        <!-- Your header content goes here -->
    </header>
    <div id="content" class="site-content">


    
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'exclusive' ); ?></a>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid topbar bg-dark d-none d-lg-block">
                <div class="container px-0">
                    <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                        <div class="top-info flex-grow-0">
                            <span class="rounded-circle btn-sm-square bg-primary me-2">
                                <i class="fas fa-bolt text-white"></i>
                            </span>
                            <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                                <p class="mb-0 text-white fs-6 fw-normal"><?php _e('New', 'exclusive');?></p>
                            </div>
                            <div class="overflow-hidden" style="width: 735px;">
                                <div id="note" class="ps-2">
                                    <a href="#"><p class="text-white mb-0 link-hover">
                                    <?php 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date'
);

$latest_post = new WP_Query($args);

if ($latest_post->have_posts()) :
    while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
          <?php if (has_post_thumbnail()) {?>
    <div class="post-image-wrap">
        <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded-circбоle border border-3 border-primary me-2 small' ) );  ?>
    </div>
    <?php } ?>
            <?php the_title(); ?>
            
       
    <?php endwhile;
endif;

wp_reset_postdata();
?>
      
                                    </p></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand mt-3">

                        <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {    
                        '<p class="text-primary display-6 mb-2" style="line-height: 0;">' . esc_html(bloginfo('name')) . '</p>';
                        '<small class="text-body fw-normal" style="letter-spacing: 12px;">' . esc_html(bloginfo('description')) . '</small>';
                    }
                    ?>

                            
                            
                        </a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top" role="navigation" aria-label="<?php esc_attr_e('Main navigation', 'exclusive');?>">
                           <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav mx-auto border-top',
                                    'walker' => new Custom_Nav_Walker(),
                                ));
                            ?>

                            </div>
                            <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                                <div class="d-flex">
                                    <img src="img/weather-icon.png" class="img-fluid w-100 me-2" alt="">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-column ms-2" style="width: 150px;">
                                            <?php
                                                $latest_post = wp_get_recent_posts( array(
                                                    'numberposts' => 1, // Number of posts to display
                                                     'post_status' => 'publish', // Only display published posts
                                                ) );

                                                if ( $latest_post ) {
                                                    $last_post_date = strtotime( $latest_post[0]['post_date'] );
                                                    $formatted_date = date( 'F j, Y', $last_post_date );
                                                    echo "<small>Last Posts`s date is: " . $formatted_date . "</small>"; ;
                                                } else {
                                                    echo "<small>No posts found.</small>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php _e('Search by keyword', 'exclusive'); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <?php get_search_form(true);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

<?php   display_last_post_in_random_categories();?>
       <?php if ( get_header_image() ) : ?>
        <div id="custom-header-image">
            <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" style="width:100%;">
        </div>
    <?php endif; ?>