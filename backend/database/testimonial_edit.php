<?php 

include 'connection.php'; 


$g_id=$_GET['id'];
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
                                            <?php
                                                    // Fetch data from the 'review' table
                                                    $sql =mysqli_query($conn,"SELECT * FROM `testimonial`Where id=$g_id");
                                                    
                                                        if (mysqli_num_rows($sql) > 0) {
                                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                                // Display each row of data
                                                ?>
                                                <tr>
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0"></h6></td>
                                                        <td class="border-bottom-0">
                                                        <input type="datetime" class="fw-semibold mb-1"value=" <?php echo  $row['date'];  ?>" name="t-date">
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <input type="text" class="fw-semibold mb-1" value=" <?php echo  $row['name'];  ?>" name="t-name">
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <textarea class="fw-semibold mb-1 w-100 h-50" name="t-review"><?php echo  $row['review'];  ?></textarea>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                    <button type="submit" class="btn btn-primary" name="update">update</button>
                                                    <button type="submit" class="btn btn-primary" name="delete">delete</button>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- ================================================== Footer  =======================================-->
            <?php             
                if(isset($_POST['update'])){
                    $a = $_POST['t-name'];
                    $b = $_POST['t-date'];
                    $c=$_POST['t-review'];
                    $up = mysqli_query($conn,"UPDATE `testimonial` SET `date`=$b,`name`=$a,`review`=$c WHERE id = $g_id");

                   
                    if($up) {
                        echo 'Update successful';
                    } else {
                        echo 'Update failed';
                    }
                }

                if(isset($_POST['delete'])){
                    
                    $delete =mysqli_query($conn, "DELETE FROM `testimonial` WHERE id = $g_id");
                    if($delete) {
                        // header("Location:testimonial.php");
                        echo 'delete successful';
                    } else {
                        echo 'delete failed';
                    }
                }
            ?>