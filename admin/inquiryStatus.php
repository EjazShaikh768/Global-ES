<?php

include '../db.php';

$psts = $_GET['sssts1'];
$status = $_GET['status'];

$sql = "UPDATE quote SET inquiryStatus = $status WHERE id  = '{$psts}' ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:inquieryShow.php");
?>