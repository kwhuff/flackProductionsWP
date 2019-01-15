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
		<?php if ( get_theme_mod( INSTAGRAM_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( INSTAGRAM_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-instagram"></i></a><?php endif; ?>
		<?php if ( get_theme_mod( TWITTER_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( TWITTER_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-twitter"></i></a><?php endif; ?>
		<?php if ( get_theme_mod( FACEBOOK_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( FACEBOOK_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-facebook"></i></a><?php endif; ?>
		<?php if ( get_theme_mod( YOUTUBE_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( YOUTUBE_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-youtube"></i></a><?php endif; ?>
		<?php if ( get_theme_mod( VIMEO_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( VIMEO_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-vimeo"></i></a><?php endif; ?>
	</div>
</footer>
</body>
</html>
