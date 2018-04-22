<?php get_header(); ?>

<div class="carte">
    <div class="carte__wrap">
        <?php
        $categories = get_categories(array(
            'type' => 'dish',
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 0,
            'taxonomy' => 'carte'
        ));
        if ($categories) {
            foreach ($categories as $cat) {
                $cartePhoto = carbon_get_term_meta($cat->term_id, 'carte_photo');
                ?>
                <a href="<?php echo get_category_link($cat->cat_ID); ?>" class="carte__item">
                    <div class="carte__title"><?php echo $cat->cat_name ?></div>
                    <div class="carte__pict">
                        <img src="<?php echo $cartePhoto; ?>" alt="<?php echo $cat->cat_name ?>"
                             class="carte__img">
                    </div>
                </a>
                <?php
            }
        }
        ?>
    </div>
</div>

<div class="hall">
    <div class="hall__wrap">
        <div class="hall__title">Наши залы</div>

        <nav class="hall__menu" id="#hall__menu">
            <a class="hall__link hall__link--active" href="#" data-index="0">Главный зал</a>
            <a class="hall__link" href="#" data-index="1">Малый зал</a>
        </nav>

        <div class="hall__slider">
            <div class="hall__slide">
                <?php $mainhall = carbon_get_theme_option('crb_mainhall');
                if (!empty($mainhall)):?>
                    <div class="hall__block">
                        <div class="hall__text">
                            <?php echo wpautop($mainhall); ?>
                        </div>
                        <div class="hall__btn">
                            <a href="#"
                               class="info__link pure-button hvr-shutter-out-horizontal popmake-contact modal-blur">Заказать
                                столик</a>
                        </div>
                    </div>
                <?php endif;
                $mainhallPhoto = carbon_get_theme_option('crb_mainhall_photo');
                if (!empty($mainhallPhoto)):
                    ?>
                    <div class="hall__pict">
                        <img src="<?php echo $mainhallPhoto; ?>" alt="Фото главного зала"
                             class="hall__img">
                    </div>
                <?php endif; ?>
            </div>
            <div class="hall__slide">
                <?php $smallhall = carbon_get_theme_option('crb_smallhall');
                if (!empty($smallhall)): ?>
                    <div class="hall__block">
                        <div class="hall__text">
                            <?php echo wpautop($smallhall); ?>
                        </div>
                        <div class="hall__btn">
                            <a href="#"
                               class="info__link pure-button hvr-shutter-out-horizontal popmake-contact modal-blur">Заказать
                                столик</a>
                        </div>
                    </div>
                <?php endif;
                $smallhallPhoto = carbon_get_theme_option('crb_smallhall_photo');
                if (!empty($smallhallPhoto)):
                    ?>
                    <div class="hall__pict">
                        <img src="<?php echo $smallhallPhoto; ?>" alt="Фото малого зала"
                             class="hall__img">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="address">
    <div class="address__map" id="map"></div>
    <div class="address__block">
        <div class="address__box">
            <?php $address = carbon_get_theme_option('crb_address');
            if (!empty($address)): ?>
                <div class="address__text">
                    <span class="address__info">Наш адрес:</span>
                    <span class="address__desc"><?php echo $address; ?></span>
                </div>
            <?php endif;
            $phone = carbon_get_theme_option('crb_phone1');
            if (!empty($phone)):?>
                <div class="address__text">
                    <span class="address__info">Телефон:</span>
                    <span class="address__desc"><?php echo $phone; ?></span>
                </div>
            <?php endif;
            $email = carbon_get_theme_option('crb_email');
            if (!empty($email)): ?>
                <div class="address__text">
                    <span class="address__info">Email:</span>
                    <span class="address__desc"><?php echo $email; ?></span>
                </div>
            <?php endif; ?>
        </div>
        <div class="address__form" id="address__form">
            <?php echo do_shortcode('[contact-form-7 id="63" title="Связаться с нами"]'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
