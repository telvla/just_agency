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
    scrollBlock('wr-feedback');
    //alert('Заказать проект');
});

function btnToOrderSite(title) {
    type_site = document.getElementById('type-site');
    type_site.value = 'Вид сайта: ' + title;
    type_site.style.display = 'block';
    document.getElementById("select-type-service").value = 'Сайты';

    scrollBlock('wr-feedback');
}

function selectTypeService() {
    select_val = document.getElementById("select-type-service").value;
    type_site = document.getElementById('type-site');
    
    type_site.style.display = 'none';

    if (select_val == 'Сайты' && !isEmpty(this.value)) {
        type_site.style.display = 'block';        
    }
}

/*
btn_dev_slider = document.getElementById('screen-dev-slider').getElementsByTagName('botton')[0];
btn_dev_slider.addEventListener('click', () => {
    scrollBlock('wr-feedback');
    //alert('Заказать сайт');
});
*/

//btn - Заказать чат-бот
btn_stages_work = document.getElementsByClassName('wr-stages-work')[0].getElementsByTagName('botton')[0];
btn_stages_work.addEventListener('click', () => {
    document.getElementById("select-type-service").value = 'Чат-боты';
    scrollBlock('wr-feedback');
});

//btn - Разработка ПО
btn_stages_work = document.getElementsByClassName('wr-stages-work')[1].getElementsByTagName('botton')[0];
btn_stages_work.addEventListener('click', () => {
    document.getElementById("select-type-service").value = 'Разработка ПО';
    scrollBlock('wr-feedback');
});

// btn - Оптимизация
btn_project_optimization = document.getElementsByClassName('wr-project-optimization')[0].getElementsByTagName('botton')[0];
btn_project_optimization.addEventListener('click', () => {
    document.getElementById("select-type-service").value = 'Оптимизация';
    scrollBlock('wr-feedback');
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
    first_streak.setAttribute('class', 'item active');
}

var elementO = document.getElementById('mySwipe'),
    prevBtnO = document.getElementById('prev'),
    nextBtnO = document.getElementById('next');
    window.mySwipeO = new Swipe(elementO, {
    startSlide: 0,
    auto: false,
    draggable: true,
    autoRestart: false,
    continuous: false,
    disableScroll: false,
    stopPropagation: false,
    callback: function(index, elementO) {
    },
    transitionEnd: function(index, elementO) {
        mobile_count_slide = document.getElementById('mobile-count-slide-item').getElementsByTagName('div');
        count_slide = mobile_count_slide.length;

        for (i = 0; i < count_slide; i++) {
            item_slide = document.getElementById('mobile-count-slide-item').getElementsByTagName('div')[i];
            if (i != index) {
                item_slide.setAttribute('class', 'item');    
            } else {
                item_slide.setAttribute('class', 'item active');
            }
        }
    }
});

var elementO = document.getElementById('mySwipe-2'),
    prevBtnO = document.getElementById('prev'),
    nextBtnO = document.getElementById('next');
    window.mySwipeO = new Swipe(elementO, {
    startSlide: 0,
    auto: false,
    draggable: true,
    autoRestart: false,
    continuous: false,
    disableScroll: false,
    stopPropagation: false,
    callback: function(index, elementO) {
    },
    transitionEnd: function(index, elementO) {
        mobile_count_slide = document.getElementById('mobile-count-portfolio-item').getElementsByTagName('div');
        count_slide = mobile_count_slide.length;

        for (i = 0; i < count_slide; i++) {
            item_slide = document.getElementById('mobile-count-portfolio-item').getElementsByTagName('div')[i];
            if (i != index) {
                item_slide.setAttribute('class', 'item');    
            } else {
                item_slide.setAttribute('class', 'item active');
            }
        }
    }
});


/*
https://codepen.io/leusrox/pen/RgJKJx
*/