<?php

get_header();

if( have_posts() ) {
  while( have_posts() ) {
    the_post();
  }?>
  <p><?php the_content(); ?></p>
  
<?php }

get_footer();

?>
