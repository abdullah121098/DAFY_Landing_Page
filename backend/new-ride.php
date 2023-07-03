<?php
include 'database/connection.php';
// $servername = "localhost"; // Replace with your database server name
// $username = "root"; // Replace with your database username
// $password = ""; // Replace with your database password
// $dbname = "sample_test"; // Replace with your database name

// $conn = new mysqli($servername, $username, $password, $dbname);

include_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
                                
          <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
              <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                  <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 text-center">New Ride List </h5>
                    <!-- <button onclick="exportToExcel()">Export to Excel</button> -->
                          
                    <div class="table-responsive">
                        <form action="" method="post">
                            <table class="table text-nowrap mb-0 align-middle" id="data-table">
                              <thead class="text-dark fs-4">
                            
                                  </tr>
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
                                  <!-- <th class="border-bottom-0 ">
                                    <h6 class="fw-semibold mb-0">Email</h6>
                                  </th> -->
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
                                  <!-- <th class="border-bottom-0 ">
                                    <h6 class="fw-semibold mb-0">Driver Name</h6>
                                  </th>
                                  <th class="border-bottom-0  ">
                                    <h6 class="fw-semibold mb-0">payment Type</h6>
                                  </th>
                                  <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">payment</h6>
                                  </th> -->
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
                                        
                                        if (mysqli_num_rows($result)> 0) {
                                      while ($row=mysqli_fetch_array($result)) {
                                          // Display each row of data?>
                                        
                                        <tr>
                                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $index++; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo  $row['name'];  ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['phone'];?></h6></td>
                                          <!-- <td class="border-bottom-0 "><h6 class="mb-0 fw-normal"><?php //echo $row['email']; ?></h6></td> -->
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['pick_up']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['drop_in']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['ride_type']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['time_ride']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['date']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['time']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['v_name']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php echo $row['v_type']; ?></h6> </td>
                                          <!-- <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php // echo $row['driver_name']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php// echo $row['payment_type']; ?></h6></td>
                                          <td class="border-bottom-0"><h6 class="mb-0 fw-normal"><?php //echo $row['payment']; ?></h6></td> -->
                                          <td class="border-bottom-0"><div class="d-flex align-items-center" style="background-color:skyblue;">
                                              <label class="rounded-3 fw-semibold py-3 px-3" id="res">
                                              <?php echo $row['status']; ?>
                                              </label>
                                          </div>
                                          </td>
                                          <td class="border-bottom-0">
                                          <div class="d-flex align-items-center">
                                          <a type="button" class="" name="update" type="submit" href="new-ride-update.php?id=<?php echo $row['id']; ?>">
                                          view
                                          </a>
                                              </label>
                                          </div>
                                          </td>
                                        </tr> 
                                          <?php
                                        //    echo '<tr>
                                        //    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">' . $row['id'] . '</h6></td>
                                        //    <td class="border-bottom-0"><h6 class="fw-semibold mb-1">' . $row['count'] . '</h6></td>
                                        //  </tr>';
                                        }
                                      } else {
                                        echo '<tr><td colspan="12">No data found.</td></tr>';
                                    }
                                    ?>                                                                            
                                </tbody>
                            </table>
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-contena-end left" style="position: relative;border-box: 500px;">
                                      <?php if ($page > 1): ?>
                                          <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3"><i class="fas fa-angle-double-left"></i></a></li>
                                      <?php endif; ?>
                                      <?php for ($i = 1; $i <= ceil($totalRows / $rowsPerPage); $i++): ?>
                                          <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>"><a href="?page=<?php echo $i; ?>" class="page-link rounded-pill py-2 px-3"><?php echo $i; ?></a></li>
                                      <?php endfor; ?>
                                      <?php if ($page < ceil($totalRows / $rowsPerPage)): ?>
                                          <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3"><i class="fas fa-angle-double-right"></i></a></li>
                                      <?php endif; ?>
                                  </ul>
                              </nav>
                          </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <style>
          
            .page-link{
              background: black;
              font-style: bold;
              color: white;
            }
          </style>
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