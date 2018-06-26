xmlHttpRequest.open('GET', 'http://api.openweathermap.org/data/2.5/weather?zop=55333, us&appid=407932803aefc9dc13da45f65e84ef07=imperial', true);
XMLHttpRequest.responseType = 'json';
XMLHttpRequest.send();

XMLHttpRequest.onload = function(){
    var weather = XMLHttpRequest.response;
    
    console.log(weather);
    
    document.getElementById("cityf").innerHTML = weather.name;
    document.getElementById("tempf").innerHTML = weather.main.temp;
    document.getElementById("speedf").innerHTML = weather.wind.f;
}

