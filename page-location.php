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

    <div class="section-inner content-inner">

      <section class="world-map">

        <div class="location">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/new-york.svg' ?>" alt="" aria-hidden="true" />
        </div>
        <div class="location">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/london.svg' ?>" alt="" aria-hidden="true" />
        </div>
        <div class="location">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/yokohama.svg' ?>" alt="" aria-hidden="true" />
        </div>
        <div class="location">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/jakarta.svg' ?>" alt="" aria-hidden="true" />
        </div>

      </section> <!-- .world-map -->

    </div> <!-- .content-inner -->

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

    <section class="message-us">

      <h2>Your city not listed?</h2>
      <p>If you’d like to see Scoot in your hometown, be sure to let us know. We track
         requests and plan launches based on demand. Feel free to message us by clicking
         the link or messaging us on social.</p>
      <button class="btn-call-to-action message-us-cta"><a href="#">Message Us</a></button>

    </section> <!-- .message-us -->

  </main> <!-- .main-content -->

</div> <!-- .container -->

<?php get_footer(); ?>
