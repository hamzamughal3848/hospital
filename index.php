
<!doctype html>
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
    <div class="row my-5 align-items-center card-container container-fluid">
      <div class="col-md-4 justify-content-center d-flex my-5">
        <div class="card" style="width: 25rem;">
          <img src="./images/moreinfo.jpg" class="card-img-top" alt="..." class="img-fluid"><hr>
          <div class="card-body">
            <p class="card-text ms-3">Click on button
                for more info...</p>
            <a href="#" class="btn btn-success justify-content-center d-flex mx-3">More Info</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 justify-content-center d-flex my-5">
        <div class="card" style="width: 25rem;">
          <img src="./images/patient.jpg" class="card-img-top" alt="..." class="img-fluid"><hr>
          <div class="card-body">
            <p class="card-text ">Create your pharmacist account </p>
            <a href="createpharmacist.php" class="btn btn-success justify-content-center d-flex mx-3">Create Account</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 justify-content-center d-flex ">
        <div class="card" style="width: 25rem;">
          <img src="./images/doctor.jpg" class="card-img-top" alt="..." class="img-fluid"><hr>
          <div class="card-body">
            <p class="card-text ms-">Are you a doctor.</p>
            <a href="#" class="btn btn-success justify-content-center d-flex mx-3">Apply Now!</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
