<?php
/**
 * Quiet Forge - Default Loop
 */
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/content', get_post_type() );
  endwhile;
  the_posts_navigation();
else :
  echo '<p>No content found.</p>';
endif;
