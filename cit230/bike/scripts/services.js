*part of your json

var requesrtURL = 'data/sercises.json';

var request = new XMLHttpRequest();

request.open('GET', requesrtURL);
reques.responseType = "json";
request.send();

request.onload = function() {
    var services = request.response;
}

use the w3 include 