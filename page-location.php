<?php
/**
* Careers page - template file.
*
*/

get_header();
get_template_part('template-parts/page-hero');

?>

<div class="container">

  <div class="mobile-overlay"></div>

  <main id="main-content" role="main">

    <div class="section-inner">

      <section class="world-map">

        <picture>
          <source media="(max-width: 622px)" srcset="<?php echo get_template_directory_uri() . '/assets/images/world-map-mobile.png' ?>">
          <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() . '/assets/images/world-map-tablet.png' ?>">
          <source media="(max-width: 1440px)" srcset="<?php echo get_template_directory_uri() . '/assets/images/world-map-desktop.png' ?>">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/world-map-desktop.png' ?>" alt="World Map">
        </picture>

        <div class="location newyork">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/new-york.svg' ?>" alt="" aria-hidden="true" />
        </div>
        <div class="location london">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/london.svg' ?>" alt="" aria-hidden="true" />
        </div>
        <div class="location yokohama">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/yokohama.svg' ?>" alt="" aria-hidden="true" />
        </div>
        <div class="location jakarta">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/jakarta.svg' ?>" alt="" aria-hidden="true" />
        </div>

      </section> <!-- .world-map -->

    </div>


    <section class="locations-mobile section-inner content-inner">

      <div class="location-mobile">
        <h3>New York</h3>
      </div> <!-- .location-mobile -->

      <div class="location-mobile">
        <h3>London</h3>
      </div> <!-- .location-mobile -->

      <div class="location-mobile">
        <h3>Jakarta</h3>
      </div> <!-- .location-mobile -->

      <div class="location-mobile">
        <h3>Yokohoma</h3>
      </div> <!-- .location-mobile -->

    </section> <!-- .locations-mobile -->

    <section class="message-us section-inner content-inner">

      <h2>Your city not listed?</h2>
      <p>If you’d like to see Scoot in your hometown, be sure to let us know. We track
         requests and plan launches based on demand. Feel free to message us by clicking
         the link or messaging us on social.</p>
      <button class="btn-call-to-action message-us-cta"><a href="#">Message Us</a></button>

    </section> <!-- .message-us -->

  </main> <!-- .main-content -->

</div> <!-- .container -->

<?php get_footer(); ?>
