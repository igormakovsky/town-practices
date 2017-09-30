$(function () {

    gfyCollection.init();
    /*skrollr.init({
        forceHeight: false
    });*/

    $(window).on('load', function () {
        if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
            skrollr.init({
                forceHeight: false
            });
        }
    });

});