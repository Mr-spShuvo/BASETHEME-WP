</main>
<!-- Footer Section -->
<footer>
    <div class="container">
        <div class="footer-top">
            <div class="site-info">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')) ?>"><?php bloginfo('name') ?></a></h1>
                <p class="site-description">
                    <?php bloginfo('description') ?>
                </p>
            </div>
            <div class="footer-sidebar-1">Sidebar</div>
            <div class="footer-sidebar-2">Sidebar</div>
        </div>
    </div>
    <div class="footer-copy">
        <p> &copy; All rights reserved by <a href="<?php echo esc_url(home_url('/')) ?>"><?php bloginfo('name') ?></a> <?php echo date('Y'); ?> |
            <span> Developed by <a target="_blank" href="http://spshuvo.com">Mr.spShuvo</a></span>
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>