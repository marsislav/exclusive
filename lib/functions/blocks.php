
<?php 
// Register custom block styles
function theme_register_block_styles() {
    // Register custom block style
    wp_register_style(
        'custom-block-style',
        get_template_directory_uri() . '/lib/assets/css/block-style.css',
        array( 'wp-editor' ),
        null
    );

    // Register block style for specific block (replace 'core/paragraph' with the block name)
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'custom-style-name',
            'label' => __( 'mExcusive Custom Style Label', 'mexclusive' ),
            'style_handle' => 'custom-block-style',
        )
    );
}
add_action( 'init', 'theme_register_block_styles' );

// Register custom block patterns
function theme_register_block_patterns() {
    // Register custom block pattern
    register_block_pattern(
        'custom-pattern',
        array(
            'title'       => __( 'Custom Pattern', 'mexclusive' ),
            'description' => __( 'Description of the custom pattern.', 'mexclusive' ),
            'content'     => '<!-- wp:paragraph {"placeholder":"Content here..."} --><p>This is a custom block pattern.</p><!-- /wp:paragraph -->',
        )
    );
}
add_action( 'init', 'theme_register_block_patterns' );

// Add support for default block styles
add_theme_support( 'wp-block-styles' );