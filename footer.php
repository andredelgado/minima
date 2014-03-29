	<footer>
		<div class="footerWrapper">
			<div class="container">
				<div class="widgetArea">
					<div class="widget">
						<h2>Last Tweets</h2>
						<div id="lastTweets"></div>
					</div>
					<div class="widget">
						 <?php wp_list_categories(); ?> 
					</div>
				</div>
			</div>
		</div>
		<div class="footerBar">
			<div class="container">
				<div class="footerCredits left">
					<a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a> powerd by <a href="http://andreny.com/minima">minima.</a>
				</div>
				<div class="footerMenu right">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lastTweets.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/custom.js"></script>
</body>