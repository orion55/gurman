</div><!-- #content -->

<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__phone">
            <?php get_template_part('inc/phone'); ?>
        </div>
        <div class="footer__picture">
            <a href="<?php echo home_url(); ?>" class="footer__link">
                <div class="footer__pict hvr-grow"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logo.png" alt="logo"
                            class="footer__img">
                </div>
            </a>
        </div>
        <div class="footer__social">
            <?php get_template_part('inc/social'); ?>
        </div>        
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
