<?php

add_theme_support('menus');

register_sidebar(
array(
'before_widget' => '<div class = "widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',




)
);
// register_sidebar 終わり

add_theme_support('post-thumbnails');
function shortcode_tw() {
  return '<a href = "">@ttctw</a>follow us! ';
}
add_shortcode('tw', 'shortcode_tw()');

function my_bootstrap_scripts() {

wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.2-dist/css/bootstrap.min.css');

wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-3.3.2-dist/js/bootstrap.min.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );





 ?>
