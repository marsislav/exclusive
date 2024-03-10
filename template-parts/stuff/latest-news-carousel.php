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