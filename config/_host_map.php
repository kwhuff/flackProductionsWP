<?php

/*************************************************************************************
 * HOST TO ENVIRONMENT MAP
 * ============================================
 *
 * Uses host names to detect which environment config to load. If it doesn't find one,
 * it assumes you're using a local environment and loads local.php. Only edit the
 * $hosts array in this file.
 *************************************************************************************/

$use_staging = false;

$hosts = array(
	// Domain => Environment
	"PROD_URL.com"    => "production",
	"STAGING_URL.com" => "staging",
	"localhost:8080"  => "local"
);

/*************************************************************************************
 *
 * STOP! Don't touch below this line. Unless you want to break everything. Then it's OK.
 **************************************************************************************/

$env = $hosts[$_SERVER['HTTP_HOST']];

// If we don't find an environment mapped to the current host, assume we're local
if ( $use_staging ) {
	$env = "staging";
} elseif ( ! $env ) {
	$env = "local";
}

// Pull in the appropriate config file
require( $env . ".php" );
