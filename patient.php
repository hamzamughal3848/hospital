<?php
    session_start();
    if($_SESSION['role'] !== "Recptionist"){
    header('Location: login.php');
    exit;
  }
    include "conn.php";
    $sqli = "SELECT * FROM patient";
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
   <body >
     <?php include "navbar.php" ?>
     <div class="search-banner">
       <h1 class="doc-heading ">Patient</h1>
       <form class="search d-flex" action="index.html" method="post">
         <input type="search" name="" value="" class="form-control me-2" placeholder="Search">
         <button type="button" name="button" class="search-btn" >Search</button>
       </form>
     </div>
     <a href="create_patient.php"><button type="button" name="button" class="btn btn-success m-3">Create Patient</button></a><br>
     <table class="table-primary table">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Department</th>
         <th>Adress</th>
         <th>Date</th>
         <th>Delete</th>
       </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
       <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['dept']; ?></td>
         <td><?php echo $row['adress']; ?></td>
         <td><?php echo $row['date']; ?></td>
         <td><a href="deletedata.php?id=<?php echo $row['id']; ?>&name=patient"><input type="button" class="btn btn-success" value="Delete"></a></td>
       </tr><?php } ?>
     </table>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>
