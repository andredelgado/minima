<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="featured">
  <?php /* ?><?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
  <div class="featuredImage" style="background-image: url(<?php echo $url; ?>);">
    <h1><?php the_title(); ?></h1>
  </div><?php */ ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
  <div class="featuredImage" style="background-image: url(<?php echo $url; ?>);">
      <div class="container">
         <div class="headerInner">
         <center>
            <div class="topTextInner">
               <div class="headerTitle"><h1><?php the_title(); ?></h1></div>
            </div>
            <div class="HarticleShort"><br/>
          <p><?php the_field('subtitles'); ?></p>
        </div>
         </center>
      </div>
      </div>
   </div>

</header>
<div class="breadcrumbSpacing"></div>
  <section class="container">
    <div class="breadcrumb">
    <ol>
      <li><a href="<?php bloginfo('url'); ?>">Home</a></li> <i class="fa fa-caret-right dark"></i>
      
      <li class="active"><?php the_title(); ?></li>
    </ol>
  </div>
    
    
        
  <article class="content">
     <?php the_content(); ?>
  </article>
   
<br><br>
        
  
  </section>

  
<?php endwhile; endif; ?>

<?php get_footer(); ?>