jQuery(document).ready(function(){
	jQuery("#hamburger").click(function(){

		if(jQuery(this).hasClass('active')){
			jQuery(this).removeClass('active');
			jQuery("header nav").slideUp();
		} else {
			jQuery("header nav").slideDown();
			jQuery(this).addClass('active');
		}
	});

});