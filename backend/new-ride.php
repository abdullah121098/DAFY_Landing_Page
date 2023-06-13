<?php
include 'database/connection.php';
require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
                                
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
                              <h6 class="fw-semibold mb-0">Phone</h6>
                            </th>
                            <th class="border-bottom-0 data5">
                              <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Pick-up</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Drop-in</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Ride-Type</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Time-Ride</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Date</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Time</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Vechicle name</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Vechicle Type</h6>
                            </th>
                            <th class="border-bottom-0 data5">
                              <h6 class="fw-semibold mb-0">Driver Name</h6>
                            </th>
                            <th class="border-bottom-0  data5">
                              <h6 class="fw-semibold mb-0">payment Type</h6>
                            </th>
                            <th class="border-bottom-0 data5">
                              <h6 class="fw-semibold mb-0">payment</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Status</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php  
                                      if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                // Fetch data from the 'customer' table
                                    $sql = "SELECT * FROM customer ORDER BY id DESC";
                                  $result = $conn->query($sql); 

                                  if (mysqli_num_rows($result)> 0) {
                                while ($row=mysqli_fetch_array($result)) {
                                    // Display each row of data?>
                                   
                                  <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">
                                           <?php echo $row['id']; ?></h6></td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1"><?php echo  $row['name'];  ?></h6>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['phone'];?></p>
                                    </td>
                                    <td class="border-bottom-0 data5">
                                    <p class="mb-0 fw-normal"><?php echo $row['email']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['pick_up']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['drop_in']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['ride_type']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['time_ride']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['date']; ?></p>
                                    </td>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['time']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['v_name']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo $row['v_type']; ?></p>
                                    </td>
                                    <td class="border-bottom-0 data5">
                                   <p class="mb-0 fw-normal"><?php echo $row['driver_name']; ?></p>
                                    </td>
                                    <td class="border-bottom-0 data5">
                                    <p class="mb-0 fw-normal"><?php echo $row['payment_type']; ?></p>
                                    </td>
                                    <td class="border-bottom-0 data5">
                                    <p class="mb-0 fw-normal"><?php echo $row['payment']; ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <label class="badge bg-warning rounded-3 fw-semibold py-3 px-3" id="res">
                                        <?php echo $row['status']; ?>
                                        </label>
                                    </div>
                                    </td>
                                    <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                    <a type="button" class="" name="update" type="submit" href="update.php?id=<?php echo $row['id']; ?>">
                                  </a>
                                        </label>
                                    </div>
                                    </td>
                                    <!-- <td class="border-bottom-0" >
                                    <select name="status" id="sel"class="badge bg-primary fw-semibold">
                                        <option value="" selected disabled>Select</option>
                                        <option value="1">Confirm</option>
                                        <option value="2">Driver Assigned</option>
                                        <option value="3">Drive Started</option>
                                        <option value="4">Completed</option>
                                        <option value="5">Cancel</option>
                                    </select>
                                    </td>  -->
                                   
                                  </tr> 
                                    <?php
                                  }
                                } else {
                                  echo '<tr><td colspan="12">No data found.</td></tr>';
                              }
                              $conn->close();
                                ?>             
                        </tbody>
                      </table>
                          
                    </div>
                </div>
              </div>
            </div>
          </div>
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
          <script>
                let selection =document.querySelector('#sel');
                let result=document.querySelector('#res');
                selection.addEventListener('change',()=>{
                    result.innerText=selection.options[selection.selectedIndex].text;
                    console.log(selection.selectedIndex);
                });
            </script>
           <style>
            .data5{
              display: none;
            }
           </style>

        <!-- ================================================== Footer  =======================================-->
<?php include_once 'footer.php'; ?>