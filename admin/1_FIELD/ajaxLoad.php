<?php
    include '../db.php';
 $sql = "SELECT * FROM field_section ";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
 $data = "";
if(mysqli_num_rows($result) > 0){

    $output = '
    <table class="table table-dark table-hover" >
    <thead>
      <tr>
        <th scope="col">SR.NO</th>
        <th scope="col">TITLE</th>
        <th scope="col">IMAGES</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">ACTIONS</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    ';
    while($row = mysqli_fetch_assoc($result)){
        $data .= "
        <tr>
      <th > {$row["id"]}</th>
      <td>  {$row["section_name"]}</td>
      <td ><img src='../upload/{$row["section_image"]}'  width='280px' height='100px'> </td>
      <td>{$row["section_description"]} </td>
      <td ><a href='editSection.php?edit= {$row["id"]}'  style='margin-right:20px'><i class='fa-solid fa-2x text-info fa-pen-to-square'></i> </a> <a href='deleteSection.php?dlt={$row["id"]}'><i class='fa-solid mt-4 text-warning fa-2x fa-trash'></i></a> </td>
     
     </tr>
        ";
    } 
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
  }
    else{
        echo "DATA NOT INSERTED ";
    }





    // <td>  if ({$row['status']} == 1) {
    //   echo '<p> <a href="status.php?sts='.$row["id"].'&status=0 "><i class="fa-solid fa-circle-check fa-3x text-success"></i></a> </p>';
    // }else {
    //   echo '<p> <a href="status.php?sts='.$row['id'].'&status=1 "><i class="fa-solid fa-circle-xmark fa-3x text-warning"></i></a> </p>';
    // }
    // </td>
?>

