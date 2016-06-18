var images=["images/animal1.jpg","images/animal2.jpg","images/animal3.jpg","images/animal4.jpg","images/animal5.jpg","images/animal6.jpg","images/animal7.jpg",];
var i=0;
var maxImages = images.length - 1;

jQuery(document).ready(function(){
	console.log(maxImages);
	jQuery('#backButton').click(prevImage);
	jQuery('#nextButton').click(nextImage);
});

function prevImage(){
	if(i > 0 ) {
         i--;
    }  else  { 
        i = maxImages; 
    }
    changeImage(i);	
}
function nextImage(){
	if(i < maxImages ) {
         i++;
    }  else  { 
        i = 0; 
    }
    changeImage(i);	
}
function changeImage(){
	jQuery("#carousel-image").attr("src",images[i]);

}

