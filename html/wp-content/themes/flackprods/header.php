<?php
/**
 * The Header for our theme.
 *
 * @package RocketTheme
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>

	<!-- Mobile Enter Site width to site renders properly on mobile -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@TWITTER_HANDLE">
	<meta name="twitter:title" content="TITLE">
	<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="twitter:creator" content="@TWITTER_HANDLE">
	<meta name="twitter:image:src" content="<?php bloginfo( 'template_url' ); ?>/img/COMPANY_LOGO.png">
	<meta name="twitter:domain" content="<?php bloginfo( 'url' ); ?>">

	<!-- Open Graph Tags -->
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?> <?php wp_title( ' | ' ); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php bloginfo( 'wpurl' ); ?>"/>
	<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/img/COMPANY_LOGO.png"/>

	<!-- Windows 8 / Windows Phone tile-->
	<meta name="application-name" content="<?php bloginfo( 'name' ); ?>"/>
	<meta name="msapplication-TileColor" content="#f47022"/>

	<!-- Apple iOS -->
	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/icon.png">
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon"/>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico"/>
	<!-- Style Sheet -->
	<?php
	// We have the stylesheets added here so we can prevent caching.
	$url     = get_bloginfo( 'stylesheet_url' ) . '?' . filemtime( get_stylesheet_directory() . '/style.css' );
	$app_url = get_bloginfo( 'template_url' ) . '/css/app.css?' . filemtime( get_stylesheet_directory() . '/css/app.css' );

	?>
    <?php // phpcs:disable WordPress.WP.EnqueuedResources ?>
	<link type="text/css" rel="stylesheet" href="<?php echo esc_url( $url ); ?>"/>
	<link type="text/css" rel="stylesheet" href="<?php echo esc_url( $app_url ); ?>"/>
    <?php // phpcs:enable ?>

	<?php
	/* WordPress ////////////////////*/
	wp_head();

	?>
</head>

<body <?php body_class(); ?>>

<?php require locate_template( 'parts/header-nav.php' ); ?>
