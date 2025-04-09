<?php
session_start();
if($_SESSION['role'] !== "Admin"){
header('Location: login.php');
exit;
}
  if(isset($_POST['Accept'])){
    $name =  $_POST['name'];
    $dep = $_POST['dept'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $role = $_POST['role'];
    include 'conn.php';
    $sql = "INSERT INTO receptionist(name,dep,password,role,date) value('$name','$dep','$password','$role','$date')";
    $result = mysqli_query($conn,$sql);
    header('location: receptionist.php');
  }
?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Create Receptionist</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
   <body class="create-bg justify-content-center align-items-center d-flex" >
     <div class="form">
       <h3 class="text-center" style="color:#1dbdd4;">Create Receptionist</h3>
       <form action="createreceptionist.php" method="post">
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label  class="form-label">Department</label>
            <input type="text" class="form-control" name="dept">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="role">
            <label for="Select" >User</label><br>
            <input type="text" name="role" value="Recptionist">
          </div>
          <div class="mb-3">
            <label  class="form-label">Date</label>
            <input type="Date" class="form-control" value = "<?php echo date("20y-m-d") ?>" name="date">
          </div>
          <button type="submit" class="btn btn-primary" name="Accept">Submit</button>
        </form>
     </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>
