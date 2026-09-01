<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function lsc_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'lsc_theme_setup' );

function lsc_theme_assets() {
	wp_enqueue_style(
		'lsc-google-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&subset=vietnamese,latin-ext,latin&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'lsc-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lsc_theme_assets' );
