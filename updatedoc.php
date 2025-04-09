<?php
session_start();
if($_SESSION['role'] !== "Admin"){
header('Location: login.php');
exit;
}
  include "conn.php";
  $id = $_GET['id'];
  $sqli = "SELECT * FROM doctor WHERE id = $id";
  $result = mysqli_query($conn,$sqli);

?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Update Doctor</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
   <body class="create-bg justify-content-center align-items-center d-flex" >
     <div class="form">
       <h3 class="text-center" style="color:#1dbdd4;">Update Doctor</h3>
       <?php while ($row = mysqli_fetch_assoc($result)) {
          ?>
       <form action="updatedocquery.php" method="post">
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required value="<?php echo $row['name']; ?>">
          </div>
          <div class="mb-3">
            <label  class="form-label" >Department</label>
            <input type="text" class="form-control" name="dept" required value="<?php echo $row['dept']; ?>">
          </div>
          <div class="mb-3">
            <label  class="form-label">Specialization</label>
            <input type="text" class="form-control" name="spec" required value="<?php echo $row['spec']; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="password" required value="<?php echo $row['password'] ?>">
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <button type="submit" class="btn btn-primary" name="Accept">Submit</button>
        </form>
      <?php } ?>
     </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>
