$(document).ready(function() {
    // Sub navMain
    $('#navMain .sub_next>a').click(function(event) {
        event.preventDefault();
        $(this).next().stop().slideToggle();
        $(this).find('i').toggleClass('fa-plus fa-minus');
    });
    $('.btnNav').click(function() {
        $(this).find('i').toggleClass('fa-navicon fa-times');
        $('#navMain').stop().fadeToggle();
        // Disable scroll body
        $('body').toggleClass('overHidden');
    });

    // Accordion btn link
    $('.accordion').click(function(event) {
        event.preventDefault();
        $(this).next().stop().slideToggle();
    });


    // Scroll on Top
    $('.toTop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
