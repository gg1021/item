window.addEventListener('load',function () {
    // 鼠标滚动条事件
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



    window.addEventListener("scroll", (e) => {
        let currentTop = document.documentElement.scrollTop;
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
});
