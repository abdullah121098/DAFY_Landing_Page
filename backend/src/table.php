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
                                <!-- nEW fORM-->
                                <?php 
                                $sql1 = "SELECT * FROM `customer` WHERE `ride_type`='one_trip' AND `time_ride`='immediate_trip'";
                                $result1 = mysqli_query($conn, $sql1); 
                                $index1 = 1;
                                if ($a1 = mysqli_num_rows($result1)) { 
                                    $row1 = mysqli_fetch_array($result1);
                                ?>
              <div class="row">
                <div class="col-sm-4">
							    <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-red"><?php echo $a1; ?></h4>
                                <h6 class=" m-b-0 h5"><?php echo $row1['time_ride']; ?></h6>
                            </div>
                            <div class="col-4 text-right">
                                <i style="font-size:24px" class="fa">&#xf201;</i>
                            </div>
                        </div>
                    </div>
                    <div id="support-chart2"></div>
                        <div class="card-footer bg-c-red">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <p class="m-b-0 h5">One Trip</p>
                                </div>
                                <div class="col-3 text-right">
                                    <i class="feather icon-trending-down  f-16"></i>
                                </div>
                            </div>
                        </div>
                    </div>
              </div><?php   } else {  echo '<tr><td colspan="4">No data found.</td></tr>'; }  ?>
                  
                             <?php 
                                $sql2 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                                $result2 = mysqli_query($conn, $sql2); 
                                if ($a2 = mysqli_num_rows($result2)) { 
                                    $row2 = mysqli_fetch_array($result2);
                              ?>
                        <div class="col-sm-4">
						              <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?php echo $a2; ?></h4>
                                        <h6 class=" m-b-0 h5"><?php echo $row2['time_ride']; ?></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                              <div id="support-chart1"></div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class=" m-b-0 h5">Round Trip</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-up  f-16"></i>
                                        </div>
                                    </div>
                                </div>
                              </div>
					                </div>
                          <?php   } else {  echo '<tr><td colspan="4">No data found.</td></tr>'; }  ?>
                        </div>

                    <!-- <div class="col-sm-4">
						          <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">$480</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart"></div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class=" m-b-0">Last Week Expenses</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up  f-16"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
					        </div>
                    <div class="col-sm-4">
							        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">$145</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf155;</i>
                                    </div>
                                </div>
                            </div>
                                <div id="support-chart3"></div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class=" m-b-0">Today Credits</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down  f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
					          </div>
                  <div class="col-sm-4">
                    <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">$290</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf155;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart4"></div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="m-b-0">Last Day Credits</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up  f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
					        </div>
                    <div class="col-sm-4">
						          <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">$480</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf155;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart5"></div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class=" m-b-0">Last Week Credits</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up  f-16"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
					            </div>
              </div> -->
                          

</div>  