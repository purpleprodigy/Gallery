<?php
/**
 * Runtime configuration for the Gallery custom post type.
 *
 * @package     PurpleProdigy\Gallery
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https:/purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Gallery;

return array(
	/**============================================
	 * Post Type name
	 *============================================*/
	'post_type' => 'gallery',

	/**============================================
	 * Label configuration
	 *============================================*/
	'labels'    => array(
		'custom_type'       => 'gallery',
		'singular_label'    => 'Gallery',
		'plural_label'      => 'Gallery',
		'in_sentence_label' => 'gallery',
		'text_domain'       => GALLERY_TEXT_DOMAIN,
	),

	/**============================================
	 * Supported features for this post type
	 *============================================*/
	'features'  => array(
		'base_post_type' => 'page',
		'exclude'        => array(
			'excerpt',
			'comments',
			'trackbacks',
			'revisions',
			'custom-fields',
			'author',
			'genesis-seo',
			'genesis-layouts',
			'genesis-scripts',
		),
	),

	/**============================================
	 * Arguments for registering the post type
	 *============================================*/
	'args'      => array(
		'description'   => 'Gallery Display',
		'label'         => __( 'Gallery', GALLERY_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels.
		'public'        => true,
		'supports'      => '', // automatically generate the support features.
		'menu_icon'     => 'dashicons-format-gallery',
		'has_archive'   => true,
		'menu_position' => 20,

	)
);
