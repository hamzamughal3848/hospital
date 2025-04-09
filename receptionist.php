<?php
  session_start();
  if($_SESSION['role'] !== "Admin"){
  header('Location: login.php');
  exit;
  }
  include "conn.php";
  $sqli = "SELECT * FROM receptionist";
  $result = mysqli_query($conn,$sqli);
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
       <h1 class="doc-heading">Receptionist</h1>

       <form class="search d-flex" action="index.html" method="post">
         <input type="search" name="" value="" class="form-control me-2" placeholder="Search">
         <button type="button" name="button" class="search-btn " >Search</button>
       </form>
     </div>
     <a href="createreceptionist.php"><button type="button" name="button" class="m-3 btn btn-success">Create Receptionist</button></a>
     <table class="table-primary table">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Department</th>
         <th>Password</th>
         <th>Date</th>
         <th>Update</th>
         <th>Delete</th>
       </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
       <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['dep']; ?></td>
         <td><?php echo $row['password']; ?></td>
         <td><?php echo $row['date']; ?></td>
         <td><a href="updaterecep.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-success" value="Update"></a></td>
         <td><a href="deletedata.php?id=<?php echo $row['id']; ?>&name=recep"><input type="button" class="btn btn-success" value="Delete"></a></td>
       </tr>
     <?php } ?>
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>
 </html>
