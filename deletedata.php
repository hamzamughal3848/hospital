<?php
      $id = $_GET['id'];
      $name =   $_GET['name'];
    if($name == 'doc'){
      include 'conn.php';
      $sql = "DELETE FROM doctor WHERE id = $id";
      $result = mysqli_query($conn,$sql);
      header('location:doctor.php');
    }elseif($name == 'pharm'){
      include 'conn.php';
      $sql = "DELETE FROM pharmacist WHERE id = $id";
      $result = mysqli_query($conn,$sql);
      header('location:pharmacist.php');
    }elseif($name == 'recep'){
      include 'conn.php';
      $sql = "DELETE FROM receptionist WHERE id = $id";
      $result = mysqli_query($conn,$sql);
      header('location:receptionist.php');
    }elseif($name == 'patient'){
      include 'conn.php';
      $sql = "DELETE FROM patient WHERE id = $id";
      $result = mysqli_query($conn,$sql);
      header('location:patient.php');
    }





?>
