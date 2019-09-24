<?php if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <!-- Blog -->
        <article class="blog">
            <div class="blog-content">
                <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="blog-excerpt">
                    <?php echo wp_trim_words(get_the_content(), 80) ?>
                </p>
                <a class='blog-link' href="<?php the_permalink(); ?>">Read More &#10141;</a>
            </div>
        </article>
    <?php endwhile;
    else : ?>
    <h2 class="mvh-20 ta-c">No Content Found!</h2>
<?php endif ?>

<!-- Pagination -->
<div class="blog-pagination">
</div>