<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();

?>

<!-- Your HTML code goes here -->



	<section class="featuredArticle row">
		<div class="col-lg-12">
		<div class="featuredArticleImage">
			<div class="titleBoxWrap">
				<div class="titleBox">
					<h1>Avocado Toast</h1>
					<h2>How A Humble Dish Took over the Internet</h2>
					<h3 class="author">By Jayne W. Orenstein</h3>
				</div>
			</div>
		</div>
		</div>
	</section>

<section class="recentArticles">
<div class="row">

						<?php
						    $recentPosts = new WP_Query();
						    $recentPosts->query('posts_per_page=3');
						?>
						<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
					<div class="col-md-12">
						<div class="row">
						<ul>
							<li><div class="col-md-4 articleImage">
						    	<?php 

								$image = get_field('image');

								if( !empty($image) ): ?>

									<img class="hero" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
						<div class="col-md-4 articlePreview">
							    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							    <h3 class="author"><?php the_field('author_name'); ?></h3>
							    <p><?php the_time( get_option( 'date_format' ) ); ?></p>
							    <p class="preview"><?php the_field('article_preview_text'); ?></p>
	  					</div></li>
						<?php endif; ?>
						<?php endwhile; ?>
						</ul>
					</div>
					</div>
					</div>
					
</div>
</section>
		<!--<div class="col-md-12">
			<div class="articleBox row">
		  			<div class="articlePreviewLeft col-sm-6 col-md-8">
		  				<h1>Article Title 1</h1>
						<h3 class="author">By. Some Person</h3>
						<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
		  			</div>
		  			<div class="articleImageRight col-md-4"></div>
			</div>
			<div class="articleBox row">
		  			<div class="articleImageLeft col-md-4">
		  				<h1>Article Title 1</h1>
						<h3 class="author">By. Some Person</h3>
						<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
					</div>
					<div class="articlePreviewRight col-sm-6 col-md-8"></div>
			</div>
			<div class="articleBox row">
		  			<div class="articlePreviewLeft col-sm-6 col-md-8">
		  				<h1>Article Title 1</h1>
						<h3 class="author">By. Some Person</h3>
						<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
		  			</div>
		  			<div class="articleImageRight col-md-4"></div>
			</div>
		</div>
	</section>-->

<!--	<section class="recentArticles row">
		<div class="articleBox col-xs-12 col-sm-6 col-md-8">
			<div class="articlePreviewLeft">
				<h1>Article Title 1</h1>
				<h3 class="author">By. Some Person</h3>
				<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>

			</div>
			<div class="articleImageRight col-xs-6 col-md-4"></div>
		</div>
		<div class="articleBox row">
			<div class="articleImageLeft col-md-4"></div>
			<div class="articlePreviewRight col-xs-12 col-sm-6 col-md-8">
				<h1>Article Title 1</h1>
				<h3 class="author">By. Some Person</h3>
				<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
			</div>
		</div>
		<div class="articleBox row">
			<div class="articlePreviewLeft col-xs-12 col-sm-6 col-md-8">
				<h1>Article Title 1</h1>
				<h3 class="author">By. Some Person</h3>
				<p class="preview">Here is some preview text of the article Here is some preview text of the article</p>
			</div>
			<div class="articleImageRight col-xs-6 col-md-4"></div>
		</div>
	</section>-->

	<section class="recipes clearfix">
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

