$(document).ready(() => {
    top_count_slide = 0;

    heightScreenDevelopmentSlider();
    showerCounterStreakDesktop();
});

$(window).resize(() => {
    heightScreenDevelopmentSlider();
});

$(document).scroll(() => {
    showerBtnUp();
});

btn_menu = document.getElementsByClassName('mob-box-right')[0];
btn_menu.addEventListener('click', () => {
    width_screen = screen.width;
    height_screen = screen.height;
    $('#wr-mobile-menu').css('width', (width_screen - 45));
    $('#wr-mobile-menu').css('height', (height_screen + 100));

    $("#wr-mobile-menu").animate({
        opacity: '1',
        marginLeft: '-30px'
    }, 500, "linear");
});

function closeMobileMenu() {
    $("#wr-mobile-menu").animate({
        opacity: '0',
        marginLeft: '-370px'
    }, 500, "linear");    
}

btn_top_order_project = document.getElementsByClassName('box-left')[0].getElementsByTagName('botton')[0];
btn_top_order_project.addEventListener('click', () => {

    alert('Заказать проект');
});

btn_dev_slider = document.getElementById('screen-dev-slider').getElementsByTagName('botton')[0];
btn_dev_slider.addEventListener('click', () => {

    alert('Заказать сайт');
});

btn_stages_work = document.getElementsByClassName('wr-stages-work')[0].getElementsByTagName('botton')[0];
btn_stages_work.addEventListener('click', () => {

    alert('Заказать чат-бот');
});

btn_stages_work = document.getElementsByClassName('wr-stages-work')[1].getElementsByTagName('botton')[0];
btn_stages_work.addEventListener('click', () => {

    alert('Заказать разработку');
});

btn_project_optimization = document.getElementsByClassName('wr-project-optimization')[0].getElementsByTagName('botton')[0];
btn_project_optimization.addEventListener('click', () => {

    alert('Заказать услугу');
});

btn_feedback = document.getElementsByClassName('wr-feedback')[0].getElementsByTagName('botton')[0];
btn_feedback.addEventListener('click', () => {

    alert('Отправить');
});

btn_close_form = document.getElementsByClassName('form-close')[0];
btn_close_form.addEventListener('click', () => {
    $('.wr-form').css('display', 'none');
});




btn_left_desktop_slider_control = document.getElementById('desktop-slider-control').getElementsByClassName('left')[0];
btn_left_desktop_slider_control.addEventListener('click', () => {

    //top_count_slide

    item_current = document.getElementById('screen-dev-slider').getElementsByTagName('div')[0];  

    $(item_current).animate({
        opacity: '0.5',
        marginLeft: '-50px'
    }, 350, "linear");

    item_next = document.getElementById('screen-dev-slider').getElementsByTagName('div')[1];

    $(item_next).animate({
        zIndex: '1',
    }, 150, "linear");

    $(item_current).animate({
        opacity: '1',
        marginLeft: '50px',
        zIndex: '0',
    }, 200, "linear");

    console.log(top_count_slide);

    console.log('лево');
});

btn_right_desktop_slider_control = document.getElementById('desktop-slider-control').getElementsByClassName('right')[0];
btn_right_desktop_slider_control.addEventListener('click', () => {

    console.log('право');
});

btn_up = document.getElementsByClassName('wr-btn-up')[0];
btn_up.addEventListener('click', () => {
    let destination = $('body').offset().top - 20;
    $("body:not(:animated)").animate({scrollTop: destination}, 1000);
    $("html").animate({scrollTop: destination}, 500);
});

function showerBtnUp() {
    let current_position = window.pageYOffset;
    $('.wr-btn-up').removeClass("btn-up-shower");
    if (current_position > 400) {
        $('.wr-btn-up').addClass("btn-up-shower");
    }
}

function scrollBlock(wr_block) {
    if ($("#wr-mobile-menu").css("opacity") == "1") {
        closeMobileMenu();
    }    

    let width_screen = screen.width;
    indent = 25;
    if (width_screen < 767) {
        indent = 90;
    }

    let destination = $('.' + wr_block).offset().top - Number(indent);
    $("body:not(:animated)").animate({scrollTop: destination}, 1000);
    $("html").animate({scrollTop: destination}, 2100);
}

function heightScreenDevelopmentSlider() {
    let height_screen_development_slider = document.getElementById('screen-dev-slider').offsetHeight
    $(".wr-website-development-slider .box-left").css('margin-top', Number(height_screen_development_slider) - 60);
}

function showerCounterStreakDesktop() {
    item = '';
    desktop_count_slide = document.getElementById('screen-dev-slider').getElementsByClassName('item');
    top_count_slide = desktop_count_slide.length;

    for (i = 0; i < top_count_slide; i++) {
        item += '<div class="item"></div>';
    }

    box_streak = document.getElementById('desktop-count-slide-item');
    box_streak.innerHTML = item;

    first_streak = document.getElementById('desktop-count-slide-item').getElementsByTagName('div')[0];  
    first_streak.setAttribute( 'class', 'item active' );
}


/*
https://codepen.io/leusrox/pen/RgJKJx
*/