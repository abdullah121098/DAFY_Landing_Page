<?php  include '../database/connection.php';
session_start();
$session=$_SESSION['user'];

$sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE `a_name`='$session'");   
if ($sql->num_rows > 0) {                 
while ($view = mysqli_fetch_array($sql)){ 

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
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputuser4">Username</label>
                                            <input type="text" class="form-control" id="inputuser4" value="<?php echo $view['a_name']; ?>" name="user">
                                        </div>
                                    </div>
                                    <div class="form-row">
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
                                        
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputaddress4">Designation</label>
                                        <input type="text" class="form-control" id="inputaddress4" value="<?php echo $view['a_position']; ?>" name="position">
                                    </div>
                                    <div class="form-row">
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
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputpassword4">Password</label>
                                            <input type="text" class="form-control" id="inputpassword4" value="<?php echo $view['password']; ?>" name="pass" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-row">
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
        <!-- Row 2 -->
        <?php
            if (isset($_GET['id'])) {
            $editId = $_GET['id'];

            if (isset($_POST['update'])) {
                $date = $_POST['t-date'];
                $position = $_POST['t-position'];
                $name = $_POST['t-name'];
                $photo = $_FILES['t-photo']['name'];

                // Upload the photo file to the desired location
                move_uploaded_file($_FILES['t-photo']['tmp_name'], 'assets/images/profile/' . $photo);

                $up = mysqli_query($conn, "UPDATE `admin`SET `a_date`='$date', `a_name`='$name', `a_position`='$position', `a_img`='$photo' WHERE sno=$editId");

                if ($up) {
                    echo '<script>alert("Update Successful");</script>';
                    
                    // exit("Location:../profile.php");
                } else {
                    echo 'Failed';
                }
            } elseif (isset($_POST['delete'])) {
                $editId = $_GET['id'];

                // Retrieve the file name from the database before deleting the row
                $fileResult = mysqli_query($conn, "SELECT `a_img` FROM `admin` WHERE sno=$editId");
                if (mysqli_num_rows($fileResult) > 0) {
                    $fileRow = mysqli_fetch_assoc($fileResult);
                    $fileName = $fileRow['a_img'];

                    // Delete the file from the directory
                    $filePath = 'assets/images/profile/' . $fileName;
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }

                $del = mysqli_query($conn, "DELETE FROM `admin` WHERE `sno`=$editId");
                if ($del) {
                    echo '<script>alert("Delete Successful");</script>';
                
                    exit();
                } else {
                    echo 'Failed';
                }
            }

            $sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `sno`=$editId");

            if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Testimonial Detail</h5>
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Id</h6>
                                            </th><td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0 col-6" name="t-id"><?php echo $row['sno']; ?></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Date</h6>
                                            </th>
                                            <td class="border-bottom-0">
                                                <input class="fw-semibold col-6" type="datetime-local" name="t-date" value="<?php echo $row['a_date']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Name</h6>
                                            </th>
                                            <td class="border-bottom-0">
                                                <input type="text" class="fw-semibold col-6" name="t-name" value="<?php echo $row['a_name']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Designation</h6>
                                            </th>
                                            <td class="border-bottom-0">
                                                <input type="text" class="fw-semibold col-6" name="t-position" value="<?php echo $row['a_position']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Photo</h6>
                                            </th>
                                            <td class="border-bottom-0">
                                                <img class="fw-semibold" src="../assets/images/profile/<?php echo $row['a_img']; ?>" width="70" height="90">
                                                <input type="file" name="t-photo" id="upload" class="col-6" value="<?php echo $row['a_img']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Action</h6>
                                            </th>
                                            <td class="border-bottom-0">
                                                <input type="submit" name="update" value="Save">
                                                <input type="submit" name="delete" value="Delete">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  } } else {
                echo '<div class="row"><div class="col-lg-100 d-flex align-items-center"><div class="card w-100"><div class="card-body p-4"><p>No data found.</p></div></div></div></div>';
            } } else {
            $sq = mysqli_query($conn, "SELECT * FROM `admin`");
            $res = mysqli_num_rows($sq);

            $rowsPerPage = 5; // Number of rows to display per page
            $totalRows = $res; // Total number of rows in the table

            $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

            $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index

            $end = $start + $rowsPerPage; // Calculate the ending row index

            // Fetch data from the 'review' table
            $sql = "SELECT * FROM `admin` ORDER BY sno DESC LIMIT $start, $rowsPerPage";
            $result = $conn->query($sql);

            $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
        ?>
        <!-- Row 3 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Testimonial Detail</h5>
                        <div class="table-responsive">
                            <form method="post">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Id</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Date</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Name</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Designation</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Photo</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Display each row of data
            ?>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><?php echo $index++; ?></h6></td>
                            <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $row['a_date']; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $row['a_name']; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $row['a_position']; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <img class="fw-semibold mb-1" src="../assets/images/profile/<?php echo $row['a_img']; ?>"
                            width="70" height="90">
                        </td>
                        <td class="border-bottom-0">
                            <a href="?id=<?php echo $row['sno']; ?>" name='edit' title="Edit">Edit</a>
                        </td>
                    </tr>                                       
            <?php }  } else {  echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example" >
                                    <ul class="pagination justify-content-end left" style="position: relative;border-box: 500px;">
                                        <?php if ($page > 1): ?>
                                        <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span></a></li>
                                        <?php endif; if ($end < $totalRows): ?>
                                        <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

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
