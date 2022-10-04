<?php
include '../db.php';
$id = $_GET['dlt'];
$sql = "DELETE FROM sub_section1 WHERE sub_section_id  = '{$id}' ";

$result = mysqli_query($conn,$sql) or die("query failed");

header("location:showSubSection.php"); 

?>