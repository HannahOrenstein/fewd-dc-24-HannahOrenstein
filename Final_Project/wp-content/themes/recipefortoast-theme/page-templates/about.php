<?php
/*
Template Name: About
*/?>
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
<div class="row">
	<div class="col-md-8 col-md-offset-1"><h1 class="about"><?php the_title(); ?></h1></div>
</div>
<div class="row">
		<div class="rft_article col-md-7 col-md-offset-2">
		<?php the_content(); ?>
		</div>
	</div>
</body>
<?php 
		    }

}else{

		    echo 'Not Found.';

}
get_footer();