$(document).ready(function() {
    // Sub navMain
    $('#navMain .sub_next>a').click(function(event) {
        event.preventDefault();
        $(this).next().stop().slideToggle();
        $(this).find('i').toggleClass('fa-plus fa-minus');
    });
    $('.btnNav').click(function() {
        $(this).find('i').toggleClass('fa-navicon fa-times');
        $('#navMain').fadeToggle();
        // Disable scroll body
        $('body').toggleClass('overHidden');
    });


    // Accordion btn link
    $('.btn_box .btn').click(function(event) {
        event.preventDefault();
        $(this).next().stop().slideToggle();
    });
});
