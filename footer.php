	<footer>
		<div class="footerWrapper">
			<div class="container">
				<div class="widgetArea">
					<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
  						<aside class="widgets" role="complementary">
    						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
  						</aside>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="footerBar">
			<div class="container">
				<div class="footerCredits left">
					<a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a> powerd by <a href="http://andreny.com/minima">minima.</a>
				</div>
				<div class="footerMenu right">
					<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
				</div>
			</div>
		</div>
	</footer>
</body>