<?php
/**
* Displays the hero section for pages - About, Careers and Locations.
*
*/
?>

<?php

  /* Get page id outside of the loop */

  $page_id = get_post_field( 'ID' );

  /* Get page slug outside of the loop */

  $page_slug = get_post_field( 'post_name', $page_id );

?>

<section class="<?php echo $page_slug ?>-hero page-hero">

    <div class="section-inner content-inner">

      <div class="page-hero-content">

        <h1 class="page-hero-title"><?php the_title(); ?></h1>

        <div class="page-hero-pattern">
          <img src="<?php echo get_template_directory_uri() . '/assets/patterns/white-circles.svg' ?>" aria-hidden="true" />
        </div>

      </div> <!-- .page-hero-content -->

    </div> <!-- .section-inner -->

</section>