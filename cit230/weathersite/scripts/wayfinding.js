function setActiveLink() {
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
}
