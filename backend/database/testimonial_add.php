
<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['r-name'];
  $date = $_POST['r-date'];
  $review = $_POST['r-review'];
  
//   if (isset($_POST['addData'])) {
//     // $currentDateTime = date('Y-m-d H:i');
//     $stmt = $conn->prepare("INSERT INTO testimonial (date, name, review) VALUES ( (?,?,?)");
//     $stmt->bind_param("sss", $name,$date, $review);
//   }else{
//     echo " faled Insert";
//   }
  
//   // Execute the prepared statement
//   $stmt->execute();
//   $stmt->close();
// }
if (isset($_POST['addData'])) {
  $stmt = $conn->prepare("INSERT INTO testimonial (date, name, review) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $date, $name, $review);
  
  // Execute the prepared statement
  if ($stmt->execute()) {
    echo "Data inserted successfully.";
  } else {
    echo "Failed to insert data.";
  }
  
  $stmt->close();
} else {
  echo "Failed to insert data.";
}
}
$conn->close();
// Redirect back to the booking page
header("Location:../testimonial.php");
exit();
?>
