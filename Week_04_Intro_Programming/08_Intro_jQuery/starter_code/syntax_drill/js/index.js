jQuery(document).ready(function(){

<<<<<<< HEAD
    
    // When purple box is clicked, set all paragraphs to be purple


    // When the blue box is clicked set the hipster paragraph to have white text with a blue background.  All other paragraphs should be black


    // When the red box is clicked set the list items toggle red background and white text on and off

    

    // When any of the boxes are clicked, add a 6px solid black bottom border

    

=======

    
    // When purple box is clicked, set all paragraphs to be purple
    jQuery("#purpleBox").on("click", purpleText);

    // When the blue box is clicked set the hipster paragraph to have white text with a blue background.  All other paragraphs should be black
    jQuery("#blueBox").on("click", whiteText);

    // When the red box is clicked set the list items toggle red background and white text on and off
    jQuery("#redBox").on("click", whiteToggleText);
    

    // When any of the boxes are clicked, add a 6px solid black bottom border
    jQuery(".boxes").on("click", border);
    /*.toggleClass("aClassName");
    .on("click",function(){});
    .css("propertyName", "propertyValue");*/

    function purpleText (){
    	jQuery("p").toggleClass("purpleForm");
    }

    function whiteText (){
    	reset();
    	jQuery("li.hipsterSpeak").css({
    		"background-color" : "blue",
    		"color" : "white"
    	});
    }

    function whiteToggleText (){
    	reset();
    	jQuery("li").toggleClass("redForm");
    }
    function border (){
    	reset();
    	jQuery(".boxes").css("border", "solid black 6px");
    }
>>>>>>> origin/master

});