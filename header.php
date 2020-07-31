<?php
/**
* Header file for the Scoot custom WordPress theme.
*/

?>

<!DOCTYPE>
<html <?php language_attributes() ?>>
  <head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="site-header" role="banner">

      <div class="header-inner section-inner">

        <div class="header-titles-wrapper">

          <div class="header-titles">

            <?php
              // Site title or logo
              scoot_site_logo();

            ?>

          </div> <!-- .header-titles -->

        </div> <!-- .header-titles-wrapper -->

      </div> <!-- .header-inner -->
    </header>

    <?php
    // Output the menu modal
    get_template_part('template-parts/modal-menu');
    ?>
