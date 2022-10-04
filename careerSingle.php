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
    <style>
        #jobBox:hover{
            background-color: white;
            color:black;
        }
    </style>
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
                       
                        <li>
                            <a href="blog.php">BLOG</a>
                        </li>
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
                        <li>home</li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="page-name">contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


   

<section  class="py-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 text-center " style="color:white;">
            </div> 

            <?php
    include 'db.php';
    $id = $_GET['cid'];
 $sql = "SELECT * FROM career WHERE id = {$id} ";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

  

?>
            <div class="card col-sm-10     p-5 " id="jobBox" >
                   <h3> <?php echo $row['title']; ?></h3>
                   <h5> <?php echo $row['Qualifications']; ?> </h5>
                   <h6> location <b> <?php echo $row['location']; ?></b></h6>
                   <h6> Experience <b>  <?php echo $row['experiance']; ?></b> <br> <br> </h6>
                   <h6> <b>SKILLS : </b>   <?php  $skill = explode(".",$row['keyskill']);              ?>
                   <ul>
                      <?php
                   foreach ($skill as $value) {
                    echo "<br><li> $value</li>";
                   }
                 
                ?>
                </ul><br><br> </h6>
                   <h6> <b>ADDITIONAL SKILL :</b>  <br> <?php  $addskill = explode(".",$row['resposibility']);              ?>
                   <ul>
                      <?php
                   foreach ($addskill as $value) {
                    echo "<br><li> $value</li>";
                   }
                 
                ?> <br><br></h6>
                   <h6>   <b>RESPONSIILITY : </b><br><br> <?php echo $row['description']; ?><br><br></h6>
                    
                   <center><a href="" class="btn btn-danger px-5">Apply</a></center>
            </div> 
           <?Php } } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?> 

<?php






?>