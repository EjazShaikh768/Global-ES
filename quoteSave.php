<?php




include 'db.php';
if (isset($_FILES['fileToUpload'])) {
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = (explode('.', $file_name));



    $new_name = time()."_".basename($file_name);
    $target = "admin/upload/".$new_name;

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $target);
    }else{
        print_r($errors);
        die();
    }
}
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $skype = mysqli_real_escape_string($conn, $_POST['skype']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    $sql = "INSERT INTO quote(fullname,email,phone,skype,files,message) VALUES ('{$name}','{$email}','{$phone}','{$skype}','{$new_name}','{$message}')";

    

    if(mysqli_query($conn,$sql)){
        echo "<script>window.alert('record submited')</script>";
        
     }else{
         echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
     }
    ?>
