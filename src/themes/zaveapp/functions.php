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

//I am using Mike's Sinkula flexslider
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
 // create the list items for images with captions
    
    foreach ( $attachments as $attachment_id => $attachment ) { 
	
		$theImage = wp_get_attachment_image($attachment_id, 'flexslider');
		$theBlockquote = get_post_field('post_excerpt', $attachment->ID);
	
        echo '<li>';
		echo $theImage;
		echo '<blockquote>'.$theBlockquote. '&nbsp;</blockquote>';
        echo '</li>';
        
    } 
    
    echo '</ul>';
    echo '</div>';
        ?>
    <!-- End Slider -->
        
	<?php }// end see if images
	
} // end add flexslide 
add_shortcode( 'flexslider', 'add_flexslider' ); 

// Create FontAwesome Shortcode
function fontawesome_func( $atts ) {
	$atts = shortcode_atts(
		array(
			'icon' => 'icon',
		), $atts, 'fa' );

	return '<i class="' . $atts['icon'] .'"></i>';
}
add_shortcode( 'fa', 'fontawesome_func' );
