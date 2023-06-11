<?php 
require_once "header.php";
?>
      <!-- ============== ==================== Main -Body Start- ======================================================================= -->

        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-100 d-flex align-items-center">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Complete Booking List</h5>
                <div class="table-responsive">
                              <?php  $conn = new mysqli('localhost', 'root', '', 'file');
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                // Fetch data from the 'review' table
                                $sql = "SELECT * FROM review_1 ORDER BY id DESC";
                                  $result = $conn->query($sql); 
                              ?>

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
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Pick-up</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Drop-in</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Ride-type</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">service-type</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Date</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Time</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Vehicle name</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Vehicle Type</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Status</h6>
                            </th>
                            <th class="border-bottom-0 data5">
                                <h6 class="fw-semibold mb-0">Driver Name</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">confirm</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Display each row of data?>
                              <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"><?php echo $row['id']; ?></h6></td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1"><?php echo  $row['name'];  ?></h6>
                                </td>
                                <td class="border-bottom-0">
                                <p class="mb-0 fw-normal"><?php echo $row['phone'];?></p>
                                </td>
                                <td class="border-bottom-0">
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
                                <!-- table row data -->
                                <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <label class="badge bg-warning rounded-3 fw-semibold py-3 px-3" id="res">
                                    <?php echo $row['status']; ?>
                                    </label>
                                </div>
                                </td>
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
      
<?php
require_once "footer.php";
?>