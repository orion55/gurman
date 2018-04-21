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

        <nav class="hall__menu">
            <a class="hall__link hall__link--active" href="#">Главный зал</a>
            <a class="hall__link" href="#">Малый зал</a>
        </nav>

        <div class="hall__slider">
            <div class="hall__slide">
                <div class="hall__block">
                    <div class="hall__text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis debitis
                            deleniti
                            eius est quia quibusdam reprehenderit vel veritatis vero. Beatae corporis fugiat iure nam
                            provident rem suscipit veniam voluptatibus!
                        </div>
                        <div>Aperiam aspernatur debitis ea, eaque et ipsum laboriosam maxime nisi, numquam omnis qui
                            rerum
                            soluta! Dolorem et eum eveniet ex excepturi, fugiat ipsum neque nesciunt quas rem sint ullam
                            unde!
                        </div>
                        <div>Aliquam aut blanditiis corporis delectus distinctio eligendi eum in molestiae, nam nobis
                            omnis,
                            reprehenderit. Ab ad delectus ea error inventore laudantium magni officiis, rem saepe
                            suscipit
                            totam ullam unde veritatis.
                        </div>
                    </div>
                    <div class="hall__btn">
                        <a href="#"
                           class="info__link pure-button hvr-shutter-out-horizontal popmake-contact modal-blur">Заказать
                            столик</a>
                    </div>
                </div>
                <div class="hall__pict">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hall.jpg" alt="hall"
                    class="hall__img">
                </div>
            </div>
            <div class="hall__slide"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
