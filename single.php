<?php
 get_header() ; ?>

<!-- Single Product Start -->
<div id="post-<?php the_ID(); ?>" <?php post_class("container-fluid py-5"); ?>>
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'mexclusive'); ?></a></li>
            <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                    $first_category = $categories[0]; // Get the first category
                    ?>
                    <li class="breadcrumb-item"><a href="<?php echo esc_url(get_category_link($first_category)); ?>"><?php echo esc_html($first_category->name); ?></a></li>
                    <?php } ?>
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
                    <a href="<?php echo esc_url(get_category_link($first_category)); ?>"><?php echo esc_html($first_category->name); ?></a>         
                    </div> 
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-between">
                    <i class="fa fa-clock"></i> <?php display_reading_time();?>
                    <?php mexclusive_postedOn(); ?>
                    <i class="fa fa-eye"></i> 
                    <?php
                        $views = mexclusive_display_post_views();
                        printf(
                            _n('%d View', '%d Views', $views, 'mexclusive'),
                            $views );
                    ?>
                    <a href="#comments" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 
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
                <div class="my-4">
                    
                    <?php the_content();?>
                    <div class="pagination-container">
                    <?php wp_link_pages( array(
                        'before'      => '<div class="pagination"><span class="page-links-title">' . __( 'Pages:', 'mexclusive' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                        'next_or_number' => 'number',
                        'nextpagelink' => __( 'Next page', 'mexclusive' ),
                        'previouspagelink' => __( 'Previous page', 'mexclusive' ),
                    ) );?>
                    </div>
                </div>
<hr>
                         
                <?php if (has_tag()) {?>
                <div class="tab-class ">
                    <div class="d-flex justify-content-between border-bottom mb-4">
                        <ul class="nav-pills d-inline-flex text-center">
                            <li class="mb-3 ">
                                <h5 class="mt-2 me-3 mb-0"><?php _e('Tags', 'mexclusive') ?>:</h5>
                            </li>                  
                            <?php
// Get all tags
$tags = get_tags();
if ($tags) {
    // Loop through each tag
    foreach ($tags as $tag) {?>
        <li class="nav-item mb-3">
            <a class="d-flex py-2 bg-light rounded-pill me-2" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                <span class="text-dark" style="width: 100px;">
                    <?php echo $tag->name; ?>
                </span>
            </a>
        </li>
<?php }
} ?>
                        </ul>
                    </div>
                </div>
                        <?php } ?>
                            <?php if (get_theme_mod('mexclusive_display_author_info', true)){?>
                                <?php get_template_part('template-parts/single/author');?>
                            <?php }?> 
                         
                        <?php get_template_part('template-parts/single/navigation');?>

                        <?php if (comments_open()) {comments_template();}?>
                        
            </div>
                        <?php get_sidebar();?>
        </div>
    </div>  
    
    
</div>

        <?php }?>
        <?php } else {?>
            <p><?php _e('No posts found!', 'mexclusive') ?></p> 
            <?php } ?>
        <!-- Single Product End -->
<?php get_footer();?>
