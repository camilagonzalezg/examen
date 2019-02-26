<!-- Footer-->
    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logofooter">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo2" src="<?php echo get_template_directory_uri(); ?>/img/sitio/logo_blanco.png" alt="">
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 formulariocss3">
              <div class="formulariocss">
                <form class="form-horizontal" action="" method="post">
                  <fieldset class="formulariocss2">
                  <h2>Contáctame</h2>
                  <br>
                  <!-- Nombre input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Nombre</label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Tu nombre" class="form-control">
                      </div>
                  </div>

                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email">E-mail</label>
                    <div class="col-md-9">
                      <input id="email" name="email" type="text" placeholder="Tu email" class="form-control">
                    </div>
                  </div>

                  <!-- Cuerpo mensaje -->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Tu mensaje</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="message" name="message" placeholder="¿De qué quieres hablar?" rows="5"></textarea>
                    </div>
                  </div>

                  <!-- Acciones del Form -->
                  <div class="form-group">
                    <div class="col-md-12 text-right">
                      <button type="submit" class="btn btn-default btn-md">Enviar!</button>
                    </div>
                  </div>
                </fieldset>
                </form>
              </div>
            </div>

            <div class="icons">
              <div class="row" class="formulariocss3">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 iconos colorcss1">
                  <a href="https://www.facebook.com/VDoblege/"><i class="fab fa-facebook fa-4x colorcss2"></i></a>
                  <a href="https://www.instagram.com/VDoblege"><i class="fab fa-instagram fa-4x colorcss2"></i></a>
                  <a href="https://www.deviantart.com/madniaco/"><i class="fab fa-deviantart fa-4x colorcss2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<!-- Termino Footer-->
    <?php wp_footer() ?></body></html>
