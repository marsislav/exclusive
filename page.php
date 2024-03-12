<?php get_header(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1 class="mb-5"><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>

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
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>