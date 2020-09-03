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

    <div class="footer-credits">

      <div class="section-inner">

        <a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/scoot.svg' ?>" alt="" aria-hidden="true" /></a>

      </div >

    </div> <!-- .footer-credits -->

</footer>

<?php wp_footer(); ?>

</body>
</html>
