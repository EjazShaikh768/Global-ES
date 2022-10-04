  
<?php
//   include './db.php';

//   session_start();

//   if(isset($_SESSION["full_name"])){
//   }else{
    
//     header("Location:http://localhost/DeccanOverseas/admin/");
//   }
?>


  <a class="btn btn-light  " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="width:20%; ">
   <i class="fa-solid fa-bars"></i>
</a>
 <!-- <div class="row justify-content-center">
            <div class="  my-2 col-sm-11 text-center ">
              <center>
              <img src="images/logo.jpeg" alt="" style="width:100px ;">
           <h1 style="color: #484848;">DeccanOverseas</h1>
              </center>
            </div>
         </div> -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">

    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><b><?php // echo $_SESSION["full_name"]; ?></b></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h2><b>DASHBOARD</b></h2>
    <div class="" style="text-align:right;">
      <a href="signout.php" class="btn btn-outline-dark">LOGOUT</a>

    </div>
    <div class="dropdown  ">
     <!--  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button> -->      <ul class="list-group"  id="sidebar" style="padding-top:30px ;">
                <!-- <li class="list-group-item " aria-current="true"><a href="dashboard.php">DASHBOARD </a>  </li> -->
                <?php
                // if ($_SESSION['full_name']) {
              
                //   echo '<li class="list-group-item list-group-item-action"><a href="UserShow.php"> EMPLOYEE </a></li>';
                // }

                ?>
                <li class="list-group-item list-group-item-action"><a href="1_FIELD/showSection.php">  <h5> FIELD </h5> </a></li>
                <li class="list-group-item list-group-item-action"><a href="2_SECTION/showSubSection.php">  <h5>  SECTION </h5> </a></li>
                <li class="list-group-item list-group-item-action"><a href="3_SUB_SECTION/showSubSection.php">  <h5> SUB SECTION </h5> </a></li> 
                <li class="list-group-item list-group-item-action"><a href="4_DETAILS/showDetails.php">  <h5> DETAILS </h5> </a></li>
                 <li class="list-group-item list-group-item-action"><a href="TEAM/MemmberShow.php">  <h5>TEAM </h5> </a></li>
                <li class="list-group-item list-group-item-action"><a href="single_pages/aboutShow.php"> <h5>ABOUT</h5>  </a></li>
                <li class="list-group-item list-group-item-action"><a href="contactUsShow.php">  <h5> CONTACT US </h5>  </a></li>
                <li class="list-group-item list-group-item-action"><a href="inquieryShow.php">  <h5> INQUIRY </h5> </a></li>
                <li class="list-group-item list-group-item-action"><a href="reviewShow.php"> <h5> REVIEW </h5>  </a></li>
                <li class="list-group-item list-group-item-action"><a href="career/showcareer.php"> <h5> CAREER </h5>  </a></li>
              </ul>
    </div>
  </div>