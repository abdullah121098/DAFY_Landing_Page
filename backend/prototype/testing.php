
<?php include '../database/connection.php';

session_start();
$session = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    $sql = "SELECT * FROM `admin` WHERE a_name = '$a' AND password = '$b'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    if ($row['user_type'] == "user") {
        $_SESSION['id']=$row['sno'];
        echo "user";
    } else if ($row['user_type'] == "admin") {
        $session=$row['sno'];
        echo 'admin';
    } else {
        echo 'Username/Password incorrect';
    }
    
}
?>

<h1>Login Form</h1>

<form action="" method="post">
    <input type="text" name="user" id="name" placeholder="Username">
    <input type="password" name="pass" id="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
</form>


<?php 
    // $sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `sno`='$session'");
    // if ($sql->num_rows > 0) {
    // while ($view = mysqli_fetch_array($sql)) {
?>
<!-- <form method="post" action="#" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6 text-center">
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
                <input type="text" class="form-control" id="inputmobile4" value="<?php echo $view['a_mobile']; ?>" name="phone">
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
                <input type="file" name="photo" id="inputimg4" class="fw-semibold g-2">
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
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </div>
</form> -->
<?php //}  } else { echo '<tr><td colspan="12">No data found.</td></tr>'; }
    // if (isset($_POST['update'])) {
    //     $user = $_POST['user'];
    //     $mail = $_POST['mail'];
    //     $mobile = $_POST['phone'];
    //     $design = $_POST['position'];
    //     $date = $_POST['date'];
    //     $pass = $_POST['pass'];
    //     $conpass = $_POST['conpass'];
    //     $img = $_FILES['photo']['name'];
    //     $tempFile = $_FILES['photo']['tmp_name'];
    //     $targetPath = '../assets/images/profile/';
    //     $targetFile = $targetPath . $img;

    //     if ($pass == $conpass) {
    //         $up = mysqli_query($conn, "UPDATE `admin` SET `a_name`='$user', `a_mobile`='$mobile', `a_mail`='$mail',
    //             `a_position`='$design', `a_date`='$date', `password`='$pass', `password_confirm`='$conpass' WHERE `sno`='$session'");
    //         // Check if the file was uploaded successfully
    //         if (move_uploaded_file($tempFile, $targetFile)) {
    //             $up = mysqli_query($conn, "UPDATE `admin` SET  `a_img`='$img' WHERE `sno`='$session'");
    //         } else {
    //             echo '<script>alert("File Upload Failed");</script>';
    //         }
    //         if ($up) {
    //             echo '<script>alert("Update Successful");</script>';
    //             header("Location: testing.php");
    //             exit;
    //         } else {
    //             echo '<script>alert("Update Failed");</script>';
    //         }
    //     } else {
    //         echo '<script>alert("Password Error!");</script>';
    //     }
    // }
?>
<?php $sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `sno`='$session'");  if ($sql->num_rows > 0) { while ($view = mysqli_fetch_array($sql)) { ?>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6 text-center">
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
                    <input type="text" class="form-control" id="inputmobile4" value="<?php echo $view['a_mobile']; ?>" name="phone">
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
                    <input type="file" name="photo[]" id="inputimg4" class="fw-semibold g-2" multiple>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputpassword4">Password</label>
                    <input type="password" class="form-control" id="inputpassword4" value="<?php echo $view['password']; ?>" name="pass" maxlength="15">
                    <span class="eye" onclick="myFunction()"> <i name="hide1" id="hide">hide</i> <i name="hide2" id="show">Show</i></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputconpassword4">Confirm Password</label>
                    <input type="password" class="form-control" id="inputconpassword4" value="<?php echo $view['password_confirm']; ?>" name="conpass" maxlength="15">
                    <span class="eye" onclick="myFunction1()"> <i name="hide1" id="hide1">hide</i> <i name="hide2" id="show1">Show</i></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </div>
        </form>
<?php } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; }

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
                `a_position`='$design', `a_date`='$date', `password`='$pass', `password_confirm`='$conpass' WHERE `sno`='$session'");

            for ($i = 0; $i < $totalFiles; $i++) {
                $img = $_FILES['photo']['name'][$i];
                $tempFile = $_FILES['photo']['tmp_name'][$i];
                $targetPath = '../assets/images/profile/';
                $targetFile = $targetPath . $img;

                // Check if a new photo was uploaded
                if (!empty($img)) {
                    // Upload the photo file to the desired location
                    if (move_uploaded_file($tempFile, $targetFile)) {
                        $up = mysqli_query($conn, "UPDATE `admin` SET `a_img`='$img' WHERE `sno`='$session'");
                    } else {
                        echo '<script>alert("File Upload Failed");</script>';
                    }
                }
            }

            if ($up) {
                echo '<script>alert("Update Successful");</script>';
                header("Location: testing.php");
                exit;
            } else {
                echo '<script>alert("Update Failed");</script>';
            }
        } else {
            echo '<script>alert("Password Error!");</script>';
        }
    }
