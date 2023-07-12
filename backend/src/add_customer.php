<?php 
include '../database/connection.php';  require_once "header.php";?> 


<div class="container-fluid">
    <div class="row g-3">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body ">
                    <h4 class="card-title text-center">New Ride Booking</h4>
                    <form class="form-sample" method="POST" onsubmit="showConfirmation()" >
                        <h6 class="card-description m-2">Customer Details</h6>
                        <div class="row">
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
                                        <input type="tel" class="form-control" name="add-mobile" maxlength="10"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="add-email"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="add-date" min="<?=date('Y-m-d\TH:i');?>"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" name="add-time" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 g-1">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Trip Type </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="trip">
                                            <input type="radio" class="form-check-input" id="trip" name="add-trip"  value="one_trip" />One Trip</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="trip">
                                            <input type="radio" class="form-check-input" id="trip" name="add-trip" value="round_trip" />Round Trip</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="trip">
                                            <input type="radio" class="form-check-input" id="trip" name="add-trip" value="hospital_trip" />Hospital Trip</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-9">
                                        <select class="form-control"  name="add-trip">
                                            <option selected>-- select --</option>
                                            <option value="one_trip">One Trip</option>
                                            <option value="round_trip">Round Trip</option>
                                            <option value="hospital_trip">Hospital Trip</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Schedule Trip</label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="leave">
                                            <input type="radio" class="form-check-input" id="leave" name="add-schedule" value="immediate_trip" />Immediate</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="leave">
                                            <input type="radio" class="form-check-input" id="leave" name="add-schedule" value="schedule_trip" />Schedule</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-9">
                                        <select class="form-control" name="add-schedule">
                                            <option selected>-- select --</option>
                                            <option value="immediate_trip">Immediate</option>
                                            <option value="schedule_trip">Schedule</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div> 
                        </div>
                        <h6 class="card-description m-2">Ride Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Current</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="add-current" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Vechicle</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="add-vechile" />
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Destination</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="add-destination" />
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Vechile Type</label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="leave">
                                            <input type="radio" class="form-check-input" id="leave" name="add-vechile-type" value="Automatic" />Automatic</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="leave">
                                            <input type="radio" class="form-check-input" id="leave" name="add-vechile-type" value="Manual" />Manual</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="leave">
                                            <input type="radio" class="form-check-input" id="leave" name="add-vechile-type" value="Both" />Both</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-9">
                                    <input type="text" class="form-control" name="add-vechile-type" />
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row g-1 m-1">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <button type="submit" class="col-sm-3 btn btn-success rounded-pill px-4 py-3 m-2" name="add-data">Book Now</button>
                                    <a type="submit" href="main.php" class="col-sm-3 btn btn-danger  rounded-pill px-4 py-3 m-2" name="cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['add-data'])){
    $name = $_POST['add-name'];
    $mobile = $_POST['add-mobile'];
    $mail = $_POST['add-email'];
    $date = $_POST['add-date'];
    $time = $_POST['add-time'];
    $trip = $_POST['add-trip'];
    $schedule = $_POST['add-schedule'];
    $current = $_POST['add-current'];
    $destination = $_POST['add-destination'];
    $vechile=$_POST['add-vechile'];
    $vechiletype=$_POST['add-vechile-type'];

    $currentDate = date('d-m-Y');
    $currentTime = date("h:i:s:a");

    switch ($schedule) {
        case 'schedule_trip':
            $st=mysqli_query($conn,
                "INSERT INTO `customer`(`name`, `email`, `phone`, `pick_up`, `drop_in`,
                `ride_type`, `time_ride`, `date`, `time`, `v_name`, `v_type`, 
                -- `driver_name`,`payment_type`, `payment`, `status`
                ) VALUES
                ('$name','$mail','$mobile','$current','$destination','$trip','$schedule',
                '$date','$time','$vechile','$vechiletype',--'$driver','$payment_type','$payment','$status'
                )");

            if($st){
                echo '<script>alert("New Schedule Booking Added");</script>';
            } else {
                echo '<script>alert("Booking Failed!");</script>';
            }
            break;

        case 'immediate_trip':
           
            $it=mysqli_query($conn,
                "INSERT INTO `customer`(`name`, `email`, `phone`, `pick_up`, `drop_in`,
                `ride_type`, `time_ride`, `date`, `time`, `v_name`, `v_type`, `driver_name`,
                `payment_type`, `payment`, `status`) VALUES
                ('$name','$mail','$mobile','$current','$destination','$trip','$schedule',
                '$currentDate','$currentTime','$vechile','$vechiletype','$driver',
                '$payment_type','$payment','$status')");

            if($it){
                echo '<script>alert("New Immediate Booking Added");</script>';
            } else {
                echo '<script>alert("Booking Failed!");</script>';
            }
            break;

        default:
            echo '<script>alert("Booking Failed");</script>';
            break;
    }
}
?>

<?php  require_once "footer.php"; ?>