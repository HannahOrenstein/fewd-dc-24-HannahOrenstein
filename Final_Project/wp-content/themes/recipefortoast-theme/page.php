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
<<<<<<< HEAD
=======
<h1>Test</h1>
<?php
// Loop
if ( have_posts() ) :
>>>>>>> origin/master


<?php the_title(); ?>

<section class="hero">
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

		<?php
		// Loop


				the_content();


		
		?>
		</div>
	</div>
</section>

<!-- page.php -->
<?php 
		    }

}else{

		    echo 'Not Found.';

}
get_footer();

