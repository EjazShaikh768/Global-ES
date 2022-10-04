<?php

include '../db.php';

$psts = $_GET['sssts'];
$status = $_GET['status'];

$sql = "UPDATE sub_section SET ssstatus = $status WHERE ss_id  = '{$psts}' ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:showSubSection.php");
?>