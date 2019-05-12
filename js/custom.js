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

    $(".Ta__js-slider-kienthuc").owlCarousel({
        autoplay:true,
        smartSpeed : 900,
        navigation : true, // Show next and prev buttons
        paginationSpeed : 70000,
        loop:true,
        items:1,
        dots: true,
        margin:20,
    });
    //menu fix
    jQuery(document).scroll( function(){
        scoll_top = jQuery(document).scrollTop();
        height_header= jQuery('.wrp-menu').height();
        if( scoll_top >= height_header ){
            jQuery(".wrp-menu").addClass("menufix");
        }else{
            jQuery(".wrp-menu").removeClass("menufix");
        }
    });
});