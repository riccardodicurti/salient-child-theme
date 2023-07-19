<?php

add_action( 'wp_enqueue_scripts', function() {
	$nectar_theme_version = nectar_get_theme_version();
	wp_enqueue_style( 'salient-child-theme-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
	wp_enqueue_style( 'salient-child-theme-custom-style', get_stylesheet_directory_uri() . '/dist/style.css', '', $nectar_theme_version );

	if ( is_rtl() ) {
		wp_enqueue_style( 'salient-rtl', get_template_directory_uri() . '/rtl.css', [], '1', 'screen' );
	}
}, 100 );

// require 'src/include/shape-divider.php';