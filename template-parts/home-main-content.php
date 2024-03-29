<?php
/**
* Displays the main content for the front(home) page.
*
*/
?>

<section class="how-it-works">

  <div class="accent-border"></div>

    <div class="locate-scooter">

      <img src="<?php echo get_template_directory_uri() . '/assets/icons/locate.svg' ?>" class="down-on-scroll" alt="" aria-hidden="true" />
      <h4>Locate with app</h4>
      <p>Use the app to find the nearest scooter to you. We are continuously placing scooters
      in the areas with most demand, so one should never be too far away.</p>

    </div> <!-- .locate-scooter -->

    <div class="pick-scooter">

      <img src="<?php echo get_template_directory_uri() . '/assets/icons/scooter.svg' ?>" class="down-on-scroll" alt="" aria-hidden="true"/>
      <h4>Pick your scooter</h4>
      <p>We show the most important info for the scooters closest to you. So you know how much
      charge they have left and can see roughly how much it will cost.</p>

    </div> <!-- .pick-scooter -->

    <div class="ride-scooter">

      <img src="<?php echo get_template_directory_uri() . '/assets/icons/ride.svg' ?>" class="down-on-scroll" alt="" aria-hidden="true"/>
      <h4>Enjoy the ride</h4>
      <p>Scan the QR code and the bike will unlock. Retract the cable lock, put on a helmet,
      and you’re off! Always lock bikes away from walkways and accessibility ramps.</p>

    </div> <!-- .ride-scooter -->

</section> <!-- .how-it-works -->

<section class="riding-telemetry">

  <div class="telemetry-img-wrapper">

    <div class="pattern-circle">
      <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" alt="" aria-hidden="true" />
    </div>
    <div class="left-downward-arrow">
      <img src="<?php echo get_template_directory_uri() . '/assets/patterns/left-downward-arrow.svg' ?>" alt="" aria-hidden="true" />
    </div>

    <img src="<?php echo get_template_directory_uri() . '/assets/images/telemetry.jpg'?>"  class="telemetry" alt="" aria-hidden="true" />

  </div> <!-- .telemetry-img-wrapper -->

  <div class="telemetry-desc">

    <h2 class="right-on-scroll">Easy to use riding telemetry</h2>
    <p>The Scoot app is available with riding telemetry. This means it can show you your
      average speed, how long you've been using the scooter, your traveling distance,
      and many more things all in an easy to use app.</p>
    <a href="https://scoot.local/about/" class="btn-call-to-action telemetry-cta animate-slide-up">Learn More</a>

  </div> <!-- .telemetry-desc -->

</section> <!-- .riding-telemetry -->

<section class="cities-near-you">

  <div class="near-you-img-wrapper">

    <div class="pattern-circle">
      <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" alt="" aria-hidden="true" />
    </div>
    <div class="right-arrow">
      <img src="<?php echo get_template_directory_uri() . '/assets/patterns/right-arrow.svg' ?>" alt="" aria-hidden="true" />
    </div>

    <img src="<?php echo get_template_directory_uri() . '/assets/images/near-you.jpg' ?>" class="near-you" alt="" aria-hidden="true" />

  </div> <!-- .near-you-img-wrapper -->

  <div class="cities-desc">

    <h2 class="right-on-scroll">Coming to a city near you</h2>
    <p>Scoot is available in 4 major cities so far. We’re expanding rapidly, so be sure
       to let us know if you want to see us in your hometown. We’re aiming to let our
       scooters loose on 23 cities over the coming year.</p>
    <a href="https://scoot.local/location/" class="btn-call-to-action cities-cta animate-slide-up">Learn More</a>

  </div> <!-- .cities-desc -->

</section> <!-- .cities-near-you -->

<section class="payments">

  <div class="payments-img-wrapper">

    <div class="pattern-circle">
      <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" alt="" aria-hidden="true" />
    </div>
    <div class="left-downward-arrow">
      <img src="<?php echo get_template_directory_uri() . '/assets/patterns/left-downward-arrow.svg' ?>" alt="" aria-hidden="true" />
    </div>

    <img src="<?php echo get_template_directory_uri() . '/assets/images/payments.jpg' ?>" class="payments" alt="" aria-hidden="true" />

  </div> <!-- .payments-img-wrapper -->

  <div class="payments-desc">

    <h2 class="right-on-scroll">Zero hassle payments</h2>
    <p>Our payment is as easy as one two three. We accept most credit cards and debit cards.
       You can also link your PayPal account inside the app. Need to pay later? No worries!
       You can defer payment for up to a month.</p>
    <a href="https://scoot.local/about/" class="btn-call-to-action payments-cta animate-slide-up">Learn More</a>

  </div> <!-- .payments-desc -->

</section> <!-- .payments -->
