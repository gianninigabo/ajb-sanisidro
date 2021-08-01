<?php get_header(); ?>



          <?php get_template_part( 'template-parts/posts-carousel') ?>




            <div class="jumbotron afiliate-banner">
              <h2 class="afiliate-titulo">¿Estás afiliado a la AJB SI?</h1>
              <a class="btn btn-primary btn-lg" id="boton-afiliate"href="https://api.whatsapp.com/send?phone=5491169118352&text=Hola%20estoy%20interesado%20en%20afiliarme" role="button">Quiero afiliarme <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg></a>
              </p>
            </div>

              <div class="contenedor-notas container">

            <?php

              // Este código excluye a los sticky post:

                $the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );
                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                  ?>

                  <div class="card" style="width: 18rem;">
                    <a href=" <?php the_permalink() ?> ">

                      <?php
                        if(has_post_thumbnail()){
                          the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ));
                        }
                      ?>


                      <div class="card-body">
                        <h2 class="titulo-nota-feed"> <?php the_title(); ?></h2>
                        <p class="fecha"> <?php the_time( 'l, j \d\e F \d\e Y' );  ?> </p>
                        <?php the_excerpt(); ?>

                      </div>
                    </a>
                  </div>

                <?php  endwhile;
               endif;

              ?>

                </div>
                <div class="container contenedor-notas">
                <a href="http://localhost/ajb-san-isidro/noticias"> <button type="button" class="btn btn-outline-secondary" id="publicaciones-anteriores-boton" name="button">Publicaciones anteriores</button></a>
                </div>











          <!--CIERRA Notas secundarias  -->


          <!--Abre Videos  -->
          <div class="container videos-seccion">
            <h1 class="titulo-videos">Videos</h1>
            <div class="videos-menu">


                  <?php
                        $args = array(
                        'post_type'      => 'post',
                        'category_name'  => 'videos',
                        'posts_per_page' => 3,
                        'facetwp' => true,
                    );
                        $query = new WP_Query( $args );
                    ?>

                      <?php if ( $query->have_posts() ) : while ( $query-> have_posts() ) : $query-> the_post(); ?>


                        <?php
                          if(has_post_thumbnail()){
                            the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ));
                          }
                        ?>

                                <?php
                                    endwhile;
                                    wp_reset_postdata(); // this should be inside if - there is no need to rested postdata if the_post hasn’t been called.
                                    endif;
                                ?>
              <!--Abre Videos
              <iframe class="video-iframe" width="560" height="315" src="https://www.youtube.com/embed/M1xaJSCf9bY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe class="video-iframe" width="560" height="315" src="https://www.youtube.com/embed/M1xaJSCf9bY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe class="video-iframe" width="560" height="315" src="https://www.youtube.com/embed/M1xaJSCf9bY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              -->
            </div>
          </div>
          <!--Cierra Videos  -->


          <div class="container jumbotron afiliate-banner" >
            <h2 class="afiliate-titulo">Comunicate con la AJB</h1>
            <a class="btn btn-primary btn-lg" id="boton-afiliate"href="#" role="button">Enviar Whatsapp <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>
            </p>
          </div>


          <div class="container normativa">
            <h2 class="titulo-normativa"> Normativa </h2>
            <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
          </svg> Estatuto para el personal del Poder Judicial - AC 2300 </a>
                        <a href="#" class="list-group-item list-group-item-action"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
          </svg> Régimen de ingreso, asistencia y licencias del Poder Judicial - AC 1865</a>

            </div>


          </div>



    <!-- Footer -->
    <?php get_footer(); ?>
