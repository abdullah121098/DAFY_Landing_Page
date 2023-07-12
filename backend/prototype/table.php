<?php include '../database/connection.php';  require_once "header.php";?> 

<?php  
// $date=date("d/m/y");
// $sql = "SELECT * FROM `customer` WHERE `ride_type`='one_trip';";
// $result = mysqli_query($conn,$sql);
// $row= mysqli_num_rows($result); 
// $type=mysqli_fetch_array($result);
// $index = 1;
?>
<!-- <div class="container-fluid">
        
      <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ride Status</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Ride</th>
                            <th>Deadline</th>
                            <th>Progress</th>
                          </tr>
                        </thead>
                        <tbody>
                                <?php  
                                 if($row){
                                ?>
                            <tr>
                                <td><?php echo $index++; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $type['ride_type']; ?></td>
                                <td><?php echo $type['time_ride']; ?></td>
                                <td><?php echo $row; ?></td> 
                            </tr>
                            <?php  } else {  echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
      </div>
</div> -->

<div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Ride Completed History</h4>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="fw-bold text-black">
                                <tr>
                                    <th>#</th>
                                    <th>Ride Type</th>
                                    <th>Time</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql1 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip' AND `status`='Completed'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'AND `status`='Completed'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip' AND `status`='Completed'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                                <!-- schedule_trip -->
                                  <?php 
                                $sql1 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip' AND `status`='Completed'";
                                $result1 = mysqli_query($conn, $sql1); 
                              
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip' AND `status`='Completed'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip' AND `status`='Completed'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                           <!-- Completed Ride -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Ride Completed History</h4>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="fw-bold text-black">
                                <tr>
                                    <th>#</th>
                                    <th>Ride Type</th>
                                    <th>Time</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql1 = "SELECT * FROM `complete_ride` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `complete_ride` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `complete_ride` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                                <!-- schedule_trip -->
                                  <?php 
                                $sql1 = "SELECT * FROM `complete_ride` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                              
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `complete_ride` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `complete_ride` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                           <!-- Cancel Ride -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Ride Cancel History</h4>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="fw-bold text-black">
                                <tr>
                                    <th>#</th>
                                    <th>Ride Type</th>
                                    <th>Time</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql1 = "SELECT * FROM `cancel` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `cancel` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `cancel` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                                <!-- schedule_trip -->
                                  <?php 
                                $sql1 = "SELECT * FROM `cancel` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                              
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `cancel` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `cancel` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                                <!--- Temporary Table Start --->
                   <!-- New Ride -->
                   <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Ride Completed History</h4>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="fw-bold text-black">
                                <tr>
                                    <th>#</th>
                                    <th>Ride Type</th>
                                    <th>Time</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql1 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip' AND `status`='Completed'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'AND `status`='Completed'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip' AND `status`='Completed'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                                <!-- schedule_trip -->
                                  <?php 
                                $sql1 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip' AND `status`='Completed'";
                                $result1 = mysqli_query($conn, $sql1); 
                              
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip' AND `status`='Completed'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip' AND `status`='Completed'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                           <!-- Completed Ride -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Ride Completed History</h4>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="fw-bold text-black">
                                <tr>
                                    <th>#</th>
                                    <th>Ride Type</th>
                                    <th>Time</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql1 = "SELECT * FROM `complete_ride` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `complete_ride` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `complete_ride` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                                <!-- schedule_trip -->
                                  <?php 
                                $sql1 = "SELECT * FROM `complete_ride` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                              
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `complete_ride` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `complete_ride` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                           <!-- Cancel Ride -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Ride Cancel History</h4>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="fw-bold text-black">
                                <tr>
                                    <th>#</th>
                                    <th>Ride Type</th>
                                    <th>Time</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql1 = "SELECT * FROM `cancel` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `cancel` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `cancel` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                                <!-- schedule_trip -->
                                  <?php 
                                $sql1 = "SELECT * FROM `cancel` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                              
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row1['ride_type']; ?></td>
                                        <td><?php echo $row1['time_ride']; ?></td>
                                        <td><?php echo $a1; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql2 = "SELECT * FROM `cancel` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row2['ride_type']; ?></td>
                                        <td><?php echo $row2['time_ride']; ?></td>
                                        <td><?php echo $a2; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                
                                $sql3 = "SELECT * FROM `cancel` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip'";
                                $result3 = mysqli_query($conn, $sql3); 
                                if ($a3 = mysqli_num_rows($result3)) { 
                                    $row3 = mysqli_fetch_array($result3);
                                ?>
                                    <tr class="fw-semibold text-black">
                                        <td><?php echo $index1++; ?></td>
                                        <td><?php echo $row3['ride_type']; ?></td>
                                        <td><?php echo $row3['time_ride']; ?></td>
                                        <td><?php echo $a3; ?></td>
                                    </tr>
                                <?php  
                                } else {
                                    echo '<tr><td colspan="4">No data found.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--- Temporary Table End--->
                                <!-- nEW fORM-->
            <div class="row">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red">Immediate Trip</h4>
                    </div>
                </div>
                    <?php 
                        $sql1 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip'";
                        $result1 = mysqli_query($conn, $sql1); 
                        $index1 = 1;
                        if ($a1 = mysqli_num_rows($result1)) { 
                            $row1 = mysqli_fetch_array($result1);
                    ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><?php echo $a1; ?></h4>
                                        <h6 class=" m-b-0 h5">One Ride Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                            <div id="support-chart2"></div>
                            <div class="card-footer bg-c-red">
                                <!-- <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="m-b-0 h5"></p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down  f-16"></i>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                        <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; } ?>
                    <?php 
                        $sql2 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                        $result2 = mysqli_query($conn, $sql2); 
                        if ($a2 = mysqli_num_rows($result2)) { 
                    ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?php echo $a2; ?></h4>
                                        <h6 class=" m-b-0 h5">Round Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                        <div id="support-chart1"></div>
                            <div class="card-footer bg-c-green">
                                <!-- <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class=" m-b-0 h5">Round Trip</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up  f-16"></i>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php } else { echo '<tr><tdcolspan="4">No data found.</td></tr>'; } ?>
                <?php 
                    $sql3 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip'";
                    $result3 = mysqli_query($conn, $sql3); 
                    if ($a3 = mysqli_num_rows($result3)) { 
                        $row3 = mysqli_fetch_array($result3);
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-blue"><?php echo $a3; ?></h4>
                                    <h4 class=" m-b-0">Hospital Assistance</h4>
                                </div>
                                <div class="col-4 text-right">
                                    <i style="font-size:24px" class="fa">&#xf201;</i>
                                </div>
                            </div>
                        </div>
                        <div id="support-chart"></div>
                        <div class="card-footer bg-c-blue">
                            <!-- <div class="row align-items-center">
                                <div class="col-9">
                                    <p class=" m-b-0 h5 text-black">Hospital Assistance</p>
                                </div>
                                <div class="col-3 text-right">
                                    <i class="feather icon-trending-up  f-16"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; } ?>
                        <!--- Schedule Trip --->
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red">Schedule Trip</h4>
                    </div>
                </div>
                    <?php 
                        $sql4 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='schedule_trip'";
                        $result4 = mysqli_query($conn, $sql4); 
                        $index4 = 1;
                        if ($a4 = mysqli_num_rows($result4)) { 
                           
                    ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><?php echo $a4; ?></h4>
                                        <h6 class=" m-b-0 h5">One Ride Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                            <div id="support-chart2"></div>
                            <div class="card-footer bg-c-red">
                                <!-- <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="m-b-0 h5"></p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down  f-16"></i>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                        <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; } ?>
                    <?php 
                        $sql5 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip'";
                        $result5 = mysqli_query($conn, $sql5); 
                        if ($a5 = mysqli_num_rows($result5)) { 
                    ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?php echo $a5; ?></h4>
                                        <h6 class=" m-b-0 h5">Round Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                            <div id="support-chart1"></div>
                            <div class="card-footer bg-c-green">
                                <!-- <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class=" m-b-0 h5">Round Trip</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up  f-16"></i>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php } else { echo '<tr><tdcolspan="4">No data found.</td></tr>'; } ?>
                <?php 
                    $sql6 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip'";
                    $result6 = mysqli_query($conn, $sql6); 
                    if ($a3 = mysqli_num_rows($result6)) { 
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-blue"><?php echo $a3; ?></h4>
                                    <h4 class=" m-b-0">Hospital Assistance</h4>
                                </div>
                                <div class="col-4 text-right">
                                    <i style="font-size:24px" class="fa">&#xf201;</i>
                                </div>
                            </div>
                        </div>
                        <div id="support-chart"></div>
                        <div class="card-footer bg-c-blue">
                            <!-- <div class="row align-items-center">
                                <div class="col-9">
                                    <p class=" m-b-0 h5 text-black">Hospital Assistance</p>
                                </div>
                                <div class="col-3 text-right">
                                    <i class="feather icon-trending-up  f-16"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; } ?>
            </div>

           <!-- horizontal two cloumn -->
            <?php
               $profile = "SELECT * FROM `customer` WHERE `id`='1'";
               $res = mysqli_query($conn, $profile); 
               if ($dis = mysqli_num_rows( $res)) { 
                   $view = mysqli_fetch_array( $res);
            ?> 
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form class="form-sample" method="POST">
                      <p class="card-description h5 m-3">Personal info</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="e-name" value="<?php echo $view['name']; ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">E-Mail</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="e-email" value="<?php echo $view['email']; ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ride Type</label>
                            <div class="col-sm-9">
                              <select class="form-control"  name="e-ride">
                                <option active selected><?php echo $view['ride_type']; ?></option>
                                <option>One Trip</option>
                                <option>Round Trip</option>
                                <option>Hospital</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="e-phone" value="<?php echo $view['phone']; ?>" max-length="10"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ride Time</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="e-service">
                                <option active class="text-black"><?php echo $view['time_ride']; ?></option>
                                <option>immediate_trip</option>
                                <option>schedule_trip</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description h5 m-3">Address</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Current Location</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="e-pick" value="<?php echo $view['pick_up']; ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Destination</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="e-drop" value="<?php echo $view['drop_in']; ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control"  name="e-date" value="<?php echo $view['date']; ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Time</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control"  name="e-time" value="<?php echo $view['time']; ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description h5 m-3">Vechile</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="e-vname" value="<?php echo $view['v_name']; ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="e-vtype" value="<?php echo $view['v_type']; ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description h5 m-3">Driver Assistance</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="e-driver" value="<?php echo $view['driver_name']; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="e-status">
                                        <option active selected><?php echo $view['status']; ?>
                                        </option>
                                        <option>Driver Assign</option>
                                        <option>Driver Started</option>
                                        <option>Completed</option>
                                        <option>Cancel</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description h5 m-3">Payment</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="paytype">
                                        <option active selected><?php echo $view['payment_type']; ?></option>
                                        <option>G-pay</option>
                                        <option>Patym</option>
                                        <option>phonepe</option>
                                        <option>Cancel</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="payment" value="<?php echo $view['payment']; ?>"/>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-10 form-group">
                                <div class="form-btn text-center">
                                    <button type="submit" class=" btn btn-info px-3 py-2 m-3" name="update" >update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        <?php   } else {  echo '<tr><td colspan="4">No data found.</td></tr>';  }  ?>
</div>  

<?php 
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
    $driver = $_POST['e-driver'];
    $status = $_POST['e-status'];
    $paytype=$_POST['paytype'];
    $payment=$_POST['payment'];
    echo "successfull";

}else{
    echo "failed";
}
?>