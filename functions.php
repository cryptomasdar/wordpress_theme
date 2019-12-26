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
add_theme_support( 'widgets' );

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

/*
 * Register Sidebar
 * */

function my_sidebars(  ){ 
	register_sidebar( 
		array( 
				'name' => 'Page Sidebar',
				'id' => 'page-sidebar',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			 )
	 );

	register_sidebar( 
		array( 
				'name' => 'Blog Sidebar',
				'id' => 'blog-sidebar',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			 )
	 );
} 

add_action( 'widgets_init', 'my_sidebars' );


/*
 * Custom Post Type
 * */

function cars_post_type(  )
{ 
	$args = array( 
		'labels' => array( 'name' => 'Cars', 'singular_name', 'Car' ),
		'hierrachical' => true,
		'public' => true,
		'menu_icon' =>'dashicons-welcome-view-site',
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' )
   	);

	register_post_type( 'cars', $args );
}

add_action( 'init', 'cars_post_type' );

/*
 * Taxonomy
 * */

function cars_taxonomy(  )
{ 
	$args = array( 
		'labels' => array( 'name' => 'Brands', 'singular_name' => 'Brand' ),
		'public' => true,
		'hierrachical', true
   	);
	register_taxonomy( 'brands', array( 'cars' ), $args );
}

add_action( 'init', 'cars_taxonomy' );
?>
