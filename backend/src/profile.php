<?php

include '../database/connection.php';

include 'header.php';

$session = $_SESSION['id'];

$sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `a_id`='$session'");
if ($sql->num_rows > 0) {
    while ($view = mysqli_fetch_array($sql)) {
       

// if($_SESSION['mail']==''){?>
<!-- <script> window.location="login.php"</script> -->
<?php //} ?>

         <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row-6">
                <div class="col-lg-100 d-flex">
                    <div class="card w-100">
                        <div class="card-body p-4 ">
                            <h5 class="card-title fw-semibold mb-4 text-center">Profile Detail</h5>
                            <div class="col-md-12">
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
                $targetPath = '../assets/images/team/';
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