<div class="col-md-3 container1">
  <a href="<?php echo get_post_permalink(); ?>">
      <?php the_post_thumbnail( 'large' ); ?>
    <span class="textofecha"><?php the_time('F jS, Y'); ?></span>
    <span class="page-header title textocajas"><?php the_title() ?></span>
  </a>
</div>
