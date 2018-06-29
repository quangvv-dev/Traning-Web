<section class="section_slider">
    <div class="section_slider_content">
        <ul>
            <li class="slide-img fade"><img src="images/slider1.png" alt="vinsoft-slider-1"></li>
            <li class="slide-img fade"><img src="images/sl2.png" alt="vinsoft-slider-2"></li>
        </ul>
        <div class="section_slider_info">
            <h1>WEB DESIGN COMPANY REPUPATION</h1>
            <h2>we've been brought the most values product and servecies to our global clients during last 10 year</h2>
        </div>
    </div>
    <script defer>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slide-img");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
    </script>
</section>
<!-- END SECTION SLIDER----------------------------------------------->

<section class="section_content">
    <div class="section_content_services">
        <div class="section_content_services_title">
            <h1>OUR SERVICES</h1>
            <h2>We Get the Jobs Done, No Matter The Project</h2>
        </div>
        <div class="section_content_services_content">
            <ul>
                <li>
                    <div class="content_image"></div>
                    <h3>Moble App Development</h3>
                    <p>We are experts in mobile developments industry for years. We have a team with 10 skilled developers that have been in this field for at least 5 years so far.</p>
                    <a href="#">Explore more>></a>
                </li>
                <li>
                    <div class="content_image--wsdev"></div>
                    <h3>Website Development</h3>
                    <p>We provide website development services.We are experts in below fields: WordPress development Magento development</p>
                    <a href="#">Explore more>></a>
                </li>
                <li>
                    <div class="content_image--IT"></div>
                    <h3>Custom IT & Software Services</h3>
                    <p>We provide other IT and software servicestoo.We have a team of experts in many fieldsof software development,coding as well as IT related technologies.</p>
                    <a href="#">Explore more>></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--    END SECTION SERVICES--------------------------------------------->