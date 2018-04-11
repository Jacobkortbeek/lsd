<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

function wpt_theme_styles() {
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'secondary_css', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

?>
