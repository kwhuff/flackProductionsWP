<?php
/**
 * Navigation in the header
 *
 * @package flackprods
 */

$nav_links     = get_wp_nav_items_by_theme_location( 'header_menu' );
$hero_included = get_field( INCLUDE_HERO );
?>

<header class="header-nav-container">
	<nav class="grid-x mobile-vertical-align sub-menu-container hide-for-large mobile-nav-only align-center">
		<div class="cell small-6 padding-bottom-1 padding-top-1 padding-left-1">
			<img src="<?php echo esc_url( get_theme_mod( HEADER_LOGO ) ); ?>" alt="KKMI Logo">
		</div>
		<div class="cell small-6 padding-1 float-right small align-self-middle">
			<i id="mobile-menu-display" class="float-right fas fa-bars"></i>
		</div>
		<div id="mobile-menu">
			<div class="grid-x">
				<div class="small-8 small-offset-2 padding-top-2 padding-horizontal-1 margin-top-1 margin-bottom-3 text-center">
					<img src="<?php echo esc_url( get_theme_mod( HEADER_LOGO ) ); ?>" alt="Flack Productions Creative Video">
				</div>
				<?php foreach ( $nav_links as $link ) : ?>
					<div class="small-12 text-center mobile-nav-link-wrapper">
						<a class="mobile-nav-link" href="<?php echo esc_url( $link->url ); ?>"><?php echo $link->post_title; ?></a>
					</div>
				<?php endforeach ?>
				<div class="small-12 margin-bottom-1 position-fixed-bottom text-center">
					<a href="<?php echo esc_html( get_theme_mod( INSTAGRAM_SETTINGS ) ); ?>"><i class="mobile-social-icon padding-1 fab fa-instagram"></i></a>
					<a href="<?php echo esc_html( get_theme_mod( TWITTER_SETTINGS ) ); ?>"><i class="mobile-social-icon padding-1 fab fa-twitter"></i></a>
					<a href="<?php echo esc_html( get_theme_mod( FACEBOOK_SETTINGS ) ); ?>"><i class="mobile-social-icon padding-1 fab fa-facebook"></i></a>
					<a href="<?php echo esc_html( get_theme_mod( YOUTUBE_SETTINGS ) ); ?>"><i class="mobile-social-icon padding-1 fab fa-youtube"></i></a>
					<a href="<?php echo esc_html( get_theme_mod( VIMEO_SETTINGS ) ); ?>"><i class="mobile-social-icon padding-1 fab fa-vimeo"></i></a>
				</div>
			</div>
			<div class="small-3 small-offset-9 padding-1" id="click-to-close">X</div>
		</div>
	</nav>
	<div class="grid-container-fluid">
		<nav class="grid-x show-for-large desktop-nav-only<?php if( $hero_included === false) : ?> color-background<?php endif ?>" >
			<div class="cell small-3 desktop-header-logo text-center">
				<img class="desktop-header-image" src="<?php echo esc_url( get_theme_mod( HEADER_LOGO ) ); ?>" alt="Flack Productions Creative Video">
			</div>
			<div class="cell small-9 desktop-header-links float-right">
				<ul class="menu float-right">
					<?php foreach ( $nav_links as $link ) : ?>
						<li class="desktop-nav-link">
							<a href="<?php echo esc_url( $link->url ); ?>"><?php echo $link->post_title; ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</nav>
	</div>
</header>
