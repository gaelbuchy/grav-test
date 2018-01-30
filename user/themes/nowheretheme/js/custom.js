
$(document).ready(function (){

    if($('.main-content-delayed').length) {
        $('.main-content-delayed').fadeIn(1000);
    }

    if($('.nav-collapse').length) {
        var nav = responsiveNav(".nav-collapse", {
            customToggle: ".nav-toggle"
        });
    }
});