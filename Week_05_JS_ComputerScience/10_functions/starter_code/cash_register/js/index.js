
var runningTotal = 0;


// total will store the running total, starting at 0
// `enter()` reads the user's input, and updates the receipt

function enter(event){

    // Set up variables to use

    // Prevent form submission
    event.preventDefault();

    // Read the user input
    var newEntry = parseFloat(jQuery("#newEntry").val());
    //this converts a string to an integer
    // Convert to decimal

    // Convert to currency
    var newEntryString = formatAsUSD(newEntry);
    // Add line item to table
    jQuery("#entries").append("<tr><td></td><td>"+newEntryString+"</td></tr>");
    // Update the running total
    runningTotal += newEntry;

    // Print the updated total with proper currency formatting
    jQuery("#total").text(formatAsUSD(runningTotal));
    // Clear out the input field, ready for next value
    jQuery('#newEntry').val('');

}

function formatAsUSD (inputValue){

// Use this to convert a number to U.S. currency format

    // Convert the number to decimal

    inputValue = parseFloat(inputValue);
    //make sure the value is a number, no matter what the user inputs

    // Round to 2 decimal places
    inputValue = inputValue.toFixed(2);
    // Add the $ before the number
    var outputValue = "$" + inputValue;
    // Send back the result
    return outputValue;
}
// When the user submits the form, run the `enter` function
jQuery("#entry").on("submit", enter);

