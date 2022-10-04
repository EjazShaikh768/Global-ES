<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bytesed.com/tf/indurance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 13:53:29 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>GLOBAL - ENGiNEERiNG SERViCES</title>
    <link rel=icon href=assets/images/logo/logo3.png sizes="20x20" type="image/png">

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
    <style>
        #section:hover{
           background-color: wheat;
           color: #111;
           padding: 10px;
        }
        /* span{
            border: 3px dotted maroon;
            padding: 13px;
            border-radius: 49%;
            margin-left: 20px;
            font-size: 1.5rem;
        }
        .card p {
           justify-content:center;
        }
        .card p:hover{
            background-color: grey;
        }  */
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
                            $CAT_ID =$_GET['field_ID'];
                            $sql = "SELECT * FROM  field_section WHERE id = {$CAT_ID} ";
                            $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                            $row = mysqli_fetch_assoc($result);

?>
    <section class="breadcrumb-area"  id="section" style="background-image: url('admin/upload/<?php echo $row['section_image'];  ?>');background-size:100%; height:250px;">
        <div class="container">
            <div class="row">
           
                <div class="col-lg-12">
                    <h2 class="title"><?php echo $row['section_name'];  ?></h2>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="page-name"><?php echo $row['section_name'];  ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

              <div class="row padding-top-50 justify-content-center">
              <div class="col-sm-8 " style="text-align:justify;">
                    <h6><?php echo $row["section_description"]; ?> </h6>
                </div>
              </div>

    <section class="project-area padding-top-50 padding-bottom-90">
        <div class=" container">
             <div class=" row justify-content-around"> 
               
<?php
 include 'db.php';
//  $sql = "SELECT * FROM "


?>

<?php
       $sql1 = "SELECT * FROM sub_section WHERE section_id = {$row['id']} AND ssstatus = 1 ";
       $result1 = mysqli_query($conn , $sql1) or die("QUERY FAILED");
       if (mysqli_num_rows($result1) > 0) {
          while ($row1 = mysqli_fetch_assoc($result1)) {
            
     




?>
<!--  -->
               <div class=" card p-4  col-sm-12 p-5 shadow p-3 mb-5 bg-white rounded" id="section"  style="height:250px; color: white; background-image: url('admin/upload/<?php echo  $row1["sub_saction_image"];  ?>');background-repeat:no-repeat; background-size:100% 250px">
                <div class="row " style="">
                <div class="col-lg-12" id="section" style="text-align:justify; text-justify:inter-word;">
                <h4 class="title head-title"><?php echo  $row1['sub_saction_name']; ?></h4>
                <ul class="d-flex mb-3">
                        <li style="color:black"><a href="index.php"> <h6>HOME</h6> </a></li>
                        &nbsp; &nbsp; <li> <h6><b><i class="fa fa-angle-right"></i></b></h6> </li>&nbsp; &nbsp;
                        <li class="page-name"> <h6><?php echo $row['section_name'];  ?></h6> </li>
                    </ul>
                <h6 ><?php echo substr($row1['sub_saction_description'],0,200)." ....";  ?> </h6>
                </h6>
                <a href="singleSection.php?id=<?php echo $row1['ss_id']; ?>"><img src="assets/images/logo/readmore.png" alt="" class="mt-3" style="position: absolute; width: 10%;"></a>
                
                </div> 
              
                </div>
               </div>

            <?php } } ?>

               
              </div>
        </div>
    </section>

   
            
    <!-- industrial piping  -->
    <?php 
     if ($row['id'] == 1) {
        ?>
        
    <div class="container p-5">
  <h2>Piping Design Engineering</h2>
 
  <ul class="nav nav-tabs text-center">
    <li class="active"><a data-toggle="tab" href="#home" class="btn ">Piping Design Engineering</a></li>
    <li><a data-toggle="tab" href="#menu1" class="btn mx-5">3D Modeling & Extraction</a></li>
    <li><a data-toggle="tab" href="#menu2" class="btn ">Piping Flexibility Analysis</a></li>
    <li><a data-toggle="tab" href="#menu3" class="btn mx-5">Intelligent Reports</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="card p-5 tab-pane fade in active show">
        <ul style="list-style: square;">
            <li>Piping Study</li>
            <li>Preparation of design basis and standard drawings</li>
            <li> Preparation of piping material specifications (PMS)</li>
            <li>Pipe & Pump Sizing </li>
            <li>Preparation of equipment Datasheets </li>
            <li>Catalogue Creation </li>
            <li>Overall Plot Plan </li>
            <li>Design of Fire protection system </li>
        </ul>
    </div>
    <div id="menu1" class="card p-5 tab-pane fade">
           <ul style="list-style: square;">
            <li> Equipment Modelling and Layout</li>
            <li> Piping Modelling and Layout</li>
            <li> Piping Layout Extraction</li>
            <li> Pipe Rack and Secondary Support</li>
            <li> Equipment Layout Extraction</li>
            <li> Isometric Extraction</li>
            <li> Equipment and Pipe Line List</li>
            <li> MTO/BOQ</li>

           </ul>
    </div>
    <div id="menu2" class="card p-5 tab-pane fade">
    <ul style="list-style: square;">
            <li> Stress Analysis Model (CAESARII/ ROHR2)</li>
            <li> Analysis Formatted Report with Recommendation</li>
            <li> Stress Isometric</li>
            <li> Load List for Support Design</li>
            <li> Support Design</li>
           </ul>
    </div>
    <div id="menu3" class="card p-5 tab-pane fade">
    <ul style="list-style: square;">
            <li> Pipe and Pipe Fittings MTO/BOQ List</li>
            <li> Fasteners MTO/BOQ List</li>
            <li> Valve MTO/BOQ List</li>
            <li> Piping Support MTO/BOQ List </li>
            <li> Special Component MTO/BOQ list</li>
           </ul>
    </div>
  </div>
</div>

        <?php
     }
    ?>
   
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