<article class="blog blog-aside">
    <div class="blog-meta ta-c">
    <a href="<?php echo esc_url( basetheme_content_get_link_url() ); ?>">
        <div class="blog-info">
            <span class="post-format-icon dashicons dashicons-admin-links"></span>
            <p  class="post-format-title"><?php the_title();?></p>

            <p><strong><?php echo the_time('g:i a'); ?></strong>
                on <?php echo the_date('M d, Y'); ?>
                by <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author(); ?></a>
            </p>
        </div>
    </a>
    </div>
</article>