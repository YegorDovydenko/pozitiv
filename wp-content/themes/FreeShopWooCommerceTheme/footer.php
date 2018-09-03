﻿<?php $shortname = "sell_theme"; ?>
<footer id="footer">
	<div class="footer_widgets_cont">
		<div class="container">
			
			<div class="clear"></div>
		</div> <!-- //container -->
	</div> <!-- //footer_widgets_cont -->
	<div class="footer_social">
	
	<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_linkedin_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="linkedin" /></a>
		<?php } ?>
		
		<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_picasa_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_picasa_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="social" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
		<?php } ?>
		
		
		
		<div class="clear"></div>
	</div><!--//footer_social-->
	© 2017 All Rights Reserved. Developed by <a href="https://dessign.net">Dessign</a> </div>
</footer><!--//footer-->
<?php wp_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
</body>
</html>