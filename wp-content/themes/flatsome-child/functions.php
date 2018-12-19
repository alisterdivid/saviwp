<?php
//// Add custom Theme Functions here
//function flatsome_child_scripts() {
//	$uri = get_stylesheet_directory_uri();
//	$theme = wp_get_theme( get_template() );
//	$version = $theme->get( 'Version' );
//
//	// Styles
//	if(!is_rtl()){
//		wp_enqueue_style( 'flatsome-child-main', $uri .'/assets/css/flatsome.css', array(), $version, 'all' );
//	} else{
//		wp_enqueue_style( 'flatsome-child-main-rtl', $uri .'/assets/css/flatsome-rtl.css', array(), $version, 'all' );
//	}
//
//	if(is_woocommerce_activated() && !is_rtl()){
//		wp_enqueue_style( 'flatsome-child-shop', $uri .'/assets/css/flatsome-shop.css', array(), $version, 'all' );
//	} else if(is_woocommerce_activated()){
//		wp_enqueue_style( 'flatsome-child-shop-rtl', $uri .'/assets/css/flatsome-shop-rtl.css', array(), $version, 'all' );
//	}
//
////	// Register styles (Loaded on request)
////	wp_register_style( 'flatsome-child-effects', $uri .'/assets/css/effects.css', array(), $version, 'all' );
//
//
//}
//add_action( 'wp_enqueue_scripts', 'flatsome_child_scripts', 101 );
add_filter( 'wp_image_editors', 'flatsome_change_graphic_lib' );

function flatsome_change_graphic_lib($array) {
	return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}