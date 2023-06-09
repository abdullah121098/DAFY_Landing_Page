<?php require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-100 d-flex align-items-center">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Booking </h5>
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
                          <h6 class="fw-semibold mb-0">Date and Time</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Vechicle name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Vechicle Type</h6>
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
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">09876543211</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Sunil@gmail.com</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">current-loc</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">drop-loc</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">one-side Trip</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">01-06-23 & 10:40am</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">SUV</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Automatic</p>
                        </td>
                           <!-- table row data -->
                           <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <label class="badge bg-warning rounded-3 fw-semibold py-3 px-3" id="res"></label>
                          </div>
                        </td>
                        <td class="border-bottom-0 data5" >
                          <select name="" id=""class="badge bg-primary fw-semibold">
                            <option value="" selected disabled>Select</option>
                            <option value="a">Amal</option>
                            <option value="b">jijo</option>
                            <option value="c">Drive Started</option>
                            <option value="d">siva</option>
                            <option value="e">Cancel</option>
                          </select>
                        </td>
                        <td class="border-bottom-0" >
                          <select name="" id="sel"class="badge bg-primary fw-semibold">
                            <option value="" selected disabled>Select</option>
                            <option value="1">Confirm</option>
                            <option value="2">Driver Assigned</option>
                            <option value="3">Drive Started</option>
                            <option value="4">Completed</option>
                            <option value="5">Cancel</option>
                          </select>
                        </td>
                       
                      </tr> 
                                        
                    </tbody>
                  </table>
                          <?php  $conn = new mysqli('localhost', 'root', '', 'file');
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                // Fetch data from the 'review' table
                                  $sql = "SELECT * FROM review ORDER BY id DESC";
                                  $result = $conn->query($sql); ?>

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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Display each row of data
                                echo '<tr>';
                                echo '<td class="border-bottom-0"><h6 class="fw-semibold mb-0">' . $row['id'] . '</h6></td>';
                                echo '<td class="border-bottom-0">';
                                echo '<h6 class="fw-semibold mb-1">' . $row['name'] . '</h6>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['phone'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['email'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['pick_up'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['drop_in'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['ride_type'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['time_ride'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['date'] . '</p>';
                                echo '</td>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['time'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['v_name'] . '</p>';
                                echo '</td>';
                                echo '<td class="border-bottom-0">';
                                echo '<p class="mb-0 fw-normal">' . $row['v_type'] . '</p>';
                                echo '</td>';
                              }
                            } else {
                                echo '<tr><td colspan="12">No data found.</td></tr>';
                          }?><?php
                          $conn->close();
                            ?>

                        <!-- table row data -->
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <label class="badge bg-warning rounded-3 fw-semibold py-3 px-3" id="res"></label>
                          </div>
                        </td>
                        <td class="border-bottom-0 data5" >
                          <select name="" id=""class="badge bg-primary fw-semibold">
                            <option value="" selected disabled>Select</option>
                            <option value="a">Amal</option>
                            <option value="b">jijo</option>
                            <option value="c">Drive Started</option>
                            <option value="d">siva</option>
                            <option value="e">Cancel</option>
                          </select>
                        </td>
                        <td class="border-bottom-0" >
                          <select name="" id="sel"class="badge bg-primary fw-semibold">
                            <option value="" selected disabled>Select</option>
                            <option value="1">Confirm</option>
                            <option value="2">Driver Assigned</option>
                            <option value="3">Drive Started</option>
                            <option value="4">Completed</option>
                            <option value="5">Cancel</option>
                          </select>
                        </td> 
                      </tr> 
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
            <script>
                  $(document).ready(function() {
                    // Initially hide all data sections
                    $(".data5").hide();

                    // Show the appropriate data section based on the selected value in the "Type" dropdown
                    $("#sel").change(function() {
                      var selectedType = $(this).val();
                      $(".data5").hide();
                      
                      if (selectedType === "2") {
                        $(".data5").show();
                      }
                    });
                  });
            </script>


        <!-- ================================================== Footer  =======================================-->
