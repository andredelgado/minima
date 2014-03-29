<?php

function minima_register_theme_menu() {
	register_nav_menu('primary', 'main menu');	
}

function minima_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

add_action('init', 'minima_register_theme_menu');

add_action( 'after_setup_theme', 'minima_theme_support' );

?>