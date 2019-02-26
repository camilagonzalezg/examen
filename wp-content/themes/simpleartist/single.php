<?php get_header(); ?>


<section class="container-fluid cuerpoblog">
    <div class="row">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php

          if ( has_post_thumbnail() ) {
            $img = get_the_post_thumbnail_url('', 'post-custom-size');
          } else {
            $img = get_template_directory_uri()."/img/sitio/defaultimage.jpg";
          }

          ?>

          <div class="cuerpoblog__inner col-lg-12 col-md-12 col-sm-12">

          <div id="post-jumbotron" class="jumbotron text-center cajablanca" style="background-image: url('<?= $img ?>')">
            <span class="textoribete"><h1><?php the_title() ?></h1></span>
            <h2><time  class="textoribete2" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></h2>
          </div>

            <?php the_content(); ?>

<div class="col-md-12 sharing">
  <p>
    <a class="btn button_vdoblege2" href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
    <a class="btn button_vdoblege2" href="#"><i class="fab fa-twitter fa-lg"></i></a>
    <a class="btn button_vdoblege2" href="#"><i class="fas fa-share-alt fa-lg"></i></a>
  </p>
</div>
      </div>
    </div>
    <hr>
    <br>
  <div class="post-jumbotron cuerpoblog__entradasblog">
    <div class="row">
      <div class="col-md-6 cuerpoblog__entradasblog__left">
        <p>
          <i class="fas fa-angle-double-left fa-lg"></i>
        <?php echo next_post_link( '<span>Entrada Posterior:</span> %link', '%title' ) ?>
        </p>
      </div>
      <div class="col-md-6 cuerpoblog__entradasblog__right">
        <p>
        <?php echo previous_post_link( '<span>Entrada Anterior:</span> %link', '%title' ); ?>
        <i class="fas fa-angle-double-right fa-lg"></i>
        </p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
