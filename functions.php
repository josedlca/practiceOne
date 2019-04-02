<?php
// Register Nav Walker class Alias
    require_once('wp_bootstrap_navwalker.php'); 

// Nav Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
/*
	==========================================
	 Theme support function
	==========================================
*/
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');


// Excerpt Length Control
function set_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Customizer File
    require get_template_directory(). '/inc/customizer.php';