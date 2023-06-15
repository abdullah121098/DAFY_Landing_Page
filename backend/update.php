
<?php
include "database/connection.php";

$g_id = $_GET['id'];
// echo $g_id;
include_once 'header.php';

$sql = mysqli_query($conn, "SELECT * FROM `customer` WHERE id= $g_id");

if (mysqli_num_rows($sql) > 0) {
   while ($edit = mysqli_fetch_array($sql)) {
?>

<div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
              <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                  <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">New Ride List </h5>
                    <div class="table-responsive">
                      <!-- <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                          <tr>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Name</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Driver Name</h6>
                            </th>
                            <th class="border-bottom-0 data5">
                              <h6 class="fw-semibold mb-0">Payment Type</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Payment</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Status</h6>
                            </th>
                            </tr>
                        </thead>
                          <tbody>
                                             
                                                  <?php
                                              //     echo '
                                              //     <tr>
                                              //     <td class="border-bottom-0"><h6 class="fw-semibold mb-0">'.  $edit['id'] .'</h6></td>
                                              //     <td class="border-bottom-0"><h6 class="fw-semibold mb-1">'. $edit['name'] .'</h6></td>
                                              //     <!-- rest of the table row data -->
                                              //     <td class="border-bottom-0 data5">
                                              //     <select name="assign" id="" class="badge bg-primary fw-semibold">
                                              //         <option selected disabled>Select</option>
                                              //         <option>Amal</option>
                                              //         <option>jijo</option>
                                              //         <option>Drive Started</option>
                                              //         <option>siva</option>
                                              //         <option>Cancel</option>
                                              //     </select>
                                              //     </td>
                                              //     <td class="border-bottom-0 data5">
                                              //     <select name="pay_type" id="" class="badge bg-primary fw-semibold">
                                              //         <option selected disabled>Select</option>
                                              //         <option>G-pay</option>
                                              //         <option>Patym</option>
                                              //         <option>phonepe Started</option>
                                              //         <option>Cancel</option>
                                              //     </select>
                                              //     </td>
                                              //     <td class="border-bottom-0"><input type="text" class="fw-semibold mb-1" value="'. $edit['payment'] .'" name="pay_ment"></td>
                                              //     <td class="border-bottom-0">
                                                  // <select name="status" id="sel" class="badge bg-primary fw-semibold">
                                                  //     <option value="" selected disabled>Select</option>
                                                  //     <option>Confirm</option>
                                                  //     <option>Driver Assigned</option>
                                                  //     <option>Drive Started</option>
                                                  //     <option>Completed</option>
                                                  //     <option>Cancel</option>
                                                  // </select>
                                              //     </td> 

                                              //     <td class="border-bottom-0">
                                              //     <div class="d-flex align-items-center gap-2">
                                                      // <button type="submit" class="btn btn-primary" name="update">update</button>
                                                      // <button type="submit" class="btn btn-primary" name="delete">delete</button>
                                              //     </div>
                                              //     </td>
                                              //     </tr>
                                              //     ';
                                              //   }

                                              //   echo '</form>'; // Close the form tag after the loop
                                              // }?>

                          </tbody>
                      </table> -->
                      <div class="booking-form">
                            <form method="POST" >
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Name</h4>
                                              <input class="form-control" type="text" name="e-name" value="<?php echo $edit['name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Email</h4>
                                              <input class="form-control" type="text" name="e-email" value="<?php echo $edit['email'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Mobile</h4>
                                              <input class="form-control" type="text" name="e-phone"  value="<?php echo $edit['phone'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Pick Up</h4>
                                              <input class="form-control" type="text" name="e-pick" value="<?php echo $edit['pick_up'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Drop In</h4>
                                              <input class="form-control" type="text" name="e-drop" value="<?php echo $edit['drop_in'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Ride Type</h4>
                                              <input class="form-control" type="text" name="e-ride" value="<?php echo $edit['ride_type'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Service Type</h4>
                                              <input class="form-control" type="text" name="e-service" value="<?php echo $edit['time_ride'];?>">
                                      </div>
                                  </div>
                                  <!-- <div class="col-6">
                                    <div class="form-group">
                                              <h4 class="form-label">Drop In</h4>
                                              <input class="form-control" type="text" name="e-name">
                                      </div>
                                  </div> -->
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label"> Date </h4>
                                          <input class="form-control" type="date"  name="e-date"  min="<?=date('Y-m-d\TH:i');?>"value="<?php echo $edit['date'];?>" >
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label"> Time </h4>
                                          <input class="form-control" type="time"  name="e-time"  min="<?=date('Y-m-d\TH:i');?>" value="<?php echo $edit['time'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label">Vechicle Name</h4>
                                          <input class="form-control" type="text"  name="e-vname" value="<?php echo $edit['v_name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label">Vechicle Type</h4>
                                          <input class="form-control" type="text"  name="e-vtype" value="<?php echo $edit['v_type'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label">driver Name</h4>
                                          <input class="form-control" type="text"  value="<?php echo $edit['driver_name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label">Payment Type</h4>
                                          <input class="form-control" type="text"  value="<?php echo $edit['payment_type'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label">Payment</h4>
                                          <input class="form-control" type="text"  value="<?php echo $edit['payment'];?>">
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <h4 class="form-label">Status</h4>
                                          <input class="form-control" type="text"  value="<?php echo $edit['status'];?>">
                                      </div>
                                  </div>
                                </div><br><br><br>
                                    <div class="row">
                                            <div class="col-10">
                                                  <div class="form-group text-center">
                                                    <h4 class="form-label">Add Detail</h4>
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <h4 class="form-label">Driver Name</h4>
                                                <select name="assign" id="" class="badge bg-primary fw-semibold">
                                                      <option selected disabled>Select</option>
                                                      <option>Amal</option>
                                                      <option>jijo</option>
                                                      <option>Drive Started</option>
                                                      <option>siva</option>
                                                      <option>Cancel</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                  <h4 class="form-label">Payment Type</h4>
                                                  <select name="pay_type" id="" class="badge bg-primary fw-semibold">
                                                      <option selected disabled>Select</option>
                                                      <option>G-pay</option>
                                                      <option>Patym</option>
                                                      <option>phonepe Started</option>
                                                      <option>Cancel</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                  <h4 class="form-label">Payment</h4>
                                                  <input type="text" class="fw-semibold mb-1" value="<?php echo $edit['payment'];?>" name="pay_ment">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                  <h4 class="form-label">Status</h4>
                                                  <select name="status" id="sel" class="badge bg-primary fw-semibold">
                                                      <option value="" selected disabled>Select</option>
                                                      <option>Confirm</option>
                                                      <option>Driver Assigned</option>
                                                      <option>Drive Started</option>
                                                      <option>Completed</option>
                                                      <option>Cancel</option>
                                                  </select>
                                                </div>
                                            </div>
                                    </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="form-btn text-center">
                                                    <button type="submit" class="btn btn-dark" name="update" >update</button>
                                                    <button type="submit" class="btn btn-dark" name="delete">delete</button>
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

<?php
}

echo '</form>'; // Close the form tag after the loop
}
if(isset($_POST['update'])){
  $a = $_POST['assign'];
  $b = $_POST['status'];
  $c=$_POST['pay_type'];
  $d=$_POST['pay_ment'];
  $up = "UPDATE `customer` SET  `driver_name` = '$a', `status` = '$b',`payment`='$d',`payment_type`='$c' WHERE id = $g_id";

  $sql = mysqli_query($conn, $up);
  if($sql) {
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
