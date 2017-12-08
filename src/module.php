<?php
/**
 * Gallery Handler
 *
 * @package     PurpleProdigy\Gallery
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @license     GNU-2.0+
 */

namespace PurpleProdigy\Gallery;

use PurpleProdigy\Polestar\Custom;

/**
 * Register the plugin with the Polestar's Custom Module.
 *
 * @since 1.0.0
 *
 * @param string $root_file Plugin's root bootstrap file.
 *
 * @return void
 */
function register_with_custom_module( $root_file ) {
	Custom\register_plugin( $root_file );
}

add_filter( 'add_custom_post_type_runtime_config', __NAMESPACE__ . '\register_gallery_custom_configs' );
add_filter( 'add_custom_taxonomy_runtime_config', __NAMESPACE__ . '\register_gallery_custom_configs' );
/**
 * Loading in the post type and taxonomy runtime configurations.
 *
 * @since 1.0.0
 *
 * @param array $configurations Array of all the configurations.
 *
 * @return void
 */
function register_gallery_custom_configs( array $configurations ) {
	$doing_post_type = current_filter() == 'add_custom_post_type_runtime_config';

	$filename       = $doing_post_type
		? 'post-type'
		: 'taxonomy';
	$runtime_config = (array) require GALLERY_DIR . 'config/' . $filename . '.php';
	if ( ! $runtime_config ) {
		return $configurations;
	}

	$key = $doing_post_type
		? $runtime_config['post_type']
		: $runtime_config['taxonomy'];

	$configurations[ $key ] = $runtime_config;

	return $configurations;
}
