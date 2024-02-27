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
                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> <?php  exclusive_display_post_views(); _e(' Views', 'exclusive') ?></a>
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
                                                <?php
// Get all tags
$tags = get_tags();

if ($tags) {
    // Loop through each tag
    foreach ($tags as $tag) {
        ?>
        <span class="text-dark" style="width: 100px;">
            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
    </span>
        <?php
    }
}
?>



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