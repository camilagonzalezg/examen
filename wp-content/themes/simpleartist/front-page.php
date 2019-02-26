<?php get_header(); ?>

<!-- Header -->
  <header class="header-site">
    <div class="header_doblege header_doblege__image-top col-lg-12 col-md-12 col-sm-12">
      <span class="textoheader"><h1>Victor<br><strong>doblege</strong></h1></span>
    </div>
  </header>
  &emsp;
<!-- Termino Header -->

<!-- Contenedor General-->
  <div class="container paginacompleta">

<!-- Inicio Blog Posts -->
    <div class="container">
      <?php

        $arg = array(
          'post_type'		 => 'post',
          'posts_per_page' => 6
          );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
        $get_arg->the_post();

        ?>

        <div class="col-lg-3 col-md-6 col-sm-12 container1">
          <a href="<?php echo get_post_permalink(); ?>">
             <?php the_post_thumbnail( 'large' ); ?>
            <span class="textofecha"><?php the_time('F jS, Y'); ?></span>
            <span class="page-header title textocajas"><?php the_title() ?></span>
          </a>
        </div>

        <?php } wp_reset_postdata();?>
    </div>
<!-- Termino Blog Posts -->
<!-- Cierre Contenedor General-->
  </div>

<!--Espacio-->
<section class="container-fluid"></section>
<!--Fin Espacio-->

<!-- Inicio Autor -->
  <section class="container-fluid autor">
    <h1>Autor</h1>
  </section>
<!-- Contenedor General-->
  <div class="row ribetelargoautor">
    <div class="autor__caracteristicas autor__caracteristicas__image-top col-lg-6 col-md-6 col-sm-12">
    </div>
    <div class="autor__caracteristicas col-lg-6 col-md-6 col-sm-12">
          <h3>Victor García Guillén</h3>
            <p>A los cuatro años comencé a pintar los primeros objetos que el mundo dejaba a mi alrededor: murallas, lienzos, fotos o incluso ropa. El paso de los años provocó que mi instinto no quedara satisfecho con la ilustración de las formas y apreciación de colores, siempre quise reflexionar y crear más.
              <br>
              <br>
              El paso del tiempo y los estudios del arte provocaron en mi cuerpo y mente una transformación que está lejos de concluir. Hoy, regresé a los orígenes de la técnica limpia, los trazos más ausentes que presentes, con los que deseo resolver el misterio de lo que es considerado arte.
            </p>
          <a class="btn button_vdoblege" href="<?php echo get_page_link(148); ?>">Sobre el autor</a>
    </div>
  </div>
<!-- Termino Autor-->

<!--Espacio-->
<section class="container-fluid"></section>
<!--Fin Espacio-->


<!-- Inicio Exposiciones & Concursos -->
  <section class="container-fluid expo">
    <h1>Exposiciones & Concursos</h1>
  </section>
<!-- Contenedor General-->
  <div class="container paginacompleta2">
    <div class="row" style="padding-bottom: 50px">
        <?php
          $arg = array(
            'post_type'		 => 'exposicion',
            'posts_per_page' => 2
          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
        <div class="col-md-4 cajablanca container2">
          <a href="<?php echo get_post_permalink(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
            <span class="textofecha"><?php the_time('F jS, Y'); ?></span>
            <span class="page-header title textocajas"><?php the_title() ?></span>
          </a>
        </div>

        <?php } wp_reset_postdata();?>

        <div class="col-md-4 cajablanca container3">
        	<div class="form-group">
    				<label class="text-uppercase"><h2>Próximas Exposiciones:</h2></label>
      				<select name="select" id="select" class="form-control">
      					<option value="vin" selected>6-7 abril, Feria Medieval, 12:00</option>
      					<option value="vlp">8 junio, El Internado, 19:00</option>
        				<option value="qta">10 junio, Palacio Rioja, 20:00</option>
        				<option value="pta">3 julio, Estación Puerto, 20:00</option>
        			</select>
            <br>
          <div id="map" class="radius-5px">
          </div>
        </div>
      </div>
    </div>
<!-- Cierre Exposiciones & Concursos-->
  </div>

<!--Espacio-->
<section class="container-fluid"></section>
  <!--Fin Espacio-->
    &emsp;

<!-- Inicio Textos -->
  <section class="container-fluid autor">
    <h1>Textos</h1>
  </section>
<!-- Contenedor General-->
  <div class="container paginacompleta3">
    <div class="row">
        <?php
          $arg = array(
            'post_type'		 => 'texto_type',
            'posts_per_page' => 3
          );
          $get_arg = new WP_Query( $arg );
          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
          <div class="col-md-4 box1 cajablanca">
            <span id="demotext"><h1><?php the_title() ?></h1></span>
            <?php the_time('F jS, Y'); ?>
            <p><?php the_excerpt() ?></p>
            <a class="btn button_vdoblege" href="<?php echo get_post_permalink(); ?>">Seguir leyendo</a>
          </div>
        <?php } wp_reset_postdata();?>
    </div>
<!-- Cierre Exposiciones & Concursos-->
  </div>
  &emsp;

<!--Espacio-->
<section class="container-fluid"></section>
<!--Fin Espacio-->

<?php get_footer(); ?>
