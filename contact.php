<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/indurance/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 13:53:45 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>GLOBAL - ENGiNEERiNG SERViCES</title>
    <link rel=icon href=assets/images/logo/logo3.png sizes="20x20" type="image/png">

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
                            <a href="about.html">HOME</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">SERVICES</a>
                            <ul class="sub-menu">
                            <?php
                     include 'db.php';
                     $sqln = "SELECT * FROM field_section";
                     $resultn = mysqli_query($conn , $sqln) or die();
                     if (mysqli_num_rows($resultn) > 0) {
                         while ($rown = mysqli_fetch_assoc($resultn)) {
                    ?>
        
        
                    <li><a href='section.php?field_ID=<?php echo $rown['id'];?>'><?php echo $rown['section_name'];  ?></a></li>
                    <?php
                }
                     }?>
                            </ul>
                        </li>
                       
                        <!-- <li>
                            <a href="blog.php">BLOG</a>
                        </li> -->
                        <li class="active">
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
        


    <section class="breadcrumb-area" style="background-image: url('assets/images/home-03/projects-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <h2 class="title">contact us</h2>
                    <ul>
                        <li>HOME</li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="page-name">contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <h2 class="title">drop us a message</h2>
                        <p class="title-paragraph margin-top-20">we're happy to discuss your project and answer any
                            question</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="indurance-form-02">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <input type="text" placeholder="Name" name="fullname">
                            <input type="email" placeholder="Email" name="email">
                            <input type="text" placeholder="Phone" name="phone">
                            <textarea name="message" placeholder="Your Message" name="message"></textarea>
                            <button type="submit" class="template-btn" name="submit">send message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                   <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe w-100" style="width:300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=poona college pune&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">https://mcpenation.com</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
                
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?> 

<?php




include 'db.php';
   if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    $sql = "INSERT INTO contactus(fullname,email,phone,message) VALUES ('{$name}','{$email}','{$phone}','{$message}')";


    if(mysqli_query($conn,$sql)){
        
        echo "<script>window.alert('record Has been submited')</script>";
     }else{
         echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
     }
   }
    ?>
