
<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.08);">
            <div class="row g-4">
                <div class="col-lg-3">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                        } 
                        else {    
                            '<p class="text-primary display-6 mb-2" style="line-height: 0;">' . esc_html(bloginfo('name')) . '</p>';
                        }
                    ?>
                </div>
                <div class="col-lg-9">
                    <div class="d-flex position-relative overflow-hidden">
                        <?php echo '<small class="text-body fw-normal" style="letter-spacing: 12px;">' . esc_html(bloginfo('description')) . '</small>'?>
                    </div>
                </div>
            </div>
        </div>
            <?php get_template_part( 'template-parts/footer/widgets' ); ?>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
            <a href="<?php echo esc_url(home_url('/')); ?>"><span class="text-light"><?php get_template_part( 'template-parts/footer/info' ); ?></span></a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

<?php wp_footer(); ?>
    </body>
