<?php

use function FakerPress\get;

 get_header() ; ?>

        <!-- Single Product Start -->
        <div id="post-<?php the_ID(); ?>" <?php post_class("container-fluid py-5"); ?>>
            <div class="container py-5">
                <ol class="breadcrumb justify-content-start mb-4">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <?php
$categories = get_the_category();
if (!empty($categories)) {
    $first_category = $categories[0]; // Get the first category
    ?>
    <li class="breadcrumb-item"><a href="<?php echo esc_url(get_category_link($first_category)); ?>"><?php echo esc_html($first_category->name); ?></a></li>
    <?php
}
?>
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
                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> <?php comments_number('0', '1', '%'); ?> Comment</a>
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
                        <?php get_template_part('template-parts/single/navigation');?>

                        <?php if (comments_open()) {comments_template();}?>
                        
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