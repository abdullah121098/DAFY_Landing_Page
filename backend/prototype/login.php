<?php 
// session_start();
// require_once '../database/connection.php';

// if(isset($_POST['access'])){
//   $a=$_POST['email'];
//   $b=$_POST['password'];
//   //$c=md5($b);
  
//       if(empty($_POST['email'])||empty($_POST['password'])){
//           header("location:login.php? Empty= Please Fill the  Blank");
//       }else{
//           $username=mysqli_escape_string($conn,$a);
//           $password=mysqli_escape_string($conn,$b);
//           $ql="SELECT * FROM `admin` WHERE `a_name`='$a' OR `a_mail`='$a' AND `password`='$b'";
//           $run=mysqli_query($conn,$ql);
//           if($r=mysqli_fetch_assoc($run)){
           
//               $_SESSION['id']=$r[`sno`];
//             header("location:profile.php");
//           }else{
//       header("location:login.php? Invalid= Please enter correct user name/password");}
//       }
//   }
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dafy Online Pvt ltd</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/loader.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/loader.png" width="180" alt="">
                </a>
                <p class="text-center"></p>
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="text" id="InputEmail1" >
                  </div>
                  <div class="mb-4">
                    <label for="InputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"  id="InputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="index.php">Forgot Password ?</a>
                  </div>
                    <a href="profile.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="access">Sign In</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Add new user?</p>
                    <a class="text-primary fw-bold ms-2" href="register.php">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>