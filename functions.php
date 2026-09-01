<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function lsc_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 44,
		'width'       => 190,
		'flex-height' => true,
		'flex-width'  => true,
	) );
}
add_action( 'after_setup_theme', 'lsc_theme_setup' );

/**
 * Customizer: footer/contact info a club admin should be able to update
 * (Facebook, LinkedIn, email, address) without touching template code.
 */
function lsc_customize_register( $wp_customize ) {
	$wp_customize->add_panel( 'lsc_club_info', array(
		'title'    => 'Thông tin CLB',
		'priority' => 30,
	) );

	$wp_customize->add_section( 'lsc_contact_section', array(
		'title' => 'Liên hệ & Social',
		'panel' => 'lsc_club_info',
	) );

	$fields = array(
		'lsc_facebook_url' => array( 'label' => 'Link Facebook', 'default' => 'https://www.facebook.com/lscftuhcmc' ),
		'lsc_linkedin_url' => array( 'label' => 'Link LinkedIn', 'default' => 'https://www.linkedin.com/company/lsc-ftu-2' ),
		'lsc_contact_email' => array( 'label' => 'Email liên hệ', 'default' => 'ict.lsc.ftu2@gmail.com' ),
		'lsc_contact_address' => array( 'label' => 'Địa chỉ', 'default' => 'Số 15, đường D5, Phường Thạnh Mỹ Tây, TP. Hồ Chí Minh' ),
		'lsc_footer_note' => array( 'label' => 'Ghi chú dưới logo (footer)', 'default' => 'Phân hiệu Trường Đại học Ngoại thương tại TP. Hồ Chí Minh' ),
	);

	foreach ( $fields as $id => $field ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $field['default'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $field['label'],
			'section' => 'lsc_contact_section',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'lsc_customize_register' );

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
