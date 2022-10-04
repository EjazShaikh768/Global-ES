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
          <div class="col-sm-4 text-center" >
            <h2  style="margin-top:10px; color:wheat;" > <b> <a href="http://localhost/GEE/admin/dashboard.php" style="color:wheat;text-decoration:none;">DASHBOARD </a> </b>  </h2>
         
            <center><span class="text-muted">WE PROVIDE MULTIPLE ENGINEERING DESIGN & SERVICES </span></center>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-4 text-center">
                   <center> <h2><b>CONTACT US FORM</b></h2></center>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>
  </div>








  
 <div class="container mt-3 ">

 </div>
       <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-sm-12 bg-light">
            <table class="table table-light table-hover" >
  <thead>
    <tr>
      <th scope="row">SR.NO</th>
      <th scope="col">FULLNAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">DATE & TIME</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../db.php';
 $sql = "SELECT * FROM contactus ORDER BY id DESC";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

  

?>
    <tr>
      <th scope="row"><?php echo $row["id"];?></th>
      <td> <?php echo $row["fullname"];?> </td>
      <td> <?php echo $row["email"];?> </td>
      <td> <?php echo $row["phone"];?> </td> 
      <td><?php echo $row["message"];?>  </td>
      <td><?php echo $row["created_at"];?>  </td>
      <td> <?php  if ($row['contactstatus'] == 1) {
                                echo '<p> <a href="contactUsStatus.php?sssts1='.$row['id'].'&status=0 "><i class="fa-solid mt-4 fa-circle-check fa-3x text-info"></i></a> </p>';
                             }else {
                                echo '<p> <a href="contactUsStatus.php?sssts1='.$row['id'].'&status=1 "><i class="fa-solid mt-4 fa-circle-xmark fa-3x text-warning"></i></a> </p>';
                            } ?> </td>
     </tr>
     <?php } } ?>
  </tbody>
</table>
            </div>
        </div>
       </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
