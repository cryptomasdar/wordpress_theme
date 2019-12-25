<?php 

/*
 * Loading Styles
 * */

function load_css(  )	// Loading bootstrap Styles
{ 
	wp_register_style( 'bootstrap_css', get_template_directory_uri(  ). '/css/bootstrap.min.css', array(  ), false, 'all' );
	/*
	 wp_register_style function accepte these arguments name, url, dependencies Libraries use array if none, version false, media 
	*/
	wp_enqueue_style( 'bootstrap_css' );
	wp_register_style( 'main', get_template_directory_uri(  ). '/css/main.css', array(  ), false, 'all' );
	wp_enqueue_style( 'main' );
}

add_action( 'wp_enqueue_scripts', 'load_css' ); 	// Hook the load_css function ( be on website or run )

/*
 * Loading Scripts
 * */

function load_js(  )	// Loading bootstrap Styles
{ 
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstrap_js', get_template_directory_uri(  ). '/js/bootstrap.min.js', 'jquery', false, true );
	/*
	 wp_register_style function accepte these arguments name, url, dependencies Libraries use array if none, version false, put script on foot true or false on top
	*/
	wp_enqueue_script( 'bootstrap_js' );
}

add_action( 'wp_enqueue_scripts', 'load_js' ); 	// Hook the load_js function ( be on website or run )

/*
 * Theme Options
 * */

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/*
 * Menus
 * */
register_nav_menus( 
	array( 
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location'
	)
);

// Custom Image Sizes
add_image_size( 'blog-large', 800, 400, true );
add_image_size( 'blog-small', 300, 200, true );

?>


