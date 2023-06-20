<?php 
// Connect to the database
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "dafy"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
                      <table class="table text-nowrap mb-0 align-middle" id="data-table">
                        <thead class="text-dark fs-4">
                       
                            </tr>
                            <tr>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Name</h6>
                            </th>
                         
                          </tr>
                        </thead>
                        <tbody>
                           <?php  
                                 $sql = "SELECT * FROM customer";

                                  $result = mysqli_query($conn,$sql); 

                                  if (mysqli_num_rows($result)> 0) {
                                while ($row=mysqli_fetch_array($result)) {
                                    // Display each row of data?>
                                   
                                  <tr>
                                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $row['id']; ?></h6></td>
                                    <td class="border-bottom-0"><h6 class="fw-semibold mb-1"><?php echo  $row['name'];  ?></h6></td>
                                    
                                  </tr> 
                                    <?php
                                  }
                                } else {
                                  echo '<tr><td colspan="12">No data found.</td></tr>';
                              }?>             
                        </tbody>
                      </table>
                      
                    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
   integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>