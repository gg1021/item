// let hongseTop = document.querySelector(".hongse-top")
// let click = document.querySelector(".click")
// let shouye = document.querySelector(".hongse-top")
let donghua = document.querySelectorAll(".fwxm-guanggao-dg")
let index = 0;
// console.log(donghua)
// animated bounceInUp
// hongseTop.onclick = function() {
//     click.style.opacity = 1;
//     click.style.zIndex = 99;
//     // click.addEventListener("mouseover", click)
//     // click = function() {
//     //     click.style.opacity = 1;
//     //     click.style.zIndex = 9;
//     // }
//     shouye.innerHTML =
//         `<a href="
//     ">关闭<span>∨</span></a>`

// }

// click.onmouseleave = function() {
//     click.style.opacity = 0;
//     click.style.zIndex = 0;
//     shouye.innerHTML =
//         `<a href="
// ">首页<span>∨</span></a>`
// }
setInterval(function() {
    if (index < donghua.length) {
        donghua[index].classList.add("animated", "bounceInUp", "fwxmGuanggaoDgTesu")
            // console.log(donghua[index])
    }
    index++


}, 1000 / 10)