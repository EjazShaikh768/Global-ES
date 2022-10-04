<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/style.css">
    <title>GEE - SIGN IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="">
   
  <div class="container" style="margin-top:3%;">
    <div class="row justify-content-center" >
        <div class="card p-5 col-sm-12 col-md-5 col-lg-5     shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>ADD SUB SECTION</b></h1></div>
                  <!-- <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
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
                  </form> -->
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


<?php

include '../db.php';
if (isset($_POST['submit'])) {
    if (isset($_FILES['file'])) {
        $errors = array();

        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
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

    $section = mysqli_real_escape_string($conn,$_POST['section']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $sql = "INSERT INTO  sub_section (section_id,sub_saction_name,sub_saction_image,sub_saction_description)
                                 VALUES('{$section}','{$title}','{$new_name}','{$description}')";

    if(mysqli_query($conn,$sql)){
        header("location:showSubSection.php");
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }
}





?>