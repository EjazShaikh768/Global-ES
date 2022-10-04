<?php
include '../db.php';
$id = $_GET['dlt'];
$sql = "DELETE FROM  field_section WHERE id = '{$id}' ";

$result = mysqli_query($conn,$sql) or die("query failed");

header("location:showSection.php"); 

?>