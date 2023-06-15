<?php
/**
 * Theme functions - functions.php File
 *
 * @package wp-dev-factory
 */

/**
 * Wir binden alle css & js-files
 *
 */


function enqueue_styles()
{
    wp_enqueue_style("mainstyles", get_stylesheet_uri(), [] , false , all);
    wp_enqueue_style("bootstrap-styles", get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css' , [] , false , 'all');
}
function enqueue_js_scripts()
{
    wp_enqueue_script("custom-js", get_template_directory_uri() . '/assets/js/script.js' , [] , false , true);
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.js' , ['jquery'] , false , true);
}
add_action("wp_enqueue_scripts", "enqueue_styles");
add_action("wp_enqueue_scripts", "enqueue_js_scripts");
?>
