<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  
  <title> <?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
  
  <meta name="description" content="<?php if (have_posts()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; endif; ?>" />
  
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/typed.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css" />

  <?php wp_head(); ?> 
</head>
<body>

