<?php  include 'database/connection.php'; require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Profile Detail</h5>
                        <div class="col-xl-12 col-md-12">
                            <?php
                                $sql=mysqli_query($conn,"SELECT * FROM `admin` LIMIT 1");   
                                if ($sql->num_rows > 0) {                 
                                while ($view = mysqli_fetch_array($sql)){ 
                                ?>                    
                    
                                <form method="post" action="#">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputuser4">Username</label>
                                            <input type="text" class="form-control" id="inputuser4" value="<?php echo $view['a_name']; ?>" name="user">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputmobile4">Mobile No</label>
                                        <input type="text" class="form-control" id="inputmobile4" value="<?php echo $view['a_mobile']; ?>" name="phone">                                </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputemail4">Email</label>
                                        <input type="email" class="form-control" id="inputemail4" value="<?php echo $view['a_mail']; ?>" name="mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputaddress4">Designation</label>
                                        <input type="text" class="form-control" id="inputaddress4" value="<?php echo $view['a_position']; ?>" name="address">
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
                                            <img class="fw-semibold g-2" src="assets/images/profile/<?php echo $view['a_img']; ?>" width="70" height="90">
                                            <input type="file" name="photo" id="inputimg4" class="fw-semibold g-2">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputpassword4">Password</label>
                                            <input type="password" class="form-control" id="inputpassword4" value="<?php echo $view['password']; ?>" name="password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn  btn-primary" name="update"> update</button>
                                        </div>
                                    </div>
                                </form>
                        
                            <?php } } else {
                                echo '<tr><td colspan="12">No data found.</td></tr>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
require_once 'footer.php';
?>