$(document).ready(function () {
    $("#mobile").click(function() { 
         $(".menu-list").slideToggle();
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
           $('header').addClass('changeColor')
        } 
        if ($(this).scrollTop() < 50) {
            $('header').removeClass('changeColor')
         } 
    });
});