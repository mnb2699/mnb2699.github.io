<!DOCTYPE html>
<html>

<head>
    <title>Home</title>

</head>

<body>

    <header class="world">
        <img src="images/globe.jpg" alt="logo">World of Weather
    </header>

    <nav class="clearfix">
        <button onclick="toggleMenu()">&#9776;</button>
        <ul id="navMenu" class="hide">
            <li class=""><a href="index.html">Home</a></li>
            <li><a href="franklin.html">Franklin</a></li>
            <li><a href="greenville.html">Greenville</a></li>
            <li><a href="springfield.html">Springfield</a></li>
            <li><a href="stormcenter.html">Storm Center</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <a href="javascript:void(0);" class="icon" onclick="toggleMenu()"></a>
        </ul>
    </nav>

    <header>

    </header>

    <section>
        <table class="story">
            <tr>
                <td><img src="images/franklin-mobile.jpg"></td>
                <td><b>Weather Story:</b> <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </td>
            </tr>

        </table>
        <table class="clips">
            <tr>
                <th><a href="franklin.html">Franklin</a></th>
                <th class="green"><a href="greenville.html">Greenville</a></th>
                <th class="mobile"><a href="springfield.html">Springfield</a></th>
            </tr>
            <tr>
                <td>Where you will grow!</td>
                <td class="green">Green is our way of life!</td>
                <td class="mobile">Where everyone is lifted</td>
            </tr>
            <tr>
                <td>1788</td>
                <td class="green">1805</td>
                <td class="mobile">1826</td>
            </tr>
            <tr>
                <td><img src="images/rain.jpg"></td>
                <td class="green"><img src="images/flower.jpg"></td>
                <td class="mobile">
                    <img src="images/sunset.jpg"></td>
            </tr>
            <tr>
                <td>Current Weather: <span id="cityf"></span></td>
                <td>Current Weather: <span id="cityg"></span></td>
                <td>Current Weather: <span id="citys"></span></td>
            </tr>
            <tr>
                <td>Current Temp: <span id="tempf"></span></td>
                <td>Current Temp: <span id="tempg"></span></td>
                <td>Current Temp: <span id="temps"></span></td>
            </tr>
            <tr>
                <td>Wind Speed: <span id="speedf"></span></td>
                <td>Wind Speed: <span id="speedg"></span></td>
                <td>Wind Speed: <span id="speeds"></span></td>
            </tr>
            <tr>
                <td>Population: 30,458</td>
                <td class="green">Population: 33,458</td>
                <td class="mobile">Population: 17,852</td>
            </tr>
            <tr>
                <td>Average Rainfall: 21</td>
                <td class="green">Average Rainfall: 25</td>
                <td class="mobile">Average Rainfall: 17</td>
            </tr>
            <tr>
                <td>March 4: March to the Drum of Donuts</td>
                <td class="green">February 10-12: Greenbration</td>
                <td class="mobile">January 8: Spring into Winter</td>
            </tr>
            <tr>
                <td>September 5 - 11: Founder Days</td>
                <td class="green">May 8 - 18: Greenville Founder Days</td>
                <td class="mobile">April 10-20: Celebration of Life</td>
            </tr>
            <tr>
                <td>December 1 - 26: Christmas in the Heart</td>
                <td class="green">November 15-16: Greensome Gathering</td>
                <td class="mobile">July 31-Aug 15: Dog Days of Summer Festival</td>
            </tr>
        </table>

    </section>
    
    <footer w3-include-html="modules/footer.html"></footer>

    <script src="scripts/w3.js"></script>

    <script src="scripts/index.js"></script>
    <script src="scripts/currentdate.js"></script>
    <script src="scripts/hamburger.js"></script>

</body>

</html>
