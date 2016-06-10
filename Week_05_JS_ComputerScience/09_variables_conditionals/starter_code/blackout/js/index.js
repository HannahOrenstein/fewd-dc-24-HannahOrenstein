

/*starts with lights ="on"
function
condition
if light ="on" turn dark
if light ="off" turn on*/
var lights = "on";

function switchLights(){
	if (lights == "on"){
		jQuery("body").addClass("dark"); 
		lights = "off";
	} 
	else {
		jQuery("body").removeClass("dark");
		lights = "on";
	}

}

jQuery("#light_switch").click(switchLights);