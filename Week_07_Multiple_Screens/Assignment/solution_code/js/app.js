jQuery(document).ready(function(){
	jQuery("#hamburger").click(function(){

		if(jQuery(this).hasClass('active')){
			jQuery(this).removeClass('active');
			jQuery('nav').slideUp();
		} else {
			jQuery("nav").slideDown();
			jQuery(this).addClass('active');
		}
	});

});