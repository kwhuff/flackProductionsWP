<?php // phpcs:ignore Files.Filename
/**
 * Contact Module.
 *
 * @package flackprods
 */
$form = get_sub_field(Contact::CONTENT);
$name = get_sub_field(Contact::NAME);
$email = get_sub_field(Contact::EMAIL);
$phone_number = get_sub_field(Contact::PHONE_NUMBER);
$address = get_sub_field(Contact::ADDRESS);
?>

<div class="grid-container portfolio-styling">
	<div class="grid-x">
		<div class="small-12 large-6 padding-2">
			<?php echo $form ?>
		</div>
		<div class="position-relative small-12 large-6 padding-2 contact-wrapper text-center">
			<div class="contact-info">
				<img class='contact-logo' src="<?php echo esc_url( get_theme_mod( HEADER_LOGO ) ); ?>" alt="Flack Productions Logo">
				<div><?php echo $address; ?></div>
				<div><?php echo $name; ?></div>
				<div><?php echo $phone_number; ?></div>
				<div><?php echo $email; ?></div>
				<?php if ( get_theme_mod( INSTAGRAM_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( INSTAGRAM_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-right-1 margin-top-1 fab fa-instagram"></i></a><?php endif; ?>
				<?php if ( get_theme_mod( TWITTER_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( TWITTER_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-twitter"></i></a><?php endif; ?>
				<?php if ( get_theme_mod( FACEBOOK_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( FACEBOOK_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-facebook"></i></a><?php endif; ?>
				<?php if ( get_theme_mod( YOUTUBE_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( YOUTUBE_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-youtube"></i></a><?php endif; ?>
				<?php if ( get_theme_mod( VIMEO_SETTINGS ) !== '' ) : ?><a href="<?php echo esc_html( get_theme_mod( VIMEO_SETTINGS ) ); ?>"><i class="mobile-social-icon margin-left-1 margin-right-1 margin-top-1 fab fa-vimeo"></i></a><?php endif; ?>
			</div>
		</div>
	</div>
</div>
