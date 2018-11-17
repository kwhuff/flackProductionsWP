<?php

/**
 * Change excerpt ending
 *
 * @return string
 */
function new_excerpt_more() {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Remove the WordPress Generator from  posting what version of WordPress you are running
 * Hackers will search for old versions of WordPress with known Vulnerabilities
 *
 * @return string
 */
function rb_remove_version() {
	return '';
}
add_filter( 'the_generator', 'rb_remove_version' );

/**
 * Simplify Login error message to help prevent brute attack
 *
 * @return string
 */
function failed_login() {
	return 'The login information you have entered is incorrect.';
}
add_filter( 'login_errors', 'failed_login' );

/**
 * Get nav items for the menu assigned to a theme location
 *
 * @param string $theme_location The Theme Location set by register_nav_menus().
 *
 * @return array
 */
function get_wp_nav_items_by_theme_location( $theme_location ) {
	$theme_locations = get_nav_menu_locations();
	$menu            = get_term( $theme_locations[ $theme_location ], 'nav_menu' );

	return wp_get_nav_menu_items( $menu->name );
}
