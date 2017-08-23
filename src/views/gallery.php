<div class="gallery" itemscope itemtype="http://schema.org/Image">
    <div class="thumbnail one-fourth" itemprop="photo">
     <img class="alignnone" src="<?php esc_html_e($post_thumbnail_url) ?>" alt="<?php esc_html_e( $post_thumbnail_title ); ?>" width="250" height="140"/>

    </div>
    <div class="description two-fourths">
        <h3 itemprop="name"><?php esc_html_e( $post_title ); ?></h3>
        <p itemprop="description">
			<?php esc_html_e( $post_content ); ?>
        </p>
    </div>
</div>
