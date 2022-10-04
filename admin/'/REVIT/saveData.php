<?php
$conn = mysqli_connect("localhost","root","","ejazshaikh") or die("connecttion failed");
if (isset($_POST['submit'])) {
    $extension = array('jpeg','jpg','png','gif','webp');
    
    foreach($_FILES['image']['tmp_name'] as $key => $value){
       
        $filename = $_FILES['image']['name'][$key];
        $filename_tmp = $_FILES['image']['tmp_name'][$key];
        
        $ext = pathinfo ($filename,PATHINFO_EXTENSION);

        $finalimg = '';
        if (in_array($ext,$extension)) {
            if (!file_exists('../upload/'.$filename)) {
                move_uploaded_file($filename_tmp,'../upload/'.$filename);
                $finalimg = $filename;
            }else{
                $filename = str_replace('.','-',basename($filename,$ext));
                $newfilename = $filename.time().".".$ext;
                move_uploaded_file($filename_tmp,'../upload/'.$newfilename);
                $finalimg = $newfilename;
            }
            //insert 
            $sql = "INSERT INTO multipleimages(imagename)VALUE('{$finalimg}')";
            mysqli_query($conn, $sql);
            header("location:http://localhost/GEE/admin/REVIT/revit_Add.php");
        }else{
            // display error
        }
    }
}

// $title = mysqli_real_escape_string($conn,$_POST['title']);
// $description = mysqli_real_escape_string($conn,$_POST['description']);
// $point1 = mysqli_real_escape_string($conn,$_POST['point1']);
// $point2 = mysqli_real_escape_string($conn,$_POST['point2']);
// $point3 = mysqli_real_escape_string($conn,$_POST['point3']);
// $point4 = mysqli_real_escape_string($conn,$_POST['point4']);
// $point5 = mysqli_real_escape_string($conn,$_POST['point5']);
// '{$point2}''{$point3}''{$point4}','{$point5}'

// $sql = "INSERT INTO mep_modeling_design(title,image1,image2,image3,image4,description,point1,) 
// VALUES ('{$title}','{$image1}','{$image2}','{$image3}','{$image4}','{$description}','{$point1}')";

// if (mysqli_query($conn,$sql)) {
//     header("location:http://localhost/GEE/admin/REVIT/revit_Show.php");
// }else{
//     echo '<div class="alert alert-danger w-60">Try After Some Time.</div>';
// }



?>