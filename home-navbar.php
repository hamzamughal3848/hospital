<nav class="navbar ">
   <div class="container-fluid">
     <p class="navbar-brand text-white" >Admin Menu</p>
     <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon" ></span>
     </button>
     <div class="offcanvas offcanvas-end" style="background-color:#1dbdd4;"  tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
       <div class="offcanvas-header">
         <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel">Menu</h5>
         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-white">
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="dashboard.php">Dashboard</a>
           </li>
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="doctor.php">Doctor</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="pharmacist.php">Pharmacist</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="receptionist.php">Receptionist</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./attendance">Attendance</a>
           </li>
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="user.php">User</a>
           </li>
       </div>
     </div>
   </div>
 </nav>
