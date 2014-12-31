<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name='author' content='Roman Ondráček'>
        <meta name='robots' content='index, follow'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="alternate" type="application/rss+xml" title="My Test Feed" href="http://hw-geeks.8u.cz/feed/atom/">
    </head>
    <body>
        <header><a href="/"><img alt="HW Geeks" src="/logo.png"></a></header>
        <section>
            <nav>
                <ul>
                    <?php
                    wp_nav_menu(array('theme_location' => 'primary', 'container' => 'false',
                        'fallback_cb' => 'wp_page_menu', 'items_wrap' => '%3$s', 'depth' => 1,
                    ));
                    ?>
                </ul>
            </nav>

