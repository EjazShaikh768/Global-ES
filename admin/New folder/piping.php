<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/style.css">
    <title>GEE - SIGN IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="">
   
  <div class="container" style="margin-top:3%;">
    <div class="row justify-content-center" >
        <div class="card p-5 col-sm-12 col-md-10 col-lg-9 shadow p-3 mb-5 bg-body rounded">
                  <div class="card-title text-center" style="text-decoration:underline;"> <h1><b>PIPING & DESIGNING</b></h1></div>
                  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                      <div class="row d-flex">
                            <div class="col-lg-12">
                            <div class="form-group">
                                <label for="title">TITLE</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form-group">
                                <label for="title">DESCRIPTION</label>
                                <textarea type="text" rows="4" cols="50"  class="form-control" name="title"></textarea>
                            </div>
                            </div>
                       <div class="col-lg-6 form-group">
                        <label for="passwrod">IMAGE 1</label>
                        <input type="file" class="form-control" name="file1">
                       </div>
                       <div class="col-lg-6 form-group">
                        <label for="passwrod">IMAGE 2</label>
                        <input type="file" class="form-control" name="file2">
                       </div>
                       <div class="col-lg-6 form-group">
                        <label for="passwrod">IMAGE 3</label>
                        <input type="file" class="form-control" name="file3">
                       </div>
                       <div class="col-lg-6 form-group">
                        <label for="point1">POINT 1</label>
                        <input type="text" class="form-control" name="point1">
                       </div>
                       <div class=" col-lg-6 form-group">
                        <label for="point2">POINT 2</label>
                        <input type="text" class="form-control" name="point2">
                       </div>
                       <div class=" col-lg-6 form-group">
                        <label for="point3">POINT 3</label>
                        <input type="text" class="form-control" name="point3">
                       </div>
                       <div class=" col-lg-6 form-group">
                        <label for="point4">POINT 4</label>
                        <input type="text" class="form-control" name="point4">
                       </div>
                       <div class=" col-lg-6 form-group">
                        <label for="point5">POINT 5</label>
                        <input type="text" class="form-control" name="point5">
                       </div>
                       <div class=" form-group mt-3 text-center">
                        <button  class="btn btn-primary "  name="submit" style="width:35%;"> SUBMIT</button>
                       </div>
                      </div>
                  </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>