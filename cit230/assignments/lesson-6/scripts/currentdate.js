var myDate = new Date();

var weekDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",];

var daysOfWeek = myDate.getDate();
var daysOfWeekString = weekDays[daysOfWeek];

var daysOfMonth = myDate.getDate();
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ];
var month = myDate.getMonth();
var monthString = months[month];

var fullYear = myDate.getFullYear();

var fullDate = daysOfWeekString + ", " + daysOfMonth + " " + monthString + ", " + fullYear;

document.getElementById("currentdate").innerHTML = fullDate;
