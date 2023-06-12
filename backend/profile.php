<?php require_once "header.php"; ?>
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
                        include 'database/connection.php';
                        $sql=mysqli_query($conn,"SELECT * FROM `admin`");   
                        if ($sql->num_rows > 0) {                 
                        while ($view = mysqli_fetch_array($sql)){ 
                        ?>                    
                    
                    <div class="card-body">
                            <form method="post" action="#">
                                
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Username</label>
                                    <input type="text" class="form-control" id="inputEmail4" value="<?php echo $view['a_name']; ?>" name="user">
                                </div>
                                 <div class="form-group col-md-6">
                                <label for="inputAddress">Mobile No</label>
                                <input type="text" class="form-control" id="inputAddress" value="<?php echo $view['a_mobile']; ?>" name="phone">                                </div>
                            </div>
                                <div class="form-group">

                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" value="<?php echo $view['a_mail']; ?>" name="mail">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" value="<?php echo $view['a_address']; ?>" name="address">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity"
                                    value="<?php echo $view['a_ccity']; ?>" name="city">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity"
                                    value="<?php echo $view['a_date']; ?>" name="date">
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary" name="update"> update</button>
                        </form>
                        </div>
                        <?php } } else {
                               echo '<tr><td colspan="12">No data found.</td></tr>';
                          } ?>
                    </div>
                </div>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php
require_once 'footer.php';
?>