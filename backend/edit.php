<?php
include 'database/connection.php';

$test_id=$_GET['id'];
// echo $test_id;


$select="SELECT * FROM `testimonial` WHERE id= $test_id";

$sql=mysqli_query($conn,$select);
// $fetch=mysqli_fetch_array($data);

// print_r( $fetch);
?>
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
                    //    $sql = "SELECT * FROM `testimonial` ORDER BY date DESC LIMIT 2";
                    //    $result = $conn->query($sql); 
                          if ($sql->num_rows > 0) {
                            while ($row = $sql->fetch_array()) {
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