<?php get_header();?>
        <!-- Main Post Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-7 col-xl-8 mt-0">

                    
   
                        <div class="position-relative overflow-hidden rounded"> <!-- <h1>ПОСЛЕДЕН ПОСТ</h1>-->
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
        <?php the_post_thumbnail( 'full', array( 'class' => 'post-thumb' ) );  ?>
    </div>
    <?php } ?>
                            <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">

                            
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> <?php display_reading_time();?></a>
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                <?php exclusive_authorInfo();?>
                            </div>
                        </div>
                        <div class="border-bottom py-3">
                            <a href="<?php the_permalink();?>" class="display-4 text-dark mb-0 link-hover"><h1><?php the_title(); ?></h1></a>
                        </div>
                        <p class="mt-3 mb-4"><?php the_excerpt (); ?>
                        </p>


 <?php endwhile;
endif;

wp_reset_postdata()
?>


                        
                    </div>
                    <div class="col-lg-5 col-xl-4">
                       <div class="bg-light rounded p-4 pt-0">


                       
                            <div class="row g-4">
                                <div class="col-12">

                                
                                               <h3> <?php _e('Explore all categories', 'exclusive');?></h3>
                                                <ul class="category-list">
                                                <?php
                                                $categories = get_categories(array(
                                                'orderby' => 'count',
                                                'order' => 'DESC',
                                                //'number' => 10
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
        
       

        <div class="container-fluid latest-news py-5">
            <div class="container py-5">
                <h2 class="mb-4"><?php _e('Latest News', 'exclusive');?></h2>
                <div class="latest-news-carousel owl-carousel">
            
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 20,
                'order' => 'DESC',
                'orderby' => 'date'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-zoomin img-fluid rounded-top w-100" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="d-flex flex-column p-4">
                        <a href="<?php the_permalink(); ?>" class="h4"><?php the_title(); ?></a>
                        <div class="d-flex justify-content-between">

                            <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $first_category = $categories[0]; // Get the first category
                                    ?> 
                                    <?php _e('Cat:', 'exclusive');  ?>
                                    <a href="<?php echo esc_url(get_category_link($first_category)); ?>"><?php echo esc_html($first_category->name); ?></a>
                                    <?php
                                }
                            ?>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> <?php the_time('M j, Y'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
            
        </div>

         <!-- Latest News End -->
    </div>
</div>


        <!-- Most Populer News Start -->
        
        <!-- Most Populer News End -->

<?php get_footer();?>