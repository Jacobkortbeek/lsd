<?php

function wpt_create_widget( $name, $id, $description ) {
  register_sidebar(array(
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description ),
    'before_widget' => '<div class="header">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="heading">',
    'after_title' => '</h2>'
  ));
}

wpt_create_widget( 'Page Header', 'page', 'Header' );

function wpt_theme_styles() {
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'secondary_css', get_template_directory_uri() . '/css/style.css' );
  wp_enqueue_style( 'bootstrap_responsive', get_template_directory_uri() . '/css/bootstrap-responsive.min.css' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );
function wpt_theme_js() {
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), ' ', true);
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

?>
