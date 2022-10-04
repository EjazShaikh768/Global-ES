
<?php

include '../db.php';


    $field = mysqli_real_escape_string($conn,$_POST['fields']);
    $section = mysqli_real_escape_string($conn,$_POST['section']);
    $section1 = mysqli_real_escape_string($conn,$_POST['section1']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $sql = "INSERT INTO details(field_id,section_id,Dsection_id1,title,description)
                                 VALUES('{$field}','{$section}','{$section1}','{$title}','{$description}')";

    if(mysqli_query($conn,$sql)){
        header("location:showDetails.php");
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }





?>