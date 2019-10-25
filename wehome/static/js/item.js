var mySwiper = new Swiper('.swiper-container', {
    autoplay: true,
    loop: true,
    height: window.innerHeight,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
mySwiper.el.onmouseover = function() {
    mySwiper.navigation.$nextEl.removeClass('hide');
    mySwiper.navigation.$prevEl.removeClass('hide');
}
mySwiper.el.onmouseout = function() {
    mySwiper.navigation.$nextEl.addClass('hide');
    mySwiper.navigation.$prevEl.addClass('hide');
}
mySwiper.navigation.update();
mySwiper.params.pagination.clickable = true;
//此外还需要重新初始化pagination
mySwiper.pagination.destroy()
mySwiper.pagination.init()
mySwiper.pagination.bullets.eq(0).addClass('swiper-pagination-bullet-active');