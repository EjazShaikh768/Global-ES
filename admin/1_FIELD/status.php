<?php

include '../db.php';

$psts = $_GET['sts'];
$status = $_GET['status'];

$sql = "UPDATE field_section SET status = $status WHERE id  = '{$psts}' ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:showSection.php");
?>