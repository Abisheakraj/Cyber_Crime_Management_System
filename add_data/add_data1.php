<?php
  include_once '../connection.php';

  $cid = $_POST['case_id'];
  $cd = $_POST['c_date'];
  $lo = $_POST['location'];
  $mo = $_POST['motive'];
  $st = $_POST['status'];
  $sub = $_POST['subject'];
  
  $sql = "INSERT INTO crime (case_id , c_date , location , motive , status , subject) VALUES ('$cid','$cd','$lo','$mo','$st','$sub');";
  mysqli_query($conn,$sql);
  header("Location: ../add.html?added=success");