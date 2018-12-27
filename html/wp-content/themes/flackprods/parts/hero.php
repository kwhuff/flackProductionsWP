<div class="page-hero">
	<?php
	/**
	 * Page Hero
	 *
	 * @package KKMI
	 */
	$container_class  = 'hero-simple';
	$background_image = get_field( HERO_BACKGROUND_IMAGE );
	$mini_hero        = get_field( MINI_HERO );
	$hero_text        = get_field( HERO_TEXT );
	$mini_hero_title  = get_field( MINI_HERO_TEXT );

	?>

	<div class="hero-container <?php echo esc_attr( $container_class ); ?> <?php if ( $mini_hero ) : ?>mini-hero-container<?php endif ?>" style="background-image: url( '<?php echo esc_url( $background_image['url'] ); ?>' )">
		<?php if ( ! $mini_hero ) : ?>
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-12">
						<h3><?php echo $hero_text ?></h3>
					</div>
				</div>
			</div>
		<?php else : ?>
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12">
					<h3><?php echo $mini_hero_title ?></h3>
				</div>
			</div>
		</div>
		<?php endif ?>
	</div>
</div>
