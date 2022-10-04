<?php
include '../db.php';
$id = $_GET['dlt'];
$sql = "DELETE FROM sub_section WHERE ss_id = '{$id}' ";

$result = mysqli_query($conn,$sql) or die("query failed");

header("location:showSubSection.php"); 

?>