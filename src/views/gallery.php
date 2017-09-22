<article class="gallery-item" itemscope itemtype="http://schema.org/ImageObject">
    <img class="gallery-image" itemprop="contentUrl" src="<?php esc_html_e( $post_thumbnail_url ) ?>"
         alt="<?php esc_html( $post_thumbnail_title ); ?>"/>

    <div class="gallery-title">
        <p class="entry-title" itemprop="name"><?php esc_html_e( $post_title ); ?></p>
    </div>
</article>