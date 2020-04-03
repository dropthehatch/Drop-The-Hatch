<?php get_header();?>
<div class="gui-overlay">
    <div class="button-container-desktop">
      <a href="<?php echo site_url('');?>"><button type="button" class="button-desktop">Lorem Ipsum</button></a>
      <a href="<?php echo site_url('');?>"><button type="button" class="button-desktop">Lorem Ipsum</button></a>
      <a href="<?php echo site_url('');?>"><button type="button" class="button-desktop">Lorem Ipsum</button></a>
    <div class="side-Nav-desktop">
      <div class="side-Nav">
        <ul>
          <li><a href="<?php echo site_url('');?>">00&nbsp;-</a></li>
          <li><a href="<?php echo site_url('');?>">01&nbsp;-</a></li>
          <li><a href="<?php echo site_url('');?>">02&nbsp;-</a></li>
          <li><a href="<?php echo site_url('');?>">03&nbsp;-</a></li>
          <li><a href="<?php echo site_url('');?>">04&nbsp;-</a></li>
          <li><a href="<?php echo site_url('');?>">05&nbsp;-</a></li>
        </ul>
      </div>
    </div>
</div>
<div class="main-content-container">
    <div class="main-content">
      <?php
      // TO SHOW THE PAGE CONTENTS
      while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
          <div>
            <?php the_content(); ?> <!-- Page Content -->
          </div><!-- .entry-content-page -->

      <?php
      endwhile; //resetting the page loop
      wp_reset_query(); //resetting the page query
      ?>
      <p>page</p>
    </div>
</div>
</body>
<?php get_footer();?>