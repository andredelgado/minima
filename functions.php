<?php

function minima_register_theme_menu() {
	register_nav_menu('primary', 'main menu');	
}

function minima_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

function ajaxify_comments($comment_ID, $comment_status){
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        //If AJAX Request Then
                switch($comment_status){
                        case '0':
                                //notify moderator of unapproved comment
                                wp_notify_moderator($comment_ID);
                        case '1': //Approved comment
                                echo "success";
                                $commentdata=&get_comment($comment_ID, ARRAY_A);
                                $post=&get_post($commentdata['comment_post_ID']);
                                wp_notify_postauthor($comment_ID, $commentdata['comment_type']);
                        break;
                        default:
                                echo "error";
                }
                exit;
        }
}

function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

add_action('comment_post', 'ajaxify_comments',20, 2);
add_action('init', 'minima_register_theme_menu');
add_action( 'after_setup_theme', 'minima_theme_support' );
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );

?>