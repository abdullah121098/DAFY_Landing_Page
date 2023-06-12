<?php require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Team </h5>
                        <form method="POST" action="database/team_add.php"  enctype="multipart/form-data"  onsubmit="showConfirmation()">
                                    <div class="row">
                                        <div class="col-10">
                                        <div class="form-group">
                                                    <label class="form-label">Name</label><br>
                                                    <input class="form-control" type="text" name="t-name">
                                            </div>
                                        </div>
                                        <div class="col-10">
                                        <div class="form-group">
                                                    <label class="form-label">Designation</label><br>
                                                    <input class="form-control" type="text" name="t-position">
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label class="form-label"> Date </label><br>
                                                <input class="form-control" type="datetime-local"  name="t-date"  min="<?=date('Y-m-d\TH:i');?>" >
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label class="form-label">Photo</label><br>
                                                <input type="file" name="t-img" id="Upload">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="form-btn">
                                                <button type="submit" class="submit-btn rounded-pill text-center bg-warning w-100" name="t_addData">Add New </button>
                                                </div>
                                            </div>
                                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Team </h5>
                        <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Id</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Date</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Name</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Designation</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Photo</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include 'database/connection.php';
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }
                                                // Fetch data from the 'review' table
                                                $sql = "SELECT * FROM `team` ORDER BY t_date DESC";
                                                $result = $conn->query($sql); 
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            // Display each row of data
                                            ?>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0"><?php echo $row['id']; ?></h6></td>
                                                    <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['t_date'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['t_name'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['t_position'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <img class="fw-semibold mb-1" src=" assets/images/team/<?php echo  $row['t_img'];  ?>"
                                                    width="60" height="80">
                                                </td> 
                                                                            
                                            </tr> 
                                                <?php
                                            }
                                            } else {
                                            echo '<tr><td colspan="12">No data found.</td></tr>';
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
      <script>
                            function showConfirmation() {
                                alert("Confirm booking");
                                return true; // Allow the form submission to proceed
                            }
                        </script>
<?php
require_once 'footer.php';
?>