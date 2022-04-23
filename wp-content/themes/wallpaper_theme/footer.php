	<div class="container">
        <div class="row bg-footer">
            <div class="col-lg-5 col-12 text-center">
                <a class="home-url" href="<?php echo home_url(); ?>">
                    <img class="img_logo logo-footer" src="<?php echo get_theme_mod( 'Logo' ); ?>">
                </a>
            </div>

            <div class="col-lg-7 col-12">
                <ul class="list-footer">
                    <?php if( have_rows('list-footer', 'option') ): ?>
                        <?php while( have_rows('list-footer', 'option') ): the_row(); 
                            $link = get_sub_field('link-footer');
                            ?>
                            <li><a href="<?php echo $link['url'];?>"><?php the_sub_field('footer'); ?></a> | </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

                <div class="bg-footer2">
                    <?php echo do_shortcode( '[contact-form-7 id="93" title="sign up"]' ); ?>
                </div>
            </div>
        </div>

        <p class="text-footer"><?php echo get_field('text', 'option'); ?></p>
    </div>

    <span class="back-top"><a href="#"><i class="fas fa-chevron-up"></i></a></span>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- My Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

</body>
</html>