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


//  Andere Schreibweise um Styles und Scripts einzubinden

// function enqueue_styles()
// {
//     wp_enqueue_style("mainstyles", get_stylesheet_uri(), [] , false , all);
//     wp_enqueue_style("bootstrap-styles", get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css' , [] , false , 'all');
// }
// function enqueue_js_scripts()
// {
//     wp_enqueue_script("custom-js", get_template_directory_uri() . '/assets/js/script.js' , [] , false , true);
//     wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.js' , ['jquery'] , false , true);
// }
// add_action("wp_enqueue_scripts", "enqueue_styles");
// add_action("wp_enqueue_scripts", "enqueue_js_scripts");
// 

function theme_enqueue_scripts() 
{
    // register styles
    wp_register_style( 'mainstyles', get_stylesheet_uri(), [] , false, 'all');
    wp_register_style( 'bootstrap-styles', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.js', [] , false, 'all' );
   
    // register scripts
    wp_register_script( 'custom-js', get_template_directory_uri() . '/assetts/js/script.js', [] , false, true);
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'] , false, true );
   
    // styles in die Warteschlange setzen
    wp_enqueue_style( 'mainstyles' );
    wp_enqueue_style( 'bootstrap-styles' );

    // scripts in die Warteschlange setzen
    wp_enqueue_script( 'rap-jscustom-js' );
    wp_enqueue_script( 'bootstrap-js' );
}

// Funktion aufrufen
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>