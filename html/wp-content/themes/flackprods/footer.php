<?php
/**
 * The footer file.
 *
 * @package RocketTheme
 */

wp_footer();

?>
<footer class="text-center">
	<div class="small-12 padding-top-1">
	     &copy; Flack Productions <?php echo date('Y'); ?>
	</div>
	<div class="small-12 footer-icons">
		<a href="<?php echo esc_html( get_theme_mod( INSTAGRAM_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-instagram"></i></a>
		<a href="<?php echo esc_html( get_theme_mod( TWITTER_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-twitter"></i></a>
		<a href="<?php echo esc_html( get_theme_mod( FACEBOOK_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-facebook"></i></a>
		<a href="<?php echo esc_html( get_theme_mod( YOUTUBE_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-youtube"></i></a>
		<a href="<?php echo esc_html( get_theme_mod( VIMEO_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-vimeo"></i></a>
	</div>
</footer>
</body>
</html>
