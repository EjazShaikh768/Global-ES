<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/indurance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 13:53:29 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>GLOBAL - ENGiNEERiNG SERViCES</title>
    <link rel=icon href=assets/images/logo/logo3.png sizes="20x20" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


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
        .box:hover {
  box-shadow: 20px 20px 31px rgba(33,33,33,.2); 
}
.box img:hover{
    -webkit-transform: scale(1.0);
	transform: scale(1.3);
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


 
    <?php
    include 'db.php';
    $id = $_GET['ssid'];
    $sql = "SELECT * FROM  sub_section1 ss1 JOIN sub_section ss ON  ss1.section_id1 = ss.ss_id JOIN field_section fs ON ss1.field_id = fs.id WHERE ss1.sub_section_id  = {$id}";
    $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
    $row = mysqli_fetch_assoc($result);

                  
?>
    <section class="breadcrumb-area" style="background-image: url('admin/upload/<?php echo $row['sub_section_image']; ?> '); height:300px;">
        <div class="container">
            <div class="row">
           
                <div class="col-lg-12 mt-5">
                    <h2 class="title"><?php echo $row['sub_saction_name']; ?></h2>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                         <li class="text-muted"> <?php echo $row['section_name']; ?>  </li> 
                        <li><i class="fa fa-angle-right"></i></li>
                         <li class="page-name"><?php echo $row['sub_section_name1']; ?>  </li> 
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="project-area padding-top-115 padding-bottom-90">
        <div class=" container">
             <div class=" row justify-content-around"> 
                <?php
                include 'db.php';
                $sql = "SELECT * FROM details d JOIN sub_section1 ss1 ON d.Dsection_id1  = ss1.sub_section_id  WHERE ss1.sub_section_id  = '{$id}' ";
                $result = mysqli_query($conn,$sql) or die("Query Failed");
                if (mysqli_num_rows($result) > 0) {
                while ($row1 = mysqli_fetch_Assoc($result)) {
                ?>
                <div class=" card col-sm-12 p-5 shadow p-3 mb-5 bg-white rounded">
                <div class="row justify-content-center ">
                   
                <div class="col-lg-11  " style="text-align:justify; text-justify:inter-word;">
                <h5 class="title"> <b><?php echo $row1['title']; ?></b> </h5>
                <ul class="d-flex mb-3">
                        <li style="color:black"><h6><?php echo $row['section_name']; ?> </h6> </li>
                        &nbsp; &nbsp; <li> <h6> <b><i class="fa fa-angle-right"></i></b></h6> </li>&nbsp; &nbsp;
                        <li class="page-name"> <h6><?php echo $row['sub_saction_name']; ?></h6> </li>
                        &nbsp; &nbsp; <li> <b><i class="fa fa-angle-right"></i></b> </li>&nbsp; &nbsp;
                        <li class="page-name"> <h6><?php echo $row['sub_section_name1']; ?></h6> </li>
                    </ul>
                <h6><?php $array = explode(". ",$row1['description']); 
                      ?>
                      <ul>
                      <?php
                   foreach ($array as $value) {
                    echo "<br><li>$value</li>";
                   }
                 
                ?>
                </ul></h6>
              
               
            </div>
                  
            
                </div>
               </div> 

               
    <?php } } ?> 




               <!-- <div class=" col-sm-12 shadow p-3 mb-5 bg-white rounded">
                
                <center><h2>OUR PROJECTS</h2></center>
                  <div class="row mt-3 justify-content-around" >
                  <div class="card p-5 col-sm-4 shadow-sm p-3 mb-5 bg-body rounded" style="text-align:justify; text-justify:inter-word;">
                            <img src="assets/images/apnaBanner/android.jpg" class="d-block w-100" alt="..." height="200px">

                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quia reiciendis distinctio at inventore optio eveniet consectetur? Assumenda tempore molestias dignissimos, aliquam molestiae sequi id laboriosam enim quos, ab possimus.<a href="singleSection.php" style="color:grey">ReadMore</a></p>
                    </div>
                  <div class="card p-5 col-sm-4 shadow-sm p-3 mb-5 bg-body rounded" style="text-align:justify; text-justify:inter-word;">
                            <img src="assets/images/apnaBanner/android.jpg" class="d-block w-100" alt="..." height="200px">

                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quia reiciendis distinctio at inventore optio eveniet consectetur? Assumenda tempore molestias dignissimos, aliquam molestiae sequi id laboriosam enim quos, ab possimus.<a href="singleSection.php" style="color:grey">ReadMore</a></p>
                    </div>
                  <div class="card p-5 col-sm-4 shadow-sm p-3 mb-5 bg-body rounded " style="text-align:justify; text-justify:inter-word;">
                            <img src="assets/images/apnaBanner/android.jpg" class="d-block w-100" alt="..." height="200px">

                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quia reiciendis distinctio at inventore optio eveniet consectetur? Assumenda tempore molestias dignissimos, aliquam molestiae sequi id laboriosam enim quos, ab possimus. <a href="singleSection.php" style="color:grey">ReadMore</a></p>
                    </div>
                  </div>
                  
               </div>
             -->

             </div>
        </div>
    </section>



   


    <section class="cta-section padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="cta-content">
                        <h4 class="title">Provide You The Highest Quality Work </h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cta-button">
                        <a href="tel:789456123" class="template-btn"><i class="fa fa-phone"> 786-344-9868</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?> 