<?php
session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 'Admin'){
  header('Location: dashboard.php');
}elseif($_SESSION['role'] == 'Doctor'){
  header('Location: checkpatient.php');
}elseif($_SESSION['role'] == 'pharmacist'){
  $invoice_number = $_SESSION['invoice_number'];
  header("location:simplepharmacy/home.php?invoice_number=$invoice_number");
}else{
  header('Location: patient.php');
}
}

  include "loginquery.php";
  function invoice_number(){   //********Outputting Random Number For Invoice Number********

  $chars = "09302909209300923";

  srand((double)microtime()*1000000);

  $i = 1;

  $pass = '';

  while($i <=7){

    $num  = rand()%10;
    $tmp  = substr($chars, $num,1);
    $pass = $pass.$tmp;
    $i++;
  }
  return $pass;
                      //********Outputting Random Number For Invoice Number********
}

?>

  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HUM Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <?php include "navbar.php" ?>
    <div class=" form-bg ">
      <div class=" bg-container justify-content-center align-items-center d-flex">
        <div class="row form-container align-items-center ">
          <?php
          if($error){
            echo '<div class="alert alert-warning alert-dismissible fade show " role="alert">
                    <strong>Error!</strong> Invalid User Name or Password
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          }
          if($emp_name){
            echo '<div class="alert alert-warning alert-dismissible fade show " role="alert">
                    <strong>Error!</strong> User Name is empty
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          }
          if($emp_password){
            echo '<div class="alert alert-warning alert-dismissible fade show " role="alert">
                    <strong>Error!</strong> Password is empty
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          }
          if($invalid_user){
            echo '<div class="alert alert-warning alert-dismissible fade show " role="alert">
                    <strong>Error!</strong> Invalid User
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          }
          ?>
          <form action="login.php" method="post">
            <div class="mb-3">
              <label  class="form-label">User Name</label>
              <input type="text" class="form-control"  aria-describedby="nameHelp" name="uname">
              <div  class="form-text">Enter your user name.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="role m-2">
              <label for="Select" >Select One</label><br>
              <select id="select" name="role">
              <option value="Admin">Admin</option>
              <option value="Recptionist">Recptionist</option>
              <option value="pharmacist">pharmacist</option>
              <option value="Doctor">Doctor</option>
              </select>
            </div>
            <input type="hidden" aucomplete="off" name="invoice_number" value="CA-3009322?>">
            <button type="submit" class="btn btn-primary" name="Accept">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
