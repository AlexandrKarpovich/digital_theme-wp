<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digital
 */

?>
<!--    footer-->
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <?php  the_custom_logo();
                    if ( is_front_page() && is_home() ) : ?>
                        <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                    <?php  else : ?>
                        <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                    <?php endif; ?>
                    <!--description site-->
                    <?php  $digital_description = get_bloginfo( 'description', 'display' );
                    if ( $digital_description || is_customize_preview() ) : ?>
                        <p class="site-description"> <?php echo $digital_description; ?></p>
                    <?php endif; ?>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer menu',
                        'menu_id'        => 'footer-menu',
                        'container'       => 'ul',
                        'menu_class'      => 'menu footer-menu',
                    ]);
                    ?>
                </div>
            </div>
        </footer>
<!-- footer end-->

</div>
<!--wrapper end-->
<?php wp_footer(); ?>

</body>
</html>
