<?php

add_action( 'wp_enqueue_scripts', 'styles' );
add_action('wp_footer', 'scripts');
add_action('after_setup_theme', 'after_setup');
add_action('init', 'my_custom_init');

remove_filter( 'the_content', 'wpautop' );

function styles(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
}

function scripts(){
	wp_enqueue_script('libs', get_template_directory_uri() . '/assets/js/libs.min.js', array(), '', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
}

function after_setup(){
    register_nav_menu('top', 'header menu');
}

function my_custom_init(){
	register_post_type('practice', array(
		'labels'             => array(
			'name'               => 'Practice', // Основное название типа записи
			'singular_name'      => 'Practice', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new practice',
			'edit_item'          => 'Edit practice',
			'new_item'           => 'New practice',
			'view_item'          => 'View practice',
			'search_items'       => 'Search practice',
			'not_found'          =>  'Practice not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page practice'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );

	register_post_type('practice_ru', array(
		'labels'             => array(
			'name'               => 'Practice', // Основное название типа записи
			'singular_name'      => 'Practice', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new practice',
			'edit_item'          => 'Edit practice',
			'new_item'           => 'New practice',
			'view_item'          => 'View practice',
			'search_items'       => 'Search practice',
			'not_found'          =>  'Practice not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page practice ru'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );

	register_post_type('practice_ua', array(
		'labels'             => array(
			'name'               => 'Practice', // Основное название типа записи
			'singular_name'      => 'Practice', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new practice',
			'edit_item'          => 'Edit practice',
			'new_item'           => 'New practice',
			'view_item'          => 'View practice',
			'search_items'       => 'Search practice',
			'not_found'          =>  'Practice not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page practice ua'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );

	register_post_type('practice_fr', array(
		'labels'             => array(
			'name'               => 'Practice', // Основное название типа записи
			'singular_name'      => 'Practice', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new practice',
			'edit_item'          => 'Edit practice',
			'new_item'           => 'New practice',
			'view_item'          => 'View practice',
			'search_items'       => 'Search practice',
			'not_found'          =>  'Practice not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page practice fr'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );
	
	register_post_type('industry', array(
		'labels'             => array(
			'name'               => 'Industry', // Основное название типа записи
			'singular_name'      => 'industry', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new industry',
			'edit_item'          => 'Edit industry',
			'new_item'           => 'New industry',
			'view_item'          => 'View industry',
			'search_items'       => 'Search industry',
			'not_found'          =>  'industry not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page industry'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );
	
	register_post_type('industry_ru', array(
		'labels'             => array(
			'name'               => 'Industry', // Основное название типа записи
			'singular_name'      => 'industry', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new industry',
			'edit_item'          => 'Edit industry',
			'new_item'           => 'New industry',
			'view_item'          => 'View industry',
			'search_items'       => 'Search industry',
			'not_found'          =>  'industry not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page industry ru'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );
	
	register_post_type('industry_ua', array(
		'labels'             => array(
			'name'               => 'Industry', // Основное название типа записи
			'singular_name'      => 'industry', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new industry',
			'edit_item'          => 'Edit industry',
			'new_item'           => 'New industry',
			'view_item'          => 'View industry',
			'search_items'       => 'Search industry',
			'not_found'          =>  'industry not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page industry ua'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );
	
	register_post_type('industry_fr', array(
		'labels'             => array(
			'name'               => 'Industry', // Основное название типа записи
			'singular_name'      => 'industry', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new industry',
			'edit_item'          => 'Edit industry',
			'new_item'           => 'New industry',
			'view_item'          => 'View industry',
			'search_items'       => 'Search industry',
			'not_found'          =>  'industry not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Home page industry fr'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    ) );

}

?>