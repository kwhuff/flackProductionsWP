<?php
/**
 * General Theme Functions
 *
 * @package RocketTheme
 */

require('inc/theme-setup.php');
require('inc/register-post-types.php');
require('inc/register-acf-modules.php');
require('inc/enqueue-scripts.php');
require('inc/helper-functions.php');

require get_template_directory() . '/inc/customizer.php';
