<?php get_header(); ?>

<div class="container blogpage-content">
    <!-- Blog Section -->
    <section class="blog-sec">
        <h1 class='archive-title'>Search: <?php the_search_query(); ?></h1>
        <?php get_template_part('template-parts/content', 'archive') ?>
    </section>

    <!-- Sidebar Section -->
    <section class="main-sidebar">
        sidebar
    </section>
</div>

<?php get_footer(); ?>