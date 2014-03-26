<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="featured">
  <!--<img src="http://themes.playnethemes.com/mayde/wp-content/uploads/2014/03/testcase31-copy.jpg">-->
  <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'full', array( 'class' => 'left',
            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
        ) ); ?>
    </a>
    <?php } ?>

  <div class="featuredInner">
      <article class="container">
        <div class="articleTitleFeatured">
          <h1><?php the_title(); ?></h1>
        </div>
      </article>
    </div>
  </div>
</header>
<div class="articleS"</div>
  <section class="container">
    <span class="articleCat">
          <?php the_date(); ?> <p>in:</p> <?php the_category($name) ?><br/><br/>
          
        </span>
    <div class="articleShort">
          <p>Interesting publisher names kept by developers in Windows Phone Store</p>
        </div>
        
  <article class="content">
     <?php the_content(); ?>
  </article>
  </section>

  
<?php endwhile; endif; ?>

<?php get_footer(); ?>