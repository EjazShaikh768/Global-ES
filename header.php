<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/indurance/index-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 13:53:16 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>GLOBAL - ENGiNEERiNG SERViCES</title>
    <link rel=icon href=favicon1.png sizes="60x60" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>


    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="https://bytesed.com/tf/indurance/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Search Here'" required>
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>


    <header class="header-area header-home-03">

        <div class="info-bar">
            <div class="info-bar-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info-bar-inner">
                                <div class="left-content-area">
                                    <div class="logo-area">
                                        <a href="index.html"><img src="assets/images/logo/logo1.png" alt="logo"
                                                style="hieght:10px"></a>
                                    </div>
                                </div>
                                <div class="right-content-area">
                                    <div class="info-bottom-right">
                                        <ul class="info-items-flex">
                                            <li class="call-us-part">
                                                <div class="call-us-icon">
                                                    <div class="icon">
                                                        <!-- <i class="la la-phone-volume"></i> -->
                                                    </div>
                                                </div>
                                                <!-- <div class="call-us-text">
                                                    <h4 class="title">call us</h4>
                                                    <span class="details">+91 458 654 528 </span> 
                                                </div> -->
                                            </li>
                                            <li class="mail-part">
                                                <div class="mail-us-icon">
                                                    <div class="icon">
                                                        <!-- <i class="la la-envelope-open"></i> -->
                                                    </div>
                                                </div>
                                                <!-- <div class="mail-us-text">
                                                    <h4 class="title">send us mail</h4>
                                                    <span class="details"><a
                                                            href="https://bytesed.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="d1b8bfb7be91b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</a></span>
                                                </div> -->
                                            </li>
                                        </ul>
                                        <div class="icon-part">
                                            <ul>
                                                <!-- <li id="search"><a href="#"><i class="la la-search"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="la la-user"></i></a></li>
                                                <li class="cart"><a href="javascript:void(0)"><i
                                                            class="la la-shopping-cart"></i></a><span
                                                        class="badge">1</span></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-area navbar-expand-lg nav-style-02 nav-absolute">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggle-icon"></span>
                        <span class="toggle-icon"></span>
                        <span class="toggle-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav">
                        <li>
                            <a href="index.php">HOME</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">SERVICES</a>
                            <ul class="sub-menu">
                            <?php
                     include 'db.php';
                     $sqln = "SELECT * FROM field_section WHERE status = 1 ";
                     $resultn = mysqli_query($conn , $sqln) or die();
                     if (mysqli_num_rows($resultn) > 0) {
                         while ($rown = mysqli_fetch_assoc($resultn)) {
                    ?>
                    <li><a href='section.php?field_ID=<?php echo $rown['id'];?>'><?php echo $rown['section_name'];  ?></a>
                </li>
                    <?php
                }
                     }?>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="blog.php">BLOG</a>
                        </li> -->
                        <li>
                            <a href="about.php">ABOUT US</a>
                        </li>
                        <li>
                            <a href="contact.php">CONTACT US</a>
                        </li>
                    </ul>
                </div>


                <div class="nav-right-content indurance-nav-right">
                    <span><a href="Quote.php">get a quote</a></span>
                </div>

            </div>
        </nav>

    </header>