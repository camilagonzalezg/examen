<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
  <!-- Snippet para logo personzalizado -->
  <?php
  	$custom_logo_id = get_theme_mod( 'custom_logo' );
  	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <!-- Fin Snippet para logo personzalizado -->

  <!--Nav Bar-->
  <nav class="navbar navbar-default navbar_vdoblege">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo $logo[0]; ?>" alt=""> </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
          <li><a href="<?php echo get_page_link(148); ?>">Doblege</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portafolio<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo get_page_link(19); ?>">Trabajos</a></li>
                  <li><a href="<?php echo get_page_link(195); ?>">Expos & Concursos</a></li>
                  <li><a href="<?php echo get_page_link(197); ?>">Textos</a></li>
                </ul>
          </li>
          <li><a href="<?php echo get_page_link(191); ?>">Contacto</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!--Termino Nav Bar-->
