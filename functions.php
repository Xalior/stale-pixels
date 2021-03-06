<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'stale-pixels-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array());
    wp_enqueue_script( 'stale-pixels-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), '0.1.0', true );
}

if ( function_exists ('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Homepage Sidebar',
        'id' => 'homepage',
        'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}