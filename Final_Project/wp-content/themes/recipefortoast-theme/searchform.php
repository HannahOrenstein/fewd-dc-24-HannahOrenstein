<?php
/*
Template Name: Search Page
*/
?>

<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();


?>

<?php get_search_form(); ?>


<?php get_footer();
