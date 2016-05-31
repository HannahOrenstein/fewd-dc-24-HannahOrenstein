//Implement the red light using jQuery. Don't forget to add the script tags.


//Click on Stop
jQuery("#stopButton").on("click",illuminateRed);

//Click on Slow
jQuery("#slowButton").on("click",illuminatePurple);
/*document.getElementById('slowButton').onclick = illuminatePurple;*/

//Click on Go
jQuery("#goButton").on("click",illuminateGreen);
/*document.getElementById('goButton').onclick = illuminateGreen;*/


function illuminateRed() {
  clearLights();
  jQuery("#stopLight").css("background-color", "red");
  /*document.getElementById('stopLight').style.backgroundColor = "red";*/
}
	//Change top circle to red

function clearLights() {
  jQuery(".bulb").css("background-color", "black");
  /*document.getElementById('stopLight').style.backgroundColor = "black";
  document.getElementById('slowLight').style.backgroundColor = "black";
  document.getElementById('goLight').style.backgroundColor = "black";*/
}

function illuminatePurple() {
  clearLights();
  jQuery("#slowLight").css("background-color", "purple");
}

function illuminateGreen() {
  clearLights();
  jQuery("#goLight").css("background-color", "green");
}

