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

// Customizer File
    require get_template_directory(). '/inc/customizer.php';