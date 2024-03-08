<?php
    $footer_layout = sanitize_text_field(get_theme_mod('exclusive_footer_layout', '3,3,3,3'));
    $footer_layout = preg_replace('/\s+/', '', $footer_layout);
    $columns = explode(',', $footer_layout);
    $footer_bg = exclusive_sanitize_footer_bg(get_theme_mod( 'exclusive_footer_bg', 'dark' ));
    $widgets_active = false;
    foreach ($columns as $i => $column) {
        if( is_active_sidebar( 'footer-sidebar-' . ($i + 1) )) {
            $widgets_active = true;
        }
    }
?>
<?php if($widgets_active) { ?>
<div class="c-footer c-footer--<?php echo $footer_bg; ?>">
    <div class="container">
        <div class="row" style="display: flex;">
            <?php 
            // Count the total number of columns
            $total_columns = count($columns);
            // Calculate the width percentage for each column
            $column_width = 100 / $total_columns;
            foreach($columns as $i => $column) { ?>
                <div class="o-row__column o-row__column--span-12 o-row__column--span-<?php echo $column ?>@medium column-<?php echo $i+1; ?>" style="width: <?php echo $column_width; ?>%;">
                    <?php if(is_active_sidebar( 'footer-sidebar-' . ($i + 1) )) {
                        dynamic_sidebar( 'footer-sidebar-' . ($i + 1) );
                    } ?>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php } ?>