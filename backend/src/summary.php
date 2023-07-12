
<?php 
include '../database/connection.php';
require_once "header.php";
?>
      <!-- ============== ==================== Main -Body Start- ======================================================================= -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4 text-center">Search</h5>
                            <form method="POST" class="d-flex align-items-center">
                                <input type="date" name="date2" id="date2">
                                <input type="date" name="date3" id="date3">
                                <select name="choose" id="choose">
                                    <option selected>select</option>
                                    <option value="New Ride">New Ride</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Cancel">Cancel</option>
                                </select>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-2" name="name" placeholder="Search">
                                        <div class="input-group-prepend">
                                            <button type="submit" name="show" class="rounded-pill px-3 py-2 btn btn-primary text-black">
                                                <i class="ti ti-search"></i>
                                            </button>
                                        </div>
                                        <button onclick="exportToExcel()" class="rounded-pill px-3 py-2 btn btn-primary text-black">
                                            <i class="fa-solid fa-file-export"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- <input type="text" name="name" id="">
                                <button type="submit" name="show" class="rounded-pill px-3 py-2 btn btn-primary text-black">
                                    <i class="ti ti-search"></i></button>  <button onclick="exportToExcel()" class="rounded-pill px-3 py-2 btn btn-primary text-black">
                                <i class="fa-solid fa-file-export"></i></button> -->
                            </form>
                                <?php
                                    if (isset($_POST['show'])) {
                                        $get = $_POST['choose'];
                                        $a = $_POST['date2'];
                                        $b = $_POST['date3'];
                                        $c = $_POST['name'];
                                ?>                       
                                         <h5 class="card-title fw-semibold mb-4 text-center"> <?php echo $get; ?></h5>
                                        <div class="table-responsive">
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
                                            <tbody>
                                                <?php  
                                                                    
                                                    // Query and data retrieval
                                                switch ($get) {
                                                    case "Completed":
                                                        $sql = mysqli_query($conn, "SELECT * FROM complete_ride WHERE date = '$c' OR name='$c' ORDER BY date AND time DESC");
                                                        break;
                                                    case "New Ride":
                                                        $sql = mysqli_query($conn, "SELECT * FROM customer WHERE date BETWEEN '$a' AND '$b'  ORDER BY date AND time DESC");
                                                        break;
                                                    case "Cancel":
                                                        $sql = mysqli_query($conn, "SELECT * FROM `cancel` WHERE date BETWEEN '$a' AND '$b' ORDER BY date AND time DESC");
                                                        break;
                                                }
                                                if (mysqli_num_rows($sql) > 0) {
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        echo '
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-0">' . $row['id'] . '</h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1">' . $row['name'] . '</h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['phone'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['email'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['pick_up'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['drop_in'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['ride_type'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['time_ride'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['date'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['time'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['v_name'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['v_type'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['driver_name'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['payment_type'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">' . $row['payment'] . '</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <label class="badge rounded-3 fw-semibold py-3 px-3" style="background-color: ' . ($row['status'] === 'Completed' ? 'green' : 'red') . ';">' . $row['status'] . '</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        ';
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="16">No data found.</td></tr>';
                                                }
                                    }
                                        ?>
                                            </tbody>
                                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- ================================================== Footer  =======================================-->
            <?php
            require_once "footer.php";
            ?>
