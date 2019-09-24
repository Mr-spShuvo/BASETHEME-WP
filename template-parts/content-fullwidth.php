<?php while (have_posts()) : the_post(); ?>
    <article class="single-blog">
        <div style="background-image:linear-gradient(to top, 
                    var(--color-main-t), var(--color-sub-t)
                      ),
                      url(<?php 
                                if(has_post_thumbnail()): 
                                    echo get_the_post_thumbnail_url(); 
                                else:
                                    echo get_template_directory_uri(  ).'/assets/img/blog.jpg'; 
                                endif; 
                            ?>
                        );
                      background-size: cover;
                      background-position: center;
                      background-repeat: no-repeat;" class="single-thumbnail">
            <div class="single-meta">
                <h1 class="single-title"><?php the_title() ?></h1>
                <p class="single-info"><strong><?php echo the_time('g:i a'); ?></strong> on <?php echo the_date('M d, Y'); ?>
                    by <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author(); ?></a> |
                    Posted in
                    <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) :
                            ?>
                        <a class="blog-category" href="<?php echo get_category_link($category->term_id); ?>">
                            <?php echo $category->cat_name ?></a>
                    <?php endforeach; ?></p>
            </div>
        </div>
        <div class="single-content container">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>