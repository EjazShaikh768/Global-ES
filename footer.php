
    <footer class="footer-area">
        <div class="footer-top">

            <div class="footer-info">
                <div class="info-bar-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo-area">
                                    <a href="index.html"><img src="assets/images/logo/logo1.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul class="info-bottom-right">
                                    <li class="call-us-part white">
                                        <div class="icon">
                                            <i class="la la-phone-volume"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">call us</h4>
                                            <span class="detials">+91 983 499 4296</span>
                                        </div>
                                    </li>
                                    <li class="mail-part white">
                                        <div class="icon">
                                            <i class="la la-envelope-open"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">send us mail</h4>
                                            <span class="details"><a
                                                    href="https://bytesed.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e28b8c848da2879a838f928e87cc818d8f">global.sales.ge@gmail.com</a></span>
                                        </div>
                                    </li>
                                    <li class="office-time-part white">
                                        <div class="icon">
                                            <i class="la la-clock"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">office time</h4>
                                            <span class="details">10:00 Am - 06:00 Pm</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-widget-area">
                <div class="container">
                    <div class="row justify-content-between">
                        <!-- <div class="col-lg-3">
                            <div class="footer-widget widget about_us_widget">
                                <h5 class="widget-title">about us</h5>
                                <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra
                                    libero non facilisis imperdiet, mi augue feugiat nisl sit amet mollis enim velit
                                    Vestibulum fringilla nulla ultricies.</p>
                            </div>
                        </div> -->
                        <div class="col-lg-3">
                            <div class="footer-widget widget widget_nav_menu">
                                <h5 class="widget-title">useful links</h5>
                                <ul>
                                    <li><a href="index.php">HOME</a></li>
                                    <!-- <li><a href="blog.php">BLOG</a></li> -->
                                    <li><a href="career.php">CAREER</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li><a href="contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget widget widget_nav_menu">
                                <h5 class="widget-title">our services</h5>
                                <ul>
                                <?php
                     include 'db.php';
                     $sqln = "SELECT * FROM field_section WHERE status = 1 ";
                     $resultn = mysqli_query($conn , $sqln) or die();
                     if (mysqli_num_rows($resultn) > 0) {
                         while ($rown = mysqli_fetch_assoc($resultn)) {
                    ?>
                                    <li><a href="section.php?field_ID=<?php echo $rown['id'];?>"><?php echo $rown['section_name'];  ?></a></li>
                                    
                    <?php
                }
                     }?>
                                </ul>
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="footer-widget widget widget_nav_menu"  >
                                <h5 class="widget-title">CONTACT INFO</h5>
                               <h5 style="color:#32a89d">DREAMZLAND BUISNESS PARK,</h5>
                               <h6 style="color:#32a89d">B3 , Shope No 222 , 2nd Floor Boregaon</h6>
                               <h6 style="color:#32a89d"> Near Nagpur Higway.Amravati 444901</h6>
                               <h6 style="color:#32a89d">  MAHARASHTRA</h6>
                              <center> <h6 style="color:#32a89d" class="mt-4">
                                <a href=""><img src="assets/images/logo/fb1.png" alt="" width="30px"></a>
                                <a href="" class="mx-4"><img src="assets/images/logo/linkdin.png" alt="" width="30px"></a>
                                <a href="" ><img src="assets/images/logo/insta.webp" alt="" width="30px"></a>
                                <a href="" class="mx-4"><img src="assets/images/logo/twitter1.png" alt="" width="30px"></a>
                              
                            </h6></center>
                               
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="copyright-left">
                            <span>Designed & Developed By EJAZ SHAIKH</span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="copyright-right">
                            <span>&copy; copyright 2020 indurance all rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <div class="back-to-top">
        <i class="la la-chevron-circle-up"></i>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/easing.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>

<!-- Mirrored from bytesed.com/tf/indurance/index-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 13:53:22 GMT -->

</html>