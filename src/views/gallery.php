<article class="gallery-item" itemscope itemtype="http://schema.org/Image">
    <img class="gallery-image" src="<?php esc_html_e( $post_thumbnail_url ) ?>"
         alt="<?php esc_html_e( $post_thumbnail_title ); ?>"/>

    <div class="gallery-title">
        <p class="entry-title" itemprop="name">
			<?php esc_html_e( $post_title ); ?>
        </p>
    </div>
</article>