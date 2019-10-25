// 轮播图

let mySwiper = new Swiper("#bigBox", {
    loop: true,
    initialSlide: 0,
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        bulletActiveClass: 'my-bullet-active',
        clickable: true,
    },
})

for (i = 0; i < mySwiper.pagination.bullets.length; i++) {
    mySwiper.pagination.bullets[i].onmouseover = function() {
        this.click();
    };
}

// 监听滚动事件

/*
    对象.scrollTop	具有滚动条的元素在滚动的时候，他的内部元素超出该元素顶部距离
    animated bounceInUp
    animated bounceInUp
    animated zoomIn
    窗口左上角 与 屏幕左上角的 距离
    window.screenX
    window.screenY
    window.screen.height 屏幕高
*/

// 获取首页需要添加动画效果的元素
let Iimg1 = document.querySelector(".center-introduce-img-img");
let Iimg2 = document.querySelector(".center-house-img-img");
let Ibox = document.querySelectorAll(".serve-item");




// 获取公共部分元素
let head = document.querySelectorAll(".with-logo");


// 公共部分鼠标滚动条事件
var barBox1 = document.querySelectorAll(".bar-up");
var barBox2 = document.querySelector(".bar-down");
var hdUp = document.querySelector(".hd-up")
barBox1[0].addEventListener("click", () => {
    barBox1[0].style.display = "none";
    barBox1[1].style.display = "block";
    barBox2.style.display = "block";
}, false)
barBox1[1].addEventListener("click", () => {
    barBox1[0].style.display = "block";
    barBox1[1].style.display = "none";
    barBox2.style.display = "none";
}, false)

// 鼠标滚动条事件
window.addEventListener("scroll", (e) => {
    let ev = e || event;
    let currentTop = document.documentElement.scrollTop;
    // 动画效果添加
    let img1obj = Iimg1.getBoundingClientRect().top;
    let img2obj = Iimg2.getBoundingClientRect().top;
    let box0 = Ibox[0].getBoundingClientRect().top;
    let box1 = Ibox[1].getBoundingClientRect().top;
    let box2 = Ibox[2].getBoundingClientRect().top;
    let box3 = Ibox[3].getBoundingClientRect().top;
    let a = window.innerHeight - 80;
    if (img1obj <= a) {
        Iimg1.classList.add("animated", "zoomIn");
    }
    if (img2obj <= a) {
        Iimg2.classList.add("animated", "zoomIn");
    }
    if (box0 <= a) {
        Ibox[0].classList.add("animated", "bounceInUp");
    }
    if (box1 <= a) {
        Ibox[1].classList.add("animated", "bounceInUp");
    }
    if (box2 <= a) {
        Ibox[2].classList.add("animated", "bounceInUp");
    }
    if (box3 <= a) {
        Ibox[3].classList.add("animated", "bounceInUp");
    }
    if (currentTop >= 89.6) {
        hdUp.style.display = "block";
        hdUp.classList.add("fadeInDown");
    } else {
        hdUp.style.display = "none";
        hdUp.classList.remove("fadeInDown");

    }
}, false);

//楼层跳转
function topFunction() {
    $('body,html').animate({ scrollTop: 0 }, 1000);
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}