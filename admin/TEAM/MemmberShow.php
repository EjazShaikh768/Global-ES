<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <div class="row " style="background:#111; height:200px; justify-content:center; " >
  <!-- <img src="../images/hvac.jpg" alt="" style="postion:absolute; height:200px;"> -->
    <div class="container">
        <div class="row"  style="color:white;margin-top:70px;">
          <div class="col-sm-4 text-end" >
            <h2  style="margin-top:10px; color:wheat;" > <b> <a href="http://localhost/GEE/admin/dashboard.php" style="color:wheat;text-decoration:none;">DASHBOARD </a> </b>  </h2>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-4 text-center">
                   <center> <h2><b>MEP REVIT</b></h2></center>
                    <span class="text-muted">MECHANICAL ELECTRICAL PLUMBING & FIRE FITTING</span>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>
  </div>


 <div class="container my-3 ">
 <div class="row justify-content-end">
       <div class="col-sm-3">
        <a href="addMember.php" class="btn btn-dark w-100">ADD DETAILS</a>
       </div>
  </div>
 </div>

 
       <div class="container-fluid mt-1">

        <div class="row justify-content-around ">
          <div class="col-sm-12 text-center bg-dark p-5 text-light mb-3" >
            <h2><b>OUT TEAM</b></h2>
          </div>
          <?php
                  include '../db.php';
              $sql = "SELECT * FROM team ";
              $result = mysqli_query($conn,$sql) or die("Query Failed");
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
              ?>
          <div class="col-sm-5 shadow p-3 mb-5 bg-white rounded">
         

            <div class=" row mb-3">
              <div class="col-sm-4">
                      <img src="../upload/<?php echo $row['images']; ?>" alt="" style="width:100%;height:100%;">
              </div>
              <div class="col-sm-8 p-5">
              <h4><?php echo $row['full_name']; ?></h4>
              <h4><?php echo $row['occupation']; ?></h4>
              <h4><?php echo $row['section']."<b> / </b> ".$row['sub_section']; ?></h4>
              <h6><?php echo $row['qualification']."<b> / </b> ".$row['experiance']; ?></h6>
              <h6><?php echo $row['email']; ?></h6>
              <h6><?php echo $row['phone']; ?></h6>
              <h6>Flat 1014 , floor 10th Shadab Tower near camp near poona college </h6>
              <h6>pune 411102 , MAHARASHTRA</h6>
              </div>
            </div>

          </div>
            <?php } } ?>
       
          
        </div>
       </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
