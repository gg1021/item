 /*定义函数生成随机颜色*/
 function colorRandom(){
    var r = Math.floor(Math.random()*256);
    var g = Math.floor(Math.random()*256);
    var b = Math.floor(Math.random()*256);
    return "rgb("+ r + ","+ g +","+ b+")";
}

/*生成随机数*/
var canvas,context;
function getYZ(){
    canvas = document.getElementById("canvas1");
    console.log(canvas)
    context = canvas.getContext('2d');
    canvas.width = 200;
    canvas.height = 100;
    context.beginPath();
    // context.fillStyle = colorRandom();//显示验证码区域的背景色
    context.rect(0,55,100,0);
    context.fill();
    for(var i = 0;i<4;i++){
        context.font =( Math.random()*20+20)+"px 微软雅黑";//数字随机大小
        context.fillStyle = colorRandom();//数字颜色
        context.fillText(parseInt(Math.random()*9), 20*i,90);   //0-9的随机数
    }
}
  
/*实现*/
window.onload = function(){
    getYZ();
    document.getElementById("canvas1").onclick = function(){
        getYZ();
    }
}


