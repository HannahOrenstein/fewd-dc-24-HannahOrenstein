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

						<?php
						    $featuredArticle = new WP_Query();
						    $featuredArticle->query('posts_per_page=1&category_name=featured');
						?>
						<?php while ($featuredArticle->have_posts()) : $featuredArticle->the_post(); ?>
			
						  <div class="featuredArticleImage"><?php 

								$image = get_field('image');

								if( !empty($image) ): ?>

									 <a href="<?php the_permalink() ?>" rel="bookmark"><img class="hero" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
							</div><!--article image -->
							    		
							    		<div class="titleBox">
							    		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							    		<h2><?php the_excerpt(); ?></h2>
							    		</div>
							   
						<?php endif; ?>
						<?php endwhile; ?>
								
		</div><!--end col-lg-12-->
	</section><!--end featured article section-->

<section class="recentArticles">
<div class="row">
<div class="col-sm-12">
	<span><h3 class="title">Recent Articles</h3></span>
<ul>
						<?php
						    $recentPosts = new WP_Query();
						    $recentPosts->query('posts_per_page=2&category_name=article');
						?>
						<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
						<li class="col-sm-6 articlePreview">
						    	

						    <div class="imageBox"><?php 

								$image = get_field('image');

								if( !empty($image) ): ?>

									<a href="<?php the_permalink() ?>" rel="bookmark"><img class="previewImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>

							    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							    <p><?php the_time( get_option( 'date_format' ) ); ?></p>
							    <p class="preview"><?php the_excerpt(); ?></p>

	  					</li>
						<?php endif; ?>
						<?php endwhile; ?>
						</ul>
					</div>
					
</div>

<section class="recentArticles">
<div class="row">
<div class="col-sm-12">
		<span><h3 class="title">Recipes</h3></span>
<ul>
						<?php
						    $recentPosts = new WP_Query();
						    $recentPosts->query('posts_per_page=3&category_name=recipe');
						?>
						<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>


						<li class="col-sm-4 articlePreview">
						    	

						    <div class="imageBox"><?php 

								$image = get_field('image');

								if( !empty($image) ): ?>

									<a href="<?php the_permalink() ?>" rel="bookmark"><img class="previewImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>

							    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							    <p><?php the_time( get_option( 'date_format' ) ); ?></p>
							    <p class="preview"><?php the_excerpt(); ?></p>

	  					</li>
						<?php endif; ?>
						<?php endwhile; ?>
						</ul>
					</div>
					
</div>
</section>
	

<?php 

get_footer();

