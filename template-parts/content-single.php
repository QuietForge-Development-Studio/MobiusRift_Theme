<?php
/**
 * Quiet Forge - Single Post Template
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-meta"><?php the_date(); ?> | <?php the_author(); ?></div>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>
