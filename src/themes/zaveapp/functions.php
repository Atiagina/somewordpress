<?php
/**
*The functions file for zaveapp theme.
Theme Name: zaveapp
Theme URI: http://wordpress.org/themes/zaveapp
Author: Anna Atiagina
Author URI: http://atiagina.com/
Description: The theme created for ZaveApp in May 2016 to represent the brand and its unique features.
Version: 1.0
*/


//Enable Feauture images and post thumbnails
add_theme_support('post-thumbnails');
//

//create page excerpts
add_post_type_support('page', 'excerpt');
//

function themeprefix_bootstrap_modals() {
	wp_register_script ( 'modaljs' , get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1', true );
	wp_register_style ( 'modalcss' , get_stylesheet_directory_uri() . '/css/bootstrap.css', '' , '', 'all' );
	
	wp_enqueue_script( 'modaljs' );
	wp_enqueue_style( 'modalcss' );
}

add_action( 'wp_enqueue_scripts', 'themeprefix_bootstrap_modals');
