<?php
$error = false;
$emp_name = false;
$emp_password = false;
$invalid_user = false;
if(isset($_POST['Accept'])){
  include "conn.php";
  $name = $_POST['uname'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  if(empty($name)){
    $emp_name = true;
  }elseif(empty($password)) {
    $emp_password = true;
  }else{
    if($role == "Admin"){
      $sql = "SELECT * FROM admin WHERE username = '$name' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0){
        if($row['role'] === $role){
          session_start();
          $_SESSION['islogedin'] = true;
          $_SESSION['$_username'] = $name;
          $_SESSION['role'] = "Admin";
          header('Location: dashboard.php');
        }else{
          echo '<script>alert("invalid User")</script>';
        }
      }else{
        $error = true;
      }
    }elseif($role === 'Doctor'){
      $sql = "SELECT * FROM doctor WHERE name = '$name' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0){
        if($row['role'] === $role){
          session_start();
          $_SESSION['islogedin'] = true;
          $_SESSION['$_username'] = $name;
          $_SESSION['role'] = "Doctor";
          header('Location: checkpatient.php');
        }else{
          echo '<script>alert("invalid User")</script>';
        }
      }else{
        $error = true;
      }
    }elseif($role === "pharmacist"){
      $sql = "SELECT * FROM pharmacist WHERE name = '$name' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0){
        if($row['role'] === $role){
          session_start();
          $_SESSION['islogedin'] = true;
          $_SESSION['$_username'] = $name;
          $_SESSION['user_session'] = $name;
          $_SESSION['role'] = $role;
          $invoice_number="CA-".invoice_number();
          $_SESSION['invoice_number'] = $invoice_number;


        	header("location:simplepharmacy/home.php?invoice_number=$invoice_number");
        }else{
          echo '<script>alert("invalid User")</script>';
        }
      }else{
        $error = true;
      }
    }elseif($role == "Recptionist"){

      $sql = "SELECT * FROM receptionist WHERE name = '$name' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0){
        if($row['role'] === $role){
          session_start();
          $_SESSION['islogedin'] = true;
          $_SESSION['$_username'] = $name;
          $_SESSION['role'] = "Recptionist";
          header('Location: patient.php');
        }else{
          echo '<script>alert("invalid User")</script>';
        }
      }else{
        $error = true;
      }
    }
  }
}







?>
