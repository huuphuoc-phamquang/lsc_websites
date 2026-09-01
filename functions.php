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

	$wp_customize->add_setting( 'lsc_footer_about', array(
		'default'           => 'Logistics Studying Club tự hào là CLB tiên phong của trường Đại học Ngoại thương Cơ sở II trong lĩnh vực Logistics và Quản lý chuỗi cung ứng.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'lsc_footer_about', array(
		'label'   => 'Đoạn giới thiệu ngắn (footer)',
		'section' => 'lsc_contact_section',
		'type'    => 'textarea',
	) );
}
add_action( 'customize_register', 'lsc_customize_register' );

/**
 * ACF fields for the front-page copy that changes over time (hero, mission,
 * SCMission, project cards). Only registers if ACF is installed/active.
 */
function lsc_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_lsc_front_page',
		'title'    => 'Nội dung trang chủ',
		'location' => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'fields'   => array(
			array( 'key' => 'field_hero_title', 'name' => 'hero_title', 'label' => 'Tiêu đề Hero', 'type' => 'text', 'placeholder' => 'CLB Logistics HCMC' ),
			array( 'key' => 'field_hero_text', 'name' => 'hero_text', 'label' => 'Đoạn giới thiệu Hero', 'type' => 'textarea', 'rows' => 3, 'placeholder' => 'Logistics Studying Club tự hào là CLB tiên phong của trường Đại học Ngoại thương Cơ sở II trong lĩnh vực Logistics và Quản lý chuỗi cung ứng.' ),
			array( 'key' => 'field_mission_text', 'name' => 'mission_text', 'label' => 'Nội dung Sứ mệnh', 'type' => 'textarea', 'rows' => 3, 'placeholder' => 'Được thành lập vào năm 2014 và lấy slogan là “Ship your dream”, Câu lạc bộ Logistics đã và sẽ luôn nỗ lực, phấn đấu với mục tiêu cung cấp cho ngành Logistics và Quản lý chuỗi cung ứng nguồn nhân lực chất lượng cao.' ),
			array( 'key' => 'field_scmission_desc', 'name' => 'scmission_desc', 'label' => 'Mô tả SCMission', 'type' => 'textarea', 'rows' => 3, 'placeholder' => 'Cuộc thi phân tích và giải quyết tình huống kinh doanh trong lĩnh vực Logistics và Quản lý chuỗi cung ứng, do CLB tổ chức thường niên cùng các doanh nghiệp trong ngành.' ),
			array( 'key' => 'field_scmission_stat_seasons', 'name' => 'scmission_stat_seasons', 'label' => 'SCMission - Mùa tổ chức', 'type' => 'text', 'placeholder' => '09' ),
			array( 'key' => 'field_scmission_stat_participants', 'name' => 'scmission_stat_participants', 'label' => 'SCMission - Thí sinh tham gia', 'type' => 'text', 'placeholder' => '5000+' ),
			array( 'key' => 'field_scmission_stat_sponsors', 'name' => 'scmission_stat_sponsors', 'label' => 'SCMission - Doanh nghiệp đồng hành', 'type' => 'text', 'placeholder' => '70+' ),
			array( 'key' => 'field_scmission_stat_universities', 'name' => 'scmission_stat_universities', 'label' => 'SCMission - Trường đại học', 'type' => 'text', 'placeholder' => '40+' ),
			array( 'key' => 'field_podcast_desc', 'name' => 'podcast_desc', 'label' => 'Mô tả Podcast', 'type' => 'textarea', 'rows' => 2, 'placeholder' => 'Bản tin phân tích thị trường vận tải và chuỗi cung ứng.' ),
			array( 'key' => 'field_workshop_desc', 'name' => 'workshop_desc', 'label' => 'Mô tả Workshop học thuật', 'type' => 'textarea', 'rows' => 2, 'placeholder' => 'Ba tuần nền tảng logistics dành cho tân thành viên.' ),
			array( 'key' => 'field_training_desc', 'name' => 'training_desc', 'label' => 'Mô tả Training nội bộ', 'type' => 'textarea', 'rows' => 2, 'placeholder' => 'Chuỗi đào tạo nền tảng Logistics và Quản lý chuỗi cung ứng cho thành viên mới, do ban chuyên môn dẫn dắt.' ),
		),
	) );
}
add_action( 'acf/init', 'lsc_register_acf_fields' );

/**
 * Safe wrapper so templates don't fatal-error before ACF is installed/active.
 */
function lsc_field( $name, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}
	$value = get_field( $name );
	return $value ? $value : $default;
}

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
