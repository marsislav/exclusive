<?php
require_once('lib/functions/enqueue.php');
require_once('lib/functions/post-views-counter.php');
require_once('lib/functions/pupular-tags.php');
require_once('lib/functions/theme-support.php');
require_once('lib/functions/sidebars.php');
require_once('lib/functions/customize.php');
require_once('lib/functions/navigation.php');
require_once('lib/functions/random-categories.php');
require_once('lib/functions/walker.php');
require_once('lib/functions/dynamic-meta.php');
require_once('lib/functions/last-ten-posts.php');
require_once('lib/functions/reading-time.php');
require_once('lib/functions/custom-header.php');
require_once('lib/functions/custom-colors.php');
require_once('lib/functions/get-author.php');
require_once('lib/functions/posted-on.php');
require_once('lib/functions/custom-bgr.php');
require_once('lib/functions/blocks.php');

//Leave it here

function mexclusive_sanitize_footer_bg( $input ) {
    $valid = array('light', 'dark');
    if( in_array($input, $valid, true) ) {
        return $input;
    }
    return 'dark';
}
















