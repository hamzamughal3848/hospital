<?php
session_start();
if($_SESSION['role'] !== "Recptionist"){
header('Location: login.php');
exit;
}
  if(isset($_POST['Accept'])){
    $name =  $_POST['name'];
    $dep = $_POST['dept'];
    $adress = $_POST['adress'];
    $date = $_POST['date'];
    include 'conn.php';
    $sql = "INSERT INTO patient(name,dept,adress,date) value('$name','$dep','$adress','$date')";
    $result = mysqli_query($conn,$sql);
    header('location: patient.php');
  }
?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Create patient</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
   <body class="create-bg justify-content-center align-items-center d-flex" >
     <div class="form">
       <h3 class="text-center" style="color:#1dbdd4;">Create Patient</h3>
       <form action="create_patient.php" method="post">
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label  class="form-label">Department</label>
            <input type="text" class="form-control" name="dept">
          </div>
          <div class="mb-3">
            <label  class="form-label">Adress</label>
            <input type="text" class="form-control" name="adress">
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
