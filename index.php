<?php get_header();?>
<h1>index</h1>
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
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</a>
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                <?php exclusive_authorInfo();?>
                            </div>
                        </div>
                        <div class="border-bottom py-3">
                            <a href="#" class="display-4 text-dark mb-0 link-hover"><h1><?php the_title(); ?></h1></a>
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
                                    <div class="rounded overflow-hidden">
                                        <img src="img/news-3.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <a href="#" class="h4 mb-2">Get the best speak market, news.</a>
                                        <p class="fs-5 mb-0"><i class="fa fa-clock"> 06 minute read</i> </p>
                                        <p class="fs-5 mb-0"><i class="fa fa-eye"> 3.5k Views</i></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
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
                <h2 class="mb-4">Latest News</h2>
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
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="small text-body link-hover">by <?php the_author(); ?></a>
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
        <div class="container-fluid populer-news py-5">
            <div class="container py-5">
                <div class="tab-class mb-4">
                    <div class="row g-4">
                        <div class="col-lg-8 col-xl-9">
                            <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                                <h1 class="mb-4">What’s New</h1>
                                <ul class="nav nav-pills d-inline-flex text-center">
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
                                            <span class="text-dark" style="width: 100px;">Sports</span>
                                        </a>
                                    </li>
                                   
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
                                            <span class="text-dark" style="width: 100px;">Politics</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-4">
                                            <span class="text-dark" style="width: 100px;">Technology</span>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </div>
                            <div class="tab-content mb-4">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                                                   testt Sports
                                                </div>
                                            </div>
                                            <div class="my-4">
                                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                            <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">ghjgjhgjSports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">rttyrySports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                                                    Politics
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                            </div>
                                            <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                                                    Technology
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                            </div>
                                            <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="border-bottom mb-4">
                                <h2 class="my-4">Most Views News</h2>
                            </div>
                            <div class="whats-carousel owl-carousel">
                                <div class="latest-news-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="img/news-7.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="img/news-6.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="img/news-3.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="img/news-4.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="img/news-5.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="p-3 rounded border">
                                        <h4 class="my-4">Popular News</h4>



                                        
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="img/features-sports-1.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Sports</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="img/features-technology.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="img/features-fashion.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="img/features-life-style.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Life Style</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="border-bottom my-3 pb-3">
                                                <h4 class="mb-0"><?php _e('Trending Tags', 'exclusive');?></h4>
                                                </div>
                                                <?php display_popular_tags(); ?>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Populer News End -->

<?php get_footer();?>