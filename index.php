<?php

use function FakerPress\get;

 get_header() ; ?>

        <!-- Single Product Start -->
        <div id="post-<?php the_ID(); ?>" <?php post_class("container-fluid py-5"); ?>>
            <div class="container py-5">
                <ol class="breadcrumb justify-content-start mb-4">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-dark"><?php the_title();?></li>
                </ol>
                <div class="row g-4">
            
                
               <!-- <h1>ПОСЛЕДЕН ПОСТ</h1>-->
                <?php /*
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date'
);

$latest_post = new WP_Query($args);

if ($latest_post->have_posts()) :
    while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
        <div class="custom-class">
            <h2><?php the_title(); ?></h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
endif;

wp_reset_postdata();*/
?>
      
                    <div class="col-lg-8">
                        <div class="mb-4" id="primary">
                        <?php if(have_posts()){?>
        <?php while(have_posts()){?>
            <?php the_post();?>

            <h1 class="h1 display-5"><?php the_title();?></h1>
                        </div>
                        <div class="position-relative rounded overflow-hidden mb-3">

                        <?php if (has_post_thumbnail()) {?>
    <div class="post-image-wrap">
        <?php the_post_thumbnail( 'full', array( 'class' => 'post-thumb' ) );  ?>
    </div>
    <?php } ?>


    <?php if (has_category()) {?>
                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                               
                                    <?php echo get_the_category_list(); ?>  
                                
                            </div> <?php } ?>
                        </div>
                        <div class="d-flex justify-content-between">
                           <?php exclusive_postedOn(); ?>
                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> <?php  exclusive_display_post_views(); _e('Views, ', 'exclusive') ?></a>
                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                            <?php exclusive_authorInfo();?>
                        </div>
                        <div class="my-4">
                            <?php the_content();?>
                        </div>
                        <?php if (has_tag()) {?>
                            <div class="tab-class">
                                <div class="d-flex justify-content-between border-bottom mb-4">
                                    <ul class="nav nav-pills d-inline-flex text-center">
                                        <li class="nav-item mb-3">
                                            <h5 class="mt-2 me-3 mb-0"><?php _e('Tags', 'exclusive') ?>:</h5>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
                                                <span class="text-dark" style="width: 100px;">Sports</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        <?php } ?>

                            <?php get_template_part('template-parts/single/author');?>
                        </div>
                        <div class="bg-light rounded my-4 p-4">
                            <h4 class="mb-4">You Might Also Like</h4>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="img/chatGPT.jpg" class="img-fluid rounded" alt="">
                                        <div class="ms-3">
                                            <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the printing</a>
                                            <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute read</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                        <div class="ms-3">
                                            <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the printing</a>
                                            <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4">
                            <h4 class="mb-4"><?php _e('Comments', 'exclusive'); ?></h4>
                            <div class="p-4 bg-white rounded mb-4">
                                <div class="row g-4">
                                    <div class="col-3">
                                        <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex justify-content-between">
                                            <h5>James Boreego</h5>
                                            <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                        </div>
                                        <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-white rounded mb-0">
                                <div class="row g-4">
                                    <div class="col-3">
                                        <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex justify-content-between">
                                            <h5>James Boreego</h5>
                                            <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                        </div>
                                        <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 my-4">
                            <h4 class="mb-4">Leave A Comment</h4>
                            <form action="#">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control py-3" placeholder="Full Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control py-3" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="textarea" id="" cols="30" rows="7" placeholder="Write Your Comment Here"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="form-control btn btn-primary py-3" type="button">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>

        <?php }?>
        <?php } else {?>
            <p>Няма публикации</p>
            <?php } ?>
        <!-- Single Product End -->
<?php get_footer();?>