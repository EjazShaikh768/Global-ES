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
        <div class="card p-5 col-sm-12 col-md-5 col-lg-5     shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>ADD SUB SECTION</b></h1></div>
                  <?php
    include '../db.php';
    $id = $_GET['edit'];
 $sql = "SELECT * FROM  sub_section1 ss1  JOIN sub_section  ss ON ss1.section_id1 = ss.ss_id WHERE sub_section_id  = '{$id}' ";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result) > 0){
    while($row1 = mysqli_fetch_assoc($result)){

  

?>
                  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="title">CHOOSE FILED SECTION</label>
                                <select name="section" class="form-control" id="">
                                <?php
                                    include '../db.php';
                                $sql = "SELECT * FROM  sub_section1 ss JOIN field_section fs ON ss.field_id = fs.id  WHERE ss.sub_section_id  = '{$id}' ";
                                $result = mysqli_query($conn,$sql) or die("Query Failed");
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <option value="<?php echo  $row['id']; ?>"> <?php echo  $row['section_name']; ?></option>
                                    <?php } }   ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="title"> SUB SECTION NAME</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $row1['sub_saction_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title"> SUB SECTION NAME 1</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $row1['sub_section_name1']; ?>">
                            </div>
                        <div class="form-group mt-3">
                            <img  src="../upload/<?php echo $row1['sub_section_image']; ?>" height="150px" width="100%">
                            <input type="file" class="form-control mt-3 " name="new-image">
                            <input type="hidden" name="old-image"  value="<?php echo $row1['sub_section_image']; ?>">
                        </div>
                            <div class="form-group">
                                <label for="title">DESCRIPTION</label>
                                <textarea type="text" rows="4" cols="50"  class="form-control" name="description"> <?php echo $row1['sub_section_description']; ?> </textarea>
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
    if(empty($_FILES['new-image']['name'])){
        $new_name = $_POST['old_image'];
      }else{
        $errors = array();
      
        $file_name = $_FILES['new-image']['name'];
        $file_size = $_FILES['new-image']['size'];
        $file_tmp = $_FILES['new-image']['tmp_name'];
        $file_type = $_FILES['new-image']['type'];
        $file_ext = (explode('.',$file_name));
      
    
      
        
        $new_name = time(). "-".basename($file_name);
        $target = "../upload/".$new_name;
        $image_name = $new_name;
        if(empty($errors) == true){
          move_uploaded_file($file_tmp,$target);
        }else{
          print_r($errors);
          die();
        }
      }

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $sql1 = "UPDATE sub_section1 SET sub_section_name1 = '{$title}', sub_section_image = '{$new_name}' ,sub_section_description= '{$description}' WHERE sub_section_id  = '{$id}' ";

    if(mysqli_query($conn,$sql1)){
        header("location:showSubSection.php");
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }
}





?>  