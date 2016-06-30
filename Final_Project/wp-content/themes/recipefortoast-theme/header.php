<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php /* Load font <link>s here */ ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo bloginfo('name'); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="https://use.typekit.net/rix0ith.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php wp_head(); ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
</head>
    <header>
       <div class="chevron">
            <nav class="header">
                <div class="container col-sm-12">
                    <ul>
                        <li class="col-sm-3 nav"><a href="http://www.recipefortoast.com/">Home</a></li>
                        <li class="col-sm-3 nav"><a href="http://www.recipefortoast.com/recipes">Recipes</a></li>
                        <li class="col-sm-3 col-md-offset-3 nav"><a href="http://www.recipefortoast.com/about">About</a></li>
                    </ul>
                </div>
            </nav>
      </div>
    </header>
<body <?php body_class(); ?>>







