
<?php

include '../db.php';


    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
    $loction = mysqli_real_escape_string($conn,$_POST['loction']);
    $experiance = mysqli_real_escape_string($conn,$_POST['experiance']);
    $skills = mysqli_real_escape_string($conn,$_POST['skills']);
    $roleResponsibility = mysqli_real_escape_string($conn,$_POST['roleResponsibility']);
    $addSkill = mysqli_real_escape_string($conn,$_POST['addSkill']);

    $sql = "INSERT INTO  career (title,Qualifications,location,experiance,keyskill,description,resposibility)
                                 VALUES('{$title}','{$qualification}','{$loction}','{$experiance}','{$skills}','{$roleResponsibility}','{$addSkill}')";

    if(mysqli_query($conn,$sql)){
        header("location:showcareer.php");
    }else{
        echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
    }





?>