<?php get_header(); ?>

<div class="container blogpage-content">
    <!-- Blog Section -->
    <section class="blog-sec">
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <!-- Blog -->

                <?php get_template_part('template-parts/content', get_post_format()); ?>

            <?php endwhile;
            else : ?>
            <h2 class="mvh-20 ta-c">Write Something Awesome</h2>
        <?php endif ?>

        <!-- Pagination -->
        <div class="blog-pagination">
                <?php echo paginate_links(); ?>
    </div>
    </section>

    <!-- Sidebar Section -->
    <section class="main-sidebar">
        sidebar
    </section>
</div>


<?php get_footer(); ?>