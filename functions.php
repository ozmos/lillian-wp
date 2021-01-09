<?php
##========================================================================================
##                                                                                      ##
##                                         TODO                                         ##
##                                                                                      ##
##========================================================================================
// Remove dead code
// Separate portfolio items from title and description DONE 9/1/21
// Add copyright to footer DONE 1/1/2021
// Change location of pricing info DONE 1/1/2021
// Spam prevention DONE 9/1/21 
// Move ACF fields to separate file DONE 9/1/21


##========================================================================================
##                                                                                      ##
##                                 INHERIT PARENT STYLES                                ##
##                                                                                      ##
##========================================================================================

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

##========================================================================================
##                                                                                      ##
##                            THEME SCRIPTS					                            ##
##                                                                                      ##
##========================================================================================


add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_scripts() {
	// easing jquery module
	wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), false, true );
	// theme scripts
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory(  ) . '/inc/assets/js/scripts.js', array(), false, true );
	// google fonts
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', false );
	wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic', false );
	// font awesome
	wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}

##========================================================================================
##                                                                                      ##
##                                      ACF FIELDS                                      ##
##                                                                                      ##
##========================================================================================

require_once get_stylesheet_directory(  ) . '/inc/acf/load-fields.php';