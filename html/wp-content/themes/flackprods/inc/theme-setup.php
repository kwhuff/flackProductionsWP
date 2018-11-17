<?php

register_nav_menus(
	array(
		'header_menu' => __( 'Header Menu' ),
	)
);

/**
 * General Theme Setup
 */
function theme_setup() {
	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, false ); // 150px / 150px, soft crop.
}
add_action( 'after_setup_theme', 'theme_setup' );
