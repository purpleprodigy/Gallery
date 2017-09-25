<?php

use PurpleProdigy\Gallery\Template as Template;

$is_use_term_container_true =  ( isset ( $use_term_container ) && $use_term_container ) ;

if ( $is_use_term_container_true )  ?>
<div class="gallery-container">
    <h1>Gallery</h1>
	<?php
	if ( $is_calling_source === 'template' ) {
		Template\loop_and_render_gallery( $record['posts'] );

	} else {
		include __DIR__ . '/gallery.php';
	}
	if ( $is_use_term_container_true ) ?>
</div>
