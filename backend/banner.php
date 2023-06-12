<?php require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Starb- ======================================================================= -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Banner </h5>
                        <div class="booking-form">
                        <form method="POST" action="database/banner_add.php"  enctype="multipart/form-data"  onsubmit="showConfirmation()">
                                    <div class="row">
                                        <div class="col-10">
                                        <div class="form-group">
                                                    <label class="form-label">Name</label><br>
                                                    <input class="form-control" type="text" name="b-name" required>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                        <div class="form-group">
                                                    <label class="form-label">content</label><br>
                                                    <input class="form-control" type="text" name="b-content" required>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label class="form-label"> Date </label><br>
                                                <input class="form-control" type="datetime-local"  name="b-date"  min="<?=date('Y-m-d\TH:i');?>" required>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label class="form-label">Photo</label><br>
                                                <input type="file" name="b-img" id="Upload" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="form-btn">
                                                <button type="submit" class="submib-btn rounded-pill texb-center bg-warning w-100" name="b-banner">Add New </button>
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
                                                $sql = "SELECT * FROM `banner` ORDER BY b_date DESC LIMIT 1";
                                                $result = $conn->query($sql); 
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            // Display each row of data
                                            ?>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0"><?php echo $row['b_id']; ?></h6></td>
                                                    <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['b_date'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['b_name'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?php echo  $row['b_content'];  ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <img class="fw-semibold mb-1" src=" assets/images/team/<?php echo  $row['b_img'];  ?>"
                                                    width="80" height="80">
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
        <!-- ================================================== Footer  =======================================-->
        <script>
            function showConfirmation() {
                alert("Confirm booking");
                return true; // Allow the form submission to proceed
            }
        </script>





<?php
require_once 'footer.php';
?>
