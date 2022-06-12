function switchdarkmode() {
    var switch_xhr = new XMLHttpRequest();
    switch_xhr.open("GET", "/switchdarkmode.php");
    switch_xhr.send();

    var style_xhr = new XMLHttpRequest();
    style_xhr.open("GET", "/assets/css/darkmode.php");

    style_xhr.onload = function () {
        var darkmode_style = document.getElementById("darkmode");
        darkmode_style.innerText = style_xhr.response;
    };

    switch_xhr.onload = function () {
        style_xhr.send();
    };
}