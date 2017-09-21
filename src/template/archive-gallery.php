<?php
/**
 * Gallery Archive Template
 *
 * @package     PurpleProdigy\Gallery\Template
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Gallery\Template;

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', __NAMESPACE__ . '\do_gallery_archive_loop' );
/**
 * Do the Gallery Archive loop and render out the HTML.
 *
 * NOTE: The variables are set to call the right HTML
 * markup in the container.php view file.
 *
 * @since 1.0.0
 *
 * @return void
 */
function do_gallery_archive_loop() {
	$records = get_posts_grouped_by_term( 'gallery', 'gallery-type' );
	if ( ! $records ) {
		echo '<p>Sorry, there are no Gallery items to display.</p>';

		return;
	}

	$use_term_container = true;
	$show_term_name     = true;
	$is_calling_source  = 'template';

	foreach ( $records as $record ) {
		$term_slug = $record['term_slug'];

		include GALLERY_DIR . 'src/views/container.php';
	}
}

/**
 * Loop through and render out the Gallery.
 *
 * @since 1.0.0
 *
 * @param array $gallerys
 *
 * @return void
 */
function loop_and_render_gallery( array $gallery ) {

	foreach ( $gallery as $gallery ) {

		$post_title              = $gallery['post_title'];
		$post_content            = $gallery['post_content'];
		$post_thumbnail_id       = $gallery['thumbnail_id'];
		$post_thumbnail_url      = $gallery['thumbnail_url'];
		$post_thumbnail_metadata = $gallery['thumbnail_metadata'];
		$post_thumbnail_title    = $gallery['post_title'];

		include GALLERY_DIR . 'src/views/gallery.php';
	}
}

genesis();
