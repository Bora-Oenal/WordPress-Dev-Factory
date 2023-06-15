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
    wp_enqueue_style("bo-style-files", get_stylesheet_uri(), [] , false , all);
}
function enqueue_js_scripts()
{
    wp_enqueue_script("bo-js-files", get_template_directory_uri() . '/assets/js/script.js' , [] , false , true);
}
add_action("wp_enqueue_scripts", "enqueue_styles");
add_action("wp_enqueue_scripts", "enqueue_js_scripts");
?>
