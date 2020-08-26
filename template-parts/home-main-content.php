<?php
/**
* Displays the main content for the front(home) page.
*
*/
?>

<section class="how-it-works">

  <div class="accent-border"></div>

    <div class="locate-scooter">
      <img src="<?php echo get_template_directory_uri() . '/assets/icons/locate.svg' ?>" aria-hidden="true" />

      <h4>Locate with app</h4>

      <p>Use the app to find the nearest scooter to you. We are continuously placing scooters
      in the areas with most demand, so one should never be too far away.</p>
    </div> <!-- .locate-scooter -->

    <div class="pick-scooter">
      <img src="<?php echo get_template_directory_uri() . '/assets/icons/scooter.svg' ?>" aria-hidden="true" />

      <h4>Pick your scooter</h4>

      <p>We show the most important info for the scooters closest to you. So you know how much
      charge they have left and can see roughly how much it will cost.</p>
    </div> <!-- .pick-scooter -->

    <div class="ride-scooter">
      <img src="<?php echo get_template_directory_uri() . '/assets/icons/ride.svg' ?>" aria-hidden="true" />

      <h4>Enjoy the ride</h4>

      <p>Scan the QR code and the bike will unlock. Retract the cable lock, put on a helmet,
      and you’re off! Always lock bikes away from walkways and accessibility ramps.</p>
    </div> <!-- .ride-scooter -->

</section> <!-- .how-it-works -->

<section class="riding-telemetry">

  <img src="<?php echo get_template_directory_uri() . '/assets/images/telemetry.jpg' ?>" alt="Women checking her mobile phone" />
  <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" aria-hidden="true" />
  <img src="<?php echo get_template_directory_uri() . '/assets/patterns/left-downward-arrow.svg' ?>" aria-hidden="true" />

  <h2>Easy to use riding telemetry</h2>

  <p>The Scoot app is available with riding telemetry. This means it can show you your
  average speed, how long you've been using the scooter, your traveling distance,
  and many more things all in an easy to use app.</p>

  <button class="btn-call-to-action"><a href="#">Learn More</a></button>

</section> <!-- .riding-telemetry -->
