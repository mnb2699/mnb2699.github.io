 <footer>
        <section class="contact">
            Meghan Brennan 999.999.9999 123 Main St. Anytown, US 99999 Google Map
        </section>
        <section class="footer-bar">&copy;2018 | All Rights Reserved | World of Weather | <span id="currentdate">Current Date Placeholder</span>
        </section>
    </footer>

<script src="scripts/w3.js"></script>
<script src="scripts/hamburger.js"></script>
<script src="scripts/currentdate.js"></script>
<script src="scripts/windchill.js"></script>



<script>
    var urlString = document.location.href;
    var urlArray = urlString.split('/');
    var pageHREF = urlArray[urlArray.length - 1];

    if (pageHREF !== "") {
        menu = document.querySelectorAll('ul#navMenu li a');
        for (i = 0; i < menu.length; i++) {
            currentURL = (menu[i].getAttribute('href'));
            menu[i].parentNode.className = '';
            if (currentURL === pageHREF) {
                menu[i].parentNode.className = 'active';
            }
        }
    }

</script>
