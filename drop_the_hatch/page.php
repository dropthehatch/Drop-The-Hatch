<?php get_header();?>
<?php include 'side-nav.php'; ?>
<div class="main-content-container">
    <div class="main-content">
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post(); ?>
        
          <?php the_content(); ?>
      <?php }
    } ?>
    <?php wp_reset_query(); ?>
    </div>
</div>
</body>
<?php get_footer();?>