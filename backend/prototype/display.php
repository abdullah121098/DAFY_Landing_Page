<?php include '../database/connection.php';
session_start();
// echo $_SESSION['user'];
// echo $_SESSION['id'];
$session=$_SESSION['id'];

if(isset($_POST['update'])){
   $a= $_POST['user']; $b=$_POST['phone']; $c= $_POST['mail']; $d=$_POST['position']; $e= $_POST['date'];
   $f= $_POST['pass']; $g= $_POST['conpass']; 
   $photo = $_FILES['photo']['name'];
   // Upload the photo file to the desired location
   move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/images/profile/' . $photo); 
    
        $up = mysqli_query($conn, "UPDATE `admin`SET  `a_name`='$a',`a_mobile`='$b', `a_mail`='$c',
                `a_position`='$d',`a_img`='$photo',`a_date`='$e',`password`='$f',`password_confirm`='$g' WHERE  `sno`='$session'");
        if ($up) {
            echo '<script>alert("Update Successful");</script>';
            header('Location:display.php');
        } else {
            echo 'Failed';
        }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dafy Online Pvt ltd</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/loader.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

</head>

<body>
    <?php
    $sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE `sno`='$session'");   
    if ($sql->num_rows > 0) {                 
    while ($view = mysqli_fetch_array($sql)){ 
    ?>
  <!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="../index.php" class="text-nowrap logo-img">
        <img src="../assets/images/logos/loader.png" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../index.php" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu"></span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../new-ride.php" aria-expanded="false">
            <span>
                <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">New Ride-Booking</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../cancel-ride.php" aria-expanded="false">
            <span>
                <i class="ti ti-alert-circle"></i>
            </span>
            <span class="hide-menu">Cancelled Bookings</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../complete-ride.php" aria-expanded="false">
            <span>
                <i class="ti ti-cards"></i>
            </span>
            <span class="hide-menu">Completed-Booking</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../summary.php" aria-expanded="false">
            <span>
                <i class="ti ti-cards"></i>
            </span>
            <span class="hide-menu">Summary</span>
            </a>
        </li>
        <li class="nav-small-cap">
        
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTHOR</span>
        </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="login.php" aria-expanded="false">
            <span>
                <i class="ti ti-login"></i>
            </span>
            <span class="hide-menu">Login</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="register.php" aria-expanded="false">
            <span>
                <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">Register</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">EXTRA</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../testimonial.php" aria-expanded="false">
            <span>
                <i class="ti ti-mood-happy"></i>
            </span>
            <span class="hide-menu">Testimonial</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../team.php" aria-expanded="false">
            <span>
                <i class="ti ti-aperture"></i>
            </span>
            <span class="hide-menu">Team Detail</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="../banner.php" aria-expanded="false">
            <span>
                <i class="ti ti-mood-happy"></i>
            </span>
            <span class="hide-menu">Banner</span>
            </a>
        </li>
        </ul>
        
    </nav>
    <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
    <!--======================================================== ============== ============================================== ==========================-->
    <!--  Main wrapper -->
<div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <a href="../new-booking.php"  class="btn btn-primary d-flex align-items-center gap-2 " >Add New booking</a>
             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/<?php echo $view['a_img']; ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="../profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="../adduser.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> -->
                    <a href="login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

    <div class="container-fluid"> 
        <!-- Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Profile Detail</h5>
                        <div class="col-xl-12 col-md-12">
                            
                                <form method="post" action="#">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-center">
                                            <!-- <label for="inputimg4">Photo</label> -->
                                            <img class="fw-semibold g-2 rounded-circle" src="../assets/images/profile/<?php echo $view['a_img']; ?>" width="100" height="100">
                                        </div>
                                    
                                        <div class="form-group col-md-6">
                                            <label for="inputuser4">Username</label>
                                            <input type="text" class="form-control" id="inputuser4" value="<?php echo $view['a_name']; ?>" name="user">
                                        </div>
                                    
                                        <div class="form-group col-md-6">
                                        <label for="inputmobile4">Mobile No</label>
                                        <input type="text" class="form-control" id="inputmobile4" value="<?php echo $view['a_mobile']; ?>" name="phone">                                </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputemail4">Email</label>
                                            <input type="email" class="form-control" id="inputemail4" value="<?php echo $view['a_mail']; ?>" name="mail">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputaddress4">Designation</label>
                                        <input type="text" class="form-control" id="inputaddress4" value="<?php echo $view['a_position']; ?>" name="position">
                                        </div>
                                   
                                        <div class="form-group col-md-6">
                                            <label for="inputdate4">Date-Time</label>
                                            <input type="datetime" class="form-control" id="inputdate4" value="<?php echo $view['a_date']; ?>" name="date">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputimg4">Photo</label>
                                            <img class="fw-semibold g-2" src="../assets/images/profile/<?php echo $view['a_img']; ?>" width="70" height="90">
                                            <input type="file" name="photo" id="inputimg4" class="fw-semibold g-2" value="<?php echo $view['a_img']; ?>">
                                        </div>
                                    
                                        <div class="form-group col-md-6">
                                            <label for="inputpassword4">Password</label>
                                            <input type="text" class="form-control" id="inputpassword4" value="<?php echo $view['password']; ?>" name="pass" maxlength="15">
                                        </div>
                                   
                                        <div class="form-group col-md-6">
                                            <label for="inputconpassword4">Confirm Password</label>
                                            <input type="text" class="form-control" id="inputconpassword4" value="<?php echo $view['password_confirm']; ?>" name="conpass" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn  btn-primary" name="update"> update</button>
                                        </div>
                                    </div>
                                </form>
                            <?php } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
         <!-- ================================================== Footer  =======================================-->
         <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4"> &copy; <a class="fw-medium" href="#">2023</a>, All Right Reserved.</p>
        </div>
      </div>
    </div>
</div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script src="export.js"></script>
</body>

</html>