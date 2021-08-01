<div class="container">
      <div class="well">
          <div class="media">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="pull-left">
              <img class="media-object img-thumbnail" src=" <?php the_post_thumbnail_url('medium'); ?>">
            </a>
      		<div class="media-body">
        		<a href="<?php echo esc_url( get_the_permalink() ); ?>"><h4 class="media-heading"><?php the_title(); ?>  </h4></a>
            <p class="fecha fecha-archivo"> <?php the_time( 'l, j \d\e F \d\e Y' );  ?> </p>
              <?php the_excerpt() ?>
                <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-outline-secondary">
      						<?php esc_html_e( 'Seguir leyendo'); ?>
      					</a>
           </div>
        </div>
      </div>
    <hr>

</div>
