<?php 
include 'header.php';

include 'database/connection.php';
?>
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
            <?php
                if (isset($_GET['id'])) {  $g_id = $_GET['id'];

                if (isset($_POST['update'])) {
                    $a = $_POST['t-name'];
                    $b = $_POST['t-date'];
                    $c = $_POST['t-review'];
                    $up = mysqli_query($conn, "UPDATE `testimonial` SET `date`='$b',`name`='$a',`review`='$c' WHERE id = $g_id");

                    if ($up) {
                        echo '<script>alert("Confirm booking");</script>';
                        header("Location:testimonial.php");
                        exit();
                    } else { echo 'Update failed'; }
                } elseif (isset($_POST['delete'])) { $delete = mysqli_query($conn, "DELETE FROM `testimonial` WHERE id = $g_id");
                    if ($delete) {
                        echo '<script>alert("Confirm booking");</script>';
                        header("Location:testimonial.php");
                        exit();
                    } else {
                        echo 'Delete failed'; } 
                }

                $sql = mysqli_query($conn, "SELECT * FROM `testimonial` WHERE id=$g_id");

                if (mysqli_num_rows($sql) > 0) {
                    while ($row = mysqli_fetch_assoc($sql)) {
            ?>
    <div class="row">
        <div class="col-lg-100 d-flex align-items-center">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Testimonial Detail</h5>
                    <div class="table-responsive">
                        <form method="post">
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
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="datetime" class="fw-semibold mb-1" value="<?php echo $row['date']; ?>" name="t-date">
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="text" class="fw-semibold mb-1" value="<?php echo $row['name']; ?>" name="t-name">
                                        </td>
                                        <td class="border-bottom-0">
                                            <textarea class="fw-semibold mb-1 w-100 h-100"  rows="6" cols="50" name="t-review"><?php echo $row['review']; ?></textarea>
                                        </td>
                                        <td class="border-bottom-0">
                                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                                            <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php
                    }
                } else {
                    echo '<div class="row"><div class="col-lg-100 d-flex align-items-center"><div class="card w-100"><div class="card-body p-4"><p>No data found.</p></div></div></div></div>';
                }
            } else {
                $rowsPerPage = 3; // Number of rows to display per page
                $sql = mysqli_query($conn, "SELECT * FROM `testimonial`");
                $totalRows = mysqli_num_rows($sql); // Total number of rows in the table

                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
                $end = $start + $rowsPerPage; // Calculate the ending row index

                $sql = mysqli_query($conn, "SELECT * FROM `testimonial` ORDER BY id DESC, Date DESC LIMIT $start,$rowsPerPage");
                $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
            ?>
         <!--  Row 3 -->
    <div class="row">
        <div class="col-lg-100 d-flex align-items-center">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Testimonial Detail</h5>
                    <div class="table-responsive">
                        <form method="post">
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
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                    <?php
                                                        if (mysqli_num_rows($sql) > 0) {
                                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                    ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?php echo $index++; ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?php echo $row['date']; ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?php echo $row['name']; ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <textarea class="fw-semibold mb-1 w-100 h-100"><?php echo $row['review']; ?></textarea>
                                        </td>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a href="?id=<?php echo $row['id']; ?>" name='edit' title="edit">edit</a>
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
                                <nav aria-label="Page navigation example" >
                                    <ul class="pagination justify-content-end left" style="position: relative;border-box: 500px;">
                                        <?php if ($page > 1): ?>
                                        <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span></a></li>
                                        <?php endif; ?>
                                        <?php if ($end < $totalRows): ?>
                                        <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                        </form>
                    </div>
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

    
        <!-- ================================================== Footer  =======================================-->
                        <script>
                            function showConfirmation() {
                                alert("Confirm booking");
                                return true; // Allow the form submission to proceed
                            }
                        </script>                
<?php } include 'footer.php'; ?>