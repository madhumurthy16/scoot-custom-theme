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
   if ( function_exists( 'the_custom_logo' ) ) {
     the_custom_logo();
   }

 }
