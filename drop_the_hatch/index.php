<?php get_header(); ?>
<div class="main-content-container">
        <div class="main-content">
            <?php
      // TO SHOW THE PAGE CONTENTS
      while ( have_posts() ) : the_post(); ?>
            <!--Because the_content() works only inside a WP Loop -->
            <div>
                <?php the_content(); ?>
                <!-- Page Content -->

            </div><!-- .entry-content-page -->

            <?php
      endwhile; //resetting the page loop
      wp_reset_query(); //resetting the page query
      ?>
            <p>index
            </p>
        </div>

<?php get_footer(); ?>