<?php

if(isset($_POST['upload'])){
    $upload[] = ($_FILES['images']['name']);
    print_r($upload);
 }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">        
        <input type="file" name="images[]" multiple="multiple">
        <input type="submit" name="upload" value="upload">
        </form>
    </body>
</html>