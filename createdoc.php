<?php
session_start();
if($_SESSION['role'] !== "Admin"){
header('Location: login.php');
exit;
}
  if(isset($_POST['Accept'])){
    $name = $_POST['name'];
    $spec = $_POST['spec'];
    $dep = $_POST['dept'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $role = $_POST['role'];
    include 'conn.php';
    $sql = "INSERT INTO doctor(name,spec,dept,password,date,role) value('$name','$spec','$dep','$password','$date','$role')";
    $result = mysqli_query($conn,$sql);
    header('location: doctor.php');
  }
?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Create doctor</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
   <body class="create-bg justify-content-center align-items-center d-flex" >
     <div class="form">
       <h3 class="text-center" style="color:#1dbdd4;">Create Doctor</h3>
       <form action="createdoc.php" method="post">
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required value="DR.">
          </div>
          <div class="mb-3">
            <label  class="form-label" >Department</label>
            <input type="text" class="form-control" name="dept" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Specialization</label>
            <input type="text" class="form-control" name="spec" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
          </div>
          <div class="role">
            <label for="Select" >Doctor</label><br>
            <input type="text" name="role" value="Doctor" >
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
