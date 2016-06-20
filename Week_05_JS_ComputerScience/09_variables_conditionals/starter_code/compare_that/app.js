
$(document).ready(function () {

	 jQuery("#submit").click(function (e){
	 e.preventDefault();
	 console.log("test");
	var comparison;
	var inputA = Number(jQuery("#a").val());
	var inputB = Number(jQuery("#b").val());
	       
	 	if (inputA > inputB) {
	 		comparison = ">";
	 	}else if (inputA < inputB) {
	 		comparison = "<"
	 	}else if (inputA === inputB) {
	 		comparison - "==";
	 	}else {
	 		comparison = "N/A";
	 	}

	 jQuery("#comparison").text(comparison);
	});
});