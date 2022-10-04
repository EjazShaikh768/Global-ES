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
                   <center> <h2><b>CAREER PAGE</b></h2></center>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>
  </div>


 <div class="container mt-3 ">
 <div class="row justify-content-end">
       <div class="col-sm-2 d-flex text-end">
        
       <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
       <i class="fa-sharp fa-solid fa-2x fa-notes-medical"></i>
    </button>
       </div>
  </div>
 </div>
       <div class="container-fluid mt-1">
           <div class="row">

           </div>

       </div>






       
              <!-- Modal ADDTION -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD CAREER DETAILS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                    <div class="modal-body">
                    <form action="saveDetails.php" method="post" enctype="multipart/form-data">
                            
                            
                            <div class="form-group">
                                <label for="title">Profile</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="qualification">Qualifications:</label>
                                <input type="text" class="form-control" name="qualification">
                            </div>
                            <div class="form-group">
                                <label for="loction">Location</label>
                                <input type="text" class="form-control" name="loction">
                            </div>
                            <div class="form-group">
                                <label for="experiance">Experiance</label>
                                <input type="text" class="form-control" name="experiance">
                            </div>
                            <div class="form-group">
                                <label for="skills"> Skills</label>
                                <textarea type="text" rows="3" cols="50"  class="form-control" name="skills"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="roleResponsibility">Role and responsibilities:</label>
                                <textarea type="text" rows="5" cols="50"  class="form-control" name="roleResponsibility"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="addSkill">Additional Skills:</label>
                                <textarea type="text" rows="6" cols="50"  class="form-control" name="addSkill"></textarea>
                            </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> SUBMIT</button>
                       </div>
                      </div>
                  </form>
      </div>
    </div>
  </div>

  
 <div class="container mt-3 ">

 </div>
       <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-sm-12 bg-dark">
            <table class="table table-dark table-hover" >
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col"> TITLE</th>
      <th scope="col">EXPERIANCE</th>
      <th scope="col">KEY SKILL</th>
      <th scope="col">RESPONSIBILITY</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">DATE</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../db.php';
 $sql = "SELECT * FROM career ORDER BY id DESC";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

  

?>
    <tr>
      <th scope="row"><?php  echo $row['id']; ?></th>
      <td> <?php echo $row['title']; ?></td>
      <td> <?php echo $row['experiance']; ?></td> 
      <td><?php echo $row['keyskill']; ?>  </td>
      <td><?php echo $row['resposibility']; ?>  </td>
      <td><?php echo $row['description']; ?>  </td>
      <td><?php echo $row['created_at']; ?>  </td>
        <td> <?php  if ($row['careerstatus'] == 1) {
                                echo '<p> <a href="status.php?sssts1='.$row['id'].'&status=0 "><i class="fa-solid mt-4 fa-circle-check fa-3x text-info"></i></a> </p>';
                              }else {
                                echo '<p> <a href="status.php?sssts1='.$row['id'].'&status=1 "><i class="fa-solid mt-4 fa-circle-xmark fa-3x text-warning"></i></a> </p>';
                              } ?> </td> 
     </tr>
     <?php  } } ?>
  </tbody>
</table>
            </div>
        </div>
       </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
