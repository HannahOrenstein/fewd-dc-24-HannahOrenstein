<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php /* Load font <link>s here */ ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo bloginfo('name'); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://use.typekit.net/rix0ith.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
     <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
    <header>
        <nav class="navbar navbar-default mainNavigation">
            <div class="container-fluid">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                          <a class="navbar-brand logo" href="http://www.reciepfortoast.com">Recipe for Toast</a>
                        </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                              <li class=><a href="http://www.recipefortoast.com/features">Features<span class="sr-only">(current)</span></a></li>
                              <li><a href="http://www.recipefortoast.com/recipes">Recipes</a></li>
                              <li><a href="http://www.recipefortoast.com/about">About</a></li>  
                        </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                         <input type="text" class="form-control" placeholder="Search">
                        </div>
                     <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                </div>
            </nav>
        </div>
    </header>
<body <?php body_class(); ?>>







