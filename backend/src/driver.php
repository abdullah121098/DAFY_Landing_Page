<?php include '../database/connection.php'; require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 text-center">New Driver Member</h5>
                        <form method="POST"  enctype="multipart/form-data"  onsubmit="showConfirmation()">
                            <h6 class="card-description m-2"></h6>
                            <div class="row">    
                                <div class="col-md-6 g-1">
                                    <div class="form-group row text-center">
                                    <div class="col-sm-9 bg-dark">
                                            <img class="fw-semibold rounded-circle" src="../assets/images/team/<?php echo $row[`d_img`]; ?>" width="70" height="90">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="add-email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="add-name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mobile</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="add-mobile" />
                                        </div>
                                    </div>
                                </div>
                                
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="add-date" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 g-1">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Designation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="add-postion" />
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
                                                    <input type="password" class="form-control" name="add-pass" id="add-pass" />
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
                                                <input type="password" class="form-control" name="add-passcon" id="add-passcon" />
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
                                    <div class="form-group row"> <label class="col-sm-3 col-form-label">Choose member Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="add-table">
                                                <option>-- Select -- </option>
                                                <option>Team</option>
                                                <option>Driver</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 text-center">
                                    <button type="submit" class="submit-btn rounded-pill text btn btn-warning px-3 py-2" name="add_drive">Add Member</button>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- ========= Script =========== -->
        <style>.page-link{ background: black; font-style: bold; color: white; }</style>

    <script>function showConfirmation() { alert("Confirm booking");return true; } </script>

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
            $drive_postion = $_POST['add-postion'];
            $drive_date = $_POST['add-date'];
            $drive_pass = $_POST['add-pass'];
            $drive_passcon = $_POST['add-passcon'];
            $table=$_POST['add-table'];

            $drive_img= $_FILES ['add-img']['name'];
            $img_tmp = $_FILES ['add-img']['tmp_name'];
            $img_loc = '../assets/images/driver/';
            $move=move_uploaded_file($img_tmp,$img_loc.$img);

            if (empty($drive_name) || empty($drive_email) || empty($drive_mobile) || empty($drive_postion) || empty($drive_date) || empty($drive_pass) || empty($drive_passcon) || empty($drive_img)) {
                echo '<script>alert("Please fill all the fields.");</script>';
            } elseif ($drive_pass != $drive_passcon) {
                echo '<script>alert("Password does not match.");</script>';
            } else {
                $driveadd = mysqli_query($conn, 
                "INSERT INTO `driver`(`d_name`, `d_mail`, `d_mobile`, `d_position`, `d_img`, `d_joining`, `d_password`, `d_password_confirm`)
                    VALUES ('$drive_name','$drive_email','$drive_mobile','$drive_postion','$drive_img','$drive_date','$drive_pass','$drive_passcon')");
                echo '<script>alert("Data Added");</script>';
            }
        } //else {  echo '<script>alert("Data Failed");</script>'; }
    ?>