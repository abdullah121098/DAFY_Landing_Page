<?php require_once "header.php"; ?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Testimonial </h5>
                        <div class="booking-form">
                            <form method="POST" action="database/testimonial_add.php"  onsubmit="showConfirmation()">
                                        <div class="row">
                                            <div class="col-10">
                                            <div class="form-group">
                                                        <label class="form-label">Name</label><br>
                                                        <input class="form-control" type="text" name="r-name">
                                                </div>
                                            </div>
                                            <div class="col-10 "id="date3">
                                                <div class="form-group">
                                                    <label class="form-label"> Date </label><br>
                                                    <input class="form-control" type="datetime-local"  name="r-date"  min="<?=date('Y-m-d\TH:i');?>" >
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="form-group">
                                                    
                                                    <label class="form-label">Review</label><br>
                                                    <textarea class="form-label w-100" name="r-review"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="form-btn">
                                                    <button type="submit" class="submit-btn rounded-pill text-center bg-warning w-100" name="addData">Add New </button>
                                                    </div>
                                                </div>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!--  Row 2 -->
         <div class="row">
            <div class="col-lg-100 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Testimonial Detail</h5>
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
                                <h6 class="fw-semibold mb-0">Review</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         include 'database/connection.php';
  
                         if ($conn->connect_error) {
                           die("Connection failed: " . $conn->connect_error);
                       }
                     // Fetch data from the 'review' table
                       $sql = "SELECT * FROM `testimonial` ORDER BY date DESC LIMIT 2";
                       $result = $conn->query($sql); 
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Display each row of data
                               ?>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"></h6></td>
                                    <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1"><?php echo  $row['date'];  ?></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1"><?php echo  $row['name'];  ?></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <textarea class="fw-semibold mb-1 w-100"><?php echo  $row['review'];  ?></textarea>
                                </td>
                                <td class="border-bottom-0">
                                      <a href="edit.php/?id=<?php echo $row['id']; ?>" name='update' type="submit" title="edit">edit</a>
                                      <a href="" title="delete">delete</i></a>
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

