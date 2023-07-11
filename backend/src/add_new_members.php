<?php include '../database/connection.php'; require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 text-center">Add New Member</h5>
                    
                        <form method="POST"  enctype="multipart/form-data" onsubmit="showConfirmation()">
                            <h6 class="card-description m-2"></h6>
                            <div class="row">
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="add-name" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="add-email" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mobile</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" name="add-mobile" maxlength="10" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="add-date" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Designation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="add-position" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row ">
                                        <label class="col-sm-3 col-form-label">Photo</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control " name="add-img" id="Upload" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="add-pass" id="add-pass" required/>
                                                <span class="input-group-text center">
                                                    <i class="fa-sharp fa-solid fa-eye eye" onclick="togglePasswordVisibility('add-pass', 'eye')" id="hide"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="add-passcon" id="add-passcon" required/>
                                                <span class="input-group-text center">
                                                    <i class="fa-sharp fa-solid fa-eye eye" onclick="togglePasswordVisibility('add-passcon', 'eye2')" id="hide2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Membership</label>
                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="add-table" value="Admin" /> Admin </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="add-table" value="Team" /> Team </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="add-table" value="Driver" /> Driver </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-sm-9 text-center">
                                    <button type="submit" class="submit-btn rounded-pill btn btn-warning px-3 py-2 m-2" name="add_drive">Add Member</button>
                                    <a type="submit" href="main.php" class="submit-btn rounded-pill  btn btn-danger px-3 py-2 m-2" name="add_cancel">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <!-- ========= Script =========== -->
        <style>.page-link{ background: black; font-style: bold; color: white; }</style>

    <!-- <script>//function showConfirmation() { alert("Confirm booking");return true; } </script> -->

        <style>.eye { position: relative; } .hide { display: none; }</style>

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
</div>


<?php require_once 'footer.php'; ?>

    <?php 
        
    if(isset($_POST['add_drive'])){
        $drive_name = $_POST['add-name'];
        $drive_email = $_POST['add-email'];
        $drive_mobile = $_POST['add-mobile'];
        $drive_position = $_POST['add-position'];
        $drive_date = $_POST['add-date'];
        $drive_pass = $_POST['add-pass'];
        $drive_passcon = $_POST['add-passcon'];
        $table = $_POST['add-table'];
        $drive_img = $_FILES['add-img']['name'];
        $img_tmp = $_FILES['add-img']['tmp_name'];
        $img_loc = '../assets/images/team/';

        $img_destination = $img_loc . $drive_img;
        $move = move_uploaded_file($img_tmp, $img_destination);

        if (empty($drive_name) || empty($drive_email) || empty($drive_mobile) || empty($drive_position) || empty($drive_date) || empty($drive_pass) || empty($drive_passcon) || empty($drive_img)) {
            echo '<script>alert("Please fill all the fields.");</script>';
        } elseif ($drive_pass != $drive_passcon) {
            echo '<script>alert("Password does not match.");</script>';
        } else {
            $query = "";
            switch ($table) {
                case 'Admin': 
                    $query = "INSERT INTO `admin`(`a_name`, `a_mail`, `a_mobile`, `a_position`, `a_img`, `a_joining`, `password`, `password_confirm`, `type`)
                              VALUES ('$drive_name','$drive_email','$drive_mobile','$drive_position','$drive_img','$drive_date','$drive_pass','$drive_passcon','$table')";
                    break;
                case 'Driver':
                    $query = "INSERT INTO `admin`(`a_name`, `a_mail`, `a_mobile`, `a_position`, `a_img`, `a_joining`, `password`, `password_confirm`, `type`)
                              VALUES ('$drive_name','$drive_email','$drive_mobile','$drive_position','$drive_img','$drive_date','$drive_pass','$drive_passcon','$table')";
                    $query = "INSERT INTO `driver`(`d_name`, `d_mail`, `d_mobile`, `d_position`, `d_img`, `d_joining`,`d_type`) 
                              VALUES ('$drive_name','$drive_email','$drive_mobile','$drive_position','$drive_img','$drive_date','$table')";
                    break;
                case 'Team':
                    $query = "INSERT INTO `team`(`t_joining`, `t_name`, `t_mail`, `t_mobile`, `t_position`, `t_img`, `t_password`, `t_password_confirm`,`t_type`) 
                             VALUES ('$drive_date','$drive_name','$drive_email','$drive_mobile','$drive_position','$drive_img','$drive_pass','$drive_passcon','$table')";
                    break;
            }

            if (!empty($query)) {
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo '<script>alert("Data Added");</script>';
                } else {
                    echo '<script>alert("Failed to insert data.");</script>';
                }
            }
        }
    }
?>