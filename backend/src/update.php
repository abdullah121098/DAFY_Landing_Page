
<?php
include "../database/connection.php";

$g_id = $_GET['id'];
// echo $g_id;
include_once 'header.php';
?>

<div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
              <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                  <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">New Ride List </h5>
                    <div class="table-responsive">
                      <table class="table text-nowrap mb-0 align-middle">
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
                                              $sql = mysqli_query($conn, "SELECT * FROM `customer` WHERE id= $g_id");

                                              if (mysqli_num_rows($sql) > 0) {
                                                echo '<form method="POST">'; // Move the form tag outside the loop

                                                while ($edit = mysqli_fetch_array($sql)) {
                                                  echo '
                                                  <tr>
                                                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0">'.  $edit['id'] .'</h6></td>
                                                  <td class="border-bottom-0"><h6 class="fw-semibold mb-1">'. $edit['name'] .'</h6></td>
                                                  <!-- rest of the table row data -->
                                                  <td class="border-bottom-0 data5">
                                                  <select name="assign" id="" class="badge bg-primary fw-semibold">
                                                      <option selected disabled>Select</option>
                                                      <option>Amal</option>
                                                      <option>jijo</option>
                                                      <option>Drive Started</option>
                                                      <option>siva</option>
                                                      <option>Cancel</option>
                                                  </select>
                                                  </td>
                                                  <td class="border-bottom-0 data5">
                                                  <select name="pay_type" id="" class="badge bg-primary fw-semibold">
                                                      <option selected disabled>Select</option>
                                                      <option>G-pay</option>
                                                      <option>Patym</option>
                                                      <option>phonepe Started</option>
                                                      <option>Cancel</option>
                                                  </select>
                                                  </td>
                                                  <td class="border-bottom-0"><input type="text" class="fw-semibold mb-1" value="'. $edit['payment'] .'" name="pay_ment"></td>
                                                  <td class="border-bottom-0">
                                                  <select name="status" id="sel" class="badge bg-primary fw-semibold">
                                                      <option value="" selected disabled>Select</option>
                                                      <option>Confirm</option>
                                                      <option>Driver Assigned</option>
                                                      <option>Drive Started</option>
                                                      <option>Completed</option>
                                                      <option>Cancel</option>
                                                  </select>
                                                  </td> 

                                                  <td class="border-bottom-0">
                                                  <div class="d-flex align-items-center gap-2">
                                                      <button type="submit" class="btn btn-primary" name="update">update</button>
                                                      <button type="submit" class="btn btn-primary" name="delete">delete</button>
                                                  </div>
                                                  </td>
                                                  </tr>
                                                  ';
                                                }

                                                echo '</form>'; // Close the form tag after the loop
                                              }?>

                          </tbody>
                      </table>
                          
                    </div>
                </div>
              </div>
            </div>
          </div>

<?php
if(isset($_POST['update'])){
  $a = $_POST['assign'];
  $b = $_POST['status'];
  $c=$_POST['pay_type'];
  $d=$_POST['pay_ment'];
  $up = "UPDATE `customer` SET  `driver_name` = '$a', `status` = '$b',`payment`='$d',`payment_type`='$c' WHERE id = $g_id";

  $sql = mysqli_query($conn, $up);
  if($sql) {
    echo 'Update successful';
  } else {
    echo 'Update failed';
  }
}

if(isset($_POST['delete'])){
  
  $up = "DELETE FROM `customer` WHERE id = $g_id";

  $sql = mysqli_query($conn, $up);
  if($sql) {
    header("Location:display.php");
    echo '<script>alert("delete successful")</script>';
  } else {
    echo 'delete failed';
  }
}

// exit();
      // Display each row of data


      include_once 'footer.php';
?>
