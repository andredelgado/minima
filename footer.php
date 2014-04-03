	<footer>
		<div class="footerWrapper">
			<div class="container">
				<div class="widgetArea">
					<div class="widget">
						<div class="social">
							<p><i class="fa fa-facebook"></i><a href="https://www.facebook.com/delgadoandre">delgadoandre</a></p>
							<p><i class="fa fa-instagram"></i><a href="http://www.instagram.com/andrevdelgado">@andrevdelgado</a></p>
							<p><i class="fa fa-twitter"></i><a href="http://twitter.com/delgadoandre">@delgadoandre</a></p>
							<p><i class="fa fa-github"></i><a href="http://github.com/andredelgado">andredelgado</a></p>
						</div>
					</div>
					<div class="widget" style="padding-left: 60px;">
						 <?php wp_list_categories( ); ?> 
					</div>
					<div class="widget" style="padding-left: 60px;">
						<h2>Last Tweets</h2>
						<div id="lastTweets"></div>
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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lastTweets.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ajaxcomments.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
</body>