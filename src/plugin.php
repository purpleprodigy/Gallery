<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\Gallery;
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @license     GNU-2.0+
 */

namespace PurpleProdigy\Gallery;

/**
 * Launches the plugin.
 *
 * @since 1.0.0
 *
 * @param string $root_file Plugin's root bootstrap file.
 *
 * @return void
 */
function launch_plugin( $root_file ) {
	autoload();

	register_with_custom_module( $root_file );
}

/**
 * Autoload plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'module.php',
		'template/helpers.php',
	);

	foreach ( $files as $file ) {
		require __DIR__ . '/' . $file;
	}
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @since 1.0.0
 *
 * @return void
 */
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	$asset_file   = 'assets/css/style.css';
	$enqueue_list = apply_filters( 'enqueue_styles', array( 'dashicons', $asset_file ) );
	if ( ! $enqueue_list ) {
		return;
	}

	foreach ( $enqueue_list as $asset_handle ) {
		if ( 'dashicons' === $asset_handle ) {
			wp_enqueue_style( 'dashicons' );
		} elseif ( 'font-awesome' === $asset_handle ) {
			wp_enqueue_style(
				'font-awesome',
				'//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
				array(),
				null );
		} elseif ( $asset_file === $asset_handle ) {
			wp_enqueue_style(
				'gallery_style',
				GALLERY_URL . $asset_file,
				array(),
				get_asset_current_version_number( GALLERY_DIR . $asset_file )
			);
		}
	}
}
