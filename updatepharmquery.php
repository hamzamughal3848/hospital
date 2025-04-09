<?php
if(isset($_POST['Accept'])){
  $name = $_POST['name'];
  $dep = $_POST['dept'];
  $password = $_POST['password'];
  include "conn.php";
  $sql2 = "UPDATE pharmacist SET name = '$name' , dept = '$dep' , password = '$password' WHERE id = '$id'";
  $result2 = mysqli_query($conn,$sql2);
  header('location:pharmacist.php');
}

 ?>
