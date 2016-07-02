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

<!--Article Image-->
<section class="hero">
	<div class="row">
		<div class="col-md-12">
		<?php 

		$image = get_field('image');

		if( !empty($image) ): ?>

			<img class="hero" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><

		<?php endif; ?>
		</div>
<!--Title, Author and Date-->
		<div class="row">
			<div class="col-md-8 col-md-offset-1 rft_articleTitle"><h1><?php the_title(); ?></h1></div>
		</div>
	</div>
</section>
<article class="rft_article">
		<div class="col-md-11 col-md-offset-1">
			<h2 class="rft_article author">By 
			<?php the_field('author_name'); ?>
			&#x02016; <?php 
				$date = get_field('date', false, false);
				$date = new DateTime($date);?>
				<?php echo $date->format('M j, Y'); ?></h2>
		</div>
	<div class="row">
		<div class="rft_article col-md-7 col-md-offset-2">

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
