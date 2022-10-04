<?php

include '../db.php';

$psts = $_GET['sssts1'];
$status = $_GET['status'];

$sql = "UPDATE sub_section1 SET sub_section_status ='{$status}' WHERE sub_section_id   = '{$psts}' ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:showSubSection.php");
?>