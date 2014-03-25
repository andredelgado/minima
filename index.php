<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/custom.js"></script>
  </head>
<body>
  <header class="featured">
    <img src="http://themes.playnethemes.com/mayde/wp-content/uploads/2014/03/testcase31-copy.jpg">
  </header>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="container articleS">
    <div class="articleTitle">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="articleShort">
    <p>Lorem Ipsum Dolor Ahmet</p>
  </div>
    <p>Categories</p>
    <a href="<?php the_permalink(); ?>"><div class="btn right"><p>Read More</p></div></a>
  </article>
<?php endwhile; endif; ?>
  <footer>
  </footer>
</body>