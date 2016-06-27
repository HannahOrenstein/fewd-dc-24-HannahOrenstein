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
			<p>Avocado toast has come to define what makes food trends this decade: It’s healthy and yet ever-so-slightly indulgent. It can be made vegan and gluten-free. It’s so Instagrammable that #avocadotoast has over 100,000 posts. And most important of all: It is wholeheartedly endorsed by Gwyneth Paltrow.</p>

			<p>Tracking down the origin of avocado toast is not as simple as tracing back the Chinese chicken salad trend to Wolfgang Puck’s Chinois. It’s not in “The Joy of Cooking” or some other go-to master cookbook, mainly because it does not require a recipe. In areas where avocados are commonly found, like Mexico, California and Australia, people have always eaten the fruit on corn tortillas or toast. Mexican chef Pati Jinich joked that the Latin American version is avocado “tostada,” since the tortilla might be toasted.</p>

			<p>Avocado toast as we know it today started to take hold in the early 1990s. The first recorded sighting on a menu might be in 1993 when Sydney chef Bill Granger started serving it at his cafe, bills. Then in 1999, British chef Nigel Slater suggested a smashed avocado on toast recipe in his column for the Guardian.</p>

			<p>In the United States, New York's Café Gitane is often cited as the originator of the dish, and can be credited as the source for many copycats — especially the ones that are often seen on Instagram, perfectly dotted with red pepper flakes.  Café Gitane owner Luc Levy and Chef Chloe Osborne said the dish has definitely been on the menu since 2006, but it could have been served even earlier than that.  As a child in Australia, Osborne would visit a family friend in Queensland, where she was served avocado on toast.</p>
		</div>
	</div>
</section>
<?php


get_footer();

