// Smooth scrolling to an element on a page
// Used on igormakovsky.ru

$(function () {

$('a[href^="#"]').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - 40
    }, 2000);
    return false;
});

});

