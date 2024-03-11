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
                                    <p class="text-white mb-0 link-hover">
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
                                            
                                                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded-circle border border-3 border-primary me-2 small' ) );  ?>
                                            
                                                <?php } ?>
                                                        <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                        </a>
                                                
                                                <?php endwhile;
                                            endif;

                                            wp_reset_postdata();
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="top-link flex-lg-wrap">
                        <?php
                        $current_day = date_i18n(get_option('date_format'));
                        echo esc_html__('Today is: ', 'exclusive') . $current_day;
                        ?>
                        </div>
                    </div>
                </div>