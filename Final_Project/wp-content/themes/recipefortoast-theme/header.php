<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php /* Load font <link>s here */ ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo bloginfo('name'); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="https://use.typekit.net/rix0ith.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>



