<?php
$link = carbon_get_theme_option('crb_social_url_vk');
if (!empty($link))
    echo '<a href="' . $link . '" class="soc__url"><i class="fab fa-vk soc__icon hvr-grow"></i></a>';

$link = carbon_get_theme_option('crb_social_url_instagram');
if (!empty($link))
    echo '<a href="' . $link . '" class="soc__url"><i class="fab fa-instagram soc__icon hvr-grow"></i></a>';

$link = carbon_get_theme_option('crb_social_url_facebook');
if (!empty($link))
    echo '<a href="' . $link . '" class="soc__url"><i class="fab fa-facebook-f soc__icon hvr-grow"></i></a>';
?>