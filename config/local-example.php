<?php

/*************************************************************************************
LOCAL ENVIRONMENT CONFIG
============================================

Rename this file to local.php and change the settings to match your local environment.
Once named local.php, it will be ignored from the repository.

*************************************************************************************/

/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Turns WordPress debugging on */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

define('WP_HOME','http://localhost:8080/');
define('WP_SITEURL','http://localhost:8080/wordpress/');

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost:8080/wp-content');