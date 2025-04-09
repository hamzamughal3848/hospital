<?php

if(isset($_POST['Accept'])){
  $name = $_POST['name'];
  $spec = $_POST['spec'];
  $dep = $_POST['dept'];
  $id = $_POST['id'];
  $password = $_POST['password'];
  include "conn.php";
  $sql2 = "UPDATE doctor SET name = '$name' , spec = '$spec' , dept = '$dep' , password = '$password' WHERE id = '$id'";
  $result2 = mysqli_query($conn,$sql2);
  header('location: doctor.php');
}

 ?>
