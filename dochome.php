<?php
session_start();
if($_SESSION['role'] !== "Admin"){
header('Location: login.php');
exit;
}
?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>HUM Home Page</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
   <body class="doc-home-bg ">
     <?php include "navbar.php" ?>
     <div class="doc-home-heading text-center justify-content-center align-items-center d-flex">
       <h1 >Welcome Dr. Ali <a href="patient.php" title="Patient" title="Patientx">Click Me</a> to check your patient</h1>

     </div>
     <p></p>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>
