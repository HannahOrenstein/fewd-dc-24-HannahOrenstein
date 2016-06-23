<?php
// Errors
ini_set('display_startup_errors',1); ini_set('display_errors',1); error_reporting(-1);

// Stylesheets and Scripts


	wp_enqueue_script('main-js', get_stylesheet_directory(), '/main.js', array('jquery'), true );
