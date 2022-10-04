<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>GEE - DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <style>
      .card b{
        color:black;
      }
      .card a{
        text-decoration: none;
      }
     </style>
 
  </head>
  <body>
    
  <div class="container-fluid">
<div class="container">
  
<div class="row" id="dashNav" style="height:80px;">

  <div class="col-sm-8 ">
    <h1 class="mt-3"><b> 
     &nbsp;&nbsp;&nbsp; GE ENGiNEERiNG SERViCES</b></h1>
  </div>
<div class="col-sm-1"></div>
  <div class="col-sm-3 mt-4 ">
    <!-- <a href="signout.php" ><i class="fa-solid fa-2x fa-lock "></i></a> -->
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php include 'sidebaar.php';  ?>
  </div>
</div>

</div>
</div>

<hr>
    <div class="container mt-4">
    <div class="row  justify-content-around">
               <div class="card text-center col-sm-3 p-3 shadow p-3 mb-5 bg-body rounded" style="positon:relative;">
                    <img src="images/mep_revit.jpg" alt="" width="100%" height="150px;">
                    <a href="REVIT/revit_Show.php"><h4><b>MEP  MEDELING <br> & DESIGN</b></h4></a>
               </div>
               <div class="card text-center col-sm-3 p-3 shadow p-3 mb-5 bg-body rounded" style="positon:relative;">
                    <img src="images/hvac.jpg" alt="" width="100%" height="150px;">
                    <a href="HVAC/hvacShow.php"><h4><b>INDUSTRIAL PIPING</b></h4></a>
               </div>
               <div class="card text-center col-sm-3 p-3 shadow p-3 mb-5 bg-body rounded" style="positon:relative;">
                    <img src="images/it.jpg" alt="" width="100%" height="150px;">
                    <a href="IT_SERVICES/IT_Show.php"><h4><b>IT & Services</b></h4></a>
               </div>
              </div>
        <div class="row  justify-content-around mt-2">
               <div class="card text-center col-sm-3 p-3 shadow p-3 mb-5 bg-body rounded" style="positon:relative;">
                    <img src="images/piping.webp" alt="" width="100%" height="150px;">
                  <a href="PIPING/piping_show.php">  <h4><b>PIPING</b></h4></a>
               </div>
               <div class="card text-center col-sm-3 p-3 shadow p-3 mb-5 bg-body rounded" style="positon:relative;">
                    <img src="images/video.jpg" alt="" width="100%" height="150px;">
                    <a href="VIDEOS_EDITING/video_Show.php"><h4><b>VIDEO EDITING</b></h4></a>
               </div>
               <div class="card text-center col-sm-3 p-3 shadow p-3 mb-5 bg-body rounded" style="positon:relative;">
                    <img src="images/safty-equipments.webp" alt="" width="100%" height="150px;">
                    <a href="TRADING/trading_show.php"><h4><b>TRADING</b></h4></a>
               </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html> 
