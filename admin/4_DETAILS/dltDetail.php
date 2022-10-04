<?php
include '../db.php';
$id = $_GET['dlt'];
$sql = "DELETE FROM details WHERE dtl_id = '{$id}' ";

$result = mysqli_query($conn,$sql) or die("query failed");

header("location:showDetails.php"); 

?>