<?php

/**
 * Register our Custom Post Types
 */
function custom_types() {
	require_once __DIR__ . '/class-rbcustomtypes.php';
	// phpcs:disable
	// RBCustomTypes::register_post_type(false,'testimonial', 'Testimonial', 'Testimonials', 'dashicons-format-chat', '', true, array('title','editor')); // Example.
	// phpcs:enable
}
add_action( 'init', 'custom_types' );
