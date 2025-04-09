
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">Hospital Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if(!isset($_SESSION['islogedin']) OR $_SESSION['islogedin']!=true){ ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php">Login</a>
        </li>
      <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><button class="btn btn-outline-light">Log Out</button></a>
            </li>
      <?php  } ?>
      </ul>
    </div>
  </div>
</nav>
