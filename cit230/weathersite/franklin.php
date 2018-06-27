<?php include '_header.php'; ?>

<body>
    <main>
        <h2 class="city"> The City of Franklin</h2>
        <figure>
            <img src="images/franklin-mobile.jpg" srcset="images/franklin-web.jpg 1200w,
            images/franklin-medium.jpg 800w,
            images/franklin-mobile.jpg 400w">
        </figure>
        <section class="weather-summary">
            <h3>Weather Summary</h3>
            <div class="highlow">
                <p>High:67 &deg;</p>
                <p>Low:43 &deg;</p>
            </div>
            <div class="current">
                Sunny
                <picture>
                    <img>
                </picture>
            </div>
            <div class="conditions">
                <p>Precipitation:</p>
                <p id="windspeed">Wind Speed: 8 mph</p>
                Wind Chill:
                <p id=windchill>Wind Chill:</p>
            </div>
        </section>

        <section class="forecast">
            <h3>Ten Day Forecast</h3>
            <table>
                <thead>
                    <tr>
                        <th>Day 1</th>
                        <th>Day 2</th>
                        <th>Day 3</th>
                        <th>Day 4</th>
                        <th>Day 5</th>
                        <th>Day 6</th>
                        <th>Day 7</th>
                        <th>Day 8</th>
                        <th>Day 9</th>
                        <th>Day 10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>89&deg;F</td>
                        <td>87&deg;F</td>
                        <td>78&deg;F</td>
                        <td>75&deg;F</td>
                        <td>72&deg;F</td>
                        <td>72&deg;F</td>
                        <td>79&deg;F</td>
                        <td>83&deg;F</td>
                        <td>85&deg;F</td>
                        <td>89&deg;F</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <article>
            <h3>Franklin Breaks Record</h3>
            <img>
            <p class="town-article">
            </p>
        </article>

    </main>
    
    <?php include '_footer.php'; ?>
