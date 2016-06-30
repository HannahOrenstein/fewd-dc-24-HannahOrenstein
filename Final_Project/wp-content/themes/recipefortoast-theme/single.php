<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();
		if ( have_posts() ) {
					    while ( have_posts() ) {
					     the_post();


?>

<section class="hero">
	<div class="row">
		<div class="col-md-12">
		<?php 

		$image = get_field('image');

		if( !empty($image) ): ?>

			<img class="articleImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>
		</div>
		<div class="rft_articleTitle"><h1><?php the_title(); ?></h1></div>
	</div>
</section>
<article class="rft_article">
		<div><h2 class="author">
		<?php the_field('author_name'); ?>
			
		</h2></div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

		<?php
		// Loop


				the_content();


		
		?>
		</div>
	</div>
</article>
<!-- page.php -->
<?php 
		    }

}else{

		    echo 'Not Found.';

}
get_footer();
