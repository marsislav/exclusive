<?php get_header(); ?>
<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0">
                <div class="position-relative overflow-hidden rounded">
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
                                    <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail( 'full', array( 'class' => 'post-thumb' ) ); ?>
                                    </a>
                                </div>
                            <?php } ?>

                            <div class="d-flex justify-content-between">
                                <i class="fa fa-clock"></i> <?php display_reading_time(); ?>
                                <?php mexclusive_postedOn(); ?>
                                <i class="fa fa-eye"></i> 
                                <?php
                                $views = mexclusive_display_post_views();
                                printf(
                                    _n('%d View', '%d Views', $views, 'mexclusive'),
                                    $views
                                );
                                ?>
                                <a href="<?php the_permalink();?>#comments" class="text-dark link-hover me-3">
                                    <i class="fa fa-comment-dots"></i> 
                                    <?php 
                                    printf(
                                        _n(
                                            '%s Comment',
                                            '%s Comments',
                                            get_comments_number(),
                                            'mexclusive'
                                        ),
                                        number_format_i18n(get_comments_number())
                                    ); 
                                    ?>
                                </a>
                                <?php mexclusive_authorInfo();?>
                            </div>
                            <div class="border-bottom py-3">
                                <a href="<?php the_permalink();?>" class="display-4 text-dark mb-0 link-hover"><h1><?php the_title(); ?></h1></a>
                            </div>
                            <p class="mt-3 mb-4"><?php the_excerpt(); ?></p>
                        <?php endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 pt-0">
                    <div class="row g-4">
                        <div class="col-12">                              
                            <h3><?php _e('Explore all categories', 'mexclusive');?></h3>
                            <ul class="category-list">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'count',
                                    'order' => 'DESC',
                                ));
                                foreach ($categories as $category) {
                                    echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' .'<span class="post-counter">' .$category->count. '</span>' . $category->name . '</a> </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Main Post Section End -->

<!-- Latest News Start -->
<?php get_template_part('template-parts/stuff/latest-news-carousel'); ?>
<!-- Latest News End -->
</div>
</div>
<?php get_footer(); ?>