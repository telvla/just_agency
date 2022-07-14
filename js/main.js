$(document).ready(function() {
    var height_screen_development_slider = document.getElementById('screen-dev-slider').offsetHeight
    
    $(".wr-website-development-slider .box-left").css('margin-top', height_screen_development_slider - 60);

    var btn_menu = document.getElementsByClassName('mob-box-right')[0];
    btn_menu.addEventListener('click', function(){

        alert('Нажата кнопка меню');
    });


});

function scrollBlock(wr_block) {
    width_screen = screen.width;
    indent = 25;
    if (width_screen < 767) {
        indent = 90;
    }

    var destination = $('.' + wr_block).offset().top - indent;

    $("body:not(:animated)").animate({scrollTop: destination}, 1000);
    $("html").animate({scrollTop: destination}, 2100);
}










