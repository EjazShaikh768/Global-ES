<?php
                                    include '../db.php';
                               if ($_POST['type'] == "") {
                                $sql1 = "SELECT * FROM field_section ";
                                $result1 = mysqli_query($conn,$sql1) or die("Query Failed");
                                $str = "";
                                    while($row1 = mysqli_fetch_assoc($result1)){
                             $str .= "<option value='{$row1['id']}'> {$row1['section_name']} </option>";
                                   
                                     }
                                     echo $str;
                               } else if($_POST['type'] == "section") {
                                    $sql1 = "SELECT * FROM sub_section WHERE section_id = {$_POST['id']} ";
                                    $result1 = mysqli_query($conn,$sql1) or die("Query Failed");
                                    $str = "";
                                    while($row1 = mysqli_fetch_assoc($result1)){
                                   $str .= "<option value='{$row1['ss_id']}'> {$row1['sub_saction_name']} </option>";
                                     }   

                                     echo $str;
                                    }else{
                                        $sql1 = "SELECT * FROM sub_section1 WHERE section_id = {$_POST['id']} ";
                                    $result1 = mysqli_query($conn,$sql1) or die("Query Failed");
                                    $str = "";
                                    while($row1 = mysqli_fetch_assoc($result1)){
                                   $str .= "<option value='{$row1['sub_section_id']}'> {$row1['sub_saction_name1']} </option>";
                                     }   

                                     echo $str;
                                    }
                               
                                     ?>