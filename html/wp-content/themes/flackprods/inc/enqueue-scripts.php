<?php

/**
 * Enqueue  Scripts
 * Link to all built in libraries
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 */
function theme_scripts() {

	// Enqueue Main.
	wp_register_script(
		'app',
		get_template_directory_uri() . '/javascripts/app.js',
		array( 'jquery' ), // requires jQuery.
		false, // Version Nr.
		true // loads in footer.
	);

	// Enqueue Main.
	wp_enqueue_script( 'app' );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
