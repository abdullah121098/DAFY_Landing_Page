<?php  include '../database/connection.php';   ?>

<?php 
session_start();
if(isset($_POST['access'])){
  $user=$_POST['user'];  $password=$_POST['pass'];
  
  if(empty($user)||empty($password)){
    echo '<script>alert("Please Fill the  Blank !");</script>';
    // header("location:login.php");
  }else{
    $username=mysqli_escape_string($conn,$user);
    $password=mysqli_escape_string($conn,$password);
    $sql= "SELECT * FROM admin WHERE a_name='$user' OR a_mail= '$user' AND password='$password'";
    $check=mysqli_query($conn,$sql);
    $no=mysqli_num_rows($check);
  // echo $no;
  
  if($no ==1){ while ($v=mysqli_fetch_array($check)) {
    $_SESSION['user']=$v['a_name']; $_SESSION['id']=$v['a_id']; 
    // header('Location:sample.php');
    header('Location:main.php');
  } }
  else{ echo '<script>alert("Login failed!");</script>'; }
}
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dafy Online Pvt ltd</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/loader.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
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
                    <input type="text" class="form-control" name="user" id="InputEmail1" >
                  </div>
                  <div class="mb-4">
                    <label for="InputPassword1" class="form-label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="pass" id="InputPassword1">
                      <span class="input-group-text center">
                            <i class="fa-sharp fa-solid fa-eye eye" onclick="myFunction()" name="hide2"  id="hide"></i>
                            <i class="fa-sharp fa-solid fa-eye-slash eye" onclick="myFunction()" name="hide1"  id="show"></i>
                      </span>
                    </div>
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
                    <!-- <a href="profile.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="access">Sign In</a> -->
                    <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="access" value="Sign In">
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
  <style>#hide {  display: none;} .eye{ position: relative;}</style>
  <script>
    function myFunction() {
        var x = document.getElementById("InputPassword1");
        var y = document.getElementById("show");
        var z = document.getElementById("hide");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "none";
            z.style.display = "block";
        }else {
            x.type = "password";
            y.style.display = "block";
            z.style.display = "none";
        }
    }
</script>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>