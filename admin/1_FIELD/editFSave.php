
<?php
include '../db.php';

                
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
            
                $sql = "UPDATE field_section SET section_name = '{$name}', section_image= '{$image_name}' ,section_description= '{$description}' WHERE id = '{$secid}' ";
                if (mysqli_query($conn , $sql)) {
                  header("location:showSection.php");
                }else{
                    echo "FAILED";
                }
                // echo "<pre>";
                // print_r($sql1);
                
          
            ?>