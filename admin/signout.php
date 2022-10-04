<?php
session_start();

session_unset();

session_destroy();

header("location:http://localhost/GEE/admin/index.php")

?>