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

      <section class="join-us">

        <div class="join-us-img-wrapper">

          <div class="pattern-circle">
            <img src="<?php echo get_template_directory_uri() . '/assets/patterns/circle.svg' ?>" aria-hidden="true" />
          </div>
          <div class="left-downward-arrow">
            <img src="<?php echo get_template_directory_uri() . '/assets/patterns/left-downward-arrow.svg' ?>" aria-hidden="true" />
          </div>

          <img src="<?php echo get_template_directory_uri() . '/assets/images/join-us.jpg'?>"  class="join-us" aria-hidden="true" />

        </div> <!-- .join-us-img-wrapper -->

        <div class="join-us-desc">

          <h2>Care to join our mission?</h2>

          <p>We’re always looking for ambitious individuals to help us on our journey. If you’re
             passionate about our mission to provide clean, accessible transport to improve urban
             living we want to hear from you!</p>

          <button class="btn-call-to-action join-us-cta"><a href="#">Say Hello</a></button>

        </div> <!-- .join-us-desc -->

      </section> <!-- .join-us -->

      <section class="Why-join-us">

        <h2>Why join us?</h2>

        <?php get_template_part('template-parts/values-join-us'); ?>

      </section> <!-- .our-values -->

    </div> <!-- .content-inner -->

    <article class="job-listings section-inner">

        <?php
          $jobListings = new WP_Query( array(
            'post_type' => 'job',
            'order'     => 'ASC',
          ));

          while( $jobListings->have_posts() ) {
            $jobListings->the_post(); ?>

            <article class="job">

              <h4 class="job-title"><?php the_title(); ?></h4>
              <p class="job-location"><?php the_field( 'job_location' ); ?></p>
              <button class="btn-call-to-action apply-cta"><a href="<?php the_permalink(); ?>">Apply</a></button>

            </article> <!-- .job -->

          <?php }

          wp_reset_postdata();

        ?>

    </article> <!-- .job-listings -->

  </main> <!-- .main-content -->

</div> <!-- .container -->

<?php get_footer(); ?>
