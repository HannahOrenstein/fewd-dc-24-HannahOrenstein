jQuery(document).ready(function () {

	jQuery("p.readmore").on("click",function(e){
		e.preventDefault();
		jQuery("#show-this-on-click").slideDown();
		jQuery("p.readmore").hide();
		jQuery("p.readless").show();
	});

	jQuery("p.readless").on("click",function(e){
		e.preventDefault();
		jQuery("#show-this-on-click").slideUp();
		jQuery("p.readmore").show();
		jQuery("p.readless").hide();
	});

	jQuery("a.learnmore").on("click",function(e){
		e.preventDefault();
		jQuery("#learnmoretext").slideDown();
        jQuery(".learnmore").hide();
	});
});

