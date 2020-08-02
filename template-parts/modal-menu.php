<?php
/**
* Displays the mobile menu modal
*
*/
?>

<div class="menu-modal">

  <nav class="mobile-menu section-inner">

    <ul class="modal-menu reset-list-style

    <?php

    $mobile_menu_location = '';

    //If the mobile menu location is not set usw the primary location as a fallback
    if( has_nav_menu('mobile' ) ) {
      $mobile_menu_location = 'mobile';
    }
    else if( has_nav_menu( 'primary' ) ) {
      $mobile_menu_location = 'primary';
    }

    if( $mobile_menu_location ) {

      wp_nav_menu(
        array(
            'theme_location' => $mobile_menu_location,
        )
      );
    }
    ?>

    </ul>
  </nav>

</div> <!-- .menu-modal -->
