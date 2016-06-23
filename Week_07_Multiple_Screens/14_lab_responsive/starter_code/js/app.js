
jQuery(document).ready(function(){
	jQuery("#hamburgerMenu").click(function(){

		if(jQuery(this).hasClass('active')){
			jQuery(this).removeClass('active');
			jQuery('.navigation').slideUp();
		} else {
			jQuery(".navigation").slideDown();
			jQuery(this).addClass('active');
		}
	});

});


