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
    <?php $backgroundUrl = get_template_directory_uri() . "/assets/img/header/background.jpg";
    if (is_tax('carte')) {
        $carte_background = carbon_get_term_meta(get_queried_object()->term_id, 'carte_background');
        if (!empty($carte_background)) {
            $backgroundUrl = $carte_background;
        }
    } ?>
    <div class="header__background">
        <img src="<?php echo $backgroundUrl; ?>" alt="background" class="header__backimg">
    </div>

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
                <div class="header__pict hvr-grow"><img
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
    <?php if (is_front_page()): ?>
        <div class="info">
            <div class="info__wrap">
                <h1 class="info__title">Сербская кухня</h1>
                <div class="info__slogan">Проведение банкетов, фуршетов и других мероприятий</div>
                <div class="info__btn">
                    <a href="#"
                       class="info__link pure-button hvr-shutter-out-horizontal popmake-contact modal-blur">Заказать
                        столик</a>
                </div>
                <?php $slogan = carbon_get_theme_option('crb_slogan');
                if (!empty($slogan)):?>
                    <div class="info__block">
                        <?php echo wpautop($slogan); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (is_tax('carte')): ?>
        <div class="tax">
            <div class="tax__wrap">
                <h1 class="tax__title"><?php echo get_queried_object()->name; ?></h1>
            </div>
        </div>
    <?php endif; ?>
</header>

<div id="page" class="site">
    <div id="content" class="site-content">
