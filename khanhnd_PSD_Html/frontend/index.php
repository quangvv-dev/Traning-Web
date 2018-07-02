<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiết kế fie PSD</title>
    <meta name="description" content="tạo giao diện bằng xử lý cắt giao diện trên file PSD, điều đó khiến giao diện có độ chuẩn xác cao và đẹp mắt hơn.">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <style>
        <?php
        $css = file_get_contents('../frontend/css/header.css');
        echo $css;
        ?>
    </style>
</head>
<body>
    <!--Header-->
    <?php include "header.php" ?>
    <!--END Header-->


    <!--Above Content -->
    <section>
<!--        slider-->
        <div class="section_slider">
            <img class="mySlides fade" src="images/slider1.png" alt="slide 1">
            <img class="mySlides fade" src="images/slide2.png" alt="slide 2">

            <h1>WEB DESIGN COMPANY REPUPATION</h1>
            <p>we've been brougth the most valued products and <br>
                servecies to our global clients during last 10 year</p>
        </div>
<!--        end slider-->



        <div class="section_layer1">
            <img src="images/layer11.png" alt="layer1">
            <h3>Mobile App Development</h3>
            <p>We are experts in mobile development <br> industry for years. We have a team with 10 <br> skilled developers that have been in this
                <br> field for at least 5 years so far.</p>
            <button>Explore more >></button>
        </div>

        <div class="section_layer2">
            <h2>OUR SERVICES</h2>
            <h5>We Get The Job Done, No Matter The Project</h5>
            <img src="images/layer12.png" alt="layer2">
            <h3>Website Devolopment</h3>
            <p>We provide website development services. <br> We are experts in below fields: <br> WordPress development
                <br> Magento development</p>
            <button>Explore more >></button>
            <hr>
        </div>


        <div class="section_layer3">
            <img src="images/layer13.png" alt="layer3">
            <h3>Custom IT & Software Services</h3>
            <p>We provide other IT and software services <br> too.We have a team of experts in many fields <br>of software development,coding as well as IT
                <br>related technologies.</p>
            <button>Explore more >></button>
        </div>


    </section>
    <!--END Above content-->


    <!--Below Content-->
    <!--Content Image-->
    <section>
        <div class="section_person">
                <h2>OUR CLIENTS</h2>
                <h5>The Circle Of Live And Deft Continute</h5>
                <img class="lazy"  data-src="../frontend/images/per1.gif" alt="person 1">
                <img class="lazy"  data-src="../frontend/images/per2.gif" alt="person 2">
                <img class="lazy"  data-src="../frontend/images/per3.gif" alt="person 3">
                <img class="lazy"  data-src="../frontend/images/per4.gif" alt="person 4">
                <img class="lazy"  data-src="../frontend/images/per5.gif" alt="person 5">
                 <hr>
        </div>

    </section>

    <!--END Content Image-->


    <!--Content footer-->
    <section>

        <div class="arrow-down"></div>
        <div class="section_atircle--cominication">
            <img class="lazy" data-src="../frontend/images/img1.gif" alt="person communication">
            <h4>VESTIBULUM IPSUMS EROS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit,sed do eiusmod tempor incididunt ut labore et
                <br>dolore magna aliqua. Ut enim ad minim veniam ....</p>
        </div>

        <div class="section_atircle--computer">
            <h2>OUR ARTICLES</h2>
            <h5>We Like To Keep Evwryone Updated</h5>
            <img class="lazy" data-src="../frontend/images/img2.gif" alt="connect computer">
            <h4>VESTIBULUM IPSUMS EROS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit,sed do eiusmod tempor incididunt ut labore et
                <br>dolore magna aliqua. Ut enim ad minim veniam ....</p>
        </div>

        <div class="section_atircle--IOT">
            <img class="lazy" data-src="../frontend/images/img3.png" alt="connect IOT">
            <h4>VESTIBULUM IPSUMS EROS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit,sed do eiusmod tempor incididunt ut labore et
                <br>dolore magna aliqua. Ut enim ad minim veniam ....</p>
        </div>


    </section>
    <!--END Content footer-->

<!--END Below Content-->



    <!--Footer-->
    <?php include "footer.php" ?>
    <!--END footer-->



<!--    script slider-->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
<!--end script slider-->


<!--    script lazy loading-->
    <script>
        window.onscroll = function (cv) {
            lazyload();
        }
        function lazyload() {
            var lazyImage = document.getElementsByClassName('lazy');
            for(var i=0; i<lazyImage.length; i++ ){
                if (elementInViewport(lazyImage[i])){
                    lazyImage[i].setAttribute('src', lazyImage[i].getAttribute('data-src'));
                }
            }
        }

        function elementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)

            );
        }
    </script>
<!--end lazy loading-->
</body>
</html>

