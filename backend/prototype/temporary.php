
<?php 
// include '../database/connection.php'; 
//     $comp = "SELECT * FROM `complete_ride` WHERE `status`= 'Complete'";
//     $ride = mysqli_query($conn,$comp);
//    if($no= mysqli_num_rows($ride)>0){
//    while( $now=mysqli_fetch_assoc($ride)){
//     echo $no . $now['driver_name'];
//     }
// }
?>
<?php 
include '../database/connection.php'; 

$sq = mysqli_query($conn, "SELECT * FROM team");
$res = mysqli_num_rows($sq);

$rowsPerPage = 10; // Number of rows to display per page
$totalRows = $res; // Total number of rows in the table

$page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
$start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
$end = $start + $rowsPerPage; // Calculate the ending row index

$sql = "SELECT d.*, COUNT(cr.ride_id) AS completed_rides
        FROM driver AS d
        LEFT JOIN complete_ride AS cr ON d.d_name = cr.driver_name
        GROUP BY d.d_id
        ORDER BY d.d_id DESC
        LIMIT $start, $rowsPerPage";
$result = $conn->query($sql);

$index = ($page - 1) * $rowsPerPage + 1;
?>

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
                  <label name="name"><?php echo $views['d_name'];?></label> 
                </td>
                <td>
                  <label maxlength="10">+91-<?php echo $views['d_mobile'];?></label>
                </td>
                <td>
                  <?php
                    $driverId = $views['d_name'];
                    $comp = "SELECT * FROM `complete_ride` WHERE `status` = 'Complete' AND `driver_name` = $driverId";
                    $ride = mysqli_query($conn, $comp);
                    $no = mysqli_num_rows($ride);
                    if ($no > 0) {
                      echo $no;
                    }
                  ?>
                </td>
                <td>
                  <input type="text" name="status" id="" value="<?php echo $views['d_status'];?>">
                </td>
                <td>
                  <div class="d-flex align-items-center gap-2">
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
            <?php } } else { echo '<tr><td colspan="12">No data found.</td></tr>'; } ?>
          </table>
        </form>
      </div>
      <nav aria-label="Page navigation example">
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
