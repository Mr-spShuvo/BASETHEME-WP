<article class="blog blog-video">
    <div class="blog-meta ta-c">
        <div class="blog-info">
            <span class="post-format-icon dashicons dashicons-format-video"></span>
            <p class="post-format-title"><?php the_title() ?></p>
            </p>
            <p><strong><?php echo the_time('g:i a'); ?></strong>
                on <?php echo the_date('M d, Y'); ?>
                by <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author(); ?></a>
            </p>
        </div>
    </div>

    <div class="blog-content ta-c">
        <?php echo basetheme_get_embedded_media(array('video', 'iframe')); ?>
    </div>

    <a class='blog-link mt-2' href="<?php the_permalink(); ?>">Read More &#10141;</a>
</article>