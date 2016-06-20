var cities=["NYC", "SF", "LA", "ATX", "SYD",];

jQuery(document).ready(function(){
	console.log(cities.length);
	
	for(i=0;i<cities.length;i++){
	    jQuery('#city-type').append('<option value="' + cities[i] + '">' + cities[i] + '</option>');
	}

	jQuery("form").change("#city-type",function(){
		
		var city = jQuery("#city-type").val();

		if (city == "NYC") {
			jQuery("body").attr("class", "nyc");
		}

		else if (city == "SF") {
			jQuery("body").attr("class", "sf");
		}

		else if (city == "LA") {
			jQuery("body").attr("class", "la");
		}

		else if (city == "ATX") {
			jQuery("body").attr("class", "austin");
		}

		else if (city == "SYD") {
			jQuery("body").attr("class", "sydney");
		}
	});
});