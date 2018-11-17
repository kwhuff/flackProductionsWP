<?php

/*************************************************************************************
Staging ENVIRONMENT CONFIG
============================================
 * */

/** The name of the database for WordPress */
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', 'developer' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

/** Turns WordPress debugging on */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

define('WP_HOME','');
define('WP_SITEURL','');

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL', '');

require_once( 'aws_keys.php' );
