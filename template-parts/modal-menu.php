<?php
/**
* Displays the mobile menu modal
*
*/
?>

<div class="menu-modal">

    <?php

    $mobile_menu_location = '';

    //If the mobile menu location is not set use the primary location as a fallback
    if( has_nav_menu('mobile' ) ) {
      $mobile_menu_location = 'mobile';
    }
    else if( has_nav_menu( 'primary' ) ) {
      $mobile_menu_location = 'primary';
    }

    if( $mobile_menu_location ) { ?>

      <nav class="mobile-menu section-inner">

        <ul class="modal-menu reset-list-style">

          <?php

          wp_nav_menu(
            array(
                'container'      => '',
                'items_wrap' => '%3$s',
                'theme_location' => $mobile_menu_location,
            )
          );
          ?>

       </ul>
     </nav>

     <?php
   }
   ?>

</div> <!-- .menu-modal -->
