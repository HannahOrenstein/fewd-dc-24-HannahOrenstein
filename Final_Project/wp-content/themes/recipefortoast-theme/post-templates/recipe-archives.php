<?php
/*
Template Name: Recipe Archive
*/?>
<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();

?>

<!-- Your HTML code goes here -->
<section class="recipeArchive row">
<div class="col-md-11 col-md-offset-2">
<span><h3 class="archiveTitle">Articles</h3></span>
<ul>
						<?php
						    $recipePosts = new WP_Query();
						    $recipePosts->query('posts_per_page=9&category_name=recipe');
						?>
						<?php while ($recipePosts->have_posts()) : $recipePosts->the_post(); ?>
						<div class="row">
						<li class="col-md-11 recipeArchivePreview">
						    	

						    <div class="imageBox"><?php 

								$image = get_field('image');

								if( !empty($image) ): ?>

									<a href="<?php the_permalink() ?>" rel="bookmark"><img class="previewImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
							</div><!--end imageBox-->

							    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							    <p><?php the_time( get_option( 'date_format' ) ); ?></p>
							    <p class="preview"><?php the_field('article_preview_text'); ?></p>

	  					</li>
						</div>
						<?php endif; ?>
						<?php endwhile; ?>
						</ul>

					
</div>
</section>
</body>
<?php 

get_footer();