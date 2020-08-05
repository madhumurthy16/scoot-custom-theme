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

          <button class="site-header-menu-trigger">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/hamburger.svg' ?>" class="openIcon" alt="hamburger icon for mobile menu" aria-hidden="true" />
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/close.svg' ?>" class="closeIcon invisible" alt="close icon for mobile menu" aria-hidden="true" />
          </button>

          <div class="header-titles">

            <?php
              // Site title or logo
              scoot_site_logo();
            ?>

          </div> <!-- .header-titles -->

        </div> <!-- .header-titles-wrapper -->

        <div class="header-navigation-wrapper">

          <?php
          if( has_nav_menu( 'primary' ) ) {
            ?>

            <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'scoot' ); ?>" role="navigation">

              <ul class="primary-menu reset-list-style">

                <?php
                if( has_nav_menu( 'primary' ) ) {

                  wp_nav_menu(
                    array(
                      'container' => '',
                      'items_wrap' => '%3$s',
                      'theme_location' => 'primary'
                    )
                  );

                }
                ?>

              </ul>
            </nav> <!-- .primary-menu-wrapper -->

            <?php
          }
          ?>

          <!-- <a href="#app-download-section" class="btn-call-to-action">Get Scootin</a> -->

        </div> <!-- .header-navigation-wrapper -->

      </div> <!-- .header-inner -->
    </header>

    <?php
    // Output the menu modal
    get_template_part('template-parts/modal-menu');
