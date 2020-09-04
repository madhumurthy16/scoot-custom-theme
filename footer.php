<?php
/**
* The template for displaying the footer.
*/


$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
?>

<footer id="site-footer" role="contentinfo">

    <!-- Only output the container if there are elements to display -->

    <?php if( $has_sidebar_1 || $has_sidebar_2 ) { ?>

      <div class="footer-widgets-outer-wrapper">

        <div class="footer-widgets-wrapper section-inner">

          <?php if( $has_sidebar_1 ) { ?>

            <div class=footer-widgets>
              <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>

          <?php } ?>

          <?php if( $has_sidebar_2 ) { ?>

            <div class="footer-widgets">
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>

          <?php } ?>

        </div> <!-- .footer-widgets-wrapper -->

        <div class="pattern-semi-circles">
          <img src="<?php echo get_template_directory_uri() . '/assets/patterns/semi-circles.svg' ?>" alt="" aria-hidden="true" />
        </div>

      </div> <!-- .footer-widgets-outer-wrapper -->

    <?php } ?>

    <div class="footer-credits-wrapper">

      <div class="section-inner">

        <div class="footer-credits">
          <a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/scoot.svg' ?>" alt="Scoot logo" ></a>

          <div class="footer-navigation-wrapper">

            <?php if( has_nav_menu( 'footer' ) ) { ?>

              <ul class="footer-menu reset-list-style">

                <?php if( has_nav_menu( 'footer' ) ) {
                  wp_nav_menu( array (
                    'container' => '',
                    'items_wrap' => '%3$s',
                    'theme_location' => 'footer'
                    )
                  );
                }
                ?>

              </ul> <!-- .footer-menu -->

            <?php
          }
          ?>

          </div> <!-- .footer-navigation-wrapper -->

          <ul class="social-menu">

            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/assets/icons/facebook.svg' ?>" alt="Facebook icon"></a>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/assets/icons/twitter.svg' ?>" alt="Twitter icon"></a>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/assets/icons/instagram.svg' ?>" alt="Instagram icon"></a>

          </ul> <!-- .social-menu -->

        </div> <!-- .footer-credits -->

      </div> <!-- .section-inner -->

    </div> <!-- .footer-credits-wrapper -->

</footer>

<?php wp_footer(); ?>

</body>
</html>