?>
<style>#hide , #hide1{  display: none;} .eye{ position: absolute;}</style>
<script>
    function myFunction() {
        var x = document.getElementById("inputpassword4");
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
    }function myFunction1() {
        var p = document.getElementById("inputconpassword4");
        var q = document.getElementById("show1");
        var r = document.getElementById("hide1");

        if (p.type === 'password'){
            p.type = "text";
            q.style.display = "none";
            r.style.display = "block";
        } 
        else {
            p.type = "password";
            q.style.display = "block";
            r.style.display = "none";
        }
    }
</script>
<?php
include '../database/connection.php';

$session = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT * FROM `admin` WHERE a_name = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $a, $b);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($res)) {
        if ($row['user_type'] == "user") {
            $_SESSION['id'] = $row['sno'];
            echo "user";
        } else if ($row['user_type'] == "admin") {
            $session = $row['sno'];
            echo 'admin';
        }
    } else {
        echo 'Username/Password incorrect';
    }
}

?>

<h1>Login Form</h1>

<form action="" method="post">
    <input type="text" name="user" id="name" placeholder="Username">
    <input type="password" name="pass" id="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
</form>

<?php
$sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `sno`='$session'");
if ($sql->num_rows > 0) {
    while ($view = mysqli_fetch_array($sql)) {
        ?>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6 text-center">
                    <img class="fw-semibold g-2 rounded-circle" src="../assets/images/profile/<?php echo $view['a_img']; ?>" width="100" height="100">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputuser4">Username</label>
                    <input type="text" class="form-control" id="inputuser4" value="<?php echo htmlspecialchars($view['a_name']); ?>" name="user">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputmobile4">Mobile No</label>
                    <input type="text" class="form-control" id="inputmobile4" value="<?php echo htmlspecialchars($view['a_mobile']); ?>" name="phone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputemail4">Email</label>
                    <input type="email" class="form-control" id="inputemail4" value="<?php echo htmlspecialchars($view['a_mail']); ?>" name="mail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputaddress4">Designation</label>
                    <input type="text" class="form-control" id="inputaddress4" value="<?php echo htmlspecialchars($view['a_position']); ?>" name="position">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputdate4">Date-Time</label>
                    <input type="datetime" class="form-control" id="inputdate4" value="<?php echo htmlspecialchars($view['a_date']); ?>" name="date">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputimg4">Photo</label>
                    <img class="fw-semibold g-2" src="../assets/images/profile/<?php echo htmlspecialchars($view['a_img']); ?>" width="70" height="90">
                    <input type="file" name="photo[]" id="inputimg4" class="fw-semibold g-2" multiple>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputpassword4">Password</label>
                    <input type="password" class="form-control" id="inputpassword4" value="<?php echo htmlspecialchars($view['password']); ?>" name="pass" maxlength="15">
                    <span class="eye" onclick="myFunction()"> <i name="hide1" id="hide">hide</i> <i name="hide2" id="show">Show</i></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputconpassword4">Confirm Password</label>
                    <input type="password" class="form-control" id="inputconpassword4" value="<?php echo htmlspecialchars($view['password_confirm']); ?>" name="conpass" maxlength="15">
                    <span class="eye" onclick="myFunction1()"> <i name="hide1" id="hide1">hide</i> <i name="hide2" id="show1">Show</i></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </div>
        </form>
        <?php
    }
} else {
    echo '<tr><td colspan="12">No data found.</td></tr>';
}

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
        $stmt = mysqli_prepare($conn, "UPDATE `admin` SET `a_name`=?, `a_mobile`=?, `a_mail`=?, `a_position`=?, `a_date`=?, `password`=?, `password_confirm`=? WHERE `sno`=?");
        mysqli_stmt_bind_param($stmt, "sssssssi", $user, $mobile, $mail, $design, $date, $pass, $conpass, $session);
        $up = mysqli_stmt_execute($stmt);

        for ($i = 0; $i < $totalFiles; $i++) {
            $img = $_FILES['photo']['name'][$i];
            $tempFile = $_FILES['photo']['tmp_name'][$i];
            $targetPath = '../assets/images/profile/';
            $targetFile = $targetPath . $img;

            // Check if a new photo was uploaded
            if (!empty($img)) {
                // Upload the photo file to the desired location
                if (move_uploaded_file($tempFile, $targetFile)) {
                    $stmt = mysqli_prepare($conn, "UPDATE `admin` SET `a_img`=? WHERE `sno`=?");
                    mysqli_stmt_bind_param($stmt, "si", $img, $session);
                    $up = mysqli_stmt_execute($stmt);
                } else {
                    echo '<script>alert("File Upload Failed");</script>';
                }
            }
        }

        if ($up) {
            echo '<script>alert("Update Successful");</script>';
            header("Location: testing.php");
            exit;
        } else {
            echo '<script>alert("Update Failed");</script>';
        }
    } else {
        echo '<script>alert("Password Error!");</script>';
    }
}
?>
