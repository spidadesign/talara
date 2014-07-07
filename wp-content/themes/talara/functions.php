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


add_action('init', 'type_rewrite');
function type_rewrite() {
  global $wp_rewrite;
  //add_rewrite_tag('%borough%','([^&]+)');
  add_rewrite_rule('team/([^/]+)/?','index.php?pagename=team&type=$matches[1]','top');
  $wp_rewrite->flush_rules(false);
}
add_filter( 'query_vars', 'type_query_vars' );

function type_query_vars($query_vars){
  $query_vars[1] = 'type';
  return $query_vars;
}