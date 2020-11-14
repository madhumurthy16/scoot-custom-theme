<?php
/**
* About page - template file.
*
*/

get_header();

get_template_part( 'template-parts/page-hero');

?>

<div class="container">

  <div class="mobile-overlay"></div>

  <main id="main-content" role="main">

    <div class="section-inner content-inner">

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

          <h2 class="right-on-scroll">Mobility for the digital era</h2>

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

          <h2 class="right-on-scroll">Better urban living</h2>

          <p> We’re helping connect cities and bring people closer together. Our scooters are also
              fully-electric and we offset the minimal carbon footprint for each ride.</p>

        </div> <!-- .better-living-desc -->

      </section> <!-- .better-living -->

      <section class="our-values">

        <h2 class="right-on-scroll">Our values</h2>

        <?php get_template_part('template-parts/values-join-us'); ?>

      </section> <!-- .our-values -->

    </div> <!-- .content-inner -->

    <article class="faqs section-inner">

      <h2 class="right-on-scroll">FAQs</h2>

      <section class="faq-how-it-works">

        <h3>How it works</h3>

        <article class="faq">

          <div class="faq-question">
            <h4>How do I download the app?</h4>
            <span class="faq-toggle-answer"><img src="<?php echo get_template_directory_uri() . '/assets/icons/chevron.svg' ?>" alt="Chevron icon to open faq answers " aria-hidden="true" /></span>
          </div>

          <p class="faq-answer">To download the Scoot app, you can search “Scoot” in both the App and Google Play stores.
          An even simpler way to do it would be to click the relevant link at the bottom of this
          page and you’ll be re-directed to the correct page.</p>
        
        </article> <!-- .faq -->

        <article class="faq">

          <div class="faq-question">
            <h4>Can I find a nearby Scoots?</h4>
            <span class="faq-toggle-answer"><img src="<?php echo get_template_directory_uri() . '/assets/icons/chevron.svg' ?>" alt="Chevron icon to open faq answers " aria-hidden="true" /></span>
          </div>
          <p class="faq-answer">Definitely! Simply open up the app and allow us to find your location while using it. We'll
          show you all of the closest Scoots and some extra useful information.</p>

        </article> <!-- .faq -->

        <article class="faq">

          <div class="faq-question">
            <h4>Do I need a license to ride?</h4>
            <span class="faq-toggle-answer"><img src="<?php echo get_template_directory_uri() . '/assets/icons/chevron.svg' ?>" alt="Chevron icon to open faq answers " aria-hidden="true" /></span>
          </div>

          <p class="faq-answer">Yup! We provide information inside the app regarding local laws and the license you need to be
          able to ride our Scoots.</p>

        </article> <!-- .faq -->

      </section> <!-- .how-it-works -->

      <section class="faq-safe-driving">

        <h3>Safe driving</h3>

        <article class="faq">

          <div class="faq-question">

            <h4>Should I wear a helmet?</h4>
            <span class="faq-toggle-answer"><img src="<?php echo get_template_directory_uri() . '/assets/icons/chevron.svg' ?>" alt="Chevron icon to open faq answers " aria-hidden="true" /></span>

          </div>

          <p class="faq-answer">Yes, please do! All cities have different laws. But we strongly strongly strongly recommend
          always wearing a helmet regardless of the local laws. We like you and we want you to be as
          safe as possible while Scooting.</p>

        </article> <!-- .faq -->

        <article class="faq">

          <div class="faq-question">
            <h4>How about the rules & regulations?</h4>
            <span class="faq-toggle-answer"><img src="<?php echo get_template_directory_uri() . '/assets/icons/chevron.svg' ?>" alt="Chevron icon to open faq answers " aria-hidden="true" /></span>

          </div>

          <p class="faq-answer">Now is not the time to be a rule breaker. Be sure you're complying with all local laws and
          regulations. Also, just be a good human being. Be sure not to park your Scoot where it can
          block access to buildings or get in people's way.</p>

       </article> <!-- .faq -->

       <article class="faq">
          <div class="faq-question">
            <h4>What if I damage my Scoot?</h4>
            <span class="faq-toggle-answer"><img src="<?php echo get_template_directory_uri() . '/assets/icons/chevron.svg' ?>" alt="Chevron icon to open faq answers " aria-hidden="true" /></span>
          </div>

          <p class="faq-answer">Be sure to read our terms and conditions carefully. Not the most fun job we know but we make
          it as clear as possible. There's an option to add insurance for each trip, or you can sign
          up for annual insurance if you're a regular Scooter.</p>

       </article> <!-- .faq -->

      </section> <!-- .safe-driving -->

    </article> <!-- .faq -->

  </main> <!-- .main-content -->

</div> <!-- .container -->

<?php get_footer( ); ?>
