<?php

function minima_register_theme_menu() {
	register_nav_menu('primary', 'main menu');	
}

function minima_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

function minima_widgets_init() {
	if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => 'Footer Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Center Footer Widget Position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer Widget Position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

}
}

add_action('init', 'minima_register_theme_menu');

add_action( 'after_setup_theme', 'minima_theme_support' );

add_action('widgets_init', 'minima_widgets_init');
?>