<?php  include 'database/connection.php';
require_once 'header.php'; ?>

<div class="container-fluid"> 
    <!-- ROW 1 -->
    <div class="row">
        <div class="col-lg-100 d-flex align-items-center">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 text-center">Profile</h5>
                    <form method="POST" action=""  enctype="multipart/form-data"  onsubmit="showConfirmation()">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                        <label class="form-label">Name</label><br>
                                        <input class="form-control" type="text" name="a-name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                        <label class="form-label">Mobile</label><br>
                                        <input class="form-control" type="text" name="a-mobile" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                        <label class="form-label">E-mail</label><br>
                                        <input class="form-control" type="text" name="a-mail" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                        <label class="form-label">Designation</label><br>
                                        <input class="form-control" type="text" name="a-position" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label"> Date </label><br>
                                    <input class="form-control" type="datetime-local"  name="a-date" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Photo</label><br>
                                    <input type="file" name="a-img" id="Upload" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label"> Password </label><br>
                                <input class="form-control" type="text"  name="a-pass" required>
                            </div>
                        </div> <div class="col-6">
                            <div class="form-group">
                                <label class="form-label"> Confirm Password </label><br>
                                <input class="form-control" type="text"  name="a-conpass" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-btn">
                                <button type="submit" class="submit-btn rounded-pill text-center bg-warning w-100" name="t_addData">Add New </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_POST['t_addData'])){
        $name=$_POST['a-name'];
        $mail=$_POST['a-mail'];
        $mobile=$_POST['a-mobile'];
        $position=$_POST['a-position'];
        $date=$_POST['a-date'];
        $password=$_POST['a-pass'];
        $confirm=$_POST['a-conpass'];
        $img = $_FILES['a-img']['name'];
        $img_tmp = $_FILES['a-img']['tmp_name'];
        $img_loc = 'assets/images/profile/';

     // Move uploaded image to destination folder
     $move = move_uploaded_file($img_tmp, $img_loc . $img);

     // Hash the password
    //  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     $sql = "INSERT INTO `admin`(`a_name`, `a_mobile`, `a_mail`, `a_position`, `a_img`, `a_date`, `password`, `password_confirm`) 
     VALUES ('$name', '$mobile', '$mail', '$position', '$img', '$date', '$password', '$confirm')";
        $insert = mysqli_query($conn, $sql);
        if ($insert) {
        echo '<script>alert("Add success");</script>';
        
        } else {
        echo '<script>alert("Add failed");</script>';
        }
    }
?>
    <!-- ROW 2-->
   

        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 text-center">Profile Detail</h5>
                            <?php 
                                $sq = mysqli_query($conn, "SELECT * FROM `admin`");
                                $res = mysqli_num_rows($sq);
                            
                                $rowsPerPage = 1; // Number of rows to display per page
                                $totalRows = $res; // Total number of rows in the table
                            
                                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                            
                                $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
                            
                                $end = $start + $rowsPerPage; // Calculate the ending row index

                                $display = mysqli_query($conn, "SELECT * FROM `admin` ORDER BY sno DESC LIMIT $start, $rowsPerPage"); 
                                $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
                               if (mysqli_num_rows($display) > 0) {while ($dis = mysqli_fetch_assoc($display)) { 
                            ?>
                       
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-1">
                                    <div class="form-group">
                                        <label class="form-label">Id</label><br>
                                        <label class="form-control"><?php echo $index++; ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Name</label><br>
                                        <h6 class="form-control" type="text" name="d-name"><?php echo $dis['a_name']; ?></h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Mobile</label><br>
                                        <h6 class="form-control" type="text" name="d-mobile"><?php echo $dis['a_mobile']; ?></h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label><br>
                                        <h6 class="form-control" type="text" name="d-mail"><?php echo $dis['a_mail']; ?></h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Designation</label><br>
                                        <h6 class="form-control" type="text" name="d-position"><?php echo $dis['a_position']; ?></h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Date</label><br>
                                        <h6 class="form-control" type="datetime-local" name="d-date"><?php echo $dis['a_date']; ?></h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Photo</label><br>
                                        <img class="fw-semibold mb-1" src="assets/images/profile/<?php echo $dis['a_img']; ?>" width="100" height="100">
                                        <!-- <h6 type="file" name="a-img" id="Upload" required> -->
                                    </div>
                                </div>
                               <!-- <div class="row">
                                    <div class="col-6">
                                        <div class="form-btn">
                                            <button type="submit" class="submit-btn rounded-pill text-center bg-warning w-100" name="t_addData">Add New</button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-contena-end left" style="position: relative;border-box: 500px;">
                                        <?php if ($page > 1): ?>
                                            <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3"><i class="fas fa-angle-double-left"></i></a></li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= ceil($totalRows / $rowsPerPage); $i++): ?>
                                            <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>"><a href="?page=<?php echo $i; ?>" class="page-link rounded-pill py-2 px-3"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>
                                        <?php if ($page < ceil($totalRows / $rowsPerPage)): ?>
                                            <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3"><i class="fas fa-angle-double-right"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}
?>

<script>function showConfirmation() { alert("Confirm booking");return true; } </script>
<style>.page-link{ background: black; font-style: bold; color: white; }</style>

<?php
require_once 'footer.php';
?>