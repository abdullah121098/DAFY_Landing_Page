<?php 
include '../database/connection.php'; 
require_once "header.php"; ?>

<?php
 $sq = mysqli_query($conn, "SELECT * FROM team");
 $res = mysqli_num_rows($sq);

 $rowsPerPage = 10; // Number of rows to display per page
 $totalRows = $res; // Total number of rows in the table

 $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

 $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index

 $end = $start + $rowsPerPage; // Calculate the ending row index `driver_name`=
 
 $sql = "SELECT * FROM  `driver` ORDER BY d_id DESC LIMIT $start, $rowsPerPage";
 $result = $conn->query($sql);

  $index = ($page - 1) * $rowsPerPage + 1;

?>
<!-- ============== ==================== Main -Body Start- ======================================================================= -->
<div class="container-fluid">
        <!--  Row 1 -->
              <div class="col-xl-10 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title text-center">Driver Profiles</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <form method="POST">
                        <table class="table custom-table text-dark">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>profile</th>
                              <th>Name</th>
                              <th>Mobile</th>
                              <th>Ride Complete</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <?php if ($result->num_rows > 0) { while ($views = $result->fetch_assoc()) { ?>
                          <tbody>
                            <tr>
                              <td><h5><?php echo $index++;?></h5></td>
                              <td>
                                <img src="../assets/images/team/<?php echo $views['d_img'];?>" class="me-2 rounded-pill" alt="image" width="60"/> 
                              </td>
                              <td>  
                                <h5><?php echo $views['d_name'];?></h5> 
                              </td>
                              <td><h5>+91-<?php echo $views['d_mobile'];?></h5> </td>
                              <td>
                                <div class="d-flex">
                                  <span class="pe-2 d-flex align-items-center">10</span>
                                </div>
                              </td>
                              <td><h5><?php echo $views['d_status'];?></h5></td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <a class="btn btn-primary" href="?id=<?php// echo $views['d_id']; ?>&action=edit" name="update"> -->
                                  <a class="btn btn-primary" href="?id=<?php echo $views['d_id']; ?>" name="update">
                                    <i class="fa-solid fa-pen-to-square fs-2"></i>
                                  </a>
                                  <a class="btn btn-primary" href="?id=<?php echo $views['d_id']; ?>" name="delete">
                                    <i class="fa-solid fa-trash fs-2"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                          <?php   } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>
                        </table>
                      </form>
                    </div>
                    <!-- <a class="text-black d-block ps-4 pt-2 pb-2 pb-lg-0 font-13 font-weight-bold" href="#">Show more</a> -->
                              <nav aria-label="Page navigation example" >
                                <ul class="pagination justify-content-end left" style="position: relative;border-box: 500px;">
                                    <?php if ($page > 1): ?>
                                    <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span></a></li>
                                    <?php endif; if ($end < $totalRows): ?>
                                    <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span></a></li>
                                    <?php endif; ?>
                                </ul>
                              </nav>
                  </div>
                </div>
              </div>
                    <!--  Row 2 -->
                  <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM `driver` WHERE `d_id` = $id";
                            $result = $conn->query($sql);
                        }

                        if (isset($_POST['update'])) {
                          
                            $ride = $_POST['ride'];
                            $sat = $_POST['status'];

                            $drive_up = "UPDATE `driver` SET `d_status` = '$sat', `d_complete` = '$ride' WHERE `d_id` = '$id'";
                            $up = mysqli_query($conn, $drive_up);
                            if ($up) {
                                echo '<script>alert("Successful");</script>';
                            } else {
                                echo '<script>alert("Failed");</script>';
                            }
                        }
                      if ($result->num_rows > 0) { while ($views = $result->fetch_assoc()) { ?>
              <div class="col-xl-10 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title text-center">Profiles</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <form method="POST">
                          <!-- <table class="table custom-table text-dark">
                            <thead class="text-dark fs-4">
                              <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">profile</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Mobile</th>
                                <th class="border-bottom-0">Ride Complete</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><label for="" name="up_id"><?php echo $id;?></label></td>
                                <td><input type="file" name="load" /></td> 
                                <!-- <td><img src="../assets/images/team/<?php echo $views['d_img'];?>" class="me-2 rounded-pill" alt="image" width="60"/> </td> 
                                <td>  
                                  <input type="text" class="fw-semibold mb-1" name="name" value="<?php echo $views['d_name'];?>" /> 
                                </td>
                                <td><input type="tel" class="fw-semibold mb-1" name="mobile" maxlength="10" value="<?php echo $views['d_mobile'];?>" /></td>
                                <td>
                                  <div class="d-flex">
                                  <input type="text" class="fw-semibold mb-1" name="ride" value="<?php echo $views['d_complete'];?>"/>
                                  </div>
                                </td>
                                <td><input type="text" name="status" id="" value="<?php echo $views['d_status'];?>">
                                </td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <!-- <a class="btn btn-primary" href="?id=<?php// echo $views['d_id']; ?>&action=edit" name="update"> 
                                    <button type="submit" class="btn btn-primary" name="update">
                                                      <i class="fa-solid fa-pen-to-square fs-2"></i>
                                                  </button>
                                    <!-- <a class="btn btn-primary" href="?id=<?php echo $views['d_id']; ?>" name="delete">
                                      <i class="fa-solid fa-trash fs-2"></i>
                                    </a> 
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          
                          </table> -->
                      </form>
                      
                    </div>
                  
                  </div>
                </div>
              </div>            
              <?php   } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>         
        <!-- ========= Script =========== -->
        <style>.page-link{ background: black; font-style: bold; color: white; }</style>

    <!-- <script>function showConfirmation() { alert("Confirm booking");return true; } </script> -->

        <style>.eye { position: relative; } .hide { display: none; }</style>

    <script>
        function togglePasswordVisibility(inputId, eyeId) {
            var input = document.getElementById(inputId);
            var eye = document.getElementById(eyeId);
            var showEye = document.getElementById('show' + eyeId.slice(3));
            var hideEye = document.getElementById('hide' + eyeId.slice(3));

            if (input.type === 'password') {
            input.type = 'text';
            eye.classList.add('hide-icon');
            hideEye.style.display = 'block';
            } else {
            input.type = 'password';
            eye.classList.remove('hide-icon');
            showEye.style.display = 'block';
            }
        }
    </script>
</div>



<?php require_once 'footer.php'; ?>