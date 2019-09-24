<?php while (have_posts()) : the_post(); ?>
    <article class="single-blog single-page">
        <div style="background-image:linear-gradient(to top, 
                    var(--color-main-t), var(--color-sub-t)
                      ),
                      url(<?php 
                                if(has_post_thumbnail()): 
                                    echo get_the_post_thumbnail_url(); 
                                else:
                                    echo get_template_directory_uri(  ).'/assets/img/page.jpg'; 
                                endif; 
                            ?>
                        );
                      background-size: cover;
                      background-position: center;
                      background-repeat: no-repeat;" class="single-thumbnail">
            <div class="single-meta">
                <h1 class="single-title"><?php the_title() ?></h1>
            </div>
        </div>

        

        <?php die(get_ancestors(the_ID())); if(get_ancestors(the_ID())):  ?>
jkhsksdahkjADGHKJAH
                    <?php endif; ?>
        <div class="single-content container">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>