<?php
/**
* The template for displaying the front page.
*
*/

get_header();

?>
<div class="container">

  <div class="mobile-overlay"></div>

    <section class="hero-image">

      <div class="section-inner content-inner">
        <div class="hero-content">
          <div class="hero-inner">
            <h1 class="hero-title right-on-scroll">Scooter Sharing Made Simple</h1>
            <p class="hero-text">Scoot takes the hassle out of urban mobility. Our bikes are placed in convenient
              locations in each of our cities. Use our app to locate the nearest bike, unlock
              it with a tap, and you’re away!</p>

            <a href="#site-footer" class="btn-call-to-action hero-cta">Get Scootin</a>
          </div> <!-- .hero-inner -->
        </div> <!-- .hero-content -->
      </div> <!-- .section-inner -->

      <div class="line">
        <img src="<?php echo get_template_directory_uri() . '/assets/patterns/line.svg' ?>" alt="" aria-hidden="true" />
      </div>

      <div class="right-arrow">
        <img src="<?php echo get_template_directory_uri() . '/assets/patterns/right-arrow.svg' ?>" alt="" aria-hidden="true" />
      </div>

      <div class="white-circles">
        <img src="<?php echo get_template_directory_uri() . '/assets/patterns/white-circles.svg' ?>" alt="" aria-hidden="true" />
      </div>

  </section> <!-- .hero-image -->

  <main id="main-content" class="section-inner content-inner" role="main">

    <?php get_template_part( 'template-parts/home-main-content'); ?>

  </main>

</div>  <!-- .container -->

<?php

get_footer();

?>
