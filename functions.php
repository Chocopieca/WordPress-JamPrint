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

// widget-setting, sidebar


//