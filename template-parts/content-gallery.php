<article class="blog blog-gallery">
    <div class="blog-meta ta-c">
        <div class="blog-info">
        <span class="post-format-icon dashicons dashicons-format-gallery"></span>
            <p class="post-format-title"><?php the_title() ?></p></p>
            <p><strong><?php echo the_time('g:i a'); ?></strong>
                on <?php echo the_date('M d, Y'); ?>
                by <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author(); ?></a>
            </p>
        </div>
    </div>

    <div class="blog-content">
        <?php echo get_post_gallery(); ?>
    </div>
</article>