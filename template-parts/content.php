<article class="blog">
    <div class="blog-meta">
        <p class="blog-info"><strong><?php echo the_time('g:i a'); ?></strong> on <?php echo the_date('M d, Y'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author(); ?></a> |
            Posted in
            <?php
            $categories = get_the_category();
            foreach ($categories as $category) :
                ?>
                <a class="blog-category" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->cat_name ?></a><?php endforeach; ?></p>
        <?php if (has_post_thumbnail()) : ?>
            <div style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" class="blog-thumbnail"><a href="#"></a></div> <?php endif; ?>
    </div>
    <div class="blog-content">
        <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="blog-excerpt">
            <?php echo wp_trim_words(get_the_content(), 80) ?>
        </p>
        <a class='blog-link' href="<?php the_permalink(); ?>">Read More &#10141;</a>
    </div>
</article>