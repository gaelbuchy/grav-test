
$(document).ready(function (){

    $('.main-content-delayed').fadeIn(1000);

    if($('.nav-collapse').length) {
        var nav = responsiveNav(".nav-collapse", {
            customToggle: ".nav-toggle"
        });
    }

});