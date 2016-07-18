<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php /* Load font <link>s here */ ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo bloginfo('name'); ?></title>
     
     
    <?php wp_head(); ?>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<div class="rft">
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
                          <a class="navbar-brand logo" href="http://www.recipefortoast.com">Recipe for Toast</a>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                              <li><a href="http://www.recipefortoast.com/features">Features<span class="sr-only">(current)</span></a></li>
                              <li><a href="http://www.recipefortoast.com/recipes">Recipes</a></li>
                              <li><a href="http://www.recipefortoast.com/about">About</a></li>  
                        </ul>
                        <div class="form-group searchbar">
                         <form class="navbar-form navbar-left" role="search" action="/">
                           <div class="form-group">
                             <input type="text" name="s" id="s" class="form-control" placeholder="Search">
                           </div>
                         <button type="submit" class="btn rft_btn">Submit</button>
                        </form>
                        </div>
                  </div>
                </div>
            </nav>
    </header>
<body <?php body_class(); ?>>







