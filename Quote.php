<?php include 'header.php'; ?>            
                        
                        
<section class="breadcrumb-area" style="background-image: url('assets/images/home-03/projects-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <h2 class="title">latest blog</h2>
                    <ul>
                        <li>home</li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="page-name">Quote</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>          
                        
                        
                        
                      <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                            <div class="widget-form">
                            <div class="indurance-form-01">
                                <h5 class="title">request a free quote</h5>
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="text" placeholder="Name" name="name">
                            <input type="email" placeholder="Email" name="email">
                            <input type="text" placeholder="Phone" name="phone">
                            <input type="text" placeholder="SKYPE" name="skype">
                            <input type="file" placeholder="FILES" name="fileToUpload">
                            <textarea name="message" placeholder="Your Message" name="message"></textarea>
                            <button type="submit" class="template-btn" name="submit">send message</button>
                        </form>
                            </div>
                        </div>

                            </div>
                        </div>
                      </div>


                        <?php include 'footer.php'; ?>



                        <?php




include 'db.php';
if (isset($_POST['submit'])) {
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
            echo "<script>window.alert('record Has been submited')</script>";
            
         }else{
             echo '<div class="alert alert-danger w-60">PLEASE CONTACT . DON"T BE SMART </div>';
         }
}
    ?>