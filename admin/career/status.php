<?php

include '../db.php';

$psts = $_GET['sssts1'];
$status = $_GET['status'];

$sql = "UPDATE career SET careerstatus ='{$status}' WHERE id = '{$psts}' ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:showcareer.php");
?>