<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="featured">
  <!--<img src="http://themes.playnethemes.com/mayde/wp-content/uploads/2014/03/testcase31-copy.jpg">-->
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
  <div class="featuredImage" style="background-image: url(<?php echo $url; ?>);">

    <?php /* ?><?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'full', array( 'class' => 'left',
            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
        ) ); ?>
    </a>
    <?php } ?><?php */ ?>
  </div>

  <div class="featuredInner">
      <article class="container">
        <div class="articleTitleFeatured">
          <h1><?php the_title(); ?></h1>
        </div>
      </article>
    </div>
  </div>
</header>
<div class="breadcrumbSpacing"></div>
  <section class="container">
    <span class="articleCat right" style="margin-top:50px;">
          <i class="fa fa-calendar" style="padding-right:5px;"></i><?php the_date(); ?>
          
        </span>
    <div class="breadcrumb">
    <ol>
      <li><a href="<?php bloginfo('url'); ?>">Home</a></li> <i class="fa fa-caret-right dark"></i>
      <li><?php the_category(''); ?></li> <i class="fa fa-caret-right dark"></i>
      <li class="active"><?php the_title(); ?></li>
    </ol>
  </div>
    
    <div class="articleShort"><br/>
          <p><?php the_field('subtitles'); ?></p>
        </div>
        
  <article class="content">
     <?php the_content(); ?>
  </article>
   <span class="articleCat">
          <i class="fa fa-tags" style="padding-right:5px;"></i><?php the_category(''); ?>
          
        </span>
<br><br>
        <?php comments_template(); ?> 
  
  </section>

  
<?php endwhile; endif; ?>

<?php get_footer(); ?>