jQuery("#grayButton").on("click", switchGray);
/*document.getElementById('grayButton').onclick = switchGray;*/
jQuery("#whiteButton").on("click", switchWhite);
/*document.getElementById('whiteButton').onclick = switchWhite;*/

function switchGray() {
jQuery("body").css({
	"background-color" : "gray",
	"color" : "white"
});
}

/*	var theBody = jQuery("body");
  theBody.css("background-color", "pink");
  theBody.css("color","white");*/
  /*document.body.style.backgroundColor = 'pink';
 document.body.style.color = 'white';*/


function switchWhite() {

	jQuery("body").css({
	"background-color" : "white",
	"color" : "black"
});
 /* document.body.style.backgroundColor = 'orange';
  document.body.style.color = 'black';*/ 
}
