<?php
  include_once '../connection.php';


  $vid = $_POST['v_id'];
  $vn = $_POST['vname'];
  $vd = $_POST['vdob'];
  $vg = $_POST['vgender'];
  $vp = $_POST['vphone'];
 
  
  $sql = "INSERT INTO victim (v_id,v_name,v_dob,v_gender,v_phone) VALUES ('$vid','$vn','$vd','$vg','$vp');";
  mysqli_query($conn,$sql);
  header("Location: add.html?added=success");