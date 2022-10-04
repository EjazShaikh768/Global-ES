<?php

include '../db.php';

$psts = $_GET['sssts1'];
$status = $_GET['status'];

$sql = "UPDATE contactus SET contactstatus = $status WHERE id  = '{$psts}' ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:contactUsShow.php");
?>