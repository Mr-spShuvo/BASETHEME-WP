<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Site Header Info -->
    <header>
        <div class="container header-box">
            <div class="site-info">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name') ?></a></h1>
                <p class="site-description">
                    <?php bloginfo('description') ?>
                </p>
            </div>
            <div class="search-box">
                <form action="<?php esc_url(home_url('/')); ?>" method="get">
                    <input class="search-field" name='s' type="text" placeholder="Enter text here ...">
                    <button class="button button-main" type="submit">Search</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Site Primary Navigation -->
    <nav class="navbar">
        <div class="container">
            <?php
            $header_menu = array(
                'menu_class'        => "navbar-ul",
                'theme_location'    => "header-menu",
            );

            wp_nav_menu($header_menu);

            ?>
            <!-- <ul class="navbar-ul">
                <li class="navbar-link"><a href="index.html">Home</a></li>
                <li class="navbar-link"><a href="blog.html">Blog</a></li>
                <li class="navbar-link"><a href="services.html">Services</a></li>
                <li class="navbar-link"><a href="about.html">About</a></li>
                <li class="navbar-link"><a href="contact.html">Contact</a></li>
            </ul> -->
        </div>
    </nav>

    <!-- Main Content -->
    <main class="site-content">