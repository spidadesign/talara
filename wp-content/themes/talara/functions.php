<?php 
	
	add_theme_support( 'menus' ); 
	function register_menus() {
  		register_nav_menu(
  			array(
  				'strategy-menu' => __( 'Strategy Menu' )
  			)
  		);
  }
	add_action( 'init', 'register_menus' );