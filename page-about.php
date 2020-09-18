<?php
/**
* About page - template file.
*
*/

get_header();

get_template_part( 'template-parts/page-hero');

?>

<div class="container">

  <main id="main-content" class="section-inner content-inner" role="main">

    <section class="digital-era">

      <div class="digital-era-img-wrapper">

        <div class="pattern-circle">
          <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" aria-hidden="true" />
        </div>
        <div class="left-upward-arrow">
          <img src="<?php echo get_template_directory_uri() . '/assets/patterns/left-upward-arrow.svg' ?>" aria-hidden="true" />
        </div>

        <img src="<?php echo get_template_directory_uri() . '/assets/images/digital-era.jpg'?>"  class="img-digital-era" aria-hidden="true" />

      </div> <!-- .digital-era-img-wrapper -->

      <div class="digital-era-desc">

        <h2>Mobility for the digital era</h2>

        <p>Getting around should be simple (and even fun!) for everyone. We embrace technology to
           provide low cost, smart access to scooters at your fingertips.</p>

      </div> <!-- .digital-era-desc -->

    </section> <!-- .digital-era -->

    <section class="better-living">

      <div class="better-living-img-wrapper">

        <div class="pattern-circle">
          <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" aria-hidden="true" />
        </div>

        <div class="right-arrow">
          <img src="<?php echo get_template_directory_uri() . '/assets/patterns/right-arrow.svg' ?>" aria-hidden="true" />
        </div>

        <img src="<?php echo get_template_directory_uri() . '/assets/images/better-living.jpg' ?>" class="img-better-living" aria-hidden="true" />


      </div> <!-- .better-living-img-wrapper -->

      <div class="better-living-desc">

        <h2>Better urban living</h2>

        <p> We’re helping connect cities and bring people closer together. Our scooters are also
            fully-electric and we offset the minimal carbon footprint for each ride.</p>

      </div> <!-- .better-living-desc -->

    </section> <!-- .better-living -->

    <section class="our-values">

      <h2>Our values</h2>

      <section class="tech">

        <div class="tech-img-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/our-tech.jpg' ?>" class="img-tech" aria-hidden="true" />
          <span>01</span>
        </div>

        <h3>Our tech</h3>
        <p>We’re using cutting edge technology to drive accessible urban transportation forward.
           Our fully electric scooters are a joy to ride!</p>

      </section> <!-- .tech -->

      <section class="integrity">

        <div class="integrity-img-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/our-integrity.jpg' ?>" class="img-integrity" aria-hidden="true" />
          <span>02</span>
        </div>

        <h3>Our integrity</h3>
        <p>We are fully committed to deliver a great yet safe, sustainable micro-mobility experience
           in every city we serve.</p>

      </section> <!-- .integrity -->

      <section class="community">

        <div class="community-img-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/our-community.jpg' ?>" class="img-community" aria-hidden="true" />
          <span>03</span>
        </div>

        <h3>Our community</h3>
        <p>We support every community we serve. All workers are paid a living wage based on their
           location and are Scoot employees.</p>

      </section> <!-- .community -->

    </section> <!-- .our-values -->














  </main> <!-- .main-content -->

</div> <!-- .container -->
