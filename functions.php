<?php

function minima_register_theme_menu() {
	register_nav_menu('primary', 'main menu');	
}

function minima_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

function minima_widgets_init() {
	register_sidebar( array(
		'name' => 'Footer Widget Area',
		'id' => 'footer-widget-area',
		'description' => 'Widget area located on footer',
		'before_widget' => '<div class="widgetBox>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
}

add_action('init', 'minima_register_theme_menu');

add_action( 'after_setup_theme', 'minima_theme_support' );

add_action('widgets_init', 'minima_widgets_init');
?>