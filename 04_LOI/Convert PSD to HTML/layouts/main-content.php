    <div class="clearfix"></div>
    <div class="section_content_clients">
        <div class="section_content_clients_title">
            <div class="content-line"></div>
            <h1>OUR CLIENTS</h1>
            <h2>The circle Of Live And Deft Continute..</h2>
        </div>
        <div class="section_content_clients_content">
            <ul>
                <li><img class="lazy" data-src="images/per1.gif" alt="vinsoft-person-1"></li>
                <li><img class="lazy" data-src="images/per2.gif" alt="vinsoft-person-2"></li>
                <li><img class="lazy" data-src="images/per3.gif" alt="vinsoft-person-3"></li>
                <li><img class="lazy" data-src="images/per4.gif" alt="vinsoft-person-4"></li>
                <li><img class="lazy" data-src="images/per5.gif" alt="vinsoft-person-5"></li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
    <!--       END SECTION CLIENTS--------------------------------------- -->

    <div class="section_content_articles">
        <div class="section_content_articles_title">
            <div class="content-line"></div>
            <h1>OUR ARTICLES</h1>
            <h2>We Like To Keep Everyone Update</h2>
        </div>
        <div class="section_content_articles_content">
            <ul>
                <li>
                    <img class="lazy" data-src="images/img1.gif">
                    <h3>VESTIBULUM IPSUMS EROS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ....</p>
                </li>
                <li>
                    <img class="lazy" data-src="images/img2.gif">
                    <h3>Vestibulum Ipsums Eros</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ....</p>
                </li>
                <li>
                    <img class="lazy" data-src="images/img3.gif">
                    <h3>Vestibulum Ipsums Eros</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ....</p>
                </li>
                <script type="text/javascript">
                    $(function() {
                        $("img.lazy").lazyload({
                            threshold : 200
                        });
                    });
                </script>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!--      END SECTION ARTICLES--------------------------------- -->
    </div>
</section>
    <?php
        $getFooter = file_get_contents("layouts/footer.php");
        echo $getFooter;
    ?>