<?php
if(isset($_POST['Accept'])){
  $name = $_POST['name'];
  $dep = $_POST['dept'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  include "conn.php";
  $sql2 = "UPDATE receptionist SET name = '$name', dep = '$dep' , password = '$password' WHERE id = '$id'";
  $result2 = mysqli_query($conn,$sql2);
  header('location:receptionist.php');
}
 ?>
