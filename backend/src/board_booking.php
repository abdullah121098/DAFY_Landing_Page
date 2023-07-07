<?php include '../database/connection.php';  require_once "header.php";?> 
<div class="container-fluid">
        <!--- New Form History --->              
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
                    <div class="col-sm-4 ">
                        <div class="card  bg-info">
                            <div class="card-body">
                                <div class="row align-items-center ">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><?php echo $a1; ?></h4>
                                        <h6 class=" m-b-0 h5">One Ride Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:34px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; } 

                        $sql2 = "SELECT * FROM `complete_ride` WHERE `ride_type`='round_trip' AND `time_ride`='immediate_trip'";
                        $result2 = mysqli_query($conn, $sql2); 
                        if ($a2 = mysqli_num_rows($result2)) { 
                    ?>
                    <div class="col-sm-4">
                        <div class="card  bg-primary">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?php echo $a2; ?></h4>
                                        <h6 class=" m-b-0 h5">Round Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                         <i class="ti ti-a-b-2" style="font-size:34px"></i>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                <?php } else { echo '<tr><tdcolspan="4">No data found.</td></tr>'; } 

                    $sql3 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='immediate_trip'";
                    $result3 = mysqli_query($conn, $sql3); 
                    if ($a3 = mysqli_num_rows($result3)) { 
                        $row3 = mysqli_fetch_array($result3);
                ?>
                <div class="col-sm-4">
                    <div class="card  bg-secondary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-blue"><?php echo $a3; ?></h4>
                                    <h4 class=" m-b-0">Hospital Assistance</h4>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ti ti-ambulance" style="font-size:34px"></i>
                                </div>
                            </div>
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
                        <div class="card  bg-warning">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><?php echo $a4; ?></h4>
                                        <h6 class=" m-b-0 h5">One Ride Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:34px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; }

                        $sql5 = "SELECT * FROM `customer` WHERE `ride_type`='round_trip' AND `time_ride`='schedule_trip'";
                        $result5 = mysqli_query($conn, $sql5); 
                        if ($a5 = mysqli_num_rows($result5)) { 
                    ?>
                    <div class="col-sm-4">
                        <div class="card  bg-danger">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?php echo $a5; ?></h4>
                                        <h6 class=" m-b-0 h5">Round Trip</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="ti ti-a-b-2" style="font-size:34px"></i>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                <?php } else { echo '<tr><tdcolspan="4">No data found.</td></tr>'; } 

                    $sql6 = "SELECT * FROM `customer` WHERE `ride_type`='hospital_trip' AND `time_ride`='schedule_trip'";
                    $result6 = mysqli_query($conn, $sql6); 
                    if ($a3 = mysqli_num_rows($result6)) { 
                ?>
                <div class="col-sm-4">
                    <div class="card  bg-success">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-blue"><?php echo $a3; ?></h4>
                                    <h4 class=" m-b-0">Hospital Assistance</h4>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ti ti-ambulance" style="font-size:34px"></i>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php } else { echo '<tr><td colspan="4">No data found.</td></tr>'; } ?>
                        
              

            </div>

        <!-- New form History End -->
<?php 
    $sq = mysqli_query($conn,"SELECT * FROM customer");
    // $sq = mysqli_query($conn,"SELECT * FROM count");
    $res= mysqli_num_rows($sq);

    $rowsPerPage = 5; // Number of rows to display per page
    $totalRows = $res; // Total number of rows in the table

    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
    
    $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
    $end = $start + $rowsPerPage; // Calculate the ending row index

    // $sql = "SELECT * FROM  customer ORDER BY id DESC, Date DESC ";
    $sql = "SELECT * FROM  customer ORDER BY id DESC, Date DESC Limit $start,$rowsPerPage";
    $result = mysqli_query($conn,$sql); 
    
    $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
?>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">New Ride Status</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead class="fw-bold text-black">
                          <tr>
                            <th>#</th>
                            <th>User name</th>
                            <th>Driver Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <?php if (mysqli_num_rows($result)> 0) { while ($row=mysqli_fetch_array($result)) { // Display each row of data ?>
                        <tbody>
                          <tr class="fw-semibold text-black">
                            <td><?php echo $index++; ?></td>
                            <td><?php echo  $row['name']; ?></td>
                            <td> <?php echo $row['driver_name']; ?></td>
                            <td> <?php //if($row['status'] == 'complete'){ echo '<label class=" bg-success"> Confirm</label>'; } ?>
                            
                            <?php 
                                if( $row['status']=='Completed'){
                                    echo "<p><a href='status.php?id=".$row['id']."&status=Completed' class='btn btn-success text-black'>".$row['status']."</a></p>"; 
                                }elseif( $row['status']=='Confirm'){ 
                                    echo "<p><a href='status.php?id=".$row['id']."&status=Confirm' class='btn btn-warning text-black'>".$row['status']."</a></p>"; 
                                }elseif( $row['status']=='Driver Assigned'){ 
                                    echo "<p><a href='status.php?id=".$row['id']."&status=Driver Assigned' class='btn btn-primary text-black'>".$row['status']."</a></p>"; 
                                }elseif( $row['status']=='Drive Started'){ 
                                    echo "<p><a href='status.php?id=".$row['id']."&status=Drive Started' class='btn btn-secondary text-black'>".$row['status']."</a></p>"; 
                                }elseif( $row['status']=='Cancel'){ 
                                    echo "<p><a href='status.php?id=".$row['id']."&status=Cancel' class='btn btn-danger text-black'>".$row['status']."</a></p>"; 
                                }else{ 
                                    echo "<p><a href='status.php?id=".$row['id']."&status=?' class='btn btn-info text-black'>".$row['status']."</a></p>"; 
                                }
                            ?>

                        
                            </td>
                            <td>  
                              <!-- <a type="button" class="btn btn-center btn-primary text-black" name="update" type="submit" href="new-ride-update.php?id=<?php //echo $row['id']; ?>"> -->
                            <a type="button" class="btn btn-center btn-primary text-black" name="update" type="submit" href="new-ride.php">
                                  <i class="fa-sharp fa-solid fa-eye eye" ></i></a></td>
                          </tr>
                         
                        </tbody>
                        <?php  } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>
                      </table>
                                <nav aria-label="Page navigation example" >
                                    <ul class="pagination justify-content-end left" style="position: relative;border-box: 500px;">
                                        <?php if ($page > 1): ?>
                                        <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span></a></li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= ceil($totalRows / $rowsPerPage); $i++): ?>
                                          <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>"><a href="?page=<?php echo $i; ?>" class="page-link rounded-pill py-2 px-3"><?php echo $i; ?></a></li>
                                      <?php endfor; ?>
                                        <?php if ($end < $totalRows): ?>
                                        <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                    </div>
                  </div>
                </div>
            </div>
      </div> 
         
     
    </div>
    <style> .page-link{
              background:darkgrey;
              font-style: bold;
              color: black;
            }
          </style>