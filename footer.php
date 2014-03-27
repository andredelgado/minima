	<footer>
		<div class="container">
			<div class="footerMenu">
				<?php wp_nav_menu( array( 'container_class' =--> 'main-nav', 'theme_location' => 'primary' ) ); ?>
			</div>
			<div class="widgetArea">
				<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
  					<aside class="widgets" role="complementary">
    			<?php dynamic_sidebar( 'footer-widget-area' ); ?>
  					</aside>
				<?php } ?>
			</div>
			<div class="footerCredits">
			</div>
		</div>
	</footer>
</body>