<?php
/**
 * Plugin Name: WordPress.com Compatibility
 */

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once __DIR__ . '/class-wpcom-compat-command.php';
}
