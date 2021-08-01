<div class="col-lg-9 nota">
  <h2 class="titulo-nota mb-5"> <?php the_title(); ?></h2>

      <span href="#" class="link-secondary"><?php the_category( ' - ' );  ?></span>
      <hr>

  <?php
    if(has_post_thumbnail()){
      the_post_thumbnail( 'medium', array( 'class' => 'imagen-nota mb-4' ));
    }
  ?>

<p class="fecha"> <?php the_time( 'l, j \d\e F \d\e Y' );  ?> </p>


<?php the_content(); ?>


      <div class="etiquetas container afiliate-banner mb-4">
        <h2 class="titulo-etiquetas mb-4">Etiquetas</h2>
        <div class="contenedor-etiquetas">
          <?php
          the_tags('<span class="etiq badge badge-secondary">','</span><span class="etiq badge badge-secondary">', '</span>' );
          ?>



        </div>
      </div>

      <?php
              if ( comments_open() || get_comments_number() ) :
              comments_template();
              endif;
       ?>
    </div>
