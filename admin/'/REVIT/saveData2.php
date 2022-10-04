<?php
$conn = mysqli_connect("localhost","root","","ejazshaikh") or die("connecttion failed");
if (isset($_POST['submit'])) {
   
$file_name = $_FILES["image"]["name"];
 $location ="../upload/"; 
 $imagename = implode(", ",$file_name);

if(!empty($file_name)){

foreach ($file_name as $key => $val) {

   $targetPath = $location.$val;

     move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetPath);
}
}

$insert = "INSERT INTO multipleimages (imagename) VALUES ('$image   name')";

    $run = mysqli_query($conn, $insert);
     if ($run = true){ 
        echo "Multiple Image Uploaded";
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