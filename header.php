<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Carrousel CSS
    <link rel="stylesheet" href="css/carrousel-style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">-->

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>



    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-azul">
      <div class="container">

        <!-- Funcion para utilizar el Logo cargado en Wordpress -->

          <?php
            if(function_exists('the_custom_logo')){
              $custom_logo_id = get_theme_mod( 'custom_logo');
              $logo = wp_get_attachment_image_src( $custom_logo_id );
            }
           ?>

          <div class="texto-marca">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" > <img src="<?php echo $logo[0] ?>   " class="navbar-brand" id="titulo-marca" > </a>
          <div class="textos-marca">


          <h4 id="marca-linea-1">Asociación Judicial Bonaerense</h4>
          <h5 id="marca-linea-2">Departamental San Isidro</h3>
          </div>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


                  <?php
                      wp_nav_menu( array(
                          'theme_location'    => 'menu-principal',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'navbarSupportedContent',
                          'menu_class'        => 'nav navbar-nav mr-auto',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
            ?>

       </div>
    </nav>
