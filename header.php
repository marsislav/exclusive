<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
    </head>

    <body <?php body_class();?>>
    <?php wp_body_open();?>

        <?php get_template_part( 'template-parts/header/header-image' ); ?>

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
                <?php get_template_part('template-parts/header/last-post-line'); ?>
            </div>
            
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand mt-3">
                            <?php if (has_custom_logo()) {
                                    the_custom_logo();
                                    } 
                                   else {    
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
                                                    echo '<small>' . esc_html__('Last Posts`s date is: ', 'exclusive') . $formatted_date . '</small>';
                                                } else {
                                                    echo '<small>' . esc_html__('No posts found.', 'exclusive') . '</small>';
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