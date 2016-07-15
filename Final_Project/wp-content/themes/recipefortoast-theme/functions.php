<?php
// Errors
ini_set('display_startup_errors',1); ini_set('display_errors',1); error_reporting(-1);

// Stylesheets and Scripts

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', '//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, false );
	wp_enqueue_style ('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style( 'themestyle', get_stylesheet_uri() );
	wp_enqueue_script('typekit', 'https://use.typekit.net/rix0ith.js', array('jquery'), null, false );
	wp_enqueue_script('main-js', get_template_directory_uri(). '/main.js', array('jquery'), true );
