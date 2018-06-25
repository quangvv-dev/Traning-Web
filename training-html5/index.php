<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
<!--demo figuare-->
<figure>
    <figcaption> My flower </figcaption>
    <p><img src="img_flower.jpg" alt="My flower" /></p>
</figure>

<article>
<p>Tin trong ngày</p>
<p>Công nghệ ngày càng tiến sâu vào đời sống chúng ta...</p>
</article>
<!--demo Cavas-->
<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
    Your browser does not support the HTML5 canvas tag.</canvas>

<script>
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.moveTo(0,0);
    ctx.lineTo(200,100);
    ctx.stroke();
</script>
<!--demo Command-->
<menu>
    <command onclick="alert(‘Đây là dòng thông báo’)">Button</command>
</menu>
<!--demo datalist-->
<input list="html" />
<datalist id="html">
    <option value="Học HTML"></option>
    <option value="Tham khảo HTML"></option>
    <option value="Ví dụ HTML"></option>
    <option value="Thực hành HTML"></option>
</datalist>
<!--demo details-->
<details>
    <summary>Học HTML<summary>
            <p>Học từ cơ bản đến nâng cao.</p>
            <p>Tham khảo những phần liên quan.</p>
</details>
<!--demo Hgroup-->
<hgroup>
    <h2>HTML5</h2>
    <h3>Tag HTML5</h3>
</hgroup>

<!--demo output-->
<form action="" onsubmit="return false" oninput="result.value = num01.valueAsNumber + num02.valueAsNumber">
    <input name="num01" type="number" /> + <input name="num02" type="number" /> = <output name="result" onforminput="value=num01.valueAsNumber + num02.valueAsNumber">
    </output>
</form>
</br>

<!--demo pr-->
<progress></progress>
<!--demo WBR-->
<p class="wrapBlock">Đoạn text có thể làm <wbr>vỡoooooooooooooooo</wbr> layout</p>
<style>
    p.wrapBlock {
        border: 1px solid #ffffff;
        width: 150px;
    }
</style>
<!--demo webworker-->

<p>Số đã đếm được: <output id="result"></output></p>
<button onclick="startWorker()">Chạy Worker</button>
<button onclick="stopWorker()">Dừng Worker</button>

<script>
    var w;
    function startWorker() {
        if(typeof(Worker) !== "undefined") {
            if(typeof(w) == "undefined") {
                w = new Worker("demo_workers.js");
            }
            w.onmessage = function(event) {
                document.getElementById("result").innerHTML = event.data;
            };
        } else {
            document.getElementById("result").innerHTML = "Rất tiếc, trình duyệt của bạn không hỗ trợ Web Worker...";
        }
    }

    function stopWorker() {
        w.terminate();
        w = undefined;
    }
</script>

<!--demo footer-->
<embed width="200px" height="100px" src="https://www.w3schools.com/tags/helloworld.swf" />

<footer><p>Đây là footer</p></footer>
</body>
</html>
