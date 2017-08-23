<?php
use PurpleProdigy\Gallery\Template as Template;

?>
<?php
if ( isset ( $use_term_container ) && $use_term_container ) : ?>
<div class="gallery-container">
        <h3>Gallery</h3>
	<?php endif; ?>

    <div class="gallery--section">
		<?php
		if ( $is_calling_source === 'template' ) {
			Template\loop_and_render_gallery( $record['posts'] );

		} else {
			include( __DIR__ . '/gallery.php' );
		}
		?>
    </div>

	<?php if ( isset ( $use_term_container ) && $use_term_container ) : ?>
</div>
<?php endif; ?>

