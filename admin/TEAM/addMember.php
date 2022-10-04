<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>GEE - SIGN IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="">
   
  <div class="container" style="margin-top:3%;">
    <div class="row justify-content-center" >
        <div class="card p-5 col-sm-12 col-md-5 col-lg-5 shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>ADD MEMBER </b></h1></div>
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">FULL NAME</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                       <div class=" form-group">
                        <label for="file">PROFILE PICTURE</label>
                        <input type="file" class="form-control" name="fileToUpload">
                       </div>
                       <div class=" form-group">
                        <label for="qualification">OCCUPATION  &nbsp;<i class="fa-solid fa-arrow-turn-down"></i></label>
                        <select  id="" class="form-control" name="occupation">
                          <option   value="" disabled>  WHAT IS YOUR ROLL IN OUR COMPANY</option>
                          <option value="FOUNDER">FOUNDER</option>
                          <option value="EMPLOYEE">EMPLOYEE</option>
                        </select>
                       </div>
                       <div class="form-group">
                                <label for="title">CHOOSE FILED SEONCTION  &nbsp; <i class="fa-solid fa-arrow-turn-down"></i></label>
                                <select name="filed_section" class="form-control" id="">
                          <option   value=" " disabled> WHICH PROFILE YOU WORK </option>
                                <?php
                                      include '../db.php';
                                  $sql = "SELECT * FROM field_section ";
                                  $result = mysqli_query($conn,$sql) or die("Query Failed");
                                  if(mysqli_num_rows($result) > 0){
                                      while($row = mysqli_fetch_assoc($result)){
                                  ?>
                                    <option value="<?php echo  $row['section_name']; ?>"> <?php echo  $row['section_name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div> 
                            
                       <div class="form-group">
                                <label for="title">CHOOSE FILED SEONCTION  &nbsp; <i class="fa-solid fa-arrow-turn-down"></i></label>
                                <select name="sub_section" class="form-control" id="">
                          <option   value=" " disabled> WHICH PROFILE YOU WORK </option>
                          <option   value="-" >  </option>
                                <?php
                                      include '../db.php';
                                  $sql = "SELECT * FROM sub_section ss INNER JOIN field_section fs WHERE ss.section_id = fs.id ";
                                  $result = mysqli_query($conn,$sql) or die("Query Failed");
                                  if(mysqli_num_rows($result) > 0){
                                      while($row = mysqli_fetch_assoc($result)){
                                  ?>
                                    <option value="<?php echo  $row['sub_saction_name']; ?>"> <?php echo  $row['sub_saction_name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div> 
                       <div class=" form-group">
                        <label for="qualification">QUALIFICATION</label>
                        <input type="text" class="form-control" name="qualification">
                       </div>
                       <div class="  form-group ">
                        <label for="phone"> PHONE NUMBER</label>
                          <input type="text" class="form-control" name="phone">
                        
                       </div>
                       <div class="  form-group">
                        <label for="exp">EXPERIENCE</label>
                        <input type="text" class="form-control" placeholder="IN YEAR" name="exp" min="1">
                       </div>
                       <div class="  form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" class="form-control" name="email">
                       </div>
                       <div class="form-group">
                          <label for="password">PASSOWRD</label>
                         <input type="password" class="form-control" name="password">
                       </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> SUBMIT</button>
                       </div>
                  </form>
        </div>
    </div>
  </div>


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


<?php
include '../db.php';
if (isset($_POST['submit'])) {
  
  if (isset($_FILES['fileToUpload'])) {
   $errors = array();

   $file_name = $_FILES['fileToUpload']['name'];
   $file_size = $_FILES['fileToUpload']['size'];
   $file_tmp = $_FILES['fileToUpload']['tmp_name'];
   $file_type = $_FILES['fileToUpload']['type'];
   $file_ext = (explode('.', $file_name));

   $new_name = time()."_".basename($file_name);
   $target = "../upload/".$new_name;

   if (empty($errors) == true) {
       move_uploaded_file($file_tmp, $target);
   }else{
       print_r($errors);
       die();
   }
  }


  $fullname = mysqli_real_escape_string($conn,$_POST['name']);
  $occupation = mysqli_real_escape_string($conn,$_POST['occupation']);
  $fieldSection = mysqli_real_escape_string($conn,$_POST['filed_section']);
  $subSection = mysqli_real_escape_string($conn,$_POST['sub_section']);
  $phone = mysqli_real_escape_string($conn,$_POST['phone']);
  $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
  $exp = mysqli_real_escape_string($conn,$_POST['exp']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));

  $sql = "INSERT INTO  team(full_name,images,occupation,section,sub_section,qualification,phone,experiance,email,password) 
                 VALUES('{$fullname}','{$new_name}','{$occupation}','{$fieldSection}','{$subSection}','{$qualification}',
                        '{$phone}','{$exp}','{$email}','{$password}')";
  
  if (mysqli_query($conn,$sql)) {
    header("location:showSubSection.php");
  }else{
    echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';

  }
   
 

}





?>