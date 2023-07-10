<?php 
include '../database/connection.php';  require_once "header.php";?> 

<?php 
    $g_id = $_GET['id'];
    //$g_id = 7;
    // echo $g_id;
?>

<div class="container-fluid">
    <div class="row g-3">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Update Current Ride </h4>
<?php
 $sql = mysqli_query($conn, "SELECT * FROM `customer` WHERE id= $g_id");
  
 if (mysqli_num_rows($sql) > 0) {
   while ($edit = mysqli_fetch_array($sql)) {
?>

                    <form class="form-sample" method="POST">
                        <h6 class="card-description m-2">Customer Details</h6>
                        <div class="row">
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="u-name" value="<?php echo $edit['name']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="u-mobile" value="<?php echo $edit['phone']; ?>" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="u-email" value="<?php echo $edit['email']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="u-date" value="<?php echo $edit['date']; ?>" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" name="u-time" value="<?php echo $edit['time']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Trip Type </label>
                                    <div class="col-sm-9">
                                    <select class="form-control"  name="u-trip">
                                        <option selected><?php echo $edit['ride_type']; ?></option>
                                        <option value="one_trip">One Trip</option>
                                        <option value="round_trip">Round Trip</option>
                                        <option value="hospital_trip">Hospital Trip</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Schedule Trip</label>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="u-schedule">
                                        <option selected><?php echo $edit['time_ride']; ?></option>
                                        <option value="immediate_trip">Immediate</option>
                                        <option value="schedule_trip">Schedule</option>
                                    </select>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <h6 class="card-description m-2">Ride Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Current</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="u-current" value="<?php echo $edit['pick_up']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Payment Type</label>
                                    <div class="col-sm-9" >
                                    <select class="form-control" name="u-paytype">
                                        <option selected><?php echo $edit['payment_type']; ?></option>
                                        <option value="G-pay">G-pay</option>
                                        <option value="Phonepe">Phonepe</option>
                                        <option value="Paytm">Paytm</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                    </div>
                                </div>
                            </div> 
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Destination</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="u-destination" value="<?php echo $edit['drop_in']; ?>" />
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Payment</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="u-payment" value="₹ <?php echo $edit['payment']; ?>" />
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Vechile</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="u-vechile" value="<?php echo $edit['v_name']; ?>" />
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Vechicle Type</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="u-vechile-type" value="<?php echo $edit['v_type']; ?>" />
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Driver Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="u-driver" value="<?php echo $edit['driver_name']; ?>"  />
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="u-status">
                                        <option active>
                                            <?php echo $edit['status']; ?></option>
                                            <option></option>
                                        <option>Confirm</option>
                                        <option>Driver Assigned</option>
                                        <option>Re-Schedule</option>
                                        <option>Complete</option>
                                        <option>Cancel</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-1 m-1">
                            <div class="col-md-6">
                                <div class="form-group row ">
                                    <button href="" class="col-sm-3 btn btn-success px-4 py-3" name="u-update"> Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
<?php } }?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['u-update'])){
    $name = $_POST['u-name'];
    $mobile = $_POST['u-mobile'];
    $mail = $_POST['u-email'];
    $date = $_POST['u-date'];
    $time = $_POST['u-time'];
    $trip = $_POST['u-trip'];
    $schedule = $_POST['u-schedule'];
    $current = $_POST['u-current'];
    $paytype = $_POST['u-paytype'];
    $payment = $_POST['u-payment'];
    $destination = $_POST['u-destination'];
    $vechile=$_POST['u-vechile'];
    $vechiletype=$_POST['u-vechile-type'];
    $driver = $_POST['u-driver'];
    $status = $_POST['u-status'];
   switch ($status){
    case 'Confirm':
        //echo $status;
        $conf = mysqli_query($conn,"UPDATE `customer` SET  `status` = ' $status' WHERE id = $g_id");
        if($conf) {
          
          echo '<script>alert("Confirm Booking Updated");</script>';
        //   header("Location:main.php");
        //   exit();
        } else {
          echo 'Update failed';
        }
    break;
    case 'Driver Assigned':
       // echo $driver."<br>".$status;
        $driv = mysqli_query($conn,"UPDATE `customer` SET `driver_name` = ' $driver', `status` = ' $status' WHERE id = $g_id");
        if($driv) {
          
          echo '<script>alert("Driver Assigned Updated");</script>';
        //   header("Location:main.php");
        //   exit();
        } else {
          echo 'Update failed';
        }
    break;
    case 'Re-Schedule':
       // echo $date."<br>".$time."<br>".$driver."<br>".$status ;
          // Check if the reschedule date, time, and driver name have changed
        
        if (($date != $edit['date']) || ($time != $edit['time']) || ($driver != $edit['driver_name'])) {
        $re_s = mysqli_query($conn,"UPDATE `customer` SET  `date`='$date',`time`='$time',driver_name='$driver',`status`=`status` = ' $status' WHERE id = $g_id");
        if($re_s) {
          
          echo '<script>alert("Re-Schedule Booking Updated");</script>';
        //   header("Location:main.php");
        //   exit();
        } else {
          echo 'Update failed';
        } } else {
            echo '<script>alert("No changes found. Database not updated.");</script>';
          }
    break;
    case 'Complete':
        echo $paytype."<br>".$payment."<br>".$status ;
        $com = mysqli_query($conn,"UPDATE `customer` SET `payment_type`='$paytype',`payment`='$payment',`status` = ' $status' WHERE id = $g_id");
        if($com) {
          echo '<script>alert("Ride Completed Updated");</script>';
         
            $moveQuery = "INSERT INTO complete_ride (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status)
                            SELECT name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status
                            FROM customer
                            WHERE id = $g_id";

              $moveResult = mysqli_query($conn, $moveQuery);

              if ($moveResult) {
                // Delete the record from the 'customer' table
                $deleteQuery = "DELETE FROM customer WHERE id = $g_id";
                $deleteResult = mysqli_query($conn, $deleteQuery);

                if ($deleteResult) {
                  echo '<script>alert("Data moved to completed table.");</script>';
                } else {
                  echo 'Failed to delete the record.';
                }
              } else {
                echo 'Failed to move data to the completed table.';
              }  
        //   header("Location:main.php");
        //   exit();
        } else {
          echo 'Update failed';
        }
    break;
    case 'Cancel':
        echo $status;
        $com = mysqli_query($conn,"UPDATE `customer` SET `status` = ' $status' WHERE id = $g_id");
        if($com) {
          
          echo '<script>alert("Booking Cancelled Updated");</script>';

          $moveQuery = "INSERT INTO cancel (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status)
          SELECT name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type, driver_name, payment_type, payment, status
          FROM customer WHERE id = $g_id";

            $moveResult = mysqli_query($conn, $moveQuery);

            if ($moveResult) {
            // Delete the record from the 'customer' table
            $deleteQuery = "DELETE FROM customer WHERE id = $g_id";
            $deleteResult = mysqli_query($conn, $deleteQuery);

            if ($deleteResult) {
            echo '<script>alert("Data moved to completed table.");</script>';

            } else {
            echo 'Failed to delete the record.';
            }
            } else {
            echo 'Failed to move data to the completed table.';
            }
        //   header("Location:main.php");
        //   exit();
        } else {
          echo 'Update failed';
        }
    break;
    default:
    // echo $name."<br>".$mobile."<br>".$mail."<br>".$date."<br>". $time."<br>".$trip. "<br>". $schedule."<br>".$current."<br>".
    // $paytype."<br>". $payment."<br>".$destination."<br>".$driver."<br>".$status;

        $up = mysqli_query($conn,"UPDATE `customer` SET `name`='$name', `email`='$mail', `phone`='$mobile', 
        `pick_up`='$current', `drop_in`='$destination', `ride_type`='$trip', `time_ride`='$schedule', `date`='$date', `time`='$time',
         `v_name`='$vechile', `v_type`='$vechiletype',`status` = '' WHERE id = $g_id");
        if($up) {
        
        echo '<script>alert("Booking Updated");</script>';
        //   header("Location:main.php");
        //   exit();
        } else {
        echo 'Update failed';
        }
     break;
   }
}
?>

<?php  require_once "footer.php"; ?>