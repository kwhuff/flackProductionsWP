<?php

/*************************************************************************************
PROUCTION ENVIRONMENT CONFIG
============================================

Production environment config. Tread lightly.

*************************************************************************************/

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Turns WordPress debugging off */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('WP_HOME','https://#PROD_URL#.com/');
define('WP_SITEURL','https://#PROD_URL#.com/wordpress/');

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://#PROD_URL#.com/wp-content');

?>