<?php get_header(); ?>
<header class="featured">
   <!--<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_5287d4367585d_1.JPG">-->
   <div class="featuredImage" style="background-image: url(<?php bloginfo('template_url') ?>/img/bgFET.jpg);">
      <div class="container">
         <center>
            <div class="topTextInner">
               <div class="topText"></div>
            </div>
            <br/><br/><br/><br/><br/><br/>
            <a style="text-decoration: none;" href="#"><div class="btnTop"><p>Who is André?</p></div></a>
         </center>
      </div>
   </div>
</header>

<div id="content">
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="articleS"></div>
      <div class="articleBG">
         <section class="container" >
            <div class="articleTitle">
               <h1><?php the_title(); ?></h1>
            </div>
            <div class="articleShort">
               <p><?php the_field('subtitles'); ?></p>
            </div>
            <span class="articleCat">
               <i class="fa fa-tags"></i><?php the_category($name) ?><br/><br/>
               <i class="fa fa-calendar" style="padding-right:5px;"></i><?php the_date(); ?>
            </span>
            <a href="<?php the_permalink(); ?>"><div class="btn right"><p>Read More</p></div></a>
         </section>
      </div>
   <?php endwhile; endif; ?>

   <?php if (show_posts_nav()) : ?>
      <div class="container" style="margin-top:110px;">
         <center><div class='navigation'>
            <?php next_posts_link('Older Stories'); ?>
            <?php previous_posts_link('Newer Stories'); ?>
         </div></center>
      </div>
   <?php endif; ?>
</div>


<?php get_footer(); ?>
