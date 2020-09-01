<?php
/**
* The template for displaying the footer.
*/


$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
?>

<footer id="site-footer" role="contentinfo">
  <div class="section-inner">

    <!-- Only output the container if there are elements to display -->

    <?php if( $has_sidebar_1 || $has_sidebar_2 ) { ?>

      <div class="footer-widgets-outer-wrapper">

        <div class="footer-widgets-wrapper">

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

      </div> <!-- .footer-widgets-outer-wrapper -->

    <?php } ?>

    <div class="footer-credits">
      <a href="<?php echo esc_url( home_url( '/' )); ?>"><?php bloginfo( 'name' ); ?></a>
    </div> <!-- .footer-credits -->

  </div> <!-- .section-inner -->

</footer>

<?php wp_footer(); ?>

</body>
</html>
