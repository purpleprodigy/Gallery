<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\Gallery;
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Gallery;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {

	$asset_file = 'assets/css/style.css';

	wp_enqueue_style(
		'gallery_style',
		GALLERY_URL . $asset_file,
		array(),
		get_asset_current_version_number( GALLERY_DIR . $asset_file )
	);

	wp_enqueue_style( 'dashicons' );
}

/**
 * Autoload plugin files.
 *
 * @since 1.2.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'module.php',
		'template/helpers.php'

	);

	foreach ( $files as $file ) {
		include __DIR__ . '/' . $file;
	}
}

autoload();