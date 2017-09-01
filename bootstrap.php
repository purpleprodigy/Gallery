<?php
/**
 * Gallery plugin
 *
 * @package     PurpleProdigy\Gallery;
 * @author      Purple Prodigy
 * @licence     GPL-2.0+
 * @link        https://purpleprodigy.com
 */
/*
 * @wordpress-plugin
 * Plugin Name:     Gallery
 * Plugin URI:      https://github.com/purpleprodigy/Gallery
 * Description:     Gallery is a lightweight WordPress Plugin that displays a simple gallery.
 * Version:         1.0.0
 * Author:          Purple Prodigy
 * Author URI:      https://purpleprodigy.com
 * Text Domain:     gallery
 * Requires WP:     4.7
 * Requires PHP:    5.5
 */
/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace PurpleProdigy\Gallery;

use PurpleProdigy\Polestar\Custom as CustomModule;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Nothing to see here." );
}

define( 'GALLERY_PLUGIN', __FILE__ );
define( 'GALLERY_DIR', trailingslashit( __DIR__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'GALLERY_URL', $plugin_url );
define( 'GALLERY_TEXT_DOMAIN', 'gallery' );

include __DIR__ . '/src/plugin.php';

/**
 * Register a plugin with the Custom Module.
 *
 * @since 1.0.0
 *
 * @param string $plugin_file
 *
 * @return void
 */
function register_plugin( $plugin_file ) {
	register_activation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_deactivation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_uninstall_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
}

/**
 * Delete the rewrite rules on plugin status change.
 *
 * @since 1.0.0
 *
 * @return void
 */
function delete_rewrite_rules_on_plugin_status_change() {
	delete_option( 'rewrite_rules' );
}

CustomModule\register_plugin( __FILE__ );