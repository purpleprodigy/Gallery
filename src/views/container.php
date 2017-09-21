<?php

use PurpleProdigy\Gallery\Template as Template;

?>
<?php
if ( isset ( $use_term_container ) && $use_term_container ) : ?>
<div class="gallery-container">
    <h1>Gallery</h1>
	<?php endif; ?>
	<?php
	if ( $is_calling_source === 'template' ) {
		Template\loop_and_render_gallery( $record['posts'] );

	} else {
		include __DIR__ . '/gallery.php';
	}
	?>

	<?php if ( isset ( $use_term_container ) && $use_term_container ) : ?>
</div>
<?php endif; ?>
