$(function () {

    $('.appear:in-viewport').addClass('animated fadeIn');
    $('.appear-blur:in-viewport').addClass('appeared-blur');

    $(window).scroll(function () {
        $('.appear:in-viewport').addClass('animated fadeIn');
        $('.appear-blur:in-viewport').addClass('appeared-blur');
        $('.grow:in-viewport').addClass('grown');
    });

});