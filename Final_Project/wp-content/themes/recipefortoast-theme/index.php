<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();

?>
<section class="hero">
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<?php


// Loop
if ( have_posts() ) :

    while ( have_posts() ) : the_post();

		the_title();
		the_content();

    endwhile;

else :

    echo 'Not Found.';

endif;

		?>
		</div>
	</div>
</section>
<?php


get_footer();

