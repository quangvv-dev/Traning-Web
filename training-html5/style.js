
		window.onload = function(){
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
 
    context.moveTo(10, 10); //Điểm bắt đầu
    context.lineTo(180, 10); //Điểm kết thúc
    context.lineTo(180, 100); //Điểm kết thúc
    context.lineTo(10, 100); //Điểm kết thúc
    context.lineTo(10, 10); //Điểm kết thúc
    context.strokeStyle = "#990000"; //Màu của đường thẳng
    context.stroke();
};

