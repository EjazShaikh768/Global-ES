<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/style.css">
    <title>GEE - SIGN IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   
  <div class="container">
    <div class="row justify-content-center" style="margin-top:12%;">
        <div class="card p-5 col-sm-12 col-md-6 col-lg-5 shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title"> <h1><b>LOG IN</b></h1></div>
                  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                       <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" class="form-control" name="email">
                       </div>
                       <div class="form-group">
                        <label for="passwrod">PASSWORD</label>
                        <input type="password" class="form-control" name="password">
                       </div>
                       <div class="form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:60%;"> SIGN IN</button>
                       </div>
                  </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php

include 'db.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM admin WHERE email = '{$email}'AND password = '{$password}' ";
    $result = mysqli_query($conn,$sql) or die("query failed");
    if (mysqli_num_rows($result) > 0) {
        while(mysqli_fetch_assoc($result)){

        
        session_start();
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        header("location:http://localhost/GEE/admin/dashboard.php");
        }
    }else{
        echo '<div class="alert alert-danger w-60">Username and Password are not matched.</div>';
    }
}





?>