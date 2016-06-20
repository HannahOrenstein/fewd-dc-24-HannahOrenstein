//Click on Grey Button
document.getElementById("grayButton").onclick = changeToGray;
	//Call changeToGrey

//Click on White Button
document.getElementById("whiteButton").onclick = changeToWhite;
	//Call changeToWhite




function changeToGray(){
	//Change the background color
	document.body.style.backgroundColor = "gray";
	//Change text color 
	document.body.style.color = "white";
	console.log("I'm a console message")
}// end changeToGrey



function changeToWhite(){
	//Change the background color
	document.body.style.backgroundColor = "white";
	//Change the text color
	document.body.style.color = "black";
}// end changeToWhite
