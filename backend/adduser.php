<?php
require_once 'header.php';
include 'database/connection.php';

?>
<div class="container-fluid">
<!--  Row 1 -->
<div class="row">
    <div class="col-lg-100 d-flex align-items-center">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Profile</h5>
                <form method="POST" action="database/profile_add.php"  enctype="multipart/form-data"  onsubmit="showConfirmation()">
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
                            <button type="submit" class="submit-btn rounded-pill text-center bg-warning w-100" name="t_addData">Add New </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Row 2 -->


<?php
if (isset($_GET['id'])) {
    $editId = $_GET['id'];

    if (isset($_POST['update'])) {
        $date = $_POST['a-date'];
        $address = $_POST['a-address'];
        $mobile = $_POST['a-mobile'];
        $name = $_POST['a-name'];
        $mail=$_POST['a-email'];
        $pass = $_POST['a-pass'];
        $conpass = $_POST['a-conpass'];
        $photo = $_FILES['a-photo']['name'];

        // Upload the photo file to the desired location
        move_uploaded_file($_FILES['a-photo']['tmp_name'], 'assets/images/profile/' . $photo);

        $up = mysqli_query($conn, "UPDATE `admin` SET `a_name`='$name', `a_mobile`='$mobile', `a_mail`='$mail', `a_position`='$address', `a_img`='$photo',
        `a_date`='$date', `password`='$pass', `password_confirm`='$conpass' WHERE `sno`='$editId'");

        if ($up) {
            echo '<script>alert("Update Successful");</script>';
            // Redirect back to the booking page
            header("Location:adduser.php");
            exit();
        } else {
            echo 'Failed';
        }
    } elseif (isset($_POST['delete'])) {
        $editId = $_GET['id'];

        // Retrieve the file name from the database before deleting the row
        $fileResult = mysqli_query($conn, "SELECT `a_img` FROM `team` WHERE id=$editId");
        if (mysqli_num_rows($fileResult) > 0) {
            $fileRow = mysqli_fetch_assoc($fileResult);
            $fileName = $fileRow['a_img'];

            // Delete the file from the directory
            $filePath = 'assets/images/team/' . $fileName;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $del = mysqli_query($conn, "DELETE FROM `team` WHERE id=$editId");
        if ($del) {
            echo '<script>alert("Delete Successful");</script>';
           // Redirect back to the booking page
            header("Location:adduser.php");
            exit();
        } else {
            echo 'Failed';
        }
    }

    $sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE `sno`=$editId");

    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
?>
     <div class="row justify-content-center">
        <div class="col-lg-10 d-flex align-items-center">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 text-center">Team Profile</h5>
                    <div class="table-responsive">
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Name</label><br>
                                    <input class="form-control bg-warning text-black" type="text" name="a-name" value="<?php echo $row['a_name']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">E-mail</label><br>
                                    <input class="form-control bg-warning text-black" type="text" name="a-email" value="<?php echo $row['a_mail']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label><br>
                                    <input class="form-control bg-warning text-black" type="text" name="a-mobile" value="<?php echo $row['a_mobile']; ?>" maxlength="10">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Address</label><br>
                                    <input class="form-control bg-warning text-black" type="text" name="a-address" value="<?php echo $row['a_position']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label><br>
                                    <input class="form-control bg-warning text-black" type="datetime-local" name="a-date" value="<?php echo $row['a_date']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Photo</label><br>
                                    <img class="fw-semibold" src="assets/images/team/<?php echo $row['a_img']; ?>" width="100" height="100">
                                    <input type="file" name="a-photo" id="upload" class="form-control bg-warning text-black" value="<?php echo $row['a_img']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label><br>
                                    <input class="form-control bg-warning text-black" type="text" name="a-pass" value="<?php echo $row['password']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label><br>
                                    <input class="form-control bg-warning text-black" type="text" name="a-conpass" value="<?php echo $row['password_confirm']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group ">
                                    <input type="submit" class="btn btn-primary update" name="update" value="Save">
                                    <input type="submit" class="btn btn-primary delete" name="delete" value="Delete">
                                </div>
                            </div>
                            <style> .update, .delete{ color:black; width:15%; height:5%; position: center;} </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
        }
    } else {
        echo '<div class="row"><div class="col-lg-10 d-flex align-items-center"><div class="card w-100"><div class="card-body p-4"><p>No data found.</p></div></div></div></div>';
    }
    } else {
    $sql = mysqli_query($conn, "SELECT * FROM `admin`");
    $result = mysqli_num_rows($sql);

    $rowsPerPage = 3; // Number of rows to display per page
    $totalRows = $result; // Total number of rows in the table

    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

    $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index

    $end = $start + $rowsPerPage; // Calculate the ending row index

    // Fetch data from the 'review' table
    $sql = "SELECT * FROM `admin` ORDER BY `sno` DESC LIMIT $start, $rowsPerPage";
    $result = $conn->query($sql);

    $index = ($page - 1) * $rowsPerPage + 1; // Calculate the starting index for the current page
?>
    <!-- Row 3 -->
    <div class="row justify-content-center">
        <div class="col-lg-10 d-flex align-items-center">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Team Profile</h5>
                    <div class="table-responsive">
                        <form method="post">
                            <table class="table texa-nowrap mb-0 align-middle">
                                <thead class="texa-dark fs-4">
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
                                            <h6 class="fw-semibold mb-0">Mobile</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Email</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Address</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Photo</h6>
                                        </th>
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
                                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $index++; ?></h6></td>
                                                <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo $row['a_date']; ?></h6></td>
                                                <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo $row['a_name']; ?></h6></td>
                                                <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo $row['a_mobile']; ?></h6></td>
                                                <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo $row['a_mail']; ?></h6></td>
                                                <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo $row['a_position']; ?></h6></td>
                                                <td class="border-bottom-0"><img class="fw-semibold mb-1" src="assets/images/team/<?php echo $row['a_img']; ?>" width="70" height="90"></td>
                                                <td class="border-bottom-0"><a href="?id=<?php echo $row['sno']; ?>" name='edit' title="Edit">Edit</a></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="12">No data found.</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-contena-end left" style="position: relative;border-box: 500px;">
                                        <?php if ($page > 1): ?>
                                            <li class="page-item"><a href="?page=<?php echo ($page - 1); ?>" class="page-link rounded-pill py-2 px-3"><i class="fas fa-angle-double-left"></i></a></li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= ceil($totalRows / $rowsPerPage); $i++): ?>
                                            <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>"><a href="?page=<?php echo $i; ?>" class="page-link rounded-pill py-2 px-3"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>
                                        <?php if ($page < ceil($totalRows / $rowsPerPage)): ?>
                                            <li class="page-item"><a href="?page=<?php echo ($page + 1); ?>" class="page-link rounded-pill py-2 px-3"><i class="fas fa-angle-double-right"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
</div>

<script>function showConfirmation() { alert("Confirm booking");return true; } </script>
<style>.page-link{ background: black; font-style: bold; color: white; }</style>
<?php
require_once 'footer.php';
?>