<?php
/**
 * Theme functions - functions.php File
 * 
 * @package wp-dev-factory
 */


function enqueue_styles(){

wp_enqueue_style( 'bo-style-files' , get_stylesheet_uri() , [] , false , all  );
}
add_action( 'wp_enqueue_scripts' , 'enqueue_styles' );


?>