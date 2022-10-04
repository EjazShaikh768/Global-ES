<!-- <!doctype html>
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
        <div class="card p-5 col-sm-12 col-md-6 col-lg-6 shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>ADD MEMBER</b></h1></div>
                  <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">TITLE</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                       <div class=" form-group">
                        <label for="fileToUpload"> PICTURE</label>
                        <input type="file" class="form-control" name="fileToUpload">
                       </div>
                       <div class=" form-group">
                        <label for="discription">DESCRIPTION</label>
                        <textarea type="text" class="form-control"  rows="4" cols="50"  name="description"></textarea>
                       </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> SUBMIT</button>
                       </div>
                  </form>
        </div>
    </div>
  </div>


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html> -->


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

    $title = mysqli_real_escape_string($conn,$_POST['name']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $sql = "INSERT INTO field_section(section_name,section_image,section_description) VALUES('{$title}','{$new_name}','{$description}')";

    if(mysqli_query($conn,$sql)){
       header("location:showSection.php");
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }
}





?>