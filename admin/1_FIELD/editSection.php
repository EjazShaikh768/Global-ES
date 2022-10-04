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
        <div class="card p-5 col-sm-12 col-md-6 col-lg-6 shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>EDIT SECTION DETAILS</b></h1></div>

                  <?php
                  include '../db.php';
                     $fid = $_GET["editid"];
                     $sql = "SELECT * FROM field_section WHERE id= '{$fid}' ";
                     $result = mysqli_query($conn,$sql);
                     if (mysqli_num_rows($result)) {
                        while ($row = mysqli_fetch_assoc($result)) {
?>
                  <form action="editFSave.php" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="name">TITLE</label>
                                <input type="text" class="form-control" value="<?php echo  $row['section_name']; ?>" name="name">
                                <input type="hidden" class="form-control" value="<?php echo  $row['id']; ?>" name="secid">
                            </div>
                           
                        <div class="form-group mt-3">
                            <img  src="../upload/<?php echo $row['section_image']; ?>" height="150px">
                            <input type="file" class="form-control mt-3 " name="new-image">
                            <input type="hidden" name="old-image"  value="<?php echo $row1['category_image']; ?>">
                        </div>
                       <div class=" form-group">
                        <label for="discription">DESCRIPTION</label>
                        <textarea type="text" class="form-control"  rows="4" cols="50"  name="description"><?php echo  $row['section_description']; ?></textarea>
                       </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> UPDATE </button>
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

if(isset($_POST['sumbit'])){
                
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
    
                $secid = mysqli_real_escape_string($conn , $_POST['secid']);
                $name = mysqli_real_escape_string($conn , $_POST['name']);
                $description = mysqli_real_escape_string($conn , $_POST['description']);
            
                $sql1 = "UPDATE field_section SET section_name = '{$name}',section_image= '{$image_name}' ,section_description= '{$description}' WHERE id = '{$secid}' ";
                if (mysqli_query($conn , $sql1)) {
                  
                header("location:showSection.php");
                }else{
                    echo "FAILED";
                }
                
            }
            ?>