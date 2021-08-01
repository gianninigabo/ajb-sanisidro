<?php


$args = [
	'posts_per_page'         => 3,
	'post_type'              => 'post',
	'update_post_meta_cache' => false,
	'update_post_term_cache' => false,
  'post__in' => get_option('sticky_posts'),
];

$post_query = new \WP_Query( $args );
?>
<div class="owl-carousel slide-one-item">
	<?php
	if ( $post_query->have_posts() ) :
		while ( $post_query->have_posts() ) :
			$post_query->the_post();
			?>
			<div class="d-md-flex testimony-29101 align-items-stretch">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ));
				}
				?>
				<div class="card-body">
					<?php the_title( '<h3 class="titulo-dark">', '</h3>' ); ?>
					<?php the_excerpt(); ?>
					<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-outline-secondary">
						<?php esc_html_e( 'Seguir leyendo'); ?>
					</a>
				</div>
			</div>
		<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>
</div>
