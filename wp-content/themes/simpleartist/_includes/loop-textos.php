<div class="col-md-4 box1 cajablanca">
  <span id="demotext"><h1><?php the_title() ?></h1></span>
  <?php the_time('F jS, Y'); ?>
  <p><?php the_excerpt() ?></p>
  <a class="btn button_vdoblege" href="<?php echo get_post_permalink(); ?>">Seguir leyendo</a>
</div>
