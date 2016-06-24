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
			<div class="titleBoxWrap">
				<div class="titleBox">
					<h1>Avocado Toast</h1>
					<h2>How A Humble Dish Took over the Internet</h2>
					<h3 class="author">By Jayne W. Orenstein</h3>
				</div>
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
			<div class="articleImageRight"></div>
		</div>
		<div class="articleBox" "clearfix">
			<div class="articleImageLeft" "left"></div>
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
			<div class="articleImageRight"></div>
		</div>
	</section>

	<section class="recipes" "clearfix">
		<div class="recipesHeader"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/RECIPES_Header_Homepage.png" alt text="recipes" class="center"></div>
		<div class="recipeSlider">
			<ul>
				<li class="recipes"><div class="recipeImage"></div><h3>Recipe Title</h3></li>
				<li class="recipes"><div class="recipeImage"></div><h3>Recipe Title</h3></li>
				<li class="recipes"><div class="recipeImage"></div><h3>Recipe Title</h3></li>
			</ul>
		</div>
	</section>
<?php 

get_footer();

