<article class="blog blog-aside">
    <div class="blog-meta ta-c">
        <div class="blog-info">
        <span class="post-format-icon dashicons dashicons-format-status"></span>
            <p class="post-format-title">THOUGHTS</p>
            <p><strong><?php echo the_time('g:i a'); ?></strong>
                on <?php echo the_date('M d, Y'); ?>
                by <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author(); ?></a>
            </p>
        </div>
    </div>

    <div class="blog-content">
        <div class="blog-excerpt">
            <?php the_content() ?>
        </div>
    </div>
</article>