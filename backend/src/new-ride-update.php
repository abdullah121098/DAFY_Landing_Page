
<?php session_start();
  include "../database/connection.php";

  $g_id = $_GET['id'];
  // echo $g_id;
  include_once 'header.php';

  $sql = mysqli_query($conn, "SELECT * FROM `customer` WHERE id= $g_id");

  if (mysqli_num_rows($sql) > 0) {
    while ($edit = mysqli_fetch_array($sql)) {
?>

<div class="container-responsive">
            <!--  Row 1 -->
            <div class="row">
              <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                  <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">New Ride List </h5>
                    <div class="table-responsive">
                        <div class="booking-form position-relative">
                            <form method="POST" >
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Name</label>
                                              <input class="form-control bg-warning" type="text" name="e-name" value="<?php echo $edit['name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Email</label>
                                              <input class="form-control bg-warning" type="text" name="e-email" value="<?php echo $edit['email'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Mobile</label>
                                              <input class="form-control bg-warning" type="text" name="e-phone"  value="<?php echo $edit['phone'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Pick Up</label>
                                              <input class="form-control bg-warning" type="text" name="e-pick" value="<?php echo $edit['pick_up'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Drop In</label>
                                              <input class="form-control bg-warning" type="text" name="e-drop" value="<?php echo $edit['drop_in'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Ride Type</label>
                                              <input class="form-control bg-warning" type="text" name="e-ride" value="<?php echo $edit['ride_type'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <label class="form-label">Service Type</label>
                                              <input class="form-control bg-warning" type="text" name="e-service" value="<?php echo $edit['time_ride'];?>">
                                      </div>
                                  </div>
                    
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label"> Date </label>
                                          <input class="form-control bg-warning" type="date"  name="e-date"  min="<?=date('Y-m-d\TH:i');?>"value="<?php echo $edit['date'];?>" >
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label"> Time </label>
                                          <input class="form-control bg-warning" type="time"  name="e-time"  min="<?=date('Y-m-d\TH:i');?>" value="<?php echo $edit['time'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label">Vechicle Name</label>
                                          <input class="form-control bg-warning" type="text"  name="e-vname" value="<?php echo $edit['v_name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label">Vechicle Type</label>
                                          <input class="form-control bg-warning" type="text"  name="e-vtype" value="<?php echo $edit['v_type'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label">driver Name</label>
                                          <input class="form-control bg-warning" type="text"  value="<?php echo $edit['driver_name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label">Payment Type</label>
                                          <input class="form-control bg-warning" type="text"  value="<?php echo $edit['payment_type'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label">Payment</label>
                                          <input class="form-control bg-warning" type="text"  value="<?php echo $edit['payment'];?>">
                                      </div>
                                  </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                          <label class="form-label">Status</label>
                                          <input class="form-control bg-warning" type="text"  value="<?php echo $edit['status'];?>">
                                      </div>
                                    </div>
                                    <div class="col-6">
                                            <div class="form-btn text-center">
                                              <button type="submit" class=" btn btn-dark" name="updateall" >update</button>
                                              
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-10">
                                                  <div class="form-group text-center">
                                                    <h4 class="form-label">Add New Detail</h4>
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <label class="form-label">Driver Name</label>
                                                <select name="driver" id="" class="form-control badge bg-warning fw-semibold">
                                                      <option selected disabled>Select</option>
                                                      <option>Amal</option>
                                                      <option>jijo</option>
                                                      <option>Drive Started</option>
                                                      <option>siva</option>
                                                      <option>Cancel</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                  <label class="form-label">Payment Type</label>
                                                  <select name="paytype" id="" class="form-control badge bg-warning fw-semibold">
                                                      <option selected disabled>Select</option>
                                                      <option>G-pay</option>
                                                      <option>Patym</option>
                                                      <option>phonepe Started</option>
                                                      <option>Cancel</option>
                                                  </select>
                                                  <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                  <label class="form-label">Payment</label>
                                                  <input type="text" class="form-control fw-semibold mb-1" value="<?php echo $edit['payment'];?>"
                                                  name="payment">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                  <label class="form-label">Status</label>
                                                  <select name="status" id="sel" class="form-control badge bg-warning fw-semibold">
                                                      <option value="" selected disabled>Select</option>
                                                      <option>Confirm</option>
                                                      <option>Driver Assigned</option>
                                                      <option>Drive Started</option>
                                                      <option>Completed</option>
                                                      <option>Cancel</option>
                                                      <span class="select-arrow"></span>
                                                  </select>
                                                </div>
                                            </div>
                                      </div>
                                            <div class="row">
                                                <div class="col-10 form-group">
                                                    <div class="form-btn text-center">
                                                    <button type="submit" class=" btn btn-dark px-4 py-4" name="update" >update</button>
                                                    <!-- <button type="submit" class="btn btn-dark" name="delete">delete</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
</div>
      <style>.form-control{ color:black;  font-family: Arial, Helvetica, sans-serif;}</style>
  <?php } }
  if(isset($_POST['update'])){
        $name=$_POST['e-name'];
        $email=$_POST['e-email'];
        $phone=$_POST['e-phone'];
        $drop=$_POST['e-drop'];
        $pick=$_POST['e-pick'];
        $ride=$_POST['e-ride'];
        $ridetype=$_POST['e-service'];
        $date=$_POST['e-date'];
        $time=$_POST['e-time'];
        $vname=$_POST['e-vname'];
        $vtype=$_POST['e-vtype'];
        $a = $_POST['driver'];
        $b = $_POST['status'];
        $c=$_POST['paytype'];
        $d=$_POST['payment'];

        switch ($b) {

          case 'Confirm':
            $conf = mysqli_query($conn,"UPDATE `customer` SET  `status` = '$b' WHERE id = $g_id");
            if($conf) {
              
              echo '<script>alert("Confirm booking");</script>';
              header("Location:index.php");
              exit();
            } else {
              echo 'Update failed';
            }
          break;

          case 'Driver Assigned':
            
            $up = mysqli_query($conn,"UPDATE `customer` SET  `driver_name` = '$a', `status` = '$b' WHERE id = $g_id");
          
            if($up) {
            echo '<script>alert("Confirm booking");</script>';
            header("Location:index.php");
            exit();
            } else {
              echo 'Update failed';
            }
          break;

          case 'Drive Started':
            $start = mysqli_query($conn,"UPDATE `customer` SET  `status` = '$b' WHERE id = $g_id");
            if($start) {
                echo '<script>alert("Confirm booking");</script>';
            } else {
              echo 'Update failed';
            }
          break;

          case 'Completed':
            $complete = mysqli_query($conn,"UPDATE `customer` SET `payment_type`='$c',`payment`='$d', `status` = '$b'  WHERE id = $g_id");
            if($complete) {
              echo '<script>alert("Confirm booking");</script>';
          
              // $moveQuery = "INSERT INTO complete_ride (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status)
              //               SELECT name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status
              //               FROM customer
              //               WHERE id = $g_id";

              // $moveResult = mysqli_query($conn, $moveQuery);

              // if ($moveResult) {
              //   // Delete the record from the 'customer' table
              //   $deleteQuery = "DELETE FROM customer WHERE id = $g_id";
              //   $deleteResult = mysqli_query($conn, $deleteQuery);

              //   if ($deleteResult) {
              //     echo '<script>alert("Data moved to completed table.");</script>';
              //   } else {
              //     echo 'Failed to delete the record.';
              //   }
              // } else {
              //   echo 'Failed to move data to the completed table.';
              // }
            } else {
                echo 'Update failed';
              }
          break;

          case 'Cancel':
            $cancel = mysqli_query($conn,"UPDATE `customer` SET `status` = '$b' WHERE id = $g_id");
            if($cancel) {
              echo '<script>alert("Confirm booking");</script>';
            
              // $moveQuery = "INSERT INTO cancel (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status)
              //               SELECT name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status
              //               FROM customer WHERE id = $g_id";

              // $moveResult = mysqli_query($conn, $moveQuery);

              // if ($moveResult) {
              //   // Delete the record from the 'customer' table
              //   $deleteQuery = "DELETE FROM customer WHERE id = $g_id";
              //   $deleteResult = mysqli_query($conn, $deleteQuery);

              //   if ($deleteResult) {
              //     echo '<script>alert("Data moved to completed table.");</script>';
                
              //   } else {
              //     echo 'Failed to delete the record.';
              //   }
              // } else {
              //   echo 'Failed to move data to the completed table.';
              // }
            } else {
              echo 'Update failed';
            }
          break; 
        }
      } else if(isset($_POST['updateall'])){
          $name=$_POST['e-name'];
          $email=$_POST['e-email'];
          $phone=$_POST['e-phone'];
          $drop=$_POST['e-drop'];
          $pick=$_POST['e-pick'];
          $ride=$_POST['e-ride'];
          $ridetype=$_POST['e-service'];
          $date=$_POST['e-date'];
          $time=$_POST['e-time'];
          $vname=$_POST['e-vname'];
          $vtype=$_POST['e-vtype'];
          $a = $_POST['driver'];
          $b = $_POST['status'];
          $c=$_POST['paytype'];
          $d=$_POST['payment'];
          $all = "UPDATE `customer` SET `name`='$name',`email`='$email',`phone`='$phone',`pick_up`='$pick',`drop_in`='$drop',`ride_type`='$ride',`time_ride`='$ridetype',
          `date`='$date',`time`='$time',`v_name`='$vname',`v_type`='$vtype',`driver_name`='$a',
          `payment_type`='$c',`payment`='$d',`status`='$b' WHERE id = $g_id";
          if($all) {
            echo '<script>alert("Confirm booking");</script>';
          } else {
            echo 'Update failed';
          }
        }

    // if(isset($_POST['delete'])){
      
    //   $up = "DELETE FROM `customer` WHERE id = $g_id";

    //   $sql = mysqli_query($conn, $up);
    //   if($sql) {
    //     header("Location:main.php");
    //     echo '<script>alert("delete successful")</script>';
    //   } else {
    //     echo 'delete failed';
    //   }
    // }

    // exit();
    // Display each row of data

include_once 'footer.php';
        ?>
