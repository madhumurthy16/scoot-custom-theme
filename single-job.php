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

            <div class="job-apply">

              <h3 class="job-title"><?php the_title(); ?></h3>
              <p class="job-location"><?php the_field( 'job_location' ); ?></p>
              <a href="#" class="btn-call-to-action apply-cta">Apply</a>

            </div> <!-- .job-apply -->

            <div class="job-desc">

                <h4>Job description</h3>
               <?php the_content(); ?>

             </div> <!-- .job-desc -->

             <div class="all-jobs">
               <h5><a href="<?php echo get_permalink(get_page_by_path('careers')) . '#all-jobs'; ?>" class="all-jobs">Back To All Jobs</a></h5>
             </div>

          </article> <!-- .single-job -->

        <?php
        }
      ?>

    </div> <!-- .section-inner -->

  </main> <!-- .main-content -->

</div> <!-- .container -->

<?php get_footer(); ?>
