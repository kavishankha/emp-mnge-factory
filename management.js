
// Get the current date and time
let currentDate = new Date();

// Format the date as a string
let dateString = currentDate.toDateString();

// Get the HTML element where we want to display the date
let dateElement = document.getElementById("date");

// Set the inner HTML of the element to the formatted date string
dateElement.innerHTML ="Today is "+dateString;


