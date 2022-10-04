<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/style.css">
    <title>GEE - SECTION EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="">
   
  <div class="container" style="margin-top:3%;">
    <div class="row justify-content-center" >
        <div class="card p-5 col-sm-12 col-md-7 col-lg-6     shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>ADD SUB SECTION</b></h1></div>
                  <?php
    include '../db.php';
    $id = $_GET['edit'];
 $sql = "SELECT * FROM  details d  JOIN sub_section1  ss1 ON d.Dsection_id1 = ss1.sub_section_id JOIN sub_section  ss ON d.section_id = ss.ss_id JOIN field_section fs ON d.field_id = fs.id WHERE dtl_id   = '{$id}' ";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row1 = mysqli_fetch_assoc($result)){

  

?>
                  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
                             <div class="form-group">
                                <label for="title"> FIElD NAME</label>
                                <select name="section" class="form-control" id="">
                                <?php
                                    include '../db.php';
                                $sql = "SELECT * FROM  field_section fs JOIN details d ON fs.id = d.field_id   WHERE d.dtl_id   = '{$id}' ";
                                $result = mysqli_query($conn,$sql) or die("Query Failed");
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <option value="<?php echo  $row['id']; ?>"> <?php echo  $row['section_name']; ?></option>
                                    <?php } }   ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title"> FIElD NAME</label>
                                <select name="section" class="form-control" id="">
                                <?php
                                    include '../db.php';
                                $sql2 = "SELECT * FROM  sub_section ss JOIN details d ON ss.ss_id = d.section_id WHERE d.dtl_id   = '{$id}' ";
                                $result2 = mysqli_query($conn,$sql2) or die("Query Failed");
                                if(mysqli_num_rows($result2) > 0){
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                ?>
                                    <option value="<?php echo  $row2['ss_id']; ?>"> <?php echo  $row2['sub_saction_name']; ?></option>
                                    <?php } }   ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title"> FIElD NAME</label>
                                <select name="section" class="form-control" id="">
                                <?php
                                    include '../db.php';
                                $sql3 = "SELECT * FROM  sub_section1 ss1 JOIN details d ON ss1.sub_section_id  = d.Dsection_id1 WHERE d.dtl_id   = '{$id}' ";
                                $result3 = mysqli_query($conn,$sql3) or die("Query Failed");
                                if(mysqli_num_rows($result3) > 0){
                                    while($row3 = mysqli_fetch_assoc($result3)){
                                ?>
                                    <option value="<?php echo  $row3['sub_section_id']; ?>"> <?php echo  $row3['sub_section_name1']; ?></option>
                                    <?php } }   ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title"> TITLE</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $row1['title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">DESCRIPTION</label>
                                <textarea type="text" rows="15" cols="60"  class="form-control" name="description"> <?php echo $row1['description']; ?> </textarea>
                            </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> SUBMIT</button>
                       </div>
                      </div>
                  </form>
                  <?php } } ?>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


<?php

include '../db.php';
if (isset($_POST['submit'])) {


    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $sql1 = "UPDATE details SET title = '{$title}' , description= '{$description}' WHERE dtl_id  = '{$id}' ";

    if(mysqli_query($conn,$sql1)){
        header("location:http://localhost/GEE/admin/4_DETAILS/showDetails.php");
       
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }
}





?>  