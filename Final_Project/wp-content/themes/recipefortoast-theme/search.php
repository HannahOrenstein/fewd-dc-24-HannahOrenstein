<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();

?>
Some piece of text

You searched for: "<?php echo get_search_query();?>"
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
<?php


get_footer();

