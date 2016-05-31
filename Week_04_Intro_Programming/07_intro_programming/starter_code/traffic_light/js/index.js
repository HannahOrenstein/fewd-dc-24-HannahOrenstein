//Click on Stop
document.getElementById('stopButton').onclick = illuminateRed;

//Click on Slow
document.getElementById('slowButton').onclick = illuminatePurple;

//Click on Go
document.getElementById('goButton').onclick = illuminateGreen;


function illuminateRed() {
  clearLights();
  document.getElementById('stopLight').style.backgroundColor = "red";
}
	//Change top circle to red

function clearLights() {
  document.getElementById('stopLight').style.backgroundColor = "black";
  document.getElementById('slowLight').style.backgroundColor = "black";
  document.getElementById('goLight').style.backgroundColor = "black";
}

function illuminatePurple() {
  clearLights();
  document.getElementById('slowLight').style.backgroundColor = "purple";
}

function illuminateGreen() {
  clearLights();
  document.getElementById('goLight').style.backgroundColor = "green";
}