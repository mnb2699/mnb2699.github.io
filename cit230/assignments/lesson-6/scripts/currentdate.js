var currentDate = new Date();

var getFullYear();
var getDate();

var daysOfWeek = new Array(7);
daysOfWeek[0] = "Sunday";
daysOfWeek[1] = "Monday";
daysOfWeek[2] = "Tuesday";
daysOfWeek[3] = "Wednesday";
daysOfWeek[4] = "Thursday";
daysOfWeek[5] = "Friday";
daysOfWeek[6] = "Saturday";

var daysOfWeekNumber = currentDate.getDate();
var daysOfWeekString = daysOfWeek[daysOfWeekNumber];

var daysOfMonth = currentDate.getDate();

var daysOfMonth = new Array(12);
daysOfMonth[0] = "January"
daysOfMonth[1] = "February"
daysOfMonth[2] = "March"
daysOfMonth[3] = "April"
daysOfMonth[4] = "May"
daysOfMonth[5] = "June"
daysOfMonth[6] = "July"
daysOfMonth[7] = "August"
daysOfMonth[8] = "September"
daysOfMonth[9] = "October"
daysOfMonth[10] = "November"
daysOfMonth[11] = "December"

var myDate = daysOfWeek + "," + getDate + '' + daysOfMonth + '' + getFullYear;

function date() {
    document.getElementById("currentDate").classList("footer-bar") = myDate;

}
