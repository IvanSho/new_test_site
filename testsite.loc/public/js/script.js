document.getElementById('content').style.fontFamily = 'Times New Roman';

$(function(){
    $('.btn_scroll').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });
});

$(window).scroll(function(){
    if($(this).scrollTop()>200) {
        $('.btn_scroll').fadeIn();
    } else {
        $('.btn_scroll').fadeOut();
    }
});
