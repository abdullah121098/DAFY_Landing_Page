<?php
require_once 'header.php';
include '../database/connection.php';

?>
<div class="container-fluid">
<!--  Row 1 -->
<div class="row">
    <div class="col-lg-100 d-flex align-items-center">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Profile</h5>
                <form method="POST" action="../database/profile_add.php"  enctype="multipart/form-data"  onsubmit="showConfirmation()">
                    <div class="row">
                        <div class="col-10">
                        <div class="form-group">
                                    <label class="form-label">Name</label><br>
                                    <input class="form-control" type="text" name="t-name" required>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                    <label class="form-label">Date</label><br>
                                    <input class="form-control" type="text" name="t-date" required>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                    <label class="form-label">Address</label><br>
                                    <input class="form-control" type="text" name="t-address" required>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label class="form-label"> Date </label><br>
                                <input class="form-control" type="datetime-local"  name="t-date" required>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label class="form-label">Photo</label><br>
                                <input type="file" name="t-img" id="Upload" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="form-btn">
                            <button type="submit" class="submit-btn rounded-pill btn btn-warning text-black m-3" name="t_addData">Add New </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Row 2 -->

<div class="container-fluid"> 
<?php
    if (isset($_GET['id'])) {
    $editId = $_GET['id'];

    if (isset($_POST['update'])) {
        $date = $_POST['t-date'];
        $position = $_POST['t-position'];
        $name = $_POST['t-name'];
        $photo = $_FILES['t-photo']['name'];
        $pass = $_POST['t-pass'];
        $passcon = $_POST['t-passcon'];
        // Upload the photo file to the desired location
        move_uploaded_file($_FILES['t-photo']['tmp_name'], '../assets/images/profile/' . $photo);

        $up = mysqli_query($conn, "UPDATE `admin`SET `a_date`='$date', `a_name`='$name', `a_position`='$position', 
        `a_img`='$photo',`password`=' $pass',`password`='$passcon' WHERE sno=$editId");

        if ($up) {
            echo '<script>alert("Update Successful");</script>';
            
            exit();
        } else {
            echo 'Failed';
        }
    } elseif (isset($_POST['delete'])) {
        $editId = $_GET['id'];

        // Retrieve the file name from the database before deleting the row
        $fileResult = mysqli_query($conn, "SELECT `a_img` FROM `admin` WHERE sno=$editId");
        if (mysqli_num_rows($fileResult) > 0) {
            $fileRow = mysqli_fetch_assoc($fileResult);
            $fileName = $fileRow['a_img'];

            // Delete the file from the directory
            $filePath = 'assets/images/profile/' . $fileName;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $del = mysqli_query($conn, "DELETE FROM `admin` WHERE `sno`=$editId");
        if ($del) {
            echo '<script>alert("Delete Successful");</script>';
           
            exit();
        } else {
            echo 'Failed';
        }
    }

    $sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `sno`=$editId");

    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
?>
            <div class="row">
                <div class="col-lg-100 d-flex align-items-center">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Team Detail</h5>
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table text-nowrap mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Id</h6>
                                                </th><td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 col-6" name="t-id"><?php echo $row['sno']; ?></h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Date</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                    <input class="fw-semibold col-6" type="datetime-local" name="t-date" value="<?php echo $row['a_date']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Name</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                    <input type="text" class="fw-semibold col-6" name="t-name" value="<?php echo $row['a_name']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Designation</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                    <input type="text" class="fw-semibold col-6" name="t-position" value="<?php echo $row['a_position']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Photo</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                    <img class="fw-semibold" src="../assets/images/profile/<?php echo $row['a_img']; ?>" width="70" height="90">
                                                    <input type="file" name="t-photo" id="upload" class="col-6">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Password</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                    <input type="password" class="fw-semibold col-6" name="t-pass" value="<?php echo $row['password']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Password Confirm</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                    <input type="password" class="fw-semibold col-6" name="t-passcon" value="<?php echo $row['password_confirm']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Action</h6>
                                                </th>
                                                <td class="border-bottom-0">
                                                <button type="submit" name="update" class="fw-semibold mb-1 px-3 py-2 btn btn-primary rounded-pill text-black">
                                                    <i class="fa-solid fa-pen-to-square m-2"></i></button>
                                                    <button type="submit" name="delete" class="fw-semibold mb-1 px-3 py-2 btn btn-primary rounded-pill text-black">
                                                        <i class="fa-solid fa-trash m-2"></i></button>
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
    $sq = mysqli_query($conn, "SELECT * FROM `admin`");
    $res = mysqli_num_rows($sq);

    $rowsPerPage = 5; // Number of rows to display per page
    $totalRows = $res; // Total number of rows in the table

    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

    $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index

    $end = $start + $rowsPerPage; // Calculate the ending row index

    // Fetch data from the 'review' table
    $sql = "SELECT * FROM `admin` ORDER BY sno DESC LIMIT $start, $rowsPerPage";
    $result = $conn->query($sql);

    $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
?>
    <!-- Row 3 -->
    <div class="row">
        <div class="col-lg-100 d-flex align-items-center">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 text-center">Team  Member List</h5>
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
                                            <h6 class="fw-semibold mb-0">Designation</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Photo</h6>
                                        </th>
                                        <!-- <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Password</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Confirm Password</h6>
                                        </th> -->
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                <?php
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            // Display each row of data
                                                ?>
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-0"><?php echo $index++; ?></h6></td>
                                                                <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo $row['a_date']; ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo $row['a_name']; ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo $row['a_position']; ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <img class="fw-semibold mb-1" src="../assets/images/profile/<?php echo $row['a_img']; ?>"
                                                                width="70" height="90">
                                                            </td>
                                                            <!-- <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo $row['password']; ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1"><?php echo $row['password_confirm']; ?></h6>
                                                            </td> -->
                                                            <td class="border-bottom-0">
                                                                <a href="?id=<?php echo $row['sno']; ?>" name='edit' class="btn btn-primary text-black">
                                                                <i class="fa-sharp fa-solid fa-eye eye" ></i></a>
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
                                    <?php endif; if ($end < $totalRows): ?>
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
<?php } ?>
</div>

<script>function showConfirmation() { alert("Confirm booking"); return true; } </script>
<style>.page-link{ background: black; font-style: bold; color: white; }</style>
<?php require_once 'footer.php'; ?>