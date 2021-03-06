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

    var heightNav = parseInt($('#header').outerHeight());
    // Scrool bookmark
    $('a[href^="#"]').click(function() {
        var the_id = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(the_id).offset().top - (heightNav + 5)
        }, 1000);
        return false;
    });

    var hastUrl = $(location).attr('hash');
    if ($(hastUrl).length) {
        if(hastUrl === hastUrl) {
            $('html, body').animate({
                scrollTop: $(hastUrl).offset().top - (heightNav + 5)
            }, 400);
        }
    }
});
