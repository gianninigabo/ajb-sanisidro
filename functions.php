<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




function tema_ajb_agregar_css_js(){

  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style('carrousel', get_template_directory_uri() . '/css/carrousel-style.css', false, '1.1', 'all' );
  wp_enqueue_style('carrouselo', get_template_directory_uri() . '/css/owl.carousel.min.css', false, '1.1', 'all' );
  wp_enqueue_style('master', get_template_directory_uri() . '/css/master.css', false, '1.1', 'all' );


  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'carouseles', get_template_directory_uri() . '/js/carrousel-main.js', array ( 'jquery' ), 1.1, true);
  /*wp_enqueue_script( 'script', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/carrousel-main.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'poper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ('jquery'), 1.14, true);*/

  /*JS personalizado */
  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('script'), '1.0', true );

}
add_action('wp_enqueue_scripts','tema_ajb_agregar_css_js');



function tema_ajb_setup() {


			if ( function_exists( 'add_theme_support' ) ) {
		    add_theme_support( 'post-thumbnails' );
		    set_post_thumbnail_size( 400, 4300, true ); // default Featured Image dimensions (cropped)
		    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
		 }



		 add_theme_support( 'title-tag' );
		 add_theme_support( 'custom-logo');

}

add_action( 'after_setup_theme', 'tema_ajb_setup' );




// sidebar

function tema_ajb_widgets(){

  register_sidebar(array(
            'id'            => 'widget-derecha',
            'name'          => __( 'Ultimas Noticias' ),
            'description'   => __( 'Una barra con las ultimas noticias' ),
            'before_widget' => '<div class="recientes">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="mb-4 titulo-ultimas-publicaciones">',
            'after_title'   => '</h2>',


  ));
}

add_action( 'widgets_init','tema_ajb_widgets'  );

//MENU


function tema_ajb_register_my_menus() {

	$locations = array(
		'menu-principal'=> "Menu de navegación",
		'footer' =>	"Footer Menu"

	);

	register_nav_menus($locations);

 }

 add_action( 'init', 'tema_ajb_register_my_menus' );

 function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __( '« Anterior' ),
            'next_text'    => __( 'Siguiente »' ),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<div class="pagination"><ul class="pagination">';

        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></div>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}





 ?>
