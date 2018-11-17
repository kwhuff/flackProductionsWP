<?php

/**
 * Register the ACF Options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

/**
 * ACF Module Setup
 */
require_once __DIR__ . '/../acf/modules.php';

ACFModuleLoader::register();

//Load ACF Modules.
ACFModuleLoader::registerSubModule( new Portfolio() );
