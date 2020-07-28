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
    <header id="site-header" role="banner">
      <div class="header-inner section-inner">
        <div class="header-titles-wrapper">
          <div class="header-titles">
            <div class="site-logo">
              <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a><h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <?php
    // Output the menu modal
    get_template_part('template-parts/modal-menu');
    ?>

  
