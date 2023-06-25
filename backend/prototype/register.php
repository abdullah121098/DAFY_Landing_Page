
<?php require '../database/connection.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dafy Admin </title>
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
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputtext1" name="user" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputmobile" class="form-label">Mobile </label>
                    <input type="tel" class="form-control" id="exampleInputmobile" name="mobile" aria-describedby="mobileHelp" maxlength="10">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  </div>
                  <!-- <a href="login.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="register">Sign Up</a> -->
                  <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="register"value="Sign Up">
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="login.php">Sign In</a>
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
<?php 
if(isset($_POST['register'])!= ''){
  $a=$_POST['user']; $b=$_POST['email']; $c=$_POST['password'];$d=$_POST['mobile'];
  $sql = mysqli_query($conn, "INSERT INTO `admin`(`a_name`, `a_mobile`, `a_mail`, `password`, `password_confirm`) VALUES ('$a', '$d', '$b', '$c', '$c')");
  if($sql){
    echo '<script>alert("Successed");</script>';
    // header("location:login.php");
    exit;
  }else{ echo '<script>alert("Failed");</script>';}
}
?>