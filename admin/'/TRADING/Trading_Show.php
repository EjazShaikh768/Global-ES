<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
  td i{
    font-size: 25px;
  }
</style>
  </head>
  <body>

  <div class="row " style="background:#111; height:200px; justify-content:center; " >
  <!-- <img src="../images/hvac.jpg" alt="" style="postion:absolute; height:200px;"> -->
    <div class="container">
        <div class="row"  style="color:white;margin-top:70px;">
          <div class="col-sm-4 text-end" >
            <h2  style="margin-top:10px; color:wheat;" > <b> <a href="http://localhost/GEE/admin/dashboard.php" style="color:wheat;text-decoration:none;">DASHBOARD </a> </b>  </h2>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-4 text-center">
                   <center> <h2><b>TRADING</b></h2></center>
                    <span class="text-muted">SAFTY EQUIPMENTS</span>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>
  </div>


 <div class="container mt-3 ">
 <div class="row justify-content-end">
       <div class="col-sm-3">
        <a href="trading_Add.php" class="btn btn-dark w-100">ADD DETAILS</a>
       </div>
  </div>
 </div>
       <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-sm-12 bg-dark">
            <table class="table table-dark table-hover" >
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col">TITLE</th>
      <th scope="col">IMAGES</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PRICE</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>HVAC</td>
      <td class="d-flex"><img src="../images/hvac.jpg" alt="" style="width:7rem;"></td>
      <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores repudiandae modi mollitia. Illo molestiae sint, dolor soluta corrupti a deserunt earum laboriosam architecto ipsam magnam iusto laudantium deleniti ratione ad.</td>
      <td>1 : Lorem ipsum dolor sit amet. <br></td>
      <td class=" "><a href="" class="" style="margin-right:10px"><i class="fa-solid  fa-pen-to-square"></i> </a> <a href=""><i class="fa-solid  fa-trash"></i></a> </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>HVAC</td>
      <td class="d-flex"><img src="../images/hvac.jpg" alt="" style="width:7rem;"></td>
      <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores repudiandae modi mollitia. Illo molestiae sint, dolor soluta corrupti a deserunt earum laboriosam architecto ipsam magnam iusto laudantium deleniti ratione ad.</td>
      <td>Lorem ipsum dolor sit amet. <br> </td>
      <td class=""><a href="" class="" style="margin-right:10px"><i class="fa-solid  fa-pen-to-square" ></i> </a> <a href=""><i class="fa-solid  fa-trash"></i></a> </td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
