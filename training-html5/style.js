
		window.onload = function(){
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
 
    context.moveTo(50, 180); //Điểm bắt đầu
    context.lineTo(570, 50); //Điểm kết thúc
    context.strokeStyle = "#990000"; //Màu của đường thẳng
    context.stroke();
};

