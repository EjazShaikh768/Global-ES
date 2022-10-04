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
          <div class="col-sm-1"></div>
          <div class="col-sm-4 text-center" >
            <h2  style="margin-top:10px; color:wheat;" > <b> <a href="http://localhost/GEE/admin/dashboard.php" style="color:wheat;text-decoration:none;">DASHBOARD </a> </b>  </h2>   
            <span class="text-muted">SECTION IS A COLLECTION OF ENGINEERING DESIGN & SERVICES </span>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-4 text-center p-3">
                   <center> <h2><b>SUB SECTION</b></h2></center>
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
      <th scope="col">FILED</th>
      <th scope="col">SECTION</th>
      <th scope="col"> TITLE</th>
      <th scope="col">IMAGES</th>
      <th scope="col">ACTIONS</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../db.php';
 $sql = "SELECT * FROM sub_section1 ss1 JOIN  sub_section ss ON ss1.section_id1  = ss.ss_id  JOIN field_section fs ON ss1.field_id = fs.id ORDER BY sub_section_id  DESC ";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

  

?>
    <tr>
      <th scope="row"><?php echo $row['section_name']; ?></th>
      <td> <?php echo $row['sub_saction_name']; ?></td>
      <td> <?php echo $row['sub_section_name1']; ?></td> 
      <td ><img src="../upload/<?php echo $row['sub_section_image']; ?>" alt="" width="280px" height="100px"> </td>
      <td ><a href="editSubSection.php?edit=<?php echo $row['sub_section_id']; ?>" class="" style="margin-right:20px"><i class="fa-solid fa-2x text-info fa-pen-to-square"></i> </a>
       <a href="deleteSubSection.php?dlt=<?php echo $row['sub_section_id']; ?>"><i class="fa-solid mt-4 text-warning fa-2x fa-trash"></i></a> </td>
      <td> <?php  if ($row['sub_section_status'] == 1) {
                                echo '<p> <a href="status.php?sssts1='.$row['sub_section_id'].'&status=0 "><i class="fa-solid mt-4 fa-circle-check fa-3x text-info"></i></a> </p>';
                              }else {
                                echo '<p> <a href="status.php?sssts1='.$row['sub_section_id'].'&status=1 "><i class="fa-solid mt-4 fa-circle-xmark fa-3x text-warning"></i></a> </p>';
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
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                            
      <div class="form-group">
                                <label for="title">CHOOSE FILED SECTION</label>
                                <select name="fields" class="form-control" id="field">
                               
                                    <option value=""> CHOOSE</option>
                                   
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title">CHOOSE FILED SECTION</label>
                                <select name="section" class="form-control" id="section">
                               
                                    <option value=""> CHOOSE</option>
                                   
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title"> SUB SECTION NAME</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="file"> IMAGE</label>
                                <input type="file" class="form-control" name="fileToUpload">
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


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        // show function

        function loadData(type, field_id){
            $.ajax({
                url: "field_load.php",
                type : "POST",
                data : {type : type , id : field_id},
                success : function(data){
                  if (type == "section") {
                    
                    $("#section").html(data);
                  }else if(type == "sub_section"){
                    $("#section").append(data);
                  }else{
                    $("#field").append(data);
                  }
                }
            });
        }
        loadData();
        $("#field").on("change",function(){
           var field = $("#field").val();
       
           loadData("section",field);
        });
        $("#section").on("change",function(){
           var section = $("#section").val();

           loadData("sub_section",field);
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>



<?php

include '../db.php';
if (isset($_POST['submit'])) {
    if (isset($_FILES['fileToUpload'])) {
        $errors = array();

        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = (explode('.', $file_name));

        $new_name = time()."_".basename($file_name);
        $target = "../upload/".$new_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $target);
        }else{
            print_r($errors);
            die();
        }
    }

    $section = mysqli_real_escape_string($conn,$_POST['fields']);
    $section1 = mysqli_real_escape_string($conn,$_POST['section']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $sql3 = "INSERT INTO sub_section1 (field_id,section_id1,sub_section_name1,sub_section_image,sub_section_description)
                                 VALUES('{$section}','{$section1}','{$title}','{$new_name}','{$description}')";

    if(mysqli_query($conn,$sql3)){
      echo '<div class="alert alert-danger w-60">YOUR RECORD HAS BEEN  ADDED </div>';
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }
}





?>


