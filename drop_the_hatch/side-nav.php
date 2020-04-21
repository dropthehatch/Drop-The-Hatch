<div class="gui-overlay">
    <div class="button-container-desktop">
      <?php 
      $args = array (
        'category_name' => '',
        'showposts' => '5',
        'orderby' => 'asc'
      ) ;
      $categories = new wp_query($args)?>

        <?php
      if ( $categories->have_posts() ) {
        while ( $categories->have_posts() ) {
          $categories->the_post();?>
        <a href="<?php the_permalink();?>"><button type="button"
                class="button-desktop"><?php the_title(); ?></button></a>
        <?php }
      }
      ?>
        <?php wp_reset_query() ?>

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