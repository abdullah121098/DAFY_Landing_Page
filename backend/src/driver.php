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

 $end = $start + $rowsPerPage; // Calculate the ending row index
 
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
                              <td><?php echo $index++;?></td>
                              <td>
                                <img src="../assets/images/team/<?php echo $views['d_img'];?>" class="me-2 rounded-pill" alt="image" width="60"/> 
                              </td>
                              <td>  
                                <label><?php echo $views['d_name'];?></label> 
                              </td>
                              <td><label  maxlength="10">+91-<?php echo $views['d_mobile'];?></label> </td>
                              <td>
                                <div class="d-flex">
                                  <span class="pe-2 d-flex align-items-center">453</span>
                                </div>
                              </td>
                              <td><input type="text" name="status" id="" value="<?php echo $views['d_status'];?>"></td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <a class="btn btn-primary" href="?id=<?php// echo $views['d_id']; ?>&action=edit" name="update"> -->
                                  <a class="btn btn-primary" href="?id=<?php echo $views['d_id']; ?>&action=edit" name="update">
                                    <i class="fa-solid fa-pen-to-square fs-2"></i>
                                  </a>
                                  <a class="btn btn-primary" href="?id=<?php echo $views['d_id']; ?>&action=delete" name="delete">
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
<?php
if (isset($_GET['id'])) {
    $editId = $_GET['id'];

    if (isset($_GET['action']) && $_GET['action'] == 'edit') {
        $c = $_POST['status'];
        if (isset($_POST['update'])) {
            $up = mysqli_query($conn, "UPDATE `driver` SET `d_status`='$c' WHERE d_id = $editId");

            if ($up) {
                echo '<script>alert("Update Successful");</script>';
            } else {
                echo '<script>alert("Update failed");</script>';
            }
        }
    } elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
        if (isset($_POST['delete'])) {
            $del = mysqli_query($conn, "DELETE FROM `driver` WHERE `d_id`= $editId");

            if ($del) {
                echo '<script>alert("Delete Successful");</script>';
            } else {
                echo '<script>alert("Delete failed");</script>';
            }
        }
    }
}
?>


<?php require_once 'footer.php'; ?>