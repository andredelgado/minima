<?php get_header(); ?>
<header class="featured">
  <img src="http://themes.playnethemes.com/mayde/wp-content/uploads/2014/03/testcase31-copy.jpg">

  <div class="featuredInner">
    <div class="searchBox">
      <input type="text" value="" name="s" id="s" placeholder="What's you looking for?">
      <img src="http://connormulcahey.com/searchIcon.svg" alt="" />
    </div>
    <div class="welcome">
      <p></p>
    </div>

  </div>
</header>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="articleS"></div>
  <div class="articleBG">
    <section class="container">
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
      <a href="<?php the_permalink(); ?>"><div class="btn right"><p>Read More</p></div></a>
    </section>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>