<?php 
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' ); 
	function register_menus() {
  		register_nav_menu(
  			array(
  				'strategy-menu' => __( 'Strategy Menu' )
  			)
  		);
  }
	add_action( 'init', 'register_menus' );

function custom_excerpt_length( $length ) {
  return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');