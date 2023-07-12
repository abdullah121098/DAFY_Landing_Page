<?php include '../database/connection.php';
session_start();
// echo $_SESSION['user'];
// echo $_SESSION['id'];
$session=$_SESSION['id'];
$sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE `a_id`='$session'");   

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
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> -->
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
          <a href="./main.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/loader.png" width="120" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
            <!-- <form class="d-flex align-items-center" action="#">
              <div class="input-group">
                <input type="text" class="form-control border-2" placeholder="Search" />
                <div class="input-group-prepend">
                  <i class="input-group-text border-0 ti ti-search"></i>
                </div>              
              </div>
            </form> -->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <a class="sidebar-link text-warning" href="javascript:void(0)" aria-expanded="false">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">Home</span></a>
            </li>
                  <li class="sidebar-item">
                    <a  class="sidebar-link" href="main.php" aria-expanded="false">
                      <span>
                        <i class="ti ti-layout-dashboard"></i>
                      </span>
                      <span class="hide-menu">Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false">
                      <i class="ti ti-car"></i ><span class="hide-menu">Ride Details</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="new-ride.php" class="sidebar-link"><i class="ti ti-clipboard-list"></i>
                        <span class="hide-menu">New Ride-Booking</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="re-schedule.php" class="sidebar-link"><i class="ti ti-note"></i>
                        <span class="hide-menu"> Re-Schedule Booking </span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="cancel-ride.php" class="sidebar-link"><i class="ti ti-copyright"></i>
                        <span class="hide-menu"> Cancelled Bookings </span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="complete-ride.php" class="sidebar-link"><i class="ti ti-check"></i>
                        <span class="hide-menu"> Completed-Booking </span></a>
                      </li>
                    </ul>
                  </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="summary.php" aria-expanded="false">
                    <span>
                      <i class="ti ti-clipboard"></i>
                    </span>
                    <span class="hide-menu">Summary</span>
                  </a>
                </li>
            <li class="nav-small-cap">
              <!-- <i class="ti ti-dots nav-small-cap-icon fs-4"></i> -->
              <a class="sidebar-link text-warning" href="javascript:void(0)" aria-expanded="false">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">AUTHOR</span></a>
            
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./login.php" aria-expanded="false">
                          <span>
                            <i class="ti ti-login"></i>
                          </span>
                          <span class="hide-menu">Login</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./register.php" aria-expanded="false">
                          <span>
                            <i class="ti ti-user-plus"></i>
                          </span>
                          <span class="hide-menu">Register</span>
                        </a>
                      </li>
                    </ul>
            </li>
              <li class="nav-small-cap">
                <a class="sidebar-link text-warning" href="javascript:void(0)" aria-expanded="false">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">MEMBERS</span></a>
              <!-- </li>
              <li class="sidebar-item">
                          <a  href="javascript:void(0)" class="sidebar-link"><i class="ti ti-message-2"></i>
                          <span class="hide-menu">Member</span></a> -->
                      <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                          <a  href="team.php" class="sidebar-link"><i class="ti ti-message-2"></i>
                          <span class="hide-menu">Team Member</span></a>
                        </li>
                        <li class="sidebar-item">
                          <a href="driver.php" class="sidebar-link"><i class="ti ti-brand-open-source"></i>
                          <span class="hide-menu"> Driver Member </span></a>
                        </li>
                        <li class="sidebar-item">
                          <a href="holiday.php" class="sidebar-link"><i class="ti ti-brand-open-source"></i>
                          <span class="hide-menu"> Holiday </span></a>
                        </li>
                      </ul>
            </li>
            <li class="nav-small-cap">
            <a class="sidebar-link text-warning" href="javascript:void(0)" aria-expanded="false">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">EXTRA DETAILS</span></a>                
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a  href="testimonial.php" class="sidebar-link"><i class="ti ti-message-2"></i>
                    <span class="hide-menu">Testimonial</span></a>
                  </li>
                 <li class="sidebar-item">
                    <a href="banner.php" class="sidebar-link"><i class="ti ti-photo-edit"></i>
                    <span class="hide-menu"> Banner </span></a>
                  </li>
                  
                </ul>
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
            <a href="add_customer.php"  class="btn btn-primary d-flex align-items-center gap-2 " >Add New booking</a>
             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php if ($sql->num_rows > 0) {  while ($view = mysqli_fetch_array($sql)){  ?>
                  <!-- <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle"> -->
                  <img src="../assets/images/profile/<?php echo $view['a_img']; ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <?php 
                    } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } 
                    // require_once "footer.php";
                 ?>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="add_new_members.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
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
      