<?php
/**
* The single template for the 'Job' custom post type.
*
*/

get_header();
get_template_part('template-parts/page-hero');

?>

<div class="container">

  <div class="mobile-overlay"></div>

  <main id="main-content" role="main">

    <div class="job-wrapper section-inner content-inner">

      <?php
        while( have_posts() ) {
          the_post(); ?>

          <article class="single-job">

            <h4 class="job-title"><?php the_title(); ?></h4>
            <p class="job-location"><?php the_field( 'job_location' ); ?></p>
            <button class="btn-call-to-action apply-cta"><a href="#">Apply</a></button>
            
            <div class="job-details">
                <h4>Job description</h3>
               <?php the_content(); ?>
             </div>

          </article> <!-- .single-job -->

        <?php
        }
      ?>

    </div> <!-- .section-inner -->

  </main> <!-- .main-content -->

</div> <!-- .container -->

<?php get_footer(); ?>
