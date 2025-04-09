<?php
  session_start();
  if($_SESSION['role'] !== "Admin"){
  header('Location: login.php');
  exit;
  }
  include 'conn.php';
  $sql = "SELECT * FROM doctor";
  $result = mysqli_query($conn,$sql);
  $num_row = mysqli_num_rows($result);
  $sql2 = "SELECT * FROM receptionist";
  $result2 = mysqli_query($conn,$sql2);
  $num_row2 = mysqli_num_rows($result2);
  $sql3 = "SELECT * FROM pharmacist";
  $result3 = mysqli_query($conn,$sql3);
  $num_row3 = mysqli_num_rows($result3);



?>
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
     <?php include "home-navbar.php" ?>
     <div class="row justify-content-center d-flex my-3">
       <div class="col-md-3 col-sm-5  m-5 dashboard-card justify-content-center align-items-center d-flex">
          <div class="text-center">
            <h2><?php echo $num_row; ?></h2>
            <h1>Total Doctor</h1>
          </div>
       </div>
       <div class="col-md-3 col-sm-5 m-5 dashboard-card justify-content-center align-items-center d-flex">
         <div class="text-center">
           <h2><?php echo $num_row2; ?></h2>
           <h1>Total Receptionist</h1>
         </div>
       </div>
       <div class="col-md-3 col-sm-5 m-5 dashboard-card justify-content-center align-items-center d-flex">
         <div class="text-center">
           <h2><?php echo $num_row3; ?></h2>
           <h1>Total Pharmacits</h1>
         </div>
       </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>
