<?php
//Posted on  
function exclusive_postedOn() {?>
    <i class="fa fa-clock"></i> 
        <?php _e ('Posted on', 'exclusive');?> <a href="<?php esc_url(get_permalink());?>" class="text-dark link-hover me-3"><time datetime="<?php echo esc_attr(get_the_date());?>">
                            <?php echo esc_html(get_the_date());?>
                            </time></a>
<?php } ?>