var t= 55;
var s= 8;

var wind =
    35.74 + (0.6215 * t) - (35.75 * Math.pow(s, 0.16)) + (0.4275 * t * Math.pow(s, 0.16));

document.getElementById("windchill").innerHTML = wind.toFixed(2);
