 
var header = document.querySelector('header');
        var section = document.querySelector('section');
        var requestURL = 'https://byui-cit230.github.io/weather/data/towndata.json';
        var request = new XMLHttpRequest();
        request.open('GET', requestURL);
        request.responseType = 'json';
        request.send();
        request.onload = function() {
            console.log(request.response);
            var townName = request.response;
            populateHeader(townName);
        }
        
        myObj = {"name":"Franklin", "motto":"Where You Will Grow!", "yearFounded": 1788};
        f = myObj.name;

        function populateHeader(jsonObj) {
            var myH1 = document.createElement('h1');
            myH1.textContent = jsonObj['towns'];
            header.appendChild(myH1);
            var myPara = document.createElement('p');
            myPara.textContent = 'Name: ' + jsonObj['name'] + ' // Motto: ' + jsonObj['motto'] + '// Year Founded' + jsonObj['yearFounded'];
            header.appendChild(myPara);
        }

        function showTowns(jsonObj) {
            var townEvents = jsonObj['events'];
            for (var i = 0; i < towns.length; i++) {
                var myArticle = document.createElement('article');
                var myH2 = document.createElement('h2');
                var myPara1 = document.createElement('p');
                var myPara2 = document.createElement('p');
                var myPara3 = document.createElement('p');
                var myList = document.createElement('ul');
                myH2.textContent = towns[i].name;
                myPara1.textContent = 'Current Population: ' + towns[i].currentPopulation;
                myPara2.textContent = 'Average Rainfall: ' + towns[i].averageRainfall;
                myPara3.textContent = 'Events:';
                var events = town[i].events;
                for (var j = 0; j < events.length; j++) {
                    var listItem = document.createElement('li');
                    listItem.textContent = superPowers[j];
                    myList.appendChild(listItem);
                }
                myArticle.appendChild(myH2);
                myArticle.appendChild(myPara1);
                myArticle.appendChild(myPara2);
                myArticle.appendChild(myPara3);
                myArticle.appendChild(myList);
                section.appendChild(myArticle);
            }
        }