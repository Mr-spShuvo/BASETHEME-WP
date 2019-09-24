<?php get_header(); ?>

<div class="container blogpage-content">
    <!-- Blog Section -->
    <section class="blog-sec">
        <h1 class='archive-title'>
            <?php
            if (is_category()) {
                single_cat_title();
            } else if (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                echo 'all Posts from - ' . get_the_author();
            } else {
                the_archive_title();
            }
            ?>
        </h1>

        <?php get_template_part('template-parts/content', 'archive') ?>

        <!-- Pagination -->
    </section>
    <!-- Sidebar Section -->
    <section class="main-sidebar">
        sidebar
    </section>
</div>

<?php get_footer(); ?>