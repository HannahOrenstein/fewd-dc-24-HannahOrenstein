<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();

?>

<!-- Your HTML code goes here -->

	<section class="featuredArticle" "clearfix">
		<div class="featuredArticleImage">
			<div class="titleBox">
				<h1>Avocado Toast</h1>
				<h2>How A Humble Dish Took over the Internet</h2>
				<h3 class="author">By Jayne W. Orenstein</h3>
			</div>
		</div>
	</section>

	<section class="recentArticles">
		<div class="articleBox" "clearfix">
			<div class="articlePreviewLeft">
				<h1>Article Title 1</h1>
				<h3 class="author">By. Some Person</h3>
				<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>

			</div>
			<div class="articleImageRight"><img src="http://media.guestofaguest.com/t_article_content/wp-content/uploads/2014/01/69ada40a795911e390220ea2e16bf06c_81-300x300.jpg"/></div>
		</div>
		<div class="articleBox" "clearfix">
			<div class="articleImageLeft" "left"><img src="http://media.guestofaguest.com/t_article_content/wp-content/uploads/2014/01/69ada40a795911e390220ea2e16bf06c_81-300x300.jpg"/></div>
			<div class="articlePreviewRight">
				<h1>Article Title 1</h1>
				<h3 class="author">By. Some Person</h3>
				<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
			</div>
		</div>
		<div class="articleBox" "clearfix">
			<div class="articlePreviewLeft">
				<h1>Article Title 1</h1>
				<h3 class="author">By. Some Person</h3>
				<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
			</div>
			<div class="articleImageRight"><img src="http://media.guestofaguest.com/t_article_content/wp-content/uploads/2014/01/69ada40a795911e390220ea2e16bf06c_81-300x300.jpg"/></div>
		</div>
	</section>

	<section class="recipes" "clearfix">
		<div class="recipeHeader"><h1 class="recipes">Recipes</h1></div>
		<div class="recipeSlider">
			<ul>
				<li class="recipes"><div class="recipeImage><img src="http://media.guestofaguest.com/t_article_content/wp-content/uploads/2014/01/69ada40a795911e390220ea2e16bf06c_81-300x300.jpg"/><h3>Recipe Title</h3></div></li>
				<li class="recipes"><div class="recipeImage><img src="http://media.guestofaguest.com/t_article_content/wp-content/uploads/2014/01/69ada40a795911e390220ea2e16bf06c_81-300x300.jpg"/><h3>Recipe Title</h3></div></li>
				<li class="recipes"><div class="recipeImage><img src="http://media.guestofaguest.com/t_article_content/wp-content/uploads/2014/01/69ada40a795911e390220ea2e16bf06c_81-300x300.jpg"/><h3>Recipe Title</h3></div></li>
			</ul>
		</div>
	</section>
<?php 

get_footer();

