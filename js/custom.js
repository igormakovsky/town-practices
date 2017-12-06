$(function () {

    $('a[href^="#"]').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 40
        }, 2000);
        return false;
    });

    $('a[href^="http://"]').attr('target', '_blank');
    $('a[href^="https://"]').attr('target', '_blank');

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

    /// index

    $(document).on('click', '#choose_all',
        function (e) {
            e.preventDefault();
            $('.list_card').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_business',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.business').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_social',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.social').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_education',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.education').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_events',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.events').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_gastronomy',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.gastronomy').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_tourism',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.tourism').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    $(document).on('click', '#choose_culture',
        function (e) {
            e.preventDefault();
            $('.list_card').addClass("hide");
            $('.culture').removeClass("hide");
            $('.chooser').removeClass("activated");
            $(this).addClass("activated");
        });

    /// hero-image

    /*$('#logo').removeClass('exited');
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
    })*/

    /// hero-content

    $('#carousel').slick({
        prevArrow: $("#btn-left"),
        nextArrow: $("#btn-right"),
        adaptiveHeight: true
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
