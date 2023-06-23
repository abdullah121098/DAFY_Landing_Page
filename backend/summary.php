<?php 
include 'database/connection.php';
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
                            <button onclick="exportToExcel()">Export to Excel</button>
                        <form method="POST">
                            <input type="date" name="date2" id="">
                            <input type="date" name="date3" id="">
                            <select name="choose" id="">
                                <option  selected>select</option>
                                <option value="New Ride">New Ride</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancel">Cancel</option>

                            </select>
                            <input type="text" name="name" id="">
                            <input type="submit" name="show" value="search">
                        </form>
                        <?php
                                        if(isset($_POST['show'])){
                                                $get=$_POST['choose'];
                                                $a=$_POST['date2'];
                                                $b=$_POST['date3'];
                                                $c=$_POST['name']
                        ?>                       
                                         <h5 class="card-title fw-semibold mb-4 text-center"> <?php echo $get;  ?></h5>
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
                                                switch($get){
                                                    case "Completed":
                      
                                           
                                            // Fetch data from the 'review' table
                                            $sql = mysqli_query ($conn,"SELECT * FROM complete_ride  WHERE date BETWEEN '$a' AND '$b' ");
                                            // $sql = mysqli_query ($conn,"SELECT * FROM complete_ride  WHERE );
                                            if (mysqli_num_rows($sql) > 0) {
                                                while ($row= mysqli_fetch_array($sql)) {
                                                    // Display each row of data
                                            ?>
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
                                                    <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?php echo $row['driver_name']; ?></p>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?php echo $row['payment_type']; ?></p>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?php echo $row['payment']; ?></p>
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
                                                    <?php
                                                }
                                                } else {
                                                echo '<tr><td colspan="12">No data found.</td></tr>';
                                                }
                                                break;   
                                                case "New Ride": 
                                                      // Fetch data from the 'review' table
                                                    $sql1 =mysqli_query ($conn, "SELECT * FROM customer where date BETWEEN '$a' AND '$b' ORDER BY date AND time DESC");
                                                  if (mysqli_num_rows($sql1) >0) {
                                                        while ($row1= mysqli_fetch_array($sql1)) {
                                                            // Display each row of data?>
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-0"><?php echo $row1['id']; ?></h6></td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo  $row1['name'];  ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['phone'];?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['email']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['pick_up']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['drop_in']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['ride_type']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['time_ride']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['date']; ?></p>
                                                            </td>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['time']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['v_name']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['v_type']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['driver_name']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['payment_type']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row1['payment']; ?></p>
                                                            </td>
                                                            
                                                            <!-- table row data -->
                                                            <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <label class="badge rounded-3 fw-semibold py-3 px-3"style="background-color:green;">
                                                                <?php echo $row1['status']; ?>
                                                                </label>
                                                            </div>
                                                            </td>
                                                        </tr> 
                                                            <?php
                                                        }
                                                        } else {
                                                        echo '<tr><td colspan="12">No data found.</td></tr>';
                                                    }
                                                break;
                                                break;   
                                                case "Cancel": 
                                                      // Fetch data from the 'review' table
                                                    $sql2 =mysqli_query ($conn, "SELECT * FROM `cancel` WHERE date BETWEEN '$a' AND '$b' ORDER BY date AND time DESC");
                                                  if (mysqli_num_rows($sql2) >0) {
                                                        while ($row2= mysqli_fetch_array($sql2)) {
                                                            // Display each row of data?>
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-0"><?php echo $row2['id']; ?></h6></td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo  $row2['name'];  ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['phone'];?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['email']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['pick_up']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['drop_in']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['ride_type']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['time_ride']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['date']; ?></p>
                                                            </td>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['time']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['v_name']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['v_type']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['driver_name']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['payment_type']; ?></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal"><?php echo $row2['payment']; ?></p>
                                                            </td>
                                                            
                                                            <!-- table row data -->
                                                            <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <label class="badge rounded-3 fw-semibold py-3 px-3"style="background-color:red;">
                                                                <?php echo $row2['status']; ?>
                                                                </label>
                                                            </div>
                                                            </td>
                                                        </tr> 
                                                            <?php
                                                        }
                                                        } else {
                                                        echo '<tr><td colspan="12">No data found.</td></tr>';
                                                    }
                                                break;
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