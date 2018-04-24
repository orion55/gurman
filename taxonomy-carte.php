<?php get_header(); ?>

    <div class="dish">
        <main class="dish__wrap">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) :
                    the_post();
                    $title = get_the_title(); ?>

                    <div class="course">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="course__pict">
                                <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                     alt="<?php echo $title; ?>" class="course__img">
                            </div>
                        <?php endif; ?>
                        <div class="course__block">
                            <h2 class="course__title"><?php echo $title; ?></h2>
                            <?php $content = get_the_content();
                            if (!empty($content)):
                                ?>
                                <div class="course__desc">
                                    <?php echo apply_filters('the_content', $content); ?>
                                </div>
                            <?php endif;
                            $price = carbon_get_the_post_meta('price_dish');
                            if (!empty($price)): ?>
                                <div class="course__price">
                                    <span class="course__text"><?php echo $price; ?></span>
                                    <span class="course__text">руб.</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>

                <?php if (function_exists('wp_pagenavi')) : ?>
                    <div class="dish__pagenavi">
                        <?php wp_pagenavi(); ?>
                    </div>
                <?php endif ?>

            <?php else :
                get_template_part('template-parts/content', 'none');
            endif; ?>

        </main>
    </div>

<?php
get_footer();
