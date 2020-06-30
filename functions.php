<?php

// adding-moduls
add_action( 'wp_enqueue_scripts', 'jamprint_styels' );
add_action( 'wp_enqueue_scripts', 'jquery_method');
add_action( 'wp_footer', 'jamprint_scripts');

function jamprint_styels() {
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/Bootstrap/bootstrap.min.css');
    wp_enqueue_style( 'main.min', get_template_directory_uri() . '/css/main.min.css');
}
function jquery_method() {
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-core' );

    wp_register_script( 'jquery-core' , '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );
    wp_register_script( 'jquery', false, array('jquery-core'), null, true);

    wp_enqueue_script( 'jquery' );
}
function jamprint_scripts() {
    wp_enqueue_script( 'popper.min', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script( 'font_awesome.min', get_template_directory_uri() . '/js/all.min.js');
}

//global
// add_action( 'after_setup_theme', 'theme_title' );

// function theme_title() {
// 	add_theme_support( 'title-tag' );
// 	add_filter( 'pre_get_document_title', function() {
// 		if (is_page() ){
// 			return 'JamPrint';
// 		}
// 		return 'notJamPtint';
// 	} );
// }

// logo-setting
add_theme_support( 'custom-logo' );

$calendars_id = get_cat_ID( 'calendars' );
$calendars_link = get_category_link( $calendars_id );
$postcards_id = get_cat_ID( 'postcards' );
$postcards_link = get_category_link( $postcards_id );

// menu-setting
add_action( 'after_setup_theme', 'myMenu' );

function myMenu() {
    register_nav_menu( 'top', 'Верхнее меню');
    register_nav_menu( 'bot-menu', 'Нижнее меню навигации');
    register_nav_menu( 'bot-cat', 'Нижнее меню категорий');
    register_nav_menu( 'cat-menu', 'Категории и теги каталога');
};

// custom settings
add_action( 'admin_init', 'phone_settings_api_init' );

function phone_settings_api_init() {
	register_setting( 'general', 'phone', 'sanitize_text_field' );

	add_settings_field(
		'phone',
		'<label for="phone">Телефон</label>',
		'phone_field_html',
		'general'
    );
    
    register_setting( 'general', 'email', 'sanitize_text_field' );

	add_settings_field(
		'email',
		'<label for="email">Почта</label>',
		'email_field_html',
		'general'
    );
    
    register_setting( 'general', 'address', 'sanitize_text_field' );

	add_settings_field(
		'address',
		'<label for="address">Адресс</label>',
		'address_field_html',
		'general'
    );
    
    register_setting( 'general', 'twitter', 'sanitize_text_field' );

	add_settings_field(
		'twitter',
		'<label for="twitter">Twitter</label>',
		'twitter_field_html',
		'general'
    );
    
    register_setting( 'general', 'facebook', 'sanitize_text_field' );

	add_settings_field(
		'facebook',
		'<label for="facebook">Facebook</label>',
		'facebook_field_html',
		'general'
    );
    
    register_setting( 'general', 'instagram', 'sanitize_text_field' );

	add_settings_field(
		'instagram',
		'<label for="instagram">Instagram</label>',
		'instagram_field_html',
		'general'
    );
    
    register_setting( 'general', 'google_maps', 'sanitize_text_field' );

	add_settings_field(
		'google_maps',
		'<label for="google_maps">Google maps</label>',
		'google_maps_field_html',
		'general'
    );
    
    register_setting( 'general', 'business_card', 'sanitize_text_field' );

	add_settings_field(
		'business_card',
		'<label for="business_card">Business Card</label>',
		'business_card_field_html',
		'general'
	);
}

function phone_field_html() {
	$value = get_option( 'phone', '' );
    printf( '<input type="text" id="phone" name="phone" value="%s" />', esc_attr( $value ) );
}

function email_field_html() {
    $value = get_option( 'email', '' );
	printf( '<input type="text" id="email" name="email" value="%s" />', esc_attr( $value ) );
}

function address_field_html() {
    $value = get_option( 'address', '' );
	printf( '<input type="text" id="address" name="address" value="%s" />', esc_attr( $value ) );
}

function twitter_field_html() {
    $value = get_option( 'twitter', '' );
	printf( '<input type="text" id="twitter" name="twitter" value="%s" />', esc_attr( $value ) );
}

function facebook_field_html() {
    $value = get_option( 'facebook', '' );
	printf( '<input type="text" id="facebook" name="facebook" value="%s" />', esc_attr( $value ) );
}

function instagram_field_html() {
    $value = get_option( 'instagram', '' );
	printf( '<input type="text" id="instagram" name="instagram" value="%s" />', esc_attr( $value ) );
}

function google_maps_field_html() {
    $value = get_option( 'google_maps', '' );
	printf( '<input type="text" id="google_maps" name="google_maps" value="%s" />', esc_attr( $value ) );
}

function business_card_field_html() {
    $value = get_option( 'business_card', '' );
	printf( '<textarea id="business_card" name="business_card" style="min-height: 200px; min-width: 500px" placeholder="%s"/></textarea>', esc_attr( $value ) );
}
// widget-setting, sidebar


// Миниатюры
add_theme_support( 'post-thumbnails' );