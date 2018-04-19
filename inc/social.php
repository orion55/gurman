<?php
$link = carbon_get_theme_option('crb_social_url_vk');
if (!empty($link))
    echo '<a href="' . $link . '" class="social__url"><i class="fab fa-vk social__icon"></i></a>';

$link = carbon_get_theme_option('crb_social_url_instagram');
if (!empty($link))
    echo '<a href="' . $link . '" class="social__url"><i class="fab fa-instagram social__icon"></i></a>';

$link = carbon_get_theme_option('crb_social_url_facebook');
if (!empty($link))
    echo '<a href="' . $link . '" class="social__url"><i class="fab fa-facebook-f social__icon"></i></a>';
?>