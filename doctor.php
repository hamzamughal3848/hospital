<?php
session_start();
if($_SESSION['role'] !== "Admin"){
header('Location: login.php');
exit;
}
  include "conn.php";
  $sqli = "SELECT * FROM doctor";
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
       <h1 class="doc-heading">Doctor</h1>
       <form class="search d-flex" action="searchdoc.php" method="post">
         <input type="search" name="search" value="" class="form-control me-2" placeholder="Search">
         <button type="submit" name="button" class="search-btn" >Search</button>
       </form>
     </div>
     <a href="createdoc.php"><button type="button" name="button" class="m-3 btn btn-success">Create Doctor</button></a>
     <table class="table-primary table">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Specialization</th>
         <th>Department</th>
         <th>Password</th>
         <th>Update</th>
         <th>Delete</th>
       </tr>
       <?php while($row = mysqli_fetch_assoc($result)){ ?>
       <form action="update.php" method="post">
         <tr>
           <td><?php echo $row['id']; ?></td>
           <td><?php echo $row['name']; ?></td>
           <td><?php echo $row['spec']; ?></td>
           <td><?php echo $row['dept']; ?></td>
           <td><?php echo $row['password']; ?></td>
           <td><a href="updatedoc.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-success" value="Update"></a></td>
           <td><a href="deletedata.php?id=<?php echo $row['id']; ?>&name=doc"><input type="button" class="btn btn-success" value="Delete"></a></td>
         </tr>
       </form>
       <?php } ?>
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>
 </html>
