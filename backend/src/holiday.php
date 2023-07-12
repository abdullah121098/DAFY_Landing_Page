              
              
<?php 
include "../database/connection.php";

include_once 'header.php';?>
    <div class="container-fluid">  
            <!--  Row 1 -->
        <div class="row g-3">
              <div class="col-6 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Holiday / Taking a leave</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample m-3 mb-2" method="POST">
                      <div class="form-group" for="name">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label" for="mobile">Mobile</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="+91-9876543210" maxlength="10"/>
                      </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" >Leave</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="leave">
                                    <input type="radio" class="form-check-input" id="leave" name="leave" value="Medical Leave" />Medical </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="leave">
                                    <input type="radio" class="form-check-input" id="leave" name="leave" value="Casual Leave" /> Casual</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="leave">
                                    <input type="radio" class="form-check-input" id="leave" name="leave" value="Paid Leave" /> Paid </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="leave">
                                    <input type="radio" class="form-check-input" id="leave" name="leave" value="Emergence Leave" /> Emergence</label>
                                </div>
                            </div>
                        </div>
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label" for="file">File upload</label>
                        <input type="file" name="doc" id="file" class="file-upload-default" />
                      </div>
                            <div class="row">
                            <h5 class="card-title fw-semibold">Date</h5>
                                 <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="col-sm-3 col-form-label" for="date1">From</label>
                                        <input type="date" class="form-control" id="date1" name="date1" placeholder="Location" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label" for="date2">To</label>
                                        <input type="date" class="form-control" id="date2" name="date2" placeholder="Location" />
                                    </div>
                                </div>
                            </div>
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label" for="city">Where to </label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Location" />
                      </div>
                      <div class="form-group">
                      <label class="col-sm-3 col-form-label" for="reason">Textarea</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="add_leave"> Submit </button>
                      <button class="btn btn-primary me-2">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
<?php include_once 'footer.php'; ?>

<?php
if(isset($_POST['add_leave'])){
    $a=$_POST['name']; $b=$_POST['email']; $c=$_POST['mobile']; $d=$_POST['leave']; $e=$_POST['doc'];
    $f=$_POST['date1']; $g=$_POST['date2']; $h=$_POST['city']; $i=$_POST['reason'];
    $date=date(d-m-Y);
    $sql="INSERT INTO `casual_leave`(`l_name`, `l_mail`, `l_mobile`, `l_days`, `l_reason`, `l_type`, `l_start`, `l_end`, `l_city`, `l_file`) VALUES
    (  '$a',' $b', '$c', '$date', '$i', '$d', '$f', '$g', '$e', '$h')";
    $leave=mysqli_query($conn,$sql);
    if($leave){
      echo "<script>alert('success');</script>";
    }else{ echo "<script>alert('failed');</script>"; }
}

?>