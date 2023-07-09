<?php
session_start();
include '../database/connection.php';

$session = $_SESSION['id'];

$sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `a_id`='$session'");
if ($sql->num_rows > 0) {
    while ($view = mysqli_fetch_array($sql)) {
       

// if($_SESSION['mail']==''){?>
<!-- <script> window.location="login.php"</script> -->
<?php //} ?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body>
  <!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="../src/main.php" class="text-nowrap logo-img">
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
                <a class="sidebar-link" href="../src/main.php" aria-expanded="false">
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
                <a class="sidebar-link" href="../src/new-ride.php" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">New Ride-Booking</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../src/cancel-ride.php" aria-expanded="false">
                <span>
                    <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Cancelled Bookings</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../src/complete-ride.php" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Completed-Booking</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../src/summary.php" aria-expanded="false">
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
                <a class="sidebar-link" href="../src/testimonial.php" aria-expanded="false">
                <span>
                    <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Testimonial</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../src/team.php" aria-expanded="false">
                <span>
                    <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Team Detail</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../src/banner.php" aria-expanded="false">
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
                <a href="new-booking.php"  class="btn btn-primary d-flex align-items-center gap-2 " >Add New booking</a>
            
                    <li class="nav-item dropdown">
                        <?php $sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE `a_id`='$session'");  while ($pro= mysqli_fetch_array($sql)){ ?>
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <!-- <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle"> -->
                        <img src="../assets/images/profile/<?php echo $pro['a_img'];?>" alt="" width="35" height="35" class="rounded-circle">
                        </a> <?php }?>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="../src/profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-user fs-6"></i>
                            <p class="mb-0 fs-3">My Profile</p>
                            </a>
                            <a href="../src/adduser.php" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-mail fs-6"></i>
                            <p class="mb-0 fs-3">Team Profile</p>
                            </a>
                            <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-list-check fs-6"></i>
                            <p class="mb-0 fs-3">My Task</p>
                            </a> -->
                            <a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                        </div>
                        </div>
                    
                </li>
                </ul>
            </div>
            </nav>
        </header>
        <!--  Header End -->
    <!-- ============== ==================== Main -Body Start- ======================================================================= -->
        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <div class="col-lg-100 d-flex">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Profile Detail</h5>
                            <div class="col-xl-12 col-md-12">
                                <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-center bg-dark">
                                            <img class="fw-semibold g-2 rounded-circle" src="../assets/images/profile/<?php echo $view['a_img']; ?>" width="100" height="100">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputuser4" class="h5">Username</label>
                                            <input type="text" class="form-control h6" id="inputuser4" value="<?php echo $view['a_name']; ?>" name="user">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputmobile4"  class="h5">Mobile No</label>
                                            <input type="text" class="form-control h6" id="inputmobile4" value="<?php echo $view['a_mobile']; ?>" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputemail4"  class="h5">Email</label>
                                            <input type="email" class="form-control h6" id="inputemail4" value="<?php echo $view['a_mail']; ?>" name="mail">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputaddress4"  class="h5">Designation</label>
                                            <input type="text" class="form-control h6" id="inputaddress4" value="<?php echo $view['a_position']; ?>" name="position">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputdate4"  class="h5">Date-Time</label>
                                            <input type="datetime" class="form-control h6" id="inputdate4" value="<?php echo $view['a_date']; ?>" name="date">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputimg4"  class="h5">Photo</label>
                                            <img class="fw-semibold g-2" src="../assets/images/profile/<?php echo $view['a_img']; ?>" width="70" height="90">
                                            <input type="file" name="photo[]" id="inputimg4" class="fw-semibold h6 g-2" multiple>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputpassword3" class="h5">Password</label>
                                        <div class="input-group">
                                        <input type="password" class="form-control h6" id="inputpassword3" value="<?php echo $view['password']; ?>" name="pass" maxlength="15">
                                        <span class="input-group-text center">
                                            <i class="fa-sharp fa-solid fa-eye eye" onclick="togglePasswordVisibility('inputpassword3', 'eye')" id="hide"></i>
                                            <!-- <i class="fa-sharp fa-solid fa-eye-slash eye" onclick="togglePasswordVisibility('inputpassword3', 'eye')" id="show"></i> -->
                                        </span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputconpassword4" class="h5">Confirm Password</label>
                                        <div class="input-group">
                                        <input type="password" class="form-control h6" id="inputconpassword4" value="<?php echo $view['password_confirm']; ?>" name="conpass" maxlength="15">
                                        <span class="input-group-text center">
                                            <i class="fa-sharp fa-solid fa-eye eye" onclick="togglePasswordVisibility('inputconpassword4', 'eye2')" id="hide2"></i>
                                            <!-- <i class="fa-sharp fa-solid fa-eye-slash eye" onclick="togglePasswordVisibility('inputconpassword4', 'eye2')" id="show2"></i> -->
                                        </span>
                                        </div>
                                    </div>
                                    </div> <br><br>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-center">
                                            <button type="submit" class="btn btn-primary" name="update" style="color:black;">Update</button>
                                        </div>
                                    </div>
                                </form>
                                <?php    } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
  .eye { position: relative; }
  .hide { display: none; }
</style>

<script>
  function togglePasswordVisibility(inputId, eyeId) {
    var input = document.getElementById(inputId);
    var eye = document.getElementById(eyeId);
    var showEye = document.getElementById('show' + eyeId.slice(3));
    var hideEye = document.getElementById('hide' + eyeId.slice(3));

    if (input.type === 'password') {
      input.type = 'text';
      eye.classList.add('hide-icon');
      hideEye.style.display = 'block';
    } else {
      input.type = 'password';
      eye.classList.remove('hide-icon');
      showEye.style.display = 'block';
    }
  }
</script>

    <?php 
    if (isset($_POST['update'])) {
        $user = $_POST['user'];
        $mail = $_POST['mail'];
        $mobile = $_POST['phone'];
        $design = $_POST['position'];
        $date = $_POST['date'];
        $pass = $_POST['pass'];
        $conpass = $_POST['conpass'];
        $totalFiles = count($_FILES['photo']['name']);

        if ($pass == $conpass) {
            $up = mysqli_query($conn, "UPDATE `admin` SET `a_name`='$user', `a_mobile`='$mobile', `a_mail`='$mail',
                `a_position`='$design', `a_date`='$date', `password`='$pass', `password_confirm`='$conpass' WHERE `a_id`='$session'");

            for ($i = 0; $i < $totalFiles; $i++) {
                $img = $_FILES['photo']['name'][$i];
                $tempFile = $_FILES['photo']['tmp_name'][$i];
                $targetPath = '../assets/images/profile/';
                $targetFile = $targetPath . $img;

                // Check if a new photo was uploaded
                if (!empty($img)) {
                    // Upload the photo file to the desired location
                    if (move_uploaded_file($tempFile, $targetFile)) {
                        $up = mysqli_query($conn, "UPDATE `admin` SET `a_img`='$img' WHERE `a_id`='$session'");
                    } else {
                        echo '<script>alert("File Upload Failed");</script>';
                    }
                }
            }

            if ($up) {
                echo '<script>alert("Update Successful");</script>';
                // header("Location: profile.php");
                exit;
            } else {
                echo '<script>alert("Update Failed");</script>';
            }
        } else {
            echo '<script>alert("Password Error!");</script>';
        }
    }
    ?>

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
  <script src="../assets/js/export.js"></script>
</body>

</html>