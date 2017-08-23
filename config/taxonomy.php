<?php
/**
 * Runtime configuration for the Gallery taxonomy.
 *
 * @package     PurpleProdigy\Gallery
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Gallery;

return array(
	/**=============================================================
	 * The taxonomy name.
	 *============================================================*/
	'taxonomy' => 'gallery-type',

	/**=============================================================
	 * The label configuration.
	 *============================================================*/
	'labels' => array(
		'custom_type' => 'gallery-type',
		'singular_label' => 'Gallery type',
		'plural_label' => 'Gallery types',
		'in_sentence_label' => 'gallery type',
		'text_domain' => GALLERY_TEXT_DOMAIN,
		'specific_labels' => array(),
	),

	/**=============================================================
	 * These are the arguments for registering the taxonomy.
	 *============================================================*/
	'args'     => array(
		'label'             => __( 'Gallery type', GALLERY_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => false,
		'show_ui'           => true,
	),

	/**=============================================================
	 * These are the post types to bind the taxonomy to.
	 *============================================================*/
	'post_types' => array ( 'gallery' ),
);