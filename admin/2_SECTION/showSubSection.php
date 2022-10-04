<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEE SECTION</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <div class="row " style="background:#111; height:200px; justify-content:center; " >
  <!-- <img src="../images/hvac.jpg" alt="" style="postion:absolute; height:200px;"> -->
    <div class="container">
    <div class="row"  style="color:white;margin-top:70px;">
          <div class="col-sm-1"></div>
          <div class="col-sm-4 text-center" >
            <h2  style="margin-top:10px; color:wheat;" > <b> <a href="http://localhost/GEE/admin/dashboard.php" style="color:wheat;text-decoration:none;">DASHBOARD </a> </b>  </h2>   
            <span class="text-muted">SECTION IS A COLLECTION OF ENGINEERING DESIGN & SERVICES </span>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-4 text-center p-3">
                   <center> <h2><b>SECTION</b></h2></center>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>
  </div>


 <div class="container mt-3 ">
 <div class="row justify-content-end">
       <div class="col-sm-3 text-end">
       <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
       <i class="fa-sharp fa-solid fa-2x fa-notes-medical"></i>
    </button>
       </div>
  </div>
 </div>
       <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-sm-12 bg-dark">
            <table class="table table-dark table-hover" >
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col">SECTION</th>
      <th scope="col">SUB SECTION TITLE</th>
      <th scope="col">IMAGES</th>
      <th scope="col">ACTIONS</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../db.php';
 $sql = "SELECT * FROM sub_section ss INNER JOIN  field_section fs WHERE ss.section_id = fs.id ";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

  

?>
    <tr>
      <th scope="row"><?php echo $row['ss_id']; ?></th>
      <th scope="row"><?php echo $row['section_name']; ?></th>
      <td> <?php echo $row['sub_saction_name']; ?></td>
      <td ><img src="../upload/<?php echo $row['sub_saction_image']; ?>" alt="" width="280px" height="100px"> </td>
      <td ><a href="editSection.php?edit=<?php echo $row['ss_id']; ?>" class="" style="margin-right:20px"><i class="fa-solid fa-2x text-info fa-pen-to-square"></i> </a>
       <a href="DeleteSection.php?dlt=<?php echo $row['ss_id']; ?>"><i class="fa-solid mt-4 text-warning fa-2x fa-trash"></i></a> </td>
      <td> <?php  if ($row['ssstatus'] == 1) {
                                echo '<p> <a href="status.php?sssts='.$row['ss_id'].'&status=0 "><i class="fa-solid mt-4 fa-circle-check fa-3x text-info"></i></a> </p>';
                              }else {
                                echo '<p> <a href="status.php?sssts='.$row['ss_id'].'&status=1 "><i class="fa-solid mt-4 fa-circle-xmark fa-3x text-warning"></i></a> </p>';
                              } ?> </td>
     </tr>
     <?php } } ?>
  </tbody>
</table>
            </div>
        </div>
       </div>



       <!-- Modal ADDTION -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD SECTION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="addSubSection.php" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="title">CHOOSE FILED SECTION</label>
                                <select name="section" class="form-control" id="">
                                <?php
                                    include '../db.php';
                                $sql = "SELECT * FROM field_section ";
                                $result = mysqli_query($conn,$sql) or die("Query Failed");
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <option value="<?php echo  $row['id']; ?>"> <?php echo  $row['section_name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title"> SUB SECTION NAME</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="file"> IMAGE</label>
                                <input type="file" class="form-control" name="file">
                            </div>
                            <div class="form-group">
                                <label for="title">DESCRIPTION</label>
                                <textarea type="text" rows="4" cols="50"  class="form-control" name="description"></textarea>
                            </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> SUBMIT</button>
                       </div>
                      </div>
                  </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
