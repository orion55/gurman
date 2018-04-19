<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="header__wrap">
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
            ));
            ?>
        </nav>
        <div class="header__picture">
            <a href="<?php echo home_url(); ?>" class="header__link">
                <div class="header__pict"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logo.png" alt="logo"
                            class="header__img">
                </div>
            </a>
        </div>
        <div class="header__social">
            <?php get_template_part('inc/social'); ?>
        </div>
        <div class="header__phone">
            <?php get_template_part('inc/phone'); ?>
        </div>
    </div>
</header>

<div id="page" class="site">
    <div id="content" class="site-content">
