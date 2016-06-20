$(document).ready(function () {

	function citySearch(e){
		console.log("test");
	    e.preventDefault();
	    // define the city variable
	    var city = jQuery("#city-type").val();
	    // make it all lower case
	    city = city.toLowerCase().trim();
	    // define if/else statements based on user input
	   
	    // if austin 
	   if (city == "austin" || city == "ATX") {
            $("body").attr('class', 'austin');
        }

       else if (city == "la" || city == "los angeles" || city == "LAX") {
            $("body").attr('class', 'la');
        }

        else if (city == "nyc" || city == "new york city" || city == "new york") {
            $("body").attr('class', 'nyc');
        }

        else if (city == "sf" || city == "san francisco" || city == "Bay Area") {
            $("body").attr('class', 'sf');
        }

        else if (city == "sydney" || city == "SYD") {
            $("body").attr('class', 'sydney');
        }

        else {
        	$("body").attr('class', 'red');
        }
          jQuery('#city-type').val('');

       }

    jQuery(".container form").on("submit", citySearch);


});