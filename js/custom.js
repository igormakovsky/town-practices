$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('#a:in-viewport()').css('transform', 'translateX(10em)');
        $('.pin:in-viewport()').addClass('animated fadeInDown');
        $('.pin-start:in-viewport()').addClass('animated zoomIn');
        $('.pin__note:in-viewport()').addClass('animated fadeIn');
    });

    /// menu

    $(document).on('click', '#header__opener',
        function (e) {
            e.preventDefault();
            $('#header__nav').toggleClass("header-opened");
            $('.page').toggleClass("page-moved");
            ///
            $('#line-1').toggleClass("x-mark");
            $('#line-2').toggleClass("x-mark");
            $('#line-3').toggleClass("x-mark");
            $('#header__opener').toggleClass("x-mark");
        });
    $(document).on('click', '.page-moved',
        function (e) {
            e.preventDefault();
            $('#header__nav').removeClass("header-opened");
            $('.page').removeClass("page-moved");
            ///
            $('#line-1').toggleClass("x-mark");
            $('#line-2').toggleClass("x-mark");
            $('#line-3').toggleClass("x-mark");
            $('#header__opener').toggleClass("x-mark");
        
        });

    /// hero-image

    $('#logo').removeClass('exited');
    $('#title').removeClass('exited');

    var wpLogo = new Waypoint({
        element: document.getElementById('logo'),
        handler: function () {
            $('#logo').toggleClass("exited"),
                $('#title').toggleClass("exited"),
                $('#hero-image').toggleClass("darker")
            $('#hero-content').toggleClass("show")
        },
        offset: 110
    })

    /// hero-content

    $('#carousel').slick({
        prevArrow: $("#btn-left"),
        nextArrow: $("#btn-right")
    });

    $('h4').parent('li').addClass('no-before');
    $('img').parent('a').addClass('no-border');

    /// footer

    $('a[href="#showmap"]').click(function () {
        $('#map').toggleClass('show');
        $('#showmap').toggleClass('hidden');
        $('#closemap').toggleClass('hidden');
    });

    $('a[href="#closemap"]').click(function () {
        $('#map').removeClass('show');
        $('#showmap').toggleClass('hidden');
        $('#closemap').toggleClass('hidden');
    });

});

$(document).ready(function (e) {
    // Switch languages
    $(document).on('click','#switch-lang', function (e) {
        console.log('uuu');
        e.preventDefault();
        $('#switch-lang-form').submit();
        return false;
    })
})