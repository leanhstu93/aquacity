//opentab
function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
$(document).ready(function(){
    $(".Ta__js-slider-pp").owlCarousel({
        autoplay:true,
        smartSpeed : 900,
        navigation : true, // Show next and prev buttons
        paginationSpeed : 70000,
        loop:true,
        nav: true,
        items:4,
        margin:20,
    });
});