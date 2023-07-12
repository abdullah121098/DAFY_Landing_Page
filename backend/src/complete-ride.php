<?php include '../database/connection.php';
require_once "header.php";
?>
      <!-- ============== ==================== Main -Body Start- ======================================================================= -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Complete Booking List</h5>
                            <!-- <button onclick="exportToExcel3()">Export to Excel</button> -->
                            <div class="table-responsive">
                            <form action="" method="post">    
                                <table class="table text-nowrap mb-0 align-middle" id="data-table">
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
                                            <th class="border-bottom-0 data5">
                                                <h6 class="fw-semibold mb-0">Driver Name</h6>
                                            </th>
                                            <th class="border-bottom-0">
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
                                    <tbody class="h5"> 
                                        <?php  
                                                $a=date('Y-m-d H:i');
                                                // Fetch data from the 'review' table
                                                $sq = mysqli_query($conn,"SELECT * FROM complete_ride");
                                               
                                                $res= mysqli_num_rows($sq);
                                                $rowsPerPage = 10; // Number of rows to display per page
                                                $totalRows = $res; // Total number of rows in the table
                                               
                                                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                                                
                                                $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
                                                $end = $start + $rowsPerPage; // Calculate the ending row index

                                                $sql = "SELECT * FROM  complete_ride ORDER BY id DESC, Date DESC Limit $start,$rowsPerPage";
                                                $result = mysqli_query($conn,$sql);

                                                $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
                                        
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                // Display each row of data?>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0"><?php echo $index++; ?></h6></td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['name'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['phone'];?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['email']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['pick_up']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['drop_in']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['ride_type']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['time_ride']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['date']; ?></h6>
                                                </td>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['time']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['v_name']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['v_type']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['driver_name']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['payment_type']; ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal"><?php echo $row['payment']; ?></h6>
                                                </td>
                                                
                                                <!-- table row data -->
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <label class="badge rounded-3 fw-semibold py-3 px-3"style="background-color:green;">
                                                        <?php echo $row['status']; ?>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr> 
                                                <?php } } else { echo '<tr><td colspan="12">No data found.</td></tr>';  } ?>
                                    </tbody>
                                </table>
                            </form>
                                <nav aria-label="Page navigation example" >
                                    <ul class="pagination justify-content-start left" style="position: relative;border-box: 500px;">
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
    <style> .page-link{ background: black; font-style: bold; color: white; } </style>
        <!-- ================================================== Footer  =======================================-->
            <?php  require_once "footer.php"; ?>