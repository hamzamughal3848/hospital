<?php
  include "conn.php";
  $sqli = "SELECT * FROM doctor";
  $result = mysqli_query($conn,$sqli);
  if(isset($_POST['Active'])){

    $fullname = $_POST['name'];

    $sql4 = "INSERT INTO attendance(fullname) values('$fullname')";
    $result4 = mysqli_query($conn,$sql4);
  }


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="a.php" method="post">
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <input type="text" name="name" value="<?php echo $row['name']; ?>">
      <button type="submit" name="Active" >submit</button>
    <?php }; ?>

    </form>
  </body>
</html>
