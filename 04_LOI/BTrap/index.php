<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert PSD To HTML Bootrap 4</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper-container">
    <header>

        <div class="row">
            <div class="col-md-2">
                <a class="logo" href="#"><img src="images/logo_03.png" alt=""></a>
            </div>

            <div class="col-md-10">
                <div id="vinsofts-contact">
                    <ul>
                        <li><a href="#"><span><i class="fa fa-skype"></i></span>Skype:Vinsofts.com</a></li>
                        <li><a href="#"><span><i class="fa fa-google"></i></span>Gmail:Contact@Vinsofts.com</a></li>
                        <li><a href="#"><span><i class="fa fa-phone"></i></span>Skype:Vinsofts.com</a></li>
                    </ul>
                </div>

                <div id="menu">
                    <nav>
                        <ul class="nav nav-tabs" >
                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                            <li><a data-toggle="tab" href="#m1">Protflio</a></li>
                            <li><a data-toggle="tab" href="#m2">Services</a></li>
                            <li><a data-toggle="tab" href="#m3">Gallary</a></li>
                            <li><a data-toggle="tab" href="#m4">Contact</a></li>
                            <li><a data-toggle="tab" href="#m5">Recruitment</a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa fa-google-plus-official"></i></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    <section>
        <div id="visofts-slider">
            <div class="row">
                <div class="col-md-12">
                    <img class="slider-item " src="images/slider1.png" alt="">
                    <img class="slider-item " src="images/sl2.png" alt="">
                    <div class="slider-info">
                        <h2>WEB DESIGN COMPANY REPUPATION</h2>
                        <h3>we've been brougth the most valued products and
                            servecies to our global clients during last 10 year</h3>
                    </div>
                </div>
                <script defer>
                    var slideIndex = 0;
                    showSlides();
                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("slider-item");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {slideIndex = 1}
                        slides[slideIndex-1].style.display = "block";
                        setTimeout(showSlides, 4000); // Change image every 2 seconds
                    }
                </script>
            </div>
        </div>
    </section>

    <section>
        <div id="services">
            <div class="row">
                <h1>OUR SERVICES</h1>
                <h2>We Get The Job Done, No Matter The Project</h2>

                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><img src="images/moblie.gif" alt=""></a></li>
                        <li><h3>Mobile App Development</h3></li>
                        <li><p>We are experts in mobile development
                                industry for years. We have a team with 10
                                skilled developers that have been in this
                                field for at least 5 years so far.</p>
                        </li>
                        <li><a class="link-more" href="#">Explore more>></a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><img src="images/moblie.gif" alt=""></a></li>
                        <li><h3>Website Development</h3></li>
                        <li><p>We provide website development services.
                                We are experts in below fields:
                                WordPress development
                                Magento development
                            </p>
                        </li>
                        <li><a class="link-more" href="#">Explore more>></a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><img src="images/moblie.gif" alt=""></a></li>
                        <li><h3>Custom IT & Software Services</h3></li>
                        <li><p>We provide other IT and software services
                                too.We have a team of experts in many fields
                                of software development,coding as well as IT
                                related technologies.</p>
                        </li>
                        <li><a class="link-more" href="#">Explore more>></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="clients">
            <div class="line"></div>
            <div class="row">
                <h1>Our articles</h1>
                <h2>We Like To Keep Everyone Updated</h2>

                <div class="col-md-2">
                    <img class="person-image" src="images/per1.gif" alt="">
                </div>
                <div class="col-md-2">
                    <img class="person-image" src="images/per2.gif" alt="">
                </div>
                <div class="col-md-2">
                    <img class="person-image" src="images/per3.gif" alt="">
                </div>
                <div class="col-md-2">
                    <img class="person-image" src="images/per4.gif" alt="">
                </div>
                <div class="col-md-2">
                    <img class="person-image" src="images/per5.gif" alt="">
                </div>

            </div>
        </div>

        <div id="article">
            <div class="line"></div>
            <h1>Our articles</h1>
            <h2>We Like To Keep Everyone Updated</h2>
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><img src="images/img1.gif" alt=""></a></li>
                        <li><h3>Vestibulum Ipsums Eros</h3></li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam ....</p>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><img src="images/img2.gif" alt=""></a></li>
                        <li><h3>Vestibulum Ipsums Eros</h3></li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam ....</p>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><img src="images/img3.gif" alt=""></a></li>
                        <li><h3>Vestibulum Ipsums Eros</h3></li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam ....</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div id="footer-arrows"></div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-about">ABOUT VINSOFTS</h3>
                <div id="line-ft"></div>
                <p class="footer-about">
                    Vinsofts Co., Ltd is software
                    innovation and outsourcing
                    company based in Hanoi, Vietnam.
                    We provide top quality outsourcing
                    services to global clients from USA
                    to Australia, from Japan to
                    EU countries.</p>
            </div>

            <div class="col-md-4">
                <h3>ABOUT VINSOFTS</h3>
                <div class="line"></div>

                <form action="" class="submit-form">
                    <p>Name<span>*</span></p>
                    <div id="firts-name">
                        <input type="text" name="firts_name">
                        <p>First</p>
                    </div>

                    <div id="last-name">
                        <input type="text" name="last-name">
                        <p>Last</p>
                    </div>

                    <p>Email<span>*</span></p>
                    <input class="form-input" type="text" name="email">

                    <p>Comment<span>*</span></p>
                    <textarea class="form-input-area" cols="4" rows="50"></textarea>

                    <input id="submit" type="submit" name="submit" value="submit">
                </form>
            </div>

            <div class="col-md-4">
                <h3>ABOUT INFO</h3>
                <div class="line"></div>
                <div id="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.7704590039775!2d105.78420731500722!3d21.081828185969613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aaca6b20c103%3A0x8496c34619191a9e!2zVOG6rXAgdGjhu4MgMjEyIEjhu41jIHZp4buHbiBL4bu5IHRodeG6rXQgUXXDom4gc-G7sQ!5e0!3m2!1sen!2s!4v1530267350125" width="290px" height="220px" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                <p>Ki ốt số 3 Nhà N9, Khu 212, Học Viện Kỹ Thuật Quân Sự,<br/>
                    Đường Tân Xuân, Phường Xuân Đỉnh, Quận Bắc Từ Liêm, Hà Nội</p>
            </div>
        </div>
    </footer>
</div>
</body>
</html>