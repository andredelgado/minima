<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="featured">
  <img src="http://themes.playnethemes.com/mayde/wp-content/uploads/2014/03/testcase31-copy.jpg">

  <div class="featuredInner">
    <div class="articleS"></div>
      <article class="container">
        <div class="articleTitle">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="articleShort">
          <p>Interesting publisher names kept by developers in Windows Phone Store</p>
        </div>
        <span class="articleCat">
          <p>In:</p> <?php the_category($name) ?><br/><br/>
          <?php the_date(); ?>
        </span>
      </article>
    </div>
  </div>
</header>
<div class="articleS"</div>
  <section class="container">
  <article class="content">
     <?php the_content(); ?>
  </article>
  </section>

  
<?php endwhile; endif; ?>

<?php get_footer(); ?>