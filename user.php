<?php
  include 'session.php';
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
     <div class="search-banner">
       <h1 class="doc-heading">User</h1>
       <form class="search d-flex" action="index.html" method="post">
         <input type="search" name="" value="" class="form-control me-2" placeholder="Search">
         <button type="button" name="button" class="search-btn" >Search</button>
       </form>
     </div>
     <table class="table-primary table">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Role</th>
         <th>Password</th>
         <th>Upadate User</th>
         <th>Delete User</th>
       </tr>
       <tr>
         <td>1</td>
         <td>Hamza</td>
         <td>Password</td>
         <td>Doctor</td>
         <td><a href="doctor.php"><input type="button" class="btn btn-success" value="Update"></a></td>
         <td><a href="doctor.php"><input type="button" class="btn btn-success" value="delete"></a></td>
       </tr>
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>
 </html>
