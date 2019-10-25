
var list = document.querySelectorAll(".items");
var content = document.querySelectorAll(".content");
for (let j = 0; j < list.length; j++) {
    list[j].onclick = function() {
        index = j;
        for (let i = 0; i < list.length; i++) {
            content[i].style.display = "none";
            content[i].style.zIndex = 0;
            list[i].classList.remove("active");
        }
        content[index].style.display = "block";
        content[index].style.zIndex = 5;
        list[index].classList.add("active");
    }
}
list[0].onclick();
