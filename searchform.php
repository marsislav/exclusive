<form role="search" method="get" class="c-search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <label class="search-label">
        <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'exclusive' ) ?></span>
        <input type="search" class="form-control p-3" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'exclusive' ) ?>" value="<?php echo esc_attr(get_search_query()) ?>" name="s" />
    </label>
    <button id="search-icon-1" type="submit"><span class="input-group-text p-3 u-screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'exclusive' ); ?></span><i class="fa fa-search" aria-hidden="true"></i></button>
</form>