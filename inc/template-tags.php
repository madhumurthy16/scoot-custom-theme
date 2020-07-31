<?php
/**
* Custom template tags for Scoot theme.
*/

/**
 * Logo & Description
 */
/**
 * Displays the site logo, either text or image.
 */

 function scoot_site_logo() {

   if( has_custom_logo() ) { ?>

     <h1 class="site-logo">
       <?php the_custom_logo(); ?>
       <span class="screen-reader-text"><?php esc_html(bloginfo( 'name' )); ?></span>
     </h1>

    <?php }

   else {
     ?>
     <h1 class="site-title">
       <a href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
     </h1>
   <?php }

 } ?>
